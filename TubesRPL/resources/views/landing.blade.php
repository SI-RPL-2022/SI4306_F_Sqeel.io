@extends('Layout.landing')
@section('css')
    <link rel="stylesheet" href="/fonts/icon-font/css/style.css">
    <link rel="stylesheet" href="/fonts/typography-font/typo.css">
    <link rel="stylesheet" href="/fonts/fontawesome-5/css/all.css">
    <!-- Plugin'stylesheets  -->
    <link rel="stylesheet" href="/plugins/aos/aos.min.css">
    <link rel="stylesheet" href="/plugins/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/plugins/nice-select/nice-select.min.css">
    <link rel="stylesheet" href="/plugins/slick/slick.min.css">
    <!-- Vendor stylesheets  -->
    <link rel="stylesheet" href="/css/settings.css">
    <link rel="stylesheet" href="/css/landing.css">
    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="/css/custom.css">
@endsection

@section('content')
    <div id="loading">
        <div class="load-circle"><span class="one"></span></div>
    </div>

    <div class="site-wrapper overflow-hidden ">

        <div class="omga-07__hero-area bg-black-squeeze" id="halaman1">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-7 col-xl-6 col-md-7 offset-xl-1" data-aos="fade-right" data-aos-duration="500"
                        data-aos-once="true">
                        <div class="omga-07__hero-content ">
                            <h1 class="title">Learn new skills<br class="d-none d-lg-block">anytime, anywhere
                            </h1>
                            <p>Expand your career opportunity, start learning new skills for free today. With over 100+
                                professional mentors.</p>
                            <a type="submit" class="btn--primary hvr-bounce-to-left">Get Started</a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-4 col-md-5 col-sm-6 mb--30 mb-md--0" data-aos="fade-right"
                        data-aos-duration="500" data-aos-delay="1600" data-aos-once="true">
                        <div class="omga-07__hero-image">
                            <img src="./image/png/l7-hero-image.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Review Area -->
        <div class="omga-07__review-area bg-indigo">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb--30">
                        <div class="card mb-3" style="max-width: 389px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="/images/icon.png" class="ps-3 pt-5" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-weight: bold">Personalized Learning</h5>
                                        <p class="card-text">Students practice at their own pace, first filling in gaps
                                            in their understanding and then accelerating their learning.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="max-width: 389px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="/images/icon-1.png" class="ps-3 pt-4" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-weight: bold">Trusted Content</h5>
                                        <p class="card-text">Created by experts, our library of trusted practice and
                                            lessons.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="max-width: 389px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="/images/icon-2.png" class="ps-3 pt-4" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-weight: bold">Empowering Mentors</h5>
                                        <p class="card-text">Teachers can identify gaps in their students, and meet the
                                            needs of every student.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 " style="margin-top: 12%">
                        <div class="omga-07__hero-content ">
                            <h4 style="color: white" class="title">Why learn at Sqeel.io?
                            </h4>
                            <p style="color: white">Learn from expert professionals and join the largest online community
                                for people who are looking to improve.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Area -->
        <div class="omga-07__content-section">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-6 mb--30 mb--md-0 order-lg-2">
                        <div class="omga-07__content-image" data-aos="fade-right" data-aos-duration="500"
                            data-aos-delay="200" data-aos-once="true">
                            <img src="/images/bg2.jpg" alt="...">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-9 order-lg-1">
                        <div class="omga-07__content-text">
                            <h1 class="title">Become a mentor<br class="d-none d-lg-block">at Sqeel.io
                            </h1>
                            <p>Create custom landing pages with Omega that converts more visitors than any website. With
                                lots of unique blocks, you can easily build a page without coding.</p>
                            <a type="submit" class="btn--primary hvr-bounce-to-left">Apply as mentor</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Area 2 -->
        <div class="omga-07__content-section-2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="omga-07__content-text">
                            <h2 class="title text-center">Recent Courses<h2>
                                    <div class="row row-cols-3">
                                        @foreach ($latest as $playlist)
                                            <div class="col">
                                                <a href="/materi/{{ $playlist->judul }}" class="kategori">
                                                    <div class="card border" id="web">
                                                        <img src="/storage/thumbnail/{{ $playlist->thumbnail }}"
                                                            class="card-img-top p-3" alt="..."
                                                            style="width: 15.5rem; height: 15rem">
                                                        <div class="card-body text-center">
                                                            <h5 class="card-title">{{ $playlist->judul }}</h5>
                                                            <p class="card-text">by: {{ $playlist->user->nama }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Area 3-->
        <div class="omga-07__content-section-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb--30 mb--md-0 order-lg-2">
                        <div class="omga-07__content-image-2 parent" data-aos="fade-right" data-aos-duration="500"
                            data-aos-delay="200" data-aos-once="true">
                            <img src="./images/bg3.jpg" class="image1" alt="">
                            <div class="col-md-4">
                                <img src="/images/Oval Copy.png" class="ps-3 pb-5 image2" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-9 order-lg-1">
                        <div class="omga-07__content-text">
                            <h2 class="title">Save tons of time <br class="d-none d-sm-block d-md-none d-xl-block">for
                                learn new hard skill</h2>
                            <p>You can access this website anywhere and everywhere. Just by a single click you can learn
                                many new hard skill that you need</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Area -->
        {{-- <div class="omga__video-area-1 video-img-overlay">
            <img src="./image/jpeg/video-bg.jpg" alt="" class="video-image">
            <a href="https://youtu.be/jssO8-5qmag" class="play-button" data-fancybox><img
                    src="./image/png/video-play-img.png" alt=""></a>
        </div> --}}
        <!-- Cta Area -->
        <div class="omga-07__review-area bg-indigo">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb--30">
                        <div class="col-lg-6 mb--30 mb--md-0 order-lg-2">
                            <div class="omga-07__content-image-2 parent" data-aos="fade-right" data-aos-duration="500"
                                data-aos-delay="200" data-aos-once="true">
                                <img src="./images/bg4.png" class="image3" alt="">
                                <div class="col-md-4">
                                    <img src="/images/Oval Copy2.png" class="ps-3 pb-5 image4" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 " style="margin-top: 12%">
                        <div class="omga-07__hero-content ">
                            <h4 style="color: white" class="title">Get started now
                            </h4>
                            <p style="color: white">Upgrade your skill now by start learning with our professional mentors
                                without wasting your time.</p>
                            <div class="omga-07__content-btn pt--30">
                                <a href="#cta" class="btn--primary goto">Get started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor Scripts -->
    <script src="/plugins/jquery/jquery.min.js"></script>
    <script src="/plugins/jquery/jquery-migrate.min.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin's Scripts -->
    <script src="/plugins/fancybox/jquery.fancybox.min.js"></script>
    <script src="/plugins/nice-select/jquery.nice-select.min.js"></script>
    <script src="/plugins/aos/aos.min.js"></script>
    <script src="/plugins/slick/slick.min.js"></script>
    <!-- Activation Script -->
    <script src="/js/custom.js"></script>
@endsection
