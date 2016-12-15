<?php

namespace Attapp;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=[
        'student_last_name',
        'student_first_name',
        'email',
        'course_code',
    ];

     public $timestamps = false;
}

//in model
