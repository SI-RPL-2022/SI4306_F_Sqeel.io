@extends('layout.admin')
{{-- @dd($data, $count) --}}
@section('content')
    <center>
        <h1>Courses</h1>
        <p class="lib-subtittle">All Created Course</p>
    </center>

    <center>
        <div class="row">

            <div class="">
                <table class="table table-striped videos">
                    <thead style="background-color: #6c79e0;color:white;">
                        <tr>
                            <th scope="col" style="border-top-left-radius:10px;">No</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Creator</th>
                            <th scope="col">deskripsi</th>
                            <th scope="col">enrollment</th>
                            <th scope="col"style="border-top-right-radius:10px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $a = 0;
                        @endphp
                        @if (count($courses) == 0)
                            <tr>
                                <td colspan="6">
                                    <h1 class="mt-5 text-center">There is no Course yet</h1>
                                </td>
                            </tr>
                        @else
                            @foreach ($courses as $item)
                                <tr>
                                    <td>{{ $a += 1 }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->user->nama }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td>{{ $item->enrollment }}</td>
                                    <td>
                                        <a href="/playlist/{{ $item->id }}/delete" class="btn btn-danger">Delete</a>
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
