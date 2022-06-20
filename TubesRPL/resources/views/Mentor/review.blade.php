@extends('layout.mentor')
@section('content')
    <div class="container">
        <div class="container-lg">
            <h1 class="h3 mb-2 text-gray-800">Reviews</h1>
            <div class="card-shadow mb-4">
                <div class="table-responsive ">
                    <div class="table-wrapper">
                        <div class="py-3 d-flex justify-content-between">
                            <div class="dropdown ms-auto">
                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"
                                    style="background-color: #6c79e0; border:none">
                                    Dropdown button
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">tes 1</a></li>
                                    <li><a class="dropdown-item" href="#">tes 2</a></li>
                                    <li><a class="dropdown-item" href="#">tes 3</a></li>
                                </ul>
                            </div>
                        </div>

                        <table class="table table-borderless table-striped table-hover" style="text-align: center">
                            <thead style="background: #6c79e0; color:#E2EBF3 ">
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Isi</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>69</td>
                                    <td>liran</td>
                                    <td>jancuk pristel pemayo</td>
                                    <td><a href="" class="delete" title="Delete" data-toggle="tooltip"
                                            style="color: red"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-trash-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                            </svg></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>liran</td>
                                    <td>jgenjot meja awkooawk</td>
                                    <td><a href="" class="delete" title="Delete" data-toggle="tooltip"
                                            style="color: red"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-trash-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                            </svg></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="card-footer d-flex justify-content-between">
                            <div class="ms-auto">
                                <button type="button" class="btn btn-secondary" style="background-color: #6c79e0; border:none">Add Video</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
