@extends('layouts.customer.master')
@section('o-page__content')
<section class="o-page__content">
  <div class="o-box">
    <div class="o-box__header">
      <span class="o-box__title">اطلاعات شخصی</span></div>

    <div class="c-profile-personal__grid">
      <div class="c-profile-personal__grid-item">
        <div>
          <div class="c-profile-personal__grid-item-title">نام و نام خانوادگی</div>
          <div class="c-profile-personal__grid-item-value">
              {{ !is_null($customer->first_name)? $customer->first_name . ' ' . $customer->last_name : '-' }}
          </div>
        </div>
        <div class="c-profile-personal__grid-item-btn js-personal-info-modal-btn is-edit"
             data-verified-phone="1" data-remodal="fullname"></div>
      </div>
      <div class="c-profile-personal__grid-item">
        <div>
          <div class="c-profile-personal__grid-item-title">کد ملی</div>
          <div class="c-profile-personal__grid-item-value">
            {{ !is_null($customer->national_code)? persianNum($customer->national_code) : '-' }}
          </div>
        </div>
        <div class="c-profile-personal__grid-item-btn js-personal-info-modal-btn is-edit"
             data-verified-phone="1" data-remodal="national_identity_number"></div>
      </div>
      <div class="c-profile-personal__grid-item">
        <div>
          <div class="c-profile-personal__grid-item-title">شماره تلفن همراه</div>
          <div class="c-profile-personal__grid-item-value">
            {{ !is_null($customer->mobile)? persianNum(0 . $customer->mobile) : '-' }}
          </div>
        </div>
        <div class="c-profile-personal__grid-item-btn js-personal-info-modal-btn is-edit"
             data-verified-phone="1" data-remodal="mobile_phone"></div>
      </div>
      <div class="c-profile-personal__grid-item">
        <div>
          <div class="c-profile-personal__grid-item-title">پست الکترونیک</div>
          <div class="c-profile-personal__grid-item-value">
            {{ !is_null($customer->email)? $customer->email : '-' }}
          </div>
        </div>
        <div class="c-profile-personal__grid-item-btn js-personal-info-modal-btn is-edit"
             data-verified-phone="1" data-remodal="email"></div>
      </div>
      <div class="c-profile-personal__grid-item">
        <div>
          <div class="c-profile-personal__grid-item-title">تاریخ تولد</div>
          <div class="c-profile-personal__grid-item-value">
            {{ count($date)? persianNum($date[0]) . '/' . persianNum($date[1]) . '/' . persianNum($date[2]) : '-' }}
          </div>
        </div>
        <div class="c-profile-personal__grid-item-btn js-personal-info-modal-btn is-edit"
             data-verified-phone="1" data-remodal="birth"></div>
      </div>
      <div class="c-profile-personal__grid-item">
        <div>
          <div class="c-profile-personal__grid-item-title">شغل</div>
          <div class="c-profile-personal__grid-item-value">
            -
          </div>
        </div>
        <div class="c-profile-personal__grid-item-btn js-personal-info-modal-btn is-edit"
             data-verified-phone="1" data-remodal="job_title"></div>
      </div>
      <div class="c-profile-personal__grid-item">
        <div>
          <div class="c-profile-personal__grid-item-title">روش بازگرداندن وجه</div>
          <div class="c-profile-personal__grid-item-value">
            {{ !is_null($customer->return_money_method)? ($customer->return_money_method == 'wallet' ? 'کیف پول' : 'شماره کارت: ' . persianNum($customer->bank_card_number) ) : '-' }}
          </div>
        </div>
        <div class="c-profile-personal__grid-item-btn js-personal-info-modal-btn is-edit"
             data-verified-phone="1" data-remodal="bank_card_number"></div>
      </div>
      <div class="c-profile-personal__grid-item">
        <div>
          <div class="c-profile-personal__grid-item-title">رمز عبور</div>
          <div class="c-profile-personal__grid-item-value">
            ******
          </div>
        </div>
        <div class="c-profile-personal__grid-item-btn js-personal-info-modal-btn is-edit"
             data-verified-phone="1" data-remodal="reset_password"></div>
      </div>
    </div>
  </div>
  <div class="o-box">
    <div class="o-box__header profile__legal-header"><span class="o-box__title">افزودن اطلاعات حقوقی</span>
    </div>
    <div class="c-profile-personal__legal-desc js-legal-content">با تکمیل اطلاعات حقوقی،
      می‌توانید اقدام به خرید سازمانی با دریافت فاکتور رسمی و گواهی ارزش افزوده نمایید.
    </div>
    <div class="c-profile-personal__legal-link js-legal-content">
      <div class="o-link o-link--sm o-link--has-arrow js-edit-legal">ویرایش اطلاعات حقوقی
      </div>
    </div>

    <form class="c-profile-personal__legal-form js-legal-form js-personal-info-form" data-city-id="" data-city-name="" id="personal-info-legal-form" method="post">
      <input name="additionalinfo[company]" type="hidden" value="1">
      <label class="o-form__field-container">
        <div class="o-form__field-label">نام سازمان</div>
        <div class="o-form__field-frame">
          <input class="o-form__field js-input-field " name="additionalinfo[company_name]" placeholder="" type="text" value="{{ $customer->legal->company_name }}"/>
        </div>
      </label>
      <label class="o-form__field-container">
        <div class="o-form__field-label">کد اقتصادی</div>
        <div class="o-form__field-frame">
          <input class="o-form__field js-input-field " name="additionalinfo[company_economic_number]" placeholder="" type="text" value="{{ persianNum($customer->legal->economic_number) }}"/>
        </div>
      </label>
      <label class="o-form__field-container">
        <div class="o-form__field-label">شناسه ملی</div>
        <div class="o-form__field-frame">
          <input class="o-form__field js-input-field " name="additionalinfo[company_national_identity_number]" placeholder="" type="text" value="{{ persianNum($customer->legal->nationalـidentity) }}"/>
        </div>
      </label>

      <label class="o-form__field-container">
        <div class="o-form__field-label">شناسه ثبت</div>
        <div class="o-form__field-frame">
          <input class="o-form__field js-input-field " name="additionalinfo[company_registration_number]" placeholder="" type="text" value="{{ persianNum($customer->legal->registration_number) }}"/>
        </div>
      </label>

      <div class="o-form__field-container">
        <div class="o-form__field-label">استان محل دفتر مرکزی</div>
        <select class="c-ui-select js-ui-select-search js-dropdown-universal js-select-company-state js-select-state"
          name="additionalinfo[company_state_id]" value="">
          <option value="">انتخاب استان</option>
          @if(count($states))
            @foreach($states->where('type', 'state') as $state)
              <option value="{{ $state->id }}" {{ ($customer->legal->city->state->id == $state->id)? 'selected' : '' }}> {{ $state->name }} </option>
            @endforeach
          @endif
        </select>
      </div>


      <div class="o-form__field-container">
        <div class="o-form__field-label">شهر محل دفتر مرکزی</div>
        <select class="c-ui-select js-ui-select-search js-dropdown-universal js-select-company-city js-select-city" name="additionalinfo[company_city_id]" value="">
          <option value="">انتخاب شهر</option>
        </select>
      </div>
      <label class="o-form__field-container">
        <div class="o-form__field-label">شماره تلفن ثابت</div>
        <div class="o-form__field-frame">
          <input class="o-form__field js-input-field " name="additionalinfo[company_phone]" placeholder="" type="text" value="{{ persianNum($customer->legal->phone) }}"/></div>
      </label>
      <div class="c-profile-personal__legal-actions">
        <button class="o-btn o-btn--contained-blue-lg">ثبت اطلاعات</button>
      </div>
    </form>

  </div>
  <div class="c-notice u-hidden js-notice"><span class="js-notice-text"></span>
    <button class="c-notice__dismiss-button js-notice-button"></button>
    <div class="c-notice__progress-bar js-notice-progress"></div>
  </div>
