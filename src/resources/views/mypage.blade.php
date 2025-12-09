@extends('layouts.app')
<!-- プロフィール画面 -->
@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
<div class="mypage-contents">
    <div class="mypage-contents-heading">
        <form action="/mypage/profile" method="GET" type="submit"></form>
        <div class="form__image">
            <img src="{{ asset($user->picture) }}" class="image" name="my_image" />
        </div>
        <div class="mypage-contents-user">
            <p class="mypage-contents-user-name">{{ $user->name }}</p>
            <button class="mypage-contents-user-edit">プロフィールを編集</button>
        </div>
    </div>
    <div class="mypage-contents-body__sell">
        @foreach ($sellOrders as $order)
        <a href="" class="sell-link" value="出品した商品">
            <img src="{{ asset($order->exhibition->image) }}" alt="商品画像" class="sell-img" />
        </a>
        <div class="sell-content">
            <p>{{ $order->buyer->name }}</p>
        </div>
        @endforeach
    </div>
    <div class="mypage-contents-body__buy">
        @foreach ($buyOrders as $order)
        <a href="" class="buy-link" value="購入した商品">
            <img src="{{ asset($order->exhibition->image) }}" alt="商品画像" class="buy-img" />
        </a>
        <div class="buy-content">
            <p>{{ $order->sell->name }}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection