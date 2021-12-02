@extends('layouts.staff.master')
@section('title') ویرایش محصول | {{ $fa_store_name }}  @endsection
@section('head')
<style>
    .o-spacing-m-t-4 {
        margin-top: 0px !important;
    }
</style>
<script src="{{ asset('seller/js/tags5.js') }}"></script>

<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
<link rel="stylesheet" href="{{ asset('seller/css/tagify.css') }}">
<script src="{{ asset('seller/js/jQuery.tagify.min.js') }}"></script>
<script src="{{ asset('seller/js/tagify.min.js') }}"></script>
<link rel="stylesheet" href="https://unpkg.com/@yaireo/dragsort/dist/dragsort.css" media="print" onload="this.media='all'">
<script src="https://unpkg.com/@yaireo/dragsort"></script>

{{--<script>--}}
{{--    var module_hash_id_storage = 1;--}}
{{--    var module_no_replace_update_command_status = 1;--}}
{{--    var module_no_cli_lock = 1;--}}
{{--    var module_improve_change_queues = 1;--}}
{{--    var module_console_greeting = 1;--}}
{{--    var module_daily_sellable_stock = 1;--}}
{{--    var module_online_shipment_cancellation = 1;--}}
{{--    var module_fc_supplier_invoice = 1;--}}
{{--    var module_digistyle = 1;--}}
{{--    var module_fbs_failed_delivery_flow = 1;--}}
{{--    var module_marketplace_fbs_courier = 1;--}}
{{--    var module_marketplace_warehouse_setting_modal = 1;--}}
{{--    var module_digistyle_special_capacity = 1;--}}
{{--    var module_marketplace_add_more_filter_on_ship_by_seller_order_page = 1;--}}
{{--    var module_ds_return_order = 1;--}}
{{--    var module_breaking_payment = 1;--}}
{{--    var module_orders_full_log = 1;--}}
{{--    var module_available_ts_for_non_plus_users = 1;--}}
{{--    var module_marketplace_promotion_new_features = 1;--}}
{{--    var module_app_break_payment = 1;--}}
{{--    var module_plus_subscription_nps = 1;--}}
{{--    var module_plus_partnership_filimo = 1;--}}
{{--    var module_plus_partnership = 1;--}}
{{--    var module_online_return_drop_off = 1;--}}
{{--    var module_marketplace_sbs_excel_export = 1;--}}
{{--    var module_sbs_psat_sms = 1;--}}
{{--    var module_proof_of_delivery = 1;--}}
{{--    var module_refactor_nps_survey = 1;--}}
{{--    var module_shopping_setting = 1;--}}
{{--    var module_dkms_premium_brand_application_mode = 1;--}}
{{--    var module_fbd_schedule_order = 1;--}}
{{--    var module_online_return = 1;--}}
{{--    var module_change_comments_like_button = 1;--}}
{{--    var module_return_outbound = 1;--}}
{{--    var module_ship_by_seller_verification_code_try_rate_limit = 1;--}}
{{--    var module_international_po = 1;--}}
{{--    var module_dk_set_pdp_ga = 1;--}}
{{--    var module_fmcg = 1;--}}
{{--    var module_plp_redesign = 1;--}}
{{--    var module_redesign_admin_c2c_ad_detail = 1;--}}
{{--    var module_FMCG_emarsys = 1;--}}
{{--    var module_fake_products = 1;--}}
{{--    var module_digikala_fashion = 1;--}}
{{--    var module_digikala_news = 1;--}}
{{--    var module_sponsored_mega_menu = 1;--}}
{{--    var module_ds_redesign_profile_addresses = 1;--}}
{{--    var module_video_modal = 1;--}}
{{--    var module_main_category_amazing_data_layer = 1;--}}
{{--    var module_fresh_badge_basket = 1;--}}
{{--    var module_rostaee_badge = 1;--}}
{{--    var module_sampling_visibility_in_order = 1;--}}
{{--    var module_revised_sellers_promotions_price = 1;--}}
{{--    var module_new_post = 1;--}}
{{--    var module_ab_pdp_back_to_cart = 1;--}}
{{--    var module_dynamic_fashion_category = 1;--}}
{{--    var module_product_change_queue_entity = 1;--}}
{{--    var module_package_gate = 1;--}}
{{--    var module_faq_short_answer = 1;--}}
{{--    var module_gallery_zoom = 1;--}}
{{--    var module_enable_fast_excel = 1;--}}
{{--    var module_fc_split_receipt_item = 1;--}}
{{--    var module_seller_bank_account_refactor = 1;--}}
{{--    var module_shipment_cost_bar = 1;--}}
{{--    var module_adro_tracker_sales = 1;--}}
{{--    var module_adro_banner_placement = 1;--}}
{{--    var module_new_home_and_kitchen_widget_design = 1;--}}
{{--    var module_bellatrix_dynamic_widget = 1;--}}
{{--    var module_product_redesign = 1;--}}
{{--    var module_sponsoredAd = 1;--}}
{{--    var module_share_invoice = 1;--}}
{{--    var module_digikala_profile_return = 1;--}}
{{--    var module_bank_card_redesign = 1;--}}
{{--    var module_faq_tab_redesign = 1;--}}
{{--    var module_comments_file = 1;--}}
{{--    var module_increase_comment_video_limit_count = 1;--}}
{{--    var module_contact_design = 1;--}}
{{--    var module_dk_contact_redesign = 1;--}}
{{--    var module_digiclub_touchpoints = 1;--}}
{{--    var module_digiclub_touchpoints_september = 1;--}}
{{--    var module_digiclub_luckydraw_stopped = 1;--}}
{{--    var module_digiclub_promotion = 1;--}}
{{--    var module_digiclub_new_header = 1;--}}
{{--    var module_digiclub_lucky_spinner = 1;--}}
{{--    var module_digiclub_multiple_shipment = 1;--}}
{{--    var module_digiclub_new_info = 1;--}}
{{--    var module_digiclub_shipping_points = 1;--}}
{{--    var module_digiclub_birthday_anniversary_gift_points = 1;--}}
{{--    var module_digiclub_game_center = 1;--}}
{{--    var module_digiclub_game_center_content = 1;--}}
{{--    var module_digiclub_mission_page = 1;--}}
{{--    var module_pdp_shortcut_and_touchpoint_filter = 1;--}}
{{--    var module_marketplace_orders_ovl = 1;--}}
{{--    var module_marketplace_ovl = 1;--}}
{{--    var module_modal_add_to_cart = 1;--}}
{{--    var module_size_guide_new = 1;--}}
{{--    var module_marketplace_request_invoices_export = 1;--}}
{{--    var module_faq_feedback = 1;--}}
{{--    var module_marketplace_remove_active_field_from_bank_account_entity = 1;--}}
{{--    var module_cart_details_new_design = 1;--}}
{{--    var module_seven_days_warranty = 1;--}}
{{--    var module_crm_after_sale = 1;--}}
{{--    var module_sms_comments_file = 1;--}}
{{--    var module_user_history = 1;--}}
{{--    var module_Adro_sponsoredAd = 1;--}}
{{--    var module_search_new_style = 1;--}}
{{--    var module_new_shipping = 1;--}}
{{--    var module_set_order_type_ga = 1;--}}
{{--    var module_qa_moderation = 1;--}}
{{--    var module_js_crashlytics = 1;--}}
{{--    var module_marketplace_electronic_contract = 1;--}}
{{--    var module_marketplace_electronic_contract_admin_side = 1;--}}
{{--    var module_premium_brand = 1;--}}
{{--    var module_merge_accounts = 1;--}}
{{--    var module_dkms_new_brand = 1;--}}
{{--    var module_adservice_digikala_premium_brand = 1;--}}
{{--    var module_adservice_digikala_premium_brand_improvement = 1;--}}
{{--    var module_desktop_sis = 1;--}}
{{--    var module_mobile_sis = 1;--}}
{{--    var module_footer_new_social_links = 1;--}}
{{--    var module_new_registration = 1;--}}
{{--    var module_new_desktop_header = 1;--}}
{{--    var module_general_location = 1;--}}
{{--    var module_top_banner_make_unsticky = 1;--}}
{{--    var module_ds_voucher_box = 1;--}}
{{--    var module_yalda_box = 1;--}}
{{--    var module_dkms_brand_campaign = 1;--}}
{{--    var module_order_item_modification = 1;--}}
{{--    var module_voucher_fraud_prevention = 1;--}}
{{--    var module_marketplace_package_wh_capacity = 1;--}}
{{--    var module_address_landline = 1;--}}
{{--    var module_dk_wallet = 1;--}}
{{--    var module_product_box_cpc_redesign = 1;--}}
{{--    var module_ab_desktop_touchpoint_filters = 1;--}}
{{--    var module_dk_wallet_cash_back = 1;--}}
{{--    var module_admin_marketplace_seller_edit_address = 1;--}}
{{--    var module_marketplace_seller_sort_warehouses = 1;--}}
{{--    var module_marketplace_seller_registration_address = 1;--}}
{{--    var module_DS_megamenu_redesign = 1;--}}
{{--    var module_marketplace_seller_profile_wh = 1;--}}
{{--    var module_new_carousel_price = 1;--}}
{{--    var module_ga_shipping_carousel_add_to_cart = 1;--}}
{{--    var module_ds_seller = 1;--}}
{{--    var module_ds_seller_new = 1;--}}
{{--    var module_adservice_sku_price = 1;--}}
{{--    var module_ds_special_sale = 1;--}}
{{--    var module_promotion_mega_menu = 1;--}}
{{--    var module_add_item = 1;--}}
{{--    var module_cancel_item = 1;--}}
{{--    var module_category_product_types = 1;--}}
{{--    var module_marketplace_hidden_category_panel = 1;--}}
{{--    var module_ds_mobile_web_mega_menu_redesign = 1;--}}
{{--    var module_pdp_digikala_rate = 1;--}}
{{--    var module_vouchers_order_count = 1;--}}
{{--    var module_marketplace_buy_box_usage_log = 1;--}}
{{--    var module_mobile_carousels_fast_shopping = 1;--}}
{{--    var module_DK_Recommendation = 1;--}}
{{--    var module_dk_mobile_contact_redesign = 1;--}}
{{--    var module_contact_change_upload_logic = 1;--}}
{{--    var module_retail_buy_box_challenge = 1;--}}
{{--    var module_adro_digistyle_affiliate = 1;--}}
{{--    var module_profile_topup = 1;--}}
{{--    var module_new_bill = 1;--}}
{{--    var module_refactor_shipping = 1;--}}
{{--    var module_new_payment = 1;--}}
{{--    var module_minicart_red_button = 1;--}}
{{--    var module_marketplace_order_package_mapping = 1;--}}
{{--    var module_new_gallery = 1;--}}
{{--    var module_mobile_new_gallery = 1;--}}
{{--    var module_price_chart_scale = 1;--}}
{{--    var module_marketplace_large_item_hub_time_scope_modification = 1;--}}
{{--    var module_new_add_btn = 1;--}}
{{--    var module_yalda_home = 1;--}}
{{--    var module_marketplace_info_footer = 1;--}}
{{--    var module_new_gallery_icons = 1;--}}
{{--    var module_adro_sponsor_badge_banner = 1;--}}
{{--    var module_adro_sponsor_badge_banner_fashion = 1;--}}
{{--    var module_yalda_cash_back = 1;--}}
{{--    var module_new_empty_cart = 1;--}}
{{--    var module_dkms_brand_campaign_redesign = 1;--}}
{{--    var module_cpo_new_search = 1;--}}
{{--    var module_cpo_winner_buy_box = 1;--}}
{{--    var module_pdp_large_item = 1;--}}
{{--    var module_packaging_info = 1;--}}
{{--    var module_marketplace_order_detail = 1;--}}
{{--    var module_remove_title_mandatory = 1;--}}
{{--    var module_cpo_new_rules = 1;--}}
{{--    var module_marketplace_seller_cpo_access_restriction = 1;--}}
{{--    var module_my_dk_navbar = 1;--}}
{{--    var module_ds_new_home = 1;--}}
{{--    var module_product_new_image = 1;--}}
{{--    var module_marketplace_lead_time_in_category = 1;--}}
{{--    var module_brand_iranian_designer = 1;--}}
{{--    var module_shopping_new_incredible_categories = 1;--}}
{{--    var module_marketplace_promotion_management = 1;--}}
{{--    var module_modify_reference_price_rules = 1;--}}
{{--    var module_shopping_fresh_in_incredible_carousel = 1;--}}
{{--    var module_DK_DC_navigation = 1;--}}
{{--    var module_marketplace_price_tag = 1;--}}
{{--    var module_adservice_banner_sort = 1;--}}
{{--    var module_new_chat_client = 1;--}}
{{--    var module_new_chat_client_ajax = 1;--}}
{{--    var module_parsi_map = 1;--}}
{{--    var module_new_address_modal = 1;--}}
{{--    var module_new_profile_addresses = 1;--}}
{{--    var module_new_profile_gift_card = 1;--}}
{{--    var module_new_profile_user_history = 1;--}}
{{--    var module_new_checkout_address = 1;--}}
{{--    var module_address_geolocation = 1;--}}
{{--    var module_adservice_incredible_offer_eligible_variant = 1;--}}
{{--    var module_paste_barcode_copied = 1;--}}
{{--    var module_ds_faq_dynamic = 1;--}}
{{--    var module_new_lead_time_text = 1;--}}
{{--    var module_digistyle_special_event = 1;--}}
{{--    var module_digistyle_voucher_spinner = 1;--}}
{{--    var module_cart_sampling_gift = 1;--}}
{{--    var module_ds_favorite_brands = 1;--}}
{{--    var module_new_user_history = 1;--}}
{{--    var module_ds_new_add_to_cart = 1;--}}
{{--    var module_light_box = 1;--}}
{{--    var module_fmcg_navigation = 1;--}}
{{--    var module_marketplace_moderation_category_suggestion_modal = 1;--}}
{{--    var module_video_js = 1;--}}
{{--    var module_marketplace_new_seller_dashboard = 1;--}}
{{--    var module_large_item_shipping_fee = 1;--}}
{{--    var module_new_address_improvement = 1;--}}
{{--    var module_seller_notification_changing_email = 1;--}}
{{--    var module_profile_list = 1;--}}
{{--    var module_premium_brand_bullet_points = 1;--}}
{{--    var module_shared_address = 1;--}}
{{--    var module_pdp_seller_rate_info_modal = 1;--}}
{{--    var module_dimension_config_validation = 1;--}}
{{--    var module_ds_update_cart_when_removed = 1;--}}
{{--    var module_ds_profile_icon_dropdown = 1;--}}
{{--    var module_ds_default_size_none = 1;--}}
{{--    var module_ds_faq_new = 1;--}}
{{--    var module_ab_test_plp_rating = 1;--}}
{{--    var module_ds_employee_discount = 1;--}}
{{--    var module_ds_next_purchase_counter_update = 1;--}}
{{--    var module_admin_warranty_insurance = 1;--}}
{{--    var module_new_profile_orders = 1;--}}
{{--    var module_new_profile_sidebar = 1;--}}
{{--    var module_delete_comment = 1;--}}
{{--    var module_ds_refresh_when_phone_edit = 1;--}}
{{--    var module_new_market_price_rules = 1;--}}
{{--    var module_ds_only_banner_logo = 1;--}}
{{--    var module_ds_banner_description_scroll = 1;--}}
{{--    var module_digiplus_pdp = 1;--}}
{{--    var module_digiplus_plp = 1;--}}
{{--    var module_digiplus_navigation = 1;--}}
{{--    var module_digiplus_checkout = 1;--}}
{{--    var module_digiplus_timescope = 1;--}}
{{--    var module_digiplus_shipping = 1;--}}
{{--    var module_digiplus_filter = 1;--}}
{{--    var module_digiplus_incredible = 1;--}}
{{--    var module_digiplus_profile = 1;--}}
{{--    var module_digiplus_carousel = 1;--}}
{{--    var module_digiplus_tnc = 1;--}}
{{--    var module_digiplus_cashback = 1;--}}
{{--    var module_digiplus_notifications = 1;--}}
{{--    var module_digikala_plus_service = 1;--}}
{{--    var module_plus_free_shipping = 1;--}}
{{--    var module_digiplus_rebrand = 1;--}}
{{--    var module_digiplus_public = 1;--}}
{{--    var module_digiplus_badge = 1;--}}
{{--    var module_digiplus_promotion_cb = 1;--}}
{{--    var module_marketplace_profile_refactor = 1;--}}
{{--    var module_ds_next_for_non_logged_users = 1;--}}
{{--    var module_sfl_separation = 1;--}}
{{--    var module_esi_in_mini_header = 1;--}}
{{--    var module_ds_comment_for_non_logged = 1;--}}
{{--    var module_ds_mobile_full_footer = 1;--}}
{{--    var module_banner_url_check = 1;--}}
{{--    var module_ds_mobile_comment_verfication = 1;--}}
{{--    var module_ds_mobile_back_menu = 1;--}}
{{--    var module_ds_new_mobile_header = 1;--}}
{{--    var module_new_mobile_header = 1;--}}
{{--    var module_new_ds_brands = 1;--}}
{{--    var module_dk_mobile_menu_revision = 1;--}}
{{--    var module_ds_plp_redesign = 1;--}}
{{--    var module_voucher_fraud_detection = 1;--}}
{{--    var module_marketplace_dk_pickup_shipment = 1;--}}
{{--    var module_marketplace_create_package_shipment = 1;--}}
{{--    var module_shipment_effect_create_package = 1;--}}
{{--    var module_recaptcha_contact_us = 1;--}}
{{--    var module_ds_mega_menu_redesign = 1;--}}
{{--    var module_data_layer = 1;--}}
{{--    var module_data_layer_carousels = 1;--}}
{{--    var module_data_layer_phase2 = 1;--}}
{{--    var module_data_layer_my_landing = 1;--}}
{{--    var module_limit_seller_pricing = 1;--}}
{{--    var module_checkout_action_button_replacement = 1;--}}
{{--    var module_ds_shipment_back = 1;--}}
{{--    var module_new_comment = 1;--}}
{{--    var module_new_profile_orders_mobile = 1;--}}
{{--    var module_new_price_chart_header = 1;--}}
{{--    var module_ds_comment_errors = 1;--}}
{{--    var module_mobile_time_table = 1;--}}
{{--    var module_admin_new_ship_by_seller = 1;--}}
{{--    var module_ship_by_seller_profile = 1;--}}
{{--    var module_shipping_v2 = 1;--}}
{{--    var module_ship_by_seller_checkout = 1;--}}
{{--    var module_ship_by_seller_product = 1;--}}
{{--    var module_new_cpo_icon_config = 1;--}}
{{--    var module_separated_delete_button = 1;--}}
{{--    var module_new_profile_notification = 1;--}}
{{--    var module_ds_favorite_list = 1;--}}
{{--    var module_mandatory_location_shipping = 1;--}}
{{--    var module_ds_minicart_redesign = 1;--}}
{{--    var module_sfl_inactive_product = 1;--}}
{{--    var module_marketplace_ship_by_seller_pdp = 1;--}}
{{--    var module_drop_off = 1;--}}
{{--    var module_new_profile_additional_info = 1;--}}
{{--    var module_new_profile_additional_info_mobile = 1;--}}
{{--    var module_new_vat_rule = 1;--}}
{{--    var module_seller_live_date = 1;--}}
{{--    var module_plp_top_filters = 1;--}}
{{--    var module_cbr_unsatisfied_users = 1;--}}
{{--    var module_chatbox_all_pages = 1;--}}
{{--    var module_display_inactive_products = 1;--}}
{{--    var module_update_product_site_excel = 1;--}}
{{--    var module_ds_faq_new_mobile = 1;--}}
{{--    var module_stop_sending_email_sms_to_sellers = 1;--}}
{{--    var module_nps_ship_by_seller = 1;--}}
{{--    var module_new_login = 1;--}}
{{--    var module_cpo_import_excel = 1;--}}
{{--    var module_refund_end_to_end = 1;--}}
{{--    var module_ship_by_seller_ovl = 1;--}}
{{--    var module_collective_promotions_module = 1;--}}
{{--    var module_selection_pricing = 1;--}}
{{--    var module_dynamic_shipping_cost = 1;--}}
{{--    var module_ds_category_filter = 1;--}}
{{--    var module_sbs_failed_delivery = 1;--}}
{{--    var module_jet_delivery = 1;--}}
{{--    var module_amazing_carousel_show_all = 1;--}}
{{--    var module_marketplace_seller_data = 1;--}}
{{--    var module_new_economic_profile = 1;--}}
{{--    var module_jet_delivery_filter = 1;--}}
{{--    var module_new_burger_menu = 1;--}}
{{--    var module_ds_home_rearrange = 1;--}}
{{--    var module_ds_pdp_cart_header = 1;--}}
{{--    var module_new_cmp_category = 1;--}}
{{--    var module_auto_title_suggestion = 1;--}}
{{--    var module_dk_rebranding = 1;--}}
{{--    var module_rebrand_border_radius = 1;--}}
{{--    var module_limit_pricing_content = 1;--}}
{{--    var module_variant_restrictions = 1;--}}
{{--    var module_new_question_gallery = 1;--}}
{{--    var module_ds_seller_pdp_redesign = 1;--}}
{{--    var module_ds_comment_redesign = 1;--}}
{{--    var module_ds_pdp_redesign_f = 1;--}}
{{--    var module_add_imei_to_packages = 1;--}}
{{--    var module_new_thank_you = 1;--}}
{{--    var module_thankyou_without_action = 1;--}}
{{--    var module_ds_mega_menu_beauty = 1;--}}
{{--    var module_cart_swiper_ab_test = 1;--}}
{{--    var module_cpo_excel_import = 1;--}}
{{--    var module_ml_profile_ab_test = 1;--}}
{{--    var module_sbs_delivery_send_delivered_sms = 1;--}}
{{--    var module_new_contact_us = 1;--}}
{{--    var module_new_ds_contact_us = 1;--}}
{{--    var module_carousel_brand_campaign = 1;--}}
{{--    var module_ds_beatuy_new_badge = 1;--}}
{{--    var module_ds_design_improve = 1;--}}
{{--    var module_jet_delivery_variant_dimension = 1;--}}
{{--    var module_mobile_back_btn_position = 1;--}}
{{--    var module_ds_install_app = 1;--}}
{{--    var module_only_seller_shipping_type = 1;--}}
{{--    var module_checkout_ship_by_seller_phase_2 = 1;--}}
{{--    var module_ds_new_forget_pass_email = 1;--}}
{{--    var module_ds_product_image_zoom = 1;--}}
{{--    var module_only_fbs = 1;--}}
{{--    var module_hoda_verification = 1;--}}
{{--    var module_ds_new_auth = 1;--}}
{{--    var module_share_new_option = 1;--}}
{{--    var module_ds_order_history = 1;--}}
{{--    var module_ds_order_details = 1;--}}
{{--    var module_marketplace_ship_by_seller_order_new_sort = 1;--}}
{{--    var module_auto_assign_products_photo = 1;--}}
{{--    var module_unavailable_payment_method_ab_test = 1;--}}
{{--    var module_ds_order_history_dt = 1;--}}
{{--    var module_ds_profile_components = 1;--}}
{{--    var module_ds_order_search = 1;--}}
{{--    var module_ds_order_search_dt = 1;--}}
{{--    var module_marketplace_new_passive_order = 1;--}}
{{--    var module_content_x = 1;--}}
{{--    var module_non_mandatory_economic_number = 1;--}}
{{--    var module_shortcut_filters = 1;--}}
{{--    var module_revamp_product = 1;--}}
{{--    var module_new_shipping_limit_modal = 1;--}}
{{--    var module_new_app_adjust_links = 1;--}}
{{--    var module_marketplace_profile_rating = 1;--}}
{{--    var module_only_fbs_deactive_variant = 1;--}}
{{--    var module_insider_object = 1;--}}
{{--    var module_seo_search_pages = 1;--}}
{{--    var module_app_specific_incredible = 1;--}}
{{--    var module_marketplace_finance_wallet = 1;--}}
{{--    var module_ds_impression_click_install_app = 1;--}}
{{--    var module_long_time_declare = 1;--}}
{{--    var module_edit_product_price_amazing = 1;--}}
{{--    var module_marketplace_lazy_load_images_cmp = 1;--}}
{{--    var module_ship_by_seller_post = 1;--}}
{{--    var module_deactive_empty_promotions = 1;--}}
{{--    var module_sponsored_ads = 1;--}}
{{--    var module_seller_landing_redesign = 1;--}}
{{--    var module_ab_pdp_view_count = 1;--}}
{{--    var module_pdp_concurrent_viewer_phase1 = 1;--}}
{{--    var module_ship_by_seller_total_capacity_remained_calculator = 1;--}}
{{--    var module_new_ship_by_seller_setting = 1;--}}
{{--    var module_marketplace_ship_by_seller_settings = 1;--}}
{{--    var module_marketplace_ship_by_seller_free_shipping = 1;--}}
{{--    var module_marketplace_fix_registration_fmcg_bug = 1;--}}
{{--    var module_improve_sheba_number = 1;--}}
{{--    var module_post_next_day_checkout = 1;--}}
{{--    var module_IMEI_demo = 1;--}}
{{--    var module_main_cat_amazing = 1;--}}
{{--    var module_mc_provider_filter = 1;--}}
{{--    var module_dk_mobile_header_redesign = 1;--}}
{{--    var module_commission_discount = 1;--}}
{{--    var module_automatic_approval_shared_promotions = 1;--}}
{{--    var module_seller_module_batch_activation = 1;--}}
{{--    var module_marketplace_fix_image_problem_on_responsive = 1;--}}
{{--    var module_product_config_multi_select = 1;--}}
{{--    var module_marketplace_ship_by_seller_restriction = 1;--}}
{{--    var module_new_bazaar_logo = 1;--}}
{{--    var module_download_app_row_redesign = 1;--}}
{{--    var module_first_party_flag = 1;--}}
{{--    var module_product_is_iranian = 1;--}}
{{--    var module_ciri_new_design = 1;--}}
{{--    var module_plp_new_filters = 1;--}}
{{--    var module_new_customer_landing = 1;--}}
{{--    var module_iban = 1;--}}
{{--    var module_marketplace_product_config_sortable_product_id = 1;--}}
{{--    var module_marketplace_profile_commitment_download_link = 1;--}}
{{--    var module_pause_brand_campaign_with_out_of_stock_dkp = 1;--}}
{{--    var module_sbs_carousels = 1;--}}
{{--    var module_content_config = 1;--}}
{{--    var module_sbs_improvement = 1;--}}
{{--    var module_data_layer_ds = 1;--}}
{{--    var module_dimensions_required_cf_view = 1;--}}
{{--    var module_magic_refrigerator_landing = 1;--}}
{{--    var module_village_landing_form = 1;--}}
{{--    var module_anonymous_comment = 1;--}}
{{--    var module_marketplace_profile_persian_digits_contact_info = 1;--}}
{{--    var module_new_shipping_fresh_carousel = 1;--}}
{{--    var module_marketplace_remove_adservice_buttons_product_config = 1;--}}
{{--    var module_seller_voucher_submit_type = 1;--}}
{{--    var module_marketplace_product_config_archive_badge = 1;--}}
{{--    var module_marketplace_seller_registration_birth_date_check = 1;--}}
{{--    var module_sbs_new_label = 1;--}}
{{--    var module_package_delete = 1;--}}
{{--    var module_marketplace_delete_package_modal_and_changes = 1;--}}
{{--    var module_search_banner_command = 1;--}}
{{--    var module_mobile_compare = 1;--}}
{{--    var module_sample_gift = 1;--}}
{{--    var module_fc_supply_payment_new_print = 1;--}}
{{--    var module_cart_simplify = 1;--}}
{{--    var module_marketplace_orders_manual_tracking_code = 1;--}}
{{--    var module_new_dkms_promotion_details_columns = 1;--}}
{{--    var module_ad_expiry_date = 1;--}}
{{--    var module_marketplace_registration_post_number_validation = 1;--}}
{{--    var module_shelf_life_rule = 1;--}}
{{--    var module_ccp_guideline = 1;--}}
{{--    var module_yalda_99_timer = 1;--}}
{{--    var module_yalda_99_carousels = 1;--}}
{{--    var module_rejected_packages = 1;--}}
{{--    var module_best_selling_data_layer = 1;--}}
{{--    var module_digipay_cart_credit = 1;--}}
{{--    var module_marketplace_seller_page_refactor = 1;--}}
{{--    var module_ovl_refactor = 1;--}}
{{--    var module_product_first_party_updater = 1;--}}
{{--    var module_marketplace_profile_description_and_logo_changes = 1;--}}
{{--    var module_new_attribute_structure = 1;--}}
{{--    var module_sale_restriction_reason = 1;--}}
{{--    var module_just_approved_product_can_be_active = 1;--}}
{{--    var module_plus_cashback_per_item = 1;--}}
{{--    var module_auto_title_enable_edit = 1;--}}
{{--    var module_unpause_valid_brand_campaigns = 1;--}}
{{--    var module_marketplace_fix_create_package_process_ui = 1;--}}
{{--    var module_promotion_filter_by_seller = 1;--}}
{{--    var module_seller_calender_change = 1;--}}
{{--    var module_marketplace_create_package_gregorian_date = 1;--}}
{{--    var module_marketplace_package_details_expiration_and_fixes = 1;--}}
{{--    var module_marketplace_create_package_new_shelf_life = 1;--}}
{{--    var module_marketplace_show_hoda_modal = 1;--}}
{{--    var module_profile_return_invoice = 1;--}}
{{--    var module_ts_cut_off_improvement = 1;--}}
{{--    var module_product_class = 1;--}}
{{--    var module_sbs_checkout_post = 1;--}}
{{--    var module_marketplace_registration_persian_numbers = 1;--}}
{{--    var module_ship_by_post_only_small_nature = 1;--}}
{{--    var module_marketplace_ship_by_post_routes = 1;--}}
{{--    var module_fbs_for_all = 1;--}}
{{--    var module_seller_restriction_excel_import = 1;--}}
{{--    var module_mobile_shipping_fresh_recommendation = 1;--}}
{{--    var module_plp_on_promotion = 1;--}}
{{--    var module_order_limit_on_plus_promotions = 1;--}}
{{--    var module_ad_service_separate_plus_amazing_duration = 1;--}}
{{--    var module_duration_time_between_plus_amazing_and_amazing = 1;--}}
{{--    var module_threshold_duration_auto_amazing = 1;--}}
{{--    var module_add_app_banners_for_premium_brand = 1;--}}
{{--    var module_dkms_sponsor_brand_description_and_weight = 1;--}}
{{--    var module_special_amazing_on_app = 1;--}}
{{--    var module_disabled_max_allowable_price_assertion_in_active_amazing = 1;--}}
{{--    var module_new_max_allowable_price_for_incredible = 1;--}}
{{--    var module_adding_tags_to_sponsor_brand_campaigns = 1;--}}
{{--    var module_convert_search_brand_name_to_persian_chars = 1;--}}
{{--    var module_mc_router = 1;--}}
{{--    var module_cpc_tapsell = 1;--}}
{{--    var module_cpc_yektanet = 1;--}}
{{--    var module_mega_promotion_automation = 1;--}}
{{--    var module_log_missing_translations = 1;--}}
{{--    var module_marketplace_cc = 1;--}}
{{--    var module_marketplace_login_captcha = 1;--}}
{{--    var module_new_reports_page = 1;--}}
{{--    var module_cpo_batch_upload_new = 1;--}}
{{--    var module_split_inbound_capacity = 1;--}}
{{--    var module_marketplace_seller_holiday_for_ship_by_seller = 1;--}}
{{--    var module_sbs_order_log = 1;--}}
{{--    var module_cpc_modal_use_ajax_for_fetching_data = 1;--}}
{{--</script>--}}
@endsection

