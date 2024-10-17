@extends('layouts.app')

@section('title', 'Category Details')

@section('content')
    <h1 class="text-white d-flex justify-content-center fw-bold mb-4">Category Details</h1>

        
    <div class="d-flex justify-content-start">
        <button class="btn btn-outline-primary">
            <a class="text-decoration-none text-white fw-bolder" href="{{ route('categories.index') }}">Back</a>
        </button>
    </div>

    <div class="d-flex justify-content-center mt-5">
        <div class="card mt-5 bg-primary opacity-75 shadow text-white w-50">
            <div class="card-body ">
                <div class="card-header">
                    <h4>{{ $category->name }}</h4>
                </div>
                <div class="card-body">
                    <p><strong>ID:</strong> {{ $category->id }}</p>
                    <p><strong>Name:</strong> {{ $category->name }}</p>
                    <p><strong>Description:</strong> {{ $category->description ?? 'No description available' }}</p>
                </div>
            </div>
        </div>
    </div>


@endsection
