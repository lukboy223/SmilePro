<?php

namespace App\Listeners;

use App\Events\AppointmentCreated;
use App\Models\patient;
use App\Notifications\NewAppointment;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendAppointmentCreatedNotifications implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(AppointmentCreated $event): void
    {
        // Iterate through all patients except the one who created the appointment
        foreach (patient::where('id', '!=', $event->appointment->patient_id)->cursor() as $patient) {
            $patient->notify(new NewAppointment($event->appointment));
        }
    }
}
