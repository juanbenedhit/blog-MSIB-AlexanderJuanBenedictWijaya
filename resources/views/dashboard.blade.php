<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
         .img-dashboard{
            position: absolute;
            height: 100vh;
            width: 100%;
            background-image: cover;
            z-index: -1;
            overflow: hidden;
         }
    </style>
</head>

<img class="img-dashboard" src="images/blurry_background.svg" alt="">

<body class="d-flex justify-content-center ">
    <section>
        <div class="container mt-5">
            <div class="header d-flex justify-content-center align-items-center flex-column mt-5">
                <h2 class="display-1 fw-bold mt-5">Welcome to</h2>
                <h1 class="display-4 fw-bold mt-5" >Blog MSIB</h1>
            </div>
            <div class="begin mt-5 d-flex justify-content-center gap-5">
                @auth
                    <a href="{{ route('categories.index') }}" class="btn btn-primary text-decoration-none rounded  px-4 fw-semibold mt-5">Categories</a>
                    <a href="{{ route('posts.index') }}" class="btn btn-primary text-decoration-none rounded  px-4 fw-semibold mt-5">Posts</a>
                    <a href="{{ route('authors.index') }}" class="btn btn-primary text-decoration-none rounded  px-4 fw-semibold mt-5">Authors</a>
                    
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary text-decoration-none rounded  px-4 fw-semibold mt-5">Log in</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-primary text-decoration-none rounded px-4 fw-semibold mt-5">Register</a>
                    @endif
                @endauth
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>  
</body>
</html>