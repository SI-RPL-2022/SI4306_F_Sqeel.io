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
            @if (count($playlist) == 0)
                <h1 class="mt-5">You dont have course yet</h1>
            @else
                @foreach ($playlist as $item)
                    <div class="col-md-4 course mb-3">
                        <div class="card p-2" style="width: 15rem; height:17rem;">
                            <center>
                                <img class="card-img-top" src="/storage/thumbnail/{{ $item->thumbnail }}" alt=""
                                    style="width:10rem;height:10rem">
                            </center>
                            <a href="/edit/materi/{{ $item->judul }}" class="btn b-editcourse"><i
                                    class="fa-regular fa-pen-to-square"></i></a>
                            <form action="/playlist/{{ $item->id }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn b-deletecourse" type="submit"><i
                                        class="fa-regular fa-trash-can"></i></button>
                            </form>
                            <div class="card-body">
                                <a class="nav-link" href="/video/{{ $item->video[0]->idvideo }}">{{ $item->judul }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </center>
@endsection
