<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KronologiKerusakanController;
use App\Http\Controllers\KerusakanController;

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
// Login
Route::get('/login',[LoginController::class,'Index']);
Route::get('/',[LoginController::class,'Index']);
Route::post('/login/post',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

// Kronologi
Route::get('/form/kronologi',[KronologiKerusakanController::class,'show']);
Route::post('/form/kronologi/create',[KronologiKerusakanController::class,'store']);
Route::get('/Data', [KronologiKerusakanController::class,'showData']);

//kerusakan
Route::get('/form/kerusakan', [KerusakanController::class,'show']);
Route::get('/form/kerusakan', [KerusakanController::class,'showIdKronologi']);
Route::post('/form/kerusakan/create', [KerusakanController::class,'store']);
Route::get('/Utama', [KerusakanController::class, 'index']);
Route::delete('/kerusakan/{id}', [KerusakanController::class, 'destroy'])->name('kerusakan.destroy');
Route::put('/kerusakan/{id}', [KerusakanController::class, 'update'])->name('kerusakan.update');








