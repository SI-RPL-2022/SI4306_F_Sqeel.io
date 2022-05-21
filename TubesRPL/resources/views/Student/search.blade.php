@extends('Layout.main')
@section('content')
    <div class="m-4 mb-5">
        <center>
            <h1>Hasil Pencarian: {{ $key }}</h1>
            <p class="lib-subtittle">Browse our entire courses collection</p>
        </center>
    </div>
    <div class="container">
        <center>
            <div class="row row-cols-3" style="width: 80%">
                @foreach ($playlists as $playlist)
                    <div class="col">
                        <a href="/materi/{{ $playlist->id }}" class="kategori">
                            <div class="card border" id="web">
                                <img src="/storage/thumbnail/{{ $playlist->thumbnail }}" class="card-img-top p-3" alt="..."
                                    style="width: 15.5rem; height: 15rem">
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
