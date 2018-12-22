<?php

namespace App\Http\Controllers;

use App\Designation;
use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function application_settings()
    {
        $data['title']='Edit company settings';
        $data['settings']['logo']= Setting::where(['type'=>'logo'])->first();
        $data['settings']['company_name']= Setting::where(['type'=>'company_name'])->first();
        return view('admin.setting.company_settings',$data);
    }
    public function update_application_settings(Request $request)
    {
        $setting= Setting::where('type','company_name')->first();
        $setting->value=$request->company_name;
        $setting->save();

        if($request->hasFile('logo'))
        {
            $setting= Setting::where('type','logo')->first();
            $old_file=$setting->value;
            $image= $request->file('logo');
            $image->move('assets',$image->getClientOriginalName());

            $setting->value= 'assets/'.$image->getClientOriginalName();
            $setting->save();
            unlink($old_file);
        }
        session()->flash('success','Company setting updated');
        return redirect()->back();

    }
    public function ajaxDesignationByDepartmentId($id)
    {
        $data['designations']= Designation::where(['department_id'=>$id,'status'=>'Active'])->pluck('name','id');
        return view('admin.setting.ajaxDesignationByDepartmentId',$data);
    }
}
