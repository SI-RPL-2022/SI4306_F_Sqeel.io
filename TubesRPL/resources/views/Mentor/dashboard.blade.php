@extends('layout.mentor')
{{-- @dd($data, $count) --}}
@section('content')
    <center>
        <h1 class="mb-5">Dashboard</h1>
        <div class="row">
            <div class="col">
                <div class="card pt-4 ps-4 shadow d-flex flex-row" style="width: 15rem; height:6.2rem;">
                    <i class="d-icon fa-solid fa-book me-3"></i>
                    <h5><b>Courses</b><br>
                        <p>{{ count($playlist) }}</p>
                    </h5>

                </div>
            </div>
            <div class="col">
                <div class="card pt-4 ps-4 shadow d-flex flex-row" style="width: 15rem; height:6.2rem;">
                    <i class="d-icon fa-solid fa-photo-film me-3"></i>
                    <h5><b>Videos</b><br>
                        <p>{{ $videos }}</p>
                    </h5>

                </div>
            </div>
            <div class="col">
                <div class="card pt-4 ps-4 shadow d-flex flex-row" style="width: 15rem; height:6.2rem;">
                    <i class="d-icon fa-solid fa-user-check me-3"></i>
                    <h5><b>Enrollments</b><br>
                        <p>{{ $enroll }}</p>
                    </h5>

                </div>
            </div>
            <div class="col">
                <div class="card pt-4 ps-4 shadow d-flex flex-row" style="width: 15rem; height:6.2rem;">
                    <i class="d-icon fa-solid fa-comments me-3"></i>
                    <h5><b>Reviews</b><br>
                        <p>{{ $review }}</p>
                    </h5>

                </div>
            </div>
        </div>
    </center>

    <h4 class="analytic fw-bold">Analytics</h4>
    <div class="d-flex mb-5" style="width: 100%">
        <div class="border rounded p-5 ms-3 shadow w-75" style="background: white;">
            <b>My Course Enrolment</b>
            <canvas id="myChart"></canvas>
        </div>
        <div class="border rounded p-5 shadow ms-4" style="background: white;">
            <canvas id="myChart2"></canvas>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var label = <?php echo $label2; ?>;
        var count = <?php echo $count; ?>;
        const data = {
            labels: label,
            datasets: [{
                label: 'Jumlah Enrollment',
                backgroundColor: ['#B48BF0', 'rgb(255, 99, 132)'],
                // borderColor: 'rgb(255, 99, 132)',
                data: count,
            }]
        };

        const config = {
            type: 'bar',
            data: data,
            options: {}
        };
        const config2 = {
            type: 'doughnut',
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
    <script>
        const myChart2 = new Chart(
            document.getElementById('myChart2'),
            config2
        );
    </script>
@endsection
