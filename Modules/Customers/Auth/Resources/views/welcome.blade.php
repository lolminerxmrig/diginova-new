@extends('customerauth::layouts.auth')

@section('title') دیجی کالا @endsection

@section('content')
    <div class="c-login__email-info-image">
        <img alt="DIGIKALA.COM" src="{{ asset('assets/images/svg/02371b3f.svg') }}">
    </div>

    <div class="c-login__email-info-header">
        به دیجی کالا خوش آمدید
    </div>

    <p class="c-login__email-info-text">
        حساب کاربری شما در دیجی کالا ساخته شد. از خرید از میان بیش از ۲٬۰۰۰٬۰۰۰ تنوع کالا لذت ببرید
    </p>

    <a href="{{ route('indexPage') }}" class="o-btn o-btn--full-width o-btn--outlined-red-lg c-login__form-action">
        ادامه
    </a>

    <a href="/profile/additional-info/" class="o-btn o-btn--full-width o-btn--link-red-lg c-login__form-action">
        تکمیل حساب کاربری
    </a>
@endsection