</section>
@endsection


@section('page-content')
  <div class="remodal-overlay remodal-is-closed" style="display: none;"></div>
  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-modal c-u-minicart__modal u-hidden js-minicart-modal remodal-is-initialized remodal-is-closed"
         data-remodal-id="universal-mini-cart" role="dialog" aria-labelledby="modalTitle" tabindex="-1"
         aria-describedby="modalDesc" data-remodal-options="">
      <div class="c-modal__top-bar  ">
        <div>
          <div class="c-u-minicart__quantity">
            سبد خرید
            <span>۰ کالا</span>
          </div>
          <a href="/cart/" class="o-link o-link--has-arrow o-link--no-border o-link--sm">مشاهده سبد خرید</a>
        </div>
        <div class="c-modal__close" data-remodal-action="close"></div>
      </div>
      <div class="c-u-minicart">
      </div>
      <div class="c-modal__footer">
        <div class="c-header__cart-info-total">
          <span class="c-header__cart-info-total-text">مبلغ قابل پرداخت</span>
          <p class="c-header__cart-info-total-amount">
            <span class="c-header__cart-info-total-amount-number"> ۰</span>
            <span> تومان</span>
          </p>
        </div>

        <div>
          <a data-snt-event="dkHeaderClick"
             data-snt-params="{&quot;item&quot;:&quot;mini-cart&quot;,&quot;item_option&quot;:&quot;confirm-cart&quot;}"
             href="/shipping/" class="o-btn o-btn--contained-red-md">ثبت سفارش</a>
        </div>
      </div>
    </div>
  </div>
  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-modal c-modal--sm js-personal-info-modal remodal-is-initialized remodal-is-closed"
         data-remodal-id="personal-info-mobile_phone-modal" role="dialog" aria-labelledby="modalTitle" tabindex="-1"
         aria-describedby="modalDesc" data-remodal-options="closeOnOutsideClick: false">
      <div class="c-modal__top-bar  c-modal__top-bar--has-line">
        <div class="c-modal__title ">شماره موبایل</div>
        <div class="c-modal__close" data-remodal-action="close"></div>
      </div>
      <form class="c-modal__content js-not-empty-parent js-personal-info-form js-phone-modal"
            id="personal-info-phone-form" novalidate="novalidate"><label class="o-form__field-container">
          <div class="o-form__field-frame">
            <input name="additionalinfo[mobile_phone]" type="" placeholder=""
                   value="{{ $customer->mobile }}"
                   class="o-form__field js-input-field js-not-empty-input"></div>
        </label>
        <div class="c-modal__btn-container">
          <button class="o-btn o-btn--contained-blue-md disabled js-not-empty-btn disabled">ارسال کد تایید
          </button>
        </div>
      </form>
    </div>
  </div>

  {{--<div class="remodal-wrapper remodal-is-closed" style="display: none;">--}}
  {{--  <div--}}
  {{--    class="remodal c-modal c-modal--sm c-modal--not-scroll js-personal-info-modal remodal-is-initialized remodal-is-closed"--}}
  {{--    data-remodal-id="personal-info-job_title-modal" role="dialog" aria-labelledby="modalTitle" tabindex="-1"--}}
  {{--    aria-describedby="modalDesc" data-remodal-options="closeOnOutsideClick: false">--}}
  {{--    <div class="c-modal__top-bar  c-modal__top-bar--has-line">--}}
  {{--      <div class="c-modal__title ">شغل</div>--}}
  {{--      <div class="c-modal__close" data-remodal-action="close"></div>--}}
  {{--    </div>--}}
  {{--    <form class="c-modal__content js-not-empty-parent js-personal-info-form">--}}
  {{--      <div class="o-form__field-container">--}}
  {{--        <div--}}
  {{--          class="selectric-wrapper selectric-c-ui-select selectric-js-ui-select-search selectric-js-dropdown-universal selectric-js-not-empty-input">--}}
  {{--          <div class="selectric-hide-select"><select--}}
  {{--              class="c-ui-select js-ui-select-search js-dropdown-universal js-not-empty-input"--}}
  {{--              name="additionalinfo[job_id]" value="" tabindex="-1">--}}
  {{--              <option value="">-</option>--}}
  {{--              <option value="1">ورزشکار</option>--}}
  {{--              <option value="2">مربی تربیت بدنی</option>--}}
  {{--              <option value="3">تاریخ / جغرافیا / باستان شناسی</option>--}}
  {{--              <option value="4">روانشناسی</option>--}}
  {{--              <option value="5">علوم اجتماعی</option>--}}
  {{--              <option value="6">راهنمای تور / مهماندار</option>--}}
  {{--              <option value="7">ایمنی و امنیت</option>--}}
  {{--              <option value="8">خبرنگار و روزنامه نگار</option>--}}
  {{--              <option value="9">حقوقدان</option>--}}
  {{--              <option value="10">وکیل</option>--}}
  {{--              <option value="11">مهندسی انرژی</option>--}}
  {{--              <option value="12">مهندسی نساجی</option>--}}
  {{--              <option value="13">مهندسی کشاورزی</option>--}}
  {{--              <option value="14">مهندسی معدن</option>--}}
  {{--              <option value="15">مهندسی مواد و متالورژی</option>--}}
  {{--              <option value="16">زمین شناسی</option>--}}
  {{--              <option value="17">ترجمه - تولید و ویرایش محتوا</option>--}}
  {{--              <option value="18">مهندسی صنایع غذایی</option>--}}
  {{--              <option value="19">مهندسی شیمی</option>--}}
  {{--              <option value="20">مهندسی نفت و گاز</option>--}}
  {{--              <option value="21">مهندسی مکانیک</option>--}}
  {{--              <option value="22">مهندسی هوا و فضا</option>--}}
  {{--              <option value="23">مهندسی پزشکی</option>--}}
  {{--              <option value="24">مهندسی برق</option>--}}
  {{--              <option value="25">مهندسی عمران</option>--}}
  {{--              <option value="26">مهندسی معماری و شهرسازی</option>--}}
  {{--              <option value="27">طراحی و گرافیک</option>--}}
  {{--              <option value="28">پژوهش</option>--}}
  {{--              <option value="29">منابع انسانی</option>--}}
  {{--              <option value="30">مدیرعامل</option>--}}
  {{--              <option value="31">مدیر اجرایی</option>--}}
  {{--              <option value="32">روابط عمومی</option>--}}
  {{--              <option value="33">مسئول دفتر</option>--}}
  {{--              <option value="34">مالی و حسابداری</option>--}}
  {{--              <option value="35">مهندسی صنایع</option>--}}
  {{--              <option value="36">مدیریت پروژه</option>--}}
  {{--              <option value="37">حمل و نقل</option>--}}
  {{--              <option value="38">انبارداری</option>--}}
  {{--              <option value="39">بازرگانی</option>--}}
  {{--              <option value="40">مدیریت شبکه - پشتیبانی سخت افزاری</option>--}}
  {{--              <option value="41">توسعه نرم افزار و برنامه نویسی</option>--}}
  {{--              <option value="42">پزشکی</option>--}}
  {{--              <option value="43">دامپزشکی</option>--}}
  {{--              <option value="44">پرستاری</option>--}}
  {{--              <option value="45">زیست شناسی</option>--}}
  {{--              <option value="46">داروسازی</option>--}}
  {{--              <option value="47">مدرس</option>--}}
  {{--              <option value="48">دیجیتال مارکتینگ</option>--}}
  {{--              <option value="49">فروش / بازاریابی</option>--}}
  {{--            </select></div>--}}
  {{--          <div class="selectric"><span class="label">-</span><b class="button">▾</b></div>--}}
  {{--          <div class="selectric-items selectric-has-search" tabindex="-1"><input class="dk-selectric-input"--}}
  {{--                                                                                 tabindex="0">--}}
  {{--            <div class="selectric-scroll">--}}
  {{--              <ul>--}}
  {{--                <li data-index="0" class="selected">-</li>--}}
  {{--                <li data-index="1" class="">ورزشکار</li>--}}
  {{--                <li data-index="2" class="">مربی تربیت بدنی</li>--}}
  {{--                <li data-index="3" class="">تاریخ / جغرافیا / باستان شناسی</li>--}}
  {{--                <li data-index="4" class="">روانشناسی</li>--}}
  {{--                <li data-index="5" class="">علوم اجتماعی</li>--}}
  {{--                <li data-index="6" class="">راهنمای تور / مهماندار</li>--}}
  {{--                <li data-index="7" class="">ایمنی و امنیت</li>--}}
  {{--                <li data-index="8" class="">خبرنگار و روزنامه نگار</li>--}}
  {{--                <li data-index="9" class="">حقوقدان</li>--}}
  {{--                <li data-index="10" class="">وکیل</li>--}}
  {{--                <li data-index="11" class="">مهندسی انرژی</li>--}}
  {{--                <li data-index="12" class="">مهندسی نساجی</li>--}}
  {{--                <li data-index="13" class="">مهندسی کشاورزی</li>--}}
  {{--                <li data-index="14" class="">مهندسی معدن</li>--}}
  {{--                <li data-index="15" class="">مهندسی مواد و متالورژی</li>--}}
  {{--                <li data-index="16" class="">زمین شناسی</li>--}}
  {{--                <li data-index="17" class="">ترجمه - تولید و ویرایش محتوا</li>--}}
  {{--                <li data-index="18" class="">مهندسی صنایع غذایی</li>--}}
  {{--                <li data-index="19" class="">مهندسی شیمی</li>--}}
  {{--                <li data-index="20" class="">مهندسی نفت و گاز</li>--}}
  {{--                <li data-index="21" class="">مهندسی مکانیک</li>--}}
  {{--                <li data-index="22" class="">مهندسی هوا و فضا</li>--}}
  {{--                <li data-index="23" class="">مهندسی پزشکی</li>--}}
  {{--                <li data-index="24" class="">مهندسی برق</li>--}}
  {{--                <li data-index="25" class="">مهندسی عمران</li>--}}
  {{--                <li data-index="26" class="">مهندسی معماری و شهرسازی</li>--}}
  {{--                <li data-index="27" class="">طراحی و گرافیک</li>--}}
  {{--                <li data-index="28" class="">پژوهش</li>--}}
  {{--                <li data-index="29" class="">منابع انسانی</li>--}}
  {{--                <li data-index="30" class="">مدیرعامل</li>--}}
  {{--                <li data-index="31" class="">مدیر اجرایی</li>--}}
  {{--                <li data-index="32" class="">روابط عمومی</li>--}}
  {{--                <li data-index="33" class="">مسئول دفتر</li>--}}
  {{--                <li data-index="34" class="">مالی و حسابداری</li>--}}
  {{--                <li data-index="35" class="">مهندسی صنایع</li>--}}
  {{--                <li data-index="36" class="">مدیریت پروژه</li>--}}
  {{--                <li data-index="37" class="">حمل و نقل</li>--}}
  {{--                <li data-index="38" class="">انبارداری</li>--}}
  {{--                <li data-index="39" class="">بازرگانی</li>--}}
  {{--                <li data-index="40" class="">مدیریت شبکه - پشتیبانی سخت افزاری</li>--}}
  {{--                <li data-index="41" class="">توسعه نرم افزار و برنامه نویسی</li>--}}
  {{--                <li data-index="42" class="">پزشکی</li>--}}
  {{--                <li data-index="43" class="">دامپزشکی</li>--}}
  {{--                <li data-index="44" class="">پرستاری</li>--}}
  {{--                <li data-index="45" class="">زیست شناسی</li>--}}
  {{--                <li data-index="46" class="">داروسازی</li>--}}
  {{--                <li data-index="47" class="">مدرس</li>--}}
  {{--                <li data-index="48" class="">دیجیتال مارکتینگ</li>--}}
  {{--                <li data-index="49" class="last">فروش / بازاریابی</li>--}}
  {{--              </ul>--}}
  {{--            </div>--}}
  {{--          </div>--}}
  {{--        </div>--}}
  {{--      </div>--}}
  {{--      <div class="c-modal__btn-container">--}}
  {{--        <button type="submit" class="o-btn o-btn--contained-blue-md js-not-empty-btn disabled">ثبت شغل</button>--}}
  {{--      </div>--}}
  {{--    </form>--}}
  {{--  </div>--}}
  {{--</div>--}}

  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div
      class="remodal c-modal c-modal--sm js-personal-info-modal js-phone-verification-modal remodal-is-initialized remodal-is-closed"
      data-remodal-id="personal-info-phone-verification-modal" role="dialog" aria-labelledby="modalTitle"
      tabindex="-1" aria-describedby="modalDesc" data-remodal-options="closeOnOutsideClick: false">
      <div class="c-modal__top-bar  c-modal__top-bar--has-line">
        <div class="c-modal__title ">تایید شماره موبایل</div>
        <div class="c-modal__close" data-remodal-action="close"></div>
      </div>
      <form class="c-modal__content js-confirm-phone-form">
        <div class="o-form__row">
          <div class="c-profile-personal__info">کد تایید برای شماره موبایل <span
              class="js-changed-phone-number"></span> ارسال گردید.
          </div>
        </div>
        <div class="o-form__row">
          <div class="o-form__field-container"><label
              class="c-profile-personal__verify-phone-container o-form__field-frame"><input
                name="confirm[code]"
                class="c-profile-personal__verify-phone-input js-verify-phone-input js-persian-digit-input"
                type="text" maxlength="5">
              <div class="c-profile-personal__verify-phone-input-hider"></div>
            </label></div>
        </div>
        <div class="c-form__row">
          <div class="js-phone-code-container">
            <div class="c-profile-personal__verify-phone-text">ارسال مجدد تا <span class="js-phone-code-counter"
                                                                                   data-countdownseconds=""></span>
              ثانیه دیگر
            </div>
          </div>
          <a href="#" class="c-profile-personal__verify-phone-text u-hidden js-send-confirm-code">دریافت مجدد کد
            تایید</a></div>
      </form>
    </div>
  </div>
  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-modal c-modal--sm js-personal-info-modal remodal-is-initialized remodal-is-closed"
         data-remodal-id="personal-info-reset_password-modal" role="dialog" aria-labelledby="modalTitle" tabindex="-1"
         aria-describedby="modalDesc" data-remodal-options="closeOnOutsideClick: false">
      <div class="c-modal__top-bar  c-modal__top-bar--has-line">
        <div class="c-modal__title ">ویرایش رمز عبور</div>
        <div class="c-modal__close" data-remodal-action="close"></div>
      </div>
      <form class="c-modal__content js-not-empty-parent js-change-password-form" id="change-password-form"
            novalidate="novalidate">
        <div class="o-form__row">
          <div class="c-profile-personal__info">رمز عبور باید حداقل ۶ حرف باشد.</div>
        </div>
        <input class="u-hidden-visually">
        <div class="o-form__row"><label class="o-form__field-container">
            <div class="o-form__field-label">رمز عبور فعلی</div>
            <div class="o-form__field-frame"><input name="changepassword[password_old]" type="password"
                                                    placeholder="" value=""
                                                    class="o-form__field js-input-field js-not-empty-input"></div>
          </label></div>
        <div class="o-form__row"><label class="o-form__field-container">
            <div class="o-form__field-label">رمز عبور جدید</div>
            <div class="o-form__field-frame">
              <input name="changepassword[password]" type="password" placeholder=""
                     value=""
                     class="o-form__field js-input-field js-not-empty-input txtPassword">
            </div>
          </label></div>
        <div class="o-form__row"><label class="o-form__field-container">
            <div class="o-form__field-label">تکرار رمز عبور جدید</div>
            <div class="o-form__field-frame"><input name="changepassword[password2]" type="password" placeholder=""
                                                    value=""
                                                    class="o-form__field js-input-field js-not-empty-input"></div>
          </label></div>
        <div class="c-modal__btn-container">
          <button type="submit" class="o-btn o-btn--contained-blue-md js-not-empty-btn disabled">ثبت</button>
        </div>
      </form>
    </div>
  </div>
  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div
      class="remodal c-modal c-modal--xs c-profile-iban js-personal-info-modal remodal-is-initialized remodal-is-closed"
      data-remodal-id="personal-info-bank_card_number-modal" role="dialog" aria-labelledby="modalTitle" tabindex="-1"
      aria-describedby="modalDesc" data-remodal-options="closeOnOutsideClick: false">
      <div class="c-modal__top-bar  c-modal__top-bar--has-line">
        <div class="c-modal__title ">اطلاعات حساب بانکی برای بازگرداندن وجه</div>
        <div class="c-modal__close" data-remodal-action="close"></div>
      </div>
      <div class="c-modal__content js-destination-state"><p class="c-profile-iban__dsc">
          لطفا روش بازگرداندن وجوه خود را انتخاب نمایید.
          {{--        همچنین برای کسب اطلاعات بیشتر لطفا ملاحظات بازگشت وجه در {{ $site_name }} را مطالعه نمایید.--}}
          {{--        <a class="o-btn o-btn--left-icon o-btn--link-blue-sm" target="_blank" href="/faq/question/720/"--}}
          {{--           data-after-icon="Icon-Navigation-Chevron-Left">--}}
          {{--          ملاحظات بازگشت وجه توسط {{ $site_name }}--}}
          {{--        </a>--}}
        </p>
        <div>
          <div class="c-profile-iban__dest-row">
            <label class="c-outline-radio">
              <input type="radio" class="js-destination-selector-input" id="wallet-destinations" name="refund-destination-selector"
                     value="wallets">
              <span
                class="c-outline-radio__check"></span></label><label class="c-profile-iban__credit-card-title"
                                                                     for="wallet-destination"><span
                class="c-profile-iban__dest-title">
                            واریز به کیف پول {{ $site_name }}
                        </span>
              <span class="c-profile-iban__dest-dsc u-hidden js-refund-wallet-disable">
                            شما می‌توانید با انتخاب کیف پول به عنوان روش بازگشت وجه،
                            از مزایای انتقال سریع تر وجوه درخواستی بهره‌مند شوید.


