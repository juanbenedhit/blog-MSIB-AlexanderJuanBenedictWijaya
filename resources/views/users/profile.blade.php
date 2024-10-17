@extends('layouts.app')

@section('title', 'Post Details')

@section('content')
    <h1>User Profile</h1>
    <a href="{{ route('categories.index') }}" class="btn btn-primary">Back</a>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">User Profile</h3>
                    </div>
                    <div class="card-body">
                        <p><strong>ID :</strong> {{ $user->id }}</p>
                        <p><strong>Name :</strong> {{ $user->name }}</p>
                        <p><strong>Email :</strong> {{ $user->email }}</p>
                        <p><strong>Create At :</strong> {{ $user->created_at }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
