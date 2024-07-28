@extends('layouts.app')

@section('title', 'Add Books')

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
                                <li class="breadcrumb-item active">Add</li>
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
        <div class="col-12 col-lg-8 offset-lg-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add Books</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('books.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Author</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Author">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="isbn">ISBN</label>
                                        <input type="text" class="form-control" id="isbn" name="isbn" placeholder="Enter ISBN">
                                    </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="title">Published Year</label>
                                    <input type="number" class="form-control" id="published_year" name="published_year" placeholder="Enter Year" required>
                                </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select class="form-control" name="category_id" id="category_id" required>
                                    @foreach ($categories as $category  )
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="publisher">author</label>
                            <select class="form-control" name="publisher_id" id="publisher_id">
                                @foreach ($publishers as $publisher  )
                                    <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                                @endforeach
                            </select>
                        </div>
                 </div>
                 <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" class="form-control" name="stock" id="stock" placeholder="Enter Stock">
                    </div>
                 </div>
                 <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" name="price" id="price" placeholder="Enter Price">
                    </div>
                 </div>
                 <div class="col-12">
                    <div class="form-group">
                        <label for="cover_image">Image Cover</label>
                        <input type="file" class="form-control" name="cover_image" id="cover_image" placeholder="URL cover image">
                    </div>
                 </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"><i
                                class="fas fa-save mr-1"></i>Save</button>
                                <a href="{{ route('books.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left mr-1"></i>Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- form start --}}
    </div>
</div>
@endsection

