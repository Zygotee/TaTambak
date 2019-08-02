@extends('layouts/admin/master-admin')

@section('content')
<div class="card border">
    <div class="card-header">
        <div class="card-title">Grafik pH</div>
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
                @foreach ($ph as $waktu)
                @php
                    $waktu = $waktu['waktu'];   
                @endphp
                    '{{"$waktu"}}',
                    
                @endforeach


            ],
            datasets: [{
                label: "Data pH",
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
                    @foreach ($phh as $nilai)
                        @php
                            $nilai = $nilai['nilai'];
                        @endphp
                            '{{"$nilai"}}',
                    @endforeach


                ],
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