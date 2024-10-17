@extends('layouts.app')

@section('title', 'Create Author')

@section('content')
    <h1>Create Author</h1>
    <a href="{{ route('authors.index') }}" class="btn btn-outline-secondary mb-3">Back</a>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('authors.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mt-2">
            <label for="name">Name :</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group mt-2">
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group mt-2">
            <label for="phone">Phone Number :</label>
            <input type="text" name="phone" id="phone" class="form-control">
        </div>
        <div class="form-group mt-2">
            <label for="address">Address :</label>
            <input type="text" name="address" id="address" class="form-control">
        </div>
        <div class="form-group mt-2">
            <label for="image">Upload Image :</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>

@endsection