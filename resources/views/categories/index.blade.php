@extends('layouts.app')

@section('title', 'Categories')

@section('content')
    <h1 class="text-white fw-bold mb-4">Categories</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-outline-primary mb-4 text-light fw-bold">Create Category</a>
    <div class="list-group">
        @if (count($categories) >= 0)
            @foreach ($categories as $category)
                <div class="list-group-item justify-content-between align-items-center d-flex shadow">
                    <a href="{{ route('categories.show', $category->id) }}" class="text-decoration-none fw-bold">{{ $category->name }}</a>
                    <div>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline">
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