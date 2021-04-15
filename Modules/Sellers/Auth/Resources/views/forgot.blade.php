<!DOCTYPE html>
<html class="" style="" dir="rtl" >
  <head>
    <title>{{ $fa_store_name }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('seller/icon/caf67ad9.ico') }}" type="image/icon">
    <link rel="stylesheet" href="{{ asset('seller/css/select2.css') }}">
    <script src="{{ asset('seller/js/jquery.min.js') }}"></script>
    <script src="{{ asset('seller/js/forgotPasswordAction.js') }}"></script>
  </head>
  <body class="" style="">
    <div class="c-new-login c-new-login--vertical">
      <main class="c-new-login__main">
        <div class="c-new-login__logo">
          <a href="/">
          <img src="{{ asset('seller/svg/9eb66c4d.svg') }}" alt="Digikala marketplace seller center logo">
          </a>
        </div>
        <div class="c-reg-form c-reg-form--forgot">
          <form method="post" id="forgot-form" data-name="forgot">
            <div class="c-reg-form__row c-reg-form__row--align-center">
              <div class="c-reg-form__col c-reg-form__col--12">
                <h2 class="c-reg-form__header c-reg-form__header--bold">یادآوری کلمه عبور</h2>
              </div>
            </div>
            <div class="c-reg-form__row">
              <div class="c-reg-form__col c-reg-form__col--12">
                <div class="c-ui-input">
                  <input type='email' name='forgot[email]' class='c-ui-input__field c-ui-input__field--ltr c-ui-input__field--has-icon' type='email' value='' placeholder='ایمیل خود را وارد کنید' maxlength='255' autocomplete='email' required>
                  <div class="c-ui-input__icon c-ui-input__icon--email"></div>
                </div>
              </div>
            </div>
            <div class="c-reg-form__row c-reg-form__row--align-center c-reg-form__row--gap-50">
              <div class="c-reg-form__col">
                <button class="c-reg-form__submit-btn" id="btnSubmit">ارسال ایمیل بازیابی</button>
              </div>
            </div>
            <div class="c-reg-form__row c-reg-form__row--align-center c-reg-form__row--gap-40">
              <div class="c-reg-form__col">
                <p class="c-reg-form__text">هنوز ثبت نام نکرده‌اید؟ <a href="/registration/" class="c-reg-form__link">همین حالا ثبت نام کنید</a></p>
              </div>
            </div>
          </form>
        </div>
      </main>
      <footer class="c-new-login__main-footer">
        <div class="c-new-login__main-footer-row">
          <div class="c-new-login__main-footer-contact">ارتباط با مرکز فروشندگان {{ $fa_store_name }}</div>
          <div class="c-new-login__main-footer-contact c-new-login__main-footer-contact--phone">۹۱۰۲۰۰۲۰ - ۰۲۱</div>
          <a href="mailto:>SellerSupport@digikala.com"class="c-new-login__main-footer-contact c-new-login__main-footer-contact--email">SellerSupport@digikala.com</a>
        </div>
        <div class="c-new-login__main-footer-row">
          <div class="c-new-login__main-footer-copyright c-new-login__main-footer-copyright--bold">کليه حقوق اين سايت به <em>شرکت نوآوران فن آوازه (فروشگاه آنلاین {{ $fa_store_name }})</em> تعلق دارد.</div>
          <div class="c-new-login__main-footer-copyright">Copyright © 2006 - 2020 Digikala.com</div>
        </div>
      </footer>
    </div>
  </body>
</html>
