<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class Bookcontroller extends Controller
{
    public function index(Request $request){
        //dd($request);
        if($request->has('search')){
            $books=Book::query()
                        ->where('author','like','%'.$request->get('search').'%')
                        ->orwhere('title','like','%'.$request->get('search').'%')
                                ->paginate(10);
        }
        else{
            $books = Book::paginate(20);
        }

        return View('books.index')->with('books',$books);
    }

    public function show($id){
        //echo "ID".$id;
        $book = book::find($id);

        //dd($book);

         return view('books.show')
                ->with('book',$book);
    }

    public function create(){
        return view('books.create');
    }


    public function store(Request $request){
       // dd($request->all());
        $rules=[
            'title'=>'required',
            'author'=>'required',
            'isbn'=>'required|integer|digits:13',
            'price'=>'required|numeric|min:0',
            //'stock'=>['required','min:0','integer'],
            'stock'=>'required|min:0|integer'
        ];
        $request->validate($rules);

        // return "all data is valid";
        $book = new book();
        $book->title=$request->title;
        $book->author=$request->author;
        $book->stock=$request->stock;
        $book->isbn=$request->isbn;
        $book->price=$request->price;
        $book->save();
        //return redirect()->route('books.index');
        return redirect()->route('books.show',$book->id);



    }

    public function edit($id){
        //return $id;
        $book=book::findorfail($id);
        //dd($book->toArray());
        return view('books.edit')
        ->with('book',$book);
    }

    public function update(Request $request){
        //dd($request->all());

        $rules=[
            'title'=>'required',
            'author'=>'required',
            'isbn'=>'required|integer|digits:13',
            'price'=>'required|numeric|min:0',
            //'stock'=>['required','min:0','integer'],
            'stock'=>'required|min:0|integer'
        ];
        $request->validate($rules);

        $book =book::findorfail($request->id);

        $book->title=$request->title;
        $book->author=$request->author;
        $book->stock=$request->stock;
        $book->isbn=$request->isbn;
        $book->price=$request->price;
        $book->save();
        return redirect()->route('books.show',$book->id);
    }
    public function destroy(Request $request){
        $book= Book::findorfail($request->id);
        //echo "L:";
        //return "KL";
        // dd($book);
        $book->delete();
        return redirect()->route('books.index');
    }
}

