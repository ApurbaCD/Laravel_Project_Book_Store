@extends('layout')

@section('page-content')
<body>
    <p>
    <a href="{{route('books.index')}}">Back</a>
    </p>
    <h1>Book List </h1>

    <table width="50%" border="1">

        <tr>
            <th>ID</th>
            <th>{{$book->id}}</th>
        </tr>
        <tr>
            <th>Author</th>
            <th>{{$book->author}}</th>
        </tr>
        <tr>
            <th>Title</th>
            <th>{{$book->title}}</th>
        </tr>
        <tr>
            <th>Price</th>
            <th>{{$book->price}}</th>
        </tr>
        <tr>
            <th>ISBN</th>
            <th>{{$book->isbn}}</th>
        </tr>
        <tr>
            <th>Stock</th>
            <th>{{$book->stock}}</th>
        </tr>

    </table>
    
@endsection