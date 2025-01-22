<?php

namespace App\Models;

use App\Events\AppointmentCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
    ];

    protected $dispatchesEvents = [
        'created' => AppointmentCreated::class,
    ];

    /**
     * Define the relationship with the User model.
     * Assuming an appointment is related to a user (e.g., a doctor or admin).
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Define the relationship with the Patient model (if needed).
     */
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
}
