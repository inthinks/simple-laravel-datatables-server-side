<?php

use Illuminate\Support\Facades\Route;

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
// })->middleware('auth');;
Route::get('/', [App\Http\Controllers\KaryawanController::class, 'list'])->name('karyawan.list')->middleware('auth');

Auth::routes();
Route::get('/karyawan', [App\Http\Controllers\KaryawanController::class, 'index'])->name('karyawans');
Route::get('/karyawan-list', [App\Http\Controllers\KaryawanController::class, 'list'])->name('karyawan.list');
Route::post('/store-karyawan', [App\Http\Controllers\KaryawanController::class, 'store'])->name('karyawan.store');
Route::post('/edit-karyawan', [App\Http\Controllers\KaryawanController::class, 'edit'])->name('karyawan.edit');
Route::post('/delete-karyawan', [App\Http\Controllers\KaryawanController::class, 'destroy'])->name('karyawan.delete');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
