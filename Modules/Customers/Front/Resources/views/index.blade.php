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
    <meta name="description" content="{{ $description }}" />
    <meta name="keywords" content="{{ $index_meta_keywords }}" />

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

    <style>
        @media screen and (-ms-high-contrast: none) {

            .c-shipment-page__to-payment-sticky,
            .c-checkout__to-shipping-sticky {
                position: relative !important;
            }

            .c-checkout-aside {
                position: relative !important;
            }
        }

        /* all edge versions */
        @supports (-ms-ime-align:auto) {

            .c-shipment-page__to-payment-sticky,
            .c-checkout__to-shipping-sticky {
                position: relative !important;
            }

            .c-checkout-aside {
                position: relative !important;
            }
        }

        .c-navi-new-list__sublist--promotion .c-navi-new-list__sublist-option {
            width: 40% !important;
        }

        .c-navi-new-list__category--main::before {
            content: unset !important;
        }

        .menu-icons {
            float: right;
            width: 22px !important;
            height: 24px !important;
            margin-left: 4px;
            margin-top: 0px !important;
            background-size: 20px !important;
        }

    </style>

    <!-- page js variables -->
    <script src="{{ asset('assets/js/sentry.js') }} "></script>
    <script src="{{ asset('assets/js/indexAction.js') }} "></script>
@endsection

