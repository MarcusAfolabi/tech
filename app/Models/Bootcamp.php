<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bootcamp extends Model
{
    use HasFactory;
    protected $fillable = [
        'registered_for',
        'motivation',
        'goals',
        'prior_experience',
        'proficiency',
        'expectation',
        'previous_work',
        'commit_hour',
        'job_title',
        'work_experience',
        'education_level',
        'study_field',
        'name',
        'email',
        'phone',
        'location',
    ];

    protected $table = 'bootcamps';
}
