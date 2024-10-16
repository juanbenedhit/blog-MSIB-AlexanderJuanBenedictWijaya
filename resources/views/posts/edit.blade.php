@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
<h1>Edit Post</h1>
    <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary mb-3">Back</a>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('posts.update', $posts->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') ?? $posts->title }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" value="{{ old('name') ?? $posts->content }}" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select name="category_id" class="form-control">
                <option value="">Choose</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == old('category_id', $posts->category_id) ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="image">Upload Image</label>
            <input type="file" name="image" class="form-control">
            @if ($posts->image)
                <img src="{{ asset('storage/' . $posts->image) }}" class="img-thumbnail mt-2" width="100" />
            @endif
        </div>

        <div class="form-check">
            <input type="checkbox" name="is_published" class="form-check-input" {{ $posts->is_published ? 'checked' : '' }}>
            <label for="isPublished" class="form-check-label">Publish</label>
        </div>

        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>

@endsection
