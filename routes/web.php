<?php

use App\Http\Controllers\Controllerkaryawan;
use App\Http\Controllers\Controllermakanan;
use App\Http\Controllers\Controllerminuman;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// customer
Route::get('/create_kr',[Controllerkaryawan::class,'create']);
Route::post('/view_kr',[Controllerkaryawan::class,'view']);
Route::get('/read_kr',[Controllerkaryawan::class,'read']);

//book
Route::resource('book',BookController::class);

//order
Route::resource('order',OrderController::class);

//user
Route::resource('users', UserController::class);

Route::resource('products',ProductsController::class);

Route::get('/dashboard', [HomeController::class, 'index']);

require __DIR__.'/auth.php';
