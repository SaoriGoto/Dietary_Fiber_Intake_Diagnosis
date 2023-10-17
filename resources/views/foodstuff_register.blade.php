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
            <a href="/foodstuff-quantity-guidelines">※食材量の目安はこちら</a><br>
            <button>結果を表示する</button>
            </form>
        <hr>
        <a href="/top">トップページに戻る</a>
@endsection