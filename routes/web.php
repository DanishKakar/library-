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

// Route::get('/data', function () {
//     return view('backend.magazines.magazines-list');
// })->name('data');

// Route::get('/datatable', function () {
//     return view('backend.books.books-list');
// })->name('books');


route::get('/allbooks', [booksController::class, 'index'])->name('books');
route::get('/add-book', [booksController::class, 'create'])->name('addbook');
route::post('/add-book', [booksController::class, 'store'])->name('addbook');
route::get('edit-book/{id}', [booksController::class, 'edit']);
route::put('update_book', [booksController::class, 'update'])->name('updatebook');

// route::get('/edit-book/{id}', [booksController::class, 'edit'])->name('editbook');
route::delete('/delete-book/{id}', [booksController::class, 'destroy'])->name('deletebook');
// route::delete('/delete_record/{id}', [booksController::class, 'delete']);
route::get('/magazines', [booksController::class, 'index1'])->name('data');
// route::get('/search', [searchController::class, 'liveSearch']);


//       .......... Start Of Specific Relations  Search Routes ............. //
route::get('/books', [searchController::class, 'searchBook'])->name('searchbook');
route::get('/create-report', [searchController::class, 'report'])->name('report1');
route::get('/reports', [searchController::class, 'report2'])->name('report');

//       .......... End Of Specific Relations  Search Routes ............. //

route::get('/create-book', [booksController::class, 'create'])->name('createbook');
route::get('/listbooks', [booksController::class, 'list'])->name('listbooks');