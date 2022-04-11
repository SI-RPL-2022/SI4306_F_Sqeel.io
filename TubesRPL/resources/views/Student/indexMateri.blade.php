@extends('layout.main')

@section('content')
    <div class="container pt-5">
        <div class="row">
            <div class="col-7">
                <span><img src="/images/logo/Web development.png" style="padding-bottom: 3px">
                    <b class="ms-2 fs-5">Web
                        Development</b></span>
                <h4 class="webdev">The Complete Web Development Program</h4>
                <div style="width: 39rem">
                    <p class="deskripsi">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita
                        delectus
                        dolorem
                        dolores eius vero
                        deserunt asperiores beatae ratione libero, quas sapiente quisquam animi laudantium officia tempore
                        est
                        eaque aliquam provident natus placeat facere dolorum aspernatur. Beatae.</p>
                </div>
                <div class="border rounded-3 " style="padding:2rem 0px; padding-right:0.7rem;padding-left:1rem">
                    <span><img src="/images/profil/dummy2.png" style="margin-right:0.8rem;"><b>Angela Yu</b></span>
                    <button class="rounded-pill ms-3">Mentor</button>
                    <p class="deskripsi text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi vel
                        placeat
                        harum delectus voluptas
                        assumenda, illo voluptatibus, ad et reprehenderit quis maxime corporis temporibus voluptatem, at
                        necessitatibus dicta laudantium qui molestiae dignissimos.</p>
                </div>
            </div>
            <div class="col-5 d-flex justify-content-center align-items-center ">
                <div class="card shadow" style="width: 19rem;">
                    <img src="/images/card/card.png" class="card-img-top p-2" alt="...">
                    <div class="card-body d-grid gap-2">
                        <a href="#" class="btn btn enroll">Enroll Course</a>
                    </div>
                </div>
            </div>
        </div>
        <hr style="color: #dedde6">
    </div>
@endsection
