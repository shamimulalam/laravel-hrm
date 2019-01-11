<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\Imports\AttendanceImport;
use App\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AttendanceController extends Controller
{
    public function index(Request $request)
    {
        $data['title']='List of Attendance';
        $render=[];
        $attendance = new Attendance();
        $attendance= $attendance->with('relUser');
        if(isset($request->date))
        {
            $attendance=$attendance->where('date',$request->date);
            $render['date']=$request->date;
        }
        if(isset($request->status))
        {
            $attendance=$attendance->where('status',$request->status);
            $render['status']=$request->status;
        }
        $attendance= $attendance->orderBy('id','DESC');
        $attendance= $attendance->paginate(10);
        $attendance= $attendance->appends($render);
        $data['attendances']=$attendance;
        return view('admin.attendance.index',$data);
    }
    public function create()
    {
        $data['title']='Upload Attendance sheet';
        return view('admin.attendance.create',$data);
    }
    public function store(Request $request)
    {
        Excel::import(new AttendanceImport, $request->file('attendance_file'));

        session()->flash('success','Attendance uploaded successfully');
        return redirect()->route('attendance.index');
    }
}
