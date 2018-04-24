<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_add', function (Blueprint $table) {
            $table->increments('id');
            $table->text('ename', 30);
            $table->text('bname',40);
            $table->text('roll',40);
            $table->text('reg',40);
            $table->text('class',15);
            $table->text('shift',8);
            $table->text('section',15);
            $table->text('session',15);
            $table->text('sid',25);
            $table->text('dmy',12);
            $table->text('gender',10);
            $table->text('blood_group',6);
            $table->text('phone',15);
            $table->text('address',50);
            $table->text('fname',20);
            $table->text('mname',20);
            $table->text('guardian_name',20);
            $table->number('guardian_id',20);
            $table->text('photo',200);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_models');
    }
}
