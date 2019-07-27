@extends('layouts/admin/master-admin')

@section('content')
<div class="card border">
    <div class="card-header">
        <div class="card-title">Grafik Suhu</div>
    </div>
    <div class="card-body">
        <div class="chart-container">
            <canvas id="lineChart"></canvas>
        </div>
    </div>
</div>

@endsection
@section('js')
<script>
    var lineChart = document.getElementById('lineChart').getContext('2d');
    var myLineChart = new Chart(lineChart, {
        type: 'line',
        data: {
            labels: [
                @foreach ($suhu as $suhu)
                @php
                    $suhu = $suhu['waktu'];   
                @endphp
                    '{{"$suhu"}}',
                    
                @endforeach

            ],
            datasets: [{
                label: "Data Suhu",
                borderColor: "#1d7af3",
                pointBorderColor: "#FFF",
                pointBackgroundColor: "#1d7af3",
                pointBorderWidth: 2,
                pointHoverRadius: 4,
                pointHoverBorderWidth: 1,
                pointRadius: 4,
                backgroundColor: 'rgba(62, 153, 250,0.4)',
                fill: true,
                borderWidth: 2,
                data: [

                    @foreach ($suhuu as $suhuu)
                    @php
                        $suhuu = $suhuu['nilai'];
                    @endphp
                        '{{"$suhuu"}}',
                @endforeach


                ]
            }]
        },
        options: {
            legend: {
                display: false                
            }
        }
    });
</script>
    
@endsection