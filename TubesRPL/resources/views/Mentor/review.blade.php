@extends('layout.mentor')


@section('content')
    <div class="container">
        <div class="header">
            <h2 class="text-center fw-bold">My Reviews</h2>
            @isset($playlist)
                <h5 class="text-center fw-light">Course: {{ $playlist->judul }}</h5>
            @endisset
        </div>
        <div class="buttonPlaylist">
            <div class="dropdown text-end m-5">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown"
                    aria-expanded="false" style="background-color: #6c79e0; color:white">
                    List Playlist
                </button>
                <ul class="dropdown-menu dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    @foreach ($list as $item)
                        <li><a class="dropdown-item" href="/mentor/myreviews/{{ $item->judul }}">{{ $item->judul }}
                                ({{ count($item->review) }})</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="">
            <table class="table table-striped videos">
                <thead style="background-color: #6c79e0;color:white;">
                    <tr>
                        <th scope="col" style="border-top-left-radius:10px;">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Playlist</th>
                        <th scope="col">Isi</th>
                        <th scope="col"style="border-top-right-radius:10px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $a = 0;
                    @endphp
                    @if (isset($playlist))
                        @foreach ($playlist->review as $course)
                            <tr>
                                <td>{{ $a += 1 }}</td>
                                <td>{{ $course->user->nama }}</td>
                                <td>{{ $course->playlist->judul }}</td>
                                <td>{{ $course->body }}</td>
                                <td>
                                    <a href="/review/{{ $course->id }}/delete" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="text-center" colspan="5">Choose Playlist</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>

    </div>
@endsection
