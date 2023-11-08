<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;
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

// GET
// POST
// PATCH
// PUT
// DELETE
// HEAD

Route::get('/index', [UserController::class, "index"]);
Route::get('/register', [UserController::class, "registration"]);
Route::post('/store', [UserController::class, "store"]);
Route::get('/create', [UserController::class, "create"]);
// Route::get('/register', [LoginController::class, "index"]);
// Route::post('/login', [RegisterController::class, "store"]);
// Route::post('/register', [RegisterController::class, "store"]);
