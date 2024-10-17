@extends('layouts.app')

@section('title', 'Post Details')

@section('content')
    <h1>Post Details</h1>
    <a href="{{ route('posts.index') }}" class="btn btn-primary mb-3">Back</a>
    <div class="d-flex justify-content-center mb-2">
        <div class="card w-50 ">
            <div class="card-header">
                <h4>{{ $post->title }}</h4>
            </div>
            <div class="text-center">
                @if ($post->image)
                    <img src="{{ asset('storage/'.$post->image) }}" alt="Post image" class="img-thumbnail mt-2" style="width: 200px; height: 200px;">
                @else
                    <img src="https://via.placeholder.com/100" alt="Default Image" class="img-thumbnail mt-2 style="width: 200px; height: 200px;">
                @endif
        
            </div>
            <div class="card-body">
                <p><strong>ID :</strong> {{ $post->id }}</p>
                <p><strong>Title :</strong> {{ $post->title }}</p>
                <p><strong>Content :</strong><br> {{ $post->content }}</p>
                <p><strong>Is Published :</strong> {{ $post->is_published ? 'Published' : 'Draft' }}</p>
                <p><strong>Category :</strong> {{ $post->category->name ?? 'No Category' }}</p>
                <p><strong>Author :</strong> {{ $post->author->name ?? 'No Author' }}</p>
            </div>
        </div>
    </div>
@endsection
