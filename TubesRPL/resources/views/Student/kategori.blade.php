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

        {{-- End Sidebar Filter --}}

        <div class="row">
            <div class="col collapse collapse-horizontal col-3" id="collapseFilter">
                <div class="container">
                    <ul class="filter">
                        <hr>
                        <li class="filter-item">Mentor</li>
                        <div id="Mentor-filter">
                            <li class="collapse-li">
                                <form action="/library/{{ $kategori->namaKategori }}">
                                    <div class="input-group input-group-sm mb-3">
                                        <input placeholder="Nama Mentor..." type="text" class="form-control"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                            name="mentor">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"><button
                                                class="border-0" type="submit"><i
                                                    class="fa-solid fa-magnifying-glass"></i></button></span>
                                    </div>
                                </form>
                            </li>
                        </div>
                        <hr>
                        <li class="filter-item">Enrollment</li>
                        <div id="Enrollment-filter">
                            <form action="">
                                <li class="collapse-li">
                                    <div class="form-check">
                                        <label class="form-check-label" for="">
                                            0-5
                                        </label>
                                        <input class="form-check-input" type="checkbox" value="" id="">
                                    </div>
                                </li>
                                <li class="collapse-li">
                                    <div class="form-check">
                                        <label class="form-check-label" for="">
                                            >10
                                        </label>
                                        <input class="form-check-input" type="checkbox" value="" id="">
                                    </div>
                                </li>
                            </form>
                        </div>
                        <hr>
                        {{-- <li class="filter-item"><a href="">Topik</a></li>
                        <div>

                        </div> --}}
                        {{-- <hr> --}}
                    </ul>
                </div>
            </div>
            <div class="col">
                <center>
                    <div class="row row-cols-3" style="width: 80%">
                        @foreach ($playlists as $playlist)
                            <div class="col">
                                <a href="/materi/{{ $playlist->id }}" class="kategori">
                                    <div class="card border" id="web">
                                        <img src="/storage/thumbnail/{{ $playlist->thumbnail }}" class="card-img-top p-5"
                                            alt="..." style="width: 15.5rem; height: 15rem">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">{{ $playlist->judul }}</h5>
                                            <p class="card-text">by: {{ $playlist->nama }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </center>
            </div>
        </div>
    </div>
@endsection
