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

    /**
    * Defineert een relatie tussen dit model en het `Patient`-model.
    * Deze methode geeft aan dat elk exemplaar van dit model 
    * (bijvoorbeeld een afspraak of een dossier) behoort tot een specifieke patiënt.
    * De relatie gebruikt de `PatientId`-kolom als buitenlandse sleutel.
    */

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'PatientId');
    }

    /**
    * Defineert een relatie tussen dit model en het `Employee`-model.
    * Deze methode geeft aan dat elk exemplaar van dit model 
    * (bijvoorbeeld een afspraak of een taak) behoort tot een specifieke medewerker.
    * De relatie gebruikt de `EmployeeId`-kolom als buitenlandse sleutel.
    */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'EmployeeId');
    }

// test
}
