<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\booksController;
use App\Http\Controllers\searchController;

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



route::get('/allbooks', [booksController::class, 'index'])->name('books');
route::get('/add-book', [booksController::class, 'create'])->name('addbook');
route::post('/add-book', [booksController::class, 'store'])->name('addbook');
route::get('edit-book/{id}', [booksController::class, 'edit']);
route::put('update_book', [booksController::class, 'update'])->name('updatebook');


route::delete('/delete-book/{id}', [booksController::class, 'destroy'])->name('deletebook');
route::get('/magazines', [booksController::class, 'index1'])->name('data');
// route::get('/search', [searchController::class, 'liveSearch']); 


//       .......... Start Of Specific Relations  Search Routes ............. //
route::get('/books', [searchController::class, 'searchBook'])->name('searchbook');
route::get('/create-report', [searchController::class, 'report'])->name('report1');
route::get('/add-magazine', [searchController::class, 'create'])->name('addmagazine');
route::get('/reports', [searchController::class, 'report2'])->name('report');

//       .......... End Of Specific Relations  Search Routes ............. //
