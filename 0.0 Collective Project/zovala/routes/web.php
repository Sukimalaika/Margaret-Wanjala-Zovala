<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AjaxController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\County;
use App\Http\Livewire\subCounty;
use App\Http\Livewire\towns;

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
    return view('test');
   // echo"<h1>Default Request</h1>";
});
Route::get('kujaribu', function () {
    return view('kujaribu');
   // echo"<h1>Default Request</h1>";
});

//Roles routes
Route::get ('role',[RoleController::class,'all']);
Route::get ('role/add',[RoleController::class,'add']);
Route::post ('role/saveChanges/{id}',[RoleController::class,'saveChanges']);
Route::post ('role/save',[RoleController::class,'save']);
Route::get ('role/edit/{id}',[RoleController::class,'edit']);
Route::get ('role/delete/{id}',[RoleController::class,'delete']);

//county
Route::get ('counties',[County::class]);

//subCounty
Route::get ('subCounties',[subCounty::class,'all']);
Route::post ('fetch-subCounties',[AjaxController::class,'getSubCounty']);
//towns
Route::get ('towns',[town::class]);
Route::post ('fetch-towns',[AjaxController::class,'getTowns']);

Route::post ('authRegister',[userController::class,'authRegister']);
//users
Route::get ('user',[userController::class,'all']);
Route::get ('login',[userController::class,'login']);
Route::get ('register',[userController::class,'register']);
//material
Route::get ('user',[materialsController::class,'all']);
//design
Route::get ('user',[designsController::class,'all']);