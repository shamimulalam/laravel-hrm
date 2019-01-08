<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\Imports\AttendanceImport;
use App\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AttendanceController extends Controller
{
    public function create()
    {
        $data['title']='Upload Attendance sheet';
        return view('admin.attendance.create',$data);
    }
    public function store(Request $request)
    {
//        dd($request->all());
        Excel::import(new AttendanceImport, $request->file('attendance_file'));


        echo 'success';
//        dd($data);
    }
}
