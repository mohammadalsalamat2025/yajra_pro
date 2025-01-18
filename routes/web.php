<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
Route::get('/', function () {
    return redirect('/employee');
    #return view('welcome');
});


// Route::get('/employees', [EmployeeController::class, 'index'])->name('employee.index');
Route::resource('employee', EmployeeController::class);