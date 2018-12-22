<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['logo']= Setting::where('type','logo')->first();
        return view('admin.dashboard',$data);
    }
}
