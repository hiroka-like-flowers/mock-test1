@extends('layouts.app')
<!-- プロフィール設定画面・初回登録 -->
@section('css')
<link rel="stylesheet" href="{{ asset('css/first_profile.css') }}">
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
            <div class="form__group-title">
                <span class="form__label--item">ユーザー名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="user_name" value="{{ old('name') }}" />
                </div>
                <div class="form__error">
                    @error('user_name')
                    {{ $message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">郵便番号</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="postcode" value="{{ old('postcode') }}" />
                </div>
                <div class="form__error">
                    @error('postcode')
                    {{ $message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="address" value="{{ old('address') }}" />
                </div>
                <div class="form__error">
                    @error('address')
                    {{ $message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="building" value="{{ old('building') }}" />
                </div>
                <div class="form__error">
                    @error('building')
                    {{ $message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">更新する</button>
        </div>
    </form>
</div>
@endsection