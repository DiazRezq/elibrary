@extends('layouts.app')

@section('title', 'Member')

@section('page-header')
    <div class="row">
        <div class="col-12">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Halaman Member</h1>
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
                    <a href="{{ route('members.create') }}" class="btn btn-primary"><i class="fa fa-plus mr-1"></i>Add Member</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Adress</th>
                                <th>Birthday</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>password</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($members as $member) 
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $member->code }}</td>
                                <td>{{ $member->name }}</td>
                                <td>{{ $member->gender }}</td>
                                <td>{{ $member->address }}</td>
                                <td>{{ $member->birthday }}</td>
                                <td>{{ $member->phone }}</td>
                                <td>{{ $member->email }}</td>
                                <td>{{ $member->password }}</td>
                                <td>{{ $member->photo }}</td>
                                <td>
                                    <a href="{{ route('members.show', $member->id) }}" class="btn btn-primary">Detail</a>
                                    <a href="{{ route('members.edit', $member->id) }}" class="btn btn-success">Edit</a>
                                    <form action="{{ route('members.destroy', $book->id) }}" method="POST" class="d-inline">
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