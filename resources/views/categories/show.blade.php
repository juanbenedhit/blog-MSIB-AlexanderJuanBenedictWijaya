@extends('layouts.app')

@section('title', 'Category Details')

@section('content')
    <h1>Category Details</h1>
    <a href="{{ route('categories.index') }}" class="btn btn-outline-secondary mb-3">Back</a>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $category->name }}</h5>
            <p class="card-text">{{ $category->description }}</p>
        </div>
    </div>

    <h2 class="mt-4">Posts in this category</h2>
    <div class="list-group">
        @forelse ($category->posts as $post)
            <a href="{{ route('posts.show', $post->id) }}" class="list-group-item list-group-item-action">
                {{ $post->title }}
            </a>
        @empty
            <p>No posts in this category.</p>
        @endforelse
    </div>
@endsection