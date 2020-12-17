<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ReceptionController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RoomTypeController;
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
Route::get('/',[ReceptionController::class,'create']);
Route::get('reception',[ReceptionController::class,'create']);
Route::post('reception',[ReceptionController::class,'store']);
Route::get('reception/create',[ReceptionController::class,'create']);
Route::get('reception/check_in',[ReceptionController::class,'check_in']);
Route::get('reception/check_out',[ReceptionController::class,'check_out']);
Route::get('reception/make_check_out/{id}',[ReceptionController::class,'make_check_out']);
Route::get('reception/check_in/search',[ReceptionController::class,'check_in_search']);
Route::get('reception/check_out/search',[ReceptionController::class,'check_out_search']);

Route::get('search',[GuestController::class,'search']);
Route::resource('guest',GuestController::class);

Route::get('user',[UserController::class,'index']);
Route::get('user/login',[UserController::class,'LoginForm']);
Route::post('user/login',[UserController::class,'login']);
Route::get('user/logout',[UserController::class,'logout']);
Route::get('user/create',[UserController::class,'create_form']);
Route::post('user/create',[UserController::class,'create']);
Route::get('user/{id}',[UserController::class,'show']);
Route::get('user/{id}/edit',[UserController::class,'edit']);
Route::post('user/{id}/edit',[UserController::class,'update']);
Route::get('user/{id}/delete',[UserController::class,'delete']);
Route::post('user/search',[UserController::class,'search']);

Route::resource('room',RoomController::class);
Route::resource('roomtype',RoomTypeController::class);
