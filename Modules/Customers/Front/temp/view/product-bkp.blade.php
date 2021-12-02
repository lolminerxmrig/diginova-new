@php
  $banner2 = \Modules\Staff\Slider\Models\Slider::find(2);

  $category = $product->category->first();
  do
  {
  $product_categories[] = $category;
  $category = $category->parent;
  } while (isset($category->parent));
  $product_categories[] = $category;
  $product_categories = array_reverse($product_categories,true);
@endphp

@extends('layouts.front.master')

@section('head')
  <title></title>
  <!-- SEO -->
  <meta name="description" content=""/>
  <meta name="keywords" content=""/>
  <link rel="canonical" href=""/>


  <script>
    var variants = {
      @if ($product->variants()->exists())
        @foreach ($product->variants as $key => $item)
        @if($item->variant()->exists() && !is_null($item->variant->value))
      <?php
        $promotion_price = null;
        if ($item->promotions()->exists()) {
          $promotion_price = $item->promotions()->active()->min('promotion_price');
          if ($item->promotions()->whereDate('start_at', '<=', now())->whereDate('end_at', '>=', now())->where('promotion_price', $promotion_price)->where('status', 'active')->orWhere('status', 1)->exists()) {
            $promotion_timer = $item->promotions()->whereDate('start_at', '<=', now())->whereDate('end_at', '>=', now())->where('promotion_price', $promotion_price)->where('status', 'active')->orWhere('status', 1)->first()->end_at;
          } else {
            $promotion_timer = null;
          }
        }
        if ($promotion_price == null) {
          $promotion_price = $item->sale_price;
          $promotion_timer = 'false';
        }
        ?>
      "{{ $item->variant_code }}": {
        "id": {{ $item->variant_code }},
        "active": true,
        "active_digistyle": true,
        "ovl_selling_active": true,
        "title": "\u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647 \u0627\u0645 \u067e\u06cc \u0628\u0644\u0628\u0631\u06cc \u0645\u062f\u0644 BLB-131 \u0638\u0631\u0641\u06cc\u062a 5000 \u0645\u06cc\u0644\u06cc \u0622\u0645\u067e\u0631 \u0633\u0627\u0639\u062a | \u0645\u0634\u06a9\u06cc | \u06af\u0627\u0631\u0627\u0646\u062a\u06cc \u0627\u0635\u0627\u0644\u062a \u0648 \u0633\u0644\u0627\u0645\u062a \u0641\u06cc\u0632\u06cc\u06a9\u06cc \u06a9\u0627\u0644\u0627",
        "color": {
          "id": {{ $item->variant_code }},
          "title": "{{ $item->variant->name }}",
          "code": "{{ $item->variant->value }}",
          "hexCode": "{{ $item->variant->value }}",
          "hex_code": "{{ $item->variant->value }}"
        },

        "size": [],
        "site": "digikala",
        "warranty": {
          "id": 272,
          "title": "\u06af\u0627\u0631\u0627\u0646\u062a\u06cc \u0627\u0635\u0627\u0644\u062a \u0648 \u0633\u0644\u0627\u0645\u062a \u0641\u06cc\u0632\u06cc\u06a9\u06cc \u06a9\u0627\u0644\u0627",
          "description": null,
          "phone": null,
          "address": null,
          "working_hours": null,
          "condition": null
        },
        "marketplace_seller": {
          "id": 462743,
          "name": "\u0628\u0644\u0628\u0631\u06cc",
          "rate": 76,
          "rateCount": 166,
          "rating": {
            "cancel_percentage": 100,
            "cancel_summarize": "excellent",
            "return_percentage": 97.6,
            "return_summarize": "very_bad",
            "ship_on_time_percentage": 100,
            "ship_on_time_summarize": "excellent",
            "final_score": 4,
            "final_percentage": 80
          },
          "stars": 4,
          "is_trusted": true,
          "is_official_seller": false,
          "is_roosta": false,
          "url": "\/seller\/crcrk\/",
          "registerTimeAgo": "6 \u0645\u0627\u0647 \u0648 1 \u0647\u0641\u062a\u0647"
        },
        "leadTime": 1,
        "shipping_type": "digikala",
        "gifts": [],
        "gift_product_ids": [],
        "seller_lead_time": 0,
        "market_place_selling_stock": 2,
        "is_fresh": false,
        "scheduled_stock": false,
        "promotion_price_id": null,
        "is_digikala_owner": false,
        "rank": 0.87,
        "sr": 80,
        "has_similar_variants": false,
        "fast_shopping_badge": false,
        "fast_shopping_confirm": false,
        "is_multi_warehouse": false,
        "is_ship_by_seller": false,
        "is_eligible_for_jet_delivery": false,
        "plus_cash_back": null,
        "stats": {
          "totally_satisfied": {"rate_count": 1, "rate": 16.67},
          "satisfied": {"rate_count": 4, "rate": 66.67},
          "neutral": {"rate_count": 1, "rate": 16.67},
          "dissatisfied": {"rate_count": 0, "rate": 0},
          "totally_dissatisfied": {"rate_count": 0, "rate": 0},
          "total_count": 6,
          "total_rate": 80
        },
        "available_on_website": true,
        "provider": "digikala",
        "is_heavy": false,
        "is_electronic": false,
        "sbs_seller_cities": [2094],
        "price_list": {
          "id": {{ $item->variant_code }},
          "discount_percent": null,
          "rrp_price": {{ $item->sale_price }},
          "selling_price": {{ $promotion_price }},
          "is_incredible_offer": {{ ($item->promotions()->exists())? 'true' : 'false' }},
          "is_plus_offer": false,
          "is_sponsored_offer": false,
          "is_locked_for_plus": false,
          "promotion_id": null,
          @if ($promotion_timer !== 'false') "timer": "{{ $promotion_timer }}" @else "timer":false @endif,
          "pre_sell": false,
          "variant_id": {{ $item->variant_code }},
          "orderLimit": 1,
          "initial_limit": null,
          "tags": null,
          "cache_key_created_at": "2021-04-20 14:12:42",
          "cache_update_source": "supernova-digikala-desktop",
          "discount_amount": 0,
          "discount": 0,
          "show_discount_badge": false,
          "marketable_stock": 1,
          "plus_variant_cash_back": 0
        },
        "addToCartUrl": "\/cart\/add\/14209915\/1\/",
        "addToYaldaCartUrl": "\/ajax\/cart\/move\/save-for-yalda\/14209915\/",
        "dcPoint": 150,
        "is_free_shipment": true,
        "providerData": {
          "description": "\u0645\u0648\u062c\u0648\u062f \u062f\u0631 \u0627\u0646\u0628\u0627\u0631 \u0641\u0631\u0648\u0634\u0646\u062f\u0647",
          "providers": [{
            "title": "تست عنوان",
            "description": "تست توضیح"
          }],
          "hasLeadTime": false,
          "badge_type": "without_lead_time"
        },
        "newProviderData": [{
          "type": "seller",
          "has_lead_time": false,
          "text": "تست متن"
        }],
        "isExistsInWarehouse": true
      },
      @endif
        @endforeach
        @endif

      "13556543": {
        "id": 13556543,
        "active": true,
        "active_digistyle": true,
        "ovl_selling_active": true,
        "title": "\u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647 \u0627\u0645 \u067e\u06cc \u0628\u0644\u0628\u0631\u06cc \u0645\u062f\u0644 BLB-131 \u0638\u0631\u0641\u06cc\u062a 5000 \u0645\u06cc\u0644\u06cc \u0622\u0645\u067e\u0631 \u0633\u0627\u0639\u062a | \u0645\u0634\u06a9\u06cc | \u06af\u0627\u0631\u0627\u0646\u062a\u06cc \u0627\u0635\u0627\u0644\u062a \u0648 \u0633\u0644\u0627\u0645\u062a \u0641\u06cc\u0632\u06cc\u06a9\u06cc \u06a9\u0627\u0644\u0627",
        "color": {
          "id": 1,
          "title": "\u0645\u0634\u06a9\u06cc",
          "code": "#212121",
          "hexCode": "#212121",
          "hex_code": "#212121"
        },
        "size": [],
        "site": "digikala",
        "warranty": {
          "id": 272,
          "title": "\u06af\u0627\u0631\u0627\u0646\u062a\u06cc \u0627\u0635\u0627\u0644\u062a \u0648 \u0633\u0644\u0627\u0645\u062a \u0641\u06cc\u0632\u06cc\u06a9\u06cc \u06a9\u0627\u0644\u0627",
          "description": null,
          "phone": null,
          "address": null,
          "working_hours": null,
          "condition": null
        },
        "marketplace_seller": {
          "id": 462743,
          "name": "\u0628\u0644\u0628\u0631\u06cc",
          "rate": 76,
          "rateCount": 166,
          "rating": {
            "cancel_percentage": 100,
            "cancel_summarize": "excellent",
            "return_percentage": 97.6,
            "return_summarize": "very_bad",
            "ship_on_time_percentage": 100,
            "ship_on_time_summarize": "excellent",
            "final_score": 4,
            "final_percentage": 80
          },
          "stars": 4,
          "is_trusted": true,
          "is_official_seller": false,
          "is_roosta": false,
          "url": "\/seller\/crcrk\/",
          "registerTimeAgo": "6 \u0645\u0627\u0647 \u0648 1 \u0647\u0641\u062a\u0647"
        },
        "leadTime": 1,
        "shipping_type": "digikala",
        "gifts": [],
        "gift_product_ids": [],
        "seller_lead_time": 0,
        "market_place_selling_stock": 2,
        "is_fresh": false,
        "scheduled_stock": false,
        "promotion_price_id": null,
        "is_digikala_owner": false,
        "rank": 0.87,
        "sr": 80,
        "has_similar_variants": false,
        "fast_shopping_badge": false,
        "fast_shopping_confirm": false,
        "is_multi_warehouse": false,
        "is_ship_by_seller": false,
        "is_eligible_for_jet_delivery": false,
        "plus_cash_back": null,
        "stats": {
          "totally_satisfied": {"rate_count": 1, "rate": 16.67},
          "satisfied": {"rate_count": 4, "rate": 66.67},
          "neutral": {"rate_count": 1, "rate": 16.67},
          "dissatisfied": {"rate_count": 0, "rate": 0},
          "totally_dissatisfied": {"rate_count": 0, "rate": 0},
          "total_count": 6,
          "total_rate": 80
        },
        "available_on_website": true,
        "provider": "digikala",
        "is_heavy": false,
        "is_electronic": false,
        "sbs_seller_cities": [2094],
        "price_list": {
          "id": 381664943,
          "discount_percent": null,
          "rrp_price": 1350000,
          "selling_price": 1350000,
          "is_incredible_offer": false,
          "is_plus_offer": false,
          "is_sponsored_offer": false,
          "is_locked_for_plus": false,
          "promotion_id": null,
          "timer": null,
          "pre_sell": false,
          "variant_id": 13556543,
          "orderLimit": 2,
          "initial_limit": null,
          "tags": null,
          "cache_key_created_at": "2021-04-22 06:49:57",
          "cache_update_source": "supernova-digikala-bellatrix",
          "discount_amount": 0,
          "discount": 0,
          "show_discount_badge": false,
          "marketable_stock": 2,
          "plus_variant_cash_back": 0
        },
        "addToCartUrl": "\/cart\/add\/13556543\/1\/",
        "addToYaldaCartUrl": "\/ajax\/cart\/move\/save-for-yalda\/13556543\/",
        "dcPoint": 14,
        "is_free_shipment": false,
        "providerData": {
          "description": "\u0645\u0648\u062c\u0648\u062f \u062f\u0631 \u0627\u0646\u0628\u0627\u0631 \u0641\u0631\u0648\u0634\u0646\u062f\u0647",
          "providers": [{
            "title": "\u0627\u0631\u0633\u0627\u0644 \u062a\u0648\u0633\u0637 \u062f\u06cc\u062c\u06cc\u200c\u06a9\u0627\u0644\u0627 \u0627\u0632 1 \u0631\u0648\u0632 \u06a9\u0627\u0631\u06cc \u062f\u06cc\u06af\u0631",
            "description": "\u0627\u06cc\u0646 \u06a9\u0627\u0644\u0627 \u067e\u0633 \u0627\u0632 \u0645\u062f\u062a \u0632\u0645\u0627\u0646 \u0645\u0634\u062e\u0635 \u0634\u062f\u0647 \u062a\u0648\u0633\u0637 \u0641\u0631\u0648\u0634\u0646\u062f\u0647 \u062f\u0631 \u0627\u0646\u0628\u0627\u0631 \u062f\u06cc\u062c\u06cc\u200c\u06a9\u0627\u0644\u0627 \u062a\u0627\u0645\u06cc\u0646 \u0648 \u0622\u0645\u0627\u062f\u0647 \u067e\u0631\u062f\u0627\u0632\u0634 \u0645\u06cc\u200c\u06af\u0631\u062f\u062f \u0648 \u062a\u0648\u0633\u0637 \u067e\u06cc\u06a9 \u062f\u06cc\u062c\u06cc\u200c\u06a9\u0627\u0644\u0627 \u062f\u0631 \u0628\u0627\u0632\u0647 \u0627\u0646\u062a\u062e\u0627\u0628\u06cc \u0627\u0631\u0633\u0627\u0644 \u062e\u0648\u0627\u0647\u062f \u0634\u062f."
          }],
          "hasLeadTime": true,
          "badge_type": "with_lead_time"
        },
        "newProviderData": [{
          "type": "digikala",
          "has_lead_time": true,
          "text": "\u0627\u0631\u0633\u0627\u0644 \u062f\u06cc\u062c\u06cc\u200c\u06a9\u0627\u0644\u0627 \u0627\u0632 1 \u0631\u0648\u0632 \u06a9\u0627\u0631\u06cc \u062f\u06cc\u06af\u0631"
        }],
        "isExistsInWarehouse": false
      },


    };




    var supernova_mode = "production";
    var supernova_tracker_url = "https:\/\/etrackerd.digikala.com\/tracker\/events\/";
    var defaultVariantId = 13556543;
    var maxVisibleVariant = 3;
    var maxVisibleSupplier = 3;
    var hasColorOrSize = true;
    var sellerStatistics = [];
    var hasQuickView = false;
    var cart = {"cartId": 0, "variants": [], "products": [], "itemCount": 0, "isPlusUser": false};
    var productId = 3672884;
    var videos = [];
    var enhanced_ecommerce = {
      "id": 3672884,
      "name": "\u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647 \u0627\u0645 \u067e\u06cc \u0628\u0644\u0628\u0631\u06cc \u0645\u062f\u0644 BLB-131 \u0638\u0631\u0641\u06cc\u062a 5000 \u0645\u06cc\u0644\u06cc \u0622\u0645\u067e\u0631 \u0633\u0627\u0639\u062a",
      "category": "AC",
      "category_id": 1272,
      "brand": "mpblberri",
      "variant": 13556543,
      "price": 1350000,
      "discount_percent": 0,
      "quantity": 1
    };
    var categoryId = 1272;
    var nowTimeInUTC = "2021-04-26 16:26:18";
    var emarsysCategoryBreadcrumb = [];
    var emarsysBrand = "\u0627\u0645 \u067e\u06cc \u0628\u0644\u0628\u0631\u06cc";
    var ecpd2 = {
      "id": 3672884,
      "title": "\u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647 \u0627\u0645 \u067e\u06cc \u0628\u0644\u0628\u0631\u06cc \u0645\u062f\u0644 BLB-131 \u0638\u0631\u0641\u06cc\u062a 5000 \u0645\u06cc\u0644\u06cc \u0622\u0645\u067e\u0631 \u0633\u0627\u0639\u062a",
      "has_gift": false,
      "is_exclusive": false,
      "is_incredible": 0,
      "is_selling_and_sales": 0,
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644", "\u067e\u0627\u0648\u0631\u0628\u0627\u0646\u06a9 (\u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647)"],
      "supply_category": ["AC", "\u067e\u0627\u0648\u0631 \u0628\u0627\u0646\u06a9 (\u0634\u0627\u0631\u0698 \u0647\u0645\u0631\u0627\u0647)"],
      "category": {
        "id": 1272,
        "title": "\u067e\u0627\u0648\u0631\u0628\u0627\u0646\u06a9 (\u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647)"
      },
      "brand": {"id": 19842, "title": "\u0627\u0645 \u067e\u06cc \u0628\u0644\u0628\u0631\u06cc"},
      "price": {"selling_price": 1350000, "discount_percent": 0},
      "status": "marketable",
      "variants": [{"id": 13556543, "seller": 462743, "color": 1, "size": 0, "warranty": 272}, {
        "id": 13556544,
        "seller": 462743,
        "color": 2,
        "size": 0,
        "warranty": 272
      }],
      "image_url": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/9de2cec8cd752041012e64fe2e7b82c65bc9749c_1606237683.jpg?x-oss-process=image\/resize,m_lfit,h_350,w_350\/quality,q_60",
      "product_url": "https:\/\/www.digikala.com\/product\/dkp-3672884"
    };
    var isbn = null;
    var min_price_in_last_month = 0;
    var isPDP = true;
    var faqPageTitle = "pdp_section";
    var isAnanasFriendly = true;
    var userId = null;
    var adroRCActivation = true;
    var loginRegisterUrlWithBack = "\/users\/login-register\/?_back=https:\/\/www.digikala.com\/product\/dkp-3672884\/%25D8%25B4%25D8%25A7%25D8%25B1%25DA%2598%25D8%25B1-%25D9%2587%25D9%2585%25D8%25B1%25D8%25A7%25D9%2587-%25D8%25A7%25D9%2585-%25D9%25BE%25DB%258C-%25D8%25A8%25D9%2584%25D8%25A8%25D8%25B1%25DB%258C-%25D9%2585%25D8%25AF%25D9%2584-blb-131-%25D8%25B8%25D8%25B1%25D9%2581%25DB%258C%25D8%25AA-5000-%25D9%2585%25DB%258C%25D9%2584%25DB%258C-%25D8%25A2%25D9%2585%25D9%25BE%25D8%25B1-%25D8%25B3%25D8%25A7%25D8%25B9%25D8%25AA";
    var isNewCustomer = false;
    var digiclubLuckyDrawEndTime = "2021-06-23 15:30:28";
    var activateUrl = "\/digiclub\/activate\/";
  </script>


  {{--  <script src="https://www.digikala.com/static/merged/9de0886d.js"></script>--}}
  <script src="{{ asset('assets/js/sentry.js') }}"></script>
  <script src="{{ asset('assets/new/js/jwplayer.js') }} "></script>
  <script src="{{ asset('assets/new/js/jwpsrv.js') }} "></script>
  <script src="{{ asset('assets/new/js/jwplayer.core.controls.js') }} "></script>
  <script src="{{ asset('assets/new/js/jwplayer.core.controls.html5.js') }} "></script>
  <script src="{{ asset('assets/new/js/provider.hlsjs.js') }} "></script>
  <script src="{{ asset('assets/new/js/video-js.min.js') }} "></script>
  <script src="{{ asset('assets/new/js/videojs-contrib-quality-levels.min.js') }} "></script>
  <script src="{{ asset('assets/new/js/videojs-hls-quality-selector.min.js') }} "></script>
  <script src="{{ asset('assets/new/js/videojs-hls-quality-selector1.min.js') }} "></script>
  <script src="{{ asset('assets/new/js/url.min.js') }}"></script>
  {{--  <script src="https://www.digikala.com/static/merged/3cf6da08.js"></script>--}}

  <style>
    body {
      background-color: #fff !important;
    }
  </style>

