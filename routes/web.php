<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/signin', [LoginController::class, 'index']);
Route::post('/signin', [LoginController::class, 'authenticate']);

Route::post('/signin', function () {
    return view('sign-in');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
