<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attendenceModel extends Model
{
    protected $table='attendence';
    protected $fillable=['dmy','student_id','class','roll','section','in_time','out_time','status'];
}