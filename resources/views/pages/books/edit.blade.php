@extends('layouts.app');

@section('content')
<div class="container-fluid">
    <h1>Edit Book</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $book->title }} required">
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" id="author" class="form-control" value="{{ $book->author }} required">
        </div>
        <div class="form-group">
            <label for="published_year">Pulbished Year</label>
            <input type="number" name="published_year" id="published_year" class="form-control" value="{{ $book->published_year }} required">
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <select class="form-control" name="category_id" id="category_id" required>
                @foreach ($categories as $category  )
                    <option value="{{ $category->id }}" {{ $category->id == $book->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="publisher_id">Publisher</label>
            <select class="form-control" name="publisher_id" id="publisher_id" required>
                @foreach ($publishers as $publisher  )
                    <option value="{{ $publisher->id }}" {{ $publisher->id == $book->publisher_id ? 'selected' : '' }}>{{ $publisher->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="cover_image">Cover Image</label>
            <input type="text" name="cover_image" id="cover_image" class="form-control" value="{{ $book->cover_image }} required">
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" name="stock" id="stock" class="form-control" value="{{ $book->stock }} required">
        </div>
        <div class="form-group">
            <label for="rental_price">Rental Price</label>
            <input type="number" class="form-control" id="rental_price"
            name="rental_price" value="{{ $book->rental_price }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection