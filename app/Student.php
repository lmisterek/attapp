<?php

namespace Attapp;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=[
        'id',
        'student_last_name',
        'student_first_name',
        'email'
    ];

     public $timestamps = false;
}

//in model
