@extends('template')

@section('title', 'Create Book')

@section('body')
    <div class="m-5">
        <h1 class="text-center">Create Book</h1>
        <form action="/store-book" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Judul</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Judul">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Author</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="Author">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Publish Date</label>
                <input type="date" class="form-control" id="exampleInputPassword1" name="PublishDate">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Stock</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="Stock">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>

@endsection
