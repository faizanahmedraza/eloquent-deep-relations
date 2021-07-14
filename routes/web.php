<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employees',[EmployeeController::class,'index']);
Route::get('/employee/add',[EmployeeController::class,'addEmployee']);
Route::post('/employee/add',[EmployeeController::class,'addEmployeeData']);
Route::get('/employee/update/{id}',[EmployeeController::class,'updateEmployee']);
Route::put('/employee/update/{id}',[EmployeeController::class,'updateEmployeeData']);