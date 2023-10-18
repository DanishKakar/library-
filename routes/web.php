<?php

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

Route::get('/home', function () {
    return view('backend.index');
})->name('dashboard');

Route::get('/data', function () {
    return view('backend.magazines.magazines-list');
})->name('data');

Route::get('/datatable', function () {
    return view('backend.books.books-list');
})->name('books');
