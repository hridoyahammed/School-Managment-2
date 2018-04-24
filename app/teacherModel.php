<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacherModel extends Model
{
    protected $table='teacher';
    protected $fillable=['tName','tNid','dmy','gender','blood','religion','phone','email','address','photo'];
}
