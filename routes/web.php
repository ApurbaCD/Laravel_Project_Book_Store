<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Bookcontroller;
Route::get('/', function () {
    return view('welcome');
});

Route::get('books',[Bookcontroller::class,'index']);
