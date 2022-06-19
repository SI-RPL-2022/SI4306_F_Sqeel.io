@extends('layout.main')

@section('content')
    <div>
        <h4 class="enrolled">Enrolled Courses (8)</h4>
        <center>
            <div class=" d-flex justify-content-evenly flex-wrap mb-5">
                <div class="  studentContent mb-5">
                    <img src="/images/card/card.png" width="350px" alt="">
                    <h5 class="studentTitle">The Complete Web Development <br> Bootcamp</h5>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                            aria-valuemax="100">
                            <span class="percent text-center">25%</span>
                        </div>

                    </div>
                </div>
                <div class="  studentContent">
                    <img src="/images/card/card.png" width="350px" alt="">
                    <h5 class="studentTitle">The Complete Web Development <br> Bootcamp</h5>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">25%</div>
                    </div>
                </div>
                <div class="studentContent">
                    <img src="/images/card/card.png" width="350px" alt="">
                    <h5 class="studentTitle">The Complete Web Development <br> Bootcamp</h5>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">25%</div>
                    </div>
                </div>
                <div class="studentContent">
                    <img src="/images/card/card.png" width="350px" alt="">
                    <h5>The Complete Web Development <br> Bootcamp</h5>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">25%</div>
                    </div>
                </div>
                <div class="studentContent">
                    <img src="/images/card/card.png" width="350px" alt="">
                    <h5>The Complete Web Development <br> Bootcamp</h5>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">25%</div>
                    </div>
                </div>
                <div class="  studentContent">
                    <img src="/images/card/card.png" width="350px" alt="">
                    <h5 class="studentTitle">The Complete Web Development <br> Bootcamp</h5>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">25%</div>
                    </div>
                </div>
            </div>
            <div>
                <button type="button" class="btn btn-outline loadMore">Load More</button>
            </div>

        </center>
    </div>
@endsection
