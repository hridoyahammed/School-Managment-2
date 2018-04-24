<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissionModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission', function (Blueprint $table) {
            $table->increments('id');
            $table->text('sname',30);
            $table->text('sbname',30);
            $table->text('class',10);
            $table->text('year',10);
            $table->text('fname',30);
            $table->text('mname',30);
            $table->text('foccupation',30);
            $table->text('moccupation',30);
            $table->text('income',10);
            $table->text('gnid',30);
            $table->text('gender',10);
            $table->text('dob',10);
            $table->text('religion',20);
            $table->text('phone',15);
            $table->text('gname',30);
            $table->text('preschool',30);
            $table->text('status',30);
            $table->text('preaddress',50);
            $table->text('peraddress',50);
            $table->text('image',200);
            $table->text('quotas',30);
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
        Schema::dropIfExists('admission_models');
    }
}
