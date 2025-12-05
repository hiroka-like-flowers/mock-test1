@extends('layouts.app')
<!-- プロフィール画面 -->
@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
<div class="mypage-contents">
    <div class="mypage-contents-heading">
        <div class="form__image">
            <output class="image_output" id="list"></output>
            <input type="file" id="my_image" class="image" name="my_image" />
        </div>
        <div class="mypage-contents-user">
            <p class="mypage-contents-user-name">ユーザー名</p>
            <a href="/profile" class="mypage-contents-user-edit">プロフィール編集</a>
        </div>
    </div>
    <div class="mypage-contents-body__sell">
        <a href="" class="sell-link">
            <img src="" alt="商品画像" class="sell-img" />
        </a>
        <div class="sell-content">
            <p>商品名</p>
        </div>
    </div>
    <div class="mypage-contents-body__buy">
        <a href="" class="buy-link">
            <img src="" alt="商品画像" class="buy-img" />
        </a>
        <div class="buy-content">
            <p>商品名</p>
        </div>
    </div>
</div>
@endsection