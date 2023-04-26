<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\ListProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ValidationController;

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

Route::get('/user', [HelloController::class, "xinChao"]);

Route::get("/login", [ProductController::class, "create"]);
Route::post("user", [HelloController::class, "display"]);

Route::get('/apicovit', [HelloController::class, "getAPICovid"]);


Route::get('/valida', [ValidationController::class, "showForm"]);

Route::post('/valida', [ValidationController::class, "validation"]);

Route::get('/addproduct',[ListProductsController::class,"showAddForm"])->name('addproduct');

Route::post('/addproduct',[ListProductsController::class,"creatSession"]);

Route::get('showproducts',[ListProductsController::class,"showProduct"])->name('showproducts');