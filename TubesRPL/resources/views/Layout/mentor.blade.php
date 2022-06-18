<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/abb0f6e59c.js" crossorigin="anonymous"></script>

    {{-- Link CSS --}}
    {{-- <link rel="stylesheet" href="/css/style.css"> --}}
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/materi.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg absolute-top justify-content-center" style="background-color: white;">
        <div class="container-fluid">
            <a class="navbar-brand m-3" href="/"><img src="/images/logo.png" alt="" width="85%"></a>
            <form action="/search" class="" style="width: 30rem; margin-left: 3.5rem">
                <div class="input-group flex-nowrap">
                    <button type="submit" class="input-group-text" id="addon-wrapping"
                        style="background: none; border-right:none">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                    <input type="text" class="form-control" placeholder="Search Course" name="key"
                        aria-describedby="addon-wrapping" style="border-left: none">
                </div>
            </form>
            <div class="collapse navbar-collapse ms-5" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link ms-3" href="/library">Library</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-4" href="">My Courses</a>
                    </li>

                    @auth
                        <li class="nav-item">
                            @if (empty(auth()->user()->profile))
                                <img src=" /images/profil/profile.jpg" width="30px" height="30px"
                                    class="profile ms-3 mt-1 me-1" alt="">
                            @else
                                <img src=" /storage/profile/{{ auth()->user()->profile }}" width="30px" height="30px"
                                    class="profile ms-3 mt-1 me-1" alt="">
                            @endif
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->nama }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="/mentor/index">User Dashboard</a></li>
                                <li><a class="dropdown-item" href="/profile/{{ auth()->user()->id }}">Edit
                                        Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/logout">Log Out</a></li>
                            </ul>
                        </li>
                    @else
                        <li>
                            <a href="/login" class="btn btn-primary ms-3 p-2 ps-3 pe-3"
                                style="background: #B48BF0; border: none;">Get
                                Started</a>
                        </li>
                    @endauth

                </ul>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col-2 ">
            <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 200px; position:absolute">
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link active" aria-current="page">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#home"></use>
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            My Courses
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#table"></use>
                            </svg>
                            Orders
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#grid"></use>
                            </svg>
                            Products
                        </a>
                    </li>
                </ul>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
                        id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="" width="32" height="32"
                            class="rounded-circle me-2">
                        <strong>mdo</strong>
                    </a>
                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="container-fluid bg-light" id="page-container">
                <div class="div" id="content-wrap">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <footer class="mt-5" id="footer">
        <center>&#0169 Kelompok RPL 2022. All rights Reserved</center>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="/js/materi.js"></script>

</body>

</html>
