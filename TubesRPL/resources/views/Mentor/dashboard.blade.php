@extends('layout.mentor')
{{-- @dd($data, $count) --}}
@section('content')
    <center>
        <h1>Dashboard</h1>
        <div class="row">
            <div class="col">
                <div class="card bg-primary p-3" style="width: 15rem; height:8rem;">
                    <p>aaa</p>
                </div>
            </div>
            <div class="col">
                <div class="card bg-danger p-3" style="width: 15rem; height:8rem;">
                    <p>aaa</p>
                </div>
            </div>
            <div class="col">
                <div class="card bg-warning p-3" style="width: 15rem; height:8rem;">
                    <p>aaa</p>
                </div>
            </div>
        </div>
    </center>

    <h4 class="analytic fw-bold">Analytics</h4>
    <div class="d-flex justify-content-around">
        <div class="border rounded p-5 shadow" style="background: white">
            <b>My Course Enrolment</b>
            <canvas id="myChart"></canvas>
        </div>
        <div class="border rounded p-5 shadow" style="background: white">
            <canvas id="myChart"></canvas>
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