@endsection

@section('content')
  <style>
    @media screen and (-ms-high-contrast: none) {
      .c-shipment-page__to-payment-sticky, .c-checkout__to-shipping-sticky {
        position: relative !important;
      }

      .c-checkout-aside {
        position: relative !important;
      }
    }

    /* all edge versions */
    @supports (-ms-ime-align:auto) {
      .c-shipment-page__to-payment-sticky, .c-checkout__to-shipping-sticky {
        position: relative !important;
      }

      .c-checkout-aside {
        position: relative !important;
      }
    }
  </style>

  <main id="main">
    <div id="HomePageTopBanner"></div>
    <div id="content">
      <div class="o-page js-product-page c-product-page" data-product-id="3672884">
        <div class="container">


          <div class="c-product__nav-container">
            <nav class="js-breadcrumb ">
              <ul vocab="https://schema.org/" typeof="BreadcrumbList" class="c-breadcrumb">
                <li property="itemListElement" typeof="ListItem">
                  <a property="item" typeof="WebPage" href="https://www.digikala.com">
                    <span property="name">{{ $fa_store_name }}</span>
                  </a>
                  <meta property="position" content="1">
                </li>
                @foreach($product_categories as $key => $item)
                  <li property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" href="{{ route('category', ['slug' => $item->slug]) }}">
                      <span property="name">{{ $item->name }}</span>
                    </a>
                    <meta property="position" content="{{ $key+1 }}">
                  </li>
                @endforeach
                <li>
                  <span property="name">{{ $product->title_fa }}</span>
                </li>
              </ul>
            </nav>
            <div class="c-product__ext-links"></div>
          </div>


          <article data-product-id="{{ $product->id }}" class="c-product js-product">
            <section class="c-product__info">
              <div class="c-product__title-container">
                <div>
                  <div class="u-flex u-items-center">
                    <div class="c-product__title-container--brand">
                      <a class="c-product__title-container--brand-link"
                         href="{{ route('category', ['slug' => $product->category->first()->slug]) . '/' . $product->brand->slug }}">{{ $product->brand->name }}</a>
                      <span> / </span>
                      <a class="c-product__title-container--brand-link"
                         href="{{ route('category', ['slug' => $product->category->first()->slug]) . '/' . $product->brand->slug }}">
                        {{  $product->category->first()->name . ' ' .  $product->brand->name }}
                      </a>
                    </div>
                  </div>
                  <h1 class="c-product__title">
                    {{ $product->title_fa }}
                  </h1></div>
              </div>
              <div class="c-product__attributes js-product-attributes u-relative">
                <div id="zoom-box"></div>
                <div class="c-product__config">
                  @if(!is_null($product->title_en))
                    <span class="c-product__title-en">{{ $product->title_en }}</span>
                  @endif
                  <div class="c-product__engagement">
                    <div class="c-product__engagement-item js-scroll-to-tab" data-id="comments"
                         data-gtm-vis-first-on-screen-9070001_346="7756"
                         data-gtm-vis-total-visible-time-9070001_346="100" data-gtm-vis-has-fired-9070001_346="1">
                      <div class="c-product__engagement-link" data-activate-tab="comments">
                        {{ persianNum($product->comments->count()) }}
                        دیدگاه کاربران
                      </div>
                    </div>

                  </div>


                  <div class="c-product__config-wrapper">

                    @if ($product->variants()->exists())
                      <div class="c-product__circle-variants">
                        <div class="c-product__circle-variants__title">
                          <header>رنگ :</header>
                          <span class="js-color-title"></span>
                        </div>
                        <ul class="js-product-variants">
                          @foreach ($product->variants as $item)
                            @if($item->variant()->exists() && !is_null($item->variant->value))
                              <li class="js-c-ui-variant c-circle-variant__item" data-event="config_change" data-event-category="product_page" data-event-label="change: color">
                                <label data-snt-event="dkProductPageClick" data-snt-params="{&quot;item&quot;:&quot;change-color&quot;,&quot;item_option&quot;:&quot;{{ $item->variant->name }}&quot;}"
                                       class="js-circle-variant-color c-circle-variant c-circle-variant--color" data-code="{{ $item->variant->value }}">
                                  <input type="radio" value="{{ $item->variant_code }}" name="color" id="variant" class="js-variant-selector js-color-filter-item"
                                         {{--                                         {{ $item->variant->variant_code }}--}}
                                         {{ ($variant_defualt->id == $item->id)? 'checked' : '' }} data-title="{{ $item->variant->name }}" data-type="color">
                                  <span class="c-circle-variant__border"></span>
                                  <span class="c-tooltip c-tooltip--small-bottom c-tooltip--short">{{ $item->variant->name }}</span>
                                  <span class="c-circle-variant__shape" style="background-color: {{ $item->variant->value }}"></span>
                                </label>
                              </li>
                            @endif
                          @endforeach
                        </ul>
                      </div>
                    @endif

                    {{--                    <div class="c-product__size-wrapper">--}}
                    {{--                      <div class="c-product__size-label">--}}
                    {{--                        اندازه :--}}
                    {{--                      </div>--}}
                    {{--                      <div class="c-product__product-size-wrapper">--}}
                    {{--                        <div class="selectric-wrapper selectric-c-product__size-dropdown selectric-js-size-selector selectric-js-variant-selector">--}}
                    {{--                          <div class="selectric-hide-select">--}}
                    {{--                            <select class="c-product__size-dropdown js-size-selector js-variant-selector " data-type="size" name="size" tabindex="-1">--}}
                    {{--                              <option value="66" selected="">--}}
                    {{--                                L--}}
                    {{--                              </option>--}}
                    {{--                              <option value="67">--}}
                    {{--                                XL--}}
                    {{--                              </option>--}}

                    {{--                            </select>--}}
                    {{--                          </div>--}}
                    {{--                          <div class="selectric">--}}
                    {{--                            <span class="label">--}}
                    {{--                                L--}}
                    {{--                            </span>--}}
                    {{--                            <b class="button">▾</b>--}}
                    {{--                          </div>--}}
                    {{--                          <div class="selectric-items" tabindex="-1">--}}
                    {{--                            <div class="selectric-scroll">--}}
                    {{--                              <ul>--}}
                    {{--                                <li data-index="0" class="selected">--}}
                    {{--                                  L--}}
                    {{--                                </li>--}}
                    {{--                                <li data-index="1" class="last">--}}
                    {{--                                  XL--}}
                    {{--                                </li>--}}
                    {{--                              </ul>--}}
                    {{--                            </div>--}}
                    {{--                          </div>--}}
                    {{--                          <input class="u-hidden" tabindex="0">--}}
                    {{--                        </div>--}}
                    {{--                      </div>--}}
                    {{--                    </div>--}}

                    @if ($product->attributes()->exists())
                      <div class="c-product__params js-is-expandable" data-collapse-count="3">
                        <ul data-title="ویژگی‌های کالا">
                          @foreach ($product->attributes()->where('is_favorite', 1)->get()->unique('name') as $key => $attr)
                            @if($key > 4)
                              @continue
                            @endif
                            <li>
                              <span>{{ $attr->name }}:</span>
                              @if ($attr->type == 1 || $attr->type == 2)
                                <span>{{ $product->attributes->find($attr->id)->pivot->value }}</span>
                              @elseif ($attr->type == 3)
                                <span>
                                     @foreach($attr->values as $value)
                                    {{ ($product->attributes->find($attr->id)->pivot->value_id == $value->id)? $value->value : ''  }}
                                  @endforeach
                                  </span>
                              @elseif ($attr->type == 4)

                                @php $arrays = null; @endphp
                                @foreach($product->attributes as $pAttr)
                                  @if (!is_null($pAttr->pivot->value_id) && ($pAttr->pivot->attribute_id == $attr->id))
                                    <?php $pArray[] = $pAttr->pivot->value_id; ?>
                                  @endif
                                @endforeach

                                <span>
                                      @foreach($attr->values as $key => $value)
                                    {{ in_array($value->id, $pArray) ? $value->value :  '' }} {{ (in_array($value->id, $pArray) && count($attr->values) !== $key+1)? '، ' : '' }}
                                  @endforeach
                                    </span>

                              @elseif ($attr->type == 5)
                                <span>{{ $product->attributes->find($attr->id)->pivot->value . ' ' . (isset($attr->unit)? $attr->unit->name : '')  }}</span>
                              @endif
                            </li>
                          @endforeach

                          @foreach ($product->attributes()->where('is_favorite', 1)->get()->unique('name') as $key => $attr)
                            @if($key < 5)
                              @continue
                            @endif
                            <li class="js-more-attrs c-product__params-more">
                              <span>{{ $attr->name }}:</span>
                              @if ($attr->type == 1 || $attr->type == 2)
                                <span>{{ $product->attributes->find($attr->id)->pivot->value }}</span>
                              @elseif ($attr->type == 3)
                                <span>
                                     @foreach($attr->values as $value)
                                    {{ ($product->attributes->find($attr->id)->pivot->value_id == $value->id)? $value->value : ''  }}
                                  @endforeach
                                  </span>
                              @elseif ($attr->type == 4)

                                @php $arrays = null; @endphp
                                @foreach($product->attributes as $pAttr)
                                  @if (!is_null($pAttr->pivot->value_id) && ($pAttr->pivot->attribute_id == $attr->id))
                                    <?php $pArray[] = $pAttr->pivot->value_id; ?>
                                  @endif
                                @endforeach

                                <span>
                                      @foreach($attr->values as $key => $value)
                                    {{ in_array($value->id, $pArray) ? $value->value :  '' }} {{ (in_array($value->id, $pArray) && count($attr->values) !== $key+1)? '، ' : '' }}
                                  @endforeach
                                    </span>

                              @elseif ($attr->type == 5)
                                <span>{{ $product->attributes->find($attr->id)->pivot->value . ' ' . (isset($attr->unit)? $attr->unit->name : '')  }}</span>
                              @endif
                            </li>
                          @endforeach

                          @if ($product->attributes()->where('is_favorite', 1)->exists() && count($product->attributes()->where('is_favorite', 1)->get()) > 5)
                            <li class="c-product__params-more-handler" data-sign="+">
                              <button data-snt-event="dkProductPageClick"
                                      data-snt-params="{&quot;item&quot;:&quot;more-attributes&quot;,&quot;item_option&quot;:null}"
                                      class="btn-link-spoiler js-more-attr-button c-product__show-more-btn">موارد بیشتر
                              </button>
                            </li>
                          @endif
                        </ul>
                      </div>
                    @endif




                  </div>
                </div>


                <div class="c-product__summary js-product-summary" style="opacity: 1;">
                  <div class="c-box" style="margin-bottom: 20px;">
                    <div class="c-product__seller-info js-seller-info">
                      <div class="js-seller-info-changable c-product__seller-box">
                        <div class="c-product__seller-row c-product__seller-row--seller js-seller-variant">
                          <i class="c-product__seller-row--trusted-seller js-mini-not-digikala-seller js-mini-is-trusted u-hidden"></i>
                          <i class="c-product__seller-row--official-seller js-mini-not-digikala-seller js-mini-is-official u-hidden"></i>
                          <div class="c-product__seller-row-main  ">
                            <div class="c-product__seller-first-line">
                              <span class="c-product__seller-name js-seller-name">{{ $fa_store_name }}</span>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-info-box js-seller-info-expand">
                          <div class="c-product-info-box__header">
                            <div class="c-product-info-box__header-back-btn js-product-info-box-back-btn"></div>
                            <div><label>اطلاعات تکمیلی فروشنده</label><span
                                class="c-product-info-box__seller-info-modal js-seller-rate-info-modal"></span></div>
                          </div>
                          <div class="c-product-info-box__body-wrapper">
                            <div class="c-product-info-box__body">
                              <div class="u-p-16 c-product-info-box__seller-detail-box">
                                <div class="c-seller-rating js-buyBox-seller-info">
                                  <div class="c-seller-rating__title c-seller-rating__title--inBuyBox">
                                    <div class="js-sellerName">{{ $fa_store_name }}</div>
                                  </div>
                                  <div class="c-seller-rating__text">
                                    <div class="c-seller-rating__thin-text">عملکرد:</div>
                                    <div class="c-seller-rating__bold-text js-finalScore">۵</div>
                                  </div>
                                  <div
                                    class="c-seller-rating__ratings js-round-progress-holder c-seller-rating__ratings--buy-box">
                                    <div class="c-round-progress__container">
                                      <div class="c-round-progress js-round-progress js-shipOnTimePer green"
                                           data-value="100" data-level-1="98" data-level-2="96">
                                        <div
                                          class="c-round-progress__half c-round-progress__half--left js-round-progress-left"
                                          style="transform: unset;"></div>
                                        <div
                                          class="c-round-progress__half c-round-progress__half--right js-round-progress-right"
                                          style="transform: rotate(0deg);"></div>
                                        <div class="c-round-progress__value js-round-progress-text">۱۰۰٪</div>
                                      </div>
                                      <div class="c-round-progress__label">تامین به موقع</div>
                                    </div>
                                    <div class="c-round-progress__container">
                                      <div class="c-round-progress js-round-progress js-cancelPer green"
                                           data-value="99.8" data-level-1="98" data-level-2="96">
                                        <div
                                          class="c-round-progress__half c-round-progress__half--left js-round-progress-left"
                                          style="transform: unset;"></div>
                                        <div
                                          class="c-round-progress__half c-round-progress__half--right js-round-progress-right"
                                          style="transform: rotate(0.72deg);"></div>
                                        <div class="c-round-progress__value js-round-progress-text">۹۹.۸٪</div>
                                      </div>
                                      <div class="c-round-progress__label">تعهد ارسال</div>
                                    </div>
                                    <div class="c-round-progress__container">
                                      <div class="c-round-progress js-round-progress js-returnPer green"
                                           data-value="99.9" data-level-1="98" data-level-2="96">
                                        <div
                                          class="c-round-progress__half c-round-progress__half--left js-round-progress-left"
                                          style="transform: unset;"></div>
                                        <div
                                          class="c-round-progress__half c-round-progress__half--right js-round-progress-right"
                                          style="transform: rotate(0.36deg);"></div>
                                        <div class="c-round-progress__value js-round-progress-text">۹۹.۹٪</div>
                                      </div>
                                      <div class="c-round-progress__label">بدون ثبت مرجوعی</div>
                                    </div>
                                  </div>
                                  <div class="c-seller-rating__bottom u-hidden js-rateStats-holder">
                                    <div class="c-seller-rating__text">
                                      <div class="c-seller-rating__bold-text"><label class="js-total-rate"></label>٪
                                      </div>
                                      <div class="c-seller-rating__thin-text">رضایت از کالا</div>
                                    </div>
                                    <div class="c-seller-rating__subtitle c-seller-rating__subtitle--center">از
                                      مجموع<label class="u-mx-4 js-total-count"></label>نفر
                                    </div>
                                    <div class="c-seller-rating__row-rating">
                                      <div class="c-line-graph__container">
                                        <div class="c-line-graph js-line-graph-holder"></div>
                                        <div class="c-line-graph__labels">
                                          <div class="c-line-graph__label js-line-graph-right-label"></div>
                                          <div class="c-line-graph__label js-line-graph-left-label"></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="c-product__seller-row c-product__seller-row--guarantee c-product__seller-row--clickable js-seller-info-guarantee"
                          style="pointer-events: none;">
                          <div class="c-product__seller-row-main js-guarantee-text">گارانتی ۱۸ ماهه همراه گستر نقره
                            فام
                          </div>
                          <div class="c-product__seller-extra js-guarantee-extra-toggle u-hidden"></div>
                        </div>
                        <div class="c-product-info-box js-guarantee-info-expand">
                          <div class="c-product-info-box__header">
                            <div class="c-product-info-box__header-back-btn js-product-info-box-back-btn"></div>
                            جزئیات گارانتی
                          </div>
                          <div class="c-product-info-box__body-wrapper">
                            <div class="c-product-info-box__body">
                              <div class="c-guarantee-info-box__row">
                                <div class="u-text-bold m-b-md js-guarantee-text">گارانتی ۱۸ ماهه همراه گستر نقره فام
                                </div>
                                <div class="u-text-spaced js-guarantee-description"></div>
                              </div>
                            </div>
                          </div>
                        </div>






                        <div class="c-product__seller-row c-product__seller-row--column js-seller-info-shipment c-product__seller-row--clickable"><div class="c-product__seller-row-main c-product__seller-row-main--arrow-left"><span class="c-product__delivery-warehouse js-provider-main-title c-product__delivery-warehouse--no-lead-time">موجود در انبار {{ $fa_store_name }}</span></div><ul class="c-line-bullet-list c-product__sender-list js-provider-list"><li class=""><span class="c-line-bullet-list__item  c-line-bullet-list__item--digikala no-lead-time">ارسال {{ $fa_store_name }}</span><span class="js-ab-shipment-free-badge u-hidden free-badge">رایگان</span></li></ul></div>




                        <div class="c-product-info-box js-shipment-info-expand">
                          <div class="c-product-info-box__header">
                            <div class="c-product-info-box__header-back-btn js-product-info-box-back-btn"></div>
                            جزئیات ارسال
                          </div>
                          <div class="c-product-info-box__body-wrapper">
                            <div class="c-product-info-box__body">
                              <div class="c-shipment-info-box__row js-shipment-info-main-container">
                                <div class="c-shipment-info-box__row--title">
                                  ارسال توسط {{ $fa_store_name }}
                                  <span class="js-ab-shipment-free-badge u-hidden">رایگان</span></div>
                                <div class="c-shipment-info-box__row--content">
                                  این کالا در انبار {{ $fa_store_name }} موجود و آماده پردازش است و امکان ارسال مستقیم توسط {{ $fa_store_name }}
                                  را دارد.
                                  <p class="free-badge js-ab-shipment-free-badge u-hidden">کالا‌هایی با قیمت بیش از ۳۰۰
                                    هزار تومان به صورت رایگان ارسال خواهند شد.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="c-product__seller-row c-product__seller-row--gift c-product__seller-row--clickable js-seller-info-gift u-hidden"
                          style="pointer-events: none;">
                          <div class="c-product__seller-row-main js-gift-text js-single-gift "></div>
                          <div class="c-product__seller-row-main js-gift-text js-multi-gift u-hidden"><span
                              class="js-gift-count">۰</span>
                            هدیه
                          </div>
                          <div class="c-product__seller-extra js-gift-extra-toggle "></div>
                        </div>
                        <div class="c-product-info-box js-gift-info-expand">
                          <div class="c-product-info-box__header">
                            <div class="c-product-info-box__header-back-btn js-product-info-box-back-btn"></div>
                            لیست هدیه‌ها
                          </div>
                          <div class="c-product-info-box__body-wrapper">
                            <div class="c-product-info-box__body">
                              <div>
                                <div class="c-product__gift-title">
                                  لیست هدیه ها
                                </div>
                                <div class="c-product__gift-content js-gift-items"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{--                        <div class="c-product__seller-row c-product__seller-row--best-price-row js-data-best-price">--}}
                        {{--                          بهترین قیمت ۳۰ روز گذشته--}}
                        {{--                        </div>--}}
                        <div class="c-product__seller-row c-product__seller-row--price">
                          <div class="c-product__seller-price-info">
                            <div class="c-product__seller-price-label">
                              قیمت محصول
                              <span class="js-dk-wiki-trigger c-wiki c-wiki__holder">
                                <span class="c-wiki-sign"></span>
                                <div class="c-wiki__container js-dk-wiki is-right">
                                  <div class="c-wiki__arrow"></div>
                                  <p class="c-wiki__text">
                                        این کالا توسط فروشنده آن، {{ $fa_store_name }}، قیمت‌گذاری شده‌ است.
                                    </p>
                                </div>
                              </span>
                            </div>
                            <div class="c-product__seller-price-prev js-rrp-price u-hidden">

                            </div>
                            <div class="c-product__seller-price-off js-discount-value u-hidden">
                              ۰٪
                            </div>
                          </div>
                          <div class="c-product__seller-price-real">
                            <div class="c-product__seller-price-pure js-price-value">۴۹,۵۹۰,۰۰۰</div>
                            تومان
                          </div>
                          <div
                            class="c-product__additional-item c-product__additional-item--no-icon js-price-discount-osm u-hidden">
                            <span class="js-discount-osm-value"></span>&nbsp; تومان
                            تخفیف سازمانی کسر گردیده است.
                          </div>
                        </div>
                      </div>
                      <div class="c-product__seller-row c-product__seller-row--add-to-cart"><a
                          class="js-ab-product-action btn-add-to-cart btn-add-to-cart--full-width js-add-to-cart js-cart-page-add-to-cart js-btn-add-to-cart"
                          data-product-id="3555626" data-variant="{{ $variant_defualt->variant_code }}" href="/cart/add/{{ $variant_defualt->variant_code }}/1/"
                          data-event="add_to_cart" data-event-category="ecommerce"
                          data-event-label="price: 495900000 - seller: marketplace - seller_name: {{ $fa_store_name }} - seller_rating: 81 - multiple_configs: True - position: 0"><span
                            class="btn-add-to-cart__txt">افزودن به سبد خرید</span></a></div>
                    </div>
                    <a href="">
                      <div
                        class="c-product-shipping-limitation c-product-shipping-limitation__mt-8 js-btn-supplier-list js-btn-cheapest-price u-hidden">
                        <div class="c-product-shipping-limitation__title c-product-shipping-limitation__title--info">
                          این کالا را ارزان‌تر بخرید
                        </div>
                        <div class="c-product-shipping-limitation__dsc">
                          از
                          <span class="js-cheapest-price">۵۰,۴۹۰,۰۰۰ </span> تومان
                          توسط فروشندگان دیگر
                        </div>
                      </div>
                    </a>
                  </div>
                </div>


              </div>
              <div class="c-product__usp">
                <aside class="c-product__feature">
                  <div class="o-grid">
                    <div class="row">
                    </div>
                  </div>
                </aside>
              </div>
            </section>

            <section class="c-product__gallery">
              <div style="" class="c-product__headline--gallery u-hidden">
                فروش ویژه
              </div>
              <div class="c-product-gallery__offer js-amazing-offer u-hidden">
                <img class="c-product-gallery__offer-img" src="https://www.digikala.com/static/files/6fbe3569.svg">
                <div class="c-product-gallery__timer js-counter"></div>
              </div>

              <div class="c-gallery ">

                <div class="c-gallery__item">
                  <ul class="c-gallery__options">
                    <li>
                      <button data-snt-event="dkProductPageClick"
                              data-snt-params="{&quot;item&quot;:&quot;gallery-option&quot;,&quot;item_option&quot;:&quot;add-to-favorites&quot;}"
                              id="add-to-favorite-button" class="btn-option btn-option--wishes" data-token=""></button>
                      <span class="c-tooltip c-tooltip--left c-tooltip--short">افزودن به علاقه‌مندی</span></li>
                    <li>
                      <button data-snt-event="dkProductPageClick"
                              data-snt-params="{&quot;item&quot;:&quot;gallery-option&quot;,&quot;item_option&quot;:&quot;share&quot;}"
                              class="btn-option btn-option--social js-btn-option--social" data-event="share"
                              data-event-category="engagement"></button>
                      <span class="c-tooltip c-tooltip--left c-tooltip--short">اشتراک گذاری</span></li>
                    <li>
                      <button data-snt-event="dkProductPageClick"
                              data-snt-params="{&quot;item&quot;:&quot;gallery-option&quot;,&quot;item_option&quot;:&quot;alarm&quot;}"
                              class="btn-option btn-option--alarm js-add-to-incredible-notify-button"></button>
                      <span class="c-tooltip c-tooltip--left c-tooltip--short">
                              اطلاع‌رسانی شگفت‌انگیز
                      </span></li>
                    <li>
                      <button class="btn-option btn-option--stats" id="price-chart-button"
                              data-snt-event="dkProductPageClick"
                              data-snt-params="{&quot;item&quot;:&quot;gallery-option&quot;,&quot;item_option&quot;:&quot;price-chart&quot;}"
                              data-event="price_chart" data-event-category="product_page"
                              data-event-label="category: گوشی موبایل, available:True"></button>
                      <span class="c-tooltip c-tooltip--left c-tooltip--short">نمودار قیمت</span></li>
                    <li><a data-snt-event="dkProductPageClick"
                           data-snt-params="{&quot;item&quot;:&quot;gallery-option&quot;,&quot;item_option&quot;:&quot;compare&quot;}"
                           href="/compare/dkp-{{ $product->id }}/" class="btn-option btn-option--compare"></a><span
                        class="c-tooltip c-tooltip--left c-tooltip--short">مقایسه</span></li>
                  </ul>
                  <div class="c-gallery__img">
                    @foreach($product->media as $image)
                      @if($product->media && ($image->pivot->is_main == 1))
                        <img class="js-gallery-img"
                             data-src="{{ $site_url . '/' .$image->path . '/' . $image->name }}?x-oss-process=image/resize,m_lfit,h_600,w_600/quality,q_80"
                             title="{{ $product->title_fa }}" alt="{{ $product->title_fa }}"
                             data-zoom-image="{{ $site_url . '/' .$image->path . '/' . $image->name }}?x-oss-process=image/resize,w_1280/quality,q_80"
                             src="{{ $site_url . '/' .$image->path . '/' . $image->name }}?x-oss-process=image/resize,m_lfit,h_600,w_600/quality,q_80"
                             loading="lazy">
                      @endif
                    @endforeach
                    <div class="c-gallery__main-img-badges-container"></div>
                  </div>
                </div>

                <ul class="c-gallery__items">
                  @if($product->media()->exists())
                    @foreach($product->media as $key => $image)
                      <li class="js-product-thumb-img" data-slide-index="{{ $key+1 }}" data-event="album_usage"
                          data-event-category="product_page" data-event-label="3555626-num of pics:14">
                        <div class="thumb-wrapper">
                          <img
                            data-src="{{ $site_url . '/' .$image->path . '/' . $image->name }}?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                            title="" data-snt-event="dkProductPageClick"
                            data-snt-params="{&quot;item&quot;:&quot;gallery-option&quot;,&quot;item_option&quot;:&quot;thumbnail-image&quot;}"
                            alt="{{ $product->title_fa }} thumb 1 {{ $key+1 }}" data-type=""
                            src="{{ $site_url . '/' .$image->path . '/' . $image->name }}?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                            loading="lazy">
                          <div class="c-gallery__images-count">
                          <span class="c-gallery__count-circle">
                            <div class="c-gallery__three-bullets"></div>
                          </span>
                          </div>
                        </div>
                      </li>
                    @endforeach
                  @endif
                </ul>

              </div>


            </section>
          </article>


          <div class="js-c-box-suppliers c-box-suppliers" id="suppliers" xmlns="http://www.w3.org/1999/html">
            <div class="c-box-suppliers__headline-container">
              <div class="o-box__header"><span class="o-box__title">لیست فروشندگان این کالا</span></div>
              <div class="o-headline__sort u-hidden"><label>فیلتر فروشندگان بر اساس : </label><select
                  class="c-ui-select js-ui-select js-color-select" data-type="color">
                  <option value="1">رنگ : مشکی</option>
                  <option value="2">رنگ : سفید</option>
                </select></div>
            </div>
            <div class="c-box">
              <div class="c-table-suppliers js-c-table-suppliers--summary">
                <div class="c-table-suppliers__body">
                  <div class="c-table-suppliers__row js-supplier in-filter
                        c-table-suppliers__row--active

                        "
                       data-variant="13556543">
                    <div class="c-table-suppliers__cell c-table-suppliers__cell--title"><span
                        class="c-table-suppliers__seller-icon is-trusted  "></span>
                      <div class="c-table-suppliers__seller-wrapper"><p
                          class="c-table-suppliers__seller-name"><a
                            data-snt-event="dkProductPageClick"
                            data-snt-params='{"item":"seller-in-list","item_option":"بلبری"}'
                            href="https://www.digikala.com/seller/crcrk/">
                            بلبری
                          </a><span class="c-badge-seller c-badge-seller--prominent">برگزیده</span>
                        <div class="c-table-suppliers__rating">
                          عملکرد:
                          <span class="u-text-bold">
                            ۴
                        </span>
                          از ۵
                          <span class="u-divider"></span><span class="u-text-bold">
                            ۸۰٪
                        </span>
                          رضایت از کالا
                        </div>
                        </p></div>
                      <div class="c-table-suppliers__seller-info summary-overlay">
                        <div class="c-seller-rating ">
                          <div class="c-seller-rating__title ">
                            بلبری
                          </div>
                          <div class="c-seller-rating__subtitle js-seller-register-time ">عضویت از
                            <label class="u-mx-4 js-sellerTimeAgo">۶ ماه و ۱ هفته</label> پیش
                          </div>
                          <div class="c-seller-rating__text">
                            <div class="c-seller-rating__thin-text">عملکرد:</div>
                            <div class="c-seller-rating__bold-text js-finalScore">۴</div>
                          </div>
                          <div class="c-seller-rating__ratings ">
                            <div class="c-round-progress__container">
                              <div class="c-round-progress js-round-progress  green"
                                   data-level-1="98"
                                   data-level-2="96"
                                   data-value="100">
                                <div class="c-round-progress__half c-round-progress__half--left js-round-progress-left"></div>
                                <div class="c-round-progress__half c-round-progress__half--right js-round-progress-right"></div>
                                <div class="c-round-progress__value js-round-progress-text">
                                  ۱۰۰٪
                                </div>
                              </div>
                              <div class="c-round-progress__label">تامین به موقع</div>
                            </div>
                            <div class="c-round-progress__container">
                              <div class="c-round-progress js-round-progress  green"
                                   data-level-1="98"
                                   data-level-2="96"
                                   data-value="100">
                                <div class="c-round-progress__half c-round-progress__half--left js-round-progress-left"></div>
                                <div class="c-round-progress__half c-round-progress__half--right js-round-progress-right"></div>
                                <div class="c-round-progress__value js-round-progress-text">
                                  ۱۰۰٪
                                </div>
                              </div>
                              <div class="c-round-progress__label">تعهد ارسال</div>
                            </div>
                            <div class="c-round-progress__container">
                              <div class="c-round-progress js-round-progress  yellow"
                                   data-level-1="98"
                                   data-level-2="96"
                                   data-value="97.6">
                                <div class="c-round-progress__half c-round-progress__half--left js-round-progress-left"></div>
                                <div class="c-round-progress__half c-round-progress__half--right js-round-progress-right"></div>
                                <div class="c-round-progress__value js-round-progress-text">
                                  ۹۷.۶٪
                                </div>
                              </div>
                              <div class="c-round-progress__label">بدون ثبت مرجوعی</div>
                            </div>
                          </div>
                          <div class="c-seller-rating__bottom  ">
                            <div class="c-seller-rating__text">
                              <div class="c-seller-rating__bold-text"><label
                                  class="js-total-rate">۸۰</label>٪
                              </div>
                              <div class="c-seller-rating__thin-text">رضایت از کالا</div>
                            </div>
                            <div class="c-seller-rating__subtitle c-seller-rating__subtitle--center">
                              از مجموع<label class="u-mx-4 js-total-count">۶</label>نفر
                            </div>
                            <div class="c-seller-rating__row-rating">
                              <div class="c-line-graph__container">
                                <div class="c-line-graph ">
                                  <div class="c-line-graph__item c-line-graph__item--5"
                                       style="width: 17%"></div>
                                  <div class="c-line-graph__item c-line-graph__item--4"
                                       style="width: 67%"></div>
                                  <div class="c-line-graph__item c-line-graph__item--3"
                                       style="width: 17%"></div>
                                </div>
                                <div class="c-line-graph__labels">
                                  <div class="c-line-graph__label js-line-graph-right-label">
                                    کاملا راضی
                                  </div>
                                  <div class="c-line-graph__label js-line-graph-left-label">
                                    بدون نظر
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="c-table-suppliers__cell c-table-suppliers__cell--conditions">
                      <div class="c-table-suppliers__sender c-table-suppliers__sender--digikala ">
                        ارسال دیجی‌کالا از ۱ روز کاری دیگر
                      </div>
                    </div>
                    <div class="c-table-suppliers__cell c-table-suppliers__cell--guarantee"><span>گارانتی اصالت و سلامت فیزیکی کالا</span>
                    </div>
                    <div class="c-table-suppliers__cell c-table-suppliers__cell--price ">
                      <div class="c-price">
                        <div class="c-price__value">
                          ۱۳۵,۰۰۰
                        </div>
                      </div>
                    </div>
                    <div class="c-table-suppliers__cell c-table-suppliers__cell--action"><a
                        class=" o-btn o-btn--outlined-red-md js-variant-add-to-cart js-btn-add-to-cart"
                        data-event="add_to_cart" data-event-category="ecommerce"
                        data-event-label="items: price: 1350000 - seller: marketplace - multiple_configs: True - position: 0"
                        data-snt-event="dkProductPageClick"
                        data-snt-params='{"item":"seller-add-to-cart","item_option":null}' data-variant="13556543"
                        href="https://www.digikala.com/cart/add/13556543/1/">
                        افزودن به سبد
                      </a></div>
                  </div>
                  <div class="c-table-suppliers__row js-supplier in-filter


                        "
                       data-variant="13556544">
                    <div class="c-table-suppliers__cell c-table-suppliers__cell--title"><span
                        class="c-table-suppliers__seller-icon is-trusted  "></span>
                      <div class="c-table-suppliers__seller-wrapper"><p
                          class="c-table-suppliers__seller-name"><a
                            data-snt-event="dkProductPageClick"
                            data-snt-params='{"item":"seller-in-list","item_option":"بلبری"}'
                            href="https://www.digikala.com/seller/crcrk/">
                            بلبری
                          </a><span class="c-badge-seller c-badge-seller--prominent">برگزیده</span>
                        <div class="c-table-suppliers__rating">
                          عملکرد:
                          <span class="u-text-bold">
                            ۴
                        </span>
                          از ۵
                          <span class="u-divider"></span><span class="u-text-bold">
                            ۸۰٪
                        </span>
                          رضایت از کالا
                        </div>
                        </p></div>
                      <div class="c-table-suppliers__seller-info summary-overlay">
                        <div class="c-seller-rating ">
                          <div class="c-seller-rating__title ">
                            بلبری
                          </div>
                          <div class="c-seller-rating__subtitle js-seller-register-time ">عضویت از
                            <label class="u-mx-4 js-sellerTimeAgo">۶ ماه و ۱ هفته</label> پیش
                          </div>
                          <div class="c-seller-rating__text">
                            <div class="c-seller-rating__thin-text">عملکرد:</div>
                            <div class="c-seller-rating__bold-text js-finalScore">۴</div>
                          </div>
                          <div class="c-seller-rating__ratings ">
                            <div class="c-round-progress__container">
                              <div class="c-round-progress js-round-progress  green"
                                   data-level-1="98"
                                   data-level-2="96"
                                   data-value="100">
                                <div class="c-round-progress__half c-round-progress__half--left js-round-progress-left"></div>
                                <div class="c-round-progress__half c-round-progress__half--right js-round-progress-right"></div>
                                <div class="c-round-progress__value js-round-progress-text">
                                  ۱۰۰٪
                                </div>
                              </div>
                              <div class="c-round-progress__label">تامین به موقع</div>
                            </div>
                            <div class="c-round-progress__container">
                              <div class="c-round-progress js-round-progress  green"
                                   data-level-1="98"
                                   data-level-2="96"
                                   data-value="100">
                                <div class="c-round-progress__half c-round-progress__half--left js-round-progress-left"></div>
                                <div class="c-round-progress__half c-round-progress__half--right js-round-progress-right"></div>
                                <div class="c-round-progress__value js-round-progress-text">
                                  ۱۰۰٪
                                </div>
                              </div>
                              <div class="c-round-progress__label">تعهد ارسال</div>
                            </div>
                            <div class="c-round-progress__container">
                              <div class="c-round-progress js-round-progress  yellow"
                                   data-level-1="98"
                                   data-level-2="96"
                                   data-value="97.6">
                                <div class="c-round-progress__half c-round-progress__half--left js-round-progress-left"></div>
                                <div class="c-round-progress__half c-round-progress__half--right js-round-progress-right"></div>
                                <div class="c-round-progress__value js-round-progress-text">
                                  ۹۷.۶٪
                                </div>
                              </div>
                              <div class="c-round-progress__label">بدون ثبت مرجوعی</div>
                            </div>
                          </div>
                          <div class="c-seller-rating__bottom  ">
                            <div class="c-seller-rating__text">
                              <div class="c-seller-rating__bold-text"><label
                                  class="js-total-rate">۸۰</label>٪
                              </div>
                              <div class="c-seller-rating__thin-text">رضایت از کالا</div>
                            </div>
                            <div class="c-seller-rating__subtitle c-seller-rating__subtitle--center">
                              از مجموع<label class="u-mx-4 js-total-count">۴</label>نفر
                            </div>
                            <div class="c-seller-rating__row-rating">
                              <div class="c-line-graph__container">
                                <div class="c-line-graph ">
                                  <div class="c-line-graph__item c-line-graph__item--5"
                                       style="width: 50%"></div>
                                  <div class="c-line-graph__item c-line-graph__item--4"
                                       style="width: 25%"></div>
                                  <div class="c-line-graph__item c-line-graph__item--2"
                                       style="width: 25%"></div>
                                </div>
                                <div class="c-line-graph__labels">
                                  <div class="c-line-graph__label js-line-graph-right-label">
                                    کاملا راضی
                                  </div>
                                  <div class="c-line-graph__label js-line-graph-left-label">
                                    ناراضی
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="c-table-suppliers__cell c-table-suppliers__cell--conditions">
                      <div class="c-table-suppliers__sender c-table-suppliers__sender--digikala ">
                        ارسال دیجی‌کالا از ۱ روز کاری دیگر
                      </div>
                    </div>
                    <div class="c-table-suppliers__cell c-table-suppliers__cell--guarantee"><span>گارانتی اصالت و سلامت فیزیکی کالا</span>
                    </div>
                    <div class="c-table-suppliers__cell c-table-suppliers__cell--price ">
                      <div class="c-price">
                        <div class="c-price__value">
                          ۱۳۵,۰۰۰
                        </div>
                      </div>
                    </div>
                    <div class="c-table-suppliers__cell c-table-suppliers__cell--action"><a
                        class=" o-btn o-btn--outlined-red-md js-variant-add-to-cart js-btn-add-to-cart"
                        data-event="add_to_cart" data-event-category="ecommerce"
                        data-event-label="items: price: 1350000 - seller: marketplace - multiple_configs: True - position: 0"
                        data-snt-event="dkProductPageClick"
                        data-snt-params='{"item":"seller-add-to-cart","item_option":null}' data-variant="13556543"
                        href="https://www.digikala.com/cart/add/13556544/1/">
                        افزودن به سبد
                      </a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          @if($product->category()->first()->count >= 4)
            <?php
            $slider_category = $product->category()->first();
            ?>
            <div class="c-carousel c-carousel--horizontal-general ">
              <div class="c-carousel__header">
                <div class="c-title ">
                  <div class="c-title__content-right c-title__content-right--has-underline">
                    <div class="c-title__title-container">
                      <h4 class="c-title__title">محصولات مرتبط</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="c-carousel__content">
                <div class="swiper-container swiper-container-horizontal c-carousel__container js-swiper-products swiper-container-rtl">
                  <div class="swiper-wrapper">
                    @foreach ($slider_category->products as $key => $item)
                      <div class="swiper-slide c-carousel__slide {{ ($key == 0)? 'swiper-slide-active' : '' }} {{ ($key == 1)? 'swiper-slide-next' : '' }}" data-id="{{ $item->product_code }}" data-position="{{ $key+1 }}" style="width: 316px;">
                        <li>
                          <a href="{{ route('front.productPage', $product->product_code) }}"
                             data-id="{{ $item->product_code }}" class="c-product-box__box-link js-product-url js-carousel-ga-product-box">
                          </a>
                          <div class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge " title="{{ $item->title_fa }}">
                            <div class="c-product-box__img js-url js-snt-carousel_product" title="{{ $item->title_fa }}">
                            <span class="u-hidden c-product-box__title-special js-ab-app-incredible-product">
                            شگفت‌انگیز اخـتـصـاصـی اپـلیـکیـشـن
                            </span>
                              @foreach($product->media as $image)
                                @if($product->media && ($image->pivot->is_main == 1))
                                  <img alt="{{ $item->title_fa }}" src="{{ $site_url . '/' .$image->path . '/' . $image->name }}?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60" class=" js-ab-not-app-incredible-product swiper-lazy swiper-lazy-loaded" loading="lazy">
                                @endif
                              @endforeach
                            </div>
                            <div class="u-hidden c-product-box__title c-product-box__title--app-incredible js-ab-app-incredible-product">
                            <span class="c-product-box__title-special-sub">
                                مشاهده و خرید این کالا تنها با اپلیکیشن {{ $fa_store_name }} امکان‌پذیر می‌باشد
                            </span>
                            </div>
                            <div class="c-product-box__title  js-ab-not-app-incredible-product">
                              {{ $item->title_fa }}
                            </div>
                            <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible">
                            <span class="c-product-box__digiplus-data c-digiplus-sign--before">
                                ۰ تومان هدیه نقدی
                            </span>
                            </div>
                            <div class="c-product-box__row c-product-box__row--price">
                              <div class="c-price">
                                <div class="c-price__value c-price__value--plp js-price-complete-details">
                                  <div class="c-price__value-wrapper">
                                    {{ persianNum(number_format(product_price($item))) }} <span class="c-price__currency">تومان</span></div>
                                </div>
                              </div>
                            </div>
                            <div class="c-product-box__amazing">
                              <div class="c-product-box__remained"></div>
                            </div>
                          </div>
                        </li>
                      </div>
                    @endforeach
                  </div>
                  <div class="swiper-button-prev js-swiper-button-prev swiper-button-disabled"></div>
                  <div class="swiper-button-next js-swiper-button-next"></div>
                </div>
              </div>
            </div>
          @endif



          <div class="c-product__bottom-section u-mt-12 has-mini-buybox">
            <div class="o-box o-box--no-border o-box--grow c-product__tabs-container" id="tabs">
              <ul class="o-box__tabs o-box__tabs--sticky js-c-box-tabs">
                <li class="js-product-params-tab o-box__tab js-product-tab " data-fetchFromService=""
                    data-method="params" data-product-id="3672884" id="tab-params"
                >
                  <a data-snt-event="dkProductPageClick"
                     data-snt-params='{"item":"product-tab","item_option":"1-مشخصات"}'
                     data-tab-name="params"
                     href="">مشخصات</a></li>
                <li class="js-product-comments-tab o-box__tab js-product-tab " data-fetchFromService="1"
                    data-items-count="17" data-method="comments" data-product-id="3672884"
                    id="tab-comments"
                >
                  <a data-snt-event="dkProductPageClick"
                     data-snt-params='{"item":"product-tab","item_option":"2-دیدگاه کاربران"}'
                     data-tab-name="comments"
                     href="">دیدگاه کاربران</a></li>
              </ul>
              <div>
                <div class="c-carousel c-carousel--horizontal-general u-hidden u-mt-16"
                     id="recommendation-pdp-top-rate">
                  <div class="recommendation-swiper__mask js-swiper-mask-recommendation-pdp-top-rate u-hidden">
                    <p>این پیشنهاد به شما نشان داده نخواهد شد با تشکر از باز‌خورد شما</p>
                    <button class="js-cancel-swiper-mask" data-id="recommendation-pdp-top-rate"><i></i>
                      بازگرداندن
                    </button>
                  </div>
                  <div class="c-carousel__header">
                    <div class="c-title ">
                      <div class="c-title__content-right c-title__content-right--has-underline
                                           c-title__content-right--has-ad-underline ">
                        <div class="c-title__title-container">
                          <h4 class="c-title__title">عنوان تست</h4>
                        </div>
                        <span class="c-title__description">آگهی شده</span></div>
                    </div>
                    <div class="c-adplacement__badge ad-badge">
                      <div class="c-adplacement__badge-container ">
                        <div class="c-adplacement__badge-container--img">
                          <img src="../../static/files/52672319.svg">
                          <span class="c-adplacement__badge-container--txt">Ad</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="c-carousel__content">
                    <div class="swiper-container swiper-container-horizontal c-carousel__container">
                      <div class="swiper-wrapper js-products-container"></div>
                      <div class="swiper-button-prev js-swiper-button-prev"></div>
                      <div class="swiper-button-next js-swiper-button-next"></div>
                    </div>
                  </div>
                </div>

                <div class="c-params js-product-tab-content" data-method="params" id="params" style="display: none;">
                  <article class="c-params__border-bottom">
                    <div class="o-box__header">
                      <span class="o-box__title">مشخصات کالا</span>
                      <span class="o-box__header-desc">{{ $product->title_en }}</span>
                    </div>
                    <section>
                      <h3 class="c-params__title">مشخصات</h3>
                      <ul class="c-params__list">
                        <li style="display: none;">
                          <div class="c-params__list-key">
                            <span class="block">ابعاد</span>
                          </div>
                          <div class="c-params__list-value">
                              <span class="block">
                                  55x10x120 میلی‌متر
                              </span>
                          </div>
                        </li>
                        <li style="display: none;">
                          <div class="c-params__list-key">
                            <span class="block">ابعاد</span>
                          </div>
                          <div class="c-params__list-value">
                              <span class="block">
                                  55x10x120 میلی‌متر
                              </span>
                          </div>
                        </li>
                        <li style="display: none;">
                          <div class="c-params__list-key">
                            <span class="block">ابعاد</span>
                          </div>
                          <div class="c-params__list-value">
                              <span class="block">
                                  55x10x120 میلی‌متر
                              </span>
                          </div>
                        </li>
                      </ul>
                    </section>
                  </article>
                </div>

                <div class="c-comments js-product-tab-content" data-fetch-from-service="1" data-method="comments"
                     id="comments">
                  <div class="o-box__header"><span class="o-box__title">امتیاز و دیدگاه کاربران</span>
                  </div>
                  <div class="js-content"></div>
                  <div class="c-content-expert__separator"></div>
                </div>
              </div>
            </div>

            <div class="c-mini-buy-box-fixed">
              <div class="c-mini-buy-box js-mini-buy-box">
                <div style="" class="c-mini-buy-box__amazing-text  u-hidden">
                  فروش ویژه
                </div>
                <div class="c-mini-buy-box__product-info">
                  @foreach($product->media as $image)
                    @if($product->media && ($image->pivot->is_main == 1))
                      <img class="c-mini-buy-box__product-info--img" src="{{ $site_url . '/' .$image->path . '/' . $image->name }}?x-oss-process=image/resize,m_lfit,h_150,w_150/quality,q_80" alt="{{ $product->title_fa }}">
                    @endif
                  @endforeach
                  <div class="c-mini-buy-box__product-info--info">
                    <div class="title">{{ $product->title_fa }}</div>
                    <div class="colors ">
                      <label class="js-variant-color"></label>
                      <span class="js-color-title"></span>
                    </div>
                    <div class="sizes u-hidden">
                      <span class="js-size-title"></span>
                    </div>
                  </div>
                </div>
                <div class="c-mini-buy-box__row c-mini-buy-box__seller-digikala u-hidden js-mini-digikala-seller">
                  {{ $fa_store_name }}
                </div>
                <div class="c-mini-buy-box__row c-mini-buy-box__seller js-mini-not-digikala-seller">
                  <i class="green-verified js-mini-is-trusted u-hidden"></i>
                  <i class="blue-verified js-mini-is-official u-hidden"></i>
                  <label class="js-mini-seller-name">{{ $fa_store_name }}</label>
                </div>
                <div class="c-mini-buy-box__row c-mini-buy-box__warranty js-guarantee-text">

                </div>
                <div class="c-mini-buy-box__row c-mini-buy-box__stock ">
                  موجود در انبار فروشنده
                </div>
                <div class="c-product__seller-row c-product__seller-row--price c-mini-buy-box__price-row">
                  <div class="c-product__seller-price-info">
                    <del class="c-product__mini-seller-price-prev js-rrp-price u-hidden">

                    </del>
                    <div class="c-product__seller-price-off js-discount-value u-hidden">
                      ٪
                    </div>
                  </div>
                  <div class="c-product__mini-seller-price-real">
                    <div class="c-product__mini-seller-price-pure js-price-value"></div>
                    <span class="c-mini-buy-box__toman">تومان</span></div>
                </div>
                <div class="c-mini-buy-box__btn-row">
                  <a class="o-btn o-btn--contained-red-lg c-product__add-to-cart-btn js-add-to-cart js-btn-add-to-cart js-mini-add-to-cart js-ab-product-action" data-product-id="{{ $product->id }}" data-variant="" href="/cart/add/15488759/1/" data-event="add_to_cart" data-event-category="ecommerce" data-event-label="price: 509900000 - seller: marketplace - seller_name: {{ $fa_store_name }} - seller_rating: 81 - multiple_configs: True - position: 0">
                    افزودن به سبد خرید
                  </a>
                </div>
              </div>

            </div>

          </div>


        </div>
      </div>
      <div aria-describedby="modalDesc"
           aria-labelledby="modalTitle"
           class="remodal c-modal c-modal--sm"
           data-remodal-id="share"
           data-remodal-options=""
           role="dialog"
           tabindex="-1z"
      >
        <div class="c-modal__top-bar  c-modal__top-bar--has-line">
          <div class="c-modal__title ">اشتراک‌گذاری</div>
          <div class="c-modal__close" data-remodal-action="close"></div>
        </div>
        <form class="c-share" id="sendToFriend">
          <div class="c-share__title">
            با استفاده از روش‌های زیر می‌توانید این صفحه را با دوستان خود به اشتراک بگذارید.
          </div>
          <div class="c-share__options">
            <div class="c-share__social-buttons"><a
                class="o-btn c-share__social c-share__social--twitter"
                href="https://twitter.com/intent/tweet?url=https://www.digikala.com/product/dkp-3672884/%D8%B4%D8%A7%D8%B1%DA%98%D8%B1-%D9%87%D9%85%D8%B1%D8%A7%D9%87-%D8%A7%D9%85-%D9%BE%DB%8C-%D8%A8%D9%84%D8%A8%D8%B1%DB%8C-%D9%85%D8%AF%D9%84-blb-131-%D8%B8%D8%B1%D9%81%DB%8C%D8%AA-5000-%D9%85%DB%8C%D9%84%DB%8C-%D8%A2%D9%85%D9%BE%D8%B1-%D8%B3%D8%A7%D8%B9%D8%AA" rel="nofollow" target="_blank"></a><a
                class="o-btn c-share__social c-share__social--fb"
                href="https://www.facebook.com/sharer/sharer.php?m2w&s=100&p[url]=https://www.digikala.com/product/dkp-3672884/%D8%B4%D8%A7%D8%B1%DA%98%D8%B1-%D9%87%D9%85%D8%B1%D8%A7%D9%87-%D8%A7%D9%85-%D9%BE%DB%8C-%D8%A8%D9%84%D8%A8%D8%B1%DB%8C-%D9%85%D8%AF%D9%84-blb-131-%D8%B8%D8%B1%D9%81%DB%8C%D8%AA-5000-%D9%85%DB%8C%D9%84%DB%8C-%D8%A2%D9%85%D9%BE%D8%B1-%D8%B3%D8%A7%D8%B9%D8%AA" rel="nofollow" target="_blank"></a><a
                class="o-btn c-share__social c-share__social--whatsapp"
                href="https://wa.me?text=https://www.digikala.com/product/dkp-3672884/%D8%B4%D8%A7%D8%B1%DA%98%D8%B1-%D9%87%D9%85%D8%B1%D8%A7%D9%87-%D8%A7%D9%85-%D9%BE%DB%8C-%D8%A8%D9%84%D8%A8%D8%B1%DB%8C-%D9%85%D8%AF%D9%84-blb-131-%D8%B8%D8%B1%D9%81%DB%8C%D8%AA-5000-%D9%85%DB%8C%D9%84%DB%8C-%D8%A2%D9%85%D9%BE%D8%B1-%D8%B3%D8%A7%D8%B9%D8%AA" rel="nofollow" target="_blank"></a>
              <div class="o-btn c-share__social c-share__social--email js-email-btn"></div>
            </div>
            <div class="o-btn o-btn--outlined-gray-sm o-btn--copy c-share__link-btn js-copy-url"
                 data-copy="https://www.digikala.com/product/dkp-3672884">
              کپی لینک
            </div>
          </div>
          <div class="js-email-row u-hidden">
            <div class="c-share__email-row">
              <div class="c-share__email"><label class="o-form__field-container">
                  <div class="o-form__field-frame"><input class="o-form__field js-input-field " name="send_to_friend[email]"
                                                          placeholder="آدرس ایمیل را وارد نمایید"
                                                          type="email" value=""/>
                  </div>
                </label><input name="send_to_friend[product_id]" type="hidden" value="3672884"></div>
              <button class="o-btn o-btn--contained-red-sm" type="submit">ارسال</button>
            </div>
          </div>
          <div class="c-share__referral">
            <div class="c-share__referral-content">
              <div class="c-share__referral-title">جایزه شما</div>
              <div class="c-share__referral-desc">با دعوت دوستانتان، پس از اولین خریدشان، کدتخفیف و امتیاز
                هدیه بگیرید.
              </div>
              <div class="o-btn o-btn--outlined-gray-sm o-btn--copy o-btn--full-width c-share__referral-code u-hidden js-copy-referral-code"
                   data-copy=""></div>
              <div class="o-btn o-btn--outlined-red-sm o-btn--full-width o-btn--r-voucher c-share__referral-code  js-get-referral-code">
                دریافت کد تخفیف
              </div>
            </div>
            <div class="c-share__referral-img"><img src="../../static/files/84182fb2.svg"/></div>
          </div>
        </form>
      </div>
      <div aria-describedby="modal1Desc" aria-labelledby="modal1Title" class="remodal c-remodal-price-chart"
           data-remodal-id="price-chart" role="dialog">
        <div class="c-remodal-price-chart__main">
          <div class="c-remodal-am-price-chart__header">
            <div class="c-remodal-am-price-chart__title">
              نمودار قیمت فروش
            </div>
            <button aria-label="Close" class="c-remodal-am-price-chart__close"
                    data-remodal-action="close"></button>
          </div>
          <div class="c-remodal-am-price-chart__product-title">
            شارژر همراه ام پی بلبری مدل BLB-131 ظرفیت 5000 میلی آمپر ساعت
          </div>
          <div class="c-remodal-price-chart__content c-remodal-am-price-chart__content">
            <div class="c-remodal-am-price-chart__base" id="productPriceChart"></div>
            <div class="c-remodal-am-price-chart__row">
              <div class="c-am-chart-legend">
                <div class="c-am-chart-legend__row"><span
                    class="c-am-chart-legend__line c-am-chart-legend--marketable"></span><span
                    class="c-am-chart-legend__circle c-am-chart-legend--marketable"></span><label>موجود</label>
                </div>
                <div class="c-am-chart-legend__row"><span
                    class="c-am-chart-legend__line c-am-chart-legend--not-marketable"></span><span
                    class="c-am-chart-legend__circle c-am-chart-legend--not-marketable"></span><label>ناموجود</label>
                </div>
                <div class="c-am-chart-legend__row"><span
                    class="c-am-chart-legend__line c-am-chart-legend--pure-price"></span><label>قیمت
                    بدون تخفیف</label></div>
              </div>
            </div>
            <div class="c-am-chart-varient"><label
                class="c-am-chart-varient__label js-am-chart-varient-label"></label>
              <ul class="c-am-chart-varient__list js-price-chart-varient-list"></ul>
            </div>
          </div>
        </div>
      </div>
      <div aria-describedby="modal1Desc" aria-labelledby="modal1Title" class="remodal c-remodal-notification"
           data-remodal-id="observed" role="dialog">
        <button aria-label="Close" class="remodal-close" data-remodal-action="close"></button>
        <div class="c-remodal-notification__main">
          <div class="c-remodal-notification__aside">
            <div class="c-remodal-notification__title-ilu">به من اطلاع بده</div>
            <div class="c-remodal-notification__ilu"></div>
          </div>
          <div class="c-remodal-notification__content">
            <form class="c-form-notification" id="observed-form">
              <div class="c-form-notification__title">اطلاع به من در زمان:</div>
              <div class="c-form-notification__row">
                <div class="c-form-notification__col">
                  <div class="c-form-notification__status">
                    موجود شدن
                  </div>
                </div>
              </div>
              <div class="c-form-notification__row js-observe-modal-errors u-hidden-visually">
                <div class="c-form-notification__col">
                  <div class="c-message-light c-message-light--error js-form-error-items"></div>
                </div>
              </div>
              <div class="c-form-notification__title">از طریق:</div>
              <div class="c-form-notification__row">
                <div class="c-form-notification__col">
                  <ul class="c-form-notification__params">
                    <li><label class="c-form-notification__label" for="notification-param-1">ایمیل به
                        <span class="js-observed-user-email"></span></label><label
                        class="c-ui-checkbox"><input id="notification-param-1" name="observed[email]"
                                                     type="checkbox"
                                                     value="1"><span
                          class="c-ui-checkbox__check"></span></label></li>
                    <li><label class="c-form-notification__label" for="notification-param-2">پیامک به
                        <span class="js-observed-user-number"></span></label><label
                        class="c-ui-checkbox"><input checked id="notification-param-2" name="observed[sms]"
                                                     type="checkbox" value="1"><span
                          class="c-ui-checkbox__check"></span></label></li>
                    <li><label class="c-form-notification__label" for="notification-param-3">سیستم پیام
                        شخصی دیجی‌کالا</label><label class="c-ui-checkbox"><input checked
                                                                                  id="notification-param-3"
                                                                                  name="observed[notification]"
                                                                                  type="checkbox"
                                                                                  value="1"><span
                          class="c-ui-checkbox__check"></span></label></li>
                  </ul>
                </div>
              </div>
              <div class="c-form-notification__row c-form-notification__row--submit">
                <div class="c-form-notification__col">
                  <button class="btn-remodal-primary" id="add-to-observed" type="button">ثبت</button>
                  <button class="btn-remodal-secondary" data-remodal-action="cancel">بازگشت</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div aria-describedby="modalDesc"
           aria-labelledby="modalTitle"
           class="remodal c-modal c-modal--xs"
           data-remodal-id="auto-buy"
           data-remodal-options=""
           role="dialog"
           tabindex="-1z"
      >
        <div class="c-modal__top-bar  ">
          <div class="c-modal__title ">رزرو کالا در زمان موجود شدن</div>
          <div class="c-modal__close" data-remodal-action="close"></div>
        </div>
        <div class="c-product-auto-buy o-text-right"><p class="c-product-auto-buy__dsc">
            این کالا پس از موجود شدن به مدت یک ساعت برای شما رززو می‌گردد
            و می‌توانید با پرداخت هزینه سفارش آن را خریداری نمایید.
          </p><h4 class="c-product-auto-buy__notic-header">اطلاع از طریق:</h4>
          <form id="auto-buy-form">
            <div class="c-product-auto-buy__notic-row"><label class="o-form__check-box"><input
                  class="o-form__check-box-input js-auto-buy-user-email" name="autoBuy[email]" type="checkbox"
                  value="1"><span class="o-form__check-box-sign"></span><span
                  class="js-ui-checkbox-label">
            ایمیل به user@digikala.com
        </span></label></div>
            <div class="c-product-auto-buy__notic-row"><label class="o-form__check-box"><input
                  checked class="o-form__check-box-input js-auto-buy-user-phone" name="autoBuy[sms]"
                  type="checkbox" value="1"><span class="o-form__check-box-sign"></span><span
                  class="js-ui-checkbox-label">
            پیامک به ۰۹۱۲۳۴۵۶۷۸۹
        </span></label></div>
            <div class="c-product-auto-buy__notic-row"><label class="o-form__check-box"><input
                  checked class="o-form__check-box-input js-auto-buy-dk-notification"
                  name="autoBuy[notification]" type="checkbox" value="1"><span class="o-form__check-box-sign"></span><span
                  class="js-ui-checkbox-label">
            پیام شخصی دیجی‌کالا
        </span></label></div>
          </form>
          <div class="c-product-auto-buy__footer"><p class="c-product-auto-buy__plus-dsc"
                                                     data-icon="Brand-Digiplus-Sign">
              تنها برای کاربران دیجی‌پلاس
            </p><a class="o-btn o-btn--outlined-purple-lg o-btn--full-width"
                   data-after-icon="Icon-Navigation-Chevron-Left"
                   href="https://www.digikala.com/plus/landing/">
              عضویت در دیجی‌پلاس
            </a></div>
        </div>
      </div>
      <div aria-describedby="modal1Desc" aria-labelledby="modal1Title" class="remodal c-remodal-notification"
           data-remodal-id="incredible-observed" role="dialog">
        <button aria-label="Close" class="remodal-close" data-remodal-action="close"></button>
        <div class="c-remodal-notification__main">
          <div class="c-remodal-notification__aside">
            <div class="c-remodal-notification__title-ilu">به من اطلاع بده</div>
            <div class="c-remodal-notification__ilu"></div>
          </div>
          <div class="c-remodal-notification__content">
            <form class="c-form-notification" id="incredible-observed-form">
              <div class="c-form-notification__title">اطلاع به من در زمان:</div>
              <div class="c-form-notification__row">
                <div class="c-form-notification__col">
                  <div class="c-form-notification__status">
                    پیشنهاد شگفت‌انگیز
                  </div>
                </div>
              </div>
              <div class="c-form-notification__row js-observe-modal-errors u-hidden-visually">
                <div class="c-form-notification__col">
                  <div class="c-message-light c-message-light--error js-form-error-items"></div>
                </div>
              </div>
              <div class="c-form-notification__title">از طریق:</div>
              <div class="c-form-notification__row">
                <div class="c-form-notification__col">
                  <ul class="c-form-notification__params">
                    <li><label class="c-form-notification__label" for="incredible-notification-param-1">ایمیل
                        به <span class="js-observed-user-email"></span></label><label
                        class="c-ui-checkbox"><input id="incredible-notification-param-1" name="observed[email]"
                                                     type="checkbox"
                                                     value="1"><span
                          class="c-ui-checkbox__check"></span></label></li>
                    <li><label class="c-form-notification__label" for="incredible-notification-param-2">پیامک
                        به <span class="js-observed-user-number"></span></label><label
                        class="c-ui-checkbox"><input checked id="incredible-notification-param-2" name="observed[sms]"
                                                     type="checkbox"
                                                     value="1"><span
                          class="c-ui-checkbox__check"></span></label></li>
                    <li><label class="c-form-notification__label" for="incredible-notification-param-3">سیستم
                        پیام شخصی دیجی‌کالا</label><label class="c-ui-checkbox"><input checked
                                                                                       id="incredible-notification-param-3"
                                                                                       name="observed[notification]"
                                                                                       type="checkbox"
                                                                                       value="1"><span
                          class="c-ui-checkbox__check"></span></label></li>
                  </ul>
                </div>
              </div>
              <div class="c-form-notification__row c-form-notification__row--submit">
                <div class="c-form-notification__col">
                  <button class="btn-remodal-primary" id="add-to-incredible-observed" type="button">ثبت
                  </button>
                  <button class="btn-remodal-secondary" data-remodal-action="cancel">بازگشت</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div aria-describedby="modal1Desc" aria-labelledby="modal1Title" class="remodal c-remodal-gallery" data-remodal-id="gallery"
           role="dialog">
        <div class="c-remodal-gallery__main js-level-one-gallery">
          <div class="c-remodal-gallery__top-bar">
            <div class="c-remodal-gallery__tabs js-top-bar-tabs">
              <div class="c-remodal-gallery__tab c-remodal-gallery__tab--selected js-gallery-tab" data-id="1">
                تصاویر رسمی
              </div>
            </div>
            <button aria-label="Close" class="c-remodal-gallery__close" data-remodal-action="close"></button>
          </div>
          <div class="c-remodal-gallery__content is-active js-gallery-tab-content" id="gallery-content-1">
            <div class="c-remodal-gallery__main-img js-gallery-main-img js-video-container">
              <video class="video-js vjs-default-skin vjs-big-play-centered" id="pdp-video-container"></video>
            </div>
            <div class="c-remodal-gallery__main-img js-gallery-main-img is-active js-img-main-1"
                 data-slide-title="Slide "><img
                alt="شارژر همراه ام پی بلبری مدل BLB-131 ظرفیت 5000 میلی آمپر ساعت main 1 1"
                class="pannable-image"
                data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/c68ae5841966a9da5b033a9175bfebdfea55bf9a_1606237664.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
                data-src="https://dkstatics-public.digikala.com/digikala-products/c68ae5841966a9da5b033a9175bfebdfea55bf9a_1606237664.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
                data-type=""
                title=""></div>
            <div class="c-remodal-gallery__main-img js-gallery-main-img  js-img-main-2"
                 data-slide-title="Slide 1"><img
                alt="شارژر همراه ام پی بلبری مدل BLB-131 ظرفیت 5000 میلی آمپر ساعت main 1 2"
                class="pannable-image"
                data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/92b23609f30d0a7202c41721bff8c10bb8e1941d_1606237705.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
                data-src="https://dkstatics-public.digikala.com/digikala-products/92b23609f30d0a7202c41721bff8c10bb8e1941d_1606237705.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
                data-type=""
                title=""></div>
            <div class="c-remodal-gallery__main-img js-gallery-main-img  js-img-main-3"
                 data-slide-title="Slide 2"><img
                alt="شارژر همراه ام پی بلبری مدل BLB-131 ظرفیت 5000 میلی آمپر ساعت main 1 3"
                class="pannable-image"
                data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/f97a047bb3487bc98b9ea0dfd66c2c69b7e68882_1606237722.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
                data-src="https://dkstatics-public.digikala.com/digikala-products/f97a047bb3487bc98b9ea0dfd66c2c69b7e68882_1606237722.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
                data-type=""
                title=""></div>
            <div class="c-remodal-gallery__main-img js-gallery-main-img  js-img-main-4"
                 data-slide-title="Slide 3"><img
                alt="شارژر همراه ام پی بلبری مدل BLB-131 ظرفیت 5000 میلی آمپر ساعت main 1 4"
                class="pannable-image"
                data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/db1996a1ca6dd14d08809d40bd823491054728c0_1606237751.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
                data-src="https://dkstatics-public.digikala.com/digikala-products/db1996a1ca6dd14d08809d40bd823491054728c0_1606237751.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
                data-type=""
                title=""></div>
            <div class="c-remodal-gallery__main-img js-gallery-main-img  js-img-main-5"
                 data-slide-title="Slide 4"><img
                alt="شارژر همراه ام پی بلبری مدل BLB-131 ظرفیت 5000 میلی آمپر ساعت main 1 5"
                class="pannable-image"
                data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/c2948f0aec714b97c4551e649bb95e88c2b078af_1606237776.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
                data-src="https://dkstatics-public.digikala.com/digikala-products/c2948f0aec714b97c4551e649bb95e88c2b078af_1606237776.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
                data-type=""
                title=""></div>
            <div class="c-remodal-gallery__main-img js-gallery-main-img  js-img-main-6"
                 data-slide-title="Slide 5"><img
                alt="شارژر همراه ام پی بلبری مدل BLB-131 ظرفیت 5000 میلی آمپر ساعت main 1 6"
                class="pannable-image"
                data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/828fa92e8f9c526fbeb4637dcb63a9537af696af_1606237810.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
                data-src="https://dkstatics-public.digikala.com/digikala-products/828fa92e8f9c526fbeb4637dcb63a9537af696af_1606237810.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
                data-type=""
                title=""></div>
            <div class="c-remodal-gallery__main-img js-gallery-main-img  js-img-main-7"
                 data-slide-title="Slide 6"><img
                alt="شارژر همراه ام پی بلبری مدل BLB-131 ظرفیت 5000 میلی آمپر ساعت main 1 7"
                class="pannable-image"
                data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/493d547019e951a892a3f4cb5a800346b3ad9bee_1606237873.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
                data-src="https://dkstatics-public.digikala.com/digikala-products/493d547019e951a892a3f4cb5a800346b3ad9bee_1606237873.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
                data-type=""
                title=""></div>
            <div class="c-remodal-gallery__info">
              <div class="c-remodal-gallery__title">شارژر همراه ام پی بلبری مدل BLB-131 ظرفیت 5000 میلی آمپر
                ساعت
              </div>
              <div class="c-remodal-gallery__thumbs js-official-thumbs">
                <div class="c-remodal-gallery__thumb js-image-thumb" data-order="1"><img
                    alt="شارژر همراه ام پی بلبری مدل BLB-131 ظرفیت 5000 میلی آمپر ساعت thumb 2 1"
                    data-src="https://dkstatics-public.digikala.com/digikala-products/c68ae5841966a9da5b033a9175bfebdfea55bf9a_1606237664.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                    data-type=""
                    title=""></div>
                <div class="c-remodal-gallery__thumb js-image-thumb" data-order="2"><img
                    alt="شارژر همراه ام پی بلبری مدل BLB-131 ظرفیت 5000 میلی آمپر ساعت thumb 2 2"
                    data-src="https://dkstatics-public.digikala.com/digikala-products/92b23609f30d0a7202c41721bff8c10bb8e1941d_1606237705.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                    data-type=""
                    title=""></div>
                <div class="c-remodal-gallery__thumb js-image-thumb" data-order="3"><img
                    alt="شارژر همراه ام پی بلبری مدل BLB-131 ظرفیت 5000 میلی آمپر ساعت thumb 2 3"
                    data-src="https://dkstatics-public.digikala.com/digikala-products/f97a047bb3487bc98b9ea0dfd66c2c69b7e68882_1606237722.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                    data-type=""
                    title=""></div>
                <div class="c-remodal-gallery__thumb js-image-thumb" data-order="4"><img
                    alt="شارژر همراه ام پی بلبری مدل BLB-131 ظرفیت 5000 میلی آمپر ساعت thumb 2 4"
                    data-src="https://dkstatics-public.digikala.com/digikala-products/db1996a1ca6dd14d08809d40bd823491054728c0_1606237751.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                    data-type=""
                    title=""></div>
                <div class="c-remodal-gallery__thumb js-image-thumb" data-order="5"><img
                    alt="شارژر همراه ام پی بلبری مدل BLB-131 ظرفیت 5000 میلی آمپر ساعت thumb 2 5"
                    data-src="https://dkstatics-public.digikala.com/digikala-products/c2948f0aec714b97c4551e649bb95e88c2b078af_1606237776.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                    data-type=""
                    title=""></div>
                <div class="c-remodal-gallery__thumb js-image-thumb" data-order="6"><img
                    alt="شارژر همراه ام پی بلبری مدل BLB-131 ظرفیت 5000 میلی آمپر ساعت thumb 2 6"
                    data-src="https://dkstatics-public.digikala.com/digikala-products/828fa92e8f9c526fbeb4637dcb63a9537af696af_1606237810.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                    data-type=""
                    title=""></div>
                <div class="c-remodal-gallery__thumb js-image-thumb" data-order="7"><img
                    alt="شارژر همراه ام پی بلبری مدل BLB-131 ظرفیت 5000 میلی آمپر ساعت thumb 2 7"
                    data-src="https://dkstatics-public.digikala.com/digikala-products/493d547019e951a892a3f4cb5a800346b3ad9bee_1606237873.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                    data-type=""
                    title=""></div>
              </div>
              <div class="c-remodal-gallery__other-imgs js-comments-files-thumbnails-summary js-see-more-imgs"></div>
            </div>
          </div>
          <div class="c-remodal-gallery__content c-remodal-gallery__content--comments js-gallery-tab-content js-comments-with-thumbnails"
               id="gallery-content-2"></div>
        </div>
        <div class="c-remodal-gallery__main js-level-two-gallery js-comments"></div>
        <div class="c-remodal-gallery__main js-answers">
          <div class="c-remodal-gallery__top-bar">
            <div class="c-remodal-gallery__head-title">
              پاسخ فروشنده
            </div>
            <button aria-label="Close" class="c-remodal-gallery__close" data-remodal-action="close"></button>
          </div>
        </div>
      </div>
      <div aria-describedby="modal1Desc" aria-labelledby="modal1Title" class="remodal c-remodal-pricing"
           data-remodal-id="unfair-pricing"
           role="dialog">
        <button aria-label="Close" class="remodal-close" data-remodal-action="close"></button>
        <div class="c-remodal-pricing__main">
          <div class="c-remodal-pricing__aside">
            <div class="c-remodal-pricing__title-img">گزارش قیمت مناسب‌تر این کالا</div>
            <div class="c-remodal-pricing__img"><img
                alt="شارژر همراه ام پی بلبری مدل BLB-131 ظرفیت 5000 میلی آمپر ساعت"
                data-src="https://dkstatics-public.digikala.com/digikala-products/9de2cec8cd752041012e64fe2e7b82c65bc9749c_1606237683.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"></div>
          </div>
          <div class="c-remodal-pricing__content">
            <form class="c-form-pricing js-pricing-form" id="unfairPricingForm"><input id="is-price-competitive"
                                                                                       name="unfair_pricing[is_price_competitive]"
                                                                                       type="hidden"
                                                                                       value="0"><input
                name="unfair_pricing[product_id]" type="hidden" value="3672884"><input id="pricing-observed-price"
                                                                                       name="unfair_pricing[observed_price]"
                                                                                       type="hidden">
              <div class="c-form-pricing__title">این کالا را با چه قیمتی دیده‌اید؟</div>
              <div class="c-message-light c-message-light--margined-vertically c-message-light--success js-unfair-pricing-message u-hidden-visually">
                <span></span></div>
              <div class="c-message-light c-message-light--margined-vertically c-message-light--error js-unfair-pricing-error u-hidden-visually"></div>
              <div class="c-form-pricing__row js-valid-row">
                <div class="c-form-pricing__col"><label class="c-ui-input"><input
                      autocomplete="off"
                      class="c-ui-input__field c-ui-input__field--has-currency js-price-delimiter" name="unfair_pricing[claimed_price]"
                      placeholder="مثلا ۳۵۰۰۰"
                      type="text">
                    <div class="c-ui-input__currency">تومان</div>
                  </label></div>
              </div>
              <div class="c-form-pricing__row js-valid-row">
                <div class="c-form-pricing__col"><label class="c-ui-switch c-ui-switch--primary"><input
                      checked class="c-ui-switch__checkbox js-toggle-price-survey-options"
                      name="unfair_pricing[is_claimed_store_online]" type="checkbox" value="1"><span
                      class="c-ui-switch__slider c-ui-switch__slider--round"></span></label><span
                    class="c-form-pricing__label-text">در فروشگاه اینترنتی دیده‌ام</span></div>
              </div>
              <div class="c-form-pricing__additional js-price-survey-store-container">
                <div class="c-form-pricing__title">
                  نام فروشگاه
                </div>
                <div class="c-form-pricing__row js-valid-row">
                  <div class="c-form-pricing__col"><label class="c-ui-input"><input
                        class="c-ui-input__field" name="unfair_pricing[store]" placeholder=""
                        type="text"></label></div>
                </div>
                <div class="c-form-pricing__title">مکان فروشگاه</div>
                <div class="c-form-pricing__row js-valid-row">
                  <div class="c-form-pricing__col"><label class="c-ui-input"><select class="js-ui-select"
                                                                                     name="unfair_pricing[store_state]">
                        <option value="0">انتخاب استان</option>
                        <option value="9">تهران</option>
                        <option value="6">البرز</option>
                        <option value="5">اصفهان</option>
                        <option value="12">خراسان رضوی</option>
                        <option value="14">خوزستان</option>
                        <option value="18">فارس</option>
                        <option value="28">مازندران</option>
                        <option value="2">آذربایجان شرقی</option>
                        <option value="3">آذربایجان غربی</option>
                        <option value="4">اردبیل</option>
                        <option value="7">ایلام</option>
                        <option value="8">بوشهر</option>
                        <option value="10">چهار محال و بختیاری</option>
                        <option value="11">خراسان جنوبی</option>
                        <option value="13">خراسان شمالی</option>
                        <option value="15">زنجان</option>
                        <option value="16">سمنان</option>
                        <option value="17">سیستان و بلوچستان</option>
                        <option value="19">قزوین</option>
                        <option value="20">قم</option>
                        <option value="21">کردستان</option>
                        <option value="22">کرمان</option>
                        <option value="23">کرمانشاه</option>
                        <option value="24">کهگیلویه و بویراحمد</option>
                        <option value="25">گلستان</option>
                        <option value="26">گیلان</option>
                        <option value="27">لرستان</option>
                        <option value="29">مرکزی</option>
                        <option value="30">هرمزگان</option>
                        <option value="31">همدان</option>
                        <option value="32">یزد</option>
                      </select></label></div>
                </div>
              </div>
              <div class="c-form-pricing__additional js-price-survey-online-container">
                <div class="c-form-pricing__title">آدرس اینترنتی فروشگاه</div>
                <div class="c-form-pricing__row js-valid-row">
                  <div class="c-form-pricing__col"><label class="c-ui-input"><input
                        class="c-ui-input__field c-ui-input__field--left-placeholder" name="unfair_pricing[online_store_url]"
                        placeholder="www.example.com"
                        type="text"></label></div>
                </div>
              </div>
              <div class="c-form-pricing__row c-form-pricing__row--submit">
                <div class="c-form-pricing__col">
                  <button class="btn-primary js-unfair-price-submit" type="submit">ثبت اطلاعات</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div aria-describedby="modal1Desc"
           aria-labelledby="modal1Title"
           class="remodal c-remodal-feedback js-feedback-modal"
           data-remodal-id="feedback-survey"
           role="dialog">
        <button aria-label="Close" class="remodal-close" data-remodal-action="close"></button>
        <div class="c-remodal-feedback__main">
          <div class="c-remodal-feedback__aside">
            <div class="c-remodal-feedback__title-img">بازخورد در مورد این کالا</div>
            <div class="c-remodal-feedback__img"><img
                alt="شارژر همراه ام پی بلبری مدل BLB-131 ظرفیت 5000 میلی آمپر ساعت"
                data-src="https://dkstatics-public.digikala.com/digikala-products/9de2cec8cd752041012e64fe2e7b82c65bc9749c_1606237683.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"></div>
          </div>
          <div class="c-remodal-feedback__content"><p>قبلا در این نظرسنجی شرکت کرده‌اید.</p></div>
        </div>
      </div>
      <div aria-describedby="modalDesc"
           aria-labelledby="modalTitle"
           class="remodal c-modal c-remodal-seller-rate-info"
           data-remodal-id="seller-rate-info"
           data-remodal-options=""
           role="dialog"
           tabindex="-1z"
      >
        <div class="c-modal__top-bar  ">
          <div class="c-modal__title c-remodal-seller-rate-info__modal-title">عملکرد فروشنده</div>
          <div class="c-modal__close" data-remodal-action="close"></div>
        </div>
        <div class="c-remodal-seller-rate-info__container">
          <div class="c-remodal-seller-rate-info__title">
            تامین به موقع:
          </div>
          <p class="c-remodal-seller-rate-info__text">
            این معیار نمایانگر آن است که فروشنده در بازه‌ی زمانی اعلام شده بدون هیچ تاخیری، کالا را تامین و
            ارسال کرده است.
          </p>
          <div class="c-remodal-seller-rate-info__title">
            تعهد ارسال:
          </div>
          <p class="c-remodal-seller-rate-info__text">
            این معیار نمایانگر آن است که فروشنده سفارشات ثبت شده‌ی مشتریان را بدون کنسلی (لغو سفارش) ارسال کرده
            است.
          </p>
          <div class="c-remodal-seller-rate-info__title">
            بدون مرجوعی:
          </div>
          <p class="c-remodal-seller-rate-info__text">
            این معیار نمایانگر درصد کالاهای مرجوع شده
            از سوی مشتری است که به علت تخلفات فروشنده و با دلایل قابل قبول از طرف مشتری مرجوع شده است.
          </p></div>
      </div>
      <div class="u-hidden" id="product-template">
        <div class="swiper-slide c-carousel__slide" data-id="{id}">
          <div class="c-product-box c-product-box--no-shadow"><a
              class="c-product-box__img js-url js-carousel-ga-product-box" data-id="{id}"
              href="https://www.digikala.com/product/dkp-3672884/{url}"><img alt="{title}" class="swiper-lazy js-template-img"
                                                                             data-img="{image}"
                                                                             loading="lazy"><img
                class="c-product-box__fmcg-symbol {isFMCG}" loading="lazy"
                src="../../static/files/31a78819.svg"></a>
            <div class="c-product-box__title"><a class="js-carousel-ga-product-box"
                                                 data-id="{id}" href="https://www.digikala.com/product/dkp-3672884/{url}">
                {title}
              </a></div>
            <div class="c-product-box__price-row">
              <div class="c-product-box__price-item">
                <div class="c-new-price">
                  <div class="c-new-price__old-value {hasDiscount}">
                    <del>{oldValue}</del>
                    <span class="c-new-price__discount">٪{discount}</span></div>
                  <div class="c-new-price__value">
                    {price}
                    <span class="c-new-price__currency">تومان</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="sidebar">
      <aside></aside>
    </div>
  </main>


