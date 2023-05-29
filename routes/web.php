<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\http\Controllers\logincontroller;

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
    return view('layouts.landing-page');
});

//route register
Route::get('/register', [RegisterController::class, 'index'])-> name('register');
Route::post('/storeRegister', [RegisterController::class, 'storeRegister'])-> name('storeRegister');



//route login 
Route::get('/login', [logincontroller::class, 'index'])-> name('login');
Route::post('/login', [logincontroller::class, 'index'])-> name('login');
