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
            <td>{{$book->id}}</td>
        </tr>
        <tr>
            <th>Author</th>
            <td>{{$book->author}}</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>{{$book->title}}</td>
        </tr>
        <tr>
            <th>Price</th>
            <td>{{$book->price}}</td>
        </tr>
        <tr>
            <th>ISBN</th>
            <td>{{$book->isbn}}</td>
        </tr>
        <tr>
            <th>Stock</th>
            <td>{{$book->stock}}</td>
        </tr>
        <tr>
            <th>Created At</th>
            <td>{{$book->created_at}}</td>
        </tr>
        <tr>
            <th>Updated At</th>
            <td>{{$book->updated_at}}</td>
        </tr>
        <tr>
            <th>
                <a  class="btn btn-danger" href="{{route('books.edit',$book->id)}}">Edit</a>
            </th>
        </tr>

    </table>
    
@endsection