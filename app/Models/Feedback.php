<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    /** @use HasFactory<\Database\Factories\FeedbackFactory> */
    use HasFactory;

    protected $table = 'feedbacks'; // Of gebruik 'feedbacks' als dat de tabelnaam is
    protected $fillable = [

        'PatientId',
        'Rating',
        'PracticeEmail',
        'PracticePhone'
    ];

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class, 'PatientId');
    }
}
