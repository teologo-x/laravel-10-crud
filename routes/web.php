<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;

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

Route::resource('products', ProductController::class);

Route::resource('estudiantes', StudentController::class);


//Route::get('/products', [ProductController::class, 'index']);

Route::post('insertProducts',[ProductController::class,'insertProduct']);

//ruta get que pasa un ID y que el postman lo muestre en tipo JSON

Route::get('jasonvor',[ProductController::class,'mostrarJson']);
