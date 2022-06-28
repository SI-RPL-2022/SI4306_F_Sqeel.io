@extends('layout.mentor')

@section('content')
    <div class="container-fluid overlay">
        <center>
            <div class="card text-center" style="margin-top: 10rem; max-width:50rem">
                <h4 class="card-header"> On-Review </h4>
                <div class="card-body">
                    <h5 class="card-text">Your data was submitted and will be reviewed by our team</h5>
                    <a class="btn btn-danger" href="/logout" class="btn btn-primary">logout</a>
                </div>
            </div>
        </center>
    </div>
@endsection
