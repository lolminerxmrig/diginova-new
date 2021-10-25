@extends('layouts.front.master')

@section('head')
    <title> {{ $cat->name }} | {{ $fa_store_name }}</title>
    {{-- <link rel="canonical" href="{{ route('front.cart') }}"/> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script>
        var supernova_mode = "production";
        var supernova_tracker_url = "https:\/\/etrackerd.digikala.com\/tracker\/events\/";
        var parameters = {
            "category_path": "\/category-camera",
            "query": {
                "sortby": 4
            },
            "list_view": false
        };
        var cart = {
            "cartId": 0,
            "variants": [],
            "products": [],
            "itemCount": 0,
            "isPlusUser": false
        };
        var emarsysCategoryBreadcrumb =
            "\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 > \u062f\u0648\u0631\u0628\u06cc\u0646";
        var click_impression = [{
            "id": 260095,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc"
            ],
            "supply_category": ["AV", "\u062f\u0648\u0631\u0628\u06cc\u0646"],
            "name": "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc \u0686\u0627\u067e \u0633\u0631\u06cc\u0639 \u0641\u0648\u062c\u06cc \u0641\u06cc\u0644\u0645 \u0645\u062f\u0644 Instax Mini 9",
            "brand": "Fujifilm",
            "category": "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc",
            "category_id": 48,
            "price_detail": {
                "selling_price": 15900000,
                "discount_percent": 0
            },
            "position": 1,
            "status": "marketable",
            "multi_color": true,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 408901,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/1031830.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-260095\/\u062f\u0648\u0631\u0628\u06cc\u0646-\u0639\u06a9\u0627\u0633\u06cc-\u0686\u0627\u067e-\u0633\u0631\u06cc\u0639-\u0641\u0648\u062c\u06cc-\u0641\u06cc\u0644\u0645-\u0645\u062f\u0644-instax-mini-9",
            "rating": {
                "rate": 84.4,
                "count": 502
            },
            "price": 15900000
        }, {
            "id": 777295,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc"
            ],
            "supply_category": ["AV", "\u062f\u0648\u0631\u0628\u06cc\u0646"],
            "name": "\u062f\u0648\u0631\u0628\u06cc\u0646 \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 \u06a9\u0627\u0646\u0646 \u0645\u062f\u0644 EOS 4000D \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u0644\u0646\u0632 18-55 \u0645\u06cc\u0644\u06cc \u0645\u062a\u0631 DC III",
            "brand": "Canon",
            "category": "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc",
            "category_id": 48,
            "price_detail": {
                "selling_price": 92500000,
                "discount_percent": 0
            },
            "position": 2,
            "status": "marketable",
            "multi_color": true,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 7308762,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/3532470.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-777295\/\u062f\u0648\u0631\u0628\u06cc\u0646-\u062f\u06cc\u062c\u06cc\u062a\u0627\u0644-\u06a9\u0627\u0646\u0646-\u0645\u062f\u0644-eos-4000d-\u0628\u0647-\u0647\u0645\u0631\u0627\u0647-\u0644\u0646\u0632-18-55-\u0645\u06cc\u0644\u06cc-\u0645\u062a\u0631-dc-iii",
            "rating": {
                "rate": 83.4,
                "count": 105
            },
            "price": 92500000
        }, {
            "id": 3588110,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc",
                "\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0622\u062a\u0644\u06cc\u0647 \u0648 \u0646\u0648\u0631\u067e\u0631\u062f\u0627\u0632\u06cc",
                "\u0646\u0648\u0631 \u062b\u0627\u0628\u062a"
            ],
            "supply_category": ["AV",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646"
            ],
            "name": "\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u0645\u062f\u0644 DX-260",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "category": "\u0646\u0648\u0631 \u062b\u0627\u0628\u062a",
            "category_id": 141,
            "price_detail": {
                "selling_price": 3337000,
                "discount_percent": 0
            },
            "position": 3,
            "status": "marketable",
            "multi_color": false,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 18456976,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/a0f9d026fd5ad280cecfd8ea97c2216bc58002ca_1603208705.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-3588110\/\u0631\u06cc\u0646\u06af-\u0644\u0627\u06cc\u062a-\u0645\u062f\u0644-dx-260",
            "rating": {
                "rate": 77.4,
                "count": 273
            },
            "price": 3337000
        }, {
            "id": 3593269,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc"
            ],
            "supply_category": ["AV", "\u062f\u0648\u0631\u0628\u06cc\u0646"],
            "name": "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc \u0686\u0627\u067e \u0633\u0631\u06cc\u0639 \u0641\u0648\u062c\u06cc \u0641\u06cc\u0644\u0645 \u0645\u062f\u0644 Instax Mini 9 Clear",
            "brand": "Fujifilm",
            "category": "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc",
            "category_id": 48,
            "price_detail": {
                "selling_price": 15900000,
                "discount_percent": 0
            },
            "position": 4,
            "status": "marketable",
            "multi_color": true,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 11791023,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/3f9d7c00f7ba8e692c34643cfe8cd17e81f3d286_1603281520.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-3593269\/\u062f\u0648\u0631\u0628\u06cc\u0646-\u0639\u06a9\u0627\u0633\u06cc-\u0686\u0627\u067e-\u0633\u0631\u06cc\u0639-\u0641\u0648\u062c\u06cc-\u0641\u06cc\u0644\u0645-\u0645\u062f\u0644-instax-mini-9-clear",
            "rating": {
                "rate": 87.2,
                "count": 22
            },
            "price": 15900000
        }, {
            "id": 98691,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc"
            ],
            "supply_category": ["AV", "\u062f\u0648\u0631\u0628\u06cc\u0646"],
            "name": "\u062f\u0648\u0631\u0628\u06cc\u0646 \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 \u0646\u06cc\u06a9\u0648\u0646 \u0645\u062f\u0644 D810 \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u0644\u0646\u0632 24-120 \u0645\u06cc\u0644\u06cc \u0645\u062a\u0631 F\/4G VR",
            "brand": "Nikon",
            "category": "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc",
            "category_id": 48,
            "price_detail": {
                "selling_price": 499900000,
                "discount_percent": 15
            },
            "position": 5,
            "status": "marketable",
            "multi_color": true,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 8277340,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/370064.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-98691\/\u062f\u0648\u0631\u0628\u06cc\u0646-\u062f\u06cc\u062c\u06cc\u062a\u0627\u0644-\u0646\u06cc\u06a9\u0648\u0646-\u0645\u062f\u0644-d810-\u0628\u0647-\u0647\u0645\u0631\u0627\u0647-\u0644\u0646\u0632-24-120-\u0645\u06cc\u0644\u06cc-\u0645\u062a\u0631-f4g-vr",
            "rating": {
                "rate": 20,
                "count": 1
            },
            "price": 499900000
        }, {
            "id": 1856080,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc"
            ],
            "supply_category": ["AV", "\u062f\u0648\u0631\u0628\u06cc\u0646"],
            "name": "\u062f\u0648\u0631\u0628\u06cc\u0646 \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 \u06a9\u0627\u0646\u0646 \u0645\u062f\u0644 EOS 2000D \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u0644\u0646\u0632 18-55 \u0645\u06cc\u0644\u06cc \u0645\u062a\u0631 DC III",
            "brand": "Canon",
            "category": "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc",
            "category_id": 48,
            "price_detail": {
                "selling_price": 98900000,
                "discount_percent": 0
            },
            "position": 6,
            "status": "marketable",
            "multi_color": true,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 11610763,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/112439699.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-1856080\/\u062f\u0648\u0631\u0628\u06cc\u0646-\u062f\u06cc\u062c\u06cc\u062a\u0627\u0644-\u06a9\u0627\u0646\u0646-\u0645\u062f\u0644-eos-2000d-\u0628\u0647-\u0647\u0645\u0631\u0627\u0647-\u0644\u0646\u0632-18-55-\u0645\u06cc\u0644\u06cc-\u0645\u062a\u0631-dc-iii",
            "rating": {
                "rate": 87.8,
                "count": 57
            },
            "price": 98900000
        }, {
            "id": 3108356,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc",
                "\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0622\u062a\u0644\u06cc\u0647 \u0648 \u0646\u0648\u0631\u067e\u0631\u062f\u0627\u0632\u06cc",
                "\u0641\u0648\u0646 (\u067e\u0631\u062f\u0647)"
            ],
            "supply_category": ["AV",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646"
            ],
            "name": "\u0641\u0648\u0646 \u0639\u06a9\u0627\u0633\u06cc \u0645\u062f\u0644 non woven \u06a9\u062f 2.5-1.5",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "category": "\u0641\u0648\u0646 (\u067e\u0631\u062f\u0647)",
            "category_id": 129,
            "price_detail": {
                "selling_price": 900000,
                "discount_percent": 0
            },
            "position": 7,
            "status": "marketable",
            "multi_color": true,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 10135493,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/f0c72e2bc7b85406689fadf9ee39579b2b9d0581_1595098399.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-3108356\/\u0641\u0648\u0646-\u0639\u06a9\u0627\u0633\u06cc-\u0645\u062f\u0644-non-woven-\u06a9\u062f-25-15",
            "rating": {
                "rate": 63.6,
                "count": 328
            },
            "price": 900000
        }, {
            "id": 3339128,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc",
                "\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0622\u062a\u0644\u06cc\u0647 \u0648 \u0646\u0648\u0631\u067e\u0631\u062f\u0627\u0632\u06cc",
                "\u0646\u0648\u0631 \u062b\u0627\u0628\u062a"
            ],
            "supply_category": ["AV",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646"
            ],
            "name": "\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u06a9\u062f RFL",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "category": "\u0646\u0648\u0631 \u062b\u0627\u0628\u062a",
            "category_id": 141,
            "price_detail": {
                "selling_price": 3699900,
                "discount_percent": 0
            },
            "position": 8,
            "status": "marketable",
            "multi_color": false,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 14274449,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/57c40f9ffdd81580932362a282879e1e9af81706_1599383854.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-3339128\/\u0631\u06cc\u0646\u06af-\u0644\u0627\u06cc\u062a-\u06a9\u062f-rfl",
            "rating": {
                "rate": 77,
                "count": 303
            },
            "price": 3699900
        }, {
            "id": 4459464,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc",
                "\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0622\u062a\u0644\u06cc\u0647 \u0648 \u0646\u0648\u0631\u067e\u0631\u062f\u0627\u0632\u06cc",
                "\u0646\u0648\u0631 \u062b\u0627\u0628\u062a"
            ],
            "supply_category": ["AV",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646"
            ],
            "name": "\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u0645\u0648\u0646\u0627\u06a9\u0648 \u0645\u062f\u0644 Brilliant-04",
            "brand": "\u0645\u0648\u0646\u0627\u06a9\u0648",
            "category": "\u0646\u0648\u0631 \u062b\u0627\u0628\u062a",
            "category_id": 141,
            "price_detail": {
                "selling_price": 9000000,
                "discount_percent": 0
            },
            "position": 9,
            "status": "marketable",
            "multi_color": false,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 14377256,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/c915162bf03179abff86e41286d41485073bfb50_1613297148.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-4459464\/\u0631\u06cc\u0646\u06af-\u0644\u0627\u06cc\u062a-\u0645\u0648\u0646\u0627\u06a9\u0648-\u0645\u062f\u0644-brilliant-04",
            "rating": {
                "rate": 0,
                "count": 0
            },
            "price": 9000000
        }, {
            "id": 2520810,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc"
            ],
            "supply_category": ["AV", "\u062f\u0648\u0631\u0628\u06cc\u0646"],
            "name": " \u062f\u0648\u0631\u0628\u06cc\u0646 \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 \u0622\u06a9\u0633\u0648\u0646 \u0645\u062f\u0644 AX6062",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "category": "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc",
            "category_id": 48,
            "price_detail": {
                "selling_price": 3400000,
                "discount_percent": 0
            },
            "position": 10,
            "status": "marketable",
            "multi_color": true,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 16225707,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/119579726.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-2520810\/\u062f\u0648\u0631\u0628\u06cc\u0646-\u062f\u06cc\u062c\u06cc\u062a\u0627\u0644-\u0622\u06a9\u0633\u0648\u0646-\u0645\u062f\u0644-ax6062",
            "rating": {
                "rate": 70.6,
                "count": 66
            },
            "price": 3400000
        }, {
            "id": 3443396,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc",
                "\u0633\u0647 \u067e\u0627\u06cc\u0647 \u0648 \u062a\u06a9 \u067e\u0627\u06cc\u0647"
            ],
            "supply_category": ["AV",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646"
            ],
            "name": "\u0633\u0647 \u067e\u0627\u06cc\u0647 \u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647 \u062f\u0648\u0631\u0628\u06cc\u0646 \u0645\u062f\u0644 3110",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "category": "\u0633\u0647 \u067e\u0627\u06cc\u0647 \u0648 \u062a\u06a9 \u067e\u0627\u06cc\u0647",
            "category_id": 107,
            "price_detail": {
                "selling_price": 879800,
                "discount_percent": 0
            },
            "position": 11,
            "status": "marketable",
            "multi_color": true,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 13962328,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/bc2396a4ec7873605214b5e72f4d1957341fbddf_1600846422.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-3443396\/\u0633\u0647-\u067e\u0627\u06cc\u0647-\u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647-\u062f\u0648\u0631\u0628\u06cc\u0646-\u0645\u062f\u0644-3110",
            "rating": {
                "rate": 68,
                "count": 211
            },
            "price": 879800
        }, {
            "id": 3190220,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc",
                "\u06a9\u0627\u0631\u062a \u062d\u0627\u0641\u0638\u0647"
            ],
            "supply_category": ["IT",
                "\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0630\u062e\u06cc\u0631\u0647 \u0633\u0627\u0632\u06cc \u0627\u0637\u0644\u0627\u0639\u0627\u062a"
            ],
            "name": "\u06a9\u0627\u0631\u062a \u062d\u0627\u0641\u0638\u0647 microSDXC \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 EVO Plus \u06a9\u0644\u0627\u0633 10 \u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f UHS-I U1 \u0633\u0631\u0639\u062a 100MBps \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u0622\u062f\u0627\u067e\u062a\u0648\u0631 SD",
            "brand": "Samsung",
            "category": "\u06a9\u0627\u0631\u062a \u062d\u0627\u0641\u0638\u0647",
            "category_id": 70,
            "price_detail": {
                "selling_price": 2097000,
                "discount_percent": 0
            },
            "position": 12,
            "status": "marketable",
            "multi_color": false,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 10285646,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/97c9bd0b1951cb0ac28439cf40ec5aa3727f2ca4_1596532443.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-3190220\/\u06a9\u0627\u0631\u062a-\u062d\u0627\u0641\u0638\u0647-microsdxc-\u0633\u0627\u0645\u0633\u0648\u0646\u06af-\u0645\u062f\u0644-evo-plus-\u06a9\u0644\u0627\u0633-10-\u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f-uhs-i-u1-\u0633\u0631\u0639\u062a-100mbps-\u0638\u0631\u0641\u06cc\u062a-64-\u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a-\u0628\u0647-\u0647\u0645\u0631\u0627\u0647-\u0622\u062f\u0627\u067e\u062a\u0648\u0631-sd",
            "rating": {
                "rate": 86.4,
                "count": 232
            },
            "price": 2097000
        }, {
            "id": 690710,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646", "\u062a\u0644\u0633\u06a9\u0648\u067e"
            ],
            "supply_category": ["AV", "\u0627\u0628\u0632\u0627\u0631 \u0639\u0644\u0645\u06cc"],
            "name": "\u062a\u0644\u0633\u06a9\u0648\u067e \u0634\u06a9\u0633\u062a\u06cc \u0645\u062f\u0644 Celestial Body Accidence",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "category": "\u062a\u0644\u0633\u06a9\u0648\u067e",
            "category_id": 173,
            "price_detail": {
                "selling_price": 7470000,
                "discount_percent": 0
            },
            "position": 13,
            "status": "marketable",
            "multi_color": true,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 15400490,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/3008907.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-690710\/\u062a\u0644\u0633\u06a9\u0648\u067e-\u0634\u06a9\u0633\u062a\u06cc-\u0645\u062f\u0644-celestial-body-accidence",
            "rating": {
                "rate": 54,
                "count": 23
            },
            "price": 7470000
        }, {
            "id": 4508458,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc",
                "\u06a9\u0627\u0631\u062a \u062d\u0627\u0641\u0638\u0647"
            ],
            "supply_category": ["IT",
                "\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0630\u062e\u06cc\u0631\u0647 \u0633\u0627\u0632\u06cc \u0627\u0637\u0644\u0627\u0639\u0627\u062a"
            ],
            "name": "  \u06a9\u0627\u0631\u062a \u062d\u0627\u0641\u0638\u0647 microSDXC \u0633\u0646 \u062f\u06cc\u0633\u06a9 \u0645\u062f\u0644 Ultra A1 \u06a9\u0644\u0627\u0633 10 \u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f UHS-I \u0633\u0631\u0639\u062a 120MBps \u0638\u0631\u0641\u06cc\u062a 32 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "brand": "\u0633\u0646 \u062f\u06cc\u0633\u06a9",
            "category": "\u06a9\u0627\u0631\u062a \u062d\u0627\u0641\u0638\u0647",
            "category_id": 70,
            "price_detail": {
                "selling_price": 1095000,
                "discount_percent": 0
            },
            "position": 14,
            "status": "marketable",
            "multi_color": false,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 15802155,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/fac1ac32f35ab75f8e3010a47642af94f2abb6f5_1613821674.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-4508458\/\u06a9\u0627\u0631\u062a-\u062d\u0627\u0641\u0638\u0647-microsdxc-\u0633\u0646-\u062f\u06cc\u0633\u06a9-\u0645\u062f\u0644-ultra-a1-\u06a9\u0644\u0627\u0633-10-\u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f-uhs-i-\u0633\u0631\u0639\u062a-120mbps-\u0638\u0631\u0641\u06cc\u062a-32-\u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "rating": {
                "rate": 84.8,
                "count": 223
            },
            "price": 1095000
        }, {
            "id": 138649,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc"
            ],
            "supply_category": ["AV", "\u062f\u0648\u0631\u0628\u06cc\u0646"],
            "name": "\u062f\u0648\u0631\u0628\u06cc\u0646 \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 \u06a9\u0627\u0646\u0646 \u0645\u062f\u0644  Eos 80D EF S \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u0644\u0646\u0632 18-135 \u0645\u06cc\u0644\u06cc \u0645\u062a\u0631 f\/3.5-5.6 IS USM",
            "brand": "Canon",
            "category": "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc",
            "category_id": 48,
            "price_detail": {
                "selling_price": 279900000,
                "discount_percent": 0
            },
            "position": 15,
            "status": "marketable",
            "multi_color": true,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 11615640,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/656887.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-138649\/\u062f\u0648\u0631\u0628\u06cc\u0646-\u062f\u06cc\u062c\u06cc\u062a\u0627\u0644-\u06a9\u0627\u0646\u0646-\u0645\u062f\u0644-eos-80d-ef-s-\u0628\u0647-\u0647\u0645\u0631\u0627\u0647-\u0644\u0646\u0632-18-135-\u0645\u06cc\u0644\u06cc-\u0645\u062a\u0631-f35-56-is-usm",
            "rating": {
                "rate": 80,
                "count": 44
            },
            "price": 279900000
        }, {
            "id": 3133047,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646", "\u062a\u0644\u0633\u06a9\u0648\u067e"
            ],
            "supply_category": ["AV", "\u0627\u0628\u0632\u0627\u0631 \u0639\u0644\u0645\u06cc"],
            "name": "\u062a\u0644\u0633\u06a9\u0648\u067e \u0645\u062f\u0644 c 2105",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "category": "\u062a\u0644\u0633\u06a9\u0648\u067e",
            "category_id": 173,
            "price_detail": {
                "selling_price": 3900000,
                "discount_percent": 0
            },
            "position": 16,
            "status": "marketable",
            "multi_color": true,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 15968165,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/2651146238e7f09cc75dad222ec54e119b613449_1595494091.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-3133047\/\u062a\u0644\u0633\u06a9\u0648\u067e-\u0645\u062f\u0644-c-2105",
            "rating": {
                "rate": 56.6,
                "count": 23
            },
            "price": 3900000
        }, {
            "id": 3197248,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc",
                "\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0622\u062a\u0644\u06cc\u0647 \u0648 \u0646\u0648\u0631\u067e\u0631\u062f\u0627\u0632\u06cc",
                "\u0646\u0648\u0631 \u062b\u0627\u0628\u062a"
            ],
            "supply_category": ["AV",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646"
            ],
            "name": "\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u0645\u062f\u0644 M26",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "category": "\u0646\u0648\u0631 \u062b\u0627\u0628\u062a",
            "category_id": 141,
            "price_detail": {
                "selling_price": 1770000,
                "discount_percent": 9
            },
            "position": 17,
            "status": "marketable",
            "multi_color": false,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 12376896,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/d00c207943db9ba418d48559be00aeef6b54e085_1596628029.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-3197248\/\u0631\u06cc\u0646\u06af-\u0644\u0627\u06cc\u062a-\u0645\u062f\u0644-m26",
            "rating": {
                "rate": 78.8,
                "count": 78
            },
            "price": 1770000
        }, {
            "id": 949493,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc"
            ],
            "supply_category": ["AV", "\u062f\u0648\u0631\u0628\u06cc\u0646"],
            "name": "\u062f\u0648\u0631\u0628\u06cc\u0646 \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 \u0646\u06cc\u06a9\u0648\u0646 \u0645\u062f\u0644 D3500 \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u0644\u0646\u0632 18-55 \u0645\u06cc\u0644\u06cc \u0645\u062a\u0631 VR AF-P",
            "brand": "Nikon",
            "category": "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc",
            "category_id": 48,
            "price_detail": {
                "selling_price": 129950000,
                "discount_percent": 0
            },
            "position": 18,
            "status": "marketable",
            "multi_color": true,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 17103005,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/4430428.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-949493\/\u062f\u0648\u0631\u0628\u06cc\u0646-\u062f\u06cc\u062c\u06cc\u062a\u0627\u0644-\u0646\u06cc\u06a9\u0648\u0646-\u0645\u062f\u0644-d3500-\u0628\u0647-\u0647\u0645\u0631\u0627\u0647-\u0644\u0646\u0632-18-55-\u0645\u06cc\u0644\u06cc-\u0645\u062a\u0631-vr-af-p",
            "rating": {
                "rate": 79.4,
                "count": 32
            },
            "price": 129950000
        }, {
            "id": 3557656,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc",
                "\u0633\u0647 \u067e\u0627\u06cc\u0647 \u0648 \u062a\u06a9 \u067e\u0627\u06cc\u0647"
            ],
            "supply_category": ["AV",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646"
            ],
            "name": "\u0633\u0647 \u067e\u0627\u06cc\u0647 \u062f\u0648\u0631\u0628\u06cc\u0646 \u0646\u0633\u062a \u0645\u062f\u0644 NT-510 \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u06af\u06cc\u0631\u0647 \u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647 \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "NEST",
            "category": "\u0633\u0647 \u067e\u0627\u06cc\u0647 \u0648 \u062a\u06a9 \u067e\u0627\u06cc\u0647",
            "category_id": 107,
            "price_detail": {
                "selling_price": 3260000,
                "discount_percent": 0
            },
            "position": 19,
            "status": "marketable",
            "multi_color": true,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 13855815,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/4e93031e8ebffb66de70506d83817925227d8a04_1602683521.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-3557656\/\u0633\u0647-\u067e\u0627\u06cc\u0647-\u062f\u0648\u0631\u0628\u06cc\u0646-\u0646\u0633\u062a-\u0645\u062f\u0644-nt-510-\u0628\u0647-\u0647\u0645\u0631\u0627\u0647-\u06af\u06cc\u0631\u0647-\u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647-\u0645\u0648\u0628\u0627\u06cc\u0644",
            "rating": {
                "rate": 82.6,
                "count": 115
            },
            "price": 3260000
        }, {
            "id": 3692356,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc",
                "\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0622\u062a\u0644\u06cc\u0647 \u0648 \u0646\u0648\u0631\u067e\u0631\u062f\u0627\u0632\u06cc",
                "\u0646\u0648\u0631 \u062b\u0627\u0628\u062a"
            ],
            "supply_category": ["AV",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646"
            ],
            "name": "\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u0645\u062f\u0644 FRL-S31",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "category": "\u0646\u0648\u0631 \u062b\u0627\u0628\u062a",
            "category_id": 141,
            "price_detail": {
                "selling_price": 6990000,
                "discount_percent": 36
            },
            "position": 20,
            "status": "marketable",
            "multi_color": false,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 11956757,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/3dfdb45db91d8a224abb4dd88a3c448ceb79c094_1605018163.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-3692356\/\u0631\u06cc\u0646\u06af-\u0644\u0627\u06cc\u062a-\u0645\u062f\u0644-frl-s31",
            "rating": {
                "rate": 67,
                "count": 31
            },
            "price": 6990000
        }, {
            "id": 4370886,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc",
                "\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0622\u062a\u0644\u06cc\u0647 \u0648 \u0646\u0648\u0631\u067e\u0631\u062f\u0627\u0632\u06cc",
                "\u0646\u0648\u0631 \u062b\u0627\u0628\u062a"
            ],
            "supply_category": ["AV",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646"
            ],
            "name": "\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u0645\u062f\u0644 dimmable",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "category": "\u0646\u0648\u0631 \u062b\u0627\u0628\u062a",
            "category_id": 141,
            "price_detail": {
                "selling_price": 8047500,
                "discount_percent": 13
            },
            "position": 21,
            "status": "marketable",
            "multi_color": false,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 15932181,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/d7e663c0f4bd41bb5a81c15693baad947b049660_1612266565.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-4370886\/\u0631\u06cc\u0646\u06af-\u0644\u0627\u06cc\u062a-\u0645\u062f\u0644-dimmable",
            "rating": {
                "rate": 84,
                "count": 50
            },
            "price": 8047500
        }, {
            "id": 1925099,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc"
            ],
            "supply_category": ["AV", "\u062f\u0648\u0631\u0628\u06cc\u0646"],
            "name": "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc \u0648\u0631\u0632\u0634\u06cc \u0645\u062f\u0644 SQ11",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "category": "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc",
            "category_id": 49,
            "price_detail": {
                "selling_price": 1320000,
                "discount_percent": 50
            },
            "position": 22,
            "status": "marketable",
            "multi_color": true,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 6554332,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/112813529.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-1925099\/\u062f\u0648\u0631\u0628\u06cc\u0646-\u0641\u06cc\u0644\u0645-\u0628\u0631\u062f\u0627\u0631\u06cc-\u0648\u0631\u0632\u0634\u06cc-\u0645\u062f\u0644-sq11",
            "rating": {
                "rate": 53.8,
                "count": 189
            },
            "price": 1320000
        }, {
            "id": 3438922,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646", "\u062a\u0644\u0633\u06a9\u0648\u067e"
            ],
            "supply_category": ["AV", "\u0627\u0628\u0632\u0627\u0631 \u0639\u0644\u0645\u06cc"],
            "name": "\u062a\u0644\u0633\u06a9\u0648\u067e \u0627\u06a9\u06cc\u0648\u062a\u0631 \u0645\u062f\u0644 Maksy 60",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "category": "\u062a\u0644\u0633\u06a9\u0648\u067e",
            "category_id": 173,
            "price_detail": {
                "selling_price": 43000000,
                "discount_percent": 4
            },
            "position": 23,
            "status": "marketable",
            "multi_color": true,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 11587529,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/38c8e631b91ad8903969c617da6409f1e212f1c0_1600771989.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-3438922\/\u062a\u0644\u0633\u06a9\u0648\u067e-\u0627\u06a9\u06cc\u0648\u062a\u0631-\u0645\u062f\u0644-maksy-60",
            "rating": {
                "rate": 65,
                "count": 4
            },
            "price": 43000000
        }, {
            "id": 191819,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc",
                "\u0628\u0627\u062a\u0631\u06cc\u060c \u0634\u0627\u0631\u0698\u0631 \u0648 \u0645\u062a\u0639\u0644\u0642\u0627\u062a",
                "\u0628\u0627\u062a\u0631\u06cc \u0648 \u0634\u0627\u0631\u0698\u0631 \u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f",
                "\u0628\u0627\u062a\u0631\u06cc \u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f"
            ],
            "supply_category": ["AC",
                "\u0628\u0627\u062a\u0631\u06cc \u0648 \u0634\u0627\u0631\u0698\u0631 \u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f"
            ],
            "name": "\u0628\u0627\u062a\u0631\u06cc \u0642\u0644\u0645\u06cc \u0648 \u0646\u06cc\u0645 \u0642\u0644\u0645\u06cc \u06a9\u0645\u0644\u06cc\u0648\u0646 \u0645\u062f\u0644 Super Heavy Duty \u0628\u0633\u062a\u0647 8 \u0639\u062f\u062f\u06cc",
            "brand": "\u06a9\u0645\u0644\u06cc\u0648\u0646",
            "category": "\u0628\u0627\u062a\u0631\u06cc \u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f",
            "category_id": 5880,
            "price_detail": {
                "selling_price": 199800,
                "discount_percent": 0
            },
            "position": 24,
            "status": "marketable",
            "multi_color": false,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 15516049,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/613266.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-191819\/\u0628\u0627\u062a\u0631\u06cc-\u0642\u0644\u0645\u06cc-\u0648-\u0646\u06cc\u0645-\u0642\u0644\u0645\u06cc-\u06a9\u0645\u0644\u06cc\u0648\u0646-\u0645\u062f\u0644-super-heavy-duty-\u0628\u0633\u062a\u0647-8-\u0639\u062f\u062f\u06cc",
            "rating": {
                "rate": 83.8,
                "count": 7337
            },
            "price": 199800
        }, {
            "id": 222962,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc"
            ],
            "supply_category": ["AV", "\u062f\u0648\u0631\u0628\u06cc\u0646"],
            "name": "\u062f\u0648\u0631\u0628\u06cc\u0646 \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 \u06a9\u0627\u0646\u0646 \u0645\u062f\u0644 EOS 7D Mark II \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u0644\u0646\u0632 18-135 \u0645\u06cc\u0644\u06cc \u0645\u062a\u0631 IS USM",
            "brand": "Canon",
            "category": "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc",
            "category_id": 48,
            "price_detail": {
                "selling_price": 356000000,
                "discount_percent": 17
            },
            "position": 25,
            "status": "marketable",
            "multi_color": true,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 8299867,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/674360.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-222962\/\u062f\u0648\u0631\u0628\u06cc\u0646-\u062f\u06cc\u062c\u06cc\u062a\u0627\u0644-\u06a9\u0627\u0646\u0646-\u0645\u062f\u0644-eos-7d-mark-ii-\u0628\u0647-\u0647\u0645\u0631\u0627\u0647-\u0644\u0646\u0632-18-135-\u0645\u06cc\u0644\u06cc-\u0645\u062a\u0631-is-usm",
            "rating": {
                "rate": 55,
                "count": 4
            },
            "price": 356000000
        }, {
            "id": 203383,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc"
            ],
            "supply_category": ["AV", "\u062f\u0648\u0631\u0628\u06cc\u0646"],
            "name": "\u062f\u0648\u0631\u0628\u06cc\u0646 \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 \u06a9\u0627\u0646\u0646 \u0645\u062f\u0644 SX620 HS",
            "brand": "Canon",
            "category": "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc",
            "category_id": 48,
            "price_detail": {
                "selling_price": 63000000,
                "discount_percent": 0
            },
            "position": 26,
            "status": "marketable",
            "multi_color": true,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 15595047,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/4852749.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-203383\/\u062f\u0648\u0631\u0628\u06cc\u0646-\u062f\u06cc\u062c\u06cc\u062a\u0627\u0644-\u06a9\u0627\u0646\u0646-\u0645\u062f\u0644-sx620-hs",
            "rating": {
                "rate": 80.8,
                "count": 25
            },
            "price": 63000000
        }, {
            "id": 4565123,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc",
                "\u06a9\u0627\u0631\u062a \u062d\u0627\u0641\u0638\u0647"
            ],
            "supply_category": ["IT",
                "\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0630\u062e\u06cc\u0631\u0647 \u0633\u0627\u0632\u06cc \u0627\u0637\u0644\u0627\u0639\u0627\u062a"
            ],
            "name": "\u06a9\u0627\u0631\u062a \u062d\u0627\u0641\u0638\u0647 microSDXC \u0633\u0646 \u062f\u06cc\u0633\u06a9 \u0645\u062f\u0644 Ultra A1 \u06a9\u0644\u0627\u0633 10 \u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f UHS-I \u0633\u0631\u0639\u062a 120MBps \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "brand": "\u0633\u0646 \u062f\u06cc\u0633\u06a9",
            "category": "\u06a9\u0627\u0631\u062a \u062d\u0627\u0641\u0638\u0647",
            "category_id": 70,
            "price_detail": {
                "selling_price": 1980000,
                "discount_percent": 0
            },
            "position": 27,
            "status": "marketable",
            "multi_color": false,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 15728701,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/12cd50c1ee626d879b2fa5f259a6133c58bd8fb6_1614417436.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-4565123\/\u06a9\u0627\u0631\u062a-\u062d\u0627\u0641\u0638\u0647-microsdxc-\u0633\u0646-\u062f\u06cc\u0633\u06a9-\u0645\u062f\u0644-ultra-a1-\u06a9\u0644\u0627\u0633-10-\u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f-uhs-i-\u0633\u0631\u0639\u062a-120mbps-\u0638\u0631\u0641\u06cc\u062a-64-\u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "rating": {
                "rate": 85.2,
                "count": 175
            },
            "price": 1980000
        }, {
            "id": 587646,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc"
            ],
            "supply_category": ["AV", "\u062f\u0648\u0631\u0628\u06cc\u0646"],
            "name": "\u062f\u0648\u0631\u0628\u06cc\u0646 \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 \u0628\u062f\u0648\u0646 \u0622\u06cc\u0646\u0647 \u06a9\u0627\u0646\u0646 \u0645\u062f\u0644 EOS M50  \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u0644\u0646\u0632 15-45 \u0645\u06cc\u0644\u06cc \u0645\u062a\u0631",
            "brand": "Canon",
            "category": "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc",
            "category_id": 48,
            "price_detail": {
                "selling_price": 149950000,
                "discount_percent": 0
            },
            "position": 28,
            "status": "marketable",
            "multi_color": true,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 15685470,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/2182407.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-587646\/\u062f\u0648\u0631\u0628\u06cc\u0646-\u062f\u06cc\u062c\u06cc\u062a\u0627\u0644-\u0628\u062f\u0648\u0646-\u0622\u06cc\u0646\u0647-\u06a9\u0627\u0646\u0646-\u0645\u062f\u0644-eos-m50-\u0628\u0647-\u0647\u0645\u0631\u0627\u0647-\u0644\u0646\u0632-15-45-\u0645\u06cc\u0644\u06cc-\u0645\u062a\u0631",
            "rating": {
                "rate": 93.8,
                "count": 13
            },
            "price": 149950000
        }, {
            "id": 3687426,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc",
                "\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0622\u062a\u0644\u06cc\u0647 \u0648 \u0646\u0648\u0631\u067e\u0631\u062f\u0627\u0632\u06cc",
                "\u0646\u0648\u0631 \u062b\u0627\u0628\u062a"
            ],
            "supply_category": ["AV",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646"
            ],
            "name": "\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u0645\u062f\u0644 FRL-160r",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "category": "\u0646\u0648\u0631 \u062b\u0627\u0628\u062a",
            "category_id": 141,
            "price_detail": {
                "selling_price": 1990000,
                "discount_percent": 79
            },
            "position": 29,
            "status": "marketable",
            "multi_color": false,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 11947342,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/3a3e880695474f1c9fdcff708dc9d47ef2ab2ae2_1604992656.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-3687426\/\u0631\u06cc\u0646\u06af-\u0644\u0627\u06cc\u062a-\u0645\u062f\u0644-frl-160r",
            "rating": {
                "rate": 77.6,
                "count": 32
            },
            "price": 1990000
        }, {
            "id": 4411537,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc",
                "\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0622\u062a\u0644\u06cc\u0647 \u0648 \u0646\u0648\u0631\u067e\u0631\u062f\u0627\u0632\u06cc",
                "\u0646\u0648\u0631 \u062b\u0627\u0628\u062a"
            ],
            "supply_category": ["AV",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646"
            ],
            "name": "\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u0645\u062f\u0644 ZT-260",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "category": "\u0646\u0648\u0631 \u062b\u0627\u0628\u062a",
            "category_id": 141,
            "price_detail": {
                "selling_price": 3699200,
                "discount_percent": 0
            },
            "position": 30,
            "status": "marketable",
            "multi_color": false,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 18321361,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/69a671a0c64ec4771769ed36d8925c9cad09a6a9_1612691558.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-4411537\/\u0631\u06cc\u0646\u06af-\u0644\u0627\u06cc\u062a-\u0645\u062f\u0644-zt-260",
            "rating": {
                "rate": 70.6,
                "count": 38
            },
            "price": 3699200
        }, {
            "id": 3375458,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc",
                "\u0633\u0647 \u067e\u0627\u06cc\u0647 \u0648 \u062a\u06a9 \u067e\u0627\u06cc\u0647"
            ],
            "supply_category": ["AV",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646"
            ],
            "name": "\u0633\u0647 \u067e\u0627\u06cc\u0647 \u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647 \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0627\u0628\u0631 \u0645\u062f\u0644 ABR-3120",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "category": "\u0633\u0647 \u067e\u0627\u06cc\u0647 \u0648 \u062a\u06a9 \u067e\u0627\u06cc\u0647",
            "category_id": 107,
            "price_detail": {
                "selling_price": 1610000,
                "discount_percent": 3
            },
            "position": 31,
            "status": "marketable",
            "multi_color": true,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 17330851,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/80b337c2c7e6893178d20e49e7659029fecac21d_1601878773.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-3375458\/\u0633\u0647-\u067e\u0627\u06cc\u0647-\u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647-\u06af\u0648\u0634\u06cc-\u0645\u0648\u0628\u0627\u06cc\u0644-\u0627\u0628\u0631-\u0645\u062f\u0644-abr-3120",
            "rating": {
                "rate": 63.4,
                "count": 129
            },
            "price": 1610000
        }, {
            "id": 3869816,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc",
                "\u0633\u0647 \u067e\u0627\u06cc\u0647 \u0648 \u062a\u06a9 \u067e\u0627\u06cc\u0647"
            ],
            "supply_category": ["AV",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646"
            ],
            "name": "\u0633\u0647 \u067e\u0627\u06cc\u0647 \u062f\u0648\u0631\u0628\u06cc\u0646 \u0645\u062f\u0644 3110",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "category": "\u0633\u0647 \u067e\u0627\u06cc\u0647 \u0648 \u062a\u06a9 \u067e\u0627\u06cc\u0647",
            "category_id": 107,
            "price_detail": {
                "selling_price": 950000,
                "discount_percent": 12
            },
            "position": 32,
            "status": "marketable",
            "multi_color": true,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 15751489,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/fffb6ec266d50a8c8e35e6fae02dd70d8a8f93f0_1606699822.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-3869816\/\u0633\u0647-\u067e\u0627\u06cc\u0647-\u062f\u0648\u0631\u0628\u06cc\u0646-\u0648\u0645\u0648\u0628\u0627\u06cc\u0644-\u0645\u062f\u0644-3110",
            "rating": {
                "rate": 68.6,
                "count": 58
            },
            "price": 950000
        }, {
            "id": 4370591,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc",
                "\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0622\u062a\u0644\u06cc\u0647 \u0648 \u0646\u0648\u0631\u067e\u0631\u062f\u0627\u0632\u06cc",
                "\u0646\u0648\u0631 \u062b\u0627\u0628\u062a"
            ],
            "supply_category": ["AV",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646"
            ],
            "name": "\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u0645\u062f\u0644 live s",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "category": "\u0646\u0648\u0631 \u062b\u0627\u0628\u062a",
            "category_id": 141,
            "price_detail": {
                "selling_price": 1550000,
                "discount_percent": 0
            },
            "position": 33,
            "status": "marketable",
            "multi_color": false,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 15758701,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/72939d7db990dbd2cda91af2714bc19c006f5acd_1612190828.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-4370591\/\u0631\u06cc\u0646\u06af-\u0644\u0627\u06cc\u062a-\u0645\u062f\u0644-live-s",
            "rating": {
                "rate": 82.6,
                "count": 45
            },
            "price": 1550000
        }, {
            "id": 3410241,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc"
            ],
            "supply_category": ["AV", "\u062f\u0648\u0631\u0628\u06cc\u0646"],
            "name": "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc \u0648\u0631\u0632\u0634\u06cc \u06af\u0648\u067e\u0631\u0648 \u0645\u062f\u0644 Hero 9 Black",
            "brand": "\u06af\u0648\u067e\u0631\u0648",
            "category": "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc",
            "category_id": 49,
            "price_detail": {
                "selling_price": 109535000,
                "discount_percent": 0
            },
            "position": 34,
            "status": "marketable",
            "multi_color": true,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 13637212,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/14ee4d2c1af7563e4fc856f91c6fa5a902401531_1601103882.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-3410241\/\u062f\u0648\u0631\u0628\u06cc\u0646-\u0641\u06cc\u0644\u0645-\u0628\u0631\u062f\u0627\u0631\u06cc-\u0648\u0631\u0632\u0634\u06cc-\u06af\u0648\u067e\u0631\u0648-\u0645\u062f\u0644-hero-9-black",
            "rating": {
                "rate": 90,
                "count": 4
            },
            "price": 109535000
        }, {
            "id": 4442903,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc",
                "\u0628\u0627\u062a\u0631\u06cc\u060c \u0634\u0627\u0631\u0698\u0631 \u0648 \u0645\u062a\u0639\u0644\u0642\u0627\u062a",
                "\u0628\u0627\u062a\u0631\u06cc \u0648 \u0634\u0627\u0631\u0698\u0631 \u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f",
                "\u0628\u0627\u062a\u0631\u06cc \u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f"
            ],
            "supply_category": ["AC",
                "\u0628\u0627\u062a\u0631\u06cc \u0648 \u0634\u0627\u0631\u0698\u0631 \u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f"
            ],
            "name": "\u0628\u0627\u062a\u0631\u06cc \u0646\u06cc\u0645 \u0642\u0644\u0645\u06cc \u067e\u06cc\u06a9\u0633\u0644 \u0645\u062f\u0644 Super Heavy Duty \u0628\u0633\u062a\u0647 4 \u0639\u062f\u062f\u06cc",
            "brand": "\u067e\u06cc\u200c\u06a9\u06cc \u0633\u0644",
            "category": "\u0628\u0627\u062a\u0631\u06cc \u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f",
            "category_id": 5880,
            "price_detail": {
                "selling_price": 129000,
                "discount_percent": 77
            },
            "position": 35,
            "status": "marketable",
            "multi_color": false,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 14304891,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/681d6975321e337fcb66703e5e68df64f2e21fb2_1613053970.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-4442903\/\u0628\u0627\u062a\u0631\u06cc-\u0646\u06cc\u0645-\u0642\u0644\u0645\u06cc-\u067e\u06cc\u06a9\u0633\u0644-\u0645\u062f\u0644-super-heavy-duty-\u0628\u0633\u062a\u0647-4-\u0639\u062f\u062f\u06cc",
            "rating": {
                "rate": 82.8,
                "count": 665
            },
            "price": 129000
        }, {
            "id": 3400718,
            "site_category": ["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644",
                "\u062f\u0648\u0631\u0628\u06cc\u0646",
                "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc"
            ],
            "supply_category": ["AV", "\u062f\u0648\u0631\u0628\u06cc\u0646"],
            "name": "\u062f\u0648\u0631\u0628\u06cc\u0646 \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 \u0645\u062f\u0644 mn6077",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "category": "\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc",
            "category_id": 48,
            "price_detail": {
                "selling_price": 6970000,
                "discount_percent": 15
            },
            "position": 36,
            "status": "marketable",
            "multi_color": true,
            "multi_size": false,
            "multi_warranty": true,
            "multi_seller": true,
            "buy_box_winner": 11045357,
            "image_src": "https:\/\/dkstatics-public.digikala.com\/digikala-products\/5e807a3dab0ec90bd20a82556351ada8fa71b239_1600170684.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90",
            "product_url": "https:\/\/digikala.com\/product\/dkp-3400718\/\u062f\u0648\u0631\u0628\u06cc\u0646-\u062f\u06cc\u062c\u06cc\u062a\u0627\u0644-\u0645\u062f\u0644-mn6077",
            "rating": {
                "rate": 61.6,
                "count": 12
            },
            "price": 6970000
        }];
        var page_search_url = null;
        var sntracker_search_data = {
            "source": 1,
            "page": 1,
            "pages": 277,
            "foundItems": 20796,
            "query": "",
            "bannerId": null,
            "categoryId": 6,
            "attributes": {
                "sort_by": 4,
                "has_selling_stock": false,
                "has_ready_to_shipment": 0
            },
            "products": [{
                "product_id": 260095,
                "category_id": 48,
                "brand_id": 15,
                "is_sponsored": false,
                "selling_price": 15900000
            }, {
                "product_id": 777295,
                "category_id": 48,
                "brand_id": 12,
                "is_sponsored": false,
                "selling_price": 92500000
            }, {
                "product_id": 3588110,
                "category_id": 141,
                "brand_id": 719,
                "is_sponsored": false,
                "selling_price": 3337000
            }, {
                "product_id": 3593269,
                "category_id": 48,
                "brand_id": 15,
                "is_sponsored": false,
                "selling_price": 15900000
            }, {
                "product_id": 98691,
                "category_id": 48,
                "brand_id": 13,
                "is_sponsored": false,
                "selling_price": 499900000
            }, {
                "product_id": 1856080,
                "category_id": 48,
                "brand_id": 12,
                "is_sponsored": false,
                "selling_price": 98900000
            }, {
                "product_id": 3108356,
                "category_id": 129,
                "brand_id": 719,
                "is_sponsored": false,
                "selling_price": 900000
            }, {
                "product_id": 3339128,
                "category_id": 141,
                "brand_id": 719,
                "is_sponsored": false,
                "selling_price": 3699900
            }, {
                "product_id": 4459464,
                "category_id": 141,
                "brand_id": 16102,
                "is_sponsored": false,
                "selling_price": 9000000
            }, {
                "product_id": 2520810,
                "category_id": 48,
                "brand_id": 719,
                "is_sponsored": false,
                "selling_price": 3400000
            }, {
                "product_id": 3443396,
                "category_id": 107,
                "brand_id": 719,
                "is_sponsored": false,
                "selling_price": 879800
            }, {
                "product_id": 3190220,
                "category_id": 70,
                "brand_id": 18,
                "is_sponsored": false,
                "selling_price": 2097000
            }, {
                "product_id": 690710,
                "category_id": 173,
                "brand_id": 719,
                "is_sponsored": false,
                "selling_price": 7470000
            }, {
                "product_id": 4508458,
                "category_id": 70,
                "brand_id": 63,
                "is_sponsored": false,
                "selling_price": 1095000
            }, {
                "product_id": 138649,
                "category_id": 48,
                "brand_id": 12,
                "is_sponsored": false,
                "selling_price": 279900000
            }, {
                "product_id": 3133047,
                "category_id": 173,
                "brand_id": 719,
                "is_sponsored": false,
                "selling_price": 3900000
            }, {
                "product_id": 3197248,
                "category_id": 141,
                "brand_id": 719,
                "is_sponsored": false,
                "selling_price": 1770000
            }, {
                "product_id": 949493,
                "category_id": 48,
                "brand_id": 13,
                "is_sponsored": false,
                "selling_price": 129950000
            }, {
                "product_id": 3557656,
                "category_id": 107,
                "brand_id": 9585,
                "is_sponsored": false,
                "selling_price": 3260000
            }, {
                "product_id": 3692356,
                "category_id": 141,
                "brand_id": 719,
                "is_sponsored": false,
                "selling_price": 6990000
            }, {
                "product_id": 4370886,
                "category_id": 141,
                "brand_id": 719,
                "is_sponsored": false,
                "selling_price": 8047500
            }, {
                "product_id": 1925099,
                "category_id": 49,
                "brand_id": 719,
                "is_sponsored": false,
                "selling_price": 1320000
            }, {
                "product_id": 3438922,
                "category_id": 173,
                "brand_id": 719,
                "is_sponsored": false,
                "selling_price": 43000000
            }, {
                "product_id": 191819,
                "category_id": 5880,
                "brand_id": 170,
                "is_sponsored": false,
                "selling_price": 199800
            }, {
                "product_id": 222962,
                "category_id": 48,
                "brand_id": 12,
                "is_sponsored": false,
                "selling_price": 356000000
            }, {
                "product_id": 203383,
                "category_id": 48,
                "brand_id": 12,
                "is_sponsored": false,
                "selling_price": 63000000
            }, {
                "product_id": 4565123,
                "category_id": 70,
                "brand_id": 63,
                "is_sponsored": false,
                "selling_price": 1980000
            }, {
                "product_id": 587646,
                "category_id": 48,
                "brand_id": 12,
                "is_sponsored": false,
                "selling_price": 149950000
            }, {
                "product_id": 3687426,
                "category_id": 141,
                "brand_id": 719,
                "is_sponsored": false,
                "selling_price": 1990000
            }, {
                "product_id": 4411537,
                "category_id": 141,
                "brand_id": 719,
                "is_sponsored": false,
                "selling_price": 3699200
            }, {
                "product_id": 3375458,
                "category_id": 107,
                "brand_id": 719,
                "is_sponsored": false,
                "selling_price": 1610000
            }, {
                "product_id": 3869816,
                "category_id": 107,
                "brand_id": 719,
                "is_sponsored": false,
                "selling_price": 950000
            }, {
                "product_id": 4370591,
                "category_id": 141,
                "brand_id": 719,
                "is_sponsored": false,
                "selling_price": 1550000
            }, {
                "product_id": 3410241,
                "category_id": 49,
                "brand_id": 76,
                "is_sponsored": false,
                "selling_price": 109535000
            }, {
                "product_id": 4442903,
                "category_id": 5880,
                "brand_id": 19429,
                "is_sponsored": false,
                "selling_price": 129000
            }, {
                "product_id": 3400718,
                "category_id": 48,
                "brand_id": 719,
                "is_sponsored": false,
                "selling_price": 6970000
            }],
            "sponsored_products": [],
            "searchPhase": null,
            "searchModelName": null,
            "searchModelVersion": null
        };
        var categoryId = 6;
        var nowTimeInUTC = "2021-07-13 16:17:15";
        var isAnanasFriendly = true;
        var userId = 9735394;
        var adroRCActivation = true;
        var loginRegisterUrlWithBack =
            "\/users\/login-register\/?_back=https:\/\/www.digikala.com\/search\/category-camera\/";
        var isNewCustomer = false;
        var digiclubLuckyDrawEndTime = "2021-09-29 15:30:32";
        var activateUrl = "\/digiclub\/activate\/";
    </script>

    <script src="{{ asset('assets/new/js/sentry.js') }}"></script>
    <script src="{{ asset('assets/new/js/url2.min.js') }}"></script>

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
    <main id="main">
        <div id="HomePageTopBanner"></div>
        <div id="content">
            <div class="container">
                <div class="o-page">

                    @if ($categories->where('parent_id', $cat->id)->count())
                        <div class="o-box c-filter-shortcut">
                            <div class="c-filter-shortcut__list-container">
                                <div class="c-filter-shortcut__list-title">دسته‌بندی‌ها</div>
                                <div class="c-filter-shortcut__list c-filter-shortcut__list--category">
                                    <?php $i = 1; ?>
                                    @foreach ($categories->where('parent_id', $cat->id) as $cat)
                                        <a href="{{ route('front.categoryPage', $cat->slug) }}"
                                           class="c-filter-shortcut__category-item js-shortcut-category ">
                                            <div class="c-filter-shortcut__category-image">
                                                @if ($cat->media()->exists())
                                                    <img
                                                        src="{{ $cat->media()->exists() ? $site_url . '/' . $cat->media()->first()->path . '/' . $cat->media()->first()->name : '' }}?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60">
                                                @endif
                                            </div>
                                            <div class="c-filter-shortcut__category-title">{{ $cat->name }}</div>
                                        </a>
                                        @if ($i == 7)
                                            @break
                                        @endif
                                        <?php $i++; ?>
                                    @endforeach

                                    @if ($categories->where('parent_id', $cat->id)->count() > 7)
                                        <div
                                            class="c-filter-shortcut__category-item c-filter-shortcut__category-item--show-more js-show-more-categories">
                            <span
                                class="c-filter-shortcut__show-more-count">{{ persianNum($categories->where('parent_id', $cat->id)->count() - 7) }}
                                +</span>
                                            <span class="c-filter-shortcut__show-more-text">دسته‌بندی دیگر</span>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    @endif

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
                                                    <ul class="c-catalog__list--depth js-catalog-list"
                                                        style="max-height: unset; height: 250px;">
                                                        <li class="c-catalog__cat-item ">
                                                <span class="c-catalog__cat-item c-catalog__cat-item--arrow-left">
                                                  <a class="c-catalog__link "
                                                     href="/search/category-electronic-devices/">{{ $fullCategoryList[0]  }}</a>
                                                </span>

                                                            <?php
                                                                $counter = count($fullCategoryList);
                                                                $j = 1;
                                                            ?>

