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
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: white">
        <div class="container">
            <a class="navbar-brand m-3" href="/"><img src="/images/logo.png" alt="" width="85%"></a>
            <form action="" class="search-bar ms-3">
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
                <input type="text" placeholder="Search Courses.." name="search">
            </form>
            <div class="collapse navbar-collapse ms-5" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link ms-2" href="#">Library</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-3" href="#">My Learning</a>
                    </li>
                    <li class="nav-item">
                        <img src="/images/dummy.jpg" class="profile ms-3 mt-1 me-1" alt="">
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Steve
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">User Dashboard</a></li>
                            <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- <div class="">
               
    </div> --}}


    <div class="container">
        @yield('content')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <footer>
        <center>&#0169 Kelompok RPL 2022. All rights Reserved</center>
    </footer>
</body>

</html>
