@extends('layouts.app')
<!-- 商品購入画面 -->
@section('css')
<link rel="stylesheet" href="{{ asset('css/purchase.css') }}">
@endsection

@section('content')
<div class="all-contents">
    <div class="left-content">
        <table class="item-form__table">
            <tr class="item-form__row">
                <th class="item-form__image">
                    <output id="list" class="img-content"></output>
                </th>
            </tr>
            <tr class="item-form__row">
                <td class="item-form__label">商品名</td>
                <input type="hidden" name="exhibition_name">
                <td class="item-form__price"><span class="span-item">¥</span>値段</td>
                <input type="hidden" name="price">
            </tr>
        </table>
        <span class="line"></span>
        <table class="purchase-form__group">
            <th class="purchase-form__label" for="">支払い方法</th>
            <td class="purchase-form__select-inner">
                <select class="purchase-form__select" name="purchase_id" id="">
                    <option disabled selected>選択してください</option>
                </select>
            </td>
        </table>
        <span class="line"></span>
        <table class="address-form__group">
            <tr class="address-form-top">
                <th class="address-form__label" for="">発送先</th>
                <th class="address__link">
                    <a class="address__link-submit" href="/address">変更する</a>
                </th>
            </tr>
            <td class="address-form__inner">
                郵便番号が入る
            </td>
            <td class="address-form__inner">
                住所と建物が入る
            </td>
        </table>
        <span class="line"></span>
    </div>
    <div class="right-content">
        <form class="payment-form">
            <table class="payment-form__group">
                <tr class="payment-form__table">
                    <th class="payment-form__label">商品代金</th>
                    <td class="payment-form__input"><span class="span-item_right">¥</span></td>
                    <input type="hidden" name="exhibition_name">
                </tr>
                <tr class="payment-form__table">
                    <th class="payment-form__label">支払い方法</th>
                    <td class="payment-form__input">支払い方法を入れる</td>
                    <input type="hidden" name="purchase_id">
                </tr>
            </table>
            <div class="payment__button">
                <button class="payment__button-submit" type="submit">購入する</button>
            </div>
        </form>
    </div>
</div>
@endsection