@extends('layouts.app')

@section('title', 'Edit Author')

@section('content')
    <h1>Edit Author</h1>
    <a href="{{ route('authors.index') }}" class="btn btn-secondary mb-3">Back to Authors</a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('authors.update', $author->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $author->name) }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $author->email) }}" required>
        </div>
        <div class="form-group">
            <label for="bio">Bio</label>
            <textarea name="bio" id="bio" class="form-control" rows="3">{{ old('bio', $author->bio) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update Author</button>
    </form>
@endsection