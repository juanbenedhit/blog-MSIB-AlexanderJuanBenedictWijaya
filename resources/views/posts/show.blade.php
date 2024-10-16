@extends('layouts.app')

@section('title', 'Post Details')

@section('content')
    <h1>Post Details</h1>
    <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary mb-3">Back</a>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Category: {{ $post->category->name }}</h6>
            <p class="card-text">{{ $post->content }}</p>
            @if ($post->image)
                <img src="{{ asset('storage/'.$post->image) }}" alt="Post image" class="img-fluid mt-3">
            @endif
            <p class="mt-3">
                Status: 
                <span class="badge {{ $post->is_published ? 'bg-success' : 'bg-secondary' }}">
                    {{ $post->is_published ? 'Published' : 'Draft' }}
                </span>
            </p>
        </div>
    </div>
@endsection