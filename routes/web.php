<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pegawaiController;
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
//     return view('welcome');
// });


Route::get('/', [pegawaiController::class, 'index']);
Route::get('/read', [pegawaiController::class, 'read']);
Route::get('/show/{id}', [pegawaiController::class, 'show']);
Route::get('/update/{id}', [pegawaiController::class, 'update']);
Route::get('/create', [pegawaiController::class, 'create']);
Route::get('/store', [pegawaiController::class, 'store']);
Route::get('/destroy/{id}', [pegawaiController::class, 'destroy']);
