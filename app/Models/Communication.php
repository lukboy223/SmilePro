<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Communication extends Model
{
    /** @use HasFactory<\Database\Factories\CommunicationFactory> */
    use HasFactory;

    protected $fillable = [

        'PatientId',
        'EmployeeId',
        'Message',
        'SentDate'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'PatientId');
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'EmployeeId');
    }
}
