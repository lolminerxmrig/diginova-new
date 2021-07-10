@php
  $banner2 = \Modules\Staff\Slider\Models\Slider::find(2);
@endphp

@extends('layouts.front.master')

@section('head')
  <title>جستجو برای {{ $query }} | {{ $fa_store_name }}</title>
{{--  <link rel="canonical" href="{{ route('front.cart') }}"/>--}}
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <script>
    var supernova_mode = "production";
    var supernova_tracker_url = "https:\/\/etrackerd.digikala.com\/tracker\/events\/";
    var parameters = {"query":{"q":"\u0644\u067e \u062a\u0627\u067e","sortby":22},"list_view":false};
    var cart = {"cartId":0,"variants":[],"products":[],"itemCount":0,"isPlusUser":false};
    var emarsysCategoryBreadcrumb = null;
    var click_impression = [{"id":5011984,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 15.6 \u0627\u06cc\u0646\u0686\u06cc \u0627\u06cc\u0633\u0648\u0633 \u0645\u062f\u0644 VivoBook X540UA - DM527 ","brand":"ASUS","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":120000000,"discount_percent":0},"position":1,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":16069444,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/1c55c19d722507c4650e67b08f51a6b4e06636ce_1619439843.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-5011984\/\u0644\u067e-\u062a\u0627\u067e-156-\u0627\u06cc\u0646\u0686\u06cc-\u0627\u06cc\u0633\u0648\u0633-\u0645\u062f\u0644-vivobook-x540ua-dm527","rating":{"rate":85.8,"count":41},"price":120000000},{"id":904246,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 15 \u0627\u06cc\u0646\u0686\u06cc \u0644\u0646\u0648\u0648 \u0645\u062f\u0644 Ideapad 330 - E","brand":"Lenovo","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":86000000,"discount_percent":0},"position":2,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":9157930,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/4209444.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-904246\/\u0644\u067e-\u062a\u0627\u067e-15-\u0627\u06cc\u0646\u0686\u06cc-\u0644\u0646\u0648\u0648-\u0645\u062f\u0644-ideapad-330-e","rating":{"rate":79.6,"count":421},"price":86000000},{"id":4350700,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0644\u067e \u062a\u0627\u067e","\u0627\u0633\u062a\u0646\u062f \u0648 \u067e\u0627\u06cc\u0647 \u062e\u0646\u06a9\u200c\u06a9\u0646\u0646\u062f\u0647"],"supply_category":["IT","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06a9\u0627\u0645\u067e\u06cc\u0648\u062a\u0631"],"name":"\u067e\u0627\u06cc\u0647 \u062e\u0646\u06a9 \u06a9\u0646\u0646\u062f\u0647  \u0644\u067e \u062a\u0627\u067e \u0645\u062f\u0644 N88","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u0627\u0633\u062a\u0646\u062f \u0648 \u067e\u0627\u06cc\u0647 \u062e\u0646\u06a9 \u06a9\u0646\u0646\u062f\u0647","category_id":98,"price_detail":{"selling_price":3600000,"discount_percent":0},"position":3,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":17944109,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/372828bd2f92e3caf9ca5c1a4fa744d59bb548bc_1612003426.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.comhttps:\/\/dg.yektanet.com\/click\/afyFgnn9XiZ4NN6XsBg-2gcMWq7XIqSVLbUCiOcHbMA\/v0-bsO-eCvg-dWCi-biTF5-bnsfh-rNkn-spYK-jfV-hnR-hBJkRUPFU-UExQ?redirect=https:\/\/www.digikala.com\/product\/dkp-4350700","rating":{"rate":0,"count":0},"price":3600000},{"id":3255008,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 11 \u0627\u06cc\u0646\u0686\u06cc \u0644\u0646\u0648\u0648 \u0645\u062f\u0644 IdeaPad 1 - A","brand":"Lenovo","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":71990000,"discount_percent":4},"position":4,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":13245399,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/067d4e0ea04b849caf3fc29c6f6d23fa2f7e651b_1597669901.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3255008\/\u0644\u067e-\u062a\u0627\u067e-11-\u0627\u06cc\u0646\u0686\u06cc-\u0644\u0646\u0648\u0648-\u0645\u062f\u0644-ideapad-1-a","rating":{"rate":85,"count":83},"price":71990000},{"id":1788325,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 15 \u0627\u06cc\u0646\u0686\u06cc \u0644\u0646\u0648\u0648 \u0645\u062f\u0644 Ideapad 330 - NXB","brand":"Lenovo","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":94000000,"discount_percent":0},"position":5,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":11658651,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/112114349.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-1788325\/\u0644\u067e-\u062a\u0627\u067e-15-\u0627\u06cc\u0646\u0686\u06cc-\u0644\u0646\u0648\u0648-\u0645\u062f\u0644-ideapad-330-nxb","rating":{"rate":79.4,"count":275},"price":94000000},{"id":5353513,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 15.6 \u0627\u06cc\u0646\u0686\u06cc \u0627\u06cc\u0633\u0648\u0633 \u0645\u062f\u0644 VivoBook S533EQ - A","brand":"ASUS","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":304500000,"discount_percent":0},"position":6,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":17323062,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/0c3f8132accf8d0fbd149404e110c15ba9a9ac2a_1622539050.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-5353513\/\u0644\u067e-\u062a\u0627\u067e-156-\u0627\u06cc\u0646\u0686\u06cc-\u0627\u06cc\u0633\u0648\u0633-\u0645\u062f\u0644-vivobook-s533eq-a","rating":{"rate":86.6,"count":3},"price":304500000},{"id":5183564,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 15 \u0627\u06cc\u0646\u0686\u06cc \u0644\u0646\u0648\u0648 \u0645\u062f\u0644 IdeaPad 5-A","brand":"Lenovo","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":237000000,"discount_percent":0},"position":7,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":16685984,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/45d3b9d1739e77efdb5bfc9149ca907fa51a1dd7_1621164606.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-5183564\/\u0644\u067e-\u062a\u0627\u067e-15-\u0627\u06cc\u0646\u0686\u06cc-\u0644\u0646\u0648\u0648-\u0645\u062f\u0644-ideapad-5-a","rating":{"rate":71.2,"count":9},"price":237000000},{"id":4524819,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 15.6 \u0627\u06cc\u0646\u0686\u06cc \u0644\u0646\u0648\u0648 \u0645\u062f\u0644 Ideapad 3 15IIL05","brand":"Lenovo","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":117990000,"discount_percent":0},"position":8,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":14604215,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/342fd9635026487512beafde494a0d628b652a6d_1613992920.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-4524819\/\u0644\u067e-\u062a\u0627\u067e-156-\u0627\u06cc\u0646\u0686\u06cc-\u0644\u0646\u0648\u0648-\u0645\u062f\u0644-ideapad-3-15iil05","rating":{"rate":87.4,"count":19},"price":117990000},{"id":2047531,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 15 \u0627\u06cc\u0646\u0686\u06cc \u0627\u06cc\u0633\u0648\u0633 \u0645\u062f\u0644 VivoBook X543MA - A","brand":"ASUS","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":91500000,"discount_percent":0},"position":9,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":14542369,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/113460092.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-2047531\/\u0644\u067e-\u062a\u0627\u067e-15-\u0627\u06cc\u0646\u0686\u06cc-\u0627\u06cc\u0633\u0648\u0633-\u0645\u062f\u0644-vivobook-x543ma-a","rating":{"rate":79.8,"count":146},"price":91500000},{"id":4678192,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 15.6 \u0627\u06cc\u0646\u0686\u06cc \u0627\u06cc\u0633\u0648\u0633 \u0645\u062f\u0644 R565MA-BQ197","brand":"ASUS","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":109900000,"discount_percent":0},"position":10,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":15191823,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/268eac711d48dd78a04273fc74f2da6247009626_1615616265.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-4678192\/\u0644\u067e-\u062a\u0627\u067e-156-\u0627\u06cc\u0646\u0686\u06cc-\u0627\u06cc\u0633\u0648\u0633-\u0645\u062f\u0644-r565ma-bq197","rating":{"rate":77,"count":13},"price":109900000},{"id":4886217,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 15.6 \u0627\u06cc\u0646\u0686\u06cc \u0627\u06cc\u0633\u0648\u0633 \u0645\u062f\u0644 R565JF-BQ078","brand":"ASUS","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":159900000,"discount_percent":0},"position":11,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":15660970,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/268eac711d48dd78a04273fc74f2da6247009626_1618219111.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-4886217\/\u0644\u067e-\u062a\u0627\u067e-156-\u0627\u06cc\u0646\u0686\u06cc-\u0627\u06cc\u0633\u0648\u0633-\u0645\u062f\u0644-r565jf-bq078","rating":{"rate":68,"count":5},"price":159900000},{"id":3706425,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e \u0627\u06cc\u0633\u0631 15 \u0627\u06cc\u0646\u0686\u06cc \u0645\u062f\u0644 Aspire 3 A315-57G-559W","brand":"\u0627\u06cc\u0633\u0631","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":173000000,"discount_percent":0},"position":12,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":16930170,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/085538aa1c3c4c2512d2ed4a16154d80cf2189fe_1605075437.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3706425\/\u0644\u067e-\u062a\u0627\u067e-\u0627\u06cc\u0633\u0631-15-\u0627\u06cc\u0646\u0686\u06cc-\u0645\u062f\u0644-aspire-3-a315-57g-559w","rating":{"rate":86.6,"count":12},"price":173000000},{"id":4647229,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 16 \u0627\u06cc\u0646\u0686\u06cc \u0627\u0686\u200c\u067e\u06cc \u0645\u062f\u0644 HP PAVILION 16-A0032 DX","brand":"HP","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":269000000,"discount_percent":0},"position":13,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":15103937,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/66b9f0afa2fa2eb8530df1df3ff9a9d7f28806cd_1615112103.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-4647229\/\u0644\u067e-\u062a\u0627\u067e-16-\u0627\u06cc\u0646\u0686\u06cc-\u0627\u0686\u067e\u06cc-\u0645\u062f\u0644-hp-pavilion-16-a0032","rating":{"rate":88,"count":20},"price":269000000},{"id":4505725,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 15.6 \u0627\u06cc\u0646\u0686\u06cc \u0644\u0646\u0648\u0648 \u0645\u062f\u0644 IdeaPad S145 - 15IGM","brand":"Lenovo","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":77990000,"discount_percent":4},"position":14,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":17007929,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/2edc54afbe05fce4f1c4c9af6c75d35160b6dafc_1613807965.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-4505725\/\u0644\u067e-\u062a\u0627\u067e-156-\u0627\u06cc\u0646\u0686\u06cc-\u0644\u0646\u0648\u0648-\u0645\u062f\u0644-ideapad-s145-15igm","rating":{"rate":77.8,"count":18},"price":77990000},{"id":2896649,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 15 \u0627\u06cc\u0646\u0686\u06cc \u0644\u0646\u0648\u0648 \u0645\u062f\u0644 Ideapad L3 - A","brand":"Lenovo","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":116000000,"discount_percent":0},"position":15,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":14069551,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/121485581.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-2896649\/\u0644\u067e-\u062a\u0627\u067e-15-\u0627\u06cc\u0646\u0686\u06cc-\u0644\u0646\u0648\u0648-\u0645\u062f\u0644-ideapad-l3-a","rating":{"rate":75.4,"count":30},"price":116000000},{"id":3419432,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 15 \u0627\u06cc\u0646\u0686\u06cc \u0644\u0646\u0648\u0648 \u0645\u062f\u0644 IdeaPad Gaming 3 15IMH05","brand":"Lenovo","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":270000000,"discount_percent":0},"position":16,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":17023238,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/afb0e71e9b9c769784f4ec38ceea6cda3074ea42_1600867591.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3419432\/\u0644\u067e-\u062a\u0627\u067e-15-\u0627\u06cc\u0646\u0686\u06cc-\u0644\u0646\u0648\u0648-\u0645\u062f\u0644-ideapad-gaming-3-15imh05","rating":{"rate":80,"count":18},"price":270000000},{"id":3785143,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 14 \u0627\u06cc\u0646\u0686\u06cc \u0627\u06cc\u0633\u0648\u0633 \u0645\u062f\u0644 ZenBook UM433IQ - A5023","brand":"ASUS","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":313400000,"discount_percent":0},"position":17,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":14991026,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/a857edc40f143031811c7c0a2255eade8a6f0191_1605624348.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3785143\/\u0644\u067e-\u062a\u0627\u067e-14-\u0627\u06cc\u0646\u0686\u06cc-\u0627\u06cc\u0633\u0648\u0633-\u0645\u062f\u0644-zenbook-um433iq-a5023","rating":{"rate":93.4,"count":6},"price":313400000},{"id":2014573,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 15 \u0627\u06cc\u0646\u0686\u06cc \u0644\u0646\u0648\u0648 \u0645\u062f\u0644 Ideapad L340  - A","brand":"Lenovo","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":245000000,"discount_percent":0},"position":18,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":5607452,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/113280205.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-2014573\/\u0644\u067e-\u062a\u0627\u067e-15-\u0627\u06cc\u0646\u0686\u06cc-\u0644\u0646\u0648\u0648-\u0645\u062f\u0644-ideapad-l340-a","rating":{"rate":79,"count":21},"price":245000000},{"id":3735138,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 13 \u0627\u06cc\u0646\u0686\u06cc \u0627\u067e\u0644 \u0645\u062f\u0644 MacBook Air MGN63 2020","brand":"Apple","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":268690000,"discount_percent":0},"position":19,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":12974231,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/79f4b1e3c31fb22fa193ea1393e2cb8e8a5863cc_1605085571.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3735138\/\u0644\u067e-\u062a\u0627\u067e-13-\u0627\u06cc\u0646\u0686\u06cc-\u0627\u067e\u0644-\u0645\u062f\u0644-macbook-air-mgn63-2020","rating":{"rate":80,"count":13},"price":268690000},{"id":4403247,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 14 \u0627\u06cc\u0646\u0686\u06cc \u0627\u06cc\u0633\u0648\u0633 \u0645\u062f\u0644 VivoBook R427JP-Z - B","brand":"ASUS","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":198000000,"discount_percent":0},"position":20,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":17154195,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/882a9b03b89247f56c62b631f08a3f0328c91f3a_1612609380.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-4403247\/\u0644\u067e-\u062a\u0627\u067e-14-\u0627\u06cc\u0646\u0686\u06cc-\u0627\u06cc\u0633\u0648\u0633-\u0645\u062f\u0644-vivobook-r427jp-z-b","rating":{"rate":88.6,"count":7},"price":198000000},{"id":5242929,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 15 \u0627\u06cc\u0646\u0686\u06cc \u0644\u0646\u0648\u0648 \u0645\u062f\u0644 Ideapad L340-15P","brand":"Lenovo","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":189500000,"discount_percent":0},"position":21,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":16778519,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/de8f999e1aa8ca09450c9dc85700d9c213663093_1621676602.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-5242929\/\u0644\u067e-\u062a\u0627\u067e-15-\u0627\u06cc\u0646\u0686\u06cc-\u0644\u0646\u0648\u0648-\u0645\u062f\u0644-ideapad-l340-15p","rating":{"rate":72,"count":5},"price":189500000},{"id":4888700,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 14 \u0627\u06cc\u0646\u0686\u06cc \u0647\u0648\u0622\u0648\u06cc \u0645\u062f\u0644 Matebook D14","brand":"Huawei","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":225900000,"discount_percent":0},"position":22,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":17530676,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/4e7983d9bd59ca7309ace03de0b1cf45e31ad42d_1618230895.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-4888700\/\u0644\u067e-\u062a\u0627\u067e-14-\u0627\u06cc\u0646\u0686\u06cc-\u0647\u0648\u0622\u0648\u06cc-\u0645\u062f\u0644-matebook-d14","rating":{"rate":66.6,"count":3},"price":225900000},{"id":4678604,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 15.6 \u0627\u06cc\u0646\u0686\u06cc \u0627\u06cc\u0633\u0648\u0633 \u0645\u062f\u0644 X543MA-DM1067","brand":"ASUS","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":91900000,"discount_percent":0},"position":23,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":15499570,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/bae4a15494947baf5540c64afee44073415e2b26_1615376461.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-4678604\/\u0644\u067e-\u062a\u0627\u067e-156-\u0627\u06cc\u0646\u0686\u06cc-\u0627\u06cc\u0633\u0648\u0633-\u0645\u062f\u0644-x543ma-dm1064","rating":{"rate":70,"count":4},"price":91900000},{"id":3690851,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 15 \u0627\u06cc\u0646\u0686\u06cc \u0644\u0646\u0648\u0648 \u0645\u062f\u0644 IdeaPad Gaming 3 - C","brand":"Lenovo","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":225000000,"discount_percent":0},"position":24,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":16329651,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/82c75097f77a500d40a09b2f2ff48e957e287eb5_1604738341.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3690851\/\u0644\u067e-\u062a\u0627\u067e-15-\u0627\u06cc\u0646\u0686\u06cc-\u0644\u0646\u0648\u0648-\u0645\u062f\u0644-ideapad-gaming-3-c","rating":{"rate":88,"count":5},"price":225000000},{"id":3409565,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 15.6 \u0627\u06cc\u0646\u0686\u06cc \u0627\u06cc\u0633\u0648\u0633 \u0645\u062f\u0644 VivoBook R521JB - MR","brand":"ASUS","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":188500000,"discount_percent":0},"position":25,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":16093968,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/b53d2f5938fd82c25a0d6594c6c6784a8aaecf0e_1600324373.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3409565\/\u0644\u067e-\u062a\u0627\u067e-156-\u0627\u06cc\u0646\u0686\u06cc-\u0627\u06cc\u0633\u0648\u0633-\u0645\u062f\u0644-vivobook-r521jb-mr","rating":{"rate":90,"count":8},"price":188500000},{"id":4666583,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 15 \u0627\u06cc\u0646\u0686\u06cc \u0644\u0646\u0648\u0648 \u0645\u062f\u0644 V15 - B","brand":"Lenovo","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":109600000,"discount_percent":0},"position":26,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":15621639,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/440321d475d696be4a7cd4e47de95434e57899ea_1615797280.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-4666583\/\u0644\u067e-\u062a\u0627\u067e-15-\u0627\u06cc\u0646\u0686\u06cc-\u0644\u0646\u0648\u0648-\u0645\u062f\u0644-v15-b","rating":{"rate":70,"count":4},"price":109600000},{"id":4887479,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 15.6 \u0627\u06cc\u0646\u0686\u06cc \u0627\u0686\u200c\u067e\u06cc \u0645\u062f\u0644 15-dw3024nia","brand":"HP","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":136000000,"discount_percent":0},"position":27,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":15689525,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/7c574dac478e7eed367d5fcf2b63963d784f0392_1618225083.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-4887479\/\u0644\u067e-\u062a\u0627\u067e-156-\u0627\u06cc\u0646\u0686\u06cc-\u0627\u0686\u067e\u06cc-\u0645\u062f\u0644-15-dw3024nia","rating":{"rate":46.6,"count":3},"price":136000000},{"id":3433146,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 15 \u0627\u06cc\u0646\u0686\u06cc \u0627\u06cc\u0633\u0648\u0633 \u0645\u062f\u0644 VivoBook R521JA-BQ083","brand":"ASUS","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":155300000,"discount_percent":0},"position":28,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":11957477,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/0efd163d6cc33b53c111c6e39450e8a3b37eadf8_1600690414.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3433146\/\u0644\u067e-\u062a\u0627\u067e-15-\u0627\u06cc\u0646\u0686\u06cc-\u0627\u06cc\u0633\u0648\u0633-\u0645\u062f\u0644-vivobook-r521ja-bq083","rating":{"rate":70.8,"count":13},"price":155300000},{"id":5261492,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 15.6 \u0627\u06cc\u0646\u0686\u06cc \u0644\u0646\u0648\u0648 \u0645\u062f\u0644 IdeaPad Gaming 3 - C - LP","brand":"Lenovo","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":218000000,"discount_percent":0},"position":29,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":17200348,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/82c75097f77a500d40a09b2f2ff48e957e287eb5_1621855427.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-5261492\/\u0644\u067e-\u062a\u0627\u067e-15-\u0627\u06cc\u0646\u0686\u06cc-\u0644\u0646\u0648\u0648-\u0645\u062f\u0644-ideapad-gaming-3-c-clone-1-of-3690851","rating":{"rate":95,"count":4},"price":218000000},{"id":4934636,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 15.6 \u0627\u06cc\u0646\u0686\u06cc \u0627\u06cc\u0633\u0648\u0633 \u0645\u062f\u0644 VivoBook R528EP-BQ240","brand":"ASUS","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":201800000,"discount_percent":0},"position":30,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":16188519,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/8024b14af9151e741c38f6d5ecf6eb39fc695f70_1618835517.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-4934636\/\u0644\u067e-\u062a\u0627\u067e-156-\u0627\u06cc\u0646\u0686\u06cc-\u0627\u06cc\u0633\u0648\u0633-\u0645\u062f\u0644-vivobook-r528ep-bq240","rating":{"rate":86.6,"count":6},"price":201800000},{"id":4896165,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 14 \u0627\u06cc\u0646\u0686\u06cc \u0644\u0646\u0648\u0648 \u0645\u062f\u0644 V14 IGL","brand":"Lenovo","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":79000000,"discount_percent":0},"position":31,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":17009349,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/e5c714e2442bbc62acd6712ccaf4be70ce1814a5_1619426172.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-4896165\/\u0644\u067e-\u062a\u0627\u067e-14-\u0627\u06cc\u0646\u0686\u06cc-\u0644\u0646\u0648\u0648-\u0645\u062f\u0644-v14-igl","rating":{"rate":0,"count":0},"price":79000000},{"id":5113426,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e \u0627\u0686\u200c\u067e\u06cc \u0645\u062f\u0644 Pavilion 15-eg0353nia","brand":"HP","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":275990000,"discount_percent":5},"position":32,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":16421709,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/482bcdc7b0618226876594848d038b5c9c678fa0_1620473749.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-5113426\/\u0644\u067e-\u062a\u0627\u067e-\u0627\u0686\u067e\u06cc-\u0645\u062f\u0644-pavilion-15-eg0353nia","rating":{"rate":0,"count":0},"price":275990000},{"id":4461771,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 15.6\u0627\u06cc\u0646\u0686\u06cc \u0627\u0686\u200c\u067e\u06cc \u0645\u062f\u0644 Omen 15 - DH1070wm - A","brand":"HP","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":379000000,"discount_percent":0},"position":33,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":18086249,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/358db9bec4ccbd432999de6f43bb5b004d0bd295_1613307249.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-4461771\/\u0644\u067e-\u062a\u0627\u067e-156\u0627\u06cc\u0646\u0686\u06cc-\u0627\u0686\u067e\u06cc-\u0645\u062f\u0644-omen-15-dh1070wm-a","rating":{"rate":83.4,"count":6},"price":379000000},{"id":4540657,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 15 \u0627\u06cc\u0646\u0686\u06cc \u0627\u06cc\u0633\u0648\u0633 \u0645\u062f\u0644 VivoBook X543MA - DM1064","brand":"ASUS","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":90000000,"discount_percent":0},"position":34,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":14953364,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/bae4a15494947baf5540c64afee44073415e2b26_1614149414.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-4540657\/\u0644\u067e-\u062a\u0627\u067e-15-\u0627\u06cc\u0646\u0686\u06cc-\u0627\u06cc\u0633\u0648\u0633-\u0645\u062f\u0644-vivobook-x543ma-np-a","rating":{"rate":77.2,"count":14},"price":90000000},{"id":3634340,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 15.6 \u0627\u06cc\u0646\u0686\u06cc \u0627\u06cc\u0633\u0648\u0633 \u0645\u062f\u0644 VivoBook R545FJ-BQ078","brand":"ASUS","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":239900000,"discount_percent":0},"position":35,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":18171295,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/82713d759cbe10e395c181508301fcf7b2580e37_1603862548.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3634340\/\u0644\u067e-\u062a\u0627\u067e-156-\u0627\u06cc\u0646\u0686\u06cc-\u0627\u06cc\u0633\u0648\u0633-\u0645\u062f\u0644-vivobook-r545fj-bq078","rating":{"rate":84,"count":5},"price":239900000},{"id":4877214,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u0644\u067e \u062a\u0627\u067e","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"supply_category":["IT","\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9"],"name":"\u0644\u067e \u062a\u0627\u067e 15.6 \u0627\u06cc\u0646\u0686\u06cc \u0627\u06cc\u0633\u0648\u0633 \u0645\u062f\u0644 X543MA-GQ1013","brand":"ASUS","category":"\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9","category_id":18,"price_detail":{"selling_price":92200000,"discount_percent":0},"position":36,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":17368175,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/bae4a15494947baf5540c64afee44073415e2b26_1618133347.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-4877214\/\u0644\u067e-\u062a\u0627\u067e-156-\u0627\u06cc\u0646\u0686\u06cc-\u0627\u06cc\u0633\u0648\u0633-\u0645\u062f\u0644-x543ma-dm1067-clone-1-of-4678604","rating":{"rate":88,"count":5},"price":92200000}];
    var page_search_url = null;
    var sntracker_search_data = {"source":1,"page":1,"pages":277,"foundItems":31115,"query":"\u0644\u067e \u062a\u0627\u067e","bannerId":null,"categoryId":null,"attributes":{"sort_by":22,"has_selling_stock":false,"has_ready_to_shipment":0},"products":[{"product_id":5011984,"category_id":18,"brand_id":4,"is_sponsored":false,"selling_price":120000000},{"product_id":904246,"category_id":18,"brand_id":94,"is_sponsored":false,"selling_price":86000000},{"product_id":4350700,"category_id":98,"brand_id":719,"is_sponsored":false,"selling_price":3600000},{"product_id":3255008,"category_id":18,"brand_id":94,"is_sponsored":false,"selling_price":71990000},{"product_id":1788325,"category_id":18,"brand_id":94,"is_sponsored":false,"selling_price":94000000},{"product_id":5353513,"category_id":18,"brand_id":4,"is_sponsored":false,"selling_price":304500000},{"product_id":5183564,"category_id":18,"brand_id":94,"is_sponsored":false,"selling_price":237000000},{"product_id":4524819,"category_id":18,"brand_id":94,"is_sponsored":false,"selling_price":117990000},{"product_id":2047531,"category_id":18,"brand_id":4,"is_sponsored":false,"selling_price":91500000},{"product_id":4678192,"category_id":18,"brand_id":4,"is_sponsored":false,"selling_price":109900000},{"product_id":4886217,"category_id":18,"brand_id":4,"is_sponsored":false,"selling_price":159900000},{"product_id":3706425,"category_id":18,"brand_id":3,"is_sponsored":false,"selling_price":173000000},{"product_id":4647229,"category_id":18,"brand_id":6,"is_sponsored":false,"selling_price":269000000},{"product_id":4505725,"category_id":18,"brand_id":94,"is_sponsored":false,"selling_price":77990000},{"product_id":2896649,"category_id":18,"brand_id":94,"is_sponsored":false,"selling_price":116000000},{"product_id":3419432,"category_id":18,"brand_id":94,"is_sponsored":false,"selling_price":270000000},{"product_id":3785143,"category_id":18,"brand_id":4,"is_sponsored":false,"selling_price":313400000},{"product_id":2014573,"category_id":18,"brand_id":94,"is_sponsored":false,"selling_price":245000000},{"product_id":3735138,"category_id":18,"brand_id":10,"is_sponsored":false,"selling_price":268690000},{"product_id":4403247,"category_id":18,"brand_id":4,"is_sponsored":false,"selling_price":198000000},{"product_id":5242929,"category_id":18,"brand_id":94,"is_sponsored":false,"selling_price":189500000},{"product_id":4888700,"category_id":18,"brand_id":82,"is_sponsored":false,"selling_price":225900000},{"product_id":4678604,"category_id":18,"brand_id":4,"is_sponsored":false,"selling_price":91900000},{"product_id":3690851,"category_id":18,"brand_id":94,"is_sponsored":false,"selling_price":225000000},{"product_id":3409565,"category_id":18,"brand_id":4,"is_sponsored":false,"selling_price":188500000},{"product_id":4666583,"category_id":18,"brand_id":94,"is_sponsored":false,"selling_price":109600000},{"product_id":4887479,"category_id":18,"brand_id":6,"is_sponsored":false,"selling_price":136000000},{"product_id":3433146,"category_id":18,"brand_id":4,"is_sponsored":false,"selling_price":155300000},{"product_id":5261492,"category_id":18,"brand_id":94,"is_sponsored":false,"selling_price":218000000},{"product_id":4934636,"category_id":18,"brand_id":4,"is_sponsored":false,"selling_price":201800000},{"product_id":4896165,"category_id":18,"brand_id":94,"is_sponsored":false,"selling_price":79000000},{"product_id":5113426,"category_id":18,"brand_id":6,"is_sponsored":false,"selling_price":275990000},{"product_id":4461771,"category_id":18,"brand_id":6,"is_sponsored":false,"selling_price":379000000},{"product_id":4540657,"category_id":18,"brand_id":4,"is_sponsored":false,"selling_price":90000000},{"product_id":3634340,"category_id":18,"brand_id":4,"is_sponsored":false,"selling_price":239900000},{"product_id":4877214,"category_id":18,"brand_id":4,"is_sponsored":false,"selling_price":92200000}],"sponsored_products":[],"searchPhase":1,"searchModelName":"new_search_with_qu_new_ltr_redesigned_fetch_phase_1","searchModelVersion":10};
    var nowTimeInUTC = "2021-07-05 05:15:49";
    var isAnanasFriendly = true;
    var userId = 9735394;
    var adroRCActivation = true;
    var loginRegisterUrlWithBack = "\/users\/login-register\/?_back=https:\/\/www.digikala.com\/search\/?q%3D%25D9%2584%25D9%25BE%2520%25D8%25AA%25D8%25A7%25D9%25BE";
    var isNewCustomer = false;
    var digiclubLuckyDrawEndTime = "2021-09-29 15:30:32";
    var activateUrl = "\/digiclub\/activate\/";
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

  <main id="main">
    <div id="HomePageTopBanner"></div>
    <div id="content">
      <div class="container">
        <div class="o-page">
          <div class="c-filter-row js-ab-related-search-words js-ab-related-search-words-top u-hidden ">
            <div class="c-filter-row__title">جستجوهای مرتبط</div>
            <div class="c-filter-row__items"><a href="/search/?entry=rs&amp;q=لپ تاپ ایسوس">
                <div class="c-filter-row__item">لپ تاپ ایسوس</div>
              </a><a href="/search/?entry=rs&amp;q=لپ تاپ لنوو">
                <div class="c-filter-row__item">لپ تاپ لنوو</div>
              </a><a href="/search/?entry=rs&amp;q=لپ تاپ hp">
                <div class="c-filter-row__item">لپ تاپ hp</div>
              </a><a href="/search/?entry=rs&amp;q=لپ تاپ اپل">
                <div class="c-filter-row__item">لپ تاپ اپل</div>
              </a><a href="/search/?entry=rs&amp;q=لپ تاپ دل">
                <div class="c-filter-row__item">لپ تاپ دل</div>
              </a></div>
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
                  <div class="c-flat-box js-ab-related-search-words js-ab-related-search-words-right ">
                    <div class="c-flat-box__header">جستجوهای مرتبط</div>
                    <div class="c-flat-box__content"><a href="/search/?entry=rs&amp;q=لپ تاپ ایسوس">
                        <div class="c-flat-box__item ">
                          <div class="u-w-full">
                            لپ تاپ ایسوس
                          </div>
                          <i class="c-flat-box__item--icon"></i></div>
                      </a><a href="/search/?entry=rs&amp;q=لپ تاپ لنوو">
                        <div class="c-flat-box__item ">
                          <div class="u-w-full">
                            لپ تاپ لنوو
                          </div>
                          <i class="c-flat-box__item--icon"></i></div>
                      </a><a href="/search/?entry=rs&amp;q=لپ تاپ hp">
                        <div class="c-flat-box__item ">
                          <div class="u-w-full">
                            لپ تاپ hp
                          </div>
                          <i class="c-flat-box__item--icon"></i></div>
                      </a><a href="/search/?entry=rs&amp;q=لپ تاپ اپل">
                        <div class="c-flat-box__item ">
                          <div class="u-w-full">
                            لپ تاپ اپل
                          </div>
                          <i class="c-flat-box__item--icon"></i></div>
                      </a><a href="/search/?entry=rs&amp;q=لپ تاپ دل">
                        <div class="c-flat-box__item is-last">
                          <div class="u-w-full">
                            لپ تاپ دل
                          </div>
                          <i class="c-flat-box__item--icon"></i></div>
                      </a></div>
                  </div>
                  <div class="c-box">
                    <div class="c-box__header">دسته‌بندی نتایج</div>
                    <div class="c-filter c-filter--catalog js-box-content">
                      <div class=" js-box-content-items">
                        <div class="c-catalog show-more">
                          <ul class="c-catalog__list--depth js-catalog-list" style="max-height: unset; height: 250px;">
                            <li class="c-catalog__cat-item "><span
                                class="c-catalog__cat-item c-catalog__cat-item--arrow-left"><a class="c-catalog__link "
                                                                                               data-snt-event="dkSearchPageClick"
                                                                                               data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;کالای دیجیتال&quot;}"
                                                                                               href="/search/category-electronic-devices/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">کالای دیجیتال</a></span>
                              <div class=" show-more  ">
                                <ul class="c-catalog__list--depth ">
                                  <li class="c-catalog__cat-item "><span
                                      class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                        class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                        data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;لپ تاپ&quot;}"
                                        href="/search/category-laptop/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">لپ تاپ</a></span>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><span
                                            class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                              class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                              data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;لوازم جانبی لپ تاپ&quot;}"
                                              href="/search/category-laptop-accessories/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">لوازم جانبی لپ تاپ</a></span>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;سایر لوازم جانبی لپ تاپ&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-Laptop-Other-Accessories/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">سایر
                                                  لوازم جانبی لپ تاپ</a></li>
                                            </ul>
                                          </div>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;کیف و کاور لپ تاپ&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-laptop-bag/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">کیف
                                                  و کاور لپ تاپ</a></li>
                                            </ul>
                                          </div>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;باتری لپ‌تاپ&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-laptop-battery/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">باتری
                                                  لپ‌تاپ</a></li>
                                            </ul>
                                          </div>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;استند و پایه خنک‌کننده&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-stand-cooling-pad/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">استند
                                                  و پایه خنک‌کننده</a></li>
                                            </ul>
                                          </div>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;شارژر مخصوص لپ‌تاپ&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-laptop-charger/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">شارژر
                                                  مخصوص لپ‌تاپ</a></li>
                                            </ul>
                                          </div>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;لوازم جانبی مک بوک&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-macbook-accessories/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">لوازم
                                                  جانبی مک بوک</a></li>
                                            </ul>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                            data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;لپ تاپ و الترابوک&quot;}"
                                                                            class="c-catalog__link "
                                                                            href="/search/category-notebook-netbook-ultrabook/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">لپ
                                            تاپ و الترابوک</a></li>
                                      </ul>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                              <div class=" show-more  ">
                                <ul class="c-catalog__list--depth ">
                                  <li class="c-catalog__cat-item "><span
                                      class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                        class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                        data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;کامپیوتر و تجهیزات جانبی&quot;}"
                                        href="/search/category-computer-parts/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">کامپیوتر و تجهیزات جانبی</a></span>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><span
                                            class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                              class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                              data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;قطعات کامپیوتر&quot;}"
                                              href="/search/category-computer-devices/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">قطعات کامپیوتر</a></span>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;رم کامپیوتر و لپ‌تاپ (RAM)&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-ram/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">رم
                                                  کامپیوتر و لپ‌تاپ (RAM)</a></li>
                                            </ul>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><span
                                            class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                              class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                              data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;لوازم جانبی کامپیوتر&quot;}"
                                              href="/search/category-computer-accessories/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">لوازم جانبی کامپیوتر</a></span>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;لوازم جانبی قطعات کامپیوتر&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-accessory/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">لوازم
                                                  جانبی قطعات کامپیوتر</a></li>
                                            </ul>
                                          </div>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;لوازم جانبی تجهیزات ذخیره سازی&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-storage-accessories/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">لوازم
                                                  جانبی تجهیزات ذخیره سازی</a></li>
                                            </ul>
                                          </div>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;لوازم جانبی آی مک&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-imac-accessories/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">لوازم
                                                  جانبی آی مک</a></li>
                                            </ul>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                            data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;کیبورد (صفحه کلید)&quot;}"
                                                                            class="c-catalog__link "
                                                                            href="/search/category-keyboard/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">کیبورد
                                            (صفحه کلید)</a></li>
                                      </ul>
                                    </div>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><span
                                            class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                              class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                              data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;تجهیزات ذخیره‌سازی اطلاعات&quot;}"
                                              href="/search/category-data-storage/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">تجهیزات ذخیره‌سازی اطلاعات</a></span>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;هارددیسک اینترنال&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-internal-hard-drive/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">هارددیسک
                                                  اینترنال</a></li>
                                            </ul>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                            data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;اسپیکر (بلندگو)&quot;}"
                                                                            class="c-catalog__link "
                                                                            href="/search/category-speaker/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">اسپیکر
                                            (بلندگو)</a></li>
                                      </ul>
                                    </div>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                            data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;درایو نوری&quot;}"
                                                                            class="c-catalog__link "
                                                                            href="/search/category-optical-drive/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">درایو
                                            نوری</a></li>
                                      </ul>
                                    </div>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                            data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;کارت‌خوان&quot;}"
                                                                            class="c-catalog__link "
                                                                            href="/search/category-ram-reader/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">کارت‌خوان</a>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><span
                                            class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                              class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                              data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;تجهیزات شبکه و ارتباطات&quot;}"
                                              href="/search/category-network/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">تجهیزات شبکه و ارتباطات</a></span>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;مودم - روتر 3G و 4G و 5G&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-3g-4g-and-5g-modem-Router/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">مودم
                                                  - روتر 3G و 4G و 5G</a></li>
                                            </ul>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                            data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;USB هاب&quot;}"
                                                                            class="c-catalog__link "
                                                                            href="/search/category-usb-hub/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">USB
                                            هاب</a></li>
                                      </ul>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                              <div class=" show-more  ">
                                <ul class="c-catalog__list--depth ">
                                  <li class="c-catalog__cat-item "><span
                                      class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                        class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                        data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;لوازم جانبی کالای دیجیتال&quot;}"
                                        href="/search/category-accessories-main/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">لوازم جانبی کالای دیجیتال</a></span>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><span
                                            class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                              class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                              data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;لوازم جانبی تبلت&quot;}"
                                              href="/search/category-tablet-accessories/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">لوازم جانبی تبلت</a></span>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;کیف و کاور تبلت&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-tablet-bag-and-cover/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">کیف
                                                  و کاور تبلت</a></li>
                                            </ul>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><span
                                            class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                              class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                              data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;لوازم جانبی گوشی موبایل&quot;}"
                                              href="/search/category-mobile-accessories/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">لوازم جانبی گوشی موبایل</a></span>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;قطعات جانبی موبایل و تبلت&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-cell-phone-kits/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">قطعات
                                                  جانبی موبایل و تبلت</a></li>
                                            </ul>
                                          </div>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;پاوربانک (شارژر همراه)&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-power-bank/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">پاوربانک
                                                  (شارژر همراه)</a></li>
                                            </ul>
                                          </div>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;پایه نگهدارنده گوشی و تبلت&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-cell-phone-holder/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">پایه
                                                  نگهدارنده گوشی و تبلت</a></li>
                                            </ul>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                              <div class=" show-more  ">
                                <ul class="c-catalog__list--depth ">
                                  <li class="c-catalog__cat-item "><span
                                      class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                        class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                        data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;ماشین های اداری&quot;}"
                                        href="/search/category-office-machines/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">ماشین های اداری</a></span>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><span
                                            class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                              class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                              data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;لوازم فروشگاهی&quot;}"
                                              href="/search/category-shoping-equipment/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">لوازم فروشگاهی</a></span>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;تابلوی LED&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-led-system-board/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">تابلوی
                                                  LED</a></li>
                                            </ul>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                              <div class=" show-more  ">
                                <ul class="c-catalog__list--depth ">
                                  <li class="c-catalog__cat-item "><span
                                      class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                        class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                        data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;دوربین&quot;}"
                                        href="/search/category-camera/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">دوربین</a></span>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><span
                                            class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                              class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                              data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;لوازم جانبی عکاسی و فیلم برداری&quot;}"
                                              href="/search/category-camera-accessories/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">لوازم جانبی عکاسی و فیلم برداری</a></span>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;کیف دوربین&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-camera-bag/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">کیف
                                                  دوربین</a></li>
                                            </ul>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            </li>
                            <li class="c-catalog__cat-item "><span
                                class="c-catalog__cat-item c-catalog__cat-item--arrow-left"><a class="c-catalog__link "
                                                                                               data-snt-event="dkSearchPageClick"
                                                                                               data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;خانه و آشپزخانه&quot;}"
                                                                                               href="/search/category-home-and-kitchen/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">خانه و آشپزخانه</a></span>
                              <div class=" show-more  ">
                                <ul class="c-catalog__list--depth ">
                                  <li class="c-catalog__cat-item "><span
                                      class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                        class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                        data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;دکوراتیو&quot;}"
                                        href="/search/category-decorative/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">دکوراتیو</a></span>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                            data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;استیکر و پوستر&quot;}"
                                                                            class="c-catalog__link "
                                                                            href="/search/category-sticker-and-poster/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">استیکر
                                            و پوستر</a></li>
                                      </ul>
                                    </div>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><span
                                            class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                              class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                              data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;دکوراسیون اداری&quot;}"
                                              href="/search/category-office-furniture/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">دکوراسیون اداری</a></span>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;میز اداری&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-office-table/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">میز
                                                  اداری</a></li>
                                            </ul>
                                          </div>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;کمد فایل و قفسه اداری&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-office-file-cabinet-and-shelves/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">کمد
                                                  فایل و قفسه اداری</a></li>
                                            </ul>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><span
                                            class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                              class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                              data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;مبلمان خانگی&quot;}"
                                              href="/search/category-household-furniture/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">مبلمان خانگی</a></span>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;میز جلومبلی&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-front-furniture-table/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">میز
                                                  جلومبلی</a></li>
                                            </ul>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                              <div class=" show-more  ">
                                <ul class="c-catalog__list--depth ">
                                  <li class="c-catalog__cat-item "><span
                                      class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                        class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                        data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;صوتی و تصویری&quot;}"
                                        href="/search/category-video-audio-entertainment/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">صوتی و تصویری</a></span>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><span
                                            class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                              class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                              data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;لوازم جانبی صوتی و تصویری&quot;}"
                                              href="/search/category-multimedia-accessories/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">لوازم جانبی صوتی و تصویری</a></span>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;سایر لوازم جانبی صوتی و تصویری&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-audio-and-video-accessories/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">سایر
                                                  لوازم جانبی صوتی و تصویری</a></li>
                                            </ul>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                              <div class=" show-more  ">
                                <ul class="c-catalog__list--depth ">
                                  <li class="c-catalog__cat-item "><span
                                      class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                        class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                        data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;شستشو و نظافت&quot;}"
                                        href="/search/category-cleaning/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">شستشو و نظافت</a></span>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><span
                                            class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                              class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                              data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;لوازم اتو&quot;}"
                                              href="/search/category-ironingac/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">لوازم اتو</a></span>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;میز اتو&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-irontable/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">میز
                                                  اتو</a></li>
                                            </ul>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            </li>
                            <li class="c-catalog__cat-item "><span
                                class="c-catalog__cat-item c-catalog__cat-item--arrow-left"><a class="c-catalog__link "
                                                                                               data-snt-event="dkSearchPageClick"
                                                                                               data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;ورزش و سفر&quot;}"
                                                                                               href="/search/category-sport-entertainment/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">ورزش و سفر</a></span>
                              <div class=" show-more  ">
                                <ul class="c-catalog__list--depth ">
                                  <li class="c-catalog__cat-item "><span
                                      class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                        class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                        data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;تجهیزات سفر&quot;}"
                                        href="/search/category-traveling-equipment/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">تجهیزات سفر</a></span>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                            data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;کیف و کوله&quot;}"
                                                                            class="c-catalog__link "
                                                                            href="/search/category-bag-and-backpack/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">کیف
                                            و کوله</a></li>
                                      </ul>
                                    </div>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                            data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;ساک و چمدان&quot;}"
                                                                            class="c-catalog__link "
                                                                            href="/search/category-trolley-case-and-luggage/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">ساک
                                            و چمدان</a></li>
                                      </ul>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            </li>
                            <li class="c-catalog__cat-item "><span
                                class="c-catalog__cat-item c-catalog__cat-item--arrow-left"><a class="c-catalog__link "
                                                                                               data-snt-event="dkSearchPageClick"
                                                                                               data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;اسباب بازی، کودک و نوزاد&quot;}"
                                                                                               href="/search/category-mother-and-child/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">اسباب بازی، کودک و نوزاد</a></span>
                              <div class=" show-more  ">
                                <ul class="c-catalog__list--depth ">
                                  <li class="c-catalog__cat-item "><span
                                      class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                        class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                        data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;سرگرمی و آموزشی&quot;}"
                                        href="/search/category-entertainment-and-games-equipment/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">سرگرمی و آموزشی</a></span>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><span
                                            class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                              class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                              data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;اسباب بازی&quot;}"
                                              href="/search/category-toys/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">اسباب بازی</a></span>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><span
                                                  class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                                    class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                                    data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;فکری و آموزشی&quot;}"
                                                    href="/search/category-intellectual-and-educational/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">فکری و آموزشی</a></span>
                                                <div class=" show-more  ">
                                                  <ul class="c-catalog__list--depth ">
                                                    <li class="c-catalog__cat-item "><a
                                                        data-snt-event="dkSearchPageClick"
                                                        data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;بازی آموزشی&quot;}"
                                                        class="c-catalog__link "
                                                        href="/search/category-educational-game/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">بازی
                                                        آموزشی</a></li>
                                                  </ul>
                                                </div>
                                              </li>
                                            </ul>
                                          </div>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><span
                                                  class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                                    class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                                    data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;عروسک و مدل&quot;}"
                                                    href="/search/category-toy-and-model/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">عروسک و مدل</a></span>
                                                <div class=" show-more  ">
                                                  <ul class="c-catalog__list--depth ">
                                                    <li class="c-catalog__cat-item "><a
                                                        data-snt-event="dkSearchPageClick"
                                                        data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;عروسک&quot;}"
                                                        class="c-catalog__link "
                                                        href="/search/category-doll/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">عروسک</a>
                                                    </li>
                                                  </ul>
                                                </div>
                                              </li>
                                            </ul>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            </li>
                            <li class="c-catalog__cat-item "><span
                                class="c-catalog__cat-item c-catalog__cat-item--arrow-left"><a class="c-catalog__link "
                                                                                               data-snt-event="dkSearchPageClick"
                                                                                               data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;کتاب، لوازم تحریر و هنر&quot;}"
                                                                                               href="/search/category-book-and-media/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">کتاب، لوازم تحریر و هنر</a></span>
                              <div class=" show-more  ">
                                <ul class="c-catalog__list--depth ">
                                  <li class="c-catalog__cat-item "><span
                                      class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                        class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                        data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;لوازم تحریر&quot;}"
                                        href="/search/category-stationery/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">لوازم تحریر</a></span>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                            data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;میز تحریر&quot;}"
                                                                            class="c-catalog__link "
                                                                            href="/search/category-writing-desk/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">میز
                                            تحریر</a></li>
                                      </ul>
                                    </div>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><span
                                            class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                              class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                              data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;کیف، کوله و جامدادی&quot;}"
                                              href="/search/category-bags-backpacks/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">کیف، کوله و جامدادی</a></span>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;کیف و کوله مدرسه&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-bags/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">کیف
                                                  و کوله مدرسه</a></li>
                                            </ul>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><span
                                            class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                              class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                              data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;لوازم اداری&quot;}"
                                              href="/search/category-office-supplies/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">لوازم اداری</a></span>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;تخته وایت‌برد و کلیربرد&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-whiteboard/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">تخته
                                                  وایت‌برد و کلیربرد</a></li>
                                            </ul>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                              <div class=" show-more  ">
                                <ul class="c-catalog__list--depth ">
                                  <li class="c-catalog__cat-item "><span
                                      class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                        class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                        data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;آلات موسیقی&quot;}"
                                        href="/search/category-musicalinstruments/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">آلات موسیقی</a></span>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><span
                                            class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                              class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                              data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;لوازم جانبی آلات موسیقی&quot;}"
                                              href="/search/category-musicinstrumentsaccessories/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">لوازم جانبی آلات موسیقی</a></span>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;صندلی و پایه‌ی آلات موسیقی&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-stand/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">صندلی
                                                  و پایه‌ی آلات موسیقی</a></li>
                                            </ul>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                              <div class=" show-more  ">
                                <ul class="c-catalog__list--depth ">
                                  <li class="c-catalog__cat-item "><span
                                      class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                        class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                        data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;کتاب و مجلات&quot;}"
                                        href="/search/category-publication/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">کتاب و مجلات</a></span>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                            data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;کتاب چاپی&quot;}"
                                                                            class="c-catalog__link "
                                                                            href="/search/category-book/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">کتاب
                                            چاپی</a></li>
                                      </ul>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                              <div class=" show-more  ">
                                <ul class="c-catalog__list--depth ">
                                  <li class="c-catalog__cat-item "><span
                                      class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                        class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                        data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;صنایع دستی&quot;}"
                                        href="/search/category-handicraft/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">صنایع دستی</a></span>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                            data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;کیف چرمی دست دوز&quot;}"
                                                                            class="c-catalog__link "
                                                                            href="/search/category-leatherbag/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">کیف
                                            چرمی دست دوز</a></li>
                                      </ul>
                                    </div>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><span
                                            class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                              class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                              data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;دست بافته های سنتی و محصولات پارچه ای&quot;}"
                                              href="/search/category-textile-industry/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">دست بافته های سنتی و محصولات پارچه ای</a></span>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;کیف دست دوز پارچه ای&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-handicraft-bag/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">کیف
                                                  دست دوز پارچه ای</a></li>
                                            </ul>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            </li>
                            <li class="c-catalog__cat-item "><span
                                class="c-catalog__cat-item c-catalog__cat-item--arrow-left"><a class="c-catalog__link "
                                                                                               data-snt-event="dkSearchPageClick"
                                                                                               data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;مد و پوشاک&quot;}"
                                                                                               href="/search/category-apparel/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">مد و پوشاک</a></span>
                              <div class=" show-more  ">
                                <ul class="c-catalog__list--depth ">
                                  <li class="c-catalog__cat-item "><span
                                      class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                        class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                        data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;زنانه&quot;}"
                                        href="/search/category-womens-apparel/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">زنانه</a></span>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><span
                                            class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                              class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                              data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;اکسسوری زنانه&quot;}"
                                              href="/search/category-women-accessories/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">اکسسوری زنانه</a></span>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;کیف زنانه&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-women-bags/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">کیف
                                                  زنانه</a></li>
                                            </ul>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                              <div class=" show-more  ">
                                <ul class="c-catalog__list--depth ">
                                  <li class="c-catalog__cat-item "><span
                                      class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                        class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                        data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;مردانه&quot;}"
                                        href="/search/category-mens-apparel/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">مردانه</a></span>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><span
                                            class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                              class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                              data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;اکسسوری مردانه&quot;}"
                                              href="/search/category-men-accessories/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">اکسسوری مردانه</a></span>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;کیف مردانه&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-men-bags/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">کیف
                                                  مردانه</a></li>
                                            </ul>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><span
                                            class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                              class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                              data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;لباس مردانه&quot;}"
                                              href="/search/category-men-clothing/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">لباس مردانه</a></span>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><span
                                                  class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                                    class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                                    data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;لباس ورزشی مردانه&quot;}"
                                                    href="/search/category-men-sportswear/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">لباس ورزشی مردانه</a></span>
                                                <div class=" show-more  ">
                                                  <ul class="c-catalog__list--depth ">
                                                    <li class="c-catalog__cat-item "><a
                                                        data-snt-event="dkSearchPageClick"
                                                        data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;تی شرت و پولوشرت ورزشی مردانه&quot;}"
                                                        class="c-catalog__link "
                                                        href="/search/category-men-sport-t-shirts-polos/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">تی
                                                        شرت و پولوشرت ورزشی مردانه</a></li>
                                                  </ul>
                                                </div>
                                              </li>
                                            </ul>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                              <div class=" show-more  ">
                                <ul class="c-catalog__list--depth ">
                                  <li class="c-catalog__cat-item "><span
                                      class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                        class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                        data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;زنانه و مردانه&quot;}"
                                        href="/search/category-uni-clothing/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">زنانه و مردانه</a></span>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><span
                                            class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                              class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                              data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;اکسسوری زنانه و مردانه&quot;}"
                                              href="/search/category-uni-accessories/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">اکسسوری زنانه و مردانه</a></span>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;پیکسل&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-Badge/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">پیکسل</a>
                                              </li>
                                            </ul>
                                          </div>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;کیف زنانه و مردانه&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-uni-bags/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">کیف
                                                  زنانه و مردانه</a></li>
                                            </ul>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            </li>
                            <li class="c-catalog__cat-item "><span
                                class="c-catalog__cat-item c-catalog__cat-item--arrow-left"><a class="c-catalog__link "
                                                                                               data-snt-event="dkSearchPageClick"
                                                                                               data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;خودرو، ابزار و تجهیزات صنعتی&quot;}"
                                                                                               href="/search/category-vehicles/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">خودرو، ابزار و تجهیزات صنعتی</a></span>
                              <div class=" show-more  ">
                                <ul class="c-catalog__list--depth ">
                                  <li class="c-catalog__cat-item "><span
                                      class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                        class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                        data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;لوازم جانبی خودرو&quot;}"
                                        href="/search/category-car-accessory-parts/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">لوازم جانبی خودرو</a></span>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                            data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;سایر لوازم خودرو&quot;}"
                                                                            class="c-catalog__link "
                                                                            href="/search/category-in-car-accessories/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">سایر
                                            لوازم خودرو</a></li>
                                      </ul>
                                    </div>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><span
                                            class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                              class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                              data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;لوازم تزئینی خودرو&quot;}"
                                              href="/search/category-in-car-accessorie/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">لوازم تزئینی خودرو</a></span>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;تجهیزات نظم دهنده داخل خودرو&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-car-organizer-equipment/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">تجهیزات
                                                  نظم دهنده داخل خودرو</a></li>
                                            </ul>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                              <div class=" show-more  ">
                                <ul class="c-catalog__list--depth ">
                                  <li class="c-catalog__cat-item "><span
                                      class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                        class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                        data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;ابزار برقی&quot;}"
                                        href="/search/category-power-tools/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">ابزار برقی</a></span>
                                    <div class=" show-more  ">
                                      <ul class="c-catalog__list--depth ">
                                        <li class="c-catalog__cat-item "><span
                                            class="c-catalog__cat-item c-catalog__cat-item--arrow-down"><a
                                              class="c-catalog__link " data-snt-event="dkSearchPageClick"
                                              data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;لوازم جانبی ابزار برقی، شارژی و بادی&quot;}"
                                              href="/search/category-elec-charg-pneumatic-charg-accessories/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">لوازم جانبی ابزار برقی، شارژی و بادی</a></span>
                                          <div class=" show-more  ">
                                            <ul class="c-catalog__list--depth ">
                                              <li class="c-catalog__cat-item "><a data-snt-event="dkSearchPageClick"
                                                                                  data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;باتری و شارژر&quot;}"
                                                                                  class="c-catalog__link "
                                                                                  href="/search/category-battery-charger/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE">باتری
                                                  و شارژر</a></li>
                                            </ul>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            </li>
                          </ul>
                          <div data-snt-event="dkSearchPageClick"
                               data-snt-params="{&quot;item&quot;:&quot;catalog-filter&quot;,&quot;item_option&quot;:&quot;show-all&quot;}"
                               class="c-catalog__show-more js-catalog-show-more">
                            مشاهده همه دسته‌بندی‌ها
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="c-box">
                    <div class="c-box__header">جستجو در نتایج:</div>
                    <div class="c-box__content">
                      <div class="c-ui-input c-ui-input--quick-search"><input type="text"
                                                                              class="c-ui-input__field c-ui-input__field--cleanable js-cleanable-input"
                                                                              value="" name="searchInput"
                                                                              data-event="search_in_category"
                                                                              data-event-category="search_page"
                                                                              placeholder="نام محصول یا برند مورد نظر را بنویسید…"><span
                          class="c-ui-input-cleaner js-input-cleaner"></span></div>
                    </div>
                  </div>
                  <div class="c-box c-box--brands-filter js-ab-sidebar-filter">
                    <div class="">
                      <div class="c-box__header c-box__header--toggleable js-box-toggle ">برند

                      </div>
                      <div class="c-filter c-filter--params js-box-content">
                        <div class="c-ui-input c-ui-input--quick-search"><input type="text"
                                                                                class="c-ui-input__field c-ui-input__field--cleanable js-filter-input js-cleanable-input"
                                                                                placeholder="جستجوی نام برند…"><span
                            class="c-ui-input-cleaner js-input-cleaner"></span></div>
                        <div class="c-message c-message-light c-message-light--info js-message-error u-hidden"><p>برند
                            یا سازنده‌ای با این نام پیدا نشد!</p></div>
                        <div class="c-box__divider c-box__divider--full">
                          <div></div>
                        </div>
                        <div class="c-box__scroll-container">
                          <div class="c-box__scroll js-box-content-items">
                            <ul>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-94" data-fa="لنوو"
                                         data-en="Lenovo" data-search="لنوو Lenovo">
                                  لنوو
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="94" name="brand[]"
                                                                            data-search-uid="brand" id="brand-param-94"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-4" data-fa="ایسوس"
                                         data-en="ASUS" data-search="ایسوس ASUS">
                                  ایسوس
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="4" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-4"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-6" data-fa="اچ‌پی"
                                         data-en="HP" data-search="اچ‌پی HP">
                                  اچ‌پی
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="6" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-6"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-10" data-fa="اپل"
                                         data-en="Apple" data-search="اپل Apple">
                                  اپل
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="10" name="brand[]"
                                                                            data-search-uid="brand" id="brand-param-10"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-2" data-fa="دل"
                                         data-en="Dell" data-search="دل Dell">
                                  دل
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="2" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-2"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-51"
                                         data-fa="مایکروسافت" data-en="Microsoft" data-search="مایکروسافت Microsoft">
                                  مایکروسافت
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="51" name="brand[]"
                                                                            data-search-uid="brand" id="brand-param-51"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-3" data-fa="ایسر"
                                         data-en="Acer" data-search="ایسر Acer">
                                  ایسر
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="3" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-3"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-82"
                                         data-fa="هوآوی" data-en="Huawei" data-search="هوآوی Huawei">
                                  هوآوی
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="82" name="brand[]"
                                                                            data-search-uid="brand" id="brand-param-82"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-91" data-fa="ریزر"
                                         data-en="Razer" data-search="ریزر Razer">
                                  ریزر
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="91" name="brand[]"
                                                                            data-search-uid="brand" id="brand-param-91"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-95"
                                         data-fa="ام اس آی" data-en="MSI" data-search="ام اس آی MSI">
                                  ام اس آی
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="95" name="brand[]"
                                                                            data-search-uid="brand" id="brand-param-95"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-187"
                                         data-fa="فوروارد" data-en="Forward" data-search="فوروارد Forward">
                                  فوروارد
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="187" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-187"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-6387"
                                         data-fa="جی بگ" data-en="Gbag" data-search="جی بگ Gbag">
                                  جی بگ
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="6387" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-6387"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-18"
                                         data-fa="سامسونگ" data-en="Samsung" data-search="سامسونگ Samsung">
                                  سامسونگ
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="18" name="brand[]"
                                                                            data-search-uid="brand" id="brand-param-18"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1067"
                                         data-fa="اس تی ام" data-en="STM" data-search="اس تی ام STM">
                                  اس تی ام
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1067" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1067"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1651"
                                         data-fa="نیلکین" data-en="Nillkin" data-search="نیلکین Nillkin">
                                  نیلکین
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1651" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1651"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1662"
                                         data-fa="شیائومی" data-en="Xiaomi" data-search="شیائومی Xiaomi">
                                  شیائومی
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1662" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1662"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1110"
                                         data-fa="کروشیال" data-en="Crucial" data-search="کروشیال Crucial">
                                  کروشیال
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1110" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1110"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1811"
                                         data-fa="کولر مستر" data-en="Cooler Master"
                                         data-search="کولر مستر Cooler Master">
                                  کولر مستر
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1811" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1811"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-186"
                                         data-fa="آبکاس" data-en="Abacus" data-search="آبکاس Abacus">
                                  آبکاس
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="186" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-186"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-56" data-fa="تسکو"
                                         data-en="TSCO" data-search="تسکو TSCO">
                                  تسکو
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="56" name="brand[]"
                                                                            data-search-uid="brand" id="brand-param-56"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1070"
                                         data-fa="سادیتا" data-en="SADATA" data-search="سادیتا SADATA">
                                  سادیتا
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1070" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1070"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-202"
                                         data-fa="ایکس پی-پروداکت" data-en="XP-Product"
                                         data-search="ایکس پی-پروداکت XP-Product">
                                  ایکس پی-پروداکت
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="202" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-202"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-5765"
                                         data-fa="چرم ما" data-en="Charmema" data-search="چرم ما Charmema">
                                  چرم ما
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="5765" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-5765"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1223"
                                         data-fa="دلسی" data-en="Delsey" data-search="دلسی Delsey">
                                  دلسی
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1223" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1223"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-7828"
                                         data-fa="ویوو" data-en="Wiwu" data-search="ویوو Wiwu">
                                  ویوو
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="7828" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-7828"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-2526"
                                         data-fa="پورش دیزاین" data-en="Porsche Design"
                                         data-search="پورش دیزاین Porsche Design">
                                  پورش دیزاین
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="2526" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-2526"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1075"
                                         data-fa="کاترپیلار" data-en="CAT" data-search="کاترپیلار CAT">
                                  کاترپیلار
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1075" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1075"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-213"
                                         data-fa="باسئوس" data-en="Baseus" data-search="باسئوس Baseus">
                                  باسئوس
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="213" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-213"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-4445"
                                         data-fa="انتخاب اول" data-en="Entekhabe Aval"
                                         data-search="انتخاب اول Entekhabe Aval">
                                  انتخاب اول
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="4445" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-4445"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-33"
                                         data-fa="کینگستون" data-en="Kingston" data-search="کینگستون Kingston">
                                  کینگستون
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="33" name="brand[]"
                                                                            data-search-uid="brand" id="brand-param-33"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1080"
                                         data-fa="پیر کاردین" data-en="Pierre Cardin"
                                         data-search="پیر کاردین Pierre Cardin">
                                  پیر کاردین
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1080" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1080"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-136"
                                         data-fa="دیپ کول" data-en="DeepCool" data-search="دیپ کول DeepCool">
                                  دیپ کول
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="136" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-136"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1" data-fa="سونی"
                                         data-en="Sony" data-search="سونی Sony">
                                  سونی
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-185"
                                         data-fa="موشی" data-en="Moshi" data-search="موشی Moshi">
                                  موشی
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="185" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-185"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-6219"
                                         data-fa="دیکوتا" data-en="DICOTA" data-search="دیکوتا DICOTA">
                                  دیکوتا
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="6219" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-6219"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-6124"
                                         data-fa="پروتیبل" data-en="Protable" data-search="پروتیبل Protable">
                                  پروتیبل
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="6124" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-6124"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1915"
                                         data-fa="جی سی پال" data-en="JCPAL" data-search="جی سی پال JCPAL">
                                  جی سی پال
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1915" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1915"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-17043"
                                         data-fa="ایسر پریدیتور" data-en="Acer Predator"
                                         data-search="ایسر پریدیتور Acer Predator">
                                  ایسر پریدیتور
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="17043" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-17043"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-8923"
                                         data-fa="کینگ استار" data-en="King Star" data-search="کینگ استار King Star">
                                  کینگ استار
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="8923" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-8923"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-154"
                                         data-fa="کیس لاجیک" data-en="Case Logic" data-search="کیس لاجیک Case Logic">
                                  کیس لاجیک
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="154" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-154"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1128"
                                         data-fa="ریوا کیس" data-en="Riva Case" data-search="ریوا کیس Riva Case">
                                  ریوا کیس
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1128" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1128"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-2361"
                                         data-fa="هویت" data-en="Havit" data-search="هویت Havit">
                                  هویت
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="2361" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-2361"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-3736"
                                         data-fa="ریدمکس" data-en="Raidmax" data-search="ریدمکس Raidmax">
                                  ریدمکس
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="3736" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-3736"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-3142"
                                         data-fa="گابل" data-en="Gabol" data-search="گابل Gabol">
                                  گابل
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="3142" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-3142"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-73"
                                         data-fa="تارگوس" data-en="Targus" data-search="تارگوس Targus">
                                  تارگوس
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="73" name="brand[]"
                                                                            data-search-uid="brand" id="brand-param-73"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1224"
                                         data-fa="سامسونیت" data-en="Samsonite" data-search="سامسونیت Samsonite">
                                  سامسونیت
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1224" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1224"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-7809"
                                         data-fa="میکرون" data-en="Micron" data-search="میکرون Micron">
                                  میکرون
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="7809" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-7809"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-6028"
                                         data-fa="پی نت" data-en="P-Net" data-search="پی نت P-Net">
                                  پی نت
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="6028" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-6028"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-4864"
                                         data-fa="گالری روهام" data-en="Gallery Rohaam"
                                         data-search="گالری روهام Gallery Rohaam">
                                  گالری روهام
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="4864" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-4864"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-2386"
                                         data-fa="ایکیا" data-en="Ikea" data-search="ایکیا Ikea">
                                  ایکیا
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="2386" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-2386"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-5288"
                                         data-fa="ماهوت" data-en="MAHOOT" data-search="ماهوت MAHOOT">
                                  ماهوت
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="5288" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-5288"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-733"
                                         data-fa="کمل اکتیو" data-en="Camel Active"
                                         data-search="کمل اکتیو Camel Active">
                                  کمل اکتیو
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="733" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-733"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-5"
                                         data-fa="فوجیتسو" data-en="Fujitsu" data-search="فوجیتسو Fujitsu">
                                  فوجیتسو
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="5" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-5"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-61"
                                         data-fa="ای دیتا" data-en="ADATA" data-search="ای دیتا ADATA">
                                  ای دیتا
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="61" name="brand[]"
                                                                            data-search-uid="brand" id="brand-param-61"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-6047"
                                         data-fa="سوییس گیر" data-en="Swiss Gear" data-search="سوییس گیر Swiss Gear">
                                  سوییس گیر
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="6047" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-6047"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-188"
                                         data-fa="وایو" data-en="Vaio" data-search="وایو Vaio">
                                  وایو
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="188" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-188"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-2926"
                                         data-fa="دی-نت" data-en="D-Net" data-search="دی-نت D-Net">
                                  دی-نت
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="2926" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-2926"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-135"
                                         data-fa="بلکین" data-en="Belkin" data-search="بلکین Belkin">
                                  بلکین
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="135" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-135"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-3091"
                                         data-fa="گارد" data-en="Guard" data-search="گارد Guard">
                                  گارد
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="3091" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-3091"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-9"
                                         data-fa="توشیبا" data-en="Toshiba" data-search="توشیبا Toshiba">
                                  توشیبا
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="9" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-9"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1163"
                                         data-fa="الین ویر" data-en="Alienware" data-search="الین ویر Alienware">
                                  الین ویر
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1163" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1163"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-6514"
                                         data-fa="رکسوس" data-en="rexus" data-search="رکسوس rexus">
                                  رکسوس
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="6514" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-6514"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1042"
                                         data-fa="تواینموس" data-en="TwinMos" data-search="تواینموس TwinMos">
                                  تواینموس
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1042" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1042"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-2809"
                                         data-fa="کرامپلر" data-en="Crumpler" data-search="کرامپلر Crumpler">
                                  کرامپلر
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="2809" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-2809"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-155"
                                         data-fa="گولا" data-en="Golla" data-search="گولا Golla">
                                  گولا
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="155" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-155"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-4284"
                                         data-fa="اکتیو لینک" data-en="Active Link"
                                         data-search="اکتیو لینک Active Link">
                                  اکتیو لینک
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="4284" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-4284"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-184"
                                         data-fa="الکسا" data-en="Alexa" data-search="الکسا Alexa">
                                  الکسا
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="184" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-184"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1324"
                                         data-fa="نورث فیس" data-en="The North Face"
                                         data-search="نورث فیس The North Face">
                                  نورث فیس
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1324" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1324"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-5866"
                                         data-fa="اکسون" data-en="Exon" data-search="اکسون Exon">
                                  اکسون
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="5866" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-5866"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-721"
                                         data-fa="ایکس-دوریا" data-en="X-Doria" data-search="ایکس-دوریا X-Doria">
                                  ایکس-دوریا
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="721" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-721"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1474"
                                         data-fa="بنتون" data-en="Benetton" data-search="بنتون Benetton">
                                  بنتون
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1474" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1474"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-6052"
                                         data-fa="یونیک" data-en="Uniq" data-search="یونیک Uniq">
                                  یونیک
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="6052" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-6052"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-5462"
                                         data-fa="انارلدر" data-en="Anar Leather" data-search="انارلدر Anar Leather">
                                  انارلدر
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="5462" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-5462"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1665"
                                         data-fa="لکسون" data-en="LEXON" data-search="لکسون LEXON">
                                  لکسون
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1665" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1665"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1935"
                                         data-fa="اینکیس" data-en="Incase" data-search="اینکیس Incase">
                                  اینکیس
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1935" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1935"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-10397"
                                         data-fa="ای دیتا ایکس پی جی" data-en="XPG"
                                         data-search="ای دیتا ایکس پی جی XPG">
                                  ای دیتا ایکس پی جی
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="10397" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-10397"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-5927"
                                         data-fa="ایکس او" data-en="XO" data-search="ایکس او XO">
                                  ایکس او
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="5927" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-5927"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-22"
                                         data-fa="ال جی" data-en="LG" data-search="ال جی LG">
                                  ال جی
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="22" name="brand[]"
                                                                            data-search-uid="brand" id="brand-param-22"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-45" data-fa="گیل"
                                         data-en="Geil" data-search="گیل Geil">
                                  گیل
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="45" name="brand[]"
                                                                            data-search-uid="brand" id="brand-param-45"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1565"
                                         data-fa="زیگورات" data-en="Zigorat" data-search="زیگورات Zigorat">
                                  زیگورات
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1565" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1565"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-3663"
                                         data-fa="داتیس" data-en="Datis" data-search="داتیس Datis">
                                  داتیس
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="3663" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-3663"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-5084"
                                         data-fa="کی نت پلاس" data-en="K-Net Plus" data-search="کی نت پلاس K-Net Plus">
                                  کی نت پلاس
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="5084" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-5084"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-3669"
                                         data-fa="نانیا" data-en="Nania" data-search="نانیا Nania">
                                  نانیا
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="3669" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-3669"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-992"
                                         data-fa="آی لایف" data-en="i-Life" data-search="آی لایف i-Life">
                                  آی لایف
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="992" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-992"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-7" data-fa="کامپک"
                                         data-en="Compaq" data-search="کامپک Compaq">
                                  کامپک
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="7" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-7"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-5834"
                                         data-fa="ونوس" data-en="Venous" data-search="ونوس Venous">
                                  ونوس
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="5834" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-5834"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-2544"
                                         data-fa="الیکسیر" data-en="Elixir" data-search="الیکسیر Elixir">
                                  الیکسیر
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="2544" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-2544"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1153"
                                         data-fa="دیتالایف" data-en="DataLife" data-search="دیتالایف DataLife">
                                  دیتالایف
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1153" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1153"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1782"
                                         data-fa="الفکس" data-en="Alfex" data-search="الفکس Alfex">
                                  الفکس
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1782" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1782"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1716"
                                         data-fa="ریمکس" data-en="Remax" data-search="ریمکس Remax">
                                  ریمکس
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1716" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1716"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-5625"
                                         data-fa="جوی روم" data-en="Joyroom" data-search="جوی روم Joyroom">
                                  جوی روم
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="5625" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-5625"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-7860"
                                         data-fa="کوتتسی" data-en="COTEteCI" data-search="کوتتسی COTEteCI">
                                  کوتتسی
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="7860" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-7860"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-11"
                                         data-fa="سوزوکی" data-en="Suzuki" data-search="سوزوکی Suzuki">
                                  سوزوکی
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="11" name="brand[]"
                                                                            data-search-uid="brand" id="brand-param-11"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-4307"
                                         data-fa="باراد" data-en="Barad" data-search="باراد Barad">
                                  باراد
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="4307" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-4307"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1227"
                                         data-fa="تومی" data-en="Tumi" data-search="تومی Tumi">
                                  تومی
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1227" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1227"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-34"
                                         data-fa="گیگابایت" data-en="GIGABYTE" data-search="گیگابایت GIGABYTE">
                                  گیگابایت
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="34" name="brand[]"
                                                                            data-search-uid="brand" id="brand-param-34"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1920"
                                         data-fa="امریکن توریستر" data-en="American Tourister"
                                         data-search="امریکن توریستر American Tourister">
                                  امریکن توریستر
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1920" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1920"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-2562"
                                         data-fa="جان اسپرت" data-en="JanSport" data-search="جان اسپرت JanSport">
                                  جان اسپرت
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="2562" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-2562"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-126"
                                         data-fa="پی ان وای" data-en="PNY" data-search="پی ان وای PNY">
                                  پی ان وای
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="126" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-126"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-4507"
                                         data-fa="چرم زانکو" data-en="Zanko Leather"
                                         data-search="چرم زانکو Zanko Leather">
                                  چرم زانکو
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="4507" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-4507"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-3967"
                                         data-fa="اسکار" data-en="Oscar" data-search="اسکار Oscar">
                                  اسکار
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="3967" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-3967"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-6414"
                                         data-fa="ای تی اند تی" data-en="AT and T" data-search="ای تی اند تی AT and T">
                                  ای تی اند تی
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="6414" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-6414"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-2389"
                                         data-fa="لنوا" data-en="Lenwa" data-search="لنوا Lenwa">
                                  لنوا
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="2389" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-2389"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-5022"
                                         data-fa="دی سی" data-en="DC" data-search="دی سی DC">
                                  دی سی
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="5022" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-5022"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-19059"
                                         data-fa="لاک بگ" data-en="Lockbag" data-search="لاک بگ Lockbag">
                                  لاک بگ
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="19059" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-19059"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-4059"
                                         data-fa="انیسه" data-en="Oniseh" data-search="انیسه Oniseh">
                                  انیسه
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="4059" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-4059"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1697"
                                         data-fa="کمل" data-en="Camel" data-search="کمل Camel">
                                  کمل
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1697" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1697"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-6050"
                                         data-fa="نوآکسیا" data-en="Nuoxiya" data-search="نوآکسیا Nuoxiya">
                                  نوآکسیا
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="6050" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-6050"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-128"
                                         data-fa="اپیسر" data-en="Apacer" data-search="اپیسر Apacer">
                                  اپیسر
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="128" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-128"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-3931"
                                         data-fa="دورابوک" data-en="Durabook" data-search="دورابوک Durabook">
                                  دورابوک
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="3931" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-3931"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-3012"
                                         data-fa="توله" data-en="Thule" data-search="توله Thule">
                                  توله
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="3012" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-3012"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-24220"
                                         data-fa="انتشارات آیلار" data-en="" data-search="انتشارات آیلار ">
                                  انتشارات آیلار
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="24220" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-24220"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-2646"
                                         data-fa="کهن چرم" data-en="Kohan Charm" data-search="کهن چرم Kohan Charm">
                                  کهن چرم
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="2646" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-2646"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-29"
                                         data-fa="اینتل" data-en="Intel" data-search="اینتل Intel">
                                  اینتل
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="29" name="brand[]"
                                                                            data-search-uid="brand" id="brand-param-29"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-2649"
                                         data-fa="پرومیت" data-en="Promate" data-search="پرومیت Promate">
                                  پرومیت
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="2649" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-2649"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-5450"
                                         data-fa="صنایع چوب همایونفر" data-en="Homayoonfar Wood Industry"
                                         data-search="صنایع چوب همایونفر Homayoonfar Wood Industry">
                                  صنایع چوب همایونفر
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="5450" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-5450"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-5113"
                                         data-fa="فلوز" data-en="fellowes" data-search="فلوز fellowes">
                                  فلوز
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="5113" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-5113"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-5299"
                                         data-fa="کوتتسی" data-en="Coteetci" data-search="کوتتسی Coteetci">
                                  کوتتسی
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="5299" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-5299"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1693"
                                         data-fa="تیم گروپ" data-en="Team Group" data-search="تیم گروپ Team Group">
                                  تیم گروپ
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1693" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1693"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-3892"
                                         data-fa="یو دی جی" data-en="UDG" data-search="یو دی جی UDG">
                                  یو دی جی
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="3892" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-3892"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-133"
                                         data-fa="درسا" data-en="Dorsa" data-search="درسا Dorsa">
                                  درسا
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="133" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-133"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-363"
                                         data-fa="ام پی" data-en="MP" data-search="ام پی MP">
                                  ام پی
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="363" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-363"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-4074"
                                         data-fa="بالینکو" data-en="Ballinco" data-search="بالینکو Ballinco">
                                  بالینکو
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="4074" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-4074"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-464"
                                         data-fa="انویدیا" data-en="Nvidia" data-search="انویدیا Nvidia">
                                  انویدیا
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="464" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-464"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1895"
                                         data-fa="دیباگران تهران" data-en="Dibagaran"
                                         data-search="دیباگران تهران Dibagaran">
                                  دیباگران تهران
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1895" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1895"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-722"
                                         data-fa="لکسین" data-en="Lexin" data-search="لکسین Lexin">
                                  لکسین
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="722" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-722"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1978"
                                         data-fa="تک21" data-en="Tech21" data-search="تک21 Tech21">
                                  تک۲۱
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1978" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1978"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-41" data-fa="گرین"
                                         data-en="Green" data-search="گرین Green">
                                  گرین
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="41" name="brand[]"
                                                                            data-search-uid="brand" id="brand-param-41"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1127"
                                         data-fa="پتریوت" data-en="Patriot" data-search="پتریوت Patriot">
                                  پتریوت
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1127" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1127"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-2898"
                                         data-fa="یوسمز" data-en="Usams" data-search="یوسمز Usams">
                                  یوسمز
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="2898" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-2898"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-5759"
                                         data-fa="ساتچی" data-en="Satechi" data-search="ساتچی Satechi">
                                  ساتچی
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="5759" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-5759"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-77"
                                         data-fa="کینگ مکس" data-en="Kingmax" data-search="کینگ مکس Kingmax">
                                  کینگ مکس
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="77" name="brand[]"
                                                                            data-search-uid="brand" id="brand-param-77"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-108"
                                         data-fa="هانت کی" data-en="Huntkey" data-search="هانت کی Huntkey">
                                  هانت کی
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="108" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-108"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-225"
                                         data-fa="اسپک" data-en="Speck" data-search="اسپک Speck">
                                  اسپک
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="225" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-225"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1243"
                                         data-fa="کوییلو" data-en="Quilo" data-search="کوییلو Quilo">
                                  کوییلو
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1243" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1243"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-2120"
                                         data-fa="اوریکو" data-en="Orico" data-search="اوریکو Orico">
                                  اوریکو
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="2120" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-2120"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-2374"
                                         data-fa="بلولانژ" data-en="BlueLounge" data-search="بلولانژ BlueLounge">
                                  بلولانژ
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="2374" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-2374"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-2930"
                                         data-fa="لاوت" data-en="Laut" data-search="لاوت Laut">
                                  لاوت
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="2930" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-2930"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-4115"
                                         data-fa="موزو" data-en="Mozo" data-search="موزو Mozo">
                                  موزو
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="4115" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-4115"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-4932"
                                         data-fa="دودوکول" data-en="Dodocool" data-search="دودوکول Dodocool">
                                  دودوکول
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="4932" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-4932"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-30"
                                         data-fa="ای ام دی" data-en="AMD" data-search="ای ام دی AMD">
                                  ای ام دی
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="30" name="brand[]"
                                                                            data-search-uid="brand" id="brand-param-30"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-720"
                                         data-fa="وریا" data-en="Vorya" data-search="وریا Vorya">
                                  وریا
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="720" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-720"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1044"
                                         data-fa="توتو" data-en="TOTU" data-search="توتو TOTU">
                                  توتو
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1044" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1044"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1372"
                                         data-fa="فراری" data-en="Ferrari" data-search="فراری Ferrari">
                                  فراری
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1372" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1372"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1590"
                                         data-fa="پاگ" data-en="Pug" data-search="پاگ Pug">
                                  پاگ
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1590" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1590"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-1743"
                                         data-fa="هاگر" data-en="Hugger" data-search="هاگر Hugger">
                                  هاگر
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="1743" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-1743"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-3984"
                                         data-fa="تست" data-en="Toast" data-search="تست Toast">
                                  تست
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="3984" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-3984"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-4417"
                                         data-fa="لایتز" data-en="Leitz" data-search="لایتز Leitz">
                                  لایتز
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="4417" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-4417"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-4774"
                                         data-fa="کریمور" data-en="Karrimor" data-search="کریمور Karrimor">
                                  کریمور
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="4774" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-4774"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-5860"
                                         data-fa="مدرن کیف پارسیان" data-en="parsian modern kif"
                                         data-search="مدرن کیف پارسیان parsian modern kif">
                                  مدرن کیف پارسیان
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="5860" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-5860"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-6394"
                                         data-fa="بیشان" data-en="Bisean" data-search="بیشان Bisean">
                                  بیشان
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="6394" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-6394"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-719"
                                         data-fa="متفرقه" data-en="Miscellaneous" data-search="متفرقه Miscellaneous">
                                  متفرقه
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="719" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-719"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-13288"
                                         data-fa="ماسا دیزاین" data-en="Masa Design"
                                         data-search="ماسا دیزاین Masa Design">
                                  ماسا دیزاین
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="13288" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-13288"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-18476"
                                         data-fa="توییجین وموییجین" data-en="tuijin va muijin"
                                         data-search="توییجین وموییجین tuijin va muijin">
                                  توییجین وموییجین
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="18476" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-18476"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-22929"
                                         data-fa="لولو" data-en="looloo" data-search="لولو looloo">
                                  لولو
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="22929" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-22929"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-16051"
                                         data-fa="فیرو پلاس" data-en="Firo Plus" data-search="فیرو پلاس Firo Plus">
                                  فیرو پلاس
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="16051" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-16051"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-11961"
                                         data-fa="وفس" data-en="Vefs" data-search="وفس Vefs">
                                  وفس
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="11961" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-11961"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-12907"
                                         data-fa="کیو وای اچ" data-en="Q Y H" data-search="کیو وای اچ Q Y H">
                                  کیو وای اچ
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="12907" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-12907"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-14892"
                                         data-fa="رونکاتو" data-en="Roncato" data-search="رونکاتو Roncato">
                                  رونکاتو
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="14892" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-14892"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-8886"
                                         data-fa="کول کلد" data-en="CoolCold" data-search="کول کلد CoolCold">
                                  کول کلد
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="8886" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-8886"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-23604"
                                         data-fa="گلدن نوت بوک جی ان" data-en="Golden notebook GN"
                                         data-search="گلدن نوت بوک جی ان Golden notebook GN">
                                  گلدن نوت بوک جی ان
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="23604" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-23604"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-11395"
                                         data-fa="تنسر" data-en="Tancer" data-search="تنسر Tancer">
                                  تنسر
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="11395" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-11395"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-8081"
                                         data-fa="اس کی هاینیکس" data-en="SK hynix"
                                         data-search="اس کی هاینیکس SK hynix">
                                  اس کی هاینیکس
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="8081" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-8081"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-19172"
                                         data-fa="رینیکا" data-en="Rainika" data-search="رینیکا Rainika">
                                  رینیکا
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="19172" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-19172"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-23355"
                                         data-fa="ایتوک" data-en="E.TOK" data-search="ایتوک E.TOK">
                                  ایتوک
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="23355" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-23355"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-8004"
                                         data-fa="هاینیکس" data-en="hynix" data-search="هاینیکس hynix">
                                  هاینیکس
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="8004" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-8004"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-14178"
                                         data-fa="آمازون بیسیکس" data-en="AmazonBasics"
                                         data-search="آمازون بیسیکس AmazonBasics">
                                  آمازون بیسیکس
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="14178" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-14178"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-11143"
                                         data-fa="دیانا" data-en="diana" data-search="دیانا diana">
                                  دیانا
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="11143" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-11143"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-12177"
                                         data-fa="جورنادا" data-en="JORNADA" data-search="جورنادا JORNADA">
                                  جورنادا
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="12177" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-12177"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-16217"
                                         data-fa="اف ای سیکس" data-en="fa6" data-search="اف ای سیکس fa6">
                                  اف ای سیکس
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="16217" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-16217"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-8002"
                                         data-fa="الپیدا" data-en="ELPIDA" data-search="الپیدا ELPIDA">
                                  الپیدا
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="8002" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-8002"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-19252"
                                         data-fa="لنشن" data-en="LENTION" data-search="لنشن LENTION">
                                  لنشن
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="19252" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-19252"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-15050"
                                         data-fa="فلوریزا" data-en="Feloriza" data-search="فلوریزا Feloriza">
                                  فلوریزا
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="15050" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-15050"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-21324"
                                         data-fa="سامدکس" data-en="sumdex" data-search="سامدکس sumdex">
                                  سامدکس
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="21324" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-21324"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-17283"
                                         data-fa="هندری" data-en="Handry" data-search="هندری Handry">
                                  هندری
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="17283" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-17283"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-12726"
                                         data-fa="مارپلو" data-en="Marplo" data-search="مارپلو Marplo">
                                  مارپلو
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="12726" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-12726"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-18474"
                                         data-fa="فیرو" data-en="Firo" data-search="فیرو Firo">
                                  فیرو
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="18474" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-18474"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-9637"
                                         data-fa="ام اند اس" data-en="M&amp;S" data-search="ام اند اس M&amp;S">
                                  ام اند اس
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="9637" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-9637"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-13299"
                                         data-fa="کاما" data-en="Comma" data-search="کاما Comma">
                                  کاما
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="13299" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-13299"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-12205"
                                         data-fa="سولو" data-en="solo" data-search="سولو solo">
                                  سولو
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="12205" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-12205"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-10469"
                                         data-fa="هورس" data-en="Horse" data-search="هورس Horse">
                                  هورس
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="10469" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-10469"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-19390"
                                         data-fa="هفال" data-en="heefaal" data-search="هفال heefaal">
                                  هفال
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="19390" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-19390"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-13812"
                                         data-fa="پاوربرلین" data-en="powerberlin" data-search="پاوربرلین powerberlin">
                                  پاوربرلین
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="13812" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-13812"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-16378"
                                         data-fa="الس" data-en="Ellesse" data-search="الس Ellesse">
                                  الس
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="16378" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-16378"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-8019"
                                         data-fa="جیمو" data-en="gimo" data-search="جیمو gimo">
                                  جیمو
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="8019" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-8019"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-11654"
                                         data-fa="هدگرن" data-en="hedgren" data-search="هدگرن hedgren">
                                  هدگرن
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="11654" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-11654"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-23254"
                                         data-fa="سیی" data-en="see" data-search="سیی see">
                                  سیی
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="23254" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-23254"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-11285"
                                         data-fa="ولکانو" data-en="Volkano" data-search="ولکانو Volkano">
                                  ولکانو
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="11285" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-11285"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-16451"
                                         data-fa="فارست مبل" data-en="Forestmobl" data-search="فارست مبل Forestmobl">
                                  فارست مبل
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="16451" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-16451"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-16389"
                                         data-fa="تاتونکا" data-en="Tatonka" data-search="تاتونکا Tatonka">
                                  تاتونکا
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="16389" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-16389"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-11631"
                                         data-fa="ویپرو" data-en="Wipro" data-search="ویپرو Wipro">
                                  ویپرو
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="11631" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-11631"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-8003"
                                         data-fa="نانیا" data-en="nanya" data-search="نانیا nanya">
                                  نانیا
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="8003" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-8003"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-10398"
                                         data-fa="توکانو" data-en="Tucano" data-search="توکانو Tucano">
                                  توکانو
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="10398" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-10398"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-18947"
                                         data-fa="کاندوتی" data-en="Condotti" data-search="کاندوتی Condotti">
                                  کاندوتی
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="18947" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-18947"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-8658"
                                         data-fa="پوناسو" data-en="Panasso" data-search="پوناسو Panasso">
                                  پوناسو
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="8658" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-8658"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-17126"
                                         data-fa="دتکس پلاس" data-en="+Detex" data-search="دتکس پلاس +Detex">
                                  دتکس پلاس
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="17126" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-17126"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-8677"
                                         data-fa="چرم صنوبر" data-en="Senobar Leather"
                                         data-search="چرم صنوبر Senobar Leather">
                                  چرم صنوبر
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="8677" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-8677"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-9262"
                                         data-fa="او جیو" data-en="ogio" data-search="او جیو ogio">
                                  او جیو
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="9262" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-9262"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-15423"
                                         data-fa="چرم ونوم" data-en="venom leather"
                                         data-search="چرم ونوم venom leather">
                                  چرم ونوم
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="15423" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-15423"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-11067"
                                         data-fa="پرودو" data-en="Porodo" data-search="پرودو Porodo">
                                  پرودو
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="11067" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-11067"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-15371"
                                         data-fa="کاکا" data-en="KAKA" data-search="کاکا KAKA">
                                  کاکا
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="15371" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-15371"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                              <li><label class="c-filter__label js-box-content-item" for="brand-param-14223"
                                         data-fa="ازگارد" data-en="asgard" data-search="ازگارد asgard">
                                  ازگارد
                                </label><label class="c-ui-checkbox"><input type="checkbox" value="14223" name="brand[]"
                                                                            data-search-uid="brand"
                                                                            id="brand-param-14223"><span
                                    class="c-ui-checkbox__check"></span></label></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
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
                                   aria-valuenow="100.0" aria-valuetext="107965000" style="z-index: 4;"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <ul class="c-filter__range">
                        <li data-label="از" data-currency=" تومان"><input type="text" data-value="0" value="0"
                                                                          name="price[min]" data-range="0"
                                                                          class="js-slider-range-from disabled"
                                                                          disabled="disabled"></li>
                        <li data-label="تا" data-currency="تومان"><input type="text" data-value="107965000"
                                                                         value="107965000" name="price[max]"
                                                                         data-range="107965000"
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
                      <li><span property="name">جستجوی لپ تاپ</span></li>
                    </ul>
                  </nav>
                  <div class="c-listing js-listing">
                    <div class="c-listing__counter">۳۱,۰۹۸ کالا</div>
                    <div class="c-listing__header">
                      <ul class="c-listing__sort js-sort-options" data-label="مرتب‌سازی بر اساس :">
                        <li class=""><a href="javascript:" data-sort="7">پرفروش‌ترین‌</a></li>
                        <li class=""><a href="javascript:" data-sort="22" class="is-active">مرتبط‌ترین</a></li>
                        <li class=""><a href="javascript:" data-sort="4">پربازدیدترین</a></li>
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


     is-plp" data-observed="0" data-index="5" data-id="3255008" data-price="۷,۱۹۹,۰۰۰"
                             data-title-fa="لپ تاپ 11 اینچی لنوو مدل IdeaPad 1 - A"
                             data-title-en="Lenovo Ideapad 1 - A - 11 inch Laptop"
                             data-enhanced-ecommerce="{&quot;id&quot;:3255008,&quot;name&quot;:&quot;لپ تاپ 11 اینچی لنوو مدل IdeaPad 1 - A&quot;,&quot;category&quot;:&quot;لپ تاپ و الترابوک&quot;,&quot;brand&quot;:&quot;Lenovo&quot;,&quot;variant&quot;:13245399,&quot;price&quot;:71990000,&quot;quantity&quot;:0}">
                          <div data-csrf-token="" data-id="3255008"
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
                             target="_blank" data-adro-ad-click-id="3255008" data-snt-event="dkProductClicked"
                             data-snt-params="{&quot;productId&quot;:3255008,&quot;position&quot;:5,&quot;product_url&quot;:&quot;/product/dkp-3255008/لپ-تاپ-11-اینچی-لنوو-مدل-ideapad-1-a&quot;}"
                             href="/product/dkp-3255008/لپ-تاپ-11-اینچی-لنوو-مدل-ideapad-1-a">
                            <div style="" class="c-promotion__badge c-promotion__badge--special-sale ">
                              فروش ویژه
                            </div>
                            <div class="c-promotion__main-img-badges-container"></div>
                            <img
                              src="https://dkstatics-public.digikala.com/digikala-products/067d4e0ea04b849caf3fc29c6f6d23fa2f7e651b_1597669901.jpg?x-oss-process=image/resize,m_lfit,h_600,w_600/quality,q_90"
                              alt="لپ تاپ 11 اینچی لنوو مدل IdeaPad 1 - A"></a>
                          <div class="c-product-box__content">
                            <div class="c-product-box__content--row">
                              <div class="c-product-box__title"><a class="js-product-url"
                                                                   href="/product/dkp-3255008/لپ-تاپ-11-اینچی-لنوو-مدل-ideapad-1-a"
                                                                   data-adro-ad-click-id="3255008" target="_blank">لپ
                                  تاپ 11 اینچی لنوو مدل IdeaPad 1 - A</a></div>
                              <div class="c-product-box__title-en">Lenovo Ideapad 1 - A - 11 inch Laptop</div>
                              <ul class="c-product-box__variants" data-title="رنگ ها:">
                                <li class="js-variant"><span class="c-variant c-variant--color"
                                                             style="background-color: #dedede;border: 1px solid rgb(233, 233, 233);"></span>
                                </li>
                              </ul>
                            </div>
                            <div class="c-product-box__rate-status">
                              <div class="c-product-box__engagement-rating">
                                ۴.۳
                                <span class="c-product-box__engagement-rating-num">
                                (۸۳)
                            </span></div>
                              <div class="c-product-box__status c-product-box__status--jet">
                                امکان ارسال فوری
                              </div>
                            </div>
                            <div class="c-product-box__row c-product-box__row--price">
                              <div class="c-price">
                                <div class="c-price__value c-price__value--plp js-plp-product-card-price">
                                  <del>۷,۵۰۰,۰۰۰</del>
                                  <div class="c-price__discount-oval"><span>٪۴</span></div>
                                  <div class="c-price__value-wrapper">
                                    ۷,۱۹۹,۰۰۰
                                    <span class="c-price__currency">تومان</span></div>
                                </div>
                                <div class="c-price__value c-price__value--plp u-hidden js-ab-plp-product-card-price">
                                  <del>۷.۵</del>
                                  <div class="c-price__discount-oval"><span>٪۴</span></div>
                                  <div class="c-price__value-wrapper">
                                    ۷.۱۹۹
                                    <span class="c-price__currency">میلیون تومان</span></div>
                                </div>
                              </div>
                            </div>
                            <div class="c-product-box__digiplus"><span
                                class="c-product-box__digiplus-data c-digiplus-sign--before">۲۵,۰۰۰ تومان هدیه نقدی</span>
                            </div>
                            <div class="c-product-box__tags ">
                              <div class="c-product-box__tags-container"></div>
                              <ul class="c-product__seller-details c-product__seller-details--item">
                                <li class="c-product__main-seller js-seller-text">
                                  دیجی‌کالا
                                </li>
                                <li class="c-product__main-guarantee">
                                  گارانتی 18 ماهه پردازش طلایی برسان
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>

                    </ul>
                    <div class="c-pager">
                      <ul class="c-pager__items">
                        <li class="js-pagination__item"><a class="c-pager__item is-active" href="javascript:"
                                                           data-page="1">۱</a></li>
                        <li class="js-pagination__item"><a class="c-pager__item"
                                                           href="/search/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE&amp;sortby=22&amp;pageno=2"
                                                           data-page="2">۲</a></li>
                        <li class="js-pagination__item"><a class="c-pager__item"
                                                           href="/search/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE&amp;sortby=22&amp;pageno=3"
                                                           data-page="3">۳</a></li>
                        <li class="js-pagination__item"><a class="c-pager__item"
                                                           href="/search/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE&amp;sortby=22&amp;pageno=4"
                                                           data-page="4">۴</a></li>
                        <li class="js-pagination__item"><a class="c-pager__item"
                                                           href="/search/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE&amp;sortby=22&amp;pageno=5"
                                                           data-page="5">۵</a></li>
                        <line class="c-pager__items--partition"></line>
                        <li class="js-pagination__item"><a class="c-pager__next"
                                                           href="/search/?q=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE&amp;sortby=22&amp;pageno=277"
                                                           data-page="277"></a></li>
                      </ul>
                    </div>
                  </div>
                </article>
              </div>
            </div>
            <div class="js-ab-related-search-words js-ab-related-search-words-bottom u-flex u-w-full u-hidden ">
              <div class="o-page__aside has-pager"></div>
              <div class="c-filter-row-box">
                <div class="c-filter-row-box__title">جستجوهای مرتبط</div>
                <div class="c-filter-row-box__items"><a href="/search/?entry=rs&amp;q=لپ تاپ ایسوس">
                    <div class="c-filter-row-box__item">لپ تاپ ایسوس</div>
                  </a><a href="/search/?entry=rs&amp;q=لپ تاپ لنوو">
                    <div class="c-filter-row-box__item">لپ تاپ لنوو</div>
                  </a><a href="/search/?entry=rs&amp;q=لپ تاپ hp">
                    <div class="c-filter-row-box__item">لپ تاپ hp</div>
                  </a><a href="/search/?entry=rs&amp;q=لپ تاپ اپل">
                    <div class="c-filter-row-box__item">لپ تاپ اپل</div>
                  </a><a href="/search/?entry=rs&amp;q=لپ تاپ دل">
                    <div class="c-filter-row-box__item">لپ تاپ دل</div>
                  </a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

@endsection


