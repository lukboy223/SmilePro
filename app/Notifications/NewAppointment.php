<?php

namespace App\Notifications;

use App\Models\Appointment;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Str;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewAppointment extends Notification
{
    use Queueable;

    protected Appointment $appointment;

    /**
     * Create a new notification instance.
     */
    public function __construct(Appointment $appointment)
    {
        $this->appointment = $appointment;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('You have a new appointment.')
                    ->action('View Appointment', url('/appointments'))
                    ->subject("New Appointment from {$this->appointment->patient->name}")
                    ->greeting("New Appointment from {$this->appointment->patient->name}")
                    ->line(Str::limit($this->appointment->message, 50))
                    ->action('Go to Appointmenter', url('/appointments'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'appointment_message' => $this->appointment->message,
            'appointment_date' => $this->appointment->date,
        ];
    }

    public function toDatabase(object $notifiable)
{
    return [
        'message' => 'A new appointment has been created!',
        'appointment_id' => $this->appointment->id,
    ];
}

}
