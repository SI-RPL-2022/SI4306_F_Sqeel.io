@extends('layout.main')

@section('content')
    <div class="container pt-5">
        <div class="row">
            <div class="col-7">
                <span><img src="/images/logo/Web development.png" style="padding-bottom: 3px">
                    <b class="ms-2 fs-5">Web
                        Development</b></span>
                <h4 class="webdev">{{ $playlist->judul }}</h4>
                <div style="width: 39rem">
                    <p class="deskripsi">{{ $playlist->deskripsi }}</p>
                </div>
                <div class="border rounded-3 " style="padding:2rem 0px; padding-right:0.7rem;padding-left:1rem">
                    <span><img class="profile" src="/storage/profile/{{ $playlist->user->profile }}"
                            style="margin-right:0.8rem;"><b>{{ $playlist->user->nama }}</b></span>
                    <button class="rounded-pill ms-3">Mentor</button>
                    <p class="deskripsi text-justify mt-2">{{ $playlist->user->bio }}</p>
                </div>
            </div>
            <div class="col-5 d-flex justify-content-center align-items-center ">
                <div class="card shadow" style="width: 19rem;">
                    <img src="/images/card/card.png" class="card-img-top p-2" alt="...">
                    <div class="card-body d-grid gap-2">
                        <a href="#" class="btn btn enroll">Enroll Course</a>
                    </div>
                </div>
            </div>
        </div>
        <hr style="color: #dedde6">
    </div>
@endsection
