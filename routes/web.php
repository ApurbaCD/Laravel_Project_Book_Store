<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Bookcontroller;
Route::get('/', function () {
    return view('welcome');
});

Route::get('',[Bookcontroller::class,'index'])->name('books.index');
Route::get('books/{id}/show',[Bookcontroller::class,'show'])->name('books.show');

Route::get('books/create',[Bookcontroller:: class,'create'])->name('book.create');
Route::post('/books',[Bookcontroller::class ,'store'])->name('books.store');

Route::get('books/{id}/edit',[Bookcontroller::class,'edit'])->name('books.edit');
Route::post('books/update',[Bookcontroller::class,'update'])->name('books.update');


Route::delete('books/delete',[Bookcontroller::class,'destroy'])->name('books.destroy');