@extends('layouts.auth')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mail.css') }}">
@endsection

@section('content')
<div class="mail__content">
    <div class="mail__form--heading">
        <h2 class="mail__form--heading-title">登録していただいたメールアドレスに認証メールを送付しました。</h2>
        <p class="mail__form--heading-subtitle">メール認証を完了してください。</p>
    </div>
    <form class="mail-form">
        <div class="form__button">
            <button class="form__button-submit" type="submit">認証はこちらから</button>
        </div>
        <div class="form__button-confirmation">
            <button class="form__button-again" type="submit">認証メールを再送する</button>
        </div>
    </form>
</div>
@endsection