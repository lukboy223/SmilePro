<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'person'; // Specify the table name

    protected $fillable = [
        'FirstName',
        'MiddleName',
        'LastName',
        'DateOfBirth',
        'UserId', // Add UserId to fillable if it is being used
        // Add other fields that you want to be mass-assignable
    ];
}