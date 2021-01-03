@extends('customerauth::layouts.auth')

@section('title') ورود/ثبت‌نام | فروشگاه اینترنتی دیجی‌کالا @endsection

@section('head')
<script src="{{ asset('assets/js/rememberPasswordAction.js') }} "></script>
@endsection

@section('content')
    <div class="c-login__email-info-image">
        <img alt="DIGIKALA.COM" src="{{ asset('assets/images/login-logo.svg') }}">
    </div>

    <div class="c-login__email-info-header">
        ایمیل بازیابی ارسال شد!
    </div>

    <p class="c-login__email-info-text">
        لطفاً به صندوق الکترونیکی خود مراجعه کرده و بر روی لینک ارسال شده کلیک نمائید.
    </p>

    <a href="{{ route('indexPage') }}" class="o-btn o-btn--full-width o-btn--outlined-red-lg">بازگشت به دیجی کالا</a>
@endsection
