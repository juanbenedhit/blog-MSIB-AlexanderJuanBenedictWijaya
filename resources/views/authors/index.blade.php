@extends('layouts.app')

@section('content')
    <h1>Authors</h1>
    <a href="{{ route('authors.create') }}" class="btn btn-primary">Create New Author</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($authors as $author)
                <tr>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->email }}</td>
                    <td>
                        <a href="{{ route('authors.show', $author) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('authors.edit', $author) }}" class="btn btn-sm btn-warning">Edit</a>
                        // resources/views/authors/index.blade.php (lanjutan)
                        <form action="{{ route('authors.destroy', $author) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

// resources/views/authors/create.blade.php
@extends('layouts.app')

@section('content')
    <h1>Create Author</h1>
    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="bio">Bio</label>
            <textarea name="bio" id="bio" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>

@endsection
