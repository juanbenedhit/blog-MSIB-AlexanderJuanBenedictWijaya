@extends('layouts.app')

@section('title', 'Author Details')

@section('content')
    <h1>Author Details</h1>
    <a href="{{ route('authors.index') }}" class="btn btn-secondary mb-3">Back to Authors</a>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $author->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $author->email }}</h6>
            <p class="card-text">{{ $author->bio }}</p>
        </div>
    </div>

    <h2 class="mt-4">Posts by this author</h2>
    <div class="list-group">
        @forelse ($author->posts as $post)
            <a href="{{ route('posts.show', $post->id) }}" class="list-group-item list-group-item-action">
                {{ $post->title }}
            </a>
        @empty
            <p>No posts by this author.</p>
        @endforelse
    </div>
@endsection