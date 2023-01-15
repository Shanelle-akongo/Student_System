<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\LecController;

use App\Http\Controllers\StaffController;

use App\Http\Controllers\StudController;

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

Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::post('/add_user',[AdminController::class,'upload']);

Route::post('/add_course',[AdminController::class,'upload1']);

Route::post('/add_timetable',[AdminController::class,'upload2']);

Route::post('/delete_user',[AdminController::class,'delete_user']);

Route::post('/update_graduation',[AdminController::class,'update_graduation']);

Route::post('/add_resource',[LecController::class,'add_resource']);

Route::post('/delete_resource',[LecController::class,'delete_resource']);

Route::post('/send_message',[LecController::class,'send_message']);

Route::post('/send_message1',[StaffController::class,'send_message1']);

Route::post('/reg_course',[StudController::class,'get_course']);

Route::post('/reg_grad',[StudController::class,'reg_grad']);