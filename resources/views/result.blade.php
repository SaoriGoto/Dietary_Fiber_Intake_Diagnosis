@extends('layout')

{{-- Main contents --}}
@section('contents')

<header>
    <div class="header-logo-1">食物繊維摂取量診断</div>
    <div class="header-logo-2">Dietary fiber intake diagnosis</div>
</header>

<main class="result-main">
    <h2>＜あなたが摂取した食物繊維量＞</h2>
    <div style="width: 1000px; height: 500px;">
    <canvas id="myChart"></canvas>
    </div>
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
    <p>※食物繊維含有量が0gの場合はグラフが表示されません。</p>
    <p>※「日本食品標準成分表2020年版（八訂）」（文部科学省） （https://www.https://www.mext.go.jp/a_menu/syokuhinseibun/mext_01110.html）を抜粋・加工してデータベースを作成</p>
    <p>※「日本人の食事摂取基準」（2020年版）（厚生労働省）（https://www.mhlw.go.jp/stf/seisakunitsuite/bunya/kenkou_iryou/kenkou/eiyou/syokuji_kijyun.html）男女目標摂取量の平均値を基に目標摂取量を作成</p>

    <a href="/dietary-fiber-list">食物繊維が多い食材を見る</a><br>
    <a href="/foodstuff-register">食材登録画面に戻る</a><br>
    <hr>
    <a href="/">トップページに戻る</a>
</main>

<footer>
</footer>
@endsection