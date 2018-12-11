<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function relDepartment()
    {
        return $this->belongsTo('App\Department','department_id','id');
    }
    public function relDesignation()
    {
        return $this->belongsTo('App\Designation','designation_id','id');
    }
    public function relAttendance()
    {
        return $this->hasMany('App\Attendance','user_id','id');
    }
    public function relPayroll()
    {
        return $this->hasOne('App\Payroll','user_id','id');
    }
    public function relTransaction()
    {
        return $this->hasMany('App\Transaction','user_id','id');
    }
}
