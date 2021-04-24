@php

  $banner2 = \Modules\Staff\Slider\Models\Slider::find(2);

$category=$product->category->first();
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
    var supernova_mode = "production";
    var supernova_tracker_url = "https:\/\/etrackerd.digikala.com\/tracker\/events\/";
    var variants = {
      @if ($product->variants()->exists())
        @foreach ($product->variants as $item)
        @if($item->variant()->exists() && !is_null($item->variant->value))
      "{{ $item->variant->id }}": {
        "id": {{ $item->variant->id }},
        "active": true,
        "active_digistyle": true,
        "ovl_selling_active": true,
        "title": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0627\u067e\u0644 \u0645\u062f\u0644 iPhone 12 Pro Max A2412 \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 512 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a | \u062e\u0627\u06a9\u0633\u062a\u0631\u06cc | \u06af\u0627\u0631\u0627\u0646\u062a\u06cc 18 \u0645\u0627\u0647\u0647 \u0647\u0645\u0631\u0627\u0647 \u06af\u0633\u062a\u0631 \u0646\u0642\u0631\u0647 \u0641\u0627\u0645",
        "color": {
          "id": 11,
          "title": "\u062e\u0627\u06a9\u0633\u062a\u0631\u06cc",
          "code": "#9E9E9E",
          "hexCode": "#9E9E9E",
          "hex_code": "#9E9E9E"
        },
        "size": [],
        "site": "digikala",
        "warranty": {
          "id": 4832,
          "title": "\u06af\u0627\u0631\u0627\u0646\u062a\u06cc 18 \u0645\u0627\u0647\u0647 \u0647\u0645\u0631\u0627\u0647 \u06af\u0633\u062a\u0631 \u0646\u0642\u0631\u0647 \u0641\u0627\u0645",
          "description": null,
          "phone": null,
          "address": null,
          "working_hours": null,
          "condition": null
        },
        "marketplace_seller": {
          "id": 4064,
          "name": "\u0634\u0627\u062f\u06cc \u0644\u0646\u062f",
          "rate": 81,
          "rateCount": 2468,
          "rating": {
            "cancel_percentage": 99.8,
            "cancel_summarize": "excellent",
            "return_percentage": 99.9,
            "return_summarize": "excellent",
            "ship_on_time_percentage": 100,
            "ship_on_time_summarize": "excellent",
            "final_score": 5,
            "final_percentage": 100
          },
          "stars": 5,
          "is_trusted": false,
          "is_official_seller": false,
          "is_roosta": false,
          "url": "\/seller\/5ac7s\/",
          "registerTimeAgo": "3 \u0633\u0627\u0644, 3 \u0645\u0627\u0647"
        },
        "leadTime": 1,
        "shipping_type": "seller",
        "gifts": [],
        "gift_product_ids": [],
        "seller_lead_time": 0,
        "market_place_selling_stock": 1,
        "is_fresh": false,
        "scheduled_stock": false,
        "promotion_price_id": null,
        "is_digikala_owner": false,
        "rank": 99.81,
        "sr": null,
        "has_similar_variants": true,
        "fast_shopping_badge": false,
        "fast_shopping_confirm": false,
        "is_multi_warehouse": false,
        "is_ship_by_seller": true,
        "is_eligible_for_jet_delivery": false,
        "plus_cash_back": null,
        "stats": null,
        "available_on_website": true,
        "provider": "seller",
        "is_heavy": false,
        "is_electronic": false,
        "sbs_seller_cities": [1698],
        "price_list": {
          "id": 423595095,
          "discount_percent": null,
          "rrp_price": 50990000000,
          "selling_price": 509900000,
          "is_incredible_offer": false,
          "is_plus_offer": false,
          "is_sponsored_offer": false,
          "is_locked_for_plus": false,
          "promotion_id": null,
          "timer": null,
          "pre_sell": false,
          "variant_id": {{ $item->variant->id }},
          "orderLimit": 1,
          "initial_limit": null,
          "tags": null,
          "cache_key_created_at": "2021-04-19 18:15:47",
          "cache_update_source": "supernova-digikala-bellatrix",
          "discount_amount": 0,
          "discount": 0,
          "show_discount_badge": false,
          "marketable_stock": 1,
          "plus_variant_cash_back": 0
        },
        "addToCartUrl": "\/cart\/add\/{{ $item->variant->id }}\/1\/",
        "addToYaldaCartUrl": "\/ajax\/cart\/move\/save-for-yalda\/{{ $item->variant->id }}\/",
        "dcPoint": 150,
        "is_free_shipment": true,
        "providerData": {
          "description": "\u0645\u0648\u062c\u0648\u062f \u062f\u0631 \u0627\u0646\u0628\u0627\u0631 \u0641\u0631\u0648\u0634\u0646\u062f\u0647",
          "providers": [{
            "title": "\u0627\u0631\u0633\u0627\u0644 \u062a\u0648\u0633\u0637 \u0641\u0631\u0648\u0634\u0646\u062f\u0647",
            "description": "\u0627\u06cc\u0646 \u06a9\u0627\u0644\u0627 \u062f\u0631 \u0627\u0646\u0628\u0627\u0631 \u0641\u0631\u0648\u0634\u0646\u062f\u0647 \u0645\u0648\u062c\u0648\u062f \u0648 \u0622\u0645\u0627\u062f\u0647 \u067e\u0631\u062f\u0627\u0632\u0634 \u0627\u0633\u062a \u0648 \u0627\u0645\u06a9\u0627\u0646 \u0627\u0631\u0633\u0627\u0644 \u0645\u0633\u062a\u0642\u06cc\u0645 \u062a\u0648\u0633\u0637 \u0641\u0631\u0648\u0634\u0646\u062f\u0647 \u062f\u0627\u0631\u062f."
          }],
          "hasLeadTime": false,
          "badge_type": "without_lead_time"
        },
        "newProviderData": [{
          "type": "seller",
          "has_lead_time": false,
          "text": "\u0627\u0631\u0633\u0627\u0644 \u0641\u0631\u0648\u0634\u0646\u062f\u0647"
        }],
        "isExistsInWarehouse": true
      },
      @endif
      @endforeach
      @endif

      // "14976390": {
      //   "id": 14976390,
      //   "active": true,
      //   "active_digistyle": true,
      //   "ovl_selling_active": true,
      //   "title": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0627\u067e\u0644 \u0645\u062f\u0644 iPhone 12 Pro Max A2412 \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 512 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a | \u0637\u0644\u0627\u06cc\u06cc | \u06af\u0627\u0631\u0627\u0646\u062a\u06cc 18 \u0645\u0627\u0647\u0647 \u0647\u0645\u0631\u0627\u0647 \u06af\u0633\u062a\u0631 \u0646\u0642\u0631\u0647 \u0641\u0627\u0645",
      //   "color": {
      //     "id": 15,
      //     "title": "\u0637\u0644\u0627\u06cc\u06cc",
      //     "code": "#c99212",
      //     "hexCode": "#c99212",
      //     "hex_code": "#c99212"
      //   },
      //   "size": [],
      //   "site": "digikala",
      //   "warranty": {
      //     "id": 4832,
      //     "title": "\u06af\u0627\u0631\u0627\u0646\u062a\u06cc 18 \u0645\u0627\u0647\u0647 \u0647\u0645\u0631\u0627\u0647 \u06af\u0633\u062a\u0631 \u0646\u0642\u0631\u0647 \u0641\u0627\u0645",
      //     "description": null,
      //     "phone": null,
      //     "address": null,
      //     "working_hours": null,
      //     "condition": null
      //   },
      //   "marketplace_seller": {
      //     "id": 106110,
      //     "name": "\u0627\u06a9\u0633\u0648\u0646 \u0627\u0633\u062a\u0648\u0631",
      //     "rate": 86,
      //     "rateCount": 267,
      //     "rating": {
      //       "cancel_percentage": 97.6,
      //       "cancel_summarize": "very_bad",
      //       "return_percentage": 100,
      //       "return_summarize": "excellent",
      //       "ship_on_time_percentage": 100,
      //       "ship_on_time_summarize": "excellent",
      //       "final_score": 3.5,
      //       "final_percentage": 70
      //     },
      //     "stars": 3.5,
      //     "is_trusted": false,
      //     "is_official_seller": false,
      //     "is_roosta": false,
      //     "url": "\/seller\/a7n5a\/",
      //     "registerTimeAgo": "2 \u0633\u0627\u0644, 3 \u0645\u0627\u0647"
      //   },
      //   "leadTime": 1,
      //   "shipping_type": "digikala",
      //   "gifts": [],
      //   "gift_product_ids": [],
      //   "seller_lead_time": 0,
      //   "market_place_selling_stock": 1,
      //   "is_fresh": false,
      //   "scheduled_stock": false,
      //   "promotion_price_id": null,
      //   "is_digikala_owner": false,
      //   "rank": 96.86,
      //   "sr": null,
      //   "has_similar_variants": false,
      //   "fast_shopping_badge": false,
      //   "fast_shopping_confirm": false,
      //   "is_multi_warehouse": false,
      //   "is_ship_by_seller": false,
      //   "is_eligible_for_jet_delivery": false,
      //   "plus_cash_back": null,
      //   "stats": null,
      //   "available_on_website": true,
      //   "provider": "digikala",
      //   "is_heavy": false,
      //   "is_electronic": false,
      //   "sbs_seller_cities": [],
      //   "price_list": {
      //     "id": 423048872,
      //     "discount_percent": null,
      //     "rrp_price": 515000000,
      //     "selling_price": 515000000,
      //     "is_incredible_offer": false,
      //     "is_plus_offer": false,
      //     "is_sponsored_offer": false,
      //     "is_locked_for_plus": false,
      //     "promotion_id": null,
      //     "timer": null,
      //     "pre_sell": false,
      //     "variant_id": 14976390,
      //     "orderLimit": 1,
      //     "initial_limit": null,
      //     "tags": null,
      //     "cache_key_created_at": "2021-04-19 10:40:06",
      //     "cache_update_source": "supernova-digikala-bellatrix",
      //     "discount_amount": 0,
      //     "discount": 0,
      //     "show_discount_badge": false,
      //     "marketable_stock": 1,
      //     "plus_variant_cash_back": 0
      //   },
      //   "addToCartUrl": "\/cart\/add\/14976390\/1\/",
      //   "addToYaldaCartUrl": "\/ajax\/cart\/move\/save-for-yalda\/14976390\/",
      //   "dcPoint": 150,
      //   "is_free_shipment": true,
      //   "providerData": {
      //     "description": "\u0645\u0648\u062c\u0648\u062f \u062f\u0631 \u0627\u0646\u0628\u0627\u0631 \u0641\u0631\u0648\u0634\u0646\u062f\u0647",
      //     "providers": [{
      //       "title": "\u0627\u0631\u0633\u0627\u0644 \u062a\u0648\u0633\u0637 \u062f\u06cc\u062c\u06cc\u200c\u06a9\u0627\u0644\u0627 \u0627\u0632 1 \u0631\u0648\u0632 \u06a9\u0627\u0631\u06cc \u062f\u06cc\u06af\u0631",
      //       "description": "\u0627\u06cc\u0646 \u06a9\u0627\u0644\u0627 \u067e\u0633 \u0627\u0632 \u0645\u062f\u062a \u0632\u0645\u0627\u0646 \u0645\u0634\u062e\u0635 \u0634\u062f\u0647 \u062a\u0648\u0633\u0637 \u0641\u0631\u0648\u0634\u0646\u062f\u0647 \u062f\u0631 \u0627\u0646\u0628\u0627\u0631 \u062f\u06cc\u062c\u06cc\u200c\u06a9\u0627\u0644\u0627 \u062a\u0627\u0645\u06cc\u0646 \u0648 \u0622\u0645\u0627\u062f\u0647 \u067e\u0631\u062f\u0627\u0632\u0634 \u0645\u06cc\u200c\u06af\u0631\u062f\u062f \u0648 \u062a\u0648\u0633\u0637 \u067e\u06cc\u06a9 \u062f\u06cc\u062c\u06cc\u200c\u06a9\u0627\u0644\u0627 \u062f\u0631 \u0628\u0627\u0632\u0647 \u0627\u0646\u062a\u062e\u0627\u0628\u06cc \u0627\u0631\u0633\u0627\u0644 \u062e\u0648\u0627\u0647\u062f \u0634\u062f."
      //     }],
      //     "hasLeadTime": true,
      //     "badge_type": "with_lead_time"
      //   },
      //   "newProviderData": [{
      //     "type": "digikala",
      //     "has_lead_time": true,
      //     "text": "\u0627\u0631\u0633\u0627\u0644 \u062f\u06cc\u062c\u06cc\u200c\u06a9\u0627\u0644\u0627 \u0627\u0632 1 \u0631\u0648\u0632 \u06a9\u0627\u0631\u06cc \u062f\u06cc\u06af\u0631"
      //   }],
      //   "isExistsInWarehouse": false
      // },
      // "15859017": {
      //   "id": 15859017,
      //   "active": true,
      //   "active_digistyle": true,
      //   "ovl_selling_active": true,
      //   "title": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0627\u067e\u0644 \u0645\u062f\u0644 iPhone 12 Pro Max A2412 \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 512 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a | \u062e\u0627\u06a9\u0633\u062a\u0631\u06cc | \u06af\u0627\u0631\u0627\u0646\u062a\u06cc 18 \u0645\u0627\u0647\u0647 \u0647\u0645\u0631\u0627\u0647 \u06af\u0633\u062a\u0631 \u0646\u0642\u0631\u0647 \u0641\u0627\u0645",
      //   "color": {
      //     "id": 11,
      //     "title": "\u062e\u0627\u06a9\u0633\u062a\u0631\u06cc",
      //     "code": "#9E9E9E",
      //     "hexCode": "#9E9E9E",
      //     "hex_code": "#9E9E9E"
      //   },
      //   "size": [],
      //   "site": "digikala",
      //   "warranty": {
      //     "id": 4832,
      //     "title": "\u06af\u0627\u0631\u0627\u0646\u062a\u06cc 18 \u0645\u0627\u0647\u0647 \u0647\u0645\u0631\u0627\u0647 \u06af\u0633\u062a\u0631 \u0646\u0642\u0631\u0647 \u0641\u0627\u0645",
      //     "description": null,
      //     "phone": null,
      //     "address": null,
      //     "working_hours": null,
      //     "condition": null
      //   },
      //   "marketplace_seller": {
      //     "id": 517122,
      //     "name": "\u0647\u0645\u0631\u0627\u0647 \u0645\u0627\u06a9\u0627\u0646",
      //     "rate": 82,
      //     "rateCount": 65,
      //     "rating": {
      //       "cancel_percentage": 98.9,
      //       "cancel_summarize": "very_bad",
      //       "return_percentage": 100,
      //       "return_summarize": "excellent",
      //       "ship_on_time_percentage": 100,
      //       "ship_on_time_summarize": "excellent",
      //       "final_score": 3.5,
      //       "final_percentage": 70
      //     },
      //     "stars": 3.5,
      //     "is_trusted": false,
      //     "is_official_seller": false,
      //     "is_roosta": false,
      //     "url": "\/seller\/cwe4n\/",
      //     "registerTimeAgo": "4 \u0645\u0627\u0647, 3 \u0647\u0641\u062a\u0647"
      //   },
      //   "leadTime": 1,
      //   "shipping_type": "both",
      //   "gifts": [],
      //   "gift_product_ids": [],
      //   "seller_lead_time": 0,
      //   "market_place_selling_stock": 2,
      //   "is_fresh": false,
      //   "scheduled_stock": false,
      //   "is_digikala_owner": false,
      //   "rank": 96.27,
      //   "sr": null,
      //   "has_similar_variants": false,
      //   "fast_shopping_badge": false,
      //   "fast_shopping_confirm": false,
      //   "is_multi_warehouse": false,
      //   "is_ship_by_seller": true,
      //   "is_eligible_for_jet_delivery": false,
      //   "plus_cash_back": null,
      //   "stats": null,
      //   "available_on_website": true,
      //   "provider": "both",
      //   "is_heavy": false,
      //   "is_electronic": false,
      //   "sbs_seller_cities": [1698, 2464, 2438, 2445, 1623, 1855, 1516, 2275, 1476, 1386, 1437, 2176, 2589, 2196, 1983],
      //   "price_list": {
      //     "id": 423384419,
      //     "discount": 3,
      //     "discount_amount": 0,
      //     "rrp_price": 534000000,
      //     "selling_price": 517980000,
      //     "is_incredible_offer": false,
      //     "is_locked_for_plus": false,
      //     "timer": 0,
      //     "variant_id": 15859017,
      //     "promotion": {
      //       "is_incredible_offer": false,
      //       "is_selling_and_sales": true,
      //       "has_promotion_badge": true,
      //       "is_plus_promotion": false,
      //       "is_early_access": false,
      //       "is_app_incredible": false,
      //       "is_themeable": false,
      //       "title": "\u0641\u0631\u0648\u0634 \u0648\u06cc\u0698\u0647",
      //       "color": null,
      //       "image": null
      //     },
      //     "variant_gold_price_details": null,
      //     "marketable_stock": 1,
      //     "orderLimit": 1,
      //     "plus_variant_cash_back": 0
      //   },
      //   "addToCartUrl": "\/cart\/add\/15859017\/1\/",
      //   "addToYaldaCartUrl": "\/ajax\/cart\/move\/save-for-yalda\/15859017\/",
      //   "dcPoint": 150,
      //   "is_free_shipment": true,
      //   "providerData": {
      //     "description": "\u0645\u0648\u062c\u0648\u062f \u062f\u0631 \u0627\u0646\u0628\u0627\u0631 \u0641\u0631\u0648\u0634\u0646\u062f\u0647",
      //     "providers": [{
      //       "title": "\u0627\u0631\u0633\u0627\u0644 \u062a\u0648\u0633\u0637 \u0641\u0631\u0648\u0634\u0646\u062f\u0647",
      //       "description": "\u0627\u06cc\u0646 \u06a9\u0627\u0644\u0627 \u062f\u0631 \u0627\u0646\u0628\u0627\u0631 \u0641\u0631\u0648\u0634\u0646\u062f\u0647 \u0645\u0648\u062c\u0648\u062f \u0648 \u0622\u0645\u0627\u062f\u0647 \u067e\u0631\u062f\u0627\u0632\u0634 \u0627\u0633\u062a \u0648 \u0627\u0645\u06a9\u0627\u0646 \u0627\u0631\u0633\u0627\u0644 \u0645\u0633\u062a\u0642\u06cc\u0645 \u062a\u0648\u0633\u0637 \u0641\u0631\u0648\u0634\u0646\u062f\u0647 \u062f\u0627\u0631\u062f."
      //     }, {
      //       "title": "\u0627\u0631\u0633\u0627\u0644 \u062a\u0648\u0633\u0637 \u062f\u06cc\u062c\u06cc\u200c\u06a9\u0627\u0644\u0627 \u0627\u0632 1 \u0631\u0648\u0632 \u06a9\u0627\u0631\u06cc \u062f\u06cc\u06af\u0631",
      //       "description": "\u0627\u06cc\u0646 \u06a9\u0627\u0644\u0627 \u067e\u0633 \u0627\u0632 \u0645\u062f\u062a \u0632\u0645\u0627\u0646 \u0645\u0634\u062e\u0635 \u0634\u062f\u0647 \u062a\u0648\u0633\u0637 \u0641\u0631\u0648\u0634\u0646\u062f\u0647 \u062f\u0631 \u0627\u0646\u0628\u0627\u0631 \u062f\u06cc\u062c\u06cc\u200c\u06a9\u0627\u0644\u0627 \u062a\u0627\u0645\u06cc\u0646 \u0648 \u0622\u0645\u0627\u062f\u0647 \u067e\u0631\u062f\u0627\u0632\u0634 \u0645\u06cc\u200c\u06af\u0631\u062f\u062f \u0648 \u062a\u0648\u0633\u0637 \u067e\u06cc\u06a9 \u062f\u06cc\u062c\u06cc\u200c\u06a9\u0627\u0644\u0627 \u062f\u0631 \u0628\u0627\u0632\u0647 \u0627\u0646\u062a\u062e\u0627\u0628\u06cc \u0627\u0631\u0633\u0627\u0644 \u062e\u0648\u0627\u0647\u062f \u0634\u062f."
      //     }],
      //     "hasLeadTime": false,
      //     "badge_type": "without_lead_time"
      //   },
      //   "newProviderData": [{
      //     "type": "digikala",
      //     "has_lead_time": true,
      //     "text": "\u0627\u0631\u0633\u0627\u0644 \u062f\u06cc\u062c\u06cc\u200c\u06a9\u0627\u0644\u0627 \u0627\u0632 1 \u0631\u0648\u0632 \u06a9\u0627\u0631\u06cc \u062f\u06cc\u06af\u0631"
      //   }, {
      //     "type": "seller",
      //     "has_lead_time": false,
      //     "text": "\u0627\u0631\u0633\u0627\u0644 \u0641\u0631\u0648\u0634\u0646\u062f\u0647"
      //   }],
      //   "isExistsInWarehouse": true
      // },
      // "15488759": {
      //   "id": 15488759,
      //   "active": true,
      //   "active_digistyle": true,
      //   "ovl_selling_active": true,
      //   "title": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0627\u067e\u0644 \u0645\u062f\u0644 iPhone 12 Pro Max A2412 \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 512 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a | \u0645\u0634\u06a9\u06cc | \u06af\u0627\u0631\u0627\u0646\u062a\u06cc 18 \u0645\u0627\u0647\u0647 \u0647\u0645\u0631\u0627\u0647 \u06af\u0633\u062a\u0631 \u0646\u0642\u0631\u0647 \u0641\u0627\u0645",
      //   "color": {
      //     "id": 1,
      //     "title": "\u0645\u0634\u06a9\u06cc",
      //     "code": "#212121",
      //     "hexCode": "#212121",
      //     "hex_code": "#212121"
      //   },
      //   "size": [],
      //   "site": "digikala",
      //   "warranty": {
      //     "id": 4832,
      //     "title": "\u06af\u0627\u0631\u0627\u0646\u062a\u06cc 18 \u0645\u0627\u0647\u0647 \u0647\u0645\u0631\u0627\u0647 \u06af\u0633\u062a\u0631 \u0646\u0642\u0631\u0647 \u0641\u0627\u0645",
      //     "description": null,
      //     "phone": null,
      //     "address": null,
      //     "working_hours": null,
      //     "condition": null
      //   },
      //   "marketplace_seller": {
      //     "id": 517122,
      //     "name": "\u0647\u0645\u0631\u0627\u0647 \u0645\u0627\u06a9\u0627\u0646",
      //     "rate": 82,
      //     "rateCount": 65,
      //     "rating": {
      //       "cancel_percentage": 98.9,
      //       "cancel_summarize": "very_bad",
      //       "return_percentage": 100,
      //       "return_summarize": "excellent",
      //       "ship_on_time_percentage": 100,
      //       "ship_on_time_summarize": "excellent",
      //       "final_score": 3.5,
      //       "final_percentage": 70
      //     },
      //     "stars": 3.5,
      //     "is_trusted": false,
      //     "is_official_seller": false,
      //     "is_roosta": false,
      //     "url": "\/seller\/cwe4n\/",
      //     "registerTimeAgo": "4 \u0645\u0627\u0647, 3 \u0647\u0641\u062a\u0647"
      //   },
      //   "leadTime": 1,
      //   "shipping_type": "both",
      //   "gifts": [],
      //   "gift_product_ids": [],
      //   "seller_lead_time": 0,
      //   "market_place_selling_stock": 2,
      //   "is_fresh": false,
      //   "scheduled_stock": false,
      //   "promotion_price_id": null,
      //   "is_digikala_owner": false,
      //   "rank": 96.1,
      //   "sr": null,
      //   "has_similar_variants": false,
      //   "fast_shopping_badge": false,
      //   "fast_shopping_confirm": false,
      //   "is_multi_warehouse": false,
      //   "is_ship_by_seller": true,
      //   "is_eligible_for_jet_delivery": false,
      //   "plus_cash_back": null,
      //   "stats": null,
      //   "available_on_website": true,
      //   "provider": "both",
      //   "is_heavy": false,
      //   "is_electronic": false,
      //   "sbs_seller_cities": [1698, 2464, 2438, 2445, 1623, 1855, 1516, 2275, 1476, 1386, 1437, 2176, 2589, 2196, 1983],
      //   "price_list": {
      //     "id": 423378191,
      //     "discount_percent": null,
      //     "rrp_price": 518900000000,
      //     "selling_price": 518900000,
      //     "is_incredible_offer": false,
      //     "is_plus_offer": false,
      //     "is_sponsored_offer": false,
      //     "is_locked_for_plus": false,
      //     "promotion_id": null,
      //     "timer": null,
      //     "pre_sell": false,
      //     "variant_id": 15488759,
      //     "orderLimit": 1,
      //     "initial_limit": null,
      //     "tags": null,
      //     "cache_key_created_at": "2021-04-19 14:07:40",
      //     "cache_update_source": "supernova-digikala-bellatrix",
      //     "discount_amount": 0,
      //     "discount": 0,
      //     "show_discount_badge": false,
      //     "marketable_stock": 2,
      //     "plus_variant_cash_back": 0
      //   },
      //   "addToCartUrl": "\/cart\/add\/15488759\/1\/",
      //   "addToYaldaCartUrl": "\/ajax\/cart\/move\/save-for-yalda\/15488759\/",
      //   "dcPoint": 150,
      //   "is_free_shipment": true,
      //   "providerData": {
      //     "description": "\u0645\u0648\u062c\u0648\u062f \u062f\u0631 \u0627\u0646\u0628\u0627\u0631 \u0641\u0631\u0648\u0634\u0646\u062f\u0647",
      //     "providers": [{
      //       "title": "\u0627\u0631\u0633\u0627\u0644 \u062a\u0648\u0633\u0637 \u0641\u0631\u0648\u0634\u0646\u062f\u0647",
      //       "description": "\u0627\u06cc\u0646 \u06a9\u0627\u0644\u0627 \u062f\u0631 \u0627\u0646\u0628\u0627\u0631 \u0641\u0631\u0648\u0634\u0646\u062f\u0647 \u0645\u0648\u062c\u0648\u062f \u0648 \u0622\u0645\u0627\u062f\u0647 \u067e\u0631\u062f\u0627\u0632\u0634 \u0627\u0633\u062a \u0648 \u0627\u0645\u06a9\u0627\u0646 \u0627\u0631\u0633\u0627\u0644 \u0645\u0633\u062a\u0642\u06cc\u0645 \u062a\u0648\u0633\u0637 \u0641\u0631\u0648\u0634\u0646\u062f\u0647 \u062f\u0627\u0631\u062f."
      //     }, {
      //       "title": "\u0627\u0631\u0633\u0627\u0644 \u062a\u0648\u0633\u0637 \u062f\u06cc\u062c\u06cc\u200c\u06a9\u0627\u0644\u0627 \u0627\u0632 1 \u0631\u0648\u0632 \u06a9\u0627\u0631\u06cc \u062f\u06cc\u06af\u0631",
      //       "description": "\u0627\u06cc\u0646 \u06a9\u0627\u0644\u0627 \u067e\u0633 \u0627\u0632 \u0645\u062f\u062a \u0632\u0645\u0627\u0646 \u0645\u0634\u062e\u0635 \u0634\u062f\u0647 \u062a\u0648\u0633\u0637 \u0641\u0631\u0648\u0634\u0646\u062f\u0647 \u062f\u0631 \u0627\u0646\u0628\u0627\u0631 \u062f\u06cc\u062c\u06cc\u200c\u06a9\u0627\u0644\u0627 \u062a\u0627\u0645\u06cc\u0646 \u0648 \u0622\u0645\u0627\u062f\u0647 \u067e\u0631\u062f\u0627\u0632\u0634 \u0645\u06cc\u200c\u06af\u0631\u062f\u062f \u0648 \u062a\u0648\u0633\u0637 \u067e\u06cc\u06a9 \u062f\u06cc\u062c\u06cc\u200c\u06a9\u0627\u0644\u0627 \u062f\u0631 \u0628\u0627\u0632\u0647 \u0627\u0646\u062a\u062e\u0627\u0628\u06cc \u0627\u0631\u0633\u0627\u0644 \u062e\u0648\u0627\u0647\u062f \u0634\u062f."
      //     }],
      //     "hasLeadTime": false,
      //     "badge_type": "without_lead_time"
      //   },
      //   "newProviderData": [{
      //     "type": "digikala",
      //     "has_lead_time": true,
      //     "text": "\u0627\u0631\u0633\u0627\u0644 \u062f\u06cc\u062c\u06cc\u200c\u06a9\u0627\u0644\u0627 \u0627\u0632 1 \u0631\u0648\u0632 \u06a9\u0627\u0631\u06cc \u062f\u06cc\u06af\u0631"
      //   }, {
      //     "type": "seller",
      //     "has_lead_time": false,
      //     "text": "\u0627\u0631\u0633\u0627\u0644 \u0641\u0631\u0648\u0634\u0646\u062f\u0647"
      //   }],
      //   "isExistsInWarehouse": true
      // },
      // "14209917": {
      //   "id": 14209917,
      //   "active": true,
      //   "active_digistyle": true,
      //   "ovl_selling_active": true,
      //   "title": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0627\u067e\u0644 \u0645\u062f\u0644 iPhone 12 Pro Max A2412 \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 512 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a | \u0637\u0644\u0627\u06cc\u06cc | \u06af\u0627\u0631\u0627\u0646\u062a\u06cc 18 \u0645\u0627\u0647\u0647 \u0647\u0645\u0631\u0627\u0647 \u06af\u0633\u062a\u0631 \u0646\u0642\u0631\u0647 \u0641\u0627\u0645",
      //   "color": {
      //     "id": 15,
      //     "title": "\u0637\u0644\u0627\u06cc\u06cc",
      //     "code": "#c99212",
      //     "hexCode": "#c99212",
      //     "hex_code": "#c99212"
      //   },
      //   "size": [],
      //   "site": "digikala",
      //   "warranty": {
      //     "id": 4832,
      //     "title": "\u06af\u0627\u0631\u0627\u0646\u062a\u06cc 18 \u0645\u0627\u0647\u0647 \u0647\u0645\u0631\u0627\u0647 \u06af\u0633\u062a\u0631 \u0646\u0642\u0631\u0647 \u0641\u0627\u0645",
      //     "description": null,
      //     "phone": null,
      //     "address": null,
      //     "working_hours": null,
      //     "condition": null
      //   },
      //   "marketplace_seller": {
      //     "id": 4064,
      //     "name": "\u0634\u0627\u062f\u06cc \u0644\u0646\u062f",
      //     "rate": 81,
      //     "rateCount": 2468,
      //     "rating": {
      //       "cancel_percentage": 99.8,
      //       "cancel_summarize": "excellent",
      //       "return_percentage": 99.9,
      //       "return_summarize": "excellent",
      //       "ship_on_time_percentage": 100,
      //       "ship_on_time_summarize": "excellent",
      //       "final_score": 5,
      //       "final_percentage": 100
      //     },
      //     "stars": 5,
      //     "is_trusted": false,
      //     "is_official_seller": false,
      //     "is_roosta": false,
      //     "url": "\/seller\/5ac7s\/",
      //     "registerTimeAgo": "3 \u0633\u0627\u0644, 3 \u0645\u0627\u0647"
      //   },
      //   "leadTime": 1,
      //   "shipping_type": "both",
      //   "gifts": [],
      //   "gift_product_ids": [],
      //   "seller_lead_time": 1,
      //   "market_place_selling_stock": 1,
      //   "is_fresh": false,
      //   "scheduled_stock": false,
      //   "promotion_price_id": null,
      //   "is_digikala_owner": false,
      //   "rank": 96.07,
      //   "sr": null,
      //   "has_similar_variants": true,
      //   "fast_shopping_badge": false,
      //   "fast_shopping_confirm": false,
      //   "is_multi_warehouse": false,
      //   "is_ship_by_seller": true,
      //   "is_eligible_for_jet_delivery": false,
      //   "plus_cash_back": null,
      //   "stats": null,
      //   "available_on_website": true,
      //   "provider": "both",
      //   "is_heavy": false,
      //   "is_electronic": false,
      //   "sbs_seller_cities": [1698],
      //   "price_list": {
      //     "id": 422138854,
      //     "discount_percent": null,
      //     "rrp_price": 519000000,
      //     "selling_price": 519000000,
      //     "is_incredible_offer": false,
      //     "is_plus_offer": false,
      //     "is_sponsored_offer": false,
      //     "is_locked_for_plus": false,
      //     "promotion_id": null,
      //     "timer": null,
      //     "pre_sell": false,
      //     "variant_id": 14209917,
      //     "orderLimit": 1,
      //     "initial_limit": null,
      //     "tags": null,
      //     "cache_key_created_at": "2021-04-18 14:54:43",
      //     "cache_update_source": "supernova-digikala-mobile",
      //     "discount_amount": 0,
      //     "discount": 0,
      //     "show_discount_badge": false,
      //     "marketable_stock": 1,
      //     "plus_variant_cash_back": 0
      //   },
      //   "addToCartUrl": "\/cart\/add\/14209917\/1\/",
      //   "addToYaldaCartUrl": "\/ajax\/cart\/move\/save-for-yalda\/14209917\/",
      //   "dcPoint": 150,
      //   "is_free_shipment": true,
      //   "providerData": {
      //     "description": "\u0645\u0648\u062c\u0648\u062f \u062f\u0631 \u0627\u0646\u0628\u0627\u0631 \u0641\u0631\u0648\u0634\u0646\u062f\u0647",
      //     "providers": [{
      //       "title": "\u0627\u0631\u0633\u0627\u0644 \u062a\u0648\u0633\u0637 \u0641\u0631\u0648\u0634\u0646\u062f\u0647",
      //       "description": "\u0627\u06cc\u0646 \u06a9\u0627\u0644\u0627 \u062f\u0631 \u0627\u0646\u0628\u0627\u0631 \u0641\u0631\u0648\u0634\u0646\u062f\u0647 \u0645\u0648\u062c\u0648\u062f \u0648 \u0622\u0645\u0627\u062f\u0647 \u067e\u0631\u062f\u0627\u0632\u0634 \u0627\u0633\u062a \u0648 \u0627\u0645\u06a9\u0627\u0646 \u0627\u0631\u0633\u0627\u0644 \u0645\u0633\u062a\u0642\u06cc\u0645 \u062a\u0648\u0633\u0637 \u0641\u0631\u0648\u0634\u0646\u062f\u0647 \u062f\u0627\u0631\u062f."
      //     }, {
      //       "title": "\u0627\u0631\u0633\u0627\u0644 \u062a\u0648\u0633\u0637 \u062f\u06cc\u062c\u06cc\u200c\u06a9\u0627\u0644\u0627 \u0627\u0632 1 \u0631\u0648\u0632 \u06a9\u0627\u0631\u06cc \u062f\u06cc\u06af\u0631",
      //       "description": "\u0627\u06cc\u0646 \u06a9\u0627\u0644\u0627 \u067e\u0633 \u0627\u0632 \u0645\u062f\u062a \u0632\u0645\u0627\u0646 \u0645\u0634\u062e\u0635 \u0634\u062f\u0647 \u062a\u0648\u0633\u0637 \u0641\u0631\u0648\u0634\u0646\u062f\u0647 \u062f\u0631 \u0627\u0646\u0628\u0627\u0631 \u062f\u06cc\u062c\u06cc\u200c\u06a9\u0627\u0644\u0627 \u062a\u0627\u0645\u06cc\u0646 \u0648 \u0622\u0645\u0627\u062f\u0647 \u067e\u0631\u062f\u0627\u0632\u0634 \u0645\u06cc\u200c\u06af\u0631\u062f\u062f \u0648 \u062a\u0648\u0633\u0637 \u067e\u06cc\u06a9 \u062f\u06cc\u062c\u06cc\u200c\u06a9\u0627\u0644\u0627 \u062f\u0631 \u0628\u0627\u0632\u0647 \u0627\u0646\u062a\u062e\u0627\u0628\u06cc \u0627\u0631\u0633\u0627\u0644 \u062e\u0648\u0627\u0647\u062f \u0634\u062f."
      //     }],
      //     "hasLeadTime": false,
      //     "badge_type": "without_lead_time"
      //   },
      //   "newProviderData": [{
      //     "type": "digikala",
      //     "has_lead_time": true,
      //     "text": "\u0627\u0631\u0633\u0627\u0644 \u062f\u06cc\u062c\u06cc\u200c\u06a9\u0627\u0644\u0627 \u0627\u0632 1 \u0631\u0648\u0632 \u06a9\u0627\u0631\u06cc \u062f\u06cc\u06af\u0631"
      //   }, {
      //     "type": "seller",
      //     "has_lead_time": true,
      //     "text": "\u0627\u0631\u0633\u0627\u0644 \u0641\u0631\u0648\u0634\u0646\u062f\u0647 \u0627\u0632 1 \u0631\u0648\u0632 \u06a9\u0627\u0631\u06cc \u062f\u06cc\u06af\u0631"
      //   }],
      //   "isExistsInWarehouse": false
      // },
      // "15865260": {
      //   "id": 15865260,
      //   "active": true,
      //   "active_digistyle": true,
      //   "ovl_selling_active": true,
      //   "title": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0627\u067e\u0644 \u0645\u062f\u0644 iPhone 12 Pro Max A2412 \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 512 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a | \u0622\u0628\u06cc \u062a\u06cc\u0631\u0647 | \u06af\u0627\u0631\u0627\u0646\u062a\u06cc 18 \u0645\u0627\u0647\u0647 \u0647\u0645\u0627 \u062a\u0644\u06a9\u0627\u0645",
      //   "color": {
      //     "id": 42,
      //     "title": "\u0622\u0628\u06cc \u062a\u06cc\u0631\u0647",
      //     "code": "#4c5e74",
      //     "hexCode": "#4c5e74",
      //     "hex_code": "#4c5e74"
      //   },
      //   "size": [],
      //   "site": "digikala",
      //   "warranty": {
      //     "id": 2817,
      //     "title": "\u06af\u0627\u0631\u0627\u0646\u062a\u06cc 18 \u0645\u0627\u0647\u0647 \u0647\u0645\u0627 \u062a\u0644\u06a9\u0627\u0645",
      //     "description": null,
      //     "phone": null,
      //     "address": null,
      //     "working_hours": null,
      //     "condition": null
      //   },
      //   "marketplace_seller": {
      //     "id": 439730,
      //     "name": "\u0645\u0648\u0628\u0627\u06cc\u0644 \u06af\u0644\u0633\u062a\u0627\u0646",
      //     "rate": 0,
      //     "rateCount": 0,
      //     "rating": {
      //       "cancel_percentage": 0,
      //       "cancel_summarize": "very_bad",
      //       "return_percentage": 0,
      //       "return_summarize": "very_bad",
      //       "ship_on_time_percentage": 0,
      //       "ship_on_time_summarize": "very_bad",
      //       "final_score": 0,
      //       "final_percentage": 0
      //     },
      //     "stars": 0,
      //     "is_trusted": false,
      //     "is_official_seller": false,
      //     "is_roosta": false,
      //     "url": "\/seller\/cnfht\/",
      //     "registerTimeAgo": "6 \u0645\u0627\u0647, 3 \u0647\u0641\u062a\u0647"
      //   },
      //   "leadTime": 2,
      //   "shipping_type": "digikala",
      //   "gifts": [],
      //   "gift_product_ids": [],
      //   "seller_lead_time": 0,
      //   "market_place_selling_stock": 1,
      //   "is_fresh": false,
      //   "scheduled_stock": false,
      //   "promotion_price_id": null,
      //   "is_digikala_owner": false,
      //   "rank": 91.03,
      //   "sr": null,
      //   "has_similar_variants": false,
      //   "fast_shopping_badge": false,
      //   "fast_shopping_confirm": false,
      //   "is_multi_warehouse": false,
      //   "is_ship_by_seller": false,
      //   "is_eligible_for_jet_delivery": false,
      //   "plus_cash_back": null,
      //   "stats": null,
      //   "available_on_website": true,
      //   "provider": "digikala",
      //   "is_heavy": false,
      //   "is_electronic": false,
      //   "sbs_seller_cities": [],
      //   "price_list": {
      //     "id": 423498593,
      //     "discount_percent": null,
      //     "rrp_price": 530000000,
      //     "selling_price": 530000000,
      //     "is_incredible_offer": false,
      //     "is_plus_offer": false,
      //     "is_sponsored_offer": false,
      //     "is_locked_for_plus": false,
      //     "promotion_id": null,
      //     "timer": null,
      //     "pre_sell": false,
      //     "variant_id": 15865260,
      //     "orderLimit": 1,
      //     "initial_limit": null,
      //     "tags": null,
      //     "cache_key_created_at": "2021-04-19 16:19:45",
      //     "cache_update_source": "supernova-digikala-desktop",
      //     "discount_amount": 0,
      //     "discount": 0,
      //     "show_discount_badge": false,
      //     "marketable_stock": 1,
      //     "plus_variant_cash_back": 0
      //   },
      //   "addToCartUrl": "\/cart\/add\/15865260\/1\/",
      //   "addToYaldaCartUrl": "\/ajax\/cart\/move\/save-for-yalda\/15865260\/",
      //   "dcPoint": 150,
      //   "is_free_shipment": true,
      //   "providerData": {
      //     "description": "\u0645\u0648\u062c\u0648\u062f \u062f\u0631 \u0627\u0646\u0628\u0627\u0631 \u0641\u0631\u0648\u0634\u0646\u062f\u0647",
      //     "providers": [{
      //       "title": "\u0627\u0631\u0633\u0627\u0644 \u062a\u0648\u0633\u0637 \u062f\u06cc\u062c\u06cc\u200c\u06a9\u0627\u0644\u0627 \u0627\u0632 2 \u0631\u0648\u0632 \u06a9\u0627\u0631\u06cc \u062f\u06cc\u06af\u0631",
      //       "description": "\u0627\u06cc\u0646 \u06a9\u0627\u0644\u0627 \u067e\u0633 \u0627\u0632 \u0645\u062f\u062a \u0632\u0645\u0627\u0646 \u0645\u0634\u062e\u0635 \u0634\u062f\u0647 \u062a\u0648\u0633\u0637 \u0641\u0631\u0648\u0634\u0646\u062f\u0647 \u062f\u0631 \u0627\u0646\u0628\u0627\u0631 \u062f\u06cc\u062c\u06cc\u200c\u06a9\u0627\u0644\u0627 \u062a\u0627\u0645\u06cc\u0646 \u0648 \u0622\u0645\u0627\u062f\u0647 \u067e\u0631\u062f\u0627\u0632\u0634 \u0645\u06cc\u200c\u06af\u0631\u062f\u062f \u0648 \u062a\u0648\u0633\u0637 \u067e\u06cc\u06a9 \u062f\u06cc\u062c\u06cc\u200c\u06a9\u0627\u0644\u0627 \u062f\u0631 \u0628\u0627\u0632\u0647 \u0627\u0646\u062a\u062e\u0627\u0628\u06cc \u0627\u0631\u0633\u0627\u0644 \u062e\u0648\u0627\u0647\u062f \u0634\u062f."
      //     }],
      //     "hasLeadTime": true,
      //     "badge_type": "with_lead_time"
      //   },
      //   "newProviderData": [{
      //     "type": "digikala",
      //     "has_lead_time": true,
      //     "text": "\u0627\u0631\u0633\u0627\u0644 \u062f\u06cc\u062c\u06cc\u200c\u06a9\u0627\u0644\u0627 \u0627\u0632 2 \u0631\u0648\u0632 \u06a9\u0627\u0631\u06cc \u062f\u06cc\u06af\u0631"
      //   }],
      //   "isExistsInWarehouse": false
      // }
    };
    var defaultVariantId = {{ $item->variant->id }};
    var maxVisibleVariant = 3;
    var maxVisibleSupplier = 3;
    var hasColorOrSize = true;
    var sellerStatistics = [];
    var hasQuickView = false;
    var cart = {"cartId": 0, "variants": [], "products": [], "itemCount": 0, "isPlusUser": false};
    var productId = {{ $product->id }};
    var videos = {
      "8339": {
        "src": "https:\/\/dkstatics-public.digikala.com\/digikala-video\/3fc190b9a3418b2189cf418fd6dbd93ea646dc13_1606733823.mp4",
        "playlist": "https:\/\/dkstatics-public.digikala.com\/digikala-video-playlist\/65a9742d046a76387e9514dfea87b2de0594e0e2_1606734556.m3u8",
        "sources": [{"file": "https:\/\/dkstatics-public.digikala.com\/digikala-video-playlist\/65a9742d046a76387e9514dfea87b2de0594e0e2_1606734556.m3u8"}, [{"file": "https:\/\/dkstatics-public.digikala.com\/digikala-video\/bb17e3c7ca87ea4e1cfc5702f8649f55cb413f5d_1606733850.mp4"}], [{"file": "https:\/\/dkstatics-public.digikala.com\/digikala-video\/1249707355e3e3fcf21b52e0b1b9ac0c10298eb5_1606734555.mp4"}]],
        "cover_big": "https:\/\/dkstatics-public.digikala.com\/digikala-video-cover\/2088368572727bc4faca00bc828ca8196a65d3a8_1606733831.jpg?x-oss-process=image\/resize,w_600\/quality,q_80",
        "cover_thumb_small": "https:\/\/dkstatics-public.digikala.com\/digikala-video-cover\/2088368572727bc4faca00bc828ca8196a65d3a8_1606733831.jpg?x-oss-process=image\/resize,m_fill,h_64,w_64",
        "cover_thumb_big": "https:\/\/dkstatics-public.digikala.com\/digikala-video-cover\/2088368572727bc4faca00bc828ca8196a65d3a8_1606733831.jpg?x-oss-process=image\/resize,m_fill,h_115,w_115",
        "title": "iphone 12 pro",
        "description": "",
        "duration": 140
      }
    };
    var enhanced_ecommerce = {
      "id": {{ $product->id }},
      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0627\u067e\u0644 \u0645\u062f\u0644 iPhone 12 Pro Max A2412 \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 512 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
      "category": "MO",
      "category_id": 11,
      "brand": "apple",
      "variant": {{ $item->variant->id }},
      "price": 509900000,
      "discount_percent": 0,
      "quantity": 1
    };
    var categoryId = 11;
    var nowTimeInUTC = "2021-04-19 16:52:13";
    var emarsysCategoryBreadcrumb = [];
    var emarsysBrand = "\u0627\u067e\u0644";
    var ecpd2 = {
      "id": {{ $product->id }},
      "title": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0627\u067e\u0644 \u0645\u062f\u0644 iPhone 12 Pro Max A2412 \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 512 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
      "has_gift": false,
      "is_exclusive": false,
      "is_incredible": 0,
      "is_selling_and_sales": 0,
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0645\u0648\u0628\u0627\u06cc\u0644", "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644"],
      "supply_category": ["MO", "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644"],
      "category": {"id": 11, "title": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644"},
      "brand": {"id": 10, "title": "\u0627\u067e\u0644"},
      "price": {"selling_price": 509900000, "discount_percent": 0},
      "status": "marketable",
      "variants": [{"id": {{ $item->variant->id }}, "seller": 4064, "color": 11, "size": 0, "warranty": 4832}, {
        "id": 14976390,
        "seller": 106110,
        "color": 15,
        "size": 0,
        "warranty": 4832
      }, {"id": 15859017, "seller": 517122, "color": 11, "size": 0, "warranty": 4832}, {
        "id": 15488759,
        "seller": 517122,
        "color": 1,
        "size": 0,
        "warranty": 4832
      }, {"id": 14209917, "seller": 4064, "color": 15, "size": 0, "warranty": 4832}, {
        "id": 15865260,
        "seller": 439730,
        "color": 42,
        "size": 0,
        "warranty": 2817
      }],
      "image_url": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/be7a0e9bf7866759fa3cea7648b149f589a01040_1607438980.jpg?x-oss-process=image\/resize,m_lfit,h_350,w_350\/quality,q_60",
      "product_url": "https:\/\/www.digikala.com\/product\/dkp-{{ $product->id }}"
    };
    var isbn = null;
    var min_price_in_last_month = 499990000;
    var isPDP = true;
    var faqPageTitle = "pdp_section";
    var isAnanasFriendly = true;
    var userId = null;
    var adroRCActivation = true;
    var loginRegisterUrlWithBack = "\/users\/login-register\/?_back=https:\/\/www.digikala.com\/product\/dkp-{{ $product->id }}\/%25DA%25AF%25D9%2588%25D8%25B4%25DB%258C-%25D9%2585%25D9%2588%25D8%25A8%25D8%25A7%25DB%258C%25D9%2584-%25D8%25A7%25D9%25BE%25D9%2584-%25D9%2585%25D8%25AF%25D9%2584-iphone-12-pro-max-a2412-%25D8%25AF%25D9%2588-%25D8%25B3%25DB%258C%25D9%2585-%25DA%25A9%25D8%25A7%25D8%25B1%25D8%25AA-%25D8%25B8%25D8%25B1%25D9%2581%25DB%258C%25D8%25AA-512-%25DA%25AF%25DB%258C%25DA%25AF%25D8%25A7%25D8%25A8%25D8%25A7%25DB%258C%25D8%25AA";
    var isNewCustomer = false;
    var digiclubLuckyDrawEndTime = "2021-06-23 15:30:28";
    var activateUrl = "\/digiclub\/activate\/";
  </script>

  <script src="{{ asset('assets/js/sentry.js') }} "></script>
  <script src="{{ asset('assets/new/js/jwplayer.js') }} "></script>
  <script src="{{ asset('assets/new/js/jwpsrv.js') }} "></script>
  <script src="{{ asset('assets/new/js/jwplayer.core.controls.js') }} "></script>
  <script src="{{ asset('assets/new/js/jwplayer.core.controls.html5.js') }} "></script>
  <script src="{{ asset('assets/new/js/provider.hlsjs.js') }} "></script>
  <script src="{{ asset('assets/new/js/video-js.min.js') }} "></script>
  <script src="{{ asset('assets/new/js/videojs-contrib-quality-levels.min.js') }} "></script>
  <script src="{{ asset('assets/new/js/videojs-hls-quality-selector.min.js') }} "></script>
  <script src="{{ asset('assets/new/js/videojs-hls-quality-selector1.min.js') }} "></script>
  <script src="{{ asset('assets/new/js/url.min.js') }} "></script>

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
      {{--      <script type="text/html" id="emarsys-template">--}}
      {{--        <![CDATA[--}}

      {{--        {{ if (SC.page.products.length) { }}--}}
      {{--        <div class="swiper-container swiper-container-horizontal js-swiper-emarsys js-snt-carousel"--}}
      {{--             data-snt-carousel-length="{{= SC.page.products.length }}">--}}
      {{--          <div class="swiper-wrapper">--}}
      {{--            {{ for (var loopIndex=0; loopIndex< SC.page.products.length; loopIndex++) { }}--}}
      {{--            {{ var p = SC.page.products[loopIndex]; }}--}}
      {{--            <div class="swiper-slide" data-carousel="{{= SC.recommender.container.id}}" data-id="{{= p.id }}"><a--}}
      {{--                data-snt-event="dkRecommendationClick"--}}
      {{--                data-snt-params='{"type":"carousel","item":"product-click","item_option":"{{= p.id }}"}'--}}
      {{--                class="c-product-box js-url js-snt-carousel_product" data-scarabitem="{{= p.id }}"--}}
      {{--                data-snt-position="{{= loopIndex+1 }}" title="{{=  p.title}}"--}}
      {{--                href="{{= p.link.replace('http://www.digikala.com/', '/').replace('https://www.digikala.com/', '/').toLowerCase() }}"><span--}}
      {{--                  class="c-product-box__img"><img alt="{{=  p.title }}" width="350"--}}
      {{--                                                  src="{{= p.image.replace('http://', '//').replace('/120/', '/220/') }}"--}}
      {{--                                                  class="swiper-lazy">--}}
      {{--                                    {{if(p.c_fast_shopping_badge){}}--}}
      {{--                                        <img class="c-product-box__fmcg-symbol js-fresh-badge" src="/fresh-badge.svg">--}}
      {{--                                    {{ } }}--}}
      {{--                                </span><span--}}
      {{--                  class="c-product-box__title">{{= p.title.substr(0, 50) + (p.title.length > 50 ? '...' : '') }}</span>--}}
      {{--                <div class="c-product-box__price-row">--}}
      {{--                  <div class="c-product-box__price-item">--}}
      {{--                    <div class="c-new-price">--}}
      {{--                      <div class="c-new-price__old-value">--}}
      {{--                        {{ if (p.msrp  > p.price) { }}--}}
      {{--                        <del>{{= Emarsys.convertToFaDigit(Emarsys.formatCurrency(p.msrp, false, '' ))}}</del>--}}
      {{--                        <span class="c-new-price__discount">{{= Emarsys.convertToFaDigit(Math.round((p.msrp - p.price) / p.msrp * 100) + '') }}٪</span>--}}
      {{--                        {{ } }}--}}
      {{--                      </div>--}}
      {{--                      <div class="c-new-price__value">--}}
      {{--                        {{= Emarsys.convertToFaDigit(Emarsys.formatCurrency(p.price, false, '' ))}}--}}
      {{--                        <span class="c-new-price__currency">تومان</span></div>--}}
      {{--                    </div>--}}
      {{--                  </div>--}}
      {{--                </div>--}}
      {{--              </a></div>--}}
      {{--            {{ } }}--}}
      {{--          </div>--}}
      {{--          <div data-snt-event="dkRecommendationClick"--}}
      {{--               data-snt-params='{"type":"carousel","item":"nav-click","item_option":"right"}'--}}
      {{--               class="swiper-button-prev js-swiper-button-prev"></div>--}}
      {{--          <div data-snt-event="dkRecommendationClick"--}}
      {{--               data-snt-params='{"type":"carousel","item":"nav-click","item_option":"right"}'--}}
      {{--               class="swiper-button-next js-swiper-button-next"></div>--}}
      {{--        </div>--}}
      {{--        {{ } }}--}}

      {{--        ]]></script>--}}
      <div data-product-id="{{ $product->id }}" class="o-page js-product-page c-product-page">
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

                    {{--                    <div class="c-product__engagement-item js-scroll-to-tab" data-id="questions"--}}
                    {{--                         data-gtm-vis-first-on-screen-9070001_346="7786"--}}
                    {{--                         data-gtm-vis-total-visible-time-9070001_346="100" data-gtm-vis-has-fired-9070001_346="1">--}}
                    {{--                      <div class="c-product__engagement-link" data-activate-tab="questions">--}}
                    {{--                        ۲۲--}}
                    {{--                        پرسش و پاسخ--}}
                    {{--                      </div>--}}
                    {{--                    </div>--}}


                  </div>

                  <div class="c-product__config-wrapper">

                    @if ($product->variants()->exists())
                      <div class="c-product__circle-variants">
                        <div class="c-product__circle-variants__title">
                          <header>رنگ :</header>
                          <span class="js-color-title"></span></div>
                        <ul class="js-product-variants">
                          @foreach ($product->variants as $item)
                            @if($item->variant()->exists() && !is_null($item->variant->value))
                              <li class="js-c-ui-variant c-circle-variant__item" data-event="config_change"
                                  data-event-category="product_page" data-event-label="change: color">
                                <label data-snt-event="dkProductPageClick"
                                       data-snt-params="{&quot;item&quot;:&quot;change-color&quot;,&quot;item_option&quot;:&quot;{{ $item->variant->name }}&quot;}"
                                       class="js-circle-variant-color c-circle-variant c-circle-variant--color"
                                       data-code="#9E9E9E">
                                  <input type="radio" value="{{ $item->variant->id }}" name="color" id="variant"
                                         class="js-variant-selector js-color-filter-item" checked=""
                                         data-title="{{ $item->variant->name }}" data-type="color">
                                  <span class="c-circle-variant__border"></span>
                                  <span
                                    class="c-tooltip c-tooltip--small-bottom c-tooltip--short">{{ $item->variant->name }}</span>
                                  <span class="c-circle-variant__shape"
                                        style="background-color: {{ $item->variant->value }}"></span>
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


                    <div class="c-product__params js-is-expandable" data-collapse-count="3">
                      <ul data-title="ویژگی‌های کالا">
                        @if ($product->attributes()->exists())
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
                        @endif


                        @if ($product->attributes()->exists())
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
                        @endif


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
                  </div>
                </div>
                <div class="c-product__summary js-product-summary" style="opacity: 1;">
                  <div class="c-box">
                    <div class="c-product__seller-info js-seller-info">
                      <div class="js-seller-info-changable c-product__seller-box">
                        <div class="c-product__seller-counter">
                          <div>فروشنده</div>
                        </div>
                        <div
                          class="c-product__seller-row c-product__seller-row--seller c-product__seller-row--clickable js-seller-info-seller js-seller-variant">
                          <i
                            class="c-product__seller-row--trusted-seller js-mini-not-digikala-seller js-mini-is-trusted u-hidden"></i>
                          <i
                            class="c-product__seller-row--official-seller js-mini-not-digikala-seller js-mini-is-official u-hidden"></i>
                          <div class="c-product__seller-row-main c-product__seller-row-main--arrow-left">
                            <div class="c-product__seller-first-line">
                              <span class="c-product__seller-name js-seller-name">{{ $fa_store_name }}</span>
                              <span
                                class="c-product__seller-details-badge-container js-seller-badge js-seller-trusted u-hidden">
                              <span class="c-badge-seller c-badge-seller--prominent">برگزیده</span>
                            </span>
                              <span
                                class="c-product__seller-details-badge-container js-seller-badge js-seller-official u-hidden">
                              <span class="c-badge-seller c-badge-seller--official">رسمی</span>
                            </span>
                            </div>
                            <div class="c-product__seller-second-line js-seller-final-score-container">
                              عملکرد:
                              <span class="u-text-bold js-seller-final-score">۳.۵</span>
                              از ۵
                              <span class="js-seller-rate-container u-hidden">
                              <span class="u-divider"></span>
                              <span class="u-text-bold js-seller-rate">
                                  ٪
                              </span>
                              رضایت از کالا
                            </span>
                            </div>
                            <div class="c-product__seller-second-line js-seller-empty-score u-hidden">
                              عملکرد محاسبه نشده
                            </div>
                          </div>
                        </div>
                        <div class="c-product-info-box js-seller-info-expand">
                          <div class="c-product-info-box__header">
                            <div class="c-product-info-box__header-back-btn js-product-info-box-back-btn"></div>
                            <div>
                              <label>اطلاعات تکمیلی فروشنده</label>
                              <span class="c-product-info-box__seller-info-modal js-seller-rate-info-modal"></span>
                            </div>
                          </div>
                          <div class="c-product-info-box__body-wrapper">
                            <div class="c-product-info-box__body">
                              <div class="u-p-16 c-product-info-box__seller-detail-box">
                                <div class="c-seller-rating js-buyBox-seller-info">
                                  <div class="c-seller-rating__title c-seller-rating__title--inBuyBox">
                                    <div class="js-sellerName">{{ $fa_store_name }}</div>
                                    <a class="js-sellerUrl" href="/seller/cwe۴n/">مشاهده دیگر کالا‌ها</a></div>
                                  {{--                                    <div class="c-seller-rating__subtitle js-seller-register-time">--}}
                                  {{--                                      عضویت از --}}
                                  {{--                                      <label class="u-mx-4 js-sellerTimeAgo">۴ ماه, ۳ هفته</label>--}}
                                  {{--                                      پیش--}}
                                  {{--                                    </div>--}}
                                  <div class="c-seller-rating__text">
                                    <div class="c-seller-rating__thin-text">عملکرد:</div>
                                    <div class="c-seller-rating__bold-text js-finalScore">۳.۵</div>
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
                                           data-value="98.9" data-level-1="98" data-level-2="96">
                                        <div
                                          class="c-round-progress__half c-round-progress__half--left js-round-progress-left"
                                          style="transform: unset;"></div>
                                        <div
                                          class="c-round-progress__half c-round-progress__half--right js-round-progress-right"
                                          style="transform: rotate(3.96deg);"></div>
                                        <div class="c-round-progress__value js-round-progress-text">۹۸.۹٪</div>
                                      </div>
                                      <div class="c-round-progress__label">تعهد ارسال</div>
                                    </div>
                                    <div class="c-round-progress__container">
                                      <div class="c-round-progress js-round-progress js-returnPer green"
                                           data-value="100" data-level-1="98" data-level-2="96">
                                        <div
                                          class="c-round-progress__half c-round-progress__half--left js-round-progress-left"
                                          style="transform: unset;"></div>
                                        <div
                                          class="c-round-progress__half c-round-progress__half--right js-round-progress-right"
                                          style="transform: rotate(0deg);"></div>
                                        <div class="c-round-progress__value js-round-progress-text">۱۰۰٪</div>
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
                          <div class="c-product__seller-row-main js-guarantee-text">
                            گارانتی ۱۸ ماهه همراه گستر نقره فام
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
                        <div
                          class="c-product__seller-row c-product__seller-row--column js-seller-info-shipment c-product__seller-row--clickable">
                          <div class="c-product__seller-row-main c-product__seller-row-main--arrow-left">
                          <span
                            class="c-product__delivery-warehouse js-provider-main-title c-product__delivery-warehouse--no-lead-time">موجود در انبار فروشنده</span>
                          </div>
                          <ul class="c-line-bullet-list c-product__sender-list js-provider-list">
                            <li class=""><span class="c-line-bullet-list__item  c-line-bullet-list__item--digikala ">ارسال {{ $fa_store_name }} از ۱ روز کاری دیگر</span><span
                                class="js-ab-shipment-free-badge u-hidden free-badge">رایگان</span></li>
                            <li class=""><span
                                class="c-line-bullet-list__item  c-line-bullet-list__item--seller no-lead-time">ارسال فروشنده</span><span
                                class="js-ab-shipment-free-badge u-hidden free-badge">رایگان</span></li>
                          </ul>
                        </div>
                        <div class="c-product-info-box js-shipment-info-expand">
                          <div class="c-product-info-box__header">
                            <div class="c-product-info-box__header-back-btn js-product-info-box-back-btn"></div>
                            جزئیات ارسال
                          </div>
                          <div class="c-product-info-box__body-wrapper">
                            <div class="c-product-info-box__body">
                              <div class="c-shipment-info-box__row js-shipment-info-main-container">
                                <div class="c-shipment-info-box__row--title">
                                  ارسال توسط فروشنده
                                  <span class="js-ab-shipment-free-badge u-hidden">رایگان</span></div>
                                <div class="c-shipment-info-box__row--content">
                                  این کالا در انبار فروشنده موجود و آماده پردازش است و امکان ارسال مستقیم توسط فروشنده
                                  دارد.
                                  <p class="free-badge js-ab-shipment-free-badge u-hidden">کالا‌هایی با قیمت بیش از ۳۰۰
                                    هزار تومان به صورت رایگان ارسال خواهند شد.</p></div>
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

                        <div
                          class="c-product__seller-row c-product__seller-row--best-price-row js-data-best-price u-hidden">
                          بهترین قیمت ۳۰ روز گذشته
                        </div>
                        <div class="c-product__seller-row c-product__seller-row--price">
                          <div class="c-product__seller-price-info">
                            <div class="c-product__seller-price-label">
                              قیمت فروشنده
                              <span class="js-dk-wiki-trigger c-wiki c-wiki__holder">
                              <span class="c-wiki-sign"></span>
                              <div class="c-wiki__container js-dk-wiki is-right">
                                <div class="c-wiki__arrow"></div>
                                <p
                                  class="c-wiki__text">
          این کالا توسط فروشنده آن، شادی لند، قیمت‌گذاری شده‌ است.
      </p>
                              </div>
                            </span>
                            </div>
                            <div class="c-product__seller-price-prev js-rrp-price u-hidden">
                              ۵۰,۹۹۰,۰۰۰
                            </div>
                            <div class="c-product__seller-price-off js-discount-value u-hidden">
                              ۰٪
                            </div>
                          </div>
                          <div class="c-product__seller-price-real">
                            <div class="c-product__seller-price-pure js-price-value">۵۱,۸۹۰,۰۰۰0000011</div>
                            تومان
                          </div>
                          <div
                            class="c-product__additional-item c-product__additional-item--no-icon js-price-discount-osm u-hidden">
                            <span class="js-discount-osm-value"></span>&nbsp; تومان
                            تخفیف سازمانی کسر گردیده است.
                          </div>
                        </div>
                      </div>
                      <div class="c-product__seller-row c-product__seller-row--add-to-cart">
                        <a
                          class="js-ab-product-action btn-add-to-cart btn-add-to-cart--full-width js-add-to-cart js-cart-page-add-to-cart js-btn-add-to-cart"
                          data-product-id="{{ $product->id }}" data-variant="{{ $item->variant->id }}"
                          href="/cart/add/15488759/1/"
                          data-event="add_to_cart" data-event-category="ecommerce"
                          data-event-label="price: 509900000 - seller: marketplace - seller_name: شادی لند - seller_rating: 81 - multiple_configs: True - position: 0">
                          <span class="btn-add-to-cart__txt">افزودن به سبد خرید</span>
                        </a>
                      </div>
                    </div>

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
                    {{--                    <img class="js-gallery-img" data-src="https://dkstatics-public.digikala.com/digikala-products/be7a0e9bf7866759fa3cea7648b149f589a01040_1607438980.jpg?x-oss-process=image/resize,m_lfit,h_600,w_600/quality,q_80" title="{{ $product->title_fa }}" alt="{{ $product->title_fa }}" data-zoom-image="https://dkstatics-public.digikala.com/digikala-products/be7a0e9bf7866759fa3cea7648b149f589a01040_1607438980.jpg?x-oss-process=image/resize,w_1280/quality,q_80" src="https://dkstatics-public.digikala.com/digikala-products/be7a0e9bf7866759fa3cea7648b149f589a01040_1607438980.jpg?x-oss-process=image/resize,m_lfit,h_600,w_600/quality,q_80"   loading="lazy">--}}
                    <div class="c-gallery__main-img-badges-container"></div>
                  </div>

                </div>
                <ul class="c-gallery__items">

                  @if($product->media()->exists())
                    @foreach($product->media as $key => $image)
                      <li class="js-product-thumb-img" data-slide-index="{{ $key+1 }}" data-event="album_usage"
                          data-event-category="product_page" data-event-label="{{ $product->id }}-num of pics:14">
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
          <div class="js-c-box-suppliers c-box-suppliers u-hidden" id="suppliers" xmlns="http://www.w3.org/1999/html">
            <div class="c-box-suppliers__headline-container">
              <div class="o-box__header"><span class="o-box__title">لیست فروشندگان این کالا</span></div>
              <div class="o-headline__sort u-hidden"><label>فیلتر فروشندگان بر اساس : </label>
                <div class="selectric-wrapper selectric-c-ui-select selectric-js-ui-select selectric-js-color-select">
                  <div class="selectric-hide-select"><select class="c-ui-select js-ui-select js-color-select"
                                                             data-type="color" tabindex="-1">
                      <option value="11">رنگ : خاکستری</option>
                      <option value="15">رنگ : طلایی</option>
                      <option value="1">رنگ : مشکی</option>
                    </select></div>
                  <div class="selectric"><span class="label">رنگ : مشکی</span><b class="button">▾</b></div>
                  <div class="selectric-items" tabindex="-1">
                    <div class="selectric-scroll">
                      <ul>
                        <li data-index="0" class="">رنگ : خاکستری</li>
                        <li data-index="1" class="">رنگ : طلایی</li>
                        <li data-index="2" class="last selected">رنگ : مشکی</li>
                      </ul>
                    </div>
                  </div>
                  <input class="u-hidden" tabindex="0"></div>
              </div>
            </div>
            <div class="c-box">
              <div class="c-table-suppliers js-c-table-suppliers--summary">
                <div class="c-table-suppliers__body">

                  @foreach ($product->variants as $item)
                    @if($item->variant()->exists() && !is_null($item->variant->value))

                      <div class="c-table-suppliers__row js-supplier" data-variant="{{ $item->variant->id }}">
                        <div class="c-table-suppliers__cell c-table-suppliers__cell--title">
                          <span class="c-table-suppliers__seller-icon "></span>
                          <div class="c-table-suppliers__seller-wrapper">
                            <p class="c-table-suppliers__seller-name">
                              <a data-snt-event="dkProductPageClick" data-snt-params="" href="">
                                شادی لند
                              </a>
                            </p>
                            <div class="c-table-suppliers__rating">
                              عملکرد:
                              <span class="u-text-bold">
                          ۵
                        </span>
                              از ۵
                            </div>
                            <p></p>
                          </div>
                          <div class="c-table-suppliers__seller-info summary-overlay">
                            <div class="c-seller-rating ">
                              <div class="c-seller-rating__title ">
                                شادی لند
                              </div>
                              <div class="c-seller-rating__subtitle js-seller-register-time ">عضویت از
                                <label class="u-mx-4 js-sellerTimeAgo">۳ سال, ۳ ماه</label> پیش
                              </div>
                              <div class="c-seller-rating__text">
                                <div class="c-seller-rating__thin-text">عملکرد:</div>
                                <div class="c-seller-rating__bold-text js-finalScore">۵</div>
                              </div>
                              <div class="c-seller-rating__ratings ">
                                <div class="c-round-progress__container">
                                  <div class="c-round-progress js-round-progress green" data-value="100"
                                       data-level-1="98"
                                       data-level-2="96">
                                    <div
                                      class="c-round-progress__half c-round-progress__half--left js-round-progress-left"></div>
                                    <div
                                      class="c-round-progress__half c-round-progress__half--right js-round-progress-right"
                                      style="transform: rotate(0deg);"></div>
                                    <div class="c-round-progress__value js-round-progress-text">۱۰۰٪</div>
                                  </div>
                                  <div class="c-round-progress__label">تامین به موقع</div>
                                </div>
                                <div class="c-round-progress__container">
                                  <div class="c-round-progress js-round-progress green" data-value="99.8"
                                       data-level-1="98"
                                       data-level-2="96">
                                    <div
                                      class="c-round-progress__half c-round-progress__half--left js-round-progress-left"></div>
                                    <div
                                      class="c-round-progress__half c-round-progress__half--right js-round-progress-right"
                                      style="transform: rotate(0.72deg);"></div>
                                    <div class="c-round-progress__value js-round-progress-text">۹۹.۸٪</div>
                                  </div>
                                  <div class="c-round-progress__label">تعهد ارسال</div>
                                </div>
                                <div class="c-round-progress__container">
                                  <div class="c-round-progress js-round-progress green" data-value="99.9"
                                       data-level-1="98"
                                       data-level-2="96">
                                    <div
                                      class="c-round-progress__half c-round-progress__half--left js-round-progress-left"></div>
                                    <div
                                      class="c-round-progress__half c-round-progress__half--right js-round-progress-right"
                                      style="transform: rotate(0.36deg);"></div>
                                    <div class="c-round-progress__value js-round-progress-text">۹۹.۹٪</div>
                                  </div>
                                  <div class="c-round-progress__label">بدون ثبت مرجوعی</div>
                                </div>
                              </div>
                              <div class="c-seller-rating__bottom u-hidden ">
                                <div class="c-seller-rating__text">
                                  <div class="c-seller-rating__bold-text"><label class="js-total-rate"></label>٪</div>
                                  <div class="c-seller-rating__thin-text">رضایت از کالا</div>
                                </div>
                                <div class="c-seller-rating__subtitle c-seller-rating__subtitle--center">از مجموع
                                  <label class="u-mx-4 js-total-count"></label>نفر
                                </div>
                                <div class="c-seller-rating__row-rating">
                                  <div class="c-line-graph__container">
                                    <div class="c-line-graph "></div>
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
                        <div class="c-table-suppliers__cell c-table-suppliers__cell--conditions">
                          <div class="c-table-suppliers__sender c-table-suppliers__sender--seller no-lead-time">
                            ارسال فروشنده
                          </div>
                        </div>
                        <div class="c-table-suppliers__cell c-table-suppliers__cell--guarantee">
                          <span>گارانتی ۱۸ ماهه همراه گستر نقره فام</span>
                        </div>
                        <div class="c-table-suppliers__cell c-table-suppliers__cell--price ">
                          <div class="c-price">
                            <div class="c-price__value">
                              ۵۰,۹۹۰,۰۰۰
                            </div>
                          </div>
                        </div>
                        <div class="c-table-suppliers__cell c-table-suppliers__cell--action">
                          <a class=" o-btn o-btn--outlined-red-md js-variant-add-to-cart js-btn-add-to-cart" href=""
                             data-variant="{{ $item->variant->id }}" data-snt-event="dkProductPageClick"
                             data-snt-params=""
                             data-event="add_to_cart" data-event-category="ecommerce" data-event-label="">
                            افزودن به سبد
                          </a>
                        </div>
                      </div>

                    @endif
                  @endforeach


                  <div class="c-table-suppliers__row js-supplier in-filter c-table-suppliers__row--active in-list"
                       data-variant="15488759">
                    <div class="c-table-suppliers__cell c-table-suppliers__cell--title">
                    <span
                      class="c-table-suppliers__seller-icon   "></span>
                      <div class="c-table-suppliers__seller-wrapper">
                        <p class="c-table-suppliers__seller-name"><a
                            data-snt-event="dkProductPageClick"
                            data-snt-params="{&quot;item&quot;:&quot;seller-in-list&quot;,&quot;item_option&quot;:&quot;{{ $fa_store_name }}&quot;}"
                            href="/seller/cwe4n/">
                            {{ $fa_store_name }}
                          </a></p>
                        <div class="c-table-suppliers__rating">
                          عملکرد:
                          <span class="u-text-bold">
                          ۳.۵
                      </span>
                          از ۵
                        </div>
                        <p></p></div>
                      <div class="c-table-suppliers__seller-info summary-overlay">
                        <div class="c-seller-rating ">
                          <div class="c-seller-rating__title ">
                            {{ $fa_store_name }}
                          </div>
                          <div class="c-seller-rating__subtitle js-seller-register-time ">عضویت از <label
                              class="u-mx-4 js-sellerTimeAgo">۴ ماه, ۳ هفته</label> پیش
                          </div>
                          <div class="c-seller-rating__text">
                            <div class="c-seller-rating__thin-text">عملکرد:</div>
                            <div class="c-seller-rating__bold-text js-finalScore">۳.۵</div>
                          </div>
                          <div class="c-seller-rating__ratings ">
                            <div class="c-round-progress__container">
                              <div class="c-round-progress js-round-progress green" data-value="100" data-level-1="98"
                                   data-level-2="96">
                                <div
                                  class="c-round-progress__half c-round-progress__half--left js-round-progress-left"></div>
                                <div
                                  class="c-round-progress__half c-round-progress__half--right js-round-progress-right"
                                  style="transform: rotate(0deg);"></div>
                                <div class="c-round-progress__value js-round-progress-text">۱۰۰٪</div>
                              </div>
                              <div class="c-round-progress__label">تامین به موقع</div>
                            </div>
                            <div class="c-round-progress__container">
                              <div class="c-round-progress js-round-progress green" data-value="98.9" data-level-1="98"
                                   data-level-2="96">
                                <div
                                  class="c-round-progress__half c-round-progress__half--left js-round-progress-left"></div>
                                <div
                                  class="c-round-progress__half c-round-progress__half--right js-round-progress-right"
                                  style="transform: rotate(3.96deg);"></div>
                                <div class="c-round-progress__value js-round-progress-text">۹۸.۹٪</div>
                              </div>
                              <div class="c-round-progress__label">تعهد ارسال</div>
                            </div>
                            <div class="c-round-progress__container">
                              <div class="c-round-progress js-round-progress green" data-value="100" data-level-1="98"
                                   data-level-2="96">
                                <div
                                  class="c-round-progress__half c-round-progress__half--left js-round-progress-left"></div>
                                <div
                                  class="c-round-progress__half c-round-progress__half--right js-round-progress-right"
                                  style="transform: rotate(0deg);"></div>
                                <div class="c-round-progress__value js-round-progress-text">۱۰۰٪</div>
                              </div>
                              <div class="c-round-progress__label">بدون ثبت مرجوعی</div>
                            </div>
                          </div>
                          <div class="c-seller-rating__bottom u-hidden ">
                            <div class="c-seller-rating__text">
                              <div class="c-seller-rating__bold-text"><label class="js-total-rate"></label>٪</div>
                              <div class="c-seller-rating__thin-text">رضایت از کالا</div>
                            </div>
                            <div class="c-seller-rating__subtitle c-seller-rating__subtitle--center">از مجموع<label
                                class="u-mx-4 js-total-count"></label>نفر
                            </div>
                            <div class="c-seller-rating__row-rating">
                              <div class="c-line-graph__container">
                                <div class="c-line-graph "></div>
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
                    <div class="c-table-suppliers__cell c-table-suppliers__cell--conditions">
                      <div class="c-table-suppliers__sender c-table-suppliers__sender--digikala ">
                        ارسال {{ $fa_store_name }} از ۱ روز کاری دیگر
                      </div>
                      <div class="c-table-suppliers__sender c-table-suppliers__sender--seller no-lead-time">
                        ارسال فروشنده
                      </div>
                    </div>
                    <div class="c-table-suppliers__cell c-table-suppliers__cell--guarantee"><span>گارانتی ۱۸ ماهه همراه گستر نقره فام</span>
                    </div>
                    <div class="c-table-suppliers__cell c-table-suppliers__cell--price ">
                      <div class="c-price">
                        <div class="c-price__value">
                          ۵۱,۸۹۰,۰۰۰0000011
                        </div>
                      </div>
                    </div>
                    <div class="c-table-suppliers__cell c-table-suppliers__cell--action"><a
                        class=" o-btn o-btn--outlined-red-md js-variant-add-to-cart js-btn-add-to-cart"
                        href="/cart/add/15488759/1/" data-variant="{{ $item->variant->id }}"
                        data-snt-event="dkProductPageClick"
                        data-snt-params="{&quot;item&quot;:&quot;seller-add-to-cart&quot;,&quot;item_option&quot;:null}"
                        data-event="add_to_cart" data-event-category="ecommerce"
                        data-event-label="items: price: 518900000 - seller: marketplace - multiple_configs: True - position: 1">
                        افزودن به سبد
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="c-table-suppliers-less c-table-suppliers-hidden js-table-suppliers-less">
                <button data-snt-event="dkProductPageClick"
                        data-snt-params="{&quot;item&quot;:&quot;show-fewer-supplier&quot;,&quot;item_option&quot;:null}"
                        class="o-btn o-btn--link-blue-sm o-btn--remove-padding o-btn--l-expand-more is-open js-less-supplier-button"
                        data-is-open="0">
                  تنها نمایش ۳ فروشنده اول
                </button>
              </div>
              <div class="c-table-suppliers-more js-table-suppliers-more">
                <button
                  class="o-btn o-btn--link-blue-sm o-btn--l-expand-more o-btn--remove-padding js-more-supplier-button"
                  data-is-open="0" data-snt-event="dkProductPageClick"
                  data-snt-params="{&quot;item&quot;:&quot;show-more-supplier&quot;,&quot;item_option&quot;:null}"
                  data-event="more_sellers" data-event-category="product_page"
                  data-event-label="{{ $product->id }}-category: گوشی موبایل, sellers: 3 - default_seller: marketplace"
                  style="display: none;">
                  نمایش
                  <span class="u-ml-4 u-mr-4 js-more-suppliers-count"></span>
                  فروشنده دیگر این کالا
                </button>
              </div>
            </div>
          </div>
          <div class="c-carousel c-carousel--horizontal-general ">
            <div class="c-carousel__header">
              <div class="c-title ">
                <div class="c-title__content-right c-title__content-right--has-underline">
                  <div class="c-title__title-container"><h4 class="c-title__title">محصولات مرتبط</h4></div>
                </div>
              </div>
            </div>
            <div class="c-carousel__content">
              <script>
                window.dataLayer.push({
                  "event": "eec.productImpression", "ecommerce": {
                    "currencyCode": "EUR",
                    "impressions": [{
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0627\u067e\u0644 \u0645\u062f\u0644 iPhone 12 Pro Max A2412 \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 3893718,
                      "price": 393000000,
                      "brand": "\u0627\u067e\u0644",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 1,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.6,
                      "metric6": 397,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0627\u067e\u0644 \u0645\u062f\u0644 iPhone 12 A2404 \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a ",
                      "id": 3868296,
                      "price": 298000000,
                      "brand": "\u0627\u067e\u0644",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 2,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.5,
                      "metric6": 411,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0627\u067e\u0644 \u0645\u062f\u0644 iPhone 12 Pro A2408 \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 3814476,
                      "price": 363600000,
                      "brand": "\u0627\u067e\u0644",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 3,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.4,
                      "metric6": 5,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0627\u067e\u0644 \u0645\u062f\u0644 iPhone 12 Pro A2408 \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 4149142,
                      "price": 360000000,
                      "brand": "\u0627\u067e\u0644",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 4,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.5,
                      "metric6": 54,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0627\u067e\u0644 \u0645\u062f\u0644 iPhone 12 mini A2176 \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 4166193,
                      "price": 277000000,
                      "brand": "\u0627\u067e\u0644",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 5,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.4,
                      "metric6": 110,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0627\u067e\u0644 \u0645\u062f\u0644 iPhone 11 A2223 \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 4 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 2062198,
                      "price": 243000000,
                      "brand": "\u0627\u067e\u0644",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 6,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.3,
                      "metric6": 365,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy S21 Ultra 5G SM-G998B\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 12 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 4330247,
                      "price": 290000000,
                      "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 7,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.5,
                      "metric6": 144,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A10s SM-A107F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 32 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 2066213,
                      "price": 31540000,
                      "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 8,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.4,
                      "metric6": 4635,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy Note20 Ultra 5G SM-N986BZKWXSG \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 4048744,
                      "price": 312000000,
                      "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 9,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.5,
                      "metric6": 15,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy Z Fold2 LTE SM-F916B \u062a\u06a9 \u0633\u06cc\u0645\u200c\u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 12 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 4230936,
                      "price": 419990000,
                      "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 10,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 5,
                      "metric6": 1,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 Mi 10T PRO 5G M 2007J3SG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 4107334,
                      "price": 162380000,
                      "brand": "\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 11,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.2,
                      "metric6": 60,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A51 SM-A515F\/DSN \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128\u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 2361428,
                      "price": 75590000,
                      "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 12,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.4,
                      "metric6": 4648,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A21S SM-A217F\/DS \u062f\u0648 \u0633\u06cc\u0645\u200c\u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a\t",
                      "id": 3048126,
                      "price": 44500000,
                      "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 13,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.4,
                      "metric6": 3521,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A12 SM-A125F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 4122136,
                      "price": 39500000,
                      "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 14,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.5,
                      "metric6": 1568,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy Z Flip SM-F700F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 2922863,
                      "price": 185990000,
                      "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 15,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 3.8,
                      "metric6": 10,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A31 SM-A315F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 2910269,
                      "price": 59100000,
                      "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 16,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.4,
                      "metric6": 3276,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A71 SM-A715F\/DS \u062f\u0648 \u0633\u06cc\u0645\u200c\u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 8 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 2677898,
                      "price": 99300000,
                      "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 17,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.3,
                      "metric6": 1617,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 POCO X3 M2007J20CG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 3754319,
                      "price": 68290000,
                      "brand": "\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 18,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.5,
                      "metric6": 1078,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy S20 FE SM-G780F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 4008192,
                      "price": 122890000,
                      "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 19,
                      "dimension6": 1,
                      "dimension2": 11,
                      "dimension9": 4.3,
                      "metric6": 279,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "special-offer"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A20s SM-A207F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 32 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 2177228,
                      "price": 49500000,
                      "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 20,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.4,
                      "metric6": 2470,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy Note 10 Plus N975F\/DS \u062f\u0648 \u0633\u06cc\u0645\u200c\u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 1877324,
                      "price": 197990000,
                      "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 21,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.4,
                      "metric6": 404,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0646\u0648\u06a9\u06cc\u0627 \u0645\u062f\u0644 105 - 2019 TA-1174 DS \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a",
                      "id": 2087200,
                      "price": 4040000,
                      "brand": "\u0646\u0648\u06a9\u06cc\u0627",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 22,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.3,
                      "metric6": 2786,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 Redmi Note 8 Pro m1906g7G \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 2212020,
                      "price": 62650000,
                      "brand": "\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 23,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.4,
                      "metric6": 1765,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy S21 Plus 5G SM-G996B\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 8 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 4244451,
                      "price": 224990000,
                      "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 24,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.6,
                      "metric6": 9,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 Redmi 9A M2006C3LG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 32 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a\t",
                      "id": 3246506,
                      "price": 27790000,
                      "brand": "\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 25,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.3,
                      "metric6": 644,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A01 Core SM-A013G\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 16 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 3266410,
                      "price": 19490000,
                      "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 26,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.2,
                      "metric6": 2095,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644  Galaxy S20 Ultra SM-G988B\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a ",
                      "id": 3228518,
                      "price": 257990000,
                      "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 27,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.4,
                      "metric6": 76,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A11 SM-A115F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 32 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0628\u0627 2 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0631\u0645",
                      "id": 3168416,
                      "price": 33900000,
                      "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 28,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.4,
                      "metric6": 3269,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 Redmi Note 9 Pro M2003J6B2G \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 3105612,
                      "price": 75000000,
                      "brand": "\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 29,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.4,
                      "metric6": 1572,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy Note20 SM-N980F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 3437362,
                      "price": 195990000,
                      "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 30,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.1,
                      "metric6": 39,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 Redmi 9 M2004J19G \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 3151747,
                      "price": 35990000,
                      "brand": "\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 31,
                      "dimension6": 1,
                      "dimension2": 8,
                      "dimension9": 4.5,
                      "metric6": 1613,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "special-offer"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A01 SM-A015F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 16 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 2489072,
                      "price": 27590000,
                      "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 32,
                      "dimension6": 1,
                      "dimension2": 9,
                      "dimension9": 4.3,
                      "metric6": 2096,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "special-offer"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 Redmi Note 8 M1908C3JG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 2288686,
                      "price": 52700000,
                      "brand": "\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 33,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.5,
                      "metric6": 1169,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0646\u0648\u06a9\u06cc\u0627 \u0645\u062f\u0644  7.2 TA-1196 DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0647\u0645\u0631\u0627\u0647 \u0628\u0627 \u0631\u0645 6 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 2213443,
                      "price": 60990000,
                      "brand": "\u0646\u0648\u06a9\u06cc\u0627",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 34,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.2,
                      "metric6": 152,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0647\u0648\u0622\u0648\u06cc \u0645\u062f\u0644 Y9s STK-L21 \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 2450027,
                      "price": 55990000,
                      "brand": "\u0647\u0648\u0622\u0648\u06cc",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 35,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.5,
                      "metric6": 679,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy Note20 5G SM-N981B\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 4213675,
                      "price": 221500000,
                      "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 36,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.4,
                      "metric6": 55,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 POCO M3 M2010J19CG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 4148736,
                      "price": 43570000,
                      "brand": "\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 37,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.5,
                      "metric6": 479,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0645\u0648\u062a\u0648\u0631\u0648\u0644\u0627 \u0645\u062f\u0644 Moto G 5G Plus XT2075-3 \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 8 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 4377689,
                      "price": 83990000,
                      "brand": "\u0645\u0648\u062a\u0648\u0631\u0648\u0644\u0627",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 38,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.6,
                      "metric6": 48,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 POCO X3 NFC M2007J20CG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 6 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 4244447,
                      "price": 60990000,
                      "brand": "\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 39,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.6,
                      "metric6": 490,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0647\u0648\u0622\u0648\u06cc \u0645\u062f\u0644 Y5 lite 2018 \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 16 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 1542766,
                      "price": 24000000,
                      "brand": "\u0647\u0648\u0622\u0648\u06cc",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 40,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.4,
                      "metric6": 1547,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0647\u0648\u0622\u0648\u06cc \u0645\u062f\u0644 Y9a FRL-L22 \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 3738701,
                      "price": 73500000,
                      "brand": "\u0647\u0648\u0622\u0648\u06cc",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 41,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.3,
                      "metric6": 89,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 Redmi Note 9 Pro M2003J6B2G \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 3087539,
                      "price": 63440000,
                      "brand": "\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 42,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.4,
                      "metric6": 1074,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A31 SM-A315F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 3579600,
                      "price": 63790000,
                      "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 43,
                      "dimension6": 1,
                      "dimension2": 4,
                      "dimension9": 4.1,
                      "metric6": 133,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "special-offer"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 Redmi 9C M2006C3MG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 3512785,
                      "price": 35190000,
                      "brand": "\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 44,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.4,
                      "metric6": 410,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0622\u0646\u0631 \u0645\u062f\u0644 8A \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 32 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 1607662,
                      "price": 27990000,
                      "brand": "\u0622\u0646\u0631",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 45,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.6,
                      "metric6": 614,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A02s SM-A025F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 32 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 4177353,
                      "price": 30000000,
                      "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 46,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.5,
                      "metric6": 202,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A12 SM-A125F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 4 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                      "id": 4230579,
                      "price": 45500000,
                      "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 47,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4.4,
                      "metric6": 277,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }, {
                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A11 SM-A115F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 32 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0628\u0627 3 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0631\u0645",
                      "id": 2982864,
                      "price": 35950000,
                      "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                      "position": 48,
                      "dimension6": 1,
                      "dimension2": 0,
                      "dimension9": 4,
                      "metric6": 391,
                      "dimension11": 0,
                      "dimension20": "marketable",
                      "dimension18": "most-viewed",
                      "dimension19": "carousel-related",
                      "dimension7": "none"
                    }]
                  }
                });
              </script>
              <div
                class="swiper-container swiper-container-horizontal c-carousel__container js-swiper-products swiper-container-rtl">
                <div class="swiper-wrapper">
                  <div class="swiper-slide c-carousel__slide swiper-slide-active" data-id="3893718" data-position="1"
                       style="width: 316px;" data-gtm-vis-first-on-screen-9070001_346="364406"
                       data-gtm-vis-total-visible-time-9070001_346="100" data-gtm-vis-has-fired-9070001_346="1">
                    <li><a
                        href="/product/dkp-3893718/گوشی-موبایل-اپل-مدل-iphone-12-pro-max-a2412-دو-سیم-کارت-ظرفیت-256-گیگابایت"
                        data-id="3893718" class="c-product-box__box-link js-product-url js-carousel-ga-product-box"
                        data-gtm-vis-first-on-screen-9070001_346="364414"
                        data-gtm-vis-total-visible-time-9070001_346="100" data-gtm-vis-has-fired-9070001_346="1"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 256 گیگابایت"><span
                            class="u-hidden c-product-box__title-special js-ab-app-incredible-product">
                          شگفت‌انگیز اخـتـصـاصـی اپـلیـکیـشـن
                  </span><img alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 256 گیگابایت"
                              src="https://dkstatics-public.digikala.com/digikala-products/be7a0e9bf7866759fa3cea7648b149f589a01040_1607433995.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                              class=" js-ab-not-app-incredible-product swiper-lazy swiper-lazy-loaded" loading="lazy">
                        </div>
                        <div
                          class="u-hidden c-product-box__title c-product-box__title--app-incredible js-ab-app-incredible-product"><span
                            class="c-product-box__title-special-sub">
                  مشاهده و خرید این کالا تنها با اپلیکیشن {{ $fa_store_name }} امکان‌پذیر می‌باشد
              </span></div>
                        <div class="c-product-box__title  js-ab-not-app-incredible-product">
                          گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 256 گیگابایت

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                  ۰ تومان هدیه نقدی
              </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <div class="c-price__value-wrapper">
                                ۳۹,۳۰۰,۰۰۰ <span class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide c-carousel__slide swiper-slide-next" data-id="3868296" data-position="2"
                       style="width: 316px;" data-gtm-vis-first-on-screen-9070001_346="364421"
                       data-gtm-vis-total-visible-time-9070001_346="100" data-gtm-vis-has-fired-9070001_346="1">
                    <li><a
                        href="/product/dkp-3868296/گوشی-موبایل-اپل-مدل-iphone-12-a2404-دو-سیم-کارت-ظرفیت-128-گیگابایت"
                        data-id="3868296" class="c-product-box__box-link js-product-url js-carousel-ga-product-box"
                        data-gtm-vis-first-on-screen-9070001_346="364426"
                        data-gtm-vis-total-visible-time-9070001_346="100" data-gtm-vis-has-fired-9070001_346="1"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="گوشی موبایل اپل مدل iPhone 12 A2404 دو سیم‌ کارت ظرفیت 128 گیگابایت "><span
                            class="u-hidden c-product-box__title-special js-ab-app-incredible-product">
                          شگفت‌انگیز اخـتـصـاصـی اپـلیـکیـشـن
                  </span><img alt="گوشی موبایل اپل مدل iPhone 12 A2404 دو سیم‌ کارت ظرفیت 128 گیگابایت "
                              src="https://dkstatics-public.digikala.com/digikala-products/9f5d8f6583a7289a096a9180ac88708856f4bd8f_1607433653.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                              class=" js-ab-not-app-incredible-product swiper-lazy swiper-lazy-loaded" loading="lazy">
                        </div>
                        <div
                          class="u-hidden c-product-box__title c-product-box__title--app-incredible js-ab-app-incredible-product"><span
                            class="c-product-box__title-special-sub">
                  مشاهده و خرید این کالا تنها با اپلیکیشن {{ $fa_store_name }} امکان‌پذیر می‌باشد
              </span></div>
                        <div class="c-product-box__title  js-ab-not-app-incredible-product">
                          گوشی موبایل اپل مدل iPhone 12 A2404 دو سیم‌ کارت ظرفیت 128 گیگابایت

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                  ۰ تومان هدیه نقدی
              </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <div class="c-price__value-wrapper">
                                ۲۹,۸۰۰,۰۰۰ <span class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide c-carousel__slide" data-id="4149142" data-position="3" style="width: 316px;"
                       data-gtm-vis-first-on-screen-9070001_346="364430"
                       data-gtm-vis-total-visible-time-9070001_346="100" data-gtm-vis-has-fired-9070001_346="1">
                    <li><a
                        href="/product/dkp-4149142/گوشی-موبایل-اپل-مدل-iphone-12-pro-a2408-دو-سیم-کارت-ظرفیت-256-گیگابایت"
                        data-id="4149142" class="c-product-box__box-link js-product-url js-carousel-ga-product-box"
                        data-gtm-vis-first-on-screen-9070001_346="364432"
                        data-gtm-vis-total-visible-time-9070001_346="100" data-gtm-vis-has-fired-9070001_346="1"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 256 گیگابایت"><span
                            class="u-hidden c-product-box__title-special js-ab-app-incredible-product">
                          شگفت‌انگیز اخـتـصـاصـی اپـلیـکیـشـن
                  </span><img alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 256 گیگابایت"
                              src="https://dkstatics-public.digikala.com/digikala-products/be7a0e9bf7866759fa3cea7648b149f589a01040_1609660142.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                              class=" js-ab-not-app-incredible-product swiper-lazy swiper-lazy-loaded" loading="lazy">
                        </div>
                        <div
                          class="u-hidden c-product-box__title c-product-box__title--app-incredible js-ab-app-incredible-product"><span
                            class="c-product-box__title-special-sub">
                  مشاهده و خرید این کالا تنها با اپلیکیشن {{ $fa_store_name }} امکان‌پذیر می‌باشد
              </span></div>
                        <div class="c-product-box__title  js-ab-not-app-incredible-product">
                          گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 256 گیگابایت

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                  ۰ تومان هدیه نقدی
              </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <div class="c-price__value-wrapper">
                                ۳۶,۰۰۰,۰۰۰ <span class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide c-carousel__slide" data-id="4166193" data-position="4" style="width: 316px;"
                       data-gtm-vis-first-on-screen-9070001_346="364435"
                       data-gtm-vis-total-visible-time-9070001_346="100" data-gtm-vis-has-fired-9070001_346="1">
                    <li><a href="/product/dkp-4166193/گوشی-موبایل-اپل-مدل-iphone-12-mini-a2176-ظرفیت-128-گیگابایت"
                           data-id="4166193" class="c-product-box__box-link js-product-url js-carousel-ga-product-box"
                           data-gtm-vis-first-on-screen-9070001_346="364439"
                           data-gtm-vis-total-visible-time-9070001_346="100" data-gtm-vis-has-fired-9070001_346="1"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="گوشی موبایل اپل مدل iPhone 12 mini A2176 ظرفیت 128 گیگابایت"><span
                            class="u-hidden c-product-box__title-special js-ab-app-incredible-product">
                          شگفت‌انگیز اخـتـصـاصـی اپـلیـکیـشـن
                  </span><img alt="گوشی موبایل اپل مدل iPhone 12 mini A2176 ظرفیت 128 گیگابایت"
                              src="https://dkstatics-public.digikala.com/digikala-products/2d5bb77c9e694379ec4b3c8294520b143600e638_1609831833.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                              class=" js-ab-not-app-incredible-product swiper-lazy swiper-lazy-loaded" loading="lazy">
                        </div>
                        <div
                          class="u-hidden c-product-box__title c-product-box__title--app-incredible js-ab-app-incredible-product"><span
                            class="c-product-box__title-special-sub">
                  مشاهده و خرید این کالا تنها با اپلیکیشن {{ $fa_store_name }} امکان‌پذیر می‌باشد
              </span></div>
                        <div class="c-product-box__title  js-ab-not-app-incredible-product">
                          گوشی موبایل اپل مدل iPhone 12 mini A2176 ظرفیت 128 گیگابایت

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                  ۰ تومان هدیه نقدی
              </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <div class="c-price__value-wrapper">
                                ۲۷,۷۰۰,۰۰۰ <span class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide c-carousel__slide" data-id="2062198" data-position="5" style="width: 316px;">
                    <li><a
                        href="/product/dkp-2062198/گوشی-موبایل-اپل-مدل-iphone-11-a2223-دو-سیم-کارت-ظرفیت-128-گیگابایت-و-رم-4-گیگابایت"
                        data-id="2062198" class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="گوشی موبایل اپل مدل iPhone 11 A2223 دو سیم‌ کارت ظرفیت 128 گیگابایت و رم 4 گیگابایت"><span
                            class="u-hidden c-product-box__title-special js-ab-app-incredible-product">
                          شگفت‌انگیز اخـتـصـاصـی اپـلیـکیـشـن
                  </span><img
                            alt="گوشی موبایل اپل مدل iPhone 11 A2223 دو سیم‌ کارت ظرفیت 128 گیگابایت و رم 4 گیگابایت"
                            src="https://dkstatics-public.digikala.com/digikala-products/987bbf684de2df847c8fa1dcb9570fbf580f79dc_1611468226.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                            class=" js-ab-not-app-incredible-product swiper-lazy swiper-lazy-loaded" loading="lazy">
                        </div>
                        <div
                          class="u-hidden c-product-box__title c-product-box__title--app-incredible js-ab-app-incredible-product"><span
                            class="c-product-box__title-special-sub">
                  مشاهده و خرید این کالا تنها با اپلیکیشن {{ $fa_store_name }} امکان‌پذیر می‌باشد
              </span></div>
                        <div class="c-product-box__title  js-ab-not-app-incredible-product">
                          گوشی موبایل اپل مدل iPhone 11 A2223 دو سیم‌ کارت ظرفیت 128 گیگابایت و رم 4 گیگابایت

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                  ۰ تومان هدیه نقدی
              </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <div class="c-price__value-wrapper">
                                ۲۴,۳۰۰,۰۰۰ <span class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide c-carousel__slide" data-id="4330247" data-position="6" style="width: 316px;">
                    <li><a
                        href="/product/dkp-4330247/گوشی-موبایل-سامسونگ-مدل-galaxy-s21-ultra-5g-sm-g998bds-دو-سیم-کارت-ظرفیت-256-گیگابایت-و-رم-12-گیگابایت"
                        data-id="4330247" class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="گوشی موبایل سامسونگ مدل Galaxy S21 Ultra 5G SM-G998B/DS دو سیم کارت ظرفیت 256 گیگابایت و رم 12 گیگابایت"><span
                            class="u-hidden c-product-box__title-special js-ab-app-incredible-product">
                          شگفت‌انگیز اخـتـصـاصـی اپـلیـکیـشـن
                  </span><img
                            alt="گوشی موبایل سامسونگ مدل Galaxy S21 Ultra 5G SM-G998B/DS دو سیم کارت ظرفیت 256 گیگابایت و رم 12 گیگابایت"
                            src="https://dkstatics-public.digikala.com/digikala-products/62c8a2c6d57dce6efbde8bbd348490c2f10a55e1_1611742799.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                            class=" js-ab-not-app-incredible-product swiper-lazy swiper-lazy-loaded" loading="lazy">
                        </div>
                        <div
                          class="u-hidden c-product-box__title c-product-box__title--app-incredible js-ab-app-incredible-product"><span
                            class="c-product-box__title-special-sub">
                  مشاهده و خرید این کالا تنها با اپلیکیشن {{ $fa_store_name }} امکان‌پذیر می‌باشد
              </span></div>
                        <div class="c-product-box__title  js-ab-not-app-incredible-product">
                          گوشی موبایل سامسونگ مدل Galaxy S21 Ultra 5G SM-G998B/DS دو سیم کارت ظرفیت 256 گیگابایت و ر
                          ...
                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                  ۰ تومان هدیه نقدی
              </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <div class="c-price__value-wrapper">
                                ۲۹,۰۰۰,۰۰۰ <span class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide c-carousel__slide" data-id="2066213" data-position="7" style="width: 316px;">
                    <li><a
                        href="/product/dkp-2066213/گوشی-موبایل-سامسونگ-مدل-galaxy-a10s-sm-a107fds-دو-سیم-کارت-ظرفیت-32-گیگابایت"
                        data-id="2066213" class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="گوشی موبایل سامسونگ مدل Galaxy A10s SM-A107F/DS دو سیم کارت ظرفیت 32 گیگابایت"><span
                            class="u-hidden c-product-box__title-special js-ab-app-incredible-product">
                          شگفت‌انگیز اخـتـصـاصـی اپـلیـکیـشـن
                  </span><img alt="گوشی موبایل سامسونگ مدل Galaxy A10s SM-A107F/DS دو سیم کارت ظرفیت 32 گیگابایت"
                              src="https://dkstatics-public.digikala.com/digikala-products/113562469.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                              class=" js-ab-not-app-incredible-product swiper-lazy swiper-lazy-loaded" loading="lazy">
                        </div>
                        <div
                          class="u-hidden c-product-box__title c-product-box__title--app-incredible js-ab-app-incredible-product"><span
                            class="c-product-box__title-special-sub">
                  مشاهده و خرید این کالا تنها با اپلیکیشن {{ $fa_store_name }} امکان‌پذیر می‌باشد
              </span></div>
                        <div class="c-product-box__title  js-ab-not-app-incredible-product">
                          گوشی موبایل سامسونگ مدل Galaxy A10s SM-A107F/DS دو سیم کارت ظرفیت 32 گیگابایت

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                  ۰ تومان هدیه نقدی
              </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <div class="c-price__value-wrapper">
                                ۳,۱۵۴,۰۰۰ <span class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide c-carousel__slide" data-id="4230936" data-position="8" style="width: 316px;">
                    <li><a
                        href="/product/dkp-4230936/گوشی-موبایل-سامسونگ-مدل-galaxy-z-fold2-lte-sm-f916b-تک-سیمکارت-ظرفیت-256-گیگابایت-و-رم-12-گیگابایت"
                        data-id="4230936" class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="گوشی موبایل سامسونگ مدل Galaxy Z Fold2 LTE SM-F916B تک سیم‌کارت ظرفیت 256 گیگابایت و رم 12 گیگابایت"><span
                            class="u-hidden c-product-box__title-special js-ab-app-incredible-product">
                          شگفت‌انگیز اخـتـصـاصـی اپـلیـکیـشـن
                  </span><img
                            alt="گوشی موبایل سامسونگ مدل Galaxy Z Fold2 LTE SM-F916B تک سیم‌کارت ظرفیت 256 گیگابایت و رم 12 گیگابایت"
                            src="https://dkstatics-public.digikala.com/digikala-products/68359f2b50e56f02f27342dff1ed1b81b951e505_1610546427.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                            class=" js-ab-not-app-incredible-product swiper-lazy swiper-lazy-loaded" loading="lazy">
                        </div>
                        <div
                          class="u-hidden c-product-box__title c-product-box__title--app-incredible js-ab-app-incredible-product"><span
                            class="c-product-box__title-special-sub">
                  مشاهده و خرید این کالا تنها با اپلیکیشن {{ $fa_store_name }} امکان‌پذیر می‌باشد
              </span></div>
                        <div class="c-product-box__title  js-ab-not-app-incredible-product">
                          گوشی موبایل سامسونگ مدل Galaxy Z Fold2 LTE SM-F916B تک سیم‌کارت ظرفیت 256 گیگابایت و رم 12
                          ...
                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                  ۰ تومان هدیه نقدی
              </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <div class="c-price__value-wrapper">
                                ۴۱,۹۹۹,۰۰۰ <span class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide c-carousel__slide" data-id="4107334" data-position="9" style="width: 316px;">
                    <li><a
                        href="/product/dkp-4107334/گوشی-موبایل-شیائومی-مدل-mi-10t-pro-5g-m-2007j3sg-دو-سیم-کارت-ظرفیت-256-گیگابایت"
                        data-id="4107334" class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="گوشی موبایل شیائومی مدل Mi 10T PRO 5G M 2007J3SG دو سیم‌ کارت ظرفیت 256 گیگابایت"><span
                            class="u-hidden c-product-box__title-special js-ab-app-incredible-product">
                          شگفت‌انگیز اخـتـصـاصـی اپـلیـکیـشـن
                  </span><img alt="گوشی موبایل شیائومی مدل Mi 10T PRO 5G M 2007J3SG دو سیم‌ کارت ظرفیت 256 گیگابایت"
                              src="https://dkstatics-public.digikala.com/digikala-products/3fd94686aff190d2994a9df75673f50dbf49cff4_1609159004.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                              class=" js-ab-not-app-incredible-product swiper-lazy swiper-lazy-loaded" loading="lazy">
                        </div>
                        <div
                          class="u-hidden c-product-box__title c-product-box__title--app-incredible js-ab-app-incredible-product"><span
                            class="c-product-box__title-special-sub">
                  مشاهده و خرید این کالا تنها با اپلیکیشن {{ $fa_store_name }} امکان‌پذیر می‌باشد
              </span></div>
                        <div class="c-product-box__title  js-ab-not-app-incredible-product">
                          گوشی موبایل شیائومی مدل Mi 10T PRO 5G M 2007J3SG دو سیم‌ کارت ظرفیت 256 گیگابایت

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                  ۰ تومان هدیه نقدی
              </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <div class="c-price__value-wrapper">
                                ۱۶,۲۳۸,۰۰۰ <span class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide c-carousel__slide" data-id="2361428" data-position="10"
                       style="width: 316px;">
                    <li><a
                        href="/product/dkp-2361428/گوشی-موبایل-سامسونگ-مدل-galaxy-a51-sm-a515fdsn-دو-سیم-کارت-ظرفیت-128گیگابایت"
                        data-id="2361428" class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="گوشی موبایل سامسونگ مدل Galaxy A51 SM-A515F/DSN دو سیم کارت ظرفیت 128گیگابایت"><span
                            class="u-hidden c-product-box__title-special js-ab-app-incredible-product">
                          شگفت‌انگیز اخـتـصـاصـی اپـلیـکیـشـن
                  </span><img alt="گوشی موبایل سامسونگ مدل Galaxy A51 SM-A515F/DSN دو سیم کارت ظرفیت 128گیگابایت"
                              src="https://dkstatics-public.digikala.com/digikala-products/115598446.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                              class=" js-ab-not-app-incredible-product swiper-lazy swiper-lazy-loaded" loading="lazy">
                        </div>
                        <div
                          class="u-hidden c-product-box__title c-product-box__title--app-incredible js-ab-app-incredible-product"><span
                            class="c-product-box__title-special-sub">
                  مشاهده و خرید این کالا تنها با اپلیکیشن {{ $fa_store_name }} امکان‌پذیر می‌باشد
              </span></div>
                        <div class="c-product-box__title  js-ab-not-app-incredible-product">
                          گوشی موبایل سامسونگ مدل Galaxy A51 SM-A515F/DSN دو سیم کارت ظرفیت 128گیگابایت

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                  ۰ تومان هدیه نقدی
              </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <div class="c-price__value-wrapper">
                                ۷,۵۵۹,۰۰۰ <span class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide c-carousel__slide" data-id="3048126" data-position="11"
                       style="width: 316px;">
                    <li><a
                        href="/product/dkp-3048126/گوشی-موبایل-سامسونگ-مدل-galaxy-a21s-sm-a217fds-دو-سیمکارت-ظرفیت-64-گیگابایت"
                        data-id="3048126" class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت	"><span
                            class="u-hidden c-product-box__title-special js-ab-app-incredible-product">
                          شگفت‌انگیز اخـتـصـاصـی اپـلیـکیـشـن
                  </span><img alt="گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت	"
                              src="https://dkstatics-public.digikala.com/digikala-products/89e7f2abac447a018242a954f03f8a6926344f8b_1594023235.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                              class=" js-ab-not-app-incredible-product swiper-lazy swiper-lazy-loaded" loading="lazy">
                        </div>
                        <div
                          class="u-hidden c-product-box__title c-product-box__title--app-incredible js-ab-app-incredible-product"><span
                            class="c-product-box__title-special-sub">
                  مشاهده و خرید این کالا تنها با اپلیکیشن {{ $fa_store_name }} امکان‌پذیر می‌باشد
              </span></div>
                        <div class="c-product-box__title  js-ab-not-app-incredible-product">
                          گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                  ۰ تومان هدیه نقدی
              </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <div class="c-price__value-wrapper">
                                ۴,۴۵۰,۰۰۰ <span class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide c-carousel__slide" data-id="4122136" data-position="12"
                       style="width: 316px;">
                    <li><a
                        href="/product/dkp-4122136/گوشی-موبایل-سامسونگ-مدل-galaxy-a12-sm-a125fds-دو-سیم-کارت-ظرفیت-64-گیگابایت"
                        data-id="4122136" class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="گوشی موبایل سامسونگ مدل Galaxy A12 SM-A125F/DS دو سیم کارت ظرفیت 64 گیگابایت"><span
                            class="u-hidden c-product-box__title-special js-ab-app-incredible-product">
                          شگفت‌انگیز اخـتـصـاصـی اپـلیـکیـشـن
                  </span><img alt="گوشی موبایل سامسونگ مدل Galaxy A12 SM-A125F/DS دو سیم کارت ظرفیت 64 گیگابایت"
                              src="https://dkstatics-public.digikala.com/digikala-products/6207b3bf015d7fff97e9e04868497ac6a30474a3_1609308062.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                              class=" js-ab-not-app-incredible-product swiper-lazy swiper-lazy-loaded" loading="lazy">
                        </div>
                        <div
                          class="u-hidden c-product-box__title c-product-box__title--app-incredible js-ab-app-incredible-product"><span
                            class="c-product-box__title-special-sub">
                  مشاهده و خرید این کالا تنها با اپلیکیشن {{ $fa_store_name }} امکان‌پذیر می‌باشد
              </span></div>
                        <div class="c-product-box__title  js-ab-not-app-incredible-product">
                          گوشی موبایل سامسونگ مدل Galaxy A12 SM-A125F/DS دو سیم کارت ظرفیت 64 گیگابایت

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                  ۰ تومان هدیه نقدی
              </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <div class="c-price__value-wrapper">
                                ۳,۹۵۰,۰۰۰ <span class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="swiper-slide c-carousel__slide" data-id="2910269" data-position="13"
                       style="width: 316px;">
                    <li><a
                        href="/product/dkp-2910269/گوشی-موبایل-سامسونگ-مدل-galaxy-a31-sm-a315fds-دو-سیم-کارت-ظرفیت-128-گیگابایت"
                        data-id="2910269" class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                      <div
                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                        title="">
                        <div class="c-product-box__img js-url js-snt-carousel_product"
                             title="گوشی موبایل سامسونگ مدل Galaxy A31 SM-A315F/DS دو سیم کارت ظرفیت 128 گیگابایت"><span
                            class="u-hidden c-product-box__title-special js-ab-app-incredible-product">
                          شگفت‌انگیز اخـتـصـاصـی اپـلیـکیـشـن
                  </span><img alt="گوشی موبایل سامسونگ مدل Galaxy A31 SM-A315F/DS دو سیم کارت ظرفیت 128 گیگابایت"
                              src="https://dkstatics-public.digikala.com/digikala-products/121560275.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                              class=" js-ab-not-app-incredible-product swiper-lazy swiper-lazy-loaded" loading="lazy">
                        </div>
                        <div
                          class="u-hidden c-product-box__title c-product-box__title--app-incredible js-ab-app-incredible-product"><span
                            class="c-product-box__title-special-sub">
                  مشاهده و خرید این کالا تنها با اپلیکیشن {{ $fa_store_name }} امکان‌پذیر می‌باشد
              </span></div>
                        <div class="c-product-box__title  js-ab-not-app-incredible-product">
                          گوشی موبایل سامسونگ مدل Galaxy A31 SM-A315F/DS دو سیم کارت ظرفیت 128 گیگابایت

                        </div>
                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                            class="c-product-box__digiplus-data c-digiplus-sign--before">
                  ۰ تومان هدیه نقدی
              </span></div>
                        <div class="c-product-box__row c-product-box__row--price">
                          <div class="c-price">
                            <div class="c-price__value c-price__value--plp js-price-complete-details">
                              <div class="c-price__value-wrapper">
                                ۵,۹۱۰,۰۰۰ <span class="c-price__currency">تومان</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="c-product-box__amazing">
                          <div class="c-product-box__remained"></div>
                        </div>
                      </div>
                    </li>
                  </div>
                </div>
                <div class="swiper-button-prev js-swiper-button-prev swiper-button-disabled"></div>
                <div class="swiper-button-next js-swiper-button-next"></div>
              </div>
            </div>
          </div>
          <div class="c-product__bottom-section u-mt-12 has-mini-buybox">
            <div id="tabs" class="o-box o-box--no-border o-box--grow c-product__tabs-container">
              <ul class="o-box__tabs o-box__tabs--sticky js-c-box-tabs">
                @if ($product->attributes()->exists())
                  <li data-product-id="{{ $product->id }}"
                      class="js-product-params-tab o-box__tab js-product-tab  is-active" data-fetchfromservice=""
                      data-method="params" id="tab-params">
                    <a href="#" data-snt-event="dkProductPageClick"
                       data-snt-params="{&quot;item&quot;:&quot;product-tab&quot;,&quot;item_option&quot;:&quot;3-مشخصات&quot;}"
                       data-tab-name="params">مشخصات</a>
                  </li>
                @endif
                <li data-product-id="{{ $product->id }}"
                    class="js-product-comments-tab o-box__tab js-product-tab {{ (!$product->attributes()->exists())? 'is-active' : '' }} "
                    data-fetchfromservice="1" data-method="comments" id="tab-comments">
                  <a href="#" data-snt-event="dkProductPageClick"
                     data-snt-params="{&quot;item&quot;:&quot;product-tab&quot;,&quot;item_option&quot;:&quot;4-دیدگاه کاربران&quot;}"
                     data-tab-name="comments">دیدگاه کاربران</a></li>
                </li>
              </ul>
              <div>
                <div id="recommendation-pdp-top-rate"
                     class="c-carousel c-carousel--horizontal-general u-hidden u-mt-16">
                  <div class="recommendation-swiper__mask js-swiper-mask-recommendation-pdp-top-rate u-hidden"><p>این
                      پیشنهاد به شما نشان داده نخواهد شد با تشکر از باز‌خورد شما</p>
                    <button class="js-cancel-swiper-mask" data-id="recommendation-pdp-top-rate"><i></i>
                      بازگرداندن
                    </button>
                  </div>
                  <div class="c-carousel__header">
                    <div class="c-title ">
                      <div class="c-title__content-right c-title__content-right--has-underline
                                         c-title__content-right--has-ad-underline ">
                        <div class="c-title__title-container"><h4 class="c-title__title">عنوان تست</h4></div>
                        <span class="c-title__description">آگهی شده</span></div>
                    </div>
                    <div class="c-adplacement__badge
      ad-badge">
                      <div class="c-adplacement__badge-container ">
                        <div class="c-adplacement__badge-container--img"><img
                            src="https://www.digikala.com/static/files/52672319.svg"><span
                            class="c-adplacement__badge-container--txt">Ad</span></div>
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
                <div class="c-params js-product-tab-content" id="params" data-method="params">
                  <article class="c-params__border-bottom">
                    <div class="o-box__header">
                      <span class="o-box__title">مشخصات کالا</span>
                      <span class="o-box__header-desc">{{ $product->title_en }}</span>
                    </div>

                    @if ($product->attributes()->exists())
                      @foreach($product->category[0]->attributeGroups as $key => $attrGroup)
                        @if ($key > 0)
                          @continue
                        @endif
                        <?php $filledAttrG = null; ?>

                        @foreach($attrGroup->attributes as $attribute)
                          @if(isset($product->attributes()->find($attribute->id)->pivot->product_id))
                            <?php $filledAttrG = true; ?>
                          @endif
                        @endforeach

                        @if (!is_null($filledAttrG))
                          <section>

                            <h3 class="c-params__title">{{ $attrGroup->name }}</h3>

                            <ul class="c-params__list">
                              @foreach($attrGroup->attributes->sortBy('position') as $attribute)
                                <li>
                                  @if(isset($product->attributes()->find($attribute->id)->pivot->value) && !is_null($attribute->name))
                                    <div class="c-params__list-key"><span class="block">{{ $attribute->name }}</span>
                                    </div>
                                  @endif

                                  @if (($attribute->type == 1 || $attribute->type == 2) && isset($product->attributes()->find($attribute->id)->pivot->value))
                                    <div class="c-params__list-value">
                                    <span class="block">
                                      {{ $product->attributes()->find($attribute->id)->pivot->value }}
                                    </span>
                                    </div>
                                  @elseif ($attribute->type == 3 && isset($product->attributes->find($attr->id)->pivot->value_id) && ($product->attributes->find($attr->id)->pivot->value_id == $value->id))
                                    <div class="c-params__list-value">
                                    <span class="block">
                                       @foreach($attribute->values as $value)
                                        {{ ($product->attributes->find($attr->id)->pivot->value_id == $value->id)? $value->value : ''  }}
                                      @endforeach
                                    </span>
                                    </div>
                                  @elseif ($attribute->type == 4)
                                    @php $arrays = null; @endphp
                                    @foreach($product->attributes as $pAttr)
                                      @if (!is_null($pAttr->pivot->value_id) && ($pAttr->pivot->attribute_id == $attr->id))
                                        <?php $pArray[] = $pAttr->pivot->value_id; ?>
                                      @endif
                                    @endforeach

                                    <?php $has_value = false; ?>
                                    @foreach($attribute->values as $key => $value)
                                      @if ($has_value == true)
                                        @continue
                                      @endif
                                      @if(in_array($value->id, $pArray))
                                        <?php $has_value = true; ?>
                                      @endif
                                    @endforeach

                                    @if($has_value == true)
                                      <div class="c-params__list-value">
                                        <span class="block">
                                          @foreach($attribute->values as $key => $value)
                                            {{ in_array($value->id, $pArray) ? $value->value :  '' }} {{ (in_array($value->id, $pArray) && count($attribute->values) !== $key+1)? '، ' : '' }}
                                          @endforeach
                                        </span>
                                      </div>
                                    @endif

                                  @elseif ($attribute->type == 5 && isset($product->attributes->find($attribute->id)->pivot->value))
                                    <div class="c-params__list-value">
                                    <span class="block">
                                      {{ $product->attributes->find($attribute->id)->pivot->value }} {{ ' ' . (isset($attribute->unit)? $attribute->unit->name : '')  }}
                                    </span>
                                    </div>
                                  @endif
                                </li>
                              @endforeach
                            </ul>
                          </section>
                        @endif
                      @endforeach
                    @endif


                    @if ($product->attributes()->exists())
                      <div class="c-params__collapse--content js-product-params-container">
                        @foreach($product->category[0]->attributeGroups as $key => $attrGroup)
                          @if ($key < 1)
                            @continue
                          @endif
                          <?php $filledAttrG = null; ?>

                          @foreach($attrGroup->attributes as $attribute)
                            @if(isset($product->attributes()->find($attribute->id)->pivot->product_id))
                              <?php $filledAttrG = true; ?>
                            @endif
                          @endforeach

                          @if (!is_null($filledAttrG))
                            <section>

                              <h3 class="c-params__title">{{ $attrGroup->name }}</h3>

                              <ul class="c-params__list">
                                @foreach($attrGroup->attributes->sortBy('position') as $attribute)
                                  <li>
                                    @if(isset($product->attributes()->find($attribute->id)->pivot->value) && !is_null($attribute->name))
                                      <div class="c-params__list-key"><span class="block">{{ $attribute->name }}</span>
                                      </div>
                                    @endif

                                    @if (($attribute->type == 1 || $attribute->type == 2) && isset($product->attributes()->find($attribute->id)->pivot->value))
                                      <div class="c-params__list-value">
                                    <span class="block">
                                      {{ $product->attributes()->find($attribute->id)->pivot->value }}
                                    </span>
                                      </div>
                                    @elseif ($attribute->type == 3 && isset($product->attributes->find($attr->id)->pivot->value_id) && ($product->attributes->find($attr->id)->pivot->value_id == $value->id))
                                      <div class="c-params__list-value">
                                    <span class="block">
                                       @foreach($attribute->values as $value)
                                        {{ ($product->attributes->find($attr->id)->pivot->value_id == $value->id)? $value->value : ''  }}
                                      @endforeach
                                    </span>
                                      </div>
                                    @elseif ($attribute->type == 4)
                                      @php $arrays = null; @endphp
                                      @foreach($product->attributes as $pAttr)
                                        @if (!is_null($pAttr->pivot->value_id) && ($pAttr->pivot->attribute_id == $attr->id))
                                          <?php $pArray[] = $pAttr->pivot->value_id; ?>
                                        @endif
                                      @endforeach

                                      <?php $has_value = false; ?>
                                      @foreach($attribute->values as $key => $value)
                                        @if ($has_value == true)
                                          @continue
                                        @endif
                                        @if(in_array($value->id, $pArray))
                                          <?php $has_value = true; ?>
                                        @endif
                                      @endforeach

                                      @if($has_value == true)
                                        <div class="c-params__list-value">
                                        <span class="block">
                                          @foreach($attribute->values as $key => $value)
                                            {{ in_array($value->id, $pArray) ? $value->value :  '' }} {{ (in_array($value->id, $pArray) && count($attribute->values) !== $key+1)? '، ' : '' }}
                                          @endforeach
                                        </span>
                                        </div>
                                      @endif

                                    @elseif ($attribute->type == 5 && isset($product->attributes->find($attribute->id)->pivot->value))
                                      <div class="c-params__list-value">
                                    <span class="block">
                                      {{ $product->attributes->find($attribute->id)->pivot->value }} {{ ' ' . (isset($attribute->unit)? $attribute->unit->name : '')  }}
                                    </span>
                                      </div>
                                    @endif
                                  </li>
                                @endforeach
                              </ul>
                            </section>
                          @endif
                        @endforeach
                      </div>
                    @endif


                    <?php $filledAttrGCount = 0; ?>
                    @if ($product->category[0]->attributeGroups()->exists())
                      @foreach($product->category[0]->attributeGroups as $key => $attrGroup)
                        @foreach($attrGroup->attributes as $attribute)
                          @if(isset($product->attributes()->find($attribute->id)->pivot->product_id))
                            <?php $filledAttrGCount += 1; ?>
                            @break
                          @endif
                        @endforeach
                      @endforeach
                    @endif
                    @if ($filledAttrGCount > 1)
                      <a href="#" class="c-params__collapse--link js-open-product-params">نمایش همه مشخصات کالا</a>
                    @endif
                  </article>
                </div>

                <div class="c-comments js-product-tab-content" id="comments" data-method="comments"
                     data-fetch-from-service="1">
                  <div class="o-box__header">
                    <span class="o-box__title">امتیاز و دیدگاه کاربران</span>
                    <span class="o-box__header-desc">{{ $product->title_en }}</span>
                  </div>
                  <div class="js-content"></div>
                  <div class="c-content-expert__separator"></div>
                </div>

                {{--                <div class="c-faq js-product-tab-content js-faq-container" id="questions" data-method="questions"--}}
                {{--                     data-fetch-from-service="1">--}}
                {{--                  <div class="o-box__header">--}}
                {{--                    <span class="o-box__title">پرسش و پاسخ</span>--}}
                {{--                    <span class="o-box__header-desc">{{ $product->title_en }}</span></div>--}}
                {{--                  <div class="js-content"></div>--}}
                {{--                </div>--}}

              </div>
            </div>
            <div class="c-mini-buy-box-fixed">
              <div class="c-mini-buy-box js-mini-buy-box">
                <div style="" class="c-mini-buy-box__amazing-text  u-hidden">
                  فروش ویژه
                </div>
                <div class="c-mini-buy-box__product-info">
                  <img class="c-mini-buy-box__product-info--img"
                       src="https://dkstatics-public.digikala.com/digikala-products/be7a0e9bf7866759fa3cea7648b149f589a01040_1607438980.jpg?x-oss-process=image/resize,m_lfit,h_150,w_150/quality,q_80"
                       alt="{{ $product->title_fa }}">
                  <div class="c-mini-buy-box__product-info--info">
                    <div class="title">{{ $product->title_fa }}</div>
                    <div class="colors "><label data-color-code="#9E9E9E" class="js-variant-color"
                                                style="background-color: rgb(158, 158, 158);"></label><span
                        class="js-color-title">خاکستری</span></div>
                    <div class="sizes u-hidden"><span class="js-size-title"></span></div>
                  </div>
                </div>
                <div class="c-mini-buy-box__row c-mini-buy-box__seller-digikala u-hidden js-mini-digikala-seller">
                  {{ $fa_store_name }}
                </div>
                <div class="c-mini-buy-box__row c-mini-buy-box__seller js-mini-not-digikala-seller"><i
                    class="green-verified js-mini-is-trusted u-hidden"></i><i
                    class="blue-verified js-mini-is-official u-hidden"></i><label class="js-mini-seller-name">همراه
                    ماکان</label></div>
                <div class="c-mini-buy-box__row c-mini-buy-box__warranty ">
                  گارانتی ۱۸ ماهه همراه گستر نقره فام
                </div>
                <div class="c-mini-buy-box__row c-mini-buy-box__stock ">
                  موجود در انبار فروشنده
                </div>
                <div class="c-mini-buy-box__row c-mini-buy-box__best-price js-data-best-price u-hidden">
                  بهترین قیمت ۳۰ روز گذشته
                </div>
                <div class="c-product__seller-row c-product__seller-row--price c-mini-buy-box__price-row">
                  <div class="c-product__seller-price-info">
                    <del class="c-product__mini-seller-price-prev js-rrp-price u-hidden">
                      ۵۰,۹۹۰,۰۰۰
                    </del>
                    <div class="c-product__seller-price-off js-discount-value u-hidden">
                      ٪
                    </div>
                  </div>
                  <div class="c-product__mini-seller-price-real">
                    <div class="c-product__mini-seller-price-pure js-price-value">۵۱,۸۹۰,۰۰۰0000011</div>
                    <span class="c-mini-buy-box__toman">تومان</span></div>
                </div>
                <div class="c-mini-buy-box__btn-row"><a class="
o-btn o-btn--contained-red-lg c-product__add-to-cart-btn js-add-to-cart js-btn-add-to-cart js-mini-add-to-cart js-ab-product-action"
                                                        data-product-id="{{ $product->id }}"
                                                        data-variant="{{ $item->variant->id }}"
                                                        href="/cart/add/15488759/1/" data-event="add_to_cart"
                                                        data-event-category="ecommerce"
                                                        data-event-label="price: 509900000 - seller: marketplace - seller_name: شادی لند - seller_rating: 81 - multiple_configs: True - position: 0">
                    افزودن به سبد خرید
                  </a></div>
              </div>
              {{--              <a href="#suppliers">--}}
              {{--                <div--}}
              {{--                  class="c-product-shipping-limitation c-product-shipping-limitation__mt-8 js-btn-supplier-list js-btn-cheapest-price u-hidden">--}}
              {{--                  <div class="c-product-shipping-limitation__title">--}}
              {{--                    این کالا را ارزان‌تر بخرید--}}
              {{--                  </div>--}}
              {{--                  <div class="c-product-shipping-limitation__dsc">--}}
              {{--                    از--}}
              {{--                    <span class="js-cheapest-price">۵۱,۸۹۰,۰۰۰ </span> تومان--}}
              {{--                    توسط فروشندگان دیگر--}}
              {{--                  </div>--}}
              {{--                </div>--}}
              {{--              </a>--}}
              <div data-id="" data-url="" class="c-mini-buy-box__cpc-placement js-mini-buy-box-cpc-placement u-hidden">
                <img class="js-image" src="" alt="">
                <div class="c-mini-buy-box__cpc-placement--body">
                  <div class="c-mini-buy-box__cpc-placement--title js-title"></div>
                  <div class="c-mini-buy-box__cpc-placement--price-row">
                    <div class="c-adplacement__badge
      ad-badge">
                      <div class="c-adplacement__badge-container ">
                        <div class="c-adplacement__badge-container--img"><img
                            src="https://www.digikala.com/static/files/52672319.svg"><span
                            class="c-adplacement__badge-container--txt">Ad</span></div>
                      </div>
                    </div>
                    <div class="price js-price"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          {{--          <div class="c-carousel c-carousel--horizontal-general ">--}}
          {{--            <div class="c-carousel__header">--}}
          {{--              <div class="c-title ">--}}
          {{--                <div class="c-title__content-right c-title__content-right--has-underline--}}
          {{--                                            ">--}}
          {{--                  <div class="c-title__title-container"><h4 class="c-title__title">خریداران این محصول، محصولات زیر را هم--}}
          {{--                      خریده‌اند</h4></div>--}}
          {{--                </div>--}}
          {{--              </div>--}}
          {{--            </div>--}}
          {{--            <div class="c-carousel__content">--}}
          {{--              <script>--}}
          {{--                window.dataLayer.push({--}}
          {{--                  "event": "eec.productImpression", "ecommerce": {--}}
          {{--                    "currencyCode": "EUR",--}}
          {{--                    "impressions": [{--}}
          {{--                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Samsung Galaxy Z Fold2 5G SM-F916B \u062f\u0648 \u0633\u06cc\u0645\u200c\u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 12 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",--}}
          {{--                      "id": 4384209,--}}
          {{--                      "price": 469000000,--}}
          {{--                      "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",--}}
          {{--                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",--}}
          {{--                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",--}}
          {{--                      "position": 1,--}}
          {{--                      "dimension6": 1,--}}
          {{--                      "dimension2": 0,--}}
          {{--                      "dimension9": 0,--}}
          {{--                      "metric6": 0,--}}
          {{--                      "dimension11": 0,--}}
          {{--                      "dimension20": "marketable",--}}
          {{--                      "dimension18": "most-viewed",--}}
          {{--                      "dimension19": "carousel-cross-sell",--}}
          {{--                      "dimension7": "none"--}}
          {{--                    }, {--}}
          {{--                      "name": "\u06a9\u0627\u0648\u0631 \u0645\u062f\u0644 SLCN \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0627\u067e\u0644 iPhone 12 Pro Max",--}}
          {{--                      "id": 3756699,--}}
          {{--                      "price": 687300,--}}
          {{--                      "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",--}}
          {{--                      "category": "\u06a9\u06cc\u0641 \u0648 \u06a9\u0627\u0648\u0631 \u06af\u0648\u0634\u06cc",--}}
          {{--                      "list": "category-\u06a9\u06cc\u0641 \u0648 \u06a9\u0627\u0648\u0631 \u06af\u0648\u0634\u06cc",--}}
          {{--                      "position": 2,--}}
          {{--                      "dimension6": 0,--}}
          {{--                      "dimension2": 13,--}}
          {{--                      "dimension9": 3.7,--}}
          {{--                      "metric6": 37,--}}
          {{--                      "dimension11": 0,--}}
          {{--                      "dimension20": "marketable",--}}
          {{--                      "dimension18": "most-viewed",--}}
          {{--                      "dimension19": "carousel-cross-sell",--}}
          {{--                      "dimension7": "special-offer"--}}
          {{--                    }, {--}}
          {{--                      "name": " \u06a9\u0627\u0645\u067e\u06cc\u0648\u062a\u0631 \u0647\u0645\u0647 \u06a9\u0627\u0631\u0647 21.5 \u0627\u06cc\u0646\u0686\u06cc \u0627\u067e\u0644 \u0645\u062f\u0644 iMac MHK23 2020 \u0628\u0627 \u0635\u0641\u062d\u0647 \u0646\u0645\u0627\u06cc\u0634 \u0631\u062a\u06cc\u0646\u0627 4K ",--}}
          {{--                      "id": 3355484,--}}
          {{--                      "price": 499440000,--}}
          {{--                      "brand": "\u0627\u067e\u0644",--}}
          {{--                      "category": "\u06a9\u0627\u0645\u067e\u06cc\u0648\u062a\u0631\u0647\u0627\u06cc All-in-One",--}}
          {{--                      "list": "category-\u06a9\u0627\u0645\u067e\u06cc\u0648\u062a\u0631\u0647\u0627\u06cc All-in-One",--}}
          {{--                      "position": 3,--}}
          {{--                      "dimension6": 1,--}}
          {{--                      "dimension2": 0,--}}
          {{--                      "dimension9": 0,--}}
          {{--                      "metric6": 0,--}}
          {{--                      "dimension11": 0,--}}
          {{--                      "dimension20": "marketable",--}}
          {{--                      "dimension18": "most-viewed",--}}
          {{--                      "dimension19": "carousel-cross-sell",--}}
          {{--                      "dimension7": "none"--}}
          {{--                    }, {--}}
          {{--                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0627\u067e\u0644 \u0645\u062f\u0644 iPhone 12 A2404 \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a ",--}}
          {{--                      "id": 3556105,--}}
          {{--                      "price": 345900000,--}}
          {{--                      "brand": "\u0627\u067e\u0644",--}}
          {{--                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",--}}
          {{--                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",--}}
          {{--                      "position": 4,--}}
          {{--                      "dimension6": 1,--}}
          {{--                      "dimension2": 0,--}}
          {{--                      "dimension9": 4.5,--}}
          {{--                      "metric6": 7,--}}
          {{--                      "dimension11": 0,--}}
          {{--                      "dimension20": "marketable",--}}
          {{--                      "dimension18": "most-viewed",--}}
          {{--                      "dimension19": "carousel-cross-sell",--}}
          {{--                      "dimension7": "none"--}}
          {{--                    }, {--}}
          {{--                      "name": "\u06a9\u0646\u0633\u0648\u0644 \u0628\u0627\u0632\u06cc \u0633\u0648\u0646\u06cc \u0645\u062f\u0644 Playstation 5 Digital Edition \u0638\u0631\u0641\u06cc\u062a 825 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",--}}
          {{--                      "id": 3738470,--}}
          {{--                      "price": 192484200,--}}
          {{--                      "brand": "\u0633\u0648\u0646\u06cc",--}}
          {{--                      "category": "\u06a9\u0646\u0633\u0648\u0644 \u062e\u0627\u0646\u06af\u06cc",--}}
          {{--                      "list": "category-\u06a9\u0646\u0633\u0648\u0644 \u062e\u0627\u0646\u06af\u06cc",--}}
          {{--                      "position": 5,--}}
          {{--                      "dimension6": 1,--}}
          {{--                      "dimension2": 0,--}}
          {{--                      "dimension9": 4,--}}
          {{--                      "metric6": 2,--}}
          {{--                      "dimension11": 0,--}}
          {{--                      "dimension20": "marketable",--}}
          {{--                      "dimension18": "most-viewed",--}}
          {{--                      "dimension19": "carousel-cross-sell",--}}
          {{--                      "dimension7": "none"--}}
          {{--                    }, {--}}
          {{--                      "name": "\u0644\u067e \u062a\u0627\u067e 16 \u0627\u06cc\u0646\u0686\u06cc \u0627\u067e\u0644 \u0645\u062f\u0644 MacBook Pro MVVJ2 2019 \u0647\u0645\u0631\u0627\u0647 \u0628\u0627 \u062a\u0627\u0686 \u0628\u0627\u0631",--}}
          {{--                      "id": 2212161,--}}
          {{--                      "price": 649640000,--}}
          {{--                      "brand": "\u0627\u067e\u0644",--}}
          {{--                      "category": "\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9",--}}
          {{--                      "list": "category-\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9",--}}
          {{--                      "position": 6,--}}
          {{--                      "dimension6": 1,--}}
          {{--                      "dimension2": 0,--}}
          {{--                      "dimension9": 5,--}}
          {{--                      "metric6": 1,--}}
          {{--                      "dimension11": 0,--}}
          {{--                      "dimension20": "marketable",--}}
          {{--                      "dimension18": "most-viewed",--}}
          {{--                      "dimension19": "carousel-cross-sell",--}}
          {{--                      "dimension7": "none"--}}
          {{--                    }, {--}}
          {{--                      "name": "\u0634\u0627\u0631\u0698\u0631 \u0628\u06cc \u0633\u06cc\u0645 \u0627\u067e\u0644 \u0645\u062f\u0644 MagSafe ",--}}
          {{--                      "id": 3914832,--}}
          {{--                      "price": 10890000,--}}
          {{--                      "brand": "\u0627\u067e\u0644",--}}
          {{--                      "category": "\u0634\u0627\u0631\u0698\u0631 \u062a\u0628\u0644\u062a \u0648 \u0645\u0648\u0628\u0627\u06cc\u0644",--}}
          {{--                      "list": "category-\u0634\u0627\u0631\u0698\u0631 \u062a\u0628\u0644\u062a \u0648 \u0645\u0648\u0628\u0627\u06cc\u0644",--}}
          {{--                      "position": 7,--}}
          {{--                      "dimension6": 1,--}}
          {{--                      "dimension2": 0,--}}
          {{--                      "dimension9": 3.9,--}}
          {{--                      "metric6": 57,--}}
          {{--                      "dimension11": 0,--}}
          {{--                      "dimension20": "marketable",--}}
          {{--                      "dimension18": "most-viewed",--}}
          {{--                      "dimension19": "carousel-cross-sell",--}}
          {{--                      "dimension7": "none"--}}
          {{--                    }, {--}}
          {{--                      "name": "\u06a9\u0646\u0633\u0648\u0644 \u0628\u0627\u0632\u06cc \u0645\u0627\u06cc\u06a9\u0631\u0648\u0633\u0627\u0641\u062a \u0645\u062f\u0644 XBOX SERIES X \u0638\u0631\u0641\u06cc\u062a 1 \u062a\u0631\u0627\u0628\u0627\u06cc\u062a",--}}
          {{--                      "id": 3738743,--}}
          {{--                      "price": 182829900,--}}
          {{--                      "brand": "\u0645\u0627\u06cc\u06a9\u0631\u0648\u0633\u0627\u0641\u062a",--}}
          {{--                      "category": "\u06a9\u0646\u0633\u0648\u0644 \u062e\u0627\u0646\u06af\u06cc",--}}
          {{--                      "list": "category-\u06a9\u0646\u0633\u0648\u0644 \u062e\u0627\u0646\u06af\u06cc",--}}
          {{--                      "position": 8,--}}
          {{--                      "dimension6": 1,--}}
          {{--                      "dimension2": 0,--}}
          {{--                      "dimension9": 3.8,--}}
          {{--                      "metric6": 7,--}}
          {{--                      "dimension11": 0,--}}
          {{--                      "dimension20": "marketable",--}}
          {{--                      "dimension18": "most-viewed",--}}
          {{--                      "dimension19": "carousel-cross-sell",--}}
          {{--                      "dimension7": "none"--}}
          {{--                    }, {--}}
          {{--                      "name": "\u0645\u062c\u0645\u0648\u0639\u0647 \u06a9\u0646\u0633\u0648\u0644 \u0628\u0627\u0632\u06cc \u0633\u0648\u0646\u06cc \u0645\u062f\u0644 PlayStation 5 \u0638\u0631\u0641\u06cc\u062a 825 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u062f\u0633\u062a\u0647 \u0627\u0636\u0627\u0641\u06cc",--}}
          {{--                      "id": 4204352,--}}
          {{--                      "price": 229500000,--}}
          {{--                      "brand": "\u0633\u0648\u0646\u06cc",--}}
          {{--                      "category": "\u06a9\u0646\u0633\u0648\u0644 \u062e\u0627\u0646\u06af\u06cc",--}}
          {{--                      "list": "category-\u06a9\u0646\u0633\u0648\u0644 \u062e\u0627\u0646\u06af\u06cc",--}}
          {{--                      "position": 9,--}}
          {{--                      "dimension6": 1,--}}
          {{--                      "dimension2": 0,--}}
          {{--                      "dimension9": 4.2,--}}
          {{--                      "metric6": 10,--}}
          {{--                      "dimension11": 0,--}}
          {{--                      "dimension20": "marketable",--}}
          {{--                      "dimension18": "most-viewed",--}}
          {{--                      "dimension19": "carousel-cross-sell",--}}
          {{--                      "dimension7": "none"--}}
          {{--                    }, {--}}
          {{--                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0627\u067e\u0644 \u0645\u062f\u0644 iPhone 12 Pro A2408 \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",--}}
          {{--                      "id": 3814476,--}}
          {{--                      "price": 363600000,--}}
          {{--                      "brand": "\u0627\u067e\u0644",--}}
          {{--                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",--}}
          {{--                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",--}}
          {{--                      "position": 10,--}}
          {{--                      "dimension6": 1,--}}
          {{--                      "dimension2": 0,--}}
          {{--                      "dimension9": 4.4,--}}
          {{--                      "metric6": 5,--}}
          {{--                      "dimension11": 0,--}}
          {{--                      "dimension20": "marketable",--}}
          {{--                      "dimension18": "most-viewed",--}}
          {{--                      "dimension19": "carousel-cross-sell",--}}
          {{--                      "dimension7": "none"--}}
          {{--                    }, {--}}
          {{--                      "name": "\u0647\u062f\u0633\u062a \u06af\u06cc\u0645\u06cc\u0646\u06af \u0633\u0648\u0646\u06cc \u067e\u0644\u06cc \u0627\u0633\u062a\u06cc\u0634\u0646 \u06f5 \u0645\u062f\u0644 PLUS 3D",--}}
          {{--                      "id": 4223243,--}}
          {{--                      "price": 38990000,--}}
          {{--                      "brand": "\u0633\u0648\u0646\u06cc",--}}
          {{--                      "category": "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06a9\u0646\u0633\u0648\u0644 \u0628\u0627\u0632\u06cc",--}}
          {{--                      "list": "category-\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06a9\u0646\u0633\u0648\u0644 \u0628\u0627\u0632\u06cc",--}}
          {{--                      "position": 11,--}}
          {{--                      "dimension6": 1,--}}
          {{--                      "dimension2": 0,--}}
          {{--                      "dimension9": 4.8,--}}
          {{--                      "metric6": 4,--}}
          {{--                      "dimension11": 0,--}}
          {{--                      "dimension20": "marketable",--}}
          {{--                      "dimension18": "most-viewed",--}}
          {{--                      "dimension19": "carousel-cross-sell",--}}
          {{--                      "dimension7": "none"--}}
          {{--                    }, {--}}
          {{--                      "name": "\u06a9\u0646\u0633\u0648\u0644 \u0628\u0627\u0632\u06cc \u0633\u0648\u0646\u06cc \u0645\u062f\u0644 Playstation 5 \u0638\u0631\u0641\u06cc\u062a 825 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",--}}
          {{--                      "id": 3737956,--}}
          {{--                      "price": 220000000,--}}
          {{--                      "brand": "\u0633\u0648\u0646\u06cc",--}}
          {{--                      "category": "\u06a9\u0646\u0633\u0648\u0644 \u062e\u0627\u0646\u06af\u06cc",--}}
          {{--                      "list": "category-\u06a9\u0646\u0633\u0648\u0644 \u062e\u0627\u0646\u06af\u06cc",--}}
          {{--                      "position": 12,--}}
          {{--                      "dimension6": 1,--}}
          {{--                      "dimension2": 0,--}}
          {{--                      "dimension9": 4.9,--}}
          {{--                      "metric6": 7,--}}
          {{--                      "dimension11": 0,--}}
          {{--                      "dimension20": "marketable",--}}
          {{--                      "dimension18": "most-viewed",--}}
          {{--                      "dimension19": "carousel-cross-sell",--}}
          {{--                      "dimension7": "none"--}}
          {{--                    }, {--}}
          {{--                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy Z Flip SM-F700F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",--}}
          {{--                      "id": 2922863,--}}
          {{--                      "price": 185990000,--}}
          {{--                      "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",--}}
          {{--                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",--}}
          {{--                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",--}}
          {{--                      "position": 13,--}}
          {{--                      "dimension6": 1,--}}
          {{--                      "dimension2": 0,--}}
          {{--                      "dimension9": 3.8,--}}
          {{--                      "metric6": 10,--}}
          {{--                      "dimension11": 0,--}}
          {{--                      "dimension20": "marketable",--}}
          {{--                      "dimension18": "most-viewed",--}}
          {{--                      "dimension19": "carousel-cross-sell",--}}
          {{--                      "dimension7": "none"--}}
          {{--                    }, {--}}
          {{--                      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy Note20 Ultra 5G SM-N986BZKWXSG \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",--}}
          {{--                      "id": 4048744,--}}
          {{--                      "price": 312000000,--}}
          {{--                      "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",--}}
          {{--                      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",--}}
          {{--                      "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",--}}
          {{--                      "position": 14,--}}
          {{--                      "dimension6": 1,--}}
          {{--                      "dimension2": 0,--}}
          {{--                      "dimension9": 4.5,--}}
          {{--                      "metric6": 15,--}}
          {{--                      "dimension11": 0,--}}
          {{--                      "dimension20": "marketable",--}}
          {{--                      "dimension18": "most-viewed",--}}
          {{--                      "dimension19": "carousel-cross-sell",--}}
          {{--                      "dimension7": "none"--}}
          {{--                    }, {--}}
          {{--                      "name": "\u0633\u0627\u0639\u062a \u0647\u0648\u0634\u0645\u0646\u062f \u0627\u067e\u0644 \u0633\u0631\u06cc 6 \u0645\u062f\u0644 Aluminum Case 44mm",--}}
          {{--                      "id": 3432127,--}}
          {{--                      "price": 118900000,--}}
          {{--                      "brand": "\u0627\u067e\u0644",--}}
          {{--                      "category": "\u0633\u0627\u0639\u062a \u0647\u0648\u0634\u0645\u0646\u062f",--}}
          {{--                      "list": "category-\u0633\u0627\u0639\u062a \u0647\u0648\u0634\u0645\u0646\u062f",--}}
          {{--                      "position": 15,--}}
          {{--                      "dimension6": 1,--}}
          {{--                      "dimension2": 0,--}}
          {{--                      "dimension9": 4.4,--}}
          {{--                      "metric6": 53,--}}
          {{--                      "dimension11": 0,--}}
          {{--                      "dimension20": "marketable",--}}
          {{--                      "dimension18": "most-viewed",--}}
          {{--                      "dimension19": "carousel-cross-sell",--}}
          {{--                      "dimension7": "none"--}}
          {{--                    }]--}}
          {{--                  }--}}
          {{--                });--}}
          {{--              </script>--}}
          {{--              <div--}}
          {{--                class="swiper-container swiper-container-horizontal c-carousel__container js-swiper-products swiper-container-rtl">--}}
          {{--                <div class="swiper-wrapper">--}}
          {{--                  <div class="swiper-slide c-carousel__slide swiper-slide-active" data-id="4384209" data-position="1"--}}
          {{--                       style="width: 316px;">--}}
          {{--                    <li><a--}}
          {{--                        href="/product/dkp-4384209/گوشی-موبایل-سامسونگ-مدل-samsung-galaxy-z-fold2-5g-sm-f916b-دو-سیمکارت-ظرفیت-256-گیگابایت-و-رم-12-گیگابایت"--}}
          {{--                        data-id="4384209" class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>--}}
          {{--                      <div--}}
          {{--                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "--}}
          {{--                        title="">--}}
          {{--                        <div class="c-product-box__img js-url js-snt-carousel_product"--}}
          {{--                             title="گوشی موبایل سامسونگ مدل Samsung Galaxy Z Fold2 5G SM-F916B دو سیم‌کارت ظرفیت 256 گیگابایت و رم 12 گیگابایت"><span--}}
          {{--                            class="u-hidden c-product-box__title-special js-ab-app-incredible-product">--}}
          {{--                            شگفت‌انگیز اخـتـصـاصـی اپـلیـکیـشـن--}}
          {{--                    </span><img--}}
          {{--                            alt="گوشی موبایل سامسونگ مدل Samsung Galaxy Z Fold2 5G SM-F916B دو سیم‌کارت ظرفیت 256 گیگابایت و رم 12 گیگابایت"--}}
          {{--                            src="https://dkstatics-public.digikala.com/digikala-products/68359f2b50e56f02f27342dff1ed1b81b951e505_1612345268.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"--}}
          {{--                            class=" js-ab-not-app-incredible-product swiper-lazy swiper-lazy-loaded" loading="lazy">--}}
          {{--                        </div>--}}
          {{--                        <div--}}
          {{--                          class="u-hidden c-product-box__title c-product-box__title--app-incredible js-ab-app-incredible-product"><span--}}
          {{--                            class="c-product-box__title-special-sub">--}}
          {{--                    مشاهده و خرید این کالا تنها با اپلیکیشن {{ $fa_store_name }} امکان‌پذیر می‌باشد--}}
          {{--                </span></div>--}}
          {{--                        <div class="c-product-box__title  js-ab-not-app-incredible-product">--}}
          {{--                          گوشی موبایل سامسونگ مدل Samsung Galaxy Z Fold2 5G SM-F916B دو سیم‌کارت ظرفیت 256 گیگابایت--}}
          {{--                          ...--}}
          {{--                        </div>--}}
          {{--                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span--}}
          {{--                            class="c-product-box__digiplus-data c-digiplus-sign--before">--}}
          {{--                    ۰ تومان هدیه نقدی--}}
          {{--                </span></div>--}}
          {{--                        <div class="c-product-box__row c-product-box__row--price">--}}
          {{--                          <div class="c-price">--}}
          {{--                            <div class="c-price__value c-price__value--plp js-price-complete-details">--}}
          {{--                              <div class="c-price__value-wrapper">--}}
          {{--                                ۴۶,۹۰۰,۰۰۰ <span class="c-price__currency">تومان</span></div>--}}
          {{--                            </div>--}}
          {{--                          </div>--}}
          {{--                        </div>--}}
          {{--                        <div class="c-product-box__amazing">--}}
          {{--                          <div class="c-product-box__remained"></div>--}}
          {{--                        </div>--}}
          {{--                      </div>--}}
          {{--                    </li>--}}
          {{--                  </div>--}}
          {{--                  <div class="swiper-slide c-carousel__slide swiper-slide-next" data-id="3756699" data-position="2"--}}
          {{--                       style="width: 316px;">--}}
          {{--                    <li><a href="/product/dkp-3756699/کاور-مدل-slcn-مناسب-برای-گوشی-موبایل-اپل-iphone-12-pro-max"--}}
          {{--                           data-id="3756699"--}}
          {{--                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>--}}
          {{--                      <div--}}
          {{--                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "--}}
          {{--                        title="">--}}
          {{--                        <div class="c-product-box__img js-url js-snt-carousel_product"--}}
          {{--                             title="کاور مدل SLCN مناسب برای گوشی موبایل اپل iPhone 12 Pro Max"><span--}}
          {{--                            class="u-hidden c-product-box__title-special js-ab-app-incredible-product">--}}
          {{--                            شگفت‌انگیز اخـتـصـاصـی اپـلیـکیـشـن--}}
          {{--                    </span><img alt="کاور مدل SLCN مناسب برای گوشی موبایل اپل iPhone 12 Pro Max"--}}
          {{--                                src="https://dkstatics-public.digikala.com/digikala-products/bdd26e2e5f47418745ad3f37b5d2ec3c9cb2dbe8_1605358322.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"--}}
          {{--                                class=" js-ab-not-app-incredible-product swiper-lazy swiper-lazy-loaded" loading="lazy">--}}
          {{--                        </div>--}}
          {{--                        <div--}}
          {{--                          class="u-hidden c-product-box__title c-product-box__title--app-incredible js-ab-app-incredible-product"><span--}}
          {{--                            class="c-product-box__title-special-sub">--}}
          {{--                    مشاهده و خرید این کالا تنها با اپلیکیشن {{ $fa_store_name }} امکان‌پذیر می‌باشد--}}
          {{--                </span></div>--}}
          {{--                        <div class="c-product-box__title  js-ab-not-app-incredible-product">--}}
          {{--                          کاور مدل SLCN مناسب برای گوشی موبایل اپل iPhone 12 Pro Max--}}

          {{--                        </div>--}}
          {{--                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span--}}
          {{--                            class="c-product-box__digiplus-data c-digiplus-sign--before">--}}
          {{--                    ۰ تومان هدیه نقدی--}}
          {{--                </span></div>--}}
          {{--                        <div class="c-product-box__row c-product-box__row--price">--}}
          {{--                          <div class="c-price">--}}
          {{--                            <div class="c-price__value c-price__value--plp js-price-complete-details">--}}
          {{--                              <del>۷۹,۰۰۰</del>--}}
          {{--                              <div class="c-price__discount-oval"><span>۱۳٪</span></div>--}}
          {{--                              <div class="c-price__value-wrapper">--}}
          {{--                                ۶۸,۷۳۰ <span class="c-price__currency">تومان</span></div>--}}
          {{--                            </div>--}}
          {{--                          </div>--}}
          {{--                        </div>--}}
          {{--                        <div class="c-product-box__amazing">--}}
          {{--                          <div class="c-product-box__remained"></div>--}}
          {{--                        </div>--}}
          {{--                      </div>--}}
          {{--                    </li>--}}
          {{--                  </div>--}}
          {{--                  <div class="swiper-slide c-carousel__slide" data-id="3355484" data-position="3" style="width: 316px;">--}}
          {{--                    <li><a--}}
          {{--                        href="/product/dkp-3355484/کامپیوتر-همه-کاره-215-اینچی-اپل-مدل-imac-mhk23-2020-با-صفحه-نمایش-رتینا-4k"--}}
          {{--                        data-id="3355484" class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>--}}
          {{--                      <div--}}
          {{--                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "--}}
          {{--                        title="">--}}
          {{--                        <div class="c-product-box__img js-url js-snt-carousel_product"--}}
          {{--                             title=" کامپیوتر همه کاره 21.5 اینچی اپل مدل iMac MHK23 2020 با صفحه نمایش رتینا 4K "><span--}}
          {{--                            class="u-hidden c-product-box__title-special js-ab-app-incredible-product">--}}
          {{--                            شگفت‌انگیز اخـتـصـاصـی اپـلیـکیـشـن--}}
          {{--                    </span><img alt=" کامپیوتر همه کاره 21.5 اینچی اپل مدل iMac MHK23 2020 با صفحه نمایش رتینا 4K "--}}
          {{--                                src="https://dkstatics-public.digikala.com/digikala-products/ad8a0a5a38d4ea1cc9dcbd0904117856274d6389_1599465451.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"--}}
          {{--                                class=" js-ab-not-app-incredible-product swiper-lazy swiper-lazy-loaded" loading="lazy">--}}
          {{--                        </div>--}}
          {{--                        <div--}}
          {{--                          class="u-hidden c-product-box__title c-product-box__title--app-incredible js-ab-app-incredible-product"><span--}}
          {{--                            class="c-product-box__title-special-sub">--}}
          {{--                    مشاهده و خرید این کالا تنها با اپلیکیشن {{ $fa_store_name }} امکان‌پذیر می‌باشد--}}
          {{--                </span></div>--}}
          {{--                        <div class="c-product-box__title  js-ab-not-app-incredible-product">--}}
          {{--                          کامپیوتر همه کاره 21.5 اینچی اپل مدل iMac MHK23 2020 با صفحه نمایش رتینا 4K--}}

          {{--                        </div>--}}
          {{--                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span--}}
          {{--                            class="c-product-box__digiplus-data c-digiplus-sign--before">--}}
          {{--                    ۰ تومان هدیه نقدی--}}
          {{--                </span></div>--}}
          {{--                        <div class="c-product-box__row c-product-box__row--price">--}}
          {{--                          <div class="c-price">--}}
          {{--                            <div class="c-price__value c-price__value--plp js-price-complete-details">--}}
          {{--                              <div class="c-price__value-wrapper">--}}
          {{--                                ۴۹,۹۴۴,۰۰۰ <span class="c-price__currency">تومان</span></div>--}}
          {{--                            </div>--}}
          {{--                          </div>--}}
          {{--                        </div>--}}
          {{--                        <div class="c-product-box__amazing">--}}
          {{--                          <div class="c-product-box__remained"></div>--}}
          {{--                        </div>--}}
          {{--                      </div>--}}
          {{--                    </li>--}}
          {{--                  </div>--}}
          {{--                  <div class="swiper-slide c-carousel__slide" data-id="3556105" data-position="4" style="width: 316px;">--}}
          {{--                    <li><a--}}
          {{--                        href="/product/dkp-3556105/گوشی-موبایل-اپل-مدل-iphone-12-a2404-دو-سیم-کارت-ظرفیت-256-گیگابایت"--}}
          {{--                        data-id="3556105" class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>--}}
          {{--                      <div--}}
          {{--                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "--}}
          {{--                        title="">--}}
          {{--                        <div class="c-product-box__img js-url js-snt-carousel_product"--}}
          {{--                             title="گوشی موبایل اپل مدل iPhone 12 A2404 دو سیم‌ کارت ظرفیت 256 گیگابایت "><span--}}
          {{--                            class="u-hidden c-product-box__title-special js-ab-app-incredible-product">--}}
          {{--                            شگفت‌انگیز اخـتـصـاصـی اپـلیـکیـشـن--}}
          {{--                    </span><img alt="گوشی موبایل اپل مدل iPhone 12 A2404 دو سیم‌ کارت ظرفیت 256 گیگابایت "--}}
          {{--                                src="https://dkstatics-public.digikala.com/digikala-products/9f5d8f6583a7289a096a9180ac88708856f4bd8f_1607433888.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"--}}
          {{--                                class=" js-ab-not-app-incredible-product swiper-lazy swiper-lazy-loaded" loading="lazy">--}}
          {{--                        </div>--}}
          {{--                        <div--}}
          {{--                          class="u-hidden c-product-box__title c-product-box__title--app-incredible js-ab-app-incredible-product"><span--}}
          {{--                            class="c-product-box__title-special-sub">--}}
          {{--                    مشاهده و خرید این کالا تنها با اپلیکیشن {{ $fa_store_name }} امکان‌پذیر می‌باشد--}}
          {{--                </span></div>--}}
          {{--                        <div class="c-product-box__title  js-ab-not-app-incredible-product">--}}
          {{--                          گوشی موبایل اپل مدل iPhone 12 A2404 دو سیم‌ کارت ظرفیت 256 گیگابایت--}}

          {{--                        </div>--}}
          {{--                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span--}}
          {{--                            class="c-product-box__digiplus-data c-digiplus-sign--before">--}}
          {{--                    ۰ تومان هدیه نقدی--}}
          {{--                </span></div>--}}
          {{--                        <div class="c-product-box__row c-product-box__row--price">--}}
          {{--                          <div class="c-price">--}}
          {{--                            <div class="c-price__value c-price__value--plp js-price-complete-details">--}}
          {{--                              <div class="c-price__value-wrapper">--}}
          {{--                                ۳۴,۵۹۰,۰۰۰ <span class="c-price__currency">تومان</span></div>--}}
          {{--                            </div>--}}
          {{--                          </div>--}}
          {{--                        </div>--}}
          {{--                        <div class="c-product-box__amazing">--}}
          {{--                          <div class="c-product-box__remained"></div>--}}
          {{--                        </div>--}}
          {{--                      </div>--}}
          {{--                    </li>--}}
          {{--                  </div>--}}
          {{--                  <div class="swiper-slide c-carousel__slide" data-id="3738470" data-position="5" style="width: 316px;">--}}
          {{--                    <li><a--}}
          {{--                        href="/product/dkp-3738470/کنسول-بازی-سونی-مدل-playstation-5-digital-edition-ظرفیت-825-گیگابایت"--}}
          {{--                        data-id="3738470" class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>--}}
          {{--                      <div--}}
          {{--                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "--}}
          {{--                        title="">--}}
          {{--                        <div class="c-product-box__img js-url js-snt-carousel_product"--}}
          {{--                             title="کنسول بازی سونی مدل Playstation 5 Digital Edition ظرفیت 825 گیگابایت"><span--}}
          {{--                            class="u-hidden c-product-box__title-special js-ab-app-incredible-product">--}}
          {{--                            شگفت‌انگیز اخـتـصـاصـی اپـلیـکیـشـن--}}
          {{--                    </span><img alt="کنسول بازی سونی مدل Playstation 5 Digital Edition ظرفیت 825 گیگابایت"--}}
          {{--                                src="https://dkstatics-public.digikala.com/digikala-products/a86107af7d18da49d727bc686b380c23c0fe2aa2_1605100833.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"--}}
          {{--                                class=" js-ab-not-app-incredible-product swiper-lazy swiper-lazy-loaded" loading="lazy">--}}
          {{--                        </div>--}}
          {{--                        <div--}}
          {{--                          class="u-hidden c-product-box__title c-product-box__title--app-incredible js-ab-app-incredible-product"><span--}}
          {{--                            class="c-product-box__title-special-sub">--}}
          {{--                    مشاهده و خرید این کالا تنها با اپلیکیشن {{ $fa_store_name }} امکان‌پذیر می‌باشد--}}
          {{--                </span></div>--}}
          {{--                        <div class="c-product-box__title  js-ab-not-app-incredible-product">--}}
          {{--                          کنسول بازی سونی مدل Playstation 5 Digital Edition ظرفیت 825 گیگابایت--}}

          {{--                        </div>--}}
          {{--                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span--}}
          {{--                            class="c-product-box__digiplus-data c-digiplus-sign--before">--}}
          {{--                    ۰ تومان هدیه نقدی--}}
          {{--                </span></div>--}}
          {{--                        <div class="c-product-box__row c-product-box__row--price">--}}
          {{--                          <div class="c-price">--}}
          {{--                            <div class="c-price__value c-price__value--plp js-price-complete-details">--}}
          {{--                              <div class="c-price__value-wrapper">--}}
          {{--                                ۱۹,۲۴۸,۴۲۰ <span class="c-price__currency">تومان</span></div>--}}
          {{--                            </div>--}}
          {{--                          </div>--}}
          {{--                        </div>--}}
          {{--                        <div class="c-product-box__amazing">--}}
          {{--                          <div class="c-product-box__remained"></div>--}}
          {{--                        </div>--}}
          {{--                      </div>--}}
          {{--                    </li>--}}
          {{--                  </div>--}}
          {{--                  <div class="swiper-slide c-carousel__slide" data-id="2212161" data-position="6" style="width: 316px;">--}}
          {{--                    <li><a href="/product/dkp-2212161/لپ-تاپ-16-اینچی-اپل-مدل-macbook-pro-mvvj2-2019-همراه-با-تاچ-بار"--}}
          {{--                           data-id="2212161"--}}
          {{--                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>--}}
          {{--                      <div--}}
          {{--                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "--}}
          {{--                        title="">--}}
          {{--                        <div class="c-product-box__img js-url js-snt-carousel_product"--}}
          {{--                             title="لپ تاپ 16 اینچی اپل مدل MacBook Pro MVVJ2 2019 همراه با تاچ بار"><span--}}
          {{--                            class="u-hidden c-product-box__title-special js-ab-app-incredible-product">--}}
          {{--                            شگفت‌انگیز اخـتـصـاصـی اپـلیـکیـشـن--}}
          {{--                    </span><img alt="لپ تاپ 16 اینچی اپل مدل MacBook Pro MVVJ2 2019 همراه با تاچ بار"--}}
          {{--                                src="https://dkstatics-public.digikala.com/digikala-products/115218076.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"--}}
          {{--                                class=" js-ab-not-app-incredible-product swiper-lazy swiper-lazy-loaded" loading="lazy">--}}
          {{--                        </div>--}}
          {{--                        <div--}}
          {{--                          class="u-hidden c-product-box__title c-product-box__title--app-incredible js-ab-app-incredible-product"><span--}}
          {{--                            class="c-product-box__title-special-sub">--}}
          {{--                    مشاهده و خرید این کالا تنها با اپلیکیشن {{ $fa_store_name }} امکان‌پذیر می‌باشد--}}
          {{--                </span></div>--}}
          {{--                        <div class="c-product-box__title  js-ab-not-app-incredible-product">--}}
          {{--                          لپ تاپ 16 اینچی اپل مدل MacBook Pro MVVJ2 2019 همراه با تاچ بار--}}

          {{--                        </div>--}}
          {{--                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span--}}
          {{--                            class="c-product-box__digiplus-data c-digiplus-sign--before">--}}
          {{--                    ۰ تومان هدیه نقدی--}}
          {{--                </span></div>--}}
          {{--                        <div class="c-product-box__row c-product-box__row--price">--}}
          {{--                          <div class="c-price">--}}
          {{--                            <div class="c-price__value c-price__value--plp js-price-complete-details">--}}
          {{--                              <div class="c-price__value-wrapper">--}}
          {{--                                ۶۴,۹۶۴,۰۰۰ <span class="c-price__currency">تومان</span></div>--}}
          {{--                            </div>--}}
          {{--                          </div>--}}
          {{--                        </div>--}}
          {{--                        <div class="c-product-box__amazing">--}}
          {{--                          <div class="c-product-box__remained"></div>--}}
          {{--                        </div>--}}
          {{--                      </div>--}}
          {{--                    </li>--}}
          {{--                  </div>--}}
          {{--                  <div class="swiper-slide c-carousel__slide" data-id="3914832" data-position="7" style="width: 316px;">--}}
          {{--                    <li><a href="/product/dkp-3914832/شارژر-بی-سیم-اپل-مدل-magsafe" data-id="3914832"--}}
          {{--                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>--}}
          {{--                      <div--}}
          {{--                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "--}}
          {{--                        title="">--}}
          {{--                        <div class="c-product-box__img js-url js-snt-carousel_product"--}}
          {{--                             title="شارژر بی سیم اپل مدل MagSafe "><span--}}
          {{--                            class="u-hidden c-product-box__title-special js-ab-app-incredible-product">--}}
          {{--                            شگفت‌انگیز اخـتـصـاصـی اپـلیـکیـشـن--}}
          {{--                    </span><img alt="شارژر بی سیم اپل مدل MagSafe "--}}
          {{--                                src="https://dkstatics-public.digikala.com/digikala-products/87568a116b22f042a36c53066d3b1f2f8aa52a7c_1607170553.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"--}}
          {{--                                class=" js-ab-not-app-incredible-product swiper-lazy swiper-lazy-loaded" loading="lazy">--}}
          {{--                        </div>--}}
          {{--                        <div--}}
          {{--                          class="u-hidden c-product-box__title c-product-box__title--app-incredible js-ab-app-incredible-product"><span--}}
          {{--                            class="c-product-box__title-special-sub">--}}
          {{--                    مشاهده و خرید این کالا تنها با اپلیکیشن {{ $fa_store_name }} امکان‌پذیر می‌باشد--}}
          {{--                </span></div>--}}
          {{--                        <div class="c-product-box__title  js-ab-not-app-incredible-product">--}}
          {{--                          شارژر بی سیم اپل مدل MagSafe--}}

          {{--                        </div>--}}
          {{--                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span--}}
          {{--                            class="c-product-box__digiplus-data c-digiplus-sign--before">--}}
          {{--                    ۰ تومان هدیه نقدی--}}
          {{--                </span></div>--}}
          {{--                        <div class="c-product-box__row c-product-box__row--price">--}}
          {{--                          <div class="c-price">--}}
          {{--                            <div class="c-price__value c-price__value--plp js-price-complete-details">--}}
          {{--                              <div class="c-price__value-wrapper">--}}
          {{--                                ۱,۰۸۹,۰۰۰ <span class="c-price__currency">تومان</span></div>--}}
          {{--                            </div>--}}
          {{--                          </div>--}}
          {{--                        </div>--}}
          {{--                        <div class="c-product-box__amazing">--}}
          {{--                          <div class="c-product-box__remained"></div>--}}
          {{--                        </div>--}}
          {{--                      </div>--}}
          {{--                    </li>--}}
          {{--                  </div>--}}
          {{--                  <div class="swiper-slide c-carousel__slide" data-id="3738743" data-position="8" style="width: 316px;">--}}
          {{--                    <li><a href="/product/dkp-3738743/کنسول-بازی-مایکروسافت-مدل-xbox-series-x-ظرفیت-1-ترابایت"--}}
          {{--                           data-id="3738743"--}}
          {{--                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>--}}
          {{--                      <div--}}
          {{--                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "--}}
          {{--                        title="">--}}
          {{--                        <div class="c-product-box__img js-url js-snt-carousel_product"--}}
          {{--                             title="کنسول بازی مایکروسافت مدل XBOX SERIES X ظرفیت 1 ترابایت"><span--}}
          {{--                            class="u-hidden c-product-box__title-special js-ab-app-incredible-product">--}}
          {{--                            شگفت‌انگیز اخـتـصـاصـی اپـلیـکیـشـن--}}
          {{--                    </span><img alt="کنسول بازی مایکروسافت مدل XBOX SERIES X ظرفیت 1 ترابایت"--}}
          {{--                                src="https://dkstatics-public.digikala.com/digikala-products/2df666aba8e4fd8ae4bd75c814b5ea1e2f076f00_1605103287.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"--}}
          {{--                                class=" js-ab-not-app-incredible-product swiper-lazy swiper-lazy-loaded" loading="lazy">--}}
          {{--                        </div>--}}
          {{--                        <div--}}
          {{--                          class="u-hidden c-product-box__title c-product-box__title--app-incredible js-ab-app-incredible-product"><span--}}
          {{--                            class="c-product-box__title-special-sub">--}}
          {{--                    مشاهده و خرید این کالا تنها با اپلیکیشن {{ $fa_store_name }} امکان‌پذیر می‌باشد--}}
          {{--                </span></div>--}}
          {{--                        <div class="c-product-box__title  js-ab-not-app-incredible-product">--}}
          {{--                          کنسول بازی مایکروسافت مدل XBOX SERIES X ظرفیت 1 ترابایت--}}

          {{--                        </div>--}}
          {{--                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span--}}
          {{--                            class="c-product-box__digiplus-data c-digiplus-sign--before">--}}
          {{--                    ۰ تومان هدیه نقدی--}}
          {{--                </span></div>--}}
          {{--                        <div class="c-product-box__row c-product-box__row--price">--}}
          {{--                          <div class="c-price">--}}
          {{--                            <div class="c-price__value c-price__value--plp js-price-complete-details">--}}
          {{--                              <div class="c-price__value-wrapper">--}}
          {{--                                ۱۸,۲۸۲,۹۹۰ <span class="c-price__currency">تومان</span></div>--}}
          {{--                            </div>--}}
          {{--                          </div>--}}
          {{--                        </div>--}}
          {{--                        <div class="c-product-box__amazing">--}}
          {{--                          <div class="c-product-box__remained"></div>--}}
          {{--                        </div>--}}
          {{--                      </div>--}}
          {{--                    </li>--}}
          {{--                  </div>--}}
          {{--                  <div class="swiper-slide c-carousel__slide" data-id="4204352" data-position="9" style="width: 316px;">--}}
          {{--                    <li><a--}}
          {{--                        href="/product/dkp-4204352/مجموعه-کنسول-بازی-سونی-مدل-playstation-5-ظرفیت-825-گیگابایت-به-همراه-دسته-اضافی"--}}
          {{--                        data-id="4204352" class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>--}}
          {{--                      <div--}}
          {{--                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "--}}
          {{--                        title="">--}}
          {{--                        <div class="c-product-box__img js-url js-snt-carousel_product"--}}
          {{--                             title="مجموعه کنسول بازی سونی مدل PlayStation 5 ظرفیت 825 گیگابایت به همراه دسته اضافی"><span--}}
          {{--                            class="u-hidden c-product-box__title-special js-ab-app-incredible-product">--}}
          {{--                            شگفت‌انگیز اخـتـصـاصـی اپـلیـکیـشـن--}}
          {{--                    </span><img alt="مجموعه کنسول بازی سونی مدل PlayStation 5 ظرفیت 825 گیگابایت به همراه دسته اضافی"--}}
          {{--                                src="https://dkstatics-public.digikala.com/digikala-products/7bb00327ed9c6dba0f4b32682dd92045d713a4ce_1610279596.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"--}}
          {{--                                class=" js-ab-not-app-incredible-product swiper-lazy swiper-lazy-loaded" loading="lazy">--}}
          {{--                        </div>--}}
          {{--                        <div--}}
          {{--                          class="u-hidden c-product-box__title c-product-box__title--app-incredible js-ab-app-incredible-product"><span--}}
          {{--                            class="c-product-box__title-special-sub">--}}
          {{--                    مشاهده و خرید این کالا تنها با اپلیکیشن {{ $fa_store_name }} امکان‌پذیر می‌باشد--}}
          {{--                </span></div>--}}
          {{--                        <div class="c-product-box__title  js-ab-not-app-incredible-product">--}}
          {{--                          مجموعه کنسول بازی سونی مدل PlayStation 5 ظرفیت 825 گیگابایت به همراه دسته اضافی--}}

          {{--                        </div>--}}
          {{--                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span--}}
          {{--                            class="c-product-box__digiplus-data c-digiplus-sign--before">--}}
          {{--                    ۰ تومان هدیه نقدی--}}
          {{--                </span></div>--}}
          {{--                        <div class="c-product-box__row c-product-box__row--price">--}}
          {{--                          <div class="c-price">--}}
          {{--                            <div class="c-price__value c-price__value--plp js-price-complete-details">--}}
          {{--                              <div class="c-price__value-wrapper">--}}
          {{--                                ۲۲,۹۵۰,۰۰۰ <span class="c-price__currency">تومان</span></div>--}}
          {{--                            </div>--}}
          {{--                          </div>--}}
          {{--                        </div>--}}
          {{--                        <div class="c-product-box__amazing">--}}
          {{--                          <div class="c-product-box__remained"></div>--}}
          {{--                        </div>--}}
          {{--                      </div>--}}
          {{--                    </li>--}}
          {{--                  </div>--}}
          {{--                  <div class="swiper-slide c-carousel__slide" data-id="3814476" data-position="10"--}}
          {{--                       style="width: 316px;">--}}
          {{--                    <li><a--}}
          {{--                        href="/product/dkp-3814476/گوشی-موبایل-اپل-مدل-iphone-12-pro-a2408-دو-سیم-کارت-ظرفیت-128-گیگابایت"--}}
          {{--                        data-id="3814476" class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>--}}
          {{--                      <div--}}
          {{--                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "--}}
          {{--                        title="">--}}
          {{--                        <div class="c-product-box__img js-url js-snt-carousel_product"--}}
          {{--                             title="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت"><span--}}
          {{--                            class="u-hidden c-product-box__title-special js-ab-app-incredible-product">--}}
          {{--                            شگفت‌انگیز اخـتـصـاصـی اپـلیـکیـشـن--}}
          {{--                    </span><img alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت"--}}
          {{--                                src="https://dkstatics-public.digikala.com/digikala-products/be7a0e9bf7866759fa3cea7648b149f589a01040_1607433891.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"--}}
          {{--                                class=" js-ab-not-app-incredible-product swiper-lazy swiper-lazy-loaded" loading="lazy">--}}
          {{--                        </div>--}}
          {{--                        <div--}}
          {{--                          class="u-hidden c-product-box__title c-product-box__title--app-incredible js-ab-app-incredible-product"><span--}}
          {{--                            class="c-product-box__title-special-sub">--}}
          {{--                    مشاهده و خرید این کالا تنها با اپلیکیشن {{ $fa_store_name }} امکان‌پذیر می‌باشد--}}
          {{--                </span></div>--}}
          {{--                        <div class="c-product-box__title  js-ab-not-app-incredible-product">--}}
          {{--                          گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت--}}

          {{--                        </div>--}}
          {{--                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span--}}
          {{--                            class="c-product-box__digiplus-data c-digiplus-sign--before">--}}
          {{--                    ۰ تومان هدیه نقدی--}}
          {{--                </span></div>--}}
          {{--                        <div class="c-product-box__row c-product-box__row--price">--}}
          {{--                          <div class="c-price">--}}
          {{--                            <div class="c-price__value c-price__value--plp js-price-complete-details">--}}
          {{--                              <div class="c-price__value-wrapper">--}}
          {{--                                ۳۶,۳۶۰,۰۰۰ <span class="c-price__currency">تومان</span></div>--}}
          {{--                            </div>--}}
          {{--                          </div>--}}
          {{--                        </div>--}}
          {{--                        <div class="c-product-box__amazing">--}}
          {{--                          <div class="c-product-box__remained"></div>--}}
          {{--                        </div>--}}
          {{--                      </div>--}}
          {{--                    </li>--}}
          {{--                  </div>--}}
          {{--                  <div class="swiper-slide c-carousel__slide" data-id="4223243" data-position="11"--}}
          {{--                       style="width: 316px;">--}}
          {{--                    <li><a href="/product/dkp-4223243/هدست-گیمینگ-سونی-پلی-استیشن-۵-مدل-plus-3d" data-id="4223243"--}}
          {{--                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>--}}
          {{--                      <div--}}
          {{--                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "--}}
          {{--                        title="">--}}
          {{--                        <div class="c-product-box__img js-url js-snt-carousel_product"--}}
          {{--                             title="هدست گیمینگ سونی پلی استیشن ۵ مدل PLUS 3D"><span--}}
          {{--                            class="u-hidden c-product-box__title-special js-ab-app-incredible-product">--}}
          {{--                            شگفت‌انگیز اخـتـصـاصـی اپـلیـکیـشـن--}}
          {{--                    </span><img alt="هدست گیمینگ سونی پلی استیشن ۵ مدل PLUS 3D"--}}
          {{--                                src="https://dkstatics-public.digikala.com/digikala-products/f559ce18fec9a47178f23d162ce44cc2ba9b3646_1610532495.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"--}}
          {{--                                class=" js-ab-not-app-incredible-product swiper-lazy swiper-lazy-loaded" loading="lazy">--}}
          {{--                        </div>--}}
          {{--                        <div--}}
          {{--                          class="u-hidden c-product-box__title c-product-box__title--app-incredible js-ab-app-incredible-product"><span--}}
          {{--                            class="c-product-box__title-special-sub">--}}
          {{--                    مشاهده و خرید این کالا تنها با اپلیکیشن {{ $fa_store_name }} امکان‌پذیر می‌باشد--}}
          {{--                </span></div>--}}
          {{--                        <div class="c-product-box__title  js-ab-not-app-incredible-product">--}}
          {{--                          هدست گیمینگ سونی پلی استیشن ۵ مدل PLUS 3D--}}

          {{--                        </div>--}}
          {{--                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span--}}
          {{--                            class="c-product-box__digiplus-data c-digiplus-sign--before">--}}
          {{--                    ۰ تومان هدیه نقدی--}}
          {{--                </span></div>--}}
          {{--                        <div class="c-product-box__row c-product-box__row--price">--}}
          {{--                          <div class="c-price">--}}
          {{--                            <div class="c-price__value c-price__value--plp js-price-complete-details">--}}
          {{--                              <div class="c-price__value-wrapper">--}}
          {{--                                ۳,۸۹۹,۰۰۰ <span class="c-price__currency">تومان</span></div>--}}
          {{--                            </div>--}}
          {{--                          </div>--}}
          {{--                        </div>--}}
          {{--                        <div class="c-product-box__amazing">--}}
          {{--                          <div class="c-product-box__remained"></div>--}}
          {{--                        </div>--}}
          {{--                      </div>--}}
          {{--                    </li>--}}
          {{--                  </div>--}}
          {{--                  <div class="swiper-slide c-carousel__slide" data-id="3737956" data-position="12"--}}
          {{--                       style="width: 316px;">--}}
          {{--                    <li><a href="/product/dkp-3737956/کنسول-بازی-سونی-مدل-playstation-5-ظرفیت-825-گیگابایت"--}}
          {{--                           data-id="3737956"--}}
          {{--                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>--}}
          {{--                      <div--}}
          {{--                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "--}}
          {{--                        title="">--}}
          {{--                        <div class="c-product-box__img js-url js-snt-carousel_product"--}}
          {{--                             title="کنسول بازی سونی مدل Playstation 5 ظرفیت 825 گیگابایت"><span--}}
          {{--                            class="u-hidden c-product-box__title-special js-ab-app-incredible-product">--}}
          {{--                            شگفت‌انگیز اخـتـصـاصـی اپـلیـکیـشـن--}}
          {{--                    </span><img alt="کنسول بازی سونی مدل Playstation 5 ظرفیت 825 گیگابایت"--}}
          {{--                                src="https://dkstatics-public.digikala.com/digikala-products/31e78c09327cad1790d8f12822bec094be4d242e_1605099166.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"--}}
          {{--                                class=" js-ab-not-app-incredible-product swiper-lazy swiper-lazy-loaded" loading="lazy">--}}
          {{--                        </div>--}}
          {{--                        <div--}}
          {{--                          class="u-hidden c-product-box__title c-product-box__title--app-incredible js-ab-app-incredible-product"><span--}}
          {{--                            class="c-product-box__title-special-sub">--}}
          {{--                    مشاهده و خرید این کالا تنها با اپلیکیشن {{ $fa_store_name }} امکان‌پذیر می‌باشد--}}
          {{--                </span></div>--}}
          {{--                        <div class="c-product-box__title  js-ab-not-app-incredible-product">--}}
          {{--                          کنسول بازی سونی مدل Playstation 5 ظرفیت 825 گیگابایت--}}

          {{--                        </div>--}}
          {{--                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span--}}
          {{--                            class="c-product-box__digiplus-data c-digiplus-sign--before">--}}
          {{--                    ۰ تومان هدیه نقدی--}}
          {{--                </span></div>--}}
          {{--                        <div class="c-product-box__row c-product-box__row--price">--}}
          {{--                          <div class="c-price">--}}
          {{--                            <div class="c-price__value c-price__value--plp js-price-complete-details">--}}
          {{--                              <div class="c-price__value-wrapper">--}}
          {{--                                ۲۲,۰۰۰,۰۰۰ <span class="c-price__currency">تومان</span></div>--}}
          {{--                            </div>--}}
          {{--                          </div>--}}
          {{--                        </div>--}}
          {{--                        <div class="c-product-box__amazing">--}}
          {{--                          <div class="c-product-box__remained"></div>--}}
          {{--                        </div>--}}
          {{--                      </div>--}}
          {{--                    </li>--}}
          {{--                  </div>--}}
          {{--                  <div class="swiper-slide c-carousel__slide" data-id="2922863" data-position="13"--}}
          {{--                       style="width: 316px;">--}}
          {{--                    <li><a--}}
          {{--                        href="/product/dkp-2922863/گوشی-موبایل-سامسونگ-مدل-galaxy-z-flip-sm-f700fds-تک-سیم-کارت-ظرفیت-256-گیگابایت"--}}
          {{--                        data-id="2922863" class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>--}}
          {{--                      <div--}}
          {{--                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "--}}
          {{--                        title="">--}}
          {{--                        <div class="c-product-box__img js-url js-snt-carousel_product"--}}
          {{--                             title="گوشی موبایل سامسونگ مدل Galaxy Z Flip SM-F700F/DS دو سیم کارت ظرفیت 256 گیگابایت"><span--}}
          {{--                            class="u-hidden c-product-box__title-special js-ab-app-incredible-product">--}}
          {{--                            شگفت‌انگیز اخـتـصـاصـی اپـلیـکیـشـن--}}
          {{--                    </span><img alt="گوشی موبایل سامسونگ مدل Galaxy Z Flip SM-F700F/DS دو سیم کارت ظرفیت 256 گیگابایت"--}}
          {{--                                src="https://dkstatics-public.digikala.com/digikala-products/121615088.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"--}}
          {{--                                class=" js-ab-not-app-incredible-product swiper-lazy swiper-lazy-loaded" loading="lazy">--}}
          {{--                        </div>--}}
          {{--                        <div--}}
          {{--                          class="u-hidden c-product-box__title c-product-box__title--app-incredible js-ab-app-incredible-product"><span--}}
          {{--                            class="c-product-box__title-special-sub">--}}
          {{--                    مشاهده و خرید این کالا تنها با اپلیکیشن {{ $fa_store_name }} امکان‌پذیر می‌باشد--}}
          {{--                </span></div>--}}
          {{--                        <div class="c-product-box__title  js-ab-not-app-incredible-product">--}}
          {{--                          گوشی موبایل سامسونگ مدل Galaxy Z Flip SM-F700F/DS دو سیم کارت ظرفیت 256 گیگابایت--}}

          {{--                        </div>--}}
          {{--                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span--}}
          {{--                            class="c-product-box__digiplus-data c-digiplus-sign--before">--}}
          {{--                    ۰ تومان هدیه نقدی--}}
          {{--                </span></div>--}}
          {{--                        <div class="c-product-box__row c-product-box__row--price">--}}
          {{--                          <div class="c-price">--}}
          {{--                            <div class="c-price__value c-price__value--plp js-price-complete-details">--}}
          {{--                              <div class="c-price__value-wrapper">--}}
          {{--                                ۱۸,۵۹۹,۰۰۰ <span class="c-price__currency">تومان</span></div>--}}
          {{--                            </div>--}}
          {{--                          </div>--}}
          {{--                        </div>--}}
          {{--                        <div class="c-product-box__amazing">--}}
          {{--                          <div class="c-product-box__remained"></div>--}}
          {{--                        </div>--}}
          {{--                      </div>--}}
          {{--                    </li>--}}
          {{--                  </div>--}}
          {{--                  <div class="swiper-slide c-carousel__slide" data-id="4048744" data-position="14"--}}
          {{--                       style="width: 316px;">--}}
          {{--                    <li><a--}}
          {{--                        href="/product/dkp-4048744/گوشی-موبایل-سامسونگ-مدل-galaxy-note20-ultra-5g-sm-n986bzkwxsg-دو-سیم-کارت-ظرفیت-256-گیگابایت"--}}
          {{--                        data-id="4048744" class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>--}}
          {{--                      <div--}}
          {{--                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "--}}
          {{--                        title="">--}}
          {{--                        <div class="c-product-box__img js-url js-snt-carousel_product"--}}
          {{--                             title="گوشی موبایل سامسونگ مدل Galaxy Note20 Ultra 5G SM-N986BZKWXSG دو سیم کارت ظرفیت 256 گیگابایت"><span--}}
          {{--                            class="u-hidden c-product-box__title-special js-ab-app-incredible-product">--}}
          {{--                            شگفت‌انگیز اخـتـصـاصـی اپـلیـکیـشـن--}}
          {{--                    </span><img--}}
          {{--                            alt="گوشی موبایل سامسونگ مدل Galaxy Note20 Ultra 5G SM-N986BZKWXSG دو سیم کارت ظرفیت 256 گیگابایت"--}}
          {{--                            src="https://dkstatics-public.digikala.com/digikala-products/0ca836dc8142c065747aa86a9899347631a5b9e5_1608382853.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"--}}
          {{--                            class=" js-ab-not-app-incredible-product swiper-lazy swiper-lazy-loaded" loading="lazy">--}}
          {{--                        </div>--}}
          {{--                        <div--}}
          {{--                          class="u-hidden c-product-box__title c-product-box__title--app-incredible js-ab-app-incredible-product"><span--}}
          {{--                            class="c-product-box__title-special-sub">--}}
          {{--                    مشاهده و خرید این کالا تنها با اپلیکیشن {{ $fa_store_name }} امکان‌پذیر می‌باشد--}}
          {{--                </span></div>--}}
          {{--                        <div class="c-product-box__title  js-ab-not-app-incredible-product">--}}
          {{--                          گوشی موبایل سامسونگ مدل Galaxy Note20 Ultra 5G SM-N986BZKWXSG دو سیم کارت ظرفیت 256 گیگابا--}}
          {{--                          ...--}}
          {{--                        </div>--}}
          {{--                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span--}}
          {{--                            class="c-product-box__digiplus-data c-digiplus-sign--before">--}}
          {{--                    ۰ تومان هدیه نقدی--}}
          {{--                </span></div>--}}
          {{--                        <div class="c-product-box__row c-product-box__row--price">--}}
          {{--                          <div class="c-price">--}}
          {{--                            <div class="c-price__value c-price__value--plp js-price-complete-details">--}}
          {{--                              <div class="c-price__value-wrapper">--}}
          {{--                                ۳۱,۲۰۰,۰۰۰ <span class="c-price__currency">تومان</span></div>--}}
          {{--                            </div>--}}
          {{--                          </div>--}}
          {{--                        </div>--}}
          {{--                        <div class="c-product-box__amazing">--}}
          {{--                          <div class="c-product-box__remained"></div>--}}
          {{--                        </div>--}}
          {{--                      </div>--}}
          {{--                    </li>--}}
          {{--                  </div>--}}
          {{--                  <div class="swiper-slide c-carousel__slide" data-id="3432127" data-position="15"--}}
          {{--                       style="width: 316px;">--}}
          {{--                    <li><a href="/product/dkp-3432127/ساعت-هوشمند-اپل-سری-6-مدل-aluminum-case-44mm" data-id="3432127"--}}
          {{--                           class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>--}}
          {{--                      <div--}}
          {{--                        class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "--}}
          {{--                        title="">--}}
          {{--                        <div class="c-product-box__img js-url js-snt-carousel_product"--}}
          {{--                             title="ساعت هوشمند اپل سری 6 مدل Aluminum Case 44mm"><span--}}
          {{--                            class="u-hidden c-product-box__title-special js-ab-app-incredible-product">--}}
          {{--                            شگفت‌انگیز اخـتـصـاصـی اپـلیـکیـشـن--}}
          {{--                    </span><img alt="ساعت هوشمند اپل سری 6 مدل Aluminum Case 44mm"--}}
          {{--                                src="https://dkstatics-public.digikala.com/digikala-products/cd6a59e7a7d277e2de97d93aec0c950fc773e659_1600689705.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"--}}
          {{--                                class=" js-ab-not-app-incredible-product swiper-lazy swiper-lazy-loaded" loading="lazy">--}}
          {{--                        </div>--}}
          {{--                        <div--}}
          {{--                          class="u-hidden c-product-box__title c-product-box__title--app-incredible js-ab-app-incredible-product"><span--}}
          {{--                            class="c-product-box__title-special-sub">--}}
          {{--                    مشاهده و خرید این کالا تنها با اپلیکیشن {{ $fa_store_name }} امکان‌پذیر می‌باشد--}}
          {{--                </span></div>--}}
          {{--                        <div class="c-product-box__title  js-ab-not-app-incredible-product">--}}
          {{--                          ساعت هوشمند اپل سری 6 مدل Aluminum Case 44mm--}}

          {{--                        </div>--}}
          {{--                        <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span--}}
          {{--                            class="c-product-box__digiplus-data c-digiplus-sign--before">--}}
          {{--                    ۰ تومان هدیه نقدی--}}
          {{--                </span></div>--}}
          {{--                        <div class="c-product-box__row c-product-box__row--price">--}}
          {{--                          <div class="c-price">--}}
          {{--                            <div class="c-price__value c-price__value--plp js-price-complete-details">--}}
          {{--                              <div class="c-price__value-wrapper">--}}
          {{--                                ۱۱,۸۹۰,۰۰۰ <span class="c-price__currency">تومان</span></div>--}}
          {{--                            </div>--}}
          {{--                          </div>--}}
          {{--                        </div>--}}
          {{--                        <div class="c-product-box__amazing">--}}
          {{--                          <div class="c-product-box__remained"></div>--}}
          {{--                        </div>--}}
          {{--                      </div>--}}
          {{--                    </li>--}}
          {{--                  </div>--}}
          {{--                </div>--}}
          {{--                <div class="swiper-button-prev js-swiper-button-prev swiper-button-disabled"></div>--}}
          {{--                <div class="swiper-button-next js-swiper-button-next"></div>--}}
          {{--              </div>--}}
          {{--            </div>--}}
          {{--          </div>--}}


        </div>
      </div>
      <div id="product-template" class="u-hidden">
        <div class="swiper-slide c-carousel__slide" data-id="{id}">
          <div class="c-product-box c-product-box--no-shadow"><a
              class="c-product-box__img js-url js-carousel-ga-product-box" data-id="{id}" href="{url}"><img
                data-img="{image}" alt="{title}" class="swiper-lazy js-template-img" loading="lazy"><img
                class="c-product-box__fmcg-symbol {isFMCG}" loading="lazy"
                src="https://www.digikala.com/static/files/31a78819.svg"></a>
            <div class="c-product-box__title"><a href="{url}" data-id="{id}" class="js-carousel-ga-product-box">
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
          <div class="c-remodal-gallery__main-img js-gallery-main-img js-video-container">
            <div
              class="video-js vjs-default-skin vjs-big-play-centered vjs-paused vjs-fluid pdp-video-container-dimensions vjs-controls-enabled vjs-workinghover vjs-v7 vjs-user-active"
              id="pdp-video-container" tabindex="-1" lang="en-us" role="region" aria-label="Video Player">
              <video id="pdp-video-container_html5_api" class="vjs-tech" tabindex="-1" preload="none"></video>
              <div class="vjs-poster vjs-hidden" tabindex="-1" aria-disabled="false"></div>
              <div class="vjs-text-track-display" aria-live="off" aria-atomic="true"></div>
              <div class="vjs-loading-spinner" dir="ltr"><span class="vjs-control-text">Video Player is loading.</span>
              </div>
              <button class="vjs-big-play-button" type="button" title="Play Video" aria-disabled="false"><span
                  aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                                                                               aria-live="polite">Play Video</span>
              </button>
              <div class="vjs-control-bar" dir="ltr">
                <button class="vjs-play-control vjs-control vjs-button" type="button" title="Play"
                        aria-disabled="false"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span
                    class="vjs-control-text" aria-live="polite">Play</span></button>
                <div class="vjs-volume-panel vjs-control vjs-volume-panel-horizontal">
                  <button class="vjs-mute-control vjs-control vjs-button" type="button" title="Mute"
                          aria-disabled="false"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span
                      class="vjs-control-text" aria-live="polite">Mute</span></button>
                  <div class="vjs-volume-control vjs-control vjs-volume-horizontal">
                    <div tabindex="0" class="vjs-volume-bar vjs-slider-bar vjs-slider vjs-slider-horizontal"
                         role="slider" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                         aria-label="Volume Level" aria-live="polite" aria-valuetext="100%">
                      <div class="vjs-volume-level"><span class="vjs-control-text"></span></div>
                    </div>
                  </div>
                </div>
                <div class="vjs-current-time vjs-time-control vjs-control"><span class="vjs-control-text"
                                                                                 role="presentation">Current Time </span><span
                    class="vjs-current-time-display" aria-live="off" role="presentation">0:00</span></div>
                <div class="vjs-time-control vjs-time-divider" aria-hidden="true">
                  <div><span>/</span></div>
                </div>
                <div class="vjs-duration vjs-time-control vjs-control"><span class="vjs-control-text"
                                                                             role="presentation">Duration </span><span
                    class="vjs-duration-display" aria-live="off" role="presentation">0:00</span></div>
                <div class="vjs-progress-control vjs-control">
                  <div tabindex="0" class="vjs-progress-holder vjs-slider vjs-slider-horizontal" role="slider"
                       aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" aria-label="Progress Bar">
                    <div class="vjs-load-progress"><span class="vjs-control-text"><span>Loaded</span>: <span
                          class="vjs-control-text-loaded-percentage">0%</span></span></div>
                    <div class="vjs-mouse-display">
                      <div class="vjs-time-tooltip" aria-hidden="true"></div>
                    </div>
                    <div class="vjs-play-progress vjs-slider-bar" aria-hidden="true">
                      <div class="vjs-time-tooltip" aria-hidden="true"></div>
                    </div>
                  </div>
                </div>
                <div class="vjs-live-control vjs-control vjs-hidden">
                  <div class="vjs-live-display" aria-live="off"><span class="vjs-control-text">Stream Type </span>LIVE
                  </div>
                </div>
                <button class="vjs-seek-to-live-control vjs-control vjs-at-live-edge" type="button"
                        title="Seek to live, currently playing live" aria-disabled="true"><span aria-hidden="true"
                                                                                                class="vjs-icon-placeholder"></span><span
                    class="vjs-control-text" aria-live="polite">Seek to live, currently playing live</span><span
                    class="vjs-seek-to-live-text" aria-hidden="true">LIVE</span></button>
                <div class="vjs-remaining-time vjs-time-control vjs-control"><span class="vjs-control-text"
                                                                                   role="presentation">Remaining Time </span><span
                    aria-hidden="true">-</span><span class="vjs-remaining-time-display" aria-live="off"
                                                     role="presentation">0:00</span></div>
                <div class="vjs-custom-control-spacer vjs-spacer "></div>
                <div class="vjs-playback-rate vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden">
                  <button class="vjs-playback-rate vjs-menu-button vjs-menu-button-popup vjs-button" type="button"
                          aria-disabled="false" title="Playback Rate" aria-haspopup="true" aria-expanded="false"><span
                      aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                                                                                   aria-live="polite">Playback Rate</span>
                  </button>
                  <div class="vjs-menu">
                    <ul class="vjs-menu-content" role="menu"></ul>
                  </div>
                  <div class="vjs-playback-rate-value">1x</div>
                </div>
                <div
                  class="vjs-chapters-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden">
                  <button class="vjs-chapters-button vjs-menu-button vjs-menu-button-popup vjs-button" type="button"
                          aria-disabled="false" title="Chapters" aria-haspopup="true" aria-expanded="false"><span
                      aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                                                                                   aria-live="polite">Chapters</span>
                  </button>
                  <div class="vjs-menu">
                    <ul class="vjs-menu-content" role="menu">
                      <li class="vjs-menu-title" tabindex="-1">Chapters</li>
                    </ul>
                  </div>
                </div>
                <div
                  class="vjs-descriptions-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden">
                  <button class="vjs-descriptions-button vjs-menu-button vjs-menu-button-popup vjs-button" type="button"
                          aria-disabled="false" title="Descriptions" aria-haspopup="true" aria-expanded="false"><span
                      aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                                                                                   aria-live="polite">Descriptions</span>
                  </button>
                  <div class="vjs-menu">
                    <ul class="vjs-menu-content" role="menu">
                      <li class="vjs-menu-item vjs-selected" tabindex="-1" role="menuitemradio" aria-disabled="false"
                          aria-checked="true"><span class="vjs-menu-item-text">descriptions off</span><span
                          class="vjs-control-text" aria-live="polite">, selected</span></li>
                    </ul>
                  </div>
                </div>
                <div
                  class="vjs-subs-caps-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden">
                  <button class="vjs-subs-caps-button vjs-menu-button vjs-menu-button-popup vjs-button" type="button"
                          aria-disabled="false" title="Captions" aria-haspopup="true" aria-expanded="false"><span
                      aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                                                                                   aria-live="polite">Captions</span>
                  </button>
                  <div class="vjs-menu">
                    <ul class="vjs-menu-content" role="menu">
                      <li class="vjs-menu-item vjs-texttrack-settings" tabindex="-1" role="menuitem"
                          aria-disabled="false"><span class="vjs-menu-item-text">captions settings</span><span
                          class="vjs-control-text" aria-live="polite">, opens captions settings dialog</span></li>
                      <li class="vjs-menu-item vjs-selected" tabindex="-1" role="menuitemradio" aria-disabled="false"
                          aria-checked="true"><span class="vjs-menu-item-text">captions off</span><span
                          class="vjs-control-text" aria-live="polite">, selected</span></li>
                    </ul>
                  </div>
                </div>
                <div class="vjs-audio-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden">
                  <button class="vjs-audio-button vjs-menu-button vjs-menu-button-popup vjs-button" type="button"
                          aria-disabled="false" title="Audio Track" aria-haspopup="true" aria-expanded="false"><span
                      aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                                                                                   aria-live="polite">Audio Track</span>
                  </button>
                  <div class="vjs-menu">
                    <ul class="vjs-menu-content" role="menu"></ul>
                  </div>
                </div>
                <button class="vjs-picture-in-picture-control vjs-control vjs-button" type="button"
                        title="Picture-in-Picture" aria-disabled="false"><span aria-hidden="true"
                                                                               class="vjs-icon-placeholder"></span><span
                    class="vjs-control-text" aria-live="polite">Picture-in-Picture</span></button>
                <button class="vjs-fullscreen-control vjs-control vjs-button" type="button" title="Fullscreen"
                        aria-disabled="false"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span
                    class="vjs-control-text" aria-live="polite">Fullscreen</span></button>
              </div>
              <div class="vjs-error-display vjs-modal-dialog vjs-hidden " tabindex="-1"
                   aria-describedby="pdp-video-container_component_427_description" aria-hidden="true"
                   aria-label="Modal Window" role="dialog"><p class="vjs-modal-dialog-description vjs-control-text"
                                                              id="pdp-video-container_component_427_description">This is
                  a modal window.</p>
                <div class="vjs-modal-dialog-content" role="document"></div>
              </div>
              <div class="vjs-modal-dialog vjs-hidden  vjs-text-track-settings" tabindex="-1"
                   aria-describedby="pdp-video-container_component_432_description" aria-hidden="true"
                   aria-label="Caption Settings Dialog" role="dialog"><p
                  class="vjs-modal-dialog-description vjs-control-text"
                  id="pdp-video-container_component_432_description">Beginning of dialog window. Escape will cancel and
                  close the window.</p>
                <div class="vjs-modal-dialog-content" role="document">
                  <div class="vjs-track-settings-colors">
                    <fieldset class="vjs-fg-color vjs-track-setting">
                      <legend id="captions-text-legend-pdp-video-container_component_432">Text</legend>
                      <label id="captions-foreground-color-pdp-video-container_component_432"
                             class="vjs-label">Color</label><select
                        aria-labelledby="captions-text-legend-pdp-video-container_component_432 captions-foreground-color-pdp-video-container_component_432">
                        <option id="captions-foreground-color-pdp-video-container_component_432-White" value="#FFF"
                                aria-labelledby="captions-text-legend-pdp-video-container_component_432 captions-foreground-color-pdp-video-container_component_432 captions-foreground-color-pdp-video-container_component_432-White">
                          White
                        </option>
                        <option id="captions-foreground-color-pdp-video-container_component_432-Black" value="#000"
                                aria-labelledby="captions-text-legend-pdp-video-container_component_432 captions-foreground-color-pdp-video-container_component_432 captions-foreground-color-pdp-video-container_component_432-Black">
                          Black
                        </option>
                        <option id="captions-foreground-color-pdp-video-container_component_432-Red" value="#F00"
                                aria-labelledby="captions-text-legend-pdp-video-container_component_432 captions-foreground-color-pdp-video-container_component_432 captions-foreground-color-pdp-video-container_component_432-Red">
                          Red
                        </option>
                        <option id="captions-foreground-color-pdp-video-container_component_432-Green" value="#0F0"
                                aria-labelledby="captions-text-legend-pdp-video-container_component_432 captions-foreground-color-pdp-video-container_component_432 captions-foreground-color-pdp-video-container_component_432-Green">
                          Green
                        </option>
                        <option id="captions-foreground-color-pdp-video-container_component_432-Blue" value="#00F"
                                aria-labelledby="captions-text-legend-pdp-video-container_component_432 captions-foreground-color-pdp-video-container_component_432 captions-foreground-color-pdp-video-container_component_432-Blue">
                          Blue
                        </option>
                        <option id="captions-foreground-color-pdp-video-container_component_432-Yellow" value="#FF0"
                                aria-labelledby="captions-text-legend-pdp-video-container_component_432 captions-foreground-color-pdp-video-container_component_432 captions-foreground-color-pdp-video-container_component_432-Yellow">
                          Yellow
                        </option>
                        <option id="captions-foreground-color-pdp-video-container_component_432-Magenta" value="#F0F"
                                aria-labelledby="captions-text-legend-pdp-video-container_component_432 captions-foreground-color-pdp-video-container_component_432 captions-foreground-color-pdp-video-container_component_432-Magenta">
                          Magenta
                        </option>
                        <option id="captions-foreground-color-pdp-video-container_component_432-Cyan" value="#0FF"
                                aria-labelledby="captions-text-legend-pdp-video-container_component_432 captions-foreground-color-pdp-video-container_component_432 captions-foreground-color-pdp-video-container_component_432-Cyan">
                          Cyan
                        </option>
                      </select><span class="vjs-text-opacity vjs-opacity"><label
                          id="captions-foreground-opacity-pdp-video-container_component_432" class="vjs-label">Transparency</label><select
                          aria-labelledby="captions-text-legend-pdp-video-container_component_432 captions-foreground-opacity-pdp-video-container_component_432"><option
                            id="captions-foreground-opacity-pdp-video-container_component_432-Opaque" value="1"
                            aria-labelledby="captions-text-legend-pdp-video-container_component_432 captions-foreground-opacity-pdp-video-container_component_432 captions-foreground-opacity-pdp-video-container_component_432-Opaque">Opaque</option><option
                            id="captions-foreground-opacity-pdp-video-container_component_432-SemiTransparent"
                            value="0.5"
                            aria-labelledby="captions-text-legend-pdp-video-container_component_432 captions-foreground-opacity-pdp-video-container_component_432 captions-foreground-opacity-pdp-video-container_component_432-SemiTransparent">Semi-Transparent</option></select></span>
                    </fieldset>
                    <fieldset class="vjs-bg-color vjs-track-setting">
                      <legend id="captions-background-pdp-video-container_component_432">Background</legend>
                      <label id="captions-background-color-pdp-video-container_component_432"
                             class="vjs-label">Color</label><select
                        aria-labelledby="captions-background-pdp-video-container_component_432 captions-background-color-pdp-video-container_component_432">
                        <option id="captions-background-color-pdp-video-container_component_432-Black" value="#000"
                                aria-labelledby="captions-background-pdp-video-container_component_432 captions-background-color-pdp-video-container_component_432 captions-background-color-pdp-video-container_component_432-Black">
                          Black
                        </option>
                        <option id="captions-background-color-pdp-video-container_component_432-White" value="#FFF"
                                aria-labelledby="captions-background-pdp-video-container_component_432 captions-background-color-pdp-video-container_component_432 captions-background-color-pdp-video-container_component_432-White">
                          White
                        </option>
                        <option id="captions-background-color-pdp-video-container_component_432-Red" value="#F00"
                                aria-labelledby="captions-background-pdp-video-container_component_432 captions-background-color-pdp-video-container_component_432 captions-background-color-pdp-video-container_component_432-Red">
                          Red
                        </option>
                        <option id="captions-background-color-pdp-video-container_component_432-Green" value="#0F0"
                                aria-labelledby="captions-background-pdp-video-container_component_432 captions-background-color-pdp-video-container_component_432 captions-background-color-pdp-video-container_component_432-Green">
                          Green
                        </option>
                        <option id="captions-background-color-pdp-video-container_component_432-Blue" value="#00F"
                                aria-labelledby="captions-background-pdp-video-container_component_432 captions-background-color-pdp-video-container_component_432 captions-background-color-pdp-video-container_component_432-Blue">
                          Blue
                        </option>
                        <option id="captions-background-color-pdp-video-container_component_432-Yellow" value="#FF0"
                                aria-labelledby="captions-background-pdp-video-container_component_432 captions-background-color-pdp-video-container_component_432 captions-background-color-pdp-video-container_component_432-Yellow">
                          Yellow
                        </option>
                        <option id="captions-background-color-pdp-video-container_component_432-Magenta" value="#F0F"
                                aria-labelledby="captions-background-pdp-video-container_component_432 captions-background-color-pdp-video-container_component_432 captions-background-color-pdp-video-container_component_432-Magenta">
                          Magenta
                        </option>
                        <option id="captions-background-color-pdp-video-container_component_432-Cyan" value="#0FF"
                                aria-labelledby="captions-background-pdp-video-container_component_432 captions-background-color-pdp-video-container_component_432 captions-background-color-pdp-video-container_component_432-Cyan">
                          Cyan
                        </option>
                      </select><span class="vjs-bg-opacity vjs-opacity"><label
                          id="captions-background-opacity-pdp-video-container_component_432" class="vjs-label">Transparency</label><select
                          aria-labelledby="captions-background-pdp-video-container_component_432 captions-background-opacity-pdp-video-container_component_432"><option
                            id="captions-background-opacity-pdp-video-container_component_432-Opaque" value="1"
                            aria-labelledby="captions-background-pdp-video-container_component_432 captions-background-opacity-pdp-video-container_component_432 captions-background-opacity-pdp-video-container_component_432-Opaque">Opaque</option><option
                            id="captions-background-opacity-pdp-video-container_component_432-SemiTransparent"
                            value="0.5"
                            aria-labelledby="captions-background-pdp-video-container_component_432 captions-background-opacity-pdp-video-container_component_432 captions-background-opacity-pdp-video-container_component_432-SemiTransparent">Semi-Transparent</option><option
                            id="captions-background-opacity-pdp-video-container_component_432-Transparent" value="0"
                            aria-labelledby="captions-background-pdp-video-container_component_432 captions-background-opacity-pdp-video-container_component_432 captions-background-opacity-pdp-video-container_component_432-Transparent">Transparent</option></select></span>
                    </fieldset>
                    <fieldset class="vjs-window-color vjs-track-setting">
                      <legend id="captions-window-pdp-video-container_component_432">Window</legend>
                      <label id="captions-window-color-pdp-video-container_component_432"
                             class="vjs-label">Color</label><select
                        aria-labelledby="captions-window-pdp-video-container_component_432 captions-window-color-pdp-video-container_component_432">
                        <option id="captions-window-color-pdp-video-container_component_432-Black" value="#000"
                                aria-labelledby="captions-window-pdp-video-container_component_432 captions-window-color-pdp-video-container_component_432 captions-window-color-pdp-video-container_component_432-Black">
                          Black
                        </option>
                        <option id="captions-window-color-pdp-video-container_component_432-White" value="#FFF"
                                aria-labelledby="captions-window-pdp-video-container_component_432 captions-window-color-pdp-video-container_component_432 captions-window-color-pdp-video-container_component_432-White">
                          White
                        </option>
                        <option id="captions-window-color-pdp-video-container_component_432-Red" value="#F00"
                                aria-labelledby="captions-window-pdp-video-container_component_432 captions-window-color-pdp-video-container_component_432 captions-window-color-pdp-video-container_component_432-Red">
                          Red
                        </option>
                        <option id="captions-window-color-pdp-video-container_component_432-Green" value="#0F0"
                                aria-labelledby="captions-window-pdp-video-container_component_432 captions-window-color-pdp-video-container_component_432 captions-window-color-pdp-video-container_component_432-Green">
                          Green
                        </option>
                        <option id="captions-window-color-pdp-video-container_component_432-Blue" value="#00F"
                                aria-labelledby="captions-window-pdp-video-container_component_432 captions-window-color-pdp-video-container_component_432 captions-window-color-pdp-video-container_component_432-Blue">
                          Blue
                        </option>
                        <option id="captions-window-color-pdp-video-container_component_432-Yellow" value="#FF0"
                                aria-labelledby="captions-window-pdp-video-container_component_432 captions-window-color-pdp-video-container_component_432 captions-window-color-pdp-video-container_component_432-Yellow">
                          Yellow
                        </option>
                        <option id="captions-window-color-pdp-video-container_component_432-Magenta" value="#F0F"
                                aria-labelledby="captions-window-pdp-video-container_component_432 captions-window-color-pdp-video-container_component_432 captions-window-color-pdp-video-container_component_432-Magenta">
                          Magenta
                        </option>
                        <option id="captions-window-color-pdp-video-container_component_432-Cyan" value="#0FF"
                                aria-labelledby="captions-window-pdp-video-container_component_432 captions-window-color-pdp-video-container_component_432 captions-window-color-pdp-video-container_component_432-Cyan">
                          Cyan
                        </option>
                      </select><span class="vjs-window-opacity vjs-opacity"><label
                          id="captions-window-opacity-pdp-video-container_component_432"
                          class="vjs-label">Transparency</label><select
                          aria-labelledby="captions-window-pdp-video-container_component_432 captions-window-opacity-pdp-video-container_component_432"><option
                            id="captions-window-opacity-pdp-video-container_component_432-Transparent" value="0"
                            aria-labelledby="captions-window-pdp-video-container_component_432 captions-window-opacity-pdp-video-container_component_432 captions-window-opacity-pdp-video-container_component_432-Transparent">Transparent</option><option
                            id="captions-window-opacity-pdp-video-container_component_432-SemiTransparent" value="0.5"
                            aria-labelledby="captions-window-pdp-video-container_component_432 captions-window-opacity-pdp-video-container_component_432 captions-window-opacity-pdp-video-container_component_432-SemiTransparent">Semi-Transparent</option><option
                            id="captions-window-opacity-pdp-video-container_component_432-Opaque" value="1"
                            aria-labelledby="captions-window-pdp-video-container_component_432 captions-window-opacity-pdp-video-container_component_432 captions-window-opacity-pdp-video-container_component_432-Opaque">Opaque</option></select></span>
                    </fieldset>
                  </div>
                  <div class="vjs-track-settings-font">
                    <fieldset class="vjs-font-percent vjs-track-setting">
                      <legend id="captions-font-size-pdp-video-container_component_432" class="">Font Size</legend>
                      <select aria-labelledby="captions-font-size-pdp-video-container_component_432">
                        <option id="captions-font-size-pdp-video-container_component_432-50" value="0.50"
                                aria-labelledby="captions-font-size-pdp-video-container_component_432 captions-font-size-pdp-video-container_component_432-50">
                          50%
                        </option>
                        <option id="captions-font-size-pdp-video-container_component_432-75" value="0.75"
                                aria-labelledby="captions-font-size-pdp-video-container_component_432 captions-font-size-pdp-video-container_component_432-75">
                          75%
                        </option>
                        <option id="captions-font-size-pdp-video-container_component_432-100" value="1.00"
                                aria-labelledby="captions-font-size-pdp-video-container_component_432 captions-font-size-pdp-video-container_component_432-100">
                          100%
                        </option>
                        <option id="captions-font-size-pdp-video-container_component_432-125" value="1.25"
                                aria-labelledby="captions-font-size-pdp-video-container_component_432 captions-font-size-pdp-video-container_component_432-125">
                          125%
                        </option>
                        <option id="captions-font-size-pdp-video-container_component_432-150" value="1.50"
                                aria-labelledby="captions-font-size-pdp-video-container_component_432 captions-font-size-pdp-video-container_component_432-150">
                          150%
                        </option>
                        <option id="captions-font-size-pdp-video-container_component_432-175" value="1.75"
                                aria-labelledby="captions-font-size-pdp-video-container_component_432 captions-font-size-pdp-video-container_component_432-175">
                          175%
                        </option>
                        <option id="captions-font-size-pdp-video-container_component_432-200" value="2.00"
                                aria-labelledby="captions-font-size-pdp-video-container_component_432 captions-font-size-pdp-video-container_component_432-200">
                          200%
                        </option>
                        <option id="captions-font-size-pdp-video-container_component_432-300" value="3.00"
                                aria-labelledby="captions-font-size-pdp-video-container_component_432 captions-font-size-pdp-video-container_component_432-300">
                          300%
                        </option>
                        <option id="captions-font-size-pdp-video-container_component_432-400" value="4.00"
                                aria-labelledby="captions-font-size-pdp-video-container_component_432 captions-font-size-pdp-video-container_component_432-400">
                          400%
                        </option>
                      </select></fieldset>
                    <fieldset class="vjs-edge-style vjs-track-setting">
                      <legend id="pdp-video-container_component_432" class="">Text Edge Style</legend>
                      <select aria-labelledby="pdp-video-container_component_432">
                        <option id="pdp-video-container_component_432-None" value="none"
                                aria-labelledby="pdp-video-container_component_432 pdp-video-container_component_432-None">
                          None
                        </option>
                        <option id="pdp-video-container_component_432-Raised" value="raised"
                                aria-labelledby="pdp-video-container_component_432 pdp-video-container_component_432-Raised">
                          Raised
                        </option>
                        <option id="pdp-video-container_component_432-Depressed" value="depressed"
                                aria-labelledby="pdp-video-container_component_432 pdp-video-container_component_432-Depressed">
                          Depressed
                        </option>
                        <option id="pdp-video-container_component_432-Uniform" value="uniform"
                                aria-labelledby="pdp-video-container_component_432 pdp-video-container_component_432-Uniform">
                          Uniform
                        </option>
                        <option id="pdp-video-container_component_432-Dropshadow" value="dropshadow"
                                aria-labelledby="pdp-video-container_component_432 pdp-video-container_component_432-Dropshadow">
                          Dropshadow
                        </option>
                      </select></fieldset>
                    <fieldset class="vjs-font-family vjs-track-setting">
                      <legend id="captions-font-family-pdp-video-container_component_432" class="">Font Family</legend>
                      <select aria-labelledby="captions-font-family-pdp-video-container_component_432">
                        <option id="captions-font-family-pdp-video-container_component_432-ProportionalSansSerif"
                                value="proportionalSansSerif"
                                aria-labelledby="captions-font-family-pdp-video-container_component_432 captions-font-family-pdp-video-container_component_432-ProportionalSansSerif">
                          Proportional Sans-Serif
                        </option>
                        <option id="captions-font-family-pdp-video-container_component_432-MonospaceSansSerif"
                                value="monospaceSansSerif"
                                aria-labelledby="captions-font-family-pdp-video-container_component_432 captions-font-family-pdp-video-container_component_432-MonospaceSansSerif">
                          Monospace Sans-Serif
                        </option>
                        <option id="captions-font-family-pdp-video-container_component_432-ProportionalSerif"
                                value="proportionalSerif"
                                aria-labelledby="captions-font-family-pdp-video-container_component_432 captions-font-family-pdp-video-container_component_432-ProportionalSerif">
                          Proportional Serif
                        </option>
                        <option id="captions-font-family-pdp-video-container_component_432-MonospaceSerif"
                                value="monospaceSerif"
                                aria-labelledby="captions-font-family-pdp-video-container_component_432 captions-font-family-pdp-video-container_component_432-MonospaceSerif">
                          Monospace Serif
                        </option>
                        <option id="captions-font-family-pdp-video-container_component_432-Casual" value="casual"
                                aria-labelledby="captions-font-family-pdp-video-container_component_432 captions-font-family-pdp-video-container_component_432-Casual">
                          Casual
                        </option>
                        <option id="captions-font-family-pdp-video-container_component_432-Script" value="script"
                                aria-labelledby="captions-font-family-pdp-video-container_component_432 captions-font-family-pdp-video-container_component_432-Script">
                          Script
                        </option>
                        <option id="captions-font-family-pdp-video-container_component_432-SmallCaps" value="small-caps"
                                aria-labelledby="captions-font-family-pdp-video-container_component_432 captions-font-family-pdp-video-container_component_432-SmallCaps">
                          Small Caps
                        </option>
                      </select></fieldset>
                  </div>
                  <div class="vjs-track-settings-controls">
                    <button type="button" class="vjs-default-button" title="restore all settings to the default values">
                      Reset<span class="vjs-control-text"> restore all settings to the default values</span></button>
                    <button type="button" class="vjs-done-button">Done</button>
                  </div>
                </div>
                <button class="vjs-close-button vjs-control vjs-button" type="button" aria-disabled="false"
                        title="Close Modal Dialog"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span
                    class="vjs-control-text" aria-live="polite">Close Modal Dialog</span></button>
                <p class="vjs-control-text">End of dialog window.</p></div>
            </div>
          </div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img js-img-main-1" data-slide-title="Slide "><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/b8e8c96afe990d290e525567c591fd4bd57d50bf_1602671368.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/b8e8c96afe990d290e525567c591fd4bd57d50bf_1602671368.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت main 1 1" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/b8e8c96afe990d290e525567c591fd4bd57d50bf_1602671368.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img js-img-main-2 is-active"
               data-slide-title="Slide 1"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/d3a25e245201a00e4ee68c2f2e4b9c437712a3f0_1602671369.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/d3a25e245201a00e4ee68c2f2e4b9c437712a3f0_1602671369.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت main 1 2" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/d3a25e245201a00e4ee68c2f2e4b9c437712a3f0_1602671369.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img js-img-main-3" data-slide-title="Slide 2"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/2fe36ebb47c6c22158e0c3f62acb8043b516fe7d_1602671371.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/2fe36ebb47c6c22158e0c3f62acb8043b516fe7d_1602671371.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت main 1 3" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/2fe36ebb47c6c22158e0c3f62acb8043b516fe7d_1602671371.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img js-img-main-4" data-slide-title="Slide 3"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/1d3132f88b1513030d6e5e15ae3fc483953f40f6_1602671371.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/1d3132f88b1513030d6e5e15ae3fc483953f40f6_1602671371.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت main 1 4" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/1d3132f88b1513030d6e5e15ae3fc483953f40f6_1602671371.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img js-img-main-5" data-slide-title="Slide 4"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/98c56166fe774a2ae81baef6c9ab5bb299ee08e6_1606735162.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/98c56166fe774a2ae81baef6c9ab5bb299ee08e6_1606735162.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت main 1 5" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/98c56166fe774a2ae81baef6c9ab5bb299ee08e6_1606735162.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img js-img-main-6" data-slide-title="Slide 5"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/0e8fa0d4c5607a2768d1d718db56c96423413e91_1606735164.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/0e8fa0d4c5607a2768d1d718db56c96423413e91_1606735164.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت main 1 6" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/0e8fa0d4c5607a2768d1d718db56c96423413e91_1606735164.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img js-img-main-7" data-slide-title="Slide 6"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/a174e64b5cbc60b66de6a373c5b5c1166d713af3_1606735167.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/a174e64b5cbc60b66de6a373c5b5c1166d713af3_1606735167.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت main 1 7" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/a174e64b5cbc60b66de6a373c5b5c1166d713af3_1606735167.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img js-img-main-8" data-slide-title="Slide 7"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/7542028fdec96803415f4f43a469d06fe8c4b962_1606735170.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/7542028fdec96803415f4f43a469d06fe8c4b962_1606735170.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت main 1 8" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/7542028fdec96803415f4f43a469d06fe8c4b962_1606735170.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img js-img-main-9" data-slide-title="Slide 8"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/cafe874fb584fd25b1f20e805fec0a36384a5058_1606735174.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/cafe874fb584fd25b1f20e805fec0a36384a5058_1606735174.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت main 1 9" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/cafe874fb584fd25b1f20e805fec0a36384a5058_1606735174.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img js-img-main-10" data-slide-title="Slide 9"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/805d888f53a7afee44a300ce282f74ebea5ba642_1606735179.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/805d888f53a7afee44a300ce282f74ebea5ba642_1606735179.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت main 1 10" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/805d888f53a7afee44a300ce282f74ebea5ba642_1606735179.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img js-img-main-11" data-slide-title="Slide 10"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/cdbf1b502e9928190990ce5b75562a9ccea0b234_1606735182.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/cdbf1b502e9928190990ce5b75562a9ccea0b234_1606735182.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت main 1 11" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/cdbf1b502e9928190990ce5b75562a9ccea0b234_1606735182.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img js-img-main-12" data-slide-title="Slide 11"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/e5ce7aadd4394fba2e667d32a207457cfb9f59b6_1606735185.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/e5ce7aadd4394fba2e667d32a207457cfb9f59b6_1606735185.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت main 1 12" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/e5ce7aadd4394fba2e667d32a207457cfb9f59b6_1606735185.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img js-img-main-13" data-slide-title="Slide 12"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/0a9abd01d5c46f9f949de07c0517042145ca1eb8_1608012089.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/0a9abd01d5c46f9f949de07c0517042145ca1eb8_1608012089.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت main 1 13" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/0a9abd01d5c46f9f949de07c0517042145ca1eb8_1608012089.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img js-img-main-14" data-slide-title="Slide 13"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/467aa3f13a7f2919e14d9cd47cc9dfef0d9156ec_1618047804.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/467aa3f13a7f2919e14d9cd47cc9dfef0d9156ec_1618047804.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت main 1 14" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/467aa3f13a7f2919e14d9cd47cc9dfef0d9156ec_1618047804.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__info">
            <div class="c-remodal-gallery__title">گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512
              گیگابایت
            </div>
            <div class="c-remodal-gallery__thumbs js-official-thumbs">
              <div class="c-remodal-gallery__thumb is-video js-image-thumb"
                   data-video-cover="https://dkstatics-public.digikala.com/digikala-video-cover/2088368572727bc4faca00bc828ca8196a65d3a8_1606733831.jpg?x-oss-process=image/resize,w_600/quality,q_80"
                   data-video-src="https://dkstatics-public.digikala.com/digikala-video-playlist/65a9742d046a76387e9514dfea87b2de0594e0e2_1606734556.m3u8"
                   data-product-id="3555626" data-id="1" data-gtm-vis-first-on-screen-9070001_346="10295"
                   data-gtm-vis-total-visible-time-9070001_346="100" data-gtm-vis-has-fired-9070001_346="1"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-video-cover/2088368572727bc4faca00bc828ca8196a65d3a8_1606733831.jpg?x-oss-process=image/resize,m_fill,h_115,w_115"
                  alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت video"
                  src="https://dkstatics-public.digikala.com/digikala-video-cover/2088368572727bc4faca00bc828ca8196a65d3a8_1606733831.jpg?x-oss-process=image/resize,m_fill,h_115,w_115"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb" data-order="1"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/b8e8c96afe990d290e525567c591fd4bd57d50bf_1602671368.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت thumb 2 1"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/b8e8c96afe990d290e525567c591fd4bd57d50bf_1602671368.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb c-remodal-gallery__thumb--selected" data-order="2">
                <img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/d3a25e245201a00e4ee68c2f2e4b9c437712a3f0_1602671369.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت thumb 2 2"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/d3a25e245201a00e4ee68c2f2e4b9c437712a3f0_1602671369.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb" data-order="3"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/2fe36ebb47c6c22158e0c3f62acb8043b516fe7d_1602671371.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت thumb 2 3"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/2fe36ebb47c6c22158e0c3f62acb8043b516fe7d_1602671371.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb" data-order="4"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/1d3132f88b1513030d6e5e15ae3fc483953f40f6_1602671371.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت thumb 2 4"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/1d3132f88b1513030d6e5e15ae3fc483953f40f6_1602671371.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb" data-order="5"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/98c56166fe774a2ae81baef6c9ab5bb299ee08e6_1606735162.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت thumb 2 5"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/98c56166fe774a2ae81baef6c9ab5bb299ee08e6_1606735162.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb" data-order="6"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/0e8fa0d4c5607a2768d1d718db56c96423413e91_1606735164.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت thumb 2 6"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/0e8fa0d4c5607a2768d1d718db56c96423413e91_1606735164.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb" data-order="7"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/a174e64b5cbc60b66de6a373c5b5c1166d713af3_1606735167.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت thumb 2 7"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/a174e64b5cbc60b66de6a373c5b5c1166d713af3_1606735167.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb" data-order="8"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/7542028fdec96803415f4f43a469d06fe8c4b962_1606735170.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت thumb 2 8"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/7542028fdec96803415f4f43a469d06fe8c4b962_1606735170.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb" data-order="9"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/cafe874fb584fd25b1f20e805fec0a36384a5058_1606735174.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت thumb 2 9"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/cafe874fb584fd25b1f20e805fec0a36384a5058_1606735174.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb" data-order="10"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/805d888f53a7afee44a300ce282f74ebea5ba642_1606735179.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت thumb 2 10"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/805d888f53a7afee44a300ce282f74ebea5ba642_1606735179.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb" data-order="11"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/cdbf1b502e9928190990ce5b75562a9ccea0b234_1606735182.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت thumb 2 11"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/cdbf1b502e9928190990ce5b75562a9ccea0b234_1606735182.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb" data-order="12"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/e5ce7aadd4394fba2e667d32a207457cfb9f59b6_1606735185.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت thumb 2 12"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/e5ce7aadd4394fba2e667d32a207457cfb9f59b6_1606735185.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb" data-order="13"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/0a9abd01d5c46f9f949de07c0517042145ca1eb8_1608012089.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت thumb 2 13"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/0a9abd01d5c46f9f949de07c0517042145ca1eb8_1608012089.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb" data-order="14"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/467aa3f13a7f2919e14d9cd47cc9dfef0d9156ec_1618047804.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت thumb 2 14"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/467aa3f13a7f2919e14d9cd47cc9dfef0d9156ec_1618047804.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
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
                      دیجی‌کالا</label><label class="c-ui-checkbox"><input type="checkbox" value="1"
                                                                           name="observed[notification]" checked=""
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
            پیام شخصی دیجی‌کالا
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
                      دیجی‌کالا</label><label class="c-ui-checkbox"><input type="checkbox" value="1"
                                                                           name="observed[notification]" checked=""
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
              <div class="c-form-feedback__title">آدرس کالای مشابه در دیجی‌کالا</div>
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
      <div class="c-remodal-account__headline">ورود به دیجی‌کالا</div>
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
              <button class="btn-login login-button-js">ورود به دیجی‌کالا</button>
            </div>
          </div>
          <div class="c-form-account__link"><a data-snt-event="dkLoginClick"
                                               data-snt-params="{&quot;type&quot;:&quot;forgetPassword&quot;,&quot;site&quot;:&quot;login-modal&quot;}"
                                               href="/users/password/forgot/" class="btn-link-spoiler">رمز عبور خود را
              فراموش کرده ام</a></div>
          <div class="c-message-light c-message-light--error has-oneline" id="loginFormError">نام کاربری
            یا کلمه عبور اشتباه است.
          </div>
        </form>
      </div>
      <div class="c-remodal-account__footer is-highlighted"><span>کاربر جدید هستید؟</span><a
          data-snt-event="dkLoginClick"
          data-snt-params="{&quot;type&quot;:&quot;signup&quot;,&quot;site&quot;:&quot;login-modal&quot;}"
          href="/users/login-register/?_back=https://www.digikala.com/product/dkp-3814476/%25DA%25AF%25D9%2588%25D8%25B4%25DB%258C-%25D9%2585%25D9%2588%25D8%25A8%25D8%25A7%25DB%258C%25D9%2584-%25D8%25A7%25D9%25BE%25D9%2584-%25D9%2585%25D8%25AF%25D9%2584-iphone-12-pro-a2408-%25D8%25AF%25D9%2588-%25D8%25B3%25DB%258C%25D9%2585-%25DA%25A9%25D8%25A7%25D8%25B1%25D8%25AA-%25D8%25B8%25D8%25B1%25D9%2581%25DB%258C%25D8%25AA-128-%25DA%25AF%25DB%258C%25DA%25AF%25D8%25A7%25D8%25A8%25D8%25A7%25DB%258C%25D8%25AA"
          class="btn-link-spoiler">ثبت‌نام در دیجی‌کالا</a></div>
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

