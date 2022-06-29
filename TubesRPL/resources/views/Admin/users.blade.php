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
                            <th scope="col">Nama</th>
                            <th scope="col">email</th>
                            <th scope="col">role</th>
                            <th scope="col">bio</th>
                            <th scope="col"style="border-top-right-radius:10px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $a = 0;
                        @endphp
                        @if (count($users) == 0)
                            <tr>
                                <td>
                                    <h1 class="mt-5 text-center">There is no user yet</h1>
                                </td>
                            </tr>
                        @else
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $a += 1 }}</td>
                                    <td>{{ $user->nama }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role->namaRole }}</td>
                                    <td>{{ $user->bio }}</td>
                                    <td>
                                        @if ($user->role_id == 3)
                                            <button class="btn btn-secondary" disabled>Delete</button>
                                        @else
                                            <form action="/user/{{ $user->id }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                        @endif
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
