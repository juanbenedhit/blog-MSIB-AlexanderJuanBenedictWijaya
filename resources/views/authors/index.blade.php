@extends('layouts.app')

@section('title', 'Authors')

@section('content')
    <h1 class="text-white fw-bold mb-4">Authors</h1>
    <a href="{{ route('authors.create') }}" class="btn btn-outline-primary mb-4 text-light fw-bold">Create Authors</a>
    <div class="list-group">
        @if (count($authors) >= 0)
            @foreach ($authors as $author)
                <div class="list-group-item justify-content-between align-items-center d-flex shadow">
                    <a href="{{ route('authors.show', $author->id) }}" class="text-decoration-none fw-bold">{{ $author->name }}</a>
                    <div>
                        <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure want to delete this data?');">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        @else
            <div class="list-group-item justify-content-between align-items-center">
                No data
            </div>
        @endif
    </div>
@endsection