<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            if(auth()->user()->status=='Active')
            {
                return redirect()->intended('dashboard');
            }else{
                auth()->logout();
                session()->flash('error','Your account has been inactive. Please contact with admin.');
            }
        }else{
            session()->flash('error','Email or Password invalid');
        }
        return redirect('/');
    }
}
