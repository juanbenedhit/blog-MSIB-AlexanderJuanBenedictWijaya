@extends('layouts.app')

@section('title', 'Post Details')

@section('content')
    <h1 class="text-white d-flex justify-content-center fw-bold mb-4">Post Details</h1>
    
    <div class="d-flex justify-content-start">
        <button class="btn btn-outline-primary">
            <a class="text-decoration-none text-white fw-bolder" href="{{ route('posts.index') }}">Back</a>
        </button>
    </div>

    <div class="d-flex justify-content-center mb-2">
        <div class="card mt-5 bg-primary opacity-75 shadow text-white w-50">
            <div class="card-body ">
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
    </div>
@endsection
