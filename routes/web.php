<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\otentikasi\OtentikasiController;
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

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/', [OtentikasiController::class, 'index'])->name('login');
Route::post('/login', [OtentikasiController::class, 'login'])->name('login');
Route::get('/logout', [OtentikasiController::class, 'logout'])->name('logout');

//Route::get('/login', function () {
    //return view('login');
//});

Route::get('/pendataan', function () {
    if(session('berhasil_login')){
        return view('pendataan');
    }else{
        return redirect('/');
    }
});
