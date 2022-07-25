<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelatihController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\LanahController;
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
    return view('landing_page.index');
});

// Route::get('test', function () {
//     return view('test');
// });

Route::get('login', function () {
    return view('login.index');
});

Route::get('admin', function () {
    return view('admin.index');
});


Route::resource('pelatih', PelatihController::class);
Route::resource('cabang', CabangController::class);
Route::resource('jadwal', JadwalController::class);
Route::resource('anggota', AnggotaController::class);
Route::resource('lanah', lanahController::class);