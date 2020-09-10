<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'Student_name'=>$faker->company,
        'Course'=>$faker->
        
    ];
});


// $table->increments('id');
//             $table->string('Student_name');
//             $table->string('Course');
//             $table->string('Branch');
//             $table->string('Email');
//             $table->integer('Roll_number')->unsigned();
//             $table->dateTime('Date_of_Birth');

//             $table->text('Subjects');

//             $table->timestamps();