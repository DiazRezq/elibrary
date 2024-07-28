@extends('layouts.app')

@section('title', 'Books')

@section('page-header')
    <div class="row">
        <div class="col-12">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Books Lists</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active"><i class="fa fa-book mr-1"></i>Books</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@section('content')
   <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('books.create') }}" class="btn btn-primary"><i class="fa fa-plus mr-1"></i>Add Book</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Code</th>
                                <th>Title</th>
                                <th>ISBN</th>
                                <th>Author</th>
                                <th>Publisher year</th>
                                <th>Stock</th>
                                <th>Rent Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($books as $book) 
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $book->code }}</td>
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->isbn }}</td>
                                <td>{{ $book->author }}</td>
                                <td>{{ $book->published_year }}</td>
                                <td>{{ $book->stock }}</td>
                                <td>{{ $book->rental_price }}</td>
                                <td>
                                    <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary">Detail</a>
                                    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-success">Edit</a>
                                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
   </div>
@endSection