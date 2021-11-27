@extends('layouts.staff.master')
@section('head')
<script src="{{ asset('staff/js/js/dk.price.js') }}"></script>
<script src="{{ asset('staff/js/js/bundle.min.js') }}"></script>
<style>
    .select2-search--dropdown{
        display: none !important;
    }
</style>

<script>
    var module_hash_id_storage = 1;
    var module_no_replace_update_command_status = 1;
    var module_adding_new_days_to_incredible_and_plus = 1;
    var module_new_rrp_change_rule_for_incredible_offers = 1;
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
    var module_marketplace_fbs_courier = 1;
    var module_marketplace_warehouse_setting_modal = 1;
    var module_digistyle_special_capacity = 1;
    var module_marketplace_reporting_and_insights = 1;
    var module_marketplace_sentry_log = 1;
    var module_marketplace_warehouse_postal_code = 1;
    var module_marketplace_show_warehouse_address_map = 1;
    var module_marketplace_village_seller_badge = 1;
    var module_marketplace_add_work_day = 1;
    var module_marketplace_add_more_filter_on_ship_by_seller_order_page = 1;
    var module_ds_return_order = 1;
    var module_breaking_payment = 1;
    var module_orders_full_log = 1;
    var module_available_ts_for_non_plus_users = 1;
    var module_marketplace_promotion_new_features = 1;
    var module_app_break_payment = 1;
    var module_only_fresh_filter = 1;
    var module_plus_subscription_nps = 1;
    var module_plus_partnership_filimo = 1;
    var module_plus_partnership = 1;
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
    var module_ab_pdp_back_to_cart = 1;
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
    var module_dk_contact_redesign = 1;
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
    var module_dk_mobile_contact_redesign = 1;
    var module_contact_change_upload_logic = 1;
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
    var module_pdp_large_item = 1;
    var module_packaging_info = 1;
    var module_marketplace_order_detail = 1;
    var module_remove_title_mandatory = 1;
    var module_cpo_new_rules = 1;
    var module_marketplace_seller_cpo_access_restriction = 1;
    var module_my_dk_navbar = 1;
    var module_ds_new_home = 1;
    var module_product_new_image = 1;
    var module_marketplace_lead_time_in_category = 1;
    var module_brand_iranian_designer = 1;
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
    var module_new_lead_time_text = 1;
    var module_digistyle_special_event = 1;
    var module_digistyle_voucher_spinner = 1;
    var module_cart_sampling_gift = 1;
    var module_ds_favorite_brands = 1;
    var module_new_user_history = 1;
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
    var module_ds_update_cart_when_removed = 1;
    var module_ds_profile_icon_dropdown = 1;
    var module_ds_default_size_none = 1;
    var module_ds_faq_new = 1;
    var module_ab_test_plp_rating = 1;
    var module_ds_employee_discount = 1;
    var module_ds_next_purchase_counter_update = 1;
    var module_admin_warranty_insurance = 1;
    var module_new_profile_orders = 1;
    var module_new_profile_sidebar = 1;
    var module_delete_comment = 1;
    var module_ds_refresh_when_phone_edit = 1;
    var module_new_market_price_rules = 1;
    var module_ds_only_banner_logo = 1;
    var module_ds_banner_description_scroll = 1;
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
    var module_ds_next_for_non_logged_users = 1;
    var module_sfl_separation = 1;
    var module_esi_in_mini_header = 1;
    var module_ds_comment_for_non_logged = 1;
    var module_ds_mobile_full_footer = 1;
    var module_banner_url_check = 1;
    var module_ds_mobile_comment_verfication = 1;
    var module_ds_mobile_back_menu = 1;
    var module_ds_new_mobile_header = 1;
    var module_new_mobile_header = 1;
    var module_new_ds_brands = 1;
    var module_dk_mobile_menu_revision = 1;
    var module_ds_plp_redesign = 1;
    var module_voucher_fraud_detection = 1;
    var module_marketplace_dk_pickup_shipment = 1;
    var module_marketplace_create_package_shipment = 1;
    var module_shipment_effect_create_package = 1;
    var module_recaptcha_contact_us = 1;
    var module_ds_mega_menu_redesign = 1;
    var module_data_layer = 1;
    var module_data_layer_carousels = 1;
    var module_data_layer_phase2 = 1;
    var module_data_layer_my_landing = 1;
    var module_checkout_action_button_replacement = 1;
    var module_ds_shipment_back = 1;
    var module_new_comment = 1;
    var module_new_profile_orders_mobile = 1;
    var module_new_price_chart_header = 1;
    var module_ds_comment_errors = 1;
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
    var module_ds_minicart_redesign = 1;
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
    var module_ds_faq_new_mobile = 1;
    var module_stop_sending_email_sms_to_sellers = 1;
    var module_nps_ship_by_seller = 1;
    var module_new_login = 1;
    var module_cpo_import_excel = 1;
    var module_refund_end_to_end = 1;
    var module_ship_by_seller_ovl = 1;
    var module_collective_promotions_module = 1;
    var module_selection_pricing = 1;
    var module_dynamic_shipping_cost = 1;
    var module_ds_category_filter = 1;
    var module_sbs_failed_delivery = 1;
    var module_jet_delivery = 1;
    var module_amazing_carousel_show_all = 1;
    var module_marketplace_seller_data = 1;
    var module_new_economic_profile = 1;
    var module_jet_delivery_filter = 1;
    var module_new_burger_menu = 1;
    var module_ds_home_rearrange = 1;
    var module_ds_pdp_cart_header = 1;
    var module_new_cmp_category = 1;
    var module_auto_title_suggestion = 1;
    var module_dk_rebranding = 1;
    var module_rebrand_border_radius = 1;
    var module_variant_restrictions = 1;
    var module_new_question_gallery = 1;
    var module_ds_seller_pdp_redesign = 1;
    var module_ds_comment_redesign = 1;
    var module_ds_pdp_redesign_f = 1;
    var module_add_imei_to_packages = 1;
    var module_new_thank_you = 1;
    var module_thankyou_without_action = 1;
    var module_ds_mega_menu_beauty = 1;
    var module_cart_swiper_ab_test = 1;
    var module_cpo_excel_import = 1;
    var module_ml_profile_ab_test = 1;
    var module_sbs_delivery_send_delivered_sms = 1;
    var module_new_contact_us = 1;
    var module_new_ds_contact_us = 1;
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
    var module_app_specific_incredible = 1;
    var module_marketplace_finance_wallet = 1;
    var module_ds_impression_click_install_app = 1;
    var module_marketplace_wallet = 1;
    var module_long_time_declare = 1;
    var module_edit_product_price_amazing = 1;
    var module_marketplace_lazy_load_images_cmp = 1;
    var module_ship_by_seller_post = 1;
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
    var module_new_customer_landing = 1;
    var module_iban = 1;
    var module_marketplace_product_config_sortable_product_id = 1;
    var module_marketplace_profile_commitment_download_link = 1;
    var module_pause_brand_campaign_with_out_of_stock_dkp = 1;
    var module_sbs_carousels = 1;
    var module_content_config = 1;
    var module_sbs_improvement = 1;
    var module_data_layer_ds = 1;
    var module_dimensions_required_cf_view = 1;
    var module_magic_refrigerator_landing = 1;
    var module_village_landing_form = 1;
    var module_anonymous_comment = 1;
    var module_marketplace_profile_persian_digits_contact_info = 1;
    var module_new_shipping_fresh_carousel = 1;
    var module_marketplace_remove_adservice_buttons_product_config = 1;
    var module_seller_voucher_submit_type = 1;
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
    var module_rejected_packages = 1;
    var module_best_selling_data_layer = 1;
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
    var module_seller_calender_change = 1;
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
    var module_seller_restriction_excel_import = 1;
    var module_mobile_shipping_fresh_recommendation = 1;
    var module_search_bar_banner = 1;
    var module_new_pdp_review = 1;
    var module_dk_pdp_redesign = 1;
    var module_new_pdp_sellers = 1;
    var module_new_profile_favorites = 1;
    var module_dk_pdp_improve = 1;
    var module_digi_birthday_99 = 1;
    var module_dk_birthday_referral = 1;
    var module_profile_return_invoice_list = 1;
    var module_delivery_tracking_status = 1;
    var module_video_bulk = 1;
    var module_business_name = 1;
    var module_change_supplier_status_in_excel_import = 1;
    var module_dpo_update_price = 1;
    var module_fulfillment_dpo_rts_validation = 1;
    var module_seller_first_party_updater = 1;
    var module_admin_panel_payment_limitation = 1;
    var module_new_customer_floating_box = 1;
    var module_lead_time_postpone = 1;
    var module_dynamic_shipping_cost_phase_2 = 1;
    var module_new_desktop_time_table = 1;
    var module_similar_brand = 1;
    var module_plp_mobile_fidibo_banner = 1;
    var module_custom_payment_plus = 1;
    var module_asserting_pricing_rules_in_po = 1;
    var module_year_end_99 = 1;
    var module_chatbot = 1;
    var module_ds_refund_modals = 1;
    var module_ds_seo_home_page = 1;
    var module_leadtime_postpone_improvement = 1;
    var module_dk_my_landing_carousel = 1;
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
    var module_log_missing_translations = 1;
    var module_marketplace_cc = 1;
    var module_marketplace_login_captcha = 1;
    var module_new_reports_page = 1;
    var module_cpo_batch_upload_new = 1;
    var module_split_inbound_capacity = 1;
    var module_marketplace_seller_holiday_for_ship_by_seller = 1;
    var module_sbs_order_log = 1;
    var module_cpc_modal_use_ajax_for_fetching_data = 1;
    var module_marketplace_wallet = 1;
