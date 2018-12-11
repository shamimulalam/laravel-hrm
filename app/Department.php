<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function relUser()
    {
        return $this->hasMany('App\User','department_id','id');
    }
    public function relDesignation()
    {
        return $this->hasMany('App\Designation','department_id','id');
    }
}
