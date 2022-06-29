@extends('layout.admin')
{{-- @dd($data, $count) --}}
@section('content')
    <div class="container">
        <center>
            <h1 class="mb-5 fw-bold">Dashboard</h1>
            <div class="row ms-2">
                <div class="col">
                    <div class="card pt-4 ps-4 shadow d-flex flex-row" style="width: 15rem; height:6.2rem;">
                        <i class="d-icon fa-solid fa-book me-3"></i>
                        <h5><b>Courses</b><br>
                            <p>{{ $course }}</p>
                        </h5>

                    </div>
                </div>
                <div class="col">
                    <div class="card pt-4 ps-4 shadow d-flex flex-row" style="width: 15rem; height:6.2rem;">
                        <i class="d-icon fa-solid fa-photo-film me-3"></i>
                        <h5><b>Videos</b><br>
                            <p>{{ $video }}</p>
                        </h5>

                    </div>
                </div>
                <div class="col">
                    <div class="card pt-4 ps-4 shadow d-flex flex-row" style="width: 15rem; height:6.2rem;">
                        <i class="d-icon fa-solid fa-user-check me-3"></i>
                        <h5><b>Mentor</b><br>
                            <p>{{ $mentor }}</p>
                        </h5>

                    </div>
                </div>
                <div class="col">
                    <div class="card pt-4 ps-4 shadow d-flex flex-row" style="width: 15rem; height:6.2rem;">
                        <i class="d-icon fa-solid fa-comments me-3"></i>
                        <h5><b>Student</b><br>
                            <p>{{ $student }}</p>
                        </h5>

                    </div>
                </div>
            </div>
        </center>


        <h4 class="analytic fw-bold">Analytics</h4>
        <center>
            <div class="">
                <div class="border rounded shadow p-5 ms-3" style="width: 96%;background: white;">
                    <canvas id="myChart" style=""></canvas>
                </div>
            </div>
        </center>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript">
        var _ydata3 = <?php echo $months3; ?>;
        var _xdata3 = <?php echo $monthcount3; ?>;
    </script>
    <script>
        const data3 = {
            labels: _ydata3,
            datasets: [{
                label: 'Jumlah user baru Sqeel.io',
                backgroundColor: [
                    'white',
                ],
                borderColor: [
                    '#8c66c5',
                ],
                data: _xdata3,
            }]
        };

        const config3 = {
            type: 'line',
            data: data3,
            options: {}
        };
    </script>

    <script>
        const myChart = new Chart(
            document.getElementById('myChart'),
            config3
        );
    </script>
@endsection
