@extends('layout')

@section('title')
    Home
@endsection

@section('page-content')

    <div class="row mt-2" >
        <div class="col-lg-10">
            Search Functionality
        </div>
        <div class="col-lg-2">
            <p class="text-end">
            <a href="{{route('book.create')}}"class="btn btn-primary">New Book</a>
            </p>
        </div>

    </div>



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
                    <a href="{{route('books.edit',$book->id)}}">Edit</a>
                    <form method="post"  action="{{route('books.destroy')}}" onsubmit="return confirm('Are you sure')">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="id" value="{{$book->id}}">
                        <input type="submit" value="delete" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {{$books->links()}}
@endsection