<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelatihController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\LanahController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PostController;
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
})->name('home');

// Route::get('test', function () {
//     return view('test');
// });

// Route::get('login', function () {
//     return view('login.index');
// })->name('login');
Route::group(['middleware' => ['guest']], function() 
{
Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'loginPembeli'])->name('loginPembeli-pembeli');
});


Route::group(['middleware' => ['LoginCheck', 'auth', 'role:admin']], function() 
{
    // Logout
    Route::post('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
    
    Route::get('admin', function () {
        return view('admin.index');
    })->name('admin');
    Route::resource('pelatih', PelatihController::class);
    Route::resource('cabang', CabangController::class);
    Route::resource('jadwal', JadwalController::class);
    Route::resource('anggota', AnggotaController::class);
    Route::resource('lanah', lanahController::class);
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/home', [HomeController::class, 'index']);

Route::group(['middleware' => ['auth']], function() {
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('posts', PostController::class);
});