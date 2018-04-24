<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admissionModel extends Model
{
    protected $table='admission';
    protected $fillable=['sname', 'sbname', 'class','year', 'fname', 'mname', 'foccupation', 'moccupation', 'income', 'gnid', 'gender', 'dob', 'blood', 'religion', 'phone','gname', 'preschool', 'status', 'preaddress', 'peraddress', 'image', 'quotas'];

}
