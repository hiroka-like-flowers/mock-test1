@extends('layouts.app')
<!-- プロフィール編集画面 -->
@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<div class="profile__content">
    <div class="profile-form__heading">
        <h1 class="profile-form__heading-title">プロフィール設定</h1>
    </div>
    <form class="profile-form">
        <div class="form__group">
            <div class="form__image">
                <output class="image_output" id="list"></output>
                <input type="file" id="my_image" class="image" name="my_image" placeholder="画像を選択する" />
            </div>
        </div>
        <div class="form__group">
            <label class="name-label">ユーザー名</label>
            <input type="text" placeholder="既存値が入る" name="user_name" class="form__input--text">
            @error('user_name')
            <span class="input_error">
                <p class="input__error_message"></p>
            </span>
            @enderror
            <label class="name-label">郵便番号</label>
            <input type="text" placeholder="既存値が入る" name="postcode" class="form__input--text">
            @error('postcode')
            <span class="input_error">
                <p class="input__error_message"></p>
            </span>
            @enderror
            <label class="name-label">住所</label>
            <input type="text" placeholder="既存値が入る" name="address" class="form__input--text">
            @error('address')
            <span class="input_error">
                <p class="input__error_message"></p>
            </span>
            @enderror
            <label class="name-label">建物名</label>
            <input type="text" placeholder="既存値が入る" name="building" class="form__input--text">
            @error('building')
            <span class="input_error">
                <p class="input__error_message"></p>
            </span>
            @enderror
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">更新する</button>
        </div>
        <input type="hidden" name="profile_id" class="profile_id" id="profile_id" value="">
    </form>
</div>
@endsection