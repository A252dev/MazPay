<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SectionController;

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

// email, nickname, password, avatar, registration-data

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/register', [IndexController::class, 'register'])->name('register');
Route::post('/register', [ProfileController::class, 'register']);

Route::get('/login', [IndexController::class, 'login'])->name('login');
Route::post('/login', [ProfileController::class, 'login']);

Route::get('/profile', [IndexController::class, 'profile'])->name('profile');
Route::get('/logout', [IndexController::class, 'logout'])->name('logout');

Route::get('/settings', [IndexController::class, 'settings'])->name('settings');
Route::post('/settings', [ProfileController::class, 'settings'])->name('settings');

Route::get('/sales', [IndexController::class, 'sales'])->name('sales');
Route::get('/purchases', [IndexController::class, 'purchases'])->name('purchases');
Route::get('/list', [IndexController::class, 'list'])->name('list');
Route::get('/edit', [IndexController::class, 'edit'])->name('edit');
Route::get('/messages', [IndexController::class, 'messages'])->name('messages');

Route::get('/sections/add', [SectionController::class, 'add_section'])->name('add_section');
Route::post('/sections/add', [SectionController::class, 'add_confirm'])->name('add_confirm');
Route::get('/sections/{section}', [IndexController::class, 'sections'])->name('sections');

// for debug
Route::get('/set-cookie', [ProfileController::class, 'setCookie']);
Route::get('/get-cookie', [ProfileController::class, 'getCookie']);
Route::get('/del-cookie', [ProfileController::class, 'delCookie']);
