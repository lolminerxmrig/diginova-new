<!Doctype html>
<html  dir="rtl">
<head>
    <title>{{ $fa_store_name }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('seller/icon/caf67ad9.ico') }}" type="image/icon">
    <link rel="stylesheet" href="{{ asset('seller/css/select2.css') }}">
    <script id="jquery" src="{{ asset('seller/js/jquery.min.js') }}"></script>
    <script src="{{ asset('seller/js/jquery.toast.js') }}"></script>
    <link href="{{ asset('seller/css/jquery.toast.min.css') }}" rel="stylesheet" type="text/css">

    <script src="{{ asset('seller/js/inputmask.js') }}"></script>

  @yield('head')
</head>
  <body>
    <header class="c-header js-header">
      <div class="uk-container uk-container-large">
        <div class="c-header__top">
          <h1 class="c-header__logo"><a class="with-new-logo" href="/"></a></h1>
          <h2 class="c-header__tag">پنل مدیریت</h2>
        </div>
      </div>
    </header>
    <div class="c-header__nav js-header-nav">
      <div class="uk-container uk-container-large uk-container--responsive">
        <button class="uk-navbar__control uk-navbar__control--collapse js-navbar-control" type="button"
          aria-label="show menu">
        <span class="uk-navbar__control-box">
        <span class="uk-navbar__control-inner"></span>
        </span>
        </button>
        <nav class="uk-navbar-container uk-navbar-transparent uk-navbar--responsive uk-navbar" uk-navbar="">
          <div class="uk-navbar-right" id="dashboard-step-1">
            <ul class="uk-navbar-nav uk-navbar-nav--responsive">
              <li class="first-level">
                <a href="#" class="" aria-expanded="false">تولید محتوا
                <span class="chevron-down"></span>
                </a>
                <div class="uk-navbar-dropdown uk-navbar-dropdown-bottom-right uk-animation-fade uk-animation-enter">
                  <ul class="uk-nav uk-navbar-dropdown-nav">
                      <li>
                          <a>برند ها</a>
                          <div class="uk-navbar-dropdown uk-navbar-dropdown-bottom-right uk-animation-fade uk-animation-enter menu-child-margin">
                              <ul class="uk-nav uk-navbar-dropdown-nav">
                                  <li>
                                      <a href="{{ route('staff.brands.index') }}">مدیریت برند ها</a>
                                  </li>
                                  <li>
                                      <a href="{{ route('staff.brands.create') }}">ایجاد برند</a>
                                  </li>
                              </ul>
                          </div>
                      </li>

                      <li>
                          <a href="#">دسته بندی ها</a>
                          <div class="uk-navbar-dropdown uk-navbar-dropdown-bottom-right uk-animation-fade
                           uk-animation-enter menu-child-margin">
                              <ul class="uk-nav uk-navbar-dropdown-nav">
                                  <li>
                                      <a href="{{ route('staff.categories.index') }}">مدیریت دسته بندی ها</a>
                                  </li>
                                  <li>
                                      <a href="{{ route('staff.categories.create') }}">ایجاد دسته بندی</a>
                                  </li>
                              </ul>
                          </div>
                      </li>

                    <li>
                      <a href="#">محصولات</a>
                      <div class="uk-navbar-dropdown uk-navbar-dropdown-bottom-right uk-animation-fade
                           uk-animation-enter menu-child-margin">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                          <li>
                            <a href="{{ route('staff.products.index') }}">مدیریت محصولات</a>
                          </li>
                          <li>
                            <a href="{{ route('staff.products.create') }}">ایجاد محصول جدید</a>
                          </li>
                        </ul>
                      </div>
                    </li>

                    <li>
                      <a href="{{ route('staff.attributes.index') }}">ویژگی ها</a>
                    </li>

                    <li>
                      <a href="{{ route('staff.types.index') }}">نوع ها</a>
                    </li>

                    <li>
                      <a href="{{ route('staff.units.index') }}">واحد ها</a>
                    </li>

                    <li>
                      <a href="#">گارانتی ها</a>
                      <div class="uk-navbar-dropdown uk-navbar-dropdown-bottom-right uk-animation-fade
                       uk-animation-enter menu-child-margin">
                          <ul class="uk-nav uk-navbar-dropdown-nav">
                              <li>
                                  <a href="{{ route('staff.warranties.index') }}">مدیریت گارانتی ها</a>
                              </li>
                              <li>
                                  <a href="{{ route('staff.warranties.create') }}">ایجاد گارانتی جدید</a>
                              </li>
                          </ul>
                      </div>
                    </li>

                  <li>
                      <a href="#">تنوع</a>
                      <div class="uk-navbar-dropdown uk-navbar-dropdown-bottom-right uk-animation-fade
                   uk-animation-enter menu-child-margin">
                          <ul class="uk-nav uk-navbar-dropdown-nav">
                              <li>
                                  <a href="{{ route('staff.variants.index') }}">مدیریت تنوع</a>
                              </li>
                              <li>
                                  <a href="{{ route('staff.variants.variantCategory') }}">تعیین تنوع مجاز</a>
                              </li>
                          </ul>
                      </div>
                  </li>


                  <li>
                      <a href="{{ route('staff.comments.index') }}">دیدگاه ها</a>
                  </li>

                  <li>
                    <a href="{{ route('staff.sliders.index') }}">اسلایدر و بنر ها</a>
                  </li>

                  <li>
                    <a href="{{ route('staff.navs.index') }}">فهرست ها</a>
                  </li>

                  </ul>
                </div>
              </li>


              <li class="first-level">
                    <a href="#" class="" aria-expanded="false">بازاریابی
                        <span class="chevron-down"></span>
                    </a>
                    <div class="uk-navbar-dropdown uk-navbar-dropdown-bottom-right uk-animation-fade uk-animation-enter">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li>
                                <a>کمپین ها</a>
                                <div class="uk-navbar-dropdown uk-navbar-dropdown-bottom-right uk-animation-fade uk-animation-enter menu-child-margin">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li>
                                            <a href="{{ route('staff.campains.index') }}">مدیریت کمپین ها</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('staff.campains.create') }}">ایجاد کمپین</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a>صفحه سفارشی</a>
                                <div class="uk-navbar-dropdown uk-navbar-dropdown-bottom-right uk-animation-fade uk-animation-enter menu-child-margin">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li>
                                            <a href="{{ route('staff.landings.index') }}">مدیریت صفحه سفارشی</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('staff.landings.create') }}">ایجاد صفحه سفارشی</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="{{ route('staff.periodic-prices.index') }}">تخفیف های هوشمند</a>
                            </li>

                            <li>
                                <a>کد تخفیف</a>
                                <div class="uk-navbar-dropdown uk-navbar-dropdown-bottom-right uk-animation-fade uk-animation-enter menu-child-margin">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li>
                                            <a href="{{ route('staff.vouchers.index') }}">مدیریت کد‌تخفیف</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('staff.vouchers.create') }}">ایجاد کد‌تخفیف</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

              <li class="first-level">
                <a href="{{ route('staff.delivery.index') }}" class="" aria-expanded="false">روش های ارسال</a>
              </li>

              <li class="first-level">
                <a href="{{ route('staff.peyment.index') }}" class="" aria-expanded="false">درگاه های پرداخت</a>
              </li>


              <li class="first-level">
                <a href="{{ route('staff.customers.index') }}" class="" aria-expanded="false">مشتریان</a>
              </li>

              <li class="first-level">
                <a href="{{ route('staff.settings.index') }}" class="" aria-expanded="false">تنظیمات</a>
              </li>


            </ul>
          </div>
          <div class="uk-navbar-left">
            <ul class="uk-navbar-nav uk-navbar-nav--responsive">
              <li>
                <a href="#" class="" aria-expanded="false">مهدی جلالی
                <span class="chevron-down"></span>
                </a>
                <div class="uk-navbar-dropdown uk-navbar-dropdown--has-rating uk-navbar-dropdown-bottom-left"
                  style="left: 90.0001px; top: 50px;">
                  <div class="c-rating-chart">
                    <a href="/rating/"
                      class="c-rating-chart__stars-container c-rating-chart__stars-container--nav">
                      <div class="c-rating-chart__stars-summary c-rating-chart__stars-summary--nav"><span>امتیاز شما:</span>
                        ۰
                      </div>
                      <div class="c-rating-chart__stars-row">
                        <div class="c-rating-chart__star">
                        </div>
                        <div class="c-rating-chart__star">
                        </div>
                        <div class="c-rating-chart__star">
                        </div>
                        <div class="c-rating-chart__star">
                        </div>
                        <div class="c-rating-chart__star">
                        </div>
                      </div>
                    </a>
                  </div>
                  <ul class="uk-nav uk-navbar-dropdown-nav">
                    <li>
                      <a href="/" class="has-icon ">
                        <span uk-icon="icon: clock;" class="uk-icon">
                        </span>
                        داشبورد عملکرد
                      </a>
                    </li>
                    <li>
                      <a href="/profile/new/display/" class="has-icon ">
                        <span uk-icon="icon: user;" class="uk-icon">
                        </span>
                        پروفایل شما
                      </a>
                    </li>
                    <li>
                      <a href="/account/changepassword/" class="has-icon ">
                        <span uk-icon="icon: lock;" class="uk-icon">
                        </span>
                        تغییر رمز عبور
                      </a>
                    </li>
                    <li>
                      <a href="/account/logout/" class="has-icon ">
                        <span uk-icon="icon: ban;" class="uk-icon">
                        </span>
                        خروج
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <a href="/questions/" class="header-questions ">
                </a>
              </li>
              <li>
                <a href="/notification/" uk-icon="mail" class="header-notification uk-icon">
                  <span class="c-profile-nav__item-counter c-profile-nav__item-counter--header">۴۳۸</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <div class="new-mobile-view-menu--invisible">
      <div class="new-mobile-view-menu__header">
        <button class="uk-navbar__control uk-navbar__control--collapse js-navbar-control" type="button"
          aria-label="show menu">
        <span class="uk-navbar__control-box">
        <span class="uk-navbar__control-inner"></span>
        </span>
        </button>
        <h1 class="c-header__logo">
          <a href="/">
          </a>
        </h1>
      </div>
      <div class="uk-navbar-container__top">
        <a class="header">
        کالا ضمانت
        </a>
        <a>
          <span>
            <div class="c-rating-chart__stars-row">
              <div class="c-rating-chart__star">
              </div>
              <div class="c-rating-chart__star">
              </div>
              <div class="c-rating-chart__star">
              </div>
              <div class="c-rating-chart__star">
              </div>
              <div class="c-rating-chart__star">
              </div>
            </div>
          </span>
          <span>
          ۰
          </span>
        </a>
        <div>
          <a href="" class="c-profile-nav__menu-item c-profile-nav__menu-item--message">
          <span class="c-profile-nav__item-counter">۴۳۸</span>
          پیام‌ها
          </a>
          <a href="" class="c-profile-nav__menu-item c-profile-nav__menu-item--profile">پروفایل</a>
          <a href="" class="c-profile-nav__menu-item c-profile-nav__menu-item--logout">
          خروج
          </a>
        </div>
      </div>
      <div class="uk-navbar-container__bottom">
        <ul class="uk-navbar-nav">
          <div class="uk-navbar-container__bottom__header">
            <a href="/">
            داشبورد عملکردی
            </a>
          </div>
          <li>
            <a class="js-menu-item">
              <div>
                محصولات
              </div>
              <div class="chevron-down">
              </div>
            </a>
            <div class="new-navbar-dropdown--close">
              <ul>
                <li>
                  <a href="/content/find/product/">
                  جستجو یا درج محصول
                  </a>
                </li>
                <li>
                  <a href="/product/">
                  مدیریت محصولات
                  </a>
                </li>
                <li>
                  <a href="/productconfig/editinformation/">
                  مدیریت تنوع و قیمت گذاری
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a class="js-menu-item">
              <div>
                سفارش‌های مشتریان
              </div>
              <div class="chevron-down">
              </div>
            </a>
            <div class="new-navbar-dropdown--close">
              <ul>
                <li>
                  <a href="/orders/">
                  سفارش‌های تایید شده
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a class="js-menu-item">
              <div>
                محموله ها
              </div>
              <div class="chevron-down">
              </div>
            </a>
            <div class="new-navbar-dropdown--close">
              <ul>
                <li>
                  <a href="/consignment/">
                  ایجاد محموله برای انبار
                  </a>
                </li>
                <li>
                  <a href="/packages/">
                  لیست محموله ها
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a class="js-menu-item">
              <div>
                بازاریابی
              </div>
              <div class="chevron-down">
              </div>
            </a>
            <div class="new-navbar-dropdown--close">
              <ul>
                <li>
                  <a href="/promotion-management/">
                  مدیریت پروموشن‌ها
                  </a>
                </li>
                <li>
                  <a href="/join-promotions-list/index/">
                  ‌شرکت در پروموشن جدید
                  </a>
                </li>
                <li>
                  <a href="/periodic-prices/active/">
                  تخفیف های هوشمند
                  </a>
                </li>
                <li>
                  <a href="/product-list/">
                  ساخت صفحه سفارشی
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a class="js-menu-item">
              <div>
                گزارشات
              </div>
              <div class="chevron-down">
              </div>
            </a>
            <div class="new-navbar-dropdown--close">
              <ul>
                <li>
                  <a href="/passiveorders/">
                  گزارش سفارش‌های نهایی شده
                  </a>
                </li>
                <li>
                  <a href="/inventory/">
                  گزارش موجودی انبار
                  </a>
                </li>
                <li>
                  <a href="/sellercommission/">
                  کمیسیون، هزینه ها و جرایم
                  </a>
                </li>
                <li>
                  <a href="/sellerinvoice/">
                  صورتحساب ها
                  </a>
                </li>
                <li>
                  <a href="/imports/">
                  گزارش بارگذاری ها
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a class="js-menu-item">
              <div>
                راهنما
              </div>
              <div class="chevron-down">
              </div>
            </a>
            <div class="new-navbar-dropdown--close">
              <ul>
                <li>
                  <a href="/profile/new/guide/">
                  راهنمای درج تا فروش
                  </a>
                </li>
                <li>
                  <a href="/profile/new/pricing/">
                  راهنمای قیمت گذاری
                  </a>
                </li>
                <li>
                  <a href="https://selleracademy.digikala.com/سوالات-متداول/" target="_blank">
                  سوالات متداول
                  </a>
                </li>
                <li>
                  <a href="http://selleracademy.digikala.com/" target="_blank">
                  مرکز آموزش فروشندگان
                  </a>
                </li>
                <li>
                  <a href="https://selleracademy.digikala.com/اقلام-ممنوعه/" target="_blank">
                  کالاهای ممنوعه
                  </a>
                </li>
                <li>
                  <a href="https://www.digikala.com/contentfactory/" target="_blank">
                  کارخانه محتوا
                  </a>
                </li>
                <li>
                  <a href="ReportGuideModal">
                  گزارش تخلف
                  </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