@endsection

@section('source')

  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-remodal-gallery remodal-is-initialized remodal-is-closed" data-remodal-id="gallery"
         role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc" tabindex="-1">
      <div class="c-remodal-gallery__main js-level-one-gallery is-open">
        <div class="c-remodal-gallery__top-bar">
          <div class="c-remodal-gallery__tabs js-top-bar-tabs">
            <div class="c-remodal-gallery__tab c-remodal-gallery__tab--selected js-gallery-tab" data-id="1">تصاویر
              رسمی
            </div>
          </div>
          <button data-remodal-action="close" class="c-remodal-gallery__close" aria-label="Close"></button>
        </div>
        <div class="c-remodal-gallery__content js-gallery-tab-content is-active" id="gallery-content-1">
          @foreach($product->media as $key => $image)
            @if($product->media()->exists())
              <div
                class="c-remodal-gallery__main-img js-gallery-main-img js-img-main-{{ $key+1 }} {{ ($key == 0)? 'is-active js-img-main-1' : '' }}"
                data-slide-title="Slide {{ $key+1 }}">
                <img
                  data-src="{{ $site_url . '/' .$image->path . '/' . $image->name }}?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
                  data-high-res-src="{{ $site_url . '/' .$image->path . '/' . $image->name }}?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
                  class="pannable-image" title="{{ $product->title_fa }}" alt="{{ $product->title_fa }}" data-type=""
                  src="{{ $site_url . '/' .$image->path . '/' . $image->name }}?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
                  loading="lazy">
              </div>
            @endif
          @endforeach
          <div class="c-remodal-gallery__info">
            <div class="c-remodal-gallery__title">{{ $product->title_fa }}</div>
            <div class="c-remodal-gallery__thumbs js-official-thumbs">
              @if($product->media()->exists())
                @foreach($product->media as $key => $image)
                  <div class="c-remodal-gallery__thumb js-image-thumb" data-order="{{ $key+1 }}">
                    <img
                      data-src="{{ $site_url . '/' .$image->path . '/' . $image->name }}?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                      title="{{ $product->title_fa }}" alt="{{ $product->title_fa }}" data-type=""
                      src="{{ $site_url . '/' .$image->path . '/' . $image->name }}?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                      loading="lazy">
                  </div>
                @endforeach
              @endif
            </div>
            <div class="c-remodal-gallery__other-imgs js-comments-files-thumbnails-summary js-see-more-imgs"></div>
          </div>
        </div>
        <div
          class="c-remodal-gallery__content c-remodal-gallery__content--comments js-gallery-tab-content js-comments-with-thumbnails"
          id="gallery-content-2"></div>
      </div>
      <div class="c-remodal-gallery__main js-level-two-gallery js-comments">
        <div class="c-remodal-gallery__top-bar">
          <div class="c-remodal-gallery__back js-back-comment">
            دیدگاه خریدار
          </div>
          <button data-remodal-action="close" class="c-remodal-gallery__close" aria-label="Close"></button>
        </div>
      </div>
      <div class="c-remodal-gallery__main js-answers">
        <div class="c-remodal-gallery__top-bar">
          <div class="c-remodal-gallery__head-title">
            پاسخ فروشنده
          </div>
          <button data-remodal-action="close" class="c-remodal-gallery__close" aria-label="Close"></button>
        </div>
      </div>
    </div>
  </div>

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
      <div class="c-u-minicart"></div>
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
    <div class="remodal c-modal c-modal--sm remodal-is-initialized remodal-is-closed" data-remodal-id="share"
         role="dialog" aria-labelledby="modalTitle" tabindex="-1" aria-describedby="modalDesc" data-remodal-options="">
      <div class="c-modal__top-bar  c-modal__top-bar--has-line">
        <div class="c-modal__title ">اشتراک‌گذاری</div>
        <div class="c-modal__close" data-remodal-action="close"></div>
      </div>
      <form class="c-share" id="sendToFriend" novalidate="novalidate">
        <div class="c-share__title">
          با استفاده از روش‌های زیر می‌توانید این صفحه را با دوستان خود به اشتراک بگذارید.
        </div>
        <div class="c-share__options">
          <div class="c-share__social-buttons"><a
              href="https://twitter.com/intent/tweet?url=https://www.digikala.com/product/dkp-3814476/%DA%AF%D9%88%D8%B4%DB%8C-%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84-%D8%A7%D9%BE%D9%84-%D9%85%D8%AF%D9%84-iphone-12-pro-a2408-%D8%AF%D9%88-%D8%B3%DB%8C%D9%85-%DA%A9%D8%A7%D8%B1%D8%AA-%D8%B8%D8%B1%D9%81%DB%8C%D8%AA-128-%DA%AF%DB%8C%DA%AF%D8%A7%D8%A8%D8%A7%DB%8C%D8%AA"
              rel="nofollow" class="o-btn c-share__social c-share__social--twitter" target="_blank"></a><a
              href="https://www.facebook.com/sharer/sharer.php?m2w&amp;s=100&amp;p[url]=https://www.digikala.com/product/dkp-3814476/%DA%AF%D9%88%D8%B4%DB%8C-%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84-%D8%A7%D9%BE%D9%84-%D9%85%D8%AF%D9%84-iphone-12-pro-a2408-%D8%AF%D9%88-%D8%B3%DB%8C%D9%85-%DA%A9%D8%A7%D8%B1%D8%AA-%D8%B8%D8%B1%D9%81%DB%8C%D8%AA-128-%DA%AF%DB%8C%DA%AF%D8%A7%D8%A8%D8%A7%DB%8C%D8%AA"
              rel="nofollow" class="o-btn c-share__social c-share__social--fb" target="_blank"></a><a
              href="https://wa.me?text=https://www.digikala.com/product/dkp-3814476/%DA%AF%D9%88%D8%B4%DB%8C-%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84-%D8%A7%D9%BE%D9%84-%D9%85%D8%AF%D9%84-iphone-12-pro-a2408-%D8%AF%D9%88-%D8%B3%DB%8C%D9%85-%DA%A9%D8%A7%D8%B1%D8%AA-%D8%B8%D8%B1%D9%81%DB%8C%D8%AA-128-%DA%AF%DB%8C%DA%AF%D8%A7%D8%A8%D8%A7%DB%8C%D8%AA"
              rel="nofollow" class="o-btn c-share__social c-share__social--whatsapp" target="_blank"></a>
            <div class="o-btn c-share__social c-share__social--email js-email-btn"></div>
          </div>
          <div class="o-btn o-btn--outlined-gray-sm o-btn--copy c-share__link-btn js-copy-url"
               data-copy="https://www.digikala.com/product/dkp-3814476">
            کپی لینک
          </div>
        </div>
        <div class="js-email-row u-hidden">
          <div class="c-share__email-row">
            <div class="c-share__email"><label class="o-form__field-container">
                <div class="o-form__field-frame"><input name="send_to_friend[email]" type="email"
                                                        placeholder="آدرس ایمیل را وارد نمایید" value=""
                                                        class="o-form__field js-input-field "></div>
              </label><input type="hidden" name="send_to_friend[product_id]" value="3814476"></div>
            <button type="submit" class="o-btn o-btn--contained-red-sm">ارسال</button>
          </div>
        </div>
        <div class="c-share__referral">
          <div class="c-share__referral-content">
            <div class="c-share__referral-title">جایزه شما</div>
            <div class="c-share__referral-desc">با دعوت دوستانتان، پس از اولین خریدشان، کدتخفیف و امتیاز هدیه بگیرید.
            </div>
            <div
              class="o-btn o-btn--outlined-gray-sm o-btn--copy o-btn--full-width c-share__referral-code js-copy-referral-code"
              data-copy="">REFW6HTLLNCDA
            </div>
            <div
              class="o-btn o-btn--outlined-red-sm o-btn--full-width o-btn--r-voucher c-share__referral-code js-get-referral-code u-hidden">
              دریافت کد تخفیف
            </div>
          </div>
          <div class="c-share__referral-img"><img src="https://www.digikala.com/static/files/84182fb2.svg"></div>
        </div>
      </form>
    </div>
  </div>

  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-remodal-price-chart remodal-is-initialized remodal-is-closed" data-remodal-id="price-chart"
         role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc" tabindex="-1">
      <div class="c-remodal-price-chart__main">
        <div class="c-remodal-am-price-chart__header">
          <div class="c-remodal-am-price-chart__title">
            نمودار قیمت فروش
          </div>
          <button data-remodal-action="close" class="c-remodal-am-price-chart__close" aria-label="Close"></button>
        </div>
        <div class="c-remodal-am-price-chart__product-title">
          گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت
        </div>
        <div class="c-remodal-price-chart__content c-remodal-am-price-chart__content">
          <div id="productPriceChart" class="c-remodal-am-price-chart__base"></div>
          <div class="c-remodal-am-price-chart__row">
            <div class="c-am-chart-legend">
              <div class="c-am-chart-legend__row"><span
                  class="c-am-chart-legend__line c-am-chart-legend--marketable"></span><span
                  class="c-am-chart-legend__circle c-am-chart-legend--marketable"></span><label>موجود</label></div>
              <div class="c-am-chart-legend__row"><span
                  class="c-am-chart-legend__line c-am-chart-legend--not-marketable"></span><span
                  class="c-am-chart-legend__circle c-am-chart-legend--not-marketable"></span><label>ناموجود</label>
              </div>
              <div class="c-am-chart-legend__row"><span
                  class="c-am-chart-legend__line c-am-chart-legend--pure-price"></span><label>قیمت بدون تخفیف</label>
              </div>
            </div>
          </div>
          <div class="c-am-chart-varient"><label class="c-am-chart-varient__label js-am-chart-varient-label"></label>
            <ul class="c-am-chart-varient__list js-price-chart-varient-list"></ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-remodal-notification remodal-is-initialized remodal-is-closed" data-remodal-id="observed"
         role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc" tabindex="-1">
      <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
      <div class="c-remodal-notification__main">
        <div class="c-remodal-notification__aside">
          <div class="c-remodal-notification__title-ilu">به من اطلاع بده</div>
          <div class="c-remodal-notification__ilu"></div>
        </div>
        <div class="c-remodal-notification__content">
          <form class="c-form-notification" id="observed-form">
            <div class="c-form-notification__title">اطلاع به من در زمان:</div>
            <div class="c-form-notification__row">
              <div class="c-form-notification__col">
                <div class="c-form-notification__status">
                  موجود شدن
                </div>
              </div>
            </div>
            <div class="c-form-notification__row js-observe-modal-errors u-hidden-visually">
              <div class="c-form-notification__col">
                <div class="c-message-light c-message-light--error js-form-error-items"></div>
              </div>
            </div>
            <div class="c-form-notification__title">از طریق:</div>
            <div class="c-form-notification__row">
              <div class="c-form-notification__col">
                <ul class="c-form-notification__params">
                  <li><label class="c-form-notification__label" for="notification-param-1">ایمیل به <span
                        class="js-observed-user-email"></span></label><label class="c-ui-checkbox"><input
                        type="checkbox" value="1" name="observed[email]" id="notification-param-1"><span
                        class="c-ui-checkbox__check"></span></label></li>
                  <li><label class="c-form-notification__label" for="notification-param-2">پیامک به <span
                        class="js-observed-user-number"></span></label><label class="c-ui-checkbox"><input
                        type="checkbox" value="1" name="observed[sms]" checked="" id="notification-param-2"><span
                        class="c-ui-checkbox__check"></span></label></li>
                  <li><label class="c-form-notification__label" for="notification-param-3">سیستم پیام شخصی
                      {{ $fa_store_name }}</label><label class="c-ui-checkbox"><input type="checkbox" value="1"
                                                                                      name="observed[notification]"
                                                                                      checked=""
                                                                                      id="notification-param-3"><span
                        class="c-ui-checkbox__check"></span></label></li>
                </ul>
              </div>
            </div>
            <div class="c-form-notification__row c-form-notification__row--submit">
              <div class="c-form-notification__col">
                <button type="button" id="add-to-observed" class="btn-remodal-primary">ثبت</button>
                <button data-remodal-action="cancel" class="btn-remodal-secondary">بازگشت</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-modal c-modal--xs remodal-is-initialized remodal-is-closed" data-remodal-id="auto-buy"
         role="dialog" aria-labelledby="modalTitle" tabindex="-1" aria-describedby="modalDesc" data-remodal-options="">
      <div class="c-modal__top-bar  ">
        <div class="c-modal__title ">رزرو کالا در زمان موجود شدن</div>
        <div class="c-modal__close" data-remodal-action="close"></div>
      </div>
      <div class="c-product-auto-buy o-text-right"><p class="c-product-auto-buy__dsc">
          این کالا پس از موجود شدن به مدت یک ساعت برای شما رززو می‌گردد
          و می‌توانید با پرداخت هزینه سفارش آن را خریداری نمایید.
        </p><h4 class="c-product-auto-buy__notic-header">اطلاع از طریق:</h4>
        <form id="auto-buy-form">
          <div class="c-product-auto-buy__notic-row"><label class="o-form__check-box"><input
                class="o-form__check-box-input js-auto-buy-user-email" name="autoBuy[email]" value="1"
                type="checkbox"><span class="o-form__check-box-sign"></span><span class="js-ui-checkbox-label">
            ایمیل به user@digikala.com
        </span></label></div>
          <div class="c-product-auto-buy__notic-row"><label class="o-form__check-box"><input
                class="o-form__check-box-input js-auto-buy-user-phone" name="autoBuy[sms]" value="1" type="checkbox"
                checked=""><span class="o-form__check-box-sign"></span><span class="js-ui-checkbox-label">
            پیامک به ۰۹۱۲۳۴۵۶۷۸۹
        </span></label></div>
          <div class="c-product-auto-buy__notic-row"><label class="o-form__check-box"><input
                class="o-form__check-box-input js-auto-buy-dk-notification" name="autoBuy[notification]" value="1"
                type="checkbox" checked=""><span class="o-form__check-box-sign"></span><span
                class="js-ui-checkbox-label">
            پیام شخصی {{ $fa_store_name }}
        </span></label></div>
        </form>
        <div class="c-product-auto-buy__footer"><p class="c-product-auto-buy__plus-dsc" data-icon="Brand-Digiplus-Sign">
            تنها برای کاربران دیجی‌پلاس
          </p><a href="/plus/landing/" class="o-btn o-btn--outlined-purple-lg o-btn--full-width"
                 data-after-icon="Icon-Navigation-Chevron-Left">
            عضویت در دیجی‌پلاس
          </a></div>
      </div>
    </div>
  </div>

  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-remodal-notification remodal-is-initialized remodal-is-closed"
         data-remodal-id="incredible-observed" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc"
         tabindex="-1">
      <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
      <div class="c-remodal-notification__main">
        <div class="c-remodal-notification__aside">
          <div class="c-remodal-notification__title-ilu">به من اطلاع بده</div>
          <div class="c-remodal-notification__ilu"></div>
        </div>
        <div class="c-remodal-notification__content">
          <form class="c-form-notification" id="incredible-observed-form">
            <div class="c-form-notification__title">اطلاع به من در زمان:</div>
            <div class="c-form-notification__row">
              <div class="c-form-notification__col">
                <div class="c-form-notification__status">
                  پیشنهاد شگفت‌انگیز
                </div>
              </div>
            </div>
            <div class="c-form-notification__row js-observe-modal-errors u-hidden-visually">
              <div class="c-form-notification__col">
                <div class="c-message-light c-message-light--error js-form-error-items"></div>
              </div>
            </div>
            <div class="c-form-notification__title">از طریق:</div>
            <div class="c-form-notification__row">
              <div class="c-form-notification__col">
                <ul class="c-form-notification__params">
                  <li><label class="c-form-notification__label" for="incredible-notification-param-1">ایمیل به <span
                        class="js-observed-user-email"></span></label><label class="c-ui-checkbox"><input
                        type="checkbox" value="1" name="observed[email]" id="incredible-notification-param-1"><span
                        class="c-ui-checkbox__check"></span></label></li>
                  <li><label class="c-form-notification__label" for="incredible-notification-param-2">پیامک به <span
                        class="js-observed-user-number"></span></label><label class="c-ui-checkbox"><input
                        type="checkbox" value="1" name="observed[sms]" checked=""
                        id="incredible-notification-param-2"><span class="c-ui-checkbox__check"></span></label></li>
                  <li><label class="c-form-notification__label" for="incredible-notification-param-3">سیستم پیام شخصی
                      {{ $fa_store_name }}</label><label class="c-ui-checkbox"><input type="checkbox" value="1"
                                                                                      name="observed[notification]"
                                                                                      checked=""
                                                                                      id="incredible-notification-param-3"><span
                        class="c-ui-checkbox__check"></span></label></li>
                </ul>
              </div>
            </div>
            <div class="c-form-notification__row c-form-notification__row--submit">
              <div class="c-form-notification__col">
                <button type="button" id="add-to-incredible-observed" class="btn-remodal-primary">ثبت</button>
                <button data-remodal-action="cancel" class="btn-remodal-secondary">بازگشت</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-remodal-pricing remodal-is-initialized remodal-is-closed" data-remodal-id="unfair-pricing"
         role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc" tabindex="-1">
      <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
      <div class="c-remodal-pricing__main">
        <div class="c-remodal-pricing__aside">
          <div class="c-remodal-pricing__title-img">گزارش قیمت مناسب‌تر این کالا</div>
          <div class="c-remodal-pricing__img"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/be7a0e9bf7866759fa3cea7648b149f589a01040_1607433891.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
              alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت"
              src="https://dkstatics-public.digikala.com/digikala-products/be7a0e9bf7866759fa3cea7648b149f589a01040_1607433891.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
              loading="lazy"></div>
        </div>
        <div class="c-remodal-pricing__content">
          <form class="c-form-pricing js-pricing-form" id="unfairPricingForm" novalidate="novalidate"><input
              type="hidden" name="unfair_pricing[is_price_competitive]" id="is-price-competitive" value="0"><input
              type="hidden" name="unfair_pricing[product_id]" value="3814476"><input type="hidden"
                                                                                     name="unfair_pricing[observed_price]"
                                                                                     id="pricing-observed-price">
            <div class="c-form-pricing__title">این کالا را با چه قیمتی دیده‌اید؟</div>
            <div
              class="c-message-light c-message-light--margined-vertically c-message-light--success js-unfair-pricing-message u-hidden-visually">
              <span></span></div>
            <div
              class="c-message-light c-message-light--margined-vertically c-message-light--error js-unfair-pricing-error u-hidden-visually"></div>
            <div class="c-form-pricing__row js-valid-row">
              <div class="c-form-pricing__col"><label class="c-ui-input"><input
                    class="c-ui-input__field c-ui-input__field--has-currency js-price-delimiter" type="text"
                    autocomplete="off" name="unfair_pricing[claimed_price]" placeholder="مثلا ۳۵۰۰۰">
                  <div class="c-ui-input__currency">تومان</div>
                </label></div>
            </div>
            <div class="c-form-pricing__row js-valid-row">
              <div class="c-form-pricing__col"><label class="c-ui-switch c-ui-switch--primary"><input
                    class="c-ui-switch__checkbox js-toggle-price-survey-options" type="checkbox" value="1" checked=""
                    name="unfair_pricing[is_claimed_store_online]"><span
                    class="c-ui-switch__slider c-ui-switch__slider--round"></span></label><span
                  class="c-form-pricing__label-text">در فروشگاه اینترنتی دیده‌ام</span></div>
            </div>
            <div class="c-form-pricing__additional js-price-survey-store-container">
              <div class="c-form-pricing__title">
                نام فروشگاه
              </div>
              <div class="c-form-pricing__row js-valid-row">
                <div class="c-form-pricing__col"><label class="c-ui-input"><input class="c-ui-input__field" type="text"
                                                                                  name="unfair_pricing[store]"
                                                                                  placeholder=""></label></div>
              </div>
              <div class="c-form-pricing__title">مکان فروشگاه</div>
              <div class="c-form-pricing__row js-valid-row">
                <div class="c-form-pricing__col"><label class="c-ui-input">
                    <div class="selectric-wrapper selectric-js-ui-select">
                      <div class="selectric-hide-select"><select class="js-ui-select" name="unfair_pricing[store_state]"
                                                                 tabindex="-1">
                          <option value="0">انتخاب استان</option>
                          <option value="9">تهران</option>
                          <option value="6">البرز</option>
                          <option value="5">اصفهان</option>
                          <option value="12">خراسان رضوی</option>
                          <option value="14">خوزستان</option>
                          <option value="28">مازندران</option>
                          <option value="18">فارس</option>
                          <option value="2">آذربایجان شرقی</option>
                          <option value="3">آذربایجان غربی</option>
                          <option value="4">اردبیل</option>
                          <option value="7">ایلام</option>
                          <option value="8">بوشهر</option>
                          <option value="10">چهار محال و بختیاری</option>
                          <option value="11">خراسان جنوبی</option>
                          <option value="13">خراسان شمالی</option>
                          <option value="15">زنجان</option>
                          <option value="16">سمنان</option>
                          <option value="17">سیستان و بلوچستان</option>
                          <option value="19">قزوین</option>
                          <option value="20">قم</option>
                          <option value="21">کردستان</option>
                          <option value="22">کرمان</option>
                          <option value="23">کرمانشاه</option>
                          <option value="24">کهگیلویه و بویراحمد</option>
                          <option value="25">گلستان</option>
                          <option value="26">گیلان</option>
                          <option value="27">لرستان</option>
                          <option value="29">مرکزی</option>
                          <option value="30">هرمزگان</option>
                          <option value="31">همدان</option>
                          <option value="32">یزد</option>
                        </select></div>
                      <div class="selectric"><span class="label">انتخاب استان</span><b class="button">▾</b></div>
                      <div class="selectric-items" tabindex="-1">
                        <div class="selectric-scroll">
                          <ul>
                            <li data-index="0" class="selected">انتخاب استان</li>
                            <li data-index="1" class="">تهران</li>
                            <li data-index="2" class="">البرز</li>
                            <li data-index="3" class="">اصفهان</li>
                            <li data-index="4" class="">خراسان رضوی</li>
                            <li data-index="5" class="">خوزستان</li>
                            <li data-index="6" class="">مازندران</li>
                            <li data-index="7" class="">فارس</li>
                            <li data-index="8" class="">آذربایجان شرقی</li>
                            <li data-index="9" class="">آذربایجان غربی</li>
                            <li data-index="10" class="">اردبیل</li>
                            <li data-index="11" class="">ایلام</li>
                            <li data-index="12" class="">بوشهر</li>
                            <li data-index="13" class="">چهار محال و بختیاری</li>
                            <li data-index="14" class="">خراسان جنوبی</li>
                            <li data-index="15" class="">خراسان شمالی</li>
                            <li data-index="16" class="">زنجان</li>
                            <li data-index="17" class="">سمنان</li>
                            <li data-index="18" class="">سیستان و بلوچستان</li>
                            <li data-index="19" class="">قزوین</li>
                            <li data-index="20" class="">قم</li>
                            <li data-index="21" class="">کردستان</li>
                            <li data-index="22" class="">کرمان</li>
                            <li data-index="23" class="">کرمانشاه</li>
                            <li data-index="24" class="">کهگیلویه و بویراحمد</li>
                            <li data-index="25" class="">گلستان</li>
                            <li data-index="26" class="">گیلان</li>
                            <li data-index="27" class="">لرستان</li>
                            <li data-index="28" class="">مرکزی</li>
                            <li data-index="29" class="">هرمزگان</li>
                            <li data-index="30" class="">همدان</li>
                            <li data-index="31" class="last">یزد</li>
                          </ul>
                        </div>
                      </div>
                      <input class="u-hidden" tabindex="0"></div>
                  </label></div>
              </div>
            </div>
            <div class="c-form-pricing__additional js-price-survey-online-container">
              <div class="c-form-pricing__title">آدرس اینترنتی فروشگاه</div>
              <div class="c-form-pricing__row js-valid-row">
                <div class="c-form-pricing__col"><label class="c-ui-input"><input
                      class="c-ui-input__field c-ui-input__field--left-placeholder" type="text"
                      name="unfair_pricing[online_store_url]" placeholder="www.example.com"></label></div>
              </div>
            </div>
            <div class="c-form-pricing__row c-form-pricing__row--submit">
              <div class="c-form-pricing__col">
                <button type="submit" class="btn-primary js-unfair-price-submit">ثبت اطلاعات</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-remodal-feedback js-feedback-modal remodal-is-initialized remodal-is-closed"
         data-remodal-id="feedback-survey" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc"
         tabindex="-1">
      <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
      <div class="c-remodal-feedback__main">
        <div class="c-remodal-feedback__aside">
          <div class="c-remodal-feedback__title-img">بازخورد در مورد این کالا</div>
          <div class="c-remodal-feedback__img"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/be7a0e9bf7866759fa3cea7648b149f589a01040_1607433891.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
              alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت"
              src="https://dkstatics-public.digikala.com/digikala-products/be7a0e9bf7866759fa3cea7648b149f589a01040_1607433891.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
              loading="lazy"></div>
        </div>
        <div class="c-remodal-feedback__content">
          <form class="c-form-feedback" id="feedbackSurveyForm" novalidate="novalidate"><input type="hidden"
                                                                                               name="feedback-survey[product_id]"
                                                                                               value="3814476">
            <div
              class="c-message-light c-message-light--margined-vertically c-message-light--success js-feedback-message u-hidden-visually">
              <span></span></div>
            <div
              class="c-message-light c-message-light--margined-vertically c-message-light--error js-feedback-error u-hidden-visually"></div>
            <div class="c-form-feedback__row js-valid-row" data-question="1" data-parent="">
              <div class="c-form-feedback__col c-form-feedback__col--v-center"><label
                  class="c-ui-checkbox c-ui-checkbox--green"><input type="checkbox" class="input-checkbox"
                                                                    name="feedback_survey[1]" value="1"
                                                                    data-question="1"><span
                    class="c-ui-checkbox__check"></span></label><span
                  class="c-ui-checkbox__text">نام کالا صحیح نیست</span></div>
            </div>
            <div class="c-form-feedback__row js-valid-row" data-question="2" data-parent="">
              <div class="c-form-feedback__col c-form-feedback__col--v-center"><label
                  class="c-ui-checkbox c-ui-checkbox--green"><input type="checkbox" class="input-checkbox"
                                                                    name="feedback_survey[2]" value="1"
                                                                    data-question="2"><span
                    class="c-ui-checkbox__check"></span></label><span class="c-ui-checkbox__text">عکس‌های کالا مناسب نیست</span>
              </div>
            </div>
            <div class="c-form-feedback__row js-valid-row" data-question="3" data-parent="">
              <div class="c-form-feedback__col c-form-feedback__col--v-center"><label
                  class="c-ui-checkbox c-ui-checkbox--green"><input type="checkbox" class="input-checkbox"
                                                                    name="feedback_survey[3]" value="1"
                                                                    data-question="3"><span
                    class="c-ui-checkbox__check"></span></label><span class="c-ui-checkbox__text">مشخصات فنی کالا صحیح نیست</span>
              </div>
            </div>
            <div class="c-form-feedback__row js-valid-row" data-question="4" data-parent="">
              <div class="c-form-feedback__col c-form-feedback__col--v-center"><label
                  class="c-ui-checkbox c-ui-checkbox--green"><input type="checkbox" class="input-checkbox"
                                                                    name="feedback_survey[4]" value="1"
                                                                    data-question="4"><span
                    class="c-ui-checkbox__check"></span></label><span
                  class="c-ui-checkbox__text">توضیحات کالا صحیح نیست</span></div>
            </div>
            <div class="c-form-feedback__row js-valid-row" data-question="8" data-parent="">
              <div class="c-form-feedback__col c-form-feedback__col--v-center"><label
                  class="c-ui-checkbox c-ui-checkbox--green"><input type="checkbox" class="input-checkbox"
                                                                    name="feedback_survey[8]" value="1"
                                                                    data-question="8"><span
                    class="c-ui-checkbox__check"></span></label><span
                  class="c-ui-checkbox__text">این کالا غیراصل است</span></div>
            </div>
            <div class="c-form-feedback__row js-valid-row js-has-related-question" data-question="5" data-parent="">
              <div class="c-form-feedback__col c-form-feedback__col--v-center"><label
                  class="c-ui-checkbox c-ui-checkbox--green"><input type="checkbox" class="input-checkbox"
                                                                    name="feedback_survey[5]" value="1"
                                                                    data-question="5"><span
                    class="c-ui-checkbox__check"></span></label><span class="c-ui-checkbox__text">کالا تکراری است</span>
              </div>
            </div>
            <div class="u-hidden " data-question="6" data-parent="5">
              <div class="c-form-feedback__title">آدرس کالای مشابه در {{ $fa_store_name }}</div>
              <div class="c-form-feedback__row js-valid-row">
                <div class="c-form-feedback__col"><label class="c-ui-input"><input
                      class="c-ui-input__field c-ui-input__field--left-placeholder" type="text"
                      name="feedback_survey[6]" placeholder="https://www.digikala.com/product/dkp-313420/"
                      data-question="6"></label></div>
              </div>
            </div>
            <div class=" " data-question="7" data-parent="">
              <div class="c-form-feedback__title">توضیحات</div>
              <div class="c-form-feedback__row js-valid-row">
                <div class="c-form-feedback__col"><label class="c-ui-textarea"><textarea class="c-ui-textarea__field"
                                                                                         placeholder="توضیحات"
                                                                                         name="feedback_survey[7]"
                                                                                         data-question="7"></textarea></label>
                </div>
              </div>
            </div>
            <div class="c-form-feedback__row c-form-feedback__row--submit">
              <div class="c-form-feedback__col">
                <button type="submit" class="btn-primary js-feedback-survey-submit disabled">ثبت اطلاعات</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-modal c-remodal-seller-rate-info remodal-is-initialized remodal-is-closed"
         data-remodal-id="seller-rate-info" role="dialog" aria-labelledby="modalTitle" tabindex="-1"
         aria-describedby="modalDesc" data-remodal-options="">
      <div class="c-modal__top-bar  ">
        <div class="c-modal__title c-remodal-seller-rate-info__modal-title">عملکرد فروشنده</div>
        <div class="c-modal__close" data-remodal-action="close"></div>
      </div>
      <div class="c-remodal-seller-rate-info__container">
        <div class="c-remodal-seller-rate-info__title">
          تامین به موقع:
        </div>
        <p class="c-remodal-seller-rate-info__text">
          این معیار نمایانگر آن است که فروشنده در بازه‌ی زمانی اعلام شده بدون هیچ تاخیری، کالا را تامین و ارسال کرده
          است.
        </p>
        <div class="c-remodal-seller-rate-info__title">
          تعهد ارسال:
        </div>
        <p class="c-remodal-seller-rate-info__text">
          این معیار نمایانگر آن است که فروشنده سفارشات ثبت شده‌ی مشتریان را بدون کنسلی (لغو سفارش) ارسال کرده است.
        </p>
        <div class="c-remodal-seller-rate-info__title">
          بدون مرجوعی:
        </div>
        <p class="c-remodal-seller-rate-info__text">
          این معیار نمایانگر درصد کالاهای مرجوع شده
          از سوی مشتری است که به علت تخلفات فروشنده و با دلایل قابل قبول از طرف مشتری مرجوع شده است.
        </p></div>
    </div>
  </div>


  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-remodal-account remodal-is-initialized remodal-is-closed" data-remodal-id="login"
         role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc" tabindex="-1">
      <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
      <div class="c-remodal-account__headline">ورود به {{ $fa_store_name }}</div>
      <div class="c-remodal-account__content">
        <form class="c-form-account" id="loginFormModal" novalidate="novalidate">
          <div class="c-message-light c-message-light--info" id="login-form-msg"></div>
          <div class="c-form-account__title">پست الکترونیک یا شماره موبایل</div>
          <div class="c-form-account__row">
            <div class="c-form-account__col"><label class="c-ui-input c-ui-input--account-login"><input
                  class="c-ui-input__field" type="text" name="login[email_phone]" autocomplete="current-email"
                  placeholder="info@digikala.com"></label></div>
          </div>
          <div class="c-form-account__title">کلمه عبور</div>
          <div class="c-form-account__row">
            <div class="c-form-account__col"><label class="c-ui-input c-ui-input--account-password"><input
                  class="c-ui-input__field" name="login[password]" type="password" autocomplete="current-password"
                  placeholder=""></label></div>
          </div>
          <div class="c-form-account__agree"><label class="c-ui-checkbox c-ui-checkbox--primary"><input type="checkbox"
                                                                                                        value="1"
                                                                                                        name="login[remember]"
                                                                                                        id="accountAutoLogin"><span
                class="c-ui-checkbox__check"></span></label><label for="accountAutoLogin">مرا به خاطر داشته باش</label>
          </div>
          <div class="c-form-account__row c-form-account__row--submit">
            <div class="c-form-account__col">
              <button class="btn-login login-button-js">ورود به {{ $fa_store_name }}</button>
            </div>
          </div>
          <div class="c-form-account__link"><a data-snt-event="dkLoginClick"
                                               data-snt-params="{&quot;type&quot;:&quot;forgetPassword&quot;,&quot;site&quot;:&quot;login-modal&quot;}"
                                               href="/users/password/forgot/" class="btn-link-spoiler">رمز عبور خود را
              فراموش کرده‌ام</a></div>
          <div class="c-message-light c-message-light--error has-oneline" id="loginFormError">نام کاربری
            یا کلمه عبور اشتباه است.
          </div>
        </form>
      </div>
      <div class="c-remodal-account__footer is-highlighted"><span>کاربر جدید هستید؟</span><a
          data-snt-event="dkLoginClick"
          data-snt-params="{&quot;type&quot;:&quot;signup&quot;,&quot;site&quot;:&quot;login-modal&quot;}"
          href="/users/login-register/?_back=https://www.digikala.com/product/dkp-3814476/%25DA%25AF%25D9%2588%25D8%25B4%25DB%258C-%25D9%2585%25D9%2588%25D8%25A8%25D8%25A7%25DB%258C%25D9%2584-%25D8%25A7%25D9%25BE%25D9%2584-%25D9%2585%25D8%25AF%25D9%2584-iphone-12-pro-a2408-%25D8%25AF%25D9%2588-%25D8%25B3%25DB%258C%25D9%2585-%25DA%25A9%25D8%25A7%25D8%25B1%25D8%25AA-%25D8%25B8%25D8%25B1%25D9%2581%25DB%258C%25D8%25AA-128-%25DA%25AF%25DB%258C%25DA%25AF%25D8%25A7%25D8%25A8%25D8%25A7%25DB%258C%25D8%25AA"
          class="btn-link-spoiler">ثبت‌نام در {{ $fa_store_name }}</a></div>
    </div>
  </div>


  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-remodal-loader remodal-is-initialized remodal-is-closed" data-remodal-id="loader"
         data-remodal-options="hashTracking: false, closeOnOutsideClick: false" role="dialog"
         aria-labelledby="modal1Title" aria-describedby="modal1Desc" tabindex="-1">
      <div class="c-remodal-loader__icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="115" height="30" viewBox="0 0 115 30">
          <path fill="#EE384E" fill-rule="evenodd"
                d="M76.916 19.024h6.72v-8.78h-6.72c-1.16 0-2.24 1.061-2.24 2.195v4.39c0 1.134 1.08 2.195 2.24 2.195zm26.883 0h6.72v-8.78h-6.72c-1.16 0-2.24 1.061-2.24 2.195v4.39c0 1.134 1.08 2.195 2.24 2.195zM88.117 6.951v15.366c0 .484-.625 1.098-1.12 1.098l-2.24.023c-.496 0-1.12-.637-1.12-1.12v-.733l-1.017 1.196c-.31.413-1.074.634-1.597.634h-4.107c-3.604 0-6.721-3.063-6.721-6.586v-4.39c0-3.523 3.117-6.585 6.72-6.585h10.082c.495 0 1.12.613 1.12 1.097zm26.883 0v15.366c0 .484-.624 1.098-1.12 1.098l-2.24.023c-.496 0-1.12-.637-1.12-1.12v-.733l-1.017 1.196c-.31.413-1.074.634-1.597.634h-4.107c-3.604 0-6.721-3.063-6.721-6.586v-4.39c0-3.523 3.117-6.585 6.72-6.585h10.082c.495 0 1.12.613 1.12 1.097zm-74.675 3.293h-6.721c-1.16 0-2.24 1.061-2.24 2.195v4.39c0 1.134 1.08 2.195 2.24 2.195h6.72v-8.78zm4.48-3.293V23.78c0 3.523-3.117 6.22-6.72 6.22H34.62c-.515 0-1-.236-1.311-.638l-1.972-2.55c-.327-.424-.144-1.202.399-1.202h6.347c1.16 0 2.24-.696 2.24-1.83v-.365h-6.72c-3.604 0-6.72-3.063-6.72-6.586v-4.39c0-3.523 3.116-6.585 6.72-6.585h4.107c.514 0 1.074.405 1.437.731l1.177 1.098V6.95c0-.483.625-1.097 1.12-1.097h2.24c.496 0 1.12.613 1.12 1.097zM4.481 16.83c0 1.134 1.08 2.195 2.24 2.195h6.72v-8.78h-6.72c-1.16 0-2.24 1.061-2.24 2.195v4.39zM16.8 0c.497 0 1.121.613 1.121 1.098v21.22c0 .483-.624 1.097-1.12 1.097h-2.24c-.496 0-1.12-.613-1.12-1.098v-.732l-1.175 1.232c-.318.346-.932.598-1.44.598H6.722C3.117 23.415 0 20.352 0 16.829v-4.356c0-3.523 3.117-6.62 6.72-6.62h6.722V1.099c0-.485.624-1.098 1.12-1.098h2.24zm46.3 14.634L69.336 6.9c.347-.421.04-1.048-.513-1.048h-3.566c-.27 0-.525.119-.696.323l-6.314 7.727V1.098c0-.485-.625-1.098-1.12-1.098h-2.24c-.496 0-1.12.613-1.12 1.098v21.22c0 .483.624 1.097 1.12 1.097h2.24c.495 0 1.12-.614 1.12-1.098v-6.951l6.317 7.744c.17.207.428.328.7.328h3.562c.554 0 .86-.627.514-1.048l-6.24-7.756zM48.166 0c-.496 0-1.12.613-1.12 1.098v2.195c0 .484.624 1.097 1.12 1.097h2.24c.495 0 1.12-.613 1.12-1.097V1.098c0-.485-.625-1.098-1.12-1.098h-2.24zm0 5.854c-.496 0-1.12.613-1.12 1.097v15.366c0 .484.8 1.12 1.295 1.12l2.065-.022c.495 0 1.12-.614 1.12-1.098V6.951c0-.484-.625-1.097-1.12-1.097h-2.24zM21.282 0c-.495 0-1.12.613-1.12 1.098v2.195c0 .484.625 1.097 1.12 1.097h2.24c.496 0 1.12-.613 1.12-1.097V1.098c0-.485-.624-1.098-1.12-1.098h-2.24zm0 5.854c-.495 0-1.12.613-1.12 1.097v15.366c0 .484.625 1.098 1.12 1.098h2.24c.496 0 1.12-.614 1.12-1.098V6.951c0-.484-.624-1.097-1.12-1.097h-2.24zm73.556-4.756v21.22c0 .483-.625 1.097-1.12 1.097h-2.24c-.496 0-1.12-.614-1.12-1.098V1.097c0-.484.624-1.097 1.12-1.097h2.24c.495 0 1.12.613 1.12 1.098z"></path>
        </svg>
      </div>
      <div class="c-remodal-loader__bullets"><i class="c-remodal-loader__bullet c-remodal-loader__bullet--1"></i><i
          class="c-remodal-loader__bullet c-remodal-loader__bullet--2"></i><i
          class="c-remodal-loader__bullet c-remodal-loader__bullet--3"></i><i
          class="c-remodal-loader__bullet c-remodal-loader__bullet--4"></i></div>
    </div>
  </div>


  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-remodal-general-alert remodal-is-initialized remodal-is-closed" data-remodal-id="alert"
         role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc" tabindex="-1">
      <div class="c-remodal-general-alert__main">
        <div class="c-remodal-general-alert__content"><p class="js-remodal-general-alert__text"></p>
          <p class="c-remodal-general-alert__description js-remodal-general-alert__description"></p></div>
        <div class="c-remodal-general-alert__actions">
          <button
            class="c-remodal-general-alert__button c-remodal-general-alert__button--approve js-remodal-general-alert__button--approve"></button>
          <button
            class="c-remodal-general-alert__button c-remodal-general-alert__button--cancel js-remodal-general-alert__button--cancel"></button>
        </div>
      </div>
    </div>
  </div>

  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-remodal-general-information remodal-is-initialized remodal-is-closed"
         data-remodal-id="information" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc"
         tabindex="-1">
      <div class="c-remodal-general-information__main">
        <div class="c-remodal-general-information__content"><p class="js-remodal-general-information__text"></p></div>
        <div class="c-remodal-general-information__actions">
          <button
            class="c-remodal-general-information__button c-remodal-general-information__button--approve js-remodal-general-information__button--approve"></button>
        </div>
      </div>
    </div>
  </div>

  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-remodal c-remodal-quick-view remodal-is-initialized remodal-is-closed"
         data-remodal-id="quick-view" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc"
         tabindex="-1">
      <button data-remodal-action="close" class="remodal-close c-remodal__close" aria-label="Close"></button>
      <div class="c-quick-view__content js-quick-view-section"></div>
    </div>
  </div>

  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-remodal-fmcg remodal-is-initialized remodal-is-closed" data-remodal-id="fmcg-modal"
         data-remodal-options="hashTracking: false, closeOnOutsideClick: false" role="dialog" tabindex="-1">
      <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
      <div class="c-remodal-fmcg__container"><img src="https://www.digikala.com/static/files/cbaed462.png"
                                                  class="c-remodal-fmcg__logo">
        <div class="c-remodal-fmcg__content"><p class="c-remodal-fmcg__head-text">ارسال سریع کالای
            <span> سوپر مارکتی </span> فقط در تهران و کرج امکان پذیر است.</p>
          <p class="c-remodal-fmcg__question">با توجه به محدودیت ارسال، آیا مایل هستید این کالا به سبد خرید شما افزوده
            شود؟</p>
          <div class="c-remodal-fmcg__actions">
            <button class="c-remodal-fmcg__button c-remodal-fmcg__button--reject js-fmcg-modal-reject">خیر</button>
            <button class="c-remodal-fmcg__button c-remodal-fmcg__button--approve js-fmcg-modal-approve">بله</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-remodal-location js-general-location remodal-is-initialized remodal-is-closed"
         data-remodal-id="general-location" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc"
         tabindex="-1">
      <div class="c-remodal-location__header"><span class="js-general-location-title">انتخاب استان</span>
        <div class="c-remodal-location__close js-close-modal"></div>
      </div>
      <div class="c-remodal-location__content js-states-container">
        <div class="c-general-location__row c-general-location__row--your-location js-your-location">
          مکان‌یابی خودکار
        </div>
      </div>
      <div class="c-remodal-location__content js-cities-container" style="display: none;">
        <div class="c-general-location__row c-general-location__row--back js-back-to-states">
          بازگشت به لیست استان‌ها
        </div>
      </div>
    </div>
  </div>

  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div
      class="remodal c-remodal-location c-remodal-location--addresses js-general-location-addresses remodal-is-initialized remodal-is-closed"
      data-remodal-id="general-location" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc"
      tabindex="-1">
      <div class="c-remodal-location__header"><span class="js-general-location-title">انتخاب آدرس</span>
        <div class="c-remodal-location__close js-close-modal"></div>
      </div>
      <div class="c-remodal-location__content js-addresses-container">
        <div class="c-ui-radio-wrapper c-ui-radio--general-location js-sample-address u-hidden">
          <label class="c-filter__label " for="generalLocationAddress"></label>
          <label class="c-ui-radio">
            <input type="radio" value="" name="generalLocationAddress" class="" id="generalLocationAddress"
                   data-title="">
            <span class="c-ui-radio__check"></span>
          </label>
        </div>
        <a href="/addresses/add/" class="c-general-location__add-address js-general-location-add-address">
          افزودن آدرس جدید
        </a>
      </div>
    </div>
  </div>


  <div id="iv-container" class="">
    <div class="iv-loader"></div>
    <div class="iv-snap-view">
      <div class="iv-snap-image-wrap">
        <div class="iv-snap-handle"></div>
      </div>
      <div class="iv-zoom-slider">
        <div class="iv-zoom-handle"></div>
      </div>
    </div>
    <div class="iv-image-view-container"
    <div
    ="">
    <div class="iv-image-wrap"></div>
  </div>       </div>

  <div class="iv-close"></div>

  <div></div>

  <style id="ins-free-style" innerhtml=""></style>

  <div class="zoomContainer"
       style="-webkit-transform: translateZ(0);position:absolute;left:934.1500244140625px;top:203.98333740234375px;height:341.7px;width:341.7px;">
    <div class="zoomLens"
         style="background-position: 0px 0px; float: right; overflow: hidden; z-index: 999; transform: translateZ(0px); opacity: 0.4; width: 227.444px; height: 144.155px; background-color: rgba(239, 57, 78, 0.1); cursor: crosshair; border: 2.5px solid rgb(239, 86, 97); background-repeat: no-repeat; position: absolute; left: 113.25px; top: 0px; display: none;">
      &nbsp;
    </div>
  </div>

  <div class="zoomWindowContainer" style="width: 852px;">
    <div
      style="overflow: hidden; background-position: -428px 0px; text-align: center; background-color: rgb(255, 255, 255); width: 852px; height: 540px; float: left; background-size: 1280px 1280px; z-index: 100; border: 0px solid rgb(136, 136, 136); background-repeat: no-repeat; position: absolute; background-image: url(&quot;https://dkstatics-public.digikala.com/digikala-products/be7a0e9bf7866759fa3cea7648b149f589a01040_1607433891.jpg?x-oss-process=image/resize,w_1280/quality,q_80&quot;); top: 226.833px; left: 24px; display: none;"
      class="zoomWindow">&nbsp;
    </div>
  </div>





@endsection

