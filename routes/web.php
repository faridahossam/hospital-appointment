<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;

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
//add an appointment
Route::post('/addAppointment', [HomeController::class, 'addAppointment']);
//Admin authentication
/*Route::middleware(['auth:sanctum', 'isAdmin'])->get('/admin', function () {
    return view('admin.dashboard');
})->name('dashboard');*/

Auth::routes();

// home page for logged in users
Route::get('/home', [HomeController::class, 'index'])->name('home');
//logout 
Route::get('/logout', [LoginController::class,'logout']);
//admin dashboard
Route::get('/admin', [HomeController::class,'adminRedirect']);
//show Appointments
Route::get('/showAppointments', [HomeController::class,'showAppointments']);
