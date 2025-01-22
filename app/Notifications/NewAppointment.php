<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewAppointment extends Notification implements ShouldQueue
{
    use Queueable;

    protected $appointmentDetails;

    public function __construct($appointmentDetails)
    {
        $this->appointmentDetails = $appointmentDetails;
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('You have a new appointment.')
                    ->line('Details: ' . $this->appointmentDetails)
                    ->action('View Appointment', url('/appointments'))
                    ->line('Thank you for using our application!');
    }

    public function toArray(object $notifiable): array
    {
        return [
            'appointment_details' => $this->appointmentDetails,
            'appointment_date' => '2025-01-01', // Voorbeelddatum, pas aan
        ];
    }
}
