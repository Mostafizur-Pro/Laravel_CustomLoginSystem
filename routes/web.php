<?php

use App\Http\Controllers\customLoginController;
use GuzzleHttp\Middleware;
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


Route::get('/login', [customLoginController::class, 'login'])->Middleware('alreadyLoggedIn');

Route::get('/dashboard', [customLoginController::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('/register', [customLoginController::class, 'register'])->Middleware('alreadyLoggedIn');
Route::post('/register-user', [customLoginController::class, 'registerUser'])->name('register-user');
Route::post('/login-user',[customLoginController::class, 'loginUser'])->name('login-user');
Route::get('/logout', [customLoginController::class, "logout"]);


