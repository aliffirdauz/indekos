<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\kosanController;
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

Route::get('/post/{nama_kosan}', [kosanController::class, 'show']);
Route::resource('/', kosanController::class)->scoped(['kosan' => 'nama_kosan']);
Route::resource('/admin', adminController::class);
