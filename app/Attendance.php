<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable=[
        'user_id',
        'date',
        'in_time',
        'out_time',
        'status',
    ];
    public function relUser()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
