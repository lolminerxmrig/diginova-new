<!DOCTYPE html>
<!-- saved from url=(0058)https://seller.digikala.com/registration/business-details/ -->
<html class="uk-modal-page" style="" dir="rtl">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>{{ $fa_store_name }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('seller/icon/caf67ad9.ico') }}" type="image/icon">
    <link rel="stylesheet" href="{{ asset('seller/css/select2.css') }}">
    <script src="{{ asset('seller/js/jquery.min.js') }}"></script>
    <script src="{{ asset('seller/js/inputmask.js') }}"></script>
  </head>
  <body class=" c-modal-map__body" style="" cz-shortcut-listen="true">
    <div class="c-new-login">
      <aside class="c-new-login__sidebar c-new-login__sidebar--xs">
        <div class="c-new-login__sidebar-content">
          <header class="c-new-login__sidebar-header">
            <a href="https://seller.digikala.com/registration/" class="c-new-login__logo">
            <img src="{{ asset('seller/svg/seller-center-logo.svg') }}" alt="Digikala marketplace seller center logo">
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
            <a href="https://seller.digikala.com/registration/" class="c-new-login__logo">
            <img src="{{ asset('seller/svg/seller-center-logo.svg') }}" alt="Digikala marketplace seller center logo">
            </a>
            <h1 class="c-new-login__header">ثبت‌نام در مرکز فروشندگان</h1>
          </header>
        </div>
      </aside>
      <main class="c-new-login__main">
        <div class="c-reg-form c-reg-form--full">
          <form method="post" id="details-form" data-name="register" novalidate="novalidate">
            <div class="c-reg-form__row">
              <div class="c-reg-form__col c-reg-form__col--12">
                <p class="c-reg-form__text">
                  <span class="c-reg-form__text-label">توجه: </span>پر کردن تمامی موارد الزامیست.
                </p>
              </div>
            </div>
            <div class="c-reg-form__row c-reg-form__row--gap-20">
              <div class="c-reg-form__col c-reg-form__col--12">
                <h2 class="c-reg-form__header">چه نوع فروشنده ای هستید؟</h2>
                <input type="hidden" name="seconds" id="seconds" value="78">
              </div>
            </div>
            <div class="c-reg-form__row c-reg-form__row--gap-20">
              <div class="c-reg-form__col">
                <div class="c-ui-radio__group">
                  <label class="c-ui-radio">
                  <input class="c-ui-radio__origin " type="radio" name="register[private_business]" value="private" checked="" data-role="tab" data-target="real-account">
                  <span class="c-ui-radio__check"></span>
                  <span class="c-ui-radio__label">شخص حقیقی</span>
                  </label>
                  <label class="c-ui-radio">
                  <input class="c-ui-radio__origin " type="radio" name="register[private_business]" value="business" data-role="tab" data-target="business-account">
                  <span class="c-ui-radio__check"></span>
                  <span class="c-ui-radio__label">شخص حقوقی</span>
                  </label>
                </div>
              </div>
            </div>
            <div class="c-reg-form__row  c-reg-form__row--gap-10">
              <div class="c-reg-form__col c-reg-form__col--12">
                <p class="c-reg-form__text c-reg-form__text--condensed c-reg-form__text--gap">
                  <span class="c-reg-form__text--highlight">شخص حقیقی</span> فردی است که دارای خصوصیاتی مختص به خود مانند نام، نام خانوادگی، تاریخ تولد، کد ملی، شماره شناسنامه و غیره می باشد.
                </p>
                <p class="c-reg-form__text c-reg-form__text--condensed">
                  <span class="c-reg-form__text--highlight">شخص حقوقی</span> موسسات یا شرکت هایی هستند که پس از طی مراحل قانونی به ثبت می‌رسند و دارای مشخصاتی مانند نام شخص حقوقی، تاریخ ثبت، شماره ثبت، کد شناسایی، کد اقتصادی، موضوع فعالیت و غیره می باشند.
                </p>
              </div>
            </div>
            <div class="c-reg-form__tab c-reg-form__tab--active" data-role="tab-content" id="real-account">
              <div class="c-reg-form__row">
                <div class="c-reg-form__col c-reg-form__col--12">
                  <h2 class="c-reg-form__header">اطلاعات شخصی</h2>
                </div>
              </div>
              <div class="c-reg-form__row c-reg-form__row--gap-20 ">
                <div class="c-reg-form__col c-reg-form__col--6">
                  <label class="c-reg-form__text" for="first-name">نام</label>
                  <div class="c-ui-input">
                    <input type="text" name="register[first_name]" class="c-ui-input__field" id="first-name" value="اسماعیل" placeholder="" maxlength="255" required="">
                  </div>
                </div>
                <div class="c-reg-form__col c-reg-form__col--6">
                  <label class="c-reg-form__text" for="surname">نام خانوادگی</label>
                  <div class="c-ui-input">
                    <input type="text" name="register[last_name]" class="c-ui-input__field" id="surname" value="جعفری ماجلان" placeholder="" maxlength="255" required="">
                  </div>
                </div>
              </div>
              <div class="c-reg-form__row c-reg-form__row--limited c-reg-form__row--gap-20">
                <div class="c-reg-form__col c-reg-form__col--12">
                  <label class="c-reg-form__text">تاریخ تولد ( مثال:‌ ۶۵/۱۲/۰۶ )</label>
                </div>
                <div class="c-reg-form__col c-reg-form__col--4 c-reg-form__col--no-gap">
                  <select name="register[birth_day]" class="c-ui-select select2-hidden-accessible" placeholder="روز" data-validation="date" required="" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    <option></option>
                    <option value="1">۱</option>
                    <option value="2">۲</option>
                    <option value="3">۳</option>
                    <option value="4">۴</option>
                    <option value="5">۵</option>
                    <option value="6">۶</option>
                    <option value="7">۷</option>
                    <option value="8">۸</option>
                    <option value="9">۹</option>
                    <option value="10">۱۰</option>
                    <option value="11">۱۱</option>
                    <option value="12">۱۲</option>
                    <option value="13">۱۳</option>
                    <option value="14">۱۴</option>
                    <option value="15">۱۵</option>
                    <option value="16">۱۶</option>
                    <option value="17">۱۷</option>
                    <option value="18">۱۸</option>
                    <option value="19">۱۹</option>
                    <option value="20">۲۰</option>
                    <option value="21">۲۱</option>
                    <option value="22">۲۲</option>
                    <option value="23">۲۳</option>
                    <option value="24">۲۴</option>
                    <option value="25">۲۵</option>
                    <option value="26">۲۶</option>
                    <option value="27">۲۷</option>
                    <option value="28" selected="selected" data-select2-id="3">۲۸</option>
                    <option value="29">۲۹</option>
                    <option value="30">۳۰</option>
                    <option value="31">۳۱</option>
                  </select>
                  <span class="select2 select2-container select2-container--default" dir="rtl" data-select2-id="2" style="width: 126.656px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-registerbirth_day-vo-container"><span class="select2-selection__rendered" id="select2-registerbirth_day-vo-container" role="textbox" aria-readonly="true" title="۲۸">۲۸</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <div class="c-reg-form__col c-reg-form__col--4">
                  <select name="register[birth_month]" class="c-ui-select js-birth-month-select select2-hidden-accessible" placeholder="ماه" data-validation="date" required="" data-select2-id="4" tabindex="-1" aria-hidden="true" aria-invalid="false">
                    <option value="1" data-select2-id="23">۱</option>
                    <option value="2" data-select2-id="24">۲</option>
                    <option value="3" data-select2-id="25">۳</option>
                    <option value="4" data-select2-id="26">۴</option>
                    <option value="5" data-select2-id="27">۵</option>
                    <option value="6" data-select2-id="28">۶</option>
                    <option value="7" data-select2-id="29">۷</option>
                    <option value="8" data-select2-id="30">۸</option>
                    <option value="9" data-select2-id="31">۹</option>
                    <option value="10" data-select2-id="32">۱۰</option>
                    <option value="11" data-select2-id="33">۱۱</option>
                    <option value="12" data-select2-id="34">۱۲</option>
                  </select>
                  <span class="select2 select2-container select2-container--default" dir="rtl" data-select2-id="35" style="width: 126.656px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-registerbirth_month-un-container"><span class="select2-selection__rendered" id="select2-registerbirth_month-un-container" role="textbox" aria-readonly="true" title="۱">۱</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <div class="c-reg-form__col c-reg-form__col--4">
                  <select name="register[birth_year]" class="c-ui-select js-birth-year-select select2-hidden-accessible" placeholder="سال" data-validation="date" required="" data-select2-id="7" tabindex="-1" aria-hidden="true" aria-invalid="false">
                    <option></option>
                    <option value="1381">۱۳۸۱</option>
                    <option value="1380">۱۳۸۰</option>
                    <option value="1379">۱۳۷۹</option>
                    <option value="1378">۱۳۷۸</option>
                    <option value="1377" selected="selected" data-select2-id="9">۱۳۷۷</option>
                    <option value="1376">۱۳۷۶</option>
                    <option value="1375">۱۳۷۵</option>
                    <option value="1374">۱۳۷۴</option>
                    <option value="1373">۱۳۷۳</option>
                    <option value="1372">۱۳۷۲</option>
                    <option value="1371">۱۳۷۱</option>
                    <option value="1370">۱۳۷۰</option>
                    <option value="1369">۱۳۶۹</option>
                    <option value="1368">۱۳۶۸</option>
                    <option value="1367">۱۳۶۷</option>
                    <option value="1366">۱۳۶۶</option>
                    <option value="1365">۱۳۶۵</option>
                    <option value="1364">۱۳۶۴</option>
                    <option value="1363">۱۳۶۳</option>
                    <option value="1362">۱۳۶۲</option>
                    <option value="1361">۱۳۶۱</option>
                    <option value="1360">۱۳۶۰</option>
                    <option value="1359">۱۳۵۹</option>
                    <option value="1358">۱۳۵۸</option>
                    <option value="1357">۱۳۵۷</option>
                    <option value="1356">۱۳۵۶</option>
                    <option value="1355">۱۳۵۵</option>
                    <option value="1354">۱۳۵۴</option>
                    <option value="1353">۱۳۵۳</option>
                    <option value="1352">۱۳۵۲</option>
                    <option value="1351">۱۳۵۱</option>
                    <option value="1350">۱۳۵۰</option>
                    <option value="1349">۱۳۴۹</option>
                    <option value="1348">۱۳۴۸</option>
                    <option value="1347">۱۳۴۷</option>
                    <option value="1346">۱۳۴۶</option>
                    <option value="1345">۱۳۴۵</option>
                    <option value="1344">۱۳۴۴</option>
                    <option value="1343">۱۳۴۳</option>
                    <option value="1342">۱۳۴۲</option>
                    <option value="1341">۱۳۴۱</option>
                    <option value="1340">۱۳۴۰</option>
                    <option value="1339">۱۳۳۹</option>
                    <option value="1338">۱۳۳۸</option>
                    <option value="1337">۱۳۳۷</option>
                    <option value="1336">۱۳۳۶</option>
                    <option value="1335">۱۳۳۵</option>
                    <option value="1334">۱۳۳۴</option>
                    <option value="1333">۱۳۳۳</option>
                    <option value="1332">۱۳۳۲</option>
                    <option value="1331">۱۳۳۱</option>
                    <option value="1330">۱۳۳۰</option>
                    <option value="1329">۱۳۲۹</option>
                    <option value="1328">۱۳۲۸</option>
                    <option value="1327">۱۳۲۷</option>
                    <option value="1326">۱۳۲۶</option>
                    <option value="1325">۱۳۲۵</option>
                    <option value="1324">۱۳۲۴</option>
                    <option value="1323">۱۳۲۳</option>
                    <option value="1322">۱۳۲۲</option>
                    <option value="1321">۱۳۲۱</option>
                    <option value="1320">۱۳۲۰</option>
                    <option value="1319">۱۳۱۹</option>
                    <option value="1318">۱۳۱۸</option>
                    <option value="1317">۱۳۱۷</option>
                    <option value="1316">۱۳۱۶</option>
                    <option value="1315">۱۳۱۵</option>
                    <option value="1314">۱۳۱۴</option>
                    <option value="1313">۱۳۱۳</option>
                    <option value="1312">۱۳۱۲</option>
                    <option value="1311">۱۳۱۱</option>
                    <option value="1310">۱۳۱۰</option>
                  </select>
                  <span class="select2 select2-container select2-container--default" dir="rtl" data-select2-id="8" style="width: 126.656px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-registerbirth_year-x4-container"><span class="select2-selection__rendered" id="select2-registerbirth_year-x4-container" role="textbox" aria-readonly="true" title="۱۳۷۷">۱۳۷۷</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
              </div>
              <div class="c-reg-form__row c-reg-form__row--limited c-reg-form__row--gap-20">
                <div class="c-reg-form__col c-reg-form__col--12">
                  <label class="c-reg-form__text">جنسیت</label>
                </div>
                <div class="c-reg-form__col c-reg-form__col--no-gap">
                  <div class="c-ui-radio__group">
                    <label class="c-ui-radio">
                    <input class="c-ui-radio__origin " type="radio" name="register[gender]" value="male" checked="">
                    <span class="c-ui-radio__check"></span>
                    <span class="c-ui-radio__label">مرد</span>
                    </label>
                    <label class="c-ui-radio">
                    <input class="c-ui-radio__origin " type="radio" name="register[gender]" value="female">
                    <span class="c-ui-radio__check"></span>
                    <span class="c-ui-radio__label">زن</span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="c-reg-form__row c-reg-form__row--gap-20 ">
                <div class="c-reg-form__col c-reg-form__col--6">
                  <label class="c-reg-form__text" for="card_number">شماره شناسنامه</label>
                  <div class="c-ui-input">
                    <input type="text" name="register[identity_card_number]" class="c-ui-input__field c-ui-input__field--ltr accept-only-digits with-fa-digit" id="card_number" value="1630307319" placeholder="۱۲۳۴۵" required="" data-exceptions="9">
                  </div>
                </div>
                <div class="c-reg-form__col c-reg-form__col--6">
                  <label class="c-reg-form__text" for="identity_number">کد ملی</label>
                  <div class="c-ui-input">
                    <input type="text" name="register[national_identity_number]" class="c-ui-input__field c-ui-input__field--ltr accept-only-digits" id="identity_number" value="1630307319" placeholder="۱۲۳۴۵۶۷۸۹۰" minlength="1" maxlength="20" required="" data-exceptions="9">
                  </div>
                </div>
              </div>
            </div>
            <div class="c-reg-form__tab" data-role="tab-content" id="business-account">
              <div class="c-reg-form__row">
                <div class="c-reg-form__col c-reg-form__col--12">
                  <h2 class="c-reg-form__header">اطلاعات شرکتی</h2>
                </div>
              </div>
              <div class="c-reg-form__row c-reg-form__row--gap-20 ">
                <div class="c-reg-form__col c-reg-form__col--12">
                  <label class="c-reg-form__text" for="company_name">نام شرکت</label>
                  <div class="c-ui-input">
                    <input type="text" name="register[company_name]" class="c-ui-input__field" id="company_name" value="" placeholder="نام شرکت را وارد کنید ..." maxlength="255" required="" disabled="">
                  </div>
                </div>
              </div>
              <div class="c-reg-form__row c-reg-form__row--gap-20">
                <div class="c-reg-form__col c-reg-form__col--6">
                  <label class="c-reg-form__text" for="company_type">نوع شرکت</label>
                  <select id="company_type" name="register[company_type]" class="c-ui-select select2-hidden-accessible" placeholder="نوع شرکت خود را انتخاب کنید" required="" disabled="" data-select2-id="company_type" tabindex="-1" aria-hidden="true">
                    <option value="public" data-select2-id="11">سهامی عام</option>
                    <option value="joint_stock">سهامی خاص</option>
                    <option value="ltd">مسولیت محدود</option>
                    <option value="coop">تعاونی</option>
                    <option value="solidarity">تضامنی</option>
                  </select>
                  <span class="select2 select2-container select2-container--default select2-container--disabled" dir="rtl" data-select2-id="10" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-labelledby="select2-company_type-container"><span class="select2-selection__rendered" id="select2-company_type-container" role="textbox" aria-readonly="true" title="سهامی عام">سهامی عام</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <div class="c-reg-form__col c-reg-form__col--6">
                  <label class="c-reg-form__text" for="company_registration_number">شماره ثبت</label>
                  <div class="c-ui-input">
                    <input type="text" name="register[company_registration_number]" class="c-ui-input__field c-ui-input__field--ltr accept-only-digits" id="company_registration_number" value="" placeholder="۱۲۳۴۵" maxlength="255" required="" data-exceptions="9" disabled="">
                  </div>
                </div>
              </div>
              <div class="c-reg-form__row c-reg-form__row--gap-20">
                <div class="c-reg-form__col c-reg-form__col--6">
                  <label class="c-reg-form__text" for="company_national_identity_number">شناسه ملی</label>
                  <div class="c-ui-input">
                    <input type="text" name="register[company_national_identity_number]" class="c-ui-input__field c-ui-input__field--ltr accept-only-digits" id="company_national_identity_number" value="" placeholder="۱۲۳۴۵۶۷۸۹۰" maxlength="255" required="" data-exceptions="9" disabled="">
                  </div>
                </div>
                <div class="c-reg-form__col c-reg-form__col--6">
                  <label class="c-reg-form__text" for="company_economic_number">کد اقتصادی</label>
                  <div class="c-ui-input">
                    <input type="text" name="register[company_economic_number]" class="c-ui-input__field c-ui-input__field--ltr accept-only-digits" id="company_economic_number" value="" placeholder="۱۲۳۴۵۶۷۸۹۰" minlength="12" maxlength="12" required="" data-exceptions="9" disabled="">
                  </div>
                </div>
              </div>
              <div class="c-reg-form__row c-reg-form__row--gap-20 ">
                <div class="c-reg-form__col c-reg-form__col--12">
                  <label class="c-reg-form__text" for="company_authorized_representative">صاحبان حق امضا</label>
                  <div class="c-ui-input">
                    <input type="text" name="register[company_authorized_representative]" class="c-ui-input__field" id="company_authorized_representative" value="" maxlength="255" required="" disabled="">
                  </div>
                </div>
              </div>
            </div>
            <div class="c-reg-form__row c-reg-form__row--gap-60">
              <div class="c-reg-form__col c-reg-form__col--12">
                <h2 class="c-reg-form__header">اطلاعات تماس</h2>
              </div>
            </div>
            <div class="c-reg-form__row c-reg-form__row--gap-20 ">
              <div class="c-reg-form__col c-reg-form__col--6">
                <label class="c-reg-form__text" for="state-id">استان</label>
                <select id="state-id" name="register[state_id]" class="c-ui-select c-ui-select--search select2-hidden-accessible" data-select2-id="state-id" tabindex="-1" aria-hidden="true">
                  <option value=""></option>
                  <option value="2" data-code="041">آذربایجان شرقی</option>
                  <option value="3" data-code="044">آذربایجان غربی</option>
                  <option value="4" data-code="045">اردبیل</option>
                  <option value="5" data-code="031">اصفهان</option>
                  <option value="6" data-code="026">البرز</option>
                  <option value="7" data-code="084">ایلام</option>
                  <option value="8" data-code="077">بوشهر</option>
                  <option value="9" selected="selected" data-code="021" data-select2-id="13">تهران</option>
                  <option value="10" data-code="038">چهار محال و بختیاری</option>
                  <option value="11" data-code="056">خراسان جنوبی</option>
                  <option value="12" data-code="051">خراسان رضوی</option>
                  <option value="13" data-code="058">خراسان شمالی</option>
                  <option value="14" data-code="061">خوزستان</option>
                  <option value="15" data-code="024">زنجان</option>
                  <option value="16" data-code="023">سمنان</option>
                  <option value="17" data-code="054">سیستان و بلوچستان</option>
                  <option value="18" data-code="071">فارس</option>
                  <option value="19" data-code="028">قزوین</option>
                  <option value="20" data-code="025">قم</option>
                  <option value="21" data-code="087">کردستان</option>
                  <option value="22" data-code="034">کرمان</option>
                  <option value="23" data-code="083">کرمانشاه</option>
                  <option value="24" data-code="074">کهگیلویه و بویراحمد</option>
                  <option value="25" data-code="017">گلستان</option>
                  <option value="26" data-code="013">گیلان</option>
                  <option value="27" data-code="066">لرستان</option>
                  <option value="28" data-code="011">مازندران</option>
                  <option value="29" data-code="086">مرکزی</option>
                  <option value="30" data-code="076">هرمزگان</option>
                  <option value="31" data-code="081">همدان</option>
                  <option value="32" data-code="035">یزد</option>
                </select>
                <span class="select2 select2-container select2-container--default" dir="rtl" data-select2-id="12" style="width: 260px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-state-id-container"><span class="select2-selection__rendered" id="select2-state-id-container" role="textbox" aria-readonly="true" title="تهران">تهران</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
              </div>
              <div class="c-reg-form__col c-reg-form__col--6">
                <label class="c-reg-form__text" for="city-id">شهر</label>
                <select id="city-id" name="register[city_id]" class="c-ui-select c-ui-select--search select2-hidden-accessible" data-select2-id="city-id" tabindex="-1" aria-hidden="true" aria-invalid="false">
                  <option value="1699">آبعلی</option>
                  <option value="3249">ابباریک</option>
                  <option value="3268">ابراهیم اباد</option>
                  <option value="3293">احمدآبادجانسپار</option>
                  <option value="3298">احمدابادمستوفی</option>
                  <option value="1721">ارجمند</option>
                  <option value="3278">اسلام اباد</option>
                  <option value="1687">اسلامشهر</option>
                  <option value="3294">اسماعیل آباد</option>
                  <option value="3311">امیریه</option>
                  <option value="1714">اندیشه</option>
                  <option value="3248">ایجدان</option>
                  <option value="3247">باغخواص</option>
                  <option value="1715">باغستان</option>
                  <option value="1708">باقرشهر</option>
                  <option value="1696">بومهن</option>
                  <option value="3256">پارچین</option>
                  <option value="1693">پاکدشت</option>
                  <option value="1697">پردیس</option>
                  <option value="3287">پرند</option>
                  <option value="1695">پیشوا</option>
                  <option value="1698">تهران</option>
                  <option value="3303">جابان</option>
                  <option value="3260">جاجرود(خسروآباد)</option>
                  <option value="3262">جعفرابادباقراف</option>
                  <option value="3251">جلیل اباد</option>
                  <option value="1727">جواد آباد</option>
                  <option value="3269">چرمشهر</option>
                  <option value="1686">چهاردانگه</option>
                  <option value="1706">حسن آباد</option>
                  <option value="4613">حسن آباد فشافویه</option>
                  <option value="3257">حصارامیر</option>
                  <option value="3310">حصاربن</option>
                  <option value="3291">حصارک بالا</option>
                  <option value="3290">حصارک پایین</option>
                  <option value="3258">خاتون اباد</option>
                  <option value="3277">خاورشهر</option>
                  <option value="3250">خاوه</option>
                  <option value="3282">خلازیر</option>
                  <option value="3255">داوداباد</option>
                  <option value="3309">درده</option>
                  <option value="1702">دماوند</option>
                  <option value="3246">دهماسین</option>
                  <option value="1704">رباط کریم</option>
                  <option value="1700">رودهن</option>
                  <option value="3292">سبزدشت</option>
                  <option value="3304">سربندان</option>
                  <option value="3295">سعیدآباد</option>
                  <option value="3289">سلطان اباد</option>
                  <option value="4621">سه راه سنگی</option>
                  <option value="3302">شاطره</option>
                  <option value="1716">شاهدشهر</option>
                  <option value="1692">شریف آباد</option>
                  <option value="3267">شمس اباد</option>
                  <option value="1710">شمشک</option>
                  <option value="1705">شهر جدید پرند</option>
                  <option value="3288">شهر صنعتی پرند</option>
                  <option value="4620">شهر قدس</option>
                  <option value="3261">شهرصنعتی خرمدشت</option>
                  <option value="4618">شهرک صنعتی چهاردانگه</option>
                  <option value="4609">شهرک صنعتی خاوران</option>
                  <option value="4619">شهرک صنعتی گلگون</option>
                  <option value="3283">شهرک صنعتی نصیرشهر</option>
                  <option value="3254">شهرک عباس آباد</option>
                  <option value="3284">شهرک قلعه میر</option>
                  <option value="1717">شهریار</option>
                  <option value="3301">صالح آباد</option>
                  <option value="1689">صالحیه</option>
                  <option value="1718">صبا شهر</option>
                  <option value="1725">صفادشت</option>
                  <option value="3264">طورقوزاباد</option>
                  <option value="4615">عباس آباد علاقبند</option>
                  <option value="3245">عسگرابادعباسی</option>
                  <option value="1719">فردوسیه</option>
                  <option value="3271">فرودگاه امام خمینی</option>
                  <option value="1694">فرون آباد</option>
                  <option value="3276">فرون اباد</option>
                  <option value="1711">فشم</option>
                  <option value="3299">فیروزبهرام</option>
                  <option value="1722">فیروزکوه</option>
                  <option value="3265">قاسم ابادشوراباد</option>
                  <option value="1723">قدس</option>
                  <option value="1724">قرچک</option>
                  <option value="3253">قلعه خواجه</option>
                  <option value="3244">قلعه سین</option>
                  <option value="3270">قلعه محمدعلی خان</option>
                  <option value="3273">قلعه نوخالصه</option>
                  <option value="3266">قمصر</option>
                  <option value="3281">قو,چ حصار</option>
                  <option value="4616">قیام دشت</option>
                  <option value="3280">قیامدشت</option>
                  <option value="3252">کریم اباد</option>
                  <option value="3286">کلمه</option>
                  <option value="1709">کهریزک</option>
                  <option value="1703">کیلان</option>
                  <option value="4612">گردنه تنباکویی</option>
                  <option value="3259">گرمدره</option>
                  <option value="3274">گل تپه کبیر</option>
                  <option value="3300">گلدسته</option>
                  <option value="1690">گلستان</option>
                  <option value="3279">لپه زنگ</option>
                  <option value="3297">لم اباد</option>
                  <option value="3296">لواسان بزرگ</option>
                  <option value="1713">لواسان کوچک</option>
                  <option value="3275">محمودابادپیرزاده</option>
                  <option value="3307">مرا</option>
                  <option value="3263">مرقدامام ره</option>
                  <option value="3306">مشا</option>
                  <option value="1726" selected="" data-select2-id="22">ملارد</option>
                  <option value="3305">مهرآباد</option>
                  <option value="1688">نسیم شهر</option>
                  <option value="3285">نصیرآباد</option>
                  <option value="1691">نصیرشهر</option>
                  <option value="1720">وحیدیه</option>
                  <option value="1728">ورامین</option>
                  <option value="3272">وهن اباد</option>
                  <option value="3308">هرانده</option>
                </select>
                <span class="select2 select2-container select2-container--default" dir="rtl" data-select2-id="21" style="width: 260px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-city-id-container"><span class="select2-selection__rendered" id="select2-city-id-container" role="textbox" aria-readonly="true" title="ملارد">ملارد</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
              </div>
            </div>
            <div class="c-reg-form__row c-reg-form__row--gap-20 ">
              <div class="c-reg-form__col c-reg-form__col--12">
                <label class="c-reg-form__text" for="address">آدرس</label>
                <div class="c-ui-input">
                  <input type="text" name="register[address]" class="c-ui-input__field" id="address" value="ملارد صفادشت" placeholder="آدرس خود را به صورت کامل (محله - خیابان اصلی - کوچه - پلاک – واحد ) وارد نمایید" maxlength="255" required="">
                </div>
              </div>
            </div>
            <div class="c-reg-form__row c-reg-form__row--gap-20">
              <div class="c-reg-form__col c-reg-form__col--6">
                <label class="c-reg-form__text" for="postal-code">کد پستی</label>
                <div class="c-ui-input">
                  <input type="text" name="register[post_code]" class="c-ui-input__field c-ui-input__field--ltr accept-only-digits with-fa-digit" id="postal-code" value="1111111111" placeholder="۱۲۳۴۵ - ۶۷۸۹۰" minlength="10" maxlength="10" required="" data-exceptions="9">
                </div>
              </div>
              <div class="c-reg-form__col c-reg-form__col--6">
                <label class="c-reg-form__text" for="lat-and-long">موقعیت مکانی</label>
                <div class="js-address-coordinates c-reg-form__pointer">
                  <div class="c-ui-input">
                    <input type="hidden" name="register[lat_and_long]" value="35.70101924627198;51.331965930133066" class="js-coordinates-input">
                    <input type="text" name="" class="c-ui-input__field c-ui-input__field--has-icon c-reg-form__pointer js-coordinates-btn-zone" id="lat-and-long" value="ثبت شد" placeholder="موقعیت را ثبت کنید" autocomplete="off">
                    <div class="c-ui-input__icon c-ui-input__icon--map-placeholder js-coordinates-icon is-active"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-reg-form__row c-reg-form__row--gap-20">
              <div class="c-reg-form__col c-reg-form__col--6">
                <div class="c-reg-form__row">
                  <div class="c-reg-form__col c-reg-form__col--12">
                    <label class="c-reg-form__text" for="landing-phone">تلفن ثابت</label>
                  </div>
                  <div class="c-reg-form__col c-reg-form__col--6 c-reg-form__col--xs-8 c-reg-form__col--no-gap">
                    <div class="c-ui-input">
                      <input type="text" name="register[phone]" class="c-ui-input__field c-ui-input__field--ltr accept-only-digits with-fa-digit" id="landing-phone" value="65434640" placeholder="۶۱۹۳ ۰۰۰۰" minlength="8" maxlength="8" required="" data-exceptions="9">
                    </div>
                  </div>
                  <div class="c-reg-form__col c-reg-form__col--3 c-reg-form__col--xs-4 c-reg-form__col--no-gap">
                    <div class="c-ui-input">
                      <input type="text" name="register[city_code]" class="c-ui-input__field c-ui-input__field--ltr accept-only-digits with-fa-digit" value="" placeholder="۰۲۱" readonly="" tabindex="-1" style="text-align: center;" data-exceptions="9">
                    </div>
                  </div>
                </div>
              </div>
              <div class="c-reg-form__col c-reg-form__col--6">
                <label class="c-reg-form__text" for="mobile-phone">تلفن همراه</label>
                <div class="c-ui-input">
                  <input type="text" name="register[mobile_phone]" class="c-ui-input__field c-ui-input__field--ltr accept-only-digits with-fa-digit" id="mobile-phone" value="09393088135" placeholder="۰۹" minlength="11" maxlength="11" required="" data-exceptions="9">
                </div>
              </div>
            </div>
            <div class="c-reg-form__row c-reg-form__row--gap-50">
              <div class="c-reg-form__col c-reg-form__col--12">
                <h2 class="c-reg-form__header">اطلاعات تجاری</h2>
              </div>
            </div>
            <div class="c-reg-form__row c-reg-form__row--gap-20 ">
              <div class="c-reg-form__col c-reg-form__col--12">
                <label class="c-reg-form__text" for="business_name">نام فروشگاه</label>
                <div class="c-ui-input">
                  <input type="text" name="register[business_name]" class="c-ui-input__field" id="business_name" value="لبقیسمال" placeholder="نام فروشگاه شما در سایت {{ $fa_store_name }}" maxlength="255" required="">
                </div>
              </div>
            </div>
            <div class="c-reg-form__row c-reg-form__row--gap-20 ">
              <div class="c-reg-form__col c-reg-form__col--12">
                <label class="c-reg-form__text" for="shaba-number">شماره شبا (به نام شخص یا شرکت ثبت نام کننده)</label>
                <div class="c-ui-input">
                  <input type="text" name="register[shaba_number]" class="c-ui-input__field c-ui-input__field--ltr accept-only-digits js-sheba-field" id="shaba-number" value="IR 69-0120-0100-0000-5688-5060-77" placeholder="IR __-____-____-____-____-____-__" maxlength="33" required="" data-exceptions="73, 82" data-ui-tooltip="با کلیک راست بر روی کادر و انتخاب گزینه Paste می‌توانید شماره شبا خود را اضافه نمایید.">
                </div>
              </div>
            </div>
            <div class="c-reg-form__row c-reg-form__row--gap-20 ">
              <div class="c-reg-form__col c-reg-form__col--12">
                <label class="c-reg-form__text" for="description_of_products">قصد فروش چه کالاهایی را دارید؟</label>
                <select name="register[main_supply_category_id]" class="c-ui-select js-supply-category c-ui-select--search select2-hidden-accessible" placeholder="مثال: گروه گوشی موبایل - لوازم ورزشی و …" required="" data-select2-id="16" tabindex="-1" aria-hidden="true">
                  <option></option>
                  <option value="8">کتاب، لوازم تحریر و هنر</option>
                  <option value="5966" selected="selected" data-select2-id="18">کالای دیجیتال</option>
                  <option value="5967">خانه و آشپزخانه</option>
                  <option value="5968">زیبایی و سلامت</option>
                  <option value="6124">ورزش و سفر</option>
                  <option value="6741">اسباب بازی، کودک و نوزاد</option>
                  <option value="8450">خودرو، ابزار و تجهیزات صنعتی</option>
                  <option value="8749">مد و پوشاک</option>
                  <option value="8895">خوردنی و آشامیدنی</option>
                </select>
                <span class="select2 select2-container select2-container--default" dir="rtl" data-select2-id="17" style="width: 535px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-registermain_supply_category_id-qg-container"><span class="select2-selection__rendered" id="select2-registermain_supply_category_id-qg-container" role="textbox" aria-readonly="true" title="کالای دیجیتال">کالای دیجیتال</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                <div id="fmcg-type-notification" class="c-reg-form__error uk-hidden">
                  توجه! فروشنده گرامی، برای مشاهده مواد خوراکی مجاز و مدارک مورد نیاز برای فروش در سایت، لطفا به مقاله
                  <a href="https://selleracademy.digikala.com/%d8%b4%d8%b1%d8%a7%db%8c%d8%b7-%d9%81%d8%b1%d9%88%d8%b4-%d9%85%d9%88%d8%a7%d8%af-%d8%ae%d9%88%d8%b1%d8%a7%da%a9%db%8c-%d8%af%d8%b1-%d8%af%db%8c%d8%ac%db%8c-%da%a9%d8%a7%d9%84%d8%a7/" target="_blank">
                  "شرایط فروش مواد خوراکی در {{ $fa_store_name }}"
                  </a>
                  مراجعه کنید
                  در نظر داشته باشید تنها فروش چای دمنوش و قهوه در این گروه نیاز به ارائه مدرک ندارد و سایر مواد خوراکی نیاز به ارائه مدارک جهت فروش دارند.
                </div>
              </div>
            </div>
            <div class="c-reg-form__row c-reg-form__row--gap-20 ">
              <div class="c-reg-form__col c-reg-form__col--6">
                <label class="c-reg-form__text" for="number-of-products">تعداد حدودی تنوع کالای آماده فروش</label>
                <select name="register[number_of_products]" class="c-ui-select select2-hidden-accessible" id="number-of-products" placeholder="تعداد را انتخاب کنید" required="" data-select2-id="number-of-products" tabindex="-1" aria-hidden="true">
                  <option value="10" selected="selected" data-select2-id="20">1-10</option>
                  <option value="50">11-50</option>
                  <option value="100">51-100</option>
                  <option value="300">101-300</option>
                  <option value="1000">301-1000</option>
                  <option value="3000">1001-3000</option>
                  <option value="10000">3001-10000</option>
                  <option value="30000">10001-30000</option>
                </select>
                <span class="select2 select2-container select2-container--default" dir="rtl" data-select2-id="19" style="width: 260px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-number-of-products-container"><span class="select2-selection__rendered" id="select2-number-of-products-container" role="textbox" aria-readonly="true" title="1-10">1-10</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
              </div>
            </div>
            <div class="c-reg-form__row c-reg-form__row--gap-50">
              <div class="c-reg-form__col">
                <button class="c-reg-form__submit-btn c-reg-form__submit-btn--xs-block" id="btnSubmit">ادامه</button>
              </div>
            </div>
          </form>
        </div>
        <ul class="c-new-login__content-footer">
          <li class="c-new-login__content-footer-item">
            <a target="_blank" href="https://seller.digikala.com/fbs-courier/">ثبت رسید سفارش</a>
          </li>
          <li class="c-new-login__content-footer-item">
            <a target="_blank" href="http://www.digikala.com/">فروشگاه اینترنتی {{ $fa_store_name }}</a>
          </li>
          <li class="c-new-login__content-footer-item">
            <a target="_blank" href="https://selleracademy.digikala.com/">مرکز آموزش فروشندگان</a>
          </li>
          <li class="c-new-login__content-footer-item">
            <a target="_blank" href="https://selleracademy.digikala.com/%D8%B3%D9%88%D8%A7%D9%84%D8%A7%D8%AA-%D9%85%D8%AA%D8%AF%D8%A7%D9%88%D9%84/">سوالات متداول</a>
          </li>
          <li class="c-new-login__content-footer-item">
            <a target="_blank" href="https://www.digikala.com/s/9stgvs">مراحل ثبت نام</a>
          </li>
        </ul>
      </main>
    </div>
    <div id="coordinates-popup" uk-modal="esc-close: true; bg-close: true;" class="uk-modal-container uk-modal-container--message c-modal-map__container uk-modal">
      <div class="uk-modal-dialog uk-modal-dialog--flex">
        <div class="c-modal-close--wrapper">
          <button class="uk-modal-close-default c-modal-map__close uk-close uk-icon" type="button" uk-close="">
            <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg" ratio="1">
              <line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"></line>
              <line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"></line>
            </svg>
          </button>
        </div>
        <div class="uk-modal-body uk-modal-body--flex">
          <div class="c-modal-map__map" id="coordinates-popup-map"></div>
          <div class="c-modal-map__form" id="coordinates-search-form">
            <div class="c-ui-form__row c-ui-form__row--group c-ui-form__row--nowrap  c-ui-form__row--wrap-xs">
              <div class="c-ui-form__col c-ui-form__col--group-item c-ui-form__col--12 c-ui-form__col--small-gap c-ui-form__col--shrink">
                <div class="c-ui-input">
                  <input type="text" name="" class="c-ui-input__field" id="google-map-search" value="" placeholder="جستجو کنید …">
                  <div class="c-modal-map__error">نتیجه ای یافت نشد، لطفا عبارت جستجو شده را تغییر داده و دوباره تلاش کنید.</div>
                </div>
              </div>
              <div class="c-ui-form__col c-ui-form__col--group-item c-ui-form__col--wrap-xs">
                <button class="c-ui-btn c-ui-btn--active c-ui-btn--w-85 c-ui-btn--h-50 js-coordinates-confirm" disabled="">ثبت</button>
              </div>
            </div>
          </div>
          <div class="c-modal-map__place-details js-place-details">
          </div>
        </div>
        <div class="c-card__loading"></div>
      </div>
    </div>
    <script src="./1_files/js(1)" async="" defer=""></script>
    <div id="sheba-notification" uk-modal="esc-close: true; bg-close: true;" class="uk-modal-container uk-modal-container--message uk-modal uk-open" style="display: block;">
      <div class="uk-modal-dialog uk-modal-dialog--flex">
        <button class="uk-modal-close-default uk-close uk-icon" type="button" uk-close="">
          <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg" ratio="1">
            <line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"></line>
            <line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"></line>
          </svg>
        </button>
        <div class="uk-modal-body uk-modal-body--flex c-reg-form__notification" data-gtm-vis-recent-on-screen-9662696_13="2038" data-gtm-vis-first-on-screen-9662696_13="2038" data-gtm-vis-total-visible-time-9662696_13="100" data-gtm-vis-has-fired-9662696_13="1">
          <div class="c-reg-form__icon">
            <img src="./1_files/8df5b905.svg" alt="">
          </div>
          <h3 class="c-reg-form__title">تأیید اطلاعات حساب</h3>
          <div class="c-reg-form__fieldset js-sheba-response">
            <div class="c-reg-form__info">
              <div class="c-reg-form__info-row">
                <div class="c-reg-form__info-label">شماره شبای شما:</div>
                <div class="c-reg-form__info-desc" id="sheba-response-api">IR690120010000005688506077</div>
              </div>
              <div class="c-reg-form__info-row">
                <div class="c-reg-form__info-label">نام صاحب حساب:</div>
                <div class="c-reg-form__info-desc" id="sheba-owner-response-api">اسماعیل جعفری ماجلان</div>
              </div>
              <div class="c-reg-form__info-row">
                <div class="c-reg-form__info-label">بانک عامل:</div>
                <div class="c-reg-form__info-desc" id="sheba-bank-response-api">ملت</div>
              </div>
            </div>
          </div>
          <div class="c-reg-form__footer">
            <div class="c-reg-form__footer-info">آیا صحت اطلاعات فوق را تأیید می کنید؟</div>
            <div class="c-reg-form__footer-controls">
              <button class="c-ui-btn c-ui-btn--active js-submit-form">بله، تأیید می‌کنم</button>
              <button class="c-ui-btn js-cancel-sheba">خیر، اصلاح می‌کنم</button>
            </div>
          </div>
          <div class="c-card__loading"></div>
        </div>
      </div>
    </div>
    <div id="new-electronic-contract" uk-modal="esc-close: false; bg-close: false;" class="uk-modal-container uk-modal-container--message uk-modal">
      <div class="uk-modal-dialog uk-modal-dialog--flex">
        <form class="uk-modal-body uk-modal-body--flex" method="POST" action="https://seller.digikala.com/registration/verify/contract/">
          <input type="hidden" name="action" id="econtract-action">
          <div class="c-econtract">
            <p class="c-econtract__desc"><strong class="c-econtract__header">فروشنده عزیز،</strong> در راستای اجرای بهینه قرارداد فی مابین و تسهیل ارائه خدمات بهتر به مشتریان، قرارداد همکاری با {{ $fa_store_name }} به صورت الکترونیک در اختیار شما قرار گرفته و در صورت مطالعه و تایید شما، از لحاظ قانونی الزام آور می باشد.</p>
            <p class="c-econtract__desc">{{ $fa_store_name }} حق تغییر مفاد قرارداد را در هر زمانی داشته و این تغییرات و همچنین اطلاعیه ها و ابلاغیه ها توسط {{ $fa_store_name }} در پنل فروشندگان اعلام می شود که به منزله ی ابلاغ به فروشنده می باشد. فروشندگان متعهد هستند تمامی اطلاعیه ها را با دقت مطالعه نموده و طبق آن عمل نمایند. تغییرات به طور خودکار روی پنل اختصاصی فروشنده قرار گرفته و به منزله ی اصلاحیه و الحاقیه قرارداد محسوب شده و فروشنده متعهد به رعایت مقررات به روز شده می باشد و نیاز به هیچگونه تشریفات دیگری جهت امضا و ابلاغ نمی باشد.</p>
            <p class="c-econtract__desc">لطفا توجه فرمایید که عدم پذیرش قرارداد همکاری به منزله عدم تمایل شما به همکاری با {{ $fa_store_name }} تلقی شده و تا زمان پذیرش قرارداد امکان استفاده از پنل فروشندگان برای شما میسر نمی باشد.</p>
            <div class="c-econtract__contract-wrapper">
              <div class="c-econtract__contract" id="econtract-content"></div>
            </div>
            <div class="c-grid__row c-grid__row--align-center">
              <div class="c-grid__col c-grid__col--auto c-grid__col--pull-right">
                <div class="">
                  <div class="c-ui-tooltip__anchor" data-ui-tooltip="لطفا برای پذیرش قرارداد، آن را تا انتها مشاهده و مطالعه فرمایید.">
                    <div class="c-ui-radio__group">
                      <label class="c-ui-radio">
                      <input class="c-ui-radio__origin " type="radio" name="register[econtract]" value="1" disabled="">
                      <span class="c-ui-radio__check"></span>
                      <span class="c-ui-radio__label">قرارداد همکاری را مطالعه کردم و موافقم</span>
                      </label>
                    </div>
                  </div>
                  <div class="c-ui-radio__group">
                    <label class="c-ui-radio">
                    <input class="c-ui-radio__origin " type="radio" name="register[econtract]" value="0">
                    <span class="c-ui-radio__check"></span>
                    <span class="c-ui-radio__label">با شرایط قرارداد موافق نیستم و مایل به خاتمه ثبت نام هستم</span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="c-grid__col c-grid__col--content c-grid__col--xs-block c-grid__col--xs-gap">
                <button class="c-ui-btn c-ui-btn--confirm uk-hidden js-reject-contract">عدم تأیید</button>
                <button class="c-ui-btn c-ui-btn--active c-ui-btn--confirm js-approve-contract" disabled="">تأیید</button>
              </div>
            </div>
          </div>
        </form>
        <div class="c-card__loading"></div>
      </div>
    </div>
    <div uk-modal="esc-close: true; bg-close: false;" class="uk-modal-container uk-modal-container--message js-common-modal-notification uk-modal">
      <div class="uk-modal-dialog uk-modal-dialog--flex">
        <button class="uk-modal-close-default uk-close uk-icon" type="button" uk-close="">
          <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg" ratio="1">
            <line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"></line>
            <line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"></line>
          </svg>
        </button>
        <div class="uk-modal-body">
          <div class="c-modal-notification">
            <div class="c-modal-notification__content c-modal-notification__content--limited">
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
