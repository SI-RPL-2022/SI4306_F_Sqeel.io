@extends('layout.mentor')


@section('content')
    <div class="container">
        <div class="header">
            <h2 class="text-center fw-bold">My Videos</h2>
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
                        <li><a class="dropdown-item" href="/mentor/myvideos/{{ $item->judul }}">{{ $item->judul }}</a>
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
                        <th scope="col">Id Video</th>
                        <th scope="col">Judul Video</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col"style="border-top-right-radius:10px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $a = 0;
                    @endphp
                    @if (isset($playlist))
                        @foreach ($playlist->video as $course)
                            <tr>
                                <td>{{ $a += 1 }}</td>
                                <td>{{ $course->idvideo }}</td>
                                <td>{{ $course->judulVideo }}</td>
                                <td>{{ $course->deskripsi }}</td>
                                <td><a href="/video/{{ $course->idvideo }}/edit" class="btn btn-primary">Edit</a>
                                    <a href="/video/{{ $course->idvideo }}/delete" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="5" class="text-center">
                                <a href="/create/{{ $playlist->judul }}/video" class="btn btn-secondary"
                                    style="background-color: #6c79e0; border:none">tambah video</a>
                            </td>
                        </tr>
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
