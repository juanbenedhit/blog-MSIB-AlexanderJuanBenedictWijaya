@extends('layouts.app')

@section('title', 'Edit Author')

@section('content')
    <h1 class="text-white d-flex justify-content-center fw-bold mb-4" >Edit Author</h1>

    <div class="d-flex justify-content-start">
        <button class="btn btn-outline-primary">
            <a class="text-decoration-none text-white fw-bolder" href="{{ route('authors.index') }}">Back</a>
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
            <form action="{{route('authors.update', $author->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group mt-2">
                    <label for="name">Name :</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $author->name) }}">
                </div>
                <div class="form-group mt-2">
                    <label for="email">Email :</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $author->email) }}">
                </div>
                <div class="form-group mt-2">
                    <label for="phone">Phone Number :</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $author->phone) }}">
                </div>
                <div class="form-group mt-2">
                    <label for="address">Address :</label>
                    <input type="text" name="address" id="address" class="form-control" value="{{ old('address', $author->address) }}">
                </div>
                <div class="form-group mt-2">
                    <label for="image">Upload Image :</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
                <button type="submit" class="btn btn-light mt-3 text-primary fw-bold">Update</button>
            </form>
        </div>
    </div>
@endsection