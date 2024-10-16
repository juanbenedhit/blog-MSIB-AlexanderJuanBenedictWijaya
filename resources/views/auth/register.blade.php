<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<img class="img-dashboard" src="images/blurry_background.svg" alt="">
<body>
    <div class="container w-75 d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-primary box-area text-white shadow ">
            <div class="box opacity-75">
              <div class="row align-items-center mx-2 ">
                <div class="header-text mb-4 text-center">
                    <h2 class="fw-bold mt-2">Welcome</h2>
                    <p>We are happy to see you here</p>
                </div>
                <form action="{{ url('/register') }}" method="post">
                    @csrf
                    <div class="form-group mb-2 fw-bold">
                        <label for="name">Name</label><br>
                        <input type="text" name="name" id="name" class="form-control form-control-lg bg-light fs-6" placeholder="Email Address">
                    </div>
                    <div class="form-group mb-2 fw-bold">
                        <label for="email">Email</label><br>
                        <input type="email" name="email" id="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email Address">
                    </div>
                    <div class="form-group mb-2 fw-bold">
                        <label for="password">Password</label><br>
                        <input type="password" name="password" id="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                    </div>
                    <div class="form-group mb-2 fw-bold">
                        <label for="password_confirmation">Confirm Password</label><br>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control form-control-lg bg-light fs-6" placeholder="Confirm Password">
                    </div><br>
    
                    <div class="form-group mb-3">
                        <button class="btn btn-light mt-2 text-primary fw-bold w-100 fs-6">Submit</button>
                    </div>

                    <div class="d-flex justify-content-start">
                        <button class="btn btn-outline-primary">
                            <a class="text-decoration-none text-white fw-bolder" href="{{ route('dashboard') }}">Back</a>
                        </button>
                    </div>   
                
                <div class="row mx-1 text-center">
                    <small class="text-white">already have account? <a href="{{ url('/login') }}" class="text-decoration-none text-white fw-bold">Sign in</a></small>
                </div>
              </div>
            </div>
        </div>

    </div>
</body>
</html>
