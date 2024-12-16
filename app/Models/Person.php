<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    protected $fillable = [
        'FirstName',
        'MiddleName',
        'LastName',
        'DateOfBirth',
        'IsActive',
        'note',
    ];
}
