@extends('staffauth::layouts.auth')

@section('title') {{ $fa_store_name }} @endsection

@section('head')
  <script>
    var supernova_mode = "production";
    var supernova_tracker_url = "";
    var isLoggedSeller = 0;
    var is_yalda = 0;
  </script>
  <script src="{{ asset('staff/js/changePasswordEmailAction.js') }}"></script>
@endsection

@section('content')
  <div class="c-reg-form c-reg-form--forgot">
    <form method="post" action="{{ route('staff.updatePassword') }}" id="changePasswordForm" data-name="changepassword" novalidate="novalidate">
      @csrf
      <input type="hidden" name="token" value="{{ $token }}">
      <div class="c-reg-form__row c-reg-form__row--align-center">
        <div class="c-reg-form__col c-reg-form__col--12">
          <h2 class="c-reg-form__header c-reg-form__header--bold">تغییر کلمه عبور</h2>
        </div>
      </div>

      <div class="c-reg-form__row">
        <div class="c-reg-form__col c-reg-form__col--12">

          <div class="c-ui-input">

            <input type="text" name="" class="c-ui-input__field c-ui-input__field--ltr c-ui-input__field--has-icon" value="{{ $email }}" disabled="">

            <div class="c-ui-input__icon c-ui-input__icon--email"></div>

          </div>

        </div>
      </div>
      <div class="c-reg-form__row">
        <div class="c-reg-form__col c-reg-form__col--12">

          <div class="c-ui-input">

            <input type="password" name="password" class="c-ui-input__field c-ui-input__field--ltr c-ui-input__field--has-icon" id="txtPassword" placeholder="کلمه عبور جدید" minlength="4" maxlength="255" autocomplete="new-password" required="">

            <div class="c-ui-input__icon c-ui-input__icon--password"></div>

          </div>

        </div>
      </div>
      <div class="c-reg-form__row">
        <div class="c-reg-form__col c-reg-form__col--12">

          <div class="c-ui-input">

            <input type="password" name="password_confirmation" class="c-ui-input__field c-ui-input__field--ltr c-ui-input__field--has-icon" placeholder="تکرار کلمه عبور جدید" minlength="4" maxlength="255" autocomplete="new-password" required="">

            <div class="c-ui-input__icon c-ui-input__icon--password"></div>

          </div>

        </div>
      </div>

      <div class="c-reg-form__row c-reg-form__row--align-center">
        <div class="c-reg-form__col c-reg-form__col--6">
          <button class="c-reg-form__submit-btn c-reg-form__submit-btn--block" id="btnSubmit">باز نشانی کلمه عبور</button>
        </div>

        <div class="c-reg-form__col c-reg-form__col--6">
          <a href="/" class="c-reg-form__submit-btn c-reg-form__submit-btn--block c-reg-form__submit-btn--secondary">انصراف</a>
        </div>
      </div>
    </form>
  </div>
@endsection
