<?php

namespace App\Http\Controllers;

use App\Imports\AttendanceImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AttendanceController extends Controller
{
    public function attendance_process()
    {
//        dd(storage_path('app/public/attendance.xlsx'));
        if(file_exists(public_path('attendance.xlsx')))
        {
            Excel::import(new AttendanceImport, 'attendance.xlsx','local-public');
            $data=Excel::toArray(new AttendanceImport, 'attendance.xlsx','local-public');
            dd($data);
        }
        exit('false');
    }
}