{{--                                         شما ابتدا باید کیف پول خود را فعال کنید سپس با انتخاب آن به عنوان--}}
                {{--                            روش بازگشت وجه،از مزایای انتقال سریع تر وجوه درخواستی بهره‌مند شوید.--}}
                            <br>

{{--              <a class="o-btn o-btn--left-icon o-btn--link-blue-sm js-refund-wallet-activate-link c-profile-iban__edit-iban"--}}
                {{--                data-after-icon="Icon-Navigation-Chevron-Left" href="">--}}
                {{--                                فعال‌سازی و انتخاب--}}
                {{--                            </a>--}}

            </span>
              <span class="c-profile-iban__dest-dsc js-refund-wallet-available">
                            شما می‌توانید با انتخاب کیف پول به عنوان روش بازگشت وجه،
                            از مزایای انتقال سریع تر وجوه درخواستی بهره‌مند شوید.
                        </span><span class="c-profile-iban__dest-dsc u-hidden js-refund-wallet-unavailable">
                            متاسفانه کیف پول بصورت موقت از دسترس خارج می‌باشد. لطفا کمی دیگر تلاش کنید.
                        </span></label></div>
          <div class="c-profile-iban__dest-wallet-border"><img
              src="https://www.digikala.com/static/files/058f648c.svg" alt="کیف پول"></div>
          <div class="c-profile-iban__dest-row"><label class="c-outline-radio"><input type="radio"
                                                                                      class="js-destination-selector-input"
                                                                                      id="iban-destination"
                                                                                      data-has-iban="0"
                                                                                      data-iban=""
                                                                                      name="refund-destination-selector"
                                                                                      value="iban"><span
                class="c-outline-radio__check"></span></label><label class="c-profile-iban__credit-card-title"
                                                                     for="iban-destination"><span
                class="c-profile-iban__dest-title">
                            واریز به حساب بانکی
                        </span><span class="c-profile-iban__dest-dsc js-iban-dest-row-text u-hidden">
                            شماره شبا:

                        </span>
              <button type="button"
                      class="o-btn o-btn--left-icon js-edit-iban o-btn--link-blue-sm c-profile-iban__edit-iban u-hidden"
                      data-after-icon="Icon-Navigation-Chevron-Left">
                ویرایش شماره شبا
              </button>
              <span class="c-profile-iban__dest-dsc js-iban-dest-row-dsc ">
                            در این روش، {{ $site_name }} به شماره شبا حساب بانکی شما
                            نیاز دارد.
{{--              در صورتی که شماره شبا خود را نمیدانید شما می‌توانید در مرحله بعد--}}
                {{--                            با شماره حساب و یا شماره کارت بانکی خود نسبت به محاسبه شبا اقدام نمایید.--}}
                        </span>
            </label></div>
        </div>
      </div>
      <div class="c-modal__content js-card-number-state u-hidden"><p class="c-profile-iban__dsc">
          {{--        برای محاسبه شبا،--}}
          شماره کارت متصل به حسابی که می‌خواهید واریز وجه به آن انجام شود را وارد کنید
        </p>
        <div class="o-form__row js-credit-card-input"><label class="c-profile-personal__card-container"><input
              class="c-profile-personal__card-input js-card-complete-input" maxlength="4"><span
              class="c-profile-personal__card-separator">-</span><input
              class="c-profile-personal__card-input js-card-complete-input" maxlength="4"><span
              class="c-profile-personal__card-separator">-</span><input
              class="c-profile-personal__card-input js-card-complete-input" maxlength="4"><span
              class="c-profile-personal__card-separator">-</span><input
              class="c-profile-personal__card-input js-card-complete-input" maxlength="4"></label></div>
        <div class="c-modal__btn-container">
          {{--        <button type="button" class="o-btn o-btn--contained-red-md disabled js-card-complete-btn">--}}
          {{--          محاسبه شماره شبا--}}
          {{--        </button>--}}
          <button type="button" class="o-btn o-btn--contained-red-md disabled js-card-complete-btn">
            ثبت کارت بانکی
          </button>
        </div>
      </div>
      <div class="c-modal__content o-text-right u-hidden js-iban-state"><p class="c-profile-iban__dsc">
          تبدیل شماره شبای کارت شما با خطا مواجه شد. لطفا شماره شبای خود را به صورت دستی وارد نمایید
        </p>
        <div>
          <div class="c-profile-iban__credit-data-row"><span
              class="c-profile-iban__credit-card-number js-iban-credit-card-number"></span><span
              class="c-profile-iban__bank-logo"><img class="js-iban-bank-image" alt="" src=""></span></div>
          <div class="c-profile-iban__bank-title js-iban-bank-title"></div>
        </div>
        <a href="/faq/question/719/" data-after-icon="Icon-Navigation-Chevron-Left" target="_blank"
           class="o-btn o-btn--link-blue-md o-btn--remove-padding">روش‌های محاسبه شبا</a>
        <form id="iban-input-form">
          <div class="c-profile-iban__input-row"><label class="o-form__field-container">
              <div class="o-form__field-frame"><input name="ibanCodeInput" type="" placeholder="" value=""
                                                      class="o-form__field js-input-field js-iban-input"></div>
            </label></div>
        </form>
        <div class="o-hint o-hint--small o-hint--text o-hint--neutral">
          شماره شبا را به همراه IR و بدون فاصله وارد نمایید.
        </div>
        <div class="c-modal__btn-container">
          <button type="button" class="o-btn o-btn--contained-red-md disabled js-check-iban-button">
            بررسی اطلاعات
          </button>
        </div>
      </div>
    </div>
  </div>

  {{--<div class="remodal-wrapper remodal-is-closed" style="display: none;">--}}
  {{--  <div class="remodal c-modal c-modal--xs js-personal-info-modal remodal-is-initialized remodal-is-closed"--}}
  {{--       data-remodal-id="personal-info-bank_card_confirm-modal" role="dialog" aria-labelledby="modalTitle"--}}
  {{--       tabindex="-1" aria-describedby="modalDesc" data-remodal-options="closeOnOutsideClick: false">--}}
  {{--    <div class="c-modal__top-bar  c-modal__top-bar--has-line">--}}
  {{--      <div class="c-modal__title ">بررسی اطلاعات بازگردانی وجه</div>--}}
  {{--      <div class="c-modal__close" data-remodal-action="close"></div>--}}
  {{--    </div>--}}
  {{--    <div class="c-modal__content js-card-complete-parent">--}}
  {{--      <div class="o-form__row">--}}
  {{--        لطفا اطلاعات زیر را جهت واریز وجوه به دقت بررسی کرده و اقدام لازم را انجام دهید--}}
  {{--      </div>--}}
  {{--      <div class="o-form__row">--}}
  {{--        <div class="c-profile-personal__card-info">--}}
  {{--          <div class="c-profile-personal__card-info-item"><span>شماره کارت</span><span--}}
  {{--              class="js-confirm-card-bank-number"></span></div>--}}
  {{--          <div class="c-profile-personal__card-info-item"><span>شماره شبا</span><span--}}
  {{--              class="js-confirm-iban"></span></div>--}}
  {{--          <div class="c-profile-personal__card-info-item"><span>بانک صادر کننده</span><span--}}
  {{--              class="js-confirm-card-bank-name"></span></div>--}}
  {{--          <div class="c-profile-personal__card-info-item"><span>صاحب حساب</span><span--}}
  {{--              class="js-confirm-card-bank-owner"></span></div>--}}
  {{--        </div>--}}
  {{--      </div>--}}
  {{--      <div class="c-modal__btn-container">--}}
  {{--        <button type="button" class="o-btn o-btn--outlined-red-md js-card-confirm-edit">--}}
  {{--          بازگشت--}}
  {{--        </button>--}}
  {{--        <button type="button" class="o-btn o-btn--contained-red-md js-card-confirm-btn">--}}
  {{--          تایید اطلاعات--}}
  {{--        </button>--}}
  {{--      </div>--}}
  {{--    </div>--}}
  {{--  </div>--}}
  {{--</div>--}}

  <div class="remodal c-modal c-modal--sm c-modal--not-scroll js-personal-info-modal" data-remodal-id="personal-info-birth-modal"
       role="dialog" aria-labelledby="modalTitle" tabindex="-1z" aria-describedby="modalDesc" data-remodal-options="closeOnOutsideClick: false">
    <div class="c-modal__top-bar  c-modal__top-bar--has-line">
      <div class="c-modal__title ">تاریخ تولد</div>
      <div class="c-modal__close" data-remodal-action="close"></div>
    </div>
    <form class="c-modal__content js-not-empty-parent js-personal-info-form">
      <div class="o-form__row o-form__row--flex">
        <div class="o-form__field-container">
          <div class="o-form__field-label">سال</div>
          <select class="c-ui-select js-ui-select-search js-dropdown-universal js-not-empty-input" name="additionalinfo[birth_year]" value="1375">
            <option value="">سال</option>
            @for($i=1382; $i >= 1310; $i--)
              <option value="{{ $i }}" {{ (isset($date[0]) && ($date[0] == $i))? 'selected' : ''  }}>{{ persianNum($i) }}</option>
            @endfor
          </select>
        </div>
        <div class="o-form__field-container">
          <div class="o-form__field-label">ماه</div>
          <select class="c-ui-select js-ui-select-search js-dropdown-universal js-not-empty-input"
                  name="additionalinfo[birth_month]">
            <option value="">ماه</option>
            @php
              $persianMonth = ['فروردین', 'اردیبهشت', 'خرداد', 'تیر', 'مرداد', 'شهریور', 'مهر', 'آبان', 'آذر', 'دی', 'بهمن', 'اسفند'];
            @endphp
            @for($i=1; $i <= 12; $i++)
              <option value="{{ $i }}" {{ (isset($date[1]) && ($date[1] == $i))? 'selected' : ''  }}>{{ $persianMonth[$i-1] }}</option>
            @endfor
          </select>
        </div>
        <div class="o-form__field-container">
          <div class="o-form__field-label">روز</div>
          <select class="c-ui-select js-ui-select-search js-dropdown-universal js-not-empty-input"
                  name="additionalinfo[birth_day]" value="6">
            <option value="">روز</option>
            @for($i=1; $i <= 31; $i++)
              <option value="{{ $i }}" {{ (isset($date[2]) && ($date[2] == $i))? 'selected' : ''  }}>{{ persianNum($i) }}</option>
            @endfor
          </select>
        </div>
      </div>
      <div class="c-modal__btn-container">
        <button type="submit" class="o-btn o-btn--contained-blue-md js-not-empty-btn disabled">ثبت تاریخ تولد</button>
      </div>
    </form>
  </div>
  <div class="remodal c-modal c-modal--sm js-personal-info-modal"
       data-remodal-id="personal-info-email-modal"
       role="dialog"
       aria-labelledby="modalTitle"
       tabindex="-1z"
       aria-describedby="modalDesc"
       data-remodal-options="closeOnOutsideClick: false"
  >
    <div class="c-modal__top-bar  c-modal__top-bar--has-line">
      <div class="c-modal__title ">ایمیل</div>
      <div class="c-modal__close" data-remodal-action="close"></div>
    </div>

    <form class="c-modal__content js-not-empty-parent js-personal-info-form js-email-modal" id="personal-info-email-form">
      <label class="o-form__field-container">
        <div class="o-form__field-frame"><input name="additionalinfo[email]" type="" placeholder=""
                                                value="mehdi.jalaliii03@gmail.com"
                                                class="o-form__field js-input-field js-not-empty-input"/></div>
      </label>
      <div class="c-modal__btn-container">
        <button type="submit"
                class="o-btn o-btn--contained-blue-md js-not-empty-btn disabled js-personal-info-email-submit">تایید
        </button>
      </div>
    </form>'

  </div>
  <div class="remodal c-modal c-modal--sm js-verification-email-modal"
       data-remodal-id="personal-info-email-verification-modal"
       role="dialog"
       aria-labelledby="modalTitle"
       tabindex="-1z"
       aria-describedby="modalDesc"
       data-remodal-options="closeOnOutsideClick: false"
  >
    <div class="c-modal__top-bar  c-modal__top-bar--has-line">
      <div class="c-modal__title ">ایمیل تایید ارسال شد</div>
      <div class="c-modal__close" data-remodal-action="close"></div>
    </div>
    <div class="c-modal__content">
      <div class=""><img src="https://www.digikala.com/static/files/ba53f9b1.svg"/></div>
      <div class="c-modal__desc">لطفا به ایمیل خود مراجعه نموده و بر روی لینک ارسال‌شده کلیک کنید.</div>
      <div class="c-modal__btn-container">
        <button type="button" class="o-btn o-btn--outlined-blue-md" data-remodal-action="close">متوجه شدم</button>
      </div>
    </div>
  </div>
  <div class="remodal c-modal c-modal--sm js-personal-info-modal"
       data-remodal-id="personal-info-fullname-modal"
       role="dialog"
       aria-labelledby="modalTitle"
       tabindex="-1z"
       aria-describedby="modalDesc"
       data-remodal-options="closeOnOutsideClick: false"
  >
    <div class="c-modal__top-bar  c-modal__top-bar--has-line">
      <div class="c-modal__title ">نام و نام خانوادگی</div>
      <div class="c-modal__close" data-remodal-action="close"></div>
    </div>
    <form class="c-modal__content js-not-empty-parent js-personal-info-form" id="personal-info-name-form" method="post">
      <div class="o-form__row"><label class="o-form__field-container">
          <div class="o-form__field-label">نام</div>
          <div class="o-form__field-frame">
            <input name="additionalinfo[first_name]" type="" placeholder=""
                   value="{{ $customer->first_name }}" class="o-form__field js-input-field js-not-empty-input"/>
          </div>
        </label></div>
      <div class="o-form__row"><label class="o-form__field-container">
          <div class="o-form__field-label">نام خانوادگی</div>
          <div class="o-form__field-frame">
            <input name="additionalinfo[last_name]" type="" placeholder="" value="{{ $customer->last_name }}"
                   class="o-form__field js-input-field js-not-empty-input"/>
          </div>
        </label></div>
      <div class="c-modal__btn-container">
        <button class="o-btn o-btn--contained-blue-md js-not-empty-btn disabled">ثبت اطلاعات</button>
      </div>
    </form>
  </div>
  <div class="remodal c-modal c-modal--sm js-personal-info-modal"
       data-remodal-id="personal-info-national_identity_number-modal"
       role="dialog"
       aria-labelledby="modalTitle"
       tabindex="-1z"
       aria-describedby="modalDesc"
       data-remodal-options="closeOnOutsideClick: false"
  >
    <div class="c-modal__top-bar  c-modal__top-bar--has-line">
      <div class="c-modal__title ">کد ملی</div>
      <div class="c-modal__close" data-remodal-action="close"></div>
    </div>
    <form class="c-modal__content js-national-code-form" method="post" id="personal-info-national-id-form">
      <div class="o-form__row"><label class="o-form__field-container">
          <div class="o-form__field-frame"><input name="additionalinfo[national_identity_number]" type="text"
                                                  placeholder=""
                                                  value="4900508349" class="o-form__field js-input-field "/></div>
        </label></div>
      {{--    <div class="o-form__row"><label class="o-form__check-box">--}}
      {{--        --}}
      {{--        <input class="o-form__check-box-input js-foreign-checkbox"--}}
      {{--                                                                     name="additionalinfo[foreigner]" value="1"--}}
      {{--                                                                     type="checkbox"><span--}}
      {{--          class="o-form__check-box-sign"></span><span class="js-ui-checkbox-label">--}}
      {{--            تبعه غیر‌ایرانی فاقد کد ملی هستم.--}}
      {{--        </span></label></div>--}}

      <div class="u-hidden js-foreigner-content">
        <div class="c-form__row">
          <div class="c-profile-personal__info">جهت تایید هویت خود، باید عکس صفحه اول گذرنامه یا گواهی اقامت را ارسال
            کنید.
          </div>
        </div>
        <div class="o-form__uploader js-uploader-container"><label class="o-btn o-btn--outlined-blue-sm"><input
              type="file" class="u-hidden js-ui-simple-uploader" accept="image/png, image/jpeg"
              name="additionalinfo[foreigner_document]" data-url="">
            ارسال مدرک
          </label>
          <div class="o-form__uploader-progress">
            <div class="o-form__uploader-progress-title js-ui-uploader-title"></div>
          </div>
        </div>
      </div>
      <div class="c-modal__btn-container">
        <button type="submit" class="o-btn o-btn--contained-blue-md">ثبت اطلاعات</button>
      </div>
    </form>
  </div>

@endsection

@section('script')
{{--<script>--}}
{{--  // توکن csrf--}}
{{--  $.ajaxSetup({--}}
{{--    headers: {--}}
{{--      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--    }--}}
{{--  });--}}
{{--</script>--}}
@endsection
