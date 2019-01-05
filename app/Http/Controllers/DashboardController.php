<?php

namespace App\Http\Controllers;

use App\Setting;
use App\Transaction;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['total_employee']= User::where('status','Active')->count();
        $data['total_transaction']= Transaction::count();
        $data['total_income']= Transaction::where('type','Income')->sum('amount');
        $data['total_expense']= Transaction::where('type','Expense')->sum('amount');
        $data['last_3_income']= Transaction::with(['relTransactionHead','relUser'])->where('type','Income')->orderBy('id','DESC')->limit(3)->get();
        $data['last_3_expense']= Transaction::with(['relTransactionHead','relUser'])->where('type','Expense')->orderBy('id','DESC')->limit(3)->get();
        $data['users']= User::with('relDesignation')->orderBy('id','DESC')->limit(5)->get();
//        dd($data);
        return view('admin.dashboard',$data);
    }
}
