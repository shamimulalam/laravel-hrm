<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    public function relUser()
    {
        return $this->belongsTo('App\User','client','id');
    }
}
