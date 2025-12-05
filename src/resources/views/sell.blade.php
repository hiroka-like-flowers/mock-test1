@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sell.css') }}">
@endsection

@section('content')
<div class="sell-content">
    <div class="sell-heading">
        <h2 class="sell-heading-title">商品を出品する</h2>
    </div>
    <form class="sell-form">
        <div class="form__group">
            <label class="label">商品画像</label>
            <output class="image_output" id="list"></output>
            <input type="file" id="" class="image" name="item_image" placeholder="画像を選択する" />
            @error('item_image')
                <span class="input_error">
                    <p class="input_error_message"></p>
                </span>
            @enderror
        </div>
        <div class="sell-section">
            <h3 class="sell-section-title">商品の詳細</h3>
        </div>
        <div class="form__group">
            <label class="label">カテゴリー</label>
            <input type="file" id="" class="image" name="item_image" placeholder="カテゴリーの種類を選択する" />
            @error('item_image')
                <span class="input_error">
                    <p class="input_error_message"></p>
                </span>
            @enderror
            <label class="label">商品の状態</label>
            <select class="condition-form__select" name="condition_id" id="">
                <option disabled selected>選択してください</option>
            </select>
            @error('item_image')
                <span class="input_error">
                    <p class="input_error_message"></p>
                </span>
            @enderror
        </div>
        <div class="sell-section">
            <h3 class="sell-section-title">商品名と説明</h3>
            <span class="line"></span>
        </div>
        <div class="form__group">
            <label class="label">商品名</label>
            <input class="register-item" type="text" id="" name="item_name" />
            @error('item_image')
                <span class="input_error">
                    <p class="input_error_message"></p>
                </span>
            @enderror
            <label class="label">ブランド名
            </label>
            <input class="register-item" type="text" id="" name="item_brand" />
            @error('item_brand')
                <span class="input_error">
                    <p class="input_error_message"></p>
                </span>
            @enderror
            <label class="label">商品の説明</label>
            <textarea class="register-item__textarea" id="" name="item_detail" cols="30" rows="10" />
            @error('item_detail')
                <span class="input_error">
                    <p class="input_error_message"></p>
                </span>
            @enderror
            <label class="label">販売価格</label>
            <input class="register-item" type="text" id="" name="item_price" /><span class="span-item">¥</span>
            @error('item_price')
                <span class="input_error">
                    <p class="input_error_message"></p>
                </span>
            @enderror
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">出品する</button>
        </div>
    </form>
</div>
@endsection