<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PenggunaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('index');
})->name('index');

Route::post('/login', [AuthController::class, 'login'])
    ->middleware(["noAuth"])->name('login');


Route::get('/login', function () {
    return view('login');
})->middleware(["noAuth"])->name('loginForm');


Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', function () {
    return view('register');
})->name('register_form');

Route::post('/register', [PenggunaController::class, 'register'])->name('register');

Route::get('/pengguna/persyaratan', function () {
    return view('pendonor.persyaratan');
})->middleware(["WithAuth"])->name('pengguna.persyaratanForm');

Route::post('/pengguna/persyaratan', [PenggunaController::class, 'persyaratan'])
    ->middleware(["WithAuth"])->name('persyaratan');

// petugas

Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware(["PetugasAuth"])->name('dashboard');


Route::get('/detail/{id}', [AdminController::class, 'detail'])
    ->middleware(["PetugasAuth"])
    ->name('penggunaData');

Route::get('/checkup/{id}', [AdminController::class,'chekupform'])
    ->middleware(["PetugasAuth"])
    ->name('checkupData');

Route::post('/checkup/{id}', [AdminController::class, 'checkup'])
    ->middleware(["PetugasAuth"])
    ->name('checkup');
