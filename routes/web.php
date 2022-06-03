<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagecontroller;
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


Route::get('/home',[pagecontroller::class, 'index'])->name('Home');
Route::get('/about',[pagecontroller::class, 'about'])->name('about');
Route::get('/ourteams',[pagecontroller::class, 'our'])->name('our');
Route::get('/contact',[pagecontroller::class, 'contact'])->name('contact');
Route::get('/service',[pagecontroller::class, 'service'])->name('service');