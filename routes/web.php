<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','LoginController@index')->name('login.form');
Route::post('login','LoginController@login')->name('login');

Route::middleware('auth')->group(function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('department','DepartmentController');
    Route::resource('designation','DesignationController');
    Route::resource('user','UserController');
    Route::get('user/{user_id}/payroll','PayrollController@manage')->name('payroll.manage');
    Route::put('user/{user_id}/payroll','PayrollController@update')->name('payroll.update');
    // Ajax route
    Route::get('ajax_designation_by_id/{id}','SettingController@ajaxDesignationByDepartmentId')->name('ajaxDesignationByDepartmentId');

    Route::post('logout',function (){
        auth()->logout();
        return redirect()->to('/');
    })->name('logout');
});
