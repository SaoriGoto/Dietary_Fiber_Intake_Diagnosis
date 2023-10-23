@extends('layout')

{{--Main contents--}}
@section('contents')

<header>
    <img src="{{ asset('images/salad.jpg') }}" alt="salad" class="top-image">
    <div class="top-logo-1">食物繊維摂取量診断</div>
    <div class="top-logo-2">Dietary fiber intake diagnosis</div>

</header>

<main>
    <div class="main-contents">
        <p>あなたが食べた食材からどれくらいの食物繊維が摂取できているか診断するサービスです。</p>

        <h3>食物繊維とは</h3>
        <p>食物繊維は小腸で消化・吸収されずに、大腸まで達する食品成分です。<br>
            摂取することにより整腸効果、血糖値上昇の抑制、血液中のコレステロール濃度の低下などの効果も期待されます。</p>

        <form action="/foodstuff-register" method="get">
        <button>診断する</button>
        </form>
    </div>
</main>
@endsection