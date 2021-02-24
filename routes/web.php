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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');

Route::get('/post', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
Route::get('/post/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');
Route::post('/post/store', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');
Route::get('/post/delete/{id}', [App\Http\Controllers\PostController::class, 'delete'])->name('post.delete');
Route::get('/post/edit/{id}', [App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
Route::post('/post/update/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('post.update');
