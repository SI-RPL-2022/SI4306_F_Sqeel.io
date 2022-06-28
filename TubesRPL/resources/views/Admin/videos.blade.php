@extends('layout.admin')
{{-- @dd($data, $count) --}}
@section('content')
    <center>
        <h1>Users</h1>
        <p class="lib-subtittle">All registred users</p>
    </center>

    <center>
        <div class="row">

            <div class="">
                <table class="table table-striped videos">
                    <thead style="background-color: #6c79e0;color:white;">
                        <tr>
                            <th scope="col" style="border-top-left-radius:10px;">No</th>
                            <th scope="col">id</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Playlist</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col"style="border-top-right-radius:10px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $a = 0;
                        @endphp
                        @if (count($videos) == 0)
                            <tr>
                                <td colspan="6">
                                    <h1 class="mt-5 text-center">There is no video yet</h1>
                                </td>
                            </tr>
                        @else
                            @foreach ($videos as $item)
                                <tr>
                                    <td>{{ $a += 1 }}</td>
                                    <td>{{ $item->idvideo }}</td>
                                    <td>{{ $item->judulVideo }}</td>
                                    <td>{{ $item->playlist->judul }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td>
                                        <a href="/video/{{ $item->id }}/delete" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>


        </div>
    </center>
@endsection