</script>

<script>
    var supernova_mode = "production";
    var supernova_tracker_url = "";
    var isCollectiveModuleActive = true;
    var showRejectedMessage = 0;
    var rejectedMessage = "";
    var isLoggedSeller = 1;
    var walkthroughSteps = [];
    var showPriceModal = 0;
    var newSeller = 1;
    var is_yalda = 0;
</script>
@endsection
@section('content')
<main class="c-main">
    <div class="uk-container uk-container-large">

        <div class="page-layout layout-empty c-grid c-join__grid" style="display: none">
            <div class="c-grid__row c-join__top-details c-join__top-details--sm">
                <div class="c-grid__row">
                    <div class="c-grid__col">
                        <div class="c-card c-card--transparent">
                            <h1 class="c-card__title c-card__title--dark c-card__title--desc">تخفیف‌های شگفت انگیز
                                <span class="c-card__title-sub c-card__title-sub--no-spacing">در این قسمت می‌توانید برای کالاهای خود تخفیف تعیین کنید. کالاها بر مبنای میزان تخفیف تعیین شده به پروموشن‌های مختلف {{ $fa_store_name }} اضافه می‌شوند.</span>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="c-grid__row js-empty-smart-promotion">
                    <div class="c-grid__col">
                        <div class="c-card c-join-smart-emty__container">
                            <div class="c-join-smart-emty__des">
                                <img src="https://seller.digikala.com/static/files/7c0b3151.svg" alt="">
                                <div class="c-join-smart-emty__des-title">شما هیچ کالایی را در لیست تخفیف‌های شگفت انگیز قرار
                                    نداده‌اید
                                </div>

                                <div class="c-join-smart-emty__des-sub-title">با قرار دادن کالاهای خود در این لیست و اعمال تخفیف
                                    بر روی آن‌ها بازدید و فروش کالاهای خود را در وب‌سایت {{ $fa_store_name }} افزایش دهید.
                                </div>
                                <div class="c-mega-campaigns__btns-green-plus js-empty-layout-add-btn">افزودن
                                    کالای جدید به لیست تخفیف‌ها
                                </div>
                            </div>
                            <img class="c-card c-join-smart-emty__img-container" src="https://seller.digikala.com/static/files/3fbd76a0.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-layout layout-add c-grid c-join__grid" style="display: none;">

            <div class="c-grid__row">
                <div class="c-grid__col">
                    <div class="c-card c-card--transparent">
                        <h1 class="c-card__title c-card__title--dark c-card__title--desc">تخفیف‌های شگفت انگیز
                            <span class="c-card__title-sub c-card__title-sub--no-spacing">در این قسمت می‌توانید برای کالاهای خود تخفیف تعیین کنید. کالاها بر مبنای میزان تخفیف تعیین شده به پروموشن‌های مختلف {{ $fa_store_name }} اضافه می‌شوند.</span>
                        </h1>
                    </div>
                </div>
            </div>

            <div class="c-grid__row js-guide-container">
                <div class="c-grid__col">
                    <div class="c-card c-join-smart-emty--p-20">
                        <div class="uk-flex uk-flex-between c-join-smart-emty__guide">
                            <div class="c-join-smart-emty__guide-title">راهنمای تخفیف‌های شگفت انگیز</div>
                            <div class="c-join-smart-emty__guide-close js-close-guide"></div>
                        </div>
                        <ul class="c-join-smart-emty__guide-item">
                            <li>
                                شما می‌توانید برای هر یک از کالاهای موجود خود به میزان دلخواه تخفیف تعیین کنید.
                            </li>

                            <li>
                                کالاها پس از اضافه شدن به پروموشن‌ها و کمپین‌های مختلف به یکی از شکل‌های زیر در سایت
                                نمایش داده می‌شوند:
                            </li>
                        </ul>
                        <div class="c-join-smart-emty__guide-type">
                            <div class="c-join-smart-emty__guide-type-off uk-width-1-3">
                                <div class="c-join-smart-emty__guide-type-off-title">
                                    تخفیف عادی
                                </div>

                                <div class="c-join-smart-emty__guide-type-off-des">
                                    - نمایش قیمت به صورت خط خورده با درصد تخفیف
                                </div>
                            </div>

                            <div class="c-join-smart-emty__guide-type-promotion uk-width-1-3">
                                <div class="c-join-smart-emty__guide-type-promotion-title">
                                    پروموشن فروش ویژه
                                </div>

                                <div class="c-join-smart-emty__guide-type-off-des">
                                    - نمایش قیمت به صورت خط خورده با درصد تخفیف
                                </div>

                                <div class="c-join-smart-emty__guide-type-off-des">
                                    - امکان قرارگیری پشت بنرهای {{ $fa_store_name }}
                                </div>
                            </div>

                            <div class="c-join-smart-emty__guide-type-campaign uk-width-1-3">
                                <div class="c-join-smart-emty__guide-type-campaign-title">
                                    کمپین‌های {{ $fa_store_name }}
                                </div>
                                <div class="c-join-smart-emty__guide-type-off-des">
                                    - نمایش قیمت به صورت خط خورده با درصد تخفیف
                                </div>
                                <div class="c-join-smart-emty__guide-type-off-des">
                                    - امکان قرارگیری پشت بنرهای {{ $fa_store_name }} و در صفحات پروموشن
                                </div>
                                {{--                                    <div class="c-join-smart-emty__guide-type-off-des">--}}
                                {{--                                        - احتمال قرارگیری کالا در شبکه‌های اجتماعی {{ $fa_store_name }}--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="c-join-smart-emty__guide-type-off-des">--}}
                                {{--                                        - احتمال کاهش کمیسیون و هزینه پردازش و ارسال--}}
                                {{--                                    </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="c-grid__row" id="table-view-container">
                <div class="c-grid__col">
                    <div class="c-card c-card--padding">
                        <div class="c-card__wrapper">

                            <div class="c-join__product-selection">
                                <div class="c-join__product-select c-join__product-select--manual">
                                    <div class="c-join__select-area">
                                        <div class="c-join__select-image c-join__select-image--list"></div>
                                        <span class="c-join__select-title">روش اول: انتخاب کالاها از طریق پنل</span>
                                        <span class="c-join__select-subtitle">کالاها را به صورت دستی از میان کالاهای مجاز انتخاب و قیمت‌گذاری کنید.</span>
                                        <div>
                                            <button class="c-join__btn c-join__btn--secondary c-join__btn--icon-right c-join__btn--icon-list js-select-products">
                                                انتخاب کالاها از لیست
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <span class="c-join__select-separator"></span>

                                <div class="c-join__product-select c-join__product-select--upload">
                                    <div class="c-join__select-area">
                                        <div class="c-join__select-image c-join__select-image--excel"></div>
                                        <span class="c-join__select-title">روش دوم: بارگذاری گروهی کالاها با فایل اکسل</span>
                                        <span class="c-join__select-subtitle">فایل اکسل حاوی محصولات مورد نظرتان را بارگذاری کنید.</span>
                                        {{--                                            <label class="c-join__btn c-join__btn--deactive c-join__btn--icon-right c-join__btn--icon-excel-up" style="color: #606265 !important;">--}}
                                        <label class="c-join__btn c-join__btn--deactive c-join__btn--icon-right" style="color: #606265 !important;">
                                            <input type="file" class="c-join-promotion__upload-input js-products-file js-import-excel-file">
                                            &nbsp;&nbsp; به زودی... &nbsp;&nbsp;
                                        </label>
                                        {{--                                            <p class="c-join__help-text">فایل اکسل باید مشابه نمونه زیر تنظیم شده باشد.</p>--}}
                                        {{--                                            <a href="/product-list/3909519/excel/sample/" class="c-join__download-sample">دانلود  فایل اکسل نمونه</a>--}}
                                    </div>
                                </div>


                            </div>
                            <div class="uk-flex uk-flex-right">
                                <button class="c-join__btn c-join__btn--primary js-back-to-products-list" disabled="">بازگشت به
                                    صفحه مدیریت تخفیف‌ها
                                </button>
                            </div>
                            <div class="c-join__loading c-loading c-loading--hidden">
                                <div class="c-loading__container">
                                    <div class="loading"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--            @if(!$promotions->count())--}}
        <div class="page-layout layout-active c-grid c-join__grid" style="">
            <div class="c-grid__row">
                <div class="c-grid__col">
                    <div class="c-card">
                        <div class="c-mega-campaigns-join-empty__body-card ">
                            <div class="c-join-smart-products__header">کالاهای دارای تخفیف شگفت انگیز</div>
                            <div class="c-mega-campaigns-join-list__options js-remove-in-add-form">
                                <a href="{{ route('staff.periodic-prices.index') }}" class="c-mega-campaigns-join-list__options-item c-mega-campaigns-join-list__options-item--active">تخفیف‌های شگفت انگیز فعال/آغاز نشده</a>
                                <a href="{{ route('staff.periodic-prices.ended') }}" class="c-mega-campaigns-join-list__options-item">تخفیف‌های شگفت انگیز پایان‌یافته</a>
{{--                                <a href="{{ route('staff.periodic-prices.ended') }}" class="c-mega-campaigns-join-list__options-item {{ (!$ended_status)? 'uk-hidden' : '' }}">تخفیف‌های شگفت انگیز پایان‌یافته</a>--}}
                            </div>
                            <div class="c-mega-campaigns-join-list__container">
                                <div class="uk-flex uk-flex-bottom">
                                    <form class="uk-flex" id="searchForm">
                                        <div class="c-mega-campaigns-join-list__container-filters-search c-join-smart-list--medium-search">
                                            <div class="c-ui-form__col c-ui-form__col--xs-12 c-ui-form__col--small-gap uk-padding-remove-left uk-width-1-1">
                                                <label class="c-ui-form__label">جستجو:</label>

                                                <div class="c-ui-form__row c-ui-form__row--group c-ui-form__row--nowrap c-ui-form__row--wrap-xs">
                                                    <div class="c-ui-form__col c-ui-form__col--group-item c-ui-form__col--xs-12 c-ui-form__col--wrap-xs c-ui-form__col--xs-full c-mega-campaigns-join-list__container-filters-search-type">

                                                        <select class="js-form-clearable c-ui-select c-ui-select--common c-ui-select--small c-ui-select--search select2-hidden-accessible" name="search[type]" tabindex="-1" aria-hidden="true">
                                                            <option value="all" selected>همه موارد</option>
                                                            <option value="product_name">نام محصول</option>
                                                            <option value="product_id">کد محصول</option>
                                                            <option value="product_variant_id">کد تنوع</option>
                                                        </select>
                                                    </div>
                                                    <div class="uk-width-1-1 c-ui-form__col c-ui-form__col--xs-6 c-ui-form__col--group-item c-ui-form__col--wrap-xs c-ui-form__col--xs-full">
                                                        <label>
                                                            <div class="c-ui-input">
                                                                <input type="text" name="search[title]" class="c-ui-input__field c-ui-input__field--order c-ui-input__field--has-btn js-form-clearable c-mega-campaigns--light-border" id="search_input" value="" placeholder="عبارت جستجو ...">
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="c-ui-form__col c-ui-form__col--xs-12 c-ui-form__col--group-item c-ui-form__col--wrap-xs">
                                                        <button class="c-ui-btn c-ui-btn--xs-block c-ui-btn--active c-ui-btn--search-form" id="submitButton">
                                                            <span>جستجو</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="c-ui-form__col c-ui-form__col--group-item c-ui-form__col--xs-12 c-ui-form__col--wrap-xs c-ui-form__col--xs-full c-mega-campaigns-join-list__container-filters-select c-mega-campaigns--mr-10">
                                            <label class="c-ui-form__label">وضعیت کالا</label>
                                            <select name="search[status]" class="dropdown-control c-ui-select c-ui-select--common c-ui-select--small select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                <option class="option-control" value="all" selected>نمایش همه</option>
                                                <option class="option-control" value="active">فعال</option>
                                                <option class="option-control" value="deactive">غیرفعال</option>
                                            </select>
                                        </div>

                                        <div class="c-ui-form__col c-ui-form__col--xs-12 c-ui-form__col--wrap-xs uk-padding-remove-right c-mega-campaigns--mr-10">
                                            <label class="c-ui-form__label">بازه زمانی تخفیف:</label>
                                            <div class="c-mega-campaigns-join-list__container-filters-date">
                                        <span>
                                            <input class="uk-input c-ui-input__field c-ui-input__field--order js-promotion-date-picker pwt-datepicker-input-element" data-format="LLLL" data-time="1" data-from-today="0" data-date="1" data-name="search_start_from_" value="" id="form-field-dt-59517" autocomplete="off" placeholder="از تاریخ">
                                        <input name="search[start_from]" id="search_start_from_" type="hidden" value="">
                                        </span>
                                                <span><input class="uk-input c-ui-input__field c-ui-input__field--order js-promotion-date-picker pwt-datepicker-input-element" data-format="LLLL" data-time="1" data-from-today="0" data-date="1" data-name="search_end_to_" value="" id="form-field-dt-20335" autocomplete="off" placeholder="تا تاریخ">
                                                <input name="search[end_to]" id="search_end_to_" type="hidden" value=""></span>
                                            </div>
                                        </div>


                                    </form>
                                </div>
                                {{--                                    <ul class="c-mega-campaigns__select-product-warning c-mega-campaigns--ml-15 c-mega-campaigns--mr-15 c-mega-campaigns--mt-20 uk-hidden js-show-on-add">--}}
                                {{--                                        <li>--}}
                                {{--                                            حداکثر قیمت مجاز هر کالا بر اساس دسته‌بندی و میانگین قیمت آن کالا (یا کالاهای مشابه آن) در چند روز گذشته محاسبه می‌شود.--}}
                                {{--                                        </li>--}}
                                {{--                                    </ul>--}}

                                <div class="c-join-smart-list__type uk-hidden">
                                    <div class="uk-flex">
                                        <div class="c-join-smart-list__type-des">
                                            دایره‌های روبروی بخش تخفیف در جدول زیر نمایان‌گر کیفیت تخفیف تعیین شده برای آن کالا می‌باشد.
                                        </div>

                                        <div class="uk-flex uk-flex-middle c-join-smart-list--mr-30">
                                            <div class="c-join-smart-list__type-eleman">
                                                <span class="c-join-smart-list__type-eleman-filing c-join-smart-list__type-eleman-filing--normal"></span>
                                            </div>

                                            <div class="c-join-smart-list--mr-15 uk-flex uk-flex-column uk-flex-start">
                                    <span class="c-join-smart-list__type-title c-join-smart-list__type-title--normal">
                                        تخفیف عادی
                                    </span>
                                                <span class="c-join-smart-list__type-sub-title">
                                        نمایش به صورت تخفیف‌خورده
                                      </span>
                                            </div>
                                        </div>

                                        <div class="uk-flex uk-flex-middle c-join-smart-list--mr-30">
                                            <div class="c-join-smart-list__type-eleman">
                                                <span class="c-join-smart-list__type-eleman-filing c-join-smart-list__type-eleman-filing--good"></span>
                                            </div>

                                            <div class="c-join-smart-list--mr-15 uk-flex uk-flex-column uk-flex-start">
                                    <span class="c-join-smart-list__type-title c-join-smart-list__type-title--good">
                                        تخفیف خوب
                                    </span>
                                                <span class="c-join-smart-list__type-sub-title">
                                        شانس نمایش در لیست فروش ویژه
                                    </span>
                                            </div>
                                        </div>

                                        <div class="uk-flex uk-flex-middle c-join-smart-list--mr-30">
                                            <div class="c-join-smart-list__type-eleman">
                                                <span class="c-join-smart-list__type-eleman-filing c-join-smart-list__type-eleman-filing--excellent"></span>
                                            </div>

                                            <div class="c-join-smart-list--mr-15 uk-flex uk-flex-column uk-flex-start">
                                    <span class="c-join-smart-list__type-title c-join-smart-list__type-title--excellent">
                                        تخفیف عالی
                                    </span>
                                                <span class="c-join-smart-list__type-sub-title">
                                        شانس شرکت در کمپین‌های {{ $fa_store_name }}
                                    </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="c-join-smart-select__notif-link js-show-active-campaign-list">
                                        لیست همه پروموشن‌های فعال
                                    </div>

                                </div>

                                <div class="c-mega-campaigns-join-list__container-table c-promo--width-controller js-table-container" id="product-list-items">

                                    <div class="c-mega-campaigns-join-list__container">

                                        <div class="uk-flex uk-flex-between">
                                            <div class="uk-flex">
                                                <div class="c-mega-campaigns__btns-green-plus uk-margin-remove-top js-empty-layout-add-btn">
                                                    افزودن کالای جدید به لیست تخفیف‌ها
                                                </div>
                                            </div>
                                            <div class="c-ui-paginator js-paginator" style="margin-left: 25px;">
                                                <div class="c-ui-paginator js-paginator">
                                                    @if(count($promotions))
                                                        <div class="c-ui-paginator__total" data-rows="">
                                                            تعداد نتایج: <span>{{ persianNum($promotions->total()) }} مورد</span>
                                                        </div>
                                                    @else
                                                        <div class="c-ui-paginator__total" data-rows="۰">
                                                            جستجو نتیجه‌ای نداشت
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="c-promo__row--m-sm">
                                            <table class="c-ui-table c-periodic-prices__table c-join__table  js-search-table js-table-fixed-header" data-sort-column="created_at" data-sort-order="desc" data-search-url="{{ route('staff.periodic-prices.search') }}" data-auto-reload-seconds="0" data-new-ui="1" data-is-header-floating="1" data-has-checkboxes="">
                                                <thead>
                                                <tr class="c-ui-table__row">
                                                    <th class="c-ui-table__header  ">
                                                        <span class="js-search-table-column"></span>
                                                    </th>
                                                    <th class="c-ui-table__header  ">
                                                        <span class="js-search-table-column">عنوان و‌ کد تنوع کالا ({{ $product_code_prefix }}C)</span>
                                                    </th>
                                                    <th class="c-ui-table__header  ">
                                                        <span class="js-search-table-column">قیمت فروش (ریال)</span>
                                                    </th>
                                                    <th class="c-ui-table__header  ">
                                                        <span class="js-search-table-column">٪ تخفیف از قیمت شما</span>
                                                    </th>
                                                    <th class="c-ui-table__header  ">
                                                        <span class="js-search-table-column">قیمت پس  از تخفیف (ریال)</span>
                                                    </th>
                                                    <th class="c-ui-table__header  ">
                                                        <span class="js-search-table-column">زمان دار</span>
                                                    </th>
                                                    <th class="c-ui-table__header  ">
                                                        <span class="js-search-table-column">بازه زمانی تخفیف</span>
                                                    </th>
                                                    <th class="c-ui-table__header  ">
                                                        <span class="js-search-table-column">وضعیت</span>
                                                    </th>
                                                    <th class="c-ui-table__header  ">
                                                        <span class="js-search-table-column">موجودی فعلی کالا</span>
                                                    </th>
                                                    <th class="c-ui-table__header  ">
                                                        <span class="js-search-table-column">تعداد در تخفیف</span>
                                                    </th>
                                                    <th class="c-ui-table__header  ">
                                                        <span class="js-search-table-column">تعداد در سبد</span>
                                                    </th>
                                                    <th class="c-ui-table__header c-ui-table__header--nowrap ">
                                                        <span class="js-search-table-column"></span>
                                                    </th>
                                                    <th class="c-ui-table__header c-ui-table__header--nowrap ">
                                                        <span class="js-search-table-column"></span>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <tr class="c-ui-table__row c-ui-table__row--body c-join__table-row c-join__group-edit">
                                                    <td class="c-ui-table__cell" colspan="3">
                                                        ویرایش قیمت و تعداد همه کالاها
                                                    </td>
                                                    <td class="c-ui-table__cell c-ui-table__cell--has-input">
                                                        <div class="c-join__has-more-info">
                                                            <div class="c-join-promotion__table-input c-join-promotion__discount c-join-promotion__discount--all js-number-input-wrapper">
                                                                <input type="number" min="0" class="c-join-promotion__discount-input js-all-variants-discount-percent js-number-input" placeholder="≠">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="c-ui-table__cell"></td>
                                                    <td class="c-ui-table__cell"></td>
                                                    <td class="c-ui-table__cell"></td>
                                                    <td class="c-ui-table__cell"></td>
                                                    <td class="c-ui-table__cell"></td>
                                                    <td class="c-ui-table__cell c-ui-table__cell--has-input">
                                                        <div class="c-join-promotion__table-input js-number-input-wrapper">
                                                            <input type="number" min="0" class="c-join-promotion__discount-input js-all-variants-promotion-limit js-number-input" placeholder="≠">
                                                        </div>
                                                    </td>
                                                    <td class="c-ui-table__cell c-ui-table__cell--has-input">
                                                        <div class="c-join-promotion__table-input js-number-input-wrapper">
                                                            <input type="number" min="0" class="c-join-promotion__discount-input js-all-variants-order-limit js-number-input" placeholder="≠">
                                                        </div>
                                                    </td>
                                                    <td class="c-ui-table__cell"></td>
                                                    <td class="c-ui-table__cell"></td>
                                                </tr>

                                                @if(!is_null($promotions) && count($promotions))
                                                    @foreach($promotions as $promotion)
                                                    <tr class="c-ui-table__row c-ui-table__row--body js-edit-row  added-by-js-{{ $promotion->id }}" data-id="{{ $promotion->id }}">
                                                        <td class="c-ui-table__cell">
                                                            <img src="{{ $site_url . '/' . $promotion->productVariants()->first()->product->media()->first()->path . '/' . $promotion->productVariants()->first()->product->media()->first()->name }}" alt="{{ $promotion->productVariants()->first()->product->title_fa . '|' . $promotion->productVariants()->first()->warranty->name }}" class="c-mega-campaigns-join-list__container-table-image">
                                                        </td>
                                                        <td class="c-ui-table__cell" style="text-align: right;">
                                                            {{ $promotion->productVariants()->first()->product->title_fa . '|' . $promotion->productVariants()->first()->warranty->name }}
                                                            <span class="c-mega-campaigns-join-list__container-table-dkpc">{{ $product_code_prefix }}C-{{ $promotion->productVariants()->first()->variant_code }}</span>
                                                            <div class="c-mega-campaigns-join-list__container-table-error uk-text-nowrap uk-hidden added-by-js-messages-{{ $promotion->id }}">
                                                            </div>
                                                        </td>
                                                        <td class="c-ui-table__cell">
                                                            <span class="c-mega-campaigns-join-list__container-table-row-item">
                                                                {{ persianNum(number_format($promotion->productVariants()->first()->sale_price)) }}
                                                            </span>
                                                        </td>
                                                        <td class="c-ui-table__cell uk-padding-remove">
                                                            <div class="c-mega-campaigns--mh-105 uk-flex">
                                                                <div class="c-mega-campaigns--mt-25 uk-flex">
                                                                    <div class="uk-flex uk-flex-column">
                                                                        <div class="c-mega-campaigns-join-modal__body-table-input c-mega-campaigns-join-modal__body-table-input--xs js-number-input-wrapper">
                                                                            <input name="variant[promotion_percent]" type="number" min="0" max="100" class="js-discount-value js-number-input" value="{{ $promotion->percent }}">
                                                                        </div>
                                                                        <span class="c-mega-campaigns-join-modal__body-table-input-sub-title">
                                                                </span>
                                                                    </div>
                                                                    <span class="c-mega-campaigns-join-modal__body-table-input-link c-mega-campaigns--mr-5"></span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="c-ui-table__cell uk-padding-remove">
                                                            <div class="uk-flex uk-flex-column c-mega-campaigns--mh-105 uk-flex-center">
                                                                <div class="c-mega-campaigns--mt-12">
                                                                    <div class="c-mega-campaigns-join-modal__body-table-input c-mega-campaigns-join-modal__body-table-input--medium js-number-input-wrapper">
                                                                        <input type="text" name="variant[promotion_price]" class="js-promotion-price js-numeric-input" value="{{ $promotion->promotion_price }}" data-selling_price="{{ $promotion->productVariants()->first()->sale_price }}" data-crossed_price="{{ $promotion->productVariants()->first()->sale_price }}">
                                                                    </div>
                                                                    <span class="c-mega-campaigns-join-modal__body-table-input-sub-title" style="visibility: hidden;">
                                                                حداکثر قیمت مجاز:۴۸۰,۲۰۰ریال
                                                            </span>
                                                                </div>
                                                            </div>
                                                        </td>


                                                        <td class="c-ui-table__cell uk-padding-remove">
                                                            <div class="c-ui-tooltip__anchor">
                                                                <div class="c-ui-toggle__group">
                                                                        <label class="c-ui-toggle">
                                                                        <input class="c-ui-toggle__origin js-toggle-active-product time_status" type="checkbox" data-group-id="" name="variant[time_status]" data-reset="{{ (!is_null($promotion->start_at))? 'checked' : 'not_checked' }}" {{ (!is_null($promotion->start_at))? 'checked' : '' }}>
                                                                        <span class="c-ui-toggle__check"></span>
                                                                    </label>
                                                                </div>
                                                                <input type="hidden" value="0" class="js-active-input">
                                                            </div>
                                                        </td>

                                                        <td class="c-ui-table__cell c-join-promotion__price-cell c-join-promotion__price-cell--date c-join-promotion__price-cell--date-picker">
                                                            <span class="c-ui-form__col c-ui-form__col--group-item" style="width: 215px">
                                                                <label for="form-field-variant[start_at][{{ $promotion->id }}]" class="c-ui-form__label">از</label>
                                                                <input class="uk-input c-ui-input__field c-ui-input__field--order js-promotion-date-picker pwt-datepicker-input-element start_at time-section {{ is_null($promotion->start_at)? 'disabled' : '' }}" data-format="YYYY/MM/DD" data-time="1" data-from-today="1" data-date="1" data-name="variant_start_at__{{ $promotion->id }}_" value="{{ $promotion->start_at }}" id="form-field-dt-{{ rand(10000, 99999) }}" autocomplete="off" {{ is_null($promotion->start_at)? 'disabled' : '' }}>
                                                                <input name="variant[start_at][{{ $promotion->id }}]" id="variant_start_at__{{ $promotion->id }}_" class="start_at_hidden time-section" type="hidden" value="{{ $promotion->start_at }}">
                                                            </span>

                                                            <span class="c-ui-form__col c-ui-form__col--group-item" style="width: 215px">
                                                                <label for="form-field-variant[end_at][{{ $promotion->id }}]" class="c-ui-form__label">تا</label>
                                                                <input class="uk-input c-ui-input__field c-ui-input__field--order js-promotion-date-picker pwt-datepicker-input-element end_at time-section  {{ is_null($promotion->end_at)? 'disabled' : '' }}" data-format="YYYY/MM/DD" data-time="1" data-from-today="1" data-date="1" data-name="variant_end_at__{{ $promotion->id }}_" value="{{ $promotion->end_at }}" id="form-field-dt-{{ rand(10000, 99999) }}" autocomplete="off" {{ is_null($promotion->end_at)? 'disabled' : '' }}>
                                                                <input name="variant[end_at][{{ $promotion->id }}]" id="variant_end_at__{{ $promotion->id }}_" class="end_at_hidden time-section" type="hidden" value="{{ $promotion->end_at }}">
                                                            </span>
                                                        </td>

                                                        <td class="c-ui-table__cell uk-padding-remove">
                                                            <div class="c-ui-tooltip__anchor">
                                                                <div class="c-ui-toggle__group">
                                                                    <label class="c-ui-toggle">
                                                                        <input class="c-ui-toggle__origin js-toggle-active-product variant_status" type="checkbox" data-group-id="" name="variant[status]" data-reset="{{ ($promotion->status)? 'checked' : 'not_checked' }}" {{ ($promotion->status)? 'checked' : '' }}>
                                                                        <span class="c-ui-toggle__check"></span>
                                                                    </label>
                                                                </div>
                                                                <input type="hidden" value="0" class="js-active-input">
                                                            </div>
                                                        </td>

                                                        <td class="c-ui-table__cell">
                                                            <div class="c-join-smart-products--middle-item-height uk-flex uk-flex-column uk-flex-center">
                                                        <span class="c-mega-campaigns-join-list__container-table-row-item">
                                                            {{ persianNum($promotion->productVariants()->first()->stock_count) }}
                                                        </span>
                                                            </div>
                                                        </td>

                                                        <td class="c-ui-table__cell uk-padding-remove" style="text-align: center;">
                                                            <div class="c-join-smart-products--middle-item-height uk-flex uk-flex-middle uk-flex-center">
                                                                <div class="c-mega-campaigns-join-modal__body-table-input c-mega-campaigns-join-modal__body-table-input--small-container c-mega-campaigns-join-modal__body-table-input--small js-number-input-wrapper uk-flex">
                                                                    <input type="number" name="variant[promotion_limit]" min="1" class="js-number-input js-input-promotion-limit" value="{{ $promotion->promotion_limit }}">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="c-ui-table__cell uk-padding-remove">
                                                            <div class="c-join-smart-products--middle-item-height uk-flex uk-flex-middle uk-flex-center">
                                                                <div class="c-mega-campaigns-join-modal__body-table-input c-mega-campaigns-join-modal__body-table-input--small-container c-mega-campaigns-join-modal__body-table-input--small js-number-input-wrapper uk-flex">
                                                                    <input type="number" name="variant[promotion_order_limit]" min="1" class="js-number-input js-input-order-limit" value="{{ $promotion->promotion_order_limit }}">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="c-ui-table__cell uk-padding-remove">
                                                            <div class="uk-flex uk-flex-between uk-flex-middle c-join-smart-products--middle-item-height js-edit-actions">
                                                                <div class=" c-mega-campaigns-join-modal__body-table-btn-separator c-mega-campaigns--ml-10">
                                                                    <button class="c-mega-campaigns-join-list__container-table-btn c-mega-campaigns-join-list__container-table-btn--save c-mega-campaigns--ml-10 c-mega-campaigns--mr-10 js-edit-button button js-save-promotion-price-record-changes" data-promotion="3856494" data-product-variant-id="{{ $promotion->id }}" data-promotion-variant-id="{{ $promotion->id }}" disabled=""></button>
                                                                    <button class="c-mega-campaigns-join-list__container-table-btn c-mega-campaigns-join-list__container-table-btn--cancle c-mega-campaigns--ml-10 js-edit-cancel-button js-table-swap-row-handle" disabled=""></button>
                                                                </div>

                                                                <button class="c-mega-campaigns-join-list__container-table-btn  js-stop-promotion js-tool-tip-archive" style="margin-top: 7px;" data-promotion="3856494" data-variant="{{ $promotion->id }}" data-promotion-variant-id="{{ $promotion->id }}">
                                                                    <img src="{{ asset('staff/icon/archive.svg') }}">
                                                                </button>
                                                                <div class="c-rating-chart__description-tooltip c-mega-campaigns-join-list__container-table-btn-tooltip uk-text-nowrap uk-dropdown uk-dropdown-stack" uk-dropdown="boundary: .js-tool-tip-archive; pos: bottom-center;delay-hide: 0;offset: 10;" style="left: 128.172px; top: 80px;">
                                                                    پایان دادن
                                                                </div>
                                                                <button class="c-mega-campaigns-join-list__container-table-btn c-mega-campaigns-join-list__container-table-btn--delete js-remove-variant" style="margin-right: 10px; margin-top: 7px;" data-promotion="3856494" data-variant="{{ $promotion->id }}" data-promotion-variant-id="{{ $promotion->id }}" data-product-id="768562"></button>
                                                            </div>
                                                        </td>

                                                        <td class="c-ui-table__cell c-ui-table__cell--operations c-ui-table__cell--text-error">
                                                            <div class="uk-hidden js-undo-remove">
                                                                <div class="c-join__flex-end">
                                                                    <span>کالا حذف شد</span>
                                                                </div>
                                                                <div class="c-join__flex-end">
                                                                    <a href="#" class="c-promo__table-action c-promo__table-action--undo js-undo-remove-button" data-promotion-variant-id="{{ $promotion->id }}">لغو حذف</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                @endif

                                                </tbody>
                                            </table>
                                            <div class="c-card__loading"></div>

                                        </div>

                                        <div class="c-card__footer" style="width: auto;">
                                            <a href="#" style="visibility: hidden;">
                                                <div class="c-mega-campaigns__btns-green-plus uk-margin-remove">
                                                </div>
                                            </a>
                                            @if(count($promotions))
                                            {{ $promotions->links('staffpromotion::layouts.pagination.custom-pagination') }}
                                            @endif
                                            <div class="c-ui-paginator js-paginator">
                                                <div class="c-ui-paginator js-paginator">
                                                    @if(count($promotions))
                                                        <div class="c-ui-paginator__total" data-rows="">
                                                            تعداد نتایج: <span>{{ persianNum($promotions->total()) }} مورد</span>
                                                        </div>
                                                    @else
                                                        <div class="c-ui-paginator__total" data-rows="۰">
                                                            جستجو نتیجه‌ای نداشت
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="c-mega-campaigns--p-30 uk-flex uk-flex-right uk-padding-remove-bottom uk-hidden js-show-on-add">
                                    <button class="c-join__btn c-join__btn--primary js-back-to-campaign-list">بازگشت به صفحه مدیریت تخفیف‌ها</button>
                                    <button class="c-mega-campaigns__btns-green js-confirm-promotion">تایید و اعمال تخفیف‌ها</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--            @endif--}}

        <div id="js-select-products" uk-modal="esc-close: true; bg-close: true;" class="uk-modal-container uk-modal-container--message uk-modal">
            <div class="uk-modal-dialog uk-modal-dialog--flex">
                <button class="uk-modal-close-default uk-close uk-icon" type="button" uk-close=""><svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg" ratio="1"><line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"></line><line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"></line></svg></button>

                <div class="uk-modal-body">

                    <div class="c-modal-notification c-join-promotion__modal">
                        <div>
                            <div class="c-card__header">
                                <h2 class="c-card__title">انتخاب کالا از لیست</h2>
                            </div>
                            <div class="c-card__body">
                                <div class="c-join-promotion__table">
                                </div>
                            </div>
                            <div class="c-card__footer c-join__table-footer">
                            </div>
                        </div>
                        <div class="c-card__loading js-modal-loading"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection
