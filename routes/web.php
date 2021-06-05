<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
Route::get('/pelanggan', [UserController::class, 'index']); 
Route::get('/pelanggan/tambah', [UserController::class, 'tambah']);
Route::get('/pelanggan/hapus/{id}', [UserController::class, 'hapus']); 
Route::post('/pelanggan/store', [UserController::class, 'store']);
Route::get('/pelanggan/edit/{id}', [UserController::class, 'edit']); 
Route::post('/pelanggan/update', [UserController::class, 'update']);
Route::get('/pelanggan/cari', [UserController::class, 'cari']);