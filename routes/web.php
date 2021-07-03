<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\otentikasi\OtentikasiController;
use App\Http\Controllers\PendataanBarangController;

Route::get('/', function(){
    return redirect('/login');
});
Route::get('/login', [OtentikasiController::class, 'index'])->name('login');
Route::post('/login', [OtentikasiController::class, 'login'])->name('login');
Route::get('/logout', [OtentikasiController::class, 'logout'])->name('logout');

Route::resource('pendataan', PendataanBarangController::class)->middleware('LoginStatusMiddleware');
