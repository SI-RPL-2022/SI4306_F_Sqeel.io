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
                    <span><img class="mentor" src="/storage/profile/{{ $playlist->user->profile }}"
                            style="margin-right:0.8rem;"><b>{{ $playlist->user->nama }}</b></span>
                    <button class="rounded-pill ms-3">Mentor</button>
                    <p class="deskripsi text-justify mt-2">{{ $playlist->user->bio }}</p>
                </div>
            </div>
            <div class="col-5 d-flex justify-content-center align-items-center ">
                <div class="card shadow" style="width: 19rem;">
                    <img src="/storage/thumbnail/{{ $playlist->thumbnail }}" class="card-img-top p-2" alt="...">
                    <div class="card-body">

                        @if ($enroll == false)
                            <form class="d-grid gap-2" action="/enroll" method="POST">
                                @csrf
                                <input type="text" name="user_id" value="{{ auth()->user()->id }}" hidden>
                                <input type="text" name="playlist_id" value="{{ $playlist->id }}" hidden>
                                <input type="text" name="judul" value="{{ $playlist->judul }}" hidden>
                                <button type="submit" class="btn btn enroll">Enroll Course</button>
                            </form>
                        @else
                            <div class="d-grid gap-2">
                                @if (isset($playlist->video[0]))
                                    <a href="/video/{{ $playlist->video[0]->idvideo }}" class="btn btn enroll">
                                        View Course
                                    </a>
                                @else
                                    <a href="" class="btn btn-secondary">
                                        No Video yet
                                    </a>
                                @endif
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
        <hr class="mt-5" style="color: #b5b4be">
        <div class="row mt-5">
            <div class="col-7">
                <h4 style="padding-bottom: 3px"><b>Course Reviews ({{ count($review) }})</b></h4>

                <div class="border rounded-3 " style="padding:2rem 0px; padding-right:0.7rem;padding-left:1rem">
                    @foreach ($review as $item)
                        {{-- @dd($item->user) --}}
                        <div class="reviews mb-5">
                            <span><img class="mentor" src="/storage/profile/{{ $item->profile }}"
                                    style="margin-right:0.8rem;"><b>{{ $item->nama }}</b>

                            </span>
                            <span class="fw-bold text-secondary"
                                style="font-size: 11px; margin-left:0.5rem;">{{ $item->created_at }}</span>
                            <p class="deskripsi text-justify mt-2">{{ $item->body }}</p>
                        </div>
                    @endforeach
                    <div class="">
                        {{ $review->links() }}
                    </div>
                </div>
            </div>
            <div class="col-5 d-flex justify-content-center align-items-center ">
                <div class="card border mt-4" style="width: 19rem;">
                    <h6 class="p-2"><b>Write Review</b></h6>


                    @if ($enroll == false)
                        <div class="card-body text-center">
                            <img src="/images/Student.png" class="p-2" alt="...">
                            <p class="text-secondary">You are not enrolled in this course</p>
                        @else
                            <div class="card-body">

                                <form class="d-grid gap-2" action="/review" method="POST">
                                    @csrf
                                    <input type="text" name="user_id" value="{{ auth()->user()->id }}" hidden>
                                    <input type="text" name="playlist_id" value="{{ $playlist->id }}" hidden>
                                    <input type="text" name="judul" value="{{ $playlist->judul }}" hidden>
                                    <textarea class="form-control" name="body" id="" cols="50" rows="8"
                                        placeholder="Write Your Review Here..."></textarea>
                                    <button type="submit" class="btn btn enroll">Post Review</button>
                                </form>
                    @endif

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
