@extends('layouts.customer.master')
@section('o-page__content')
  <section class="o-page__content">
    <div class="o-box">
      <div class="o-box__header">
        <span class="o-box__title">تاریخچه سفارشات</span>
      </div>
      <div class="o-box__tabs  js-order-search-container">
        <div class="o-box__tab  is-active " data-tab-pill-id="0">
          <a href="/profile/my-orders/?activeTab=wait-for-payment">
            در انتظار پرداخت
            <span class="o-box__tab-counter">۰</span>
          </a>
        </div>
        <div class="o-box__tab  " data-tab-pill-id="1">
          <a href="/profile/my-orders/?activeTab=paid-in-progress">
            در حال پردازش
            <span class="o-box__tab-counter">۰</span>
          </a>
        </div>
        <div class="o-box__tab " data-tab-pill-id="2">
          <a href="/profile/my-orders/?activeTab=delivered">
            تحویل شده
            <span class="o-box__tab-counter">۱</span>
          </a>
        </div>
        <div class="o-box__tab " data-tab-pill-id="3">
          <a href="/profile/my-orders/?activeTab=returned">
            مرجوعی
            <span class="o-box__tab-counter">۰</span>
          </a>
        </div>
        <div class="o-box__tab " data-tab-pill-id="4">
          <a href="/profile/my-orders/?activeTab=canceled">
            لغو شده
            <span class="o-box__tab-counter">۱</span>
          </a>
        </div>
{{--        <div class="o-box__tab " data-tab-pill-id="5">--}}
{{--          <a href="/profile/my-orders/?activeTab=top-up"> شارژ و اینترنت</a>--}}
{{--        </div>--}}
{{--        <div class="c-profile-order__search-input-container">--}}
{{--          <div class="o-btn c-profile-order__search-close js-order-search-close"></div>--}}
{{--          <input class="c-profile-order__search-input js-order-search-input" placeholder="عنوان کالا یا شماره سفارش موردنظرتان را وارد کنید">--}}
{{--        </div>--}}
{{--        <div class="o-btn c-profile-order__search-btn js-order-search-btn"></div>--}}
      </div>
      @if ($orders->count())
        <div class="c-profile-order__content js-ui-tab-content">
          @foreach($orders as $order)
            <div class="c-profile-order__list-item">
            <div class="c-profile-order__list-item-details">
              <div class="c-profile-order__list-item-details-top ">
                <div class="c-profile-order__list-item-details-row">
                  <div class="c-profile-order__list-item-detail" data-order-date="{{ $order->created_at }}">۲۵ خرداد ۱۴۰۰</div>
                  <div class="c-profile-order__list-item-detail">DKC-{{ persianNum($order->order_code) }}</div>
                  <div class="c-profile-order__list-item-detail">{{ $order->status->name }}</div>
                </div>
                <a class="o-link o-link--has-arrow" href="{{ route('customer.panel.orderDetails', ['order_code' => $order->order_code]) }}">مشاهده سفارش</a>
              </div>
              <div class="c-profile-order__list-item-details-row">
                <div class="c-profile-order__list-item-detail c-profile-order__list-item-detail--currency">
                  <span class="c-profile-order__list-item-detail-title">مبلغ کل:</span>
                  {{ persianNum(number_format($order->cost)) }}
                </div>
              </div>
            </div>
            <div class="c-profile-order__list-item-parcels">
              @foreach($order->consignments as $key => $consignment)
                <div class="c-profile-order__list-item-parcel">
                <div class="c-profile-order__list-item-parcel-top">
                  <div class="c-profile-order__list-item-parcel-details">
                    <div class="c-profile-order__list-item-parcel-title">مرسوله {{ persianNum($key+1) }} از {{ persianNum(count($order->consignments)) }}</div>
                    <div class="c-profile-order__list-item-parcel-date-time"></div>
                  </div>
                </div>
                <div class="c-profile-order__list-item-parcel-products">
                  <a href="{{ route('front.productPage', ['product_code' => 'xx']) }} product/dkp-2748575/" class="c-profile-order__list-item-parcel-product">
                    <img src="https://dkstatics-public.digikala.com/digikala-products/120762321.jpg?x-oss-process=image/resize,m_lfit,h_150,w_150/quality,q_80" alt="کامپیوتر دسکتاپ گرین مدل Z6 Artemis">
                  </a>
                </div>
              </div>
              @endforeach
            </div>
            <div class="c-profile-order__list-item-actions c-profile-order__list-item-actions--between">
              <a href="/payment/checkout/order/110603527/?from_profile=1" class="o-btn o-btn--contained-red-md">پرداخت</a>
              <div class="c-profile-order__warning">در صورت عدم پرداخت تا ۵۹ دقیقه دیگر، این سفارش به‌صورت خودکار لغو خواهد شد.</div>
            </div>
          </div>
          @endforeach
        </div>
      @else
      <div class="c-profile-order__content js-ui-tab-content">
        <div class="c-profile-empty-temporary">
          <div class="c-profile-empty-temporary__img"><img src="https://www.digikala.com/static/files/d4fa2ec1.svg">
          </div>
          <div class="c-profile-empty-temporary__desc">
            سفارش فعالی در این بخش وجود ندارد.
          </div>
        </div>
      </div>
      @endif
      <div class="c-pager js-pagination"></div>
      <div class="js-search-results"></div>
    </div>
  </section>
@endsection


{{--@section('page-content')--}}
{{--@endsection--}}

{{--@section('script')--}}
{{--@endsection--}}
