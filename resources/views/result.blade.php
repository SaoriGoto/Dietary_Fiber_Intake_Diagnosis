@extends('layout')

{{-- Main contents --}}
@section('contents')
    <h1>あなたが摂取した食物繊維量</h1>
        <div style="width: 1000px; height: 500px;">
        <canvas id="myChart"></canvas>
        </div>

    <a href="/dietary-fiber-list">食物繊維が多い食材を見る</a><br>
    <a href="/foodstuff-register">食材登録画面に戻る</a><br>
    <hr>
    <a href="/top">トップページに戻る</a>

    <script>
        var solubleFiber = {{ $solubleFiber }};
        var insolubleFiber = {{ $insolubleFiber }};
        var targetValueSoluble = {{ $targetValueSoluble }};
        var targetValueInsoluble = {{ $targetValueInsoluble }};
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['水溶性食物繊維目標摂取量', 'あなたが摂取した水溶性食物繊維量', '不溶性食物繊維目標摂取量', 'あなたが摂取した不溶性食物繊維量'],
                    datasets: [{
                        label: '１日の食物繊維目標摂取量とあなたが摂取した食物繊維量',
                        data: [targetValueSoluble, solubleFiber, targetValueInsoluble, insolubleFiber],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
@endsection