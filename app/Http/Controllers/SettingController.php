<?php

namespace App\Http\Controllers;

use App\Designation;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function ajaxDesignationByDepartmentId($id)
    {
        $data['designations']= Designation::where(['department_id'=>$id,'status'=>'Active'])->pluck('name','id');
        return view('admin.setting.ajaxDesignationByDepartmentId',$data);
    }
}
