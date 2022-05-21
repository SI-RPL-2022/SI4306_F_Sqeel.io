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
                                <div class="pertanyaan">
                                    <img src="/storage/profile/{{ auth()->user()->profile }}" class="mentor mt-3"
                                        style="margin-right:1rem;" alt="">
                                    <a class="btn border-0 mt-2" data-bs-toggle="collapse" href="#collapseExample"
                                        role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <b>Bagaimana cara menginstall boostrap tanpa harus di download</b>
                                    </a>
                                    <div class="collapse" id="collapseExample">
                                        <div class="forum">
                                            <p> Some placeholder content for the collapse component. This panel is hidden by
                                                default but revealed when the user activates the relevant trigger.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="pertanyaan">
                                    <img src="/storage/profile/{{ auth()->user()->profile }}" class="mentor mt-3"
                                        style="margin-right:1rem;" alt="">
                                    <a class="btn border-0 mt-2" data-bs-toggle="collapse" href="#collapseExample2"
                                        role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <b>Bagaimana cara menginstall boostrap tanpa harus di download</b>
                                    </a>
                                    <div class="collapse" id="collapseExample2">
                                        <div class="forum">
                                            <p> Some placeholder content for the collapse component. This panel is hidden by
                                                default but revealed when the user activates the relevant trigger.</p>
                                        </div>
                                    </div>
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
