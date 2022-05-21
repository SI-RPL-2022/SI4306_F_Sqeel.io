@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="main pt-4">
            <div class="row">
                <div class="kiri col-9 border-end">
                    <div class="row">
                        <iframe width="550" height="500" src="https://www.youtube.com/embed/{{ $video->idvideo }}"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <h4 class="mt-2">{{ $video->judulVideo }}</h4>

                        <div class="d-flex justify-content-between">
                            <span style="color:#9C9AAA;">{{ $video->created_at->format('l, d F Y') }}</span>
                            <span><img src="/storage/profile/{{ $playlist->user->profile }}" class="profile"
                                    style="margin-top: -10px; margin-right:1rem;"
                                    alt="">{{ $playlist->user->nama }}</span>
                        </div>
                    </div>

                    <div class="row border-top mt-3 pt-3">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#Description-tab" type="button" role="tab"
                                    aria-controls="Description-tab" aria-selected="true"><b>Video Description</b></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#Forum-tab" type="button" role="tab" aria-controls="Forum-tab"
                                    aria-selected="false"><b>Forum</b></button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="Description-tab" role="tabpanel"
                                aria-labelledby="home-tab" tabindex="0">{{ $video->deskripsi }}</div>
                            <div class="tab-pane fade" id="Forum-tab" role="tabpanel" aria-labelledby="profile-tab"
                                tabindex="0">
                                @foreach ($video->komentar as $komentar)
                                    <div class="pertanyaan">
                                        <img src="/storage/profile/{{ $komentar->user->profile }}" class="mentor mt-3"
                                            style="margin-right:1rem;" alt="">
                                        <a class="btn border-0 mt-3 isi" data-bs-toggle="collapse"
                                            href="#komentar{{ $komentar->id }}" role="button" aria-expanded="false"
                                            aria-controls="collapseExample">
                                            <b>{{ $komentar->judul }}</b>
                                        </a>
                                        <div class="collapse" id="komentar{{ $komentar->id }}">
                                            <div class="forum">
                                                <p>{{ $komentar->isi }}</p>
                                                @if (!is_null($komentar->gambar))
                                                    <img width="500px" class="pb-2"
                                                        src="/storage/komentar/{{ $komentar->gambar }}" alt="">
                                                @endif
                                                <p class="mt-2"><b>Balasan:</b></p>
                                                @foreach ($komentar->reply as $reply)
                                                    <div class="reply-reply">
                                                        <a class="author" href="">{{ $reply->user->nama }}</a>
                                                        <span
                                                            class="date">{{ $reply->created_at->diffForHumans() }}</span>
                                                        <div class="text">{{ $reply->isi }}</div>
                                                    </div>
                                                @endforeach
                                                {{-- form Balasan --}}
                                                <form action="/reply" method="POST">
                                                    @csrf
                                                    <input type="text" name="idvideo" id="idvideo"
                                                        value="{{ $video->idvideo }}" hidden>
                                                    <input type="text" hidden name="user_id" id="user_id"
                                                        value="{{ auth()->user()->id }}">
                                                    <input type="text" hidden name="komentar_id" id="komentar_id"
                                                        value="{{ $komentar->id }}">
                                                    <div class="input-group mb-3 ps-3">
                                                        <input type="text" class="form-control"
                                                            placeholder="Ketik Balasan..." name="isi">
                                                        <button class="btn btn-outline-secondary" type="submit"
                                                            id="button-addon2"><i class="fa-solid fa-reply"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="tambah-pertanyaan">
                                    <a class="btn border-0 mt-3" data-bs-toggle="collapse" href="#collapseExample3"
                                        role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <b>Tambah Pertanyaan</b>
                                    </a>
                                    <form action="/komentar" class="mb-3 collapse" id="collapseExample3" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="judul" class="form-label">Judul</label>
                                            <input type="text" class="form-control" id="judul" name="judul">
                                        </div>
                                        <div class="mb-3">
                                            <label for="deskripsi" class="form-label">Deskripsi</label>
                                            <input type="text" class="form-control" name="isi" id="isi">
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Sisipkan Gambar</label>
                                            <input class="form-control" type="file" name="gambar" id="gambar"
                                                accept="image/*">
                                        </div>
                                        <input type="text" name="user_id" id="user_id" value="{{ auth()->user()->id }}"
                                            hidden>
                                        <input type="text" name="video_id" id="video_id" value="{{ $video->id }}"
                                            hidden>
                                        <input type="text" name="idvideo" id="idvideo" value="{{ $video->idvideo }}"
                                            hidden>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="kanan col border">
                    <div class="div">
                        <h5 class=" mb-2 mt-3">The Complete of {{ $playlist->judul }} Course</h5>
                        <div class="progress mb-4">
                            <div class="progress-bar" role="progressbar" aria-valuenow="{{ $progress }}"
                                aria-valuemin="0" aria-valuemax="100"
                                style="background-color: #A574ED; width:{{ $progress }}%">{{ $progress }}%</div>
                        </div>
                        <hr>


                    </div>

                    {{-- <h2>{{ $playlist->judul }}</h2> --}}
                    <ul style="padding-left: 0;">
                        @foreach ($playlist->video as $list)
                            <li class="listvid " style="list-style: none;">
                                <div class="list form-check" id="{{ $video->id == $list->id ? 'now' : 'not' }}">
                                    <input class="form-check-input mt-3" type="checkbox" value="" id="checkbox"
                                        {{ $transaksi->contains('video_id', $list->id) ? 'checked' : '' }} disabled>
                                    <a class="vid" href="/video/{{ $list->idvideo }}"
                                        style="text-decoration: none"> {{ $list->judulVideo }}
                                    </a>
                                    <br>
                                    <span class="dfy">Uploaded
                                        at {{ $list->created_at->format('d F Y') }}</span>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
