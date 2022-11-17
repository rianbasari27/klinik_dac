<?php

use App\Http\Controllers\BerobatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DokterController;
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


Route::get('/', [HomeController::class, 'index']);
Route::resource('pasien', PasienController::class);
Route::resource('dokter', DokterController::class);
Route::resource('obat', ObatController::class);
Route::resource('rs_rujuk', Rs_RujukController::class);
Route::resource('berobat', BerobatController::class);
// Route::resource('/pasien/create', PasienController::class);

// Route::get('/pasien', function () {
//     return view('pasien.index', [
//         "title" => "Data Pasien"
//     ]);
// });

