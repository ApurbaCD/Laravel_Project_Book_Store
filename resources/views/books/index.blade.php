@extends('layout')

@section('page-content')

    <h1>Book List </h1>

    <table width="50%" border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        @foreach($books as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->price}}</td>
                <td>
                    <a href="{{route('books.show', $book->id)}}">View</a>
                </td>
            </tr>
        @endforeach
    </table>
    
    {{$books->links()}}
@endsection