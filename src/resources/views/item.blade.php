@extends('layouts.app')
<!-- 商品詳細画面ーログイン後 -->
@section('css')
<link rel="stylesheet" href="{{ asset('css/item.css') }}">
@endsection

@section('content')
<div class="all-contents">
    <div class="left-content">
        <img src="{{ asset($exhibition->image) }}" class="img-content">
    </div>
    <div class="right-content">
        <form class="purchase-form" action="{{ route('order.index', ['item_id' => $exhibition->id]) }}" method="POST">
            @csrf
            <div class="item-form__table">
                <div class="item-form__row">
                    <h2 class="item-form__name">
                        {{ $exhibition->name }}
                    </h2>
                </div>
                <div class="item-form__row">
                    <p class="item-form__brand">
                        {{ $exhibition->brand }}
                    </p>
                </div>
                <div class="item-form__row">
                    <p class="item-form__price">
                        <span class="span-item">¥</span>{{ $exhibition->price }}<span class="span-tax">(税込)</span>
                    </p>
                </div>
                <table class="item-form-label">
                    <thead>
                        <tr class="labels">
                            <th class="like-label">いいね</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="like-counts">
                            <td class="like-count"></td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr class="labels">
                            <th class="comment-label">コメント</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="comment-counts">
                            <td class="comment-count"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="purchase__button">
                <button class="purchase__button-submit" type="submit">購入手続きへ</button>
            </div>
        </form>
        <table class="item-form__table">
            <tr class="item-form__row">
                <h3 class="item-form__details-1">
                    商品説明
                </h3>
                <th class="item-form__content">{{ $exhibition->description }}</th>
                <input class="item-form__content" type="hidden" name="detail">
            </tr>
            <tr class="item-form__row">
                <h3 class="item-form__details-2">
                    商品の情報
                </h3>
                <tr class="detail">
                    <th class="item-form__detail">カテゴリー</th>
                    <td class="item-form__data-1">{{ $exhibition->category->name }}</td>
                </tr>
                <tr class="detail">
                    <th class="item-form__detail">商品の状態</th>
                    <td class="item-form__data-2">{{ $exhibition->condition->name }}</td>
                </tr>
            </tr>
        </table>
        <form class="comment-form" method="POST" action="{{ route('comment.store', $exhibition->id) }}">
            @csrf
            <div class="comment-form__heading">
                <h3 class="comment-form__heading-title">コメント</h3>
                @foreach($exhibition->comments as $comment)
                <div>
                    <strong>{{ $comment->user->name }}:</strong>
                    {{ $comment->comment }}
                </div>
                @endforeach
                <label class="comment-form__label" for="detail">商品へのコメント</label>
                <textarea class="comment-form__textarea" name="detail" id="" cols="50" rows="10"></textarea>
            </div>
            <div class="comment__button">
                <input class="comment__button-submit" type="submit" value="コメントを送信する" ></input>
            </div>
        </form>
    </div>
</div>
@endsection