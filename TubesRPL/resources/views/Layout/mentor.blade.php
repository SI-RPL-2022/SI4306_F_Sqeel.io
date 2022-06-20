<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/abb0f6e59c.js" crossorigin="anonymous"></script>

    {{-- Link CSS --}}
    {{-- <link rel="stylesheet" href="/css/style.css"> --}}
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/materi.css">
</head>

<body>
    <div class="d-flex flex-column flex-shrink-0 p-3 absolute-top sidenav" style="width: 240px; height:100%">
        <a class="navbar-brand m-3" href="/"><img src="/images/logo.png" alt="" width="85%"></a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <center>
                <li class="nav-item">
                    @if (empty(auth()->user()->profile))
                    <img src=" /images/profil/profile.jpg" class="profile-dashboard" alt="">
                    @else
                    <img src=" /storage/profile/{{ auth()->user()->profile }}" class="profile-dashboard ms-3 mt-1 me-1" alt="">
                    @endif
                </li>
                <li class="nav-item ">
                    <h3 class="nav-link" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->nama }}
                    </h3>
                </li>
            </center>
            <li class="nav-item">
                <a href="/mentor/index" class="nav-link link-dark {{ $title == 'Sqeel.io | Mentor Dashboard' ? 'active' : '' }}" aria-current="page">
                    <i class="fa-solid fa-chart-line me-2" width="16" height="16">
                    </i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="/mentor/mycourse" class="nav-link link-dark {{ $title == 'Sqeel.io | My Courses' || $title == 'Sqeel.io | Edit Courses' ? 'active' : '' }}">
                    <i class="fa-solid fa-book me-2" width="16" height="16">
                    </i>
                    Courses
                </a>
            </li>
            <li>
                <a href="/mentor/myvideos" class="nav-link link-dark {{ $title == 'Sqeel.io | My Videos' ? 'active' : '' }}">
                    <i class="fa-solid fa-book me-2" width="16" height="16">
                    </i>
                    Videos
                </a>
            </li>
            <li>
                <a href="/mentor/myreviews" class="nav-link link-dark {{ $title == 'Sqeel.io | My Reviews' ? 'active' : '' }}">
                    <i class="fa-solid fa-book me-2" width="16" height="16">
                    </i>
                    Reviews
                </a>
            </li>
            <li>
                <a href="/profile/{{ auth()->user()->id }}" class="nav-link link-dark {{ $title == 'Sqeel.io | Edit Profile' ? 'active' : '' }}">
                    <i class="fa-solid fa-user me-2" width="16" height="16">
                    </i>
                    Profile
                </a>
            </li>
        </ul>
        <a href="/logout" class="btn btn-danger">Logout</a>
    </div>
    <div class="row" style="min-height: 100vh">
        <div class="col-2">

        </div>
        <div class="col">
            <div class="container-fluid bg-light" id="page-container">
                <div class="div" id="content-wrap">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="/js/materi.js"></script>

</body>

</html>