@section('content')

@php
    $fa_store_name = $settings->where('name', 'site_url')->first()->value;
    $product_code_prefix = $settings->where('name', 'product_code_prefix')->first()->value;
    $product_title_prefix = $settings->where('name', 'product_title_prefix')->first()->value;
@endphp

<main class="c-content-layout">
    <div class="uk-container uk-container-large">
        <div class="c-grid">
            <div class="c-content-page c-content-page--plain c-grid__row">
                <div class="c-grid__col">
                    <div class="c-content-page__header">
                        <span class="c-content-page__header-action">درج محصول</span>
                        <span class="c-content-page__header-desc">اطلاعات محصول‌تان را در این صفحه وارد کنید</span>
                    </div>
                </div>
            </div>
            <div class="c-grid__row">
                <div class="c-grid__col">
                    <div class="c-card">
                        <div class="c-grid__row">
                            <div class="c-grid__col">
                                <div class="product-form">
                                    <div class="c-content-accordion js-accordion">
                                        <section
                                            class="c-content-accordion__row js-content-section uk-open disabled"
                                            id="stepCategoryAccordion">
                                            <h2 class="c-content-accordion__title ">
                                                <div class="c-content-accordion__title-text">گام اول: انتخاب گروه
                                                    کالا
                                                    {{--                                                    <span class="c-content-accordion__guid-line js-guideline-icon " data-guideline-modal="category_selection"></span>--}}
                                                </div>
                                            </h2>
                                            <div class="c-content-accordion__content" id="stepCategoryContainer">
                                                <div class="c-card__body c-card__body--content">
                                                    <div id="ajaxErrorCategory"
                                                         class="c-content-error hidden">
                                                    </div>
                                                    <h3 class="search-form__search-heading">برای درج کالای جدید
                                                        ابتدا گروه کالای خود را انتخاب کنید:</h3>
                                                    <label for="" class="search-form__action-label">جستجوی گروه
                                                        کالای شما:</label>
                                                    <div class="search-form__autocomplete-container">
                                                        <div class="search-form__autocomplete js-autosuggest-box">
                                                            <input id="searchKeyword"
                                                                   class="c-content-input__origin js-prevent-submit"
                                                                   type="text"
                                                                   placeholder="نام کالا،  دسته‌بندی و یا کد دسته‌بندی مورد نظر خود را بنویسید، مثال: گوشی موبایل"
                                                                   disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="c-card__body c-card__body--content">
                                                    <div id="categoriesContainer" class="c-content-categories">
                                                        <div class="c-content-categories__container"
                                                             id="categoriesContainerContent">
                                                            @foreach($all_parent as $parent)
                                                                @if($categories->where('parent_id', $parent)->count() > 0)
                                                                    <div
                                                                        class="c-content-categories__wrapper js-category-column">
                                                                        <ul class="c-content-categories__list">
                                                                            @foreach($categories->where('parent_id',$parent) as $category)
                                                                                <li class="c-content-categories__item
                                                                                 {{ $categories->where('parent_id', $category->id)->count() > 0 ? 'has-children' : '' }}
                                                                                {{ in_array($category->id, $all_parent) ? 'is-active' : '' }}">
                                                                                    <label
                                                                                        class="c-content-categories__link js-category-link">
                                                                                        <input type="radio"
                                                                                               class="uk-hidden js-category-data"
                                                                                               data-id="{{ $category->id }}"
                                                                                               value="{{ $category->name }}"
                                                                                               data-theme="">
                                                                                        {{ $category->name }}
                                                                                    </label>
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                @endif
                                                            @endforeach

                                                        </div>
                                                        <div class="c-content-loader">
                                                            <div class="c-content-loader__logo"></div>
                                                            <div class="c-content-loader__spinner"></div>
                                                        </div>
                                                    </div>

                                                    <div class="c-content-categories__summary">
                                                        <div class="c-content-categories__summary-breadcrumbs">
                                                            <span class="">گروه کالایی انتخابی شما:</span>
                                                            <ul class="js-selected-category c-content-categories__selected-list">
                                                                @foreach($all_parent as $parent)
                                                                    @if($parent !== 0)
                                                                        <li class="c-content-categories__selected-category">
                                                                            {{ $categories->find($parent)->name }}
                                                                        </li>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        </div>

                                                        <div
                                                            class="c-content-accordion__step-controls c-content-accordion__step-controls--category">
                                                            <button
                                                                class="c-ui-btn c-ui-btn--next mr-a disabled js-continue-btn"
                                                                id="categoryStepNext">
                                                                انتخاب گروه کالا
                                                            </button>
                                                            <button type="button"
                                                                    class="c-content-categories__search-reset"
                                                                    id="categoryReset"></button>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="c-content-loader">
                                                    <div class="c-content-loader__logo"></div>
                                                    <div class="c-content-loader__spinner"></div>
                                                </div>
                                            </div>
                                            <div class="c-content-progress active">
                                                <span class="c-content-progress__step"></span>
                                            </div>
                                            <div id="confirmCategoryChangeModal" class="marketplace-redesign"
                                                 uk-modal>
                                                <div class="uk-modal-dialog uk-modal-dialog--confirm uk-modal-body">
                                                    <button class="uk-modal-close uk-modal-close--search"
                                                            type="button" uk-close></button>

                                                    <div class="modal-product modal-product--confirm">
                                                        <h2 class="modal-message--title">فروشنده گرامی،</h2>
                                                        <p class="modal-message--center">در صورت تغییر گروه کالایی؛
                                                            مقداری از اطلاعاتی که در مرحله‌های بعد وارد کرده‌اید،
                                                            حذف خواهند شد. از انجام این تغییر اطمینان دارید ؟</p>
                                                        <p class="modal-message--center hidden"
                                                           id="differentCategoryThemeMessageContainer">شما گروه
                                                            کالایی با تم متفاوت با گروه کالایی قبلی انتخاب کرده‌اید،
                                                            توجه داشته باشید تمام تنوع‌های این محصول غیرفعال خواهند
                                                            شد
                                                        </p>
                                                    </div>

                                                    <div class="modal-footer modal-footer--center">
                                                        <div class="uk-flex">
                                                            <button
                                                                class="modal-footer__btn modal-footer__btn--confirm modal-footer__btn--wide js-modal-uploads-confirm js-accept"
                                                                type="button">
                                                                بله،‌ مطمئن هستم
                                                            </button>
                                                            <button
                                                                class="modal-footer__btn modal-footer__btn--wide uk-modal-close js-decline"
                                                                type="button">انصراف
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="c-content-accordion__row js-content-section uk-open"
                                                 id="stepProductAccordion">
                                            <h2 class="c-content-accordion__title">
                                                <div class="c-content-accordion__title-text">گام دوم: درج اطلاعات
                                                    کالا
                                                    {{--                                                        <span class="c-content-accordion__guid-line js-guideline-icon "--}}
                                                    {{--                                                              data-guideline-modal="product_info"></span>--}}
                                                </div>
                                            </h2>
                                            <div class="c-content-accordion__content" id="stepProductContainer">
                                                <div class="c-card__body c-card__body--content">
                                                    <form id="stepProductForm">
                                                        <input type="hidden" id="selectedCategoryId" value=""/>
                                                        <input type="hidden" id="selectedCategoryTheme" value=""/>
                                                        <input type="hidden" name="product[category_id]"
                                                               id="selectedCategoryIdConfirmed"
                                                               value="9588"/>
                                                        <input type="hidden" id="selectedCategoryThemeConfirmed"
                                                               value="sized"/>
                                                        <input type="hidden" name="product[product_id]"
                                                               value="{{ $product->id }}"
                                                               id="productIdContainer"/>
                                                        <ul id="ajaxErrorProduct"
                                                            class="c-content-error c-content-error--list hidden">
                                                        </ul>
                                                        <ul id="moderationErrorProduct"
                                                            class="c-content-error c-content-error--list hidden">
                                                            <li class="c-content-error__item">
                                                            </li>
                                                        </ul>
                                                        <div class="c-grid__row c-grid__row--gap-lg js-auto-title-message ">
                                                            <div class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--sm-12">
                                                                <div class="c-content-product__auto-title-msg">
                                                                    گروه کالایی انتخاب شده، دارای ویژگی اتوماتیک
                                                                    نامگذاری است و به صورت هوشمند با توجه به
                                                                    ورودی‌های شما در گام‌های اول تا سوم، بهترین
                                                                    عنوان کالایی مطابق با قوانین صحیح را در گام
                                                                    چهارم به شما پیشنهاد می‌دهد. در صورتی که
                                                                    نام‌گذاری از نظر شما تایید شده است، لطفا از کلید
                                                                    "تایید عنوان و ادامه" استفاده کنید؛ در غیر
                                                                    اینصورت با استفاده از کلید "ویرایش عنوان"، عنوان
                                                                    صحیح مدنظر خود را وارد کنید. توجه داشته باشید در
                                                                    صورتی که عنوان ورودی از سمت شما خالی باشد، عنوان
                                                                    پیشنهادی برای عنوان اصلی کالای شما انتخاب خواهد
                                                                    شد.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="c-grid__row c-grid__row--gap-lg">
                                                            <div
                                                                class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--sm-12">
                                                                <div class="c-content-product__selected-category">
                                                                    <div
                                                                        class="c-content-product__msg c-content-product__msg--focus">
                                                                        گروه کالایی انتخابی شما
                                                                        <span id="categoryTitleSpan"
                                                                              class="em"></span>
                                                                        و تنوع مجاز برای این گروه کالایی
                                                                        <span id="categoryThemeTranslatedSpan"
                                                                              class="em">سایز</span>
                                                                        است.
                                                                    </div>
                                                                    <div id="noteDimensionLevelProduct"
                                                                         class="c-content-product__msg c-content-product__msg--focus"
                                                                         style="display: none">
                                                                        ابعاد بسته‌بندی گروه کالایی
                                                                        <span name="categoryTitleSpan" class="em">جوراب نوزاد</span>
                                                                        بر اساس
                                                                        <span class="em">محصول</span>
                                                                        است. شما بایستی برای
                                                                        <span class="em">محصول</span>
                                                                        خود در همین گام ابعاد بسته‌بندی وارد کنید.
                                                                    </div>
                                                                    <div id="noteDimensionLevelItem"
                                                                         class="c-content-product__msg c-content-product__msg--focus"
                                                                         style="display: none">
                                                                        ابعاد بسته‌بندی گروه کالایی
                                                                        <span name="categoryTitleSpan" class="em">جوراب نوزاد</span>
                                                                        بر اساس
                                                                        <span class="em">تنوع</span>
                                                                        است. شما بایستی برای هر
                                                                        <span class="em">تنوع</span>
                                                                        در صفحه ایجاد تنوع (مرحله بعدی)، ابعاد
                                                                        بسته‌بندی را وارد کنید.
                                                                    </div>
                                                                    <div class="c-content-product__msg"
                                                                         id="categoryThemeDescriptionSpan">
                                                                        <strong>تنوع سایز: </strong>تنوع سایز برای
                                                                        کالاهایی استفاده می‌شود که ظاهر مشابه دارند
                                                                        اما در سایزهای مختلف فروخته می‌شوند. از این
                                                                        تنوع برای درج کالاهایی مثل انواع لباس
                                                                        استفاده می‌شود. لباس‌ها ظاهری یکسان دارند
                                                                        اما بر اساس سایز طبقه‌بندی می‌شوند و قرار
                                                                        دادن آن‌ها در یک محصول می‌تواند فرآیند
                                                                        انتخاب را برای خریدار ساده‌تر کند.

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="c-grid__row c-grid__row--gap-lg">
                                                            <div
                                                                class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--sm-4 c-grid__col--xs-gap">
                                                                <label for="productIsFake"
                                                                       class="uk-form-label"
                                                                       id="productIsFakeContainerLabel">
                                                                    اصالت کالا:
                                                                </label>

                                                                <div
                                                                    class="field-wrapper field-wrapper--justify field-wrapper--background">
                                                                    <label
                                                                        class="c-ui-checkbox c-ui-checkbox--small c-ui-checkbox--auto"
                                                                        id="productIsFakeLabel">
                                                                        <input type="checkbox" class="c-ui-checkbox__origin"
                                                                               name="product[fake]" id="productIsFake" value="1"
                                                                               data-brand-other-id="0" {{ ($product->brand_id == 0 )? 'checked' : '' }}>
                                                                        <span class="c-ui-checkbox__check"></span>
                                                                        <span class="c-ui-checkbox__label">
                                                                    نشان کالای غیراصل
                                                                    (<span class="c-ui-checkbox__strong">غیر اصل</span>)
                                                                </span>
                                                                    </label>

                                                                    <div class="c-wiki c-wiki__holder">
    <span class="c-wiki-sign js-tooltip"
          data-tooltip="با انتخاب این گزینه، کلمه “غیراصل” در کنار عنوان کالا و نشان “غیراصل” در کنار تصویر کالای شما در سایت قرار خواهد گرفت. برند کالا باید “متفرقه” درج شود.   در صورت فروش کالای غیراصل بدون این نشان، مطابق با قوانین جریمه خواهید شد."></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--sm-4 c-grid__col--xs-gap">
                                                                <label for=""
                                                                       class="uk-form-label uk-flex uk-flex-between">
                                                                    برند یا نام سازنده کالا:
                                                                    <span class="uk-form-label__required"></span>
                                                                    <a href="{{ route('staff.brands.create') }}"
                                                                       target="_blank" class="search-link">ایجاد
                                                                        برند جدید</a>
                                                                </label>
                                                                <div
                                                                    class="field-wrapper ui-select ui-select__container">
                                                                    <select name="product[brand_id]"
                                                                            id="brandsSelect"
                                                                            class="uk-input uk-input--select js-select-origin"
                                                                            required>
                                                                        <option value="">برند کالا را انتخاب کنید</option>
                                                                        <option value="0" {{ ($product->brand_id == 0 )? 'selected' : '' }}>متفرقه (Miscellaneous)</option>
                                                                        @foreach($parent_category->brands as $brand)
                                                                            <option value="{{ $brand->id }}" {{ ($product->brand_id == $brand->id )? 'selected' : '' }}>{{ $brand->name }}
                                                                                ({{ $brand->en_name }})
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    <div class="js-select-options"></div>
                                                                </div>
                                                                <div>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--sm-4 c-grid__col--xs-gap">
                                                                <label for="" class="uk-form-label">
                                                                    ماهیت کالا:
                                                                    <span class="uk-form-label__required"></span>
                                                                </label>
                                                                <div class="field-wrapper">
                                                                    <label class="c-content-input">
                                                                        <input type="text"
                                                                               placeholder="مثلا: گوشی موبایل"
                                                                               value="{{ $product->nature }}"
                                                                               class="uk-input js-model-field title-creator"
                                                                               name="product[product_nature]">
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            {{--                                                            <div class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--sm-4">--}}
                                                            {{--                                                                <div class="field-wrapper" id="commissionContainer">--}}
                                                            {{--                                                                    <div class="uk-input uk-input--div">--}}
                                                            {{--                                                                        کمیسیون فروش این گروه کالایی--}}
                                                            {{--                                                                        <span id="commissionValueContainer" class="em">1%</span>--}}
                                                            {{--                                                                        است--}}
                                                            {{--                                                                    </div>--}}
                                                            {{--                                                                </div>--}}
                                                            {{--                                                            </div>--}}
                                                        </div>
                                                        <div class="c-grid__row c-grid__row--gap-lg">
                                                            <div class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--sm-4 ">
                                                                <label for="" class="uk-form-label uk-flex uk-flex-between">
                                                                    نوع کالا:
                                                                    <span class="uk-form-label__required"></span>
                                                                </label>

                                                                <div class="field-wrapper ui-select ui-select__container ui-select__container--product">
                                                                    <select name="product[types][]"
                                                                            id="categoryProductTypesSelect"
                                                                            class="uk-input uk-input--select js-select-origin js-in-product"
                                                                            {{ (count($product->category[0]->types) == 0)? 'disabled' : '' }}
                                                                            multiple="multiple">
                                                                        <option value="">نوع کالا را انتخاب کنید
                                                                        </option>
                                                                        @php
                                                                            if(isset($product->type) && !is_null($product->type)) {
                                                                              foreach ($product->type as $type)
                                                                              {
                                                                                  $this_product_types [] = $type->id;
                                                                              }
                                                                            }
                                                                        @endphp

                                                                        @if(isset($product->type) && !is_null($product->type))
                                                                            @foreach($product->category[0]->types as $type)
                                                                                <option
                                                                                    value="{{ $type->id }}" {{ (in_array($type->id, $this_product_types))? 'selected' : '' }}>{{ $type->name }}</option>
                                                                            @endforeach
                                                                        @endif

                                                                    </select>
                                                                    <span class="select-counter"></span>
                                                                    <div class="js-select-options"></div>
                                                                </div>

                                                                <div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--sm-4 c-grid__col--xs-gap  js-product-model">
                                                                <label for="" class="uk-form-label">مدل کالا:
                                                                    <span class="uk-form-label__required"></span>
                                                                </label>
                                                                <div class="field-wrapper">
                                                                    <input type="text"
                                                                           placeholder="مدل کالا را وارد کنید …"
                                                                           value="{{ $product->model }}"
                                                                           class="uk-input js-model-field"
                                                                           name="product[model]">
                                                                </div>
                                                                <div>
                                                                </div>
                                                            </div>

                                                            {{--                                                        <div--}}
                                                            {{--                                                            class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial  c-grid__col--sm-4 c-grid__col--xs-gap  js-divisions-select">--}}
                                                            {{--                                                            <label for=""--}}
                                                            {{--                                                                   class="uk-form-label uk-flex uk-flex-between">--}}
                                                            {{--                                                                دسته‌بندی کالا:--}}
                                                            {{--                                                                <span class="uk-form-label__required"></span>--}}
                                                            {{--                                                            </label>--}}
                                                            {{--                                                            <div--}}
                                                            {{--                                                                class="field-wrapper ui-select ui-select__container">--}}
                                                            {{--                                                                <select name="product[division_id]"--}}
                                                            {{--                                                                        id="divisionsSelect"--}}
                                                            {{--                                                                        class="uk-input uk-input--select js-select-origin"--}}
                                                            {{--                                                                        required--}}
                                                            {{--                                                                >--}}
                                                            {{--                                                                    <option value="" selected="selected">--}}
                                                            {{--                                                                        دسته‌بندی کالا را انتخاب کنید--}}
                                                            {{--                                                                    </option>--}}
                                                            {{--                                                                    <option value="3320">جوراب</option>--}}
                                                            {{--                                                                    <option value="3321">پاپوش</option>--}}

                                                            {{--                                                                </select>--}}
                                                            {{--                                                                <div class="js-select-options"></div>--}}
                                                            {{--                                                            </div>--}}
                                                            {{--                                                            <div>--}}
                                                            {{--                                                            </div>--}}
                                                            {{--                                                        </div>--}}

                                                            <div
                                                                class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial o-spacing-m-t-4 c-grid__col--sm-4 ">
                                                                <label for=""
                                                                       class="uk-form-label uk-flex uk-flex-between">
                                                                    مبدا کالا:
                                                                </label>
                                                                <div
                                                                    class="field-wrapper ui-select ui-select__container ui-select__container--product">
                                                                    <select name="product[is_iranian]"
                                                                            id="isIranian"
                                                                            class="uk-input uk-input--select js-select-origin js-in-product">
                                                                        <option value="" {{ ($product->is_iranian == '' )? 'selected' : '' }}>انتخاب کنید</option>
                                                                        <option value="1" {{ ($product->is_iranian == 1 )? 'selected' : '' }}>
                                                                            ایرانی
                                                                        </option>
                                                                        <option value="2" {{ ($product->is_iranian == 2 )? 'selected' : '' }}>
                                                                            خارجی
                                                                        </option>
                                                                    </select>
                                                                    <span class="select-counter"></span>
                                                                    <div class="js-select-options"></div>
                                                                </div>
                                                                <div>
                                                                </div>
                                                            </div>

                                                            {{--                                                        <div--}}
                                                            {{--                                                            class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial o-spacing-m-t-4 c-grid__col--sm-4 c-grid__col--xs-gap js-product-class-select">--}}
                                                            {{--                                                            <label for=""--}}
                                                            {{--                                                                   class="uk-form-label uk-flex uk-flex-between">--}}
                                                            {{--                                                                طبقه کالا:--}}
                                                            {{--                                                            </label>--}}
                                                            {{--                                                            <div--}}
                                                            {{--                                                                class="field-wrapper ui-select ui-select__container ui-select__container--product">--}}
                                                            {{--                                                                <select name="product[product_classes][]"--}}
                                                            {{--                                                                        id="productClassesSelect"--}}
                                                            {{--                                                                        multiple="multiple"--}}
                                                            {{--                                                                        class="uk-input uk-input--select js-select-origin js-in-product"--}}
                                                            {{--                                                                >--}}
                                                            {{--                                                                    <option value="1">مایعات Liquids</option>--}}

                                                            {{--                                                                </select>--}}
                                                            {{--                                                                <div class="js-select-options"></div>--}}
                                                            {{--                                                            </div>--}}
                                                            {{--                                                            <div>--}}
                                                            {{--                                                            </div>--}}
                                                            {{--                                                        </div>--}}

                                                        </div>
                                                        <div class="c-grid__row c-grid__row--gap-lg js-product-package-dimension">
                                                            <div
                                                                class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--lg-8 ">
                                                                <div
                                                                    class="c-grid__row c-grid__row--gap-lg c-grid__row--nowrap-sm">
                                                                    <div
                                                                        class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--lg-6">
                                                                        <label for="" class="uk-form-label">
                                                                            ابعاد بسته‌بندی (سانتیمتر):
                                                                            <span
                                                                                class="uk-form-label__required"></span>
                                                                        </label>
                                                                        <div
                                                                            class="c-grid__row c-grid__row--gap-small c-grid__row--nowrap-sm">
                                                                            <div
                                                                                class=" c-grid__col c-grid__col--gap-small c-grid__col--flex-initial">
                                                                                <div class="field-wrapper">
                                                                                    <label class="c-content-input">
                                                                                <span
                                                                                    class="c-content-input__text c-content-input__text--overlay">طول</span>
                                                                                        <input type="text"
                                                                                               placeholder=""
                                                                                               class="c-content-input__origin c-content-input__origin--overlay"
                                                                                               value="{{ $product->length }}"
                                                                                               name="product[package_length]">
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class=" c-grid__col c-grid__col--gap-small c-grid__col--flex-initial c-grid__col--xs-gap">
                                                                                <div class="field-wrapper">
                                                                                    <label class="c-content-input">
                                                                                <span
                                                                                    class="c-content-input__text c-content-input__text--overlay">عرض</span>
                                                                                        <input type="text"
                                                                                               placeholder=""
                                                                                               class="c-content-input__origin c-content-input__origin--overlay"
                                                                                               value="{{ $product->width }}"
                                                                                               name="product[package_width]">
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class=" c-grid__col c-grid__col--gap-small c-grid__col--flex-initial c-grid__col--xs-gap">
                                                                                <div class="field-wrapper">
                                                                                    <label class="c-content-input">
                                                                                <span
                                                                                    class="c-content-input__text c-content-input__text--overlay">ارتفاع</span>
                                                                                        <input type="text"
                                                                                               placeholder=""
                                                                                               class="c-content-input__origin c-content-input__origin--overlay"
                                                                                               value="{{ $product->height }}"
                                                                                               name="product[package_height]">
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--lg-6 c-grid__col--xs-gap">
                                                                        <label for="" class="uk-form-label">
                                                                            وزن بسته‌بندی (گرم):
                                                                            <span
                                                                                class="uk-form-label__required"></span>
                                                                        </label>
                                                                        <div class="field-wrapper">
                                                                            <label class="c-content-input">
                                                                        <span
                                                                            class="c-content-input__text c-content-input__text--overlay">وزن</span>
                                                                                <input type="text" placeholder=""
                                                                                       class="c-content-input__origin c-content-input__origin--overlay"
                                                                                       value="{{ $product->weight }}"
                                                                                       name="product[package_weight]">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="c-grid__row c-grid__row--gap-lg">
                                                            <div
                                                                class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial">
                                                                <label for="" class="uk-form-label">شرح
                                                                    کالا:</label>
                                                                <div
                                                                    class="field-wrapper field-wrapper--textarea enabled">
        <textarea name="product[description]"
                  placeholder="برای معرفی بهتر کالا به مشتریان، پیشنهاد می‌‌شود 150 کلمه درباره‌ کالای خود بنویسید."
                  class="c-content-input__origin c-content-input__origin--textarea js-textarea-words"
                  rows="5"
                  maxlength="2000"
        >{{ $product->description }}</textarea>
                                                                    <span class="textarea__wordcount">
            <span class="js-wordcount-target">0</span>/2000
        </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="c-grid__row c-grid__row--gap-lg">
                                                            <div
                                                                class="c-grid__col c-grid__col--gap-attr c-grid__col--flex-initial c-grid__col--sm-6">
                                                                <label for="" class="uk-form-label">
                                                                    نقاط قوت:
                                                                </label>
                                                                <div class="field-wrapper field-wrapper--textarea">
                                                                    <div class="c-ui-tag__textarea c-ui-tag__textarea--inline js-textarea-tags">
                                                                        <input type="text"
                                                                               class="js-textarea-tags-pros c-ui-tag__input c-ui-tag__input--inline">
                                                                        <button type="button" class="c-ui-tag__submit js-tag-submit-btn">+</button>
                                                                    </div>
                                                                    <div class="c-ui-tag__textarea js-textarea-tags-container"></div>
                                                                    <select name="product[advantages][]" multiple=""
                                                                            class="js-textarea-tags-select c-ui-tag__select" required="">
                                                                        @if(isset($product->advantages) && !is_null($product->advantages))
                                                                            @foreach(json_decode($product->advantages, true) as $advantage)
                                                                            <option value="{{ $advantage }}" selected="selected">{{ $advantage }}</option>
                                                                            @endforeach
                                                                        @endif
                                                                    </select>
                                                                </div>
                                                                <div>
                                                                </div>
                                                            </div>
                                                            <div class="c-grid__col c-grid__col--gap-attr c-grid__col--flex-initial c-grid__col--sm-6 c-grid__col--xs-gap">
                                                                <label for="" class="uk-form-label">
                                                                    نقات ضعف:
                                                                </label>
                                                                <div class="field-wrapper field-wrapper--textarea">
                                                                    <div class="c-ui-tag__textarea c-ui-tag__textarea--inline js-textarea-tags">
                                                                        <input type="text"
                                                                               class="js-textarea-tags-cons c-ui-tag__input c-ui-tag__input--inline">
                                                                        <button type="button" class="c-ui-tag__submit js-tag-submit-btn">+</button>
                                                                    </div>
                                                                    <div class="c-ui-tag__textarea js-textarea-tags-container"></div>
                                                                    <select name="product[disadvantages][]" multiple=""
                                                                            class="js-textarea-tags-select c-ui-tag__select" required="">
                                                                        @if(isset($product->disadvantages) && !is_null($product->disadvantages))
                                                                            @foreach(json_decode($product->disadvantages, true) as $disadvantage)
                                                                                <option value="{{ $disadvantage }}" selected="selected">{{ $disadvantage }}</option>
                                                                            @endforeach
                                                                        @endif
                                                                    </select>
                                                                </div>
                                                                <div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="c-grid__row c-grid__row--gap-lg js-step-product-title uk-hidden">
                                                            <input type="text" name="product[title_fa]" value="{{ $product->title_fa }}">
                                                            <input type="text" name="product[title_en]" value="{{ $product->title_en }}">

                                                            <input type="text" name="product[suggest_slug]" value="">
                                                            <input type="text" name="product[slug]" value="{{ $product->slug }}">

                                                            <input type="text" name="product[suggest_seo_title]" value="">
                                                            <input type="text" name="product[seo_title]" value="{{ $product->seo_title }}">

                                                            <input type="text" name="product[seo_keyword_meta]" value="{{ $product->seo_keyword_meta }}">
                                                            <input type="text" name="product[seo_description_meta]" value="{{ $product->seo_description_meta }}">
                                                            <input type="text" name="product[seo_custom_meta]" value="{{ $product->seo_custom_meta }}">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="c-content-accordion__step-controls">
                                                    <button class="c-ui-btn c-ui-btn--next mr-a hidden"
                                                            id="productStepNext">
                                                        ادامه دادن
                                                    </button>
                                                </div>
                                                <div class="c-content-loader c-content-loader--fixed">
                                                    <div class="c-content-loader__logo"></div>
                                                    <div class="c-content-loader__spinner"></div>
                                                </div>
                                            </div>
                                            <div class="c-content-progress active">
                                                <span class="c-content-progress__step"></span>
                                            </div>
                                            <div id="confirmFakeSelectionBrandChangeModal"
                                                 class="marketplace-redesign" uk-modal>
                                                <div class="uk-modal-dialog uk-modal-dialog--confirm uk-modal-body">
                                                    <button class="uk-modal-close uk-modal-close--search"
                                                            type="button" uk-close></button>

                                                    <div class="modal-product modal-product--confirm">
                                                        <h2 class="modal-message--title">اگر نمایش عدم اصالت کالا را
                                                            انتخاب کنید</h2>
                                                        <p class="modal-message--center">برند به "متفرقه" تغییر
                                                            خواهد کرد، اطمینان دارید؟</p>
                                                    </div>

                                                    <div class="modal-footer modal-footer--center">
                                                        <div class="uk-flex">
                                                            <button
                                                                class="modal-footer__btn modal-footer__btn--confirm modal-footer__btn--wide js-modal-uploads-confirm js-accept"
                                                                type="button">
                                                                بله،‌ مطمئن هستم
                                                            </button>
                                                            <button
                                                                class="modal-footer__btn modal-footer__btn--wide uk-modal-close js-decline"
                                                                type="button">انصراف
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="newBrandRequestModal"
                                                 class="marketplace-redesign uk-modal c-variant" uk-modal>
                                                <div
                                                    class="uk-modal-dialog uk-modal-dialog--confirm uk-modal-body c-content-modal"
                                                    id="newBrandRequestModalContent">
                                                    <button class="uk-modal-close uk-modal-close--search"
                                                            type="button" uk-close></button>
                                                    <form id="newBrandRequestForm">
                                                        <input type="hidden" name="brand[product_id]" value="">
                                                        <input type="hidden" name="brand[category_id]"
                                                               id="newBrandRequestCategoryIdContainer">
                                                        <div
                                                            class="c-content-modal__header c-content-modal__header--overflow">
                                                            <h3 class="c-content-modal__title"> درخواست ایجاد برند
                                                                جدید</h3>
                                                            <a href="{{ route('staff.brands.create') }}"
                                                               class="search-link">ایجاد برند جدید</a>

                                                        </div>
                                                        <div
                                                            class="c-content-modal__body c-content-modal__body--overflow">
                                                            <div class="c-content-modal__body-container">
                                                                <div class="c-content-modal__intro">فروشگاه اینترنتی
                                                                    دیجی‌کالا این امکان را برای فروشنده فراهم
                                                                    کرده
                                                                    تا کالایش را با برند (نام
                                                                    تجاری) خودش نمایش دهد و به فروش برساند. برای
                                                                    ایجاد و ثبت برندتان، فرم زیر را تکمیل کنید.
                                                                </div>
                                                                <div class="c-content-modal__notes">
                                                            <span
                                                                class="c-content-modal__notes-title">توجه:</span>
                                                                    <ul class="c-content-modal__notes-list">
                                                                        <li>نام برند مورد نظرتان را وارد کنید و
                                                                            درصورتی‌که برند را در این لیست پیدا
                                                                            نکردید، در صفحه‌ی درخواست برند، برند
                                                                            مورد نظرتان را جست‌و‌جو کرده و در صورت
                                                                            یافتن آن، روی دکمه‌ی افزودن برند به گروه
                                                                            کالایی کلیک کنید.
                                                                        </li>
                                                                        <li>چنانچه، برند مورد نظر در این لیست وجود
                                                                            نداشت، برای ساخت برند جدید، اطلاعات ذکر
                                                                            شده در این صفحه را ارسال کنید.
                                                                        </li>
                                                                        <li class="c-content-modal__notes-item">-
                                                                            برندهای ایرانی باید گواهی ثبت علامت
                                                                            تجاری
                                                                            داشته باشند و تصویر آن را باید همراه با
                                                                            درخواست در فرم ارسال فرمایید.
                                                                        </li>
                                                                        <li class="c-content-modal__notes-item">-
                                                                            برندهای ایرانی که دارای گواهی ثبت علامت
                                                                            تجاری
                                                                            نیستند، ثبت نمی‌شوند.
                                                                        </li>
                                                                        <li class="c-content-modal__notes-item">-
                                                                            برای ثبت برند، اظهار نامه‌ قابل قبول
                                                                            نیست و
                                                                            حتما باید گواهی ثبت برند را ارسال
                                                                            کنید.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div
                                                                    class="c-variant-error hidden c-variant-error__box c-variant-error__box--modal mt-20 mb-20"
                                                                    id="ajaxBrandErrorsList">
                                                                </div>
                                                                <div class="c-grid__row c-grid__row--gap-lg mt-30">
                                                                    <div
                                                                        class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--lg-6">
                                                                        <label for="" class="uk-form-label">
                                                                            نام فارسی برند:
                                                                            <span
                                                                                class="uk-form-label__required"></span>
                                                                        </label>
                                                                        <div class="field-wrapper c-autosuggest">
                                                                            <div
                                                                                class="search-form__autocomplete js-autosuggest-box">
                                                                                <input id="searchKeywordInput"
                                                                                       class="uk-input js-prevent-submit"
                                                                                       type="text"
                                                                                       name="brand[name_fa]"
                                                                                       placeholder="نام فارسی برند را وارد کنید …"/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--lg-6">
                                                                        <label for="" class="uk-form-label">
                                                                            نام انگلیسی برند:
                                                                            <span
                                                                                class="uk-form-label__required"></span>
                                                                        </label>
                                                                        <div class="field-wrapper c-autosuggest">
                                                                            <div
                                                                                class="search-form__autocomplete js-autosuggest-box">
                                                                                <input id="searchKeywordInput"
                                                                                       class="uk-input js-prevent-submit"
                                                                                       type="text"
                                                                                       name="brand[name_en]"
                                                                                       placeholder="عنوان انگلیسی برند …"/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="c-grid__row c-grid__row--gap-lg">
                                                                    <div
                                                                        class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial">
                                                                        <label class="uk-form-label">
                                                                            شرح برند:
                                                                            <span
                                                                                class="uk-form-label__required"></span>
                                                                        </label>
                                                                        <div id="brandDescription"
                                                                             class="field-wrapper">
                <textarea name="brand[description]" class="uk-textarea" cols="" rows="3"
                          placeholder="توضیحات برند بهتر است بین ۷۰ تا ۱۰۰ کلمه درباره‌ی تاریخچه و محصولات برند باشد …"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="c-grid__row c-grid__row--gap-lg">
                                                                    <div
                                                                        class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--lg-6 c-grid__col--row-attr">
                                                                        <label class="uk-form-label">
                                                                            نوع برند:
                                                                            <span
                                                                                class="uk-form-label__required"></span>
                                                                        </label>
                                                                        <div id="brandOrigin" class="field-wrapper">
                                                                            <label
                                                                                class="c-ui-radio c-ui-radio--content c-ui-checkbox--auto">
                                                                                <input type="radio"
                                                                                       class="c-ui-radio__origin js-brand-origin"
                                                                                       name="brand[origin]"
                                                                                       value="iranian"
                                                                                       id="iranianBrandContainer"
                                                                                       checked>
                                                                                <span
                                                                                    class="c-ui-radio__check c-ui-radio__check--content"></span>
                                                                                <span
                                                                                    class="c-ui-radio__label c-ui-radio__label--content">ایرانی</span>
                                                                            </label>
                                                                            <label
                                                                                class="c-ui-radio c-ui-radio--content c-ui-checkbox--auto">
                                                                                <input type="radio"
                                                                                       class="c-ui-radio__origin js-brand-origin"
                                                                                       name="brand[origin]"
                                                                                       id="foreignBrandContainer"
                                                                                       value="foreign">
                                                                                <span
                                                                                    class="c-ui-radio__check c-ui-radio__check--content"></span>
                                                                                <span
                                                                                    class="c-ui-radio__label c-ui-radio__label--content">خارجی</span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div id="foreignBrandContainer1"
                                                                         class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--lg-6 c-grid__col--row-attr hidden">
                                                                        <label class="uk-form-label">
                                                                            لینک سایت معتبر خارجی:
                                                                            <span
                                                                                class="uk-form-label__required"></span>
                                                                        </label>
                                                                        <div class="field-wrapper">
                                                                            <input name="brand[url]"
                                                                                   class="uk-input uk-input--ltr"
                                                                                   placeholder="http://">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="c-grid__row c-grid__row--gap-lg">
                                                                    <div id="iranianBrandContainer1"
                                                                         class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--lg-6 c-grid__col--row-attr">
                                                                        <label class="uk-form-label">
                                                                            برگه ثبت برند یا لینک سایت قوه قضاییه:
                                                                            <span
                                                                                class="uk-form-label__required"></span>
                                                                        </label>
                                                                        <div class="field-wrapper">
                                                                            <div id="newBrandSheetUpload"
                                                                                 for="brandRegistrationSheet"
                                                                                 class="c-content-modal__uploads-label empty">
                    <span uk-form-custom>
                        <input id="brandRegistrationSheet" type="file" class="hidden">
                    </span>
                                                                                <label for="brandRegistrationSheet"
                                                                                       class="c-content-modal__uploads-preview">
                                                                                    <img src=""
                                                                                         id="newBrandSheetUploadPreview"
                                                                                         class="c-content-modal__uploads-img"
                                                                                         alt="">
                                                                                    <span
                                                                                        class="c-content-upload__img-loader js-img-loader">
                            <span class="progress__wrapper">
                                <span class="progress"></span>
                            </span>
                        </span>
                                                                                </label>
                                                                                <span
                                                                                    class="c-content-modal__list c-content-modal__uploads-tooltips">
                        <span class="c-content-modal__uploads-text">ابعاد
                            برگه ثبت برند را با حداکثر حجم ۷۰۰ مگابایت و فرمت PNG یا JPEG  بارگذاری کنید.
                        </span>
                    </span>
                                                                            </div>
                                                                            <input type="hidden"
                                                                                   name="brand[registration_image_id]"
                                                                                   class="force-validation"
                                                                                   id="registrationImageTempId">
                                                                            <div
                                                                                class="c-content-modal__errors-full"
                                                                                id="newBrandRegistrationImageUploadErrors"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="iranianBrandLogo"
                                                                         class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--lg-6 c-grid__col--row-attr">
                                                                        <label class="uk-form-label">
                                                                            لوگوی برند:
                                                                            <span
                                                                                class="uk-form-label__required"></span>
                                                                        </label>
                                                                        <div class="field-wrapper">
                                                                            <div id="newBrandLogoUpload"
                                                                                 class="c-content-modal__uploads-label empty">
                    <span uk-form-custom>
                        <input id="brandLogoFile" type="file" class="hidden">
                    </span>
                                                                                <label for="brandLogoFile"
                                                                                       class="c-content-modal__uploads-preview">
                                                                                    <img src=""
                                                                                         id="newBrandLogoUploadPreview"
                                                                                         class="c-content-modal__uploads-img"
                                                                                         alt="">
                                                                                    <span
                                                                                        class="c-content-upload__img-loader js-img-loader">
                            <span class="progress__wrapper">
                                <span class="progress"></span>
                            </span>
                        </span>
                                                                                </label>
                                                                                <span
                                                                                    class="c-content-modal__list c-content-modal__uploads-tooltips">
                        <span class="c-content-modal__uploads-text">
                            لوگو برند را در ابعاد ۶۰۰×۶۰۰ پیکسل و با فرمت PNG یا JPEG و پس‌زمینه‌ی سفید بارگذاری کنید.
                        </span>
                    </span>
                                                                            </div>
                                                                            <input type="hidden"
                                                                                   name="brand[logo_id]"
                                                                                   class="force-validation"
                                                                                   id="logoImageTempId">
                                                                            <div
                                                                                class="c-content-modal__errors-full"
                                                                                id="newBrandLogoUploadErrors"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="iranianBrandContainer2"
                                                                         class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--lg-6">
                                                                        <label class="uk-form-label">
                                                                            یا لینک سایت قوه قضاییه را وارد کنید.
                                                                            لینک را به صورت کامل وارد کنید:
                                                                            <span
                                                                                class="uk-form-label__required"></span>
                                                                        </label>
                                                                        <div class="field-wrapper">
                                                                            <input name="brand[registration_url]"
                                                                                   type="text"
                                                                                   class="uk-input uk-input--ltr"
                                                                                   placeholder="http://"
                                                                                   id="registrationUrlValue">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="c-content-modal__footer c-content-modal__footer--overflow">
                                                            <button
                                                                class="modal-footer__btn modal-footer__btn--confirm modal-footer__btn--wide js-modal-uploads-confirm js-accept"
                                                                type="button" id="saveBrandRequestButton">
                                                                <span id="brandSuggestBtnLabel">افزودن برند به گروه کالایی</span>
                                                                <span id="brandRequestBtnLabel">ارسال درخواست</span>
                                                            </button>
                                                            <button
                                                                class="modal-footer__btn modal-footer__btn--wide"
                                                                type="button" id="resetBrandRequestBtn">انتخاب مجدد
                                                            </button>
                                                            <button
                                                                class="modal-footer__btn modal-footer__btn--wide uk-modal-close js-decline"
                                                                type="button" id="cancelBrandRequestButton">انصراف
                                                            </button>
                                                        </div>
                                                    </form>
                                                    <div class="c-content-loader">
                                                        <div class="c-content-loader__logo"></div>
                                                        <div class="c-content-loader__spinner"></div>
                                                    </div>
                                                </div>
                                            </div>


                                        </section>
                                        <section class="c-content-accordion__row js-content-section uk-open"
                                                 id="stepAttributesAccordion">
                                            <h2 class="c-content-accordion__title">
                                                <div class="c-content-accordion__title-text">گام سوم: درج ویژگی‌های
                                                    کالا
                                                    {{--                                                        <span class="c-content-accordion__guid-line js-guideline-icon" data-guideline-modal="attributes"></span>--}}
                                                </div>
                                            </h2>
                                            <div class="c-content-accordion__content" id="stepAttributesContainer" style="min-height: auto;">
                                                <div class="c-card__body  c-card__body--content"
                                                     id="stepAttributesContent">
                                                    <form id="stepAttributesForm">

                                                        @foreach($attr_groups as $atrr_group)
                                                            <div class="c-grid__row c-grid__row--gap-lg">
                                                                <div
                                                                    class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial">
                                                                    <h3 class="product-form__section-title product-form__section-title--dot">{{ $atrr_group->name }}</h3>
                                                                </div>
                                                            </div>

                                                            <div class="c-grid__row c-grid__row--gap-lg c-grid__row--negative-gap-attr">

                                                                @foreach($atrr_group->attributes->sortBy('position') as $attribute)

                                                                    @if($attribute->type == 1)
                                                                        <div class="c-grid__col c-grid__col--gap-lg c-grid__col--row-attr c-grid__col--flex-initial c-grid__col--sm-6">
                                                                            <label
                                                                                class="uk-form-label uk-flex uk-flex-between">
                                                                                {{ $attribute->name }}:

                                                                                @if($attribute->is_required)
                                                                                    <span class="uk-form-label__required"></span>
                                                                                @endif

                                                                            </label>
                                                                            <div class="field-wrapper">
                                                                                <input type="text" class="c-content-input__origin js-attribute-old-value
                                                                                    {{ ($attribute->is_required)? 'js-required-attribute' : '' }}"
                                                                                       name="attributes[{{$attribute->id}}]"
                                                                                       value="{{ (isset($product->attributes->find($attribute->id)->pivot->value))? $product->attributes->find($attribute->id)->pivot->value : ''  }}">
                                                                            </div>
                                                                            <div>
                                                                            </div>
                                                                        </div>
                                                                    @endif

                                                                    @if($attribute->type == 2)
                                                                        <div class="c-grid__col c-grid__col--gap-lg c-grid__col--row-attr c-grid__col--flex-initial c-grid__col--sm-12">
                                                                                <label class="uk-form-label uk-flex uk-flex-between">
                                                                                    {{ $attribute->name }}:

                                                                                    @if($attribute->is_required)
                                                                                        <span class="uk-form-label__required"></span>
                                                                                    @endif

                                                                                </label>
                                                                                <div class="field-wrapper">
                                                                                <textarea class="uk-textarea uk-textarea--attr {{ ($attribute->is_required)? 'js-required-attribute' : '' }}"
                                                                                    name="attributes[{{$attribute->id}}]">{{ (isset($product->attributes->find($attribute->id)->pivot->value))? $product->attributes->find($attribute->id)->pivot->value : ''  }}</textarea>
                                                                                </div>
                                                                                <div>
                                                                                </div>
                                                                            </div>
                                                                    @endif

                                                                    @if($attribute->type == 3 )
                                                                        <div class="c-grid__col c-grid__col--gap-lg c-grid__col--row-attr c-grid__col--flex-initial c-grid__col--sm-6">
                                                                            <label class="uk-form-label uk-flex uk-flex-between">
                                                                                {{ $attribute->name }}:
                                                                                @if($attribute->is_required)
                                                                                    <span class="uk-form-label__required"></span>
                                                                                @endif
                                                                            </label>

                                                                            <div class="field-wrapper ui-select ui-select__container">
                                                                                <select class="uk-input uk-input--select js-select-origin select2-hidden-accessible {{ ($attribute->is_required)? 'js-required-attribute' : '' }}"
                                                                                    name="attributes[{{$attribute->id}}]" data-placeholder="انتخاب کنید" tabindex="-1" aria-hidden="true">
                                                                                    <option value="">یکی از گزینه‌ها
                                                                                        را انتخاب کنید
                                                                                    </option>

                                                                                    <?php
                                                                                      if ($product->attributes->where('id', $attribute->id)->count()) {
                                                                                        $product_attr_val_id = $product->attributes->find($attribute->id)->pivot->value_id;
                                                                                      } else {
                                                                                        $product_attr_val_id = 0;
                                                                                      }
                                                                                    ?>

                                                                                    @foreach($attribute->values as $value)
                                                                                        <option value="{{ $value->id }}" {{ ($product_attr_val_id == $value->id)? 'selected' : ''  }} >{{ $value->value }}</option>
                                                                                    @endforeach

                                                                                </select>
                                                                                <div class="js-select-options"></div>
                                                                            </div>
                                                                            <div>
                                                                            </div>
                                                                        </div>
                                                                    @endif

                                                                    @if($attribute->type == 4 )
                                                                            <div class="c-grid__col c-grid__col--gap-lg c-grid__col--row-attr c-grid__col--flex-initial c-grid__col--sm-6">
                                                                            <label class="uk-form-label uk-flex uk-flex-between">
                                                                                {{ $attribute->name }}:

                                                                                @if($attribute->is_required)
                                                                                    <span class="uk-form-label__required"></span>
                                                                                @endif
                                                                            </label>

                                                                              <?php $array = []; ?>

                                                                            @foreach($product->attributes as $attr)
                                                                                @if(!is_null($attr->pivot->value_id))
                                                                                    @php $array[] = $attr->pivot->value_id;  @endphp
                                                                                @endif
                                                                            @endforeach


                                                                            <div class="field-wrapper ui-select ui-select__container ui-select__container--product">
                                                                                <select class="uk-input uk-input--select uk-input--checkboxlist js-select-origin js-in-product select2-hidden-accessible
                                                                                     {{ ($attribute->is_required)? 'js-required-attribute' : '' }}"
                                                                                        multiple="" name="attributes[{{$attribute->id}}][]" data-placeholder="انتخاب کنید"
                                                                                        tabindex="-1" aria-hidden="true"
                                                                                        aria-describedby="attributes[{{$attribute->id}}]-error"
                                                                                        aria-invalid="false">
                                                                                    @foreach($attribute->values as $value)
                                                                                        <option value="{{ $value->id }}" {{ in_array($value->id, $array) ? 'selected' :  '' }} >{{ $value->value }}</option>
                                                                                    @endforeach
                                                                                </select>

                                                                                <span class="select-counter"
                                                                                      style="display: none;">۰</span>
                                                                                <div
                                                                                    class="js-select-options"></div>
                                                                                <div id="attributes[33887][]-error"
                                                                                     class="error error-msg"
                                                                                     style="display: none;"></div>
                                                                            </div>
                                                                            <div>
                                                                            </div>
                                                                        </div>
                                                                    @endif

                                                                    @if($attribute->type == 5)
                                                                            @if($attribute->unit->type == 0)
                                                                                <div class="c-grid__col c-grid__col--gap-lg c-grid__col--row-attr c-grid__col--flex-initial c-grid__col--sm-6">
                                                                                    <label class="uk-form-label uk-flex uk-flex-between">
                                                                                        {{ $attribute->name }}:

                                                                                        @if($attribute->is_required)
                                                                                            <span class="uk-form-label__required"></span>
                                                                                        @endif

                                                                                        <span class="uk-float-left uk-padding-medium-left">{{ $attribute->unit->name }}</span>
                                                                                    </label>
                                                                                    <div class="field-wrapper">
                                                                                        <input type="text" class="c-content-input__origin js-attribute-old-value
                    {{ ($attribute->is_required)? 'js-required-attribute' : '' }}" name="attributes[{{$attribute->id}}]" value="{{ (isset($product->attributes->find($attribute->id)->pivot->value))? $product->attributes->find($attribute->id)->pivot->value : ''  }}">
                                                                                    </div>
                                                                                </div>
                                                                            @else

                                                                                @foreach(\Modules\Staff\Attribute\Models\AttributeProduct::where('attribute_id', $attribute->id)->get() as $item)
                                                                                    @php
                                                                                        $unit_val_array[$item->unit_value_id] = $item->value;
                                                                                    @endphp
                                                                                @endforeach

                                                                                <div class="c-grid__col c-grid__col--gap-attr c-grid__col--flex-initial c-grid__col--lg-6">
                                                                                    <div class="c-grid__row c-grid__row--gap-lg c-grid__row--nowrap-sm">
                                                                                        <div class="c-grid__col c-grid__col--gap-attr c-grid__col--flex-initial c-grid__col--lg-12">
                                                                                            <label for="" class="uk-form-label">
                                                                                                {{ $attribute->name }}:
                                                                                                @if($attribute->is_required)
                                                                                                    <span class="uk-form-label__required"></span>
                                                                                                @endif
                                                                                            </label>
                                                                                            <div class="c-grid__row c-grid__row--gap-small c-grid__row--nowrap-sm">
                                                                                                @foreach($attribute->unit->values as $value)
                                                                                                    <div class=" c-grid__col c-grid__col--gap-small c-grid__col--flex-initial c-grid__col--xs-gap">
                                                                                                        <div class="field-wrapper">
                                                                                                            <label class="c-content-input">
                                                                                                                <span class="c-content-input__text c-content-input__text--overlay">{{ $value->value }}</span>
                                                                                                                <input type="text" placeholder="" class="c-content-input__origin c-content-input__origin--overlay {{ ($attribute->is_required)? 'js-required-attribute' : '' }}" name="attributes[{{$attribute->id}}][{{$value->id}}]"
                                                                                                                       value="{{ (!is_null($unit_val_array[$value->id]))? $unit_val_array[$value->id] : ''  }}">
                                                                                                            </label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                @endforeach
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                                    @endif

                                                                @endforeach

                                                            </div>
                                                        @endforeach
                                                        @if(!$attr_groups->count())
                                                            <div
                                                                class="c-grid__row c-grid__row--gap-lg js-auto-title-message">
                                                                <div
                                                                    class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--sm-12">
                                                                    <div class="c-content-product__auto-title-msg">
                                                                        برای این گروه کالایی شما هیچ ویژگی ایجاد
                                                                        نکرده‌اید پیشنهاد می‌شود حتما ابتدا برای
                                                                        دسته‌بندی‌ها ویژگی ایجاد کنید سپس اقدام به
                                                                        ایجاد محصول کنید و یا پس از ذخیره این صفحه و
                                                                        ایجاد ویژگی برای آن نسبت به ویرایش محصول
                                                                        اقدام کنید.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        <div
                                                            class="c-content-accordion__step-controls c-content-accordion__step-controls--spacer">
                                                            <button
                                                                class="c-ui-btn c-ui-btn--next mr-a goToTitleStep"
                                                                id="attributesStepNext">
                                                                ادامه دادن
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="c-content-loader c-content-loader--fixed">
                                                    <div class="c-content-loader__logo"></div>
                                                    <div class="c-content-loader__spinner"></div>
                                                </div>
                                            </div>
                                            <div class="c-content-progress active">
                                                <span class="c-content-progress__step"></span>
                                            </div>
                                        </section>
                                        <section class="c-content-accordion__row js-content-section uk-open"
                                                 id="stepTitleAccordion">
                                            <h2 class="c-content-accordion__title">
                                                <div class="c-content-accordion__title-text js-step-title-header">
                                                    گام چهارم: عنوان پیشنهادی و سئو
                                                    {{--                                                        <span class="c-content-accordion__guid-line js-guideline-icon" data-guideline-modal="auto_title"></span>--}}
                                                </div>
                                            </h2>
                                            <div
                                                class="c-content-accordion__content c-content-accordion__content--small"
                                                id="stepTitleContainer">
                                                <div class="c-card__body  c-card__body--content"
                                                     id="stepTitleContent">
                                                    <form id="titleForm">
                                                        <div class="c-grid__row c-grid__row--gap-lg" style="margin-bottom: 25px;">
                                                            <div class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial">
                                                                <h3 class="product-form__section-title product-form__section-title--dot">عنوان کالا</h3>
                                                            </div>
                                                        </div>
                                                        <ul id="ajaxErrorTitle"
                                                            class="c-content-error c-content-error--list hidden">
                                                        </ul>
                                                        <ul id="moderationErrorTitle"
                                                            class="c-content-error c-content-error--list hidden">
                                                            <li class="c-content-error__item">
                                                            </li>
                                                        </ul>
                                                        <div class="c-grid__row c-grid__row--gap-lg">
                                                            <div
                                                                class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--lg-6">
                                                                <label for="" class="uk-form-label">
                                                                    نام فارسی پیشنهادی کالا:
                                                                </label>
                                                                <div class="field-wrapper">
                                                                    <input value="" class="c-content-input__origin c-ui-input--deactive js-suggested-title-fa js-edit-mode-suggested-title-fa persian-title" disabled/>
                                                                </div>
                                                            </div>

                                                            <div class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--lg-6 c-grid__col--xs-gap">
                                                                <label for="" class="uk-form-label">نام انگلیسی
                                                                    پیشنهادی کالا:</label>
                                                                <div class="field-wrapper">
                                                                    <input value="" class="c-content-input__origin c-ui-input--deactive js-suggested-title-en js-edit-mode-suggested-title-en" disabled/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="c-grid__row c-grid__row--gap-lg  js-edite-title-suggested" data-edit-mode="true" data-status="approved">
                                                            <div class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--lg-6">
                                                                <label for="" class="uk-form-label">
                                                                    نام فارسی کالا:
                                                                </label>
                                                                <div class="field-wrapper">
                                                                    <input type="text" placeholder="شیوه نامگذاری صحیح کالا : ماهیت کالا + برند + کلمه مدل+مدل کالا" class="c-content-input__origin js-suggested-title-fa js-edit-mode-title-fa"
                                                                           value="{{ $product->title_fa }}" name="title[title_fa]" required>
                                                                </div>
                                                                <div>
                                                                </div>
                                                            </div>


                                                            <div class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--lg-6 c-grid__col--xs-gap">
                                                                <label for="" class="uk-form-label">
                                                                    نام انگلیسی کالا:
                                                                </label>
                                                                <div class="field-wrapper">
                                                                    <input type="text" placeholder="Syntax for naming product : Brand+Model+Division" class="c-content-input__origin js-suggested-title-en js-edit-mode-title-en" value="{{ $product->title_en }}" name="title[title_en]">
                                                                </div>
                                                                <div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- seo section  -->
                                                        <div class="c-grid__row c-grid__row--gap-lg" style="margin-bottom: 25px;">
                                                            <div class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial">
                                                                <h3 class="product-form__section-title product-form__section-title--dot">نامک</h3>
                                                            </div>
                                                        </div>

                                                        <div class="c-grid__col c-grid__col--gap-lg">
                                                            <label class="uk-form-label uk-flex uk-flex-between">نامک پیشنهادی:</label>
                                                            <div class="field-wrapper" style="margin-bottom: 15px;">
                                                                <input type="text" name="suggest_slug" class="c-content-input__origin c-ui-input--deactive url-inputs suggest_slug" dir="ltr" disabled>
                                                                <input type="button" id="button-urls" style="width: auto;" class="c-ui-tag__submit button-urls" value="/{{ $fa_store_name }}/product/{{ $product_code_prefix }}-code">
                                                            </div>
                                                        </div>

                                                        <div class="c-grid__col c-grid__col--gap-lg">
                                                            <label class="uk-form-label uk-flex uk-flex-between">نامک:</label>
                                                            <div class="field-wrapper" style="margin-bottom: 15px;">
                                                                <input type="text" name="slug" class="c-content-input__origin url-inputs" dir="ltr" value="{{ $product->slug }}">
                                                                <input type="button" id="button-urls" style="width: auto;" class="c-ui-tag__submit button-urls" value="/{{ $fa_store_name }}/product/{{ $product_code_prefix }}-code">
                                                            </div>
                                                        </div>

                                                        <div class="c-grid__row c-grid__row--gap-lg" style="margin-bottom: 25px;">
                                                            <div class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial">
                                                                <h3 class="product-form__section-title product-form__section-title--dot">عنوان سئو:</h3>
                                                            </div>
                                                        </div>

                                                        <div class="c-grid__col c-grid__col--gap-lg c-grid__col--row-attr c-grid__col--flex-initial c-grid__col--sm-12">
                                                            <label class="uk-form-label uk-flex uk-flex-between">
                                                                عنوان سئو پیشنهادی:
                                                            </label>
                                                            <div class="field-wrapper">
                                                                <input name="suggest_seo_title" type="text" class="c-content-input__origin c-ui-input--deactive suggest_seo_title" value="" disabled>
                                                            </div>
                                                            <div>
                                                            </div>
                                                        </div>

                                                        <div class="c-grid__col c-grid__col--gap-lg c-grid__col--row-attr c-grid__col--flex-initial c-grid__col--sm-12">
                                                            <label class="uk-form-label uk-flex uk-flex-between">
                                                                عنوان سئو:
                                                            </label>
                                                            <div class="field-wrapper">
                                                                <input type="text" name="seo_title" class="c-content-input__origin js-suggested-title-fa js-edit-mode-title-fa" value="{{ ($product->seo()->exists())? $product->seo->title : '' }}">
                                                            </div>
                                                            <div>
                                                            </div>
                                                        </div>

                                                        <div class="c-grid__row c-grid__row--gap-lg" style="margin-bottom: 25px;">
                                                            <div class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial">
                                                                <h3 class="product-form__section-title product-form__section-title--dot">سایر</h3>
                                                            </div>
                                                        </div>

                                                        <div class="c-grid__col c-grid__col--gap-lg c-grid__col--row-attr c-grid__col--flex-initial c-grid__col--sm-12">
                                                            <label class="uk-form-label uk-flex uk-flex-between">
                                                                کلمات کلیدی
                                                            </label>
                                                            <div class="field-wrapper">
                                                                <input name='seo_keyword_meta' value="{{ ($product->seo()->exists())? $product->seo->keyword : '' }}">
                                                            </div>
                                                            <div>
                                                            </div>
                                                        </div>

                                                        <div class="c-grid__col c-grid__col--gap-lg c-grid__col--row-attr c-grid__col--flex-initial c-grid__col--sm-12">
                                                            <label class="uk-form-label uk-flex uk-flex-between">
                                                                متا توضیحات (meta description):
                                                            </label>

                                                            <div class="field-wrapper">
                                                                <textarea class="uk-textarea uk-textarea--attr" name="seo_description_meta">{{ ($product->seo()->exists())? $product->seo->description : '' }}</textarea>
                                                            </div>
                                                        </div>

                                                        <div class="c-grid__col c-grid__col--gap-lg c-grid__col--row-attr c-grid__col--flex-initial c-grid__col--sm-12">
                                                            <label class="uk-form-label uk-flex uk-flex-between">
                                                                متا تگ‌های سفارشی (Code):
                                                            </label>

                                                            <div class="field-wrapper">
                                                                <textarea class="uk-textarea uk-textarea--attr" name="seo_custom_meta" placeholder='<meta name="robots" content="index, follow">'>{{ ($product->seo()->exists())? $product->seo->custom_code : '' }}</textarea>
                                                            </div>
                                                        </div>
                                                        <!-- end seo section  -->

                                                    </form>
                                                    <div class="c-content-accordion__step-controls c-content-accordion__step-controls--spacer">
                                                        <button class="c-ui-btn c-ui-btn--gray uk-hidden disabled"
                                                                id="cancelEditSubjectSuggested">
                                                            انصراف
                                                        </button>
                                                        <button
                                                            class="c-ui-btn c-ui-btn--outline-blue hidden disabled"
                                                            id="editSubjectSuggested">
                                                            ویرایش عنوان
                                                        </button>
                                                        <button class="c-ui-btn c-ui-btn--next hidden disabled"
                                                                id="setSubjectStepNext">
                                                            تأیید عنوان و ادامه
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="c-content-loader c-content-loader--fixed">
                                                    <div class="c-content-loader__logo"></div>
                                                    <div class="c-content-loader__spinner"></div>
                                                </div>
                                            </div>
                                            <div class="c-content-progress active">
                                                <span class="c-content-progress__step"></span>
                                            </div>
                                        </section>
                                        <section class="c-content-accordion__row js-content-section uk-open"
                                                 id="stepImagesAccordion">
                                            <h2 class="c-content-accordion__title ">
                                                <div class="c-content-accordion__title-text">
                                                    <span class="js-step-images-header">
                                                    گام پنجم: بارگذاری تصاویر
                                                    </span>
                                                    {{--                                                        <span class="c-content-accordion__guid-line js-guideline-icon" data-guideline-modal="media"></span>--}}
                                                </div>
                                            </h2>
                                            <div
                                                class="c-content-accordion__content c-content-accordion__content--last"
                                                id="stepImagesContainer">
                                                <div class="c-card__body c-card__body--content marketplace-redesign"
                                                     id="stepImagesContent">
                                                    <form id="stepImagesForm">
                                                        {{--                                                            <div class="c-content-upload__checkbox-container">--}}
                                                        {{--                                                                <div class="field-wrapper">--}}
                                                        {{--                                                                    <label class="c-ui-radio c-ui-radio--content">--}}
                                                        {{--                                                                        <input type="radio"--}}
                                                        {{--                                                                               class="c-ui-radio__origin js-images-owner"--}}
                                                        {{--                                                                               name="images[who_will_upload]" value="1"--}}
                                                        {{--                                                                               id="sellerWillUpload" checked>--}}
                                                        {{--                                                                        <span--}}
                                                        {{--                                                                            class="c-ui-radio__check c-ui-radio__check--content"></span>--}}
                                                        {{--                                                                        <span--}}
                                                        {{--                                                                            class="c-ui-radio__label c-ui-radio__label--content">بارگذاری تصویر توسط شما</span>--}}
                                                        {{--                                                                    </label>--}}
                                                        {{--                                                                    <label class="c-ui-radio c-ui-radio--content">--}}
                                                        {{--                                                                        <input type="radio"--}}
                                                        {{--                                                                               class="c-ui-radio__origin js-images-owner"--}}
                                                        {{--                                                                               name="images[who_will_upload]" value="0">--}}
                                                        {{--                                                                        <span--}}
                                                        {{--                                                                            class="c-ui-radio__check c-ui-radio__check--content"></span>--}}
                                                        {{--                                                                        <span--}}
                                                        {{--                                                                            class="c-ui-radio__label c-ui-radio__label--content">درخواست عکاسی از محصولات توسط دیجی‌کالا</span>--}}
                                                        {{--                                                                    </label>--}}
                                                        {{--                                                                </div>--}}
                                                        {{--                                                            </div>--}}
                                                        <div class="hidden" id="imagesDKServiceContainer">
                                                            <div class="c-content-upload__digikala">
                                                                در صورتی که تمایل دارید عکاسی از محصول شما توسط
                                                                دیجی‌کالا انجام شود، با کلیک بر روی دکمه
                                                                به صفحه ارسال <span class="em">«درخواست عکاسی توسط دیجی‌کالا»</span>درخواست
                                                                هدایت می‌شوید. پس
                                                                از تکمیل و ارسال فرم درخواست کارشناسان مربوطه در
                                                                اسرع وقت با شما تماس خواهند گرفت. توجه
                                                                داشته باشید که در اینصورت، پروسه ثبت کالای شما تا
                                                                آماده شدن و بارگذاری تصاویر، نهایی
                                                                نخواهد شد.
                                                            </div>
                                                            <a href="https://selleracademy.digikala.com/درخواست-عکاسی-از-کال/"
                                                               target="_blank"
                                                               class="c-ui-btn c-ui-btn--success mb-30">درخواست
                                                                عکاسی توسط دیجی‌کالا</a>
                                                        </div>
                                                        <div id="imagesSelfServiceContainer"
                                                             class="c-grid__row c-grid__row--gap-lg">
                                                            <div class="c-grid__col">
                                                                <fieldset class="c-content-upload">
                                                                    <legend class="c-content-upload__title">تصویر
                                                                        اصلی و گالری تصاویر
                                                                    </legend>
                                                                    <div>
                                                                        <label class="c-content-upload__trigger"
                                                                               id="uploadGalleryContainer">
                                                                            <div uk-form-custom>
                                                                                <input type="file" multiple
                                                                                       class="hidden">
                                                                            </div>
                                                                            <span class="c-content-upload__ui-btn">بارگذاری تصاویر</span>
                                                                            <ul class="c-content-upload__list c-content-upload__list--tooltips">
                                                                                <li class="c-content-upload__list-item c-content-upload__list-item--tooltips">
                                                                                    ابعاد
                                                                                    تصویر بایستی در بازه ۶۰۰x۶۰۰ تا
                                                                                    ۲۵۰۰x۲۵۰۰ و حجم آن بهتر است کمتر از
                                                                                    ۶ مگابایت باشد.
                                                                                </li>
                                                                                <li class="c-content-upload__list-item c-content-upload__list-item--tooltips">
                                                                                    کالا
                                                                                    بهتر است
                                                                                    ۸۵٪ کل تصویر را در برگیرد و پس
                                                                                    زمینه تصویر اصلی بهتر است کاملاً
                                                                                    سفید باشد.
                                                                                </li>
                                                                                <li class="c-content-upload__list-item c-content-upload__list-item--tooltips">
                                                                                    تصویر
                                                                                    باید
                                                                                    فقط کالایی که قصد فروش آن را
                                                                                    دارید نمایش دهد و بدون هیچ لوگو،
                                                                                    نوشته و یا
                                                                                    واترمارکی
                                                                                    باشد..
                                                                                </li>
                                                                                <li class="c-content-upload__list-item c-content-upload__list-item--tooltips">
                                                                                    تصویر شما باید مربعی باشد یا
                                                                                    ابعاد یک در یک داشته باشد
                                                                                </li>
                                                                                <li class="c-content-upload__list-item c-content-upload__list-item--tooltips">
                                                                                    فرمت تصاویر بایستی JPG باشد
                                                                                </li>
                                                                                <li class="c-content-upload__list-item c-content-upload__list-item--tooltips">
                                                                                    امکان آپلود چندین تصویر به صورت
                                                                                    همزمان وجود دارد
                                                                                </li>
                                                                                <li class="c-content-upload__list-item c-content-upload__list-item--tooltips">
                                                                                    امکان تغییر ترتیب نمایش تصاویر
                                                                                    با کشیدن و رها کردن وجود دارد
                                                                                </li>
                                                                            </ul>
                                                                        </label>
                                                                        <div id="imagesLoadingSection"
                                                                             class="c-content-upload__uploads loading js-uploading-section hidden">
                                                                            <h3 class="product-form__section-title product-form__section-title--gap">
                                                                                تصاویر درحال بارگذاری
                                                                            </h3>
                                                                            <ul id="imagesUploadList"
                                                                                class="c-content-upload__gallery-list"></ul>
                                                                        </div>
                                                                        <div
                                                                            class="c-content-upload__error-container hidden"
                                                                            id="ajaxErrorImages">
                                                                            <div class="c-content-upload__error">
                                                                                <div class="hidden"
                                                                                     id="imageErrorsContainer">
                                                                                </div>
                                                                                <div
                                                                                    class="hidden c-content-upload__error-msg"
                                                                                    id="mainImageErrorContainer">
                                                                                    می‌توانید با استفاده از
                                                                                    کلید<i></i> تصویر مورد نظرتان را
                                                                                    به عنوان تصویر اصلی کالا انتخاب
                                                                                    کنید.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div id="imagesSection"
                                                                             class="c-content-upload__uploads js-uploaded-section">
                                                                            <h3 class="product-form__section-title product-form__section-title--gap">
                                                                                تصاویر بارگذاری شده
                                                                            </h3>
                                                                            <input type="hidden" name="images[order]" id="imagesOrderContainer"/>
                                                                            <ul id="imagesContainer"
                                                                                class="c-content-upload__gallery-list js-uploaded-list js-sortable-list">
                                                                                @foreach($product->media as $image)
                                                                                    <li class="c-content-upload__gallery-row js-uploads-row {{ ($image->pivot->is_main == 1)? 'primary' : '' }}" id="{{ $image->id }}">
                                                                                        <input type="hidden" class="js-image-id-input" name="images[images][]" value="{{ $image->id }}">
                                                                                        @if($image->pivot->is_main == 1)
                                                                                            <input type="hidden" name="images[main_image]" id="mainImageContainer"  value="{{$image->id}}"/>
                                                                                        @endif
                                                                                        <div class="c-content-upload__img-container">
                                                                                            <img src="{{ $site_url . '/' .$image->path . '/' . $image->name }}" alt="" class="c-content-upload__img">
                                                                                        </div>
                                                                                        <div class="c-content-upload__mid-container">
                                                                                            <div class="c-content-upload__mid-container--top">
                                                                                                <div class="c-content-upload__desc">
                                                                                                    <div class="c-content-upload__desc--top">
                                                                                                        <div class="right">
                                                                                                            <div class="c-content-upload__name"></div>
                                                                                                            <div class="c-content-upload__size"></div>
                                                                                                        </div>
                                                                                                        <div class="c-content-upload__select"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <ul class="c-content-upload__list c-content-upload__list--errors js-upload-error-list"></ul>
                                                                                        <div class="c-content-upload__controls">
                                                                                            <button type="button" class="c-content-upload__btn c-content-upload__btn--flag show js-flag-primary {{ ($image->pivot->is_main == 1)? 'checked' : '' }}"></button>
                                                                                            <button type="button" class="c-content-upload__btn c-content-upload__btn--remove show js-remove-upload"></button>
                                                                                            <button type="button" class="c-content-upload__btn c-content-upload__btn--undo js-undo-remove"></button>
                                                                                            <div class="c-content-upload__drag-handler c-content-upload__drag-handler--outer">
                                                                                                <span class="c-content-upload__drag-handler c-content-upload__drag-handler--up js-sort-up"></span>
                                                                                                <span class="c-content-upload__drag-handler c-content-upload__drag-handler--bg"></span>
                                                                                                <span class="c-content-upload__drag-handler c-content-upload__drag-handler--down js-sort-down"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                @endforeach
                                                                            </ul>
                                                                            <div type="button"
                                                                                 class="c-content-upload__show-more hidden">
                                                                                بیشتر
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="c-content-progress active">
                                                <span class="c-content-progress__step"></span>
                                            </div>
                                            <ul id="uploadingTemplate" class="hidden">
                                                <li class="c-content-upload__gallery-row js-uploads-row">
                                                    <input type="hidden" class="js-image-id-input"/>
                                                    <div class="c-content-upload__img-container">
                                                        <img src="" alt=""
                                                             class="c-content-upload__img js-upload-thumb">
                                                        <div class="c-content-upload__img-loader">
                                                            <div class="progress__wrapper">
                                                                <span class="progress"></span>
                                                            </div>
                                                        </div>
                                                        <div class="c-content-upload__img-error"></div>
                                                    </div>
                                                    <div class="c-content-upload__mid-container">
                                                        <div
                                                            class="c-content-upload__mid-container c-content-upload__mid-container--top">
                                                            <div class="c-content-upload__desc">
                                                                <div class="c-content-upload__desc--top">
                                                                    <div class="right">
                                                                        <div
                                                                            class="c-content-upload__name js-upload-name"></div>
                                                                        <div
                                                                            class="c-content-upload__size js-upload-size"></div>
                                                                    </div>
                                                                    <div class="c-content-upload__select">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <ul class="c-content-upload__list c-content-upload__list--errors js-upload-error-list"></ul>
                                                        </div>
                                                    </div>
                                                    <div class="c-content-upload__controls">
                                                        <button type="button"
                                                                class="c-content-upload__btn c-content-upload__btn--refresh js-refresh-upload"></button>
                                                        <button type="button"
                                                                class="c-content-upload__btn c-content-upload__btn--flag js-flag-primary js-tooltip"
                                                                data-tooltip="از این پرچم برای انتخاب تصویر اصلی استفاده کنید"></button>
                                                        <button type="button"
                                                                class="c-content-upload__btn c-content-upload__btn--cancel js-cancel-upload"></button>
                                                        <button type="button"
                                                                class="c-content-upload__btn c-content-upload__btn--remove js-remove-upload"></button>
                                                        <button type="button"
                                                                class="c-content-upload__btn c-content-upload__btn--undo js-undo-remove"></button>
                                                        <div
                                                            class="c-content-upload__drag-handler c-content-upload__drag-handler--outer">
                                                    <span
                                                        class="c-content-upload__drag-handler c-content-upload__drag-handler--up js-sort-up"></span>
                                                            <span
                                                                class="c-content-upload__drag-handler c-content-upload__drag-handler--bg"></span>
                                                            <span
                                                                class="c-content-upload__drag-handler c-content-upload__drag-handler--down js-sort-down"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </section>
                                    </div>
                                    <form>
                                        <div class="c-card__footer c-card__footer--products">
                                            <div class="c-grid__row">
                                                <div class="c-grid__col c-grid__col--flex-initial">
                                                    <div class="c-content-error c-content-error--list hidden"
                                                         id="saveAjaxErrors">
                                                    </div>
                                                    <div class="uk-flex uk-flex-left" style="width: 97%;">
                                                        <button class="c-ui-btn c-ui-btn--next mr-a " id="saveButton">
                                                            ذخیره کالا
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="afterProductSaveModal" class="marketplace-redesign" uk-modal>
            <div class="uk-modal-dialog uk-modal-dialog--confirm uk-modal-body">
                <div class="modal-product modal-product--confirm">
                    <div>
                <span class="c-ui-table__tag c-ui-table__tag--content">DKP-<span id="afterSaveProductId"
                                                                                 class="js-copy-to-clipboard"></span></span>
                    </div>
                    <p class="modal-message--center">کالای شما با موفقیت ایجاد شد.</p>
                    <p class="modal-message--center">می‌توانید هر یک از مراحل زیر را برای ادامه انتخاب نمایید.</p>
                </div>
                <div class="modal-footer modal-footer--center">
                    <div class="uk-flex">
                        <a href="/content/create/product/"
                           class="modal-footer__btn modal-footer__btn--confirm modal-footer__btn--wide"
                           type="button">
                            ثبت کالای جدید
                        </a>
                        <a href="/product/" class="modal-footer__btn modal-footer__btn--wide" type="button">
                            مدیریت محصولات
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="category_selection" class="uk-modal" uk-modal>
            <div class="uk-modal-dialog uk-modal-dialog--confirm uk-modal-body c-content-accordion__modal"
                 id="guidelineModalContent">
                <div>
                    <div class="c-content-accordion__modal-header uk-flex uk-flex-middle uk-flex-between">
                        <p class="c-content-accordion__modal-title c-content-accordion__modal-title--light">
                            راهنما</p>
                        <button class="uk-modal-close" type="button" uk-close></button>
                    </div>

                    <div class="c-content-accordion__modal-body">
                        <p class="c-content-accordion__modal-title c-content-accordion__modal-title--dark">گام اول:
                            انتخاب گروه کالا</p>
                        <div class="o-spacing-m-t-5 c-content-accordion__modal-content-container">
                            <p class="c-content-accordion__modal-text js-modal-item " data-item="short_description">
                                1- کالای مشابه با کالایی که قصد فروش آن را دارید را در سایت دیجیکالا جست و جو کنید.
                                2- پس از یافتن محصولات، روی عبارت "جدید ترین" کلیک کنید.
                                3- یکی از کالاها را انتخاب کنید.
                                4- مطابق با گروه آن کالا، گروه کالایی خود را در هنگام درج انتخاب کنید.</p>
                            <div class="o-spacing-m-t-6 c-content-accordion__modal-video js-modal-item uk-hidden"
                                 data-item="video">
                                <figure>
                                    <video width="100%" height="100%" controls class=""
                                           poster="">
                                        <source src="">
                                    </video>
                                </figure>
                            </div>
                            <div class="o-spacing-m-t-5 c-content-accordion__modal-guidelines js-modal-item "
                                 data-item="items">
                                <div
                                    class="o-spacing-p-t-4 o-spacing-p-b-4 c-content-accordion__modal-guidelines-separator c-content-accordion__modal-guidelines-separator-bottom">
                                    <div class="uk-flex uk-flex-between js-expand-item">
                                        <p class="c-content-accordion__modal-guidelines-item">کالاهای ممنوعه</p>
                                        <span class="c-content-accordion__modal-guidelines-expand-icon"></span>
                                    </div>
                                    <div class="c-content-accordion__modal-text uk-hidden js-guideline-desc"><p>برای
                                            هر کسب&zwnj;و&zwnj;کار، شغل و حرفه&zwnj;ای قوانین خاصی وجود دارد و
                                            فروشگاه اینترنتی دیجی&zwnj;کالا هم از این قانون مستثنا نیست.</p>

                                        <p>کالاهای ممنوعه کالاهایی هستند که فروش آن ها در سایت دیجیکالا مجاز نیست.
                                            این کالاها پس از بررسی، وضعیتشان به &quot;حذف شده&quot; تغییر میکند و
                                            فروشنده دیگر امکان ویرایش آن را نخواهد داشت.</p>

                                        <p>برای سرعت بخشیدن به فرآیند درج لطفا قبل از درج کالا با مراجعه به <a
                                                href="https://selleracademy.digikala.com/%d8%a7%d9%82%d9%84%d8%a7%d9%85-%d9%85%d9%85%d9%86%d9%88%d8%b9%d9%87/">این
                                                مقاله</a> از ممنوعه نبودن کالای خود اطمینان حاصل کنید.</p></div>
                                </div>
                                <div
                                    class="o-spacing-p-t-4 o-spacing-p-b-4 c-content-accordion__modal-guidelines-separator c-content-accordion__modal-guidelines-separator-bottom">
                                    <div class="uk-flex uk-flex-between js-expand-item">
                                        <p class="c-content-accordion__modal-guidelines-item">گروه هایی که نیاز به
                                            قیمت مصوب دارند</p>
                                        <span class="c-content-accordion__modal-guidelines-expand-icon"></span>
                                    </div>
                                    <div class="c-content-accordion__modal-text uk-hidden js-guideline-desc"><p>
                                            مطابق با دستورالعملهای وزارت صنعت، معدن و تجارت و سازمان حمایت مصرف
                                            کنندگان و تولید کنندگان، کالاهای گروه های زیر فقط با قیمت مرجع (قیمت
                                            مندرج روی کالا یا مصوب) امکان فروش در سایت را خواهند داشت و قیمت‌گذاری
                                            بالاتر از قیمت مصرف کننده کالا در سایت تخلف محسوب می‌شود:</p>

                                        <p>روغن موتور/روغن گیربکس</p>

                                        <p>تلویزیون</p>

                                        <p>کنسول بازی</p>

                                        <p>ضد عفونی کننده دست</p>

                                        <p>ماسک تنفسی</p>

                                        <p>تب سنج و دماسنج کودک و نوزاد</p>

                                        <p>تب سنج و دماسنج بزرگسال</p>

                                        <p>لاستیک خودرو</p>

                                        <p>مودم و روتر ۳Gو ۴G</p>

                                        <p>روتر و اکسس پوینت</p>

                                        <p>مودم -روتر ADSL</p>

                                        <p>این قانون ممکن است فقط منحصر به گروه های ذکر شده نباشد و در صورت اعلام
                                            مراجع قضایی گروه کالایی اعلام شده به لیست اضافه خواهد شد.</p>

                                        <p>در صورتی که کالای شما یکی از موارد در لیست بالا است، پس از درج کالا وضعیت
                                            کالای شما به &quot; حذف شده&quot; تغییر میکند، پس از آن DKP خود را در <a
                                                href="https://selleracademy.digikala.com/%d9%81%d8%b1%d9%85-%d8%af%d8%b1%d8%ae%d9%88%d8%a7%d8%b3%d8%aa-%d8%ab%d8%a8%d8%aa-%d9%82%db%8c%d9%85%d8%aa-%d9%85%d8%b1%d8%ac%d8%b9/">این
                                                فرم</a> اعلام کنید تا بر روی کالا قیمت مصوب تعیین شود. پس از تعیین
                                            شدن قیمت مصوب، کالا وارد فرآیند بررسی محتوایی خواهد شد.</p></div>
                                </div>
                            </div>

                            <div
                                class="o-spacing-m-t-6 c-content-accordion__modal-guidelines-separator uk-hidden js-modal-item"
                                data-item="gallery">

                                <div class="swiper-container js-swiper-container" dir="rtl">
                                    <div class="swiper-wrapper o-spacing-m-t-5 uk-flex uk-flex-bottom">
                                    </div>
                                    <div class="uk-flex uk-flex-between o-spacing-m-t-5">
                                        <div class="swiper-button-prev">
                                            تصویر قبل
                                        </div>
                                        <div class="swiper-pagination uk-flex uk-flex-middle uk-flex-center"></div>
                                        <div class="swiper-button-next">
                                            تصویر بعد
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-right js-video-btn uk-hidden">
                                <div class="o-btn o-btn--outlined-primary-lg-text o-spacing-m-t-6 js-show-video">
                                    مشاهده ویدیوی آموزشی
                                </div>
                                <div
                                    class="o-btn o-btn--outlined-primary-lg-text o-spacing-m-t-6 js-hide-video c-content-accordion__modal-guidelines-back uk-hidden">
                                    بازگشت به صفحه قبل
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="attributes" class="uk-modal" uk-modal>
            <div class="uk-modal-dialog uk-modal-dialog--confirm uk-modal-body c-content-accordion__modal"
                 id="guidelineModalContent">
                <div>
                    <div class="c-content-accordion__modal-header uk-flex uk-flex-middle uk-flex-between">
                        <p class="c-content-accordion__modal-title c-content-accordion__modal-title--light">
                            راهنما</p>
                        <button class="uk-modal-close" type="button" uk-close></button>
                    </div>

                    <div class="c-content-accordion__modal-body">
                        <p class="c-content-accordion__modal-title c-content-accordion__modal-title--dark">گام سوم:
                            درج ویژگی‌های کالا</p>
                        <div class="o-spacing-m-t-5 c-content-accordion__modal-content-container">
                            <p class="c-content-accordion__modal-text js-modal-item uk-hidden"
                               data-item="short_description">در این مرحله، باید گروه کالایی که محصول شما در آن قرار
                                می‌گیرد را انتخاب نمایید.</p>
                            <div class="o-spacing-m-t-6 c-content-accordion__modal-video js-modal-item uk-hidden"
                                 data-item="video">
                                <figure>
                                    <video width="100%" height="100%" controls class=""
                                           poster="">
                                        <source src="">
                                    </video>
                                </figure>
                            </div>
                            <div
                                class="o-spacing-m-t-5 c-content-accordion__modal-guidelines js-modal-item uk-hidden"
                                data-item="items">
                                <div
                                    class="o-spacing-p-t-4 o-spacing-p-b-4 c-content-accordion__modal-guidelines-separator c-content-accordion__modal-guidelines-separator-bottom">
                                    <div class="uk-flex uk-flex-between js-expand-item">
                                        <p class="c-content-accordion__modal-guidelines-item"></p>
                                        <span class="c-content-accordion__modal-guidelines-expand-icon"></span>
                                    </div>
                                    <div
                                        class="c-content-accordion__modal-text o-spacing-m-t-3 uk-hidden js-guideline-desc"></div>
                                </div>
                            </div>

                            <div
                                class="o-spacing-m-t-6 c-content-accordion__modal-guidelines-separator uk-hidden js-modal-item"
                                data-item="gallery">

                                <div class="swiper-container js-swiper-container" dir="rtl">
                                    <div class="swiper-wrapper o-spacing-m-t-5 uk-flex uk-flex-bottom">
                                        <div class="swiper-slide">
                                            <p class="c-content-accordion__modal-gellery-title js-gellery-title"></p>
                                            <p class="o-spacing-m-t-2 c-content-accordion__modal-gellery-des js-gellery-des"></p>
                                            <img src="" alt=""
                                                 class="o-spacing-m-t-6 c-content-accordion__modal-gellery-img">
                                        </div>
                                    </div>
                                    <div class="uk-flex uk-flex-between o-spacing-m-t-5">
                                        <div class="swiper-button-prev">
                                            تصویر قبل
                                        </div>
                                        <div class="swiper-pagination uk-flex uk-flex-middle uk-flex-center"></div>
                                        <div class="swiper-button-next">
                                            تصویر بعد
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-right js-video-btn uk-hidden">
                                <div class="o-btn o-btn--outlined-primary-lg-text o-spacing-m-t-6 js-show-video">
                                    مشاهده ویدیوی آموزشی
                                </div>
                                <div
                                    class="o-btn o-btn--outlined-primary-lg-text o-spacing-m-t-6 js-hide-video c-content-accordion__modal-guidelines-back uk-hidden">
                                    بازگشت به صفحه قبل
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="media" class="uk-modal" uk-modal>
            <div class="uk-modal-dialog uk-modal-dialog--confirm uk-modal-body c-content-accordion__modal"
                 id="guidelineModalContent">
                <div>
                    <div class="c-content-accordion__modal-header uk-flex uk-flex-middle uk-flex-between">
                        <p class="c-content-accordion__modal-title c-content-accordion__modal-title--light">
                            راهنما</p>
                        <button class="uk-modal-close" type="button" uk-close></button>
                    </div>

                    <div class="c-content-accordion__modal-body">
                        <p class="c-content-accordion__modal-title c-content-accordion__modal-title--dark">
                            گام
                            <span class="js-modal-section">
        پنجم                    </span>
                            : بارگذاری تصاویر
                        </p>
                        <div class="o-spacing-m-t-5 c-content-accordion__modal-content-container">
                            <p class="c-content-accordion__modal-text js-modal-item uk-hidden"
                               data-item="short_description">در این مرحله، باید گروه کالایی که محصول شما در آن قرار
                                می‌گیرد را انتخاب نمایید.</p>
                            <div class="o-spacing-m-t-6 c-content-accordion__modal-video js-modal-item uk-hidden"
                                 data-item="video">
                                <figure>
                                    <video width="100%" height="100%" controls class=""
                                           poster="">
                                        <source src="">
                                    </video>
                                </figure>
                            </div>
                            <div
                                class="o-spacing-m-t-5 c-content-accordion__modal-guidelines js-modal-item uk-hidden"
                                data-item="items">
                                <div
                                    class="o-spacing-p-t-4 o-spacing-p-b-4 c-content-accordion__modal-guidelines-separator c-content-accordion__modal-guidelines-separator-bottom">
                                    <div class="uk-flex uk-flex-between js-expand-item">
                                        <p class="c-content-accordion__modal-guidelines-item"></p>
                                        <span class="c-content-accordion__modal-guidelines-expand-icon"></span>
                                    </div>
                                    <div
                                        class="c-content-accordion__modal-text o-spacing-m-t-3 uk-hidden js-guideline-desc"></div>
                                </div>
                            </div>

                            <div
                                class="o-spacing-m-t-6 c-content-accordion__modal-guidelines-separator uk-hidden js-modal-item"
                                data-item="gallery">

                                <div class="swiper-container js-swiper-container" dir="rtl">
                                    <div class="swiper-wrapper o-spacing-m-t-5 uk-flex uk-flex-bottom">
                                        <div class="swiper-slide">
                                            <p class="c-content-accordion__modal-gellery-title js-gellery-title"></p>
                                            <p class="o-spacing-m-t-2 c-content-accordion__modal-gellery-des js-gellery-des"></p>
                                            <img src="" alt=""
                                                 class="o-spacing-m-t-6 c-content-accordion__modal-gellery-img">
                                        </div>
                                    </div>
                                    <div class="uk-flex uk-flex-between o-spacing-m-t-5">
                                        <div class="swiper-button-prev">
                                            تصویر قبل
                                        </div>
                                        <div class="swiper-pagination uk-flex uk-flex-middle uk-flex-center"></div>
                                        <div class="swiper-button-next">
                                            تصویر بعد
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-right js-video-btn uk-hidden">
                                <div class="o-btn o-btn--outlined-primary-lg-text o-spacing-m-t-6 js-show-video">
                                    مشاهده ویدیوی آموزشی
                                </div>
                                <div
                                    class="o-btn o-btn--outlined-primary-lg-text o-spacing-m-t-6 js-hide-video c-content-accordion__modal-guidelines-back uk-hidden">
                                    بازگشت به صفحه قبل
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="product_info" class="uk-modal" uk-modal>
            <div class="uk-modal-dialog uk-modal-dialog--confirm uk-modal-body c-content-accordion__modal"
                 id="guidelineModalContent">
                <div>
                    <div class="c-content-accordion__modal-header uk-flex uk-flex-middle uk-flex-between">
                        <p class="c-content-accordion__modal-title c-content-accordion__modal-title--light">
                            راهنما</p>
                        <button class="uk-modal-close" type="button" uk-close></button>
                    </div>

                    <div class="c-content-accordion__modal-body">
                        <p class="c-content-accordion__modal-title c-content-accordion__modal-title--dark">گام دوم:
                            درج اطلاعات کالا</p>
                        <div class="o-spacing-m-t-5 c-content-accordion__modal-content-container">
                            <p class="c-content-accordion__modal-text js-modal-item uk-hidden"
                               data-item="short_description">در این مرحله، باید گروه کالایی که محصول شما در آن قرار
                                می‌گیرد را انتخاب نمایید.</p>
                            <div class="o-spacing-m-t-6 c-content-accordion__modal-video js-modal-item uk-hidden"
                                 data-item="video">
                                <figure>
                                    <video width="100%" height="100%" controls class=""
                                           poster="">
                                        <source src="">
                                    </video>
                                </figure>
                            </div>
                            <div
                                class="o-spacing-m-t-5 c-content-accordion__modal-guidelines js-modal-item uk-hidden"
                                data-item="items">
                                <div
                                    class="o-spacing-p-t-4 o-spacing-p-b-4 c-content-accordion__modal-guidelines-separator c-content-accordion__modal-guidelines-separator-bottom">
                                    <div class="uk-flex uk-flex-between js-expand-item">
                                        <p class="c-content-accordion__modal-guidelines-item"></p>
                                        <span class="c-content-accordion__modal-guidelines-expand-icon"></span>
                                    </div>
                                    <div
                                        class="c-content-accordion__modal-text o-spacing-m-t-3 uk-hidden js-guideline-desc"></div>
                                </div>
                            </div>

                            <div
                                class="o-spacing-m-t-6 c-content-accordion__modal-guidelines-separator uk-hidden js-modal-item"
                                data-item="gallery">

                                <div class="swiper-container js-swiper-container" dir="rtl">
                                    <div class="swiper-wrapper o-spacing-m-t-5 uk-flex uk-flex-bottom">
                                        <div class="swiper-slide">
                                            <p class="c-content-accordion__modal-gellery-title js-gellery-title"></p>
                                            <p class="o-spacing-m-t-2 c-content-accordion__modal-gellery-des js-gellery-des"></p>
                                            <img src="" alt=""
                                                 class="o-spacing-m-t-6 c-content-accordion__modal-gellery-img">
                                        </div>
                                    </div>
                                    <div class="uk-flex uk-flex-between o-spacing-m-t-5">
                                        <div class="swiper-button-prev">
                                            تصویر قبل
                                        </div>
                                        <div class="swiper-pagination uk-flex uk-flex-middle uk-flex-center"></div>
                                        <div class="swiper-button-next">
                                            تصویر بعد
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-right js-video-btn uk-hidden">
                                <div class="o-btn o-btn--outlined-primary-lg-text o-spacing-m-t-6 js-show-video">
                                    مشاهده ویدیوی آموزشی
                                </div>
                                <div
                                    class="o-btn o-btn--outlined-primary-lg-text o-spacing-m-t-6 js-hide-video c-content-accordion__modal-guidelines-back uk-hidden">
                                    بازگشت به صفحه قبل
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="auto_title" class="uk-modal" uk-modal>
            <div class="uk-modal-dialog uk-modal-dialog--confirm uk-modal-body c-content-accordion__modal"
                 id="guidelineModalContent">
                <div>
                    <div class="c-content-accordion__modal-header uk-flex uk-flex-middle uk-flex-between">
                        <p class="c-content-accordion__modal-title c-content-accordion__modal-title--light">
                            راهنما</p>
                        <button class="uk-modal-close" type="button" uk-close></button>
                    </div>

                    <div class="c-content-accordion__modal-body">
                        <p class="c-content-accordion__modal-title c-content-accordion__modal-title--dark">گام
                            چهارم: عنوان پیشنهادی کالا</p>
                        <div class="o-spacing-m-t-5 c-content-accordion__modal-content-container">
                            <p class="c-content-accordion__modal-text js-modal-item uk-hidden"
                               data-item="short_description">در این مرحله، باید گروه کالایی که محصول شما در آن قرار
                                می‌گیرد را انتخاب نمایید.</p>
                            <div class="o-spacing-m-t-6 c-content-accordion__modal-video js-modal-item uk-hidden"
                                 data-item="video">
                                <figure>
                                    <video width="100%" height="100%" controls class=""
                                           poster="">
                                        <source src="">
                                    </video>
                                </figure>
                            </div>
                            <div class="o-spacing-m-t-5 c-content-accordion__modal-guidelines js-modal-item uk-hidden" data-item="items">
                                <div class="o-spacing-p-t-4 o-spacing-p-b-4 c-content-accordion__modal-guidelines-separator c-content-accordion__modal-guidelines-separator-bottom">
                                    <div class="uk-flex uk-flex-between js-expand-item">
                                        <p class="c-content-accordion__modal-guidelines-item"></p>
                                        <span class="c-content-accordion__modal-guidelines-expand-icon"></span>
                                    </div>
                                    <div class="c-content-accordion__modal-text o-spacing-m-t-3 uk-hidden js-guideline-desc"></div>
                                </div>
                            </div>

                            <div class="o-spacing-m-t-6 c-content-accordion__modal-guidelines-separator uk-hidden js-modal-item" data-item="gallery">

                                <div class="swiper-container js-swiper-container" dir="rtl">
                                    <div class="swiper-wrapper o-spacing-m-t-5 uk-flex uk-flex-bottom">
                                        <div class="swiper-slide">
                                            <p class="c-content-accordion__modal-gellery-title js-gellery-title"></p>
                                            <p class="o-spacing-m-t-2 c-content-accordion__modal-gellery-des js-gellery-des"></p>
                                            <img src="" alt=""
                                                 class="o-spacing-m-t-6 c-content-accordion__modal-gellery-img">
                                        </div>
                                    </div>
                                    <div class="uk-flex uk-flex-between o-spacing-m-t-5">
                                        <div class="swiper-button-prev">
                                            تصویر قبل
                                        </div>
                                        <div class="swiper-pagination uk-flex uk-flex-middle uk-flex-center"></div>
                                        <div class="swiper-button-next">
                                            تصویر بعد
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-right js-video-btn uk-hidden">
                                <div class="o-btn o-btn--outlined-primary-lg-text o-spacing-m-t-6 js-show-video">
                                    مشاهده ویدیوی آموزشی
                                </div>
                                <div
                                    class="o-btn o-btn--outlined-primary-lg-text o-spacing-m-t-6 js-hide-video c-content-accordion__modal-guidelines-back uk-hidden">
                                    بازگشت به صفحه قبل
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="pageLoader" class="c-content-loader c-content-loader--fixed">
            <div class="c-content-loader__logo"></div>
            <div class="c-content-loader__spinner"></div>
        </div>
    </div>
</main>


<input name="product_title_prefix" value="{{ $product_title_prefix }}" hidden>

@endsection

@section('script')
<script>

// تغییر پدینگ فیلد نامک
$(function () {
    var buttonWidth = $('#button-urls').width() + 20;
    $(".url-inputs").css({
        'padding-left': buttonWidth
    });

});

$("input[name=seo_keyword_meta]").each(function () {
    var input = document.querySelector('input[name=drag-sort]'),
        tagify = new Tagify(this);

    var dragsort = new DragSort(tagify.DOM.scope, {
        selector: '.' + tagify.settings.classNames.tag,
        callbacks: {
            dragEnd: onDragEnd
        }
    })

    function onDragEnd(elm) {
        tagify.updateValueByDOMTags()
    }
});

$(document).on('change', "input[name='title[title_fa]']", function (){
    var field_val = $("input[name='title[title_fa]']").val();
    $("input[name='product[title_fa]']").val(field_val);
});

$(document).on('change', "input[name='title[title_en]']", function (){
    var field_val = $("input[name='title[title_en]']").val();
    $("input[name='product[title_en]']").val(field_val);
});

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
    }
});

$(document).ready(function () {
    var model = $("input[name='product[model]']").val();
    var full_brand = $("#brandsSelect option:selected").text();
    var brand = full_brand.substring(0, full_brand.indexOf(" ("));
    var nature = $("input[name='product[product_nature]']").val();
    brand = brand.replace(/\s\s+/g, '');

    if ($("#brandsSelect option:selected").val() == 0) {
        var product_title = nature + ' مدل ' + model;
    } else {
        var product_title = nature + ' ' + brand + ' مدل ' + model;
    }

    $(".persian-title").val(product_title);

    var suggest_slug = $(".persian-title").val();
    suggest_slug = suggest_slug.replace(/ /g,"-");
    $(".suggest_slug").val(suggest_slug);

    var suggest_seo_title = $("input[name='product_title_prefix']").val() + ' ' + $(".persian-title").val();
    $(".suggest_seo_title").val(suggest_seo_title);
});

$(document).ready(function () {
    // suggest_slug
    var suggest_slug = $("input[name='suggest_slug']").val();
    $("input[name='product[suggest_slug]']").val(suggest_slug);

    // slug
    var slug = $("input[name='slug']").val();
    $("input[name='product[slug]']").val(slug);

    // suggest_seo_title
    var suggest_seo_title = $("input[name='suggest_seo_title']").val();
    $("input[name='product[suggest_seo_title]']").val(suggest_seo_title);

    // seo_title
    var seo_title = $("input[name='seo_title']").val();
    $("input[name='product[seo_title]").val(seo_title);

    // seo_keyword_meta
    var seo_keyword_meta = $("input[name='seo_keyword_meta']").val();
    $("input[name='product[seo_keyword_meta]").val(seo_keyword_meta);

    // seo_description_meta
    var seo_description_meta = $("input[name='seo_description_meta']").val();
    $("input[name='product[seo_description_meta]").val(seo_description_meta);

    // seo_custom_meta
    var seo_custom_meta = $("input[name='seo_custom_meta']").val();
    $("input[name='product[seo_custom_meta]").val(seo_custom_meta);

});

$(document).on('change', ".title-creator", function () {
    var model = $("input[name='product[model]']").val();
    var full_brand = $("#brandsSelect option:selected").text();
    var brand = full_brand.substring(0, full_brand.indexOf(" ("));
    var nature = $("input[name='product[product_nature]']").val();

    if ($("#brandsSelect option:selected").val() == 0) {
        var product_title = nature + ' مدل ' + model;
    } else {
        var product_title = nature + '' + brand + ' مدل ' + model;
    }
    $(".persian-title").val(product_title);

});
</script>
@endsection
