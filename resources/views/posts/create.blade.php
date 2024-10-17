@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
    <h1 class="text-white d-flex justify-content-center fw-bold mb-4">Create Post</h1>

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
            <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" placeholder="Masukan Nama Post" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" placeholder="Masukan Content" class="form-control"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="category">Category</label>
                    <select name="category_id" class="form-control">
                        <option value="">Pilih kategori</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach 
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="author">Author</label>
                    <select name="author_id" class="form-control">
                        <option value="">Pilih Authro</option>
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach 
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="image">Upload Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-check mb-3">
                    <input type="checkbox" name="is_published" class="form-check-input">
                    <label for="is_published" class="form-check-label">Publish</label>
                </div>
                <button type="submit" class="btn btn-light mt-2 text-primary fw-bold">Submit</button>
            </form>
        </div>
    </div>  
@endsection