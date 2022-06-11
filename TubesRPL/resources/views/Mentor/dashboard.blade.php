@extends('layout.main')

@section('content')
    <h4 class="analytic fw-bold">Analytics</h4>
    <div class="d-flex justify-content-around ">
        <div class="">
            <img class="" src="/images/dashboard/diagram.png" alt="">
        </div>
        <div class="">
            <img src="/images/dashboard/diagram2.png" alt="">
        </div>
    </div>

    <div class="mt-4 mb-4 d-flex justify-content-between ">
        <span class="courses fw-bold">Courses</span>
        <button class="new btn btn-primary border-0 me-4" type="submit" style="background: #B48BF0;">Create New
            Course</button>
    </div>
    <div class="d-flex justify-content-center gambarCard row row-col-3">
        <div class="col">
            <img src="/images/card/card.png" alt="">
        </div>
        <div class="col">
            <img src="/images/card/card.png" alt="">
        </div>
        <div class="col">
            <img src="/images/card/card.png" alt="">
        </div>
    </div>
@endsection