@section('script')
<script>
// توکن csrf
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).on('click', '.js-stop-promotion', function (e) {
    e.preventDefault();
    console.log('dddff');
    var self = $(this),
        promotionVariantId = self.data('promotion-variant-id');
    if (typeof promotionVariantId == 'undefined' || promotionVariantId.length === 0) {
        return;
    }
    var promotionId = !!window.promotionId ? window.promotionId : (self.data('promotion') || 0);

    // self.closest('tr').remove();
    // self.closest('tr').addClass('c-join__table-row--is-deleted');
    // self.closest('tr').find('.js-action-buttons').addClass('uk-hidden');
    // self.closest('tr').find('.js-undo-remove').removeClass('uk-hidden');
    // self.closest('tr').find('.js-edit-actions button').prop('disabled', true);
    setTimeout(function () {
        Services.ajaxPOSTRequestJSON(
            'moveToEnds',
            // promotionId + '/moveToEnds',
            {
                promotionVariantId: promotionVariantId
            },
            function (response) {
                self.closest('tr').remove();
                self.closest('tr').hide('slow', function(){
                    self.closest('tr').remove();
                });

            },
            function (error) {
                UIkit.notification({
                    message: error.errors,
                    status: 'danger',
                    pos: 'bottom-right',
                    timeout: 8000
                });
            }
        );
    }, 50);
});

