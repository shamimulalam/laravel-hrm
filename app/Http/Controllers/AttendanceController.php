<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\Exports\AttendanceExport;
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
    public function show(Request $request,$user_id,$export=false)
    {
        $user= User::findOrFail($user_id);
        $data['title']='Attendance of '.$user->name;
        $render=[];
        $attendance = new Attendance();
        $attendance= $attendance->with('relUser');
        $attendance=$attendance->where('user_id',$user_id);

        if(isset($request->start_date) && isset($request->end_date))
        {
            $attendance=$attendance->whereBetween('date',[$request->start_date,$request->end_date]);
            $render['start_date']=$request->start_date;
            $render['end_date']=$request->end_date;
        }elseif(isset($request->start_date))
        {
            $attendance=$attendance->where('date',$request->start_date);
            $render['start_date']=$request->start_date;
        }
        if(isset($request->status))
        {
            $attendance=$attendance->where('status',$request->status);
            $render['status']=$request->status;
        }
        if(!empty($export))
        {
            return Excel::download(new AttendanceExport($user_id), $user->name.'.xlsx');
        }
        $attendance= $attendance->orderBy('id','DESC');
        $attendance= $attendance->paginate(10);
        $attendance= $attendance->appends($render);
        $data['attendances']=$attendance;
        $data['user']=$user;
        return view('admin.attendance.show',$data);
    }
}
