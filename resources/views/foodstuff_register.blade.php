@extends('layout')

{{--Main contents--}}
@section('contents')
    <h1>食材登録</h1>
    @if($errors->any())
        <div>
        @foreach($errors->all() as $error)
            {{$error}}<br>
        @endforeach
        </div>
    @endif
    <p>あなたが食べた食材を登録してください。</p>
        <form action="/foodstuff-register" method="post">
            @csrf
            食材名：<input name="foodstuff_name" value="{{old('foodstuff_name')}}" placeholder="全角カタカナで入力" required><br>
            量　　：<input name="quantity" value="{{old('quantity')}}" placeholder="半角数字で入力" required>g<br>
            <button>結果を表示する</button>
            <h2>食材量の目安</h2>
                <table border="1">
                    <tr>
                        <th>食材名
                        <th>目安
                    </tr>

                    <tr>
                        <td>ショクパン
                        <td>60g(6枚切り1枚あたり)
                    </tr>
                    <tr>
                        <td>ウドン
                        <td>200g(1玉あたり)
                    </tr>
                    <tr>
                        <td>サツマイモ
                        <td>250g(1本あたり)
                    </tr>
                    <tr>
                        <td>キャベツ
                        <td>300g(1/4玉あたり)
                    </tr>
                    <tr>
                        <td>ホウレンソウ
                        <td>200g(1束あたり)
                    </tr>
                    <tr>
                        <td>リンゴ
                        <td>300g(1個あたり)
                    </tr>
                    <tr>
                        <td>シイタケ
                        <td>15g(1個あたり)
                    </tr>
                </table>
        </form>
    <hr>
    <a href="/top">トップページに戻る</a>
@endsection