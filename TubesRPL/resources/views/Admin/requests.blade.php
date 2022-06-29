@extends('layout.admin')
{{-- @dd($data, $count) --}}
@section('content')
    <center>
        <h1>Request</h1>
        <p class="lib-subtittle">All Mentor Registration Request</p>
    </center>

    <center>
        <div class="row">

            <div class="">
                <table class="table table-striped videos">
                    <thead style="background-color: #6c79e0;color:white;">
                        <tr>
                            <th scope="col" style="border-top-left-radius:10px;">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">CV</th>
                            <th scope="col">IP</th>
                            <th scope="col" style="border-top-right-radius:10px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $a = 0;
                        @endphp
                        @if (count($requests) == 0)
                            <tr>
                                <td colspan="6">
                                    <h1 class="mt-5 text-center">There is no request yet</h1>
                                </td>
                            </tr>
                        @else
                            @foreach ($requests as $request)
                                <tr>
                                    <td>{{ $a += 1 }}</td>
                                    <td>{{ $request->user->nama }}</td>
                                    <td>{{ $request->user->email }}</td>
                                    @if ($request->status == 'waiting')
                                        <td>
                                            none
                                        </td>
                                        <td>
                                            none
                                        </td>
                                        <td>
                                            <a class="btn btn-secondary btn-sm">
                                                waiting
                                            </a>
                                        </td>
                                    @else
                                        <td><a class="fs-5" href="/storage/cv/{{ $request->cv }}"><i
                                                    class="fa-solid fa-file-arrow-down"></i></a>
                                        </td>
                                        <td><a class="fs-5" href="/storage/cv/{{ $request->pi }}"><i
                                                    class="fa-solid fa-file-arrow-down"></i></a>
                                        </td>
                                        <td>
                                            <a href="/request/accept/{{ $request->id }}"
                                                class="btn btn-primary btn-sm">Accept</a>
                                        </td>
                                    @endif

                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>


        </div>
    </center>
@endsection
