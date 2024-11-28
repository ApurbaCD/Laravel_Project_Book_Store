<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class Bookcontroller extends Controller
{
    public function index(){
        $books = Book::all();
        return View('books.index')->with('books',$books);
    }
}
