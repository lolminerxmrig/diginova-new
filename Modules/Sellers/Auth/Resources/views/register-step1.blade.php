@extends('sellerauth::layouts.auth')

@section('title') {{ $fa_store_name }} @endsection

@section('head')
<script src="{{ asset('seller/js/indexAction.js') }}"></script>
@endsection

@section('content')
<aside class="c-new-login__sidebar c-new-login__sidebar--xs">
    <div class="c-new-login__sidebar-content">
      <header class="c-new-login__sidebar-header">
        <a href="{{ route('seller.regStepOne') }}" class="c-new-login__logo">
        <img src="{{ asset('seller/svg/9eb66c4d.svg') }}" alt="Digikala marketplace seller center logo">
        </a>
        <h1 class="c-new-login__header">ثبت‌نام در مرکز فروشندگان</h1>
      </header>
      <ul class="c-reg-steps">
        <li class="c-reg-steps__item">
          <div class="c-reg-steps__icon c-reg-steps__icon--info c-reg-steps__icon--current"></div>
          <h2 class="c-reg-steps__header">۱. اطلاعات فروشنده</h2>
          <p class="c-reg-steps__description">اطلاعات شخصی فروشنده، اطلاعات تجاری، اطلاعات تماس</p>
        </li>
        <li class="c-reg-steps__item c-reg-steps__item--next">
          <div class="c-reg-steps__icon c-reg-steps__icon--documents"></div>
          <h2 class="c-reg-steps__header">۲. بارگذاری مدارک</h2>
          <p class="c-reg-steps__description">اطلاعات مربوط به مالیات بر ارزش افزوده، تصویر مدارک شخصی و تجاری</p>
        </li>
        <li class="c-reg-steps__item c-reg-steps__item--next">
          <div class="c-reg-steps__icon c-reg-steps__icon--checkout"></div>
          <h2 class="c-reg-steps__header">۳. اتمام ثبت نام</h2>
          <p class="c-reg-steps__description">به جمع فروشندگان {{ $fa_store_name }} خوش آمدید.</p>
        </li>
      </ul>
      <footer class="c-new-login__footer">
        <p>Copyright © 2006 - 2020 Digikala.com</p>
      </footer>
    </div>
  </aside>
  <aside class="c-new-login__sidebar c-new-login__sidebar--xs-visible">
    <div class="c-new-login__sidebar-content">
      <header class="c-new-login__sidebar-header">
        <a href="{{ route('seller.regStepOne') }}" class="c-new-login__logo">
        <img src="{{ asset('seller/svg/9eb66c4d.svg') }}" alt="Digikala marketplace seller center logo">
        </a>
        <h1 class="c-new-login__header">ثبت‌نام در مرکز فروشندگان</h1>
      </header>
    </div>
  </aside>
  <main class="c-new-login__main">
    <div class="c-reg-form">
      <form action="{{ route('seller.saveStepOne') }}" method="post" id="email-form" data-name="register">
          @csrf
          <div class="c-reg-form__row c-reg-form__row--gap-60">
              <div class="c-reg-form__col c-reg-form__col--12">
                <div class="c-ui-input">

                  <input type='text' name='email' class='c-ui-input__field c-ui-input__field--ltr
                       c-ui-input__field--has-icon' type='text' placeholder='ایمیل خود را وارد کنید'
                         maxlength='255' autocomplete='email' required>

                  <div class="c-ui-input__icon c-ui-input__icon--email"></div>
                </div>
              </div>
        </div>

        <div class="c-reg-form__row">
          <div class="c-reg-form__col c-reg-form__col--12">
            <div class="c-ui-input">

              <input type='password' name='password' class='c-ui-input__field c-ui-input__field--ltr
                c-ui-input__field--has-icon c-ui-input__field--has-btn' type='password'
                     placeholder='رمز عبور خود را انتخاب کنید' minlength='4'
                     maxlength='255' autocomplete='current-password' required>

              <div class="c-ui-input__icon c-ui-input__icon--password"></div>
              <div class="c-ui-input__btn c-ui-input__btn--password "></div>

            </div>
          </div>
        </div>

        <div class="c-reg-form__row">
          <div class="c-reg-form__col c-reg-form__col--12">
            <div class="c-ui-input">
              <input type='text' name='register_phone'class='c-ui-input__field c-ui-input__field--ltr
                    c-ui-input__field--has-icon accept-only-digits' id='mobile-phone'
                     placeholder='۰۹' minlength='11' maxlength='11' required data-exceptions="9">
              <div class="c-ui-input__icon c-ui-input__icon--phone"></div>
            </div>
          </div>
        </div>

        <div class="c-reg-form__row c-reg-form__row--align-center c-reg-form__row--gap-50">
          <div class="c-reg-form__col">
            <button class="c-reg-form__submit-btn" id="btnSubmit">ثبت نام</button>
          </div>
        </div>

        <div class="c-reg-form__row c-reg-form__row--align-center c-reg-form__row--gap-40">
          <div class="c-reg-form__col">
            <p class="c-reg-form__text">قبلاً ثبت نام کرده‌ام.
                <a href="{{ route('seller.loginPage') }}" class="c-reg-form__link">ورود</a></p>
          </div>
        </div>

        <div class="c-reg-form__row c-reg-form__row--gap-40">
          <div class="c-reg-form__col c-reg-form__col--12">
            <p class="c-reg-form__text c-reg-form__text--condensed c-reg-form__text--pane">
              <span class="c-reg-form__text-label">توجه: </span> در صورتی که مراحل ثبت نام را نیمه تمام گذاشته
              اید، می توانید با همان ایمیل ثبت نام خود را ادامه دهید.
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
