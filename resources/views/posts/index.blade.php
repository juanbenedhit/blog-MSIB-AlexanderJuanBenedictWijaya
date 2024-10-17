@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <h1 class="text-white fw-bold mb-4">Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-outline-primary mb-4 text-light fw-bold">Create Post</a>

    <div class="list-group">    
        @if (count($posts) >= 0)
            @foreach ($posts as $post)
                <div class="list-group-item justify-content-between align-items-center d-flex rounded shadow">
                    <div class="d-flex align-items-center">
                        @if ($post->image)
                            <img src="{{ asset('storage/'.$post->image)}}" alt="Post image" class="img-thumbnail me-3" style="width: 100px; height: 100px;">
                        @else
                            <img src="https://via.placeholder.com/100" alt="Default Image" class="img-thumbnail me-3" style="width: 100px; height: 100px;">
                        @endif

                        <div class="d-flex flex-column justify-content-between">
                            <h6><a href="{{ route('posts.show', $post->id) }}" class="text-decoration-none fw-bold">{{ $post->title }}</a></h6>
                            <p>In category {{ $post->category->name }}</p>
                            <p>Author : {{ $post->author->name }}</p>
                            <p>Status:
                                <span class="badge {{ $post->is_published ? 'bg-success' : 'bg-secondary' }}">
                                    {{ $post->is_published ? 'Published' : 'Draft' }}
                                </span>
                            </p>
                        </div>
                    </div>
                    
                    <div class="align-self-center">
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">
                            <span class="d-flex align-items-center justify-content-center p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
                                </svg>
                            </span>
                        </a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure want to delete this data?');">
                                <span class="d-flex align-items-center justify-content-center p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                                    </svg>
                                </span>
                            </button>
                        </form>
                    </div>

                </div><br>
            @endforeach
        @else
            <div class="list-group-item jsutify-content-between align-items-center">
                No data
            </div>
        @endif
    </div>
@endsection