@section('content')
    <main id="main">
        <div id="HomePageTopBanner"></div>
        <div id="content">

            <article class="container container--home">
                <div class="o-page">
                    <div class="o-page__row o-page__row--main-top">

                        <aside class="c-adplacement c-adplacement__margin-bottom">
                            @if (!is_null($banner2) &&
        $banner2->images()->exists() &&
        $banner2->images()->first()->media()->exists())
                                <a href="{{ $banner2->images()->first()->link }}" class="c-adplacement__item"
                                    target="_blank" title="{{ $banner2->images()->first()->alt }}">
                                    <img src="{{ $banner2->images()->first()->media()->exists()
    ? $site_url .
        '/' .
        $banner2->images()->first()->media->first()->path .
        '/' .
        $banner2->images()->first()->media->first()->name
    : '' }}"
                                        alt="{{ $banner2->images()->first()->media()->exists()
    ? $banner2->images()->first()->alt
    : '' }}"
                                        loading="lazy" />
                                </a>
                            @endif
                        </aside>

                        <div class="o-page__two-thirds o-page__two-thirds--right">
                            <section class="c-adplacement-head-slider c-adplacement-head-slider--home">
                                <div class="c-swiper c-swiper--promo-box c-main-slider-container ">
                                    <div
                                        class="swiper-container swiper-container-horizontal js-main-page-slider swiper-container-fade swiper-container-rtl">
                                        <div class="swiper-wrapper dkms-placement-slider c-adplacement"
                                            style="transition-duration: 0ms;">
                                            @if (!is_null($slider1) &&
        $slider1->images()->exists() &&
        $slider1->images()->first()->media()->exists())
                                                @foreach ($slider1->images as $image)
                                                    <a href="{{ $image->media()->exists() ? $image->link : '' }}"
                                                        class="c-main-slider__slide swiper-slide js-main-page-slider-image"
                                                        title="{{ $image->media()->exists() ? $image->alt : '' }}"
                                                        data-is-trackable="" target="_blank"
                                                        style="background-image: url({{ $site_url . '/' . $image->media->first()->path . '/' . $image->media->first()->name }}); width: 875px; transition-duration: 0ms; opacity: 1; transform: translate3d(1750px, 0px, 0px);"></a>
                                                @endforeach
                                            @endif
                                        </div>
                                        <div
                                            class="swiper-pagination c-main-slider__actions swiper-pagination-clickable swiper-pagination-bullets">
                                        </div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <div class="o-page__one-thirds o-page__one-thirds--left">
                            <aside class="c-adplacement c-adplacement__container-column">
                                @if (!is_null($banner3) &&
        $banner3->images()->exists() &&
        $banner3->images()->first()->media()->exists())
                                    <a href="{{ $banner3->images()->first()->link }}"
                                        class="c-adplacement__item js-ad-placement-column-item c-adplacement__item--column"
                                        target="_blank" data-is-trackable=""
                                        title="{{ $banner3->images()->first()->alt }}">
                                        <div class="c-adplacement__sponsored_box">
                                            <img src="{{ $banner3->images()->first()->media()->exists()
    ? $site_url .
        '/' .
        $banner3->images()->first()->media->first()->path .
        '/' .
        $banner3->images()->first()->media->first()->name
    : '' }}"
                                                alt="{{ $banner3->images()->first()->media()->exists()
    ? $banner3->images()->first()->alt
    : '' }}"
                                                loading="lazy" />
                                        </div>
                                    </a>
                                @endif
                                @if (!is_null($banner4) &&
        $banner4->images()->exists() &&
        $banner4->images()->first()->media()->exists())
                                    <a href="{{ $banner4->images()->first()->link }}"
                                        class="c-adplacement__item js-ad-placement-column-item c-adplacement__item--column"
                                        target="_blank" data-is-trackable=""
                                        title="{{ $banner4->images()->first()->alt }}">
                                        <div class="c-adplacement__sponsored_box">
                                            <img src="{{ $banner4->images()->first()->media()->exists()
    ? $site_url .
        '/' .
        $banner4->images()->first()->media->first()->path .
        '/' .
        $banner4->images()->first()->media->first()->name
    : '' }}"
                                                alt="{{ $banner4->images()->first()->media()->exists()
    ? $banner4->images()->first()->alt
    : '' }}"
                                                loading="lazy" />
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
                    "event": "eec.productImpression",
                    "ecommerce": {
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
            @if(!is_null($amazing_offer_products) && count($amazing_offer_products))
            <div class="c-swiper-specials c-swiper-specials--incredible">
                <section class="container container--home" id="sn-carousels-incredible-offer">
                    <a href="/incredible-offers/" class="c-swiper-specials__title c-swiper-specials__title--incredible"
                        title="پیشنهاد شگفت‌انگیز"><img src="{{ asset('assets\new\image\promotion_box.png') }}"
                            alt="پیشنهاد شگفت‌انگیز">
                        <div class="o-btn c-swiper-specials__btn">مشاهده همه</div>
                    </a>
                    <div class="c-swiper c-swiper--products c-swiper--specials">
                        <div class="c-box">
                            <div class="swiper-container swiper-container-horizontal js-swiper-specials">
                                <div class="swiper-wrapper">
                                  @foreach ($amazing_offer_products as $product)
                                    <div class="swiper-slide" data-carousel="sn-carousels-incredible-offer">
                                        <li>
                                          <a href="" class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                                            <div class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow
                                               c-product-box--card-macro c-product-box--plus-badge " title="">
                                                <div class="c-product-box__img js-url js-snt-carousel_product"
                                                    title="{{ $product->title_fa }}">
                                                  <img alt="{{ $product->title_fa }}"
                                                     src="{{ g_product_image_main_src($product) }}?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                                        class="swiper-lazy swiper-lazy-loaded" loading="lazy" />
                                                </div>
                                                <div class="c-product-box__title">
                                                  {{ $product->title_fa }}
                                                </div>
{{--                                                <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible">--}}
{{--                                                  <span class="c-product-box__digiplus-data c-digiplus-sign--before">--}}
{{--                                                      ۰ تومان هدیه نقدی--}}
{{--                                                  </span>--}}
{{--                                                </div>--}}
                                                <div class="c-product-box__row c-product-box__row--price">
                                                    <div class="c-price">
                                                        <div class="c-price__value c-price__value--plp js-price-complete-details">
                                                            @if(!is_null(variantPromotionDefault(variant_defualt($product))))
                                                              <del>{{ persianNum(number_format(toman(variant_defualt($product)->sale_price))) }}</del>
                                                              <div class="c-price__discount-oval">
                                                                <span>{{ persianNum(variantPromotionDefault(variant_defualt($product))->percent) }}٪</span>
                                                              </div>
                                                            @endif
                                                            <div class="c-price__value-wrapper">
                                                              {{ persianNum(number_format(toman(product_price($product)))) }}
                                                              <span class="c-price__currency">تومان</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                              @if(!is_null(variantPromotionDefault(variant_defualt($product))))
                                                <div class="c-product-box__amazing">
                                                  <div class="c-product-box__timer   js-counter"
                                                      data-countdown="{{ variantPromotionDefault(variant_defualt($product))->end_at }}"></div>
                                                  <div class="c-product-box__remained"></div>
                                                </div>
                                              @endif
                                            </div>
                                        </li>
                                    </div>
                                  @endforeach

                                    <div class="swiper-slide c-swiper__show-more-cart--auto-height">
                                      <a href="/incredible-offers/" class="c-swiper__show-more-cart"><span></span>
                                        <p>
                                            مشاهده همه
                                        </p>
                                      </a>
                                    </div>
                                </div>
                                <div class="swiper-button-prev js-swiper-button-prev"></div>
                                <div class="swiper-button-next js-swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            @endif
            <article class="container container--home">
                <div class="o-page">
                    <div class="o-page__row"></div>
                    <aside class="c-adplacement c-adplacement__container-row">
                        @if (!is_null($bannerGroup1) && $bannerGroup1->images()->exists())
                            @foreach ($bannerGroup1->images as $image)
                                <a href="{{ $image->media()->exists() ? $image->link : '' }}"
                                    class="c-adplacement__item js-banner-impression-adro" data-observed="1" target="_blank"
                                    data-is-trackable="" title="{{ $image->media()->exists() ? $image->alt : '' }}">
                                    <div class="c-adplacement__sponsored_box">
                                        <img src="{{ $site_url . '/' . $image->media->first()->path . '/' . $image->media->first()->name }}"
                                            alt="{{ $image->media()->exists() ? $image->alt : '' }}" loading="lazy">
                                    </div>
                                </a>
                            @endforeach
                        @endif
                    </aside>
                </div>
            </article>
            @if(!is_null($special_offer_products) && count($special_offer_products))
            <div class="c-swiper-specials c-swiper-specials--incredible">
              <section class="container container--home" id="sn-carousels-incredible-offer">
              <a href="/incredible-offers/" class="c-swiper-specials__title c-swiper-specials__title--incredible"
                 title="پیشنهاد شگفت‌انگیز">
                <img src="{{ asset('assets\new\image\promotion_box.png') }}"
                                                 alt="پیشنهاد شگفت‌انگیز">
                <div class="o-btn c-swiper-specials__btn">مشاهده همه</div>
              </a>
              <div class="c-swiper c-swiper--products c-swiper--specials">
                <div class="c-box">
                  <div class="swiper-container swiper-container-horizontal js-swiper-specials">
                    <div class="swiper-wrapper">
                      @foreach ($special_offer_products as $product)
                        <div class="swiper-slide" data-carousel="sn-carousels-incredible-offer">
                          <li>
                            <a href="" class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                            <div class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow
                                               c-product-box--card-macro c-product-box--plus-badge " title="">
                              <div class="c-product-box__img js-url js-snt-carousel_product"
                                   title="{{ $product->title_fa }}">
                                <img alt="{{ $product->title_fa }}"
                                     src="{{ g_product_image_main_src($product) }}?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                     class="swiper-lazy swiper-lazy-loaded" loading="lazy" />
                              </div>
                              <div class="c-product-box__title">
                                {{ $product->title_fa }}
                              </div>
                              {{--                                                <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible">--}}
                              {{--                                                  <span class="c-product-box__digiplus-data c-digiplus-sign--before">--}}
                              {{--                                                      ۰ تومان هدیه نقدی--}}
                              {{--                                                  </span>--}}
                              {{--                                                </div>--}}
                              <div class="c-product-box__row c-product-box__row--price">
                                <div class="c-price">
                                  <div class="c-price__value c-price__value--plp js-price-complete-details">
                                    @if(!is_null(variantPromotionDefault(variant_defualt($product))))
                                      <del>{{ persianNum(number_format(toman(variant_defualt($product)->sale_price))) }}</del>
                                      <div class="c-price__discount-oval">
                                        <span>{{ persianNum(variantPromotionDefault(variant_defualt($product))->percent) }}٪</span>
                                      </div>
                                    @endif
                                    <div class="c-price__value-wrapper">
                                      {{ persianNum(number_format(toman(product_price($product)))) }}
                                      <span class="c-price__currency">تومان</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              @if(!is_null(variantPromotionDefault(variant_defualt($product))))
                                <div class="c-product-box__amazing">
                                  <div class="c-product-box__timer   js-counter"
                                       data-countdown="{{ variantPromotionDefault(variant_defualt($product))->end_at }}"></div>
                                  <div class="c-product-box__remained"></div>
                                </div>
                              @endif
                            </div>
                          </li>
                        </div>
                      @endforeach

                      <div class="swiper-slide c-swiper__show-more-cart--auto-height">
                        <a href="/incredible-offers/" class="c-swiper__show-more-cart"><span></span>
                          <p>
                            مشاهده همه
                          </p>
                        </a>
                      </div>
                    </div>
                    <div class="swiper-button-prev js-swiper-button-prev"></div>
                    <div class="swiper-button-next js-swiper-button-next"></div>
                  </div>
                </div>
              </div>
            </section>
            </div>
            @endif

            <article class="container container--home">
                <div class="o-page">
                    <aside class="c-adplacement">
                        @if (!is_null($bannerGroup2) && $bannerGroup2->images()->exists())
                            @foreach ($bannerGroup2->images as $image)
                                <a href="{{ $image->media()->exists() ? $image->link : '' }}"
                                    class="js-banner-impression-adro c-adplacement__item c-adplacement__item--b"
                                    data-observed="0" target="_blank"
                                    title="{{ $image->media()->exists() ? $image->alt : '' }}" data-is-trackable="">
                                    <div class="c-adplacement__sponsored_box">
                                        <img src="{{ $site_url . '/' . $image->media->first()->path . '/' . $image->media->first()->name }}"
                                            alt="{{ $image->media()->exists() ? $image->alt : '' }}" loading="lazy" />
                                    </div>
                                </a>
                            @endforeach
                        @endif
                    </aside>
                </div>

                <aside class="c-about-digikala-items">
                    <aside class="c-adplacement c-adplacement__container-row">
                        @if (!is_null($bannerGroup3) && $bannerGroup3->images()->exists())
                            @foreach ($bannerGroup3->images as $image)
                                <a href="{{ $image->media()->exists() ? $image->link : '' }}"
                                    class="c-adplacement__item js-banner-impression-adro" data-observed="1" target="_blank"
                                    data-is-trackable="" title="{{ $image->media()->exists() ? $image->alt : '' }}">
                                    <div class="c-adplacement__sponsored_box">
                                        <img src="{{ $site_url . '/' . $image->media->first()->path . '/' . $image->media->first()->name }}"
                                            alt="{{ $image->media()->exists() ? $image->alt : '' }}" loading="lazy">
                                    </div>
                                </a>
                            @endforeach
                        @endif
                    </aside>
                </aside>
                <section
                    class="c-swiper c-swiper--products has-placeholder recommendation-swiper u-hidden js-sntracker-carousel"
                    id="recommendation-home_3">
                    <div class="recommendation-swiper__mask js-swiper-mask-recommendation-home_3 u-hidden">
                        <p>این پیشنهاد به شما
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
                <section
                    class="c-swiper c-swiper--products has-placeholder recommendation-swiper u-hidden js-sntracker-carousel"
                    id="recommendation-home_4">
                    <div class="recommendation-swiper__mask js-swiper-mask-recommendation-home_4 u-hidden">
                        <p>این پیشنهاد به شما
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
                    {{-- <a href="" class="c-adplacement__item js-banner-impression-adro" data-observed="0" target="_blank" data-is-trackable="" title=""> --}}
                    {{-- <div class="c-adplacement__sponsored_box"> --}}
                    {{-- <img src="https://dkstatics-public.digikala.com/digikala-adservice-banners/9ba8fa23a193e5218d0782580f959e55d1514089_1615015933.jpg?x-oss-process=image/quality,q_80" alt="" loading="lazy"/> --}}
                    {{-- </div> --}}
                    {{-- </a> --}}
                    {{-- @if ($bannerGroup2->images()->exists()) --}}
                    {{-- @foreach ($bannerGroup2->images as $image) --}}
                    {{-- <a href="{{ ($image->media()->exists())? $image->link : '' }}" class="c-adplacement__item js-banner-impression-adro" data-observed="1" target="_blank" data-is-trackable="" title="{{ ($image->media()->exists())? $image->alt : '' }}"> --}}
                    {{-- <div class="c-adplacement__sponsored_box"> --}}
                    {{-- <img src="{{ $site_url . '/' . $image->media->first()->path . '/'. $image->media->first()->name }}" alt="{{ ($image->media()->exists())? $image->alt : '' }}" loading="lazy"> --}}
                    {{-- </div> --}}
                    {{-- </a> --}}
                    {{-- @endforeach --}}
                    {{-- @endif --}}
                </aside>
                <section
                    class="c-swiper c-swiper--products has-placeholder recommendation-swiper u-hidden js-sntracker-carousel"
                    id="recommendation-home_5">
                    <div class="recommendation-swiper__mask js-swiper-mask-recommendation-home_5 u-hidden">
                        <p>این پیشنهاد به شما
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
                <section
                    class="c-swiper c-swiper--products has-placeholder recommendation-swiper u-hidden js-sntracker-carousel"
                    id="recommendation-home_6">
                    <div class="recommendation-swiper__mask js-swiper-mask-recommendation-home_6 u-hidden">
                        <p>این پیشنهاد به شما
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

                @foreach ($productSwipers as $productSwiper)
                  <div class="swiper-products-container" data-type="homepagelatest">
                    <section class="c-swiper c-swiper--products js-sntracker-carousel " id="sn-carousels-2">
                        <div class="o-headline">
                          <span class="o-headline__title-box"><div class="o-headline__title-content"><h3>سلامت بدن</h3><p>فروش ویژه بازگشت به مدرسه</p></div></span>
                            <a href="/search/?has_selling_stock=1&sortby=1" class="c-swiper__show-more">مشاهده همه</a>
                        </div>
                        <div class="c-box" id="sn-carousels-2">
                            <div class="swiper-container swiper-container-horizontal js-swiper-products">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-2"
                                        data-id="4504481" data-position="2">
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
                                                                <span class="c-new-price__discount">۳۷٪</span>
                                                            </div>
                                                            <div class="c-new-price__value">
                                                                ۱۵,۷۵۰
                                                                <span class="c-new-price__currency">تومان</span>
                                                            </div>
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
                @endforeach

                <aside class="c-adplacement">
                    @if (!is_null($bannerGroup4) && $bannerGroup4->images()->exists())
                        @foreach ($bannerGroup4->images as $image)
                            <a href="{{ $image->media()->exists() ? $image->link : '' }}"
                                class="js-banner-impression-adro c-adplacement__item c-adplacement__item--b"
                                data-observed="0" target="_blank"
                                title="{{ $image->media()->exists() ? $image->alt : '' }}" data-is-trackable="">
                                <div class="c-adplacement__sponsored_box">
                                    <img src="{{ $site_url . '/' . $image->media->first()->path . '/' . $image->media->first()->name }}"
                                        alt="{{ $image->media()->exists() ? $image->alt : '' }}" loading="lazy" />
                                </div>
                            </a>
                        @endforeach
                    @endif
                </aside>

                @if (!is_null($banner5) && $banner5->images()->exists() && $banner5->images()->first()->media()->exists())
                    <aside class="c-adplacement c-adplacement--main-page-inner c-adplacement__container-row">
                        <a href="{{ $banner5->images()->first()->link }}"
                            class="c-adplacement__item js-banner-impression-adro" data-observed="0" target="_blank"
                            data-is-trackable="" title="{{ $banner5->images()->first()->alt }}">
                            <div class="c-adplacement__sponsored_box">
                                <img src="{{ $banner5->images()->first()->media()->exists()
                                  ? $site_url . '/' . $banner5->images()->first()->media->first()->path . '/' . $banner5->images()->first()->media->first()->name
                                  : ''
                                 }}"
                                    alt="{{ $banner5->images()->first()->media()->exists()
                                      ? $banner5->images()->first()->alt
                                      : ''
                                     }}"
                                    loading="lazy" />
                            </div>
                        </a>
                    </aside>
                @endif
            </article>
        </div>
        <div id="sidebar">
            <aside></aside>
        </div>
    </main>
@endsection

@section('source')
    <div class="c-fmcg-voucher-box c-fmcg-voucher-box--bf u-hidden js-wheel-floating-box">
        <a href="/search/?q=%20&sortby=7">
            <img class="c-fmcg-voucher-box__img" src="https://www.digikala.com/static/files/9252b9fc.png" />
        </a>
        <button class="c-fmcg-voucher-box__close-button js-wheel-floating-box-close" style="top: 10px;"></button>
    </div>

    <div class="remodal c-remodal-account" data-remodal-id="login" role="dialog" aria-labelledby="modal1Title"
        aria-describedby="modal1Desc">
        <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
        <div class="c-remodal-account__headline">ورود به {{ $fa_store_name }}</div>
        <div class="c-remodal-account__content">
            <form class="c-form-account" id="loginFormModal">
                <div class="c-message-light c-message-light--info" id="login-form-msg"></div>

                <div class="c-form-account__title">پست الکترونیک یا شماره موبایل</div>
                <div class="c-form-account__row">
                    <div class="c-form-account__col">
                        <label class="c-ui-input c-ui-input--account-login">
                            <input class="c-ui-input__field" type="text" name="login[email_phone]"
                                autocomplete="current-email" placeholder="info@digikala.com">
                        </label>
                    </div>
                </div>

                <div class="c-form-account__title">کلمه عبور</div>
                <div class="c-form-account__row">
                    <div class="c-form-account__col"><label class="c-ui-input c-ui-input--account-password"><input
                                class="c-ui-input__field" name="login[password]" type="password"
                                autocomplete="current-password" placeholder=""></label></div>
                </div>

                <div class="c-form-account__agree">
                    <label class="c-ui-checkbox c-ui-checkbox--primary">
                        <input type="checkbox" value="1" name="login[remember]" id="accountAutoLogin">
                        <span class="c-ui-checkbox__check"></span></label><label for="accountAutoLogin">مرا به خاطر داشته
                        باش</label>
                </div>

                <div class="c-form-account__row c-form-account__row--submit">
                    <div class="c-form-account__col">
                        <button class="btn-login login-button-js">ورود به {{ $fa_store_name }}</button>
                    </div>
                </div>

                <div class="c-form-account__link">
                    <a data-snt-event="dkLoginClick" data-snt-params='{"type":"forgetPassword","site":"login-modal"}'
                        href="/users/password/forgot/" class="btn-link-spoiler">
                        رمز عبور خود را فراموش کرده ام
                    </a>
                </div>

                <div class="c-message-light c-message-light--error has-oneline" id="loginFormError">نام کاربری یا کلمه
                    عبور اشتباه است.</div>
            </form>
        </div>
        <div class="c-remodal-account__footer is-highlighted"><span>کاربر جدید هستید؟</span>
            <a data-snt-event="dkLoginClick" data-snt-params='{"type":"signup","site":"login-modal"}'
                href="/users/login-register/?_back=https://www.digikala.com/" class="btn-link-spoiler">
                ثبت‌نام در {{ $fa_store_name }}
            </a>
        </div>
    </div>

    <div class="remodal c-remodal-loader" data-remodal-id="loader"
        data-remodal-options="hashTracking: false, closeOnOutsideClick: false" role="dialog" aria-labelledby="modal1Title"
        aria-describedby="modal1Desc">
        <div class="c-remodal-loader__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="115" height="30" viewBox="0 0 115 30">
                <path fill="#EE384E" fill-rule="evenodd"
                    d="M76.916 19.024h6.72v-8.78h-6.72c-1.16 0-2.24 1.061-2.24 2.195v4.39c0 1.134 1.08 2.195 2.24 2.195zm26.883 0h6.72v-8.78h-6.72c-1.16 0-2.24 1.061-2.24 2.195v4.39c0 1.134 1.08 2.195 2.24 2.195zM88.117 6.951v15.366c0 .484-.625 1.098-1.12 1.098l-2.24.023c-.496 0-1.12-.637-1.12-1.12v-.733l-1.017 1.196c-.31.413-1.074.634-1.597.634h-4.107c-3.604 0-6.721-3.063-6.721-6.586v-4.39c0-3.523 3.117-6.585 6.72-6.585h10.082c.495 0 1.12.613 1.12 1.097zm26.883 0v15.366c0 .484-.624 1.098-1.12 1.098l-2.24.023c-.496 0-1.12-.637-1.12-1.12v-.733l-1.017 1.196c-.31.413-1.074.634-1.597.634h-4.107c-3.604 0-6.721-3.063-6.721-6.586v-4.39c0-3.523 3.117-6.585 6.72-6.585h10.082c.495 0 1.12.613 1.12 1.097zm-74.675 3.293h-6.721c-1.16 0-2.24 1.061-2.24 2.195v4.39c0 1.134 1.08 2.195 2.24 2.195h6.72v-8.78zm4.48-3.293V23.78c0 3.523-3.117 6.22-6.72 6.22H34.62c-.515 0-1-.236-1.311-.638l-1.972-2.55c-.327-.424-.144-1.202.399-1.202h6.347c1.16 0 2.24-.696 2.24-1.83v-.365h-6.72c-3.604 0-6.72-3.063-6.72-6.586v-4.39c0-3.523 3.116-6.585 6.72-6.585h4.107c.514 0 1.074.405 1.437.731l1.177 1.098V6.95c0-.483.625-1.097 1.12-1.097h2.24c.496 0 1.12.613 1.12 1.097zM4.481 16.83c0 1.134 1.08 2.195 2.24 2.195h6.72v-8.78h-6.72c-1.16 0-2.24 1.061-2.24 2.195v4.39zM16.8 0c.497 0 1.121.613 1.121 1.098v21.22c0 .483-.624 1.097-1.12 1.097h-2.24c-.496 0-1.12-.613-1.12-1.098v-.732l-1.175 1.232c-.318.346-.932.598-1.44.598H6.722C3.117 23.415 0 20.352 0 16.829v-4.356c0-3.523 3.117-6.62 6.72-6.62h6.722V1.099c0-.485.624-1.098 1.12-1.098h2.24zm46.3 14.634L69.336 6.9c.347-.421.04-1.048-.513-1.048h-3.566c-.27 0-.525.119-.696.323l-6.314 7.727V1.098c0-.485-.625-1.098-1.12-1.098h-2.24c-.496 0-1.12.613-1.12 1.098v21.22c0 .483.624 1.097 1.12 1.097h2.24c.495 0 1.12-.614 1.12-1.098v-6.951l6.317 7.744c.17.207.428.328.7.328h3.562c.554 0 .86-.627.514-1.048l-6.24-7.756zM48.166 0c-.496 0-1.12.613-1.12 1.098v2.195c0 .484.624 1.097 1.12 1.097h2.24c.495 0 1.12-.613 1.12-1.097V1.098c0-.485-.625-1.098-1.12-1.098h-2.24zm0 5.854c-.496 0-1.12.613-1.12 1.097v15.366c0 .484.8 1.12 1.295 1.12l2.065-.022c.495 0 1.12-.614 1.12-1.098V6.951c0-.484-.625-1.097-1.12-1.097h-2.24zM21.282 0c-.495 0-1.12.613-1.12 1.098v2.195c0 .484.625 1.097 1.12 1.097h2.24c.496 0 1.12-.613 1.12-1.097V1.098c0-.485-.624-1.098-1.12-1.098h-2.24zm0 5.854c-.495 0-1.12.613-1.12 1.097v15.366c0 .484.625 1.098 1.12 1.098h2.24c.496 0 1.12-.614 1.12-1.098V6.951c0-.484-.624-1.097-1.12-1.097h-2.24zm73.556-4.756v21.22c0 .483-.625 1.097-1.12 1.097h-2.24c-.496 0-1.12-.614-1.12-1.098V1.097c0-.484.624-1.097 1.12-1.097h2.24c.495 0 1.12.613 1.12 1.098z" />
            </svg>
        </div>
        <div class="c-remodal-loader__bullets"><i class="c-remodal-loader__bullet c-remodal-loader__bullet--1"></i><i
                class="c-remodal-loader__bullet c-remodal-loader__bullet--2"></i><i
                class="c-remodal-loader__bullet c-remodal-loader__bullet--3"></i><i
                class="c-remodal-loader__bullet c-remodal-loader__bullet--4"></i></div>
    </div>

    <div class="remodal c-remodal-general-alert" data-remodal-id="alert" role="dialog" aria-labelledby="modal1Title"
        aria-describedby="modal1Desc">
        <div class="c-remodal-general-alert__main">
            <div class="c-remodal-general-alert__content">
                <p class="js-remodal-general-alert__text"></p>
                <p class="c-remodal-general-alert__description js-remodal-general-alert__description"></p>
            </div>
            <div class="c-remodal-general-alert__actions">
                <button
                    class="c-remodal-general-alert__button c-remodal-general-alert__button--approve js-remodal-general-alert__button--approve"></button>
                <button
                    class="c-remodal-general-alert__button c-remodal-general-alert__button--cancel js-remodal-general-alert__button--cancel"></button>
            </div>
        </div>
    </div>

    <div class="remodal c-remodal-general-information" data-remodal-id="information" role="dialog"
        aria-labelledby="modal1Title" aria-describedby="modal1Desc">
        <div class="c-remodal-general-information__main">
            <div class="c-remodal-general-information__content">
                <p class="js-remodal-general-information__text"></p>
            </div>
            <div class="c-remodal-general-information__actions">
                <button
                    class="c-remodal-general-information__button c-remodal-general-information__button--approve js-remodal-general-information__button--approve"></button>
            </div>
        </div>
    </div>

    <div class="remodal c-remodal c-remodal-quick-view" data-remodal-id="quick-view" role="dialog"
        aria-labelledby="modal1Title" aria-describedby="modal1Desc">
        <button data-remodal-action="close" class="remodal-close c-remodal__close" aria-label="Close"></button>
        <div class="c-quick-view__content js-quick-view-section"></div>
    </div>

    <div class="remodal c-remodal-fmcg" data-remodal-id="fmcg-modal"
        data-remodal-options="hashTracking: false, closeOnOutsideClick: false" role="dialog">
        <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
        <div class="c-remodal-fmcg__container">
            <img src="https://www.digikala.com/static/files/cbaed462.png" class="c-remodal-fmcg__logo" />
            <div class="c-remodal-fmcg__content">
                <p class="c-remodal-fmcg__head-text">ارسال سریع کالای
                    <span> سوپر مارکتی </span> فقط در تهران و کرج امکان پذیر است.
                </p>
                <p class="c-remodal-fmcg__question">با توجه به محدودیت ارسال، آیا مایل هستید این کالا به سبد خرید شما
                    افزوده شود؟</p>
                <div class="c-remodal-fmcg__actions">
                    <button
                        class="c-remodal-fmcg__button c-remodal-fmcg__button--reject js-fmcg-modal-reject">خیر</button>
                    <button
                        class="c-remodal-fmcg__button c-remodal-fmcg__button--approve js-fmcg-modal-approve">بله</button>
                </div>
            </div>
        </div>
    </div>

    <div class="c-toast__container js-toast-container">
        <div class="c-toast js-toast" style="display: none">
            <div class="c-toast__text js-toast-text"></div>
            <div class="c-toast__btn-container">
                <button type="button" class="js-toast-btn o-link o-link--sm o-link--no-border o-btn">
                    متوجه شدم
                </button>
            </div>
        </div>
    </div>
    <div class="remodal c-remodal-location js-general-location" data-remodal-id="general-location" role="dialog"
        aria-labelledby="modal1Title" aria-describedby="modal1Desc">
        <div class="c-remodal-location__header">
            <span class="js-general-location-title">انتخاب استان</span>
            <div class="c-remodal-location__close js-close-modal"></div>
        </div>
        <div class="c-remodal-location__content js-states-container">
            <div class="c-general-location__row c-general-location__row--your-location js-your-location">
                مکان‌یابی خودکار
            </div>
        </div>
        <div class="c-remodal-location__content js-cities-container">
            <div class="c-general-location__row c-general-location__row--back js-back-to-states">
                بازگشت به لیست استان‌ها
            </div>
        </div>
    </div>

    <div class="remodal c-remodal-location c-remodal-location--addresses js-general-location-addresses"
        data-remodal-id="general-location" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
        <div class="c-remodal-location__header">
            <span class="js-general-location-title">انتخاب آدرس</span>
            <div class="c-remodal-location__close js-close-modal"></div>
        </div>
        <div class="c-remodal-location__content js-addresses-container">
            <div class="c-ui-radio-wrapper c-ui-radio--general-location js-sample-address u-hidden">
                <label class="c-filter__label " for="generalLocationAddress"></label>
                <label class="c-ui-radio">
                    <input type="radio" value="" name="generalLocationAddress" class="" id="
                        generalLocationAddress" data-title="">
                    <span class="c-ui-radio__check"></span>
                </label>
            </div>
            <a href="/addresses/add/" class="c-general-location__add-address js-general-location-add-address">
                افزودن آدرس جدید
            </a>
        </div>
    </div>

@endsection
