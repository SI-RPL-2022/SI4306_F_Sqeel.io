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
                            <span><img src="/images/dummy.jpg" class="profile"
                                    style="margin-top: -10px; margin-right:1rem;" alt="">Wiridho
                                Yu</span>
                        </div>
                    </div>

                    <div class="row border-top mt-3 pt-3">
                        <p><b>Video Description</b></p>
                        <span class="" style="color: #9C9AAA">Watch premium course free of cost and enhance
                            your
                            skills. The content provided here is only for
                            Education purpose and subject to copyrights of the owner. We respect the Intellectual Property
                            Rights of the content owner.</span>
                    </div>


                </div>
                <div class="kanan col border">
                    <div class="div">
                        <h5 class=" mb-2 mt-3">The Complete of {{ $playlist->judul }} Course</h5>
                        <div class="progress mb-4">
                            <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                aria-valuemax="100"></div>

                        </div>
                        <hr>


                    </div>

                    {{-- <h2>{{ $playlist->judul }}</h2> --}}
                    <ul style="padding-left: 0;">
                        @foreach ($playlist->video as $list)
                            <li class="listvid" style="list-style: none;">
                                <a class="vid" href="/video/{{ $list->idvideo }}"
                                    style="text-decoration: none">{{ $list->judulVideo }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
