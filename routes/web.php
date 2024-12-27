<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/', [PostController::class, 'index'])->name('index');
Route::get('/dashboard', [PostController::class, 'dashboard'])->name('dashboard')->middleware(['auth', 'verified']);
Route::resource('posts', PostController::class);

// Auth routes 
Auth::routes(['verify' => true]);
