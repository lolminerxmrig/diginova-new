@php
  $banner2 = \Modules\Staff\Slider\Models\Slider::find(2);
@endphp

@extends('layouts.front.master')

@section('head')
<title>تعیین مجدد وضعیت ارسال و پرداخت | {{ $fa_store_name }}</title>
<meta name="robots" content="noindex, nofollow">
<script>
  var supernova_mode = "production";
  var supernova_tracker_url = "https:\/\/etrackerd.digikala.com\/tracker\/events\/";
  var payablePrice = 4750000;
  var userId = 9735394;
  var adroRCActivation = true;
  var loginRegisterUrlWithBack = "\/users\/login-register\/?_back=https:\/\/www.digikala.com\/reselect\/109626663\/";
  var isNewCustomer = false;
  var digiclubLuckyDrawEndTime = "2021-06-23 15:30:28";
  var activateUrl = "\/digiclub\/activate\/";
</script>
<script src="{{ asset('assets/js/sentry.js') }}"></script>
@endsection


@section('content')

<main id="main">
  <div id="HomePageTopBanner"></div>
  <div id="content">
    <div class="c-404">
      <div class="c-404__title">
        <h1>صفحه‌ای که دنبال آن بودید پیدا نشد!</h1>
      </div>
      <div class="c-404__actions">
        <a href="{{ route('front.indexPage') }}" class="c-404__action c-404__action--primary">صفحه اصلی</a>
      </div>
      <div class="c-404__image">
        <img data-src="{{ asset('assets/images/png/404.png') }}" src="{{ asset('assets/images/png/404.png') }}" loading="lazy">
      </div>
    </div>
  </div>
</main>

@endsection
