@extends('layout')

{{-- Main contents --}}
@section('contents')

<header>
    <div class="header-logo-1">食物繊維摂取量診断</div>
    <div class="header-logo-2">Dietary fiber intake diagnosis</div>
</header>

<main class="dietary-fiber-list-main">
    <h2>＜食物繊維が多い食材＞</h2>
    <div class="dietary-fiber-list-main-contents">
        <div class="soluble-fiber-list"><h3>水溶性食物繊維が多い食材</h3>
            <table border="1">
                <thead>
                    <tr>
                        <th>食材名
                        <th>食物繊維量(可食部100gあたり)
                    </tr>
                </thead>
                <tbody>
                    @foreach($soluble_fiber_list as $row)
                        <tr>
                            <td>{{ $row->foodstuff_name }}
                            <td>{{ $row->soluble_fiber }}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="insoluble-fiber-list"><h3>不溶性食物繊維が多い食材</h3>
            <table border="1">
                <thead>
                    <tr>
                        <th>食材名
                        <th>食物繊維量(可食部100gあたり)
                    </tr>
                </thead>
                <tbody>
                    @foreach($insoluble_fiber_list as $row)
                        <tr>
                            <td>{{ $row->foodstuff_name }}
                            <td>{{ $row->insoluble_fiber }}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <p>※「日本食品標準成分表2020年版（八訂）」（文部科学省） （https://www.https://www.mext.go.jp/a_menu/syokuhinseibun/mext_01110.html）を抜粋・加工して作成</p>
    <a href="/foodstuff-register">食材登録画面に戻る</a><br>
    <hr>
    <a href="/top">トップページに戻る</a>
</main>

<footer>
</footer>
@endsection