$(document).on('change', 'input[name="variant[time_status]"]', function (){
    if ($(this).is(":checked")) {
        $(this).closest('.c-ui-table__row').find('.start_at').removeAttr('disabled');
        $(this).closest('.c-ui-table__row').find('.start_at').removeClass('disabled');
        $(this).closest('.c-ui-table__row').find('.end_at').removeAttr('disabled');
        $(this).closest('.c-ui-table__row').find('.end_at').removeClass('disabled');
    } else {
        $(this).closest('.c-ui-table__row').find('.start_at').attr('disabled', true);
        $(this).closest('.c-ui-table__row').find('.start_at').addClass('disabled');
        $(this).closest('.c-ui-table__row').find('.end_at').attr('disabled', true);
        $(this).closest('.c-ui-table__row').find('.end_at').addClass('disabled');

        $(this).closest('.c-ui-table__row').find('.start_at').val('');
        $(this).closest('.c-ui-table__row').find('.start_at_hidden').val('');
        $(this).closest('.c-ui-table__row').find('.end_at_hidden').val('');
        $(this).closest('.c-ui-table__row').find('.end_at').val('');

    }
});

function persianNum() {
    String.prototype.toPersianDigits= function(){
        var id= ['۰','۱','۲','۳','۴','۵','۶','۷','۸','۹'];
        return this.replace(/[0-9]/g, function(w){
            return id[+w]
        });
    }
}
function convertDate() {
    $(".time-section").each(function (){
        var output="";
        var m = moment(input);
        if(m.isValid()){
            m.locale('fa');
            output = m.format("YYYY/M/D HH:mm");
        }
        $(this).value(output.toPersianDigits());
    });
}

persianNum();
convertDate();





</script>
@endsection
