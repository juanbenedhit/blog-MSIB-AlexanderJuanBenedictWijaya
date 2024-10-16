@extends('layouts.app')

@section('title', 'Posts Details')

@section('content')
    <h1>Posts Details</h1>
    <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary mb-3">Back</a>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $posts->title }}</h5>
            <p class="card-text">{{ $posts->content }}</p>
            <p>Category: {{ $posts->category->name }}</p>
            @if($posts->image)
                <img src="{{ asset('storage/'.$posts->image) }}" alt="Posts image" class="img-fluid mt-3">
            @endif
            <p class="mt-3">Status: 
                <span class="badge {{ $posts->is_published ? 'bg-success' : 'bg-secondary' }}">
                    {{ $posts->is_published ? 'Published' : 'Draft' }}
                </span>
            </p>
        </div>
    </div>
@endsection