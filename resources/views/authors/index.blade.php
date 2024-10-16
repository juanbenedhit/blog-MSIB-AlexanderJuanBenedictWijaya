@extends('layouts.app')

@section('title', 'Authors')

@section('content')
    <h1>Authors</h1>
    <a href="{{ route('authors.create') }}" class="btn btn-primary mb-3">Create Author</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Bio</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td>{{ $author->id }}</td>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->bio }}</td>
                    <td>
                        <a href="{{ route('authors.show', $author->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('authors.destroy', $author->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
