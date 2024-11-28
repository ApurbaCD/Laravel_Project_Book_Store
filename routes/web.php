<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Bookcontroller;
Route::get('/', function () {
    return view('welcome');
});

Route::get('books',[Bookcontroller::class,'index'])->name('books.index');
Route::get('books/{id}/show',[Bookcontroller::class,'show'])->name('books.show');
