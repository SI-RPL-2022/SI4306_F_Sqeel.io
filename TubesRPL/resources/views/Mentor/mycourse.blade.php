@extends('layout.mentor')
{{-- @dd($data, $count) --}}
@section('content')
    <center>
        <h1>My Courses</h1>
        <p class="lib-subtittle">All courses you have made</p>
    </center>

    <div class="mt-5 mb-4 d-flex">
        <a class="new btn btn-primary border-0 me-4" href="/create/materi" style="background: #B48BF0;">Create New
            Course</a>
    </div>
    <center>
        <div class="row">
            @foreach ($playlist as $item)
                <div class="col-md-4 course mb-3">
                    <div class="card p-2" style="width: 15rem; height:20rem;">
                        <img class="card-img-top" src="/storage/thumbnail/{{ $item->thumbnail }}" alt="">
                        <a href="/edit/materi/{{ $item->judul }}" class="btn b-editcourse"><i
                                class="fa-regular fa-pen-to-square"></i></a>
                        <button class="btn b-deletecourse"><i class="fa-regular fa-trash-can"></i></button>
                        <div class="card-body">
                            <a href="/video/{{ $item->video[0]->idvideo }}">{{ $item->judul }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-md-4 course">
                <div class="card p-2" style="width: 14rem; height:20rem;">
                    <img class="card-img-top" src="\images\bg2.jpg" alt="">
                    <a href="" class="btn b-editcourse"><i class="fa-regular fa-pen-to-square"></i></a>
                    <button class="btn b-deletecourse"><i class="fa-regular fa-trash-can"></i></button>
                    <div class="card-body">
                        <p>{{ $item->judul }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 course">
                <div class="card p-2" style="width: 14rem; height:20rem;">
                    <img class="card-img-top" src="\images\bg2.jpg" alt="">
                    <a href="" class="btn b-editcourse"><i class="fa-regular fa-pen-to-square"></i></a>
                    <button class="btn b-deletecourse"><i class="fa-regular fa-trash-can"></i></button>
                    <div class="card-body">
                        <p>{{ $item->judul }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 course">
                <div class="card p-2" style="width: 14rem; height:20rem;">
                    <img class="card-img-top" src="\images\bg2.jpg" alt="">
                    <a href="" class="btn b-editcourse"><i class="fa-regular fa-pen-to-square"></i></a>
                    <button class="btn b-deletecourse"><i class="fa-regular fa-trash-can"></i></button>
                    <div class="card-body">
                        <p>{{ $item->judul }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 course">
                <div class="card p-2" style="width: 14rem; height:20rem;">
                    <img class="card-img-top" src="\images\bg2.jpg" alt="">
                    <a href="" class="btn b-editcourse"><i class="fa-regular fa-pen-to-square"></i></a>
                    <button class="btn b-deletecourse"><i class="fa-regular fa-trash-can"></i></button>
                    <div class="card-body">
                        <p>{{ $item->judul }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 course">
                <div class="card p-2" style="width: 14rem; height:20rem;">
                    <img class="card-img-top" src="\images\bg2.jpg" alt="">
                    <a href="" class="btn b-editcourse"><i class="fa-regular fa-pen-to-square"></i></a>
                    <button class="btn b-deletecourse"><i class="fa-regular fa-trash-can"></i></button>
                    <div class="card-body">
                        <p>{{ $item->judul }}</p>
                    </div>
                </div>
            </div>
        </div>
    </center>
@endsection
