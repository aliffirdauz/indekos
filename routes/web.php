<?php

use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\kosanController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::middleware(['auth'])->group(function() {
    Route::get('/admin/show/{nama_kosan}', [adminController::class, 'show']);
    Route::resource('/admin', adminController::class)->scoped(['kosans' => 'nama_kosan']);
    Route::get('/upload/{id}', [adminController::class, 'upload_image']);
    Route::post('/store_image/{id}', [adminController::class, 'store_image']);
    Route::get('/admin/userlist/index', [userController::class, 'index']);
    Route::get('/admin/userlist/create', [userController::class, 'create']);
    Route::post('/admin/userlist/store', [userController::class, 'store']);
    Route::get('/admin/userlist/{nama}', [userController::class, 'show']);
    Route::get('/admin/userlist/{id}/edit', [userController::class, 'edit']);
    Route::put('/admin/userlist/{id}', [userController::class, 'update']);
    Route::delete('/admin/userlist/{id}', [userController::class, 'destroy']);
    Route::put('/post/{nama_kosan}', [kosanController::class, 'book']);
    Route::delete('/post/unbook/{kosan}', [kosanController::class, 'unbook']);
    Route::get('/post/{nama_kosan}', [kosanController::class, 'show']);
});

Route::resource('/', kosanController::class)->scoped(['kosan' => 'nama_kosan']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
