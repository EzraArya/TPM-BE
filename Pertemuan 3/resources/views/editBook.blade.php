@extends('template')

@section('title', 'edit book')

@section('body')

    <form action="/update-book/{{ $book->id }}" method="POST">
        @csrf
        @method('patch');
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title"
                value="{{ $book->Judul }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Author</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="author"
                value="{{ $book->Author }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Stock</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="stock"
                value="{{ $book->Stock }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">PublishDate</label>
            <input type="date" class="form-control" id="exampleInputPassword1" name="PublishDate"
                value="{{ $book->PublishDate }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Image</label>
            <input type="file" class="form-control" id="exampleInputPassword1" name="image"
                value="{{ $book->image }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
