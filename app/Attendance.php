<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    public function relUser()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
