@extends('Layout.main')
@section('content')
    <div class="m-4 mb-5">
        <center>
            <h1>{{ $kategori->namaKategori }}</h1>
            <p class="lib-subtittle">Browse our entire {{ $kategori->namaKategori }} courses collection</p>
        </center>
    </div>
    <div class="container">
        {{-- Sidebar Filter --}}
        <button class="btn mb-4" id="filterButton" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseFilter" aria-expanded="false" aria-controls="collapseFilter">
            <i class="fa-solid fa-filter"></i> Filters
        </button>

        <div class="collapse" id="collapseFilter">
            <div class="container mb-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quam sequi repudiandae natus quasi earum
                reprehenderit ab, aut veniam dicta voluptatibus quaerat possimus. Iste fuga harum odit blanditiis qui
                impedit velit pariatur amet eius?
            </div>
            <hr class="">
        </div>
        {{-- End Sidebar Filter --}}
        <center>
            <div class="row row-cols-3" style="width: 80%">
                @foreach ($kategori->playlist as $playlist)
                    <div class="col">
                        <a href="/materi/{{ $playlist->id }}" class="kategori">
                            <div class="card border" id="web">
                                <img src="/storage/thumbnail/{{ $playlist->thumbnail }}" class="card-img-top p-3"
                                    alt="..." style="width: 15.5rem; height: 15rem">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $playlist->judul }}</h5>
                                    <p class="card-text">by: {{ $playlist->user->nama }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </center>

    </div>
@endsection
