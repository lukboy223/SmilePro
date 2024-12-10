<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


// Deze class definieert het 'Communication'-model dat wordt gebruikt
// om communicatiegegevens te beheren in de database.
class Communication extends Model
{
    /** @use HasFactory<\Database\Factories\CommunicationFactory> */
    use HasFactory;

    // Hier worden de velden gedefinieerd die massaal ingevuld mogen worden.
    // Dit voorkomt mass assignment vulnerabilities.
    protected $fillable = [

        'PatientId',
        'EmployeeId',
        'Message',
        'SentDate'
    ];

    // Definieert een relatie waarin communicatie toebehoort aan een medewerker.
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'EmployeeId');
    }

    // Definieert een relatie waarin communicatie toebehoort aan een patiënt.
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class, 'PatientId');
    }
}
