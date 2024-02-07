<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/path', [ProductController::class, 'index'])->name('firstPage');
Route::get('/path/create', [ProductController::class, 'create'])->name('createPage');
Route::post('/path', [ProductController::class, 'store'])->name('storePage');
Route::get('/path/{path}/edit', [ProductController::class, 'edit'])->name('Edit');
Route::put('/path/{product}/update', [ProductController::class, 'update'])->name('update');
Route::delete('/path/{product}/destroy', [ProductController::class, 'destroy'])->name('destroy');