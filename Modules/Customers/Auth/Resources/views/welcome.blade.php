@extends('customerauth::layouts.auth')

@section('title') {{ $fa_store_name }} @endsection

@section('content')
    <div class="c-login__email-info-image">
        <img alt="{{ $site_url }}" src="{{ !is_null($header_logo) ? $site_url . '/' . $header_logo->path . '/' . $header_logo->name : '' }}">
    </div>

    <div class="c-login__email-info-header">
        به {{ $fa_store_name }} خوش آمدید
    </div>

    <p class="c-login__email-info-text">
        حساب کاربری شما در {{ $fa_store_name }} ساخته شد. 
    </p>

    <a href="{{ route('front.indexPage') }}" class="o-btn o-btn--full-width o-btn--outlined-red-lg c-login__form-action">
        ادامه
    </a>

    <a href="/profile/additional-info/" class="o-btn o-btn--full-width o-btn--link-red-lg c-login__form-action">
        تکمیل حساب کاربری
    </a>
@endsection