@yield('content')
<footer class="c-footer">
    <div class="c-fozoter__top">
      <div class="uk-container uk-container-large">
        <div class="uk-flex uk-flex-between uk-flex-middle">
          <ul class="uk-subnav uk-subnav-divider">
            <li>
              <a href="https://selleracademy.digikala.com/%d9%81%d8%b1%d9%85-%d8%aa%d9%85%d8%a7%d8%b3-%d8%a8%d8%a7-%d9%85%d8%a7/">
              تماس با پشتیبانی فروشندگان
              </a>
            </li>
            <li>
              <span uk-icon="icon: receiver;" class="uk-icon">
                <svg width="20" height="20" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                  ratio="1">
                  <path fill="none" stroke="#000"
                    stroke-width="1.01"
                    d="M6.189,13.611C8.134,15.525 11.097,18.239 13.867,18.257C16.47,18.275 18.2,16.241 18.2,16.241L14.509,12.551L11.539,13.639L6.189,8.29L7.313,5.355L3.76,1.8C3.76,1.8 1.732,3.537 1.7,6.092C1.667,8.809 4.347,11.738 6.189,13.611"></path>
                </svg>
              </span>
              ۰۲۱ - ۹۱۰۲۰۰۲۰
            </li>
            <li>ارتباط با مرکز فروشندگان {{ $fa_store_name }}</li>
          </ul>
          <div>
            <a href="http://selleracademy.digikala.com/">
            <img src="https://seller.digikala.com/static/files/18a7352a.svg"
              class="c-footer__logo c-footer__logo--new">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="c-footer__bottom">
      <div class="uk-container uk-container-large">
        <div class="uk-flex uk-flex-between">
          <div>
            کليه حقوق اين
            <span style="color: rgba(243, 187, 97, 1)">
            سايت به شرکت نوآوران فن آوازه (فروشگاه آنلاین {{ $fa_store_name }})
            </span>
            تعلق دارد.
          </div>
          <div>Copyright © 2006 - 2020 Digikala.com</div>
        </div>
      </div>
    </div>
  </footer>
@yield('script')
</body>
</html>

