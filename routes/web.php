<?php

use App\Http\Controllers\JokeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/','home');

Route::get('/jokes',[JokeController::class,'index']);
Route::get('/jokes/create', [JokeController::class, 'create']);
Route::post('/jokes', [JokeController::class, 'store']);

