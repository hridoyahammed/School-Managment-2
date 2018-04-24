<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studentModel extends Model
{
    protected $table='student_add';
    protected $fillable=['ename','bname','roll','reg','class','shift','section','session','sid','dmy','gender','blood_group','phone','address','fname','mname','guardian_name','guardian_id','photo'];
}
