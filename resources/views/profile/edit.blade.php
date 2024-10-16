@extends('layouts.app')

@section('title', 'Edit Profile')

@section('content')
    <h1>Edit Profile</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $user->phone) }}">
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <textarea class="form-control" id="address" name="address" rows="3">{{ old('address', $user->address) }}</textarea>
        </div>

        <div class="form-group">
            <label for="birth_date">Birth Date</label>
            <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ old('birth_date', $user->birth_date ? $user->birth_date->format('Y-m-d') : '') }}">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update Profile</button>
    </form>
@endsection