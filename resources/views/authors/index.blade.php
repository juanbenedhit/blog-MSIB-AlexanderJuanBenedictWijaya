@extends('layouts.app')

@section('title', 'Authors')

@section('content')
    <h1>Authors</h1>
    <a href="{{ route('authors.create') }}" class="btn btn-primary mb-2">Create Author</a>
    <div class="list-group">
        @forelse ($authors as $author)
            <div class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <h5><a href="{{ route('authors.show', $author->id) }}">{{ $author->name }}</a></h5>
                    <small>{{ $author->email }}</small>
                </div>
                <div>
                    <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('authors.destroy', $author->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>
            </div>
        @empty
            <p>No authors found.</p>
        @endforelse
    </div>
@endsection