<?php

use App\Http\Controllers\KelolaAlumni;
use App\Http\Controllers\KelolaProdi;
use App\Http\Controllers\Kelolauser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// admin
Route::resource('user', Kelolauser::class);
Route::resource('alumni', KelolaAlumni::class);
Route::resource('prodi', KelolaProdi::class);




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


