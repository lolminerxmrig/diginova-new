@php
  $banner2 = \Modules\Staff\Slider\Models\Slider::find(2);
  $banner3 = \Modules\Staff\Slider\Models\Slider::find(3);
  $banner4 = \Modules\Staff\Slider\Models\Slider::find(4);
  $slider1 = \Modules\Staff\Slider\Models\Slider::find(5);
  $bannerGroup1 = \Modules\Staff\Slider\Models\Slider::find(6);
  $bannerGroup2 = \Modules\Staff\Slider\Models\Slider::find(7);
  $bannerGroup3 = \Modules\Staff\Slider\Models\Slider::find(8);
  $bannerGroup4 = \Modules\Staff\Slider\Models\Slider::find(9);
  $banner5 = \Modules\Staff\Slider\Models\Slider::find(10);
@endphp

@extends('layouts.front.master')

@section('head')
  <title>{{ $site_title }}</title>
  <!-- SEO -->
  <meta name="description" content="{{ $description }}"/>
  <meta name="keywords" content="{{ $index_meta_keywords }}"/>

  <script>
    var supernova_mode = "production";
    var supernova_tracker_url = "";
    var isHomePage = true;
    var isAnanasFriendly = true;
    var userId = null;
    var adroRCActivation = true;
    var loginRegisterUrlWithBack = "";
    var isNewCustomer = false;
    var digiclubLuckyDrawEndTime = "";
    var activateUrl = "";
  </script>


@endsection

