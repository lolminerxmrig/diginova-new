@extends('userauth::layouts.auth')

@section('title') ورود/ثبت‌نام | فروشگاه اینترنتی دیجی‌کالا @endsection

@section('content')
<form class="c-login__form" action="{{ route('login-register.check') }}" method="post" id="loginForm" novalidate="novalidate">
    <div class="c-login__header-logo c-login__header-logo--lg">
        <a href="#">
            <img alt="DIGIKALA.COM" src="{{ asset('assets/images/login-logo.svg') }}">
        </a>
    </div>
    <div class="c-login__form-header">
        ورود / ثبت‌نام
    </div>
    <div class="c-login__opt-mobile-message">
        شماره موبایل یا پست الکترونیک  خود را وارد کنید
    </div>
    <div class="c-login__form-row">
        <label class="o-form__field-container">
            <div class="o-form__field-frame">
                <input name="email_phone" class="o-form__field js-input-field ">
                <span type="button" class="o-form__field-clear-button js-ui-field-cleaner u-hidden"></span>
            </div>
        </label>
    </div>
    <button type="submit" class="o-btn o-btn--contained-red-lg c-login__form-action">
        ورود به دیجی کالا
    </button>
    <p class="c-login__footer">
        با ورود و یا ثبت نام در دیجی‌کالا شما
        <a href="#" target="_blank">
            شرایط و قوانین
        </a>
        استفاده از سرویس های سایت دیجی‌کالا و
        <a href="#" target="_blank">
            قوانین حریم خصوصی
        </a>
        آن را می‌پذیرید.
    </p>
</form>
@endsection
