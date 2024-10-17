@extends('layouts.app')

@section('title', 'Create Category')

@section('content')


    <h1 class="text-white d-flex justify-content-center fw-bold mb-4">Create Category</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="d-flex justify-content-start">
        <button class="btn btn-outline-primary">
            <a class="text-decoration-none text-white fw-bolder" href="{{ route('categories.index') }}">Back</a>
        </button>
    </div>

    <div class="card mt-5 bg-primary opacity-75 shadow fw-bolder text-white">
        <div class="card-body ">
            <form action="{{route('categories.store')}}" method="POST">
                @csrf
                <div class="form-group mb-4 ">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Masukan Nama Kategori" class="form-control">
                </div>
                <div class="form-group mb-4">
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" placeholder="Masukan deskripsi Kategori" class="form-control">
                </div>
                <button type="submit" class="btn btn-light mt-2 text-primary fw-bold">Submit</button>
                </div>

            </form>
        </div>
    </div>
    
    

@endsection
