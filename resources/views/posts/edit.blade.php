@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')

    <h1 class="text-white d-flex justify-content-center fw-bold mb-4" >Edit Post</h1>
    
    <div class="d-flex justify-content-start">
        <button class="btn btn-outline-primary">
            <a class="text-decoration-none text-white fw-bolder" href="{{ route('posts.index') }}">Back</a>
        </button>
    </div>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="card mt-5 bg-primary opacity-75 shadow fw-bolder text-white">
        <div class="card-body ">
            <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
    
                <div class="form-group mb-3">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $post->title) }}">
                </div>
    
                <div class="form-group mb-3">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" class="form-control">{{ old('content', $post->content) }}</textarea>
                </div>
    
                <div class="form-group mb-3">
                    <label for="category">Category</label>
                    <select name="category_id" class="form-control">
                        <option value="">Choose</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
    
                <div class="form-group mb-3">
                    <label for="author">Author</label>
                    <select name="author_id" class="form-control">
                        <option value="">Choose</option>
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}" {{ $post->author_id == $author->id ? 'selected' : '' }}>
                                {{ $author->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
    
                <div class="form-group mb-3">
                    <label for="image">Upload Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
    
                <div class="form-check mb-3">
                    <input type="checkbox" name="is_published" class="form-check-input" {{ $post->is_published ? 'checked' : '' }}>
                    <label for="is_published" class="form-check-label">Publish</label>
                </div>
    
                <button type="submit" class="btn btn-light mt-2 text-primary fw-bold">Update</button>
            </form>
        </div>
    </div>
@endsection
