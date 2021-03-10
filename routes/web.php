<?php

use App\Http\Controllers\KelolaKeuanganController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/post', [PostController::class, 'index']);
Route::view('/view_kelola_barang', 'kelola_barang');
Route::get('/kelola_barang', [UserController::class, 'index'])->name('kelola_barang');
Route::get('/kelola_barang.show', [UserController::class, 'index'])->name('kelola_barang/show');
Route::resource('/kelola_keuangan', KelolaKeuanganController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
