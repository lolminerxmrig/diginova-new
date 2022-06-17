@extends('layouts.front.master')

@section('head')
    <title> {{ $cat->name }} | {{ $fa_store_name }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script>
        var supernova_mode = "production";
        var supernova_tracker_url = "https:\/\/etrackerd.digikala.com\/tracker\/events\/";
        var parameters = {"category_path":"\/category-car-accessory-parts","query":{"sortby":4},"list_view":false};
        var cart = {"cartId":0,"variants":[],"products":[],"itemCount":0,"isPlusUser":false};
        var emarsysCategoryBreadcrumb = "\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc > \u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648";
        var click_impression = [{"id":605575,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0633\u06cc\u0633\u062a\u0645 \u0635\u0648\u062a\u06cc \u0648 \u062a\u0635\u0648\u06cc\u0631\u06cc \u062e\u0648\u062f\u0631\u0648","\u062f\u0633\u062a\u06af\u0627\u0647 \u067e\u062e\u0634 \u062e\u0648\u062f\u0631\u0648"],"supply_category":["AV","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0648\u062a\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc"],"name":"\u067e\u062e\u0634 \u06a9\u0646\u0646\u062f\u0647 \u062e\u0648\u062f\u0631\u0648 \u0633\u0648\u0646\u06cc \u0645\u062f\u0644 DSX-A110U","brand":"Sony","category":"\u062f\u0633\u062a\u06af\u0627\u0647 \u067e\u062e\u0634 \u062e\u0648\u062f\u0631\u0648","category_id":5751,"price_detail":{"selling_price":20000000,"discount_percent":2},"position":1,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":19617215,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/2586774.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-605575\/\u067e\u062e\u0634-\u06a9\u0646\u0646\u062f\u0647-\u062e\u0648\u062f\u0631\u0648-\u0633\u0648\u0646\u06cc-\u0645\u062f\u0644-dsx-a110u","rating":{"rate":86,"count":314},"price":20000000},{"id":3159480,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0633\u06cc\u0633\u062a\u0645 \u0635\u0648\u062a\u06cc \u0648 \u062a\u0635\u0648\u06cc\u0631\u06cc \u062e\u0648\u062f\u0631\u0648","\u062f\u0633\u062a\u06af\u0627\u0647 \u067e\u062e\u0634 \u062e\u0648\u062f\u0631\u0648"],"supply_category":["AV","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0648\u062a\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc"],"name":"\u067e\u062e\u0634 \u06a9\u0646\u0646\u062f\u0647 \u062e\u0648\u062f\u0631\u0648 \u067e\u0627\u0646\u0627\u062a\u06a9 \u0645\u062f\u0644 P-CP201","brand":"Panatech","category":"\u062f\u0633\u062a\u06af\u0627\u0647 \u067e\u062e\u0634 \u062e\u0648\u062f\u0631\u0648","category_id":5751,"price_detail":{"selling_price":3948500,"discount_percent":0},"position":2,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":19890554,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/ba936343ce5a953c6d36266c3dbdb43b47c65da3_1595935402.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3159480\/\u067e\u062e\u0634-\u06a9\u0646\u0646\u062f\u0647-\u062e\u0648\u062f\u0631\u0648-\u067e\u0627\u0646\u0627\u062a\u06a9-\u0645\u062f\u0644-p-cp201","rating":{"rate":74,"count":149},"price":3948500},{"id":131958,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0633\u06cc\u0633\u062a\u0645 \u0635\u0648\u062a\u06cc \u0648 \u062a\u0635\u0648\u06cc\u0631\u06cc \u062e\u0648\u062f\u0631\u0648","\u0628\u0644\u0646\u062f\u06af\u0648\u06cc \u062e\u0648\u062f\u0631\u0648"],"supply_category":["AV","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0648\u062a\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc"],"name":"\u0627\u0633\u067e\u06cc\u06a9\u0631 \u062e\u0648\u062f\u0631\u0648 \u067e\u0627\u06cc\u0648\u0646\u06cc\u0631 \u0645\u062f\u0644 TS-6975 V3","brand":"Pioneer","category":"\u0628\u0644\u0646\u062f\u06af\u0648\u06cc \u062e\u0648\u062f\u0631\u0648","category_id":5752,"price_detail":{"selling_price":29450000,"discount_percent":0},"position":3,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":21468645,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/400083.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-131958\/\u0627\u0633\u067e\u06cc\u06a9\u0631-\u062e\u0648\u062f\u0631\u0648-\u067e\u0627\u06cc\u0648\u0646\u06cc\u0631-\u0645\u062f\u0644-ts-6975-v3","rating":{"rate":78,"count":241},"price":29450000},{"id":2403842,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0633\u06cc\u0633\u062a\u0645 \u0635\u0648\u062a\u06cc \u0648 \u062a\u0635\u0648\u06cc\u0631\u06cc \u062e\u0648\u062f\u0631\u0648","\u062f\u0633\u062a\u06af\u0627\u0647 \u067e\u062e\u0634 \u062e\u0648\u062f\u0631\u0648"],"supply_category":["AV","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0648\u062a\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc"],"name":"\u067e\u062e\u0634 \u06a9\u0646\u0646\u062f\u0647 \u062e\u0648\u062f\u0631\u0648  \u067e\u0627\u06cc\u0648\u0646\u0631 \u0645\u062f\u0644 IR22-P","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u062f\u0633\u062a\u06af\u0627\u0647 \u067e\u062e\u0634 \u062e\u0648\u062f\u0631\u0648","category_id":5751,"price_detail":{"selling_price":1450000,"discount_percent":0},"position":4,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":6956750,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/119078866.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-2403842\/\u067e\u062e\u0634-\u06a9\u0646\u0646\u062f\u0647-\u062e\u0648\u062f\u0631\u0648-\u067e\u0627\u06cc\u0648\u0646\u0631-\u0645\u062f\u0644-ir22-p","rating":{"rate":68,"count":123},"price":1450000},{"id":3628094,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0633\u06cc\u0633\u062a\u0645 \u0635\u0648\u062a\u06cc \u0648 \u062a\u0635\u0648\u06cc\u0631\u06cc \u062e\u0648\u062f\u0631\u0648","\u062f\u0633\u062a\u06af\u0627\u0647 \u067e\u062e\u0634 \u062e\u0648\u062f\u0631\u0648"],"supply_category":["AV","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0648\u062a\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc"],"name":"\u067e\u062e\u0634 \u06a9\u0646\u0646\u062f\u0647 \u062e\u0648\u062f\u0631\u0648 \u0645\u062f\u0644 JSD-520","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u062f\u0633\u062a\u06af\u0627\u0647 \u067e\u062e\u0634 \u062e\u0648\u062f\u0631\u0648","category_id":5751,"price_detail":{"selling_price":4400000,"discount_percent":0},"position":5,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":13043256,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/97892329e944f5df7f1aeb592b2d124dfddc70c5_1603790374.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3628094\/\u067e\u062e\u0634-\u06a9\u0646\u0646\u062f\u0647-\u062e\u0648\u062f\u0631\u0648-\u0645\u062f\u0644-jsd-520","rating":{"rate":76,"count":148},"price":4400000},{"id":6518344,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0633\u06cc\u0633\u062a\u0645 \u0635\u0648\u062a\u06cc \u0648 \u062a\u0635\u0648\u06cc\u0631\u06cc \u062e\u0648\u062f\u0631\u0648","\u062f\u0633\u062a\u06af\u0627\u0647 \u067e\u062e\u0634 \u062e\u0648\u062f\u0631\u0648"],"supply_category":["AV","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0648\u062a\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc"],"name":"\u067e\u062e\u0634 \u06a9\u0646\u0646\u062f\u0647 \u062e\u0648\u062f\u0631\u0648 \u0633\u0646\u0627\u062a\u0648\u0631 \u0645\u062f\u0644 ST-1130","brand":"Senator","category":"\u062f\u0633\u062a\u06af\u0627\u0647 \u067e\u062e\u0634 \u062e\u0648\u062f\u0631\u0648","category_id":5751,"price_detail":{"selling_price":6100000,"discount_percent":0},"position":6,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":23412770,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/5c88361256edbe26654145a27f98bf5408040e35_1632214360.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-6518344\/\u067e\u062e\u0634-\u06a9\u0646\u0646\u062f\u0647-\u062e\u0648\u062f\u0631\u0648-\u0633\u0646\u0627\u062a\u0648\u0631-\u0645\u062f\u0644-st-1130","rating":{"rate":86,"count":34},"price":6100000},{"id":56708,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0646\u0638\u0627\u0641\u062a \u0648 \u0646\u06af\u0647\u062f\u0627\u0631\u06cc \u062e\u0648\u062f\u0631\u0648","\u06a9\u0627\u0631\u0648\u0627\u0634"],"supply_category":["TC","\u0627\u0628\u0632\u0627\u0631 \u0628\u0631\u0642\u06cc"],"name":"\u06a9\u0627\u0631\u0648\u0627\u0634 \u0631\u0648\u0646\u06cc\u06a9\u0633 \u0645\u062f\u0644 RP-U100","brand":"\u0631\u0648\u0646\u06cc\u06a9\u0633","category":"\u06a9\u0627\u0631\u0648\u0627\u0634","category_id":6184,"price_detail":{"selling_price":24100000,"discount_percent":0},"position":7,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":23318407,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/446884.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-56708\/\u06a9\u0627\u0631\u0648\u0627\u0634-\u0631\u0648\u0646\u06cc\u06a9\u0633-\u0645\u062f\u0644-rp-u100","rating":{"rate":82,"count":174},"price":24100000},{"id":4372718,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0633\u06cc\u0633\u062a\u0645 \u0635\u0648\u062a\u06cc \u0648 \u062a\u0635\u0648\u06cc\u0631\u06cc \u062e\u0648\u062f\u0631\u0648","\u062f\u0633\u062a\u06af\u0627\u0647 \u067e\u062e\u0634 \u062e\u0648\u062f\u0631\u0648"],"supply_category":["AV","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0648\u062a\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc"],"name":"\u067e\u062e\u0634 \u06a9\u0646\u0646\u062f\u0647 \u062e\u0648\u062f\u0631\u0648 \u0645\u062f\u0644 \u0645\u0627\u0646\u06cc\u062a\u0648\u0631 206","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u062f\u0633\u062a\u06af\u0627\u0647 \u067e\u062e\u0634 \u062e\u0648\u062f\u0631\u0648","category_id":5751,"price_detail":{"selling_price":27500000,"discount_percent":0},"position":8,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":19622058,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/a396f1472808ce10e27c7199f9e2c837ee6d2534_1612213355.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-4372718\/\u0645\u0627\u0646\u06cc\u062a\u0648\u0631-\u0641\u0627\u0628\u0631\u06cc\u06a9-\u0627\u0646\u062f\u0631\u0648\u06cc\u062f-\u0645\u062f\u0644-206","rating":{"rate":74,"count":11},"price":27500000},{"id":5206106,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0633\u06cc\u0633\u062a\u0645 \u0635\u0648\u062a\u06cc \u0648 \u062a\u0635\u0648\u06cc\u0631\u06cc \u062e\u0648\u062f\u0631\u0648","\u062f\u0633\u062a\u06af\u0627\u0647 \u067e\u062e\u0634 \u062e\u0648\u062f\u0631\u0648"],"supply_category":["AV","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0648\u062a\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc"],"name":"\u067e\u062e\u0634 \u06a9\u0646\u0646\u062f\u0647 \u062e\u0648\u062f\u0631\u0648 \u067e\u0627\u0646\u0627\u062a\u06a9 \u0645\u062f\u0644 P-CP208P","brand":"Panatech","category":"\u062f\u0633\u062a\u06af\u0627\u0647 \u067e\u062e\u0634 \u062e\u0648\u062f\u0631\u0648","category_id":5751,"price_detail":{"selling_price":3832600,"discount_percent":0},"position":9,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":17162033,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/2db7586d7ffcb027d86925fa2fe63ee36c5d053b_1621342085.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-5206106\/\u067e\u062e\u0634-\u06a9\u0646\u0646\u062f\u0647-\u062e\u0648\u062f\u0631\u0648-\u067e\u0627\u0646\u0627\u062a\u06a9-\u0645\u062f\u0644-p-cp208p","rating":{"rate":74,"count":28},"price":3832600},{"id":170935,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0633\u06cc\u0633\u062a\u0645 \u0635\u0648\u062a\u06cc \u0648 \u062a\u0635\u0648\u06cc\u0631\u06cc \u062e\u0648\u062f\u0631\u0648","\u0628\u0644\u0646\u062f\u06af\u0648\u06cc \u062e\u0648\u062f\u0631\u0648"],"supply_category":["AV","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0648\u062a\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc"],"name":"\u0627\u0633\u067e\u06cc\u06a9\u0631 \u062e\u0648\u062f\u0631\u0648 \u067e\u0627\u06cc\u0648\u0646\u06cc\u0631 \u0645\u062f\u0644 TS-R6951S","brand":"Pioneer","category":"\u0628\u0644\u0646\u062f\u06af\u0648\u06cc \u062e\u0648\u062f\u0631\u0648","category_id":5752,"price_detail":{"selling_price":13490500,"discount_percent":0},"position":10,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":15854405,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/587296.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-170935\/\u0627\u0633\u067e\u06cc\u06a9\u0631-\u062e\u0648\u062f\u0631\u0648-\u067e\u0627\u06cc\u0648\u0646\u06cc\u0631-\u0645\u062f\u0644-ts-r6951s","rating":{"rate":82,"count":244},"price":13490500},{"id":1532347,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0644\u0648\u0627\u0632\u0645 \u062a\u0632\u0626\u06cc\u0646\u06cc \u062e\u0648\u062f\u0631\u0648","\u06a9\u0641\u067e\u0648\u0634 \u062e\u0648\u062f\u0631\u0648"],"supply_category":["TC","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0645\u0648\u062a\u0648\u0631\u0633\u06cc\u06a9\u0644\u062a"],"name":"\u06a9\u0641\u067e\u0648\u0634 \u0633\u0647 \u0628\u0639\u062f\u06cc ( \u067e\u0644\u06cc \u0627\u0648\u0631\u062a\u0627\u0646 ) \u062e\u0648\u062f\u0631\u0648 \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u067e\u0698\u0648 405 \u060c \u067e\u0698\u0648 \u067e\u0627\u0631\u0633 \u0648 \u0633\u0645\u0646\u062f","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u06a9\u0641\u067e\u0648\u0634 \u062e\u0648\u062f\u0631\u0648","category_id":8270,"price_detail":{"selling_price":1035000,"discount_percent":7},"position":11,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":4935672,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/110700040.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-1532347\/\u06a9\u0641\u067e\u0648\u0634-\u0633\u0647-\u0628\u0639\u062f\u06cc-\u067e\u0644\u06cc-\u0627\u0648\u0631\u062a\u0627\u0646-\u062e\u0648\u062f\u0631\u0648-\u0645\u0646\u0627\u0633\u0628-\u0628\u0631\u0627\u06cc-\u067e\u0698\u0648-405-\u067e\u0698\u0648-\u067e\u0627\u0631\u0633-\u0648-\u0633\u0645\u0646\u062f","rating":{"rate":72,"count":1139},"price":1035000},{"id":807351,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0644\u0648\u0627\u0632\u0645 \u062a\u0632\u0626\u06cc\u0646\u06cc \u062e\u0648\u062f\u0631\u0648","\u06a9\u0641\u067e\u0648\u0634 \u062e\u0648\u062f\u0631\u0648"],"supply_category":["TC","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0645\u0648\u062a\u0648\u0631\u0633\u06cc\u06a9\u0644\u062a"],"name":"\u06a9\u0641\u067e\u0648\u0634 \u0633\u0647 \u0628\u0639\u062f\u06cc \u062e\u0648\u062f\u0631\u0648 \u0645\u0627\u0647\u0648\u062a \u0645\u062f\u0644 \u0627\u06a9\u0648 \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u067e\u0631\u0627\u06cc\u062f \u062a\u06cc\u0628\u0627 \u0633\u0627\u06cc\u0646\u0627","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u06a9\u0641\u067e\u0648\u0634 \u062e\u0648\u062f\u0631\u0648","category_id":8270,"price_detail":{"selling_price":1120000,"discount_percent":0},"position":12,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":13526799,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/3695269.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-807351\/\u06a9\u0641\u067e\u0648\u0634-\u0633\u0647-\u0628\u0639\u062f\u06cc-\u062e\u0648\u062f\u0631\u0648-\u0645\u0627\u0647\u0648\u062a-\u0645\u062f\u0644-\u0627\u06a9\u0648-\u0645\u0646\u0627\u0633\u0628-\u0628\u0631\u0627\u06cc-\u067e\u0631\u0627\u06cc\u062f-\u062a\u06cc\u0628\u0627-\u0633\u0627\u06cc\u0646\u0627","rating":{"rate":72,"count":863},"price":1120000},{"id":340984,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0627\u0628\u0632\u0627\u0631 \u062e\u0648\u062f\u0631\u0648","\u06a9\u0645\u067e\u0631\u0633\u0648\u0631 \u0647\u0648\u0627"],"supply_category":["TC","\u0627\u0628\u0632\u0627\u0631 \u0628\u0631\u0642\u06cc"],"name":"\u06a9\u0645\u067e\u0631\u0633\u0648\u0631 \u0628\u0627\u062f \u0641\u0646\u062f\u06a9\u06cc \u0627\u06cc\u06a9\u0633 \u0648\u0627\u0646 \u0645\u062f\u0644 BOHO","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u06a9\u0645\u067e\u0631\u0633\u0648\u0631 \u0647\u0648\u0627","category_id":6191,"price_detail":{"selling_price":9385000,"discount_percent":0},"position":13,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":2007926,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/1937217.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-340984\/\u06a9\u0645\u067e\u0631\u0633\u0648\u0631-\u0628\u0627\u062f-\u0641\u0646\u062f\u06a9\u06cc-\u0627\u06cc\u06a9\u0633-\u0648\u0627\u0646-\u0645\u062f\u0644-boho","rating":{"rate":76,"count":890},"price":9385000},{"id":2253534,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0644\u0648\u0627\u0632\u0645 \u062a\u0632\u0626\u06cc\u0646\u06cc \u062e\u0648\u062f\u0631\u0648","\u0631\u0648\u06a9\u0634 \u0635\u0646\u062f\u0644\u06cc \u062e\u0648\u062f\u0631\u0648"],"supply_category":["TC","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0645\u0648\u062a\u0648\u0631\u0633\u06cc\u06a9\u0644\u062a"],"name":"\u0631\u0648\u06a9\u0634 \u0635\u0646\u062f\u0644\u06cc \u062e\u0648\u062f\u0631\u0648 \u0645\u062f\u0644 2002 \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u067e\u0631\u0627\u06cc\u062f \u0635\u0628\u0627","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u0631\u0648\u06a9\u0634 \u0635\u0646\u062f\u0644\u06cc \u062e\u0648\u062f\u0631\u0648","category_id":8185,"price_detail":{"selling_price":2200000,"discount_percent":0},"position":14,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":6421502,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/117259288.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-2253534\/\u0631\u0648\u06a9\u0634-\u0635\u0646\u062f\u0644\u06cc-\u062e\u0648\u062f\u0631\u0648-\u0645\u062f\u0644-2002-\u0645\u0646\u0627\u0633\u0628-\u0628\u0631\u0627\u06cc-\u067e\u0631\u0627\u06cc\u062f-\u0635\u0628\u0627","rating":{"rate":64,"count":495},"price":2200000},{"id":4961602,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0633\u06cc\u0633\u062a\u0645 \u0635\u0648\u062a\u06cc \u0648 \u062a\u0635\u0648\u06cc\u0631\u06cc \u062e\u0648\u062f\u0631\u0648","\u062f\u0633\u062a\u06af\u0627\u0647 \u067e\u062e\u0634 \u062e\u0648\u062f\u0631\u0648"],"supply_category":["AV","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0648\u062a\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc"],"name":"\u067e\u062e\u0634 \u06a9\u0646\u0646\u062f\u0647 \u062e\u0648\u062f\u0631\u0648 \u0633\u0646\u0627\u062a\u0648\u0631 \u0645\u062f\u0644 ST-1067-PRO","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u062f\u0633\u062a\u06af\u0627\u0647 \u067e\u062e\u0634 \u062e\u0648\u062f\u0631\u0648","category_id":5751,"price_detail":{"selling_price":6990000,"discount_percent":0},"position":15,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":20939279,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/e64f058e01a7b359ad783f1c8ab63c302b86f38f_1618945733.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-4961602\/\u067e\u062e\u0634-\u06a9\u0646\u0646\u062f\u0647-\u062e\u0648\u062f\u0631\u0648-\u0633\u0646\u0627\u062a\u0648\u0631-\u0645\u062f\u0644-st-1067-pro","rating":{"rate":78,"count":15},"price":6990000},{"id":3620772,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0633\u06cc\u0633\u062a\u0645 \u0635\u0648\u062a\u06cc \u0648 \u062a\u0635\u0648\u06cc\u0631\u06cc \u062e\u0648\u062f\u0631\u0648","\u062f\u0633\u062a\u06af\u0627\u0647 \u067e\u062e\u0634 \u062e\u0648\u062f\u0631\u0648"],"supply_category":["AV","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0648\u062a\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc"],"name":"\u067e\u062e\u0634 \u06a9\u0646\u0646\u062f\u0647 \u062e\u0648\u062f\u0631\u0648 \u06a9\u0627\u0631\u0648\u0632\u0631\u06cc\u0627 \u0645\u062f\u0644 CRX-2020","brand":"Carozeria","category":"\u062f\u0633\u062a\u06af\u0627\u0647 \u067e\u062e\u0634 \u062e\u0648\u062f\u0631\u0648","category_id":5751,"price_detail":{"selling_price":3400000,"discount_percent":0},"position":16,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":11654232,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/dae2de1685cfbf08c54b1b896ed4581d8ce86080_1603707181.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3620772\/\u067e\u062e\u0634-\u06a9\u0646\u0646\u062f\u0647-\u062e\u0648\u062f\u0631\u0648-\u06a9\u0627\u0631\u0648\u0632\u0631\u06cc\u0627-\u0645\u062f\u0644-crx-2020","rating":{"rate":74,"count":56},"price":3400000},{"id":1481442,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0644\u0648\u0627\u0632\u0645 \u062a\u0632\u0626\u06cc\u0646\u06cc \u062e\u0648\u062f\u0631\u0648","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0646\u0638\u0645 \u062f\u0647\u0646\u062f\u0647 \u062f\u0627\u062e\u0644 \u062e\u0648\u062f\u0631\u0648"],"supply_category":["TC","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0645\u0648\u062a\u0648\u0631\u0633\u06cc\u06a9\u0644\u062a"],"name":"\u062c\u0627\u06cc \u062f\u0633\u062a\u0645\u0627\u0644 \u06a9\u0627\u063a\u0630\u06cc \u062e\u0648\u062f\u0631\u0648 \u0622\u06cc\u0644\u06cc\u0646 \u06a9\u062f 9101131","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0646\u0638\u0645 \u062f\u0647\u0646\u062f\u0647 \u062f\u0627\u062e\u0644 \u062e\u0648\u062f\u0631\u0648","category_id":8369,"price_detail":{"selling_price":205000,"discount_percent":0},"position":17,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":18729948,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/110560997.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-1481442\/\u062c\u0627\u06cc-\u062f\u0633\u062a\u0645\u0627\u0644-\u06a9\u0627\u063a\u0630\u06cc-\u062e\u0648\u062f\u0631\u0648-\u0622\u06cc\u0644\u06cc\u0646-\u06a9\u062f-9101131","rating":{"rate":78,"count":4627},"price":205000},{"id":1662486,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0633\u06cc\u0633\u062a\u0645 \u0635\u0648\u062a\u06cc \u0648 \u062a\u0635\u0648\u06cc\u0631\u06cc \u062e\u0648\u062f\u0631\u0648","\u062f\u0633\u062a\u06af\u0627\u0647 \u067e\u062e\u0634 \u062e\u0648\u062f\u0631\u0648"],"supply_category":["AV","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0648\u062a\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc"],"name":"\u067e\u062e\u0634 \u06a9\u0646\u0646\u062f\u0647 \u062e\u0648\u062f\u0631\u0648 \u0633\u0648\u0646\u06cc \u0645\u062f\u0644 DSX-A410BT","brand":"Sony","category":"\u062f\u0633\u062a\u06af\u0627\u0647 \u067e\u062e\u0634 \u062e\u0648\u062f\u0631\u0648","category_id":5751,"price_detail":{"selling_price":26450000,"discount_percent":0},"position":18,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":19041502,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/111400414.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-1662486\/\u067e\u062e\u0634-\u06a9\u0646\u0646\u062f\u0647-\u062e\u0648\u062f\u0631\u0648-\u0633\u0648\u0646\u06cc-\u0645\u062f\u0644-dsx-a410bt","rating":{"rate":88,"count":122},"price":26450000},{"id":2542738,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0644\u0648\u0627\u0632\u0645 \u062a\u0632\u0626\u06cc\u0646\u06cc \u062e\u0648\u062f\u0631\u0648","\u0631\u0648\u06a9\u0634 \u0635\u0646\u062f\u0644\u06cc \u062e\u0648\u062f\u0631\u0648"],"supply_category":["TC","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0645\u0648\u062a\u0648\u0631\u0633\u06cc\u06a9\u0644\u062a"],"name":"\u0631\u0648\u06a9\u0634 \u0635\u0646\u062f\u0644\u06cc \u062e\u0648\u062f\u0631\u0648 \u0645\u062f\u0644 4004 \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u067e\u0631\u0627\u06cc\u062f","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u0631\u0648\u06a9\u0634 \u0635\u0646\u062f\u0644\u06cc \u062e\u0648\u062f\u0631\u0648","category_id":8185,"price_detail":{"selling_price":3250000,"discount_percent":0},"position":19,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":7480956,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/a72ee2cbdc871e968fbbd728d41b4e5d4d9c53bc_1613540135.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-2542738\/\u0631\u0648\u06a9\u0634-\u0635\u0646\u062f\u0644\u06cc-\u062e\u0648\u062f\u0631\u0648-\u0645\u062f\u0644-4004-\u0645\u0646\u0627\u0633\u0628-\u0628\u0631\u0627\u06cc-\u067e\u0631\u0627\u06cc\u062f","rating":{"rate":66,"count":252},"price":3250000},{"id":3729933,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0633\u06cc\u0633\u062a\u0645 \u0635\u0648\u062a\u06cc \u0648 \u062a\u0635\u0648\u06cc\u0631\u06cc \u062e\u0648\u062f\u0631\u0648","\u062f\u0633\u062a\u06af\u0627\u0647 \u067e\u062e\u0634 \u062e\u0648\u062f\u0631\u0648"],"supply_category":["AV","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0648\u062a\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc"],"name":"\u067e\u062e\u0634 \u06a9\u0646\u0646\u062f\u0647 \u062e\u0648\u062f\u0631\u0648 \u0646\u0627\u06a9\u0627\u0645\u06cc\u0686\u06cc \u0645\u062f\u0644 NQ711b","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u062f\u0633\u062a\u06af\u0627\u0647 \u067e\u062e\u0634 \u062e\u0648\u062f\u0631\u0648","category_id":5751,"price_detail":{"selling_price":10900000,"discount_percent":0},"position":20,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":23580959,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/dee636fb910a7c0252fbb40020d6faf698602f17_1605024182.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3729933\/\u067e\u062e\u0634-\u06a9\u0646\u0646\u062f\u0647-\u062e\u0648\u062f\u0631\u0648-\u0646\u0627\u06a9\u0627\u0645\u06cc\u0686\u06cc-\u0645\u062f\u0644-nq711b","rating":{"rate":80,"count":69},"price":10900000},{"id":1007488,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0633\u06cc\u0633\u062a\u0645 \u0635\u0648\u062a\u06cc \u0648 \u062a\u0635\u0648\u06cc\u0631\u06cc \u062e\u0648\u062f\u0631\u0648","\u0645\u0633\u06cc\u0631\u06cc\u0627\u0628 \u062e\u0648\u062f\u0631\u0648"],"supply_category":["TC","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0645\u0648\u062a\u0648\u0631\u0633\u06cc\u06a9\u0644\u062a"],"name":"\u0631\u062f\u06cc\u0627\u0628 \u0634\u062e\u0635\u06cc \u0648 \u0622\u0647\u0646\u0631\u0628\u0627\u06cc\u06cc \u0645\u062f\u0644 fat122","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u0645\u0633\u06cc\u0631\u06cc\u0627\u0628 \u062e\u0648\u062f\u0631\u0648","category_id":8350,"price_detail":{"selling_price":6600000,"discount_percent":0},"position":21,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":17477577,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/4732617.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-1007488\/\u0631\u062f\u06cc\u0627\u0628-\u0634\u062e\u0635\u06cc-\u0648-\u0622\u0647\u0646\u0631\u0628\u0627\u06cc\u06cc-\u0645\u062f\u0644-fat122","rating":{"rate":58,"count":33},"price":6600000},{"id":334883,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0646\u0638\u0627\u0641\u062a \u0648 \u0646\u06af\u0647\u062f\u0627\u0631\u06cc \u062e\u0648\u062f\u0631\u0648","\u06a9\u0627\u0631\u0648\u0627\u0634"],"supply_category":["TC","\u0627\u0628\u0632\u0627\u0631 \u0628\u0631\u0642\u06cc"],"name":"\u06a9\u0627\u0631\u0648\u0627\u0634 \u0627\u06cc\u0632\u06cc \u062c\u062a \u0645\u062f\u0644 1001","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u06a9\u0627\u0631\u0648\u0627\u0634","category_id":6184,"price_detail":{"selling_price":1103400,"discount_percent":0},"position":22,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":7534530,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/2046301.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-334883\/\u06a9\u0627\u0631\u0648\u0627\u0634-\u0627\u06cc\u0632\u06cc-\u062c\u062a-\u0645\u062f\u0644-1001","rating":{"rate":70,"count":397},"price":1103400},{"id":4187159,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0633\u06cc\u0633\u062a\u0645 \u0635\u0648\u062a\u06cc \u0648 \u062a\u0635\u0648\u06cc\u0631\u06cc \u062e\u0648\u062f\u0631\u0648","\u0628\u0644\u0646\u062f\u06af\u0648\u06cc \u062e\u0648\u062f\u0631\u0648"],"supply_category":["AV","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0648\u062a\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc"],"name":"\u0645\u06cc\u062f\u0631\u0646\u062c \u062e\u0648\u062f\u0631\u0648 \u0645\u0648\u0631\u0644\u00a0\u0645\u062f\u0644  ML-8","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u0628\u0644\u0646\u062f\u06af\u0648\u06cc \u062e\u0648\u062f\u0631\u0648","category_id":5752,"price_detail":{"selling_price":3356500,"discount_percent":33},"position":23,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":13519330,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/e3cdacf0f0de35fbd61f73dd99455f2ec0ae5a23_1610201717.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-4187159\/\u0645\u06cc\u062f\u0631\u0646\u062c-\u062e\u0648\u062f\u0631\u0648-\u0645\u0648\u0631\u0644-\u0645\u062f\u0644-ml-8","rating":{"rate":76,"count":22},"price":3356500},{"id":4164693,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0644\u0648\u0627\u0632\u0645 \u062a\u0632\u0626\u06cc\u0646\u06cc \u062e\u0648\u062f\u0631\u0648","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0646\u0638\u0645 \u062f\u0647\u0646\u062f\u0647 \u062f\u0627\u062e\u0644 \u062e\u0648\u062f\u0631\u0648"],"supply_category":["TC","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0645\u0648\u062a\u0648\u0631\u0633\u06cc\u06a9\u0644\u062a"],"name":"\u062c\u0639\u0628\u0647 \u0646\u0638\u0645 \u062f\u0647\u0646\u062f\u0647 \u0635\u0646\u062f\u0648\u0642 \u0639\u0642\u0628 \u062e\u0648\u062f\u0631\u0648 \u0646\u06cc\u0627\u0632\u0634\u0627\u067e \u0645\u062f\u0644 NPR891","brand":"\u0646\u06cc\u0627\u0632\u0634\u0627\u067e","category":"\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0646\u0638\u0645 \u062f\u0647\u0646\u062f\u0647 \u062f\u0627\u062e\u0644 \u062e\u0648\u062f\u0631\u0648","category_id":8369,"price_detail":{"selling_price":1350000,"discount_percent":49},"position":24,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":14696806,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/994d01179d743dd38badfd62c50418f590638633_1609788871.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-4164693\/\u062c\u0639\u0628\u0647-\u0646\u0638\u0645-\u062f\u0647\u0646\u062f\u0647-\u0635\u0646\u062f\u0648\u0642-\u0639\u0642\u0628-\u062e\u0648\u062f\u0631\u0648-\u0646\u06cc\u0627\u0632\u0634\u0627\u067e-\u0645\u062f\u0644-npr891","rating":{"rate":72,"count":161},"price":1350000},{"id":964055,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0644\u0648\u0627\u0632\u0645 \u062a\u0632\u0626\u06cc\u0646\u06cc \u062e\u0648\u062f\u0631\u0648","\u0631\u0648\u06a9\u0634 \u0641\u0631\u0645\u0627\u0646"],"supply_category":["TC","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0645\u0648\u062a\u0648\u0631\u0633\u06cc\u06a9\u0644\u062a"],"name":"\u0631\u0648\u06a9\u0634 \u0641\u0631\u0645\u0627\u0646 \u06a9\u062f 16","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u0631\u0648\u06a9\u0634 \u0641\u0631\u0645\u0627\u0646","category_id":8336,"price_detail":{"selling_price":160000,"discount_percent":0},"position":25,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":15371041,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/4506389.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-964055\/\u0631\u0648\u06a9\u0634-\u0641\u0631\u0645\u0627\u0646-\u06a9\u062f-16","rating":{"rate":78,"count":2183},"price":160000},{"id":528576,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0644\u0648\u0627\u0632\u0645 \u062a\u0632\u0626\u06cc\u0646\u06cc \u062e\u0648\u062f\u0631\u0648","\u06a9\u0641\u067e\u0648\u0634 \u062e\u0648\u062f\u0631\u0648"],"supply_category":["TC","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0645\u0648\u062a\u0648\u0631\u0633\u06cc\u06a9\u0644\u062a"],"name":"\u06a9\u0641\u067e\u0648\u0634 \u0633\u0647 \u0628\u0639\u062f\u06cc \u062e\u0648\u062f\u0631\u0648 \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u067e\u0631\u0627\u06cc\u062f","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u06a9\u0641\u067e\u0648\u0634 \u062e\u0648\u062f\u0631\u0648","category_id":8270,"price_detail":{"selling_price":1000000,"discount_percent":0},"position":26,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":11602248,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/3422186.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-528576\/\u06a9\u0641\u067e\u0648\u0634-\u0633\u0647-\u0628\u0639\u062f\u06cc-\u062e\u0648\u062f\u0631\u0648-\u0645\u0646\u0627\u0633\u0628-\u0628\u0631\u0627\u06cc-\u067e\u0631\u0627\u06cc\u062f","rating":{"rate":74,"count":472},"price":1000000},{"id":3579724,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0633\u06cc\u0633\u062a\u0645 \u0635\u0648\u062a\u06cc \u0648 \u062a\u0635\u0648\u06cc\u0631\u06cc \u062e\u0648\u062f\u0631\u0648","\u0628\u0644\u0646\u062f\u06af\u0648\u06cc \u062e\u0648\u062f\u0631\u0648"],"supply_category":["AV","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0648\u062a\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc"],"name":"\u0627\u0633\u067e\u06cc\u06a9\u0631 \u062e\u0648\u062f\u0631\u0648 \u0633\u06cc\u0644\u062a\u0631\u0648\u0646 \u0645\u062f\u0644 PS1301 \u0628\u0633\u062a\u0647 \u062f\u0648 \u0639\u062f\u062f\u06cc","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u0628\u0644\u0646\u062f\u06af\u0648\u06cc \u062e\u0648\u062f\u0631\u0648","category_id":5752,"price_detail":{"selling_price":1790000,"discount_percent":0},"position":27,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":23581861,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/d949e38f1a5e1d57fb6c3897a4aa26c2a2bd2bca_1603113727.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3579724\/\u0627\u0633\u067e\u06cc\u06a9\u0631-\u062e\u0648\u062f\u0631\u0648-\u0633\u06cc\u0644\u062a\u0631\u0648\u0646-\u0645\u062f\u0644-ps1301-\u0628\u0633\u062a\u0647-\u062f\u0648-\u0639\u062f\u062f\u06cc","rating":{"rate":76,"count":157},"price":1790000},{"id":4196408,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0633\u06cc\u0633\u062a\u0645 \u0635\u0648\u062a\u06cc \u0648 \u062a\u0635\u0648\u06cc\u0631\u06cc \u062e\u0648\u062f\u0631\u0648","\u062f\u0633\u062a\u06af\u0627\u0647 \u067e\u062e\u0634 \u062e\u0648\u062f\u0631\u0648"],"supply_category":["AV","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0648\u062a\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc"],"name":"\u067e\u062e\u0634 \u06a9\u0646\u0646\u062f\u0647 \u062e\u0648\u062f\u0631\u0648 \u067e\u0627\u0646\u0627\u062a\u06a9 \u0645\u062f\u0644 P-CP203","brand":"Panatech","category":"\u062f\u0633\u062a\u06af\u0627\u0647 \u067e\u062e\u0634 \u062e\u0648\u062f\u0631\u0648","category_id":5751,"price_detail":{"selling_price":4250000,"discount_percent":4},"position":28,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":21742500,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/9c694f88d5fb6746ccb5b474e03713c4a504ca67_1610197529.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-4196408\/\u067e\u062e\u0634-\u06a9\u0646\u0646\u062f\u0647-\u062e\u0648\u062f\u0631\u0648-\u067e\u0627\u0646\u0627\u062a\u06a9-\u0645\u062f\u0644-p-cp203","rating":{"rate":78,"count":139},"price":4250000},{"id":3575332,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0644\u0648\u0627\u0632\u0645 \u062a\u0632\u0626\u06cc\u0646\u06cc \u062e\u0648\u062f\u0631\u0648","\u0633\u0631 \u0627\u06af\u0632\u0648\u0632"],"supply_category":["TC","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0645\u0648\u062a\u0648\u0631\u0633\u06cc\u06a9\u0644\u062a"],"name":"\u0645\u0646\u0628\u0639 \u0627\u06af\u0632\u0648\u0632 \u0645\u062f\u0644 B420","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u0633\u0631 \u0627\u06af\u0632\u0648\u0632","category_id":8716,"price_detail":{"selling_price":2810000,"discount_percent":0},"position":29,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":23841568,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/31e53aaf9b29c4d6bad8cc2412d6a4204dfe06c6_1618315206.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3575332\/\u0645\u0646\u0628\u0639-\u0627\u06af\u0632\u0648\u0632-\u0645\u062f\u0644-b420","rating":{"rate":90,"count":93},"price":2810000},{"id":1555774,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0644\u0648\u0627\u0632\u0645 \u062a\u0632\u0626\u06cc\u0646\u06cc \u062e\u0648\u062f\u0631\u0648","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0646\u0638\u0645 \u062f\u0647\u0646\u062f\u0647 \u062f\u0627\u062e\u0644 \u062e\u0648\u062f\u0631\u0648"],"supply_category":["TC","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0645\u0648\u062a\u0648\u0631\u0633\u06cc\u06a9\u0644\u062a"],"name":"\u0633\u0637\u0644 \u0632\u0628\u0627\u0644\u0647 \u062e\u0648\u062f\u0631\u0648 \u0645\u062f\u0644 AS","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0646\u0638\u0645 \u062f\u0647\u0646\u062f\u0647 \u062f\u0627\u062e\u0644 \u062e\u0648\u062f\u0631\u0648","category_id":8369,"price_detail":{"selling_price":178000,"discount_percent":0},"position":30,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":16834128,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/110824092.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-1555774\/\u0633\u0637\u0644-\u0632\u0628\u0627\u0644\u0647-\u062e\u0648\u062f\u0631\u0648-\u0645\u062f\u0644-as","rating":{"rate":72,"count":3843},"price":178000},{"id":35400,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0633\u06cc\u0633\u062a\u0645 \u0635\u0648\u062a\u06cc \u0648 \u062a\u0635\u0648\u06cc\u0631\u06cc \u062e\u0648\u062f\u0631\u0648","\u0628\u0644\u0646\u062f\u06af\u0648\u06cc \u062e\u0648\u062f\u0631\u0648"],"supply_category":["AV","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0648\u062a\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc"],"name":"\u0627\u0633\u067e\u06cc\u06a9\u0631 \u062e\u0648\u062f\u0631\u0648 \u06a9\u0646\u0648\u0648\u062f \u0645\u062f\u0644 KFC-HQ718EX","brand":"Kenwood","category":"\u0628\u0644\u0646\u062f\u06af\u0648\u06cc \u062e\u0648\u062f\u0631\u0648","category_id":5752,"price_detail":{"selling_price":26220000,"discount_percent":0},"position":31,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":21469572,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/103591.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-35400\/\u0627\u0633\u067e\u06cc\u06a9\u0631-\u062e\u0648\u062f\u0631\u0648-\u06a9\u0646\u0648\u0648\u062f-\u0645\u062f\u0644-kfc-hq718ex","rating":{"rate":84,"count":301},"price":26220000},{"id":2184216,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0644\u0648\u0627\u0632\u0645 \u062a\u0632\u0626\u06cc\u0646\u06cc \u062e\u0648\u062f\u0631\u0648","\u0633\u0631 \u062f\u0646\u062f\u0647"],"supply_category":["TC","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0645\u0648\u062a\u0648\u0631\u0633\u06cc\u06a9\u0644\u062a"],"name":"\u0633\u0631\u062f\u0646\u062f\u0647 \u0686\u0631\u0627\u063a \u062f\u0627\u0631 \u062e\u0648\u062f\u0631\u0648 \u0645\u062f\u0644 YI-62","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u0633\u0631 \u062f\u0646\u062f\u0647","category_id":8273,"price_detail":{"selling_price":494500,"discount_percent":14},"position":32,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":6192193,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/114223421.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-2184216\/\u0633\u0631\u062f\u0646\u062f\u0647-\u0686\u0631\u0627\u063a-\u062f\u0627\u0631-\u062e\u0648\u062f\u0631\u0648-\u0645\u062f\u0644-yi-62","rating":{"rate":66,"count":33},"price":494500},{"id":818389,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0646\u0638\u0627\u0641\u062a \u0648 \u0646\u06af\u0647\u062f\u0627\u0631\u06cc \u062e\u0648\u062f\u0631\u0648","\u0648\u0627\u06a9\u0633\u060c \u067e\u0648\u0644\u06cc\u0634 \u0648 \u062a\u0645\u06cc\u0632\u06a9\u0646\u0646\u062f\u0647 \u062e\u0648\u062f\u0631\u0648"],"supply_category":["TC","\u0644\u0648\u0627\u0632\u0645 \u0645\u0635\u0631\u0641\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0645\u0648\u062a\u0648\u0631\u0633\u06cc\u06a9\u0644\u062a"],"name":"\u067e\u0648\u0644\u06cc\u0634 \u0628\u062f\u0646\u0647 \u062e\u0648\u062f\u0631\u0648 \u062c\u0644\u0627\u0633\u0646\u062c \u0645\u062f\u0644 \u0646\u0631\u0645 \u062d\u062c\u0645 170 \u06af\u0631\u0645","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u0648\u0627\u06a9\u0633\u060c \u067e\u0648\u0644\u06cc\u0634 \u0648 \u062a\u0645\u06cc\u0632\u06a9\u0646\u0646\u062f\u0647 \u062e\u0648\u062f\u0631\u0648","category_id":8355,"price_detail":{"selling_price":220000,"discount_percent":0},"position":33,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":23929493,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/3755113.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-818389\/\u067e\u0648\u0644\u06cc\u0634-\u0628\u062f\u0646\u0647-\u062e\u0648\u062f\u0631\u0648-\u062c\u0644\u0627\u0633\u0646\u062c-\u0645\u062f\u0644-\u0646\u0631\u0645-\u062d\u062c\u0645-170-\u06af\u0631\u0645","rating":{"rate":80,"count":3391},"price":220000},{"id":5206255,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0633\u06cc\u0633\u062a\u0645 \u0635\u0648\u062a\u06cc \u0648 \u062a\u0635\u0648\u06cc\u0631\u06cc \u062e\u0648\u062f\u0631\u0648","\u062f\u0633\u062a\u06af\u0627\u0647 \u067e\u062e\u0634 \u062e\u0648\u062f\u0631\u0648"],"supply_category":["AV","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0648\u062a\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc"],"name":"\u067e\u062e\u0634 \u06a9\u0646\u0646\u062f\u0647 \u062e\u0648\u062f\u0631\u0648 \u067e\u0627\u0646\u0627\u062a\u06a9 \u0645\u062f\u0644 P-CP209P","brand":"Panatech","category":"\u062f\u0633\u062a\u06af\u0627\u0647 \u067e\u062e\u0634 \u062e\u0648\u062f\u0631\u0648","category_id":5751,"price_detail":{"selling_price":3829900,"discount_percent":0},"position":34,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":19513653,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/3eac31d01cb826aff33e44c2979c95ff2c8882ef_1621342915.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-5206255\/\u067e\u062e\u0634-\u06a9\u0646\u0646\u062f\u0647-\u062e\u0648\u062f\u0631\u0648-\u067e\u0627\u0646\u0627\u062a\u06a9-\u0645\u062f\u0644-p-cp209p","rating":{"rate":68,"count":36},"price":3829900},{"id":2326219,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0644\u0648\u0627\u0632\u0645 \u062a\u0632\u0626\u06cc\u0646\u06cc \u062e\u0648\u062f\u0631\u0648","\u0631\u0648\u06a9\u0634 \u0635\u0646\u062f\u0644\u06cc \u062e\u0648\u062f\u0631\u0648"],"supply_category":["TC","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0645\u0648\u062a\u0648\u0631\u0633\u06cc\u06a9\u0644\u062a"],"name":"\u0631\u0648\u06a9\u0634 \u0635\u0646\u062f\u0644\u06cc \u062e\u0648\u062f\u0631\u0648 \u0645\u062f\u0644 2006 \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u0633\u0645\u0646\u062f","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u0631\u0648\u06a9\u0634 \u0635\u0646\u062f\u0644\u06cc \u062e\u0648\u062f\u0631\u0648","category_id":8185,"price_detail":{"selling_price":3500000,"discount_percent":0},"position":35,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":12477574,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/bd564ef400df9391a84b989ba0810f3f770e2522_1606912334.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-2326219\/\u0631\u0648\u06a9\u0634-\u0635\u0646\u062f\u0644\u06cc-\u062e\u0648\u062f\u0631\u0648-\u0645\u062f\u0644-2006-\u0645\u0646\u0627\u0633\u0628-\u0628\u0631\u0627\u06cc-\u0633\u0645\u0646\u062f","rating":{"rate":64,"count":30},"price":3500000},{"id":6804638,"site_category":["\u062e\u0648\u062f\u0631\u0648\u060c \u0627\u0628\u0632\u0627\u0631 \u0648 \u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0646\u0639\u062a\u06cc","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062e\u0648\u062f\u0631\u0648","\u0633\u06cc\u0633\u062a\u0645 \u0635\u0648\u062a\u06cc \u0648 \u062a\u0635\u0648\u06cc\u0631\u06cc \u062e\u0648\u062f\u0631\u0648","\u062f\u0633\u062a\u06af\u0627\u0647 \u067e\u062e\u0634 \u062e\u0648\u062f\u0631\u0648"],"supply_category":["AV","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0635\u0648\u062a\u06cc \u062e\u0648\u062f\u0631\u0648 \u0648 \u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc"],"name":"\u067e\u062e\u0634 \u06a9\u0646\u0646\u062f\u0647 \u062e\u0648\u062f\u0631\u0648 \u067e\u0627\u06cc\u0648\u0646\u06cc\u0631 \u0645\u062f\u0644 DEH-S 4250BT","brand":"Pioneer","category":"\u062f\u0633\u062a\u06af\u0627\u0647 \u067e\u062e\u0634 \u062e\u0648\u062f\u0631\u0648","category_id":5751,"price_detail":{"selling_price":65450000,"discount_percent":0},"position":36,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":23012633,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/393ca15cf5e08dbf7a32b8932498d4a4301dab9c_1634658936.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-6804638\/\u067e\u062e\u0634-\u06a9\u0646\u0646\u062f\u0647-\u062e\u0648\u062f\u0631\u0648-\u067e\u0627\u06cc\u0648\u0646\u06cc\u0631-\u0645\u062f\u0644-deh-s-4250bt","rating":{"rate":100,"count":1},"price":65450000}];
        var page_search_url = null;
        var sntracker_search_data = {"source":1,"page":1,"pages":277,"foundItems":70710,"query":"","bannerId":null,"categoryId":6175,"attributes":{"sort_by":4,"has_selling_stock":false,"has_ready_to_shipment":0},"products":[{"product_id":605575,"category_id":5751,"brand_id":1,"is_sponsored":false,"selling_price":20000000},{"product_id":3159480,"category_id":5751,"brand_id":10052,"is_sponsored":false,"selling_price":3948500},{"product_id":131958,"category_id":5752,"brand_id":42,"is_sponsored":false,"selling_price":29450000},{"product_id":2403842,"category_id":5751,"brand_id":719,"is_sponsored":false,"selling_price":1450000},{"product_id":3628094,"category_id":5751,"brand_id":719,"is_sponsored":false,"selling_price":4400000},{"product_id":6518344,"category_id":5751,"brand_id":2927,"is_sponsored":false,"selling_price":6100000},{"product_id":56708,"category_id":6184,"brand_id":1377,"is_sponsored":false,"selling_price":24100000},{"product_id":4372718,"category_id":5751,"brand_id":719,"is_sponsored":false,"selling_price":27500000},{"product_id":5206106,"category_id":5751,"brand_id":10052,"is_sponsored":false,"selling_price":3832600},{"product_id":170935,"category_id":5752,"brand_id":42,"is_sponsored":false,"selling_price":13490500},{"product_id":1532347,"category_id":8270,"brand_id":719,"is_sponsored":false,"selling_price":1035000},{"product_id":807351,"category_id":8270,"brand_id":719,"is_sponsored":false,"selling_price":1120000},{"product_id":340984,"category_id":6191,"brand_id":719,"is_sponsored":false,"selling_price":9385000},{"product_id":2253534,"category_id":8185,"brand_id":719,"is_sponsored":false,"selling_price":2200000},{"product_id":4961602,"category_id":5751,"brand_id":719,"is_sponsored":false,"selling_price":6990000},{"product_id":3620772,"category_id":5751,"brand_id":9083,"is_sponsored":false,"selling_price":3400000},{"product_id":1481442,"category_id":8369,"brand_id":719,"is_sponsored":false,"selling_price":205000},{"product_id":1662486,"category_id":5751,"brand_id":1,"is_sponsored":false,"selling_price":26450000},{"product_id":2542738,"category_id":8185,"brand_id":719,"is_sponsored":false,"selling_price":3250000},{"product_id":3729933,"category_id":5751,"brand_id":719,"is_sponsored":false,"selling_price":10900000},{"product_id":1007488,"category_id":8350,"brand_id":719,"is_sponsored":false,"selling_price":6600000},{"product_id":334883,"category_id":6184,"brand_id":719,"is_sponsored":false,"selling_price":1103400},{"product_id":4187159,"category_id":5752,"brand_id":719,"is_sponsored":false,"selling_price":3356500},{"product_id":4164693,"category_id":8369,"brand_id":16803,"is_sponsored":false,"selling_price":1350000},{"product_id":964055,"category_id":8336,"brand_id":719,"is_sponsored":false,"selling_price":160000},{"product_id":528576,"category_id":8270,"brand_id":719,"is_sponsored":false,"selling_price":1000000},{"product_id":3579724,"category_ie":160000},{"product_id":528576,"category_id":8270,"brand_id":719,"is_sponsored":false,"selling_price":1000000},{"product_id":3579724,"category_id":5752,"brand_id":719,"is_sponsored":false,"selling_price":1790000},{"product_id":4196408,"category_id":5751,"brand_id":10052,"is_sponsored":false,"selling_price":4250000},{"product_id":3575332,"category_id":8716,"brand_id":719,"is_sponsored":false,"selling_price":2810000},{"product_id":1555774,"category_id":8369,"brand_id":719,"is_sponsored":false,"selling_price":178000},{"product_id":35400,"category_id":5752,"brand_id":1101,"is_sponsored":false,"selling_price":26220000},{"product_id":2184216,"category_id":8273,"brand_id":719,"is_sponsored":false,"selling_price":494500},{"product_id":818389,"category_id":8355,"brand_id":719,"is_sponsored":false,"selling_price":220000},{"product_id":5206255,"category_id":5751,"brand_id":10052,"is_sponsored":false,"selling_price":3829900},{"product_id":2326219,"category_id":8185,"brand_id":719,"is_sponsored":false,"selling_price":3500000},{"product_id":6804638,"category_id":5751,"brand_id":42,"is_sponsored":false,"selling_price":65450000}],"sponsored_products":[],"searchPhase":null,"searchModelName":null,"searchModelVersion":null};
        var categoryId = 6175;
        var nowTimeInUTC = "2021-11-13 18:38:32";
        var isAnanasFriendly = true;
        var userId = null;
        var adroRCActivation = true;
        var loginRegisterUrlWithBack = "\/users\/login-register\/?_back=https:\/\/www.digikala.com\/search\/category-car-accessory-parts\/";
        var isNewCustomer = false;
        var digiclubLuckyDrawEndTime = "2021-12-28 23:59:28";
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
                                                        src="{{ full_media_path($cat->media()->first()) }}?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60">
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
                                <div class="c-listing-sidebar js-list-aside js-sticky-inner" id="js-list-aside">
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
                                                <div class="c-catalog">
                                                    <ul class="c-catalog__list--depth js-catalog-list">
                                                        <li class="c-catalog__cat-item ">
                                                            <span class="c-catalog__cat-item c-catalog__cat-item--arrow-left">
                                                                <a class="c-catalog__link "
                                                                data-snt-event="dkSearchPageClick"
                                                                data-snt-params='{"item":"catalog-filter","item_option":"{{ $fullCategoryList[0]->name  }}"}'
                                                                    href="{{  route('front.categoryPage', ['slug' => $fullCategoryList[0]->slug ]) }}">{{ $fullCategoryList[0]->name  }}</a>
                                                            </span>
                                                            <?php
                                                                $counter = count($fullCategoryList);
                                                                $j = 1;
                                                            ?>
                                                        @include('front::layouts.category-menu', compact('fullCategoryList', 'counter', 'j', 'other_categories'))
                                                        </li>
                                                    </ul>
                                                    <div data-snt-event="dkSearchPageClick" data-snt-params='{"item":"catalog-filter","item_option":"show-all"}' class="c-catalog__show-more js-catalog-show-more">
                                                        مشاهده همه دسته‌بندی‌ها
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="c-box c-box--brands-filter js-ab-sidebar-filter">
                                        <div>
                                            <div class=" c-box__header c-box__header--toggleable js-box-toggle ">
                                                برند
                                            </div>
                                            <div class="c-filter c-filter--params js-box-content">
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

                                    @foreach($attribute_groups as $attribute_group)
                                        <?php $attributes = $attribute_group->attributes()->orderBy('position', 'asc')  ->where('is_filterable', 1)->get(); ?>
                                        @foreach ($attributes as $attribute)
                                            @if($attribute->products()->where('has_stock', '>', 0)->exists())
                                                <div class="c-box">
                                                    <div class="c-box__header c-box__header--toggleable js-box-toggle is-hidden">
                                                        {{ $attribute->name }}
                                                    </div>
                                                    <div class="c-filter c-filter--params js-box-content" style="display: none;">
                                                    <div class="c-message c-message-light c-message-light--info js-message-error u-hidden">
                                                        <p>برند یا سازنده‌ای با این نام پیدا نشد!</p>
                                                    </div>
                                                    <div class="c-box__divider c-box__divider--full">
                                                        <div></div>
                                                    </div>
                                                    <div class="c-box__scroll-container">
                                                        <div class="c-box__scroll js-box-content-items">
                                                            <ul>
                                                                @foreach($attribute->values as $value)
                                                                    <li>
                                                                        <label class="c-filter__label js-box-content-item" for="{{ $attribute->id }}-param-{{ $value->id }}" data-fa="{{ $value->value }}" data-en="" data-search=" ">
                                                                            {{ $value->value }}
                                                                        </label>
                                                                        <label class="c-ui-checkbox">
                                                                            <input type="checkbox" value="{{ $value->id }}" name="attribute[{{ $attribute->id }}][]" data-search-uid="{{ $attribute->id }}" id="{{ $attribute->id }}-param-{{ $value->id }}">
                                                                            <span class="c-ui-checkbox__check"></span>
                                                                        </label>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endforeach

                                    <script>
                                        var sellerConditionsSectionExists = true;
                                    </script>

                                    <div class="c-box js-ab-sidebar-filter">
                                        <div class="c-filter c-filter--switcher js-box-content-items">
                                            <label class="c-ui-statusswitcher">
                                                <input type="checkbox" value="1" name="has_selling_stock" id="stock_status-param-1">
                                                <span class="c-ui-statusswitcher__slider">
                                                    <span class="c-ui-statusswitcher__slider__toggle"></span>
                                                    </span>
                                            </label>
                                            فقط کالاهای موجود
                                        </div>
                                    </div>
                                    <div class="c-box js-ab-sidebar-filter" id="digikala_fake_section">
                                        <div class="c-filter c-filter--switcher js-box-content-items"><label
                                                class="c-ui-statusswitcher">
                                                <input type="checkbox" value="1" name="only_original" id="stock_status-param-1">
                                                <span class="c-ui-statusswitcher__slider">
                                                    <span class="c-ui-statusswitcher__slider__toggle"></span>
                                                </span>
                                            </label>
                                            فقط کالاهای اصل
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
                                                                                                 data-value="{{ $max_price }}"
                                                                                                 value="{{ $max_price }}"
                                                                                                 name="price[max]"
                                                                                                 data-range="{{ $max_price }}"
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
                                        <div>
                                            <div class=" c-box__header c-box__header--toggleable js-box-toggle ">امتیاز

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
                                                <li>
                                                    <a href=" javascript:" data-sort="newest"
                                                       class="is-active">جدیدترین</a>
                                                </li>
                                                <li>
                                                    <a href=" javascript:" data-sort="best_selling">
                                                        پرفروش‌ترین‌</a>
                                                </li>
                                                <li>
                                                    <a href=" javascript:" data-sort="cheapest">
                                                        ارزان‌ترین</a>
                                                </li>
                                                <li>
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
                                                                <div
                                                                    class="c-product-box__row c-product-box__row--price">
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
                                                                <div
                                                                    class="c-product-box__row c-product-box__row--price">
                                                                    <div class="c-price">
                                                                        <div
                                                                            class="c-price__value c-price__value--plp "></div>
                                                                    </div>
                                                                    <div
                                                                        class="c-promotion-box__cover c-promotion-box__cover--out-of-stock">
                                                                        <div
                                                                            class="c-promotion-box__cover-text js-product-status">
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
                                            {{ $products->links('layouts.front.pagination', ['route' => '/']) }}
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
                                <strong>
                                    خرید انواع {{ $cat->name }} از {{ $fa_store_name }}&nbsp;
                                </strong>
                            </p>
                            <p>{{ $cat->description }}</p>
                            <span class="c-expandable-text__expand-btn c-expandable-text__expand-btn--shadowed js-expand-btn" data-collapsed="نمایش بیشتر" data-expanded="بستن">
                            </span>
                        </div>
                    </article>
                @endif
            </div>
        </div>
    </main>

@endsection
