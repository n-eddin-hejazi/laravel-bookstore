<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GalleryController;
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

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('layouts.main');
    })->name('dashboard');
});

Route::get('/', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/search', [GalleryController::class, 'search'])->name('search');
Route::get('/book/{book}', [BookController::class, 'details'])->name('book.details');
Route::get('/categoies/{category}', [CategoryController::class, 'result'])->name('gallery.categories.show');
