<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class markModel extends Model
{
    protected $table='mark';
    protected $fillable=['student_id','exam_id','subject_code','year','mark'];
}
