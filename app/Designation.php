<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    public function relUser()
    {
        return $this->hasMany('App\User','designation_id','id');
    }
    public function relDepartment()
    {
        return $this->belongsTo('App\Department','department_id','id');

    }
}
