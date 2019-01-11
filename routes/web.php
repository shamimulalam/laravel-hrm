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

    Route::middleware('user-access-control')->group(function () {
        Route::resource('department', 'DepartmentController');
        Route::resource('designation', 'DesignationController');
        Route::resource('transaction-head', 'TransactionHeadController');
        Route::resource('user', 'UserController')->except(['show']);
        Route::get('user/{user_id}/payroll', 'PayrollController@manage')->name('payroll.manage');
        Route::put('user/{user_id}/payroll', 'PayrollController@update')->name('payroll.update');
        // Transaction Routes
        Route::get('transaction/{transaction_type}', 'TransactionController@index')->name('transaction.index');
        Route::get('transaction/{transaction_type}/create', 'TransactionController@create')->name('transaction.create');
        Route::post('transaction/{transaction_type}', 'TransactionController@store')->name('transaction.store');
        // Ajax route
        Route::get('ajax_designation_by_id/{id}', 'SettingController@ajaxDesignationByDepartmentId')->name('ajaxDesignationByDepartmentId');

        Route::get('application_settings', 'SettingController@application_settings')->name('application_settings');
        Route::post('application_settings', 'SettingController@update_application_settings')->name('application_settings.update');
        // attendance routes
        Route::get('attendance', 'AttendanceController@index')->name('attendance.index');
        Route::get('attendance/index', 'AttendanceController@index')->name('attendance.index');
        Route::get('attendance/create', 'AttendanceController@create')->name('attendance.upload');
        Route::post('attendance/store', 'AttendanceController@store')->name('attendance.store');
    });
    Route::resource('user', 'UserController')->only(['show']);
    Route::post('logout',function (){
        auth()->logout();
        return redirect()->to('/');
    })->name('logout');
});
Route::get('/mailable', function () {

    $data['employee']=\App\User::with('relPayRoll')->first();
    return new App\Mail\SendPaySlip($data);
});
