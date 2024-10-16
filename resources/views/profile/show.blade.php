@extends('layouts.app')

@section('title', 'User Profile')

@section('content')
    <h1>User Profile</h1>
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $user->name }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
            <p class="card-text"><strong>Phone:</strong> {{ $user->phone ?? 'Not provided' }}</p>
            <p class="card-text"><strong>Address:</strong> {{ $user->address ?? 'Not provided' }}</p>
            <p class="card-text"><strong>Birth Date:</strong> {{ $user->birth_date ? $user->birth_date->format('d/m/Y') : 'Not provided' }}</p>
            <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
        </div>
    </div>
@endsection