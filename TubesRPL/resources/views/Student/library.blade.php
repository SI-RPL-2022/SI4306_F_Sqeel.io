@extends('Layout.main')
@section('content')
    <div class="m-4 mb-5">
        <center>
            <h1>Courses Library</h1>
            <p class="lib-subtittle">Browse our entire courses collection</p>
        </center>
    </div>

    <div class="container" style="width: 80%">
        <center>
            <div class="row row-cols-md-3 mb-5">
                <div class="col">
                    <a href="/library/Web Development" class="kategori">
                        <div class="card" id="web">
                            <img src="/images/kategori/web.png" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Web Develompent</h5>
                                <p class="card-text">{{ count($kategoris[0]->playlist) }} Courses</p>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col">
                    <div class="card" id="design">
                        <a href="/library/Design" class="kategori">
                            <img src="/images/kategori/design.png" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Design</h5>
                                <p class="card-text">{{ count($kategoris[1]->playlist) }} Courses</p>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col">
                    <a href="/library/Marketing" class="kategori">
                        <div class="card" id="marketing">
                            <img src="/images/kategori/marketing.png" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Marketing</h5>
                                <p class="card-text">{{ count($kategoris[2]->playlist) }} Courses</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="/library/Photography" class="kategori">
                        <div class="card" id="photo">
                            <img src="/images/kategori/photo.png" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Photography</h5>
                                <p class="card-text">{{ count($kategoris[3]->playlist) }} Courses</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="/library/Mobile Development" class="kategori">
                        <div class="card" id="mobile">
                            <img src="/images/kategori/mobile.png" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Mobile Develompent</h5>
                                <p class="card-text">{{ count($kategoris[4]->playlist) }} Courses</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="/library/Finance" class="kategori">
                        <div class="card" id="finance">
                            <img src="/images/kategori/finance.png" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Finance</h5>
                                <p class="card-text">{{ count($kategoris[5]->playlist) }} Courses </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </center>
    </div>
@endsection
