@extends('layouts.app')

@section('title', 'Edit Category')

@section('content')

    <h1 class="text-white d-flex justify-content-center fw-bold mb-4">Edit Category</h1>

    <div class="d-flex justify-content-start">
        <button class="btn btn-outline-primary">
            <a class="text-decoration-none text-white fw-bolder" href="{{ route('categories.index') }}">Back</a>
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
            <form action="{{route('categories.update', $category->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') ?? $category->name }}">
                </div>
                <div class="form-group mb-3">
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" class="form-control" value="{{ old('description') ?? $category->description }}">
                </div>
                <button type="submit" class="btn btn-light mt-2 text-primary fw-bold">Update</button>

            </form>
        </div>
    </div>
@endsection