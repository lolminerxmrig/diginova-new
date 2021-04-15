<!DOCTYPE html>
<html class="" style="" dir="rtl" >
  <head>
    <title>{{ $fa_store_name }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('seller/icon/caf67ad9.ico') }}" type="image/icon">
    <link rel="stylesheet" href="{{ asset('seller/css/select2.css') }}">
    <script src="{{ asset('seller/js/jquery.min.js') }}"></script>
    <script src="{{ asset('seller/js/inputmask.js') }}"></script>
  </head>
  <body class=" c-modal-map__body">
    <div class="c-new-login">
      <aside class="c-new-login__sidebar c-new-login__sidebar--xs">
        <div class="c-new-login__sidebar-content">
          <header class="c-new-login__sidebar-header">
            <a href="/registration/" class="c-new-login__logo">
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
            <a href="/registration/" class="c-new-login__logo">
            <img src="{{ asset('seller/svg/9eb66c4d.svg') }}" alt="Digikala marketplace seller center logo">
            </a>
            <h1 class="c-new-login__header">ثبت‌نام در مرکز فروشندگان</h1>
          </header>
        </div>
      </aside>
      <main class="c-new-login__main">
        <div class="c-reg-form c-reg-form--full">
          <form method="post" id="details-form" data-name="register">
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
                <input type="hidden" name="seconds" id="seconds" value="0" />
              </div>
            </div>
            <div class="c-reg-form__row c-reg-form__row--gap-20">
              <div class="c-reg-form__col">
                <div class="c-ui-radio__group">
                  <label class="c-ui-radio">
                  <input class='c-ui-radio__origin ' type='radio' name='register[private_business]' value='private' checked data-role="tab" data-target="real-account">
                  <span class="c-ui-radio__check"></span>
                  <span class="c-ui-radio__label">شخص حقیقی</span>
                  </label>
                  <label class="c-ui-radio">
                  <input class='c-ui-radio__origin ' type='radio' name='register[private_business]' value='business' data-role="tab" data-target="business-account">
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
            <div class="c-reg-form__tab" data-role="tab-content" id="real-account">
              <div class="c-reg-form__row">
                <div class="c-reg-form__col c-reg-form__col--12">
                  <h2 class="c-reg-form__header">اطلاعات شخصی</h2>
                </div>
              </div>
              <div class="c-reg-form__row c-reg-form__row--gap-20 ">
                <div class="c-reg-form__col c-reg-form__col--6">
                  <label class="c-reg-form__text" for="first-name">نام</label>
                  <div class="c-ui-input">
                    <input type='text' name='register[first_name]' class='c-ui-input__field' id='first-name' value='' placeholder='' maxlength='255' required>
                  </div>
                </div>
                <div class="c-reg-form__col c-reg-form__col--6">
                  <label class="c-reg-form__text" for="surname">نام خانوادگی</label>
                  <div class="c-ui-input">
                    <input type='text' name='register[last_name]' class='c-ui-input__field' id='surname' value='' placeholder='' maxlength='255' required>
                  </div>
                </div>
              </div>
              <div class="c-reg-form__row c-reg-form__row--limited c-reg-form__row--gap-20">
                <div class="c-reg-form__col c-reg-form__col--12">
                  <label class="c-reg-form__text">تاریخ تولد ( مثال:‌ ۶۵/۱۲/۰۶ )</label>
                </div>
                <div class="c-reg-form__col c-reg-form__col--4 c-reg-form__col--no-gap">
                  <select name="register[birth_day]" class="c-ui-select" placeholder="روز" data-validation="date" required>
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
                    <option value="28">۲۸</option>
                    <option value="29">۲۹</option>
                    <option value="30">۳۰</option>
                    <option value="31">۳۱</option>
                  </select>
                </div>
                <div class="c-reg-form__col c-reg-form__col--4">
                  <select name="register[birth_month]" class="c-ui-select js-birth-month-select" placeholder="ماه" data-validation="date" required>
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
                  </select>
                </div>
                <div class="c-reg-form__col c-reg-form__col--4">
                  <select name="register[birth_year]" class="c-ui-select js-birth-year-select" placeholder="سال" data-validation="date" required>
                    <option></option>
                    <option value="1382">۱۳۸۲</option>
                    <option value="1381">۱۳۸۱</option>
                    <option value="1380">۱۳۸۰</option>
                    <option value="1379">۱۳۷۹</option>
                    <option value="1378">۱۳۷۸</option>
                    <option value="1377">۱۳۷۷</option>
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
                </div>
              </div>
              <div class="c-reg-form__row c-reg-form__row--limited c-reg-form__row--gap-20">
                <div class="c-reg-form__col c-reg-form__col--12">
                  <label class="c-reg-form__text">جنسیت</label>
                </div>
                <div class="c-reg-form__col c-reg-form__col--no-gap">
                  <div class="c-ui-radio__group">
                    <label class="c-ui-radio">
                    <input class='c-ui-radio__origin ' type='radio' name='register[gender]' value='male' checked>
                    <span class="c-ui-radio__check"></span>
                    <span class="c-ui-radio__label">مرد</span>
                    </label>
                    <label class="c-ui-radio">
                    <input class='c-ui-radio__origin ' type='radio' name='register[gender]' value='female'>
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
                    <input type='text' name='register[identity_card_number]' class='c-ui-input__field c-ui-input__field--ltr accept-only-digits with-fa-digit' id='card_number' value='' placeholder='۱۲۳۴۵' required data-exceptions="9">
                  </div>
                </div>
                <div class="c-reg-form__col c-reg-form__col--6">
                  <label class="c-reg-form__text" for="identity_number">کد ملی</label>
                  <div class="c-ui-input">
                    <input type='text' name='register[national_identity_number]' class='c-ui-input__field c-ui-input__field--ltr accept-only-digits' id='identity_number' value='' placeholder='۱۲۳۴۵۶۷۸۹۰' minlength='1' maxlength='20' required data-exceptions="9">
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
                    <input type='text' name='register[company_name]' class='c-ui-input__field' id='company_name' value='' placeholder='نام شرکت را وارد کنید ...' maxlength='255' required>
                  </div>
                </div>
              </div>
              <div class="c-reg-form__row c-reg-form__row--gap-20">
                <div class="c-reg-form__col c-reg-form__col--6">
                  <label class="c-reg-form__text" for="company_type">نوع شرکت</label>
                  <select id="company_type" name="register[company_type]" class="c-ui-select" placeholder="نوع شرکت خود را انتخاب کنید" required>
                    <option value="public">سهامی عام</option>
                    <option value="joint_stock">سهامی خاص</option>
                    <option value="ltd">مسولیت محدود</option>
                    <option value="coop">تعاونی</option>
                    <option value="solidarity">تضامنی</option>
                  </select>
                </div>
                <div class="c-reg-form__col c-reg-form__col--6">
                  <label class="c-reg-form__text" for="company_registration_number">شماره ثبت</label>
                  <div class="c-ui-input">
                    <input type='text' name='register[company_registration_number]' class='c-ui-input__field c-ui-input__field--ltr accept-only-digits' id='company_registration_number' value='' placeholder='۱۲۳۴۵' maxlength='255' required data-exceptions="9">
                  </div>
                </div>
              </div>
              <div class="c-reg-form__row c-reg-form__row--gap-20">
                <div class="c-reg-form__col c-reg-form__col--6">
                  <label class="c-reg-form__text" for="company_national_identity_number">شناسه ملی</label>
                  <div class="c-ui-input">
                    <input type='text' name='register[company_national_identity_number]' class='c-ui-input__field c-ui-input__field--ltr accept-only-digits' id='company_national_identity_number' value='' placeholder='۱۲۳۴۵۶۷۸۹۰' maxlength='255' required data-exceptions="9">
                  </div>
                </div>
                <div class="c-reg-form__col c-reg-form__col--6">
                  <label class="c-reg-form__text" for="company_economic_number">کد اقتصادی</label>
                  <div class="c-ui-input">
                    <input type='text' name='register[company_economic_number]' class='c-ui-input__field c-ui-input__field--ltr accept-only-digits' id='company_economic_number' value='' placeholder='۱۲۳۴۵۶۷۸۹۰' minlength='12' maxlength='12' required data-exceptions="9">
                  </div>
                </div>
              </div>
              <div class="c-reg-form__row c-reg-form__row--gap-20 ">
                <div class="c-reg-form__col c-reg-form__col--12">
                  <label class="c-reg-form__text" for="company_authorized_representative">صاحبان حق امضا</label>
                  <div class="c-ui-input">
                    <input type='text' name='register[company_authorized_representative]' class='c-ui-input__field' id='company_authorized_representative' value='' maxlength='255' required>
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
                <select id="state-id" name="register[state_id]" class="c-ui-select c-ui-select--search">
                  <option value=""></option>
                  <option value="2" data-code="041">آذربایجان شرقی</option>
                  <option value="3" data-code="044">آذربایجان غربی</option>
                  <option value="4" data-code="045">اردبیل</option>
                  <option value="5" data-code="031">اصفهان</option>
                  <option value="6" data-code="026">البرز</option>
                  <option value="7" data-code="084">ایلام</option>
                  <option value="8" data-code="077">بوشهر</option>
                  <option value="9" data-code="021">تهران</option>
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
              </div>
              <div class="c-reg-form__col c-reg-form__col--6">
                <label class="c-reg-form__text" for="city-id">شهر</label>
                <select id="city-id" name="register[city_id]" class="c-ui-select c-ui-select--search">
                  <option value=""></option>
                </select>
              </div>
            </div>
            <div class="c-reg-form__row c-reg-form__row--gap-20 ">
              <div class="c-reg-form__col c-reg-form__col--12">
                <label class="c-reg-form__text" for="address">آدرس</label>
                <div class="c-ui-input">
                  <input type='text' name='register[address]' class='c-ui-input__field' id='address' value='' placeholder='آدرس خود را به صورت کامل (محله - خیابان اصلی - کوچه - پلاک – واحد ) وارد نمایید' maxlength='255' required>
                </div>
              </div>
            </div>
            <div class="c-reg-form__row c-reg-form__row--gap-20">
              <div class="c-reg-form__col c-reg-form__col--6">
                <label class="c-reg-form__text" for="postal-code">کد پستی</label>
                <div class="c-ui-input">
                  <input type='text' name='register[post_code]' class='c-ui-input__field c-ui-input__field--ltr accept-only-digits with-fa-digit' id='postal-code' value='' placeholder='۱۲۳۴۵ - ۶۷۸۹۰' minlength='10' maxlength='10' required data-exceptions="9">
                </div>
              </div>
              <div class="c-reg-form__col c-reg-form__col--6">
                <label class="c-reg-form__text" for="lat-and-long">موقعیت مکانی</label>
                <div class="js-address-coordinates c-reg-form__pointer">
                  <div class="c-ui-input">
                    <input type='hidden' name='register[lat_and_long]' value='' class='js-coordinates-input'>
                    <input type='text' name='' class='c-ui-input__field c-ui-input__field--has-icon c-reg-form__pointer js-coordinates-btn-zone' id='lat-and-long' value='' placeholder='موقعیت را ثبت کنید' autocomplete='off'>
                    <div class="c-ui-input__icon c-ui-input__icon--map-placeholder js-coordinates-icon"></div>
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
                      <input type='text' name='register[phone]' class='c-ui-input__field c-ui-input__field--ltr accept-only-digits with-fa-digit' id='landing-phone' value='' placeholder='۶۱۹۳ ۰۰۰۰' minlength='8' maxlength='8' required data-exceptions="9">
                    </div>
                  </div>
                  <div class="c-reg-form__col c-reg-form__col--3 c-reg-form__col--xs-4 c-reg-form__col--no-gap">
                    <div class="c-ui-input">
                      <input type='text' name='register[city_code]' class='c-ui-input__field c-ui-input__field--ltr accept-only-digits with-fa-digit' value='' placeholder='۰۲۱' readonly tabindex="-1" style='text-align: center;' data-exceptions="9">
                    </div>
                  </div>
                </div>
              </div>
              <div class="c-reg-form__col c-reg-form__col--6">
                <label class="c-reg-form__text" for="mobile-phone">تلفن همراه</label>
                <div class="c-ui-input">
                  <input type='text' name='register[mobile_phone]' class='c-ui-input__field c-ui-input__field--ltr accept-only-digits with-fa-digit' id='mobile-phone' value='' placeholder='۰۹' minlength='11' maxlength='11' required data-exceptions="9">
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
                  <input type='text' name='register[business_name]' class='c-ui-input__field' id='business_name' value='' placeholder='نام فروشگاه شما در سایت {{ $fa_store_name }}' maxlength='255' required>
                </div>
              </div>
            </div>
            <div class="c-reg-form__row c-reg-form__row--gap-20 ">
              <div class="c-reg-form__col c-reg-form__col--12">
                <label class="c-reg-form__text" for="shaba-number">شماره شبا (به نام شخص یا شرکت ثبت نام کننده)</label>
                <div class="c-ui-input">
                  <input type='text' name='register[shaba_number]' class='c-ui-input__field c-ui-input__field--ltr accept-only-digits js-sheba-field' id='shaba-number' value='' placeholder='IR __-____-____-____-____-____-__' maxlength='33' required data-exceptions="73, 82" data-ui-tooltip="با کلیک راست بر روی کادر و انتخاب گزینه Paste می توانید شماره شبا خود را اضافه نمایید.">
                </div>
              </div>
            </div>
            <div class="c-reg-form__row c-reg-form__row--gap-20 ">
              <div class="c-reg-form__col c-reg-form__col--12">
                <label class="c-reg-form__text" for="description_of_products">قصد فروش چه کالاهایی را دارید؟</label>
                <select name="register[main_supply_category_id]" class="c-ui-select js-supply-category c-ui-select--search" placeholder="مثال: گروه گوشی موبایل - لوازم ورزشی و …" required>
                  <option></option>
                  <option value="8">کتاب، لوازم تحریر و هنر</option>
                  <option value="5966">کالای دیجیتال</option>
                  <option value="5967">خانه و آشپزخانه</option>
                  <option value="5968">زیبایی و سلامت</option>
                  <option value="6124">ورزش و سفر</option>
                  <option value="6741">اسباب بازی، کودک و نوزاد</option>
                  <option value="8450">خودرو، ابزار و تجهیزات صنعتی</option>
                  <option value="8749">مد و پوشاک</option>
                  <option value="8895">خوردنی و آشامیدنی</option>
                </select>
                <div id="fmcg-type-notification" class="c-reg-form__error">
                  توجه! فروشنده گرامی، برای مشاهده مواد خوراکی مجاز و مدارک مورد نیاز برای فروش در سایت، لطفا به مقاله
                  <a href="https://selleracademy.digikala.com/%d8%b4%d8%b1%d8%a7%db%8c%d8%b7-%d9%81%d8%b1%d9%88%d8%b4-%d9%85%d9%88%d8%a7%d8%af-%d8%ae%d9%88%d8%b1%d8%a7%da%a9%db%8c-%d8%af%d8%b1-%d8%af%db%8c%d8%ac%db%8c-%da%a9%d8%a7%d9%84%d8%a7/"
                    target="_blank"
                    >
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
                <select name="register[number_of_products]" class="c-ui-select" id="number-of-products" placeholder="تعداد را انتخاب کنید" required>
                  <option value="10">1-10</option>
                  <option value="50">11-50</option>
                  <option value="100">51-100</option>
                  <option value="300">101-300</option>
                  <option value="1000">301-1000</option>
                  <option value="3000">1001-3000</option>
                  <option value="10000">3001-10000</option>
                  <option value="30000">10001-30000</option>
                </select>
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
            <a target="_blank" href="/fbs-courier/">ثبت رسید سفارش</a>
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
    <div id="coordinates-popup" uk-modal="esc-close: true; bg-close: true;" class="uk-modal-container uk-modal-container--message c-modal-map__container">
      <div class="uk-modal-dialog uk-modal-dialog--flex">
        <div class="c-modal-close--wrapper">
          <button class="uk-modal-close-default c-modal-map__close" type="button" uk-close></button>
        </div>
        <div class="uk-modal-body uk-modal-body--flex">
          <div class="c-modal-map__map" id="coordinates-popup-map"></div>
          <div class="c-modal-map__form" id="coordinates-search-form">
            <div class="c-ui-form__row c-ui-form__row--group c-ui-form__row--nowrap  c-ui-form__row--wrap-xs">
              <div class="c-ui-form__col c-ui-form__col--group-item c-ui-form__col--12 c-ui-form__col--small-gap c-ui-form__col--shrink">
                <div class="c-ui-input">
                  <input type='text' name='' class='c-ui-input__field' id='google-map-search' value='' placeholder='جستجو کنید …'>
                  <div class="c-modal-map__error">نتیجه ای یافت نشد، لطفا عبارت جستجو شده را تغییر داده و دوباره تلاش کنید.</div>
                </div>
              </div>
              <div class="c-ui-form__col c-ui-form__col--group-item c-ui-form__col--wrap-xs">
                <button class="c-ui-btn c-ui-btn--active c-ui-btn--w-85 c-ui-btn--h-50 js-coordinates-confirm" disabled>ثبت</button>
              </div>
            </div>
          </div>
          <div class="c-modal-map__place-details js-place-details">
          </div>
        </div>
        <div class="c-card__loading"></div>
      </div>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDraxg0CUwYF_hNCqAxcVpVkfuQVgEuXAk&language=fa&libraries=places" async defer ></script>
    <div id="sheba-notification" uk-modal="esc-close: true; bg-close: true;" class="uk-modal-container uk-modal-container--message">
      <div class="uk-modal-dialog uk-modal-dialog--flex">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-body uk-modal-body--flex c-reg-form__notification">
          <div class="c-reg-form__icon">
            <img src="{{ asset('seller/svg/8df5b905.svg') }}" alt="">
          </div>
          <h3 class="c-reg-form__title">تأیید اطلاعات حساب</h3>
          <div class="c-reg-form__fieldset js-sheba-response">
            <div class="c-reg-form__info">
              <div class="c-reg-form__info-row">
                <div class="c-reg-form__info-label">شماره شبای شما:</div>
                <div class="c-reg-form__info-desc" id="sheba-response-api"></div>
              </div>
              <div class="c-reg-form__info-row">
                <div class="c-reg-form__info-label">نام صاحب حساب:</div>
                <div class="c-reg-form__info-desc" id="sheba-owner-response-api"></div>
              </div>
              <div class="c-reg-form__info-row">
                <div class="c-reg-form__info-label">بانک عامل:</div>
                <div class="c-reg-form__info-desc" id="sheba-bank-response-api"></div>
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
    <div id="new-electronic-contract" uk-modal="esc-close: false; bg-close: false;" class="uk-modal-container uk-modal-container--message">
      <div class="uk-modal-dialog uk-modal-dialog--flex">
        <form class="uk-modal-body uk-modal-body--flex" method="POST" action="/registration/verify/contract/">
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
                      <input class='c-ui-radio__origin ' type='radio' name='register[econtract]' value='1' disabled>
                      <span class="c-ui-radio__check"></span>
                      <span class="c-ui-radio__label">قرارداد همکاری را مطالعه کردم و موافقم</span>
                      </label>
                    </div>
                  </div>
                  <div class="c-ui-radio__group">
                    <label class="c-ui-radio">
                    <input class='c-ui-radio__origin ' type='radio' name='register[econtract]' value='0'>
                    <span class="c-ui-radio__check"></span>
                    <span class="c-ui-radio__label">با شرایط قرارداد موافق نیستم و مایل به خاتمه ثبت نام هستم</span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="c-grid__col c-grid__col--content c-grid__col--xs-block c-grid__col--xs-gap">
                <button class="c-ui-btn c-ui-btn--confirm uk-hidden js-reject-contract">عدم تأیید</button>
                <button class="c-ui-btn c-ui-btn--active c-ui-btn--confirm js-approve-contract" disabled>تأیید</button>
              </div>
            </div>
          </div>
        </form>
        <div class="c-card__loading"></div>
      </div>
    </div>
    <div uk-modal="esc-close: true; bg-close: false;" class="uk-modal-container uk-modal-container--message  js-common-modal-notification">
      <div class="uk-modal-dialog uk-modal-dialog--flex">
        <button class="uk-modal-close-default" type="button" uk-close></button>
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
