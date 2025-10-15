@extends('layouts.logout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="index__content">
    <div class="index-form__heading">
        <p class="index-form__heading-left">おすすめ</p>
        <p class="index-form__heading_right">マイリスト</p>
    </div>
    <div class="main__content">
        <div class="exhibition-contents">
            <div class="exhibition-content">
                <a class="exhibition-link" href="/item"></a>
                <img src="" alt="商品画像" class="img-content" />
                <div class="detail-content">
                    <p>商品名</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection