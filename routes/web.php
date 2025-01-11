<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;

/*
|---------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// 首页路由
Route::get('/', function () {
    return view('welcome');
});

// Home 路由
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home'); 

// About Us 路由
Route::get('/about-us', [App\Http\Controllers\AboutUsController::class, 'index'])->name('about-us');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');
});
