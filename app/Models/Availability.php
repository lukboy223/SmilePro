<?php

namespace App\Models;

use App\Models\Availability;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Availability extends Model
{
    /** @use HasFactory<\Database\Factories\AvailabilityFactory> */
    use HasFactory;

    protected $fillable = [

        'EmployeeId',
        'FormDate',
        'ToDate',
        'FormTime',
        'ToTime',
        'Status'
    ];

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'EmployeeId');
    }
}
