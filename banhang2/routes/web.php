<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'home'])->name('home')->middleware('logincheck');

//=========> login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'postlogin'])->name('post_login');
Route::get('/logout', [LoginController::class, 'logout']);
//Route::get('login','LoginController@login');
// Route::post('login','LoginController@postlogin')->name('post_login');
// Route::get('logout','LoginController@logout');
//=========> register
Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'postRegister'])->name('post_register');
// Route::get('register','RegisterController@register');
// Route::post('register','RegisterController@postRegister')->name('post_register');