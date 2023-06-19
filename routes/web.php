<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\TokenController;

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
    return view('welcome');
});


Route::get('/token/list/{periode}', [TokenController::class, 'list']);
Route::get('/grade/list/{id_grade}',  [AbsensiController::class, 'list']);
Route::resource('absensi', AbsensiController::class);
Route::resource('token', TokenController::class);
