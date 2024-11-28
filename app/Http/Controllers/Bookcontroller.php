<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class Bookcontroller extends Controller
{
    public function index(Request $request){
        //dd($request);
        $books = Book::paginate(20);
        return View('books.index')->with('books',$books);
    }

    public function show($id){
        //echo "ID".$id;
        $book = book::find($id);

        //dd($book);

         return view('books.show')
                ->with('book',$book);
    }
}
