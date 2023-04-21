<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user',[HelloController::class,"xinChao"]);

Route::get("/login",[ProductController::class,"create"]);
Route::post("user",[HelloController::class,"display"]);