@extends('layouts.customer.master')
@section('o-page__content')
  <section class="o-page__content">
    <div class="o-box">
      <div class="o-box__header"><span class="o-box__title">تاریخچه سفارشات</span></div>
      <div class="o-box__tabs  js-order-search-container">
        <div class="o-box__tab  is-active " data-tab-pill-id="0"><a
            href="/profile/my-orders/?activeTab=wait-for-payment">
            در انتظار پرداخت
            <span class="o-box__tab-counter">۰</span></a></div>
        <div class="o-box__tab  " data-tab-pill-id="1"><a href="/profile/my-orders/?activeTab=paid-in-progress">
            در حال پردازش
            <span class="o-box__tab-counter">۰</span></a></div>
        <div class="o-box__tab " data-tab-pill-id="2"><a href="/profile/my-orders/?activeTab=delivered">
            تحویل شده
            <span class="o-box__tab-counter">۱</span></a></div>
        <div class="o-box__tab " data-tab-pill-id="3"><a href="/profile/my-orders/?activeTab=returned">
            مرجوعی
            <span class="o-box__tab-counter">۰</span></a></div>
        <div class="o-box__tab " data-tab-pill-id="4"><a href="/profile/my-orders/?activeTab=canceled">
            لغو شده
            <span class="o-box__tab-counter">۱</span></a></div>
        <div class="o-box__tab " data-tab-pill-id="5"><a href="/profile/my-orders/?activeTab=top-up"> شارژ و اینترنت</a>
        </div>
        <div class="c-profile-order__search-input-container">
          <div class="o-btn c-profile-order__search-close js-order-search-close"></div>
          <input class="c-profile-order__search-input js-order-search-input"
                 placeholder="عنوان کالا یا شماره سفارش موردنظرتان را وارد کنید"></div>
        <div class="o-btn c-profile-order__search-btn js-order-search-btn"></div>
      </div>
      <div class="c-profile-order__content js-ui-tab-content">
        <div class="c-profile-empty-temporary">
          <div class="c-profile-empty-temporary__img"><img src="https://www.digikala.com/static/files/d4fa2ec1.svg">
          </div>
          <div class="c-profile-empty-temporary__desc">
            سفارش فعالی در این بخش وجود ندارد.
          </div>
        </div>
      </div>
      <div class="c-pager js-pagination"></div>
      <div class="js-search-results"></div>
    </div>
  </section>
@endsection


@section('page-content')
@endsection

@section('script')
@endsection