@section('content')
  <main id="main">
    <div id="HomePageTopBanner"></div>
    <div id="content">

      <article class="container container--home">
        <div class="o-page">
          <div class="o-page__row o-page__row--main-top">

            <aside class="c-adplacement c-adplacement__margin-bottom">
              @if($banner2->images()->exists() && $banner2->images()->first()->media()->exists())
                <a href="{{ $banner2->images()->first()->link }}" class="c-adplacement__item" target="_blank" title="{{ $banner2->images()->first()->alt }}">
                  <img src="{{ ($banner2->images()->first()->media()->exists())?  $site_url . '/' . $banner2->images()->first()->media->first()->path . '/'. $banner2->images()->first()->media->first()->name : '' }}" alt="{{ ($banner2->images()->first()->media()->exists())?  $banner2->images()->first()->alt : '' }}" loading="lazy"/>
                </a>
              @endif
            </aside>

            <div class="o-page__two-thirds o-page__two-thirds--right">
              <section class="c-adplacement-head-slider c-adplacement-head-slider--home">
                <div class="c-swiper c-swiper--promo-box c-main-slider-container ">
                  <div class="swiper-container swiper-container-horizontal js-main-page-slider swiper-container-fade swiper-container-rtl">
                    <div class="swiper-wrapper dkms-placement-slider c-adplacement" style="transition-duration: 0ms;">
                      @if($slider1->images()->exists() && $slider1->images()->first()->media()->exists())
                        @foreach($slider1->images as $image)
                          <a href="{{ ($image->media()->exists())? $image->link : '' }}" class="c-main-slider__slide swiper-slide js-main-page-slider-image" title="{{ ($image->media()->exists())? $image->alt : '' }}" data-is-trackable="" target="_blank" style="background-image: url({{ $site_url . '/' . $image->media->first()->path . '/'. $image->media->first()->name }}); width: 875px; transition-duration: 0ms; opacity: 1; transform: translate3d(1750px, 0px, 0px);"></a>
                        @endforeach
                      @endif
                    </div>
                    <div class="swiper-pagination c-main-slider__actions swiper-pagination-clickable swiper-pagination-bullets">
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                  </div>
                </div>
              </section>
            </div>

            <div class="o-page__one-thirds o-page__one-thirds--left">
              <aside class="c-adplacement c-adplacement__container-column">
                @if($banner3->images()->exists() && $banner3->images()->first()->media()->exists())
                  <a href="{{ $banner3->images()->first()->link }}" class="c-adplacement__item js-ad-placement-column-item c-adplacement__item--column" target="_blank" data-is-trackable="" title="{{ $banner3->images()->first()->alt }}">
                    <div class="c-adplacement__sponsored_box">
                      <img src="{{ ($banner3->images()->first()->media()->exists())?  $site_url . '/' . $banner3->images()->first()->media->first()->path . '/'. $banner3->images()->first()->media->first()->name : '' }}" alt="{{ ($banner3->images()->first()->media()->exists())?  $banner3->images()->first()->alt : '' }}" loading="lazy"/>
                    </div>
                  </a>
                @endif
                @if($banner4->images()->exists() && $banner4->images()->first()->media()->exists())
                  <a href="{{ $banner4->images()->first()->link }}" class="c-adplacement__item js-ad-placement-column-item c-adplacement__item--column" target="_blank" data-is-trackable="" title="{{ $banner4->images()->first()->alt }}">
                    <div class="c-adplacement__sponsored_box">
                      <img src="{{ ($banner4->images()->first()->media()->exists())?  $site_url . '/' . $banner4->images()->first()->media->first()->path . '/'. $banner4->images()->first()->media->first()->name : '' }}" alt="{{ ($banner4->images()->first()->media()->exists())?  $banner4->images()->first()->alt : '' }}" loading="lazy"/>
                    </div>
                  </a>
                @endif
              </aside>
            </div>

          </div>
        </div>
      </article>


      <script>
        var carouselDataTracker = {
          "carouselPosition": "INCREDIBLE-OFFER",
          "id": "sn-carousels-incredible-offer",
          "title": "\u067e\u06cc\u0634\u0646\u0647\u0627\u062f \u0634\u06af\u0641\u062a\u200c\u0627\u0646\u06af\u06cc\u0632",
          "title_en": "incredible offer",
          "products": [{
            "id": 3945007,
            "name": "\u0627\u062a\u0648 \u0628\u062e\u0627\u0631 \u06a9\u0648\u067e\u06a9\u0633 \u0645\u062f\u0644 CS-7570",
            "price": 9980000,
            "category": "\u0627\u062a\u0648",
            "brand": "\u06a9\u0648\u067e\u06a9\u0633",
            "position": 1,
            "status": "marketable"
          }, {
            "id": 4654078,
            "name": "\u06a9\u06cc\u0641 \u0631\u0648\u062f\u0648\u0634\u06cc \u0632\u0646\u0627\u0646\u0647 \u0628\u0631\u062a\u0648\u0646\u06cc\u06a9\u0633 \u0645\u062f\u0644 443",
            "price": 2470000,
            "category": "Women Bags",
            "brand": "\u0628\u0631\u062a\u0648\u0646\u06cc\u06a9\u0633",
            "position": 2,
            "status": "marketable"
          }, {
            "id": 3350088,
            "name": "\u06a9\u0641\u0634 \u0632\u0646\u0627\u0646\u0647 \u0645\u062f\u0644 \u0628\u06cc\u062a\u0627 \u06a9\u062f 7751",
            "price": 990000,
            "category": "WOMEN FLAT SHOES",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "position": 3,
            "status": "marketable"
          }, {
            "id": 4214771,
            "name": "\u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647 \u0627\u06cc\u06a9\u0633 \u0627\u0648 \u0645\u062f\u0644 PR102 \u0638\u0631\u0641\u06cc\u062a 10000 \u0645\u06cc\u0644\u06cc \u0622\u0645\u067e\u0631 \u0633\u0627\u0639\u062a",
            "price": 2490000,
            "category": "\u067e\u0627\u0648\u0631\u0628\u0627\u0646\u06a9 (\u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647)",
            "brand": "XO",
            "position": 4,
            "status": "marketable"
          }, {
            "id": 2540229,
            "name": "\u0633\u0627\u0639\u062a \u0647\u0648\u0634\u0645\u0646\u062f \u0645\u062f\u0644 TD28",
            "price": 5990000,
            "category": "\u0633\u0627\u0639\u062a \u0647\u0648\u0634\u0645\u0646\u062f",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "position": 5,
            "status": "marketable"
          }, {
            "id": 3124551,
            "name": "\u0686\u0631\u0627\u063a \u0645\u0637\u0627\u0644\u0639\u0647 \u0648\u06cc\u0646\u0633\u06cc\u06a9 \u0645\u062f\u0644 STUDY",
            "price": 2890000,
            "category": "\u0686\u0631\u0627\u063a \u0645\u0637\u0627\u0644\u0639\u0647",
            "brand": "Vinsic",
            "position": 6,
            "status": "marketable"
          }, {
            "id": 2650819,
            "name": "\u0633\u0627\u0639\u062a \u0645\u0686\u06cc \u0639\u0642\u0631\u0628\u0647 \u0627\u06cc \u0633\u0648\u067e\u0631\u062f\u0631\u0627\u06cc \u0645\u062f\u0644 SYG198UO",
            "price": 5090000,
            "category": "UNI Analouge Watches",
            "brand": "Superdry",
            "position": 7,
            "status": "marketable"
          }, {
            "id": 3872197,
            "name": "\u0633\u062a \u0633\u0648\u06cc\u0634\u0631\u062a \u0648 \u0634\u0644\u0648\u0627\u0631 \u067e\u0633\u0631\u0627\u0646\u0647 \u0645\u062f\u0644 SH-5K",
            "price": 1150000,
            "category": "BOYS Homewear Sets",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "position": 8,
            "status": "marketable"
          }, {
            "id": 4583889,
            "name": "\u062a\u06cc \u0634\u0631\u062a \u0632\u0646\u0627\u0646\u0647 \u0627\u0633\u067e\u06cc\u0648\u0631 \u0645\u062f\u0644 2W03M-01",
            "price": 890000,
            "category": "WOMEN TEE-SHIRTS & POLOS",
            "brand": "\u0627\u0633\u067e\u06cc\u0648\u0631",
            "position": 9,
            "status": "marketable"
          }, {
            "id": 3951143,
            "name": " \u0645\u0627\u0634\u06cc\u0646 \u0628\u0627\u0632\u06cc \u0633\u06af\u0647\u0627\u06cc \u0646\u06af\u0647\u0628\u0627\u0646 \u0645\u062f\u0644 99C  \u0645\u062c\u0645\u0648\u0639\u0647 9 \u0639\u062f\u062f\u06cc",
            "price": 2993000,
            "category": "\u0645\u0627\u0634\u06cc\u0646",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "position": 10,
            "status": "marketable"
          }, {
            "id": 3501805,
            "name": "\u0647\u0646\u062f\u0632\u0641\u0631\u06cc \u0628\u0644\u0648\u062a\u0648\u062b \u0631\u06cc\u0645\u06a9\u0633 \u0645\u062f\u0644 RB-S28",
            "price": 4200000,
            "category": "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc",
            "brand": "\u0631\u06cc\u0645\u06a9\u0633",
            "position": 11,
            "status": "marketable"
          }, {
            "id": 2759019,
            "name": "\u062a\u0644\u0648\u06cc\u0632\u06cc\u0648\u0646 \u06a9\u06cc\u0648\u0644\u062f \u0647\u0648\u0634\u0645\u0646\u062f \u067e\u0627\u0646\u0648\u0631\u0627\u0645\u06cc\u06a9 \u0645\u062f\u0644 PA-50SA3657 \u0633\u0627\u06cc\u0632 50 \u0627\u06cc\u0646\u0686",
            "price": 99190000,
            "category": "\u062a\u0644\u0648\u06cc\u0632\u06cc\u0648\u0646",
            "brand": "\u067e\u0627\u0646\u0648\u0631\u0627\u0645\u06cc\u06a9",
            "position": 12,
            "status": "marketable"
          }]
        };
        if (carouselDataTracker) {
          if (!window.carouselData)
            window.carouselData = [carouselDataTracker];
          else
            window.carouselData.push(carouselDataTracker);
        }
      </script>
      <script>
        window.dataLayer.push({
          "event": "eec.productImpression", "ecommerce": {
            "currencyCode": "EUR",
            "impressions": [{
              "name": "\u0627\u062a\u0648 \u0628\u062e\u0627\u0631 \u06a9\u0648\u067e\u06a9\u0633 \u0645\u062f\u0644 CS-7570",
              "id": 3945007,
              "price": 9980000,
              "brand": "\u06a9\u0648\u067e\u06a9\u0633",
              "category": "\u0627\u062a\u0648",
              "list": "category-\u0627\u062a\u0648",
              "position": 1,
              "dimension6": 1,
              "dimension2": 31,
              "dimension9": 0,
              "metric6": 0,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-incredible",
              "dimension7": "incredible"
            }, {
              "name": "\u06a9\u06cc\u0641 \u0631\u0648\u062f\u0648\u0634\u06cc \u0632\u0646\u0627\u0646\u0647 \u0628\u0631\u062a\u0648\u0646\u06cc\u06a9\u0633 \u0645\u062f\u0644 443",
              "id": 4654078,
              "price": 2470000,
              "brand": "\u0628\u0631\u062a\u0648\u0646\u06cc\u06a9\u0633",
              "category": "\u06a9\u06cc\u0641 \u0632\u0646\u0627\u0646\u0647",
              "list": "category-\u06a9\u06cc\u0641 \u0632\u0646\u0627\u0646\u0647",
              "position": 2,
              "dimension6": 1,
              "dimension2": 47,
              "dimension9": 0,
              "metric6": 0,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-incredible",
              "dimension7": "incredible"
            }, {
              "name": "\u06a9\u0641\u0634 \u0632\u0646\u0627\u0646\u0647 \u0645\u062f\u0644 \u0628\u06cc\u062a\u0627 \u06a9\u062f 7751",
              "id": 3350088,
              "price": 990000,
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "category": "\u06a9\u0641\u0634 \u062a\u062e\u062a \u0632\u0646\u0627\u0646\u0647",
              "list": "category-\u06a9\u0641\u0634 \u062a\u062e\u062a \u0632\u0646\u0627\u0646\u0647",
              "position": 3,
              "dimension6": 1,
              "dimension2": 25,
              "dimension9": 4,
              "metric6": 40,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-incredible",
              "dimension7": "incredible"
            }, {
              "name": "\u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647 \u0627\u06cc\u06a9\u0633 \u0627\u0648 \u0645\u062f\u0644 PR102 \u0638\u0631\u0641\u06cc\u062a 10000 \u0645\u06cc\u0644\u06cc \u0622\u0645\u067e\u0631 \u0633\u0627\u0639\u062a",
              "id": 4214771,
              "price": 2490000,
              "brand": "\u0627\u06cc\u06a9\u0633 \u0627\u0648",
              "category": "\u067e\u0627\u0648\u0631\u0628\u0627\u0646\u06a9 (\u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647)",
              "list": "category-\u067e\u0627\u0648\u0631\u0628\u0627\u0646\u06a9 (\u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647)",
              "position": 4,
              "dimension6": 1,
              "dimension2": 60,
              "dimension9": 0,
              "metric6": 0,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-incredible",
              "dimension7": "incredible"
            }, {
              "name": "\u0633\u0627\u0639\u062a \u0647\u0648\u0634\u0645\u0646\u062f \u0645\u062f\u0644 TD28",
              "id": 2540229,
              "price": 5990000,
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "category": "\u0633\u0627\u0639\u062a \u0647\u0648\u0634\u0645\u0646\u062f",
              "list": "category-\u0633\u0627\u0639\u062a \u0647\u0648\u0634\u0645\u0646\u062f",
              "position": 5,
              "dimension6": 1,
              "dimension2": 36,
              "dimension9": 3.6,
              "metric6": 16,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-incredible",
              "dimension7": "incredible"
            }, {
              "name": "\u0686\u0631\u0627\u063a \u0645\u0637\u0627\u0644\u0639\u0647 \u0648\u06cc\u0646\u0633\u06cc\u06a9 \u0645\u062f\u0644 STUDY",
              "id": 3124551,
              "price": 2890000,
              "brand": "\u0648\u06cc\u0646\u0633\u06cc\u06a9",
              "category": "\u0686\u0631\u0627\u063a \u0645\u0637\u0627\u0644\u0639\u0647",
              "list": "category-\u0686\u0631\u0627\u063a \u0645\u0637\u0627\u0644\u0639\u0647",
              "position": 6,
              "dimension6": 1,
              "dimension2": 39,
              "dimension9": 4.4,
              "metric6": 33,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-incredible",
              "dimension7": "incredible"
            }, {
              "name": "\u0633\u0627\u0639\u062a \u0645\u0686\u06cc \u0639\u0642\u0631\u0628\u0647 \u0627\u06cc \u0633\u0648\u067e\u0631\u062f\u0631\u0627\u06cc \u0645\u062f\u0644 SYG198UO",
              "id": 2650819,
              "price": 5090000,
              "brand": "\u0633\u0648\u067e\u0631\u062f\u0631\u0627\u06cc",
              "category": "\u0633\u0627\u0639\u062a \u0639\u0642\u0631\u0628\u0647 \u0627\u06cc \u0632\u0646\u0627\u0646\u0647 \u0648 \u0645\u0631\u062f\u0627\u0646\u0647",
              "list": "category-\u0633\u0627\u0639\u062a \u0639\u0642\u0631\u0628\u0647 \u0627\u06cc \u0632\u0646\u0627\u0646\u0647 \u0648 \u0645\u0631\u062f\u0627\u0646\u0647",
              "position": 7,
              "dimension6": 1,
              "dimension2": 42,
              "dimension9": 0,
              "metric6": 0,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-incredible",
              "dimension7": "incredible"
            }, {
              "name": "\u0633\u062a \u0633\u0648\u06cc\u0634\u0631\u062a \u0648 \u0634\u0644\u0648\u0627\u0631 \u067e\u0633\u0631\u0627\u0646\u0647 \u0645\u062f\u0644 SH-5K",
              "id": 3872197,
              "price": 1150000,
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "category": "\u0633\u062a \u0644\u0628\u0627\u0633 \u0631\u0627\u062d\u062a\u06cc \u067e\u0633\u0631\u0627\u0646\u0647",
              "list": "category-\u0633\u062a \u0644\u0628\u0627\u0633 \u0631\u0627\u062d\u062a\u06cc \u067e\u0633\u0631\u0627\u0646\u0647",
              "position": 8,
              "dimension6": 1,
              "dimension2": 32,
              "dimension9": 3.5,
              "metric6": 4,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-incredible",
              "dimension7": "incredible"
            }, {
              "name": "\u062a\u06cc \u0634\u0631\u062a \u0632\u0646\u0627\u0646\u0647 \u0627\u0633\u067e\u06cc\u0648\u0631 \u0645\u062f\u0644 2W03M-01",
              "id": 4583889,
              "price": 890000,
              "brand": "\u0627\u0633\u067e\u06cc\u0648\u0631",
              "category": "\u062a\u06cc \u0634\u0631\u062a \u0648 \u067e\u0648\u0644\u0648\u0634\u0631\u062a \u0632\u0646\u0627\u0646\u0647",
              "list": "category-\u062a\u06cc \u0634\u0631\u062a \u0648 \u067e\u0648\u0644\u0648\u0634\u0631\u062a \u0632\u0646\u0627\u0646\u0647",
              "position": 9,
              "dimension6": 1,
              "dimension2": 53,
              "dimension9": 0,
              "metric6": 0,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-incredible",
              "dimension7": "incredible"
            }, {
              "name": " \u0645\u0627\u0634\u06cc\u0646 \u0628\u0627\u0632\u06cc \u0633\u06af\u0647\u0627\u06cc \u0646\u06af\u0647\u0628\u0627\u0646 \u0645\u062f\u0644 99C  \u0645\u062c\u0645\u0648\u0639\u0647 9 \u0639\u062f\u062f\u06cc",
              "id": 3951143,
              "price": 2993000,
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "category": "\u0645\u0627\u0634\u06cc\u0646",
              "list": "category-\u0645\u0627\u0634\u06cc\u0646",
              "position": 10,
              "dimension6": 1,
              "dimension2": 12,
              "dimension9": 0,
              "metric6": 0,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-incredible",
              "dimension7": "incredible"
            }, {
              "name": "\u0647\u0646\u062f\u0632\u0641\u0631\u06cc \u0628\u0644\u0648\u062a\u0648\u062b \u0631\u06cc\u0645\u06a9\u0633 \u0645\u062f\u0644 RB-S28",
              "id": 3501805,
              "price": 4200000,
              "brand": "\u0631\u06cc\u0645\u06a9\u0633",
              "category": "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc",
              "list": "category-\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc",
              "position": 11,
              "dimension6": 1,
              "dimension2": 31,
              "dimension9": 4,
              "metric6": 2,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-incredible",
              "dimension7": "incredible"
            }, {
              "name": "\u062a\u0644\u0648\u06cc\u0632\u06cc\u0648\u0646 \u06a9\u06cc\u0648\u0644\u062f \u0647\u0648\u0634\u0645\u0646\u062f \u067e\u0627\u0646\u0648\u0631\u0627\u0645\u06cc\u06a9 \u0645\u062f\u0644 PA-50SA3657 \u0633\u0627\u06cc\u0632 50 \u0627\u06cc\u0646\u0686",
              "id": 2759019,
              "price": 99190000,
              "brand": "\u067e\u0627\u0646\u0648\u0631\u0627\u0645\u06cc\u06a9",
              "category": "\u062a\u0644\u0648\u06cc\u0632\u06cc\u0648\u0646",
              "list": "category-\u062a\u0644\u0648\u06cc\u0632\u06cc\u0648\u0646",
              "position": 12,
              "dimension6": 1,
              "dimension2": 7,
              "dimension9": 3.9,
              "metric6": 44,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-incredible",
              "dimension7": "incredible"
            }]
          }
        });
      </script>
      <div class="c-swiper-specials c-swiper-specials--incredible">
        <section class="container container--home" id="sn-carousels-incredible-offer"><a href="/incredible-offers/"
                                                                                         class="c-swiper-specials__title c-swiper-specials__title--incredible"
                                                                                         title="پیشنهاد شگفت‌انگیز"><img
              src="https://www.digikala.com/static/files/b6c724a0.png" alt="پیشنهاد شگفت‌انگیز">
            <div class="o-btn c-swiper-specials__btn">مشاهده همه</div>
          </a>
          <div class="c-swiper c-swiper--products c-swiper--specials">
            <div class="c-box">
              <div class="swiper-container swiper-container-horizontal js-swiper-specials">
                <div class="swiper-wrapper">
                  <div class="swiper-slide" data-carousel="sn-carousels-incredible-offer" data-id="3945007">
                    <li><a href="/product/dkp-3945007/اتو-بخار-کوپکس-مدل-cs-7570" data-id="3945007"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product" title="اتو بخار کوپکس مدل CS-7570">
                          <img alt="اتو بخار کوپکس مدل CS-7570"
                               src="https://dkstatics-public.digikala.com/digikala-products/9bb7afa4d3db0e651b089beb83419dbb9a215c2c_1607436770.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                               class="swiper-lazy swiper-lazy-loaded" loading="lazy"/></div>
                        <div class="c-product-box__title">
                          اتو بخار کوپکس مدل CS-7570

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۱,۴۵۰,۰۰۰</del>
                              <div class="c-price__discount-oval"><span>۳۱٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۹۹۸,۰۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide" data-carousel="sn-carousels-incredible-offer" data-id="4654078">
                    <li><a href="/product/dkp-4654078/کیف-رودوشی-زنانه-برتونیکس-مدل-443-016" data-id="4654078"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="کیف رودوشی زنانه برتونیکس مدل 443"><img alt="کیف رودوشی زنانه برتونیکس مدل 443"
                                                                            src="https://dkstatics-public.digikala.com/digikala-products/282dae330c3a6ddf1a8d523bcb77e24f71c11748_1615296302.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                                                            class="swiper-lazy swiper-lazy-loaded"
                                                                            loading="lazy"/></div>
                        <div class="c-product-box__title">
                          کیف رودوشی زنانه برتونیکس مدل 443

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۴۷۰,۰۰۰</del>
                              <div class="c-price__discount-oval"><span>۴۷٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۲۴۷,۰۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide" data-carousel="sn-carousels-incredible-offer" data-id="3350088">
                    <li><a href="/product/dkp-3350088/کفش-زنانه-مدل-بیتا-کد-7751" data-id="3350088"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product" title="کفش زنانه مدل بیتا کد 7751">
                          <img alt="کفش زنانه مدل بیتا کد 7751"
                               src="https://dkstatics-public.digikala.com/digikala-products/3b4cf590f9a2a70ab4f138ad9a3d54459fdd0bc0_1599829793.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                               class="swiper-lazy swiper-lazy-loaded" loading="lazy"/></div>
                        <div class="c-product-box__title">
                          کفش زنانه مدل بیتا کد 7751

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۱۳۱,۲۰۰</del>
                              <div class="c-price__discount-oval"><span>۲۵٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۹۹,۰۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide" data-carousel="sn-carousels-incredible-offer" data-id="4214771">
                    <li><a href="/product/dkp-4214771/شارژر-همراه-ایکس-او-مدل-pr102-ظرفیت-10000-میلی-آمپر-ساعت"
                           data-id="4214771"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="شارژر همراه ایکس او مدل PR102 ظرفیت 10000 میلی آمپر ساعت"><img
                            alt="شارژر همراه ایکس او مدل PR102 ظرفیت 10000 میلی آمپر ساعت"
                            src="https://dkstatics-public.digikala.com/digikala-products/a54de9a284756532c412e621cf5c15af5557d7ff_1610372987.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                            class="swiper-lazy swiper-lazy-loaded" loading="lazy"/></div>
                        <div class="c-product-box__title">
                          شارژر همراه ایکس او مدل PR102 ظرفیت 10000 میلی آمپر ساعت

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۶۲۳,۰۰۰</del>
                              <div class="c-price__discount-oval"><span>۶۰٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۲۴۹,۰۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide" data-carousel="sn-carousels-incredible-offer" data-id="2540229">
                    <li><a href="/product/dkp-2540229/ساعت-هوشمند-مدل-td28" data-id="2540229"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product" title="ساعت هوشمند مدل TD28"><img
                            alt="ساعت هوشمند مدل TD28"
                            src="https://dkstatics-public.digikala.com/digikala-products/119698091.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                            class="swiper-lazy swiper-lazy-loaded" loading="lazy"/></div>
                        <div class="c-product-box__title">
                          ساعت هوشمند مدل TD28

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۹۳۰,۰۰۰</del>
                              <div class="c-price__discount-oval"><span>۳۶٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۵۹۹,۰۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide" data-carousel="sn-carousels-incredible-offer" data-id="3124551">
                    <li><a href="/product/dkp-3124551/چراغ-مطالعه-وینسیک-مدل-study" data-id="3124551"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="چراغ مطالعه وینسیک مدل STUDY"><img alt="چراغ مطالعه وینسیک مدل STUDY"
                                                                       src="https://dkstatics-public.digikala.com/digikala-products/5801079c14877123bc6548ce1f337088426eb8a1_1595411059.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                                                       class="swiper-lazy swiper-lazy-loaded"
                                                                       loading="lazy"/></div>
                        <div class="c-product-box__title">
                          چراغ مطالعه وینسیک مدل STUDY

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۴۷۵,۰۰۰</del>
                              <div class="c-price__discount-oval"><span>۳۹٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۲۸۹,۰۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide" data-carousel="sn-carousels-incredible-offer" data-id="2650819">
                    <li><a href="/product/dkp-2650819/ساعت-مچی-عقربه-ای-سوپردرای-مدل-syg198uo" data-id="2650819"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="ساعت مچی عقربه ای سوپردرای مدل SYG198UO"><img
                            alt="ساعت مچی عقربه ای سوپردرای مدل SYG198UO"
                            src="https://dkstatics-public.digikala.com/digikala-products/120282463.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                            class="swiper-lazy swiper-lazy-loaded" loading="lazy"/></div>
                        <div class="c-product-box__title">
                          ساعت مچی عقربه ای سوپردرای مدل SYG198UO

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۸۸۰,۰۰۰</del>
                              <div class="c-price__discount-oval"><span>۴۲٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۵۰۹,۰۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide" data-carousel="sn-carousels-incredible-offer" data-id="3872197">
                    <li><a href="/product/dkp-3872197/ست-سویشرت-و-شلوار-پسرانه-مدل-sh-5k" data-id="3872197"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="ست سویشرت و شلوار پسرانه مدل SH-5K"><img alt="ست سویشرت و شلوار پسرانه مدل SH-5K"
                                                                             src="https://dkstatics-public.digikala.com/digikala-products/d3fc05c382dce794c365450225e06efad98d2fb5_1607498600.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                                                             class="swiper-lazy swiper-lazy-loaded"
                                                                             loading="lazy"/></div>
                        <div class="c-product-box__title">
                          ست سویشرت و شلوار پسرانه مدل SH-5K

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۱۷۰,۰۰۰</del>
                              <div class="c-price__discount-oval"><span>۳۲٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۱۱۵,۰۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide" data-carousel="sn-carousels-incredible-offer" data-id="4583889">
                    <li><a href="/product/dkp-4583889/تی-شرت-زنانه-اسپیور-مدل-2w03m-01" data-id="4583889"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="تی شرت زنانه اسپیور مدل 2W03M-01"><img alt="تی شرت زنانه اسپیور مدل 2W03M-01"
                                                                           src="https://dkstatics-public.digikala.com/digikala-products/16fe3b6b13fe6f97d282e8c30d2152878a076764_1614759613.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                                                           class="swiper-lazy swiper-lazy-loaded"
                                                                           loading="lazy"/></div>
                        <div class="c-product-box__title">
                          تی شرت زنانه اسپیور مدل 2W03M-01

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۱۸۹,۰۰۰</del>
                              <div class="c-price__discount-oval"><span>۵۳٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۸۹,۰۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide" data-carousel="sn-carousels-incredible-offer" data-id="3951143">
                    <li><a href="/product/dkp-3951143/ماشین-بازی-سگهای-نگهبان-مدل-99c-مجموعه-9-عددی" data-id="3951143"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title=" ماشین بازی سگهای نگهبان مدل 99C  مجموعه 9 عددی"><img
                            alt=" ماشین بازی سگهای نگهبان مدل 99C  مجموعه 9 عددی"
                            src="https://dkstatics-public.digikala.com/digikala-products/ea2aadce02e12f135e4bcb66d3976453c2f16195_1607503601.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                            class="swiper-lazy swiper-lazy-loaded" loading="lazy"/></div>
                        <div class="c-product-box__title">
                          ماشین بازی سگهای نگهبان مدل 99C مجموعه 9 عددی

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۳۴۰,۲۰۰</del>
                              <div class="c-price__discount-oval"><span>۱۲٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۲۹۹,۳۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide" data-carousel="sn-carousels-incredible-offer" data-id="3501805">
                    <li><a href="/product/dkp-3501805/هندزفری-بلوتوث-ریمکس-مدل-rb-s28" data-id="3501805"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="هندزفری بلوتوث ریمکس مدل RB-S28"><img alt="هندزفری بلوتوث ریمکس مدل RB-S28"
                                                                          src="https://dkstatics-public.digikala.com/digikala-products/ec828c92dfc151b9665d57913586a1996409ce8e_1601839150.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                                                          class="swiper-lazy swiper-lazy-loaded"
                                                                          loading="lazy"/></div>
                        <div class="c-product-box__title">
                          هندزفری بلوتوث ریمکس مدل RB-S28

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۶۱۰,۰۰۰</del>
                              <div class="c-price__discount-oval"><span>۳۱٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۴۲۰,۰۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide" data-carousel="sn-carousels-incredible-offer" data-id="2759019">
                    <li><a href="/product/dkp-2759019/تلویزیون-کیولد-هوشمند-پانورامیک-مدل-pa-50sa3657-سایز-50-اینچ"
                           data-id="2759019"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="تلویزیون کیولد هوشمند پانورامیک مدل PA-50SA3657 سایز 50 اینچ"><img
                            alt="تلویزیون کیولد هوشمند پانورامیک مدل PA-50SA3657 سایز 50 اینچ"
                            src="https://dkstatics-public.digikala.com/digikala-products/120824915.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                            class="swiper-lazy swiper-lazy-loaded" loading="lazy"/></div>
                        <div class="c-product-box__title">
                          تلویزیون کیولد هوشمند پانورامیک مدل PA-50SA3657 سایز 50 اینچ

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۱۰,۶۷۰,۰۰۰</del>
                              <div class="c-price__discount-oval"><span>۷٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۹,۹۱۹,۰۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide c-swiper__show-more-cart--auto-height"><a href="/incredible-offers/"
                                                                                     class="c-swiper__show-more-cart"><span></span>
                      <p>
                        مشاهده همه
                      </p></a></div>
                </div>
                <div class="swiper-button-prev js-swiper-button-prev"></div>
                <div class="swiper-button-next js-swiper-button-next"></div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <article class="container container--home">
        <div class="o-page">
          <div class="o-page__row"></div>
          <aside class="c-adplacement c-adplacement__container-row">
            @if($bannerGroup1->images()->exists())
              @foreach($bannerGroup1->images as $image)
                <a href="{{ ($image->media()->exists())? $image->link : '' }}" class="c-adplacement__item js-banner-impression-adro" data-observed="1" target="_blank" data-is-trackable="" title="{{ ($image->media()->exists())? $image->alt : '' }}">
                  <div class="c-adplacement__sponsored_box">
                    <img src="{{ $site_url . '/' . $image->media->first()->path . '/'. $image->media->first()->name }}" alt="{{ ($image->media()->exists())? $image->alt : '' }}" loading="lazy">
                  </div>
                </a>
              @endforeach
            @endif
          </aside>
        </div>
      </article>
      <script>
        var carouselDataTracker = {
          "carouselPosition": "FRESH-INCREDIBLE-OFFER",
          "id": "sn-carousels-fresh-incredible-offer",
          "title": "\u067e\u06cc\u0634\u0646\u0647\u0627\u062f \u0634\u06af\u0641\u062a \u0627\u0646\u06af\u06cc\u0632 \u0633\u0648\u067e\u0631\u0645\u0627\u0631\u06a9\u062a\u06cc",
          "title_en": "fresh incredible offer",
          "products": [{
            "id": 858014,
            "name": "\u067e\u0648\u062f\u0631 \u06a9\u06cc\u06a9 \u0631\u0648\u06cc\u0627\u0644 \u0686\u0627\u06a9\u0644\u062a \u0631\u0634\u062f \u0645\u0642\u062f\u0627\u0631 580 \u06af\u0631\u0645",
            "price": 249000,
            "category": "\u063a\u0644\u0627\u062a",
            "brand": "Roshd",
            "position": 1,
            "status": "marketable"
          }, {
            "id": 303828,
            "name": "\u0634\u0627\u0645\u067e\u0648 \u0628\u062f\u0646 \u06a9\u0631\u0645\u06cc \u0627\u06a9\u062a\u06cc\u0648 \u0645\u062f\u0644 Vanilla And Honey \u0645\u0642\u062f\u0627\u0631 400 \u06af\u0631\u0645",
            "price": 189000,
            "category": "\u0634\u0627\u0645\u067e\u0648\u06cc \u0628\u062f\u0646",
            "brand": "\u0627\u06a9\u062a\u06cc\u0648",
            "position": 2,
            "status": "marketable"
          }, {
            "id": 873438,
            "name": "\u0633\u0648\u0633\u06cc\u0633 \u0647\u0627\u062a \u062f\u0627\u06af \u0637\u0644\u0627\u06cc\u06cc 80% \u0645\u06cc\u06a9\u0627\u0626\u06cc\u0644\u06cc\u0627\u0646 \u0645\u0642\u062f\u0627\u0631 600 \u06af\u0631\u0645",
            "price": 590000,
            "category": "Sausages",
            "brand": "\u0645\u06cc\u06a9\u0627\u0626\u06cc\u0644\u06cc\u0627\u0646",
            "position": 3,
            "status": "marketable"
          }, {
            "id": 841410,
            "name": "\u0641\u0631\u0622\u0648\u0631\u062f\u0647 \u06a9\u0627\u06a9\u0627\u0626\u0648\u06cc\u06cc \u0645\u063a\u0632 \u062f\u0627\u0631 \u0634\u06cc\u0631\u06cc \u0628\u0627\u0631\u0627\u06a9\u0627 \u0645\u0642\u062f\u0627\u0631 450 \u06af\u0631\u0645",
            "price": 455000,
            "category": "\u0634\u06a9\u0644\u0627\u062a\u060c \u062a\u0627\u0641\u06cc \u0648 \u0622\u0628\u0646\u0628\u0627\u062a",
            "brand": "\u0628\u0627\u0631\u0627\u06a9\u0627",
            "position": 4,
            "status": "marketable"
          }, {
            "id": 1481847,
            "name": "\u0633\u0633 \u06af\u0648\u062c\u0647 \u0641\u0631\u0646\u06af\u06cc \u0628\u06cc\u0698\u0646 \u0648\u0632\u0646 550 \u06af\u0631\u0645",
            "price": 95000,
            "category": "\u0633\u0633",
            "brand": "Bijan",
            "position": 5,
            "status": "marketable"
          }, {
            "id": 3779682,
            "name": "\u067e\u0648\u062f\u0631 \u0645\u0627\u0634\u06cc\u0646\u06cc \u067e\u0631\u0633\u06cc\u0644 Deep Clean \u0628\u0627 \u0631\u0627\u06cc\u062d\u0647 \u0644\u0648\u0646\u062f\u0631 \u0645\u0642\u062f\u0627\u0631 4.2 \u06a9\u06cc\u0644\u0648\u06af\u0631\u0645",
            "price": 861000,
            "category": "\u0634\u0648\u06cc\u0646\u062f\u0647 \u0631\u062e\u062a",
            "brand": "Persil",
            "position": 6,
            "status": "marketable"
          }, {
            "id": 2957841,
            "name": "\u062f\u0633\u062a\u0645\u0627\u0644 \u06a9\u0627\u063a\u0630\u06cc 100 \u0628\u0631\u06af \u0648\u06cc\u0633\u0644 \u06a9\u062f 001 \u0628\u0633\u062a\u0647 10 \u0639\u062f\u062f\u06cc",
            "price": 409000,
            "category": "\u062f\u0633\u062a\u0645\u0627\u0644 \u06a9\u0627\u063a\u0630\u06cc",
            "brand": "Whistle",
            "position": 7,
            "status": "marketable"
          }, {
            "id": 2324736,
            "name": "\u062f\u0633\u062a\u0645\u0627\u0644 \u062d\u0648\u0644\u0647 \u0627\u06cc \u0633\u0627\u062d\u0644 \u0645\u062f\u0644 001 \u0628\u0633\u062a\u0647 4 \u0639\u062f\u062f\u06cc",
            "price": 288000,
            "category": "\u062f\u0633\u062a\u0645\u0627\u0644 \u06a9\u0627\u063a\u0630\u06cc",
            "brand": "\u0633\u0627\u062d\u0644",
            "position": 8,
            "status": "marketable"
          }, {
            "id": 770239,
            "name": "\u0633\u0628\u0632\u06cc \u0642\u0648\u0631\u0645\u0647 \u0633\u0631\u062e \u0634\u062f\u0647 \u0645\u0646\u062c\u0645\u062f \u0646\u0648\u0628\u0631 \u0633\u0628\u0632 \u0645\u0642\u062f\u0627\u0631 400 \u06af\u0631\u0645",
            "price": 189000,
            "category": "Frozen food",
            "brand": "\u0646\u0648\u0628\u0631 \u0633\u0628\u0632",
            "position": 9,
            "status": "marketable"
          }, {
            "id": 1817056,
            "name": "\u067e\u0648\u0634\u06a9 \u0628\u0627\u0631\u0644\u06cc \u0633\u0627\u06cc\u0632 5 \u0628\u0633\u062a\u0647 34 \u0639\u062f\u062f\u06cc \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u062f\u0633\u062a\u0645\u0627\u0644 \u0645\u0631\u0637\u0648\u0628",
            "price": 1052000,
            "category": "\u067e\u0648\u0634\u06a9 \u06a9\u0648\u062f\u06a9 \u0648 \u0646\u0648\u0632\u0627\u062f",
            "brand": "\u0628\u0627\u0631\u0644\u06cc",
            "position": 10,
            "status": "marketable"
          }, {
            "id": 2522021,
            "name": "\u06a9\u0631\u0648\u0633\u0627\u0646 \u06a9\u0627\u06a9\u0627\u0626\u0648 \u067e\u0686 \u067e\u0686  \u0628\u0633\u062a\u0647 6 \u0639\u062f\u062f\u06cc",
            "price": 195000,
            "category": "\u06a9\u06cc\u06a9 \u0648 \u06a9\u0644\u0648\u0686\u0647",
            "brand": "Pech Pech",
            "position": 11,
            "status": "marketable"
          }, {
            "id": 1916402,
            "name": "\u067e\u0646\u06cc\u0631 \u067e\u06cc\u062a\u0632\u0627 \u0645\u0648\u0632\u0627\u0631\u0644\u0627 202 \u0648\u0632\u0646 500 \u06af\u0631\u0645",
            "price": 300000,
            "category": "Pizza Cheese",
            "brand": "202",
            "position": 12,
            "status": "marketable"
          }, {
            "id": 2951236,
            "name": "\u0647\u0627\u062a\u06cc \u0646\u0648\u062f\u0644 \u0628\u0627 \u0639\u0635\u0627\u0631\u0647 \u06af\u0648\u0634\u062a \u0647\u0627\u062a\u06cc \u06a9\u0627\u0631\u0627 - 77 \u06af\u0631\u0645 \u0628\u0633\u062a\u0647 5 \u0639\u062f\u062f\u06cc",
            "price": 189000,
            "category": "\u063a\u0630\u0627\u06cc \u0622\u0645\u0627\u062f\u0647 \u0648 \u0646\u06cc\u0645\u0647 \u0622\u0645\u0627\u062f\u0647",
            "brand": "Hotty Kara",
            "position": 13,
            "status": "marketable"
          }, {
            "id": 876594,
            "name": "\u06a9\u0628\u0627\u0628 \u0644\u0642\u0645\u0647 70 \u062f\u0631\u0635\u062f \u0645\u0647\u06cc\u0627 \u067e\u0631\u0648\u062a\u0626\u06cc\u0646 - 450 \u06af\u0631\u0645",
            "price": 309900,
            "category": "Frozen food",
            "brand": "Mahya Protein",
            "position": 14,
            "status": "marketable"
          }, {
            "id": 2119346,
            "name": "\u0645\u0627\u06cc\u0639 \u0633\u0641\u06cc\u062f \u06a9\u0646\u0646\u062f\u0647 \u0633\u0637\u0648\u062d \u0646\u06cc\u0627\u0631\u0648 \u0645\u062f\u0644 \u0645\u0639\u0637\u0631 \u062d\u062c\u0645 4000 \u0645\u06cc\u0644\u06cc \u0644\u06cc\u062a\u0631",
            "price": 149000,
            "category": "\u062a\u0645\u06cc\u0632\u06a9\u0646\u0646\u062f\u0647 \u0633\u0637\u0648\u062d",
            "brand": "Niaro",
            "position": 15,
            "status": "marketable"
          }, {
            "id": 2192285,
            "name": "\u0645\u0627\u06cc\u0639 \u062f\u0633\u062a\u0634\u0648\u06cc\u06cc \u062f\u0627\u0648 \u0645\u062f\u0644 Deeply \u062d\u062c\u0645 500 \u0645\u06cc\u0644\u06cc \u0644\u06cc\u062a\u0631",
            "price": 371000,
            "category": "\u0645\u0627\u06cc\u0639 \u062f\u0633\u062a\u0634\u0648\u06cc\u06cc",
            "brand": "Dove",
            "position": 16,
            "status": "marketable"
          }, {
            "id": 1907805,
            "name": "\u0686\u0627\u06cc \u0633\u06cc\u0627\u0647 \u06af\u0644\u0633\u062a\u0627\u0646 \u0645\u062f\u0644 \u0645\u0645\u062a\u0627\u0632 \u0647\u0646\u062f\u0648\u0633\u062a\u0627\u0646 \u0645\u0642\u062f\u0627\u0631 225 \u06af\u0631\u0645",
            "price": 499000,
            "category": "Tea",
            "brand": "Golestan",
            "position": 17,
            "status": "marketable"
          }, {
            "id": 1102745,
            "name": "\u0645\u0627\u06cc\u0639 \u062f\u0633\u062a\u0634\u0648\u06cc\u06cc \u0627\u06a9\u062a\u06cc\u0648 \u0645\u062f\u0644 Orchid &amp; Cinnamon \u0645\u0642\u062f\u0627\u0631 3.75 \u06a9\u06cc\u0644\u0648\u06af\u0631\u0645",
            "price": 535000,
            "category": "\u0645\u0627\u06cc\u0639 \u062f\u0633\u062a\u0634\u0648\u06cc\u06cc",
            "brand": "\u0627\u06a9\u062a\u06cc\u0648",
            "position": 18,
            "status": "marketable"
          }, {
            "id": 1792500,
            "name": "\u0632\u06cc\u062a\u0648\u0646 \u0634\u0648\u0631 \u0628\u0627 \u0647\u0633\u062a\u0647 \u062f\u0631\u0634\u062a \u0628\u06cc\u0698\u0646 \u0648\u0632\u0646 680 \u06af\u0631\u0645",
            "price": 239000,
            "category": "Salted and Marzipan",
            "brand": "Bijan",
            "position": 19,
            "status": "marketable"
          }, {
            "id": 1785409,
            "name": "\u0645\u0627\u0633\u062a \u0686\u06a9\u06cc\u062f\u0647 \u0645\u0648\u0633\u06cc\u0631 \u0647\u0631\u0627\u0632 \u0648\u0632\u0646 900 \u06af\u0631\u0645",
            "price": 215000,
            "category": "Yogurt",
            "brand": "\u0647\u0631\u0627\u0632",
            "position": 20,
            "status": "marketable"
          }]
        };
        if (carouselDataTracker) {
          if (!window.carouselData)
            window.carouselData = [carouselDataTracker];
          else
            window.carouselData.push(carouselDataTracker);
        }
      </script>
      <script>
        window.dataLayer.push({
          "event": "eec.productImpression", "ecommerce": {
            "currencyCode": "EUR",
            "impressions": [{
              "name": "\u067e\u0648\u062f\u0631 \u06a9\u06cc\u06a9 \u0631\u0648\u06cc\u0627\u0644 \u0686\u0627\u06a9\u0644\u062a \u0631\u0634\u062f \u0645\u0642\u062f\u0627\u0631 580 \u06af\u0631\u0645",
              "id": 858014,
              "price": 249000,
              "brand": "\u0631\u0634\u062f",
              "category": "\u063a\u0644\u0627\u062a",
              "list": "category-\u063a\u0644\u0627\u062a",
              "position": 1,
              "dimension6": 1,
              "dimension2": 38,
              "dimension9": 4.5,
              "metric6": 610,
              "dimension11": 1,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "top-fresh-incredibles",
              "dimension7": "incredible"
            }, {
              "name": "\u0634\u0627\u0645\u067e\u0648 \u0628\u062f\u0646 \u06a9\u0631\u0645\u06cc \u0627\u06a9\u062a\u06cc\u0648 \u0645\u062f\u0644 Vanilla And Honey \u0645\u0642\u062f\u0627\u0631 400 \u06af\u0631\u0645",
              "id": 303828,
              "price": 189000,
              "brand": "\u0627\u06a9\u062a\u06cc\u0648",
              "category": "\u0634\u0627\u0645\u067e\u0648\u06cc \u0628\u062f\u0646",
              "list": "category-\u0634\u0627\u0645\u067e\u0648\u06cc \u0628\u062f\u0646",
              "position": 2,
              "dimension6": 1,
              "dimension2": 17,
              "dimension9": 4.3,
              "metric6": 1546,
              "dimension11": 1,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "top-fresh-incredibles",
              "dimension7": "incredible"
            }, {
              "name": "\u0633\u0648\u0633\u06cc\u0633 \u0647\u0627\u062a \u062f\u0627\u06af \u0637\u0644\u0627\u06cc\u06cc 80% \u0645\u06cc\u06a9\u0627\u0626\u06cc\u0644\u06cc\u0627\u0646 \u0645\u0642\u062f\u0627\u0631 600 \u06af\u0631\u0645",
              "id": 873438,
              "price": 590000,
              "brand": "\u0645\u06cc\u06a9\u0627\u0626\u06cc\u0644\u06cc\u0627\u0646",
              "category": "\u0633\u0648\u0633\u06cc\u0633 \u0648 \u06a9\u0627\u0644\u0628\u0627\u0633",
              "list": "category-\u0633\u0648\u0633\u06cc\u0633 \u0648 \u06a9\u0627\u0644\u0628\u0627\u0633",
              "position": 3,
              "dimension6": 1,
              "dimension2": 43,
              "dimension9": 4.2,
              "metric6": 198,
              "dimension11": 1,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "top-fresh-incredibles",
              "dimension7": "incredible"
            }, {
              "name": "\u0641\u0631\u0622\u0648\u0631\u062f\u0647 \u06a9\u0627\u06a9\u0627\u0626\u0648\u06cc\u06cc \u0645\u063a\u0632 \u062f\u0627\u0631 \u0634\u06cc\u0631\u06cc \u0628\u0627\u0631\u0627\u06a9\u0627 \u0645\u0642\u062f\u0627\u0631 450 \u06af\u0631\u0645",
              "id": 841410,
              "price": 455000,
              "brand": "\u0628\u0627\u0631\u0627\u06a9\u0627",
              "category": "\u0634\u06a9\u0644\u0627\u062a\u060c \u062a\u0627\u0641\u06cc \u0648 \u0622\u0628\u0646\u0628\u0627\u062a",
              "list": "category-\u0634\u06a9\u0644\u0627\u062a\u060c \u062a\u0627\u0641\u06cc \u0648 \u0622\u0628\u0646\u0628\u0627\u062a",
              "position": 4,
              "dimension6": 1,
              "dimension2": 27,
              "dimension9": 4.4,
              "metric6": 459,
              "dimension11": 1,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "top-fresh-incredibles",
              "dimension7": "incredible"
            }, {
              "name": "\u0633\u0633 \u06af\u0648\u062c\u0647 \u0641\u0631\u0646\u06af\u06cc \u0628\u06cc\u0698\u0646 \u0648\u0632\u0646 550 \u06af\u0631\u0645",
              "id": 1481847,
              "price": 95000,
              "brand": "\u0628\u06cc\u0698\u0646",
              "category": "\u0633\u0633",
              "list": "category-\u0633\u0633",
              "position": 5,
              "dimension6": 1,
              "dimension2": 30,
              "dimension9": 4.4,
              "metric6": 4354,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "top-fresh-incredibles",
              "dimension7": "incredible"
            }, {
              "name": "\u067e\u0648\u062f\u0631 \u0645\u0627\u0634\u06cc\u0646\u06cc \u067e\u0631\u0633\u06cc\u0644 Deep Clean \u0628\u0627 \u0631\u0627\u06cc\u062d\u0647 \u0644\u0648\u0646\u062f\u0631 \u0645\u0642\u062f\u0627\u0631 4.2 \u06a9\u06cc\u0644\u0648\u06af\u0631\u0645",
              "id": 3779682,
              "price": 861000,
              "brand": "\u067e\u0631\u0633\u06cc\u0644",
              "category": "\u0634\u0648\u06cc\u0646\u062f\u0647 \u0644\u0628\u0627\u0633",
              "list": "category-\u0634\u0648\u06cc\u0646\u062f\u0647 \u0644\u0628\u0627\u0633",
              "position": 6,
              "dimension6": 1,
              "dimension2": 15,
              "dimension9": 4.4,
              "metric6": 264,
              "dimension11": 1,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "top-fresh-incredibles",
              "dimension7": "incredible"
            }, {
              "name": "\u062f\u0633\u062a\u0645\u0627\u0644 \u06a9\u0627\u063a\u0630\u06cc 100 \u0628\u0631\u06af \u0648\u06cc\u0633\u0644 \u06a9\u062f 001 \u0628\u0633\u062a\u0647 10 \u0639\u062f\u062f\u06cc",
              "id": 2957841,
              "price": 409000,
              "brand": "\u0648\u06cc\u0633\u0644",
              "category": "\u062f\u0633\u062a\u0645\u0627\u0644 \u06a9\u0627\u063a\u0630\u06cc",
              "list": "category-\u062f\u0633\u062a\u0645\u0627\u0644 \u06a9\u0627\u063a\u0630\u06cc",
              "position": 7,
              "dimension6": 1,
              "dimension2": 45,
              "dimension9": 3.9,
              "metric6": 661,
              "dimension11": 1,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "top-fresh-incredibles",
              "dimension7": "incredible"
            }, {
              "name": "\u062f\u0633\u062a\u0645\u0627\u0644 \u062d\u0648\u0644\u0647 \u0627\u06cc \u0633\u0627\u062d\u0644 \u0645\u062f\u0644 001 \u0628\u0633\u062a\u0647 4 \u0639\u062f\u062f\u06cc",
              "id": 2324736,
              "price": 288000,
              "brand": "\u0633\u0627\u062d\u0644",
              "category": "\u062f\u0633\u062a\u0645\u0627\u0644 \u06a9\u0627\u063a\u0630\u06cc",
              "list": "category-\u062f\u0633\u062a\u0645\u0627\u0644 \u06a9\u0627\u063a\u0630\u06cc",
              "position": 8,
              "dimension6": 1,
              "dimension2": 35,
              "dimension9": 3.9,
              "metric6": 1167,
              "dimension11": 1,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "top-fresh-incredibles",
              "dimension7": "incredible"
            }, {
              "name": "\u0633\u0628\u0632\u06cc \u0642\u0648\u0631\u0645\u0647 \u0633\u0631\u062e \u0634\u062f\u0647 \u0645\u0646\u062c\u0645\u062f \u0646\u0648\u0628\u0631 \u0633\u0628\u0632 \u0645\u0642\u062f\u0627\u0631 400 \u06af\u0631\u0645",
              "id": 770239,
              "price": 189000,
              "brand": "\u0646\u0648\u0628\u0631 \u0633\u0628\u0632",
              "category": "\u0641\u0631\u0622\u0648\u0631\u062f\u0647\u200c\u0647\u0627\u06cc \u0645\u0646\u062c\u0645\u062f \u0648 \u06cc\u062e\u0686\u0627\u0644\u06cc",
              "list": "category-\u0641\u0631\u0622\u0648\u0631\u062f\u0647\u200c\u0647\u0627\u06cc \u0645\u0646\u062c\u0645\u062f \u0648 \u06cc\u062e\u0686\u0627\u0644\u06cc",
              "position": 9,
              "dimension6": 1,
              "dimension2": 45,
              "dimension9": 4.3,
              "metric6": 698,
              "dimension11": 1,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "top-fresh-incredibles",
              "dimension7": "incredible"
            }, {
              "name": "\u067e\u0648\u0634\u06a9 \u0628\u0627\u0631\u0644\u06cc \u0633\u0627\u06cc\u0632 5 \u0628\u0633\u062a\u0647 34 \u0639\u062f\u062f\u06cc \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u062f\u0633\u062a\u0645\u0627\u0644 \u0645\u0631\u0637\u0648\u0628",
              "id": 1817056,
              "price": 1052000,
              "brand": "\u0628\u0627\u0631\u0644\u06cc",
              "category": "\u067e\u0648\u0634\u06a9 \u06a9\u0648\u062f\u06a9 \u0648 \u0646\u0648\u0632\u0627\u062f",
              "list": "category-\u067e\u0648\u0634\u06a9 \u06a9\u0648\u062f\u06a9 \u0648 \u0646\u0648\u0632\u0627\u062f",
              "position": 10,
              "dimension6": 1,
              "dimension2": 22,
              "dimension9": 4.4,
              "metric6": 1644,
              "dimension11": 1,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "top-fresh-incredibles",
              "dimension7": "incredible"
            }, {
              "name": "\u06a9\u0631\u0648\u0633\u0627\u0646 \u06a9\u0627\u06a9\u0627\u0626\u0648 \u067e\u0686 \u067e\u0686  \u0628\u0633\u062a\u0647 6 \u0639\u062f\u062f\u06cc",
              "id": 2522021,
              "price": 195000,
              "brand": "\u067e\u0686 \u067e\u0686",
              "category": "\u06a9\u06cc\u06a9 \u0648 \u06a9\u0644\u0648\u0686\u0647",
              "list": "category-\u06a9\u06cc\u06a9 \u0648 \u06a9\u0644\u0648\u0686\u0647",
              "position": 11,
              "dimension6": 1,
              "dimension2": 30,
              "dimension9": 4.5,
              "metric6": 3191,
              "dimension11": 1,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "top-fresh-incredibles",
              "dimension7": "incredible"
            }, {
              "name": "\u067e\u0646\u06cc\u0631 \u067e\u06cc\u062a\u0632\u0627 \u0645\u0648\u0632\u0627\u0631\u0644\u0627 202 \u0648\u0632\u0646 500 \u06af\u0631\u0645",
              "id": 1916402,
              "price": 300000,
              "brand": "202",
              "category": "\u067e\u0646\u06cc\u0631",
              "list": "category-\u067e\u0646\u06cc\u0631",
              "position": 12,
              "dimension6": 1,
              "dimension2": 38,
              "dimension9": 4.4,
              "metric6": 480,
              "dimension11": 1,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "top-fresh-incredibles",
              "dimension7": "incredible"
            }, {
              "name": "\u0647\u0627\u062a\u06cc \u0646\u0648\u062f\u0644 \u0628\u0627 \u0639\u0635\u0627\u0631\u0647 \u06af\u0648\u0634\u062a \u0647\u0627\u062a\u06cc \u06a9\u0627\u0631\u0627 - 77 \u06af\u0631\u0645 \u0628\u0633\u062a\u0647 5 \u0639\u062f\u062f\u06cc",
              "id": 2951236,
              "price": 189000,
              "brand": "\u0647\u0627\u062a\u06cc \u06a9\u0627\u0631\u0627",
              "category": "\u063a\u0630\u0627\u06cc \u0622\u0645\u0627\u062f\u0647 \u0648 \u0646\u06cc\u0645\u0647 \u0622\u0645\u0627\u062f\u0647",
              "list": "category-\u063a\u0630\u0627\u06cc \u0622\u0645\u0627\u062f\u0647 \u0648 \u0646\u06cc\u0645\u0647 \u0622\u0645\u0627\u062f\u0647",
              "position": 13,
              "dimension6": 1,
              "dimension2": 37,
              "dimension9": 4.3,
              "metric6": 647,
              "dimension11": 1,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "top-fresh-incredibles",
              "dimension7": "incredible"
            }, {
              "name": "\u06a9\u0628\u0627\u0628 \u0644\u0642\u0645\u0647 70 \u062f\u0631\u0635\u062f \u0645\u0647\u06cc\u0627 \u067e\u0631\u0648\u062a\u0626\u06cc\u0646 - 450 \u06af\u0631\u0645",
              "id": 876594,
              "price": 309900,
              "brand": "\u0645\u0647\u06cc\u0627 \u067e\u0631\u0648\u062a\u0626\u06cc\u0646",
              "category": "\u0641\u0631\u0622\u0648\u0631\u062f\u0647\u200c\u0647\u0627\u06cc \u0645\u0646\u062c\u0645\u062f \u0648 \u06cc\u062e\u0686\u0627\u0644\u06cc",
              "list": "category-\u0641\u0631\u0622\u0648\u0631\u062f\u0647\u200c\u0647\u0627\u06cc \u0645\u0646\u062c\u0645\u062f \u0648 \u06cc\u062e\u0686\u0627\u0644\u06cc",
              "position": 14,
              "dimension6": 1,
              "dimension2": 35,
              "dimension9": 4.2,
              "metric6": 991,
              "dimension11": 1,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "top-fresh-incredibles",
              "dimension7": "incredible"
            }, {
              "name": "\u0645\u0627\u06cc\u0639 \u0633\u0641\u06cc\u062f \u06a9\u0646\u0646\u062f\u0647 \u0633\u0637\u0648\u062d \u0646\u06cc\u0627\u0631\u0648 \u0645\u062f\u0644 \u0645\u0639\u0637\u0631 \u062d\u062c\u0645 4000 \u0645\u06cc\u0644\u06cc \u0644\u06cc\u062a\u0631",
              "id": 2119346,
              "price": 149000,
              "brand": "\u0646\u06cc\u0627\u0631\u0648",
              "category": "\u0634\u0648\u06cc\u0646\u062f\u0647 \u0633\u0637\u0648\u062d",
              "list": "category-\u0634\u0648\u06cc\u0646\u062f\u0647 \u0633\u0637\u0648\u062d",
              "position": 15,
              "dimension6": 1,
              "dimension2": 40,
              "dimension9": 4.3,
              "metric6": 489,
              "dimension11": 1,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "top-fresh-incredibles",
              "dimension7": "incredible"
            }, {
              "name": "\u0645\u0627\u06cc\u0639 \u062f\u0633\u062a\u0634\u0648\u06cc\u06cc \u062f\u0627\u0648 \u0645\u062f\u0644 Deeply \u062d\u062c\u0645 500 \u0645\u06cc\u0644\u06cc \u0644\u06cc\u062a\u0631",
              "id": 2192285,
              "price": 371000,
              "brand": "\u062f\u0627\u0648",
              "category": "\u0645\u0627\u06cc\u0639 \u062f\u0633\u062a\u0634\u0648\u06cc\u06cc",
              "list": "category-\u0645\u0627\u06cc\u0639 \u062f\u0633\u062a\u0634\u0648\u06cc\u06cc",
              "position": 16,
              "dimension6": 1,
              "dimension2": 15,
              "dimension9": 4.3,
              "metric6": 432,
              "dimension11": 1,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "top-fresh-incredibles",
              "dimension7": "incredible"
            }, {
              "name": "\u0686\u0627\u06cc \u0633\u06cc\u0627\u0647 \u06af\u0644\u0633\u062a\u0627\u0646 \u0645\u062f\u0644 \u0645\u0645\u062a\u0627\u0632 \u0647\u0646\u062f\u0648\u0633\u062a\u0627\u0646 \u0645\u0642\u062f\u0627\u0631 225 \u06af\u0631\u0645",
              "id": 1907805,
              "price": 499000,
              "brand": "\u06af\u0644\u0633\u062a\u0627\u0646",
              "category": "\u0686\u0627\u06cc",
              "list": "category-\u0686\u0627\u06cc",
              "position": 17,
              "dimension6": 1,
              "dimension2": 18,
              "dimension9": 4.3,
              "metric6": 290,
              "dimension11": 1,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "top-fresh-incredibles",
              "dimension7": "incredible"
            }, {
              "name": "\u0645\u0627\u06cc\u0639 \u062f\u0633\u062a\u0634\u0648\u06cc\u06cc \u0627\u06a9\u062a\u06cc\u0648 \u0645\u062f\u0644 Orchid &amp; Cinnamon \u0645\u0642\u062f\u0627\u0631 3.75 \u06a9\u06cc\u0644\u0648\u06af\u0631\u0645",
              "id": 1102745,
              "price": 535000,
              "brand": "\u0627\u06a9\u062a\u06cc\u0648",
              "category": "\u0645\u0627\u06cc\u0639 \u062f\u0633\u062a\u0634\u0648\u06cc\u06cc",
              "list": "category-\u0645\u0627\u06cc\u0639 \u062f\u0633\u062a\u0634\u0648\u06cc\u06cc",
              "position": 18,
              "dimension6": 1,
              "dimension2": 21,
              "dimension9": 4.3,
              "metric6": 1888,
              "dimension11": 1,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "top-fresh-incredibles",
              "dimension7": "incredible"
            }, {
              "name": "\u0632\u06cc\u062a\u0648\u0646 \u0634\u0648\u0631 \u0628\u0627 \u0647\u0633\u062a\u0647 \u062f\u0631\u0634\u062a \u0628\u06cc\u0698\u0646 \u0648\u0632\u0646 680 \u06af\u0631\u0645",
              "id": 1792500,
              "price": 239000,
              "brand": "\u0628\u06cc\u0698\u0646",
              "category": "\u062e\u06cc\u0627\u0631\u0634\u0648\u0631 \u0648 \u062a\u0631\u0634\u06cc\u062c\u0627\u062a",
              "list": "category-\u062e\u06cc\u0627\u0631\u0634\u0648\u0631 \u0648 \u062a\u0631\u0634\u06cc\u062c\u0627\u062a",
              "position": 19,
              "dimension6": 1,
              "dimension2": 34,
              "dimension9": 4.3,
              "metric6": 1406,
              "dimension11": 1,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "top-fresh-incredibles",
              "dimension7": "incredible"
            }, {
              "name": "\u0645\u0627\u0633\u062a \u0686\u06a9\u06cc\u062f\u0647 \u0645\u0648\u0633\u06cc\u0631 \u0647\u0631\u0627\u0632 \u0648\u0632\u0646 900 \u06af\u0631\u0645",
              "id": 1785409,
              "price": 215000,
              "brand": "\u0647\u0631\u0627\u0632",
              "category": "\u0645\u0627\u0633\u062a",
              "list": "category-\u0645\u0627\u0633\u062a",
              "position": 20,
              "dimension6": 1,
              "dimension2": 28,
              "dimension9": 4.5,
              "metric6": 1101,
              "dimension11": 1,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "top-fresh-incredibles",
              "dimension7": "incredible"
            }]
          }
        });
      </script>
      <div class="c-swiper-specials c-swiper-specials--fresh">
        <section class="container container--home" id="sn-carousels-fresh-incredible-offer"><a href="/fresh-offers/"
                                                                                               class="c-swiper-specials__title c-swiper-specials__title--fresh"
                                                                                               title="شگفت‌انگیز سوپرمارکتی"><img
              src="https://www.digikala.com/static/files/93723234.png" alt="شگفت‌انگیز سوپرمارکتی">
            <div class="o-btn c-swiper-specials__btn">مشاهده همه</div>
          </a>
          <div class="c-swiper c-swiper--products c-swiper--specials">
            <div class="c-box">
              <div class="swiper-container swiper-container-horizontal js-swiper-specials">
                <div class="swiper-wrapper">
                  <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="858014">
                    <li><a href="/product/dkp-858014/پودر-کیک-رویال-چاکلت-رشد-مقدار-580-گرم" data-id="858014"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="پودر کیک رویال چاکلت رشد مقدار 580 گرم"><img
                            alt="پودر کیک رویال چاکلت رشد مقدار 580 گرم"
                            src="https://dkstatics-public.digikala.com/digikala-products/30d90c4fcfe47e9cc61ff7d5509c99572ae5c0d9_1615622345.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                            class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                        loading="lazy"
                                                                                        src="https://www.digikala.com/static/files/31a78819.svg"/>
                        </div>
                        <div class="c-product-box__title">
                          پودر کیک رویال چاکلت رشد مقدار 580 گرم

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۳۹,۹۵۰</del>
                              <div class="c-price__discount-oval"><span>۳۸٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۲۴,۹۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                          <div class="c-product-box__add-to-cart-section">
                            <div class="c-product__add-container js-fresh-add-container"><a
                                class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                                data-variant="1680412"></a>
                              <div class="js-fresh-select-counter u-hidden">
                                <div class="js-quick-carousel-add-to-cart"
                                     data-variant="1680412"
                                     data-cart-item=""
                                     data-mode="add"
                                     data-enhanced-ecommerce='null'
                                ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                    <option value="0" class="c-product__add-cancel">حذف</option>
                                    <option value="1">۱ عدد</option>
                                    <option value="2">۲ عدد</option>
                                    <option value="3">۳ عدد</option>
                                    <option value="4">۴ عدد</option>
                                    <option value="5">۵ عدد</option>
                                  </select></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="303828">
                    <li><a href="/product/dkp-303828/شامپو-بدن-کرمی-اکتیو-مدل-vanilla-and-honey-مقدار-400-گرم"
                           data-id="303828" class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="شامپو بدن کرمی اکتیو مدل Vanilla And Honey مقدار 400 گرم"><img
                            alt="شامپو بدن کرمی اکتیو مدل Vanilla And Honey مقدار 400 گرم"
                            src="https://dkstatics-public.digikala.com/digikala-products/1604973.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                            class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                        loading="lazy"
                                                                                        src="https://www.digikala.com/static/files/31a78819.svg"/>
                        </div>
                        <div class="c-product-box__title">
                          شامپو بدن کرمی اکتیو مدل Vanilla And Honey مقدار 400 گرم

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۲۲,۸۸۰</del>
                              <div class="c-price__discount-oval"><span>۱۷٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۱۸,۹۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                          <div class="c-product-box__add-to-cart-section">
                            <div class="c-product__add-container js-fresh-add-container"><a
                                class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                                data-variant="438875"></a>
                              <div class="js-fresh-select-counter u-hidden">
                                <div class="js-quick-carousel-add-to-cart"
                                     data-variant="438875"
                                     data-cart-item=""
                                     data-mode="add"
                                     data-enhanced-ecommerce='null'
                                ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                    <option value="0" class="c-product__add-cancel">حذف</option>
                                    <option value="1">۱ عدد</option>
                                    <option value="2">۲ عدد</option>
                                    <option value="3">۳ عدد</option>
                                    <option value="4">۴ عدد</option>
                                    <option value="5">۵ عدد</option>
                                  </select></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="873438">
                    <li><a href="/product/dkp-873438/سوسیس-هات-داگ-طلایی-80-میکائیلیان-مقدار-600-گرم" data-id="873438"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="سوسیس هات داگ طلایی 80% میکائیلیان مقدار 600 گرم"><img
                            alt="سوسیس هات داگ طلایی 80% میکائیلیان مقدار 600 گرم"
                            src="https://dkstatics-public.digikala.com/digikala-products/4079830.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                            class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                        loading="lazy"
                                                                                        src="https://www.digikala.com/static/files/31a78819.svg"/>
                        </div>
                        <div class="c-product-box__title">
                          سوسیس هات داگ طلایی 80% میکائیلیان مقدار 600 گرم

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۱۰۲,۸۵۰</del>
                              <div class="c-price__discount-oval"><span>۴۳٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۵۹,۰۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                          <div class="c-product-box__add-to-cart-section">
                            <div class="c-product__add-container js-fresh-add-container"><a
                                class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                                data-variant="1738062"></a>
                              <div class="js-fresh-select-counter u-hidden">
                                <div class="js-quick-carousel-add-to-cart"
                                     data-variant="1738062"
                                     data-cart-item=""
                                     data-mode="add"
                                     data-enhanced-ecommerce='null'
                                ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                    <option value="0" class="c-product__add-cancel">حذف</option>
                                    <option value="1">۱ عدد</option>
                                    <option value="2">۲ عدد</option>
                                    <option value="3">۳ عدد</option>
                                    <option value="4">۴ عدد</option>
                                    <option value="5">۵ عدد</option>
                                  </select></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="841410">
                    <li><a href="/product/dkp-841410/فرآورده-کاکائویی-مغز-دار-شیری-باراکا-مقدار-450-گرم" data-id="841410"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="فرآورده کاکائویی مغز دار شیری باراکا مقدار 450 گرم"><img
                            alt="فرآورده کاکائویی مغز دار شیری باراکا مقدار 450 گرم"
                            src="https://dkstatics-public.digikala.com/digikala-products/119967803.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                            class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                        loading="lazy"
                                                                                        src="https://www.digikala.com/static/files/31a78819.svg"/>
                        </div>
                        <div class="c-product-box__title">
                          فرآورده کاکائویی مغز دار شیری باراکا مقدار 450 گرم

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۶۲,۰۰۰</del>
                              <div class="c-price__discount-oval"><span>۲۷٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۴۵,۵۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                          <div class="c-product-box__add-to-cart-section">
                            <div class="c-product__add-container js-fresh-add-container"><a
                                class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                                data-variant="3691257"></a>
                              <div class="js-fresh-select-counter u-hidden">
                                <div class="js-quick-carousel-add-to-cart"
                                     data-variant="3691257"
                                     data-cart-item=""
                                     data-mode="add"
                                     data-enhanced-ecommerce='null'
                                ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                    <option value="0" class="c-product__add-cancel">حذف</option>
                                    <option value="1">۱ عدد</option>
                                    <option value="2">۲ عدد</option>
                                    <option value="3">۳ عدد</option>
                                    <option value="4">۴ عدد</option>
                                    <option value="5">۵ عدد</option>
                                  </select></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="1481847">
                    <li><a href="/product/dkp-1481847/سس-گوجه-فرنگی-بیژن-وزن-550-گرم" data-id="1481847"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="سس گوجه فرنگی بیژن وزن 550 گرم"><img alt="سس گوجه فرنگی بیژن وزن 550 گرم"
                                                                         src="https://dkstatics-public.digikala.com/digikala-products/110428654.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                                                         class="swiper-lazy swiper-lazy-loaded"
                                                                         loading="lazy"/></div>
                        <div class="c-product-box__title">
                          سس گوجه فرنگی بیژن وزن 550 گرم

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۱۳,۵۰۰</del>
                              <div class="c-price__discount-oval"><span>۳۰٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۹,۵۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                          <div class="c-product-box__add-to-cart-section">
                            <div class="c-product__add-container js-fresh-add-container"><a
                                class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                                data-variant="4085750"></a>
                              <div class="js-fresh-select-counter u-hidden">
                                <div class="js-quick-carousel-add-to-cart"
                                     data-variant="4085750"
                                     data-cart-item=""
                                     data-mode="add"
                                     data-enhanced-ecommerce='null'
                                ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                    <option value="0" class="c-product__add-cancel">حذف</option>
                                    <option value="1">۱ عدد</option>
                                    <option value="2">۲ عدد</option>
                                    <option value="3">۳ عدد</option>
                                    <option value="4">۴ عدد</option>
                                    <option value="5">۵ عدد</option>
                                  </select></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="3779682">
                    <li><a href="/product/dkp-3779682/پودر-ماشینی-پرسیل-deep-clean-با-رایحه-لوندر-مقدار-42-کیلوگرم"
                           data-id="3779682"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="پودر ماشینی پرسیل Deep Clean با رایحه لوندر مقدار 4.2 کیلوگرم"><img
                            alt="پودر ماشینی پرسیل Deep Clean با رایحه لوندر مقدار 4.2 کیلوگرم"
                            src="https://dkstatics-public.digikala.com/digikala-products/988e81fa96cdfd0bcd8529f994a55e687ce7e46c_1605596786.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                            class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                        loading="lazy"
                                                                                        src="https://www.digikala.com/static/files/31a78819.svg"/>
                        </div>
                        <div class="c-product-box__title">
                          پودر ماشینی پرسیل Deep Clean با رایحه لوندر مقدار 4.2 کیلوگرم

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۱۰۰,۸۰۰</del>
                              <div class="c-price__discount-oval"><span>۱۵٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۸۶,۱۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                          <div class="c-product-box__add-to-cart-section">
                            <div class="c-product__add-container js-fresh-add-container"><a
                                class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                                data-variant="12614202"></a>
                              <div class="js-fresh-select-counter u-hidden">
                                <div class="js-quick-carousel-add-to-cart"
                                     data-variant="12614202"
                                     data-cart-item=""
                                     data-mode="add"
                                     data-enhanced-ecommerce='null'
                                ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                    <option value="0" class="c-product__add-cancel">حذف</option>
                                    <option value="1">۱ عدد</option>
                                    <option value="2">۲ عدد</option>
                                    <option value="3">۳ عدد</option>
                                    <option value="4">۴ عدد</option>
                                    <option value="5">۵ عدد</option>
                                  </select></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="2957841">
                    <li><a href="/product/dkp-2957841/دستمال-کاغذی-100-برگ-ویسل-کد-001-بسته-10-عددی" data-id="2957841"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="دستمال کاغذی 100 برگ ویسل کد 001 بسته 10 عددی"><img
                            alt="دستمال کاغذی 100 برگ ویسل کد 001 بسته 10 عددی"
                            src="https://dkstatics-public.digikala.com/digikala-products/121804765.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                            class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                        loading="lazy"
                                                                                        src="https://www.digikala.com/static/files/31a78819.svg"/>
                        </div>
                        <div class="c-product-box__title">
                          دستمال کاغذی 100 برگ ویسل کد 001 بسته 10 عددی

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۷۵,۰۰۰</del>
                              <div class="c-price__discount-oval"><span>۴۵٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۴۰,۹۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                          <div class="c-product-box__add-to-cart-section">
                            <div class="c-product__add-container js-fresh-add-container"><a
                                class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                                data-variant="9846376"></a>
                              <div class="js-fresh-select-counter u-hidden">
                                <div class="js-quick-carousel-add-to-cart"
                                     data-variant="9846376"
                                     data-cart-item=""
                                     data-mode="add"
                                     data-enhanced-ecommerce='null'
                                ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                    <option value="0" class="c-product__add-cancel">حذف</option>
                                    <option value="1">۱ عدد</option>
                                    <option value="2">۲ عدد</option>
                                    <option value="3">۳ عدد</option>
                                    <option value="4">۴ عدد</option>
                                    <option value="5">۵ عدد</option>
                                  </select></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="2324736">
                    <li><a href="/product/dkp-2324736/دستمال-حوله-ای-ساحل-مدل-001-بسته-4-عددی" data-id="2324736"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="دستمال حوله ای ساحل مدل 001 بسته 4 عددی"><img
                            alt="دستمال حوله ای ساحل مدل 001 بسته 4 عددی"
                            src="https://dkstatics-public.digikala.com/digikala-products/3918fdf97b87cf4ae15a7cf054b1e5fd650d8248_1614683640.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                            class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                        loading="lazy"
                                                                                        src="https://www.digikala.com/static/files/31a78819.svg"/>
                        </div>
                        <div class="c-product-box__title">
                          دستمال حوله ای ساحل مدل 001 بسته 4 عددی

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۴۴,۴۰۰</del>
                              <div class="c-price__discount-oval"><span>۳۵٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۲۸,۸۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                          <div class="c-product-box__add-to-cart-section">
                            <div class="c-product__add-container js-fresh-add-container"><a
                                class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                                data-variant="6783956"></a>
                              <div class="js-fresh-select-counter u-hidden">
                                <div class="js-quick-carousel-add-to-cart"
                                     data-variant="6783956"
                                     data-cart-item=""
                                     data-mode="add"
                                     data-enhanced-ecommerce='null'
                                ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                    <option value="0" class="c-product__add-cancel">حذف</option>
                                    <option value="1">۱ عدد</option>
                                    <option value="2">۲ عدد</option>
                                    <option value="3">۳ عدد</option>
                                    <option value="4">۴ عدد</option>
                                    <option value="5">۵ عدد</option>
                                  </select></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="770239">
                    <li><a href="/product/dkp-770239/سبزی-قورمه-سرخ-شده-منجمد-نوبر-سبز-مقدار-400-گرم" data-id="770239"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="سبزی قورمه سرخ شده منجمد نوبر سبز مقدار 400 گرم"><img
                            alt="سبزی قورمه سرخ شده منجمد نوبر سبز مقدار 400 گرم"
                            src="https://dkstatics-public.digikala.com/digikala-products/a57d45ca8cd75baefe08865304c2c742049aa9bc_1603693888.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                            class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                        loading="lazy"
                                                                                        src="https://www.digikala.com/static/files/31a78819.svg"/>
                        </div>
                        <div class="c-product-box__title">
                          سبزی قورمه سرخ شده منجمد نوبر سبز مقدار 400 گرم

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۳۴,۵۰۰</del>
                              <div class="c-price__discount-oval"><span>۴۵٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۱۸,۹۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                          <div class="c-product-box__add-to-cart-section">
                            <div class="c-product__add-container js-fresh-add-container"><a
                                class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                                data-variant="1649547"></a>
                              <div class="js-fresh-select-counter u-hidden">
                                <div class="js-quick-carousel-add-to-cart"
                                     data-variant="1649547"
                                     data-cart-item=""
                                     data-mode="add"
                                     data-enhanced-ecommerce='null'
                                ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                    <option value="0" class="c-product__add-cancel">حذف</option>
                                    <option value="1">۱ عدد</option>
                                    <option value="2">۲ عدد</option>
                                  </select></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="1817056">
                    <li><a href="/product/dkp-1817056/پوشک-بارلی-سایز-5-بسته-34-عددی-به-همراه-دستمال-مرطوب"
                           data-id="1817056"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="پوشک بارلی سایز 5 بسته 34 عددی به همراه دستمال مرطوب"><img
                            alt="پوشک بارلی سایز 5 بسته 34 عددی به همراه دستمال مرطوب"
                            src="https://dkstatics-public.digikala.com/digikala-products/7723207cc716bd70769c9a1459f96483ae5351aa_1612354669.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                            class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                        loading="lazy"
                                                                                        src="https://www.digikala.com/static/files/31a78819.svg"/>
                        </div>
                        <div class="c-product-box__title">
                          پوشک بارلی سایز 5 بسته 34 عددی به همراه دستمال مرطوب

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۱۳۴,۱۵۰</del>
                              <div class="c-price__discount-oval"><span>۲۲٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۱۰۵,۲۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                          <div class="c-product-box__add-to-cart-section">
                            <div class="c-product__add-container js-fresh-add-container"><a
                                class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                                data-variant="4873796"></a>
                              <div class="js-fresh-select-counter u-hidden">
                                <div class="js-quick-carousel-add-to-cart"
                                     data-variant="4873796"
                                     data-cart-item=""
                                     data-mode="add"
                                     data-enhanced-ecommerce='null'
                                ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                    <option value="0" class="c-product__add-cancel">حذف</option>
                                    <option value="1">۱ عدد</option>
                                    <option value="2">۲ عدد</option>
                                    <option value="3">۳ عدد</option>
                                    <option value="4">۴ عدد</option>
                                    <option value="5">۵ عدد</option>
                                  </select></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="2522021">
                    <li><a href="/product/dkp-2522021/کروسان-کاکائو-پچ-پچ-بسته-6-عددی" data-id="2522021"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="کروسان کاکائو پچ پچ  بسته 6 عددی"><img alt="کروسان کاکائو پچ پچ  بسته 6 عددی"
                                                                           src="https://dkstatics-public.digikala.com/digikala-products/119588861.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                                                           class="swiper-lazy swiper-lazy-loaded"
                                                                           loading="lazy"/><img
                            class="c-product-box__fmcg-symbol" loading="lazy"
                            src="https://www.digikala.com/static/files/31a78819.svg"/></div>
                        <div class="c-product-box__title">
                          کروسان کاکائو پچ پچ بسته 6 عددی

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۲۸,۰۰۰</del>
                              <div class="c-price__discount-oval"><span>۳۰٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۱۹,۵۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                          <div class="c-product-box__add-to-cart-section">
                            <div class="c-product__add-container js-fresh-add-container"><a
                                class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                                data-variant="7590640"></a>
                              <div class="js-fresh-select-counter u-hidden">
                                <div class="js-quick-carousel-add-to-cart"
                                     data-variant="7590640"
                                     data-cart-item=""
                                     data-mode="add"
                                     data-enhanced-ecommerce='null'
                                ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                    <option value="0" class="c-product__add-cancel">حذف</option>
                                    <option value="1">۱ عدد</option>
                                    <option value="2">۲ عدد</option>
                                    <option value="3">۳ عدد</option>
                                    <option value="4">۴ عدد</option>
                                    <option value="5">۵ عدد</option>
                                  </select></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="1916402">
                    <li><a href="/product/dkp-1916402/پنیر-پیتزا-موزارلا-202-وزن-500-گرم" data-id="1916402"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="پنیر پیتزا موزارلا 202 وزن 500 گرم"><img alt="پنیر پیتزا موزارلا 202 وزن 500 گرم"
                                                                             src="https://dkstatics-public.digikala.com/digikala-products/112773099.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                                                             class="swiper-lazy swiper-lazy-loaded"
                                                                             loading="lazy"/><img
                            class="c-product-box__fmcg-symbol" loading="lazy"
                            src="https://www.digikala.com/static/files/31a78819.svg"/></div>
                        <div class="c-product-box__title">
                          پنیر پیتزا موزارلا 202 وزن 500 گرم

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۴۸,۰۰۰</del>
                              <div class="c-price__discount-oval"><span>۳۸٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۳۰,۰۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                          <div class="c-product-box__add-to-cart-section">
                            <div class="c-product__add-container js-fresh-add-container"><a
                                class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                                data-variant="6010087"></a>
                              <div class="js-fresh-select-counter u-hidden">
                                <div class="js-quick-carousel-add-to-cart"
                                     data-variant="6010087"
                                     data-cart-item=""
                                     data-mode="add"
                                     data-enhanced-ecommerce='null'
                                ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                    <option value="0" class="c-product__add-cancel">حذف</option>
                                    <option value="1">۱ عدد</option>
                                    <option value="2">۲ عدد</option>
                                    <option value="3">۳ عدد</option>
                                    <option value="4">۴ عدد</option>
                                    <option value="5">۵ عدد</option>
                                  </select></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="2951236">
                    <li><a href="/product/dkp-2951236/هاتی-نودل-با-عصاره-گوشت-هاتی-کارا-77-گرم-بسته-5-عددی"
                           data-id="2951236"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="هاتی نودل با عصاره گوشت هاتی کارا - 77 گرم بسته 5 عددی"><img
                            alt="هاتی نودل با عصاره گوشت هاتی کارا - 77 گرم بسته 5 عددی"
                            src="https://dkstatics-public.digikala.com/digikala-products/121796681.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                            class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                        loading="lazy"
                                                                                        src="https://www.digikala.com/static/files/31a78819.svg"/>
                        </div>
                        <div class="c-product-box__title">
                          هاتی نودل با عصاره گوشت هاتی کارا - 77 گرم بسته 5 عددی

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۳۰,۰۰۰</del>
                              <div class="c-price__discount-oval"><span>۳۷٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۱۸,۹۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                          <div class="c-product-box__add-to-cart-section">
                            <div class="c-product__add-container js-fresh-add-container"><a
                                class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                                data-variant="9965696"></a>
                              <div class="js-fresh-select-counter u-hidden">
                                <div class="js-quick-carousel-add-to-cart"
                                     data-variant="9965696"
                                     data-cart-item=""
                                     data-mode="add"
                                     data-enhanced-ecommerce='null'
                                ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                    <option value="0" class="c-product__add-cancel">حذف</option>
                                    <option value="1">۱ عدد</option>
                                    <option value="2">۲ عدد</option>
                                    <option value="3">۳ عدد</option>
                                    <option value="4">۴ عدد</option>
                                    <option value="5">۵ عدد</option>
                                  </select></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="876594">
                    <li><a href="/product/dkp-876594/کباب-لقمه-70-درصد-مهیا-پروتئین-450-گرم" data-id="876594"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="کباب لقمه 70 درصد مهیا پروتئین - 450 گرم"><img
                            alt="کباب لقمه 70 درصد مهیا پروتئین - 450 گرم"
                            src="https://dkstatics-public.digikala.com/digikala-products/4079615.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                            class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                        loading="lazy"
                                                                                        src="https://www.digikala.com/static/files/31a78819.svg"/>
                        </div>
                        <div class="c-product-box__title">
                          کباب لقمه 70 درصد مهیا پروتئین - 450 گرم

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۴۷,۷۰۰</del>
                              <div class="c-price__discount-oval"><span>۳۵٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۳۰,۹۹۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                          <div class="c-product-box__add-to-cart-section">
                            <div class="c-product__add-container js-fresh-add-container"><a
                                class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                                data-variant="1746825"></a>
                              <div class="js-fresh-select-counter u-hidden">
                                <div class="js-quick-carousel-add-to-cart"
                                     data-variant="1746825"
                                     data-cart-item=""
                                     data-mode="add"
                                     data-enhanced-ecommerce='null'
                                ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                    <option value="0" class="c-product__add-cancel">حذف</option>
                                    <option value="1">۱ عدد</option>
                                    <option value="2">۲ عدد</option>
                                    <option value="3">۳ عدد</option>
                                    <option value="4">۴ عدد</option>
                                    <option value="5">۵ عدد</option>
                                  </select></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="2119346">
                    <li><a href="/product/dkp-2119346/مایع-سفید-کننده-سطوح-نیارو-مدل-معطر-حجم-4000-میلی-لیتر"
                           data-id="2119346"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="مایع سفید کننده سطوح نیارو مدل معطر حجم 4000 میلی لیتر"><img
                            alt="مایع سفید کننده سطوح نیارو مدل معطر حجم 4000 میلی لیتر"
                            src="https://dkstatics-public.digikala.com/digikala-products/c7ea1f4a7f0bbacab43fe5f6c439cf05529bd2ea_1603110000.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                            class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                        loading="lazy"
                                                                                        src="https://www.digikala.com/static/files/31a78819.svg"/>
                        </div>
                        <div class="c-product-box__title">
                          مایع سفید کننده سطوح نیارو مدل معطر حجم 4000 میلی لیتر

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۲۴,۸۰۰</del>
                              <div class="c-price__discount-oval"><span>۴۰٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۱۴,۹۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                          <div class="c-product-box__add-to-cart-section">
                            <div class="c-product__add-container js-fresh-add-container"><a
                                class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                                data-variant="8662483"></a>
                              <div class="js-fresh-select-counter u-hidden">
                                <div class="js-quick-carousel-add-to-cart"
                                     data-variant="8662483"
                                     data-cart-item=""
                                     data-mode="add"
                                     data-enhanced-ecommerce='null'
                                ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                    <option value="0" class="c-product__add-cancel">حذف</option>
                                    <option value="1">۱ عدد</option>
                                    <option value="2">۲ عدد</option>
                                    <option value="3">۳ عدد</option>
                                    <option value="4">۴ عدد</option>
                                    <option value="5">۵ عدد</option>
                                  </select></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="2192285">
                    <li><a href="/product/dkp-2192285/مایع-دستشویی-داو-مدل-deeply-حجم-500-میلی-لیتر" data-id="2192285"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="مایع دستشویی داو مدل Deeply حجم 500 میلی لیتر"><img
                            alt="مایع دستشویی داو مدل Deeply حجم 500 میلی لیتر"
                            src="https://dkstatics-public.digikala.com/digikala-products/114339458.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                            class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                        loading="lazy"
                                                                                        src="https://www.digikala.com/static/files/31a78819.svg"/>
                        </div>
                        <div class="c-product-box__title">
                          مایع دستشویی داو مدل Deeply حجم 500 میلی لیتر

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۴۳,۵۰۰</del>
                              <div class="c-price__discount-oval"><span>۱۵٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۳۷,۱۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                          <div class="c-product-box__add-to-cart-section">
                            <div class="c-product__add-container js-fresh-add-container"><a
                                class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                                data-variant="6257603"></a>
                              <div class="js-fresh-select-counter u-hidden">
                                <div class="js-quick-carousel-add-to-cart"
                                     data-variant="6257603"
                                     data-cart-item=""
                                     data-mode="add"
                                     data-enhanced-ecommerce='null'
                                ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                    <option value="0" class="c-product__add-cancel">حذف</option>
                                    <option value="1">۱ عدد</option>
                                    <option value="2">۲ عدد</option>
                                    <option value="3">۳ عدد</option>
                                    <option value="4">۴ عدد</option>
                                    <option value="5">۵ عدد</option>
                                  </select></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="1907805">
                    <li><a href="/product/dkp-1907805/چای-سیاه-گلستان-مدل-ممتاز-هندوستان-مقدار-225-گرم" data-id="1907805"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="چای سیاه گلستان مدل ممتاز هندوستان مقدار 225 گرم"><img
                            alt="چای سیاه گلستان مدل ممتاز هندوستان مقدار 225 گرم"
                            src="https://dkstatics-public.digikala.com/digikala-products/112723893.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                            class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                        loading="lazy"
                                                                                        src="https://www.digikala.com/static/files/31a78819.svg"/>
                        </div>
                        <div class="c-product-box__title">
                          چای سیاه گلستان مدل ممتاز هندوستان مقدار 225 گرم

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۶۰,۹۰۰</del>
                              <div class="c-price__discount-oval"><span>۱۸٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۴۹,۹۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                          <div class="c-product-box__add-to-cart-section">
                            <div class="c-product__add-container js-fresh-add-container"><a
                                class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                                data-variant="5162612"></a>
                              <div class="js-fresh-select-counter u-hidden">
                                <div class="js-quick-carousel-add-to-cart"
                                     data-variant="5162612"
                                     data-cart-item=""
                                     data-mode="add"
                                     data-enhanced-ecommerce='null'
                                ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                    <option value="0" class="c-product__add-cancel">حذف</option>
                                    <option value="1">۱ عدد</option>
                                    <option value="2">۲ عدد</option>
                                    <option value="3">۳ عدد</option>
                                    <option value="4">۴ عدد</option>
                                    <option value="5">۵ عدد</option>
                                  </select></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="1102745">
                    <li><a href="/product/dkp-1102745/مایع-دستشویی-اکتیو-مدل-orchid-amp-cinnamon-مقدار-375-کیلوگرم"
                           data-id="1102745"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="مایع دستشویی اکتیو مدل Orchid &amp; Cinnamon مقدار 3.75 کیلوگرم"><img
                            alt="مایع دستشویی اکتیو مدل Orchid &amp; Cinnamon مقدار 3.75 کیلوگرم"
                            src="https://dkstatics-public.digikala.com/digikala-products/6dd6229fb12e2235bd7fba6d6a21c1aeff8cafd8_1607156733.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                            class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                        loading="lazy"
                                                                                        src="https://www.digikala.com/static/files/31a78819.svg"/>
                        </div>
                        <div class="c-product-box__title">
                          مایع دستشویی اکتیو مدل Orchid &amp; Cinnamon مقدار 3.75 کیلوگرم

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۶۷,۷۳۷</del>
                              <div class="c-price__discount-oval"><span>۲۱٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۵۳,۵۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                          <div class="c-product-box__add-to-cart-section">
                            <div class="c-product__add-container js-fresh-add-container"><a
                                class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                                data-variant="2407689"></a>
                              <div class="js-fresh-select-counter u-hidden">
                                <div class="js-quick-carousel-add-to-cart"
                                     data-variant="2407689"
                                     data-cart-item=""
                                     data-mode="add"
                                     data-enhanced-ecommerce='null'
                                ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                    <option value="0" class="c-product__add-cancel">حذف</option>
                                    <option value="1">۱ عدد</option>
                                    <option value="2">۲ عدد</option>
                                    <option value="3">۳ عدد</option>
                                    <option value="4">۴ عدد</option>
                                    <option value="5">۵ عدد</option>
                                  </select></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="1792500">
                    <li><a href="/product/dkp-1792500/زیتون-شور-با-هسته-درشت-بیژن-وزن-680-گرم" data-id="1792500"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="زیتون شور با هسته درشت بیژن وزن 680 گرم"><img
                            alt="زیتون شور با هسته درشت بیژن وزن 680 گرم"
                            src="https://dkstatics-public.digikala.com/digikala-products/112114549.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                            class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                        loading="lazy"
                                                                                        src="https://www.digikala.com/static/files/31a78819.svg"/>
                        </div>
                        <div class="c-product-box__title">
                          زیتون شور با هسته درشت بیژن وزن 680 گرم

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۳۶,۰۰۰</del>
                              <div class="c-price__discount-oval"><span>۳۴٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۲۳,۹۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                          <div class="c-product-box__add-to-cart-section">
                            <div class="c-product__add-container js-fresh-add-container"><a
                                class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                                data-variant="5092531"></a>
                              <div class="js-fresh-select-counter u-hidden">
                                <div class="js-quick-carousel-add-to-cart"
                                     data-variant="5092531"
                                     data-cart-item=""
                                     data-mode="add"
                                     data-enhanced-ecommerce='null'
                                ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                    <option value="0" class="c-product__add-cancel">حذف</option>
                                    <option value="1">۱ عدد</option>
                                    <option value="2">۲ عدد</option>
                                    <option value="3">۳ عدد</option>
                                    <option value="4">۴ عدد</option>
                                    <option value="5">۵ عدد</option>
                                  </select></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="1785409">
                    <li><a href="/product/dkp-1785409/ماست-چکیده-موسیر-هراز-وزن-900-گرم" data-id="1785409"
                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="ماست چکیده موسیر هراز وزن 900 گرم"><img alt="ماست چکیده موسیر هراز وزن 900 گرم"
                                                                            src="https://dkstatics-public.digikala.com/digikala-products/112076793.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                                                            class="swiper-lazy swiper-lazy-loaded"
                                                                            loading="lazy"/><img
                            class="c-product-box__fmcg-symbol" loading="lazy"
                            src="https://www.digikala.com/static/files/31a78819.svg"/></div>
                        <div class="c-product-box__title">
                          ماست چکیده موسیر هراز وزن 900 گرم

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <del>۲۹,۸۰۰</del>
                              <div class="c-price__discount-oval"><span>۲۸٪</span></div>
                              <div class="c-price__value-wrapper">
                                ۲۱,۵۰۰ <span
                                  class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                          <div class="c-product-box__add-to-cart-section">
                            <div class="c-product__add-container js-fresh-add-container"><a
                                class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                                data-variant="4786746"></a>
                              <div class="js-fresh-select-counter u-hidden">
                                <div class="js-quick-carousel-add-to-cart"
                                     data-variant="4786746"
                                     data-cart-item=""
                                     data-mode="add"
                                     data-enhanced-ecommerce='null'
                                ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                    <option value="0" class="c-product__add-cancel">حذف</option>
                                    <option value="1">۱ عدد</option>
                                    <option value="2">۲ عدد</option>
                                  </select></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__timer   js-counter"
                               data-countdown="2021-03-21 00:00:00"></div>
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide c-swiper__show-more-cart--auto-height"><a href="/fresh-offers/"
                                                                                     class="c-swiper__show-more-cart"><span></span>
                      <p>
                        مشاهده همه
                      </p></a></div>
                </div>
                <div class="swiper-button-prev js-swiper-button-prev"></div>
                <div class="swiper-button-next js-swiper-button-next"></div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <article class="container container--home">
        <div class="o-page">
          <aside class="c-adplacement">
            @if($bannerGroup2->images()->exists())
              @foreach($bannerGroup2->images as $image)
                <a href="{{ ($image->media()->exists())? $image->link : '' }}" class="js-banner-impression-adro c-adplacement__item c-adplacement__item--b" data-observed="0" target="_blank" title="{{ ($image->media()->exists())? $image->alt : '' }}" data-is-trackable="">
                  <div class="c-adplacement__sponsored_box">
                    <img src="{{ $site_url . '/' . $image->media->first()->path . '/'. $image->media->first()->name }}" alt="{{ ($image->media()->exists())? $image->alt : '' }}" loading="lazy"/>
                  </div>
                </a>
              @endforeach
            @endif
          </aside>
          <div class="o-page__row o-grid o-page__row--main-page js-recommendation-home_1-row">
            <div class="col-9">
              <section class="c-swiper c-swiper--products has-placeholder recommendation-swiper  js-sntracker-carousel"
                       id="recommendation-home_1">
                <div class="recommendation-swiper__mask js-swiper-mask-recommendation-home_1 u-hidden"><p>این پیشنهاد به
                    شما نشان داده نخواهد شد با تشکر از باز‌خورد شما</p>
                  <button class="js-cancel-swiper-mask" data-id="recommendation-home_1"><i></i>
                    بازگرداندن
                  </button>
                </div>
                <div class="o-headline"><span></span></div>
                <div class="c-box">
                  <div class="swiper-container swiper-container-horizontal">
                    <div class="swiper-wrapper js-products-container"></div>
                    <div class="swiper-button-prev js-swiper-button-prev"></div>
                    <div class="swiper-button-next js-swiper-button-next"></div>
                  </div>
                </div>
              </section>
            </div>
            <div class="col-3">
              <aside class="c-box c-box--promo-single">
                <div class="c-promo-single js-promo-single" id="promo-single">
                  <div class="c-promo-single__headline js-promo-single-bar">پیشنهادهای لحظه‌ای برای شما</div>
                  <div class="swiper-container swiper-container-horizontal js-promo-single-box">
                    <div class="swiper-wrapper js-promo-single-wrapper">
                      <div class="c-remodal-loader__icon c-promo-single__loader js-promo-single-loader">
                        <div class="c-remodal-loader__cube c-remodal-loader__cube--1"></div>
                        <div class="c-remodal-loader__cube c-remodal-loader__cube--2"></div>
                        <div class="c-remodal-loader__cube c-remodal-loader__cube--3"></div>
                        <div class="c-remodal-loader__cube c-remodal-loader__cube--4"></div>
                        <div class="c-remodal-loader__cube c-remodal-loader__cube--5"></div>
                        <div class="c-remodal-loader__cube c-remodal-loader__cube--6"></div>
                        <div class="c-remodal-loader__cube c-remodal-loader__cube--7"></div>
                        <div class="c-remodal-loader__cube c-remodal-loader__cube--8"></div>
                        <div class="c-remodal-loader__cube c-remodal-loader__cube--9"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </aside>
            </div>
          </div>
        </div>
        <section class="c-swiper c-swiper--products has-placeholder recommendation-swiper  js-sntracker-carousel"
                 id="recommendation-home_2">
          <div class="recommendation-swiper__mask js-swiper-mask-recommendation-home_2 u-hidden"><p>این پیشنهاد به شما
              نشان داده نخواهد شد با تشکر از باز‌خورد شما</p>
            <button class="js-cancel-swiper-mask" data-id="recommendation-home_2"><i></i>
              بازگرداندن
            </button>
          </div>
          <div class="o-headline"><span></span></div>
          <div class="c-box">
            <div class="swiper-container swiper-container-horizontal">
              <div class="swiper-wrapper js-products-container"></div>
              <div class="swiper-button-prev js-swiper-button-prev"></div>
              <div class="swiper-button-next js-swiper-button-next"></div>
            </div>
          </div>
        </section>
        <aside class="c-about-digikala-items">
          <aside class="c-adplacement c-adplacement__container-row">
            @if($bannerGroup3->images()->exists())
              @foreach($bannerGroup3->images as $image)
                <a href="{{ ($image->media()->exists())? $image->link : '' }}" class="c-adplacement__item js-banner-impression-adro" data-observed="1" target="_blank" data-is-trackable="" title="{{ ($image->media()->exists())? $image->alt : '' }}">
                  <div class="c-adplacement__sponsored_box">
                    <img src="{{ $site_url . '/' . $image->media->first()->path . '/'. $image->media->first()->name }}" alt="{{ ($image->media()->exists())? $image->alt : '' }}" loading="lazy">
                  </div>
                </a>
              @endforeach
            @endif
          </aside>
        </aside>
        <section class="c-swiper c-swiper--products has-placeholder recommendation-swiper u-hidden js-sntracker-carousel"
                 id="recommendation-home_3">
          <div class="recommendation-swiper__mask js-swiper-mask-recommendation-home_3 u-hidden"><p>این پیشنهاد به شما
              نشان داده نخواهد شد با تشکر از باز‌خورد شما</p>
            <button class="js-cancel-swiper-mask" data-id="recommendation-home_3"><i></i>
              بازگرداندن
            </button>
          </div>
          <div class="o-headline"><span></span></div>
          <div class="c-box">
            <div class="swiper-container swiper-container-horizontal">
              <div class="swiper-wrapper js-products-container"></div>
              <div class="swiper-button-prev js-swiper-button-prev"></div>
              <div class="swiper-button-next js-swiper-button-next"></div>
            </div>
          </div>
        </section>
        <section class="c-swiper c-swiper--products has-placeholder recommendation-swiper u-hidden js-sntracker-carousel"
                 id="recommendation-home_4">
          <div class="recommendation-swiper__mask js-swiper-mask-recommendation-home_4 u-hidden"><p>این پیشنهاد به شما
              نشان داده نخواهد شد با تشکر از باز‌خورد شما</p>
            <button class="js-cancel-swiper-mask" data-id="recommendation-home_4"><i></i>
              بازگرداندن
            </button>
          </div>
          <div class="o-headline"><span></span></div>
          <div class="c-box">
            <div class="swiper-container swiper-container-horizontal">
              <div class="swiper-wrapper js-products-container"></div>
              <div class="swiper-button-prev js-swiper-button-prev"></div>
              <div class="swiper-button-next js-swiper-button-next"></div>
            </div>
          </div>
        </section>
        <aside class="c-adplacement c-adplacement__container-row">
{{--          <a href="" class="c-adplacement__item js-banner-impression-adro" data-observed="0" target="_blank" data-is-trackable="" title="">--}}
{{--            <div class="c-adplacement__sponsored_box">--}}
{{--              <img src="https://dkstatics-public.digikala.com/digikala-adservice-banners/9ba8fa23a193e5218d0782580f959e55d1514089_1615015933.jpg?x-oss-process=image/quality,q_80" alt="" loading="lazy"/>--}}
{{--            </div>--}}
{{--          </a>--}}
{{--          @if($bannerGroup2->images()->exists())--}}
{{--            @foreach($bannerGroup2->images as $image)--}}
{{--              <a href="{{ ($image->media()->exists())? $image->link : '' }}" class="c-adplacement__item js-banner-impression-adro" data-observed="1" target="_blank" data-is-trackable="" title="{{ ($image->media()->exists())? $image->alt : '' }}">--}}
{{--                <div class="c-adplacement__sponsored_box">--}}
{{--                  <img src="{{ $site_url . '/' . $image->media->first()->path . '/'. $image->media->first()->name }}" alt="{{ ($image->media()->exists())? $image->alt : '' }}" loading="lazy">--}}
{{--                </div>--}}
{{--              </a>--}}
{{--            @endforeach--}}
{{--          @endif--}}
        </aside>
        <section class="c-swiper c-swiper--products has-placeholder recommendation-swiper u-hidden js-sntracker-carousel"
                 id="recommendation-home_5">
          <div class="recommendation-swiper__mask js-swiper-mask-recommendation-home_5 u-hidden"><p>این پیشنهاد به شما
              نشان داده نخواهد شد با تشکر از باز‌خورد شما</p>
            <button class="js-cancel-swiper-mask" data-id="recommendation-home_5"><i></i>
              بازگرداندن
            </button>
          </div>
          <div class="o-headline"><span></span></div>
          <div class="c-box">
            <div class="swiper-container swiper-container-horizontal">
              <div class="swiper-wrapper js-products-container"></div>
              <div class="swiper-button-prev js-swiper-button-prev"></div>
              <div class="swiper-button-next js-swiper-button-next"></div>
            </div>
          </div>
        </section>
        <section class="c-swiper c-swiper--products has-placeholder recommendation-swiper u-hidden js-sntracker-carousel"
                 id="recommendation-home_6">
          <div class="recommendation-swiper__mask js-swiper-mask-recommendation-home_6 u-hidden"><p>این پیشنهاد به شما
              نشان داده نخواهد شد با تشکر از باز‌خورد شما</p>
            <button class="js-cancel-swiper-mask" data-id="recommendation-home_6"><i></i>
              بازگرداندن
            </button>
          </div>
          <div class="o-headline"><span></span></div>
          <div class="c-box">
            <div class="swiper-container swiper-container-horizontal">
              <div class="swiper-wrapper js-products-container"></div>
              <div class="swiper-button-prev js-swiper-button-prev"></div>
              <div class="swiper-button-next js-swiper-button-next"></div>
            </div>
          </div>
        </section>
        <script>
          var carouselDataTracker = {
            "carouselPosition": "HOME_6",
            "id": "sn-carousels-1",
            "title": "\u0645\u062d\u0635\u0648\u0644\u0627\u062a \u067e\u0631\u0628\u0627\u0632\u062f\u06cc\u062f \u0627\u062e\u06cc\u0631",
            "title_en": "latest most visited",
            "products": [{
              "id": 3754319,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 POCO X3 M2007J20CG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "price": 68890000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Xiaomi",
              "position": 1,
              "status": "marketable"
            }, {
              "id": 2071360,
              "name": "\u0631\u0648\u063a\u0646 \u0646\u06cc\u0645\u0647 \u062c\u0627\u0645\u062f \u0632\u06cc\u0631\u0648 \u062a\u0631\u0627\u0646\u0633 \u0637\u0628\u06cc\u0639\u062a - 5  \u06a9\u06cc\u0644\u0648\u06af\u0631\u0645",
              "price": 700000,
              "category": "\u0631\u0648\u063a\u0646",
              "brand": "\u0637\u0628\u06cc\u0639\u062a",
              "position": 2,
              "status": "marketable"
            }, {
              "id": 4122136,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A12 SM-A125F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "price": 41390000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Samsung",
              "position": 3,
              "status": "marketable"
            }, {
              "id": 2677898,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A71 SM-A715F\/DS \u062f\u0648 \u0633\u06cc\u0645\u200c\u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0647\u0645\u0631\u0627\u0647 \u0628\u0627 \u0631\u0645 8 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "price": 92490000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Samsung",
              "position": 4,
              "status": "marketable"
            }, {
              "id": 2910269,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A31 SM-A315F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "price": 55390000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Samsung",
              "position": 5,
              "status": "marketable"
            }, {
              "id": 3048126,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A21S SM-A217F\/DS \u062f\u0648 \u0633\u06cc\u0645\u200c\u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a\t",
              "price": 46490000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Samsung",
              "position": 6,
              "status": "marketable"
            }, {
              "id": 3105612,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 Redmi Note 9 Pro M2003J6B2G \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "price": 72990000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Xiaomi",
              "position": 7,
              "status": "marketable"
            }, {
              "id": 3151747,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 Redmi 9 M2004J19G \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "price": 35990000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Xiaomi",
              "position": 8,
              "status": "marketable"
            }, {
              "id": 4149037,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 POCO M3 M2010J19CG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "price": 45490000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Xiaomi",
              "position": 9,
              "status": "marketable"
            }, {
              "id": 4008192,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy S20 FE SM-G780F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "price": 126490000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Samsung",
              "position": 10,
              "status": "marketable"
            }, {
              "id": 4175973,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A51 SM-A515F\/DSN \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256\u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "price": 87000000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Samsung",
              "position": 11,
              "status": "marketable"
            }, {
              "id": 3893718,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0627\u067e\u0644 \u0645\u062f\u0644 iPhone 12 Pro Max A2412 \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "price": 389000000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Apple",
              "position": 12,
              "status": "marketable"
            }, {
              "id": 4330247,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy S21 Ultra 5G SM-G998B\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 12 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "price": 283990000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Samsung",
              "position": 13,
              "status": "marketable"
            }, {
              "id": 3183082,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 Redmi 9 M2004J19G \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 32 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "price": 32700000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Xiaomi",
              "position": 14,
              "status": "marketable"
            }, {
              "id": 4244447,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 POCO X3 NFC M2007J20CG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 6 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "price": 59100000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Xiaomi",
              "position": 15,
              "status": "marketable"
            }, {
              "id": 3532969,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0647\u0648\u0622\u0648\u06cc \u0645\u062f\u0644 Y8p AQM-LX1 \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "price": 41990000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Huawei",
              "position": 16,
              "status": "marketable"
            }, {
              "id": 3246506,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 Redmi 9A M2006C3LG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 32 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a\t",
              "price": 32000000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Xiaomi",
              "position": 17,
              "status": "marketable"
            }, {
              "id": 2066213,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A10s SM-A107F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 32 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "price": 31190000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Samsung",
              "position": 18,
              "status": "marketable"
            }, {
              "id": 4230579,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A12 SM-A125F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 4 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "price": 43490000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Samsung",
              "position": 19,
              "status": "marketable"
            }, {
              "id": 3266410,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A01 Core SM-A013G\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 16 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "price": 20190000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Samsung",
              "position": 20,
              "status": "marketable"
            }, {
              "id": 2961837,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0647\u0648\u0622\u0648\u06cc \u0645\u062f\u0644 Nova 7i JNY-LX1 \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a\t",
              "price": 61800000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Huawei",
              "position": 21,
              "status": "marketable"
            }]
          };
          if (carouselDataTracker) {
            if (!window.carouselData)
              window.carouselData = [carouselDataTracker];
            else
              window.carouselData.push(carouselDataTracker);
          }

          var carouselDataTracker = null;
          if (carouselDataTracker) {
            if (!window.carouselData)
              window.carouselData = [carouselDataTracker];
            else
              window.carouselData.push(carouselDataTracker);
          }
        </script>
        <script>
          window.dataLayer.push({
            "event": "eec.productImpression", "ecommerce": {
              "currencyCode": "EUR",
              "impressions": [{
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 POCO X3 M2007J20CG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                "id": 3754319,
                "price": 68890000,
                "brand": "\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 1,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.4,
                "metric6": 740,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-recently-most-viewed",
                "dimension7": "none"
              }, {
                "name": "\u0631\u0648\u063a\u0646 \u0646\u06cc\u0645\u0647 \u062c\u0627\u0645\u062f \u0632\u06cc\u0631\u0648 \u062a\u0631\u0627\u0646\u0633 \u0637\u0628\u06cc\u0639\u062a - 5  \u06a9\u06cc\u0644\u0648\u06af\u0631\u0645",
                "id": 2071360,
                "price": 700000,
                "brand": "\u0637\u0628\u06cc\u0639\u062a",
                "category": "\u0631\u0648\u063a\u0646",
                "list": "category-\u0631\u0648\u063a\u0646",
                "position": 2,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.6,
                "metric6": 2195,
                "dimension11": 1,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-recently-most-viewed",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A12 SM-A125F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                "id": 4122136,
                "price": 41390000,
                "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 3,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.5,
                "metric6": 1094,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-recently-most-viewed",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A71 SM-A715F\/DS \u062f\u0648 \u0633\u06cc\u0645\u200c\u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0647\u0645\u0631\u0627\u0647 \u0628\u0627 \u0631\u0645 8 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                "id": 2677898,
                "price": 92490000,
                "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 4,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.3,
                "metric6": 1366,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-recently-most-viewed",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A31 SM-A315F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                "id": 2910269,
                "price": 55390000,
                "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 5,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.4,
                "metric6": 2810,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-recently-most-viewed",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A21S SM-A217F\/DS \u062f\u0648 \u0633\u06cc\u0645\u200c\u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a\t",
                "id": 3048126,
                "price": 46490000,
                "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 6,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.4,
                "metric6": 3183,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-recently-most-viewed",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 Redmi Note 9 Pro M2003J6B2G \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                "id": 3105612,
                "price": 72990000,
                "brand": "\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 7,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.4,
                "metric6": 1497,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-recently-most-viewed",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 Redmi 9 M2004J19G \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                "id": 3151747,
                "price": 35990000,
                "brand": "\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 8,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.4,
                "metric6": 1102,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-recently-most-viewed",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 POCO M3 M2010J19CG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                "id": 4149037,
                "price": 45490000,
                "brand": "\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 9,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.2,
                "metric6": 176,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-recently-most-viewed",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy S20 FE SM-G780F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                "id": 4008192,
                "price": 126490000,
                "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 10,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.3,
                "metric6": 209,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-recently-most-viewed",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A51 SM-A515F\/DSN \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256\u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                "id": 4175973,
                "price": 87000000,
                "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 11,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.3,
                "metric6": 24,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-recently-most-viewed",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0627\u067e\u0644 \u0645\u062f\u0644 iPhone 12 Pro Max A2412 \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                "id": 3893718,
                "price": 389000000,
                "brand": "\u0627\u067e\u0644",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 12,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.5,
                "metric6": 220,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-recently-most-viewed",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy S21 Ultra 5G SM-G998B\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 12 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                "id": 4330247,
                "price": 283990000,
                "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 13,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.4,
                "metric6": 105,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-recently-most-viewed",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 Redmi 9 M2004J19G \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 32 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                "id": 3183082,
                "price": 32700000,
                "brand": "\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 14,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.5,
                "metric6": 1010,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-recently-most-viewed",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 POCO X3 NFC M2007J20CG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 6 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                "id": 4244447,
                "price": 59100000,
                "brand": "\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 15,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.5,
                "metric6": 289,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-recently-most-viewed",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0647\u0648\u0622\u0648\u06cc \u0645\u062f\u0644 Y8p AQM-LX1 \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                "id": 3532969,
                "price": 41990000,
                "brand": "\u0647\u0648\u0622\u0648\u06cc",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 16,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.3,
                "metric6": 682,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-recently-most-viewed",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 Redmi 9A M2006C3LG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 32 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a\t",
                "id": 3246506,
                "price": 32000000,
                "brand": "\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 17,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.3,
                "metric6": 586,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-recently-most-viewed",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A10s SM-A107F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 32 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                "id": 2066213,
                "price": 31190000,
                "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 18,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.4,
                "metric6": 4368,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-recently-most-viewed",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A12 SM-A125F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 4 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                "id": 4230579,
                "price": 43490000,
                "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 19,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.3,
                "metric6": 102,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-recently-most-viewed",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A01 Core SM-A013G\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 16 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                "id": 3266410,
                "price": 20190000,
                "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 20,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.1,
                "metric6": 1898,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-recently-most-viewed",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0647\u0648\u0622\u0648\u06cc \u0645\u062f\u0644 Nova 7i JNY-LX1 \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a\t",
                "id": 2961837,
                "price": 61800000,
                "brand": "\u0647\u0648\u0622\u0648\u06cc",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 21,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.4,
                "metric6": 239,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-recently-most-viewed",
                "dimension7": "none"
              }]
            }
          });
        </script>
        <section class="c-swiper c-swiper--products js-sntracker-carousel " id="sn-carousels-1">
          <div class="o-headline">
            <span>
              محصولات پربازدید اخیر
            </span>
          </div>
          <div class="c-box" id="sn-carousels-1">
            <div class="swiper-container swiper-container-horizontal js-swiper-products">
              <div class="swiper-wrapper">
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="3754319"
                     data-position="1">
                  <div class="c-product-box">
                    <a class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-3754319/گوشی-موبایل-شیائومی-مدل-poco-x3-m2007j20cg-دو-سیم-کارت-ظرفیت-128-گیگابایت"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/a1981f054f980e183cb23ff39799bd37ac983ae4_1605350003.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌ کارت ظرفیت 128 گیگابایت"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="3754319"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-3754319/گوشی-موبایل-شیائومی-مدل-poco-x3-m2007j20cg-دو-سیم-کارت-ظرفیت-128-گیگابایت">
                        گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="3754319"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-3754319/گوشی-موبایل-شیائومی-مدل-poco-x3-m2007j20cg-دو-سیم-کارت-ظرفیت-128-گیگابایت">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value"></div>
                            <div class="c-new-price__value">
                              ۶,۸۸۹,۰۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="2071360"
                     data-position="2">
                  <div class="c-product-box"><a data-id="2071360"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-2071360/روغن-نیمه-جامد-زیرو-ترانس-طبیعت-5-کیلوگرم"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/113619953.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="روغن نیمه جامد زیرو ترانس طبیعت - 5  کیلوگرم"
                        class="swiper-lazy"><img class="c-product-box__fmcg-symbol"
                                                 src="https://www.digikala.com/static/files/31a78819.svg"></a>
                    <div class="c-product-box__title"><a data-id="2071360"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-2071360/روغن-نیمه-جامد-زیرو-ترانس-طبیعت-5-کیلوگرم">
                        روغن نیمه جامد زیرو ترانس طبیعت - 5 کیلوگرم
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__fast-shopping">
                        <div class="c-product-box__add-to-cart-section">
                          <div class="c-product__add-container js-add-to-cart-container
                            js-fast-shopping-confirm"><a
                              class="btn-add-to-cart-mini js-add-to-cart js-product-add-to-card js-fast-shopping-confirm"
                              href="/cart/add/5780149/1/"
                              data-event="add_to_cart" data-event-category="ecommerce"
                              data-event-label="price:  - seller: marketplace - seller_name:  - seller_rating:  - multiple_configs: False - position: 0"></a>
                            <div
                              class="c-product__add-substitute c-product__add-substitute--item js-quick-carousel-add-to-cart"
                              data-variant="5780149"
                              data-cart-item=""
                              data-mode="add"
                              data-enhanced-ecommerce='null'><select class="c-ui-select js-ui-select-above"
                                                                     name="order[amount]">
                                <option value="0" class="c-product__add-cancel">حذف</option>
                                <option value="1">۱ عدد</option>
                              </select></div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__price-item"><a data-id="2071360"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-2071360/روغن-نیمه-جامد-زیرو-ترانس-طبیعت-5-کیلوگرم">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value"></div>
                            <div class="c-new-price__value">
                              ۷۰,۰۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="4122136"
                     data-position="3">
                  <div class="c-product-box"><a data-id="4122136"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-4122136/گوشی-موبایل-سامسونگ-مدل-galaxy-a21s-a217fds-دو-سیم-کارت-ظرفیت-128-گیگابایت-clone-1-of-4031737"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/6207b3bf015d7fff97e9e04868497ac6a30474a3_1609308062.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="گوشی موبایل سامسونگ مدل Galaxy A12 SM-A125F/DS دو سیم کارت ظرفیت 64 گیگابایت"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="4122136"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-4122136/گوشی-موبایل-سامسونگ-مدل-galaxy-a21s-a217fds-دو-سیم-کارت-ظرفیت-128-گیگابایت-clone-1-of-4031737">
                        گوشی موبایل سامسونگ مدل Galaxy A12 SM-A125F/DS دو ...
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="4122136"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-4122136/گوشی-موبایل-سامسونگ-مدل-galaxy-a21s-a217fds-دو-سیم-کارت-ظرفیت-128-گیگابایت-clone-1-of-4031737">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value"></div>
                            <div class="c-new-price__value">
                              ۴,۱۳۹,۰۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="2677898"
                     data-position="4">
                  <div class="c-product-box"><a data-id="2677898"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-2677898/گوشی-موبایل-سامسونگ-مدل-galaxy-a71-sm-a715fds-دو-سیمکارت-ظرفیت-128-گیگابایت-همراه-با-رم-8-گیگابایت"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/120415904.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="گوشی موبایل سامسونگ مدل Galaxy A71 SM-A715F/DS دو سیم‌کارت ظرفیت 128 گیگابایت همراه با رم 8 گیگابایت"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="2677898"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-2677898/گوشی-موبایل-سامسونگ-مدل-galaxy-a71-sm-a715fds-دو-سیمکارت-ظرفیت-128-گیگابایت-همراه-با-رم-8-گیگابایت">
                        گوشی موبایل سامسونگ مدل Galaxy A71 SM-A715F/DS دو ...
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="2677898"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-2677898/گوشی-موبایل-سامسونگ-مدل-galaxy-a71-sm-a715fds-دو-سیمکارت-ظرفیت-128-گیگابایت-همراه-با-رم-8-گیگابایت">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value"></div>
                            <div class="c-new-price__value">
                              ۹,۲۴۹,۰۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="2910269"
                     data-position="5">
                  <div class="c-product-box"><a data-id="2910269"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-2910269/گوشی-موبایل-سامسونگ-مدل-galaxy-a31-sm-a315fds-دو-سیم-کارت-ظرفیت-128-گیگابایت"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/121560275.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="گوشی موبایل سامسونگ مدل Galaxy A31 SM-A315F/DS دو سیم کارت ظرفیت 128 گیگابایت"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="2910269"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-2910269/گوشی-موبایل-سامسونگ-مدل-galaxy-a31-sm-a315fds-دو-سیم-کارت-ظرفیت-128-گیگابایت">
                        گوشی موبایل سامسونگ مدل Galaxy A31 SM-A315F/DS دو ...
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="2910269"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-2910269/گوشی-موبایل-سامسونگ-مدل-galaxy-a31-sm-a315fds-دو-سیم-کارت-ظرفیت-128-گیگابایت">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value"></div>
                            <div class="c-new-price__value">
                              ۵,۵۳۹,۰۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="3048126"
                     data-position="6">
                  <div class="c-product-box"><a data-id="3048126"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-3048126/گوشی-موبایل-سامسونگ-مدل-galaxy-a21s-sm-a217fds-دو-سیمکارت-ظرفیت-64-گیگابایت"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/89e7f2abac447a018242a954f03f8a6926344f8b_1594023235.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت	"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="3048126"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-3048126/گوشی-موبایل-سامسونگ-مدل-galaxy-a21s-sm-a217fds-دو-سیمکارت-ظرفیت-64-گیگابایت">
                        گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو...
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="3048126"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-3048126/گوشی-موبایل-سامسونگ-مدل-galaxy-a21s-sm-a217fds-دو-سیمکارت-ظرفیت-64-گیگابایت">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value"></div>
                            <div class="c-new-price__value">
                              ۴,۶۴۹,۰۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="3105612"
                     data-position="7">
                  <div class="c-product-box"><a data-id="3105612"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-3105612/گوشی-موبایل-شیائومی-مدل-redmi-note-9-pro-m2003j6b2g-دو-سیم-کارت-ظرفیت-128-گیگابایت"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/9236d53437d221c908f3ea53a0ae4d5f165ea8e9_1595064824.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="گوشی موبایل شیائومی مدل Redmi Note 9 Pro M2003J6B2G دو سیم‌ کارت ظرفیت 128 گیگابایت"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="3105612"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-3105612/گوشی-موبایل-شیائومی-مدل-redmi-note-9-pro-m2003j6b2g-دو-سیم-کارت-ظرفیت-128-گیگابایت">
                        گوشی موبایل شیائومی مدل Redmi Note 9 Pro M2003J6B2...
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="3105612"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-3105612/گوشی-موبایل-شیائومی-مدل-redmi-note-9-pro-m2003j6b2g-دو-سیم-کارت-ظرفیت-128-گیگابایت">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value"></div>
                            <div class="c-new-price__value">
                              ۷,۲۹۹,۰۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="3151747"
                     data-position="8">
                  <div class="c-product-box"><a data-id="3151747"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-3151747/گوشی-موبایل-شیائومی-مدل-redmi-9-m2004j19g-دو-سیم-کارت-ظرفیت-64-گیگابایت"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/dda06bfb7f4df20d01f58bdcdee0d91625c96797_1595839574.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="گوشی موبایل شیائومی مدل Redmi 9 M2004J19G دو سیم‌ کارت ظرفیت 64 گیگابایت"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="3151747"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-3151747/گوشی-موبایل-شیائومی-مدل-redmi-9-m2004j19g-دو-سیم-کارت-ظرفیت-64-گیگابایت">
                        گوشی موبایل شیائومی مدل Redmi 9 M2004J19G دو سیم‌ ...
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="3151747"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-3151747/گوشی-موبایل-شیائومی-مدل-redmi-9-m2004j19g-دو-سیم-کارت-ظرفیت-64-گیگابایت">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value"></div>
                            <div class="c-new-price__value">
                              ۳,۵۹۹,۰۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="4149037"
                     data-position="9">
                  <div class="c-product-box"><a data-id="4149037"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-4149037/گوشی-موبایل-شیائومی-مدل-poco-m3-m2010j19cg-دو-سیم-کارت-ظرفیت-128-گیگابایت"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/219163a48b85831190b1aa4983a71565a19434c2_1609659342.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="گوشی موبایل شیائومی مدل POCO M3 M2010J19CG دو سیم‌ کارت ظرفیت 128 گیگابایت"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="4149037"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-4149037/گوشی-موبایل-شیائومی-مدل-poco-m3-m2010j19cg-دو-سیم-کارت-ظرفیت-128-گیگابایت">
                        گوشی موبایل شیائومی مدل POCO M3 M2010J19CG دو سیم‌...
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="4149037"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-4149037/گوشی-موبایل-شیائومی-مدل-poco-m3-m2010j19cg-دو-سیم-کارت-ظرفیت-128-گیگابایت">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value"></div>
                            <div class="c-new-price__value">
                              ۴,۵۴۹,۰۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="4008192"
                     data-position="10">
                  <div class="c-product-box"><a data-id="4008192"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-4008192/گوشی-موبایل-سامسونگ-مدل-galaxy-s20-fe-sm-g780fds-دو-سیم-کارت-ظرفیت-128-گیگابایت"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/2e16bad7f6ea176ae6502406d7342afe9982fbf7_1608030120.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="گوشی موبایل سامسونگ مدل Galaxy S20 FE SM-G780F/DS دو سیم کارت ظرفیت 128 گیگابایت"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="4008192"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-4008192/گوشی-موبایل-سامسونگ-مدل-galaxy-s20-fe-sm-g780fds-دو-سیم-کارت-ظرفیت-128-گیگابایت">
                        گوشی موبایل سامسونگ مدل Galaxy S20 FE SM-G780F/DS ...
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="4008192"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-4008192/گوشی-موبایل-سامسونگ-مدل-galaxy-s20-fe-sm-g780fds-دو-سیم-کارت-ظرفیت-128-گیگابایت">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value"></div>
                            <div class="c-new-price__value">
                              ۱۲,۶۴۹,۰۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="4175973"
                     data-position="11">
                  <div class="c-product-box"><a data-id="4175973"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-4175973/گوشی-موبایل-سامسونگ-مدل-galaxy-a51-sm-a515fdsn-دو-سیم-کارت-ظرفیت-256گیگابایت"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/b94fc21a67b4e43a4b4c7539129ee4b45303c71b_1609922105.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="گوشی موبایل سامسونگ مدل Galaxy A51 SM-A515F/DSN دو سیم کارت ظرفیت 256گیگابایت"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="4175973"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-4175973/گوشی-موبایل-سامسونگ-مدل-galaxy-a51-sm-a515fdsn-دو-سیم-کارت-ظرفیت-256گیگابایت">
                        گوشی موبایل سامسونگ مدل Galaxy A51 SM-A515F/DSN دو...
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="4175973"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-4175973/گوشی-موبایل-سامسونگ-مدل-galaxy-a51-sm-a515fdsn-دو-سیم-کارت-ظرفیت-256گیگابایت">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value"></div>
                            <div class="c-new-price__value">
                              ۸,۷۰۰,۰۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="3893718"
                     data-position="12">
                  <div class="c-product-box"><a data-id="3893718"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-3893718/گوشی-موبایل-اپل-مدل-iphone-12-pro-max-a2412-دو-سیم-کارت-ظرفیت-256-گیگابایت"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/be7a0e9bf7866759fa3cea7648b149f589a01040_1607433995.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 256 گیگابایت"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="3893718"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-3893718/گوشی-موبایل-اپل-مدل-iphone-12-pro-max-a2412-دو-سیم-کارت-ظرفیت-256-گیگابایت">
                        گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم...
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="3893718"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-3893718/گوشی-موبایل-اپل-مدل-iphone-12-pro-max-a2412-دو-سیم-کارت-ظرفیت-256-گیگابایت">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value"></div>
                            <div class="c-new-price__value">
                              ۳۸,۹۰۰,۰۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="4330247"
                     data-position="13">
                  <div class="c-product-box"><a data-id="4330247"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-4330247/گوشی-موبایل-سامسونگ-مدل-galaxy-s21-ultra-5g-sm-g998bds-دو-سیم-کارت-ظرفیت-256-گیگابایت-و-رم-12-گیگابایت"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/62c8a2c6d57dce6efbde8bbd348490c2f10a55e1_1611742799.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="گوشی موبایل سامسونگ مدل Galaxy S21 Ultra 5G SM-G998B/DS دو سیم کارت ظرفیت 256 گیگابایت و رم 12 گیگابایت"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="4330247"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-4330247/گوشی-موبایل-سامسونگ-مدل-galaxy-s21-ultra-5g-sm-g998bds-دو-سیم-کارت-ظرفیت-256-گیگابایت-و-رم-12-گیگابایت">
                        گوشی موبایل سامسونگ مدل Galaxy S21 Ultra 5G SM-G99...
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="4330247"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-4330247/گوشی-موبایل-سامسونگ-مدل-galaxy-s21-ultra-5g-sm-g998bds-دو-سیم-کارت-ظرفیت-256-گیگابایت-و-رم-12-گیگابایت">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value"></div>
                            <div class="c-new-price__value">
                              ۲۸,۳۹۹,۰۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="3183082"
                     data-position="14">
                  <div class="c-product-box"><a data-id="3183082"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-3183082/گوشی-موبایل-شیائومی-مدل-redmi-9-m2004j19g-دو-سیم-کارت-ظرفیت-32-گیگابایت"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/dda06bfb7f4df20d01f58bdcdee0d91625c96797_1596431171.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="گوشی موبایل شیائومی مدل Redmi 9 M2004J19G دو سیم‌ کارت ظرفیت 32 گیگابایت"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="3183082"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-3183082/گوشی-موبایل-شیائومی-مدل-redmi-9-m2004j19g-دو-سیم-کارت-ظرفیت-32-گیگابایت">
                        گوشی موبایل شیائومی مدل Redmi 9 M2004J19G دو سیم‌ ...
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="3183082"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-3183082/گوشی-موبایل-شیائومی-مدل-redmi-9-m2004j19g-دو-سیم-کارت-ظرفیت-32-گیگابایت">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value"></div>
                            <div class="c-new-price__value">
                              ۳,۲۷۰,۰۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="4244447"
                     data-position="15">
                  <div class="c-product-box"><a data-id="4244447"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-4244447/گوشی-موبایل-شیائومی-مدل-poco-x3-m2007j20cg-دو-سیم-کارت-ظرفیت-128-گیگابایت-clone-1-of-3754319"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/a1981f054f980e183cb23ff39799bd37ac983ae4_1610788090.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="گوشی موبایل شیائومی مدل POCO X3 NFC M2007J20CG دو سیم‌ کارت ظرفیت 64 گیگابایت و رم 6 گیگابایت"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="4244447"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-4244447/گوشی-موبایل-شیائومی-مدل-poco-x3-m2007j20cg-دو-سیم-کارت-ظرفیت-128-گیگابایت-clone-1-of-3754319">
                        گوشی موبایل شیائومی مدل POCO X3 NFC M2007J20CG دو ...
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="4244447"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-4244447/گوشی-موبایل-شیائومی-مدل-poco-x3-m2007j20cg-دو-سیم-کارت-ظرفیت-128-گیگابایت-clone-1-of-3754319">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value"></div>
                            <div class="c-new-price__value">
                              ۵,۹۱۰,۰۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="3532969"
                     data-position="16">
                  <div class="c-product-box"><a data-id="3532969"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-3532969/گوشی-موبایل-هوآوی-مدل-y8p-aqm-lx1-دو-سیم-کارت-ظرفیت-128-گیگابایت"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/7ed37a46aceaefc032c405304049e34cd7dfc91c_1602333633.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="گوشی موبایل هوآوی مدل Y8p AQM-LX1 دو سیم کارت ظرفیت 128 گیگابایت"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="3532969"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-3532969/گوشی-موبایل-هوآوی-مدل-y8p-aqm-lx1-دو-سیم-کارت-ظرفیت-128-گیگابایت">
                        گوشی موبایل هوآوی مدل Y8p AQM-LX1 دو سیم کارت ظرفی...
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="3532969"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-3532969/گوشی-موبایل-هوآوی-مدل-y8p-aqm-lx1-دو-سیم-کارت-ظرفیت-128-گیگابایت">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value"></div>
                            <div class="c-new-price__value">
                              ۴,۱۹۹,۰۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="3246506"
                     data-position="17">
                  <div class="c-product-box"><a data-id="3246506"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-3246506/گوشی-موبایل-شیائومی-مدل-redmi-9a-m2006c3lg-دو-سیم-کارت-ظرفیت-32-گیگابایت"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/2f5cbd1996ddd89464afeed70d4def6529cb4ed8_1597575940.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="گوشی موبایل شیائومی مدل Redmi 9A M2006C3LG دو سیم‌ کارت ظرفیت 32 گیگابایت	"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="3246506"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-3246506/گوشی-موبایل-شیائومی-مدل-redmi-9a-m2006c3lg-دو-سیم-کارت-ظرفیت-32-گیگابایت">
                        گوشی موبایل شیائومی مدل Redmi 9A M2006C3LG دو سیم‌...
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="3246506"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-3246506/گوشی-موبایل-شیائومی-مدل-redmi-9a-m2006c3lg-دو-سیم-کارت-ظرفیت-32-گیگابایت">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value"></div>
                            <div class="c-new-price__value">
                              ۳,۲۰۰,۰۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="2066213"
                     data-position="18">
                  <div class="c-product-box"><a data-id="2066213"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-2066213/گوشی-موبایل-سامسونگ-مدل-galaxy-a10s-sm-a107fds-دو-سیم-کارت-ظرفیت-32-گیگابایت"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/113562469.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="گوشی موبایل سامسونگ مدل Galaxy A10s SM-A107F/DS دو سیم کارت ظرفیت 32 گیگابایت"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="2066213"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-2066213/گوشی-موبایل-سامسونگ-مدل-galaxy-a10s-sm-a107fds-دو-سیم-کارت-ظرفیت-32-گیگابایت">
                        گوشی موبایل سامسونگ مدل Galaxy A10s SM-A107F/DS دو...
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="2066213"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-2066213/گوشی-موبایل-سامسونگ-مدل-galaxy-a10s-sm-a107fds-دو-سیم-کارت-ظرفیت-32-گیگابایت">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value"></div>
                            <div class="c-new-price__value">
                              ۳,۱۱۹,۰۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="4230579"
                     data-position="19">
                  <div class="c-product-box"><a data-id="4230579"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-4230579/گوشی-موبایل-سامسونگ-مدل-galaxy-a12-sm-a125fds-دو-سیم-کارت-ظرفیت-128-گیگابایت-و-رم-4-گیگابایت"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/6207b3bf015d7fff97e9e04868497ac6a30474a3_1610543495.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="گوشی موبایل سامسونگ مدل Galaxy A12 SM-A125F/DS دو سیم کارت ظرفیت 128 گیگابایت و رم 4 گیگابایت"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="4230579"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-4230579/گوشی-موبایل-سامسونگ-مدل-galaxy-a12-sm-a125fds-دو-سیم-کارت-ظرفیت-128-گیگابایت-و-رم-4-گیگابایت">
                        گوشی موبایل سامسونگ مدل Galaxy A12 SM-A125F/DS دو ...
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="4230579"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-4230579/گوشی-موبایل-سامسونگ-مدل-galaxy-a12-sm-a125fds-دو-سیم-کارت-ظرفیت-128-گیگابایت-و-رم-4-گیگابایت">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value"></div>
                            <div class="c-new-price__value">
                              ۴,۳۴۹,۰۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="3266410"
                     data-position="20">
                  <div class="c-product-box"><a data-id="3266410"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-3266410/گوشی-موبایل-سامسونگ-مدل-galaxy-a01-core-sm-a013gds-دو-سیم-کارت-ظرفیت-16-گیگابایت"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/d0287df2f6aa331ed66926d9d30684ad1ca018ab_1597834727.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="گوشی موبایل سامسونگ مدل Galaxy A01 Core SM-A013G/DS دو سیم کارت ظرفیت 16 گیگابایت"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="3266410"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-3266410/گوشی-موبایل-سامسونگ-مدل-galaxy-a01-core-sm-a013gds-دو-سیم-کارت-ظرفیت-16-گیگابایت">
                        گوشی موبایل سامسونگ مدل Galaxy A01 Core SM-A013G/D...
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="3266410"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-3266410/گوشی-موبایل-سامسونگ-مدل-galaxy-a01-core-sm-a013gds-دو-سیم-کارت-ظرفیت-16-گیگابایت">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value"></div>
                            <div class="c-new-price__value">
                              ۲,۰۱۹,۰۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="2961837"
                     data-position="21">
                  <div class="c-product-box"><a data-id="2961837"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-2961837/گوشی-موبایل-هوآوی-مدل-nova-7i-jny-lx1-دو-سیم-کارت-ظرفیت-128-گیگابایت"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/121811757.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="گوشی موبایل هوآوی مدل Nova 7i JNY-LX1 دو سیم کارت ظرفیت 128 گیگابایت	"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="2961837"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-2961837/گوشی-موبایل-هوآوی-مدل-nova-7i-jny-lx1-دو-سیم-کارت-ظرفیت-128-گیگابایت">
                        گوشی موبایل هوآوی مدل Nova 7i JNY-LX1 دو سیم کارت ...
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="2961837"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-2961837/گوشی-موبایل-هوآوی-مدل-nova-7i-jny-lx1-دو-سیم-کارت-ظرفیت-128-گیگابایت">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value"></div>
                            <div class="c-new-price__value">
                              ۶,۱۸۰,۰۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-button-prev js-swiper-button-prev"></div>
              <div class="swiper-button-next js-swiper-button-next"></div>
            </div>
          </div>
        </section>


        <div class="swiper-products-container" data-type="homepagelatest">
          <script>
            var carouselDataTracker = {
              "carouselPosition": "HOME_7",
              "id": "sn-carousels-2",
              "title": "\u0645\u0646\u062a\u062e\u0628 \u062c\u062f\u06cc\u062f\u062a\u0631\u06cc\u0646 \u06a9\u0627\u0644\u0627\u0647\u0627",
              "title_en": "Newest",
              "products": [{
                "id": 4504443,
                "name": "\u0645\u0627\u06af \u0645\u062f\u0644 \u0631\u0648\u0632 \u067e\u062f\u0631 \u06a9\u062f 04",
                "price": 389000,
                "category": "\u0645\u0627\u06af\u060c \u0644\u06cc\u0648\u0627\u0646 \u0648 \u0641\u0646\u062c\u0627\u0646",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 1,
                "status": "marketable"
              }, {
                "id": 4504481,
                "name": "\u0645\u062d\u0627\u0641\u0638 \u0644\u0646\u0632 \u062f\u0648\u0631\u0628\u06cc\u0646 \u0633\u06cc\u062d\u0627\u0646 \u0645\u062f\u0644 GLP \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc POCO F2 Pro",
                "price": 157500,
                "category": "Mobile Lens Screen Protector",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 2,
                "status": "marketable"
              }, {
                "id": 4504456,
                "name": "\u0639\u0637\u0631 \u062c\u06cc\u0628\u06cc \u0645\u0631\u062f\u0627\u0646\u0647 \u062f\u06cc\u0648\u0627\u06cc\u0632 \u0645\u062f\u0644 \u0644\u062c\u0646\u062f \u062d\u062c\u0645 45 \u0645\u06cc\u0644\u06cc \u0644\u06cc\u062a\u0631",
                "price": 520000,
                "category": "\u0639\u0637\u0631 \u062c\u06cc\u0628\u06cc",
                "brand": "Diviz",
                "position": 3,
                "status": "marketable"
              }, {
                "id": 4504570,
                "name": " \u0633\u062a \u0633\u0648\u06cc\u0634\u0631\u062a  \u0648 \u0634\u0644\u0648\u0627\u0631 \u0632\u0646\u0627\u0646\u0647 \u0645\u062f\u0644 \u0641\u06cc\u0644 brfp-327 \u0631\u0646\u06af \u0635\u0648\u0631\u062a\u06cc \u0631\u0648\u0634\u0646",
                "price": 1090000,
                "category": "WOMEN Homewear Sets",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 4,
                "status": "marketable"
              }, {
                "id": 4504516,
                "name": "\u067e\u06cc\u0631\u0627\u0647\u0646 \u0632\u0646\u0627\u0646\u0647 \u0645\u062f\u0644 612",
                "price": 2400000,
                "category": "WOMEN Homewear Sets",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 5,
                "status": "marketable"
              }, {
                "id": 4609196,
                "name": "\u062c\u0627\u062f\u0633\u062a\u0645\u0627\u0644 \u0645\u062f\u0644 SD 1008",
                "price": 1280000,
                "category": "Tissue Holder",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 6,
                "status": "marketable"
              }, {
                "id": 4504578,
                "name": "\u0634\u0627\u0644 \u0632\u0646\u0627\u0646\u0647 \u0645\u062f\u0644 3",
                "price": 950000,
                "category": "WOMEN SCARVES",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 7,
                "status": "marketable"
              }, {
                "id": 4504577,
                "name": "\u067e\u06cc\u0631\u0627\u0647\u0646 \u0646\u0648\u0632\u0627\u062f\u06cc \u0645\u062f\u0644 \u0646\u0648\u0627",
                "price": 1990000,
                "category": "KIDS DRESSES",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 8,
                "status": "marketable"
              }, {
                "id": 4504587,
                "name": "\u06a9\u062a\u0627\u0628 \u0639\u0645\u0627\u0631 \u062d\u0644\u0628 \u0627\u062b\u0631 \u0645\u062d\u0645\u062f \u0639\u0644\u06cc \u062c\u0639\u0641\u0631\u06cc \u0627\u0646\u062a\u0634\u0627\u0631\u0627\u062a \u0631\u0648\u0627\u06cc\u062a \u0641\u062a\u062d",
                "price": 270000,
                "category": "\u06a9\u062a\u0627\u0628 \u0686\u0627\u067e\u06cc",
                "brand": "Revayat e Fath Publications",
                "position": 9,
                "status": "marketable"
              }, {
                "id": 4504649,
                "name": "\u0631\u0648\u063a\u0646 \u0644\u062d\u06cc\u0645 \u0644\u0627\u062a\u0641\u062a \u0645\u062f\u0644 aria solder \u0648\u0632\u0646 50 \u06af\u0631\u0645",
                "price": 450000,
                "category": "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0647\u0648\u06cc\u0647",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 10,
                "status": "marketable"
              }, {
                "id": 4504450,
                "name": "\u0645\u0627\u06af \u0645\u062f\u0644 \u0631\u0648\u0632 \u067e\u062f\u0631 \u06a9\u062f 05",
                "price": 389000,
                "category": "\u0645\u0627\u06af\u060c \u0644\u06cc\u0648\u0627\u0646 \u0648 \u0641\u0646\u062c\u0627\u0646",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 11,
                "status": "marketable"
              }, {
                "id": 4504672,
                "name": "\u0645\u0644\u062e \u06a9\u0648\u0627\u062f\u06a9\u0648\u067e\u062a\u0631 \u0645\u062f\u0644 1001 \u0628\u0633\u062a\u0647 6 \u0639\u062f\u062f\u06cc",
                "price": 70000,
                "category": "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06af\u062c\u062a",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 12,
                "status": "marketable"
              }, {
                "id": 4504521,
                "name": "\u0634\u0627\u0644 \u0632\u0646\u0627\u0646\u0647 \u0645\u062f\u0644 AMN302",
                "price": 1020000,
                "category": "WOMEN SCARVES",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 13,
                "status": "marketable"
              }, {
                "id": 4504459,
                "name": "\u0645\u0627\u06af \u0645\u062f\u0644 \u0631\u0648\u0632 \u067e\u062f\u0631 \u06a9\u062f 06",
                "price": 389000,
                "category": "\u0645\u0627\u06af\u060c \u0644\u06cc\u0648\u0627\u0646 \u0648 \u0641\u0646\u062c\u0627\u0646",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 14,
                "status": "marketable"
              }, {
                "id": 4504518,
                "name": "\u0639\u0637\u0631 \u062c\u06cc\u0628\u06cc \u0645\u0631\u062f\u0627\u0646\u0647 \u062f\u06cc\u0648\u0627\u06cc\u0632 \u0645\u062f\u0644 \u0633\u0627\u0648\u0627\u062c \u062d\u062c\u0645 45 \u0645\u06cc\u0644\u06cc \u0644\u06cc\u062a\u0631",
                "price": 510000,
                "category": "\u0639\u0637\u0631 \u062c\u06cc\u0628\u06cc",
                "brand": "Diviz",
                "position": 15,
                "status": "marketable"
              }, {
                "id": 4504453,
                "name": "\u0642\u0631\u0635 \u062e\u0648\u0634\u0628\u0648 \u06a9\u0646\u0646\u062f\u0647 \u062f\u0647\u0627\u0646 \u0646\u0626\u0648\u0646 \u0628\u0627 \u0637\u0639\u0645 \u0647\u0644\u0648  - 15 \u06af\u0631\u0645",
                "price": 85000,
                "category": "\u0622\u062f\u0627\u0645\u0633 \u0648 \u062e\u0648\u0634\u0628\u0648 \u06a9\u0646\u0646\u062f\u0647\u200c\u06cc \u062f\u0647\u0627\u0646",
                "brand": "\u0646\u0626\u0648\u0646",
                "position": 16,
                "status": "marketable"
              }, {
                "id": 4504523,
                "name": "    \u06a9\u0627\u0648\u0631 \u0644\u0627\u06cc\u0646 \u06a9\u06cc\u0646\u06af  \u0645\u062f\u0644VICTORIA \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af Galaxy A70\/A70s",
                "price": 693000,
                "category": "\u06a9\u06cc\u0641 \u0648 \u06a9\u0627\u0648\u0631 \u06af\u0648\u0634\u06cc",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 17,
                "status": "marketable"
              }, {
                "id": 4504588,
                "name": "\u0645\u062c\u0645\u0648\u0639\u0647 \u06f1\u06f0\u06f4 \u0639\u062f\u062f\u06cc \u0627\u0628\u0632\u0627\u0631 \u0622\u067e \u0627\u0633\u067e\u0631\u06cc\u062a \u0645\u062f\u0644 kit",
                "price": 22000000,
                "category": "Tools Set",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 18,
                "status": "marketable"
              }, {
                "id": 4504473,
                "name": "\u062c\u0627 \u06a9\u0644\u06cc\u062f\u06cc \u0632\u0646\u0627\u0646\u0647 \u0645\u0631\u062f\u0627\u0646\u0647 \u062a\u0631\u0645\u0647 1 \u0637\u0631\u062d \u0645\u062d\u0645\u062f \u06a9\u062f jms 7002",
                "price": 960000,
                "category": "UNI Keyring & keyChain",
                "brand": "\u062a\u0631\u0645\u0647 \u06f1",
                "position": 19,
                "status": "marketable"
              }, {
                "id": 4504445,
                "name": "\u06af\u0644\u062f\u0627\u0646 \u062f\u06a9\u0648\u0631\u06cc \u0645\u062f\u0644 \u0631\u0648\u06cc\u0627\u0644 \u06a9\u062f Shahrad_2535",
                "price": 215000,
                "category": "\u06af\u0644 \u0648 \u06af\u0644\u062f\u0627\u0646",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 20,
                "status": "marketable"
              }, {
                "id": 4504485,
                "name": "    \u06a9\u0627\u0648\u0631 \u0644\u0627\u06cc\u0646 \u06a9\u06cc\u0646\u06af  \u0645\u062f\u0644VICTORIA \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af Galaxy A50\/A50s\/A30s",
                "price": 693000,
                "category": "\u06a9\u06cc\u0641 \u0648 \u06a9\u0627\u0648\u0631 \u06af\u0648\u0634\u06cc",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 21,
                "status": "marketable"
              }, {
                "id": 4504496,
                "name": "\u062c\u0627 \u0634\u0645\u0639\u06cc \u0686\u0648\u0628\u06cc \u06a9\u062f 88",
                "price": 350000,
                "category": "\u062c\u0627\u0634\u0645\u0639\u06cc\u060c \u062c\u0627\u0639\u0648\u062f\u06cc \u0648 \u0622\u0628\u0627\u0698\u0648\u0631",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 22,
                "status": "marketable"
              }, {
                "id": 4504673,
                "name": "\u0646\u0634\u0627\u0646\u06af\u0631 \u06a9\u062a\u0627\u0628 \u0644\u0648\u06a9\u0633\u06cc\u0646\u0648 \u0645\u062f\u0644 \u0633\u06cc\u0628\u06cc\u0644 \u0631\u0648\u06cc\u0627\u0644 \u0645\u062c\u0645\u0648\u0639\u0647 2 \u0639\u062f\u062f\u06cc",
                "price": 139500,
                "category": "\u0646\u0634\u0627\u0646\u06af\u0631 \u06a9\u062a\u0627\u0628",
                "brand": "\u0644\u0648\u06a9\u0633\u06cc\u0646\u0648",
                "position": 23,
                "status": "marketable"
              }, {
                "id": 4504507,
                "name": "\u0686\u0645\u062f\u0627\u0646 \u0645\u062f\u0644 JPK \u0633\u0627\u06cc\u0632 \u0645\u062a\u0648\u0633\u0637",
                "price": 5400000,
                "category": "\u0633\u0627\u06a9 \u0648 \u0686\u0645\u062f\u0627\u0646",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 24,
                "status": "marketable"
              }]
            };
            if (carouselDataTracker) {
              if (!window.carouselData)
                window.carouselData = [carouselDataTracker];
              else
                window.carouselData.push(carouselDataTracker);
            }

            var carouselDataTracker = null;
            if (carouselDataTracker) {
              if (!window.carouselData)
                window.carouselData = [carouselDataTracker];
              else
                window.carouselData.push(carouselDataTracker);
            }
          </script>
          <script>
            window.dataLayer.push({
              "event": "eec.productImpression", "ecommerce": {
                "currencyCode": "EUR",
                "impressions": [{
                  "name": "\u0645\u0627\u06af \u0645\u062f\u0644 \u0631\u0648\u0632 \u067e\u062f\u0631 \u06a9\u062f 04",
                  "id": 4504443,
                  "price": 389000,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "\u0645\u0627\u06af\u060c \u0644\u06cc\u0648\u0627\u0646 \u0648 \u0641\u0646\u062c\u0627\u0646",
                  "list": "category-\u0645\u0627\u06af\u060c \u0644\u06cc\u0648\u0627\u0646 \u0648 \u0641\u0646\u062c\u0627\u0646",
                  "position": 1,
                  "dimension6": 1,
                  "dimension2": 0,
                  "dimension9": 5,
                  "metric6": 1,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-top-new",
                  "dimension7": "none"
                }, {
                  "name": "\u0645\u062d\u0627\u0641\u0638 \u0644\u0646\u0632 \u062f\u0648\u0631\u0628\u06cc\u0646 \u0633\u06cc\u062d\u0627\u0646 \u0645\u062f\u0644 GLP \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc POCO F2 Pro",
                  "id": 4504481,
                  "price": 157500,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "\u0645\u062d\u0627\u0641\u0638 \u0644\u0646\u0632 \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                  "list": "category-\u0645\u062d\u0627\u0641\u0638 \u0644\u0646\u0632 \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                  "position": 2,
                  "dimension6": 1,
                  "dimension2": 37,
                  "dimension9": 5,
                  "metric6": 1,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-top-new",
                  "dimension7": "special-offer"
                }, {
                  "name": "\u0639\u0637\u0631 \u062c\u06cc\u0628\u06cc \u0645\u0631\u062f\u0627\u0646\u0647 \u062f\u06cc\u0648\u0627\u06cc\u0632 \u0645\u062f\u0644 \u0644\u062c\u0646\u062f \u062d\u062c\u0645 45 \u0645\u06cc\u0644\u06cc \u0644\u06cc\u062a\u0631",
                  "id": 4504456,
                  "price": 520000,
                  "brand": "\u062f\u06cc\u0648\u0627\u06cc\u0632",
                  "category": "\u0639\u0637\u0631 \u062c\u06cc\u0628\u06cc",
                  "list": "category-\u0639\u0637\u0631 \u062c\u06cc\u0628\u06cc",
                  "position": 3,
                  "dimension6": 1,
                  "dimension2": 0,
                  "dimension9": 0,
                  "metric6": 0,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-top-new",
                  "dimension7": "none"
                }, {
                  "name": " \u0633\u062a \u0633\u0648\u06cc\u0634\u0631\u062a  \u0648 \u0634\u0644\u0648\u0627\u0631 \u0632\u0646\u0627\u0646\u0647 \u0645\u062f\u0644 \u0641\u06cc\u0644 brfp-327 \u0631\u0646\u06af \u0635\u0648\u0631\u062a\u06cc \u0631\u0648\u0634\u0646",
                  "id": 4504570,
                  "price": 1090000,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "\u0633\u062a \u0644\u0628\u0627\u0633 \u0631\u0627\u062d\u062a\u06cc \u0632\u0646\u0627\u0646\u0647",
                  "list": "category-\u0633\u062a \u0644\u0628\u0627\u0633 \u0631\u0627\u062d\u062a\u06cc \u0632\u0646\u0627\u0646\u0647",
                  "position": 4,
                  "dimension6": 1,
                  "dimension2": 0,
                  "dimension9": 0,
                  "metric6": 0,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-top-new",
                  "dimension7": "none"
                }, {
                  "name": "\u067e\u06cc\u0631\u0627\u0647\u0646 \u0632\u0646\u0627\u0646\u0647 \u0645\u062f\u0644 612",
                  "id": 4504516,
                  "price": 2400000,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "\u0633\u062a \u0644\u0628\u0627\u0633 \u0631\u0627\u062d\u062a\u06cc \u0632\u0646\u0627\u0646\u0647",
                  "list": "category-\u0633\u062a \u0644\u0628\u0627\u0633 \u0631\u0627\u062d\u062a\u06cc \u0632\u0646\u0627\u0646\u0647",
                  "position": 5,
                  "dimension6": 1,
                  "dimension2": 0,
                  "dimension9": 0,
                  "metric6": 0,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-top-new",
                  "dimension7": "none"
                }, {
                  "name": "\u062c\u0627\u062f\u0633\u062a\u0645\u0627\u0644 \u0645\u062f\u0644 SD 1008",
                  "id": 4609196,
                  "price": 1280000,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "\u062c\u0627\u062f\u0633\u062a\u0645\u0627\u0644\u06cc",
                  "list": "category-\u062c\u0627\u062f\u0633\u062a\u0645\u0627\u0644\u06cc",
                  "position": 6,
                  "dimension6": 1,
                  "dimension2": 0,
                  "dimension9": 0,
                  "metric6": 0,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-top-new",
                  "dimension7": "none"
                }, {
                  "name": "\u0634\u0627\u0644 \u0632\u0646\u0627\u0646\u0647 \u0645\u062f\u0644 3",
                  "id": 4504578,
                  "price": 950000,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "\u0634\u0627\u0644 \u0648 \u0631\u0648\u0633\u0631\u06cc \u0632\u0646\u0627\u0646\u0647",
                  "list": "category-\u0634\u0627\u0644 \u0648 \u0631\u0648\u0633\u0631\u06cc \u0632\u0646\u0627\u0646\u0647",
                  "position": 7,
                  "dimension6": 0,
                  "dimension2": 0,
                  "dimension9": 0,
                  "metric6": 0,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-top-new",
                  "dimension7": "none"
                }, {
                  "name": "\u067e\u06cc\u0631\u0627\u0647\u0646 \u0646\u0648\u0632\u0627\u062f\u06cc \u0645\u062f\u0644 \u0646\u0648\u0627",
                  "id": 4504577,
                  "price": 1990000,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "\u067e\u06cc\u0631\u0627\u0647\u0646 \u0648 \u0633\u0627\u0631\u0627\u0641\u0648\u0646 \u0646\u0648\u0632\u0627\u062f",
                  "list": "category-\u067e\u06cc\u0631\u0627\u0647\u0646 \u0648 \u0633\u0627\u0631\u0627\u0641\u0648\u0646 \u0646\u0648\u0632\u0627\u062f",
                  "position": 8,
                  "dimension6": 1,
                  "dimension2": 0,
                  "dimension9": 0,
                  "metric6": 0,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-top-new",
                  "dimension7": "none"
                }, {
                  "name": "\u06a9\u062a\u0627\u0628 \u0639\u0645\u0627\u0631 \u062d\u0644\u0628 \u0627\u062b\u0631 \u0645\u062d\u0645\u062f \u0639\u0644\u06cc \u062c\u0639\u0641\u0631\u06cc \u0627\u0646\u062a\u0634\u0627\u0631\u0627\u062a \u0631\u0648\u0627\u06cc\u062a \u0641\u062a\u062d",
                  "id": 4504587,
                  "price": 270000,
                  "brand": "\u0627\u0646\u062a\u0634\u0627\u0631\u0627\u062a \u0631\u0648\u0627\u06cc\u062a \u0641\u062a\u062d",
                  "category": "\u06a9\u062a\u0627\u0628 \u0686\u0627\u067e\u06cc",
                  "list": "category-\u06a9\u062a\u0627\u0628 \u0686\u0627\u067e\u06cc",
                  "position": 9,
                  "dimension6": 1,
                  "dimension2": 0,
                  "dimension9": 0,
                  "metric6": 0,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-top-new",
                  "dimension7": "none"
                }, {
                  "name": "\u0631\u0648\u063a\u0646 \u0644\u062d\u06cc\u0645 \u0644\u0627\u062a\u0641\u062a \u0645\u062f\u0644 aria solder \u0648\u0632\u0646 50 \u06af\u0631\u0645",
                  "id": 4504649,
                  "price": 450000,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0647\u0648\u06cc\u0647",
                  "list": "category-\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0647\u0648\u06cc\u0647",
                  "position": 10,
                  "dimension6": 1,
                  "dimension2": 18,
                  "dimension9": 0,
                  "metric6": 0,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-top-new",
                  "dimension7": "special-offer"
                }, {
                  "name": "\u0645\u0627\u06af \u0645\u062f\u0644 \u0631\u0648\u0632 \u067e\u062f\u0631 \u06a9\u062f 05",
                  "id": 4504450,
                  "price": 389000,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "\u0645\u0627\u06af\u060c \u0644\u06cc\u0648\u0627\u0646 \u0648 \u0641\u0646\u062c\u0627\u0646",
                  "list": "category-\u0645\u0627\u06af\u060c \u0644\u06cc\u0648\u0627\u0646 \u0648 \u0641\u0646\u062c\u0627\u0646",
                  "position": 11,
                  "dimension6": 1,
                  "dimension2": 0,
                  "dimension9": 0,
                  "metric6": 0,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-top-new",
                  "dimension7": "none"
                }, {
                  "name": "\u0645\u0644\u062e \u06a9\u0648\u0627\u062f\u06a9\u0648\u067e\u062a\u0631 \u0645\u062f\u0644 1001 \u0628\u0633\u062a\u0647 6 \u0639\u062f\u062f\u06cc",
                  "id": 4504672,
                  "price": 70000,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06af\u062c\u062a",
                  "list": "category-\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06af\u062c\u062a",
                  "position": 12,
                  "dimension6": 1,
                  "dimension2": 30,
                  "dimension9": 0,
                  "metric6": 0,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-top-new",
                  "dimension7": "special-offer"
                }, {
                  "name": "\u0634\u0627\u0644 \u0632\u0646\u0627\u0646\u0647 \u0645\u062f\u0644 AMN302",
                  "id": 4504521,
                  "price": 1020000,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "\u0634\u0627\u0644 \u0648 \u0631\u0648\u0633\u0631\u06cc \u0632\u0646\u0627\u0646\u0647",
                  "list": "category-\u0634\u0627\u0644 \u0648 \u0631\u0648\u0633\u0631\u06cc \u0632\u0646\u0627\u0646\u0647",
                  "position": 13,
                  "dimension6": 0,
                  "dimension2": 0,
                  "dimension9": 0,
                  "metric6": 0,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-top-new",
                  "dimension7": "none"
                }, {
                  "name": "\u0645\u0627\u06af \u0645\u062f\u0644 \u0631\u0648\u0632 \u067e\u062f\u0631 \u06a9\u062f 06",
                  "id": 4504459,
                  "price": 389000,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "\u0645\u0627\u06af\u060c \u0644\u06cc\u0648\u0627\u0646 \u0648 \u0641\u0646\u062c\u0627\u0646",
                  "list": "category-\u0645\u0627\u06af\u060c \u0644\u06cc\u0648\u0627\u0646 \u0648 \u0641\u0646\u062c\u0627\u0646",
                  "position": 14,
                  "dimension6": 1,
                  "dimension2": 0,
                  "dimension9": 0,
                  "metric6": 0,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-top-new",
                  "dimension7": "none"
                }, {
                  "name": "\u0639\u0637\u0631 \u062c\u06cc\u0628\u06cc \u0645\u0631\u062f\u0627\u0646\u0647 \u062f\u06cc\u0648\u0627\u06cc\u0632 \u0645\u062f\u0644 \u0633\u0627\u0648\u0627\u062c \u062d\u062c\u0645 45 \u0645\u06cc\u0644\u06cc \u0644\u06cc\u062a\u0631",
                  "id": 4504518,
                  "price": 510000,
                  "brand": "\u062f\u06cc\u0648\u0627\u06cc\u0632",
                  "category": "\u0639\u0637\u0631 \u062c\u06cc\u0628\u06cc",
                  "list": "category-\u0639\u0637\u0631 \u062c\u06cc\u0628\u06cc",
                  "position": 15,
                  "dimension6": 1,
                  "dimension2": 0,
                  "dimension9": 0,
                  "metric6": 0,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-top-new",
                  "dimension7": "none"
                }, {
                  "name": "\u0642\u0631\u0635 \u062e\u0648\u0634\u0628\u0648 \u06a9\u0646\u0646\u062f\u0647 \u062f\u0647\u0627\u0646 \u0646\u0626\u0648\u0646 \u0628\u0627 \u0637\u0639\u0645 \u0647\u0644\u0648  - 15 \u06af\u0631\u0645",
                  "id": 4504453,
                  "price": 85000,
                  "brand": "\u0646\u0626\u0648\u0646",
                  "category": "\u0622\u062f\u0627\u0645\u0633 \u0648 \u062e\u0648\u0634\u0628\u0648 \u06a9\u0646\u0646\u062f\u0647\u200c\u06cc \u062f\u0647\u0627\u0646",
                  "list": "category-\u0622\u062f\u0627\u0645\u0633 \u0648 \u062e\u0648\u0634\u0628\u0648 \u06a9\u0646\u0646\u062f\u0647\u200c\u06cc \u062f\u0647\u0627\u0646",
                  "position": 16,
                  "dimension6": 1,
                  "dimension2": 0,
                  "dimension9": 3,
                  "metric6": 3,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-top-new",
                  "dimension7": "none"
                }, {
                  "name": "    \u06a9\u0627\u0648\u0631 \u0644\u0627\u06cc\u0646 \u06a9\u06cc\u0646\u06af  \u0645\u062f\u0644VICTORIA \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af Galaxy A70\/A70s",
                  "id": 4504523,
                  "price": 693000,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "\u06a9\u06cc\u0641 \u0648 \u06a9\u0627\u0648\u0631 \u06af\u0648\u0634\u06cc",
                  "list": "category-\u06a9\u06cc\u0641 \u0648 \u06a9\u0627\u0648\u0631 \u06af\u0648\u0634\u06cc",
                  "position": 17,
                  "dimension6": 0,
                  "dimension2": 30,
                  "dimension9": 0,
                  "metric6": 0,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-top-new",
                  "dimension7": "special-offer"
                }, {
                  "name": "\u0645\u062c\u0645\u0648\u0639\u0647 \u06f1\u06f0\u06f4 \u0639\u062f\u062f\u06cc \u0627\u0628\u0632\u0627\u0631 \u0622\u067e \u0627\u0633\u067e\u0631\u06cc\u062a \u0645\u062f\u0644 kit",
                  "id": 4504588,
                  "price": 22000000,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "\u0645\u062c\u0645\u0648\u0639\u0647 \u0627\u0628\u0632\u0627\u0631",
                  "list": "category-\u0645\u062c\u0645\u0648\u0639\u0647 \u0627\u0628\u0632\u0627\u0631",
                  "position": 18,
                  "dimension6": 1,
                  "dimension2": 0,
                  "dimension9": 0,
                  "metric6": 0,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-top-new",
                  "dimension7": "none"
                }, {
                  "name": "\u062c\u0627 \u06a9\u0644\u06cc\u062f\u06cc \u0632\u0646\u0627\u0646\u0647 \u0645\u0631\u062f\u0627\u0646\u0647 \u062a\u0631\u0645\u0647 1 \u0637\u0631\u062d \u0645\u062d\u0645\u062f \u06a9\u062f jms 7002",
                  "id": 4504473,
                  "price": 960000,
                  "brand": "\u062a\u0631\u0645\u0647 \u06f1",
                  "category": "\u062c\u0627\u06a9\u0644\u06cc\u062f\u06cc \u0632\u0646\u0627\u0646\u0647 \u0648 \u0645\u0631\u062f\u0627\u0646\u0647",
                  "list": "category-\u062c\u0627\u06a9\u0644\u06cc\u062f\u06cc \u0632\u0646\u0627\u0646\u0647 \u0648 \u0645\u0631\u062f\u0627\u0646\u0647",
                  "position": 19,
                  "dimension6": 1,
                  "dimension2": 0,
                  "dimension9": 0,
                  "metric6": 0,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-top-new",
                  "dimension7": "none"
                }, {
                  "name": "\u06af\u0644\u062f\u0627\u0646 \u062f\u06a9\u0648\u0631\u06cc \u0645\u062f\u0644 \u0631\u0648\u06cc\u0627\u0644 \u06a9\u062f Shahrad_2535",
                  "id": 4504445,
                  "price": 215000,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "\u06af\u0644 \u0648 \u06af\u0644\u062f\u0627\u0646",
                  "list": "category-\u06af\u0644 \u0648 \u06af\u0644\u062f\u0627\u0646",
                  "position": 20,
                  "dimension6": 1,
                  "dimension2": 0,
                  "dimension9": 3,
                  "metric6": 2,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-top-new",
                  "dimension7": "none"
                }, {
                  "name": "    \u06a9\u0627\u0648\u0631 \u0644\u0627\u06cc\u0646 \u06a9\u06cc\u0646\u06af  \u0645\u062f\u0644VICTORIA \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af Galaxy A50\/A50s\/A30s",
                  "id": 4504485,
                  "price": 693000,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "\u06a9\u06cc\u0641 \u0648 \u06a9\u0627\u0648\u0631 \u06af\u0648\u0634\u06cc",
                  "list": "category-\u06a9\u06cc\u0641 \u0648 \u06a9\u0627\u0648\u0631 \u06af\u0648\u0634\u06cc",
                  "position": 21,
                  "dimension6": 0,
                  "dimension2": 30,
                  "dimension9": 0,
                  "metric6": 0,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-top-new",
                  "dimension7": "special-offer"
                }, {
                  "name": "\u062c\u0627 \u0634\u0645\u0639\u06cc \u0686\u0648\u0628\u06cc \u06a9\u062f 88",
                  "id": 4504496,
                  "price": 350000,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "\u062c\u0627\u0634\u0645\u0639\u06cc\u060c \u062c\u0627\u0639\u0648\u062f\u06cc \u0648 \u0622\u0628\u0627\u0698\u0648\u0631",
                  "list": "category-\u062c\u0627\u0634\u0645\u0639\u06cc\u060c \u062c\u0627\u0639\u0648\u062f\u06cc \u0648 \u0622\u0628\u0627\u0698\u0648\u0631",
                  "position": 22,
                  "dimension6": 1,
                  "dimension2": 0,
                  "dimension9": 0,
                  "metric6": 0,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-top-new",
                  "dimension7": "none"
                }, {
                  "name": "\u0646\u0634\u0627\u0646\u06af\u0631 \u06a9\u062a\u0627\u0628 \u0644\u0648\u06a9\u0633\u06cc\u0646\u0648 \u0645\u062f\u0644 \u0633\u06cc\u0628\u06cc\u0644 \u0631\u0648\u06cc\u0627\u0644 \u0645\u062c\u0645\u0648\u0639\u0647 2 \u0639\u062f\u062f\u06cc",
                  "id": 4504673,
                  "price": 139500,
                  "brand": "\u0644\u0648\u06a9\u0633\u06cc\u0646\u0648",
                  "category": "\u0646\u0634\u0627\u0646\u06af\u0631 \u06a9\u062a\u0627\u0628",
                  "list": "category-\u0646\u0634\u0627\u0646\u06af\u0631 \u06a9\u062a\u0627\u0628",
                  "position": 23,
                  "dimension6": 1,
                  "dimension2": 10,
                  "dimension9": 0,
                  "metric6": 0,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-top-new",
                  "dimension7": "special-offer"
                }, {
                  "name": "\u0686\u0645\u062f\u0627\u0646 \u0645\u062f\u0644 JPK \u0633\u0627\u06cc\u0632 \u0645\u062a\u0648\u0633\u0637",
                  "id": 4504507,
                  "price": 5400000,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "\u0633\u0627\u06a9 \u0648 \u0686\u0645\u062f\u0627\u0646",
                  "list": "category-\u0633\u0627\u06a9 \u0648 \u0686\u0645\u062f\u0627\u0646",
                  "position": 24,
                  "dimension6": 0,
                  "dimension2": 45,
                  "dimension9": 0,
                  "metric6": 0,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-top-new",
                  "dimension7": "special-offer"
                }]
              }
            });
          </script>
          <section class="c-swiper c-swiper--products js-sntracker-carousel " id="sn-carousels-2">
            <div class="o-headline">
              <span>منتخب جدیدترین کالاها</span>
              <a href="/search/?has_selling_stock=1&sortby=1" class="c-swiper__show-more">مشاهده همه</a>
            </div>
            <div class="c-box" id="sn-carousels-2">
              <div class="swiper-container swiper-container-horizontal js-swiper-products">
                <div class="swiper-wrapper">
                  <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-2" data-id="4504443"
                       data-position="1">
                    <div class="c-product-box"><a data-id="4504443"
                                                  class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                  href="/product/dkp-4504443/ماگ-مدل-روز-پدر-کد-04"><img
                          data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/5aeb596f74357163c4d3cd3a4ef597bea78e7e92_1613770982.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          alt="ماگ مدل روز پدر کد 04"
                          class="swiper-lazy"></a>
                      <div class="c-product-box__title"><a data-id="4504443"
                                                           class="js-product-url js-carousel-ga-product-box"
                                                           href="/product/dkp-4504443/ماگ-مدل-روز-پدر-کد-04">
                          ماگ مدل روز پدر کد 04
                        </a></div>
                      <div class="c-product-box__price-row">
                        <div class="c-product-box__price-item"><a data-id="4504443"
                                                                  class="js-product-url js-carousel-ga-product-box"
                                                                  href="/product/dkp-4504443/ماگ-مدل-روز-پدر-کد-04">
                            <div class="c-new-price">
                              <div class="c-new-price__old-value"></div>
                              <div class="c-new-price__value">
                                ۳۸,۹۰۰
                                <span class="c-new-price__currency">تومان</span></div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-2" data-id="4504481"
                       data-position="2">
                    <div class="c-product-box"><a data-id="4504481"
                                                  class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                  href="/product/dkp-4504481/محافظ-لنز-دوربین-سیحان-مدل-glp-مناسب-برای-گوشی-موبایل-شیائومی-poco-f2-pro"><img
                          data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/3d6d40d79813bf59d85ad9178c5f76a409b2fee9_1613771406.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          alt="محافظ لنز دوربین سیحان مدل GLP مناسب برای گوشی موبایل شیائومی POCO F2 Pro"
                          class="swiper-lazy"></a>
                      <div class="c-product-box__title"><a data-id="4504481"
                                                           class="js-product-url js-carousel-ga-product-box"
                                                           href="/product/dkp-4504481/محافظ-لنز-دوربین-سیحان-مدل-glp-مناسب-برای-گوشی-موبایل-شیائومی-poco-f2-pro">
                          محافظ لنز دوربین سیحان مدل GLP مناسب برای گوشی موب...
                        </a></div>
                      <div class="c-product-box__price-row">
                        <div class="c-product-box__price-item"><a data-id="4504481"
                                                                  class="js-product-url js-carousel-ga-product-box"
                                                                  href="/product/dkp-4504481/محافظ-لنز-دوربین-سیحان-مدل-glp-مناسب-برای-گوشی-موبایل-شیائومی-poco-f2-pro">
                            <div class="c-new-price">
                              <div class="c-new-price__old-value">
                                <del>۲۵,۰۰۰</del>
                                <span class="c-new-price__discount">۳۷٪</span></div>
                              <div class="c-new-price__value">
                                ۱۵,۷۵۰
                                <span class="c-new-price__currency">تومان</span></div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                  </div>
                  <!-- count: 24 -->
                </div>
                <div class="swiper-button-prev js-swiper-button-prev"></div>
                <div class="swiper-button-next js-swiper-button-next"></div>
              </div>
            </div>
          </section>
        </div>

        <script>
          var carouselDataTracker = {
            "carouselPosition": "HOME_8",
            "id": "sn-carousels-3",
            "title": "\u0645\u062d\u0635\u0648\u0644\u0627\u062a \u067e\u0631\u0641\u0631\u0648\u0634 \u0627\u062e\u06cc\u0631",
            "title_en": "Most sold trends product",
            "products": [{
              "id": 2071360,
              "name": "\u0631\u0648\u063a\u0646 \u0646\u06cc\u0645\u0647 \u062c\u0627\u0645\u062f \u0632\u06cc\u0631\u0648 \u062a\u0631\u0627\u0646\u0633 \u0637\u0628\u06cc\u0639\u062a - 5  \u06a9\u06cc\u0644\u0648\u06af\u0631\u0645",
              "price": 700000,
              "category": "\u0631\u0648\u063a\u0646",
              "brand": "\u0637\u0628\u06cc\u0639\u062a",
              "position": 1,
              "status": "marketable"
            }, {
              "id": 3501717,
              "name": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc \u0645\u062f\u0644 \u0645\u0644\u062a \u0628\u0644\u0648\u0646 \u0628\u0633\u062a\u0647 51 \u0639\u062f\u062f\u06cc",
              "price": 217100,
              "category": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 2,
              "status": "marketable"
            }, {
              "id": 2066213,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A10s SM-A107F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 32 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "price": 31190000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Samsung",
              "position": 3,
              "status": "marketable"
            }, {
              "id": 1492772,
              "name": "\u0647\u0646\u062f\u0632\u0641\u0631\u06cc \u0628\u0644\u0648\u062a\u0648\u062b \u0645\u062f\u0644 SP01",
              "price": 367000,
              "category": "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 4,
              "status": "marketable"
            }, {
              "id": 4122136,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A12 SM-A125F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "price": 41390000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Samsung",
              "position": 5,
              "status": "marketable"
            }, {
              "id": 888728,
              "name": "\u0631\u06cc\u0633\u0647 \u0627\u0644 \u0627\u06cc \u062f\u06cc \u06a9\u062f 100-LED \u0637\u0648\u0644 10 \u0645\u062a\u0631 ",
              "price": 381800,
              "category": "\u0644\u0627\u0645\u067e \u0648 \u0686\u0631\u0627\u063a",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 6,
              "status": "marketable"
            }, {
              "id": 4264171,
              "name": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc \u0645\u062f\u0644 3270 \u0628\u0633\u062a\u0647 50 \u0639\u062f\u062f\u06cc",
              "price": 245000,
              "category": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 7,
              "status": "marketable"
            }, {
              "id": 4230198,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A02s SM-A025F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 \u06f4 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "price": 32490000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Samsung",
              "position": 8,
              "status": "marketable"
            }, {
              "id": 3048126,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A21S SM-A217F\/DS \u062f\u0648 \u0633\u06cc\u0645\u200c\u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a\t",
              "price": 46490000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Samsung",
              "position": 9,
              "status": "marketable"
            }, {
              "id": 2910269,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A31 SM-A315F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "price": 55390000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Samsung",
              "position": 10,
              "status": "marketable"
            }, {
              "id": 3366444,
              "name": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc \u0645\u062f\u0644 SB1 \u0628\u0633\u062a\u0647 50 \u0639\u062f\u062f\u06cc",
              "price": 214000,
              "category": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 11,
              "status": "marketable"
            }, {
              "id": 4177353,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A02s SM-A025F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 32 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "price": 29990000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Samsung",
              "position": 12,
              "status": "marketable"
            }, {
              "id": 4230579,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A12 SM-A125F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 4 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "price": 43490000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Samsung",
              "position": 13,
              "status": "marketable"
            }, {
              "id": 1818621,
              "name": "\u0644\u0627\u0645\u067e \u0627\u0644 \u0627\u06cc \u062f\u06cc 20 \u0648\u0627\u062a \u067e\u0648\u06a9\u0644\u0627 \u06a9\u062f SH_0202 ",
              "price": 290000,
              "category": "\u0644\u0627\u0645\u067e \u0648 \u0686\u0631\u0627\u063a",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 14,
              "status": "marketable"
            }, {
              "id": 3151747,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 Redmi 9 M2004J19G \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "price": 35990000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Xiaomi",
              "position": 15,
              "status": "marketable"
            }, {
              "id": 4149037,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 POCO M3 M2010J19CG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "price": 45490000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Xiaomi",
              "position": 16,
              "status": "marketable"
            }, {
              "id": 3266410,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A01 Core SM-A013G\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 16 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "price": 20190000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Samsung",
              "position": 17,
              "status": "marketable"
            }, {
              "id": 4453371,
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A02 SM-A022F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 3 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "price": 27790000,
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "brand": "Samsung",
              "position": 18,
              "status": "marketable"
            }, {
              "id": 799702,
              "name": "\u062a\u06cc \u0634\u0631\u062a \u0645\u0631\u062f\u0627\u0646\u0647 \u0637\u0631\u062d \u0644\u06cc\u0648\u0631\u067e\u0648\u0644 \u06a9\u062f 7A1",
              "price": 298000,
              "category": "MEN TEE-SHIRTS & POLOS",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 19,
              "status": "marketable"
            }, {
              "id": 1505513,
              "name": "\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u0645\u062f\u0644 RK-12",
              "price": 420000,
              "category": "\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 20,
              "status": "marketable"
            }]
          };
          if (carouselDataTracker) {
            if (!window.carouselData)
              window.carouselData = [carouselDataTracker];
            else
              window.carouselData.push(carouselDataTracker);
          }

          var carouselDataTracker = null;
          if (carouselDataTracker) {
            if (!window.carouselData)
              window.carouselData = [carouselDataTracker];
            else
              window.carouselData.push(carouselDataTracker);
          }
        </script>

        <script>
          window.dataLayer.push({
            "event": "eec.productImpression", "ecommerce": {
              "currencyCode": "EUR",
              "impressions": [{
                "name": "\u0631\u0648\u063a\u0646 \u0646\u06cc\u0645\u0647 \u062c\u0627\u0645\u062f \u0632\u06cc\u0631\u0648 \u062a\u0631\u0627\u0646\u0633 \u0637\u0628\u06cc\u0639\u062a - 5  \u06a9\u06cc\u0644\u0648\u06af\u0631\u0645",
                "id": 2071360,
                "price": 700000,
                "brand": "\u0637\u0628\u06cc\u0639\u062a",
                "category": "\u0631\u0648\u063a\u0646",
                "list": "category-\u0631\u0648\u063a\u0646",
                "position": 1,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.6,
                "metric6": 2190,
                "dimension11": 1,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "home-sell-trends",
                "dimension7": "none"
              }, {
                "name": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc \u0645\u062f\u0644 \u0645\u0644\u062a \u0628\u0644\u0648\u0646 \u0628\u0633\u062a\u0647 51 \u0639\u062f\u062f\u06cc",
                "id": 3501717,
                "price": 217100,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc",
                "list": "category-\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc",
                "position": 2,
                "dimension6": 1,
                "dimension2": 57,
                "dimension9": 3.8,
                "metric6": 7676,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "home-sell-trends",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A10s SM-A107F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 32 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                "id": 2066213,
                "price": 31190000,
                "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 3,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.4,
                "metric6": 4368,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "home-sell-trends",
                "dimension7": "none"
              }, {
                "name": "\u0647\u0646\u062f\u0632\u0641\u0631\u06cc \u0628\u0644\u0648\u062a\u0648\u062b \u0645\u062f\u0644 SP01",
                "id": 1492772,
                "price": 367000,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc",
                "list": "category-\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc",
                "position": 4,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 3.7,
                "metric6": 7514,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "home-sell-trends",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A12 SM-A125F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                "id": 4122136,
                "price": 41390000,
                "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 5,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.5,
                "metric6": 1094,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "home-sell-trends",
                "dimension7": "none"
              }, {
                "name": "\u0631\u06cc\u0633\u0647 \u0627\u0644 \u0627\u06cc \u062f\u06cc \u06a9\u062f 100-LED \u0637\u0648\u0644 10 \u0645\u062a\u0631 ",
                "id": 888728,
                "price": 381800,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u0644\u0627\u0645\u067e \u0648 \u0686\u0631\u0627\u063a",
                "list": "category-\u0644\u0627\u0645\u067e \u0648 \u0686\u0631\u0627\u063a",
                "position": 6,
                "dimension6": 1,
                "dimension2": 4,
                "dimension9": 4.4,
                "metric6": 4342,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "home-sell-trends",
                "dimension7": "special-offer"
              }, {
                "name": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc \u0645\u062f\u0644 3270 \u0628\u0633\u062a\u0647 50 \u0639\u062f\u062f\u06cc",
                "id": 4264171,
                "price": 245000,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc",
                "list": "category-\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc",
                "position": 7,
                "dimension6": 1,
                "dimension2": 51,
                "dimension9": 4.3,
                "metric6": 261,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "home-sell-trends",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A02s SM-A025F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 \u06f4 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                "id": 4230198,
                "price": 32490000,
                "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 8,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.1,
                "metric6": 20,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "home-sell-trends",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A21S SM-A217F\/DS \u062f\u0648 \u0633\u06cc\u0645\u200c\u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a\t",
                "id": 3048126,
                "price": 46490000,
                "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 9,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.4,
                "metric6": 3183,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "home-sell-trends",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A31 SM-A315F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                "id": 2910269,
                "price": 55390000,
                "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 10,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.4,
                "metric6": 2810,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "home-sell-trends",
                "dimension7": "none"
              }, {
                "name": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc \u0645\u062f\u0644 SB1 \u0628\u0633\u062a\u0647 50 \u0639\u062f\u062f\u06cc",
                "id": 3366444,
                "price": 214000,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc",
                "list": "category-\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc",
                "position": 11,
                "dimension6": 1,
                "dimension2": 57,
                "dimension9": 4,
                "metric6": 2740,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "home-sell-trends",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A02s SM-A025F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 32 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                "id": 4177353,
                "price": 29990000,
                "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 12,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.4,
                "metric6": 79,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "home-sell-trends",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A12 SM-A125F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 4 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                "id": 4230579,
                "price": 43490000,
                "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 13,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.3,
                "metric6": 102,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "home-sell-trends",
                "dimension7": "none"
              }, {
                "name": "\u0644\u0627\u0645\u067e \u0627\u0644 \u0627\u06cc \u062f\u06cc 20 \u0648\u0627\u062a \u067e\u0648\u06a9\u0644\u0627 \u06a9\u062f SH_0202 ",
                "id": 1818621,
                "price": 290000,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u0644\u0627\u0645\u067e \u0648 \u0686\u0631\u0627\u063a",
                "list": "category-\u0644\u0627\u0645\u067e \u0648 \u0686\u0631\u0627\u063a",
                "position": 14,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.1,
                "metric6": 1047,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "home-sell-trends",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 Redmi 9 M2004J19G \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                "id": 3151747,
                "price": 35990000,
                "brand": "\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 15,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.4,
                "metric6": 1102,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "home-sell-trends",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 POCO M3 M2010J19CG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                "id": 4149037,
                "price": 45490000,
                "brand": "\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 16,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.2,
                "metric6": 176,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "home-sell-trends",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A01 Core SM-A013G\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 16 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                "id": 3266410,
                "price": 20190000,
                "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 17,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.1,
                "metric6": 1898,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "home-sell-trends",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A02 SM-A022F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 3 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                "id": 4453371,
                "price": 27790000,
                "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 18,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.6,
                "metric6": 7,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "home-sell-trends",
                "dimension7": "none"
              }, {
                "name": "\u062a\u06cc \u0634\u0631\u062a \u0645\u0631\u062f\u0627\u0646\u0647 \u0637\u0631\u062d \u0644\u06cc\u0648\u0631\u067e\u0648\u0644 \u06a9\u062f 7A1",
                "id": 799702,
                "price": 298000,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u062a\u06cc \u0634\u0631\u062a \u0648 \u067e\u0648\u0644\u0648\u0634\u0631\u062a \u0645\u0631\u062f\u0627\u0646\u0647",
                "list": "category-\u062a\u06cc \u0634\u0631\u062a \u0648 \u067e\u0648\u0644\u0648\u0634\u0631\u062a \u0645\u0631\u062f\u0627\u0646\u0647",
                "position": 19,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 3.5,
                "metric6": 1270,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "home-sell-trends",
                "dimension7": "none"
              }, {
                "name": "\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u0645\u062f\u0644 RK-12",
                "id": 1505513,
                "price": 420000,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
                "list": "category-\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
                "position": 20,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 4.1,
                "metric6": 1451,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "home-sell-trends",
                "dimension7": "none"
              }]
            }
          });
        </script>


        <aside class="c-adplacement">
          @if($bannerGroup4->images()->exists())
            @foreach($bannerGroup4->images as $image)
              <a href="{{ ($image->media()->exists())? $image->link : '' }}" class="js-banner-impression-adro c-adplacement__item c-adplacement__item--b" data-observed="0" target="_blank" title="{{ ($image->media()->exists())? $image->alt : '' }}" data-is-trackable="">
                <div class="c-adplacement__sponsored_box">
                  <img src="{{ $site_url . '/' . $image->media->first()->path . '/'. $image->media->first()->name }}" alt="{{ ($image->media()->exists())? $image->alt : '' }}" loading="lazy"/>
                </div>
              </a>
            @endforeach
          @endif
        </aside>

        <section class="c-swiper c-swiper--products js-sntracker-carousel " id="sn-carousels-3">
          <div class="o-headline ">
            <span>محصولات پرفروش اخیر</span>
          </div>
          <div class="c-box" id="sn-carousels-3">
            <div class="swiper-container swiper-container-horizontal js-swiper-products">
              <div class="swiper-wrapper">
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-3" data-id="2071360"
                     data-position="1">
                  <div class="c-product-box"><a data-id="2071360"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-2071360/روغن-نیمه-جامد-زیرو-ترانس-طبیعت-5-کیلوگرم"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/113619953.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="روغن نیمه جامد زیرو ترانس طبیعت - 5  کیلوگرم"
                        class="swiper-lazy"><img class="c-product-box__fmcg-symbol"
                                                 src="https://www.digikala.com/static/files/31a78819.svg"></a>
                    <div class="c-product-box__title"><a data-id="2071360"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-2071360/روغن-نیمه-جامد-زیرو-ترانس-طبیعت-5-کیلوگرم">
                        روغن نیمه جامد زیرو ترانس طبیعت - 5 کیلوگرم
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__fast-shopping">
                        <div class="c-product-box__add-to-cart-section">
                          <div class="c-product__add-container js-add-to-cart-container
                            js-fast-shopping-confirm"><a
                              class="btn-add-to-cart-mini js-add-to-cart js-product-add-to-card js-fast-shopping-confirm"
                              href="/cart/add/5780149/1/"
                              data-event="add_to_cart" data-event-category="ecommerce"
                              data-event-label="price:  - seller: marketplace - seller_name:  - seller_rating:  - multiple_configs: False - position: 0"></a>
                            <div
                              class="c-product__add-substitute c-product__add-substitute--item js-quick-carousel-add-to-cart"
                              data-variant="5780149"
                              data-cart-item=""
                              data-mode="add"
                              data-enhanced-ecommerce='null'><select class="c-ui-select js-ui-select-above"
                                                                     name="order[amount]">
                                <option value="0" class="c-product__add-cancel">حذف</option>
                                <option value="1">۱ عدد</option>
                              </select></div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__price-item"><a data-id="2071360"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-2071360/روغن-نیمه-جامد-زیرو-ترانس-طبیعت-5-کیلوگرم">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value"></div>
                            <div class="c-new-price__value">
                              ۷۰,۰۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-3">
                  <div class="c-product-box">
                    <a class="c-product-box__img js-url js-product-url js-carousel-ga-product-box" href="">
                      <img data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/8466ef4c6363a8ef19b41ff43813b2bfc8eec17f_1605071646.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60" alt="" class="swiper-lazy">
                    </a>
                    <div class="c-product-box__title">
                      <a class="js-product-url js-carousel-ga-product-box" href="">
                        ماسک تنفسی مدل ملت بلون بسته 51 عددی
                      </a>
                    </div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item">
                        <a class="js-product-url js-carousel-ga-product-box" href="">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value"></div>
                            <div class="c-new-price__value">
                              ۲۱,۷۱۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- count: 20 -->
              </div>
              <div class="swiper-button-prev js-swiper-button-prev"></div>
              <div class="swiper-button-next js-swiper-button-next"></div>
            </div>
          </div>
        </section>

        <section class="c-swiper c-swiper--brands">
          <div class="o-headline">
            <span>برندهای ویژه</span>
          </div>
          <div class="c-box">
            <div class="swiper-container swiper-container-horizontal js-swiper-brands">
              <div class="swiper-wrapper c-adplacement" data-dkms="5">
                <div class="swiper-slide swiper-brands-image-container">
                  <a class="js-snt-banner-brand"  href="https://www.digikala.com/brand-landing/huawei/?&promo_name=%D8%A8%D8%B1%D9%86%D8%AF+%D9%87%D9%88%D8%A2%D9%88%DB%8C&promo_position=home_brand&promo_creative=16827&bCode=16827" title="برند هوآوی" data-id="16827" target="_blank">
                    <img data-src="https://dkstatics-public.digikala.com/digikala-adservice-banners/1000018250.jpg?x-oss-process=image/quality,q_80" alt="برند هوآوی"/>
                  </a>
                </div>
                <div class="swiper-slide swiper-brands-image-container">
                  <a class="js-snt-banner-brand" href="https://www.digikala.com/brand/x-vision/?&promo_name=Xvision&promo_position=home_brand&promo_creative=420&bCode=420" title="Xvision" data-id="420" target="_blank">
                    <img data-src="https://dkstatics-public.digikala.com/digikala-adservice-banners/2315.png?x-oss-process=image/quality,q_80" alt="Xvision"/>
                  </a>
                </div>
              </div>
              <div class="swiper-button-prev js-swiper-button-prev"></div>
              <div class="swiper-button-next js-swiper-button-next"></div>
            </div>
          </div>
        </section>

        <script>
          var carouselDataTracker = {
            "carouselPosition": "HOME_9",
            "id": "sn-carousels-4",
            "title": "\u0645\u0646\u062a\u062e\u0628 \u0645\u062d\u0635\u0648\u0644\u0627\u062a \u062a\u062e\u0641\u06cc\u0641 \u0648 \u062d\u0631\u0627\u062c",
            "title_en": "Selling and sales products",
            "products": [{
              "id": 1481812,
              "name": "\u0633\u0633 \u0647\u0632\u0627\u0631 \u062c\u0632\u06cc\u0631\u0647 \u0628\u06cc\u0698\u0646 \u0648\u0632\u0646 510 \u06af\u0631\u0645",
              "price": 104000,
              "category": "\u0633\u0633",
              "brand": "Bijan",
              "position": 1,
              "status": "marketable"
            }, {
              "id": 3499448,
              "name": " \u0628\u0631\u0686\u0633\u0628 \u067e\u0644\u0627\u06a9 \u062e\u0648\u062f\u0631\u0648 \u0645\u0633\u062a\u0631 \u0631\u0627\u062f \u0637\u0631\u062d \u067e\u0631\u0686\u0645 \u0627\u06cc\u0631\u0627\u0646 \u0645\u062f\u0644 1221\u0628\u0633\u062a\u0647 \u062f\u0648\u0639\u062f\u062f\u06cc",
              "price": 50000,
              "category": "\u0633\u0627\u06cc\u0631 \u0644\u0648\u0627\u0632\u0645 \u062e\u0648\u062f\u0631\u0648",
              "brand": "Mr Rad",
              "position": 2,
              "status": "marketable"
            }, {
              "id": 2157237,
              "name": "\u0645\u0627\u0698\u06cc\u06a9 \u0648\u0627\u06cc\u062a \u0628\u0631\u062f \u06a9\u062f x-828 M \u0628\u0633\u062a\u0647 4 \u0639\u062f\u062f\u06cc",
              "price": 107000,
              "category": "\u0645\u0627\u0698\u06cc\u06a9",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 3,
              "status": "marketable"
            }, {
              "id": 3112239,
              "name": "\u06a9\u062a\u0627\u0628 \u0628\u062e\u0648\u0627\u0647\u06cc\u062f \u062a\u0627 \u0628\u0647 \u0634\u0645\u0627 \u062f\u0627\u062f\u0647 \u0634\u0648\u062f \u0627\u062b\u0631 \u0627\u0633\u062a\u0631 \u0647\u06cc\u06a9\u0633 \u0648 \u062c\u0631\u06cc \u0647\u06cc\u06a9\u0633 \u0627\u0646\u062a\u0634\u0627\u0631\u0627\u062a \u0622\u062a\u06cc\u0633\u0627",
              "price": 210800,
              "category": "\u06a9\u062a\u0627\u0628 \u0686\u0627\u067e\u06cc",
              "brand": "Atisa Publishers",
              "position": 4,
              "status": "marketable"
            }, {
              "id": 911070,
              "name": "\u0622\u06cc\u0646\u0647 \u067e\u0644\u06a9\u0633\u06cc \u06af\u0644\u0633  \u0628\u0646\u06cc \u062f\u06a9\u0648 \u0645\u062f\u0644 m06",
              "price": 144000,
              "category": "\u0622\u06cc\u0646\u0647",
              "brand": "benideco",
              "position": 5,
              "status": "marketable"
            }, {
              "id": 3429171,
              "name": "\u06a9\u062a\u0627\u0628 \u0634\u0627\u0632\u062f\u0647 \u06a9\u0648\u0686\u0648\u0644\u0648 \u0627\u062b\u0631 \u0622\u0646\u062a\u0648\u0627\u0646 \u062f\u0648\u0633\u0646\u062a \u0627\u06af\u0632\u0648\u067e\u0631\u06cc \u0627\u0646\u062a\u0634\u0627\u0631\u0627\u062a \u0646\u06af\u06cc\u0646 \u0627\u06cc\u0631\u0627\u0646",
              "price": 79000,
              "category": "\u06a9\u062a\u0627\u0628 \u0686\u0627\u067e\u06cc",
              "brand": "entesharat negin iran",
              "position": 6,
              "status": "marketable"
            }, {
              "id": 4104459,
              "name": "\u067e\u0648\u062f\u0631 \u0645\u0627\u0634\u06cc\u0646 \u0644\u0628\u0627\u0633\u0634\u0648\u06cc\u06cc \u067e\u0631\u0633\u06cc\u0644 \u0628\u0627 \u0631\u0627\u06cc\u062d\u0647 \u0644\u0627\u0648\u0646\u062f\u0631 \u0645\u0642\u062f\u0627\u0631 4000 \u06af\u0631\u0645 \u0628\u0627 \u0633\u0637\u0644 \u0648 \u067e\u06cc\u0645\u0627\u0646\u0647 \u0647\u062f\u06cc\u0647 \u0648 200 \u06af\u0631\u0645 \u067e\u0648\u062f\u0631 \u0628\u06cc\u0634\u062a\u0631 ",
              "price": 897000,
              "category": "\u0634\u0648\u06cc\u0646\u062f\u0647 \u0631\u062e\u062a",
              "brand": "Persil",
              "position": 7,
              "status": "marketable"
            }, {
              "id": 2311836,
              "name": "\u0645\u062c\u0645\u0648\u0639\u0647 7 \u0639\u062f\u062f\u06cc \u0633\u0647 \u0646\u0638\u0627\u0645  \u06a9\u062fvb5 \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u06a9\u0648\u0644\u062a \u0645\u06cc\u0646\u06cc\u0627\u062a\u0648\u0631\u06cc",
              "price": 199900,
              "category": "\u0645\u062a\u0647 \u0648 \u0633\u0631\u06cc",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 8,
              "status": "marketable"
            }, {
              "id": 3745212,
              "name": "\u0641\u0646\u062f\u06a9 \u0645\u062f\u0644 \u06a9\u0628\u0631\u06cc\u062a\u06cc \u0633\u0631\u06cc NZ1598",
              "price": 169000,
              "category": "\u0641\u0646\u062f\u06a9",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 9,
              "status": "marketable"
            }, {
              "id": 2325910,
              "name": "\u0628\u0631\u0633 \u067e\u0627\u06a9\u200c\u0633\u0627\u0632\u06cc \u06a9\u062f 02",
              "price": 227700,
              "category": "\u0627\u0628\u0632\u0627\u0631 \u0645\u0631\u0627\u0642\u0628\u062a \u0627\u0632 \u067e\u0648\u0633\u062a",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 10,
              "status": "marketable"
            }, {
              "id": 595821,
              "name": "\u0645\u0627\u0633\u06a9 \u0646\u0642\u0627\u0628\u06cc \u0622\u0646\u06cc\u067e\u06a9 \u0645\u062f\u0644 \u0627\u0646\u0627\u0631",
              "price": 179000,
              "category": "\u0645\u0627\u0633\u06a9 \u0635\u0648\u0631\u062a \u0648 \u0628\u062f\u0646",
              "brand": "Anypack",
              "position": 11,
              "status": "marketable"
            }, {
              "id": 1056808,
              "name": "\u0638\u0631\u0648\u0641 \u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647  12 \u067e\u0627\u0631\u0686\u0647 \u0646\u0648\u0631\u06cc\u0646\u0648 \u0645\u062f\u0644 \u0622\u06cc\u0631\u06cc\u0646\u0627",
              "price": 580000,
              "category": "\u0638\u0631\u0648\u0641 \u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647",
              "brand": "noorino",
              "position": 12,
              "status": "marketable"
            }, {
              "id": 2959368,
              "name": " \u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647 \u0627\u0646\u0631\u062c\u0627\u06cc\u0632\u0631 \u0645\u062f\u0644 UE20009  \u0638\u0631\u0641\u06cc\u062a 20000 \u0645\u06cc\u0644\u06cc \u0622\u0645\u067e\u0631 \u0633\u0627\u0639\u062a",
              "price": 3590000,
              "category": "\u067e\u0627\u0648\u0631\u0628\u0627\u0646\u06a9 (\u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647)",
              "brand": "\u0627\u0646\u0631\u062c\u0627\u06cc\u0632\u0631",
              "position": 13,
              "status": "marketable"
            }, {
              "id": 1742756,
              "name": "\u0645\u062d\u0627\u0641\u0638 \u06a9\u0627\u0628\u0644 \u0634\u0627\u0631\u0698 \u0645\u062f\u0644 IP02 - Collapsing \u0645\u062c\u0645\u0648\u0639\u0647 4 \u0639\u062f\u062f\u06cc \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u06a9\u0627\u0628\u0644 \u062a\u0628\u062f\u06cc\u0644 \u0644\u0627\u06cc\u062a\u0646\u06cc\u0646\u06af",
              "price": 14900,
              "category": "\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 14,
              "status": "marketable"
            }, {
              "id": 3824898,
              "name": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc \u0645\u06cc \u0645\u0627\u0633\u06a9 \u0645\u062f\u0644 6020 \u0628\u0633\u062a\u0647 \u06f5\u06f0 \u0639\u062f\u062f\u06cc",
              "price": 307000,
              "category": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 15,
              "status": "marketable"
            }, {
              "id": 1135818,
              "name": "\u0647\u062f\u0641\u0648\u0646 \u0628\u0644\u0648\u062a\u0648\u062b \u0645\u062f\u0644 i7",
              "price": 389000,
              "category": "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 16,
              "status": "marketable"
            }, {
              "id": 3027164,
              "name": "\u062f\u0633\u062a\u0647 \u0628\u0627\u0632\u06cc \u067e\u0644\u06cc \u0627\u0633\u062a\u06cc\u0634\u0646 \u06f4 \u0645\u062f\u0644 DUALSHOCK CUH-ZCT2E",
              "price": 3190000,
              "category": "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06a9\u0646\u0633\u0648\u0644 \u0628\u0627\u0632\u06cc",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 17,
              "status": "marketable"
            }, {
              "id": 939299,
              "name": "\u06a9\u0631\u0647 \u062d\u06cc\u0648\u0627\u0646\u06cc \u067e\u0627\u0633\u062a\u0648\u0631\u06cc\u0632\u0647 \u0645\u06cc\u0647\u0646 50 \u06af\u0631\u0645",
              "price": 48600,
              "category": "Butter",
              "brand": "\u0645\u06cc\u0647\u0646",
              "position": 18,
              "status": "marketable"
            }, {
              "id": 4528544,
              "name": "\u0622\u06cc\u0646\u0647 \u0627\u0650\u0644\u0650\u0646\u0633\u06cc \u0645\u062f\u0644 AM-090",
              "price": 29000,
              "category": "\u0622\u06cc\u0646\u0647",
              "brand": "\u0627\u0650\u0644\u0650\u0646\u0633\u06cc",
              "position": 19,
              "status": "marketable"
            }, {
              "id": 726457,
              "name": "\u06a9\u06cc\u0641 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc \u0645\u062f\u0644 circle",
              "price": 80000,
              "category": "\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 20,
              "status": "marketable"
            }]
          };
          if (carouselDataTracker) {
            if (!window.carouselData)
              window.carouselData = [carouselDataTracker];
            else
              window.carouselData.push(carouselDataTracker);
          }

          var carouselDataTracker = null;
          if (carouselDataTracker) {
            if (!window.carouselData)
              window.carouselData = [carouselDataTracker];
            else
              window.carouselData.push(carouselDataTracker);
          }
        </script>

        <script>
          window.dataLayer.push({
            "event": "eec.productImpression", "ecommerce": {
              "currencyCode": "EUR",
              "impressions": [{
                "name": "\u0633\u0633 \u0647\u0632\u0627\u0631 \u062c\u0632\u06cc\u0631\u0647 \u0628\u06cc\u0698\u0646 \u0648\u0632\u0646 510 \u06af\u0631\u0645",
                "id": 1481812,
                "price": 104000,
                "brand": "\u0628\u06cc\u0698\u0646",
                "category": "\u0633\u0633",
                "list": "category-\u0633\u0633",
                "position": 1,
                "dimension6": 1,
                "dimension2": 19,
                "dimension9": 4.4,
                "metric6": 1076,
                "dimension11": 1,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-promotions",
                "dimension7": "special-offer"
              }, {
                "name": " \u0628\u0631\u0686\u0633\u0628 \u067e\u0644\u0627\u06a9 \u062e\u0648\u062f\u0631\u0648 \u0645\u0633\u062a\u0631 \u0631\u0627\u062f \u0637\u0631\u062d \u067e\u0631\u0686\u0645 \u0627\u06cc\u0631\u0627\u0646 \u0645\u062f\u0644 1221\u0628\u0633\u062a\u0647 \u062f\u0648\u0639\u062f\u062f\u06cc",
                "id": 3499448,
                "price": 50000,
                "brand": "\u0645\u0633\u062a\u0631 \u0631\u0627\u062f",
                "category": "\u0633\u0627\u06cc\u0631 \u0644\u0648\u0627\u0632\u0645 \u062e\u0648\u062f\u0631\u0648",
                "list": "category-\u0633\u0627\u06cc\u0631 \u0644\u0648\u0627\u0632\u0645 \u062e\u0648\u062f\u0631\u0648",
                "position": 2,
                "dimension6": 1,
                "dimension2": 22,
                "dimension9": 4.5,
                "metric6": 887,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-promotions",
                "dimension7": "special-offer"
              }, {
                "name": "\u0645\u0627\u0698\u06cc\u06a9 \u0648\u0627\u06cc\u062a \u0628\u0631\u062f \u06a9\u062f x-828 M \u0628\u0633\u062a\u0647 4 \u0639\u062f\u062f\u06cc",
                "id": 2157237,
                "price": 107000,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u0645\u0627\u0698\u06cc\u06a9",
                "list": "category-\u0645\u0627\u0698\u06cc\u06a9",
                "position": 3,
                "dimension6": 1,
                "dimension2": 16,
                "dimension9": 4,
                "metric6": 4550,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-promotions",
                "dimension7": "special-offer"
              }, {
                "name": "\u06a9\u062a\u0627\u0628 \u0628\u062e\u0648\u0627\u0647\u06cc\u062f \u062a\u0627 \u0628\u0647 \u0634\u0645\u0627 \u062f\u0627\u062f\u0647 \u0634\u0648\u062f \u0627\u062b\u0631 \u0627\u0633\u062a\u0631 \u0647\u06cc\u06a9\u0633 \u0648 \u062c\u0631\u06cc \u0647\u06cc\u06a9\u0633 \u0627\u0646\u062a\u0634\u0627\u0631\u0627\u062a \u0622\u062a\u06cc\u0633\u0627",
                "id": 3112239,
                "price": 210800,
                "brand": "\u0627\u0646\u062a\u0634\u0627\u0631\u0627\u062a \u0622\u062a\u06cc\u0633\u0627",
                "category": "\u06a9\u062a\u0627\u0628 \u0686\u0627\u067e\u06cc",
                "list": "category-\u06a9\u062a\u0627\u0628 \u0686\u0627\u067e\u06cc",
                "position": 4,
                "dimension6": 1,
                "dimension2": 66,
                "dimension9": 4.6,
                "metric6": 328,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-promotions",
                "dimension7": "special-offer"
              }, {
                "name": "\u0622\u06cc\u0646\u0647 \u067e\u0644\u06a9\u0633\u06cc \u06af\u0644\u0633  \u0628\u0646\u06cc \u062f\u06a9\u0648 \u0645\u062f\u0644 m06",
                "id": 911070,
                "price": 144000,
                "brand": "\u0628\u0646\u06cc \u062f\u06a9\u0648",
                "category": "\u0622\u06cc\u0646\u0647 \u062f\u06a9\u0648\u0631\u0627\u062a\u06cc\u0648",
                "list": "category-\u0622\u06cc\u0646\u0647 \u062f\u06a9\u0648\u0631\u0627\u062a\u06cc\u0648",
                "position": 5,
                "dimension6": 1,
                "dimension2": 28,
                "dimension9": 3.9,
                "metric6": 858,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-promotions",
                "dimension7": "special-offer"
              }, {
                "name": "\u06a9\u062a\u0627\u0628 \u0634\u0627\u0632\u062f\u0647 \u06a9\u0648\u0686\u0648\u0644\u0648 \u0627\u062b\u0631 \u0622\u0646\u062a\u0648\u0627\u0646 \u062f\u0648\u0633\u0646\u062a \u0627\u06af\u0632\u0648\u067e\u0631\u06cc \u0627\u0646\u062a\u0634\u0627\u0631\u0627\u062a \u0646\u06af\u06cc\u0646 \u0627\u06cc\u0631\u0627\u0646",
                "id": 3429171,
                "price": 79000,
                "brand": "\u0627\u0646\u062a\u0634\u0627\u0631\u0627\u062a \u0646\u06af\u06cc\u0646 \u0627\u06cc\u0631\u0627\u0646",
                "category": "\u06a9\u062a\u0627\u0628 \u0686\u0627\u067e\u06cc",
                "list": "category-\u06a9\u062a\u0627\u0628 \u0686\u0627\u067e\u06cc",
                "position": 6,
                "dimension6": 1,
                "dimension2": 77,
                "dimension9": 4.5,
                "metric6": 1055,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-promotions",
                "dimension7": "special-offer"
              }, {
                "name": "\u067e\u0648\u062f\u0631 \u0645\u0627\u0634\u06cc\u0646 \u0644\u0628\u0627\u0633\u0634\u0648\u06cc\u06cc \u067e\u0631\u0633\u06cc\u0644 \u0628\u0627 \u0631\u0627\u06cc\u062d\u0647 \u0644\u0627\u0648\u0646\u062f\u0631 \u0645\u0642\u062f\u0627\u0631 4000 \u06af\u0631\u0645 \u0628\u0627 \u0633\u0637\u0644 \u0648 \u067e\u06cc\u0645\u0627\u0646\u0647 \u0647\u062f\u06cc\u0647 \u0648 200 \u06af\u0631\u0645 \u067e\u0648\u062f\u0631 \u0628\u06cc\u0634\u062a\u0631 ",
                "id": 4104459,
                "price": 897000,
                "brand": "\u067e\u0631\u0633\u06cc\u0644",
                "category": "\u0634\u0648\u06cc\u0646\u062f\u0647 \u0644\u0628\u0627\u0633",
                "list": "category-\u0634\u0648\u06cc\u0646\u062f\u0647 \u0644\u0628\u0627\u0633",
                "position": 7,
                "dimension6": 1,
                "dimension2": 11,
                "dimension9": 4.4,
                "metric6": 220,
                "dimension11": 1,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-promotions",
                "dimension7": "special-offer"
              }, {
                "name": "\u0645\u062c\u0645\u0648\u0639\u0647 7 \u0639\u062f\u062f\u06cc \u0633\u0647 \u0646\u0638\u0627\u0645  \u06a9\u062fvb5 \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u06a9\u0648\u0644\u062a \u0645\u06cc\u0646\u06cc\u0627\u062a\u0648\u0631\u06cc",
                "id": 2311836,
                "price": 199900,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u0645\u062a\u0647 \u0648 \u0633\u0631\u06cc",
                "list": "category-\u0645\u062a\u0647 \u0648 \u0633\u0631\u06cc",
                "position": 8,
                "dimension6": 1,
                "dimension2": 38,
                "dimension9": 4,
                "metric6": 612,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-promotions",
                "dimension7": "special-offer"
              }, {
                "name": "\u0641\u0646\u062f\u06a9 \u0645\u062f\u0644 \u06a9\u0628\u0631\u06cc\u062a\u06cc \u0633\u0631\u06cc NZ1598",
                "id": 3745212,
                "price": 169000,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u0641\u0646\u062f\u06a9",
                "list": "category-\u0641\u0646\u062f\u06a9",
                "position": 9,
                "dimension6": 1,
                "dimension2": 49,
                "dimension9": 2.8,
                "metric6": 96,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-promotions",
                "dimension7": "special-offer"
              }, {
                "name": "\u0628\u0631\u0633 \u067e\u0627\u06a9\u200c\u0633\u0627\u0632\u06cc \u06a9\u062f 02",
                "id": 2325910,
                "price": 227700,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u0627\u0628\u0632\u0627\u0631 \u0645\u0631\u0627\u0642\u0628\u062a \u0627\u0632 \u067e\u0648\u0633\u062a",
                "list": "category-\u0627\u0628\u0632\u0627\u0631 \u0645\u0631\u0627\u0642\u0628\u062a \u0627\u0632 \u067e\u0648\u0633\u062a",
                "position": 10,
                "dimension6": 1,
                "dimension2": 31,
                "dimension9": 4.1,
                "metric6": 1537,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-promotions",
                "dimension7": "special-offer"
              }, {
                "name": "\u0645\u0627\u0633\u06a9 \u0646\u0642\u0627\u0628\u06cc \u0622\u0646\u06cc\u067e\u06a9 \u0645\u062f\u0644 \u0627\u0646\u0627\u0631",
                "id": 595821,
                "price": 179000,
                "brand": "\u0622\u0646\u06cc\u067e\u06a9",
                "category": "\u0645\u0627\u0633\u06a9 \u0635\u0648\u0631\u062a \u0648 \u0628\u062f\u0646",
                "list": "category-\u0645\u0627\u0633\u06a9 \u0635\u0648\u0631\u062a \u0648 \u0628\u062f\u0646",
                "position": 11,
                "dimension6": 1,
                "dimension2": 10,
                "dimension9": 4.2,
                "metric6": 2169,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-promotions",
                "dimension7": "special-offer"
              }, {
                "name": "\u0638\u0631\u0648\u0641 \u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647  12 \u067e\u0627\u0631\u0686\u0647 \u0646\u0648\u0631\u06cc\u0646\u0648 \u0645\u062f\u0644 \u0622\u06cc\u0631\u06cc\u0646\u0627",
                "id": 1056808,
                "price": 580000,
                "brand": "\u0646\u0648\u0631\u06cc\u0646\u0648",
                "category": "\u0638\u0631\u0648\u0641 \u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647",
                "list": "category-\u0638\u0631\u0648\u0641 \u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647",
                "position": 12,
                "dimension6": 1,
                "dimension2": 42,
                "dimension9": 4.3,
                "metric6": 5150,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-promotions",
                "dimension7": "special-offer"
              }, {
                "name": " \u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647 \u0627\u0646\u0631\u062c\u0627\u06cc\u0632\u0631 \u0645\u062f\u0644 UE20009  \u0638\u0631\u0641\u06cc\u062a 20000 \u0645\u06cc\u0644\u06cc \u0622\u0645\u067e\u0631 \u0633\u0627\u0639\u062a",
                "id": 2959368,
                "price": 3590000,
                "brand": "\u0627\u0646\u0631\u062c\u0627\u06cc\u0632\u0631",
                "category": "\u067e\u0627\u0648\u0631\u0628\u0627\u0646\u06a9 (\u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647)",
                "list": "category-\u067e\u0627\u0648\u0631\u0628\u0627\u0646\u06a9 (\u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647)",
                "position": 13,
                "dimension6": 1,
                "dimension2": 15,
                "dimension9": 4.2,
                "metric6": 438,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-promotions",
                "dimension7": "special-offer"
              }, {
                "name": "\u0645\u062d\u0627\u0641\u0638 \u06a9\u0627\u0628\u0644 \u0634\u0627\u0631\u0698 \u0645\u062f\u0644 IP02 - Collapsing \u0645\u062c\u0645\u0648\u0639\u0647 4 \u0639\u062f\u062f\u06cc \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u06a9\u0627\u0628\u0644 \u062a\u0628\u062f\u06cc\u0644 \u0644\u0627\u06cc\u062a\u0646\u06cc\u0646\u06af",
                "id": 1742756,
                "price": 14900,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
                "list": "category-\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
                "position": 14,
                "dimension6": 1,
                "dimension2": 3,
                "dimension9": 3.3,
                "metric6": 2180,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-promotions",
                "dimension7": "special-offer"
              }, {
                "name": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc \u0645\u06cc \u0645\u0627\u0633\u06a9 \u0645\u062f\u0644 6020 \u0628\u0633\u062a\u0647 \u06f5\u06f0 \u0639\u062f\u062f\u06cc",
                "id": 3824898,
                "price": 307000,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc",
                "list": "category-\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc",
                "position": 15,
                "dimension6": 1,
                "dimension2": 39,
                "dimension9": 4,
                "metric6": 396,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-promotions",
                "dimension7": "special-offer"
              }, {
                "name": "\u0647\u062f\u0641\u0648\u0646 \u0628\u0644\u0648\u062a\u0648\u062b \u0645\u062f\u0644 i7",
                "id": 1135818,
                "price": 389000,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc",
                "list": "category-\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc",
                "position": 16,
                "dimension6": 1,
                "dimension2": 12,
                "dimension9": 3.6,
                "metric6": 2151,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-promotions",
                "dimension7": "special-offer"
              }, {
                "name": "\u062f\u0633\u062a\u0647 \u0628\u0627\u0632\u06cc \u067e\u0644\u06cc \u0627\u0633\u062a\u06cc\u0634\u0646 \u06f4 \u0645\u062f\u0644 DUALSHOCK CUH-ZCT2E",
                "id": 3027164,
                "price": 3190000,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06a9\u0646\u0633\u0648\u0644 \u0628\u0627\u0632\u06cc",
                "list": "category-\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06a9\u0646\u0633\u0648\u0644 \u0628\u0627\u0632\u06cc",
                "position": 17,
                "dimension6": 0,
                "dimension2": 37,
                "dimension9": 3.9,
                "metric6": 371,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-promotions",
                "dimension7": "special-offer"
              }, {
                "name": "\u06a9\u0631\u0647 \u062d\u06cc\u0648\u0627\u0646\u06cc \u067e\u0627\u0633\u062a\u0648\u0631\u06cc\u0632\u0647 \u0645\u06cc\u0647\u0646 50 \u06af\u0631\u0645",
                "id": 939299,
                "price": 48600,
                "brand": "\u0645\u06cc\u0647\u0646",
                "category": "\u06a9\u0631\u0647 \u062d\u06cc\u0648\u0627\u0646\u06cc \u0648 \u06af\u06cc\u0627\u0647\u06cc",
                "list": "category-\u06a9\u0631\u0647 \u062d\u06cc\u0648\u0627\u0646\u06cc \u0648 \u06af\u06cc\u0627\u0647\u06cc",
                "position": 18,
                "dimension6": 1,
                "dimension2": 10,
                "dimension9": 4.4,
                "metric6": 3538,
                "dimension11": 1,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-promotions",
                "dimension7": "special-offer"
              }, {
                "name": "\u0622\u06cc\u0646\u0647 \u0627\u0650\u0644\u0650\u0646\u0633\u06cc \u0645\u062f\u0644 AM-090",
                "id": 4528544,
                "price": 29000,
                "brand": "\u0627\u0650\u0644\u0650\u0646\u0633\u06cc",
                "category": "\u0622\u06cc\u0646\u0647 \u062f\u06a9\u0648\u0631\u0627\u062a\u06cc\u0648",
                "list": "category-\u0622\u06cc\u0646\u0647 \u062f\u06a9\u0648\u0631\u0627\u062a\u06cc\u0648",
                "position": 19,
                "dimension6": 1,
                "dimension2": 71,
                "dimension9": 4.1,
                "metric6": 59,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-promotions",
                "dimension7": "special-offer"
              }, {
                "name": "\u06a9\u06cc\u0641 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc \u0645\u062f\u0644 circle",
                "id": 726457,
                "price": 80000,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
                "list": "category-\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
                "position": 20,
                "dimension6": 1,
                "dimension2": 10,
                "dimension9": 4.2,
                "metric6": 6048,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-promotions",
                "dimension7": "special-offer"
              }]
            }
          });
        </script>

        @if($banner5->images()->exists() && $banner5->images()->first()->media()->exists())
        <aside class="c-adplacement c-adplacement--main-page-inner c-adplacement__container-row">
          <a href="{{ $banner5->images()->first()->link }}" class="c-adplacement__item js-banner-impression-adro" data-observed="0" target="_blank" data-is-trackable="" title="{{ $banner5->images()->first()->alt }}">
            <div class="c-adplacement__sponsored_box">
              <img src="{{ ($banner5->images()->first()->media()->exists())?  $site_url . '/' . $banner5->images()->first()->media->first()->path . '/'. $banner5->images()->first()->media->first()->name : '' }}" alt="{{ ($banner5->images()->first()->media()->exists())?  $banner5->images()->first()->alt : '' }}" loading="lazy"/></div>
          </a>
        </aside>
        @endif

