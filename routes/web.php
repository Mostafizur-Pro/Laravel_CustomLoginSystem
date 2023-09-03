<?php

use App\Http\Controllers\customLoginController;
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


Route::get('/login', [customLoginController::class, 'login']);
Route::get('/register', [customLoginController::class, 'register']);
Route::post('/register-user', [customLoginController::class, 'registerUser'])->name('register-user');


