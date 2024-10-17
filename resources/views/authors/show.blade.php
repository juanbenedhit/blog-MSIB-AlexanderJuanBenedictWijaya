    @extends('layouts.app')

    @section('title', 'Author Details')

    @section('content')
        <h1>Author Details</h1>
        <a href="{{ route('authors.index') }}" class="btn btn-primary mb-3">Back</a>
        <div class="d-flex justify-content-center mb-2">
            <div class="card w-50 ">
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
    @endsection
