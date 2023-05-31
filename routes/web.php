<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\ListProductsController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SinhvienController;
use App\Http\Controllers\SlideController;
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

// Route::get('/user', [HelloController::class, "xinChao"]);

// Route::get("/login", [ProductController::class, "create"]);
// Route::post("user", [HelloController::class, "display"]);

// Route::get('/apicovit', [HelloController::class, "getAPICovid"]);


// Route::get('/valida', [ValidationController::class, "showForm"]);

// Route::post('/valida', [ValidationController::class, "validation"]);

// Route::get('/addproduct',[ListProductsController::class,"showAddForm"])->name('addproduct');

// Route::post('/addproduct',[ListProductsController::class,"creatSession"]);

// Route::get('showproducts',[ListProductsController::class,"showProduct"])->name('showproducts');

// Route::get('/master',[PageController::class,"showMaster"]);


///Đây là Route Database
// Route::get('/content',[PageController::class,"showContent"]);
// Route::get('/home',[PageController::class,"showHome"])->name('Pages.home');
// Route::get('/student',[SinhvienController::class,"index"])->name('student');
// Route::get('/create',[SinhvienController::class,"create"])->name('Layout.create');
// Route::post('/store',[SinhvienController::class,"store"])->name('store');
// Route::match(['post', 'delete'], '/delete/{id}', [SinhvienController::class, 'destroy'])->name('delete');
// Route::get('/edit/{id}', [SinhvienController::class, 'edit'])->name('edit');
// Route::post('/update/{id}',[SinhvienController::class,"update"])->name('update');
//
Route::get("/homepage",[DemoController::class,"index"])->name("/homepage");
Route::get("/homepage",[SlideController::class,"index"])->name("/homepage");