@extends('Layout.main')
@section('content')
<div class="m-4 mb-5">
    <center>
        <h1>Category</h1>
        <p class="lib-subtittle">Browse our entire course collection</p>
    </center>
</div>
<div class="container" style="width: 65%">
    <div class="row row-cols-md-3 mb-5">
        <div class="col">
            <a href="/materi/{playlist}" class="kategori">
                <div class="card" id="web">
                    <img src="/images/kategori/web.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Web Develompent</h5>
                        <p class="card-text">x Courses</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection