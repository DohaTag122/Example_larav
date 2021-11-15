<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CustomAuthController;
use App\Providers\FortifyServiceProvider;
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




// Auth::routes();

Route::get('/', function () {
    return view('index');
});




Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

// Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

// login

//Admin Routes
Route::prefix('admin')->middleware(['auth','auth.isAdmin'])->name('admin.')->group(function() {
    Route::resource('/users', 'Admin\UserController');   
 });


