<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $table = 'patient'; // Specify the table name

    public function person()
    {
        return $this->belongsTo(Person::class, 'PersonId');
    }

    protected $fillable = [
        'PersonId',
        'Number',
        'MedicalRecord',

        // Add other fields that you want to be mass-assignable
    ];
}