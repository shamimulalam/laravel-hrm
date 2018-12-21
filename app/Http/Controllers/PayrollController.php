<?php

namespace App\Http\Controllers;

use App\Payroll;
use Validator;
use Illuminate\Http\Request;

class PayrollController extends Controller
{
    public function manage($user_id)
    {
        $data['title']='Manage Payroll';
        $data['user_id']=$user_id;
        $data['payroll']= Payroll::where('user_id',$user_id)->first();
//        dd($data);
        return view('admin.user.payroll.manage',$data);
    }
    public function update(Request $request,$user_id)
    {
        $request->validate([
            'basic'=>'required',
            'house_rent'=>'required',
            'medical'=>'required',
            'travel_allowance'=>'required',
            'daily_allowance'=>'required',
            'provident_fund'=>'required',
            'gross'=>'required'
        ]);

        $payroll= Payroll::where('user_id',$user_id)->first();
        if(empty($payroll)){
            $payroll=New Payroll();
        }
        $payroll->user_id=$user_id;
        $payroll->basic=$request->basic;
        $payroll->house_rent=$request->house_rent;
        $payroll->medical=$request->medical;
        $payroll->travel_allowance=$request->travel_allowance;
        $payroll->daily_allowance=$request->daily_allowance;
        $payroll->provident_fund=$request->provident_fund;
        $payroll->gross=$request->gross;
        $payroll->save();
        session()->flash('success','Payroll updated successfully');
        return redirect()->route('user.index');
    }
}
