    @extends('layouts.app')

    @section('title', 'Author Details')

    @section('content')
        <h1 class="text-white d-flex justify-content-center fw-bold mb-4">Author Details</h1>
        
        <div class="d-flex justify-content-start">
        <button class="btn btn-outline-primary">
            <a class="text-decoration-none text-white fw-bolder" href="{{ route('authors.index') }}">Back</a>
        </button>
    </div>       
    
    <div class="d-flex justify-content-center mb-2">
        <div class="card mt-5 bg-primary opacity-75 shadow text-white w-50">
            <div class="card-body ">
                <div class="card-header">
                    <h4>Biodata</h4>
                </div>
                <div class="text-center">
                    @if ($author->image)
                        <img src="{{ asset('storage/'.$author->image) }}" alt="Author image" class="img-thumbnail mt-2" style="width: 200px; height: 200px;">
                    @else
                        <img src="https://via.placeholder.com/100" alt="Default Image" class="img-thumbnail mt-2" style="width: 200px; height: 200px;">
                    @endif
            
                </div>
                <div class="card-body">
                    <p><strong>ID :</strong> {{ $author->id }}</p>
                    <p><strong>Name :</strong> {{ $author->name }}</p>
                    <p><strong>Email :</strong> {{ $author->email }}</p>
                    <p><strong>Phone Number :</strong> {{ $author->phone}}</p>
                    <p><strong>Address :</strong> {{ $author->address }}</p>
                </div>
            </div>
        </div>
    </div>

    @endsection
