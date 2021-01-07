<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;

Route::get('/', function () {
    return view('welcome');
});

Route::get('books/create', function() {
    return view('books.create');
})->name('books.create');

Route::get('books', function() {
    $books = Book::with('user')->get();
    return view('books.index', compact('books'));
})->name('books.list');
