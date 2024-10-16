@extends('layouts.app')

@section('content')
    <h1>Author Details</h1>
    <div>
        <strong>Name:</strong> {{ $author->name }}
    </div>
    <div>
        <strong>Email:</strong> {{ $author->email }}
    </div>
    <div>
        <strong>Bio:</strong> {{ $author->bio }}
    </div>
    <h2>Posts by this Author</h2>
    <ul>
        @foreach($author->posts as $post)
            <li><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></li>
        @endforeach
    </ul>
@endsection