<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UfrController;

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

Route::get('/', [UfrController::class , 'index'])->name('connexion');
Route::get('/AdminAdd', [UfrController::class , 'inscriA']);
Route::get('/acceuil', [UfrController::class , 'acceuil']);
Route::get('/liste', [UfrController::class , 'liste']);