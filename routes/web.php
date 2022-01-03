<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ShopController;
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

Route::get('/countries',[CountryController::class,'index']);
Route::get('/country/add',[CountryController::class,'addCountry']);
Route::post('/country/add',[CountryController::class,'addCountryData']);
Route::get('/country/update/{id}',[CountryController::class,'updateCountry']);
Route::put('/country/update/{id}',[CountryController::class,'updateCountryData']);

Route::get('/provinces',[ProvinceController::class,'index']);
Route::get('/province/add',[ProvinceController::class,'addProvince']);
Route::post('/province/add',[ProvinceController::class,'addProvinceData']);
Route::get('/province/update/{id}',[ProvinceController::class,'updateProvince']);
Route::put('/province/update/{id}',[ProvinceController::class,'updateProvinceData']);

Route::get('/cities',[CityController::class,'index']);
Route::get('/city/add',[CityController::class,'addCity']);
Route::post('/city/add',[CityController::class,'addCityData']);
Route::get('/city/update/{id}',[CityController::class,'updateCity']);
Route::put('/city/update/{id}',[CityController::class,'updateCityData']);

Route::get('/shops',[ShopController::class,'index']);
Route::get('/shop/add',[ShopController::class,'addShop']);
Route::post('/shop/add',[ShopController::class,'addShopData']);
Route::get('/shop/update/{id}',[ShopController::class,'updateShop']);
Route::put('/shop/update/{id}',[ShopController::class,'updateShopData']);

Route::get('/employees',[EmployeeController::class,'index']);
Route::get('/employee/add',[EmployeeController::class,'addEmployee']);
Route::post('/employee/add',[EmployeeController::class,'addEmployeeData']);
Route::get('/employee/update/{id}',[EmployeeController::class,'updateEmployee']);
Route::put('/employee/update/{id}',[EmployeeController::class,'updateEmployeeData']);