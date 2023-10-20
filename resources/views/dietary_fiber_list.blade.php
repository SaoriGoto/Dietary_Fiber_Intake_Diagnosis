@extends('layout')

{{-- Main contents --}}
@section('contents')
    <h1>食物繊維が多い食材</h1>
    <div style="display: flex; flex-direction: row;">
        <div style="margin-right: 20px;">
            <h2>水溶性食物繊維が多い食材</h2>
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

        <div>
            <h2>不溶性食物繊維が多い食材</h2>
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

    <a href="/foodstuff-register">食材登録画面に戻る</a><br>
    <hr>
    <a href="/top">トップページに戻る</a>
@endsection