<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body{
            background-image: url('https://laravel.com/assets/img/welcome/background.svg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        .header h1{
            font-size: 100px;
            font-weight: bolder;
        }
        .header h2{
            font-size: 60px;
            font-weight: bold;
        }
        .content{
            margin-top: 150px;
        }
    </style>
</head>
<body>
    <header>
        @if (Route::has('login'))
            <nav class="container d-flex justify-content-end mt-4 gap-5">
                @auth
                    <a href="{{ route('categories.index') }}" class="bg-light text-decoration-none rounded text-dark fw-semibold">Categories</a>
                    <a href="{{ route('posts.index') }}" class="bg-light text-decoration-none rounded text-dark fw-semibold">Posts</a>
                    <a href="{{ route('authors.index') }}" class="bg-light text-decoration-none rounded text-dark fw-semibold">Authors</a>
                    
                @else
                    <a href="{{ route('login') }}" class="bg-light text-decoration-none rounded text-dark fw-semibold">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="bg-light text-decoration-none rounded text-dark fw-semibold">Register</a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>
    <section>
        <div class="container">
        <img src="https://laravel.com/img/logomark.min.svg" alt="" style="width: 100px; height:100px; text-align: center;">
        <span class="mx-2 fs-2 fw-bolder">Laravel</span>
            <div class="header d-flex justify-content-center align-items-center flex-column fw-bolder mt-5">
                <h2>Welcome to</h2><br>
                <h1>Blog MSIB</h1>
            </div>
            <div class="content d-flex flex-column justify-content-center align-items-center">
                <p class="fs-5 fw-bolder">Created by :</p>
                <p class="fs-5 fw-bolder">Afif Naufal Rahman</p>
            </div>
            <div class="footer"></div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>  
</body>
</html>