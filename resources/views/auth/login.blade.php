<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<img class="img-dashboard" src="images/blurry_background.svg" alt="">

<body>
    <div class="container w-50 d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-primary box-area text-white shadow ">
            <div class="box opacity-75">
              <div class="row align-items-center mx-3">
                <div class="header-text mb-4 text-center">
                    <h2 class="fw-bold">Hello, again</h2>
                    <p>We are happy to have you back</p>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show mx-3" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif


                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="email" class="form-label fw-bold">Email</label><br>
                        <input type="email" name="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email Address" value="{{ old('email') }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="form-label fw-bold">Password</label><br>
                        <input type="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                    </div>
    
                    <div class="form-group mb-3">
                        <button class="btn btn-light mt-2 text-primary fw-bold w-100 fs-6">Login</button>
                    </div>

                    <div class="form-group mb-3 d-flex justify-content-start">
                        <button class="btn btn-outline-primary">
                            <a class="text-decoration-none text-white fw-bolder" href="{{ route('dashboard') }}">Back</a>
                        </button>
                    </div> 

                </form>
                
                <div class="row mx-1 text-center">
                    <small class="text-white">Don't have account? <a href="{{ route('register') }}" class="text-decoration-none text-white fw-bold">Sign Up</a></small>
                </div>
                
            </div>
            </div>
        </div>

    </div>
</body>
</html>
