<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class person extends Model
{
    use HasFactory;

    protected $table = 'persons'; // Specify the table name

    // Define other model properties and methods as needed 
}
