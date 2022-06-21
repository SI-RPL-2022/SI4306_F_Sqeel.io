@extends('layout.main')

@section('content')
    <div>
        <h4 class="enrolled">Enrolled Courses ({{ count($enrolls) }})</h4>
        <center>
            <div class="row row-cols-3" style="width: 80%">
                @foreach ($enrolls as $enroll)
                    {{-- @dd($enroll->playlist) --}}
                    <div class="col mt-3">
                        <a href="/materi/{{ $enroll->playlist->judul }}" class="kategori">
                            <div class="card border p-3" id="web" style="height:18rem">
                                <center>
                                    <img src="/storage/thumbnail/{{ $enroll->playlist->thumbnail }}"
                                        class="card-img-top p-2" alt="..." style="width:10rem;height:10rem">
                                </center>
                                <div class="card-body text-center">
                                    <h5 class="card-title" style="font-size: 16px">{{ $enroll->playlist->judul }}</h5>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: {{ $enroll->progress }}%;"
                                        aria-valuenow="{{ $enroll->progress }}" aria-valuemin="0" aria-valuemax="100">
                                        <span class="percent text-center">{{ $enroll->progress }}%</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </center>
    </div>
@endsection
