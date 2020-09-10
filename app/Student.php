<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'Student_name',
        'Course',
        'Branch',
        'Email',
        'Roll_number',
        'Date_of_Birth',
        'Subjects'

    ]
}