{{--          <a href="{{ $banner5->images()->first()->link }}" class="c-adplacement__item" target="_blank" title="{{ $banner5->images()->first()->alt }}">--}}
{{--            <img src="{{ ($banner5->images()->first()->media()->exists())?  $site_url . '/' . $banner5->images()->first()->media->first()->path . '/'. $banner5->images()->first()->media->first()->name : '' }}" alt="{{ ($banner5->images()->first()->media()->exists())?  $banner5->images()->first()->alt : '' }}" loading="lazy"/>--}}
{{--          </a>--}}

        <section class="c-swiper c-swiper--products js-sntracker-carousel " id="sn-carousels-4">
          <div class="o-headline">
            <span>منتخب محصولات تخفیف و حراج</span>
            <a href="/landing-page/?promotion_types%5B0%5D=incredible_offer&promotion_types%5B1%5D=promotion&promotion_times%5B0%5D=active" class="c-swiper__show-more">مشاهده همه</a>
          </div>
          <div class="c-box" id="sn-carousels-4">
            <div class="swiper-container swiper-container-horizontal js-swiper-products">
              <div class="swiper-wrapper">
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="1481812"
                     data-position="1">
                  <div class="c-product-box"><a data-id="1481812"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-1481812/سس-هزار-جزیره-بیژن-وزن-510-گرم"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/110428446.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="سس هزار جزیره بیژن وزن 510 گرم"
                        class="swiper-lazy"><img class="c-product-box__fmcg-symbol"
                                                 src="https://www.digikala.com/static/files/31a78819.svg"></a>
                    <div class="c-product-box__title"><a data-id="1481812"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-1481812/سس-هزار-جزیره-بیژن-وزن-510-گرم">
                        سس هزار جزیره بیژن وزن 510 گرم
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__fast-shopping">
                        <div class="c-product-box__add-to-cart-section">
                          <div class="c-product__add-container js-add-to-cart-container
                            js-fast-shopping-confirm"><a
                              class="btn-add-to-cart-mini js-add-to-cart js-product-add-to-card js-fast-shopping-confirm"
                              href="/cart/add/4085767/1/"
                              data-event="add_to_cart" data-event-category="ecommerce"
                              data-event-label="price:  - seller: marketplace - seller_name:  - seller_rating:  - multiple_configs: False - position: 0"></a>
                            <div
                              class="c-product__add-substitute c-product__add-substitute--item js-quick-carousel-add-to-cart"
                              data-variant="4085767"
                              data-cart-item=""
                              data-mode="add"
                              data-enhanced-ecommerce='null'><select class="c-ui-select js-ui-select-above"
                                                                     name="order[amount]">
                                <option value="0" class="c-product__add-cancel">حذف</option>
                                <option value="1">۱ عدد</option>
                                <option value="2">۲ عدد</option>
                                <option value="3">۳ عدد</option>
                                <option value="4">۴ عدد</option>
                                <option value="5">۵ عدد</option>
                                <option value="6">۶ عدد</option>
                                <option value="7">۷ عدد</option>
                                <option value="8">۸ عدد</option>
                                <option value="9">۹ عدد</option>
                                <option value="10">۱۰ عدد</option>
                                <option value="11">۱۱ عدد</option>
                                <option value="12">۱۲ عدد</option>
                                <option value="13">۱۳ عدد</option>
                                <option value="14">۱۴ عدد</option>
                                <option value="15">۱۵ عدد</option>
                              </select></div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__price-item"><a data-id="1481812"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-1481812/سس-هزار-جزیره-بیژن-وزن-510-گرم">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value">
                              <del>۱۲,۹۰۰</del>
                              <span class="c-new-price__discount">۱۹٪</span></div>
                            <div class="c-new-price__value">
                              ۱۰,۴۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="3499448"
                     data-position="2">
                  <div class="c-product-box"><a data-id="3499448"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-3499448/برچسب-پلاک-خودرو-مستر-راد-طرح-پرچم-ایران-مدل-1221بسته-دوعددی"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/dd522fb560d38e83c5379f1af1cb0712c6b0d02b_1601813806.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt=" برچسب پلاک خودرو مستر راد طرح پرچم ایران مدل 1221بسته دوعددی"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="3499448"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-3499448/برچسب-پلاک-خودرو-مستر-راد-طرح-پرچم-ایران-مدل-1221بسته-دوعددی">
                        برچسب پلاک خودرو مستر راد طرح پرچم ایران مدل 1221...
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="3499448"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-3499448/برچسب-پلاک-خودرو-مستر-راد-طرح-پرچم-ایران-مدل-1221بسته-دوعددی">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value">
                              <del>۶,۴۰۰</del>
                              <span class="c-new-price__discount">۲۲٪</span></div>
                            <div class="c-new-price__value">
                              ۵,۰۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="2157237"
                     data-position="3">
                  <div class="c-product-box"><a data-id="2157237"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-2157237/ماژیک-وایت-برد-کد-x-828-m-بسته-4-عددی"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/114062863.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="ماژیک وایت برد کد x-828 M بسته 4 عددی"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="2157237"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-2157237/ماژیک-وایت-برد-کد-x-828-m-بسته-4-عددی">
                        ماژیک وایت برد کد x-828 M بسته 4 عددی
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="2157237"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-2157237/ماژیک-وایت-برد-کد-x-828-m-بسته-4-عددی">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value">
                              <del>۱۲,۸۰۰</del>
                              <span class="c-new-price__discount">۱۶٪</span></div>
                            <div class="c-new-price__value">
                              ۱۰,۷۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="3112239"
                     data-position="4">
                  <div class="c-product-box"><a data-id="3112239"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-3112239/کتاب-بخواهید-تا-به-شما-داده-شود-اثر-استر-هیکس-و-جری-هیکس-انتشارات-آتیسا"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/9bd0cf2e63b11ca3683a6f165410ad164272431b_1595447901.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="کتاب بخواهید تا به شما داده شود اثر استر هیکس و جری هیکس انتشارات آتیسا"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="3112239"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-3112239/کتاب-بخواهید-تا-به-شما-داده-شود-اثر-استر-هیکس-و-جری-هیکس-انتشارات-آتیسا">
                        کتاب بخواهید تا به شما داده شود اثر استر هیکس و جر...
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="3112239"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-3112239/کتاب-بخواهید-تا-به-شما-داده-شود-اثر-استر-هیکس-و-جری-هیکس-انتشارات-آتیسا">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value">
                              <del>۶۲,۰۰۰</del>
                              <span class="c-new-price__discount">۶۶٪</span></div>
                            <div class="c-new-price__value">
                              ۲۱,۰۸۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="911070"
                     data-position="5">
                  <div class="c-product-box"><a data-id="911070"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-911070/آینه-پلکسی-گلس-بنی-دکو-مدل-m06"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/4244382.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="آینه پلکسی گلس  بنی دکو مدل m06"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="911070"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-911070/آینه-پلکسی-گلس-بنی-دکو-مدل-m06">
                        آینه پلکسی گلس بنی دکو مدل m06
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="911070"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-911070/آینه-پلکسی-گلس-بنی-دکو-مدل-m06">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value">
                              <del>۲۰,۰۰۰</del>
                              <span class="c-new-price__discount">۲۸٪</span></div>
                            <div class="c-new-price__value">
                              ۱۴,۴۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="3429171"
                     data-position="6">
                  <div class="c-product-box"><a data-id="3429171"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-3429171/کتاب-شازده-کوچولو-اثر-آنتوان-دوسنت-اگزوپری-انتشارات-نگین-ایران"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/6a7c6ae40d46aa4f47c7824f6dc66004b61f591a_1600630714.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="کتاب شازده کوچولو اثر آنتوان دوسنت اگزوپری انتشارات نگین ایران"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="3429171"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-3429171/کتاب-شازده-کوچولو-اثر-آنتوان-دوسنت-اگزوپری-انتشارات-نگین-ایران">
                        کتاب شازده کوچولو اثر آنتوان دوسنت اگزوپری انتشارا...
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="3429171"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-3429171/کتاب-شازده-کوچولو-اثر-آنتوان-دوسنت-اگزوپری-انتشارات-نگین-ایران">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value">
                              <del>۳۵,۰۰۰</del>
                              <span class="c-new-price__discount">۷۷٪</span></div>
                            <div class="c-new-price__value">
                              ۷,۹۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="4104459"
                     data-position="7">
                  <div class="c-product-box"><a data-id="4104459"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-4104459/پودر-ماشين-لباسشويي-پرسیل-مدل-لاوندر-مقدار-42-کیلوگرم"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/4641ed290431bbd18adc9fa1a8f4cfd8af27f9ae_1609143244.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="پودر ماشین لباسشویی پرسیل با رایحه لاوندر مقدار 4000 گرم با سطل و پیمانه هدیه و 200 گرم پودر بیشتر "
                        class="swiper-lazy"><img class="c-product-box__fmcg-symbol"
                                                 src="https://www.digikala.com/static/files/31a78819.svg"></a>
                    <div class="c-product-box__title"><a data-id="4104459"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-4104459/پودر-ماشين-لباسشويي-پرسیل-مدل-لاوندر-مقدار-42-کیلوگرم">
                        پودر ماشین لباسشویی پرسیل با رایحه لاوندر مقدار 40...
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__fast-shopping">
                        <div class="c-product-box__add-to-cart-section">
                          <div class="c-product__add-container js-add-to-cart-container
                            js-fast-shopping-confirm"><a
                              class="btn-add-to-cart-mini js-add-to-cart js-product-add-to-card js-fast-shopping-confirm"
                              href="/cart/add/13216796/1/"
                              data-event="add_to_cart" data-event-category="ecommerce"
                              data-event-label="price:  - seller: marketplace - seller_name:  - seller_rating:  - multiple_configs: False - position: 0"></a>
                            <div
                              class="c-product__add-substitute c-product__add-substitute--item js-quick-carousel-add-to-cart"
                              data-variant="13216796"
                              data-cart-item=""
                              data-mode="add"
                              data-enhanced-ecommerce='null'><select class="c-ui-select js-ui-select-above"
                                                                     name="order[amount]">
                                <option value="0" class="c-product__add-cancel">حذف</option>
                                <option value="1">۱ عدد</option>
                                <option value="2">۲ عدد</option>
                                <option value="3">۳ عدد</option>
                                <option value="4">۴ عدد</option>
                                <option value="5">۵ عدد</option>
                              </select></div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__price-item"><a data-id="4104459"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-4104459/پودر-ماشين-لباسشويي-پرسیل-مدل-لاوندر-مقدار-42-کیلوگرم">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value">
                              <del>۱۰۰,۸۰۰</del>
                              <span class="c-new-price__discount">۱۱٪</span></div>
                            <div class="c-new-price__value">
                              ۸۹,۷۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="2311836"
                     data-position="8">
                  <div class="c-product-box"><a data-id="2311836"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-2311836/مجموعه-7-عددی-سه-نظام-کدvb5-به-همراه-کولت-مینیاتوری"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/114968731.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="مجموعه 7 عددی سه نظام  کدvb5 به همراه کولت مینیاتوری"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="2311836"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-2311836/مجموعه-7-عددی-سه-نظام-کدvb5-به-همراه-کولت-مینیاتوری">
                        مجموعه 7 عددی سه نظام کدvb5 به همراه کولت مینیاتو...
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="2311836"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-2311836/مجموعه-7-عددی-سه-نظام-کدvb5-به-همراه-کولت-مینیاتوری">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value">
                              <del>۳۲,۲۵۰</del>
                              <span class="c-new-price__discount">۳۸٪</span></div>
                            <div class="c-new-price__value">
                              ۱۹,۹۹۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="3745212"
                     data-position="9">
                  <div class="c-product-box"><a data-id="3745212"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-3745212/فندک-مدل-کبریتی-سری-nz1598"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/64dec48c1b7ff5bbbd95b97ffdf216371839e102_1605181006.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="فندک مدل کبریتی سری NZ1598"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="3745212"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-3745212/فندک-مدل-کبریتی-سری-nz1598">
                        فندک مدل کبریتی سری NZ1598
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="3745212"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-3745212/فندک-مدل-کبریتی-سری-nz1598">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value">
                              <del>۳۳,۰۰۰</del>
                              <span class="c-new-price__discount">۴۹٪</span></div>
                            <div class="c-new-price__value">
                              ۱۶,۹۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="2325910"
                     data-position="10">
                  <div class="c-product-box"><a data-id="2325910"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-2325910/برس-پاکسازی-کد-02"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/114983712.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="برس پاک‌سازی کد 02"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="2325910"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-2325910/برس-پاکسازی-کد-02">
                        برس پاک‌سازی کد 02
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="2325910"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-2325910/برس-پاکسازی-کد-02">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value">
                              <del>۳۳,۰۰۰</del>
                              <span class="c-new-price__discount">۳۱٪</span></div>
                            <div class="c-new-price__value">
                              ۲۲,۷۷۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="595821"
                     data-position="11">
                  <div class="c-product-box"><a data-id="595821"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-595821/ماسک-نقابی-آنیپک-مدل-انار"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/3096372.png?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="ماسک نقابی آنیپک مدل انار"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="595821"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-595821/ماسک-نقابی-آنیپک-مدل-انار">
                        ماسک نقابی آنیپک مدل انار
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="595821"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-595821/ماسک-نقابی-آنیپک-مدل-انار">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value">
                              <del>۱۹,۹۰۰</del>
                              <span class="c-new-price__discount">۱۰٪</span></div>
                            <div class="c-new-price__value">
                              ۱۷,۹۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="1056808"
                     data-position="12">
                  <div class="c-product-box"><a data-id="1056808"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-1056808/ظروف-نگهدارنده-12-پارچه-نورینو-مدل-آیرینا"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/5221222.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="ظروف نگهدارنده  12 پارچه نورینو مدل آیرینا"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="1056808"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-1056808/ظروف-نگهدارنده-12-پارچه-نورینو-مدل-آیرینا">
                        ظروف نگهدارنده 12 پارچه نورینو مدل آیرینا
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="1056808"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-1056808/ظروف-نگهدارنده-12-پارچه-نورینو-مدل-آیرینا">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value">
                              <del>۱۰۰,۰۰۰</del>
                              <span class="c-new-price__discount">۴۲٪</span></div>
                            <div class="c-new-price__value">
                              ۵۸,۰۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="2959368"
                     data-position="13">
                  <div class="c-product-box"><a data-id="2959368"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-2959368/شارژر-همراه-انرجایزر-مدل-ue20009-ظرفیت-20000-میلی-آمپر-ساعت"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/121795599.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt=" شارژر همراه انرجایزر مدل UE20009  ظرفیت 20000 میلی آمپر ساعت"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="2959368"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-2959368/شارژر-همراه-انرجایزر-مدل-ue20009-ظرفیت-20000-میلی-آمپر-ساعت">
                        شارژر همراه انرجایزر مدل UE20009 ظرفیت 20000 میل...
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="2959368"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-2959368/شارژر-همراه-انرجایزر-مدل-ue20009-ظرفیت-20000-میلی-آمپر-ساعت">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value">
                              <del>۴۲۰,۰۰۰</del>
                              <span class="c-new-price__discount">۱۵٪</span></div>
                            <div class="c-new-price__value">
                              ۳۵۹,۰۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="1742756"
                     data-position="14">
                  <div class="c-product-box"><a data-id="1742756"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-1742756/محافظ-کابل-شارژ-مدل-ip02-collapsing-مجموعه-4-عددی-مناسب-برای-کابل-تبدیل-لایتنینگ"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/111832542.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="محافظ کابل شارژ مدل IP02 - Collapsing مجموعه 4 عددی مناسب برای کابل تبدیل لایتنینگ"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="1742756"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-1742756/محافظ-کابل-شارژ-مدل-ip02-collapsing-مجموعه-4-عددی-مناسب-برای-کابل-تبدیل-لایتنینگ">
                        محافظ کابل شارژ مدل IP02 - Collapsing مجموعه 4 عدد...
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="1742756"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-1742756/محافظ-کابل-شارژ-مدل-ip02-collapsing-مجموعه-4-عددی-مناسب-برای-کابل-تبدیل-لایتنینگ">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value">
                              <del>۱,۵۴۰</del>
                              <span class="c-new-price__discount">۳٪</span></div>
                            <div class="c-new-price__value">
                              ۱,۴۹۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="3824898"
                     data-position="15">
                  <div class="c-product-box"><a data-id="3824898"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-3824898/ماسک-تنفسی-مدل-می-ماسک-بسته-۵۰-عددی"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/4f9c6366a34b1912d93957b5e4b41a12d0642177_1606051131.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="ماسک تنفسی می ماسک مدل 6020 بسته ۵۰ عددی"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="3824898"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-3824898/ماسک-تنفسی-مدل-می-ماسک-بسته-۵۰-عددی">
                        ماسک تنفسی می ماسک مدل 6020 بسته ۵۰ عددی
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="3824898"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-3824898/ماسک-تنفسی-مدل-می-ماسک-بسته-۵۰-عددی">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value">
                              <del>۵۰,۰۰۰</del>
                              <span class="c-new-price__discount">۳۹٪</span></div>
                            <div class="c-new-price__value">
                              ۳۰,۷۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="1135818"
                     data-position="16">
                  <div class="c-product-box"><a data-id="1135818"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-1135818/هدفون-بلوتوث-مدل-i7"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/5415532.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="هدفون بلوتوث مدل i7"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="1135818"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-1135818/هدفون-بلوتوث-مدل-i7">
                        هدفون بلوتوث مدل i7
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="1135818"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-1135818/هدفون-بلوتوث-مدل-i7">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value">
                              <del>۴۴,۱۰۰</del>
                              <span class="c-new-price__discount">۱۲٪</span></div>
                            <div class="c-new-price__value">
                              ۳۸,۹۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="3027164"
                     data-position="17">
                  <div class="c-product-box"><a data-id="3027164"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-3027164/دسته-بازی-پلی-استیشن-۴-سونی-مدل-dualshock-cuh-zct2e"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/7f2bcbd32cb564dc813cb34b9aec7c9e92647134_1593546441.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="دسته بازی پلی استیشن ۴ مدل DUALSHOCK CUH-ZCT2E"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="3027164"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-3027164/دسته-بازی-پلی-استیشن-۴-سونی-مدل-dualshock-cuh-zct2e">
                        دسته بازی پلی استیشن ۴ مدل DUALSHOCK CUH-ZCT2E
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="3027164"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-3027164/دسته-بازی-پلی-استیشن-۴-سونی-مدل-dualshock-cuh-zct2e">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value">
                              <del>۵۰۹,۰۰۰</del>
                              <span class="c-new-price__discount">۳۷٪</span></div>
                            <div class="c-new-price__value">
                              ۳۱۹,۰۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="939299"
                     data-position="18">
                  <div class="c-product-box"><a data-id="939299"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-939299/کره-حیوانی-پاستوریزه-میهن-50-گرم"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/4966662.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="کره حیوانی پاستوریزه میهن 50 گرم"
                        class="swiper-lazy"><img class="c-product-box__fmcg-symbol"
                                                 src="https://www.digikala.com/static/files/31a78819.svg"></a>
                    <div class="c-product-box__title"><a data-id="939299"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-939299/کره-حیوانی-پاستوریزه-میهن-50-گرم">
                        کره حیوانی پاستوریزه میهن 50 گرم
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__fast-shopping">
                        <div class="c-product-box__add-to-cart-section">
                          <div class="c-product__add-container js-add-to-cart-container
                            js-fast-shopping-confirm"><a
                              class="btn-add-to-cart-mini js-add-to-cart js-product-add-to-card js-fast-shopping-confirm"
                              href="/cart/add/1954439/1/"
                              data-event="add_to_cart" data-event-category="ecommerce"
                              data-event-label="price:  - seller: marketplace - seller_name:  - seller_rating:  - multiple_configs: False - position: 0"></a>
                            <div
                              class="c-product__add-substitute c-product__add-substitute--item js-quick-carousel-add-to-cart"
                              data-variant="1954439"
                              data-cart-item=""
                              data-mode="add"
                              data-enhanced-ecommerce='null'><select class="c-ui-select js-ui-select-above"
                                                                     name="order[amount]">
                                <option value="0" class="c-product__add-cancel">حذف</option>
                                <option value="1">۱ عدد</option>
                                <option value="2">۲ عدد</option>
                                <option value="3">۳ عدد</option>
                                <option value="4">۴ عدد</option>
                              </select></div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__price-item"><a data-id="939299"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-939299/کره-حیوانی-پاستوریزه-میهن-50-گرم">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value">
                              <del>۵,۴۰۰</del>
                              <span class="c-new-price__discount">۱۰٪</span></div>
                            <div class="c-new-price__value">
                              ۴,۸۶۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="4528544"
                     data-position="19">
                  <div class="c-product-box"><a data-id="4528544"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-4528544/آینه-النسی-مدل-am-090"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/fb872bd8c449389dbae04e52c0ca7ac8bc25ecbe_1614014170.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="آینه اِلِنسی مدل AM-090"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="4528544"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-4528544/آینه-النسی-مدل-am-090">
                        آینه اِلِنسی مدل AM-090
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item">
                        <a data-id="4528544" class="js-product-url js-carousel-ga-product-box" href="/product/dkp-4528544/آینه-النسی-مدل-am-090">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value">
                              <del>۱۰,۰۰۰</del>
                              <span class="c-new-price__discount">۷۱٪</span></div>
                            <div class="c-new-price__value">
                              ۲,۹۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="726457" data-position="20">
                  <div class="c-product-box">
                    <a data-id="726457" class="c-product-box__img js-url js-product-url js-carousel-ga-product-box" href="/product/dkp-726457/کیف-هندزفری-مدل-circle">
                      <img data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/4446319.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60" alt="کیف هندزفری مدل circle" class="swiper-lazy"></a>
                    <div class="c-product-box__title">
                      <a data-id="726457" class="js-product-url js-carousel-ga-product-box" href="/product/dkp-726457/کیف-هندزفری-مدل-circle">
                        کیف هندزفری مدل circle
                      </a>
                    </div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item">
                        <a data-id="726457" class="js-product-url js-carousel-ga-product-box" href="/product/dkp-726457/کیف-هندزفری-مدل-circle">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value">
                              <del>۸,۹۰۰</del>
                              <span class="c-new-price__discount">۱۰٪</span></div>
                            <div class="c-new-price__value">
                              ۸,۰۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-button-prev js-swiper-button-prev"></div>
              <div class="swiper-button-next js-swiper-button-next"></div>
            </div>
          </div>
        </section>

        <div id="product-template" style="display: none">
          <div class="swiper-slide js-sntracker-carousel-item" data-id="{id}">
            <div class="c-product-box">
              <a class="c-product-box__img js-url js-carousel-ga-product-box" data-id="{id}" href="{url}">
                <img data-img="{image}" alt="{title}" class="swiper-lazy js-template-img" loading="lazy">
                <img class="c-product-box__fmcg-symbol {isFMCG}" loading="lazy" src="https://www.digikala.com/static/files/31a78819.svg">
              </a>
              <div class="c-product-box__title">
                <a href="{url}" data-id="{id}" class="js-carousel-ga-product-box">{title}</a>
              </div>
              <div class="c-product-box__price-row">
                <div class="c-product-box__price-item">
                  <div class="c-new-price">
                    <div class="c-new-price__old-value {hasDiscount}">
                      <del>{oldValue}</del>
                      <span class="c-new-price__discount">٪{discount}</span>
                    </div>
                    <div class="c-new-price__value">
                      {price}
                      <span class="c-new-price__currency">تومان</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </article>
    </div>
    <div id="sidebar">
      <aside></aside>
    </div>
  </main>
@endsection
