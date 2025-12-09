@extends('layouts.app')
<!-- 商品一覧・ログイン後 -->
@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="index__content">
    <div class="index-form__heading">
        <button class="index-form__heading-button" data-type="recommend">おすすめ</button>
        <button class="index-form__heading_button" data-type="mylist">マイリスト</button>
    </div>
    <span class="line"></span>
    <div class="main__content">
        <div class="exhibition-contents">
            @foreach ($exhibitions as $exhibition)
            <div class="exhibition-content">
                <a class="exhibition-link" href="{{ route('item.show', ['item_id' => $exhibition->id]) }}">
                    <img src="{{ asset ($exhibition->image) }}" alt="商品画像" class="img-content" />
                    <div class="detail-content">
                        <p>{{ $exhibition->name }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection