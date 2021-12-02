@extends('layouts.staff.master')

@section('title') پیشخوان دیجی نوا @endsection

@section('head')
  <script>
    var supernova_mode = "production";
    var supernova_tracker_url = "";
    var calendar = {"year":1400,"month":"\u0641\u0631\u0648\u0631\u062f\u06cc\u0646","month_index":1,"current_day":25,"days":31,"start_date":{"date":"2021-03-21 00:00:00.000000","timezone_type":3,"timezone":"Asia\/Tehran"},"start_weekday":1,"end_weekday":3,"end_date":{"date":"2021-04-20 00:00:00.000000","timezone_type":3,"timezone":"Asia\/Tehran"},"current_date":"\u0686\u0647\u0627\u0631\u200c\u0634\u0646\u0628\u0647 25 \u0641\u0631\u0648\u0631\u062f\u06cc\u0646 1400"};
    var promotions = {"4386848":{"id":4386848,"title":"\u0634\u06af\u0641\u062a 26 \u0641\u0631\u0648\u0631\u062f\u06cc\u0646 1400","joinable_by_seller":true,"link":"\/promotion\/4386848\/join\/","not_joinable_tooltip":"  \u0627\u0645\u06a9\u0627\u0646 \u0627\u0641\u0632\u0648\u062f\u0646 \u06a9\u0627\u0644\u0627 \u0628\u0647 \u0627\u06cc\u0646 \u06a9\u0645\u067e\u06cc\u0646 \u0648\u062c\u0648\u062f \u0646\u062f\u0627\u0631\u062f.","join_deadline":{"date":"2021-04-14 16:30:00.000000","timezone_type":3,"timezone":"Asia\/Tehran"},"start_date":{"year":1400,"month":1,"day":25},"date_interval":"25 \u0641\u0631\u0648\u0631\u062f\u06cc\u0646 \u062a\u0627 27 \u0641\u0631\u0648\u0631\u062f\u06cc\u0646","end_date":{"year":1400,"month":1,"day":27}},"4584792":{"id":4584792,"title":"\u0634\u06af\u0641\u062a 1 \u0627\u0631\u062f\u06cc\u0628\u0647\u0634\u062a 1400","joinable_by_seller":true,"link":"\/promotion\/4584792\/join\/","not_joinable_tooltip":"  \u0627\u0645\u06a9\u0627\u0646 \u0627\u0641\u0632\u0648\u062f\u0646 \u06a9\u0627\u0644\u0627 \u0628\u0647 \u0627\u06cc\u0646 \u06a9\u0645\u067e\u06cc\u0646 \u0648\u062c\u0648\u062f \u0646\u062f\u0627\u0631\u062f.","join_deadline":{"date":"2021-04-16 23:59:00.000000","timezone_type":3,"timezone":"Asia\/Tehran"},"start_date":{"year":1400,"month":1,"day":31},"date_interval":"31 \u0641\u0631\u0648\u0631\u062f\u06cc\u0646 \u062a\u0627 2 \u0627\u0631\u062f\u06cc\u0628\u0647\u0634\u062a","end_date":{"year":1400,"month":2,"day":2}},"4571880":{"id":4571880,"title":"\u0647\u0631 \u0686\u06cc\u0632\u06cc \u0632\u06cc\u0631 200 \u0647\u0632\u0627\u0631 \u062a\u0648\u0645\u0646!","joinable_by_seller":false,"link":"","not_joinable_tooltip":"  \u0627\u0645\u06a9\u0627\u0646 \u0627\u0641\u0632\u0648\u062f\u0646 \u06a9\u0627\u0644\u0627 \u0628\u0647 \u0627\u06cc\u0646 \u06a9\u0645\u067e\u06cc\u0646 \u0648\u062c\u0648\u062f \u0646\u062f\u0627\u0631\u062f.","join_deadline":{"date":"2021-04-24 00:00:00.000000","timezone_type":3,"timezone":"Asia\/Tehran"},"start_date":{"year":1400,"month":1,"day":28},"date_interval":"28 \u0641\u0631\u0648\u0631\u062f\u06cc\u0646 \u062a\u0627 4 \u0627\u0631\u062f\u06cc\u0628\u0647\u0634\u062a","end_date":{"year":1400,"month":2,"day":4}}};
    var dashboard_sold_history_dates = 0;
    var dashboard_sold_history_prices = 0;
    var dashboard_sold_history_quantities = 0;
    var dashboard_variant_active_with_inventory = 0;
    var dashboard_variant_active_without_inventory = 5;
    var dashboard_variant_all = 0;
    var dashboard_variant_active_false = 0;
    var dashboardRate = 70;
    var existNewElectronicContract = false;
    var contractDaysLeft = 7;
    var isContractRejected = false;
    var hasAccessToContract = true;
    var stats_ajax_url = "\/ajax\/index\/stats\/";
    var showRejectedMessage = 0;
    var rejectedMessage = "";
    var isLoggedSeller = 1;
    var walkthroughSteps = [{"element":"#dashboard-step-1","intro":"\u0628\u0627 \u0627\u0633\u062a\u0641\u0627\u062f\u0647 \u0627\u0632 \u0645\u0646\u0648\u0647\u0627 \u0645\u06cc\u200c\u062a\u0648\u0627\u0646\u06cc\u062f \u0627\u0642\u062f\u0627\u0645 \u0628\u0647 \u062f\u0631\u062c \u0648 \u0645\u062f\u06cc\u0631\u06cc\u062a \u0645\u062d\u0635\u0648\u0644\u0627\u062a\u062a\u0627\u0646\u060c \u0642\u06cc\u0645\u062a\u200c\u06af\u0630\u0627\u0631\u06cc\u060c \u0627\u06cc\u062c\u0627\u062f \u0645\u062d\u0645\u0648\u0644\u0647 \u0648 \u0633\u0627\u06cc\u0631 \u0641\u0639\u0627\u0644\u06cc\u062a\u200c\u0647\u0627\u06cc \u0641\u0631\u0648\u0634\u062a\u0627\u0646 \u06a9\u0646\u06cc\u062f."},{"element":"#dashboard-step-2","intro":"\u067e\u06cc\u0627\u0645\u200c\u0647\u0627\u06cc \u0645\u0647\u0645\u060c \u0633\u0648\u0627\u0644\u0627\u062a \u0645\u0634\u062a\u0631\u06cc\u0627\u0646 \u0648 \u0645\u0634\u062e\u0635\u0627\u062a \u0634\u0645\u0627 \u062f\u0631 \u0627\u06cc\u0646 \u0628\u062e\u0634 \u0642\u0627\u0628\u0644 \u0645\u0634\u0627\u0647\u062f\u0647 \u0648 \u0628\u0631\u0631\u0633\u06cc \u0627\u0633\u062a."},{"element":"#dashboard-step-3","intro":"\u0648\u0636\u0639\u06cc\u062a \u0645\u062f\u0627\u0631\u06a9\u06cc \u06a9\u0647 \u0628\u0647 \u062f\u06cc\u062c\u06cc\u200c\u06a9\u0627\u0644\u0627 \u0627\u0631\u0627\u0626\u0647 \u062f\u0627\u062f\u0647\u200c\u0627\u06cc\u062f \u062f\u0631 \u0627\u06cc\u0646 \u0642\u0633\u0645\u062a \u0642\u0627\u0628\u0644 \u0645\u0634\u0627\u0647\u062f\u0647 \u0627\u0633\u062a."},{"element":"#dashboard-step-4","intro":"\u0641\u0631\u0648\u0634\u0646\u062f\u06af\u0627\u0646 \u0628\u0627\u06cc\u062f \u0642\u0628\u0644 \u0627\u0632 \u0634\u0631\u0648\u0639 \u0641\u0639\u0627\u0644\u06cc\u062a\u060c \u06cc\u06a9\u06cc \u0627\u0632 \u062f\u0648\u0631\u0647\u200c\u0647\u0627\u06cc \u0622\u0645\u0648\u0632\u0634 \u06a9\u0627\u0631 \u0628\u0627 \u067e\u0646\u0644 \u0645\u0631\u06a9\u0632 \u0641\u0631\u0648\u0634\u0646\u062f\u06af\u0627\u0646 \u0631\u0627 \u0628\u06af\u0630\u0631\u0627\u0646\u0646\u062f\u060c \u0648\u0636\u0639\u06cc\u062a \u0622\u0645\u0648\u0632\u0634 \u0634\u0645\u0627 \u062f\u0631 \u0631\u0627 \u062f\u0631 \u0627\u06cc\u0646 \u0628\u062e\u0634 \u0642\u0627\u0628\u0644 \u0645\u0634\u0627\u0647\u062f\u0647 \u0627\u0633\u062a."},{"element":"#dashboard-step-5","intro":"\u062f\u0631 \u0627\u06cc\u0646 \u0642\u0633\u0645\u062a \u0642\u0627\u062f\u0631 \u0628\u0647 \u0645\u0634\u0627\u0647\u062f\u0647\u200c\u06cc \u0648\u0636\u0639\u06cc\u062a \u0642\u0631\u0627\u0631\u062f\u0627\u062f\u062a\u0627\u0646 \u0628\u0627 \u062f\u06cc\u062c\u06cc\u200c\u06a9\u0627\u0644\u0627 \u0647\u0633\u062a\u06cc\u062f."},{"element":"#dashboard-step-6","intro":"\u0628\u0627 \u06a9\u0644\u06cc\u06a9 \u0631\u0648\u06cc \u0639\u0644\u0627\u0645\u062a \u0645\u062b\u0628\u062a\u060c \u0627\u0642\u062f\u0627\u0645 \u0628\u0647 \u062c\u0633\u062a\u062c\u0648 \u0648 \u06cc\u0627 \u062f\u0631\u062c \u0645\u062d\u0635\u0648\u0644 \u062c\u062f\u06cc\u062f \u06a9\u0646\u06cc\u062f."},{"element":"#dashboard-step-7","intro":"\u062f\u0631 \u0627\u06cc\u0646 \u0642\u0633\u0645\u062a \u0645\u06cc\u200c\u200c\u062a\u0648\u0627\u0646\u06cc\u062f \u062a\u0639\u062f\u0627\u062f \u062a\u0646\u0648\u0639 \u0647\u0627\u06cc \u0641\u0639\u0627\u0644\u062a\u0627\u0646 \u062f\u0631 \u067e\u0631\u0648\u0645\u0648\u0634\u0646 \u0647\u0627 \u0631\u0627 \u0645\u0634\u0627\u0647\u062f\u0647 \u06a9\u0646\u06cc\u062f \u0648 \u0628\u0627 \u06a9\u0644\u06cc\u06a9 \u0628\u0631 \u0631\u0648\u06cc \u0622\u0646\u060c \u0648\u0627\u0631\u062f \u0635\u0641\u062d\u0647 \u0645\u062f\u06cc\u0631\u06cc\u062a \u067e\u0631\u0648\u0645\u0648\u0634\u0646 \u0647\u0627 \u0634\u0648\u06cc\u062f."},{"element":"#dashboard-step-8","intro":"\u062f\u0631 \u0627\u06cc\u0646 \u0642\u0633\u0645\u062a \u0645\u06cc\u200c\u062a\u0648\u0627\u0646\u06cc\u062f \u0627\u0632 \u0648\u0636\u0639\u06cc\u062a \u067e\u0631\u062f\u0627\u062e\u062a \u0635\u0648\u0631\u062a\u062d\u0633\u0627\u0628 \u062e\u0648\u062f \u0645\u0637\u0644\u0639 \u0634\u0648\u06cc\u062f."},{"element":"#dashboard-step-9","intro":"\u062f\u0631 \u0628\u062e\u0634 \"\u0645\u0648\u062c\u0648\u062f\u06cc \u0627\u0646\u0628\u0627\u0631\" \u0648\u0636\u0639\u06cc\u062a \u0645\u062d\u0635\u0648\u0644\u0627\u062a\u062a\u0627\u0646 \u0627\u0632 \u0646\u0638\u0631 \u0645\u0648\u062c\u0648\u062f \u06cc\u0627 \u0646\u0627\u0645\u0648\u062c\u0648\u062f \u0628\u0648\u062f\u0646 \u0628\u0631 \u0631\u0648\u06cc \u0633\u0627\u06cc\u062a \u0648 \u06af\u0632\u0627\u0631\u0634\u06cc \u0627\u0632 \u0645\u0648\u062c\u0648\u062f\u06cc  \u06a9\u0627\u0644\u0627\u0647\u0627 \u062f\u0631\u0627\u0646\u0628\u0627\u0631\u0647\u0627\u06cc \u062f\u06cc\u062c\u06cc\u06a9\u0627\u0644\u0627\u060c \u0642\u0627\u0628\u0644 \u0645\u0634\u0627\u0647\u062f\u0647 \u0648 \u0628\u0631\u0631\u0633\u06cc \u0627\u0633\u062a."},{"element":"#dashboard-step-10","intro":"\u062f\u0631 \"\u0628\u062e\u0634 \u0645\u062f\u06cc\u0631\u06cc\u062a \u0633\u0641\u0627\u0631\u0634\u0627\u062a\" \u062a\u0639\u062f\u0627\u062f \u06a9\u0644 \u0633\u0641\u0627\u0631\u0634\u0627\u062a\u06cc \u06a9\u0647 \u0647\u0631 \u0631\u0648\u0632 \u062b\u0628\u062a \u0645\u06cc \u0634\u0648\u062f \u0648 \u062a\u0639\u062f\u0627\u062f\u06cc \u06a9\u0647 \u0628\u0627\u06cc\u062f \u0627\u0645\u0631\u0648\u0632 \u0648 \u0641\u0631\u062f\u0627 \u0628\u0647 \u0627\u0646\u0628\u0627\u0631 \u0627\u0631\u0633\u0627\u0644 \u0634\u0648\u0646\u062f \u0648 \u06cc\u0627 \u0647\u0646\u0648\u0632 \u0627\u0631\u0633\u0627\u0644 \u0646\u0634\u062f\u0647 \u0627\u0646\u062f \u0648 \u062f\u0627\u0631\u0627\u06cc \u062a\u0627\u062e\u06cc\u0631 \u0647\u0633\u062a\u0646\u062f\u060c \u0642\u0627\u0628\u0644 \u0645\u0634\u0627\u0647\u062f\u0647 \u0627\u0633\u062a."},{"element":"#dashboard-step-11","intro":"\u062f\u0631 \u0628\u062e\u0634 \"\u0645\u062f\u06cc\u0631\u06cc\u062a \u0642\u06cc\u0645\u062a \u06af\u0630\u0627\u0631\u06cc\" \u0645\u06cc \u062a\u0648\u0627\u0646\u06cc\u062f \u0648\u0636\u0639\u06cc\u062a \u062a\u0646\u0648\u0639 \u0647\u0627\u06cc \u0641\u0639\u0627\u0644 \u0631\u0627 \u0628\u0631\u0627\u0633\u0627\u0633 \u0641\u06cc\u0644\u062a\u0631 \u0648\u0636\u0639\u06cc\u062a \u0628\u0627\u06cc \u0628\u0627\u06a9\u0633 \u0648 \u0647\u0645 \u0686\u0646\u06cc\u0646 \u0648\u0636\u0639\u06cc\u062a \u0631\u0642\u0627\u0628\u062a \u0628\u0627 \u0633\u0627\u06cc\u0631 \u0641\u0631\u0648\u0634\u0646\u062f\u06af\u0627\u0646\u060c \u0645\u0634\u0627\u0647\u062f\u0647 \u0648 \u0628\u0631\u0631\u0633\u06cc \u06a9\u0646\u06cc\u062f."},{"element":"#dashboard-step-12","intro":"\u0627\u0645\u062a\u06cc\u0627\u0632 \u0639\u0645\u0644\u06a9\u0631\u062f \u0634\u0645\u0627 \u0628\u0631\u0627\u0633\u0627\u0633 \u0633\u0647 \u0645\u0639\u06cc\u0627\u0631 \u0648 \u062f\u0631\u0635\u062f \u0631\u0636\u0627\u06cc\u062a \u0645\u0634\u062a\u0631\u06cc\u0627\u0646 \u0627\u0632 \u062e\u0631\u06cc\u062f \u06a9\u0627\u0644\u0627\u0647\u0627\u06cc\u062a\u0627\u0646 \u0631\u0627 \u062f\u0631 \u0627\u06cc\u0646 \u0642\u0633\u0645\u062a \u0645\u0634\u0627\u0647\u062f\u0647 \u06a9\u0646\u06cc\u062f. \u0628\u0627 \u06a9\u0644\u06cc\u06a9 \u0631\u0648\u06cc \u062f\u0631\u0635\u062f \u0631\u0636\u0627\u06cc\u062a \u0645\u0634\u062a\u0631\u06cc\u0627\u0646 \u0648\u0627\u0631\u062f \u0635\u0641\u062d\u0647 \u062c\u0632\u06cc\u06cc\u0627\u062a \u062e\u0648\u0627\u0647\u06cc\u062f \u0634\u062f."},{"element":"#dashboard-step-13","intro":"\u062f\u0631 \u0627\u06cc\u0646 \u0628\u062e\u0634 \u0648\u0636\u0639\u06cc\u062a \u0645\u062d\u0635\u0648\u0644\u0627\u062a\u062a\u0627\u0646\u060c \u062a\u0639\u062f\u0627\u062f \u06a9\u0644 \u06a9\u0627\u0644\u0627\u0647\u0627\u06cc\u06cc \u06a9\u0647 \u062f\u0631 30 \u0631\u0648\u0632 \u06af\u0630\u0634\u062a\u0647 \u062f\u0631\u062c \u06a9\u0631\u062f\u0647 \u0627\u06cc\u062f \u0648 \u062f\u0631\u0635\u062f \u0631\u062f \u0634\u062f\u0646 \u06a9\u0627\u0644\u0627 \u0631\u0627 \u0645\u0634\u0627\u0647\u062f\u0647 \u0645\u06cc \u06a9\u0646\u06cc\u062f."},{"element":"#dashboard-step-14","intro":"\u062f\u0631 \u0627\u06cc\u0646 \u0628\u062e\u0634 \u0622\u062e\u0631\u06cc\u0646 \u0645\u0642\u0627\u0644\u0627\u062a \u0648 \u0627\u0637\u0644\u0627\u0639\u06cc\u0647 \u0647\u0627\u06cc \u0633\u0627\u06cc\u062a \u0633\u0644\u0631 \u0622\u06a9\u0627\u062f\u0645\u06cc \u0642\u0627\u0628\u0644 \u0645\u0634\u0627\u0647\u062f\u0647 \u0647\u0633\u062a\u0646\u062f."},{"element":"#dashboard-step-15","intro":"\u0627\u06af\u0631 \u06a9\u0627\u0644\u0627\u06cc \u0648\u0627\u062c\u062f \u0634\u0631\u0627\u06cc\u0637 \u067e\u0631\u0648\u0645\u0648\u0634\u0646 \u062f\u0627\u0634\u062a\u0647 \u0628\u0627\u0634\u06cc\u062f\u060c \u062f\u0631 \u0633\u0645\u062a \u0631\u0627\u0633\u062a \u062c\u062f\u0648\u0644 \u067e\u0631\u0648\u0645\u0648\u0634\u0646\u200c\u0647\u0627\u06cc\u06cc \u06a9\u0647 \u0627\u0645\u06a9\u0627\u0646 \u0634\u0631\u06a9\u062a \u062f\u0631 \u0622\u0646\u0647\u0627 \u0631\u0627 \u062f\u0627\u0631\u06cc\u062f \u0648 \u0647\u0646\u0648\u0632 \u0645\u0647\u0644\u062a \u062f\u0627\u0631\u0646\u062f \u0631\u0627 \u0645\u0634\u0627\u0647\u062f\u0647 \u0645\u06cc \u06a9\u0646\u06cc\u062f. \u0628\u0627 \u06a9\u0644\u06cc\u06a9 \u0631\u0648\u06cc \u0646\u0627\u0645 \u0647\u0631 \u067e\u0631\u0648\u0645\u0648\u0634\u0646 \u0648\u0627\u0631\u062f  \u0635\u0641\u062d\u0647 \u0622\u0646 \u067e\u0631\u0648\u0645\u0648\u0634\u0646 \u062e\u0648\u0627\u0647\u06cc\u062f \u0634\u062f."},{"element":"#dashboard-step-16","intro":"\u062f\u0631 \u0627\u06cc\u0646 \u0628\u062e\u0634 \u0645\u06cc \u062a\u0648\u0627\u0646\u06cc\u062f \u0645\u0628\u0644\u063a \u0641\u0631\u0648\u0634 \u0646\u0627\u062e\u0627\u0644\u0635 \u0647\u0641\u062a\u0647 \u062c\u0627\u0631\u06cc\u060c \u0647\u0641\u062a\u0647 \u06af\u0630\u0634\u062a\u0647 \u0648\u0645\u0627\u0647 \u06af\u0630\u0634\u062a\u0647 \u062e\u0648\u062f \u0631\u0627 \u0645\u0634\u0627\u0647\u062f\u0647 \u06a9\u0646\u06cc\u062f. (\u0641\u0631\u0648\u0634 \u0646\u0627\u062e\u0627\u0644\u0635 \u06cc\u0639\u0646\u06cc \u0641\u0631\u0648\u0634 \u0628\u062f\u0648\u0646 \u062f\u0631\u0646\u0638\u0631 \u06af\u0631\u0641\u062a\u0646 \u0633\u0641\u0627\u0631\u0634\u0627\u062a \u0645\u0631\u062c\u0648\u0639\u06cc \u0648 \u0644\u063a\u0648 \u0634\u062f\u0647)"},{"element":"#dashboard-step-17","intro":"\u062a\u0639\u062f\u0627\u062f \u0645\u062d\u0645\u0648\u0644\u0647 \u0647\u0627\u06cc\u06cc \u06a9\u0647 \u062f\u0631 \u0628\u0627\u0632\u0647 \u0632\u0645\u0627\u0646\u06cc \u0645\u0627\u0647 \u06af\u0630\u0634\u062a\u0647 \u0622\u0645\u0627\u062f\u0647 \u0627\u0631\u0633\u0627\u0644\/\u062a\u062d\u0648\u06cc\u0644 \u0628\u0648\u062f\u0647 \u0627\u0646\u062f \u0648 \u0645\u062d\u0645\u0648\u0644\u0647 \u0647\u0627\u06cc\u06cc \u06a9\u0647 \u0646\u0627\u0642\u0635 \u062f\u0631\u06cc\u0627\u0641\u062a \u0634\u062f\u0647 \u0627\u0646\u062f \u0648 \u06cc\u0627 \u062f\u0631\u06cc\u0627\u0641\u062a \u0646\u0634\u062f\u0647 \u0627\u0646\u062f\u060c \u062f\u0631 \u0627\u06cc\u0646 \u0642\u0633\u0645\u062a \u0642\u0627\u0628\u0644 \u0645\u0634\u0627\u0647\u062f\u0647 \u0627\u0633\u062a."},{"element":"#dashboard-step-18","intro":"\u062f\u0631 \u0627\u06cc\u0646 \u0628\u062e\u0634 \u0645\u06cc \u062a\u0648\u0627\u0646\u06cc\u062f \u062a\u0639\u062f\u0627\u062f \u0641\u0631\u0648\u0634 \u0646\u0627\u062e\u0627\u0644\u0635 \u0647\u0641\u062a\u0647 \u062c\u0627\u0631\u06cc\u060c \u0647\u0641\u062a\u0647 \u06af\u0630\u0634\u062a\u0647 \u0648\u0645\u0627\u0647 \u06af\u0630\u0634\u062a\u0647 \u062e\u0648\u062f \u0631\u0627 \u0645\u0634\u0627\u0647\u062f\u0647 \u06a9\u0646\u06cc\u062f. (\u0641\u0631\u0648\u0634 \u0646\u0627\u062e\u0627\u0644\u0635 \u06cc\u0639\u0646\u06cc \u0641\u0631\u0648\u0634 \u0628\u062f\u0648\u0646 \u062f\u0631\u0646\u0638\u0631 \u06af\u0631\u0641\u062a\u0646 \u0633\u0641\u0627\u0631\u0634\u0627\u062a \u0645\u0631\u062c\u0648\u0639\u06cc \u0648 \u0644\u063a\u0648 \u0634\u062f\u0647)"},{"element":"#dashboard-step-19","intro":"\u062f\u0631 \u0627\u06cc\u0646 \u0628\u062e\u0634 \u0645\u06cc \u062a\u0648\u0627\u0646\u06cc\u062f \u0633\u0648\u0627\u0628\u0642 \u0641\u0631\u0648\u0634 \u062e\u0648\u062f \u0631\u0627 \u0628\u0627 \u0641\u06cc\u0644\u062a\u0631 \u0631\u0648\u0632\u0627\u0646\u0647\u060c \u0647\u0641\u062a\u06af\u06cc \u06cc\u0627 \u0645\u0627\u0647\u0627\u0646\u0647 \u0628\u0647 \u0635\u0648\u0631\u062a \u06cc\u06a9 \u0646\u0645\u0648\u062f\u0627\u0631 \u0628\u0631 \u0627\u0633\u0627\u0633 \u0645\u0628\u0644\u063a \u0648 \u062a\u0639\u062f\u0627\u062f \u0641\u0631\u0648\u0634 \u0645\u0634\u0627\u0647\u062f\u0647 \u06a9\u0646\u06cc\u062f."},{"element":"#dashboard-step-20","intro":"\u062f\u0631 \u062c\u062f\u0648\u0644 \u067e\u0631\u0641\u0631\u0648\u0634 \u062a\u0631\u06cc\u0646 \u06a9\u0627\u0644\u0627\u0647\u0627\u060c \u0634\u0645\u0627 \u0645\u06cc \u062a\u0648\u0627\u0646\u06cc\u062f \u0644\u06cc\u0633\u062a\u06cc \u0627\u0632 \u067e\u0631 \u0641\u0631\u0648\u0634 \u062a\u0631\u06cc\u0646 \u06a9\u0627\u0644\u0627\u0647\u0627\u06cc \u062e\u0648\u062f \u0631\u0627 \u0628\u0627 \u062c\u0632\u06cc\u06cc\u0627\u062a \u0648 \u0628\u0627 \u0641\u06cc\u0644\u062a\u0631 \u0631\u0648\u0632\u0627\u0646\u0647\u060c \u0647\u0641\u062a\u06af\u06cc \u06cc\u0627 \u0645\u0627\u0647\u0627\u0646\u0647 \u0645\u0634\u0627\u0647\u062f\u0647 \u06a9\u0646\u06cc\u062f."}];
    var showPriceModal = 0;
    var newSeller = 1;
    var is_yalda = 0;
  </script>
  <script src="{{ asset('staff/js/dashboardAction.js') }}"></script>
  <script src="{{ asset('staff/js/econtract.js') }}"></script>
  <script src="{{ asset('staff/js/promotionCalendar.js') }}"></script>
  <style>
  @if(!is_null($header_logo))
    .c-profile-nav__avatar:after {
      background-color: unset !important;
    }
  @endif
  </style>
@endsection

@section('content')
<main class="c-main" style="padding-bottom: 15px;">
    <div class="uk-container uk-container-large">
      <div class="c-grid">
        <div class="c-grid__row">
          <div class="c-grid__col c-grid__col--lg-3">
            <div class="c-grid__row c-grid__row--sm c-grid__row--lg">

              <div class="c-grid__col c-grid__col--sm-6 c-grid__col--lg-12">
                <div class="c-card" id="dashboard-step-2">
                  <div class="c-card__body">

                    <div class="c-profile-nav">
                      <div class="c-profile-nav__avatar">
                        @if(!is_null($header_logo))
                            <img src="{{ $site_url . '/' . (!is_null($header_logo)? $header_logo->path . '/' . $header_logo->name : '') }}" class="c-content-modal__uploads-img" alt="" style="width: 100% !important; height: 100%; border-radius: 50% !important;">
                        @endif
                      </div>
                      <h2 class="c-profile-nav__title">{{ $fa_store_name }}</h2>

                      <div class="c-profile-nav__menu">
                        <a href="{{ route('staff.settings.index') }}" class="c-profile-nav__menu-item">
                          <img src="{{ asset('staff/icon/dashboard/setting.svg') }}">
                          تنظیمات
                        </a>
                        <a href="{{ $site_url }}" target="_blank" class="c-profile-nav__menu-item">
                          <img src="{{ asset('staff/icon/dashboard/store.svg') }}">
                          فروشگاه
                        </a>
                        <a class="c-profile-nav__menu-item">
                          <img src="{{ asset('staff/icon/dashboard/activity.svg') }}">
                          گزارشات
                        </a>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="c-grid__col c-grid__col--sm-6 c-grid__col--lg-12 c-grid__col--lg-gap c-grid__col--xs-gap">
                <div class="c-card" id="dashboard-step-12">
                  <div class="c-card__header">
                    <h2 class="c-card__title">امتیاز عملکرد شما</h2>
                  </div>
                  <div class="c-card__body c-card__body--grow">
                    <div class="c-rating-chart">
                      <?php
                      $recommend_count = \Modules\Staff\Comment\Models\Comment::where('recommend_status', 'recommended')->count();
                      $not_recommended = \Modules\Staff\Comment\Models\Comment::where('recommend_status', 'not_recommended')->count();
                      $no_idea = \Modules\Staff\Comment\Models\Comment::where('recommend_status', 'no_idea')->count();
                      $rating_sum = $recommend_count + $not_recommended + $no_idea;
                      ?>
                      <div class="c-rating-chart__reg-from c-ui--mt-0 c-ui--mb-40">
                        از مجموع {{ persianNum($rating_sum) }} امتیاز به محصولات
                      </div>

                      <div class="c-rating-chart__stats">
                        <div class="c-rating-chart__stat">
                          <div class="c-rating-chart__stat-desc">پیشنهاد<br>کردند</div>
                          <div class="c-rating-chart__stat-value c-rating-chart__stat-value--success">
                            ٪{{ ($recommend_count !== 0)?persianNum(ceil(($recommend_count/$rating_sum) * 100)) : persianNum(0) }}
                          </div>
                        </div>
                        <div class="c-rating-chart__stat">
                          <div class="c-rating-chart__stat-desc">بدون<br> نظر</div>
                          <div class="c-rating-chart__stat-value c-rating-chart__stat-value--warning">
                            ٪{{ ($recommend_count !== 0)?persianNum(floor(($no_idea/$rating_sum) * 100)): persianNum(0) }}
                          </div>
                        </div>
                        <div class="c-rating-chart__stat">
                          <div class="c-rating-chart__stat-desc">پیشنهاد<br>نکردند</div>
                          <div class="c-rating-chart__stat-value c-rating-chart__stat-value--danger">
                            ٪{{ ($recommend_count !== 0)?persianNum(floor(($not_recommended/$rating_sum) * 100)): persianNum(0) }}
                          </div>
                        </div>
                      </div>

                      <div class="c-rating-chart c-rating-chart--condensed" style="margin-top: 20px !important;">
                        <a class="c-rating-chart__details-bar">
                          <div class="c-rating-chart__description c-rating-chart__description--bar c-card__stat-description uk-inline">
                            دیدگاه کاربران برای محصولات
                          </div>
                          <div class="c-rating-chart__details-value c-rating-chart__details-value--large">
                            {{ persianNum(\Modules\Staff\Comment\Models\Comment::whereDate('created_at', '>' , \Carbon\Carbon::now()->subDays(30))->count()) }}
                          </div>
                        </a>
                        <span class="c-rating-chart__description--sub">در ۳۰ روز گذشته</span>
                      </div>
                      {{--                      <div class="c-profile-nav__rating--bottom">--}}
                      {{--                        <div class="c-rating-chart__details">--}}
                      {{--                          <a class="c-rating-chart__details-bar c-rating-chart__details-bar--full" href="/rating/">--}}
                      {{--                            <div class="c-rating-chart__details-label" style="width: unset">رضایت خرید مشتریان از کالا</div>--}}
                      {{--                            <div class="c-rating-chart__details-progress">--}}
                      {{--                              <div class="c-rating-chart__details-rate-5" style="width: 70%;"></div>--}}
                      {{--                            </div>--}}
                      {{--                            <div class="c-rating-chart__details-value c-rating-chart__details-value--medium">۷۰ <span>٪</span></div>--}}
                      {{--                          </a>--}}
                      {{--                          <div class="c-rating-chart__description">--}}
                      {{--                            از ۲ رأی--}}
                      {{--                          </div>--}}
                      {{--                        </div>--}}
                      {{--                      </div>--}}

                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="c-grid__col c-grid__col--lg-9">
            <div class="c-grid__row">
              <div class="c-grid__col c-grid__col--sm-4">
                <div class="c-card c-card--transparent">
                  <div class="c-interactive-status {{ $peyment_methods->where('status', 'active')->count()? 'c-interactive-status--ok' : 'c-interactive-status--warning' }}" id="dashboard-step-3">
                    <div class="c-interactive-status__title">روش‌های پرداخت</div>
                    @if($peyment_methods->where('status', 'active')->count())
                      <div class="c-interactive-status__description">فعال</div>
                    @else
                      <div class="c-interactive-status__description">غیرفعال</div>
                    @endif
                  </div>
                </div>
              </div>


              <div class="c-grid__col c-grid__col--sm-4">
                <div class="c-card c-card--transparent">
                  <div class="c-interactive-status {{ ($settings->where('name', 'site_sms_status')->first()->value == 'active')? 'c-interactive-status--ok' : 'c-interactive-status--warning' }}" id="dashboard-step-4">
                    <div class="c-interactive-status__title">سامانه پیامکی</div>
                    @if($settings->where('name', 'site_sms_status')->first()->value == 'active')
                      <div class="c-interactive-status__description">فعال</div>
                    @else
                      <div class="c-interactive-status__description">غیرفعال</div>
                    @endif
                  </div>
                </div>
              </div>


              <div class="c-grid__col c-grid__col--sm-4">
                <div class="c-card c-card--transparent">
                  <div class="c-interactive-status {{ ($settings->where('name', 'site_email_status')->first()->value == 'active')? 'c-interactive-status--ok' : 'c-interactive-status--warning' }}" id="dashboard-step-5">
                    <div class="c-interactive-status__title">سامانه ایمیل</div>
                    @if($settings->where('name', 'site_email_status')->first()->value == 'active')
                      <div class="c-interactive-status__description">فعال</div>
                    @else
                      <div class="c-interactive-status__description">غیرفعال</div>
                    @endif
                  </div>
                </div>
              </div>


            </div>


            <div class="c-grid__row">
              <div class="c-grid__col c-grid__col--sm-4">
                <a href="{{ route('staff.products.create') }}" class="c-card c-card--is-link c-card--has-btn c-dashboard-status__jc-c" id="dashboard-step-6">
                  <div class="c-card__header c-card__header--no-border">
                    <h2 class="c-card__title c-card__title--dark">افزودن محصول جدید</h2>
                    <div class="c-card__header-btn c-card__header-btn--add"></div>
                  </div>
                </a>
              </div>
              <div class="c-grid__col c-grid__col--sm-4 c-grid__col--xs-gap">
                <a href="{{ route('staff.periodic-prices.index') }}" class="c-card c-card--is-link c-dashboard-status__jc-c uk-open" id="dashboard-step-7" aria-expanded="false">
                  <div class="c-card__header c-card__header--no-border">
                    <h2 class="c-card__title c-card__title--dark">تنوع‌های فعال در پروموشن‌ها
                      <span class="c-card__title-side c-card__title-side--arrow">۰
                        </span>
                    </h2>
                  </div>
                </a>

              </div>
              <div class="c-grid__col c-grid__col--sm-4 c-grid__col--xs-gap">
                <a href="{{ route('staff.settings.index') }}" class="c-card c-card--is-link c-card--has-btn c-card--has-success c-dashboard-status__jc-c" id="dashboard-step-8">
                  <div class="c-card__header c-card__header--no-border">
                    <h2 class="c-card__title c-card__title--dark">وضعیت فروشگاه
                      @if($settings->where('name', 'development_mode')->first()->value == 'true')
                        <small>فعال</small>
                      @else
                        <small style="font-size: 12px !important;">حالت توسعه</small>
                      @endif
                    </h2>
                    @if($settings->where('name', 'development_mode')->first()->value == 'true')
                      <div class="c-card__header-btn c-card__header-btn--success"></div>
                    @else
                      <div class="c-card__header-btn c-card__header-btn--deny"></div>
                    @endif
                  </div>
                </a>
              </div>
            </div>


            <div class="c-grid__row">
              <div class="c-grid__col c-grid__col--sm-4">
                <div class="c-card" id="dashboard-step-9">
                  <div class="c-card__header">
                    <h2 class="c-card__title">مدیریت محصولات</h2>
                  </div>
                  <div class="c-card__body">
                    <div class="c-rating-chart c-rating-chart--condensed">
                      <a class="c-rating-chart__details-bar">
                        <div class="c-rating-chart__description c-rating-chart__description--bar c-card__stat-description uk-inline">
                          تعداد محصولات فروشگاه
                          <div class="c-rating-chart__description"></div>
                        </div>
                        <div class="c-rating-chart__details-value c-rating-chart__details-value--large">
                          {{ persianNum($products->count()) }}
                        </div>
                      </a>
                    </div>

                    <div class="c-rating-chart c-rating-chart--condensed">
                      <a class="c-rating-chart__details-bar">
                        <div class="c-rating-chart__description c-rating-chart__description--bar c-card__stat-description uk-inline">
                          محصولات پیش‌نویس
                          <div class="c-rating-chart__description"></div>
                        </div>
                        <div class="c-rating-chart__details-value c-rating-chart__details-value--large">
                          {{ persianNum($products->where('status', 0)->count()) }}
                        </div>
                      </a>
                    </div>

                    <div class="c-rating-chart c-rating-chart--condensed">
                      <a class="c-rating-chart__details-bar">
                        <div class="c-rating-chart__description c-rating-chart__description--bar c-card__stat-description uk-inline">
                         محصولات بدون تنوع
                          <div class="c-rating-chart__description"></div>
                        </div>
                        <div class="c-rating-chart__details-value c-rating-chart__details-value--large">
                          {{ persianNum($products->count() - count(\Modules\Staff\Product\Models\ProductHasVariant::select('product_id')->distinct()->get())) }}
                        </div>
                      </a>
                    </div>

                    <div class="c-rating-chart c-rating-chart--condensed">
                      <a class="c-rating-chart__details-bar">
                        <div class="c-rating-chart__description c-rating-chart__description--bar c-card__stat-description uk-inline">
                          محصولات بدون فروش
                        </div>
                        <div class="c-rating-chart__details-value c-rating-chart__details-value--large">
                          {{ persianNum($products->count() - count(\Modules\Staff\Order\Models\ConsignmentHasProductVariants::select('product_id')->distinct()->get())) }}
                        </div>
                      </a>
                    </div>

                    <div class="c-rating-chart c-rating-chart--condensed">
                      <a class="c-rating-chart__details-bar">
                        <div class="c-rating-chart__description c-rating-chart__description--bar c-card__stat-description uk-inline">
                          محصولات درج شده
                        </div>
                        <div class="c-rating-chart__details-value c-rating-chart__details-value--large">
                          {{ persianNum(\Modules\Staff\Product\Models\Product::whereDate( 'created_at', '>', \Carbon\Carbon::now()->subDays(30))->count()) }}
                        </div>
                      </a>
                      <span class="c-rating-chart__description--sub">در ۳۰ روز گذشته</span>
                    </div>

                  </div>
                </div>
              </div>

              <div class="c-grid__col c-grid__col--sm-4 c-grid__col--xs-gap">
                <div class="c-card" id="dashboard-step-10">
                  <div class="c-card__header">
                    <h2 class="c-card__title">مدیریت تنوع و قیمت‌گذاری</h2>
                  </div>
                  <div class="c-card__body">
                    <a class="c-rating-chart c-rating-chart--condensed">
                      <div class="c-rating-chart__details-bar">
                        <div class="c-rating-chart__description c-rating-chart__description--bar c-card__stat-description uk-inline">
                          کل تنوع‌های فعال
                        </div>
                        <div class="c-rating-chart__details-value c-rating-chart__details-value--large">
                          {{ persianNum(\Modules\Staff\Product\Models\ProductHasVariant::where('status', 1)->count()) }}
                        </div>
                      </div>
                    </a>

                    <a class="c-rating-chart c-rating-chart--condensed">
                      <div class="c-rating-chart__details-bar">
                        <div class="c-rating-chart__description c-rating-chart__description--bar c-card__stat-description uk-inline">
                         کل تنوع‌های غیرفعال
                        </div>
                        <div class="c-rating-chart__details-value c-rating-chart__details-value--large">
                          {{ persianNum(\Modules\Staff\Product\Models\ProductHasVariant::where('status', 0)->count()) }}
                        </div>
                      </div>
                    </a>

                    <a class="c-rating-chart c-rating-chart--condensed">
                      <div class="c-rating-chart__details-bar">
                        <div class="c-rating-chart__description c-rating-chart__description--bar c-card__stat-description uk-inline">
                          تنوع‌های بدون فروش
                        </div>
                        <div class="c-rating-chart__details-value c-rating-chart__details-value--large">
                          {{ persianNum($consignments->count() - count(\Modules\Staff\Product\Models\ProductVariantable::where('variantable_type', 'ConsignmentHasProductVariants')->select('variantable_id')->distinct()->get())) }}
                        </div>
                      </div>
                    </a>

                    <div class="c-rating-chart c-rating-chart--condensed">
                      <a class="c-rating-chart__details-bar">
                        <div class="c-rating-chart__description c-rating-chart__description--bar c-card__stat-description uk-inline">
                           تنوع‌های در حال اتمام موجودی (کمتر از سه عدد)
                        </div>

                        <div class="c-rating-chart__details-value c-rating-chart__details-value--large">
                          {{ persianNum(\Modules\Staff\Product\Models\ProductHasVariant::where('stock_count', '<', 3)->where('stock_count', '>', 0)->count()) }}
                        </div>
                      </a>

                    </div>
                    <a class="c-rating-chart c-rating-chart--condensed">
                      <div class="c-rating-chart__details-bar">
                        <div class="c-rating-chart__description c-rating-chart__description--bar c-card__stat-description uk-inline">
                          تنوع‌های بدون موجودی
                        </div>
                        <div class="c-rating-chart__details-value c-rating-chart__details-value--large">
                          {{ persianNum(\Modules\Staff\Product\Models\ProductHasVariant::where('stock_count', 0)->count()) }}
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>

              <div class="c-grid__col c-grid__col--sm-4 c-grid__col--xs-gap">
                <div class="c-card" id="dashboard-step-11">
                  <div class="c-card__header">
                    <h2 class="c-card__title">مدیریت سفارشات</h2>
                  </div>
                  <div class="c-card__body">

                    <a class="c-rating-chart c-rating-chart--condensed">
                      <div class="c-rating-chart__details-bar">
                        <div class="c-rating-chart__description c-rating-chart__description--bar c-card__stat-description uk-inline">
                         سفارشات موفق امروز شما
                        </div>
                        <div class="c-rating-chart__details-value c-rating-chart__details-value--large">
                          {{ persianNum(\Modules\Staff\Order\Models\Order::whereDate('created_at', \Carbon\Carbon::today())->where('order_status_id', '!=' , 1)->count()) }}
                        </div>
                      </div>
                    </a>

                    <a class="c-rating-chart c-rating-chart--condensed">
                      <div class="c-rating-chart__details-bar">
                        <div class="c-rating-chart__description c-rating-chart__description--bar c-card__stat-description uk-inline">
                          سفارشات در انتظار بررسی
                        </div>
                        <div class="c-rating-chart__details-value c-rating-chart__details-value--large">
                          {{ persianNum(\Modules\Staff\Order\Models\Order::where('order_status_id', 8)->count()) }}
                        </div>
                      </div>
                    </a>

                    <a class="c-rating-chart c-rating-chart--condensed">
                      <div class="c-rating-chart__details-bar">
                        <div class="c-rating-chart__description c-rating-chart__description--bar c-card__stat-description uk-inline">
                          کل تعهد ارسال گذشته و امروز
                        </div>
                        <div class="c-rating-chart__details-value c-rating-chart__details-value--large">
                          {{ persianNum($send_today_only) }}
                        </div>
                        <div class="c-rating-chart__description-tooltip uk-dropdown" uk-dropdown="boundary: .js-dropdown-desc; pos: bottom-center;delay: 0">
                          <div class="c-rating-chart__description c-rating-chart__description--bar c-rating-chart__description--sub c-card__stat-description">حداقل یک فروشنده روی کالای مشابه قیمت‌گذاری کرده است</div>
                        </div>
                      </div>
                    </a>

                    <a class="c-rating-chart c-rating-chart--condensed">
                      <div class="c-rating-chart__details-bar">
                        <div class="c-rating-chart__description c-rating-chart__description--bar c-card__stat-description uk-inline">
                          کل تعهد ارسال فردا به بعد
                        </div>
                        <div class="c-rating-chart__details-value c-rating-chart__details-value--large">
                          {{ persianNum($send_tomorrow_only) }}
                        </div>
                      </div>
                    </a>

                    <a class="c-rating-chart c-rating-chart--condensed">
                      <div class="c-rating-chart__details-bar">
                        <div class="c-rating-chart__description c-rating-chart__description--bar c-card__stat-description uk-inline">
                          سفارشات تاخیر دار
                        </div>
                        <div class="c-rating-chart__details-value c-rating-chart__details-value--large">
                          {{ persianNum($delivery_order_delay) }}
                        </div>
                        <div class="c-rating-chart__description-tooltip uk-dropdown" uk-dropdown="boundary: .js-dropdown-desc; pos: bottom-center;delay: 0">
                          <div class="c-rating-chart__description c-rating-chart__description--bar c-rating-chart__description--sub c-card__stat-description">تنوع‌های که در حال حاضرشما تنها فروشنده آن هستید</div>
                        </div>
                      </div>
                    </a>

                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="c-grid__row">
          <div class="c-grid__col c-grid__col--lg-9 c-grid__col--xs-gap c-grid__col--sm-gap">
          </div>
        </div>

        <div class="c-grid__row">
          <div class="c-grid__col c-grid__col--lg-4" id="dashboard-step-16">
            <div class="c-card">
              <div class="c-card__header">
                <h2 class="c-card__title">وضعیت فروش</h2>
              </div>
              <div class="c-card__body">
                <?php
                  $sum_order_cost_filter1 = \Modules\Staff\Order\Models\Order::whereDate( 'created_at', '>', \Carbon\Carbon::now()->subDays(7))->sum('cost');
                  $sum_order_count_filter1 = \Modules\Staff\Order\Models\Order::whereDate( 'created_at', '>', \Carbon\Carbon::now()->subDays(7))->count();
                  $sum_order_cost_filter2 = \Modules\Staff\Order\Models\Order::whereDate( 'created_at', '<', \Carbon\Carbon::now()->subDays(7))->whereDate( 'created_at', '>', \Carbon\Carbon::now()->subDays(14))->sum('cost');
                  $sum_order_count_filter2 = \Modules\Staff\Order\Models\Order::whereDate( 'created_at', '<', \Carbon\Carbon::now()->subDays(7))->whereDate( 'created_at', '>', \Carbon\Carbon::now()->subDays(14))->count();
                  $sum_order_cost_filter3 = \Modules\Staff\Order\Models\Order::whereDate( 'created_at', '>', \Carbon\Carbon::now()->subDays(30))->sum('cost');
                  $sum_order_count_filter3 = \Modules\Staff\Order\Models\Order::whereDate( 'created_at', '>', \Carbon\Carbon::now()->subDays(30))->count();

                  $sum_order_count_filter4 = \Modules\Staff\Order\Models\Order::where('order_status_id', 7)->whereDate( 'created_at', '>', \Carbon\Carbon::now()->subDays(30))->count();
                  $sum_order_count_filter5 = \Modules\Staff\Order\Models\Order::where('order_status_id', '!=', 1)->orWhere('order_status_id', '!=', 7)->whereDate( 'created_at', '>', \Carbon\Carbon::now()->subDays(30))->count();
                ?>
                <div class="c-card__stat c-card__stat--section">
                  <a class="js-change-selling-chart" data-option="last_7_days">
                    <div class="c-card__stat-value c-card__stat-value--active" data-value="{{ $sum_order_cost_filter1 }}">
                      <span dir="ltr" data-debug="{{ $sum_order_cost_filter1 }}">{{ persianNum(number_format($sum_order_cost_filter1)) }}</span> <span class="small">ریال</span>
                    </div>
                    <div class="c-card__stat-description">
                      فروش هفته جاری
                    </div>
                  </a>
                </div>

                <a class="c-card__stat js-change-selling-chart" data-option="last_60_days">
                  <div class="c-card__stat-value" data-value="{{ $sum_order_cost_filter2 }}">
                    <span dir="ltr" data-debug="{{ $sum_order_cost_filter2 }}">{{ persianNum(number_format($sum_order_cost_filter2)) }}</span> <span class="small">ریال</span>
                  </div>
                  <div class="c-card__stat-description">
                    فروش هفته گذشته
                  </div>
                </a>

                <a class="c-card__stat js-change-selling-chart" data-option="last_year">
                  <div class="c-card__stat-value" data-value="0">
                    <span dir="ltr" data-debug="{{ $sum_order_cost_filter3 }}">{{ persianNum(number_format($sum_order_cost_filter3)) }}</span> <span class="small">ریال</span>
                  </div>
                  <div class="c-card__stat-description">
                    فروش ماه گذشته
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="c-grid__col c-grid__col--xs-gap c-grid__col--sm-gap c-grid__col--lg-4" id="dashboard-step-18">
            <div class="c-card">
              <div class="c-card__header">
                <h2 class="c-card__title">تعداد فروش </h2>
              </div>
              <div class="c-card__body">
                <a class="c-card__stat">
                  <div class="c-rating-chart__details-value c-rating-chart__details-value--full c-card__stat-value c-rating-chart__details-value--5">
                    {{ persianNum($sum_order_count_filter1) }} <span>عدد</span>
                  </div>
                  <div class="c-card__stat-description">
                    تعداد کالای فروش رفته هفته جاری
                  </div>
                </a>

                <a class="c-card__stat">
                  <div class="c-rating-chart__details-value c-rating-chart__details-value--full c-card__stat-value c-rating-chart__details-value--neutral">
                    {{ persianNum($sum_order_count_filter2) }} <span>عدد</span>
                  </div>
                  <div class="c-card__stat-description">
                    تعداد کالای فروش رفته هفته گذشته
                  </div>
                </a>

                <a class="c-card__stat">
                  <div class="c-rating-chart__details-value c-rating-chart__details-value--full c-card__stat-value c-rating-chart__details-value--neutral">
                    {{ persianNum($sum_order_count_filter3) }} <span>عدد</span>
                  </div>
                  <div class="c-card__stat-description">
                    تعداد کالای فروش رفته ماه گذشته
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="c-grid__col c-grid__col--xs-gap c-grid__col--sm-gap c-grid__col--lg-4" id="dashboard-step-17">
            <div class="c-card">
              <div class="c-card__header">
                <h2 class="c-card__title">وضعیت سفارش‌ها در ماه گذشته</h2>
              </div>
              <div class="c-card__body">
                <a class="c-card__stat">
                  <div class="c-rating-chart__details-value c-rating-chart__details-value--full c-card__stat-value c-rating-chart__details-value--info">
                    {{ persianNum($sum_order_count_filter5) }}
                  </div>
                  <p class="c-card__stat-description">سفارش‌های پرداخت موفق</p>
                </a>

                <a class="c-card__stat">
                  <div class="c-rating-chart__details-value c-rating-chart__details-value--full c-card__stat-value c-rating-chart__details-value--3">
                    {{ persianNum($sum_order_count_filter4) }}
                  </div>
                  <p class="c-card__stat-description ">سفارش‌های لغو شده / بایگانی شده</p>
                </a>

                <a class="c-card__stat">
                  <div class="c-rating-chart__details-value c-rating-chart__details-value--full c-card__stat-value c-rating-chart__details-value--1">
                    ۰
                  </div>
                  <p class="c-card__stat-description">سفارش‌های مرجوع شده</p>
                </a>

              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </main>
@endsection

