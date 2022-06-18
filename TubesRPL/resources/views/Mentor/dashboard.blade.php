@extends('layout.mentor')
{{-- @dd($data, $count) --}}
@section('content')
    <h4 class="analytic fw-bold">Analytics</h4>
    <div class="d-flex justify-content-around ">
        <div class="border rounded p-5 shadow">
            <b>My Course Enrolment</b>
            <canvas id="myChart"></canvas>
        </div>
        <div class="border rounded p-5 shadow">
            <canvas id="myChart"></canvas>
        </div>
    </div>

    <div class="mt-5 mb-4 d-flex justify-content-between ">
        <h4 class="courses fw-bold">Courses</h4>
        <a class="new btn btn-primary border-0 me-4" href="/create/materi" style="background: #B48BF0;">Create New
            Course</a>
    </div>
    <center>
        <div class="row">
            @foreach ($playlist as $item)
                <div class="col-md-4 course">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="/images/card/card.png" alt="">
                        <a href="/edit/materi/{{ $item->judul }}" class="btn b-editcourse"><i
                                class="fa-regular fa-pen-to-square"></i></a>
                        <button class="btn b-deletecourse"><i class="fa-regular fa-trash-can"></i></button>
                        <div class="card-body">
                            <p>{{ $item->judul }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var label = <?php echo $label2; ?>;
        var count = <?php echo $count; ?>;
        const data = {
            labels: label,
            datasets: [{
                label: 'Jumlah Enrollment',
                backgroundColor: '#B48BF0',
                borderColor: 'rgb(255, 99, 132)',
                data: count,
            }]
        };

        const config = {
            type: 'bar',
            data: data,
            options: {}
        };
    </script>
    <script>
        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>
@endsection
