<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Dokter\DokterController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Pasien\PasienController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\DataPasienController;
use App\Http\Controllers\HasilController;

Route::get('/', [FrontController::class, 'showIndex'])->name('index');

// Authentication Routes
Route::get('/login', [UserAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserAuthController::class, 'login']);

Route::get('/register', [UserAuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [UserAuthController::class, 'register']);

Route::post('/logout', [UserAuthController::class, 'logout'])->name('logout');
Route::get('/logout', [UserAuthController::class, 'logout'])->name('logout');

Route::middleware(['role:Admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['role:Dokter'])->group(function () {
    Route::get('/dokter/dashboard', [DokterController::class, 'index'])->name('dokter.dashboard');
});

Route::middleware(['role:Pasien'])->group(function () {
    Route::get('/pasien/dashboard', [PasienController::class, 'index'])->name('pasien.dashboard');
});

Route::get('/devices', [DeviceController::class, 'index'])->name('devices');
Route::get('/devices/data', [DeviceController::class, 'data'])->name('devices/data');
Route::get('/devices/show/{id}', [DeviceController::class, 'show'])->name('devices/show');
Route::get('/devices/edit/{id}', [DeviceController::class, 'edit'])->name('devices/edit');      
Route::put('/devices/edit/{id}', [DeviceController::class, 'update'])->name('devices/update');
Route::delete('/devices/destroy/{id}', [DeviceController::class, 'destroy'])->name('devices/destroy');

Route::get('/hasils', [HasilController::class, 'index'])->name('hasils');