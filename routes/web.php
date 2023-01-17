<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('post', [App\Http\Controllers\HomeController::class, 'post'])->name('post');
Route::get('about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

Route::prefix('dashboard')->group(function(){
    Route::get('/',[App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
// Penulisan prefixs disini sebagai fungsi induk url utama dimana bertujuan Ketika link apapun itu 
// dimasukan kedalam prefixs maka link tersebut harus menyertakan prefixs terlebih dahulu 

});