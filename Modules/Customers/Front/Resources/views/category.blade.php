@php
  $banner2 = \Modules\Staff\Slider\Models\Slider::find(2)
@endphp

@extends('layouts.front.master')

@section('head')
  <title> {{ $category->name }} | {{ $fa_store_name }}</title>
  {{--  <link rel="canonical" href="{{ route('front.cart') }}"/>--}}
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <script>
    var supernova_mode = "production";
    var supernova_tracker_url = "https:\/\/etrackerd.digikala.com\/tracker\/events\/";
    var parameters = {"category_path": "\/category-electronic-devices", "query": {"sortby": 4}, "list_view": false};
    var cart = {"cartId": 0, "variants": [], "products": [], "itemCount": 0, "isPlusUser": false};
    var emarsysCategoryBreadcrumb = "\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644";
    var click_impression = [{
      "id": 4849334,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u06a9\u0627\u0645\u067e\u06cc\u0648\u062a\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u062c\u0627\u0646\u0628\u06cc", "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a\u060c \u0645\u06cc\u06a9\u0631\u0648\u0641\u0648\u0646", "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc"],
      "supply_category": ["AC", "\u0647\u062f\u0641\u0648\u0646 \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc"],
      "name": "\u0647\u0646\u062f\u0632\u0641\u0631\u06cc \u0627\u0686 \u0627\u0646\u062f \u0627\u0645 \u0645\u062f\u0644 G8",
      "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
      "category": "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc",
      "category_id": 211,
      "price_detail": {"selling_price": 1490000, "discount_percent": 50},
      "position": 1,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 15544382,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/ccd305fd5014899cef6f4dc33524ba24139009fc_1617784086.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-4849334\/\u0647\u0646\u062f\u0632\u0641\u0631\u06cc-\u0627\u0686-\u0627\u0646\u062f-\u0627\u0645-\u0645\u062f\u0644-g8",
      "rating": {"rate": 68.2, "count": 145},
      "price": 1490000
    }, {
      "id": 2361428,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0645\u0648\u0628\u0627\u06cc\u0644", "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644"],
      "supply_category": ["MO", "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644"],
      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A51 SM-A515F\/DSN \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128\u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
      "brand": "Samsung",
      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
      "category_id": 11,
      "price_detail": {"selling_price": 60100000, "discount_percent": 0},
      "position": 2,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 7434579,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/115598446.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-2361428\/\u06af\u0648\u0634\u06cc-\u0645\u0648\u0628\u0627\u06cc\u0644-\u0633\u0627\u0645\u0633\u0648\u0646\u06af-\u0645\u062f\u0644-galaxy-a51-sm-a515fdsn-\u062f\u0648-\u0633\u06cc\u0645-\u06a9\u0627\u0631\u062a-\u0638\u0631\u0641\u06cc\u062a-128\u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
      "rating": {"rate": 87, "count": 5630},
      "price": 60100000
    }, {
      "id": 4958276,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0645\u0648\u0628\u0627\u06cc\u0644", "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644"],
      "supply_category": ["MO", "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644"],
      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 POCO X3 Pro M2102J20SG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 8 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0631\u0645 ",
      "brand": "Xiaomi",
      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
      "category_id": 11,
      "price_detail": {"selling_price": 67990000, "discount_percent": 0},
      "position": 3,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 16224751,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/77f6b5b39b58f0b81c7707e3626f55b74ee348aa_1623857594.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-4958276\/\u06af\u0648\u0634\u06cc-\u0645\u0648\u0628\u0627\u06cc\u0644-\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc-\u0645\u062f\u0644-poco-x3-pro-m2102j20sg-\u062f\u0648-\u0633\u06cc\u0645-\u06a9\u0627\u0631\u062a-\u0638\u0631\u0641\u06cc\u062a-256-\u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a-\u0648-8-\u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a-\u0631\u0645",
      "rating": {"rate": 88, "count": 510},
      "price": 67990000
    }, {
      "id": 4834144,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0645\u0648\u0628\u0627\u06cc\u0644", "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644"],
      "supply_category": ["MO", "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644"],
      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A32 SM-A325F\/DS \u062f\u0648 \u0633\u06cc\u0645\u200c\u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 6 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
      "brand": "Samsung",
      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
      "category_id": 11,
      "price_detail": {"selling_price": 55790000, "discount_percent": 0},
      "position": 4,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 16817963,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/1aaa7ff34f7bec773c4baea959b652ed5dff9f30_1619596674.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-4834144\/\u06af\u0648\u0634\u06cc-\u0645\u0648\u0628\u0627\u06cc\u0644-\u0633\u0627\u0645\u0633\u0648\u0646\u06af-\u0645\u062f\u0644-galaxy-a32-sm-a325fds-\u062f\u0648-\u0633\u06cc\u0645\u06a9\u0627\u0631\u062a-\u0638\u0631\u0641\u06cc\u062a-128-\u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a-\u0648-\u0631\u0645-6-\u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
      "rating": {"rate": 86.6, "count": 682},
      "price": 55790000
    }, {
      "id": 3329264,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644", "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644"],
      "supply_category": ["AC", "\u06a9\u0627\u0628\u0644 \u0648\u0645\u0628\u062f\u0644"],
      "name": "\u06a9\u0627\u0628\u0644 \u062a\u0628\u062f\u06cc\u0644 USB \u0628\u0647 microUSB \u0628\u06cc\u0628\u0648\u0634\u06cc \u0645\u062f\u0644 A06 \u0637\u0648\u0644 1 \u0645\u062a\u0631",
      "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
      "category": "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644",
      "category_id": 80,
      "price_detail": {"selling_price": 795000, "discount_percent": 47},
      "position": 5,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 10821975,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/04e5ac08392948bb03755af1e6f7a9151e773c1c_1599389572.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-3329264\/\u06a9\u0627\u0628\u0644-\u062a\u0628\u062f\u06cc\u0644-usb-\u0628\u0647-microusb-\u0628\u06cc\u0628\u0648\u0634\u06cc-\u0645\u062f\u0644-a06-\u0637\u0648\u0644-1-\u0645\u062a\u0631",
      "rating": {"rate": 85, "count": 197},
      "price": 795000
    }, {
      "id": 5604632,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u06a9\u0627\u0645\u067e\u06cc\u0648\u062a\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u062c\u0627\u0646\u0628\u06cc", "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a\u060c \u0645\u06cc\u06a9\u0631\u0648\u0641\u0648\u0646", "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc"],
      "supply_category": ["AC", "\u0647\u062f\u0641\u0648\u0646 \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc"],
      "name": "\u0647\u0646\u062f\u0632\u0641\u0631\u06cc \u0627\u06cc\u0648\u0648\u0646 \u0645\u062f\u0644 H3",
      "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
      "category": "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc",
      "category_id": 211,
      "price_detail": {"selling_price": 1490000, "discount_percent": 56},
      "position": 6,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 17991911,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/68351e0be570e1e1c8e60f3ec7025ac08bc6e64d_1624784372.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-5604632\/\u0647\u0646\u062f\u0632\u0641\u0631\u06cc-\u0632\u0627\u06a9\u0633-\u0644\u0627\u0646\u06af-\u0645\u062f\u0644-h4-clone-1-of-5604621",
      "rating": {"rate": 0, "count": 0},
      "price": 1490000
    }, {
      "id": 5534876,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u06a9\u0627\u0645\u067e\u06cc\u0648\u062a\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u062c\u0627\u0646\u0628\u06cc", "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a\u060c \u0645\u06cc\u06a9\u0631\u0648\u0641\u0648\u0646", "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc"],
      "supply_category": ["AC", "\u0647\u062f\u0641\u0648\u0646 \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc"],
      "name": "\u0647\u0646\u062f\u0632\u0641\u0631\u06cc \u0627\u0686 \u0627\u0646\u062f \u0627\u0645 \u0645\u062f\u0644 H1",
      "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
      "category": "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc",
      "category_id": 211,
      "price_detail": {"selling_price": 1390000, "discount_percent": 54},
      "position": 7,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 17786325,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/528b2966fb9e2352f590b72b064cc37f05800ab9_1624343066.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-5534876\/\u0647\u0646\u062f\u0632\u0641\u0631\u06cc-\u0627\u0686-\u0627\u0646\u062f-\u0627\u0645-\u0645\u062f\u0644-h1",
      "rating": {"rate": 66.6, "count": 3},
      "price": 1390000
    }, {
      "id": 3329270,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644", "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644"],
      "supply_category": ["AC", "\u06a9\u0627\u0628\u0644 \u0648\u0645\u0628\u062f\u0644"],
      "name": "\u06a9\u0627\u0628\u0644 \u062a\u0628\u062f\u06cc\u0644 USB \u0628\u0647 microUSB \u0628\u06cc\u0628\u0648\u0634\u06cc \u0645\u062f\u0644 CA003A \u0637\u0648\u0644 1 \u0645\u062a\u0631",
      "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
      "category": "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644",
      "category_id": 80,
      "price_detail": {"selling_price": 695000, "discount_percent": 52},
      "position": 8,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 16681612,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/87f86e46ea323670d40b15c6f94b636643d68661_1599051505.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-3329270\/\u06a9\u0627\u0628\u0644-\u062a\u0628\u062f\u06cc\u0644-usb-\u0628\u0647-microusb-\u0628\u06cc\u0628\u0648\u0634\u06cc-\u0645\u062f\u0644-ca003a-\u0637\u0648\u0644-1-\u0645\u062a\u0631",
      "rating": {"rate": 85.2, "count": 31},
      "price": 695000
    }, {
      "id": 5401022,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644", "\u067e\u0627\u0648\u0631\u0628\u0627\u0646\u06a9 (\u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647)"],
      "supply_category": ["AC", "\u067e\u0627\u0648\u0631 \u0628\u0627\u0646\u06a9 (\u0634\u0627\u0631\u0698 \u0647\u0645\u0631\u0627\u0647)"],
      "name": "\u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647 \u0622\u067e\u0627\u0645\u0627 \u0645\u062f\u0644 AP-15 \u0638\u0631\u0641\u06cc\u062a 20000 \u0645\u06cc\u0644\u06cc \u0622\u0645\u067e\u0631 \u0633\u0627\u0639\u062a",
      "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
      "category": "\u067e\u0627\u0648\u0631\u0628\u0627\u0646\u06a9 (\u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647)",
      "category_id": 1272,
      "price_detail": {"selling_price": 6580000, "discount_percent": 49},
      "position": 9,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 17295574,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/a6523234017da9580b1c2bf28f93549edb678479_1623141362.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-5401022\/\u0634\u0627\u0631\u0698\u0631-\u0647\u0645\u0631\u0627\u0647-\u0622\u067e\u0627\u0645\u0627-\u0645\u062f\u0644-ap-15-\u0638\u0631\u0641\u06cc\u062a-20000-\u0645\u06cc\u0644\u06cc-\u0622\u0645\u067e\u0631-\u0633\u0627\u0639\u062a",
      "rating": {"rate": 55, "count": 4},
      "price": 6580000
    }, {
      "id": 4122136,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0645\u0648\u0628\u0627\u06cc\u0644", "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644"],
      "supply_category": ["MO", "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644"],
      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A12 SM-A125F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
      "brand": "Samsung",
      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
      "category_id": 11,
      "price_detail": {"selling_price": 36890000, "discount_percent": 0},
      "position": 10,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 13272614,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/c5c4a0bb88dc312a4c2f6de0b1567ef0da31a2d9_1624085323.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-4122136\/\u06af\u0648\u0634\u06cc-\u0645\u0648\u0628\u0627\u06cc\u0644-\u0633\u0627\u0645\u0633\u0648\u0646\u06af-\u0645\u062f\u0644-galaxy-a12-sm-a125fds-\u062f\u0648-\u0633\u06cc\u0645-\u06a9\u0627\u0631\u062a-\u0638\u0631\u0641\u06cc\u062a-64-\u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
      "rating": {"rate": 88.4, "count": 3075},
      "price": 36890000
    }, {
      "id": 3329260,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644", "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644"],
      "supply_category": ["AC", "\u06a9\u0627\u0628\u0644 \u0648\u0645\u0628\u062f\u0644"],
      "name": "\u06a9\u0627\u0628\u0644 \u062a\u0628\u062f\u06cc\u0644 USB \u0628\u0647 microUSB \u0628\u06cc\u0628\u0648\u0634\u06cc \u0645\u062f\u0644 A07 \u0637\u0648\u0644 1 \u0645\u062a\u0631 ",
      "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
      "category": "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644",
      "category_id": 80,
      "price_detail": {"selling_price": 895000, "discount_percent": 55},
      "position": 11,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 16681435,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/dfedfde2bfd4978b374ba1cbbdab6d8818d0282f_1599386705.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-3329260\/\u06a9\u0627\u0628\u0644-\u062a\u0628\u062f\u06cc\u0644-usb-\u0628\u0647-microusb-\u0628\u06cc\u0628\u0648\u0634\u06cc-\u0645\u062f\u0644-a07-\u0637\u0648\u0644-1-\u0645\u062a\u0631",
      "rating": {"rate": 87.2, "count": 58},
      "price": 895000
    }, {
      "id": 5152516,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u06a9\u0627\u0645\u067e\u06cc\u0648\u062a\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u062c\u0627\u0646\u0628\u06cc", "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a\u060c \u0645\u06cc\u06a9\u0631\u0648\u0641\u0648\u0646", "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc"],
      "supply_category": ["AC", "\u0647\u062f\u0641\u0648\u0646 \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc"],
      "name": "\u0647\u0646\u062f\u0632\u0641\u0631\u06cc \u0645\u062f\u0644 P1",
      "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
      "category": "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc",
      "category_id": 211,
      "price_detail": {"selling_price": 695000, "discount_percent": 56},
      "position": 12,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 16781778,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/be2b97ed0fa5c8980c18a34cdf2f5bfbb0bcdb8e_1621519764.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-5152516\/\u0647\u0646\u062f\u0632\u0641\u0631\u06cc-\u0645\u062f\u0644-p1",
      "rating": {"rate": 74.2, "count": 49},
      "price": 695000
    }, {
      "id": 3329265,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644", "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644"],
      "supply_category": ["AC", "\u06a9\u0627\u0628\u0644 \u0648\u0645\u0628\u062f\u0644"],
      "name": "\u06a9\u0627\u0628\u0644 \u062a\u0628\u062f\u06cc\u0644 USB \u0628\u0647 USB-C \u0628\u06cc\u0628\u0648\u0634\u06cc \u0645\u062f\u0644 A06 \u0637\u0648\u0644 1 \u0645\u062a\u0631 ",
      "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
      "category": "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644",
      "category_id": 80,
      "price_detail": {"selling_price": 885000, "discount_percent": 53},
      "position": 13,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 16615114,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/2b80845c8ee51739aee99cfa5026172615a5a6be_1599389497.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-3329265\/\u06a9\u0627\u0628\u0644-\u062a\u0628\u062f\u06cc\u0644-usb-\u0628\u0647-usb-c-\u0628\u06cc\u0628\u0648\u0634\u06cc-\u0645\u062f\u0644-a06-\u0637\u0648\u0644-1-\u0645\u062a\u0631",
      "rating": {"rate": 83.8, "count": 93},
      "price": 885000
    }, {
      "id": 3329241,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644", "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644"],
      "supply_category": ["AC", "\u06a9\u0627\u0628\u0644 \u0648\u0645\u0628\u062f\u0644"],
      "name": "\u06a9\u0627\u0628\u0644 \u062a\u0628\u062f\u06cc\u0644 USB \u0628\u0647 \u0644\u0627\u06cc\u062a\u0646\u06cc\u0646\u06af \u0628\u06cc\u0628\u0648\u0634\u06cc \u0645\u062f\u0644 CA004B \u0637\u0648\u0644 1 \u0645\u062a\u0631\t",
      "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
      "category": "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644",
      "category_id": 80,
      "price_detail": {"selling_price": 685000, "discount_percent": 54},
      "position": 14,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 16615145,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/4f0980459acaf28a463c596a43d0727b027de356_1599386407.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-3329241\/\u06a9\u0627\u0628\u0644-\u062a\u0628\u062f\u06cc\u0644-usb-\u0628\u0647-\u0644\u0627\u06cc\u062a\u0646\u06cc\u0646\u06af-\u0628\u06cc\u0628\u0648\u0634\u06cc-\u0645\u062f\u0644-ca004b-\u0637\u0648\u0644-1-\u0645\u062a\u0631",
      "rating": {"rate": 85.8, "count": 7},
      "price": 685000
    }, {
      "id": 3141369,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644", "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644"],
      "supply_category": ["AC", "\u06a9\u0627\u0628\u0644 \u0648\u0645\u0628\u062f\u0644"],
      "name": "\u06a9\u0627\u0628\u0644 \u062a\u0628\u062f\u06cc\u0644 USB \u0628\u0647 USB-C \u0628\u06cc\u0628\u0648\u0634\u06cc \u0645\u062f\u0644 A05 \u0637\u0648\u0644 1 \u0645\u062a\u0631",
      "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
      "category": "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644",
      "category_id": 80,
      "price_detail": {"selling_price": 885000, "discount_percent": 56},
      "position": 15,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 16623120,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/d7c7815882760a0fe19d7160c0eebb61eee59bb5_1595675449.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-3141369\/\u06a9\u0627\u0628\u0644-\u062a\u0628\u062f\u06cc\u0644-usb-\u0628\u0647-usb-c-\u0628\u06cc\u0628\u0648\u0634\u06cc-\u0645\u062f\u0644-a05-\u0637\u0648\u0644-1-\u0645\u062a\u0631",
      "rating": {"rate": 84, "count": 75},
      "price": 885000
    }, {
      "id": 3329268,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644", "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644"],
      "supply_category": ["AC", "\u06a9\u0627\u0628\u0644 \u0648\u0645\u0628\u062f\u0644"],
      "name": "\u06a9\u0627\u0628\u0644 \u062a\u0628\u062f\u06cc\u0644 USB \u0628\u0647 USB-C \u0628\u06cc\u0628\u0648\u0634\u06cc \u0645\u062f\u0644 CA003A \u0637\u0648\u0644 1 \u0645\u062a\u0631 ",
      "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
      "category": "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644",
      "category_id": 80,
      "price_detail": {"selling_price": 795000, "discount_percent": 53},
      "position": 16,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 16681585,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/2d70c2045d56a925222c4fad49b24a33efd06661_1599051590.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-3329268\/\u06a9\u0627\u0628\u0644-\u062a\u0628\u062f\u06cc\u0644-usb-\u0628\u0647-usb-c-\u0628\u06cc\u0628\u0648\u0634\u06cc-\u0645\u062f\u0644-ca003a-\u0637\u0648\u0644-1-\u0645\u062a\u0631",
      "rating": {"rate": 78.2, "count": 35},
      "price": 795000
    }, {
      "id": 3329263,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644", "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644"],
      "supply_category": ["AC", "\u06a9\u0627\u0628\u0644 \u0648\u0645\u0628\u062f\u0644"],
      "name": "\u06a9\u0627\u0628\u0644 \u062a\u0628\u062f\u06cc\u0644 USB \u0628\u0647 USB-C \u0628\u06cc\u0628\u0648\u0634\u06cc \u0645\u062f\u0644 A07 \u0637\u0648\u0644 1 \u0645\u062a\u0631",
      "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
      "category": "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644",
      "category_id": 80,
      "price_detail": {"selling_price": 995000, "discount_percent": 60},
      "position": 17,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 16681220,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/4c347f01ab5a613fe7a9359a71b4b4c25b87efe1_1599386522.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-3329263\/\u06a9\u0627\u0628\u0644-\u062a\u0628\u062f\u06cc\u0644-usb-\u0628\u0647-usb-c-\u0628\u06cc\u0628\u0648\u0634\u06cc-\u0645\u062f\u0644-a07-\u0637\u0648\u0644-1-\u0645\u062a\u0631",
      "rating": {"rate": 71.2, "count": 18},
      "price": 995000
    }, {
      "id": 3329262,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644", "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644"],
      "supply_category": ["AC", "\u06a9\u0627\u0628\u0644 \u0648\u0645\u0628\u062f\u0644"],
      "name": "\u06a9\u0627\u0628\u0644 \u062a\u0628\u062f\u06cc\u0644 USB \u0628\u0647 \u0644\u0627\u06cc\u062a\u0646\u06cc\u0646\u06af \u0628\u06cc\u0628\u0648\u0634\u06cc \u0645\u062f\u0644 A07 \u0637\u0648\u0644 1 \u0645\u062a\u0631",
      "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
      "category": "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644",
      "category_id": 80,
      "price_detail": {"selling_price": 995000, "discount_percent": 50},
      "position": 18,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 16681507,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/8788f8bab63707ec4e21e8b9821c57c1b579e9b9_1599386463.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-3329262\/\u06a9\u0627\u0628\u0644-\u062a\u0628\u062f\u06cc\u0644-usb-\u0628\u0647-\u0644\u0627\u06cc\u062a\u0646\u06cc\u0646\u06af-\u0628\u06cc\u0628\u0648\u0634\u06cc-\u0645\u062f\u0644-a07-\u0637\u0648\u0644-1-\u0645\u062a\u0631",
      "rating": {"rate": 85, "count": 12},
      "price": 995000
    }, {
      "id": 3329261,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644", "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644"],
      "supply_category": ["AC", "\u06a9\u0627\u0628\u0644 \u0648\u0645\u0628\u062f\u0644"],
      "name": "\u06a9\u0627\u0628\u0644 \u062a\u0628\u062f\u06cc\u0644 USB \u0628\u0647 microUSB \u0628\u06cc\u0628\u0648\u0634\u06cc \u0645\u062f\u0644 A04 \u0637\u0648\u0644 1 \u0645\u062a\u0631",
      "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
      "category": "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644",
      "category_id": 80,
      "price_detail": {"selling_price": 895000, "discount_percent": 55},
      "position": 19,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 16614941,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/b791188d3e2933483dc7bfec9a64aa867750ddd5_1599386623.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-3329261\/\u06a9\u0627\u0628\u0644-\u062a\u0628\u062f\u06cc\u0644-usb-\u0628\u0647-microusb-\u0628\u06cc\u0628\u0648\u0634\u06cc-\u0645\u062f\u0644-a04-\u0637\u0648\u0644-1-\u0645\u062a\u0631",
      "rating": {"rate": 86.2, "count": 13},
      "price": 895000
    }, {
      "id": 3893718,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0645\u0648\u0628\u0627\u06cc\u0644", "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644"],
      "supply_category": ["MO", "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644"],
      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0627\u067e\u0644 \u0645\u062f\u0644 iPhone 12 Pro Max A2412 \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
      "brand": "Apple",
      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
      "category_id": 11,
      "price_detail": {"selling_price": 382000000, "discount_percent": 0},
      "position": 20,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 14019380,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/be7a0e9bf7866759fa3cea7648b149f589a01040_1607433995.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-3893718\/\u06af\u0648\u0634\u06cc-\u0645\u0648\u0628\u0627\u06cc\u0644-\u0627\u067e\u0644-\u0645\u062f\u0644-iphone-12-pro-max-a2412-\u062f\u0648-\u0633\u06cc\u0645-\u06a9\u0627\u0631\u062a-\u0638\u0631\u0641\u06cc\u062a-256-\u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
      "rating": {"rate": 90.6, "count": 663},
      "price": 382000000
    }, {
      "id": 4124548,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644", "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644"],
      "supply_category": ["AC", "\u06a9\u0627\u0628\u0644 \u0648\u0645\u0628\u062f\u0644"],
      "name": "\u06a9\u0627\u0628\u0644 \u062a\u0628\u062f\u06cc\u0644 USB \u0628\u0647 \u0644\u0627\u06cc\u062a\u0646\u06cc\u0646\u06af \u0627\u0686 \u0627\u0646\u062f \u0627\u0645 \u0645\u062f\u0644 C07 \u0637\u0648\u0644 1 \u0645\u062a\u0631",
      "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
      "category": "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644",
      "category_id": 80,
      "price_detail": {"selling_price": 455000, "discount_percent": 54},
      "position": 21,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 17740218,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/9b7183e97b50357f70023e105d8182b9f2978253_1609584338.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-4124548\/\u06a9\u0627\u0628\u0644-\u062a\u0628\u062f\u06cc\u0644-usb-\u0628\u0647-\u0644\u0627\u06cc\u062a\u0646\u06cc\u0646\u06af-\u0627\u0686-\u0627\u0646\u062f-\u0627\u0645-\u0645\u062f\u0644-c07-\u0637\u0648\u0644-1-\u0645\u062a\u0631",
      "rating": {"rate": 70, "count": 8},
      "price": 455000
    }, {
      "id": 4149037,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0645\u0648\u0628\u0627\u06cc\u0644", "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644"],
      "supply_category": ["MO", "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644"],
      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 POCO M3 M2010J19CG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
      "brand": "Xiaomi",
      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
      "category_id": 11,
      "price_detail": {"selling_price": 40990000, "discount_percent": 0},
      "position": 22,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 15453579,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/219163a48b85831190b1aa4983a71565a19434c2_1609659342.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-4149037\/\u06af\u0648\u0634\u06cc-\u0645\u0648\u0628\u0627\u06cc\u0644-\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc-\u0645\u062f\u0644-poco-m3-m2010j19cg-\u062f\u0648-\u0633\u06cc\u0645-\u06a9\u0627\u0631\u062a-\u0638\u0631\u0641\u06cc\u062a-128-\u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
      "rating": {"rate": 87.4, "count": 1186},
      "price": 40990000
    }, {
      "id": 3329269,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644", "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644"],
      "supply_category": ["AC", "\u06a9\u0627\u0628\u0644 \u0648\u0645\u0628\u062f\u0644"],
      "name": "\u06a9\u0627\u0628\u0644 \u062a\u0628\u062f\u06cc\u0644 USB \u0628\u0647 \u0644\u0627\u06cc\u062a\u0646\u06cc\u0646\u06af \u0628\u06cc\u0628\u0648\u0634\u06cc \u0645\u062f\u0644 CA003A \u0637\u0648\u0644 1 \u0645\u062a\u0631 ",
      "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
      "category": "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644",
      "category_id": 80,
      "price_detail": {"selling_price": 795000, "discount_percent": 53},
      "position": 23,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 16681563,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/7c59d8a2aeb62c7815979032d7e4e623f66efa0a_1599051561.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-3329269\/\u06a9\u0627\u0628\u0644-\u062a\u0628\u062f\u06cc\u0644-usb-\u0628\u0647-\u0644\u0627\u06cc\u062a\u0646\u06cc\u0646\u06af-\u0628\u06cc\u0628\u0648\u0634\u06cc-\u0645\u062f\u0644-ca003a-\u0637\u0648\u0644-1-\u0645\u062a\u0631",
      "rating": {"rate": 50, "count": 2},
      "price": 795000
    }, {
      "id": 3621997,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u067e \u062a\u0627\u067e", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0644\u067e \u062a\u0627\u067e", "\u06a9\u0627\u0628\u0644 \u0647\u0627\u06cc \u0631\u0627\u0628\u0637", "\u06a9\u0627\u0628\u0644 \u0635\u0648\u062a\u06cc \u0648 \u062a\u0635\u0648\u06cc\u0631\u06cc"],
      "supply_category": ["AC", "\u06a9\u0627\u0628\u0644 \u0648\u0645\u0628\u062f\u0644"],
      "name": "\u06a9\u0627\u0628\u0644 AUX \u0646\u0648\u0627\u06a9\u0633 \u0645\u062f\u0644 AX-212 \u0637\u0648\u0644 1.2 \u0645\u062a\u0631",
      "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
      "category": "\u06a9\u0627\u0628\u0644 \u0635\u0648\u062a\u06cc \u0648 \u062a\u0635\u0648\u06cc\u0631\u06cc",
      "category_id": 6221,
      "price_detail": {"selling_price": 525000, "discount_percent": 47},
      "position": 24,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 17721879,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/6fcf5385ca7ca254684b3a4523dd3303bfa6a434_1603794829.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-3621997\/\u06a9\u0627\u0628\u0644-aux-\u0646\u0648\u0627\u06a9\u0633-\u0645\u062f\u0644-ax-212-\u0637\u0648\u0644-12-\u0645\u062a\u0631",
      "rating": {"rate": 79.6, "count": 136},
      "price": 525000
    }, {
      "id": 5534901,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u06a9\u0627\u0645\u067e\u06cc\u0648\u062a\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u062c\u0627\u0646\u0628\u06cc", "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a\u060c \u0645\u06cc\u06a9\u0631\u0648\u0641\u0648\u0646", "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc"],
      "supply_category": ["AC", "\u0647\u062f\u0641\u0648\u0646 \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc"],
      "name": "\u0647\u062f\u0641\u0648\u0646 \u0628\u06cc\u0628\u0648\u0634\u06cc \u0645\u062f\u0644 M35",
      "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
      "category": "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc",
      "category_id": 211,
      "price_detail": {"selling_price": 1295000, "discount_percent": 50},
      "position": 25,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 17806080,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/9f2983fb429df570057ba340b74a570fd6056ff5_1624278577.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-5534901\/\u0647\u062f\u0641\u0648\u0646-\u0628\u06cc\u0628\u0648\u0634\u06cc-\u0645\u062f\u0644-m35",
      "rating": {"rate": 80, "count": 4},
      "price": 1295000
    }, {
      "id": 4957468,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0645\u0648\u0628\u0627\u06cc\u0644", "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644"],
      "supply_category": ["MO", "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644"],
      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 POCO X3 Pro M2102J20SG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 6 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0631\u0645",
      "brand": "Xiaomi",
      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
      "category_id": 11,
      "price_detail": {"selling_price": 59990000, "discount_percent": 0},
      "position": 26,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 17548349,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/56fc7780729eedaf4b71275c9addaec1d42dec1f_1624086561.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-4957468\/\u06af\u0648\u0634\u06cc-\u0645\u0648\u0628\u0627\u06cc\u0644-\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc-\u0645\u062f\u0644-poco-x3-pro-m2102j20sg-\u062f\u0648-\u0633\u06cc\u0645-\u06a9\u0627\u0631\u062a-\u0638\u0631\u0641\u06cc\u062a-128-\u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a-\u0648-6-\u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a-\u0631\u0645",
      "rating": {"rate": 87.2, "count": 235},
      "price": 59990000
    }, {
      "id": 5534902,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u06a9\u0627\u0645\u067e\u06cc\u0648\u062a\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u062c\u0627\u0646\u0628\u06cc", "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a\u060c \u0645\u06cc\u06a9\u0631\u0648\u0641\u0648\u0646", "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc"],
      "supply_category": ["AC", "\u0647\u062f\u0641\u0648\u0646 \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc"],
      "name": "\u0647\u062f\u0641\u0648\u0646 \u0628\u06cc\u0628\u0648\u0634\u06cc \u0645\u062f\u0644 M29",
      "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
      "category": "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc",
      "category_id": 211,
      "price_detail": {"selling_price": 695000, "discount_percent": 46},
      "position": 27,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 17806205,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/a1a8bfd31270d3e51de93ec38d3a83dec4c1530e_1624343324.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-5534902\/\u0647\u062f\u0641\u0648\u0646-\u0628\u06cc\u0628\u0648\u0634\u06cc-\u0645\u062f\u0644-m29",
      "rating": {"rate": 50, "count": 2},
      "price": 695000
    }, {
      "id": 3329266,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644", "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644"],
      "supply_category": ["AC", "\u06a9\u0627\u0628\u0644 \u0648\u0645\u0628\u062f\u0644"],
      "name": "\u06a9\u0627\u0628\u0644 \u062a\u0628\u062f\u06cc\u0644 USB \u0628\u0647 \u0644\u0627\u06cc\u062a\u0646\u06cc\u0646\u06af \u0628\u06cc\u0628\u0648\u0634\u06cc \u0645\u062f\u0644 A06 \u0637\u0648\u0644 1 \u0645\u062a\u0631 ",
      "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
      "category": "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644",
      "category_id": 80,
      "price_detail": {"selling_price": 885000, "discount_percent": 20},
      "position": 28,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 16615192,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/0fe1c3e5842f1122d8800a0f64159b458844fe06_1599389433.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-3329266\/\u06a9\u0627\u0628\u0644-\u062a\u0628\u062f\u06cc\u0644-usb-\u0628\u0647-\u0644\u0627\u06cc\u062a\u0646\u06cc\u0646\u06af-\u0628\u06cc\u0628\u0648\u0634\u06cc-\u0645\u062f\u0644-a06-\u0637\u0648\u0644-1-\u0645\u062a\u0631",
      "rating": {"rate": 81.8, "count": 35},
      "price": 885000
    }, {
      "id": 4374035,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644", "\u067e\u0627\u0648\u0631\u0628\u0627\u0646\u06a9 (\u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647)"],
      "supply_category": ["AC", "\u067e\u0627\u0648\u0631 \u0628\u0627\u0646\u06a9 (\u0634\u0627\u0631\u0698 \u0647\u0645\u0631\u0627\u0647)"],
      "name": "\u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647 \u0622\u067e\u0627\u0645\u0627 \u0645\u062f\u0644 AP-25 \u0638\u0631\u0641\u06cc\u062a 20000 \u0645\u06cc\u0644\u06cc \u0622\u0645\u067e\u0631\u0633\u0627\u0639\u062a",
      "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
      "category": "\u067e\u0627\u0648\u0631\u0628\u0627\u0646\u06a9 (\u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647)",
      "category_id": 1272,
      "price_detail": {"selling_price": 5590000, "discount_percent": 26},
      "position": 29,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 17117689,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/67a1132ba5d3eb8c4ecf248e81eba0c98c806fe5_1612250435.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-4374035\/\u0634\u0627\u0631\u0698\u0631-\u0647\u0645\u0631\u0627\u0647-\u0622\u067e\u0627\u0645\u0627-\u0645\u062f\u0644-ap-25-\u0638\u0631\u0641\u06cc\u062a-20000-\u0645\u06cc\u0644\u06cc-\u0622\u0645\u067e\u0631\u0633\u0627\u0639\u062a",
      "rating": {"rate": 80, "count": 1},
      "price": 5590000
    }, {
      "id": 5604111,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644", "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644"],
      "supply_category": ["AC", "\u06a9\u0627\u0628\u0644 \u0648\u0645\u0628\u062f\u0644"],
      "name": "\u06a9\u0627\u0628\u0644 \u062a\u0628\u062f\u06cc\u0644 USB \u0628\u0647 \u0644\u0627\u06cc\u062a\u0646\u06cc\u0646\u06af \u0628\u06cc\u0628\u0648\u0634\u06cc \u0645\u062f\u0644 A19 \u0637\u0648\u0644 1 \u0645\u062a\u0631",
      "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
      "category": "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644",
      "category_id": 80,
      "price_detail": {"selling_price": 1295000, "discount_percent": 52},
      "position": 30,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 17992114,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/c94fc35aeac99b3bbcbcdb2ad63f6e4182321ef1_1624782270.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-5604111\/\u06a9\u0627\u0628\u0644-\u062a\u0628\u062f\u06cc\u0644-usb-\u0628\u0647-\u0644\u0627\u06cc\u062a\u0646\u06cc\u0646\u06af-\u0628\u06cc\u0628\u0648\u0634\u06cc-\u0645\u062f\u0644-a19-\u0637\u0648\u0644-1-\u0645\u062a\u0631",
      "rating": {"rate": 0, "count": 0},
      "price": 1295000
    }, {
      "id": 5604363,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644", "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644"],
      "supply_category": ["AC", "\u06a9\u0627\u0628\u0644 \u0648\u0645\u0628\u062f\u0644"],
      "name": "\u06a9\u0627\u0628\u0644 \u0634\u0627\u0631\u0698 USB \u0628\u0647 USB-C \u0628\u06cc\u0628\u0648\u0634\u06cc \u0645\u062f\u0644 A21 \u0637\u0648\u0644 1 \u0645\u062a\u0631  ",
      "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
      "category": "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644",
      "category_id": 80,
      "price_detail": {"selling_price": 1295000, "discount_percent": 52},
      "position": 31,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 17992199,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/c941ad7d4ec6696d303f9f088e5792a1ff636e71_1624783316.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-5604363\/\u06a9\u0627\u0628\u0644-\u0634\u0627\u0631\u0698-usb-\u0628\u0647-usb-c-\u0628\u06cc\u0628\u0648\u0634\u06cc-\u0645\u062f\u0644-a21-\u0637\u0648\u0644-1-\u0645\u062a\u0631",
      "rating": {"rate": 0, "count": 0},
      "price": 1295000
    }, {
      "id": 3048126,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0645\u0648\u0628\u0627\u06cc\u0644", "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644"],
      "supply_category": ["MO", "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644"],
      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A21S SM-A217F\/DS \u062f\u0648 \u0633\u06cc\u0645\u200c\u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a\t",
      "brand": "Samsung",
      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
      "category_id": 11,
      "price_detail": {"selling_price": 40290000, "discount_percent": 0},
      "position": 32,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 17891934,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/89e7f2abac447a018242a954f03f8a6926344f8b_1594023235.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-3048126\/\u06af\u0648\u0634\u06cc-\u0645\u0648\u0628\u0627\u06cc\u0644-\u0633\u0627\u0645\u0633\u0648\u0646\u06af-\u0645\u062f\u0644-galaxy-a21s-sm-a217fds-\u062f\u0648-\u0633\u06cc\u0645\u06a9\u0627\u0631\u062a-\u0638\u0631\u0641\u06cc\u062a-64-\u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
      "rating": {"rate": 86.8, "count": 4717},
      "price": 40290000
    }, {
      "id": 5604051,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644", "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644"],
      "supply_category": ["AC", "\u06a9\u0627\u0628\u0644 \u0648\u0645\u0628\u062f\u0644"],
      "name": "\u06a9\u0627\u0628\u0644 \u062a\u0628\u062f\u06cc\u0644\u00a0USB \u0628\u0647 \u0644\u0627\u06cc\u062a\u0646\u06cc\u0646\u06af \u0628\u06cc\u0628\u0648\u0634\u06cc \u0645\u062f\u0644 A20 \u0637\u0648\u0644 1 \u0645\u062a\u0631",
      "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
      "category": "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644",
      "category_id": 80,
      "price_detail": {"selling_price": 995000, "discount_percent": 50},
      "position": 33,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 17992263,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/98e404db269598613309930eb9822ba0b3abeb43_1624781718.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-5604051\/\u06a9\u0627\u0628\u0644-\u062a\u0628\u062f\u06cc\u0644-usb-\u0628\u0647-\u0644\u0627\u06cc\u062a\u0646\u06cc\u0646\u06af-\u0628\u06cc\u0628\u0648\u0634\u06cc-\u0645\u062f\u0644-a20-\u0637\u0648\u0644-1-\u0645\u062a\u0631",
      "rating": {"rate": 0, "count": 0},
      "price": 995000
    }, {
      "id": 3942813,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644", "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644"],
      "supply_category": ["AC", "\u06a9\u0627\u0628\u0644 \u0648\u0645\u0628\u062f\u0644"],
      "name": "\u06a9\u0627\u0628\u0644 \u062a\u0628\u062f\u06cc\u0644 USB \u0628\u0647 \u0644\u0627\u06cc\u062a\u0646\u06cc\u0646\u06af \u0627\u0686 \u0627\u0646\u062f \u0627\u0645 \u0645\u062f\u0644 C05 \u0637\u0648\u0644 0.2 \u0645\u062a\u0631",
      "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
      "category": "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644",
      "category_id": 80,
      "price_detail": {"selling_price": 295000, "discount_percent": 63},
      "position": 34,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 17631708,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/d8c8b54d44b51818c32fd52301eebfcc92d0ae13_1607499500.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-3942813\/\u06a9\u0627\u0628\u0644-\u062a\u0628\u062f\u06cc\u0644-usb-\u0628\u0647-\u0644\u0627\u06cc\u062a\u0646\u06cc\u0646\u06af-\u0627\u0686-\u0627\u0646\u062f-\u0627\u0645-\u0645\u062f\u0644-c05-\u0637\u0648\u0644-02-\u0645\u062a\u0631",
      "rating": {"rate": 72.4, "count": 143},
      "price": 295000
    }, {
      "id": 4418954,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0645\u0648\u0628\u0627\u06cc\u0644", "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644"],
      "supply_category": ["MO", "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644"],
      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 Redmi Note 9T 5G M2007J22G \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 4 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a ",
      "brand": "Xiaomi",
      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
      "category_id": 11,
      "price_detail": {"selling_price": 46490000, "discount_percent": 0},
      "position": 35,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 17248824,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/2caa3ddd0b92e99145679eed41cdae9b7b5dd988_1624086021.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-4418954\/\u06af\u0648\u0634\u06cc-\u0645\u0648\u0628\u0627\u06cc\u0644-\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc-\u0645\u062f\u0644-redmi-note-9t-5g-m2007j22g-\u0638\u0631\u0641\u06cc\u062a-128-\u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a-\u0648-\u0631\u0645-4-\u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
      "rating": {"rate": 89.8, "count": 374},
      "price": 46490000
    }, {
      "id": 4834527,
      "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644", "\u0645\u0648\u0628\u0627\u06cc\u0644", "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644"],
      "supply_category": ["MO", "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644"],
      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644  A72 SM-A725F\/DS \u062f\u0648 \u0633\u06cc\u0645\u200c\u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 8 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a ",
      "brand": "Samsung",
      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
      "category_id": 11,
      "price_detail": {"selling_price": 139500000, "discount_percent": 0},
      "position": 36,
      "status": "marketable",
      "multi_color": true,
      "multi_size": false,
      "multi_warranty": true,
      "multi_seller": true,
      "buy_box_winner": 18224287,
      "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/14ecf66592de82d6f9f75afe94ca41a5c5c2ea83_1623857500.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
      "product_url": "https:\/\/digikala.com\/product\/dkp-4834527\/\u06af\u0648\u0634\u06cc-\u0645\u0648\u0628\u0627\u06cc\u0644-\u0633\u0627\u0645\u0633\u0648\u0646\u06af-\u0645\u062f\u0644-a72-sm-a725fds-\u062f\u0648-\u0633\u06cc\u0645\u06a9\u0627\u0631\u062a-\u0638\u0631\u0641\u06cc\u062a-256-\u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a-\u0648-\u0631\u0645-8-\u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
      "rating": {"rate": 85.4, "count": 314},
      "price": 139500000
    }];
    var page_search_url = null;
    var sntracker_search_data = {
      "source": 1,
      "page": 1,
      "pages": 277,
      "foundItems": 1165616,
      "query": "",
      "bannerId": null,
      "categoryId": 5966,
      "attributes": {"sort_by": 4, "has_selling_stock": false, "has_ready_to_shipment": 0},
      "products": [{
        "product_id": 4849334,
        "category_id": 211,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 1490000
      }, {
        "product_id": 2361428,
        "category_id": 11,
        "brand_id": 18,
        "is_sponsored": false,
        "selling_price": 60100000
      }, {
        "product_id": 4958276,
        "category_id": 11,
        "brand_id": 1662,
        "is_sponsored": false,
        "selling_price": 67990000
      }, {
        "product_id": 4834144,
        "category_id": 11,
        "brand_id": 18,
        "is_sponsored": false,
        "selling_price": 55790000
      }, {
        "product_id": 3329264,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 795000
      }, {
        "product_id": 5604632,
        "category_id": 211,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 1490000
      }, {
        "product_id": 5534876,
        "category_id": 211,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 1390000
      }, {
        "product_id": 3329270,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 695000
      }, {
        "product_id": 5401022,
        "category_id": 1272,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 6580000
      }, {
        "product_id": 4122136,
        "category_id": 11,
        "brand_id": 18,
        "is_sponsored": false,
        "selling_price": 36890000
      }, {
        "product_id": 3329260,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 895000
      }, {
        "product_id": 5152516,
        "category_id": 211,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 695000
      }, {
        "product_id": 3329265,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 885000
      }, {
        "product_id": 3329241,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 685000
      }, {
        "product_id": 3141369,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 885000
      }, {
        "product_id": 3329268,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 795000
      }, {
        "product_id": 3329263,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 995000
      }, {
        "product_id": 3329262,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 995000
      }, {
        "product_id": 3329261,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 895000
      }, {
        "product_id": 3893718,
        "category_id": 11,
        "brand_id": 10,
        "is_sponsored": false,
        "selling_price": 382000000
      }, {
        "product_id": 4124548,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 455000
      }, {
        "product_id": 4149037,
        "category_id": 11,
        "brand_id": 1662,
        "is_sponsored": false,
        "selling_price": 40990000
      }, {
        "product_id": 3329269,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 795000
      }, {
        "product_id": 3621997,
        "category_id": 6221,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 525000
      }, {
        "product_id": 5534901,
        "category_id": 211,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 1295000
      }, {
        "product_id": 4957468,
        "category_id": 11,
        "brand_id": 1662,
        "is_sponsored": false,
        "selling_price": 59990000
      }, {
        "product_id": 5534902,
        "category_id": 211,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 695000
      }, {
        "product_id": 3329266,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 885000
      }, {
        "product_id": 4374035,
        "category_id": 1272,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 5590000
      }, {
        "product_id": 5604111,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 1295000
      }, {
        "product_id": 5604363,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 1295000
      }, {
        "product_id": 3048126,
        "category_id": 11,
        "brand_id": 18,
        "is_sponsored": false,
        "selling_price": 40290000
      }, {
        "product_id": 5604051,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 995000
      }, {
        "product_id": 3942813,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 295000
      }, {
        "product_id": 4418954,
        "category_id": 11,
        "brand_id": 1662,
        "is_sponsored": false,
        "selling_price": 46490000
      }, {"product_id": 4834527, "category_id": 11, "brand_id": 18, "is_sponsored": false, "selling_price": 139500000}],
      "sponsored_products": [],
      "searchPhase": null,
      "searchModelName": null,
      "searchModelVersion": null
    };
    var categoryId = 5966;
    var nowTimeInUTC = "2021-07-07 03:45:55";
    var isAnanasFriendly = true;
    var userId = 9735394;
    var adroRCActivation = true;
    var loginRegisterUrlWithBack = "\/users\/login-register\/?_back=https:\/\/www.digikala.com\/search\/category-electronic-devices\/";
    var isNewCustomer = false;
    var digiclubLuckyDrawEndTime = "2021-09-29 15:30:32";
    var activateUrl = "\/digiclub\/activate\/";
  </script>

  <script>
    window['snTrackerGlobals'] = {
      "source": 1,
      "page": 1,
      "pages": 277,
      "foundItems": 1165616,
      "query": "",
      "bannerId": null,
      "categoryId": 5966,
      "attributes": {"sort_by": 4, "has_selling_stock": false, "has_ready_to_shipment": 0},
      "products": [{
        "product_id": 4849334,
        "category_id": 211,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 1490000
      }, {
        "product_id": 2361428,
        "category_id": 11,
        "brand_id": 18,
        "is_sponsored": false,
        "selling_price": 60100000
      }, {
        "product_id": 4958276,
        "category_id": 11,
        "brand_id": 1662,
        "is_sponsored": false,
        "selling_price": 67990000
      }, {
        "product_id": 4834144,
        "category_id": 11,
        "brand_id": 18,
        "is_sponsored": false,
        "selling_price": 55790000
      }, {
        "product_id": 3329264,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 795000
      }, {
        "product_id": 5604632,
        "category_id": 211,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 1490000
      }, {
        "product_id": 5534876,
        "category_id": 211,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 1390000
      }, {
        "product_id": 3329270,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 695000
      }, {
        "product_id": 5401022,
        "category_id": 1272,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 6580000
      }, {
        "product_id": 4122136,
        "category_id": 11,
        "brand_id": 18,
        "is_sponsored": false,
        "selling_price": 36890000
      }, {
        "product_id": 3329260,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 895000
      }, {
        "product_id": 5152516,
        "category_id": 211,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 695000
      }, {
        "product_id": 3329265,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 885000
      }, {
        "product_id": 3329241,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 685000
      }, {
        "product_id": 3141369,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 885000
      }, {
        "product_id": 3329268,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 795000
      }, {
        "product_id": 3329263,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 995000
      }, {
        "product_id": 3329262,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 995000
      }, {
        "product_id": 3329261,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 895000
      }, {
        "product_id": 3893718,
        "category_id": 11,
        "brand_id": 10,
        "is_sponsored": false,
        "selling_price": 382000000
      }, {
        "product_id": 4124548,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 455000
      }, {
        "product_id": 4149037,
        "category_id": 11,
        "brand_id": 1662,
        "is_sponsored": false,
        "selling_price": 40990000
      }, {
        "product_id": 3329269,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 795000
      }, {
        "product_id": 3621997,
        "category_id": 6221,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 525000
      }, {
        "product_id": 5534901,
        "category_id": 211,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 1295000
      }, {
        "product_id": 4957468,
        "category_id": 11,
        "brand_id": 1662,
        "is_sponsored": false,
        "selling_price": 59990000
      }, {
        "product_id": 5534902,
        "category_id": 211,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 695000
      }, {
        "product_id": 3329266,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 885000
      }, {
        "product_id": 4374035,
        "category_id": 1272,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 5590000
      }, {
        "product_id": 5604111,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 1295000
      }, {
        "product_id": 5604363,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 1295000
      }, {
        "product_id": 3048126,
        "category_id": 11,
        "brand_id": 18,
        "is_sponsored": false,
        "selling_price": 40290000
      }, {
        "product_id": 5604051,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 995000
      }, {
        "product_id": 3942813,
        "category_id": 80,
        "brand_id": 719,
        "is_sponsored": false,
        "selling_price": 295000
      }, {
        "product_id": 4418954,
        "category_id": 11,
        "brand_id": 1662,
        "is_sponsored": false,
        "selling_price": 46490000
      }, {"product_id": 4834527, "category_id": 11, "brand_id": 18, "is_sponsored": false, "selling_price": 139500000}],
      "sponsored_products": [],
      "searchPhase": null,
      "searchModelName": null,
      "searchModelVersion": null
    };
  </script>

  <script src="{{ asset('assets/js/sentry.js') }}"></script>
  <script src="{{ asset('assets/new/js/url.min.js') }}"></script>

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

    /*.o-page__content {*/
    /*  padding-left: 10px !important;*/
    /*}*/

    /*.o-page__aside {*/
    /*  padding-right: 10px !important;*/
    /*}*/

    /*body.has-top-banner.c-checkout-pages {*/
    /*   padding-top: 0 !important;*/
    /*}*/

    body {
      padding-top: 190px !important;
    }

  </style>
