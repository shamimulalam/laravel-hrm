<?php

namespace App\Exports;

use App\Attendance;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;

class AttendanceExport implements FromQuery
{
    protected $user_id;
    public function __construct($user_id)
    {
        $this->user_id= $user_id;
    }

    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return Attendance::query()->where('user_id',$this->user_id);
    }
    /*public function collection()
    {
        return Attendance::all();
    }*/
}
