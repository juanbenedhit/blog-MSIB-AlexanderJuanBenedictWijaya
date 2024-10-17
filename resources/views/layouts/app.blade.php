<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blog MSIB')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<img class="img-fluid" src="images/background.svg" alt="">
<body class="d-flex flex-column">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark shadow-lg p-4 mb-5">
            <div class="container-fluid">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item ms-5">
                            <a class="nav-link ms-5 active fw-bolder" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="nav-item ms-5">
                            <a class="nav-link fw-bold" href="{{ route('categories.index') }}">Category</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link fw-bold" href="{{ route('posts.index') }}">Post</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link fw-bold" href="{{ route('authors.index') }}">Author</a>
                        </li>
                    </ul>
                    <div class="justify-content-end me-2">
                        <a class="nav-link text-light me-5" href="{{ route('profile.profile') }}">
                            <img src="https://img.icons8.com/?size=100&id=7819&format=png&color=FFFFFF" alt="" class="rounded-circle me-2" style="width: 30px;height:30px;">
                            {{ $user->name }}
                        </a>
                    </div>
                </div>
                <div class="justify-content-end me-5">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="rounded bg-danger text-light" onclick="return confirm('Are you sure want to log out?');">Logout</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-3">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @yield('content')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>