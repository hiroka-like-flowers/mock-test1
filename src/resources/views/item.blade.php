@extends('layouts.logout')

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
                    <p class="item-form__name">
                        商品名
                    </p>
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
            </div>
        </form>
    </div>
</div>