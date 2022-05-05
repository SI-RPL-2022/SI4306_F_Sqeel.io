@extends('Layout.main')
@section('css')
  <link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css">
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
    
    <div class="omga-07__hero-area bg-black-squeeze">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 col-xl-4 col-md-5 col-sm-6 mb--30 mb-md--0" data-aos="fade-right" data-aos-duration="500" data-aos-delay="1600" data-aos-once="true">
            <div class="omga-07__hero-image">
              <img src="./image/png/l7-hero-image.png" alt="">
            </div>
          </div>
          <div class="col-lg-7 col-xl-6 col-md-7 offset-xl-1" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
            <div class="omga-07__hero-content ">
              <h1 class="title">Travel the world & <br class="d-none d-lg-block"> meet new friends.</h1>
                <p>Create custom landing pages with Omega that convert more visitors than any website. With lots of unique blocks, you can easily build a page without coding.</p>
                <form action="./" class="mt--35">
                  <div class="omga-07__hero-form">
                    <div class="input-group">
                      <input type="text" placeholder="Email address">
                      <i class="icon icon-email-84"></i>
                    </div>
                    <button type="submit" class="btn--primary hvr-bounce-to-left">I want to join</button>
                  </div>
                </form>
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
            <div class="omga-07__single-review">
              <div class="review-star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <p>“OMG! I cannot believe that I have got a brand new landing page after getting Omega. It was super easy to edit and publish. Everyone should try it!”</p>
              <span class="user-name">Jonathan Taylor</span>
            </div>
          </div>
          <div class="col-md-6 mb--30">
            <div class="omga-07__single-review">
              <div class="review-star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star"></i>
              </div>
              <p>“You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change and click save.”</p>
              <span class="user-name">Lizzie Rodgers</span>
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
            <div class="omga-07__content-image" data-aos="fade-right" data-aos-duration="500" data-aos-delay="200" data-aos-once="true">
              <img src="./image/png/l7-mobile.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-md-9 order-lg-1">
            <div class="omga-07__content-text">
              <h2 class="title">Fits everything on <br class="d-none d-sm-block d-md-none d-xl-block"> all your devices.</h2>
                <p>Create custom landing pages with Omega that converts more visitors than any website. With lots of unique blocks, you can easily build a page without coding.</p>
                <div class="content-widget">
                  <div class="single-widget">
                    <h3 class="w-title">Find your trip partner</h3>
                    <p>With lots of unique blocks, you can easily build a page without coding. Build your next landing page quickly.</p>
                  </div>
                  <div class="single-widget">
                    <h3 class="w-title">Plan trip with easy steps</h3>
                    <p>With lots of unique blocks, you can easily build a page without coding. Build your next landing page quickly.</p>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Content Area 2 -->
    <div class="omga-07__content-section-2">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb--30 mb--md-0">
            <div class="omga-07__content-image-2 omga-07__content-image-group">
              <div class="single-image">
                <img src="./image/jpeg/l7-content2-image-1.jpg" alt="" data-aos="zoom-in" data-aos-duration="500" data-aos-once="true">
                <img src="./image/jpeg/l7-content2-image-2.jpg" alt="" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="600" data-aos-once="true">
              </div>
              <div class="single-image">
                <img src="./image/jpeg/l7-content2-image-3.jpg" alt="" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="1000" data-aos-once="true">
                <img src="./image/jpeg/l7-content2-image-4.jpg" alt="" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="1500" data-aos-once="true">
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-9 ">
            <div class="omga-07__content-text">
              <h2 class="title">See the world & <br class="d-none d-sm-block d-md-none d-xl-block">spend less always.</h2>
                <p>Create custom landing pages with Omega that converts more visitors than any website. With lots of unique blocks, you can easily build a page without coding.</p>
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
            <div class="comga-07__ontent-image-3" data-aos="fade-right" data-aos-duration="500" data-aos-delay="200" data-aos-once="true">
              <img src="./image/png/l7-mobile-2.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-md-9 order-lg-1">
            <div class="omga-07__content-text">
              <h2 class="title">Improving your <br class="d-none d-sm-block d-md-none d-xl-block">travel experience.</h2>
                <p>Create custom landing pages with Omega that converts more visitors than any website. With lots of unique blocks, you can easily build a page without coding.</p>
                <div class="omga-07__content-btn pt--30">
                  <a href="#cta" class="btn--primary goto   ">Get this app</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Video Area -->
    <div class="omga__video-area-1 video-img-overlay">
      <img src="./image/jpeg/video-bg.jpg" alt="" class="video-image">
      <a href="https://youtu.be/jssO8-5qmag" class="play-button" data-fancybox><img src="./image/png/video-play-img.png" alt=""></a>
    </div>
    <!-- Cta Area -->
    <div class="omga-07__cta-section" id="cta">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="omga-07__cta-content ">
              <h2>Get the app now</h2>
              <p>Create custom landing pages with Omega that converts <br class="d-none d-md-block"> more visitors than any website.</p>
                <div class="cta-btns">
                  <a href="#" class="apple-store">
                    <img src="image/png/app-store.png" alt="">
                  </a>
                  <a href="" class="google-play">
                    <img src="image/png/google-play.png" alt="">
                  </a>
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