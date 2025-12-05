@extends('layouts.app')
<!-- 商品詳細画面ーログイン後 -->
@section('css')
<link rel="stylesheet" href="{{ asset('css/item.css') }}">
@endsection

@section('content')
<div class="all-contents">
    <div class="left-content">
        <output id="list" class="img-content"></output>
    </div>
    <div class="right-content">
        <form class="purchase-form">
            <div class="item-form__table">
                <div class="item-form__row">
                    <h2 class="item-form__name">
                        商品名
                    </h2>
                </div>
                <div class="item-form__row">
                    <p class="item-form__brand">
                        ブランド名
                    </p>
                </div>
                <div class="item-form__row">
                    <p class="item-form__price">
                        <span class="span-item">¥</span>価格<span class="span-tax">(税込)</span>
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
                <th class="item-form__content">説明がはいる</th>
                <input class="item-form__content" type="hidden" name="detail" value="説明が入る">
            </tr>
            <tr class="item-form__row">
                <h3 class="item-form__details-2">
                    商品の情報
                </h3>
                <tr class="detail">
                    <th class="item-form__detail">カテゴリー</th>
                    <td class="item-form__data-1">カテゴリーがはいる</td>
                    <input type="hidden" name="category_id">
                </tr>
                <tr class="detail">
                    <th class="item-form__detail">商品の状態</th>
                    <td class="item-form__data-2">商品の状態が入る</td>
                    <input type="hidden" name="condition_id">
                </tr>
            </tr>
        </table>
        <form class="comment-form">
            <div class="comment-form__heading">
                <h3 class="comment-form__heading-title">コメント</h3>
                <div>ここにコメントしたユーザーとコメントが入る</div>
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