<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blog MSIB')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="d-flex flex-column">
<img class="img-fluid" src="/images/background.svg" alt="">

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
                        <button type="submit" class="rounded bg-danger text-light" onclick="return confirm('Are you sure want to log out?');">
                            <span class="d-flex align-items-center justify-content-center p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                                    <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
                                </svg>
                            </span>
                        </button>
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