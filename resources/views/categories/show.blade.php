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
    @if($category->posts->count() > 0)
        <ul class="list-group">
            @foreach($category->posts as $post)
                <li class="list-group-item">
                    <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>No posts in this category.</p>
    @endif
@endsection