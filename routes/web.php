<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'index']);
Route::post('addStars', [PostController::class, 'addStars']);
Route::get('/viewAddStars', [PostController::class, 'viewAddStars']);
Route::get('/backoffice', [PostController::class, 'backoffice']);
Route::get('/viewEditStars/{id}', [PostController::class, 'edit']);
Route::put('update-stars/{id}', [PostController::class, 'update']);
Route::resource('/stars', PostController::class);
