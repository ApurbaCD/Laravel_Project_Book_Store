@extends('layout')

@section('page-content')

    <legend>New Book</legend>

    <form method="post" action="{{route('books.store')}}">

    @csrf

    {{print_r(old('author'))}}

  <div class="mb-3">
    <label class="form-label">Title</label>
    <input type="text" class="form-control" name="title" paceholder="Book title" value={{old('title')}}>
    @error('title')
    <div class="text-danger">{{$message}}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Author</label>
    <input type="text" class="form-control" name="author" paceholder="Book title"value={{old('author')}}>
    @error('author')
    <div class="text-danger">{{$message}}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">ISBN</label>
    <input type="text" class="form-control" name="isbn" paceholder="Book title"value={{old('isbn')}}>
    @error('isbn')
    <div class="text-danger">{{$message}}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Price</label>
    <input type="text" class="form-control" name="price" paceholder="Book title" value={{old('price')}}>
    @error('price')
    <div class="text-danger">{{$message}}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Stock</label>
    <input type="text" class="form-control" name="stock" paceholder="Book title" value={{old('stock')}}>
    @error('stock')
    <div class="text-danger">{{$message}}</div>
    @enderror
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
  <a href={{route('books.index')}} class="btn btn-danger">Back</a>

</form>


@endsection


