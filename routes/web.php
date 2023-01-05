<?php

use App\Http\Controllers\BerobatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\Rs_RujukController;

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

// Route::get('/', function () {
//     return view('index', [
//         "title" => "Home"
//     ]);
// });


Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [HomeController::class, 'index'])->middleware('auth');

Route::resource('pasien', PasienController::class)->middleware('auth');
Route::resource('dokter', DokterController::class)->middleware('auth');
Route::resource('obat', ObatController::class)->middleware('auth');
Route::resource('rs_rujuk', Rs_RujukController::class)->middleware('auth');
Route::resource('berobat', BerobatController::class)->middleware('auth');
// Route::resource('/pasien/create', PasienController::class);

// Route::get('/pasien', function () {
//     return view('pasien.index', [
//         "title" => "Data Pasien"
//     ]);
// });

