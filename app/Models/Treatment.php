<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;

    protected $fillable = [
        'EmployeeId',
        'PatientId',
        'Date',
        'Time',
        'treatmentType',
        'description',
        'cost',
        'Status',
         
    ];

    protected $table = 'Treatment';
}
