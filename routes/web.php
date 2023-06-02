<?php

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

Route::get('/', [\App\Http\Controllers\WebController::class, "home"]);

Route::get('/list-student', [\App\Http\Controllers\WebController::class, "listStudent"]);

Route::get('/create-student', [\App\Http\Controllers\WebController::class, "createStudent"]);

Route::post('/create-student', [\App\Http\Controllers\WebController::class, "saveStudent"]);
