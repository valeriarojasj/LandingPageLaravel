<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobOpening extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_status',
        'job_title',
        'company_type',
        'job_location',
        'job_link',
        'open_question_1',
        'open_question_2',
        'multiple_choice_question_1',
        'multiple_choice1_option_1',
        'multiple_choice1_option_2',
        'multiple_choice1_option_3',
        'multiple_choice_question_2',
        'multiple_choice2_option_1',
        'multiple_choice2_option_2',
        'multiple_choice2_option_3',
        'checkbox_question_1',
        'checkbox1_option_1',
        'checkbox1_option_2',
        'checkbox1_option_3',
        'checkbox_question_2',
        'checkbox2_option_1',
        'checkbox2_option_2',
        'checkbox2_option_3'
    ];
    
}
