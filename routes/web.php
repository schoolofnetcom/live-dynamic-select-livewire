<?php

use Illuminate\Support\Facades\Route;

Route::get('/select', function () {
    return view('select');
});

Route::get('books/create', function() {
    return view('books.create');
})->name('books.create');

Route::get('books', function() {
    $books = Book::with('user')->get();
    return view('books.index', compact('books'));
})->name('books.list');
