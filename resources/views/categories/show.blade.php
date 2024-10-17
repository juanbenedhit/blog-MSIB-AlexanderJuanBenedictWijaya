@extends('layouts.app')

@section('title', 'Category Details')

@section('content')
    <h1>Category Details</h1>
    <a href="{{ route('categories.index') }}" class="btn btn-primary mb-3">Back</a>
    <div class="d-flex justify-content-center">
        <div class="card w-50">
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
@endsection
