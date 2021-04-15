@extends('sellerauth::layouts.auth')

@section('title') {{ $fa_store_name }} @endsection

@section('head')
<script src="{{ asset('seller/js/loginAction.js') }}"></script>
@endsection

@section('content')
<aside class="c-new-login__sidebar c-new-login__sidebar--xs">
    <div class="c-new-login__sidebar-content">

      <header class="c-new-login__sidebar-header">
        <a href="#" class="c-new-login__logo">
        <img src="{{ asset('seller/svg/9eb66c4d.svg') }}" alt="Digikala marketplace seller center logo">
        </a>
        <h1 class="c-new-login__header">به مرکز فروشندگان {{ $fa_store_name }} <br> خوش آمدید!</h1>
      </header>

      <div class="c-new-login__sidebar-center">
        <img src="{{ asset('seller/svg/ccb24d55.svg') }}" alt="" class="c-new-login__sidebar-img">
      </div>

      <footer class="c-new-login__footer">
        <p>Copyright © Digi Nova</p>
      </footer>

    </div>
  </aside>

  <aside class="c-new-login__sidebar c-new-login__sidebar--xs-visible">
    <div class="c-new-login__sidebar-content">
      <header class="c-new-login__sidebar-header">
        <a href="#" class="c-new-login__logo">
        <img src="{{ asset('seller/svg/9eb66c4d.svg') }}" alt="Digikala marketplace seller center logo">
        </a>
        <h1 class="c-new-login__header">به مرکز فروشندگان {{ $fa_store_name }} <br> خوش آمدید!</h1>
      </header>
    </div>
  </aside>

<main class="c-new-login__main">
<div class="c-reg-form c-reg-form--login">
  <form method="post" id="login-form" data-name="login" novalidate="novalidate">
    @csrf
    <div class="c-reg-form__row">
      <div class="c-reg-form__col c-reg-form__col--12">
        <div class="c-ui-input">
          <input type="text" name="email" class="c-ui-input__field c-ui-input__field--ltr c-ui-input__field--has-icon" value="" placeholder="ایمیل خود را وارد کنید" maxlength="255" autocomplete="email" required="" aria-invalid="false">
          <div class="c-ui-input__icon c-ui-input__icon--email"></div>
        </div>
      </div>
    </div>

    <div class="c-reg-form__row">
      <div class="c-reg-form__col c-reg-form__col--12">
        <div class="c-ui-input">
          <input type="password" name="password" class="c-ui-input__field c-ui-input__field--ltr c-ui-input__field--has-icon c-ui-input__field--has-btn" placeholder="کلمه عبور خود را وارد کنید" minlength="4" maxlength="255" autocomplete="current-password" required="" aria-invalid="false">
          <div class="c-ui-input__icon c-ui-input__icon--password"></div>
          <div class="c-ui-input__btn c-ui-input__btn--password "></div>
        </div>
      </div>
    </div>

    <div class="c-reg-form__row c-reg-form__row--gap-40 c-reg-form__row--align-center">
      <div class="c-reg-form__col">
        <div class="c-ui-checkbox__group">
          <label class="c-ui-checkbox">
          <input class="c-ui-checkbox__origin " type="checkbox" name="remember" value="true">
          <span class="c-ui-checkbox__check"></span>
          <span class="c-ui-checkbox__label">مرا به خاطر بسپار</span>
          </label>
        </div>
      </div>
    </div>

    <div class="c-reg-form__row c-reg-form__row--align-center">
      <div class="c-reg-form__col">
        <button class="c-reg-form__submit-btn" id="btnSubmit">ورود</button>
      </div>
    </div>

    <div class="c-reg-form__row c-reg-form__row--align-center c-reg-form__row--gap-40">
      <div class="c-reg-form__col">
        <p class="c-reg-form__text"><a href="{{ route('seller.forgot') }}" class="c-reg-form__link">رمز عبورم را
          فراموش کرده ام.</a>
        </p>
      </div>
    </div>

    <div class="c-reg-form__row c-reg-form__row--align-center c-reg-form__row--gap-40">
      <div class="c-reg-form__col">
        <p class="c-reg-form__text">هنوز ثبت نام نکرده‌اید؟ <a href="{{ route('seller.regStep1') }}" class="c-reg-form__link">همین حالا ثبت
          نام کنید</a>
        </p>
      </div>
    </div>

  </form>
</div>

<ul class="c-new-login__content-footer">
  <li class="c-new-login__content-footer-item">
    <a target="_blank" href="#">ثبت رسید سفارش</a>
  </li>
  <li class="c-new-login__content-footer-item">
    <a target="_blank" href="#">فروشگاه اینترنتی {{ $fa_store_name }}</a>
  </li>
  <li class="c-new-login__content-footer-item">
    <a target="_blank" href="#">مرکز آموزش فروشندگان</a>
  </li>
  <li class="c-new-login__content-footer-item">
    <a target="_blank" href="#">سوالات متداول</a>
  </li>
  <li class="c-new-login__content-footer-item">
    <a target="_blank" href="#">مراحل ثبت نام</a>
  </li>
</ul>

</main>
@endsection