@endsection

@section('content')

  <?php
    $main_cat = $category;
    $lists[] = $category->id;
    while (isset($category->parent)) {
      $main_cat = $category->parent;
      $category = $category->parent;
      $lists[] = $category->id;
    }

    $lists = array_reverse($lists, true);
  ?>

  <main id="main">
    <div id="HomePageTopBanner"></div>
    <div id="content">
      <div class="container">
        <div class="o-page">
          <div class="o-box c-filter-shortcut">
            <div class="c-filter-shortcut__list-container">
              <div class="c-filter-shortcut__list-title">دسته‌بندی‌ها</div>
              <div class="c-filter-shortcut__list c-filter-shortcut__list--category">
                <?php $i = 1; ?>
                @foreach($categories->where('parent_id', $category->id) as $cat)
                  <a href="{{ route('front.categoryPage', $cat->slug) }}"
                     class="c-filter-shortcut__category-item js-shortcut-category ">
                    <div class="c-filter-shortcut__category-image">
                      @if ($cat->media()->exists())
                        <img
                          src="{{ (($cat->media()->exists())? $site_url . '/' .$cat->media()->first()->path . '/' . $cat->media()->first()->name : '') }}?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60">
                      @endif
                    </div>
                    <div class="c-filter-shortcut__category-title">{{ $cat->name }}</div>
                  </a>
                  @if ($i ==  7)
                    @break
                  @endif
                  <?php $i++; ?>
                @endforeach

                @if ($categories->where('parent_id', $category->id)->count() > 7)
                  <div
                    class="c-filter-shortcut__category-item c-filter-shortcut__category-item--show-more js-show-more-categories">
                    <span class="c-filter-shortcut__show-more-count">{{ persianNum($categories->where('parent_id', $category->id)->count()-7) }} +</span>
                    <span class="c-filter-shortcut__show-more-text">دسته‌بندی دیگر</span>
                  </div>
                @endif

              </div>
            </div>
          </div>
          <div class="o-page__row o-page__row--listing">
            <div class="o-page__aside has-pager" id="js-list-aside-wrapper">
              <div class="o-page__aside--listing js-list-aside-container js-sticky">
                <div class="c-listing-sidebar js-list-aside js-sticky-inner" id="js-list-aside"
                     style="position: relative;">
                  <script>
                    if (true)
                      document.getElementById('js-list-aside-wrapper').classList.add('has-pager');
                    else
                      document.getElementById('js-list-aside-wrapper').classList.remove('has-pager');
                  </script>

                  <div class="c-box">
                    <div class="c-box__header">دسته‌بندی نتایج</div>
                    <div class="c-filter c-filter--catalog js-box-content">
                      <div class=" js-box-content-items">

                        <div class="c-catalog show-more">
                          @foreach($list as $listItem)
                          <ul class="c-catalog__list--depth js-catalog-list" style="max-height: unset; height: 250px;">
                            <li class="c-catalog__cat-item ">
                              <span class="c-catalog__cat-item c-catalog__cat-item--arrow-left">
                                <a class="c-catalog__link " href="/search/category-electronic-devices/">کالای دیجیتال</a>
                              </span>
                              @if (is_array($listItem))
                                <div class=" show-more  ">

                                </div>
                              @endif
                            </li>
                          </ul>
                          @endforeach

                          <div class="c-catalog__show-more js-catalog-show-more">
                            مشاهده همه دسته‌بندی‌ها
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="c-box">
                    <div class="c-box__header">جستجو در نتایج:</div>
                    <div class="c-box__content">
                      <div class="c-ui-input c-ui-input--quick-search">
                        <input type="text" class="c-ui-input__field c-ui-input__field--cleanable js-cleanable-input"
                               value="" name="searchInput" data-event="search_in_category"
                               data-event-category="search_page" placeholder="نام محصول یا برند مورد نظر را بنویسید…">
                        <span class="c-ui-input-cleaner js-input-cleaner"></span>
                      </div>
                    </div>
                  </div>
                  <div class="c-box c-box--brands-filter js-ab-sidebar-filter">
                    <div class="">
                      <div class="c-box__header c-box__header--toggleable js-box-toggle ">برند</div>
                      <div class="c-filter c-filter--params js-box-content">
                        <div class="c-ui-input c-ui-input--quick-search">
                          <input type="text"
                                 class="c-ui-input__field c-ui-input__field--cleanable js-filter-input js-cleanable-input"
                                 placeholder="جستجوی نام برند…">
                          <span class="c-ui-input-cleaner js-input-cleaner"></span>
                        </div>
                        <div class="c-message c-message-light c-message-light--info js-message-error u-hidden">
                          <p>برند یا سازنده‌ای با این نام پیدا نشد!</p>
                        </div>
                        <div class="c-box__divider c-box__divider--full">
                          <div></div>
                        </div>
                        <div class="c-box__scroll-container">
                          <div class="c-box__scroll js-box-content-items">
                            <ul>

                              @foreach ($main_cat->brands as $brand)
                                <li>
                                  <label class="c-filter__label js-box-content-item" for="brand-param-{{ $brand->id }}"
                                         data-fa="{{ $brand->name }}" data-en="{{ $brand->en_name }}"
                                         data-search="{{ $brand->name }} {{ $brand->en_name }}">
                                    {{ $brand->name }}
                                  </label>
                                  <label class="c-ui-checkbox">
                                    <input type="checkbox" value="{{ $brand->id }}" name="brand[]"
                                           data-search-uid="brand" id="brand-param-{{ $brand->id }}">
                                    <span class="c-ui-checkbox__check"></span>
                                  </label>
                                </li>
                              @endforeach

                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                  {{--                  <div class="c-box c-box--brands-filter js-ab-sidebar-filter">--}}
                  {{--                    <div class="">--}}
                  {{--                      <div class="c-box__header c-box__header--toggleable js-box-toggle ">فروشنده--}}

                  {{--                      </div>--}}
                  {{--                      <div class="c-filter c-filter--params js-box-content">--}}
                  {{--                        <div class="c-message c-message-light c-message-light--info js-message-error u-hidden">--}}
                  {{--                          <p>برند یا سازنده‌ای با این نام پیدا نشد!</p>--}}
                  {{--                        </div>--}}
                  {{--                        <div class="c-box__divider c-box__divider--full">--}}
                  {{--                          <div></div>--}}
                  {{--                        </div>--}}
                  {{--                        <div class="c-box__scroll-container">--}}
                  {{--                          <div class="c-box__scroll js-box-content-items">--}}
                  {{--                            <ul>--}}
                  {{--                              <li>--}}
                  {{--                                <label class="c-filter__label js-box-content-item" for="seller_condition-param-digikala" data-fa="دیجی‌کالا" data-en="" data-search=" ">--}}
                  {{--                                  دیجی‌کالا--}}
                  {{--                                </label>--}}
                  {{--                                <label class="c-ui-checkbox"><input type="checkbox" value="digikala"--}}
                  {{--                                                                            name="seller_condition[]"--}}
                  {{--                                                                            data-search-uid="seller_condition"--}}
                  {{--                                                                            id="seller_condition-param-digikala"><span--}}
                  {{--                                    class="c-ui-checkbox__check"></span></label></li>--}}
                  {{--                              <li><label class="c-filter__label js-box-content-item"--}}
                  {{--                                         for="seller_condition-param-official" data-fa="فروشنده رسمی برند" data-en=""--}}
                  {{--                                         data-search=" ">--}}
                  {{--                                  فروشنده رسمی برند--}}
                  {{--                                </label><label class="c-ui-checkbox"><input type="checkbox" value="official"--}}
                  {{--                                                                            name="seller_condition[]"--}}
                  {{--                                                                            data-search-uid="seller_condition"--}}
                  {{--                                                                            id="seller_condition-param-official"><span--}}
                  {{--                                    class="c-ui-checkbox__check"></span></label></li>--}}
                  {{--                              <li><label class="c-filter__label js-box-content-item"--}}
                  {{--                                         for="seller_condition-param-trusted" data-fa="فروشنده برگزیده" data-en=""--}}
                  {{--                                         data-search=" ">--}}
                  {{--                                  فروشنده برگزیده--}}
                  {{--                                </label><label class="c-ui-checkbox"><input type="checkbox" value="trusted"--}}
                  {{--                                                                            name="seller_condition[]"--}}
                  {{--                                                                            data-search-uid="seller_condition"--}}
                  {{--                                                                            id="seller_condition-param-trusted"><span--}}
                  {{--                                    class="c-ui-checkbox__check"></span></label></li>--}}
                  {{--                              <li><label class="c-filter__label js-box-content-item" for="seller_condition-param-roosta"--}}
                  {{--                                         data-fa="کسب و کارهای بومی" data-en="" data-search=" ">--}}
                  {{--                                  کسب و کارهای بومی--}}
                  {{--                                </label><label class="c-ui-checkbox"><input type="checkbox" value="roosta"--}}
                  {{--                                                                            name="seller_condition[]"--}}
                  {{--                                                                            data-search-uid="seller_condition"--}}
                  {{--                                                                            id="seller_condition-param-roosta"><span--}}
                  {{--                                    class="c-ui-checkbox__check"></span></label></li>--}}
                  {{--                            </ul>--}}
                  {{--                          </div>--}}
                  {{--                        </div>--}}
                  {{--                      </div>--}}
                  {{--                    </div>--}}
                  {{--                  </div>--}}


                  <script>
                    var sellerConditionsSectionExists = true;
                  </script>

                  <div class="c-box">
                    <div class="c-filter c-filter--switcher js-box-content-items"><label
                        class="c-ui-statusswitcher"><input type="checkbox" value="1" name="has_jet_delivery"
                                                           id="has_jet_delivery-param-1"><span
                          class="c-ui-statusswitcher__slider"><span class="c-ui-statusswitcher__slider__toggle"></span></span></label>فقط
                      ارسال فوری
                    </div>
                  </div>
                  <div class="c-box js-ab-sidebar-filter">
                    <div class="c-filter c-filter--switcher js-box-content-items"><label
                        class="c-ui-statusswitcher"><input type="checkbox" value="1" name="has_selling_stock"
                                                           id="stock_status-param-1"><span
                          class="c-ui-statusswitcher__slider"><span class="c-ui-statusswitcher__slider__toggle"></span></span></label>فقط
                      کالاهای موجود
                    </div>
                  </div>
                  <div class="c-box js-ab-sidebar-filter" id="digikala_fake_section">
                    <div class="c-filter c-filter--switcher js-box-content-items"><label
                        class="c-ui-statusswitcher"><input type="checkbox" value="1" name="only_original"
                                                           id="stock_status-param-1"><span
                          class="c-ui-statusswitcher__slider"><span class="c-ui-statusswitcher__slider__toggle"></span></span></label>فقط
                      کالاهای اصل
                    </div>
                  </div>
                  <div class="c-box">
                    <div class="c-box__header c-box__header--toggleable js-box-toggle is-hidden">محدوده قیمت مورد نظر
                    </div>
                    <div class="c-filter c-filter--range js-box-content" style="display: none">
                      <div class="c-filter__slider">
                        <div class="c-slider js-slider-range noUi-target noUi-rtl noUi-horizontal">
                          <div class="noUi-base">
                            <div class="noUi-origin" style="right: 0%;">
                              <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider"
                                   aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0"
                                   aria-valuenow="0.0" aria-valuetext="0" style="z-index: 5;"></div>
                            </div>
                            <div class="noUi-connect" style="right: 0%; left: 0%;"></div>
                            <div class="noUi-origin" style="right: 100%;">
                              <div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider"
                                   aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0"
                                   aria-valuenow="100.0" aria-valuetext="240000000" style="z-index: 4;"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <ul class="c-filter__range">
                        <li data-label="از" data-currency=" تومان"><input type="text" data-value="0" value="0"
                                                                          name="price[min]" data-range="0"
                                                                          class="js-slider-range-from disabled"
                                                                          disabled="disabled"></li>
                        <li data-label="تا" data-currency="تومان"><input type="text" data-value="240000000"
                                                                         value="240000000" name="price[max]"
                                                                         data-range="240000000"
                                                                         class="js-slider-range-to disabled"
                                                                         disabled="disabled"></li>
                      </ul>
                      <div class="c-filter__action">
                        <div class="js-box-content-items u-hidden"><input type="checkbox" name="price[min]" value=""
                                                                          class="js-min-price"><input type="checkbox"
                                                                                                      name="price[max]"
                                                                                                      value=""
                                                                                                      class="js-max-price">
                        </div>
                        <button class="btn-primary btn-primary--filter js-price-filter disabled">اعمال محدوده قیمت
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="c-box c-box--brands-filter js-ab-test-rating u-hidden">
                    <div class="">
                      <div class="c-box__header c-box__header--toggleable js-box-toggle ">امتیاز

                      </div>
                      <div class="c-filter c-filter--params js-box-content">
                        <div class="c-message c-message-light c-message-light--info js-message-error u-hidden"><p>برند
                            یا سازنده‌ای با این نام پیدا نشد!</p></div>
                        <div class="c-box__divider c-box__divider--full">
                          <div></div>
                        </div>
                        <div class="c-box__scroll-container">
                          <div class="c-box__scroll js-box-content-items">
                            <ul>
                              <li><label class="c-filter__label c-filter__label--rating js-box-content-item"
                                         for="rate_range-param-4" data-fa="4" data-en="" data-search=" "><span
                                    class="c-filter__rating c-filter__rating--filled"></span><span
                                    class="c-filter__rating c-filter__rating--filled"></span><span
                                    class="c-filter__rating c-filter__rating--filled"></span><span
                                    class="c-filter__rating c-filter__rating--filled"></span><span
                                    class="c-filter__rating"></span>
                                  و بیشتر
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="4"
                                                                            name="rate_range[]"
                                                                            data-search-uid="rate_range"
                                                                            id="rate_range-param-4"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label c-filter__label--rating js-box-content-item"
                                         for="rate_range-param-3" data-fa="3" data-en="" data-search=" "><span
                                    class="c-filter__rating c-filter__rating--filled"></span><span
                                    class="c-filter__rating c-filter__rating--filled"></span><span
                                    class="c-filter__rating c-filter__rating--filled"></span><span
                                    class="c-filter__rating "></span><span class="c-filter__rating"></span>
                                  و بیشتر
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="3"
                                                                            name="rate_range[]"
                                                                            data-search-uid="rate_range"
                                                                            id="rate_range-param-3"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label c-filter__label--rating js-box-content-item"
                                         for="rate_range-param-2" data-fa="2" data-en="" data-search=" "><span
                                    class="c-filter__rating c-filter__rating--filled"></span><span
                                    class="c-filter__rating c-filter__rating--filled"></span><span
                                    class="c-filter__rating "></span><span class="c-filter__rating "></span><span
                                    class="c-filter__rating"></span>
                                  و بیشتر
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="2"
                                                                            name="rate_range[]"
                                                                            data-search-uid="rate_range"
                                                                            id="rate_range-param-2"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label c-filter__label--rating js-box-content-item"
                                         for="rate_range-param-1" data-fa="1" data-en="" data-search=" "><span
                                    class="c-filter__rating c-filter__rating--filled"></span><span
                                    class="c-filter__rating "></span><span class="c-filter__rating "></span><span
                                    class="c-filter__rating "></span><span class="c-filter__rating"></span>
                                  و بیشتر
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1"
                                                                            name="rate_range[]"
                                                                            data-search-uid="rate_range"
                                                                            id="rate_range-param-1"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="o-page__content">
              <div class="js-sticky-2">
                <article class="js-products js-sticky-inner-2 c-listing-wrapper
                            c-listing-wrapper--white-breadcrumb" style="position: relative;">
                  <nav class="js-breadcrumb ">
                    <ul vocab="https://schema.org/" typeof="BreadcrumbList" class="c-breadcrumb">
                      <li property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                                                          href="https://www.digikala.com"><span
                            property="name">فروشگاه اینترنتی دیجی‌کالا</span></a>
                        <meta property="position" content="1">
                      </li>
                      <li><span property="name">کالای دیجیتال</span></li>
                    </ul>
                  </nav>
                  <div class="c-listing js-listing">
                    <div class="c-listing__counter">۱,۱۶۵,۶۱۶ کالا</div>
                    <div class="c-listing__header">
                      <ul class="c-listing__sort js-sort-options" data-label="مرتب‌سازی بر اساس :">
                        <li class=""><a href="javascript:" data-sort="4" class="is-active">پربازدیدترین</a></li>
                        <li class=""><a href="javascript:" data-sort="7">پرفروش‌ترین‌</a></li>
                        <li class=""><a href="javascript:" data-sort="22">محبوب‌ترین</a></li>
                        <li class=""><a href="javascript:" data-sort="1">جدیدترین</a></li>
                        <li class=""><a href="javascript:" data-sort="20">ارزان‌ترین</a></li>
                        <li class=""><a href="javascript:" data-sort="21">گران‌ترین</a></li>
                        <li class=""><a href="javascript:" data-sort="25">سریع‌ترین ارسال</a></li>
                        <li class="u-hidden"><a href="javascript:" data-sort="27">پیشنهادات خریداران</a></li>
                      </ul>
                    </div>
                    <ul class="c-listing__items js-plp-products-list">
                      <li>
                        <div class="c-product-box c-promotion-box js-product-box
    has-more

     is-plp" data-observed="0" data-index="1" data-id="4849334" data-price="۱۴۹,۰۰۰"
                             data-title-fa="هندزفری اچ اند ام مدل G8" data-title-en=""
                             data-enhanced-ecommerce="{&quot;id&quot;:4849334,&quot;name&quot;:&quot;هندزفری اچ اند ام مدل G8&quot;,&quot;category&quot;:&quot;هدفون، هدست و هندزفری&quot;,&quot;brand&quot;:&quot;متفرقه&quot;,&quot;variant&quot;:15544382,&quot;price&quot;:1490000,&quot;quantity&quot;:0}">
                          <div data-csrf-token="" data-id="4849334"
                               class="c-product-box__add-to-wish-list js-ab-add-to-wish-list u-hidden"></div>
                          <a class="c-product__seller-details--item-grid-link js-ab-plp-product-seller-link"
                             href="https://www.digikala.com/seller/A3X3A/"></a>
                          <div class="c-product__seller-details c-product__seller-details--item-grid"><span
                              class="c-product__main-seller js-seller-text"><span
                                class="c-product__seller-details-label">فروشنده: </span>
                        آرسیسل
                    </span><span class="c-product__seller-details-badge-container"></span></div>
                          <a class="c-product-box__img c-promotion-box__image js-url js-product-item js-product-url"
                             target="_blank" data-adro-ad-click-id="4849334" data-snt-event="dkProductClicked"
                             data-snt-params="{&quot;productId&quot;:4849334,&quot;position&quot;:1,&quot;product_url&quot;:&quot;/product/dkp-4849334/هندزفری-اچ-اند-ام-مدل-g8&quot;}"
                             href="/product/dkp-4849334/هندزفری-اچ-اند-ام-مدل-g8">
                            <div style="" class="c-promotion__badge c-promotion__badge--special-sale ">
                              فروش ویژه
                            </div>
                            <div class="c-promotion__main-img-badges-container"></div>
                            <img
                              src="https://dkstatics-public.digikala.com/digikala-products/ccd305fd5014899cef6f4dc33524ba24139009fc_1617784086.jpg?x-oss-process=image/resize,m_lfit,h_600,w_600/quality,q_90"
                              alt="هندزفری اچ اند ام مدل G8"></a>
                          <div class="c-product-box__content">
                            <div class="c-product-box__content--row">
                              <div class="c-product-box__title"><a class="js-product-url"
                                                                   href="/product/dkp-4849334/هندزفری-اچ-اند-ام-مدل-g8"
                                                                   data-adro-ad-click-id="4849334" target="_blank">هندزفری
                                  اچ اند ام مدل G8</a></div>
                              <div class="c-product-box__title-en"></div>
                              <ul class="c-product-box__variants" data-title="رنگ ها:">
                                <li class="js-variant"><span class="c-variant c-variant--color"
                                                             style="background-color: #FFFFFF;border: 1px solid rgb(233, 233, 233);"></span>
                                </li>
                                <li class="js-variant"><span class="c-variant c-variant--color"
                                                             style="background-color: #f3f3f3;border: 1px solid rgb(233, 233, 233);"></span>
                                </li>
                              </ul>
                            </div>
                            <div class="c-product-box__rate-status">
                              <div class="c-product-box__engagement-rating">
                                ۳.۴
                                <span class="c-product-box__engagement-rating-num">
                                (۱۴۵)
                            </span></div>
                              <div class="c-product-box__status c-product-box__status--jet">
                                امکان ارسال فوری
                              </div>
                            </div>
                            <div class="c-product-box__row c-product-box__row--price">
                              <div class="c-price">
                                <div class="c-price__value c-price__value--plp ">
                                  <del>۲۹۹,۰۰۰</del>
                                  <div class="c-price__discount-oval"><span>٪۵۰</span></div>
                                  <div class="c-price__value-wrapper">
                                    ۱۴۹,۰۰۰
                                    <span class="c-price__currency">تومان</span></div>
                                </div>
                              </div>
                            </div>
                            <div class="c-product-box__tags ">
                              <div class="c-product-box__tags-container"></div>
                              <ul class="c-product__seller-details c-product__seller-details--item">
                                <li class="c-product__main-seller js-seller-text">
                                  آرسیسل
                                </li>
                                <li class="c-product__main-guarantee">
                                  گارانتی اصالت و سلامت فیزیکی کالا
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="c-product-box c-promotion-box js-product-box
    has-more

     is-plp" data-observed="0" data-index="2" data-id="2361428" data-price="۶,۰۱۰,۰۰۰"
                             data-title-fa="گوشی موبایل سامسونگ مدل Galaxy A51 SM-A515F/DSN دو سیم کارت ظرفیت 128گیگابایت"
                             data-title-en="Samsung Galaxy A51 SM-A515F/DSN Dual SIM 128GB With 6GB Ram Mobile Phone"
                             data-enhanced-ecommerce="{&quot;id&quot;:2361428,&quot;name&quot;:&quot;گوشی موبایل سامسونگ مدل Galaxy A51 SM-A515F\/DSN دو سیم کارت ظرفیت 128گیگابایت&quot;,&quot;category&quot;:&quot;گوشی موبایل&quot;,&quot;brand&quot;:&quot;Samsung&quot;,&quot;variant&quot;:7434579,&quot;price&quot;:60100000,&quot;quantity&quot;:0}">
                          <div data-csrf-token="" data-id="2361428"
                               class="c-product-box__add-to-wish-list js-ab-add-to-wish-list u-hidden"></div>
                          <a class="c-product__seller-details--item-grid-link js-ab-plp-product-seller-link"
                             href="https://www.digikala.com/seller/5A52N/"></a>
                          <div class="c-product__seller-details c-product__seller-details--item-grid"><span
                              class="c-product__main-seller js-seller-text"><span
                                class="c-product__seller-details-label">فروشنده: </span>
                        دیجی‌کالا
                    </span><span class="c-product__seller-details-badge-container"><span
                                class="c-product__seller-details-dk"><img
                                  src="https://www.digikala.com/static/files/921c1a32.svg"></span></span></div>
                          <a class="c-product-box__img c-promotion-box__image js-url js-product-item js-product-url"
                             target="_blank" data-adro-ad-click-id="2361428" data-snt-event="dkProductClicked"
                             data-snt-params="{&quot;productId&quot;:2361428,&quot;position&quot;:2,&quot;product_url&quot;:&quot;/product/dkp-2361428/گوشی-موبایل-سامسونگ-مدل-galaxy-a51-sm-a515fdsn-دو-سیم-کارت-ظرفیت-128گیگابایت&quot;}"
                             href="/product/dkp-2361428/گوشی-موبایل-سامسونگ-مدل-galaxy-a51-sm-a515fdsn-دو-سیم-کارت-ظرفیت-128گیگابایت">
                            <div class="c-promotion__main-img-badges-container"></div>
                            <img
                              src="https://dkstatics-public.digikala.com/digikala-products/115598446.jpg?x-oss-process=image/resize,m_lfit,h_600,w_600/quality,q_90"
                              alt="گوشی موبایل سامسونگ مدل Galaxy A51 SM-A515F/DSN دو سیم کارت ظرفیت 128گیگابایت"></a>
                          <div class="c-product-box__content">
                            <div class="c-product-box__content--row">
                              <div class="c-product-box__title"><a class="js-product-url"
                                                                   href="/product/dkp-2361428/گوشی-موبایل-سامسونگ-مدل-galaxy-a51-sm-a515fdsn-دو-سیم-کارت-ظرفیت-128گیگابایت"
                                                                   data-adro-ad-click-id="2361428" target="_blank">گوشی
                                  موبایل سامسونگ مدل Galaxy A51 SM-A515F/DSN دو سیم کارت ظرفیت 128گیگابایت</a></div>
                              <div class="c-product-box__title-en">Samsung Galaxy A51 SM-A515F/DSN Dual SIM 128GB With
                                6GB Ram Mobile Phone
                              </div>
                              <ul class="c-product-box__variants" data-title="رنگ ها:" data-more="+">
                                <li class="js-variant"><span class="c-variant c-variant--color"
                                                             style="background-color: #212121;border: 1px solid rgb(233, 233, 233);"></span>
                                </li>
                                <li class="js-variant"><span class="c-variant c-variant--color"
                                                             style="background-color: #FFFFFF;border: 1px solid rgb(233, 233, 233);"></span>
                                </li>
                                <li class="js-variant"><span class="c-variant c-variant--color"
                                                             style="background-color: #FF80AB;border: 1px solid rgb(233, 233, 233);"></span>
                                </li>
                              </ul>
                            </div>
                            <div class="c-product-box__rate-status">
                              <div class="c-product-box__engagement-rating">
                                ۴.۴
                                <span class="c-product-box__engagement-rating-num">
                                (۵۶۳۰)
                            </span></div>
                              <div class="c-product-box__status c-product-box__status--jet">
                                امکان ارسال فوری
                              </div>
                            </div>
                            <div class="c-product-box__row c-product-box__row--price">
                              <div class="c-price">
                                <div class="c-price__value c-price__value--plp js-plp-product-card-price">
                                  <div class="c-price__value-wrapper">
                                    ۶,۰۱۰,۰۰۰
                                    <span class="c-price__currency">تومان</span></div>
                                </div>
                                <div class="c-price__value c-price__value--plp u-hidden js-ab-plp-product-card-price">
                                  <div class="c-price__value-wrapper">
                                    ۶.۰۱
                                    <span class="c-price__currency">میلیون تومان</span></div>
                                </div>
                              </div>
                            </div>
                            <div class="c-product-box__tags ">
                              <div class="c-product-box__tags-container"></div>
                              <ul class="c-product__seller-details c-product__seller-details--item">
                                <li class="c-product__main-seller js-seller-text">
                                  دیجی‌کالا
                                </li>
                                <li class="c-product__main-guarantee">
                                  گارانتی 18 ماهه دیجی کالا
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <div class="u-hidden">
                      <div
                        class="c-filter-touchpoint js-touchpoint-seller_condition js-touchpoint-filters js-ab-desktop-touchpoint u-hidden">
                        <label>فروشنده</label>
                        <div
                          class="c-filter-touchpoint__items-holder js-touchpoint-swiper-container swiper-container-horizontal swiper-container-rtl">
                          <ul class="swiper-wrapper" style="transition-duration: 0ms;">
                            <li class="swiper-slide js-touchpoint-item" data-value="seller_condition-param-digikala">
                              دیجی‌کالا
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="seller_condition-param-official">
                              فروشنده رسمی برند
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="seller_condition-param-trusted">
                              فروشنده برگزیده
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="seller_condition-param-roosta">
                              کسب و کارهای بومی
                            </li>
                          </ul>
                        </div>
                        <button class="js-touchpoint-swiper-next"></button>
                      </div>
                      <div
                        class="c-filter-touchpoint js-touchpoint-brand js-touchpoint-filters js-ab-desktop-touchpoint u-hidden">
                        <label>برند</label>
                        <div
                          class="c-filter-touchpoint__items-holder js-touchpoint-swiper-container swiper-container-horizontal swiper-container-rtl">
                          <ul class="swiper-wrapper" style="transition-duration: 0ms;">
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1662">
                              شیائومی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-18">
                              سامسونگ
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-10">
                              اپل
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-94">
                              لنوو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-4">
                              ایسوس
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-82">
                              هوآوی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-56">
                              تسکو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-20">
                              نوکیا
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1">
                              سونی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-6">
                              اچ‌پی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-5288">
                              ماهوت
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-51">
                              مایکروسافت
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-48">
                              وسترن دیجیتال
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-61">
                              ای دیتا
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-16">
                              پاناسونیک
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-23">
                              موتورولا
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-72">
                              تی پی-لینک
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-7186">
                              آنر
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-12">
                              کانن
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-63">
                              سن دیسک
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-213">
                              باسئوس
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1096">
                              جی بی ال
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-22">
                              ال جی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-83">
                              سیلیکون پاور
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-29">
                              اینتل
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-41">
                              گرین
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-2">
                              دل
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1651">
                              نیلکین
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-91">
                              ریزر
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-11349">
                              جی پلاس
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-43">
                              دی-لینک
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1716">
                              ریمکس
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-3">
                              ایسر
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1742">
                              انکر
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-2876">
                              نیا
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-4989">
                              کی اچ
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-2497">
                              امیزفیت
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1667">
                              ایرانسل
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-170">
                              کملیون
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-33">
                              کینگستون
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-95">
                              ام اس آی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-34">
                              گیگابایت
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-202">
                              ایکس پی-پروداکت
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-5625">
                              جوی روم
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-37">
                              ای فورتک
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-8923">
                              کینگ استار
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-7441">
                              ایکس-انرژی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1811">
                              کولر مستر
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-136">
                              دیپ کول
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-6548">
                              کیو سی وای
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-9">
                              توشیبا
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-486">
                              گردو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1990">
                              وان پلاس
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-3927">
                              پارت الکتریک
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-15">
                              فوجی فیلم
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-38">
                              لاجیتک
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-9891">
                              ایکس پی-پن
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-5473">
                              وریتی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-704">
                              انرجایزر
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1070">
                              سادیتا
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-146">
                              ویفنگ
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1151">
                              رپو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-13">
                              نیکون
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-6859">
                              دوجی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1075">
                              کاترپیلار
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-2843">
                              بیاند
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-28">
                              سیگیت
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-4868">
                              مستر تک
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-4180">
                              ویکومن
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1250">
                              اسپیگن
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-6682">
                              بوسمن
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-2361">
                              هویت
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-50">
                              نینتندو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-5927">
                              ایکس او
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-80">
                              آلکاتل
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-5302">
                              سومگ
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1650">
                              عصر بازی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1919">
                              ارد
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-5032">
                              داهوا
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-4585">
                              اوی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-3773">
                              هادرون
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-2188">
                              یانتنگ
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1095">
                              هارمن کاردن
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-2120">
                              اوریکو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-5738">
                              ارلدام
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-27">
                              اپسون
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-68">
                              فیلیپس
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-55">
                              کاسیو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-360">
                              سلسترون
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-6028">
                              پی نت
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-7531">
                              یوتل
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-128">
                              اپیسر
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-4783">
                              هانی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-126">
                              پی ان وای
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-7317">
                              مکا
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1110">
                              کروشیال
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-2898">
                              یوسمز
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-718">
                              بیتس
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-5620">
                              کارینو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-242">
                              هوکو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-5834">
                              ونوس
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-4754">
                              مولتی نانو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-2634">
                              الدینیو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-5534">
                              یسیدو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-2478">
                              هایک ویژن
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1044">
                              توتو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-172">
                              دوراسل
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-4153">
                              یونیورسال
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-100">
                              جنیوس
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-384">
                              گارمین
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-6923">
                              دابی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-2310">
                              ای کی جی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-10397">
                              ای دیتا ایکس پی جی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-187">
                              فوروارد
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1244">
                              هترون
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-32">
                              کریتیو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-5086">
                              وروان
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-2311">
                              بیرداینامیک
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1339">
                              روموس
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1108">
                              وکام
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-6387">
                              جی بگ
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-6288">
                              وی آر باکس
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-17">
                              کداک
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-2421">
                              جی اسکیل
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-240">
                              لکسار
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-7378">
                              گروه صنعتی سارا ترانس
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-5146">
                              بایوستار
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-4225">
                              راو پاور
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-6342">
                              مک دودو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-3346">
                              ترمالتیک
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-44">
                              کورسیر
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-6338">
                              میکروتیک
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-106">
                              آمازون
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-3663">
                              داتیس
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1051">
                              راک
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-2926">
                              دی-نت
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-2687">
                              لوکین
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-58">
                              شارپ
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1012">
                              یونیوو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-59">
                              ایکس ویژن
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-3182">
                              تیراژه
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-4273">
                              بلو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-6211">
                              دریسکو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-76">
                              گوپرو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-88">
                              سنهایزر
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-8928">
                              شاینکن
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-30">
                              ای ام دی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1755">
                              لسی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-7886">
                              جی.تی.آر
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-193">
                              زد تی ای
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-5775">
                              پکس
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-6052">
                              یونیک
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-4575">
                              پلوز
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1067">
                              اس تی ام
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-4259">
                              فردان الکتریک
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-259">
                              نایت اسکای
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-5355">
                              آکو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1063">
                              یورو کوانتوم
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-26">
                              اچ تی سی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-488">
                              میوا
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-721">
                              ایکس-دوریا
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-39">
                              ادیفایر
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-123">
                              جبرا
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-7828">
                              ویوو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-383">
                              گیگاست
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-7541">
                              تکنیکال
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1080">
                              پیر کاردین
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-6991">
                              تائوترونیکس
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-185">
                              موشی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-3574">
                              المنت کیس
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-3801">
                              اسکای
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-9559">
                              مهرتاش
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-5695">
                              بی اس ان ال
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-5740">
                              جووی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1647">
                              دی جی آی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-3228">
                              سایوتیم
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-2690">
                              آکی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-74">
                              زایکسل
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-709">
                              بوز
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-6855">
                              راک اسپیس
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-2575">
                              سومو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-713">
                              تندا
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1027">
                              لایت آن
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-6307">
                              آی دوژی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-5678">
                              پرایم
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-3113">
                              اسکال کندی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-5844">
                              کامار
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-6370">
                              خیام الکتریک
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1181">
                              مکسیدر
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-6056">
                              کینگ ویر
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-121">
                              جی ال ایکس
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1539">
                              دایو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1252">
                              وی تک
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-2521">
                              یوگرین
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-3124">
                              نوین پندار
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-3452">
                              آی واک
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-5380">
                              امگا
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-4642">
                              مومکس
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-47">
                              ترنسند
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-3106">
                              نزتک
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-135">
                              بلکین
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-719">
                              متفرقه
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-23635">
                              لیتو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-19249">
                              چرم جانتا
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-11006">
                              ترانیو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-14944">
                              هایلو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-18195">
                              عصر بوژان
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-18387">
                              ریلمی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-11956">
                              کوئین تک
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-13416">
                              جی کی کی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-11015">
                              سامورایی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-11060">
                              جی تب
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-13566">
                              گودزیلا
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-12722">
                              اونیکوما
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-16198">
                              ردراگون
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-12095">
                              تراستکتور
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-19172">
                              رینیکا
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-18575">
                              تک زون
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-10469">
                              هورس
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-21543">
                              دات کاما
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-18292">
                              ژینوس
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-11811">
                              یونیمات
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-16783">
                              آرمور
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-15383">
                              آیرون من
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-10463">
                              لایونکس
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-10308">
                              میدسان
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-20005">
                              کیمیسو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-13288">
                              ماسا دیزاین
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-3395">
                              وان مور
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-11794">
                              کینگ کونگ
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-12117">
                              کیس‌می
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-10408">
                              لوکا
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-8562">
                              کانواس
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-16102">
                              موناکو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-9054">
                              کلومن
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-23335">
                              لووکا
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-10999">
                              پرووان
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-19429">
                              پی‌کی سل
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-13890">
                              زیلوت
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-4196">
                              کیسونلی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-1642">
                              بوف
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-18476">
                              توییجین وموییجین
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-15959">
                              همراه اول
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-17495">
                              بادیگارد
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-17807">
                              تراستمستر
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-21615">
                              ایکس اکسلنت
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-9546">
                              نمودار کنترل
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-8538">
                              جی بی تیم
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-14336">
                              رزلیانس
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-21424">
                              پالیت
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-8043">
                              هوئیون
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-12409">
                              دکین
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-14210">
                              وایت ولف
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-18499">
                              ایبیزا
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-16051">
                              فیرو پلاس
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-17163">
                              میلاد شاهکار
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-22929">
                              لولو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-9634">
                              دکتر مموری
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-14681">
                              تی اند جی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-23378">
                              ایپاسون
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-23355">
                              ایتوک
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-9585">
                              نست
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-11590">
                              سلبریت
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-18051">
                              دیویژن
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-12355">
                              ژیپین
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-19666">
                              ای فاکس
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-12171">
                              کاکو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-14672">
                              ولگا
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-11063">
                              جی ماری
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-10052">
                              پاناتک
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-9696">
                              آرسون
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-19523">
                              ری گان
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-12105">
                              سمگپرس
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-12237">
                              هیسکا
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-19345">
                              سام الکترونیک
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-17696">
                              لیکگاس
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-14182">
                              پاورولوجی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-16987">
                              کی تی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-11905">
                              آی پگا
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-13999">
                              دیتا پلاس
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-14804">
                              هاینو تکو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-11301">
                              کی-دوو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-10978">
                              کوکوک
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-18122">
                              دبو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-17678">
                              ای اِس آر
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-19791">
                              کوشن ایچ
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-11009">
                              آها استایل
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-18887">
                              میشن
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-13214">
                              سی.اف.ال
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-12934">
                              ماموت
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-9919">
                              گودکس
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-22783">
                              موبالینو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-13798">
                              اسکپتر
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-11653">
                              لاوا
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-13157">
                              گلادیاتور
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-11067">
                              پرودو
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-10921">
                              سیماران
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-20675">
                              مگپول
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-14526">
                              ای پی سی
                            </li>
                            <li class="swiper-slide js-touchpoint-item" data-value="brand-param-8559">
                              نیوریکسینگ
                            </li>
                          </ul>
                        </div>
                        <button class="js-touchpoint-swiper-next"></button>
                      </div>
                    </div>
                    <div class="c-pager">
                      <ul class="c-pager__items">
                        <li class="js-pagination__item"><a class="c-pager__item is-active" href="javascript:"
                                                           data-page="1">۱</a></li>
                        <li class="js-pagination__item"><a class="c-pager__item"
                                                           href="/search/category-electronic-devices/?sortby=4&amp;pageno=2"
                                                           data-page="2">۲</a></li>
                        <li class="js-pagination__item"><a class="c-pager__item"
                                                           href="/search/category-electronic-devices/?sortby=4&amp;pageno=3"
                                                           data-page="3">۳</a></li>
                        <li class="js-pagination__item"><a class="c-pager__item"
                                                           href="/search/category-electronic-devices/?sortby=4&amp;pageno=4"
                                                           data-page="4">۴</a></li>
                        <li class="js-pagination__item"><a class="c-pager__item"
                                                           href="/search/category-electronic-devices/?sortby=4&amp;pageno=5"
                                                           data-page="5">۵</a></li>
                        <line class="c-pager__items--partition"></line>
                        <li class="js-pagination__item"><a class="c-pager__next"
                                                           href="/search/category-electronic-devices/?sortby=4&amp;pageno=277"
                                                           data-page="277"></a></li>
                      </ul>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
          <script>
            var carouselDataTracker = {
              "carouselPosition": "CATEGORY",
              "id": "sn-carousels-best-price-products",
              "title": "\u0628\u0647\u062a\u0631\u06cc\u0646 \u0641\u0631\u0635\u062a \u062e\u0631\u06cc\u062f",
              "title_en": "Best purchase opportunities",
              "products": [{
                "id": 3352714,
                "name": "\u0645\u062d\u0627\u0641\u0638 \u06a9\u0627\u0628\u0644 \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc \u0645\u062f\u0644 CL",
                "price": 58000,
                "category": "\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 1,
                "status": "marketable"
              }, {
                "id": 2261669,
                "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0646\u0648\u06a9\u06cc\u0627 \u0645\u062f\u0644 2018  106 \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a",
                "price": 3710000,
                "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "brand": "Nokia",
                "position": 2,
                "status": "marketable"
              }, {
                "id": 3461617,
                "name": "\u0645\u062d\u0627\u0641\u0638 \u06a9\u0627\u0628\u0644 \u0645\u062f\u0644 Silicone Spring \u0628\u0633\u062a\u0647 2 \u0639\u062f\u062f\u06cc",
                "price": 8000,
                "category": "\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 3,
                "status": "marketable"
              }, {
                "id": 3677732,
                "name": "\u0645\u062d\u0627\u0641\u0638 \u06a9\u0627\u0628\u0644 \u0634\u0627\u0631\u0698 \u0645\u062f\u0644 SFP-36 \u0645\u062c\u0645\u0648\u0639\u0647 4 \u0639\u062f\u062f\u06cc",
                "price": 12000,
                "category": "\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 4,
                "status": "marketable"
              }, {
                "id": 4290052,
                "name": "\u06a9\u0627\u0628\u0644 \u0634\u0627\u0631\u0698 \u0648 \u062a\u0628\u062f\u06cc\u0644 USB\u0628\u0647 microUSB\u00a0\u00a0\u0645\u062f\u0644 GH39-01578A \u0637\u0648\u0644 \u06f1 \u0645\u062a\u0631",
                "price": 44000,
                "category": "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 5,
                "status": "marketable"
              }, {
                "id": 1587799,
                "name": "\u067e\u0627\u06cc\u0647 \u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647 \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0627\u0633\u062a\u0646\u062f \u062a\u0628\u0644\u062a \u0686\u0648\u0628\u06cc \u0686\u0648\u0628\u06cc\u0633 \u06a9\u062f 1-351",
                "price": 39900,
                "category": "\u067e\u0627\u06cc\u0647 \u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647 \u06af\u0648\u0634\u06cc \u0648 \u062a\u0628\u0644\u062a",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 6,
                "status": "marketable"
              }, {
                "id": 3851737,
                "name": "\u0628\u0646\u062f \u0645\u062f\u0644 Cs-01 \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u0645\u0686 \u0628\u0646\u062f \u0647\u0648\u0634\u0645\u0646\u062f \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc Mi Band 3\/4",
                "price": 153000,
                "category": "\u0628\u0646\u062f \u0633\u0627\u0639\u062a \u0648 \u0645\u0686\u200c \u0628\u0646\u062f",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 7,
                "status": "marketable"
              }, {
                "id": 4415484,
                "name": "\u0645\u062c\u0645\u0648\u0639\u0647 \u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0645\u062f\u0644 Plus",
                "price": 69000,
                "category": "\u0645\u062c\u0645\u0648\u0639\u0647 \u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 8,
                "status": "marketable"
              }, {
                "id": 5086666,
                "name": "\u0647\u0646\u062f\u0632\u0641\u0631\u06cc \u0628\u0644\u0648\u062a\u0648\u062b\u06cc \u0645\u062f\u0644 \u00a0inpods i12",
                "price": 970000,
                "category": "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 9,
                "status": "marketable"
              }, {
                "id": 2390599,
                "name": "\u067e\u0627\u06cc\u0647 \u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647 \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u067e\u0627\u067e \u0633\u0648\u06a9\u062a \u0622\u06a9\u0627\u0645 \u0645\u062f\u0644 APS0749",
                "price": 60000,
                "category": "\u067e\u0627\u06cc\u0647 \u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647 \u06af\u0648\u0634\u06cc \u0648 \u062a\u0628\u0644\u062a",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 10,
                "status": "marketable"
              }, {
                "id": 713893,
                "name": "\u06a9\u0627\u0648\u0631 \u0698\u0644\u0647 \u0627\u06cc \u062f\u0648\u0631\u06af\u0648\u0634\u06cc \u0627\u06cc\u0631\u067e\u0627\u062f \u0645\u062f\u0644 Soft",
                "price": 40900,
                "category": "\u0645\u062c\u0645\u0648\u0639\u0647 \u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 11,
                "status": "marketable"
              }, {
                "id": 4854476,
                "name": "\u0645\u062d\u0627\u0641\u0638 \u0644\u0646\u0632 \u062f\u0648\u0631\u0628\u06cc\u0646 \u0645\u062f\u0644 SM-X \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc POCO X3 \/ POCO X3 NFC",
                "price": 115000,
                "category": "Mobile Lens Screen Protector",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 12,
                "status": "marketable"
              }, {
                "id": 4011476,
                "name": "\u0645\u062d\u0627\u0641\u0638 \u06a9\u0627\u0628\u0644 \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc \u0645\u062f\u0644 cb2",
                "price": 90000,
                "category": "\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 13,
                "status": "marketable"
              }, {
                "id": 1043507,
                "name": "\u0645\u062d\u0627\u0641\u0638 \u06a9\u0627\u0628\u0644 \u0645\u062f\u0644 sample \u0628\u0633\u062a\u0647 \u06f8 \u0639\u062f\u062f\u06cc",
                "price": 75000,
                "category": "\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 14,
                "status": "marketable"
              }, {
                "id": 4808373,
                "name": "\u0645\u062d\u0627\u0641\u0638 \u0635\u0641\u062d\u0647 \u0646\u0645\u0627\u06cc\u0634 \u0633\u0631\u0627\u0645\u06cc\u06a9\u06cc \u0645\u0627\u062a \u0627\u0644\u06a9\u0627 \u0645\u062f\u0644 +PRO \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc Poco X3",
                "price": 68700,
                "category": "\u0645\u062d\u0627\u0641\u0638 \u0635\u0641\u062d\u0647 \u0646\u0645\u0627\u06cc\u0634 \u06af\u0648\u0634\u06cc",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 15,
                "status": "marketable"
              }, {
                "id": 5093286,
                "name": "\u06a9\u0627\u0628\u0644 \u0634\u0627\u0631\u0698 USB \u0628\u0647 USB-C \u0631\u06cc\u0644\u0645\u06cc \u0645\u062f\u0644 DC \u0628\u0647 \u0637\u0648\u0644 1 \u0645\u062a\u0631",
                "price": 160000,
                "category": "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644",
                "brand": "\u0631\u06cc\u0644\u0645\u06cc",
                "position": 16,
                "status": "marketable"
              }, {
                "id": 3043866,
                "name": "\u0645\u062d\u0627\u0641\u0638 \u0635\u0641\u062d\u0647 \u0646\u0645\u0627\u06cc\u0634 \u0645\u0627\u062a \u0698\u0646\u0631\u0627\u0644 \u0645\u062f\u0644 LKFCM \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc Redmi Note 8",
                "price": 66700,
                "category": "\u0645\u062d\u0627\u0641\u0638 \u0635\u0641\u062d\u0647 \u0646\u0645\u0627\u06cc\u0634 \u06af\u0648\u0634\u06cc",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 17,
                "status": "marketable"
              }, {
                "id": 5023703,
                "name": "\u06a9\u0627\u0648\u0631 \u0645\u062f\u0644 PML \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc Redmi Note 10 4G",
                "price": 340000,
                "category": "\u06a9\u06cc\u0641 \u0648 \u06a9\u0627\u0648\u0631 \u06af\u0648\u0634\u06cc",
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "position": 18,
                "status": "marketable"
              }, {
                "id": 498137,
                "name": "\u062a\u0628\u062f\u06cc\u0644 OTG \u0631\u06cc\u0645\u06a9\u0633 \u0645\u062f\u0644 RA-OTG",
                "price": 20600,
                "category": "\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644",
                "brand": "\u0631\u06cc\u0645\u06a9\u0633",
                "position": 19,
                "status": "marketable"
              }, {
                "id": 2435567,
                "name": "\u0645\u062d\u0627\u0641\u0638 \u0635\u0641\u062d\u0647 \u0646\u0645\u0627\u06cc\u0634 \u0646\u0627\u0646\u0648 \u0641\u0644\u06a9\u0633 \u0645\u062f\u0644  F50 \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af  Galaxy A20 \/ A30 \/ A30s \/ A50",
                "price": 57000,
                "category": "\u0645\u062d\u0627\u0641\u0638 \u0635\u0641\u062d\u0647 \u0646\u0645\u0627\u06cc\u0634 \u06af\u0648\u0634\u06cc",
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
                  "name": "\u0645\u062d\u0627\u0641\u0638 \u06a9\u0627\u0628\u0644 \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc \u0645\u062f\u0644 CL",
                  "id": 3352714,
                  "price": 58000,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "[AC,\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0648\u0642\u0637\u0639\u0627\u062a  \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a]",
                  "list": "category-\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
                  "position": 1,
                  "dimension6": 1,
                  "dimension2": 0,
                  "dimension9": 4.2,
                  "metric6": 8094,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-category-best-buy-chance",
                  "dimension7": "none"
                }, {
                  "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0646\u0648\u06a9\u06cc\u0627 \u0645\u062f\u0644 2018  106 \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a",
                  "id": 2261669,
                  "price": 3710000,
                  "brand": "\u0646\u0648\u06a9\u06cc\u0627",
                  "category": "[MO,\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644]",
                  "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                  "position": 2,
                  "dimension6": 1,
                  "dimension2": 0,
                  "dimension9": 4.1,
                  "metric6": 1569,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-category-best-buy-chance",
                  "dimension7": "none"
                }, {
                  "name": "\u0645\u062d\u0627\u0641\u0638 \u06a9\u0627\u0628\u0644 \u0645\u062f\u0644 Silicone Spring \u0628\u0633\u062a\u0647 2 \u0639\u062f\u062f\u06cc",
                  "id": 3461617,
                  "price": 8000,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "[AC,\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0648\u0642\u0637\u0639\u0627\u062a  \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a]",
                  "list": "category-\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
                  "position": 3,
                  "dimension6": 1,
                  "dimension2": 73,
                  "dimension9": 4.2,
                  "metric6": 4237,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-category-best-buy-chance",
                  "dimension7": "special-offer"
                }, {
                  "name": "\u0645\u062d\u0627\u0641\u0638 \u06a9\u0627\u0628\u0644 \u0634\u0627\u0631\u0698 \u0645\u062f\u0644 SFP-36 \u0645\u062c\u0645\u0648\u0639\u0647 4 \u0639\u062f\u062f\u06cc",
                  "id": 3677732,
                  "price": 12000,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "[AC,\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0648\u0642\u0637\u0639\u0627\u062a  \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a]",
                  "list": "category-\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
                  "position": 4,
                  "dimension6": 1,
                  "dimension2": 87,
                  "dimension9": 4.1,
                  "metric6": 774,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-category-best-buy-chance",
                  "dimension7": "special-offer"
                }, {
                  "name": "\u06a9\u0627\u0628\u0644 \u0634\u0627\u0631\u0698 \u0648 \u062a\u0628\u062f\u06cc\u0644 USB\u0628\u0647 microUSB\u00a0\u00a0\u0645\u062f\u0644 GH39-01578A \u0637\u0648\u0644 \u06f1 \u0645\u062a\u0631",
                  "id": 4290052,
                  "price": 44000,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "[AC,\u06a9\u0627\u0628\u0644 \u0648\u0645\u0628\u062f\u0644]",
                  "list": "category-\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644",
                  "position": 5,
                  "dimension6": 1,
                  "dimension2": 45,
                  "dimension9": 3.6,
                  "metric6": 1272,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-category-best-buy-chance",
                  "dimension7": "special-offer"
                }, {
                  "name": "\u067e\u0627\u06cc\u0647 \u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647 \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0627\u0633\u062a\u0646\u062f \u062a\u0628\u0644\u062a \u0686\u0648\u0628\u06cc \u0686\u0648\u0628\u06cc\u0633 \u06a9\u062f 1-351",
                  "id": 1587799,
                  "price": 39900,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "[AC,\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0648\u0642\u0637\u0639\u0627\u062a  \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a]",
                  "list": "category-\u067e\u0627\u06cc\u0647 \u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647 \u06af\u0648\u0634\u06cc \u0648 \u062a\u0628\u0644\u062a",
                  "position": 6,
                  "dimension6": 1,
                  "dimension2": 30,
                  "dimension9": 4,
                  "metric6": 4861,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-category-best-buy-chance",
                  "dimension7": "special-offer"
                }, {
                  "name": "\u0628\u0646\u062f \u0645\u062f\u0644 Cs-01 \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u0645\u0686 \u0628\u0646\u062f \u0647\u0648\u0634\u0645\u0646\u062f \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc Mi Band 3\/4",
                  "id": 3851737,
                  "price": 153000,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "[PA,\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0633\u0627\u0639\u062a \u0647\u0648\u0634\u0645\u0646\u062f]",
                  "list": "category-\u0628\u0646\u062f \u0633\u0627\u0639\u062a \u0648 \u0645\u0686\u200c \u0628\u0646\u062f",
                  "position": 7,
                  "dimension6": 1,
                  "dimension2": 0,
                  "dimension9": 4.3,
                  "metric6": 1410,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-category-best-buy-chance",
                  "dimension7": "none"
                }, {
                  "name": "\u0645\u062c\u0645\u0648\u0639\u0647 \u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0645\u062f\u0644 Plus",
                  "id": 4415484,
                  "price": 69000,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "[AC,\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0648\u0642\u0637\u0639\u0627\u062a  \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a]",
                  "list": "category-\u0645\u062c\u0645\u0648\u0639\u0647 \u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc",
                  "position": 8,
                  "dimension6": 1,
                  "dimension2": 14,
                  "dimension9": 4.4,
                  "metric6": 569,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-category-best-buy-chance",
                  "dimension7": "special-offer"
                }, {
                  "name": "\u0647\u0646\u062f\u0632\u0641\u0631\u06cc \u0628\u0644\u0648\u062a\u0648\u062b\u06cc \u0645\u062f\u0644 \u00a0inpods i12",
                  "id": 5086666,
                  "price": 970000,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "[AC,\u0647\u062f\u0641\u0648\u0646 \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc]",
                  "list": "category-\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc",
                  "position": 9,
                  "dimension6": 1,
                  "dimension2": 46,
                  "dimension9": 4.4,
                  "metric6": 30,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-category-best-buy-chance",
                  "dimension7": "special-offer"
                }, {
                  "name": "\u067e\u0627\u06cc\u0647 \u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647 \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u067e\u0627\u067e \u0633\u0648\u06a9\u062a \u0622\u06a9\u0627\u0645 \u0645\u062f\u0644 APS0749",
                  "id": 2390599,
                  "price": 60000,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "[AC,\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0648\u0642\u0637\u0639\u0627\u062a  \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a]",
                  "list": "category-\u067e\u0627\u06cc\u0647 \u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647 \u06af\u0648\u0634\u06cc \u0648 \u062a\u0628\u0644\u062a",
                  "position": 10,
                  "dimension6": 1,
                  "dimension2": 0,
                  "dimension9": 3.9,
                  "metric6": 1583,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-category-best-buy-chance",
                  "dimension7": "none"
                }, {
                  "name": "\u06a9\u0627\u0648\u0631 \u0698\u0644\u0647 \u0627\u06cc \u062f\u0648\u0631\u06af\u0648\u0634\u06cc \u0627\u06cc\u0631\u067e\u0627\u062f \u0645\u062f\u0644 Soft",
                  "id": 713893,
                  "price": 40900,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "[AC,\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0648\u0642\u0637\u0639\u0627\u062a  \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a]",
                  "list": "category-\u0645\u062c\u0645\u0648\u0639\u0647 \u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc",
                  "position": 11,
                  "dimension6": 1,
                  "dimension2": 0,
                  "dimension9": 4,
                  "metric6": 2136,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-category-best-buy-chance",
                  "dimension7": "none"
                }, {
                  "name": "\u0645\u062d\u0627\u0641\u0638 \u0644\u0646\u0632 \u062f\u0648\u0631\u0628\u06cc\u0646 \u0645\u062f\u0644 SM-X \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc POCO X3 \/ POCO X3 NFC",
                  "id": 4854476,
                  "price": 115000,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "[AC,\u0645\u062d\u0627\u0641\u0638 \u0635\u0641\u062d\u0647 \u0648 \u0644\u0646\u0632 \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a]",
                  "list": "category-\u0645\u062d\u0627\u0641\u0638 \u0644\u0646\u0632 \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                  "position": 12,
                  "dimension6": 1,
                  "dimension2": 70,
                  "dimension9": 4.1,
                  "metric6": 178,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-category-best-buy-chance",
                  "dimension7": "special-offer"
                }, {
                  "name": "\u0645\u062d\u0627\u0641\u0638 \u06a9\u0627\u0628\u0644 \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc \u0645\u062f\u0644 cb2",
                  "id": 4011476,
                  "price": 90000,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "[AC,\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0648\u0642\u0637\u0639\u0627\u062a  \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a]",
                  "list": "category-\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
                  "position": 13,
                  "dimension6": 1,
                  "dimension2": 0,
                  "dimension9": 4.4,
                  "metric6": 757,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-category-best-buy-chance",
                  "dimension7": "none"
                }, {
                  "name": "\u0645\u062d\u0627\u0641\u0638 \u06a9\u0627\u0628\u0644 \u0645\u062f\u0644 sample \u0628\u0633\u062a\u0647 \u06f8 \u0639\u062f\u062f\u06cc",
                  "id": 1043507,
                  "price": 75000,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "[AC,\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0648\u0642\u0637\u0639\u0627\u062a  \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a]",
                  "list": "category-\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
                  "position": 14,
                  "dimension6": 1,
                  "dimension2": 46,
                  "dimension9": 3.1,
                  "metric6": 6159,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-category-best-buy-chance",
                  "dimension7": "special-offer"
                }, {
                  "name": "\u0645\u062d\u0627\u0641\u0638 \u0635\u0641\u062d\u0647 \u0646\u0645\u0627\u06cc\u0634 \u0633\u0631\u0627\u0645\u06cc\u06a9\u06cc \u0645\u0627\u062a \u0627\u0644\u06a9\u0627 \u0645\u062f\u0644 +PRO \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc Poco X3",
                  "id": 4808373,
                  "price": 68700,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "[AC,\u0645\u062d\u0627\u0641\u0638 \u0635\u0641\u062d\u0647 \u0648 \u0644\u0646\u0632 \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a]",
                  "list": "category-\u0645\u062d\u0627\u0641\u0638 \u0635\u0641\u062d\u0647 \u0646\u0645\u0627\u06cc\u0634 \u06af\u0648\u0634\u06cc",
                  "position": 15,
                  "dimension6": 1,
                  "dimension2": 89,
                  "dimension9": 3.9,
                  "metric6": 129,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-category-best-buy-chance",
                  "dimension7": "special-offer"
                }, {
                  "name": "\u06a9\u0627\u0628\u0644 \u0634\u0627\u0631\u0698 USB \u0628\u0647 USB-C \u0631\u06cc\u0644\u0645\u06cc \u0645\u062f\u0644 DC \u0628\u0647 \u0637\u0648\u0644 1 \u0645\u062a\u0631",
                  "id": 5093286,
                  "price": 160000,
                  "brand": "\u0631\u06cc\u0644\u0645\u06cc",
                  "category": "[AC,\u06a9\u0627\u0628\u0644 \u0648\u0645\u0628\u062f\u0644]",
                  "list": "category-\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644",
                  "position": 16,
                  "dimension6": 1,
                  "dimension2": 0,
                  "dimension9": 3.8,
                  "metric6": 106,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-category-best-buy-chance",
                  "dimension7": "none"
                }, {
                  "name": "\u0645\u062d\u0627\u0641\u0638 \u0635\u0641\u062d\u0647 \u0646\u0645\u0627\u06cc\u0634 \u0645\u0627\u062a \u0698\u0646\u0631\u0627\u0644 \u0645\u062f\u0644 LKFCM \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc Redmi Note 8",
                  "id": 3043866,
                  "price": 66700,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "[AC,\u0645\u062d\u0627\u0641\u0638 \u0635\u0641\u062d\u0647 \u0648 \u0644\u0646\u0632 \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a]",
                  "list": "category-\u0645\u062d\u0627\u0641\u0638 \u0635\u0641\u062d\u0647 \u0646\u0645\u0627\u06cc\u0634 \u06af\u0648\u0634\u06cc",
                  "position": 17,
                  "dimension6": 1,
                  "dimension2": 56,
                  "dimension9": 4,
                  "metric6": 825,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-category-best-buy-chance",
                  "dimension7": "special-offer"
                }, {
                  "name": "\u06a9\u0627\u0648\u0631 \u0645\u062f\u0644 PML \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc Redmi Note 10 4G",
                  "id": 5023703,
                  "price": 340000,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "[AC,\u06a9\u06cc\u0641 \u0648 \u06a9\u0627\u0648\u0631 \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a]",
                  "list": "category-\u06a9\u06cc\u0641 \u0648 \u06a9\u0627\u0648\u0631 \u06af\u0648\u0634\u06cc",
                  "position": 18,
                  "dimension6": 1,
                  "dimension2": 51,
                  "dimension9": 4.3,
                  "metric6": 92,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-category-best-buy-chance",
                  "dimension7": "special-offer"
                }, {
                  "name": "\u062a\u0628\u062f\u06cc\u0644 OTG \u0631\u06cc\u0645\u06a9\u0633 \u0645\u062f\u0644 RA-OTG",
                  "id": 498137,
                  "price": 20600,
                  "brand": "\u0631\u06cc\u0645\u06a9\u0633",
                  "category": "[AC,\u06a9\u0627\u0628\u0644 \u0648\u0645\u0628\u062f\u0644]",
                  "list": "category-\u06a9\u0627\u0628\u0644 \u0648 \u0645\u0628\u062f\u0644",
                  "position": 19,
                  "dimension6": 1,
                  "dimension2": 0,
                  "dimension9": 3.9,
                  "metric6": 9074,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-category-best-buy-chance",
                  "dimension7": "none"
                }, {
                  "name": "\u0645\u062d\u0627\u0641\u0638 \u0635\u0641\u062d\u0647 \u0646\u0645\u0627\u06cc\u0634 \u0646\u0627\u0646\u0648 \u0641\u0644\u06a9\u0633 \u0645\u062f\u0644  F50 \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af  Galaxy A20 \/ A30 \/ A30s \/ A50",
                  "id": 2435567,
                  "price": 57000,
                  "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                  "category": "[AC,\u0645\u062d\u0627\u0641\u0638 \u0635\u0641\u062d\u0647 \u0648 \u0644\u0646\u0632 \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a]",
                  "list": "category-\u0645\u062d\u0627\u0641\u0638 \u0635\u0641\u062d\u0647 \u0646\u0645\u0627\u06cc\u0634 \u06af\u0648\u0634\u06cc",
                  "position": 20,
                  "dimension6": 1,
                  "dimension2": 5,
                  "dimension9": 4,
                  "metric6": 1653,
                  "dimension11": 0,
                  "dimension20": "marketable",
                  "dimension18": "most-viewed",
                  "dimension19": "carousel-category-best-buy-chance",
                  "dimension7": "special-offer"
                }]
              }
            });
          </script>
          <section class="c-swiper c-swiper--products js-sntracker-carousel " id="sn-carousels-best-price-products">
            <div class="o-headline"><span class="o-headline__title-box"><div class="o-headline__title-content"><h3>بهترین فرصت خرید</h3></div></span>
            </div>
            <div class="c-box" id="sn-carousels-best-price-products">
              <div class="swiper-container swiper-container-horizontal js-swiper-products swiper-container-rtl">
                <div class="swiper-wrapper">
                  <div class="swiper-slide js-sntracker-carousel-item swiper-slide-active"
                       data-carousel="sn-carousels-best-price-products" data-id="3352714" data-position="1"
                       style="width: 322px;">
                    <div class="c-product-box"><a data-id="3352714"
                                                  class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                  href="/product/dkp-3352714/محافظ-کابل-و-هندزفری-مدل-cl"><img
                          alt="محافظ کابل و هندزفری مدل CL" class="swiper-lazy swiper-lazy-loaded"
                          data-src="https://dkstatics-public.digikala.com/digikala-products/ded0c584935cbbd0ccfd67a231e2a0f7765663c7_1599403408.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          src="https://dkstatics-public.digikala.com/digikala-products/ded0c584935cbbd0ccfd67a231e2a0f7765663c7_1599403408.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          loading="lazy"></a>
                      <div class="c-product-box__title"><a data-id="3352714"
                                                           class="js-product-url js-carousel-ga-product-box"
                                                           href="/product/dkp-3352714/محافظ-کابل-و-هندزفری-مدل-cl">
                          محافظ کابل و هندزفری مدل CL
                        </a></div>
                      <div class="c-product-box__price-row">
                        <div class="c-product-box__price-item"><a data-id="3352714"
                                                                  class="js-product-url js-carousel-ga-product-box"
                                                                  href="/product/dkp-3352714/محافظ-کابل-و-هندزفری-مدل-cl">
                            <div class="c-new-price">
                              <div class="c-new-price__old-value"></div>
                              <div class="c-new-price__value">
                                ۵,۸۰۰
                                <span class="c-new-price__currency">تومان</span></div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide js-sntracker-carousel-item swiper-slide-next"
                       data-carousel="sn-carousels-best-price-products" data-id="2261669" data-position="2"
                       style="width: 322px;">
                    <div class="c-product-box"><a data-id="2261669"
                                                  class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                  href="/product/dkp-2261669/گوشی-موبایل-نوکیا-مدل-2018-106-دو-سیم-کارت"><img
                          alt="گوشی موبایل نوکیا مدل 2018  106 دو سیم‌ کارت" class="swiper-lazy swiper-lazy-loaded"
                          data-src="https://dkstatics-public.digikala.com/digikala-products/114632776.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          src="https://dkstatics-public.digikala.com/digikala-products/114632776.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          loading="lazy"></a>
                      <div class="c-product-box__title"><a data-id="2261669"
                                                           class="js-product-url js-carousel-ga-product-box"
                                                           href="/product/dkp-2261669/گوشی-موبایل-نوکیا-مدل-2018-106-دو-سیم-کارت">
                          گوشی موبایل نوکیا مدل 2018 106 دو سیم‌ کارت
                        </a></div>
                      <div class="c-product-box__price-row">
                        <div class="c-product-box__price-item"><a data-id="2261669"
                                                                  class="js-product-url js-carousel-ga-product-box"
                                                                  href="/product/dkp-2261669/گوشی-موبایل-نوکیا-مدل-2018-106-دو-سیم-کارت">
                            <div class="c-new-price">
                              <div class="c-new-price__old-value"></div>
                              <div class="c-new-price__value">
                                ۳۷۱,۰۰۰
                                <span class="c-new-price__currency">تومان</span></div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-best-price-products"
                       data-id="3461617" data-position="3" style="width: 322px;">
                    <div class="c-product-box"><a data-id="3461617"
                                                  class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                  href="/product/dkp-3461617/محافظ-کابل-مدل-silicone-spring-بسته-2-عددی"><img
                          alt="محافظ کابل مدل Silicone Spring بسته 2 عددی" class="swiper-lazy swiper-lazy-loaded"
                          data-src="https://dkstatics-public.digikala.com/digikala-products/fecb1d6ae3d7dce12c106fa06a5ccc487a6c8bfa_1601193546.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          src="https://dkstatics-public.digikala.com/digikala-products/fecb1d6ae3d7dce12c106fa06a5ccc487a6c8bfa_1601193546.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          loading="lazy"></a>
                      <div class="c-product-box__title"><a data-id="3461617"
                                                           class="js-product-url js-carousel-ga-product-box"
                                                           href="/product/dkp-3461617/محافظ-کابل-مدل-silicone-spring-بسته-2-عددی">
                          محافظ کابل مدل Silicone Spring بسته 2 عددی
                        </a></div>
                      <div class="c-product-box__price-row">
                        <div class="c-product-box__price-item"><a data-id="3461617"
                                                                  class="js-product-url js-carousel-ga-product-box"
                                                                  href="/product/dkp-3461617/محافظ-کابل-مدل-silicone-spring-بسته-2-عددی">
                            <div class="c-new-price">
                              <div class="c-new-price__old-value">
                                <del>۳,۰۰۰</del>
                                <span class="c-new-price__discount">۷۳٪</span></div>
                              <div class="c-new-price__value">
                                ۸۰۰
                                <span class="c-new-price__currency">تومان</span></div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-best-price-products"
                       data-id="3677732" data-position="4" style="width: 322px;">
                    <div class="c-product-box"><a data-id="3677732"
                                                  class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                  href="/product/dkp-3677732/محافظ-کابل-شارژ-مدل-sfp-36-مجموعه-4-عددی"><img
                          alt="محافظ کابل شارژ مدل SFP-36 مجموعه 4 عددی" class="swiper-lazy swiper-lazy-loaded"
                          data-src="https://dkstatics-public.digikala.com/digikala-products/2b1c6c08f3ee58fabb03847ba7a45e54f44d51dc_1604498377.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          src="https://dkstatics-public.digikala.com/digikala-products/2b1c6c08f3ee58fabb03847ba7a45e54f44d51dc_1604498377.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          loading="lazy"></a>
                      <div class="c-product-box__title"><a data-id="3677732"
                                                           class="js-product-url js-carousel-ga-product-box"
                                                           href="/product/dkp-3677732/محافظ-کابل-شارژ-مدل-sfp-36-مجموعه-4-عددی">
                          محافظ کابل شارژ مدل SFP-36 مجموعه 4 عددی
                        </a></div>
                      <div class="c-product-box__price-row">
                        <div class="c-product-box__price-item"><a data-id="3677732"
                                                                  class="js-product-url js-carousel-ga-product-box"
                                                                  href="/product/dkp-3677732/محافظ-کابل-شارژ-مدل-sfp-36-مجموعه-4-عددی">
                            <div class="c-new-price">
                              <div class="c-new-price__old-value">
                                <del>۹,۰۰۰</del>
                                <span class="c-new-price__discount">۸۷٪</span></div>
                              <div class="c-new-price__value">
                                ۱,۲۰۰
                                <span class="c-new-price__currency">تومان</span></div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-best-price-products"
                       data-id="4290052" data-position="5" style="width: 322px;">
                    <div class="c-product-box"><a data-id="4290052"
                                                  class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                  href="/product/dkp-4290052/کابل-شارژ-و-تبدیل-usbبه-microusb-مدل-gh39-01578a-طول-۱-متر"><img
                          alt="کابل شارژ و تبدیل USBبه microUSB&nbsp;&nbsp;مدل GH39-01578A طول ۱ متر"
                          class="swiper-lazy swiper-lazy-loaded"
                          data-src="https://dkstatics-public.digikala.com/digikala-products/06bc5ddff7476c33195e7752e6904497fcc7ef18_1611383113.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          src="https://dkstatics-public.digikala.com/digikala-products/06bc5ddff7476c33195e7752e6904497fcc7ef18_1611383113.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          loading="lazy"></a>
                      <div class="c-product-box__title"><a data-id="4290052"
                                                           class="js-product-url js-carousel-ga-product-box"
                                                           href="/product/dkp-4290052/کابل-شارژ-و-تبدیل-usbبه-microusb-مدل-gh39-01578a-طول-۱-متر">
                          کابل شارژ و تبدیل USBبه microUSB&nbsp;&nbsp;مدل GH39-01578A ...
                        </a></div>
                      <div class="c-product-box__price-row">
                        <div class="c-product-box__price-item"><a data-id="4290052"
                                                                  class="js-product-url js-carousel-ga-product-box"
                                                                  href="/product/dkp-4290052/کابل-شارژ-و-تبدیل-usbبه-microusb-مدل-gh39-01578a-طول-۱-متر">
                            <div class="c-new-price">
                              <div class="c-new-price__old-value">
                                <del>۸,۰۰۰</del>
                                <span class="c-new-price__discount">۴۵٪</span></div>
                              <div class="c-new-price__value">
                                ۴,۴۰۰
                                <span class="c-new-price__currency">تومان</span></div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-best-price-products"
                       data-id="1587799" data-position="6" style="width: 322px;">
                    <div class="c-product-box"><a data-id="1587799"
                                                  class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                  href="/product/dkp-1587799/پایه-نگهدارنده-گوشی-موبایل-استند-تبلت-چوبی-چوبیس-کد-1-351"><img
                          alt="پایه نگهدارنده گوشی موبایل استند تبلت چوبی چوبیس کد 1-351"
                          class="swiper-lazy swiper-lazy-loaded"
                          data-src="https://dkstatics-public-2.digikala.com/digikala-products/110990696.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          src="https://dkstatics-public-2.digikala.com/digikala-products/110990696.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          loading="lazy"></a>
                      <div class="c-product-box__title"><a data-id="1587799"
                                                           class="js-product-url js-carousel-ga-product-box"
                                                           href="/product/dkp-1587799/پایه-نگهدارنده-گوشی-موبایل-استند-تبلت-چوبی-چوبیس-کد-1-351">
                          پایه نگهدارنده گوشی موبایل استند تبلت چوبی چوبیس ک...
                        </a></div>
                      <div class="c-product-box__price-row">
                        <div class="c-product-box__price-item"><a data-id="1587799"
                                                                  class="js-product-url js-carousel-ga-product-box"
                                                                  href="/product/dkp-1587799/پایه-نگهدارنده-گوشی-موبایل-استند-تبلت-چوبی-چوبیس-کد-1-351">
                            <div class="c-new-price">
                              <div class="c-new-price__old-value">
                                <del>۵,۶۹۰</del>
                                <span class="c-new-price__discount">۳۰٪</span></div>
                              <div class="c-new-price__value">
                                ۳,۹۹۰
                                <span class="c-new-price__currency">تومان</span></div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-best-price-products"
                       data-id="3851737" data-position="7" style="width: 322px;">
                    <div class="c-product-box"><a data-id="3851737"
                                                  class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                  href="/product/dkp-3851737/بند-مدل-cs-01-مناسب-برای-مچ-بند-هوشمند-شیائومی-mi-band-34"><img
                          alt="بند مدل Cs-01 مناسب برای مچ بند هوشمند شیائومی Mi Band 3/4"
                          class="swiper-lazy swiper-lazy-loaded"
                          data-src="https://dkstatics-public.digikala.com/digikala-products/476d23ba78043a1ae60f629d45a9b4c26be10e25_1606268956.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          src="https://dkstatics-public.digikala.com/digikala-products/476d23ba78043a1ae60f629d45a9b4c26be10e25_1606268956.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          loading="lazy"></a>
                      <div class="c-product-box__title"><a data-id="3851737"
                                                           class="js-product-url js-carousel-ga-product-box"
                                                           href="/product/dkp-3851737/بند-مدل-cs-01-مناسب-برای-مچ-بند-هوشمند-شیائومی-mi-band-34">
                          بند مدل Cs-01 مناسب برای مچ بند هوشمند شیائومی Mi ...
                        </a></div>
                      <div class="c-product-box__price-row">
                        <div class="c-product-box__price-item"><a data-id="3851737"
                                                                  class="js-product-url js-carousel-ga-product-box"
                                                                  href="/product/dkp-3851737/بند-مدل-cs-01-مناسب-برای-مچ-بند-هوشمند-شیائومی-mi-band-34">
                            <div class="c-new-price">
                              <div class="c-new-price__old-value"></div>
                              <div class="c-new-price__value">
                                ۱۵,۳۰۰
                                <span class="c-new-price__currency">تومان</span></div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-best-price-products"
                       data-id="4415484" data-position="8" style="width: 322px;">
                    <div class="c-product-box"><a data-id="4415484"
                                                  class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                  href="/product/dkp-4415484/مجموعه-لوازم-جانبی-موبایل-مدل-plus"><img
                          alt="مجموعه لوازم جانبی موبایل مدل Plus" class="swiper-lazy swiper-lazy-loaded"
                          data-src="https://dkstatics-public.digikala.com/digikala-products/800f3c7f8da5ce028c42d4bc3fe402af7a9ba560_1612715443.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          src="https://dkstatics-public.digikala.com/digikala-products/800f3c7f8da5ce028c42d4bc3fe402af7a9ba560_1612715443.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          loading="lazy"></a>
                      <div class="c-product-box__title"><a data-id="4415484"
                                                           class="js-product-url js-carousel-ga-product-box"
                                                           href="/product/dkp-4415484/مجموعه-لوازم-جانبی-موبایل-مدل-plus">
                          مجموعه لوازم جانبی موبایل مدل Plus
                        </a></div>
                      <div class="c-product-box__price-row">
                        <div class="c-product-box__price-item"><a data-id="4415484"
                                                                  class="js-product-url js-carousel-ga-product-box"
                                                                  href="/product/dkp-4415484/مجموعه-لوازم-جانبی-موبایل-مدل-plus">
                            <div class="c-new-price">
                              <div class="c-new-price__old-value">
                                <del>۸,۰۰۰</del>
                                <span class="c-new-price__discount">۱۴٪</span></div>
                              <div class="c-new-price__value">
                                ۶,۹۰۰
                                <span class="c-new-price__currency">تومان</span></div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-best-price-products"
                       data-id="5086666" data-position="9" style="width: 322px;">
                    <div class="c-product-box"><a data-id="5086666"
                                                  class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                  href="/product/dkp-5086666/هندزفری-بلوتوثی-مدل-inpods-i12"><img
                          data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/e4b2145a5e77bdc30aafff78bba4734798ac8d68_1620202335.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          alt="هندزفری بلوتوثی مدل &nbsp;inpods i12" class="swiper-lazy"></a>
                      <div class="c-product-box__title"><a data-id="5086666"
                                                           class="js-product-url js-carousel-ga-product-box"
                                                           href="/product/dkp-5086666/هندزفری-بلوتوثی-مدل-inpods-i12">
                          هندزفری بلوتوثی مدل &nbsp;inpods i12
                        </a></div>
                      <div class="c-product-box__price-row">
                        <div class="c-product-box__price-item"><a data-id="5086666"
                                                                  class="js-product-url js-carousel-ga-product-box"
                                                                  href="/product/dkp-5086666/هندزفری-بلوتوثی-مدل-inpods-i12">
                            <div class="c-new-price">
                              <div class="c-new-price__old-value">
                                <del>۱۸۰,۰۰۰</del>
                                <span class="c-new-price__discount">۴۶٪</span></div>
                              <div class="c-new-price__value">
                                ۹۷,۰۰۰
                                <span class="c-new-price__currency">تومان</span></div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-best-price-products"
                       data-id="2390599" data-position="10" style="width: 322px;">
                    <div class="c-product-box"><a data-id="2390599"
                                                  class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                  href="/product/dkp-2390599/پایه-نگهدارنده-گوشی-موبایل-پاپ-سوکت-آکام-مدل-aps0749"><img
                          data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/117467417.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          alt="پایه نگهدارنده گوشی موبایل پاپ سوکت آکام مدل APS0749" class="swiper-lazy"></a>
                      <div class="c-product-box__title"><a data-id="2390599"
                                                           class="js-product-url js-carousel-ga-product-box"
                                                           href="/product/dkp-2390599/پایه-نگهدارنده-گوشی-موبایل-پاپ-سوکت-آکام-مدل-aps0749">
                          پایه نگهدارنده گوشی موبایل پاپ سوکت آکام مدل APS07...
                        </a></div>
                      <div class="c-product-box__price-row">
                        <div class="c-product-box__price-item"><a data-id="2390599"
                                                                  class="js-product-url js-carousel-ga-product-box"
                                                                  href="/product/dkp-2390599/پایه-نگهدارنده-گوشی-موبایل-پاپ-سوکت-آکام-مدل-aps0749">
                            <div class="c-new-price">
                              <div class="c-new-price__old-value"></div>
                              <div class="c-new-price__value">
                                ۶,۰۰۰
                                <span class="c-new-price__currency">تومان</span></div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-best-price-products"
                       data-id="713893" data-position="11" style="width: 322px;">
                    <div class="c-product-box"><a data-id="713893"
                                                  class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                  href="/product/dkp-713893/کاور-ژله-ای-دورگوشی-ایرپاد-مدل-soft"><img
                          data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/3185584.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          alt="کاور ژله ای دورگوشی ایرپاد مدل Soft" class="swiper-lazy"></a>
                      <div class="c-product-box__title"><a data-id="713893"
                                                           class="js-product-url js-carousel-ga-product-box"
                                                           href="/product/dkp-713893/کاور-ژله-ای-دورگوشی-ایرپاد-مدل-soft">
                          کاور ژله ای دورگوشی ایرپاد مدل Soft
                        </a></div>
                      <div class="c-product-box__price-row">
                        <div class="c-product-box__price-item"><a data-id="713893"
                                                                  class="js-product-url js-carousel-ga-product-box"
                                                                  href="/product/dkp-713893/کاور-ژله-ای-دورگوشی-ایرپاد-مدل-soft">
                            <div class="c-new-price">
                              <div class="c-new-price__old-value"></div>
                              <div class="c-new-price__value">
                                ۴,۰۹۰
                                <span class="c-new-price__currency">تومان</span></div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-best-price-products"
                       data-id="4854476" data-position="12" style="width: 322px;">
                    <div class="c-product-box"><a data-id="4854476"
                                                  class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                  href="/product/dkp-4854476/محافظ-لنز-دوربین-مدل-sm-x-مناسب-برای-گوشی-موبایل-شیائومی-poco-x3-poco-x3-nfc"><img
                          data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/2808f9bba30773eeefdb1d4bdaf6bd38ddc06396_1617819980.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          alt="محافظ لنز دوربین مدل SM-X مناسب برای گوشی موبایل شیائومی POCO X3 / POCO X3 NFC"
                          class="swiper-lazy"></a>
                      <div class="c-product-box__title"><a data-id="4854476"
                                                           class="js-product-url js-carousel-ga-product-box"
                                                           href="/product/dkp-4854476/محافظ-لنز-دوربین-مدل-sm-x-مناسب-برای-گوشی-موبایل-شیائومی-poco-x3-poco-x3-nfc">
                          محافظ لنز دوربین مدل SM-X مناسب برای گوشی موبایل ش...
                        </a></div>
                      <div class="c-product-box__price-row">
                        <div class="c-product-box__price-item"><a data-id="4854476"
                                                                  class="js-product-url js-carousel-ga-product-box"
                                                                  href="/product/dkp-4854476/محافظ-لنز-دوربین-مدل-sm-x-مناسب-برای-گوشی-موبایل-شیائومی-poco-x3-poco-x3-nfc">
                            <div class="c-new-price">
                              <div class="c-new-price__old-value">
                                <del>۳۷,۸۰۰</del>
                                <span class="c-new-price__discount">۷۰٪</span></div>
                              <div class="c-new-price__value">
                                ۱۱,۵۰۰
                                <span class="c-new-price__currency">تومان</span></div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-best-price-products"
                       data-id="4011476" data-position="13" style="width: 322px;">
                    <div class="c-product-box"><a data-id="4011476"
                                                  class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                  href="/product/dkp-4011476/محافظ-کابل-و-هندزفری-مدل-shine"><img
                          data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/483ec4a6ee7007ee1e486dc554a870cb47808414_1608040115.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          alt="محافظ کابل و هندزفری مدل cb2" class="swiper-lazy"></a>
                      <div class="c-product-box__title"><a data-id="4011476"
                                                           class="js-product-url js-carousel-ga-product-box"
                                                           href="/product/dkp-4011476/محافظ-کابل-و-هندزفری-مدل-shine">
                          محافظ کابل و هندزفری مدل cb2
                        </a></div>
                      <div class="c-product-box__price-row">
                        <div class="c-product-box__price-item"><a data-id="4011476"
                                                                  class="js-product-url js-carousel-ga-product-box"
                                                                  href="/product/dkp-4011476/محافظ-کابل-و-هندزفری-مدل-shine">
                            <div class="c-new-price">
                              <div class="c-new-price__old-value"></div>
                              <div class="c-new-price__value">
                                ۹,۰۰۰
                                <span class="c-new-price__currency">تومان</span></div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-best-price-products"
                       data-id="1043507" data-position="14" style="width: 322px;">
                    <div class="c-product-box"><a data-id="1043507"
                                                  class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                  href="/product/dkp-1043507/محافظ-کابل-مدل-sample-بسته-۸-عددی"><img
                          data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/4926166.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          alt="محافظ کابل مدل sample بسته ۸ عددی" class="swiper-lazy"></a>
                      <div class="c-product-box__title"><a data-id="1043507"
                                                           class="js-product-url js-carousel-ga-product-box"
                                                           href="/product/dkp-1043507/محافظ-کابل-مدل-sample-بسته-۸-عددی">
                          محافظ کابل مدل sample بسته ۸ عددی
                        </a></div>
                      <div class="c-product-box__price-row">
                        <div class="c-product-box__price-item"><a data-id="1043507"
                                                                  class="js-product-url js-carousel-ga-product-box"
                                                                  href="/product/dkp-1043507/محافظ-کابل-مدل-sample-بسته-۸-عددی">
                            <div class="c-new-price">
                              <div class="c-new-price__old-value">
                                <del>۱۳,۹۰۰</del>
                                <span class="c-new-price__discount">۴۶٪</span></div>
                              <div class="c-new-price__value">
                                ۷,۵۰۰
                                <span class="c-new-price__currency">تومان</span></div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-best-price-products"
                       data-id="4808373" data-position="15" style="width: 322px;">
                    <div class="c-product-box"><a data-id="4808373"
                                                  class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                  href="/product/dkp-4808373/محافظ-صفحه-نمایش-سرامیکی-مات-الکا-مدل-pro-مناسب-برای-گوشی-موبایل-شیائومی-poco-x3"><img
                          data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/4c7c037ea75f736ca823a57019883b12b2e422de_1617124485.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          alt="محافظ صفحه نمایش سرامیکی مات الکا مدل +PRO مناسب برای گوشی موبایل شیائومی Poco X3"
                          class="swiper-lazy"></a>
                      <div class="c-product-box__title"><a data-id="4808373"
                                                           class="js-product-url js-carousel-ga-product-box"
                                                           href="/product/dkp-4808373/محافظ-صفحه-نمایش-سرامیکی-مات-الکا-مدل-pro-مناسب-برای-گوشی-موبایل-شیائومی-poco-x3">
                          محافظ صفحه نمایش سرامیکی مات الکا مدل +PRO مناسب ب...
                        </a></div>
                      <div class="c-product-box__price-row">
                        <div class="c-product-box__price-item"><a data-id="4808373"
                                                                  class="js-product-url js-carousel-ga-product-box"
                                                                  href="/product/dkp-4808373/محافظ-صفحه-نمایش-سرامیکی-مات-الکا-مدل-pro-مناسب-برای-گوشی-موبایل-شیائومی-poco-x3">
                            <div class="c-new-price">
                              <div class="c-new-price__old-value">
                                <del>۶۰,۰۰۰</del>
                                <span class="c-new-price__discount">۸۹٪</span></div>
                              <div class="c-new-price__value">
                                ۶,۸۷۰
                                <span class="c-new-price__currency">تومان</span></div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-best-price-products"
                       data-id="5093286" data-position="16" style="width: 322px;">
                    <div class="c-product-box"><a data-id="5093286"
                                                  class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                  href="/product/dkp-5093286/کابل-شارژ-usb-به-usb-c-ریلمی-مدل-dc-به-طول-1-متر"><img
                          data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/0f4d0377b638849de9f1ebcb983a8ec8ac645887_1620245721.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          alt="کابل شارژ USB به USB-C ریلمی مدل DC به طول 1 متر" class="swiper-lazy"></a>
                      <div class="c-product-box__title"><a data-id="5093286"
                                                           class="js-product-url js-carousel-ga-product-box"
                                                           href="/product/dkp-5093286/کابل-شارژ-usb-به-usb-c-ریلمی-مدل-dc-به-طول-1-متر">
                          کابل شارژ USB به USB-C ریلمی مدل DC به طول 1 متر
                        </a></div>
                      <div class="c-product-box__price-row">
                        <div class="c-product-box__price-item"><a data-id="5093286"
                                                                  class="js-product-url js-carousel-ga-product-box"
                                                                  href="/product/dkp-5093286/کابل-شارژ-usb-به-usb-c-ریلمی-مدل-dc-به-طول-1-متر">
                            <div class="c-new-price">
                              <div class="c-new-price__old-value"></div>
                              <div class="c-new-price__value">
                                ۱۶,۰۰۰
                                <span class="c-new-price__currency">تومان</span></div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-best-price-products"
                       data-id="3043866" data-position="17" style="width: 322px;">
                    <div class="c-product-box"><a data-id="3043866"
                                                  class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                  href="/product/dkp-3043866/محافظ-صفحه-نمایش-مات-ژنرال-مدل-lkfcm-مناسب-برای-گوشی-موبایل-شیائومی-redmi-note-8"><img
                          data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/804a91ea29af10ef39a8ee33bd7db4dd0a9dcac2_1593939066.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          alt="محافظ صفحه نمایش مات ژنرال مدل LKFCM مناسب برای گوشی موبایل شیائومی Redmi Note 8"
                          class="swiper-lazy"></a>
                      <div class="c-product-box__title"><a data-id="3043866"
                                                           class="js-product-url js-carousel-ga-product-box"
                                                           href="/product/dkp-3043866/محافظ-صفحه-نمایش-مات-ژنرال-مدل-lkfcm-مناسب-برای-گوشی-موبایل-شیائومی-redmi-note-8">
                          محافظ صفحه نمایش مات ژنرال مدل LKFCM مناسب برای گو...
                        </a></div>
                      <div class="c-product-box__price-row">
                        <div class="c-product-box__price-item"><a data-id="3043866"
                                                                  class="js-product-url js-carousel-ga-product-box"
                                                                  href="/product/dkp-3043866/محافظ-صفحه-نمایش-مات-ژنرال-مدل-lkfcm-مناسب-برای-گوشی-موبایل-شیائومی-redmi-note-8">
                            <div class="c-new-price">
                              <div class="c-new-price__old-value">
                                <del>۱۵,۰۰۰</del>
                                <span class="c-new-price__discount">۵۶٪</span></div>
                              <div class="c-new-price__value">
                                ۶,۶۷۰
                                <span class="c-new-price__currency">تومان</span></div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-best-price-products"
                       data-id="5023703" data-position="18" style="width: 322px;">
                    <div class="c-product-box"><a data-id="5023703"
                                                  class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                  href="/product/dkp-5023703/کاور-مدل-pml-مناسب-برای-گوشی-موبایل-شیائومی-redmi-note-10-4g"><img
                          data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/e18e129652382039eb74f903be6b991247676cc5_1619528861.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          alt="کاور مدل PML مناسب برای گوشی موبایل شیائومی Redmi Note 10 4G" class="swiper-lazy"></a>
                      <div class="c-product-box__title"><a data-id="5023703"
                                                           class="js-product-url js-carousel-ga-product-box"
                                                           href="/product/dkp-5023703/کاور-مدل-pml-مناسب-برای-گوشی-موبایل-شیائومی-redmi-note-10-4g">
                          کاور مدل PML مناسب برای گوشی موبایل شیائومی Redmi ...
                        </a></div>
                      <div class="c-product-box__price-row">
                        <div class="c-product-box__price-item"><a data-id="5023703"
                                                                  class="js-product-url js-carousel-ga-product-box"
                                                                  href="/product/dkp-5023703/کاور-مدل-pml-مناسب-برای-گوشی-موبایل-شیائومی-redmi-note-10-4g">
                            <div class="c-new-price">
                              <div class="c-new-price__old-value">
                                <del>۶۹,۰۰۰</del>
                                <span class="c-new-price__discount">۵۱٪</span></div>
                              <div class="c-new-price__value">
                                ۳۴,۰۰۰
                                <span class="c-new-price__currency">تومان</span></div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-best-price-products"
                       data-id="498137" data-position="19" style="width: 322px;">
                    <div class="c-product-box"><a data-id="498137"
                                                  class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                  href="/product/dkp-498137/تبدیل-otg-ریمکس-مدل-ra-otg"><img
                          data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/1475942.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          alt="تبدیل OTG ریمکس مدل RA-OTG" class="swiper-lazy"></a>
                      <div class="c-product-box__title"><a data-id="498137"
                                                           class="js-product-url js-carousel-ga-product-box"
                                                           href="/product/dkp-498137/تبدیل-otg-ریمکس-مدل-ra-otg">
                          تبدیل OTG ریمکس مدل RA-OTG
                        </a></div>
                      <div class="c-product-box__price-row">
                        <div class="c-product-box__price-item"><a data-id="498137"
                                                                  class="js-product-url js-carousel-ga-product-box"
                                                                  href="/product/dkp-498137/تبدیل-otg-ریمکس-مدل-ra-otg">
                            <div class="c-new-price">
                              <div class="c-new-price__old-value"></div>
                              <div class="c-new-price__value">
                                ۲,۰۶۰
                                <span class="c-new-price__currency">تومان</span></div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-best-price-products"
                       data-id="2435567" data-position="20" style="width: 322px;">
                    <div class="c-product-box"><a data-id="2435567"
                                                  class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                  href="/product/dkp-2435567/محافظ-صفحه-نمایش-نانو-فلکس-مدل-f50-مناسب-برای-گوشی-موبایل-سامسونگ-galaxy-a20-a30-a30s-a50"><img
                          data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/119117795.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          alt="محافظ صفحه نمایش نانو فلکس مدل  F50 مناسب برای گوشی موبایل سامسونگ  Galaxy A20 / A30 / A30s / A50"
                          class="swiper-lazy"></a>
                      <div class="c-product-box__title"><a data-id="2435567"
                                                           class="js-product-url js-carousel-ga-product-box"
                                                           href="/product/dkp-2435567/محافظ-صفحه-نمایش-نانو-فلکس-مدل-f50-مناسب-برای-گوشی-موبایل-سامسونگ-galaxy-a20-a30-a30s-a50">
                          محافظ صفحه نمایش نانو فلکس مدل F50 مناسب برای گوش...
                        </a></div>
                      <div class="c-product-box__price-row">
                        <div class="c-product-box__price-item"><a data-id="2435567"
                                                                  class="js-product-url js-carousel-ga-product-box"
                                                                  href="/product/dkp-2435567/محافظ-صفحه-نمایش-نانو-فلکس-مدل-f50-مناسب-برای-گوشی-موبایل-سامسونگ-galaxy-a20-a30-a30s-a50">
                            <div class="c-new-price">
                              <div class="c-new-price__old-value">
                                <del>۶,۰۰۰</del>
                                <span class="c-new-price__discount">۵٪</span></div>
                              <div class="c-new-price__value">
                                ۵,۷۰۰
                                <span class="c-new-price__currency">تومان</span></div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-button-prev js-swiper-button-prev swiper-button-disabled"></div>
                <div class="swiper-button-next js-swiper-button-next"></div>
              </div>
            </div>
          </section>
        </div>
        <article
          class="c-category-desc c-expandable-text c-expandable-text--shadowed js-expandable-text-container collapsed">
          <div class="c-expandable-text__text js-expandable-text">
            <p>
              <strong>خرید انواع کالای دیجیتال از فروشگاه اینترنتی دیجی کالا&nbsp;</strong>
            </p>
            <p>
              عمر انقلاب دیجیتال به کمتر از نیم قرن می‌رسد، اما همین برهه‌ی زمانی کوتاه در تاریخ، زندگی نوع بشر را
              کاملا دگرگون کرده و شتاب قابل توجهی به پیشرفت انسان در زمینه‌های مختلف بخشیده است. شاید اولین قدم‌های
              دیجیتالی شدن دنیا را بتوان تغییر تراتزیستورهای آنالوگ به دیجیتال دانست که بستر لازم برای کالای دیجیتال
              نظیر کامپیوتر، تلفن را فراهم کرد. در حال حاضر محصولات دیجیتالی آنقدر توسعه یافته‌اند که می‌توان ردپای آنها
              را در ساده‌ترین امور روزمره مشاهده کرد. بعضی از این محصولات به ابزارهای جدانشدنی برای انسان تبدیل شده‌اند،
              تصور زندگی بدون آنها و امکاناتی که در اختیار انسان قرار می‌دهند، وجود ندارد. موبایل‌ها، لپ‌تاپ، ماشین‌های
              ادارای از این دسته محصولات هستند. کامپیوترهای شخصی، لپ‌تاپ و گوشی تلفن همراه نیز مسیر پر فراز و نشیبی را
              پشت سر گذاشته‌اند تا به شکل هوشمند امروزی عرضه شود. اولین کامپیوتر قابل حمل جهان در سال 1981 به بازار آمد.
              این دستگاه صفحه نمایشی 5 اینچی داشت و وزن آن حدود 11 کیلوگرم بود. در حالیکه شرکت‌هایی نظیر اپل یا هواوی
              لپ‌تاپ‌هایی به وزن یک کیلوگرم ساخته‌اند. &nbsp;</p>
            <p>اولین تلفن همراه نیز در سال 1983 در دنیا به فروش رسید که وزنی معادل یک کیلوگرم داشت و امکانات بسیار کمی
              را در اختیار داشت. قیمت این دستگاه بیش از سه هزار دلار بود. در حالیکه امروزه شاهد تلفن‌های همراه هوشمندی
              هستیم که ده‌ها وسیله را در دل خود جای داده‌اند و هر یک از آنها عملکرد فوق‌العاده‌ای رو در اختیار انسان
              قرار می‌دهد. هم‌چنین محدوده‌ی قیمت این دستگاه بسیار گسترده است و همه‌ی افراد می‌توانند آن را تهیه کنند.
              &nbsp;</p>
            <p>دنیای دیجیتال نه تنها زندگی بشر را راحت‌تر از قبل کرده و زمان بیشتری برای آنها خریده است بلکه وسایل و
              سرگرمی‌های پیشرفته‌تر و مهیج‌تری را هم فراهم کرده است. تاریخچه‌ی ساخت کنسول بازی نیز مشابه سایر دستگاه‌های
              دیجیتال است. این صنعت از سال 1972 شروع به کار کرد. اولین کنسول‌های بازی تصویری سیاه و سفید داشتند و محیط
              بازی آنها بسیار ساده بود. این صنعت با تولید کنسول بازی ایکس باکس در ابتدای قرن 21 ام به اوج خود رسید و
              دنیای سرگرمی و بازی را متحول کرد. این دستگاه بسیار پیشرفته بود و گرافیک عالی و بازی‌های با کیفیتی را در
              اختیار علاقمندان قرار می‌داد. کنسول‌های بازی تاکنون 8 نسل را پشت سر گذاشته‌اند. شرکت‌هایی نظیر سونی و
              مایکروسافت مطرح‌ترین برندهای تولید کننده‌ی کنسول بازی هستند و شرکت‌های متعدد دیگری مثل لاجیتک لوازم جانبی
              آنها را عرضه می‌کند. &nbsp;
            </p>
            <p>کالاهای دیجیتال به موبایل، لپ تاپ یا وسایل سرگرمی محدود نمی‌شوند. مچ‌بند و ساعت‌های هوشمند از جدیدترین
              محصولات دیجیتالی به شمار می‌آیند که امکانات زیادی را در اختیار انسان قرار می‌دهد. عملکرد ساعت‌های هوشمند
              برند اپل آنقدر پیشرفته است که می‌توان آن را یک کامپیوتر مچی در نظر گرفت. شما می‌توانید با ای سیم، تماس‌های
              اضطراری بین‌المللی برقرار کنید، در وب جستجو کنید و جواب تماس و پیام‌های خود را بدهید. علاوه بر این، اغلب
              مچ‌بندها و ساعت‌های هوشمند ابزارهای لازم برای پایش سلامت را در اختیار دارند و به طور دائم ضربان قلب، کیفیت
              خواب، تعداد قدم‌های برداشته شده و ... را محاسبه و گزارش می‌کنند. همچنین در نسخه‌های پیشرفته‌تر می‌توان
              برنامه‌هایی برای بیماران دیابتی و بهداشت و سلامت بانوان مشاهده کرد.&nbsp;
            </p>
            <p>دیجی کالا جدیدترین و به روزترین کالاهای دیجیتال عرضه شده در دنیا را برای مشتریان خود گردآوری کرده است.
              شما می‌توانید خوشنام‌ترین برندهای جهانی را در وبسایت دیجی کالا مشاهده و محصول مورد نظر خود از میان هزاران
              کالای دیجیتال خریداری کنید.&nbsp;
            </p>
            <br>
            <span>دسته‌بندی‌ها: </span>
            <a href="/search/category-mobile/">موبایل</a>
            - <a href="/search/category-tablet-ebook-reader/">تبلت و کتابخوان</a> - <a href="/search/category-laptop/">لپ
              تاپ</a> - <a href="/search/category-camera/">دوربین</a> - <a href="/search/category-computer-parts/">کامپیوتر
              و تجهیزات جانبی</a> - <a href="/search/category-office-machines/">ماشین های اداری</a> - <a
              href="/search/category-wearable-gadget/">ساعت و مچ بند هوشمند</a> - <a
              href="/search/category-accessories-main/">لوازم جانبی کالای دیجیتال</a> - <a
              href="/search/category-internet-services/">سرویس‌های اینترنت</a> - <a
              href="/search/category-game-console/">کنسول بازی</a> -
            <a href="/search/category-mining-device/">دستگاه ماینینگ</a>
            -
            <a href="/search/category-mining/">ماینینگ</a>
            <br>
            <br>
            <span class="c-expandable-text__expand-btn c-expandable-text__expand-btn--shadowed js-expand-btn"
                  data-collapsed="نمایش بیشتر" data-expanded="بستن"></span>
          </div>
        </article>
      </div>
    </div>
  </main>

@endsection