{{--                                                            @include('front::layouts.category-menu', ['fullCategoryList' => $fullCategoryList, 'counter' => $counter, 'j' => $j])--}}


                                                        </li>
                                                    </ul>
                                                    <div data-snt-event="dkSearchPageClick"
                                                         class="c-catalog__show-more js-catalog-show-more">
                                                        مشاهده همه دسته‌بندی‌ها
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="c-box c-box--brands-filter js-ab-sidebar-filter">
                                        <div class="">
                                            <div class=" c-box__header c-box__header--toggleable
                                js-box-toggle ">برند
                                            </div>
                                            <div class="  c-filter c-filter--params js-box-content">
                                                <div class="c-ui-input c-ui-input--quick-search">
                                                    <input type="text"
                                                           class="c-ui-input__field c-ui-input__field--cleanable js-filter-input js-cleanable-input"
                                                           placeholder="جستجوی نام برند…">
                                                    <span class="c-ui-input-cleaner js-input-cleaner"></span>
                                                </div>
                                                <div
                                                    class="c-message c-message-light c-message-light--info js-message-error u-hidden">
                                                    <p>برند یا سازنده‌ای با این نام پیدا نشد!</p>
                                                </div>
                                                <div class="c-box__divider c-box__divider--full">
                                                    <div></div>
                                                </div>
                                                <div class="c-box__scroll-container">
                                                    <div class="c-box__scroll js-box-content-items">
                                                        <ul>

                                                            @foreach ($brands as $brand)
                                                                <li>
                                                                    <label class="c-filter__label js-box-content-item"
                                                                           for="brand-param-{{ $brand->id }}"
                                                                           data-fa="{{ $brand->name }}"
                                                                           data-en="{{ $brand->en_name }}"
                                                                           data-search="{{ $brand->name }} {{ $brand->en_name }}">
                                                                        {{ $brand->name }}
                                                                    </label>
                                                                    <label class="c-ui-checkbox">
                                                                        <input type="checkbox" value="{{ $brand->id }}"
                                                                               name="brand[]"
                                                                               data-search-uid="brand"
                                                                               id="brand-param-{{ $brand->id }}">
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


                                    {{-- <div class="c-box c-box--brands-filter js-ab-sidebar-filter"> --}}
                                    {{-- <div class=""> --}}
                                    {{-- <div class="c-box__header c-box__header--toggleable js-box-toggle ">فروشنده --}}

                                    {{-- </div> --}}
                                    {{-- <div class="c-filter c-filter--params js-box-content"> --}}
                                    {{-- <div class="c-message c-message-light c-message-light--info js-message-error u-hidden"> --}}
                                    {{-- <p>برند یا سازنده‌ای با این نام پیدا نشد!</p> --}}
                                    {{-- </div> --}}
                                    {{-- <div class="c-box__divider c-box__divider--full"> --}}
                                    {{-- <div></div> --}}
                                    {{-- </div> --}}
                                    {{-- <div class="c-box__scroll-container"> --}}
                                    {{-- <div class="c-box__scroll js-box-content-items"> --}}
                                    {{-- <ul> --}}
                                    {{-- <li> --}}
                                    {{-- <label class="c-filter__label js-box-content-item" for="seller_condition-param-digikala" data-fa="دیجی‌کالا" data-en="" data-search=" "> --}}
                                    {{-- دیجی‌کالا --}}
                                    {{-- </label> --}}
                                    {{-- <label class="c-ui-checkbox"><input type="checkbox" value="digikala" --}}
                                    {{-- name="seller_condition[]" --}}
                                    {{-- data-search-uid="seller_condition" --}}
                                    {{-- id="seller_condition-param-digikala"><span --}}
                                    {{-- class="c-ui-checkbox__check"></span></label></li> --}}
                                    {{-- <li><label class="c-filter__label js-box-content-item" --}}
                                    {{-- for="seller_condition-param-official" data-fa="فروشنده رسمی برند" data-en="" --}}
                                    {{-- data-search=" "> --}}
                                    {{-- فروشنده رسمی برند --}}
                                    {{-- </label><label class="c-ui-checkbox"><input type="checkbox" value="official" --}}
                                    {{-- name="seller_condition[]" --}}
                                    {{-- data-search-uid="seller_condition" --}}
                                    {{-- id="seller_condition-param-official"><span --}}
                                    {{-- class="c-ui-checkbox__check"></span></label></li> --}}
                                    {{-- <li><label class="c-filter__label js-box-content-item" --}}
                                    {{-- for="seller_condition-param-trusted" data-fa="فروشنده برگزیده" data-en="" --}}
                                    {{-- data-search=" "> --}}
                                    {{-- فروشنده برگزیده --}}
                                    {{-- </label><label class="c-ui-checkbox"><input type="checkbox" value="trusted" --}}
                                    {{-- name="seller_condition[]" --}}
                                    {{-- data-search-uid="seller_condition" --}}
                                    {{-- id="seller_condition-param-trusted"><span --}}
                                    {{-- class="c-ui-checkbox__check"></span></label></li> --}}
                                    {{-- <li><label class="c-filter__label js-box-content-item" for="seller_condition-param-roosta" --}}
                                    {{-- data-fa="کسب و کارهای بومی" data-en="" data-search=" "> --}}
                                    {{-- کسب و کارهای بومی --}}
                                    {{-- </label><label class="c-ui-checkbox"><input type="checkbox" value="roosta" --}}
                                    {{-- name="seller_condition[]" --}}
                                    {{-- data-search-uid="seller_condition" --}}
                                    {{-- id="seller_condition-param-roosta"><span --}}
                                    {{-- class="c-ui-checkbox__check"></span></label></li> --}}
                                    {{-- </ul> --}}
                                    {{-- </div> --}}
                                    {{-- </div> --}}
                                    {{-- </div> --}}
                                    {{-- </div> --}}
                                    {{-- </div> --}}


                                    <script>
                                        var sellerConditionsSectionExists = true;
                                    </script>

                                    <div class="c-box js-ab-sidebar-filter">
                                        <div class="c-filter c-filter--switcher js-box-content-items"><label
                                                class="c-ui-statusswitcher"><input type="checkbox" value="1"
                                                                                   name="has_selling_stock"
                                                                                   id="stock_status-param-1"><span
                                                    class="c-ui-statusswitcher__slider"><span
                                                        class="c-ui-statusswitcher__slider__toggle"></span></span></label>فقط
                                            کالاهای موجود
                                        </div>
                                    </div>
                                    <div class="c-box js-ab-sidebar-filter" id="digikala_fake_section">
                                        <div class="c-filter c-filter--switcher js-box-content-items"><label
                                                class="c-ui-statusswitcher"><input type="checkbox" value="1"
                                                                                   name="only_original"
                                                                                   id="stock_status-param-1"><span
                                                    class="c-ui-statusswitcher__slider"><span
                                                        class="c-ui-statusswitcher__slider__toggle"></span></span></label>فقط
                                            کالاهای اصل
                                        </div>
                                    </div>
                                    <div class="c-box">
                                        <div class="c-box__header c-box__header--toggleable js-box-toggle is-hidden">
                                            محدوده قیمت مورد نظر
                                        </div>
                                        <div class="c-filter c-filter--range js-box-content" style="display: none">
                                            <div class="c-filter__slider">
                                                <div
                                                    class="c-slider js-slider-range noUi-target noUi-rtl noUi-horizontal">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connect" style="right: 0%; left: 0%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="c-filter__range">
                                                <li data-label="از" data-currency=" تومان"><input type="text"
                                                                                                  data-value="0"
                                                                                                  value="0"
                                                                                                  name="price[min]"
                                                                                                  data-range="0"
                                                                                                  class="js-slider-range-from disabled"
                                                                                                  disabled="disabled">
                                                </li>
                                                <li data-label="تا" data-currency="تومان"><input type="text"
                                                                                                 data-value="240000000"
                                                                                                 value="240000000"
                                                                                                 name="price[max]"
                                                                                                 data-range="240000000"
                                                                                                 class="js-slider-range-to disabled"
                                                                                                 disabled="disabled">
                                                </li>
                                            </ul>
                                            <div class="c-filter__action">
                                                <div class="js-box-content-items u-hidden"><input type="checkbox"
                                                                                                  name="price[min]"
                                                                                                  value=""
                                                                                                  class="js-min-price"><input
                                                        type="checkbox" name="price[max]" value=""
                                                        class="js-max-price">
                                                </div>
                                                <button
                                                    class="btn-primary btn-primary--filter js-price-filter disabled">
                                                    اعمال محدوده قیمت
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="c-box c-box--brands-filter js-ab-test-rating u-hidden">
                                        <div class="">
                                            <div class=" c-box__header c-box__header--toggleable
                            js-box-toggle ">امتیاز

                                            </div>
                                            <div class="  c-filter c-filter--params js-box-content">
                                                <div
                                                    class="c-message c-message-light c-message-light--info js-message-error u-hidden">
                                                    <p>برند
                                                        یا سازنده‌ای با این نام پیدا نشد!</p>
                                                </div>
                                                <div class="c-box__divider c-box__divider--full">
                                                    <div></div>
                                                </div>
                                                <div class="c-box__scroll-container">
                                                    <div class="c-box__scroll js-box-content-items">
                                                        <ul>
                                                            <li><label
                                                                    class="c-filter__label c-filter__label--rating js-box-content-item"
                                                                    for="rate_range-param-4" data-fa="4" data-en=""
                                                                    data-search=" "><span
                                                                        class="c-filter__rating c-filter__rating--filled"></span><span
                                                                        class="c-filter__rating c-filter__rating--filled"></span><span
                                                                        class="c-filter__rating c-filter__rating--filled"></span><span
                                                                        class="c-filter__rating c-filter__rating--filled"></span><span
                                                                        class="c-filter__rating"></span>
                                                                    و بیشتر
                                                                </label><label class="c-ui-checkbox"><input
                                                                        type="checkbox" value="4"
                                                                        name="rate_range[]" data-search-uid="rate_range"
                                                                        id="rate_range-param-4"><span
                                                                        class="c-ui-checkbox__check"></span></label>
                                                            </li>
                                                            <li><label
                                                                    class="c-filter__label c-filter__label--rating js-box-content-item"
                                                                    for="rate_range-param-3" data-fa="3" data-en=""
                                                                    data-search=" "><span
                                                                        class="c-filter__rating c-filter__rating--filled"></span><span
                                                                        class="c-filter__rating c-filter__rating--filled"></span><span
                                                                        class="c-filter__rating c-filter__rating--filled"></span><span
                                                                        class="c-filter__rating "></span><span
                                                                        class="c-filter__rating"></span>
                                                                    و بیشتر
                                                                </label><label class="c-ui-checkbox"><input
                                                                        type="checkbox" value="3"
                                                                        name="rate_range[]" data-search-uid="rate_range"
                                                                        id="rate_range-param-3"><span
                                                                        class="c-ui-checkbox__check"></span></label>
                                                            </li>
                                                            <li><label
                                                                    class="c-filter__label c-filter__label--rating js-box-content-item"
                                                                    for="rate_range-param-2" data-fa="2" data-en=""
                                                                    data-search=" "><span
                                                                        class="c-filter__rating c-filter__rating--filled"></span><span
                                                                        class="c-filter__rating c-filter__rating--filled"></span><span
                                                                        class="c-filter__rating "></span><span
                                                                        class="c-filter__rating "></span><span
                                                                        class="c-filter__rating"></span>
                                                                    و بیشتر
                                                                </label><label class="c-ui-checkbox"><input
                                                                        type="checkbox" value="2"
                                                                        name="rate_range[]" data-search-uid="rate_range"
                                                                        id="rate_range-param-2"><span
                                                                        class="c-ui-checkbox__check"></span></label>
                                                            </li>
                                                            <li><label
                                                                    class="c-filter__label c-filter__label--rating js-box-content-item"
                                                                    for="rate_range-param-1" data-fa="1" data-en=""
                                                                    data-search=" "><span
                                                                        class="c-filter__rating c-filter__rating--filled"></span><span
                                                                        class="c-filter__rating "></span><span
                                                                        class="c-filter__rating "></span><span
                                                                        class="c-filter__rating "></span><span
                                                                        class="c-filter__rating"></span>
                                                                    و بیشتر
                                                                </label><label class="c-ui-checkbox"><input
                                                                        type="checkbox" value="1"
                                                                        name="rate_range[]" data-search-uid="rate_range"
                                                                        id="rate_range-param-1"><span
                                                                        class="c-ui-checkbox__check"></span></label>
                                                            </li>
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
                                <article
                                    class="js-products js-sticky-inner-2 c-listing-wrapper
                            c-listing-wrapper--white-breadcrumb"
                                    style="position: relative;">
                                    <nav class="js-breadcrumb ">
                                        <ul vocab="https://schema.org/" typeof="BreadcrumbList" class="c-breadcrumb">
                                            <li property="itemListElement" typeof="ListItem"><a property="item"
                                                                                                typeof="WebPage"
                                                                                                href="https://www.digikala.com"><span
                                                        property="name">فروشگاه اینترنتی
                                        دیجی‌کالا</span></a>
                                                <meta property="position" content="1">
                                            </li>
                                            <li><span property="name">کالای دیجیتال</span></li>
                                        </ul>
                                    </nav>
                                    <div class="c-listing js-listing">
                                        <div class="c-listing__counter">{{ persianNum($products->total()) }} کالا</div>
                                        <div class="c-listing__header">
                                            <ul class="c-listing__sort js-sort-options"
                                                data-label="مرتب‌سازی بر اساس :">
                                                <li class="">
                                                    <a href=" javascript:" data-sort="newest"
                                                       class="is-active">جدیدترین</a>
                                                </li>
                                                <li class="">
                                                    <a href=" javascript:" data-sort="best_selling">
                                                        پرفروش‌ترین‌</a>
                                                </li>
                                                <li class="">
                                                    <a href=" javascript:" data-sort="cheapest">
                                                        ارزان‌ترین</a>
                                                </li>
                                                <li class="">
                                                    <a href=" javascript:" data-sort="most_expensive">
                                                        گران‌ترین</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <ul class="c-listing__items js-plp-products-list">

                                            @foreach ($products as $product)
                                                <li>
                                                    <div
                                                        class="c-product-box c-promotion-box js-product-box has-more is-plp">
                                                        <div
                                                            class="c-product-box__add-to-wish-list js-ab-add-to-wish-list u-hidden"></div>
                                                        <a class="c-product-box__img c-promotion-box__image js-url js-product-item js-product-url"
                                                           target="_blank"
                                                           href="{{ route('front.productPage', $product->product_code) }}">
                                                            @if (isset($product->variants) && has_promotion(variant_defualt($product)))
                                                                <div style=""
                                                                     class="c-promotion__badge c-promotion__badge--special-sale ">
                                                                    فروش ویژه
                                                                </div>
                                                            @endif
                                                            <div class="c-promotion__main-img-badges-container"></div>
                                                            @if (!is_null(g_product_image_main_src($product)))
                                                                <img
                                                                    src="{{ g_product_image_main_src($product) }}?x-oss-process=image/resize,m_lfit,h_600,w_600/quality,q_90"
                                                                    alt="{{ $product->title_fa }}">
                                                            @else
                                                                <img src="" alt="{{ $product->title_fa }}">
                                                            @endif
                                                        </a>
                                                        <div class="c-product-box__content">
                                                            <div class="c-product-box__content--row">
                                                                <div class="c-product-box__title">
                                                                    <a class="js-product-url"
                                                                       href="{{ route('front.productPage', $product->product_code) }}"
                                                                       target="_blank">{{ $product->title_fa }}</a>
                                                                </div>
                                                                <div class="c-product-box__title-en"></div>
                                                                @if (getProductVariantType($product) == 'color')
                                                                    <?php
                                                                    $main_mariants = [];
                                                                    foreach ($product->variants as $variant) {
                                                                        $main_mariants[] = $variant->variant->value;
                                                                    }
                                                                    $main_mariants = array_unique($main_mariants);
                                                                    $count = 0;
                                                                    ?>
                                                                    <ul class="c-product-box__variants"
                                                                        data-title="رنگ ها:"
                                                                        data-more="{{ count($main_mariants) > 3 ? '+' : '' }}">
                                                                        @foreach ($main_mariants as $variantColor)
                                                                            <li class="js-variant">
                                                                <span class="c-variant c-variant--color"
                                                                      style="background-color: {{ $variantColor }};border: 1px solid rgb(233, 233, 233);"></span>
                                                                            </li>
                                                                            <?php
                                                                            $count++;
                                                                            if ($count >= 3) {
                                                                                break;
                                                                            }
                                                                            ?>
                                                                        @endforeach
                                                                    </ul>
                                                                @endif
                                                            </div>
                                                            <div class="c-product-box__rate-status"
                                                                 style="visibility: hidden">
                                                                <div class="c-product-box__engagement-rating">
                                                                    ۳.۴
                                                                    <span class="c-product-box__engagement-rating-num">
                                                                        (۱۴۵)
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            @if (isset($product->variants) && $product->variants()->active()->count())
                                                                <div class="c-product-box__row c-product-box__row--price">
                                                                    <div class="c-price">
                                                                        <div
                                                                            class="c-price__value c-price__value--plp ">
                                                                            @if (isset($product->variants) && has_promotion(variant_defualt($product)))
                                                                                <del>{{ persianNum(number_format(toman(variant_defualt($product)->sale_price))) }}</del>
                                                                                <div class="c-price__discount-oval">
                                                                                    <span>٪{{ persianNum(variantPromotionDefault(variant_defualt($product))->percent) }}</span>
                                                                                </div>
                                                                            @endif
                                                                            <div class="c-price__value-wrapper">
                                                                                {{ persianNum(number_format(toman(product_price($product)))) }}
                                                                                <span
                                                                                    class="c-price__currency">تومان</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <div class="c-product-box__row c-product-box__row--price">
                                                                    <div class="c-price">
                                                                        <div class="c-price__value c-price__value--plp "></div>
                                                                    </div>
                                                                    <div class="c-promotion-box__cover c-promotion-box__cover--out-of-stock">
                                                                        <div class="c-promotion-box__cover-text js-product-status">
                                                                            ناموجود
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif


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
                                            @endforeach

                                        </ul>

                                        <div class="c-pager">
                                            {{ $products->links('layouts.front.pagination', ['route' => route('front.ajax.categoryPage', $slug)]) }}
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                @if (!is_null($cat->description) && $cat->description !== '')
                    <article
                        class="c-category-desc c-expandable-text c-expandable-text--shadowed js-expandable-text-container collapsed">
                        <div class="c-expandable-text__text js-expandable-text">
                            <p>
                                <strong>خرید انواع {{ $cat->name }} از {{ $fa_store_name }}&nbsp;</strong>
                            </p>
                            <p>
                                {{ $cat->description }}
                            </p>

                            <span
                                class="c-expandable-text__expand-btn c-expandable-text__expand-btn--shadowed js-expand-btn"
                                data-collapsed="نمایش بیشتر" data-expanded="بستن"></span>
                        </div>
                    </article>
                @endif
            </div>
        </div>
    </main>

@endsection
