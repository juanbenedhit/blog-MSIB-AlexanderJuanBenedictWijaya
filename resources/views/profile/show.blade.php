@extends('layouts.app')

@section('content')
    <h1>User Profile</h1>
    <div>
         <strong>Name:</strong> {{ $user->name }}
    </div>
    <div>
        <strong>Email:</strong> {{ $user->email }}
    </div>
@endsection