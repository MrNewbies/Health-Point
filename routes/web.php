<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SendcodeController;
use App\Http\Controllers\ForgotpasswordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProfileController;

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
    return view('/dashboard');
});

Route::get('/register',[RegisterController::class, 'register'])->middleware('guest');
Route::get('/dashboard',[DashboardController::class, 'dashboard'])->middleware('auth');
Route::get('/hospital-detail',[DetailController::class, 'hospitaldetail']);
Route::get('/login', [AuthController::class,'loginpage'])->name('login')->middleware('guest');
Route::get('/scemail',[SendcodeController::class, 'scemail']);
Route::get('/forgotpass', [ForgotpasswordController::class,'forgotpw']);
Route::get('/profile', [ProfileController::class,'profile']);
Route::get('/logout', [AuthController::class,'logout']);

Route::post('/register',[RegisterController::class, 'store']);
Route::post('/login-action',[AuthController::class, 'authenticate']);
Route::post('/upload',[ProfileController::class, 'postFolder']);
