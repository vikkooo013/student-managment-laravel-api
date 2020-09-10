<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Student_name');
            $table->string('Course');
            $table->string('Branch');
            $table->string('Email');
            $table->integer('Roll_number')->unsigned();
            $table->dateTime('Date_of_Birth');

            $table->text('Subjects');

            $table->timestamps();
            $table->foreign('Roll_number')->references('id')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
