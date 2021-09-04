<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController as Artikel;


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

# route artikel
Route::group(['prefix' => '/artikel'], function () {
    Route::get('/', [Artikel::class, 'index'])->name('artikel');
    Route::get('/create', [Artikel::class, 'create'])->name('artikel.create');
    Route::post('/store', [Artikel::class, 'store'])->name('artikel.store');
    Route::get('/edit/{id}', [Artikel::class, 'edit'])->name('artikel.edit');
    Route::post('/update', [Artikel::class, 'update'])->name('artikel.update');
    Route::get('/delete/{id}', [Artikel::class, 'destroy'])->name('artikel.delete');
});
