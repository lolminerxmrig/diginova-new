@php
  $banner2 = \Modules\Staff\Slider\Models\Slider::find(2)
@endphp

@extends('layouts.front.master')

@section('head')
  <title> {{ $cat->name }} | {{ $fa_store_name }}</title>
  {{--  <link rel="canonical" href="{{ route('front.cart') }}"/>--}}
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <script>
    var module_hash_id_storage = 1;
    var module_no_replace_update_command_status = 1;
    var module_adding_new_days_to_incredible_and_plus = 1;
    var module_new_rrp_change_rule_for_incredible_offers = 1;
    var module_tapsell_pdp = 1;
    var module_new_psat_validator = 1;
    var module_console_greeting = 1;
    var module_daily_sellable_stock = 1;
    var module_online_shipment_cancellation = 1;
    var module_fc_supplier_invoice = 1;
    var module_internal_trade_qc = 1;
    var module_internal_trade_seller_qc = 1;
    var module_internal_trade_submit_trade = 1;
    var module_internal_trade_generate_serial = 1;
    var module_digistyle = 1;
    var module_fbs_failed_delivery_flow = 1;
    var module_digistyle_special_capacity = 1;
    var module_address_remove_national_id = 1;
    var module_marketplace_new_invoice_design = 1;
    var module_marketplace_dynamic_time_scopes = 1;
    var module_marketplace_add_work_day_digikala = 1;
    var module_marketplace_fake_penalty_email_new_design = 1;
    var module_marketplace_profile_user_location = 1;
    var module_marketplace_delivery_cost_modal = 1;
    var module_marketplace_select_all_variant_method = 1;
    var module_marketplace_auto_select_variants_method = 1;
    var module_marketplace_show_product_class_select = 1;
    var module_marketplace_warehouse_postal_code = 1;
    var module_marketplace_show_warehouse_address_map = 1;
    var module_marketplace_add_work_day = 1;
    var module_new_remove_items = 1;
    var module_add_full_deliver_to_customer_button = 1;
    var module_marketplace_SBS_canceled_shipments_details = 1;
    var module_digiclub_seedling_hope_game = 1;
    var module_marketplace_SBS_checked_post_issue = 1;
    var module_dk_cart_new_recommendation_carousels = 1;
    var module_dk_plp_ad_banners = 1;
    var module_dk_ab_add_to_wish_list = 1;
    var module_dk_ask_to_login_tooltip = 1;
    var module_marketplace_SBS_flex_sellers_phone_number = 1;
    var module_marketplace_canceled_request_by_seller = 1;
    var module_marketpalce_SBS_orders_page_filters = 1;
    var module_marketplace_SBS_express_wrong_time_scope_tooltip = 1;
    var module_ds_return_order = 1;
    var module_dk_download_app_banner_redesign = 1;
    var module_dk_remove_confirmation_modal = 1;
    var module_breaking_payment = 1;
    var module_orders_full_log = 1;
    var module_cancel_generate_refund_transaction_for_wrong_order = 1;
    var module_available_ts_for_non_plus_users = 1;
    var module_dk_pdp_seller_rate_redesign = 1;
    var module_dk_ab_did_you_mean = 1;
    var module_dk_new_customer_free_shipping_badge = 1;
    var module_marketplace_promotion_new_features = 1;
    var module_redesign_dk_typographies = 1;
    var module_app_break_payment = 1;
    var module_admin_panel_notification_log = 1;
    var module_only_fresh_filter = 1;
    var module_disable_some_sms = 1;
    var module_dk_cpc_new_placement_in_pdp = 1;
    var module_plus_subscription_nps = 1;
    var module_digiclub_history_improvement = 1;
    var module_nps_post = 1;
    var module_dk_banner_view_impression_event = 1;
    var module_ds_seller_satisfaction_graph_desktop = 1;
    var module_voucher_revamp = 1;
    var module_referral_voucher_refactor = 1;
    var module_main_category_dynamic_carousels = 1;
    var module_plus_partnership_fidibo = 1;
    var module_plus_partnership = 1;
    var module_dk_end_of_referral_time = 1;
    var module_dk_home_buy_again_recomendation = 1;
    var module_new_luckydraw_season_demo = 1;
    var module_online_return_drop_off = 1;
    var module_marketplace_sbs_excel_export = 1;
    var module_sbs_psat_sms = 1;
    var module_proof_of_delivery = 1;
    var module_ab_related_searched_words = 1;
    var module_brand_new_incredible_offers_page = 1;
    var module_fresh_offers_redesign = 1;
    var module_dk_amazing_offer_touch_point = 1;
    var module_refactor_nps_survey = 1;
    var module_shopping_setting = 1;
    var module_dk_insider_functions = 1;
    var module_dkms_premium_brand_application_mode = 1;
    var module_fbd_schedule_order = 1;
    var module_ds_shipment_pod_code = 1;
    var module_ds_post_barcode = 1;
    var module_online_return = 1;
    var module_change_comments_like_button = 1;
    var module_dc_referral_box = 1;
    var module_third_party_referral_voucher = 1;
    var module_return_outbound = 1;
    var module_ship_by_seller_verification_code_try_rate_limit = 1;
    var module_international_po = 1;
    var module_dk_set_pdp_ga = 1;
    var module_fmcg = 1;
    var module_plp_redesign = 1;
    var module_FMCG_emarsys = 1;
    var module_fake_products = 1;
    var module_digikala_fashion = 1;
    var module_digikala_news = 1;
    var module_sponsored_mega_menu = 1;
    var module_ds_redesign_profile_addresses = 1;
    var module_video_modal = 1;
    var module_main_category_amazing_data_layer = 1;
    var module_fresh_badge_basket = 1;
    var module_rostaee_badge = 1;
    var module_revised_sellers_promotions_price = 1;
    var module_new_post = 1;
    var module_dynamic_fashion_category = 1;
    var module_product_change_queue_entity = 1;
    var module_package_gate = 1;
    var module_faq_short_answer = 1;
    var module_gallery_zoom = 1;
    var module_enable_fast_excel = 1;
    var module_fc_split_receipt_item = 1;
    var module_seller_bank_account_refactor = 1;
    var module_shipment_cost_bar = 1;
    var module_adro_tracker_sales = 1;
    var module_adro_banner_placement = 1;
    var module_new_home_and_kitchen_widget_design = 1;
    var module_bellatrix_dynamic_widget = 1;
    var module_product_redesign = 1;
    var module_sponsoredAd = 1;
    var module_share_invoice = 1;
    var module_digikala_profile_return = 1;
    var module_bank_card_redesign = 1;
    var module_faq_tab_redesign = 1;
    var module_comments_file = 1;
    var module_increase_comment_video_limit_count = 1;
    var module_contact_design = 1;
    var module_digiclub_touchpoints = 1;
    var module_digiclub_touchpoints_september = 1;
    var module_digiclub_luckydraw_stopped = 1;
    var module_digiclub_promotion = 1;
    var module_digiclub_new_header = 1;
    var module_digiclub_lucky_spinner = 1;
    var module_digiclub_multiple_shipment = 1;
    var module_digiclub_new_info = 1;
    var module_digiclub_shipping_points = 1;
    var module_digiclub_birthday_anniversary_gift_points = 1;
    var module_digiclub_game_center = 1;
    var module_digiclub_game_center_content = 1;
    var module_digiclub_mission_page = 1;
    var module_plp_shortcut_and_touchpoint_filter = 1;
    var module_marketplace_orders_ovl = 1;
    var module_marketplace_ovl = 1;
    var module_modal_add_to_cart = 1;
    var module_size_guide_new = 1;
    var module_marketplace_request_invoices_export = 1;
    var module_faq_feedback = 1;
    var module_marketplace_remove_active_field_from_bank_account_entity = 1;
    var module_cart_details_new_design = 1;
    var module_seven_days_warranty = 1;
    var module_crm_after_sale = 1;
    var module_sms_comments_file = 1;
    var module_user_history = 1;
    var module_Adro_sponsoredAd = 1;
    var module_search_new_style = 1;
    var module_new_shipping = 1;
    var module_set_order_type_ga = 1;
    var module_qa_moderation = 1;
    var module_js_crashlytics = 1;
    var module_marketplace_electronic_contract = 1;
    var module_marketplace_electronic_contract_admin_side = 1;
    var module_premium_brand = 1;
    var module_merge_accounts = 1;
    var module_dkms_new_brand = 1;
    var module_adservice_digikala_premium_brand = 1;
    var module_adservice_digikala_premium_brand_improvement = 1;
    var module_desktop_sis = 1;
    var module_mobile_sis = 1;
    var module_footer_new_social_links = 1;
    var module_new_registration = 1;
    var module_new_desktop_header = 1;
    var module_general_location = 1;
    var module_pdp_redesign_new_variant = 1;
    var module_top_banner_make_unsticky = 1;
    var module_ds_voucher_box = 1;
    var module_yalda_box = 1;
    var module_dkms_brand_campaign = 1;
    var module_order_item_modification = 1;
    var module_voucher_fraud_prevention = 1;
    var module_marketplace_package_wh_capacity = 1;
    var module_address_landline = 1;
    var module_dk_wallet = 1;
    var module_product_box_cpc_redesign = 1;
    var module_ab_desktop_touchpoint_filters = 1;
    var module_dk_wallet_cash_back = 1;
    var module_admin_marketplace_seller_edit_address = 1;
    var module_marketplace_seller_sort_warehouses = 1;
    var module_marketplace_seller_registration_address = 1;
    var module_DS_megamenu_redesign = 1;
    var module_marketplace_seller_profile_wh = 1;
    var module_new_carousel_price = 1;
    var module_ga_shipping_carousel_add_to_cart = 1;
    var module_ds_seller = 1;
    var module_ds_seller_new = 1;
    var module_adservice_sku_price = 1;
    var module_ds_special_sale = 1;
    var module_promotion_mega_menu = 1;
    var module_add_item = 1;
    var module_cancel_item = 1;
    var module_category_product_types = 1;
    var module_marketplace_hidden_category_panel = 1;
    var module_ds_mobile_web_mega_menu_redesign = 1;
    var module_pdp_digikala_rate = 1;
    var module_vouchers_order_count = 1;
    var module_marketplace_buy_box_usage_log = 1;
    var module_mobile_carousels_fast_shopping = 1;
    var module_DK_Recommendation = 1;
    var module_retail_buy_box_challenge = 1;
    var module_adro_digistyle_affiliate = 1;
    var module_profile_topup = 1;
    var module_new_bill = 1;
    var module_refactor_shipping = 1;
    var module_new_payment = 1;
    var module_minicart_red_button = 1;
    var module_marketplace_order_package_mapping = 1;
    var module_new_gallery = 1;
    var module_mobile_new_gallery = 1;
    var module_price_chart_scale = 1;
    var module_marketplace_large_item_hub_time_scope_modification = 1;
    var module_new_add_btn = 1;
    var module_yalda_home = 1;
    var module_marketplace_info_footer = 1;
    var module_new_gallery_icons = 1;
    var module_adro_sponsor_badge_banner = 1;
    var module_adro_sponsor_badge_banner_fashion = 1;
    var module_yalda_cash_back = 1;
    var module_new_empty_cart = 1;
    var module_dkms_brand_campaign_redesign = 1;
    var module_cpo_new_search = 1;
    var module_cpo_winner_buy_box = 1;
    var module_packaging_info = 1;
    var module_marketplace_order_detail = 1;
    var module_remove_title_mandatory = 1;
    var module_cpo_new_rules = 1;
    var module_marketplace_seller_cpo_access_restriction = 1;
    var module_my_dk_navbar = 1;
    var module_ds_new_home = 1;
    var module_product_new_image = 1;
    var module_marketplace_lead_time_in_category = 1;
    var module_shopping_new_incredible_categories = 1;
    var module_marketplace_promotion_management = 1;
    var module_modify_reference_price_rules = 1;
    var module_shopping_fresh_in_incredible_carousel = 1;
    var module_DK_DC_navigation = 1;
    var module_marketplace_price_tag = 1;
    var module_adservice_banner_sort = 1;
    var module_new_chat_client = 1;
    var module_new_chat_client_ajax = 1;
    var module_parsi_map = 1;
    var module_new_address_modal = 1;
    var module_new_profile_addresses = 1;
    var module_new_profile_gift_card = 1;
    var module_new_profile_user_history = 1;
    var module_new_checkout_address = 1;
    var module_address_geolocation = 1;
    var module_adservice_incredible_offer_eligible_variant = 1;
    var module_paste_barcode_copied = 1;
    var module_ds_faq_dynamic = 1;
    var module_digistyle_special_event = 1;
    var module_digistyle_voucher_spinner = 1;
    var module_cart_sampling_gift = 1;
    var module_ds_favorite_brands = 1;
    var module_ds_new_add_to_cart = 1;
    var module_light_box = 1;
    var module_fmcg_navigation = 1;
    var module_marketplace_moderation_category_suggestion_modal = 1;
    var module_video_js = 1;
    var module_marketplace_new_seller_dashboard = 1;
    var module_large_item_shipping_fee = 1;
    var module_new_address_improvement = 1;
    var module_seller_notification_changing_email = 1;
    var module_profile_list = 1;
    var module_premium_brand_bullet_points = 1;
    var module_shared_address = 1;
    var module_pdp_seller_rate_info_modal = 1;
    var module_dimension_config_validation = 1;
    var module_ab_test_plp_rating = 1;
    var module_admin_warranty_insurance = 1;
    var module_new_profile_orders = 1;
    var module_new_profile_sidebar = 1;
    var module_delete_comment = 1;
    var module_new_market_price_rules = 1;
    var module_digiplus_pdp = 1;
    var module_digiplus_plp = 1;
    var module_digiplus_navigation = 1;
    var module_digiplus_checkout = 1;
    var module_digiplus_timescope = 1;
    var module_digiplus_shipping = 1;
    var module_digiplus_filter = 1;
    var module_digiplus_incredible = 1;
    var module_digiplus_profile = 1;
    var module_digiplus_carousel = 1;
    var module_digiplus_tnc = 1;
    var module_digiplus_cashback = 1;
    var module_digiplus_notifications = 1;
    var module_digikala_plus_service = 1;
    var module_plus_free_shipping = 1;
    var module_digiplus_rebrand = 1;
    var module_digiplus_public = 1;
    var module_digiplus_badge = 1;
    var module_digiplus_promotion_cb = 1;
    var module_marketplace_profile_refactor = 1;
    var module_sfl_separation = 1;
    var module_esi_in_mini_header = 1;
    var module_banner_url_check = 1;
    var module_new_mobile_header = 1;
    var module_dk_mobile_menu_revision = 1;
    var module_voucher_fraud_detection = 1;
    var module_marketplace_dk_pickup_shipment = 1;
    var module_marketplace_create_package_shipment = 1;
    var module_shipment_effect_create_package = 1;
    var module_recaptcha_contact_us = 1;
    var module_data_layer = 1;
    var module_data_layer_carousels = 1;
    var module_data_layer_phase2 = 1;
    var module_data_layer_my_landing = 1;
    var module_checkout_action_button_replacement = 1;
    var module_new_comment = 1;
    var module_new_profile_orders_mobile = 1;
    var module_new_price_chart_header = 1;
    var module_mobile_time_table = 1;
    var module_admin_new_ship_by_seller = 1;
    var module_ship_by_seller_profile = 1;
    var module_shipping_v2 = 1;
    var module_ship_by_seller_checkout = 1;
    var module_ship_by_seller_product = 1;
    var module_new_cpo_icon_config = 1;
    var module_separated_delete_button = 1;
    var module_new_profile_notification = 1;
    var module_ds_favorite_list = 1;
    var module_mandatory_location_shipping = 1;
    var module_sfl_inactive_product = 1;
    var module_marketplace_ship_by_seller_pdp = 1;
    var module_drop_off = 1;
    var module_new_profile_additional_info = 1;
    var module_new_profile_additional_info_mobile = 1;
    var module_new_vat_rule = 1;
    var module_seller_live_date = 1;
    var module_plp_top_filters = 1;
    var module_cbr_unsatisfied_users = 1;
    var module_chatbox_all_pages = 1;
    var module_display_inactive_products = 1;
    var module_update_product_site_excel = 1;
    var module_stop_sending_email_sms_to_sellers = 1;
    var module_nps_ship_by_seller = 1;
    var module_new_login = 1;
    var module_cpo_import_excel = 1;
    var module_refund_end_to_end = 1;
    var module_ship_by_seller_ovl = 1;
    var module_collective_promotions_module = 1;
    var module_selection_pricing = 1;
    var module_dynamic_shipping_cost = 1;
    var module_sbs_failed_delivery = 1;
    var module_jet_delivery = 1;
    var module_amazing_carousel_show_all = 1;
    var module_marketplace_seller_data = 1;
    var module_new_economic_profile = 1;
    var module_jet_delivery_filter = 1;
    var module_new_burger_menu = 1;
    var module_ds_home_rearrange = 1;
    var module_new_cmp_category = 1;
    var module_auto_title_suggestion = 1;
    var module_dk_rebranding = 1;
    var module_rebrand_border_radius = 1;
    var module_variant_restrictions = 1;
    var module_new_question_gallery = 1;
    var module_add_imei_to_packages = 1;
    var module_cart_swiper_ab_test = 1;
    var module_cpo_excel_import = 1;
    var module_ml_profile_ab_test = 1;
    var module_sbs_delivery_send_delivered_sms = 1;
    var module_carousel_brand_campaign = 1;
    var module_ds_beatuy_new_badge = 1;
    var module_ds_design_improve = 1;
    var module_jet_delivery_variant_dimension = 1;
    var module_mobile_back_btn_position = 1;
    var module_ds_install_app = 1;
    var module_only_seller_shipping_type = 1;
    var module_checkout_ship_by_seller_phase_2 = 1;
    var module_ds_new_forget_pass_email = 1;
    var module_ds_product_image_zoom = 1;
    var module_only_fbs = 1;
    var module_hoda_verification = 1;
    var module_ds_new_auth = 1;
    var module_share_new_option = 1;
    var module_ds_order_history = 1;
    var module_ds_order_details = 1;
    var module_marketplace_ship_by_seller_order_new_sort = 1;
    var module_auto_assign_products_photo = 1;
    var module_unavailable_payment_method_ab_test = 1;
    var module_ds_order_history_dt = 1;
    var module_ds_profile_components = 1;
    var module_ds_order_search = 1;
    var module_ds_order_search_dt = 1;
    var module_marketplace_new_passive_order = 1;
    var module_content_x = 1;
    var module_shortcut_filters = 1;
    var module_revamp_product = 1;
    var module_new_shipping_limit_modal = 1;
    var module_new_app_adjust_links = 1;
    var module_marketplace_profile_rating = 1;
    var module_only_fbs_deactive_variant = 1;
    var module_insider_object = 1;
    var module_search_banner_ga = 1;
    var module_seo_search_pages = 1;
    var module_seo_search_pages_ds = 1;
    var module_app_specific_incredible = 1;
    var module_marketplace_finance_wallet = 1;
    var module_ds_impression_click_install_app = 1;
    var module_marketplace_wallet = 1;
    var module_long_time_declare = 1;
    var module_edit_product_price_amazing = 1;
    var module_marketplace_lazy_load_images_cmp = 1;
    var module_deactive_empty_promotions = 1;
    var module_sponsored_ads = 1;
    var module_seller_landing_redesign = 1;
    var module_ab_pdp_view_count = 1;
    var module_pdp_concurrent_viewer_phase1 = 1;
    var module_ship_by_seller_total_capacity_remained_calculator = 1;
    var module_new_ship_by_seller_setting = 1;
    var module_marketplace_ship_by_seller_settings = 1;
    var module_marketplace_ship_by_seller_free_shipping = 1;
    var module_marketplace_fix_registration_fmcg_bug = 1;
    var module_post_next_day_checkout = 1;
    var module_IMEI_demo = 1;
    var module_main_cat_amazing = 1;
    var module_mc_provider_filter = 1;
    var module_dk_mobile_header_redesign = 1;
    var module_commission_discount = 1;
    var module_commission_discount_end_date = 1;
    var module_automatic_approval_shared_promotions = 1;
    var module_marketplace_fix_image_problem_on_responsive = 1;
    var module_product_config_multi_select = 1;
    var module_marketplace_ship_by_seller_restriction = 1;
    var module_new_bazaar_logo = 1;
    var module_download_app_row_redesign = 1;
    var module_product_is_iranian = 1;
    var module_ciri_new_design = 1;
    var module_plp_new_filters = 1;
    var module_iban = 1;
    var module_marketplace_product_config_sortable_product_id = 1;
    var module_marketplace_profile_commitment_download_link = 1;
    var module_pause_brand_campaign_with_out_of_stock_dkp = 1;
    var module_sbs_carousels = 1;
    var module_content_config = 1;
    var module_sbs_improvement = 1;
    var module_data_layer_ds = 1;
    var module_dimensions_required_cf_view = 1;
    var module_village_landing_form = 1;
    var module_anonymous_comment = 1;
    var module_marketplace_profile_persian_digits_contact_info = 1;
    var module_new_shipping_fresh_carousel = 1;
    var module_marketplace_remove_adservice_buttons_product_config = 1;
    var module_seller_voucher_submit_type = 1;
    var module_jet_wait_for_payment_duration = 1;
    var module_marketplace_product_config_archive_badge = 1;
    var module_package_delete = 1;
    var module_marketplace_delete_package_modal_and_changes = 1;
    var module_search_banner_command = 1;
    var module_mobile_compare = 1;
    var module_sample_gift = 1;
    var module_fc_supply_payment_new_print = 1;
    var module_cart_simplify = 1;
    var module_marketplace_orders_manual_tracking_code = 1;
    var module_new_dkms_promotion_details_columns = 1;
    var module_ad_expiry_date = 1;
    var module_marketplace_registration_post_number_validation = 1;
    var module_ccp_guideline = 1;
    var module_periodic_prices_acl = 1;
    var module_yalda_99_timer = 1;
    var module_yalda_99_carousels = 1;
    var module_best_selling_data_layer = 1;
    var module_digipay_cart_credit = 1;
    var module_digipay_touchpoints = 1;
    var module_marketplace_seller_page_refactor = 1;
    var module_ovl_refactor = 1;
    var module_product_first_party_updater = 1;
    var module_marketplace_profile_description_and_logo_changes = 1;
    var module_new_attribute_structure = 1;
    var module_sale_restriction_reason = 1;
    var module_just_approved_product_can_be_active = 1;
    var module_plus_cashback_per_item = 1;
    var module_auto_title_enable_edit = 1;
    var module_unpause_valid_brand_campaigns = 1;
    var module_marketplace_fix_create_package_process_ui = 1;
    var module_promotion_filter_by_seller = 1;
    var module_marketplace_create_package_gregorian_date = 1;
    var module_marketplace_package_details_expiration_and_fixes = 1;
    var module_marketplace_create_package_new_shelf_life = 1;
    var module_marketplace_show_hoda_modal = 1;
    var module_profile_return_invoice = 1;
    var module_product_class = 1;
    var module_sbs_checkout_post = 1;
    var module_marketplace_registration_persian_numbers = 1;
    var module_ship_by_post_only_small_nature = 1;
    var module_marketplace_ship_by_post_routes = 1;
    var module_fbs_for_all = 1;
    var module_mobile_shipping_fresh_recommendation = 1;
    var module_search_bar_banner = 1;
    var module_new_pdp_review = 1;
    var module_dk_pdp_redesign = 1;
    var module_new_pdp_sellers = 1;
    var module_new_profile_favorites = 1;
    var module_dk_pdp_improve = 1;
    var module_digi_birthday_99 = 1;
    var module_profile_return_invoice_list = 1;
    var module_dk_company_national_number_equal_economic = 1;
    var module_video_bulk = 1;
    var module_dpo_update_price = 1;
    var module_fulfillment_dpo_rts_validation = 1;
    var module_seller_first_party_updater = 1;
    var module_pdp_digipay_credit_offer = 1;
    var module_pdp_digipay_credit_info = 1;
    var module_admin_panel_payment_limitation = 1;
    var module_new_customer_floating_box = 1;
    var module_check_having_wallet_before_set_wallet_prefer = 1;
    var module_lead_time_postpone = 1;
    var module_plus_free_shipment_expansion = 1;
    var module_dynamic_shipping_cost_phase_2 = 1;
    var module_new_desktop_time_table = 1;
    var module_pdp_plp_special_amazing = 1;
    var module_ab_app_incredible_demo = 1;
    var module_category_faq = 1;
    var module_fresh_instant_plus_cash_back = 1;
    var module_find_gift_activation_panel = 1;
    var module_magnet_comment = 1;
    var module_multiple_choice_reason_of_call = 1;
    var module_similar_brand = 1;
    var module_plp_mobile_fidibo_banner = 1;
    var module_custom_payment_plus = 1;
    var module_asserting_pricing_rules_in_po = 1;
    var module_search_product_suggestions = 1;
    var module_digistyle_incredible_offer = 1;
    var module_ds_new_footer = 1;
    var module_chatbot = 1;
    var module_ds_refund_modals = 1;
    var module_ds_seo_home_page = 1;
    var module_dk_my_landing_carousel = 1;
    var module_dk_product_badge = 1;
    var module_ds_new_home_desktop = 1;
    var module_payment_voucher_gift_separation = 1;
    var module_cpc_pdp_placements = 1;
    var module_fulfilemnt_po_international = 1;
    var module_dk_search_boxes = 1;
    var module_notify_seller_shipment_cancel = 1;
    var module_plus_group_purchase = 1;
    var module_create_invoice_for_plus_group = 1;
    var module_ignore_order_limit_for_b2b = 1;
    var module_dk_new_footer = 1;
    var module_dk_new_footer_changes = 1;
    var module_dc_polygon_new = 1;
    var module_ab_new_buy_again = 1;
    var module_fiscal_invoice = 1;
    var module_supplier_duplicate_sheba = 1;
    var module_dk_app_banner_ga = 1;
    var module_consignment_checker_fix = 1;
    var module_change_qr_code_generator = 1;
    var module_international_po_warranty = 1;
    var module_market_price_validation_for_not_changeable_types = 1;
    var module_ds_cancel_order = 1;
    var module_dk_mobile_menu_magnet = 1;
    var module_dynamic_ts_orders = 1;
    var module_use_new_attribute_structure = 1;
    var module_marketplace_order_package_creation = 1;
    var module_JIT_fc_update = 1;
    var module_jet_delivery_dynamic_stock = 1;
    var module_plus_invoice_discount = 1;
    var module_seller_holiday_setting = 1;
    var module_marketplace_add_new_cut_off = 1;
    var module_dk_mobile_magnet_header = 1;
    var module_ds_new_plp_desktop = 1;
    var module_digikala_mehr = 1;
    var module_digipay_add_basket_id = 1;
    var module_incredible_carousel_ds = 1;
    var module_ds_floating_box = 1;
    var module_mc_digiexpress_filter = 1;
    var module_mc_digiexpress_phone = 1;
    var module_mc_digiexpress_export = 1;
    var module_ds_dynamic_shipping = 1;
    var module_digipay_touch_point_service = 1;
    var module_marketplace_user_most = 1;
    var module_size_refactor = 1;
    var module_sync_to_ollivander = 1;
    var module_digikala_confirmed_order_sms_add_pod = 1;
    var module_ollivander_purchase_elastic = 1;
    var module_start_sync_from_ollivander_phase_1 = 1;
    var module_additional_info_changes = 1;
    var module_vod = 1;
    var module_plus_landing_redesign = 1;
    var module_fidiplus_banner = 1;
    var module_dk_fidi_plus = 1;
    var module_plus_landing_banner_slider = 1;
    var module_dk_incredible_infiniti_scroll = 1;
    var module_marketplace_fulfill_deliver_cost = 1;
    var module_dk_public_favorite_list = 1;
    var module_ds_cancel_order_desktop = 1;
    var module_about_text_change = 1;
    var module_online_return_affordable_confirm = 1;
    var module_ds_new_slider_zone = 1;
    var module_finance_show_change_config_reason_in_kowsar = 1;
    var module_new_pharmacy_landing = 1;
    var module_wish_list_data_layer = 1;
    var module_incredible_offers_ds = 1;
    var module_save_for_later_data_layer = 1;
    var module_iranian_brands_category_ds_data_layer = 1;
    var module_marketplace_rts_cut_off = 1;
    var module_plp_on_promotion = 1;
    var module_order_limit_on_plus_promotions = 1;
    var module_ad_service_separate_plus_amazing_duration = 1;
    var module_duration_time_between_plus_amazing_and_amazing = 1;
    var module_threshold_duration_auto_amazing = 1;
    var module_add_app_banners_for_premium_brand = 1;
    var module_dkms_sponsor_brand_description_and_weight = 1;
    var module_special_amazing_on_app = 1;
    var module_disabled_max_allowable_price_assertion_in_active_amazing = 1;
    var module_new_max_allowable_price_for_incredible = 1;
    var module_adding_tags_to_sponsor_brand_campaigns = 1;
    var module_convert_search_brand_name_to_persian_chars = 1;
    var module_mc_router = 1;
    var module_cpc_tapsell = 1;
    var module_cpc_yektanet = 1;
    var module_mega_promotion_automation = 1;
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

  <script>
    try {
      var dataLayer = [];
      window.dataLayerData = [{"event":"eec.productImpression","ecommerce":{"currencyCode":"EUR","impressions":[{"name":"\u06a9\u0627\u0628\u0644 \u062f\u0648\u0631\u0628\u06cc\u0646 \u0645\u062f\u0627\u0631\u0628\u0633\u062a\u0647 \u0645\u062f\u0644 rayka \u0628\u0647 \u0637\u0648\u0644 \u0628\u06cc\u0633\u062a \u0645\u062a\u0631","id":589893,"price":1100000,"brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"[AC,\u06a9\u0627\u0628\u0644 \u0648\u0645\u0628\u062f\u0644]","list":"category-\u06a9\u0627\u0628\u0644 \u0631\u0627\u0628\u0637 \u062f\u0648\u0631\u0628\u06cc\u0646","position":1,"dimension6":1,"dimension2":0,"dimension9":3.5,"metric6":35,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"ads"},{"name":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc \u0686\u0627\u067e \u0633\u0631\u06cc\u0639 \u0641\u0648\u062c\u06cc \u0641\u06cc\u0644\u0645 \u0645\u062f\u0644 Instax Mini 9","id":260095,"price":15900000,"brand":"\u0641\u0648\u062c\u06cc \u0641\u06cc\u0644\u0645","category":"[AV,\u062f\u0648\u0631\u0628\u06cc\u0646]","list":"category-\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc","position":2,"dimension6":1,"dimension2":0,"dimension9":4.3,"metric6":502,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"none"},{"name":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 \u06a9\u0627\u0646\u0646 \u0645\u062f\u0644 EOS 4000D \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u0644\u0646\u0632 18-55 \u0645\u06cc\u0644\u06cc \u0645\u062a\u0631 DC III","id":777295,"price":92500000,"brand":"\u06a9\u0627\u0646\u0646","category":"[AV,\u062f\u0648\u0631\u0628\u06cc\u0646]","list":"category-\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc","position":3,"dimension6":1,"dimension2":0,"dimension9":4.2,"metric6":105,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"none"},{"name":"\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u0645\u062f\u0644 DX-260","id":3588110,"price":3337000,"brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"[AV,\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646]","list":"category-\u0646\u0648\u0631 \u062b\u0627\u0628\u062a","position":4,"dimension6":1,"dimension2":0,"dimension9":3.9,"metric6":273,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"none"},{"name":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc \u0686\u0627\u067e \u0633\u0631\u06cc\u0639 \u0641\u0648\u062c\u06cc \u0641\u06cc\u0644\u0645 \u0645\u062f\u0644 Instax Mini 9 Clear","id":3593269,"price":15900000,"brand":"\u0641\u0648\u062c\u06cc \u0641\u06cc\u0644\u0645","category":"[AV,\u062f\u0648\u0631\u0628\u06cc\u0646]","list":"category-\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc","position":5,"dimension6":1,"dimension2":0,"dimension9":4.4,"metric6":22,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"none"},{"name":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 \u0646\u06cc\u06a9\u0648\u0646 \u0645\u062f\u0644 D810 \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u0644\u0646\u0632 24-120 \u0645\u06cc\u0644\u06cc \u0645\u062a\u0631 F\/4G VR","id":98691,"price":499900000,"brand":"\u0646\u06cc\u06a9\u0648\u0646","category":"[AV,\u062f\u0648\u0631\u0628\u06cc\u0646]","list":"category-\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc","position":6,"dimension6":1,"dimension2":15,"dimension9":1,"metric6":1,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"special-offer"},{"name":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 \u06a9\u0627\u0646\u0646 \u0645\u062f\u0644 EOS 2000D \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u0644\u0646\u0632 18-55 \u0645\u06cc\u0644\u06cc \u0645\u062a\u0631 DC III","id":1856080,"price":98900000,"brand":"\u06a9\u0627\u0646\u0646","category":"[AV,\u062f\u0648\u0631\u0628\u06cc\u0646]","list":"category-\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc","position":7,"dimension6":1,"dimension2":0,"dimension9":4.4,"metric6":57,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"none"},{"name":"\u0641\u0648\u0646 \u0639\u06a9\u0627\u0633\u06cc \u0645\u062f\u0644 non woven \u06a9\u062f 2.5-1.5","id":3108356,"price":900000,"brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"[AV,\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646]","list":"category-\u0641\u0648\u0646 (\u067e\u0631\u062f\u0647)","position":8,"dimension6":1,"dimension2":0,"dimension9":3.2,"metric6":328,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"none"},{"name":"\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u06a9\u062f RFL","id":3339128,"price":3699900,"brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"[AV,\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646]","list":"category-\u0646\u0648\u0631 \u062b\u0627\u0628\u062a","position":9,"dimension6":1,"dimension2":0,"dimension9":3.9,"metric6":303,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"none"},{"name":"\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u0645\u0648\u0646\u0627\u06a9\u0648 \u0645\u062f\u0644 Brilliant-04","id":4459464,"price":9000000,"brand":"\u0645\u0648\u0646\u0627\u06a9\u0648","category":"[AV,\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646]","list":"category-\u0646\u0648\u0631 \u062b\u0627\u0628\u062a","position":10,"dimension6":1,"dimension2":0,"dimension9":0,"metric6":0,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"none"},{"name":" \u062f\u0648\u0631\u0628\u06cc\u0646 \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 \u0622\u06a9\u0633\u0648\u0646 \u0645\u062f\u0644 AX6062","id":2520810,"price":3400000,"brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"[AV,\u062f\u0648\u0631\u0628\u06cc\u0646]","list":"category-\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc","position":11,"dimension6":1,"dimension2":0,"dimension9":3.6,"metric6":66,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"none"},{"name":"\u0633\u0647 \u067e\u0627\u06cc\u0647 \u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647 \u062f\u0648\u0631\u0628\u06cc\u0646 \u0645\u062f\u0644 3110","id":3443396,"price":879800,"brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"[AV,\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646]","list":"category-\u0633\u0647 \u067e\u0627\u06cc\u0647 \u0648 \u062a\u06a9 \u067e\u0627\u06cc\u0647","position":12,"dimension6":1,"dimension2":0,"dimension9":3.4,"metric6":211,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"none"},{"name":"\u06a9\u0627\u0631\u062a \u062d\u0627\u0641\u0638\u0647 microSDXC \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 EVO Plus \u06a9\u0644\u0627\u0633 10 \u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f UHS-I U1 \u0633\u0631\u0639\u062a 100MBps \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u0622\u062f\u0627\u067e\u062a\u0648\u0631 SD","id":3190220,"price":2097000,"brand":"\u0633\u0627\u0645\u0633\u0648\u0646\u06af","category":"[IT,\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0630\u062e\u06cc\u0631\u0647 \u0633\u0627\u0632\u06cc \u0627\u0637\u0644\u0627\u0639\u0627\u062a]","list":"category-\u06a9\u0627\u0631\u062a \u062d\u0627\u0641\u0638\u0647","position":13,"dimension6":1,"dimension2":0,"dimension9":4.4,"metric6":232,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"none"},{"name":"\u062a\u0644\u0633\u06a9\u0648\u067e \u0634\u06a9\u0633\u062a\u06cc \u0645\u062f\u0644 Celestial Body Accidence","id":690710,"price":7470000,"brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"[AV,\u0627\u0628\u0632\u0627\u0631 \u0639\u0644\u0645\u06cc]","list":"category-\u062a\u0644\u0633\u06a9\u0648\u067e","position":14,"dimension6":1,"dimension2":0,"dimension9":2.7,"metric6":23,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"none"},{"name":"  \u06a9\u0627\u0631\u062a \u062d\u0627\u0641\u0638\u0647 microSDXC \u0633\u0646 \u062f\u06cc\u0633\u06a9 \u0645\u062f\u0644 Ultra A1 \u06a9\u0644\u0627\u0633 10 \u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f UHS-I \u0633\u0631\u0639\u062a 120MBps \u0638\u0631\u0641\u06cc\u062a 32 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a","id":4508458,"price":1095000,"brand":"\u0633\u0646 \u062f\u06cc\u0633\u06a9","category":"[IT,\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0630\u062e\u06cc\u0631\u0647 \u0633\u0627\u0632\u06cc \u0627\u0637\u0644\u0627\u0639\u0627\u062a]","list":"category-\u06a9\u0627\u0631\u062a \u062d\u0627\u0641\u0638\u0647","position":15,"dimension6":1,"dimension2":0,"dimension9":4.3,"metric6":223,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"none"},{"name":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 \u06a9\u0627\u0646\u0646 \u0645\u062f\u0644  Eos 80D EF S \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u0644\u0646\u0632 18-135 \u0645\u06cc\u0644\u06cc \u0645\u062a\u0631 f\/3.5-5.6 IS USM","id":138649,"price":279900000,"brand":"\u06a9\u0627\u0646\u0646","category":"[AV,\u062f\u0648\u0631\u0628\u06cc\u0646]","list":"category-\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc","position":16,"dimension6":1,"dimension2":0,"dimension9":4,"metric6":44,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"none"},{"name":"\u062a\u0644\u0633\u06a9\u0648\u067e \u0645\u062f\u0644 c 2105","id":3133047,"price":3900000,"brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"[AV,\u0627\u0628\u0632\u0627\u0631 \u0639\u0644\u0645\u06cc]","list":"category-\u062a\u0644\u0633\u06a9\u0648\u067e","position":17,"dimension6":1,"dimension2":0,"dimension9":2.9,"metric6":23,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"none"},{"name":"\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u0645\u062f\u0644 M26","id":3197248,"price":1770000,"brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"[AV,\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646]","list":"category-\u0646\u0648\u0631 \u062b\u0627\u0628\u062a","position":18,"dimension6":1,"dimension2":9,"dimension9":4,"metric6":78,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"special-offer"},{"name":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 \u0646\u06cc\u06a9\u0648\u0646 \u0645\u062f\u0644 D3500 \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u0644\u0646\u0632 18-55 \u0645\u06cc\u0644\u06cc \u0645\u062a\u0631 VR AF-P","id":949493,"price":129950000,"brand":"\u0646\u06cc\u06a9\u0648\u0646","category":"[AV,\u062f\u0648\u0631\u0628\u06cc\u0646]","list":"category-\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc","position":19,"dimension6":1,"dimension2":0,"dimension9":4,"metric6":32,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"none"},{"name":"\u0633\u0647 \u067e\u0627\u06cc\u0647 \u062f\u0648\u0631\u0628\u06cc\u0646 \u0646\u0633\u062a \u0645\u062f\u0644 NT-510 \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u06af\u06cc\u0631\u0647 \u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647 \u0645\u0648\u0628\u0627\u06cc\u0644","id":3557656,"price":3260000,"brand":"\u0646\u0633\u062a","category":"[AV,\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646]","list":"category-\u0633\u0647 \u067e\u0627\u06cc\u0647 \u0648 \u062a\u06a9 \u067e\u0627\u06cc\u0647","position":20,"dimension6":1,"dimension2":0,"dimension9":4.2,"metric6":115,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"none"},{"name":"\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u0645\u062f\u0644 FRL-S31","id":3692356,"price":6990000,"brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"[AV,\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646]","list":"category-\u0646\u0648\u0631 \u062b\u0627\u0628\u062a","position":21,"dimension6":1,"dimension2":36,"dimension9":3.4,"metric6":31,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"special-offer"},{"name":"\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u0645\u062f\u0644 dimmable","id":4370886,"price":8047500,"brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"[AV,\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646]","list":"category-\u0646\u0648\u0631 \u062b\u0627\u0628\u062a","position":22,"dimension6":1,"dimension2":13,"dimension9":4.2,"metric6":50,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"special-offer"},{"name":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc \u0648\u0631\u0632\u0634\u06cc \u0645\u062f\u0644 SQ11","id":1925099,"price":1320000,"brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"[AV,\u062f\u0648\u0631\u0628\u06cc\u0646]","list":"category-\u062f\u0648\u0631\u0628\u06cc\u0646 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc","position":23,"dimension6":1,"dimension2":50,"dimension9":2.7,"metric6":189,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"special-offer"},{"name":"\u062a\u0644\u0633\u06a9\u0648\u067e \u0627\u06a9\u06cc\u0648\u062a\u0631 \u0645\u062f\u0644 Maksy 60","id":3438922,"price":43000000,"brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"[AV,\u0627\u0628\u0632\u0627\u0631 \u0639\u0644\u0645\u06cc]","list":"category-\u062a\u0644\u0633\u06a9\u0648\u067e","position":24,"dimension6":1,"dimension2":4,"dimension9":3.3,"metric6":4,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"special-offer"},{"name":"\u0628\u0627\u062a\u0631\u06cc \u0642\u0644\u0645\u06cc \u0648 \u0646\u06cc\u0645 \u0642\u0644\u0645\u06cc \u06a9\u0645\u0644\u06cc\u0648\u0646 \u0645\u062f\u0644 Super Heavy Duty \u0628\u0633\u062a\u0647 8 \u0639\u062f\u062f\u06cc","id":191819,"price":199800,"brand":"\u06a9\u0645\u0644\u06cc\u0648\u0646","category":"[AC,\u0628\u0627\u062a\u0631\u06cc \u0648 \u0634\u0627\u0631\u0698\u0631 \u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f]","list":"category-\u0628\u0627\u062a\u0631\u06cc \u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f","position":25,"dimension6":1,"dimension2":0,"dimension9":4.2,"metric6":7337,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"none"},{"name":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 \u06a9\u0627\u0646\u0646 \u0645\u062f\u0644 EOS 7D Mark II \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u0644\u0646\u0632 18-135 \u0645\u06cc\u0644\u06cc \u0645\u062a\u0631 IS USM","id":222962,"price":356000000,"brand":"\u06a9\u0627\u0646\u0646","category":"[AV,\u062f\u0648\u0631\u0628\u06cc\u0646]","list":"category-\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc","position":26,"dimension6":1,"dimension2":17,"dimension9":2.8,"metric6":4,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"special-offer"},{"name":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 \u06a9\u0627\u0646\u0646 \u0645\u062f\u0644 SX620 HS","id":203383,"price":63000000,"brand":"\u06a9\u0627\u0646\u0646","category":"[AV,\u062f\u0648\u0631\u0628\u06cc\u0646]","list":"category-\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc","position":27,"dimension6":1,"dimension2":0,"dimension9":4.1,"metric6":25,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"none"},{"name":"\u06a9\u0627\u0631\u062a \u062d\u0627\u0641\u0638\u0647 microSDXC \u0633\u0646 \u062f\u06cc\u0633\u06a9 \u0645\u062f\u0644 Ultra A1 \u06a9\u0644\u0627\u0633 10 \u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f UHS-I \u0633\u0631\u0639\u062a 120MBps \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a","id":4565123,"price":1980000,"brand":"\u0633\u0646 \u062f\u06cc\u0633\u06a9","category":"[IT,\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0630\u062e\u06cc\u0631\u0647 \u0633\u0627\u0632\u06cc \u0627\u0637\u0644\u0627\u0639\u0627\u062a]","list":"category-\u06a9\u0627\u0631\u062a \u062d\u0627\u0641\u0638\u0647","position":28,"dimension6":1,"dimension2":0,"dimension9":4.3,"metric6":175,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"none"},{"name":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 \u0628\u062f\u0648\u0646 \u0622\u06cc\u0646\u0647 \u06a9\u0627\u0646\u0646 \u0645\u062f\u0644 EOS M50  \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u0644\u0646\u0632 15-45 \u0645\u06cc\u0644\u06cc \u0645\u062a\u0631","id":587646,"price":149950000,"brand":"\u06a9\u0627\u0646\u0646","category":"[AV,\u062f\u0648\u0631\u0628\u06cc\u0646]","list":"category-\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc","position":29,"dimension6":1,"dimension2":0,"dimension9":4.7,"metric6":13,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"none"},{"name":"\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u0645\u062f\u0644 FRL-160r","id":3687426,"price":1990000,"brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"[AV,\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646]","list":"category-\u0646\u0648\u0631 \u062b\u0627\u0628\u062a","position":30,"dimension6":1,"dimension2":79,"dimension9":3.9,"metric6":32,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"special-offer"},{"name":"\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u0645\u062f\u0644 ZT-260","id":4411537,"price":3699200,"brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"[AV,\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646]","list":"category-\u0646\u0648\u0631 \u062b\u0627\u0628\u062a","position":31,"dimension6":1,"dimension2":0,"dimension9":3.6,"metric6":38,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"none"},{"name":"\u0633\u0647 \u067e\u0627\u06cc\u0647 \u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647 \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0627\u0628\u0631 \u0645\u062f\u0644 ABR-3120","id":3375458,"price":1610000,"brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"[AV,\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646]","list":"category-\u0633\u0647 \u067e\u0627\u06cc\u0647 \u0648 \u062a\u06a9 \u067e\u0627\u06cc\u0647","position":32,"dimension6":1,"dimension2":3,"dimension9":3.2,"metric6":129,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"special-offer"},{"name":"\u0633\u0647 \u067e\u0627\u06cc\u0647 \u062f\u0648\u0631\u0628\u06cc\u0646 \u0645\u062f\u0644 3110","id":3869816,"price":950000,"brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"[AV,\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646]","list":"category-\u0633\u0647 \u067e\u0627\u06cc\u0647 \u0648 \u062a\u06a9 \u067e\u0627\u06cc\u0647","position":33,"dimension6":1,"dimension2":12,"dimension9":3.5,"metric6":58,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"special-offer"},{"name":"\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u0645\u062f\u0644 live s","id":4370591,"price":1550000,"brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"[AV,\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646]","list":"category-\u0646\u0648\u0631 \u062b\u0627\u0628\u062a","position":34,"dimension6":1,"dimension2":0,"dimension9":4.2,"metric6":45,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"none"},{"name":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc \u0648\u0631\u0632\u0634\u06cc \u06af\u0648\u067e\u0631\u0648 \u0645\u062f\u0644 Hero 9 Black","id":3410241,"price":109535000,"brand":"\u06af\u0648\u067e\u0631\u0648","category":"[AV,\u062f\u0648\u0631\u0628\u06cc\u0646]","list":"category-\u062f\u0648\u0631\u0628\u06cc\u0646 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc","position":35,"dimension6":1,"dimension2":0,"dimension9":4.5,"metric6":4,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"none"},{"name":"\u0628\u0627\u062a\u0631\u06cc \u0646\u06cc\u0645 \u0642\u0644\u0645\u06cc \u067e\u06cc\u06a9\u0633\u0644 \u0645\u062f\u0644 Super Heavy Duty \u0628\u0633\u062a\u0647 4 \u0639\u062f\u062f\u06cc","id":4442903,"price":129000,"brand":"\u067e\u06cc\u200c\u06a9\u06cc \u0633\u0644","category":"[AC,\u0628\u0627\u062a\u0631\u06cc \u0648 \u0634\u0627\u0631\u0698\u0631 \u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f]","list":"category-\u0628\u0627\u062a\u0631\u06cc \u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f","position":36,"dimension6":1,"dimension2":77,"dimension9":4.2,"metric6":665,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"special-offer"},{"name":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 \u0645\u062f\u0644 mn6077","id":3400718,"price":6970000,"brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"[AV,\u062f\u0648\u0631\u0628\u06cc\u0646]","list":"category-\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc","position":37,"dimension6":1,"dimension2":15,"dimension9":3.1,"metric6":12,"dimension11":0,"dimension20":"marketable","dimension18":"most-viewed","dimension19":"none","dimension7":"special-offer"}]},"actionField":{"list":"category-camera","category":["AC","\u06a9\u0627\u0628\u0644 \u0631\u0627\u0628\u0637 \u062f\u0648\u0631\u0628\u06cc\u0646"]}}];

      if(Object.prototype.toString.call(dataLayerData) === '[object Object]'){
        dataLayer.push(dataLayerData);
      } else {
        dataLayerData.forEach(function(eventItem) {
          dataLayer.push(eventItem);
        });
      }

      delete window.dataLayerData;
    } catch (e) {
      window.Sentry && window.Sentry.captureException(e);
      // eslint-disable-next-line no-console
      console.warn(e);
    }
  </script>

  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }

    window.emarsysCategoryBreadcrumb=window.emarsysCategoryBreadcrumb||"";var GTMurl=document.location.href,dataGTM="";"/"===document.location.pathname?dataGTM="HOME":1<GTMurl.indexOf("/users")?dataGTM=1<GTMurl.indexOf("/login")?"LOGIN":1<GTMurl.indexOf("/register")?"REGISTER":"USERS":1<GTMurl.indexOf("/product-list")?dataGTM="PRODUCT-LIST":1<GTMurl.indexOf("/profile/")?dataGTM="PROFILE":1<GTMurl.indexOf("/page/")?dataGTM="STATIC-PAGE":1<GTMurl.indexOf("/brand")?dataGTM="BRAND":1<GTMurl.indexOf("/seller")?dataGTM="SELLER":1<GTMurl.indexOf("/product")?dataGTM="PDP":1<GTMurl.indexOf("/cart")?dataGTM="CART":1<GTMurl.indexOf("/shipping")?dataGTM="CHECKOUT - Shipping":1<GTMurl.indexOf("/checkout")||1<GTMurl.lastIndexOf("/cash-on-delivery")?dataGTM="THANKYOUPAGE":1<GTMurl.indexOf("/payment/")?dataGTM="CHECKOUT - Payment":1<GTMurl.indexOf("/landing-page")?dataGTM="LANDING PAGES":1<GTMurl.indexOf("/compare")?dataGTM="COMPARE":1<GTMurl.indexOf("/search")?dataGTM=1<GTMurl.indexOf("q=")?1<GTMurl.indexOf("entry=mm")?"megamenu":"SEARCH":"PLP":1<GTMurl.indexOf("main")?dataGTM="CMP":1<GTMurl.indexOf("/incredible-offers")?dataGTM="INCREDIBLE OFFER":1<GTMurl.indexOf("/my-digikala")?dataGTM="MYDIGIKAL":1<GTMurl.indexOf("/promotion-page/")&&(dataGTM="PROMOTION");
    dataLayer.push({
      "pageCategory": [dataGTM]
    });

    gtag('js', new Date());
    if(!window.module_GTM_demo) {
      gtag('config', 'UA-13212406-1', { 'send_page_view': false });
    }
  </script>

  <script>
    try {
      var _ajax = $.ajax;
      if (_ajax) {
        $.ajax = function () {
          if (arguments && arguments[0] && arguments[0].url && /mal{1,2}tina/gi.test(arguments[0].url)) {
            return;
          }
          return _ajax.apply($, arguments);
        };
      }
    } catch (e) {}
  </script>

  <script>
    var supernova_mode = "production";
    var supernova_tracker_url = "https:\/\/etrackerd.digikala.com\/tracker\/events\/";
    var parameters = {"category_path":"\/category-camera","query":{"sortby":4},"list_view":false};
    var cart = {"cartId":0,"variants":[],"products":[],"itemCount":0,"isPlusUser":false};
    var emarsysCategoryBreadcrumb = "\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 > \u062f\u0648\u0631\u0628\u06cc\u0646";
    var click_impression = [{"id":260095,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc"],"supply_category":["AV","\u062f\u0648\u0631\u0628\u06cc\u0646"],"name":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc \u0686\u0627\u067e \u0633\u0631\u06cc\u0639 \u0641\u0648\u062c\u06cc \u0641\u06cc\u0644\u0645 \u0645\u062f\u0644 Instax Mini 9","brand":"Fujifilm","category":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc","category_id":48,"price_detail":{"selling_price":15900000,"discount_percent":0},"position":1,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":408901,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/1031830.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-260095\/\u062f\u0648\u0631\u0628\u06cc\u0646-\u0639\u06a9\u0627\u0633\u06cc-\u0686\u0627\u067e-\u0633\u0631\u06cc\u0639-\u0641\u0648\u062c\u06cc-\u0641\u06cc\u0644\u0645-\u0645\u062f\u0644-instax-mini-9","rating":{"rate":84.4,"count":502},"price":15900000},{"id":777295,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc"],"supply_category":["AV","\u062f\u0648\u0631\u0628\u06cc\u0646"],"name":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 \u06a9\u0627\u0646\u0646 \u0645\u062f\u0644 EOS 4000D \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u0644\u0646\u0632 18-55 \u0645\u06cc\u0644\u06cc \u0645\u062a\u0631 DC III","brand":"Canon","category":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc","category_id":48,"price_detail":{"selling_price":92500000,"discount_percent":0},"position":2,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":7308762,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/3532470.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-777295\/\u062f\u0648\u0631\u0628\u06cc\u0646-\u062f\u06cc\u062c\u06cc\u062a\u0627\u0644-\u06a9\u0627\u0646\u0646-\u0645\u062f\u0644-eos-4000d-\u0628\u0647-\u0647\u0645\u0631\u0627\u0647-\u0644\u0646\u0632-18-55-\u0645\u06cc\u0644\u06cc-\u0645\u062a\u0631-dc-iii","rating":{"rate":83.4,"count":105},"price":92500000},{"id":3588110,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0622\u062a\u0644\u06cc\u0647 \u0648 \u0646\u0648\u0631\u067e\u0631\u062f\u0627\u0632\u06cc","\u0646\u0648\u0631 \u062b\u0627\u0628\u062a"],"supply_category":["AV","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646"],"name":"\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u0645\u062f\u0644 DX-260","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u0646\u0648\u0631 \u062b\u0627\u0628\u062a","category_id":141,"price_detail":{"selling_price":3337000,"discount_percent":0},"position":3,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":18456976,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/a0f9d026fd5ad280cecfd8ea97c2216bc58002ca_1603208705.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3588110\/\u0631\u06cc\u0646\u06af-\u0644\u0627\u06cc\u062a-\u0645\u062f\u0644-dx-260","rating":{"rate":77.4,"count":273},"price":3337000},{"id":3593269,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc"],"supply_category":["AV","\u062f\u0648\u0631\u0628\u06cc\u0646"],"name":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc \u0686\u0627\u067e \u0633\u0631\u06cc\u0639 \u0641\u0648\u062c\u06cc \u0641\u06cc\u0644\u0645 \u0645\u062f\u0644 Instax Mini 9 Clear","brand":"Fujifilm","category":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc","category_id":48,"price_detail":{"selling_price":15900000,"discount_percent":0},"position":4,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":11791023,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/3f9d7c00f7ba8e692c34643cfe8cd17e81f3d286_1603281520.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3593269\/\u062f\u0648\u0631\u0628\u06cc\u0646-\u0639\u06a9\u0627\u0633\u06cc-\u0686\u0627\u067e-\u0633\u0631\u06cc\u0639-\u0641\u0648\u062c\u06cc-\u0641\u06cc\u0644\u0645-\u0645\u062f\u0644-instax-mini-9-clear","rating":{"rate":87.2,"count":22},"price":15900000},{"id":98691,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc"],"supply_category":["AV","\u062f\u0648\u0631\u0628\u06cc\u0646"],"name":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 \u0646\u06cc\u06a9\u0648\u0646 \u0645\u062f\u0644 D810 \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u0644\u0646\u0632 24-120 \u0645\u06cc\u0644\u06cc \u0645\u062a\u0631 F\/4G VR","brand":"Nikon","category":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc","category_id":48,"price_detail":{"selling_price":499900000,"discount_percent":15},"position":5,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":8277340,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/370064.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-98691\/\u062f\u0648\u0631\u0628\u06cc\u0646-\u062f\u06cc\u062c\u06cc\u062a\u0627\u0644-\u0646\u06cc\u06a9\u0648\u0646-\u0645\u062f\u0644-d810-\u0628\u0647-\u0647\u0645\u0631\u0627\u0647-\u0644\u0646\u0632-24-120-\u0645\u06cc\u0644\u06cc-\u0645\u062a\u0631-f4g-vr","rating":{"rate":20,"count":1},"price":499900000},{"id":1856080,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc"],"supply_category":["AV","\u062f\u0648\u0631\u0628\u06cc\u0646"],"name":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 \u06a9\u0627\u0646\u0646 \u0645\u062f\u0644 EOS 2000D \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u0644\u0646\u0632 18-55 \u0645\u06cc\u0644\u06cc \u0645\u062a\u0631 DC III","brand":"Canon","category":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc","category_id":48,"price_detail":{"selling_price":98900000,"discount_percent":0},"position":6,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":11610763,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/112439699.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-1856080\/\u062f\u0648\u0631\u0628\u06cc\u0646-\u062f\u06cc\u062c\u06cc\u062a\u0627\u0644-\u06a9\u0627\u0646\u0646-\u0645\u062f\u0644-eos-2000d-\u0628\u0647-\u0647\u0645\u0631\u0627\u0647-\u0644\u0646\u0632-18-55-\u0645\u06cc\u0644\u06cc-\u0645\u062a\u0631-dc-iii","rating":{"rate":87.8,"count":57},"price":98900000},{"id":3108356,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0622\u062a\u0644\u06cc\u0647 \u0648 \u0646\u0648\u0631\u067e\u0631\u062f\u0627\u0632\u06cc","\u0641\u0648\u0646 (\u067e\u0631\u062f\u0647)"],"supply_category":["AV","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646"],"name":"\u0641\u0648\u0646 \u0639\u06a9\u0627\u0633\u06cc \u0645\u062f\u0644 non woven \u06a9\u062f 2.5-1.5","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u0641\u0648\u0646 (\u067e\u0631\u062f\u0647)","category_id":129,"price_detail":{"selling_price":900000,"discount_percent":0},"position":7,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":10135493,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/f0c72e2bc7b85406689fadf9ee39579b2b9d0581_1595098399.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3108356\/\u0641\u0648\u0646-\u0639\u06a9\u0627\u0633\u06cc-\u0645\u062f\u0644-non-woven-\u06a9\u062f-25-15","rating":{"rate":63.6,"count":328},"price":900000},{"id":3339128,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0622\u062a\u0644\u06cc\u0647 \u0648 \u0646\u0648\u0631\u067e\u0631\u062f\u0627\u0632\u06cc","\u0646\u0648\u0631 \u062b\u0627\u0628\u062a"],"supply_category":["AV","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646"],"name":"\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u06a9\u062f RFL","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u0646\u0648\u0631 \u062b\u0627\u0628\u062a","category_id":141,"price_detail":{"selling_price":3699900,"discount_percent":0},"position":8,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":14274449,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/57c40f9ffdd81580932362a282879e1e9af81706_1599383854.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3339128\/\u0631\u06cc\u0646\u06af-\u0644\u0627\u06cc\u062a-\u06a9\u062f-rfl","rating":{"rate":77,"count":303},"price":3699900},{"id":4459464,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0622\u062a\u0644\u06cc\u0647 \u0648 \u0646\u0648\u0631\u067e\u0631\u062f\u0627\u0632\u06cc","\u0646\u0648\u0631 \u062b\u0627\u0628\u062a"],"supply_category":["AV","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646"],"name":"\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u0645\u0648\u0646\u0627\u06a9\u0648 \u0645\u062f\u0644 Brilliant-04","brand":"\u0645\u0648\u0646\u0627\u06a9\u0648","category":"\u0646\u0648\u0631 \u062b\u0627\u0628\u062a","category_id":141,"price_detail":{"selling_price":9000000,"discount_percent":0},"position":9,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":14377256,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/c915162bf03179abff86e41286d41485073bfb50_1613297148.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-4459464\/\u0631\u06cc\u0646\u06af-\u0644\u0627\u06cc\u062a-\u0645\u0648\u0646\u0627\u06a9\u0648-\u0645\u062f\u0644-brilliant-04","rating":{"rate":0,"count":0},"price":9000000},{"id":2520810,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc"],"supply_category":["AV","\u062f\u0648\u0631\u0628\u06cc\u0646"],"name":" \u062f\u0648\u0631\u0628\u06cc\u0646 \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 \u0622\u06a9\u0633\u0648\u0646 \u0645\u062f\u0644 AX6062","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc","category_id":48,"price_detail":{"selling_price":3400000,"discount_percent":0},"position":10,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":16225707,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/119579726.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-2520810\/\u062f\u0648\u0631\u0628\u06cc\u0646-\u062f\u06cc\u062c\u06cc\u062a\u0627\u0644-\u0622\u06a9\u0633\u0648\u0646-\u0645\u062f\u0644-ax6062","rating":{"rate":70.6,"count":66},"price":3400000},{"id":3443396,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc","\u0633\u0647 \u067e\u0627\u06cc\u0647 \u0648 \u062a\u06a9 \u067e\u0627\u06cc\u0647"],"supply_category":["AV","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646"],"name":"\u0633\u0647 \u067e\u0627\u06cc\u0647 \u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647 \u062f\u0648\u0631\u0628\u06cc\u0646 \u0645\u062f\u0644 3110","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u0633\u0647 \u067e\u0627\u06cc\u0647 \u0648 \u062a\u06a9 \u067e\u0627\u06cc\u0647","category_id":107,"price_detail":{"selling_price":879800,"discount_percent":0},"position":11,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":13962328,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/bc2396a4ec7873605214b5e72f4d1957341fbddf_1600846422.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3443396\/\u0633\u0647-\u067e\u0627\u06cc\u0647-\u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647-\u062f\u0648\u0631\u0628\u06cc\u0646-\u0645\u062f\u0644-3110","rating":{"rate":68,"count":211},"price":879800},{"id":3190220,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc","\u06a9\u0627\u0631\u062a \u062d\u0627\u0641\u0638\u0647"],"supply_category":["IT","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0630\u062e\u06cc\u0631\u0647 \u0633\u0627\u0632\u06cc \u0627\u0637\u0644\u0627\u0639\u0627\u062a"],"name":"\u06a9\u0627\u0631\u062a \u062d\u0627\u0641\u0638\u0647 microSDXC \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 EVO Plus \u06a9\u0644\u0627\u0633 10 \u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f UHS-I U1 \u0633\u0631\u0639\u062a 100MBps \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u0622\u062f\u0627\u067e\u062a\u0648\u0631 SD","brand":"Samsung","category":"\u06a9\u0627\u0631\u062a \u062d\u0627\u0641\u0638\u0647","category_id":70,"price_detail":{"selling_price":2097000,"discount_percent":0},"position":12,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":10285646,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/97c9bd0b1951cb0ac28439cf40ec5aa3727f2ca4_1596532443.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3190220\/\u06a9\u0627\u0631\u062a-\u062d\u0627\u0641\u0638\u0647-microsdxc-\u0633\u0627\u0645\u0633\u0648\u0646\u06af-\u0645\u062f\u0644-evo-plus-\u06a9\u0644\u0627\u0633-10-\u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f-uhs-i-u1-\u0633\u0631\u0639\u062a-100mbps-\u0638\u0631\u0641\u06cc\u062a-64-\u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a-\u0628\u0647-\u0647\u0645\u0631\u0627\u0647-\u0622\u062f\u0627\u067e\u062a\u0648\u0631-sd","rating":{"rate":86.4,"count":232},"price":2097000},{"id":690710,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u062a\u0644\u0633\u06a9\u0648\u067e"],"supply_category":["AV","\u0627\u0628\u0632\u0627\u0631 \u0639\u0644\u0645\u06cc"],"name":"\u062a\u0644\u0633\u06a9\u0648\u067e \u0634\u06a9\u0633\u062a\u06cc \u0645\u062f\u0644 Celestial Body Accidence","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u062a\u0644\u0633\u06a9\u0648\u067e","category_id":173,"price_detail":{"selling_price":7470000,"discount_percent":0},"position":13,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":15400490,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/3008907.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-690710\/\u062a\u0644\u0633\u06a9\u0648\u067e-\u0634\u06a9\u0633\u062a\u06cc-\u0645\u062f\u0644-celestial-body-accidence","rating":{"rate":54,"count":23},"price":7470000},{"id":4508458,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc","\u06a9\u0627\u0631\u062a \u062d\u0627\u0641\u0638\u0647"],"supply_category":["IT","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0630\u062e\u06cc\u0631\u0647 \u0633\u0627\u0632\u06cc \u0627\u0637\u0644\u0627\u0639\u0627\u062a"],"name":"  \u06a9\u0627\u0631\u062a \u062d\u0627\u0641\u0638\u0647 microSDXC \u0633\u0646 \u062f\u06cc\u0633\u06a9 \u0645\u062f\u0644 Ultra A1 \u06a9\u0644\u0627\u0633 10 \u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f UHS-I \u0633\u0631\u0639\u062a 120MBps \u0638\u0631\u0641\u06cc\u062a 32 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a","brand":"\u0633\u0646 \u062f\u06cc\u0633\u06a9","category":"\u06a9\u0627\u0631\u062a \u062d\u0627\u0641\u0638\u0647","category_id":70,"price_detail":{"selling_price":1095000,"discount_percent":0},"position":14,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":15802155,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/fac1ac32f35ab75f8e3010a47642af94f2abb6f5_1613821674.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-4508458\/\u06a9\u0627\u0631\u062a-\u062d\u0627\u0641\u0638\u0647-microsdxc-\u0633\u0646-\u062f\u06cc\u0633\u06a9-\u0645\u062f\u0644-ultra-a1-\u06a9\u0644\u0627\u0633-10-\u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f-uhs-i-\u0633\u0631\u0639\u062a-120mbps-\u0638\u0631\u0641\u06cc\u062a-32-\u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a","rating":{"rate":84.8,"count":223},"price":1095000},{"id":138649,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc"],"supply_category":["AV","\u062f\u0648\u0631\u0628\u06cc\u0646"],"name":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 \u06a9\u0627\u0646\u0646 \u0645\u062f\u0644  Eos 80D EF S \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u0644\u0646\u0632 18-135 \u0645\u06cc\u0644\u06cc \u0645\u062a\u0631 f\/3.5-5.6 IS USM","brand":"Canon","category":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc","category_id":48,"price_detail":{"selling_price":279900000,"discount_percent":0},"position":15,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":11615640,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/656887.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-138649\/\u062f\u0648\u0631\u0628\u06cc\u0646-\u062f\u06cc\u062c\u06cc\u062a\u0627\u0644-\u06a9\u0627\u0646\u0646-\u0645\u062f\u0644-eos-80d-ef-s-\u0628\u0647-\u0647\u0645\u0631\u0627\u0647-\u0644\u0646\u0632-18-135-\u0645\u06cc\u0644\u06cc-\u0645\u062a\u0631-f35-56-is-usm","rating":{"rate":80,"count":44},"price":279900000},{"id":3133047,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u062a\u0644\u0633\u06a9\u0648\u067e"],"supply_category":["AV","\u0627\u0628\u0632\u0627\u0631 \u0639\u0644\u0645\u06cc"],"name":"\u062a\u0644\u0633\u06a9\u0648\u067e \u0645\u062f\u0644 c 2105","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u062a\u0644\u0633\u06a9\u0648\u067e","category_id":173,"price_detail":{"selling_price":3900000,"discount_percent":0},"position":16,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":15968165,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/2651146238e7f09cc75dad222ec54e119b613449_1595494091.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3133047\/\u062a\u0644\u0633\u06a9\u0648\u067e-\u0645\u062f\u0644-c-2105","rating":{"rate":56.6,"count":23},"price":3900000},{"id":3197248,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0622\u062a\u0644\u06cc\u0647 \u0648 \u0646\u0648\u0631\u067e\u0631\u062f\u0627\u0632\u06cc","\u0646\u0648\u0631 \u062b\u0627\u0628\u062a"],"supply_category":["AV","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646"],"name":"\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u0645\u062f\u0644 M26","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u0646\u0648\u0631 \u062b\u0627\u0628\u062a","category_id":141,"price_detail":{"selling_price":1770000,"discount_percent":9},"position":17,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":12376896,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/d00c207943db9ba418d48559be00aeef6b54e085_1596628029.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3197248\/\u0631\u06cc\u0646\u06af-\u0644\u0627\u06cc\u062a-\u0645\u062f\u0644-m26","rating":{"rate":78.8,"count":78},"price":1770000},{"id":949493,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc"],"supply_category":["AV","\u062f\u0648\u0631\u0628\u06cc\u0646"],"name":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 \u0646\u06cc\u06a9\u0648\u0646 \u0645\u062f\u0644 D3500 \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u0644\u0646\u0632 18-55 \u0645\u06cc\u0644\u06cc \u0645\u062a\u0631 VR AF-P","brand":"Nikon","category":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc","category_id":48,"price_detail":{"selling_price":129950000,"discount_percent":0},"position":18,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":17103005,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/4430428.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-949493\/\u062f\u0648\u0631\u0628\u06cc\u0646-\u062f\u06cc\u062c\u06cc\u062a\u0627\u0644-\u0646\u06cc\u06a9\u0648\u0646-\u0645\u062f\u0644-d3500-\u0628\u0647-\u0647\u0645\u0631\u0627\u0647-\u0644\u0646\u0632-18-55-\u0645\u06cc\u0644\u06cc-\u0645\u062a\u0631-vr-af-p","rating":{"rate":79.4,"count":32},"price":129950000},{"id":3557656,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc","\u0633\u0647 \u067e\u0627\u06cc\u0647 \u0648 \u062a\u06a9 \u067e\u0627\u06cc\u0647"],"supply_category":["AV","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646"],"name":"\u0633\u0647 \u067e\u0627\u06cc\u0647 \u062f\u0648\u0631\u0628\u06cc\u0646 \u0646\u0633\u062a \u0645\u062f\u0644 NT-510 \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u06af\u06cc\u0631\u0647 \u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647 \u0645\u0648\u0628\u0627\u06cc\u0644","brand":"NEST","category":"\u0633\u0647 \u067e\u0627\u06cc\u0647 \u0648 \u062a\u06a9 \u067e\u0627\u06cc\u0647","category_id":107,"price_detail":{"selling_price":3260000,"discount_percent":0},"position":19,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":13855815,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/4e93031e8ebffb66de70506d83817925227d8a04_1602683521.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3557656\/\u0633\u0647-\u067e\u0627\u06cc\u0647-\u062f\u0648\u0631\u0628\u06cc\u0646-\u0646\u0633\u062a-\u0645\u062f\u0644-nt-510-\u0628\u0647-\u0647\u0645\u0631\u0627\u0647-\u06af\u06cc\u0631\u0647-\u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647-\u0645\u0648\u0628\u0627\u06cc\u0644","rating":{"rate":82.6,"count":115},"price":3260000},{"id":3692356,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0622\u062a\u0644\u06cc\u0647 \u0648 \u0646\u0648\u0631\u067e\u0631\u062f\u0627\u0632\u06cc","\u0646\u0648\u0631 \u062b\u0627\u0628\u062a"],"supply_category":["AV","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646"],"name":"\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u0645\u062f\u0644 FRL-S31","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u0646\u0648\u0631 \u062b\u0627\u0628\u062a","category_id":141,"price_detail":{"selling_price":6990000,"discount_percent":36},"position":20,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":11956757,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/3dfdb45db91d8a224abb4dd88a3c448ceb79c094_1605018163.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3692356\/\u0631\u06cc\u0646\u06af-\u0644\u0627\u06cc\u062a-\u0645\u062f\u0644-frl-s31","rating":{"rate":67,"count":31},"price":6990000},{"id":4370886,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0622\u062a\u0644\u06cc\u0647 \u0648 \u0646\u0648\u0631\u067e\u0631\u062f\u0627\u0632\u06cc","\u0646\u0648\u0631 \u062b\u0627\u0628\u062a"],"supply_category":["AV","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646"],"name":"\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u0645\u062f\u0644 dimmable","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u0646\u0648\u0631 \u062b\u0627\u0628\u062a","category_id":141,"price_detail":{"selling_price":8047500,"discount_percent":13},"position":21,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":15932181,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/d7e663c0f4bd41bb5a81c15693baad947b049660_1612266565.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-4370886\/\u0631\u06cc\u0646\u06af-\u0644\u0627\u06cc\u062a-\u0645\u062f\u0644-dimmable","rating":{"rate":84,"count":50},"price":8047500},{"id":1925099,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u062f\u0648\u0631\u0628\u06cc\u0646 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc"],"supply_category":["AV","\u062f\u0648\u0631\u0628\u06cc\u0646"],"name":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc \u0648\u0631\u0632\u0634\u06cc \u0645\u062f\u0644 SQ11","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc","category_id":49,"price_detail":{"selling_price":1320000,"discount_percent":50},"position":22,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":6554332,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/112813529.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-1925099\/\u062f\u0648\u0631\u0628\u06cc\u0646-\u0641\u06cc\u0644\u0645-\u0628\u0631\u062f\u0627\u0631\u06cc-\u0648\u0631\u0632\u0634\u06cc-\u0645\u062f\u0644-sq11","rating":{"rate":53.8,"count":189},"price":1320000},{"id":3438922,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u062a\u0644\u0633\u06a9\u0648\u067e"],"supply_category":["AV","\u0627\u0628\u0632\u0627\u0631 \u0639\u0644\u0645\u06cc"],"name":"\u062a\u0644\u0633\u06a9\u0648\u067e \u0627\u06a9\u06cc\u0648\u062a\u0631 \u0645\u062f\u0644 Maksy 60","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u062a\u0644\u0633\u06a9\u0648\u067e","category_id":173,"price_detail":{"selling_price":43000000,"discount_percent":4},"position":23,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":11587529,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/38c8e631b91ad8903969c617da6409f1e212f1c0_1600771989.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3438922\/\u062a\u0644\u0633\u06a9\u0648\u067e-\u0627\u06a9\u06cc\u0648\u062a\u0631-\u0645\u062f\u0644-maksy-60","rating":{"rate":65,"count":4},"price":43000000},{"id":191819,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc","\u0628\u0627\u062a\u0631\u06cc\u060c \u0634\u0627\u0631\u0698\u0631 \u0648 \u0645\u062a\u0639\u0644\u0642\u0627\u062a","\u0628\u0627\u062a\u0631\u06cc \u0648 \u0634\u0627\u0631\u0698\u0631 \u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f","\u0628\u0627\u062a\u0631\u06cc \u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f"],"supply_category":["AC","\u0628\u0627\u062a\u0631\u06cc \u0648 \u0634\u0627\u0631\u0698\u0631 \u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f"],"name":"\u0628\u0627\u062a\u0631\u06cc \u0642\u0644\u0645\u06cc \u0648 \u0646\u06cc\u0645 \u0642\u0644\u0645\u06cc \u06a9\u0645\u0644\u06cc\u0648\u0646 \u0645\u062f\u0644 Super Heavy Duty \u0628\u0633\u062a\u0647 8 \u0639\u062f\u062f\u06cc","brand":"\u06a9\u0645\u0644\u06cc\u0648\u0646","category":"\u0628\u0627\u062a\u0631\u06cc \u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f","category_id":5880,"price_detail":{"selling_price":199800,"discount_percent":0},"position":24,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":15516049,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/613266.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-191819\/\u0628\u0627\u062a\u0631\u06cc-\u0642\u0644\u0645\u06cc-\u0648-\u0646\u06cc\u0645-\u0642\u0644\u0645\u06cc-\u06a9\u0645\u0644\u06cc\u0648\u0646-\u0645\u062f\u0644-super-heavy-duty-\u0628\u0633\u062a\u0647-8-\u0639\u062f\u062f\u06cc","rating":{"rate":83.8,"count":7337},"price":199800},{"id":222962,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc"],"supply_category":["AV","\u062f\u0648\u0631\u0628\u06cc\u0646"],"name":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 \u06a9\u0627\u0646\u0646 \u0645\u062f\u0644 EOS 7D Mark II \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u0644\u0646\u0632 18-135 \u0645\u06cc\u0644\u06cc \u0645\u062a\u0631 IS USM","brand":"Canon","category":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc","category_id":48,"price_detail":{"selling_price":356000000,"discount_percent":17},"position":25,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":8299867,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/674360.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-222962\/\u062f\u0648\u0631\u0628\u06cc\u0646-\u062f\u06cc\u062c\u06cc\u062a\u0627\u0644-\u06a9\u0627\u0646\u0646-\u0645\u062f\u0644-eos-7d-mark-ii-\u0628\u0647-\u0647\u0645\u0631\u0627\u0647-\u0644\u0646\u0632-18-135-\u0645\u06cc\u0644\u06cc-\u0645\u062a\u0631-is-usm","rating":{"rate":55,"count":4},"price":356000000},{"id":203383,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc"],"supply_category":["AV","\u062f\u0648\u0631\u0628\u06cc\u0646"],"name":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 \u06a9\u0627\u0646\u0646 \u0645\u062f\u0644 SX620 HS","brand":"Canon","category":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc","category_id":48,"price_detail":{"selling_price":63000000,"discount_percent":0},"position":26,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":15595047,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/4852749.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-203383\/\u062f\u0648\u0631\u0628\u06cc\u0646-\u062f\u06cc\u062c\u06cc\u062a\u0627\u0644-\u06a9\u0627\u0646\u0646-\u0645\u062f\u0644-sx620-hs","rating":{"rate":80.8,"count":25},"price":63000000},{"id":4565123,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc","\u06a9\u0627\u0631\u062a \u062d\u0627\u0641\u0638\u0647"],"supply_category":["IT","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0630\u062e\u06cc\u0631\u0647 \u0633\u0627\u0632\u06cc \u0627\u0637\u0644\u0627\u0639\u0627\u062a"],"name":"\u06a9\u0627\u0631\u062a \u062d\u0627\u0641\u0638\u0647 microSDXC \u0633\u0646 \u062f\u06cc\u0633\u06a9 \u0645\u062f\u0644 Ultra A1 \u06a9\u0644\u0627\u0633 10 \u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f UHS-I \u0633\u0631\u0639\u062a 120MBps \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a","brand":"\u0633\u0646 \u062f\u06cc\u0633\u06a9","category":"\u06a9\u0627\u0631\u062a \u062d\u0627\u0641\u0638\u0647","category_id":70,"price_detail":{"selling_price":1980000,"discount_percent":0},"position":27,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":15728701,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/12cd50c1ee626d879b2fa5f259a6133c58bd8fb6_1614417436.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-4565123\/\u06a9\u0627\u0631\u062a-\u062d\u0627\u0641\u0638\u0647-microsdxc-\u0633\u0646-\u062f\u06cc\u0633\u06a9-\u0645\u062f\u0644-ultra-a1-\u06a9\u0644\u0627\u0633-10-\u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f-uhs-i-\u0633\u0631\u0639\u062a-120mbps-\u0638\u0631\u0641\u06cc\u062a-64-\u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a","rating":{"rate":85.2,"count":175},"price":1980000},{"id":587646,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc"],"supply_category":["AV","\u062f\u0648\u0631\u0628\u06cc\u0646"],"name":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 \u0628\u062f\u0648\u0646 \u0622\u06cc\u0646\u0647 \u06a9\u0627\u0646\u0646 \u0645\u062f\u0644 EOS M50  \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u0644\u0646\u0632 15-45 \u0645\u06cc\u0644\u06cc \u0645\u062a\u0631","brand":"Canon","category":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc","category_id":48,"price_detail":{"selling_price":149950000,"discount_percent":0},"position":28,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":15685470,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/2182407.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-587646\/\u062f\u0648\u0631\u0628\u06cc\u0646-\u062f\u06cc\u062c\u06cc\u062a\u0627\u0644-\u0628\u062f\u0648\u0646-\u0622\u06cc\u0646\u0647-\u06a9\u0627\u0646\u0646-\u0645\u062f\u0644-eos-m50-\u0628\u0647-\u0647\u0645\u0631\u0627\u0647-\u0644\u0646\u0632-15-45-\u0645\u06cc\u0644\u06cc-\u0645\u062a\u0631","rating":{"rate":93.8,"count":13},"price":149950000},{"id":3687426,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0622\u062a\u0644\u06cc\u0647 \u0648 \u0646\u0648\u0631\u067e\u0631\u062f\u0627\u0632\u06cc","\u0646\u0648\u0631 \u062b\u0627\u0628\u062a"],"supply_category":["AV","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646"],"name":"\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u0645\u062f\u0644 FRL-160r","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u0646\u0648\u0631 \u062b\u0627\u0628\u062a","category_id":141,"price_detail":{"selling_price":1990000,"discount_percent":79},"position":29,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":11947342,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/3a3e880695474f1c9fdcff708dc9d47ef2ab2ae2_1604992656.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3687426\/\u0631\u06cc\u0646\u06af-\u0644\u0627\u06cc\u062a-\u0645\u062f\u0644-frl-160r","rating":{"rate":77.6,"count":32},"price":1990000},{"id":4411537,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0622\u062a\u0644\u06cc\u0647 \u0648 \u0646\u0648\u0631\u067e\u0631\u062f\u0627\u0632\u06cc","\u0646\u0648\u0631 \u062b\u0627\u0628\u062a"],"supply_category":["AV","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646"],"name":"\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u0645\u062f\u0644 ZT-260","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u0646\u0648\u0631 \u062b\u0627\u0628\u062a","category_id":141,"price_detail":{"selling_price":3699200,"discount_percent":0},"position":30,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":18321361,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/69a671a0c64ec4771769ed36d8925c9cad09a6a9_1612691558.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-4411537\/\u0631\u06cc\u0646\u06af-\u0644\u0627\u06cc\u062a-\u0645\u062f\u0644-zt-260","rating":{"rate":70.6,"count":38},"price":3699200},{"id":3375458,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc","\u0633\u0647 \u067e\u0627\u06cc\u0647 \u0648 \u062a\u06a9 \u067e\u0627\u06cc\u0647"],"supply_category":["AV","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646"],"name":"\u0633\u0647 \u067e\u0627\u06cc\u0647 \u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647 \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0627\u0628\u0631 \u0645\u062f\u0644 ABR-3120","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u0633\u0647 \u067e\u0627\u06cc\u0647 \u0648 \u062a\u06a9 \u067e\u0627\u06cc\u0647","category_id":107,"price_detail":{"selling_price":1610000,"discount_percent":3},"position":31,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":17330851,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/80b337c2c7e6893178d20e49e7659029fecac21d_1601878773.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3375458\/\u0633\u0647-\u067e\u0627\u06cc\u0647-\u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647-\u06af\u0648\u0634\u06cc-\u0645\u0648\u0628\u0627\u06cc\u0644-\u0627\u0628\u0631-\u0645\u062f\u0644-abr-3120","rating":{"rate":63.4,"count":129},"price":1610000},{"id":3869816,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc","\u0633\u0647 \u067e\u0627\u06cc\u0647 \u0648 \u062a\u06a9 \u067e\u0627\u06cc\u0647"],"supply_category":["AV","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646"],"name":"\u0633\u0647 \u067e\u0627\u06cc\u0647 \u062f\u0648\u0631\u0628\u06cc\u0646 \u0645\u062f\u0644 3110","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u0633\u0647 \u067e\u0627\u06cc\u0647 \u0648 \u062a\u06a9 \u067e\u0627\u06cc\u0647","category_id":107,"price_detail":{"selling_price":950000,"discount_percent":12},"position":32,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":15751489,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/fffb6ec266d50a8c8e35e6fae02dd70d8a8f93f0_1606699822.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3869816\/\u0633\u0647-\u067e\u0627\u06cc\u0647-\u062f\u0648\u0631\u0628\u06cc\u0646-\u0648\u0645\u0648\u0628\u0627\u06cc\u0644-\u0645\u062f\u0644-3110","rating":{"rate":68.6,"count":58},"price":950000},{"id":4370591,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc","\u062a\u062c\u0647\u06cc\u0632\u0627\u062a \u0622\u062a\u0644\u06cc\u0647 \u0648 \u0646\u0648\u0631\u067e\u0631\u062f\u0627\u0632\u06cc","\u0646\u0648\u0631 \u062b\u0627\u0628\u062a"],"supply_category":["AV","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u062f\u0648\u0631\u0628\u06cc\u0646"],"name":"\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u0645\u062f\u0644 live s","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u0646\u0648\u0631 \u062b\u0627\u0628\u062a","category_id":141,"price_detail":{"selling_price":1550000,"discount_percent":0},"position":33,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":15758701,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/72939d7db990dbd2cda91af2714bc19c006f5acd_1612190828.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-4370591\/\u0631\u06cc\u0646\u06af-\u0644\u0627\u06cc\u062a-\u0645\u062f\u0644-live-s","rating":{"rate":82.6,"count":45},"price":1550000},{"id":3410241,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u062f\u0648\u0631\u0628\u06cc\u0646 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc"],"supply_category":["AV","\u062f\u0648\u0631\u0628\u06cc\u0646"],"name":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc \u0648\u0631\u0632\u0634\u06cc \u06af\u0648\u067e\u0631\u0648 \u0645\u062f\u0644 Hero 9 Black","brand":"\u06af\u0648\u067e\u0631\u0648","category":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc","category_id":49,"price_detail":{"selling_price":109535000,"discount_percent":0},"position":34,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":13637212,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/14ee4d2c1af7563e4fc856f91c6fa5a902401531_1601103882.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3410241\/\u062f\u0648\u0631\u0628\u06cc\u0646-\u0641\u06cc\u0644\u0645-\u0628\u0631\u062f\u0627\u0631\u06cc-\u0648\u0631\u0632\u0634\u06cc-\u06af\u0648\u067e\u0631\u0648-\u0645\u062f\u0644-hero-9-black","rating":{"rate":90,"count":4},"price":109535000},{"id":4442903,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0639\u06a9\u0627\u0633\u06cc \u0648 \u0641\u06cc\u0644\u0645 \u0628\u0631\u062f\u0627\u0631\u06cc","\u0628\u0627\u062a\u0631\u06cc\u060c \u0634\u0627\u0631\u0698\u0631 \u0648 \u0645\u062a\u0639\u0644\u0642\u0627\u062a","\u0628\u0627\u062a\u0631\u06cc \u0648 \u0634\u0627\u0631\u0698\u0631 \u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f","\u0628\u0627\u062a\u0631\u06cc \u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f"],"supply_category":["AC","\u0628\u0627\u062a\u0631\u06cc \u0648 \u0634\u0627\u0631\u0698\u0631 \u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f"],"name":"\u0628\u0627\u062a\u0631\u06cc \u0646\u06cc\u0645 \u0642\u0644\u0645\u06cc \u067e\u06cc\u06a9\u0633\u0644 \u0645\u062f\u0644 Super Heavy Duty \u0628\u0633\u062a\u0647 4 \u0639\u062f\u062f\u06cc","brand":"\u067e\u06cc\u200c\u06a9\u06cc \u0633\u0644","category":"\u0628\u0627\u062a\u0631\u06cc \u0627\u0633\u062a\u0627\u0646\u062f\u0627\u0631\u062f","category_id":5880,"price_detail":{"selling_price":129000,"discount_percent":77},"position":35,"status":"marketable","multi_color":false,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":14304891,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/681d6975321e337fcb66703e5e68df64f2e21fb2_1613053970.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-4442903\/\u0628\u0627\u062a\u0631\u06cc-\u0646\u06cc\u0645-\u0642\u0644\u0645\u06cc-\u067e\u06cc\u06a9\u0633\u0644-\u0645\u062f\u0644-super-heavy-duty-\u0628\u0633\u062a\u0647-4-\u0639\u062f\u062f\u06cc","rating":{"rate":82.8,"count":665},"price":129000},{"id":3400718,"site_category":["\u06a9\u0627\u0644\u0627\u06cc \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644","\u062f\u0648\u0631\u0628\u06cc\u0646","\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc"],"supply_category":["AV","\u062f\u0648\u0631\u0628\u06cc\u0646"],"name":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u062f\u06cc\u062c\u06cc\u062a\u0627\u0644 \u0645\u062f\u0644 mn6077","brand":"\u0645\u062a\u0641\u0631\u0642\u0647","category":"\u062f\u0648\u0631\u0628\u06cc\u0646 \u0639\u06a9\u0627\u0633\u06cc","category_id":48,"price_detail":{"selling_price":6970000,"discount_percent":15},"position":36,"status":"marketable","multi_color":true,"multi_size":false,"multi_warranty":true,"multi_seller":true,"buy_box_winner":11045357,"image_src":"https:\/\/dkstatics-public.digikala.com\/digikala-products\/5e807a3dab0ec90bd20a82556351ada8fa71b239_1600170684.jpg?x-oss-process=image\/resize,m_lfit,h_600,w_600\/quality,q_90","product_url":"https:\/\/digikala.com\/product\/dkp-3400718\/\u062f\u0648\u0631\u0628\u06cc\u0646-\u062f\u06cc\u062c\u06cc\u062a\u0627\u0644-\u0645\u062f\u0644-mn6077","rating":{"rate":61.6,"count":12},"price":6970000}];
    var page_search_url = null;
    var sntracker_search_data = {"source":1,"page":1,"pages":277,"foundItems":20796,"query":"","bannerId":null,"categoryId":6,"attributes":{"sort_by":4,"has_selling_stock":false,"has_ready_to_shipment":0},"products":[{"product_id":260095,"category_id":48,"brand_id":15,"is_sponsored":false,"selling_price":15900000},{"product_id":777295,"category_id":48,"brand_id":12,"is_sponsored":false,"selling_price":92500000},{"product_id":3588110,"category_id":141,"brand_id":719,"is_sponsored":false,"selling_price":3337000},{"product_id":3593269,"category_id":48,"brand_id":15,"is_sponsored":false,"selling_price":15900000},{"product_id":98691,"category_id":48,"brand_id":13,"is_sponsored":false,"selling_price":499900000},{"product_id":1856080,"category_id":48,"brand_id":12,"is_sponsored":false,"selling_price":98900000},{"product_id":3108356,"category_id":129,"brand_id":719,"is_sponsored":false,"selling_price":900000},{"product_id":3339128,"category_id":141,"brand_id":719,"is_sponsored":false,"selling_price":3699900},{"product_id":4459464,"category_id":141,"brand_id":16102,"is_sponsored":false,"selling_price":9000000},{"product_id":2520810,"category_id":48,"brand_id":719,"is_sponsored":false,"selling_price":3400000},{"product_id":3443396,"category_id":107,"brand_id":719,"is_sponsored":false,"selling_price":879800},{"product_id":3190220,"category_id":70,"brand_id":18,"is_sponsored":false,"selling_price":2097000},{"product_id":690710,"category_id":173,"brand_id":719,"is_sponsored":false,"selling_price":7470000},{"product_id":4508458,"category_id":70,"brand_id":63,"is_sponsored":false,"selling_price":1095000},{"product_id":138649,"category_id":48,"brand_id":12,"is_sponsored":false,"selling_price":279900000},{"product_id":3133047,"category_id":173,"brand_id":719,"is_sponsored":false,"selling_price":3900000},{"product_id":3197248,"category_id":141,"brand_id":719,"is_sponsored":false,"selling_price":1770000},{"product_id":949493,"category_id":48,"brand_id":13,"is_sponsored":false,"selling_price":129950000},{"product_id":3557656,"category_id":107,"brand_id":9585,"is_sponsored":false,"selling_price":3260000},{"product_id":3692356,"category_id":141,"brand_id":719,"is_sponsored":false,"selling_price":6990000},{"product_id":4370886,"category_id":141,"brand_id":719,"is_sponsored":false,"selling_price":8047500},{"product_id":1925099,"category_id":49,"brand_id":719,"is_sponsored":false,"selling_price":1320000},{"product_id":3438922,"category_id":173,"brand_id":719,"is_sponsored":false,"selling_price":43000000},{"product_id":191819,"category_id":5880,"brand_id":170,"is_sponsored":false,"selling_price":199800},{"product_id":222962,"category_id":48,"brand_id":12,"is_sponsored":false,"selling_price":356000000},{"product_id":203383,"category_id":48,"brand_id":12,"is_sponsored":false,"selling_price":63000000},{"product_id":4565123,"category_id":70,"brand_id":63,"is_sponsored":false,"selling_price":1980000},{"product_id":587646,"category_id":48,"brand_id":12,"is_sponsored":false,"selling_price":149950000},{"product_id":3687426,"category_id":141,"brand_id":719,"is_sponsored":false,"selling_price":1990000},{"product_id":4411537,"category_id":141,"brand_id":719,"is_sponsored":false,"selling_price":3699200},{"product_id":3375458,"category_id":107,"brand_id":719,"is_sponsored":false,"selling_price":1610000},{"product_id":3869816,"category_id":107,"brand_id":719,"is_sponsored":false,"selling_price":950000},{"product_id":4370591,"category_id":141,"brand_id":719,"is_sponsored":false,"selling_price":1550000},{"product_id":3410241,"category_id":49,"brand_id":76,"is_sponsored":false,"selling_price":109535000},{"product_id":4442903,"category_id":5880,"brand_id":19429,"is_sponsored":false,"selling_price":129000},{"product_id":3400718,"category_id":48,"brand_id":719,"is_sponsored":false,"selling_price":6970000}],"sponsored_products":[],"searchPhase":null,"searchModelName":null,"searchModelVersion":null};
    var categoryId = 6;
    var nowTimeInUTC = "2021-07-13 16:17:15";
    var isAnanasFriendly = true;
    var userId = 9735394;
    var adroRCActivation = true;
    var loginRegisterUrlWithBack = "\/users\/login-register\/?_back=https:\/\/www.digikala.com\/search\/category-camera\/";
    var isNewCustomer = false;
    var digiclubLuckyDrawEndTime = "2021-09-29 15:30:32";
    var activateUrl = "\/digiclub\/activate\/";
  </script>

  <script src="{{ asset('assets/new/js/sentry.js') }}"></script>
  <script src="{{ asset('assets/new/js/url2.min.js') }}"></script>
  {{--  <script src="https://www.digikala.com/static/merged/6c266338.js"></script>--}}


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
{{--{{ dd($categ  ory->name) }}--}}
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

          @if($categories->where('parent_id', $cat->id)->count())
          <div class="o-box c-filter-shortcut">
            <div class="c-filter-shortcut__list-container">
              <div class="c-filter-shortcut__list-title">دسته‌بندی‌ها</div>
              <div class="c-filter-shortcut__list c-filter-shortcut__list--category">
                <?php $i = 1; ?>
                @foreach($categories->where('parent_id', $cat->id) as $cat)
                  <a href="{{ route('front.categoryPage', $cat->slug) }}"
                     class="c-filter-shortcut__category-item js-shortcut-category ">
                    <div class="c-filter-shortcut__category-image">
                      @if ($cat->media()->exists())
                        <img src="{{ (($cat->media()->exists())? $site_url . '/' .$cat->media()->first()->path . '/' . $cat->media()->first()->name : '') }}?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60">
                      @endif
                    </div>
                    <div class="c-filter-shortcut__category-title">{{ $cat->name }}</div>
                  </a>
                  @if ($i ==  7)
                    @break
                  @endif
                  <?php $i++; ?>
                @endforeach

                @if ($categories->where('parent_id', $cat->id)->count() > 7)
                  <div
                    class="c-filter-shortcut__category-item c-filter-shortcut__category-item--show-more js-show-more-categories">
                    <span class="c-filter-shortcut__show-more-count">{{ persianNum($categories->where('parent_id', $cat->id)->count()-7) }} +</span>
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

{{--                          @foreach($list as $listItem)--}}
{{--                          <ul class="c-catalog__list--depth js-catalog-list" style="max-height: unset; height: 250px;">--}}
{{--                            <li class="c-catalog__cat-item ">--}}
{{--                              <span class="c-catalog__cat-item c-catalog__cat-item--arrow-left">--}}
{{--                                <a class="c-catalog__link " href="/search/category-electronic-devices/">کالای دیجیتال</a>--}}
{{--                              </span>--}}
{{--                              @if (is_array($listItem))--}}
{{--                                <div class=" show-more  ">--}}

{{--                                </div>--}}
{{--                              @endif--}}
{{--                            </li>--}}
{{--                          </ul>--}}
{{--                          @endforeach--}}
{{--                          @while()--}}
{{--                            @include('front::layouts.category-menu')--}}
{{--                          @endwhile--}}

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
                        <li class="">
                          <a href="javascript:" data-sort="newest"  class="is-active">جدیدترین</a>
                        </li>
                        <li class="">
                          <a href="javascript:" data-sort="best_selling">پرفروش‌ترین‌</a>
                        </li>
                        <li class="">
                          <a href="javascript:" data-sort="popular">محبوب‌ترین</a>
                        </li>
                        <li class="">
                          <a href="javascript:" data-sort="cheapest">ارزان‌ترین</a>
                        </li>
                        <li class="">
                          <a href="javascript:" data-sort="most_expensive">گران‌ترین</a>
                        </li>
                      </ul>
                    </div>
                    <ul class="c-listing__items js-plp-products-list">

                      @foreach($cat->products as $product)
                        <li>
                          <div class="c-product-box c-promotion-box js-product-box has-more is-plp">
                            <div class="c-product-box__add-to-wish-list js-ab-add-to-wish-list u-hidden"></div>
                            <a class="c-product__seller-details--item-grid-link js-ab-plp-product-seller-link"
                               href="https://www.digikala.com/seller/A3X3A/"></a>
                            <a class="c-product-box__img c-promotion-box__image js-url js-product-item js-product-url"
                               target="_blank" href="/product/dkp-4849334/هندزفری-اچ-اند-ام-مدل-g8">
                              <div style="" class="c-promotion__badge c-promotion__badge--special-sale ">
                                فروش ویژه
                              </div>
                              <div class="c-promotion__main-img-badges-container"></div>
                              @if (!is_null(g_product_image_main_src($product)))
                                <img src="{{ g_product_image_main_src($product) }}?x-oss-process=image/resize,m_lfit,h_600,w_600/quality,q_90" alt="{{ $product->title_fa }}">
                              @else
                                <img src="" alt="{{ $product->title_fa }}">
                              @endif
                            </a>
                            <div class="c-product-box__content">
                              <div class="c-product-box__content--row">
                                <div class="c-product-box__title">
                                  <a class="js-product-url" href="/product/dkp-4849334/هندزفری-اچ-اند-ام-مدل-g8" target="_blank">{{ $product->title_fa }}</a>
                                </div>
                                <div class="c-product-box__title-en"></div>
                                @if (getProductVariantType($product) == 'color')
                                  <ul class="c-product-box__variants" data-title="رنگ ها:" data-more="+">
{{--                                    @foreach( as ) --}}
                                      <li class="js-variant">
                                        <span class="c-variant c-variant--color" style="background-color: #FFFFFF;border: 1px solid rgb(233, 233, 233);"></span>
                                      </li>
{{--                                    @endforeach--}}
                                  </ul>
                                @endif
                              </div>
                              <div class="c-product-box__rate-status">
                                <div class="c-product-box__engagement-rating">
                                  ۳.۴
                                  <span class="c-product-box__engagement-rating-num">
                                  (۱۴۵)
                                </span>
                                </div>

                              </div>
                              <div class="c-product-box__row c-product-box__row--price">
                                <div class="c-price">
                                  <div class="c-price__value c-price__value--plp ">
                                    <del>۲۹۹,۰۰۰</del>
                                    <div class="c-price__discount-oval">
                                      <span>٪۵۰</span>
                                    </div>
                                    <div class="c-price__value-wrapper">
                                      {{ product_price($product) }}
                                      <span class="c-price__currency">تومان</span>
                                    </div>
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
                      @endforeach

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
        </div>
        @if (!is_null($cat->description) && $cat->description !== '')
          <article class="c-category-desc c-expandable-text c-expandable-text--shadowed js-expandable-text-container collapsed">
            <div class="c-expandable-text__text js-expandable-text">
              <p>
                <strong>خرید انواع {{ $cat->name }} از {{ $fa_store_name }}&nbsp;</strong>
              </p>
              <p>
                {{ $cat->description }}
              </p>

              <span class="c-expandable-text__expand-btn c-expandable-text__expand-btn--shadowed js-expand-btn"
                    data-collapsed="نمایش بیشتر" data-expanded="بستن"></span>
            </div>
          </article>
        @endif
      </div>
    </div>
  </main>

@endsection


