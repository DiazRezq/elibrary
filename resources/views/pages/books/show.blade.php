@extends('layouts.app');

@section('content')
<div class="row">
    <div class="col-12">
        <section class="content-header">
            <div class="container-fluid">
                <h1>Detail Buku</h1>
                <p>Judul: {{ $book->title }}</p>
                <p>Penulis: {{ $book->author }}</p>
                <p>Tahun Terbit: {{ $book->published_year }}</p>
            </div>
        </section>
    </div>
</div>
    
@endsection