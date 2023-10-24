@extends('layout')

{{--Main contents--}}
@section('contents')

<header>
    <img src="{{ asset('images/salad.jpg') }}" alt="salad" class="top-image">
    <div class="top-logo-1"><h1>食物繊維摂取量診断</h1></div>
    <div class="top-logo-2">Dietary fiber intake diagnosis</div>
</header>

<main>
    <div class="main-contents-1">
        <p>あなたが食べた食材からどれくらいの食物繊維が摂取できているか診断するサービスです。</p>
    </div>
    <div class="main-contents-2">
        <h3>ー食物繊維とはー</h3>
        <p>食物繊維は小腸で消化・吸収されずに、大腸まで達する食品成分です。<br>
            摂取することにより整腸効果、血糖値上昇の抑制、血液中のコレステロール濃度の低下などの効果も期待されます。</p>

        <form action="/foodstuff-register" method="get">
        <button class="diagnosis-button">診断する</button>
        </form>
    </div>
</main>
@endsection