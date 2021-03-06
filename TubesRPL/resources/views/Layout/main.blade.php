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
    <link rel="stylesheet" href="/css/main.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    @yield('css')

</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top justify-content-center" style="background-color: white;">
        <div class="container" style=" transform: translatex(6%);">
            <a class="navbar-brand m-3" href="/"><img src="/images/logo.png" alt="" width="85%"></a>
            <form action="/search" class="ms-3" style="width: 30rem">
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
                        <a class="nav-link ms-4" href="/student/index">My Learning</a>
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




    <div class="container" id="page-container">
        <div class="div" id="content-wrap">
            @yield('content')
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <footer class="mt-5" id="footer">
        <center>&#0169 Kelompok RPL 2022. All rights Reserved</center>
    </footer>
</body>

</html>
