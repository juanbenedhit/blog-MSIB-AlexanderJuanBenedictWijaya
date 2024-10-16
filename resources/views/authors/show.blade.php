@extends('layouts.app')

@section('title', 'View Author')

@section('content')
    <h1>Author Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $author->name }}</h5>
            <p class="card-text">{{ $author->bio }}</p>
        </div>
    </div>

    <a href="{{ route('authors.index') }}" class="btn btn-outline-secondary mt-3">Back</a>
@endsection
