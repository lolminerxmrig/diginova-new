@extends('layouts.staff.master')
@section('head')
<script src="{{ asset('staff/js/js/indexAction.js') }}"></script>

<script>
    var module_hash_id_storage = 1;
    var module_no_replace_update_command_status = 1;
    var module_adding_new_days_to_incredible_and_plus = 1;
    var module_console_greeting = 1;
    var module_daily_sellable_stock = 1;
    var module_online_shipment_cancellation = 1;
    var module_fc_supplier_invoice = 1;
    var module_internal_trade_qc = 1;
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
    var module_ts_cut_off_improvement = 1;
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
    var module_new_customer_floating_box = 1;
    var module_lead_time_postpone = 1;
    var module_dynamic_shipping_cost_phase_2 = 1;
    var module_new_desktop_time_table = 1;
    var module_smilar_brand = 1;
    var module_custom_payment_plus = 1;
    var module_asserting_pricing_rules_in_po = 1;
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
var readOnly = false;
var variationPairs = [];
var maxVariantsCount = 139;
var isShipBySellerModuleActive = false;
var dimensionLevel = "product";
var dimension = {"length":{"min":1,"max":20000},"width":{"min":1,"max":20000},"height":{"min":1,"max":20000},"weight":{"min":1,"max":9999000}};
var hasDimensionConfig = false;
var showRejectedMessage = 0;
var rejectedMessage = "";
var isLoggedSeller = 1;
var walkthroughSteps = [];
var showPriceModal = 0;
var newSeller = 1;
var is_yalda = 0;

@if($product->category()->first()->variantGroup()->first()->type !== 0)
var coloredMode = true;
@else
var noColorNoSizeMode = true;
@endif
</script>

@endsection

@section('content')

@php
    $site_url = $settings->where('name', 'site_url')->first()->value;
    $site_name = $settings->where('name', 'site_name')->first()->value;
    $product_code_prefix = $settings->where('name', 'product_code_prefix')->first()->value;
    $product_title_prefix = $settings->where('name', 'product_title_prefix')->first()->value;
@endphp

<main class="c-content-layout">
    <div class="uk-container uk-container-large">
        <div class="c-grid">
            <div class="c-content-page c-content-page--plain c-grid__row">
                <div class="c-grid__col">
                    <div class="c-content-page__header">
                        <span class="c-content-page__header-action">ایجاد تنوع برای محصول</span>
                        <span class="c-content-page__header-desc">برای محصولات تنوع کالایی ایجاد کنید.</span>
                    </div>
                </div>
            </div>
            <div class="c-grid__row">
                <div class="c-grid__col">
                    <div class="c-card">
                        <div class="c-grid__row">
                            <div class="c-grid__col">
                                <div class="c-variant">
                                    <form class="c-variant__form" id="productVariantsForm" data-max-variants=""
                                          novalidate="novalidate">
                                        <input type="hidden" name="product_variants[product_id]" value="{{ $product->id }}">
                                        <input type="hidden" name="product_variants[variation_theme]" value="sized">
                                        <div class="c-content-modal__notes">
                                            <span class="c-content-modal__notes-title">توجه:</span>
                                            <ul class="c-content-modal__notes-list">
                                                <li>لطفاً قبل از درج تنوع، مشخصات فنی کالا (مانند: رنگ، ابعاد، اقلام
                                                    همراه کالا، جنس کالا، تصویر بسته‌بندی و ...) را چک کرده
                                                    و اطمینان حاصل کنید که تنوع شما با مشخصات فنی کالا
                                                    مطابقت داشته باشد. عدم تطابق مشخصات فنی کالا با تنوع شما، علاوه
                                                    بر ایجاد نارضایتی مشتریان، موجب
                                                    مرجوع شدن سفارشات به علت مغایرت خواهد شد.
                                                </li>
                                                <li style="margin-top:10px;">
                                                    منظور از <u>قیمت خرید</u> قیمتی است که شما آن محصول را خریداری کرده اید.
                                                </li>

                                                <li>
                                                    منظور از <u>قیمت فروش</u> قیمتی است که شما برای فروش محصول در نظر گرفتید.
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="c-variant-error c-variant-error__box mt-20 mb-20 hidden">

                                        </div>
                                        <div class="c-variant__header">
                                            <div class="c-variant__img-container">
                                                <img src="{{ $site_url . '/' .$product->media()->first()->path . '/' . $product->media()->first()->name }}"
                                                    alt="" class="c-variant__img">
                                            </div>
                                            <div class="c-variant__descr">
                                                <h2 class="c-variant__title">{{ $product->title_fa }}</h2>
                                                <div class="c-variant__sub-title"></div>
                                                <div
                                                    class="c-variant__secondary-info c-variant__secondary-info--top">
                                                    <ul class="c-variant__secondary-info--table">
                                                        <li class="c-variant__secondary-info--table-row">
                                                            <div class="c-variant__secondary-info--table-cell">
                                                                <span class="c-variant__info">دسته بندی:</span>
                                                                <span
                                                                    class="c-variant__info--main">{{ $product->category()->first()->name }}</span>
                                                            </div>

                                                            <div class="c-variant__secondary-info--table-cell">
                                                                <span
                                                                    class="c-variant__info">تنوع مجاز این کالا:</span>
                                                                <span class="c-variant__info--main">{{ $product->category()->first()->variantGroup()->first()->name }}</span>
                                                            </div>
                                                        </li>
                                                        <li class="c-variant__secondary-info--table-row">
                                                            <div class="c-variant__secondary-info--table-cell">
                                                                <span class="c-variant__info">ابعاد بسته‌بندی محصول (ارتفاع×عرض×طول):</span>
                                                                <span
                                                                    class="c-variant__info--main">{{ persianNum($product->length) }}x{{ persianNum($product->width) }}x{{ persianNum($product->height) }} سانتیمتر</span>
                                                            </div>
                                                            <div class="c-variant__secondary-info--table-cell">
                                                                <span class="c-variant__info">وزن بسته‌بندی محصول:</span>
                                                                <span class="c-variant__info--main">{{ persianNum($product->weight) }} گرم</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="c-variant__body">
                                            @if($product->category()->first()->variantGroup()->first()->type !== 0)
                                            <div class="c-grid__row c-grid__row--gap-lg">
                                                <div class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial">
                                                    <label for="" class="uk-form-label uk-flex uk-flex-between">
                                                        انتخاب  {{ $product->category()->first()->variantGroup()->first()->name }} کالا:
                                                        <span class="uk-form-label__required"></span>
                                                        <a target="_blank" href="{{ route('staff.variants.edit', ['id' => $product->category()->first()->variantGroup()->first()->id ]) }}" class="search-link" id="newSizeRequestModalBtn">ایجاد
                                                            {{ $product->category()->first()->variantGroup()->first()->name }} جدید</a>
                                                    </label>
                                                    <div class="field-wrapper" id="attributesContainer">
                                                        <div class="c-variant__attributes-container">
                                                            @foreach($product->category()->first()->variantGroup()->first()->variants->where('status', 1) as $variant)
                                                            <button type="button" class="c-variant-btn js-add-variant" id="attribute_{{ $variant->id }}" data-attribute-value="{{ $variant->name }}" data-attribute-id="{{ $variant->id }}" data-hex="{{ (!is_null($variant->value))? $variant->value : '' }}" data-title="{{ $variant->name }}">
                                                                <span class="c-variant-btn__label">
                                                                @if(!is_null($variant->value))
                                                                <span class="c-variant-btn__color js-variant-hex" style="background-color: {{ $variant->value }};"></span>
                                                                @endif
                                                                <span class="c-variant-btn__text">{{ $variant->name }}</span>
                                                                    <span class="c-variant-btn__counter hidden">
                                                                        (<span class="js-variant-count"></span>)
                                                                    </span>
                                                                </span>
                                                            </button>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            <div class="c-variant-error c-variant-error__box mt-20 mb-20 hidden"
                                                 id="ajaxErrorsList">
                                            </div>
                                            <div class="c-variant-success c-variant-success__box mt-20 mb-20 hidden"
                                                 id="ajaxSuccessList">
                                                <div>تنوع‌های شما با موفقیت ذخیره شدند</div>
                                            </div>
                                            <div class="c-grid__row c-grid__row--gap-lg mt-30">
                                                <div id="variantsContainer" class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial relative">
                                                    <div class="c-content-loader">
                                                        <div class="c-content-loader__logo"></div>
                                                        <div class="c-content-loader__spinner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="c-grid__row c-grid__row--gap-lg">
                                                <div class="c-grid__col c-grid__col--gap-lg">
                                                    <button type="button" class="c-ui-btn c-ui-btn--dkpc hidden" id="saveNewVariantsButton">
                                                        افزودن به لیست تنوع
                                                    </button>
                                                    @if($product->category()->first()->variantGroup()->first()->type == 0)
                                                        <button type="button" class="c-ui-btn c-ui-btn--add c-ui-btn--dkpc js-add-variant">
                                                            افزودن تنوع جدید
                                                        </button>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="c-variant__form {{ (count($product->variants) == 0)? 'hidden' : '' }}" id="productVariantsContainer">
                                        <input type="hidden" class="js-static-form-data" name="search[product_id]" value="{{ $product->id }}">

                                        <div class="c-grid__row js-table-container">
                                            <div class="c-grid__col">
                                                <div class="c-variation-diversity">
                                                    <div class="c-variation-diversity__header">
                                                        <div class="c-variation-diversity__title">لیست تنوع ها</div>

                                                        <div class="c-card__paginator">
                                                            <div class="c-ui-paginator js-paginator">
                                                                <div class="c-ui-paginator__total" data-rows="۱">
                                                                    تعداد نتایج: <span>{{ persianNum(count($product->variants)) }} مورد</span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="c-variation-diversity__list">
                                                        <table class="c-ui-table   js-search-table " data-sort-column="product_variant_id" data-sort-order="desc"
                                                               data-search-url="{{ route('staff.products.ajaxVariantsList') }}"
                                                               data-auto-reload-seconds="0" data-new-ui="1" data-is-header-floating="1" data-has-checkboxes="">
                                                            <thead>
                                                            <tr class="c-ui-table__row">
                                                                <th class="c-ui-table__header c-ui-table__header--nowrap ">
                                                                    <span class="js-search-table-column">ردیف</span>
                                                                </th>
                                                                <th class="c-ui-table__header c-ui-table__header--nowrap ">
                                                                    <span class="js-search-table-column">عنوان تنوع کالا</span>
                                                                </th>
                                                                <th class="c-ui-table__header c-ui-table__header--nowrap ">
                                                                    <span class="js-search-table-column">عنوان گارانتی</span>
                                                                </th>
                                                                <th class="c-ui-table__header c-ui-table__header--nowrap ">
                                                                    <span class="js-search-table-column">کد تنوع ({{ $product_code_prefix }}C)</span>
                                                                </th>
                                                                {{--                        <th class="c-ui-table__header c-ui-table__header--nowrap ">--}}
                                                                {{--                            <span class="js-search-table-column">کد فروشنده</span>--}}
                                                                {{--                        </th>--}}
                                                                <th class="c-ui-table__header c-ui-table__header--nowrap ">
                                                                    <span class="js-search-table-column">ارسال توسط</span>
                                                                </th>
                                                                {{--                        <th class="c-ui-table__header c-ui-table__header--nowrap ">--}}
                                                                {{--                            <span class="js-search-table-column">کانال فروش</span>--}}
                                                                {{--                        </th>--}}
                                                                <th class="c-ui-table__header c-ui-table__header--nowrap ">
                                                                    <span class="js-search-table-column">وضعیت</span>
                                                                </th>
                                                                <th class="c-ui-table__header c-ui-table__header--nowrap">
                                                                    <span class="js-search-table-column">عملیات</span>
                                                                </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @php
                                                                $product_variants = $product->variants()->paginate(10000000);
                                                            @endphp

                                                            @foreach($product_variants as $key => $product_variant)
                                                                <tr class="c-variation-diversity__item c-variation-diversity__item--top js-variant-row"
                                                                    id="productVariantViewRow_{{ $product_variant->id }}" style="text-align: center;">
                                                                    <td class="c-variation-diversity__count">{{ persianNum($product_variants->firstItem() + $key) }}</td>
                                                                    <td class="c-variation-diversity__title">
                                                                        @if(isset($product_variant->variant->value) && !is_null($product_variant->variant->value))
                                                                            <span class="c-variant-checkbox__color" style="background-color: {{ $product_variant->variant->value }};"></span>
                                                                        @endif
                                                                        <span class="js-variant-attribute-title">{{ $product_variant->variant->name }}</span>
                                                                    </td>
                                                                    @if(!is_null($product_variant->warranty->month))
                                                                        <td class="c-variation-diversity__warranty"> گارانتی {{ persianNum($product_variant->warranty->month) }} ماهه {{ $product_variant->warranty->name }} </td>
                                                                    @else
                                                                        <td class="c-variation-diversity__warranty"> گارانتی {{ $product_variant->warranty->name }} </td>
                                                                    @endif
                                                                    <td class="c-variation-diversity__code">{{ $product_variant->variant_code }}</td>
                                                                    {{--                            <td class="c-variation-diversity__code js-view-supplier-code"></td>--}}
                                                                    <td>
                                                                        <span>{{ ($product_variant->shipping_type == 'site')? $site_name : 'فروشنده'  }}</span>
                                                                        {{--                                    <span class="c-variation-diversity__channel dk js-view-shipping-type-digikala active"></span>--}}
                                                                        {{--                                    <span class="c-variation-diversity__channel seller js-view-shipping-type-seller"></span>--}}
                                                                    </td>
                                                                    <td class="status_lable">
                                                                        <center>
                                                                            @if($product_variant->status == 1)
                                                                                <span id="span_{{ $product_variant->id }}" class="status_lable c-wallet__body-card-status-no-circle c-wallet__body-card-status-no-circle--active uk-text-nowrap">فعال</span>
                                                                            @else
                                                                                <span id="span_{{ $product_variant->id }}" class="status_lable c-wallet__body-card-status-no-circle c-wallet__body-card-status-no-circle--danger uk-text-nowrap">غیرفعال</span>
                                                                            @endif
                                                                        </center>
                                                                    </td>
                                                                    <td class="c-variation-diversity__status js-view-active">
                                                                        <center style="width: 79%;margin: auto;">
                                                                            {{--                                    <button type="button" class="c-ui-btn c-ui-btn--delete" data-id="2276294" style="">--}}
                                                                            {{--                                        <span class="c-variant__tooltip c-variant__tooltip--btn" style="margin-left: -9px;">حذف تنوع</span>--}}
                                                                            {{--                                    </button>--}}
                                                                            {{--                                    <span class="c-variation-diversity__status-ui js-td-active inactive" style="float: right;margin-left: 7px;height: 35px;width: 35px;"></span>--}}
                                                                            <button type="button" class="c-ui-btn c-ui-btn--edit js-variant-edit-btn" data-id="{{ $product_variant->id }}" style="">
                                                                                <span class="c-variant__tooltip c-variant__tooltip--btn" style="margin-left: -9px;">ویرایش تنوع</span>
                                                                            </button>
                                                                        </center>
                                                                    </td>

                                                                    {{--                            <td class="c-variation-diversity__status js-view-active">--}}
                                                                    {{--                                <span class="c-variation-diversity__status-ui js-td-active inactive"></span>--}}
                                                                    {{--                            </td>--}}
                                                                    {{--                            <td class="c-variation-diversity__action">--}}
                                                                    {{--                                <button type="button" class="c-ui-btn c-ui-btn--edit js-variant-edit-btn"--}}
                                                                    {{--                                        data-id="{{ $product_variant->id }}">--}}
                                                                    {{--                                    <span class="c-variant__tooltip c-variant__tooltip--btn">ویرایش تنوع</span>--}}
                                                                    {{--                                </button>--}}
                                                                    {{--                            </td>--}}
                                                                </tr>
                                                                <tr class="c-variation-diversity__item c-variation-diversity__item--bottom js-variant-row" id="productVariantEditRow_{{ $product_variant->id }}" data-size="">
                                                                    <td colspan="9">
                                                                        <form id="editVariant_{{ $product_variant->id }}">
                                                                            <input type="hidden" name="product_variant[product_id]" value="{{ $product->id }}">
                                                                            <input type="hidden" name="product_variant[product_variant_id]" value="{{ $product_variant->id }}">
                                                                            <div class="c-variation-diversity__separator">
                                                                                <div class="c-variant__secondary-info">

                                                                                    <div class="c-variant__secondary-item">
                                                                                        <span class="c-variant__info">قیمت خرید (ریال):</span>
                                                                                        <span type="text" class="c-variant__info--main js-view-buy-price">
                                                                                            <span dir="ltr" data-debug="{{ persianNum($product_variant->buy_price) }}">{{ persianNum($product_variant->buy_price) }}</span>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="c-variant__secondary-item">
                                                                                        <span class="c-variant__info">قیمت فروش (ریال):</span>
                                                                                        <span class="c-variant__info--main js-view-price">
                                                                                            <span dir="ltr" data-debug="{{ persianNum($product_variant->sale_price) }}">{{ persianNum($product_variant->sale_price) }}</span>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="c-variant__secondary-item">
                                                                                        <span class="c-variant__info">بازه زمانی ارسال (روز):</span>
                                                                                        <span class="c-variant__info--main js-view-lead-time">{{ persianNum($product_variant->post_time) }}</span>
                                                                                    </div>
                                                                                    <div class="c-variant__secondary-item">
                                                                                        <span class="c-variant__info">حداکثر سفارش در سبد (عدد):</span>
                                                                                        <span class="c-variant__info--main js-view-order-limit">{{ persianNum($product_variant->max_order_count) }}</span>
                                                                                    </div>
                                                                                    <div class="c-variant__secondary-item">
                                                                                        <span class="c-variant__info">موجودی نزد شما (عدد):</span>
                                                                                        <span class="c-variant__info--main js-view-marketplace-seller-stock">{{ persianNum($product_variant->stock_count) }}</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="c-variation-diversity__warning js-save-warning"></div>
                                                                                <div class="c-variant__secondary-info c-variant__secondary-info--edit"
                                                                                     id="metaEditFormVariant_{{ $product_variant->id }}">
                                                                                    <div class="c-grid__row c-grid__row--gap-lg">
                                                                                        {{--                                                <div class="c-grid__col c-grid__col--sm-4 c-grid__col--flex-initial">--}}
                                                                                        {{--                                                    <label class="uk-form-label">کانال فروش:--}}
                                                                                        {{--                                                        <span class="uk-form-label__required"></span>--}}
                                                                                        {{--                                                    </label>--}}
                                                                                        {{--                                                    <div class="field-wrapper field-wrapper--background uk-flex uk-flex-middle js-radio-group disabled">--}}
                                                                                        {{--                                                        <label class="c-ui-radio c-ui-radio--gap-sm disabled">--}}
                                                                                        {{--                                                            <input type="radio" class="c-ui-radio__origin js-site-digikala"--}}
                                                                                        {{--                                                                   name="product_variant[site]" value="digikala"--}}
                                                                                        {{--                                                                   data-default-value="1"--}}
                                                                                        {{--                                                                   checked                                                     disabled/>--}}
                                                                                        {{--                                                            <span class="c-ui-radio__check c-ui-radio__check--small"></span>--}}
                                                                                        {{--                                                            <span class="c-ui-radio__label">دیجی‌کالا</span>--}}
                                                                                        {{--                                                        </label>--}}
                                                                                        {{--                                                        <label class="c-ui-radio c-ui-radio--gap-sm disabled">--}}
                                                                                        {{--                                                            <input type="radio" class="c-ui-radio__origin js-site-digistyle"--}}
                                                                                        {{--                                                                   name="product_variant[site]" value="seller"--}}
                                                                                        {{--                                                                   data-default-value="0"--}}
                                                                                        {{--                                                                   disabled/>--}}
                                                                                        {{--                                                            <span class="c-ui-radio__check c-ui-radio__check--small"></span>--}}
                                                                                        {{--                                                            <span class="c-ui-radio__label">دیجی‌استایل</span>--}}
                                                                                        {{--                                                        </label>--}}
                                                                                        {{--                                                        <label class="c-ui-radio c-ui-radio--gap-sm disabled">--}}
                                                                                        {{--                                                            <input type="radio" class="c-ui-radio__origin js-site-both"--}}
                                                                                        {{--                                                                   name="product_variant[site]" value="both"--}}
                                                                                        {{--                                                                   data-default-value="0"--}}
                                                                                        {{--                                                                   disabled/>--}}
                                                                                        {{--                                                            <span class="c-ui-radio__check c-ui-radio__check--small"></span>--}}
                                                                                        {{--                                                            <span class="c-ui-radio__label">دیجی‌کالا و دیجی‌استایل</span>--}}
                                                                                        {{--                                                        </label>--}}
                                                                                        {{--                                                    </div>--}}
                                                                                        {{--                                                </div>--}}
                                                                                        <div class="c-grid__col c-grid__col--sm-4 c-grid__col--flex-initial">
                                                                                            <label class="uk-form-label">ارسال توسط:
                                                                                                <span class="uk-form-label__required"></span>
                                                                                            </label>
                                                                                            <div class="field-wrapper field-wrapper--background uk-flex uk-flex-middle js-checkbox-group-container">
                                                                                                <label class="c-ui-checkbox c-ui-checkbox--gap-sm disabled">
                                                                                                    <input type="checkbox" class="c-ui-checkbox__origin js-checkbox-group js-shipping-type-digikala" name="product_variant[shipping_type_digikala]" data-default-value="1" value="1" {{ ($product_variant->shipping_type == 'site')? 'checked' : '' }}>
                                                                                                    <span class="c-ui-checkbox__check c-ui-checkbox__check--small"></span>
                                                                                                    <span class="c-ui-checkbox__label">{{ $site_name }}</span>
                                                                                                </label>
                                                                                                <label class="c-ui-checkbox c-ui-checkbox--gap-sm disabled">
                                                                                                    <input type="checkbox" class="c-ui-checkbox__origin js-checkbox-group js-shipping-type-seller" name="product_variant[shipping_type_seller]" data-default-value="0" value="1" disabled>
                                                                                                    <span class="c-ui-checkbox__check c-ui-checkbox__check--small"></span>
                                                                                                    <span class="c-ui-checkbox__label">فروشنده</span>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="c-grid__col c-grid__col--sm-4 c-grid__col--flex-initial">
                                                                                            <label class="uk-form-label">فعال / غیرفعال:
                                                                                                <span class="uk-form-label__required"></span>
                                                                                            </label>
                                                                                            <div class="field-wrapper field-wrapper--background uk-flex uk-flex-middle">
                                                                                                <label class="c-ui-checkbox">
                                                                                                    <input type="checkbox" id="status_{{ $product_variant->id }}" class="c-ui-checkbox__origin " name="product_variant[active]" data-default-value="0"
                                                                                                           data-id="{{ $product_variant->id }}" {{ ($product_variant->status)? 'checked' : '' }}>
                                                                                                    <span class="c-ui-checkbox__check c-ui-checkbox__check--small"></span>
                                                                                                    <span class="c-ui-checkbox__label">فعال / غیرفعال</span>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="uk-flex uk-flex-wrap mt-30 w-100">
                                                                                        <div class="c-grid__col c-ui--mt-20 c-grid__col--sm-2 c-grid__col--flex-initial">
                                                                                            <span class="uk-form-label"> بازه زمانی ارسال (روز):
                                                                                                <span class="uk-form-label__required"></span>
                                                                                            </span>
                                                                                            <div class="field-wrapper">
                                                                                                <input type="text" class="uk-input js-variant-post-time" name="product_variant[lead_time]" value="{{ $product_variant->post_time }}">
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="c-grid__col c-ui--mt-20 c-grid__col--sm-2 c-grid__col--flex-initial">
                                                                                            <span class="uk-form-label"> حداکثر سفارش در سبد (عدد):
                                                                                                <span class="uk-form-label__required"></span>
                                                                                            </span>
                                                                                            <div class="field-wrapper">
                                                                                                <input type="text" name="product_variant[order_limit]" class="uk-input js-edit-order-limit" data-default-value="" value="{{ $product_variant->max_order_count }}">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="c-grid__col c-ui--mt-20 c-grid__col--sm-2 c-grid__col--flex-initial">
                                                                                            <span class="uk-form-label"> موجودی نزد شما (عدد):
                                                                                                <span class="uk-form-label__required"></span>
                                                                                            </span>
                                                                                            <div class="field-wrapper">
                                                                                                <input type="text" name="product_variant[marketplace_seller_stock]" class="uk-input js-edit-marketplace-seller-stock"
                                                                                                       value="{{ $product_variant->stock_count }}" data-default-value="1">
                                                                                                <input type="hidden" name="product_variant[marketplace_seller_old_stock]" class="uk-input js-edit-marketplace-seller-old-stock"
                                                                                                       value="{{ $product_variant->stock_count }}">
                                                                                            </div>
                                                                                        </div>
{{--                                                                                        <div class="c-grid__col c-ui--mt-20 c-grid__col--sm-2 c-grid__col--flex-initial">--}}
{{--                                                                                            <span class="uk-form-label">کد محصول فروشنده:--}}
{{--                                                                                            </span>--}}
{{--                                                                                            <div class="field-wrapper">--}}
{{--                                                                                                <input type="text" name="product_variant[supplier_code]" class="uk-input js-edit-seller-code disabled"--}}
{{--                                                                                                       data-default-value="" value="">--}}
{{--                                                                                            </div>--}}
{{--                                                                                        </div>--}}
{{--                                                                                        <div class="c-grid__col c-ui--mt-20 c-grid__col--sm-2 c-grid__col--flex-initial">--}}
{{--                                                                                            <span class="uk-form-label">قیمت مرجع (ریال):</span>--}}
{{--                                                                                            <div class="field-wrapper">--}}
{{--                                                                                                <div class="uk-input uk-flex uk-flex-middle">--}}
{{--                                                                                                    <span dir="ltr" data-debug="350000">۳۵۰,۰۰۰</span>--}}
{{--                                                                                                </div>--}}
{{--                                                                                            </div>--}}
{{--                                                                                        </div>--}}

                                                                                        <div class="c-grid__col c-ui--mt-20 c-grid__col--sm-2 c-grid__col--flex-initial">
                                                                                            <label class="uk-form-label">
                                                                                                قیمت خرید (ریال):
                                                                                            </label>
                                                                                            <div class="field-wrapper">
                                                                                                <input type="text" name="product_variant[buy_price]" data-editable="true" class="uk-input dk-currency js-edit-buy-price js-gold-final-price"
                                                                                                       data-default-value="{{ $product_variant->buy_price }}" value="{{ $product_variant->buy_price }}">
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="c-grid__col c-ui--mt-20 c-grid__col--sm-2 c-grid__col--flex-initial">
                                                                                            <span class="uk-form-label"> قیمت فروش (ریال):
                                                                                                <span class="uk-form-label__required"></span>
                                                                                            </span>
                                                                                            <div class="field-wrapper">
                                                                                                <input type="text" name="product_variant[price]" data-editable="true" class="uk-input dk-currency js-edit-price js-gold-final-price"
                                                                                                    data-default-value="{{ $product_variant->sale_price }}" value="{{ $product_variant->sale_price }}">
                                                                                            </div>
                                                                                        </div>


                                                                                        <div class="c-variant__btn-controls">
                                                                                            <div class="has-error has-error--footer js-edit-error hidden"></div>
                                                                                            <button class="c-ui-btn c-ui-btn--next mr-a js-variant-save-edit"
                                                                                                    data-id="{{ $product_variant->id }}">
                                                                                                ذخیره سازی
                                                                                            </button>
                                                                                            <button type="button" class="c-content-categories__search-reset js-variant-cancel-edit" data-id="{{ $product_variant->id }}"></button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="c-content-loader">
                                                                                        <div class="c-content-loader__logo"></div>
                                                                                        <div class="c-content-loader__spinner"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="c-variation-diversity__footer">

                                                        <div class="c-card__paginator">
                                                            <div class="c-ui-paginator js-paginator">
                                                                <div class="c-ui-paginator__total" data-rows="۱">
                                                                    تعداد نتایج: <span>{{ persianNum(count($product->variants)) }} مورد</span>
                                                                </div>

                                                                {{--                        <div class="c-ui-paginator__select">--}}
                                                                {{--                            <div class="c-ui-paginator__select-label">تعداد نمایش</div>--}}
                                                                {{--                            <div class="c-ui-paginator__select-pages">--}}
                                                                {{--                                <div class="field-wrapper ui-select ui-select__container">--}}
                                                                {{--                                    <select class="c-ui-select c-ui-select--common c-ui-select--small js-search-items-per-page" name="paginator-select-pages">--}}
                                                                {{--                                        <option value="10" selected>۱۰</option>--}}
                                                                {{--                                        <option value="20">۲۰</option>--}}
                                                                {{--                                        <option value="50">۵۰</option>--}}
                                                                {{--                                        <option value="100">۱۰۰</option>--}}
                                                                {{--                                    </select>--}}
                                                                {{--                                    <div class="js-select-options c-ui-paginator__dropdown-container"></div>--}}
                                                                {{--                                </div>--}}
                                                                {{--                            </div>--}}
                                                                {{--                        </div>--}}

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="c-card__loading"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="c-content-loader">
                                            <div class="c-content-loader__logo"></div>
                                            <div class="c-content-loader__spinner"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="productVariantTemplate" class="hidden">
            <div class="c-variant-box js-new-variant-container" data-max_lead_time="3">
                <input type="hidden" class="js-variant-iterator" name="product_variants[variants][]" value="">
                <input type="hidden" class="js-variant-attribute-id" name="" value="">
                <div class="c-variant-box__main">
                    <button type="button"
                            class="c-ui-btn c-ui-btn--clear-form c-variant-box__clear-form c-variant-box__clear-form--absolute js-remove-variant"
                            data-attribute-id=""></button>

                    <div class="c-grid__row c-grid__row--gap-lg">
                        @if($product->category()->first()->variantGroup()->first()->type !== 0)
                            <div class="c-grid__col c-grid__col--sm-2 c-grid__col--flex-initial">
                                <label class="uk-form-label">
                                    {{ $product->category()->first()->variantGroup()->first()->name }} کالا:
                                </label>
                                <div class="field-wrapper">
                                    <div class="uk-input uk-flex uk-flex-middle readonly">
                                        @if(isset($variant->value) && !is_null($variant->value))
                                        <span class="c-variant-checkbox__color js-variant-color-hex"></span>
                                        @endif
                                        <span class="js-variant-attribute-title"></span>
                                    </div>
                                </div>
           +                 </div>
                        @endif
                        <div class="c-grid__col c-grid__col--flex-initial c-grid__col--sm-10">
                            <label class="uk-form-label uk-flex uk-flex-between">
                                گارانتی کالا:
                                <span class="uk-form-label__required"></span>
                                <a href="{{ route('staff.warranties.create') }}" target="_blank" class="search-link">ایجاد گارانتی جدید</a>
                            </label>
                            <div class="field-wrapper ui-select ui-select__container">

                                <select name="" class="uk-input uk-input--select js-variant-warranty" data-placeholder="لطفا گارانتی را انتخاب کنید">
                                    <option></option>
                                    <option value="1">گارانتی اصالت و سلامت فیزیکی کالا</option>
                                    @if(count($warranties))
                                        @foreach($warranties as $warranty)
                                            @if(!is_null($warranty->month))
                                                <option value="{{ $warranty->id }}">گارانتی {{ persianNum($warranty->month) }} ماهه {{ $warranty->name }}</option>
                                            @else
                                                <option value="{{ $warranty->id }}">گارانتی {{ $warranty->name }}</option>
=                                           @endif
                                        @endforeach
                                    @endif
                                </select>
                                <div class="js-select-options"></div>
                            </div>
                        </div>
                    </div>
                    <div class="c-grid__row c-grid__row--gap-lg">
                        <div class="c-grid__col c-grid__col--sm-4 c-grid__col--flex-initial">
                            <label class="uk-form-label">ارسال توسط:
                                <span class="uk-form-label__required"></span>
                            </label>
                            <div
                                class="field-wrapper field-wrapper--background uk-flex uk-flex-middle js-checkbox-group-container">
                                <label class="c-ui-checkbox c-ui-checkbox--gap-sm disabled">
                                    <input type="checkbox"
                                           class="c-ui-checkbox__origin js-variant-shipping-type-digikala js-checkbox-group"
                                           name="" value="1" checked="">
                                    <span class="c-ui-checkbox__check c-ui-checkbox__check--small"></span>
                                    <span class="c-ui-checkbox__label">{{ $site_name }}</span>
                                </label>
                                <label class="c-ui-checkbox c-ui-checkbox--gap-sm disabled">
                                    <input type="checkbox"
                                           class="c-ui-checkbox__origin js-variant-shipping-type-seller js-checkbox-group"
                                           name="">
                                    <span class="c-ui-checkbox__check c-ui-checkbox__check--small"></span>
                                    <span class="c-ui-checkbox__label">فروشنده</span>
                                </label>
                            </div>
                        </div>
                        <div class="c-grid__col c-grid__col--sm-4 c-grid__col--flex-initial">
                            <label class="uk-form-label">فعال / غیرفعال:
                                <span class="uk-form-label__required"></span>
                            </label>
                            <div class="field-wrapper field-wrapper--background uk-flex uk-flex-middle">
                                <label class="c-ui-checkbox">
                                    <input type="checkbox" class="c-ui-checkbox__origin js-variant-active" name=""
                                           value="1" checked="">
                                    <span class="c-ui-checkbox__check c-ui-checkbox__check--small"></span>
                                    <span class="c-ui-checkbox__label">فعال / غیرفعال</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="c-grid__row c-grid__row--gap-lg">
                        <div class="c-grid__col c-ui--mt-20 c-grid__col--sm-2 c-grid__col--flex-initial">
                            <label class="uk-form-label">بازه زمانی ارسال (روز):
                                <span class="uk-form-label__required"></span>
                            </label>
                            <div class="field-wrapper">
                                <input type="text" class="uk-input js-variant-post-time" name="" value="">
                            </div>
                        </div>
                        <div class="c-grid__col c-ui--mt-20 c-grid__col--sm-2 c-grid__col--flex-initial">
                            <label class="uk-form-label">حداکثر سفارش در سبد (عدد):
                                <span class="uk-form-label__required"></span>
                            </label>
                            <div class="field-wrapper">
                                <input type="text" class="uk-input js-variant-order-limit" name="" value="">
                            </div>
                        </div>
                        <div class="c-grid__col c-ui--mt-20 c-grid__col--sm-2 c-grid__col--flex-initial">
                            <label class="uk-form-label">موجودی نزد شما (عدد):
                                <span class="uk-form-label__required"></span>
                            </label>
                            <div class="field-wrapper">
                                <input type="text" class="uk-input js-variant-marketplace-seller-stock" name=""
                                       value="">
                            </div>
                        </div>
                        <div class="c-grid__col c-ui--mt-20 c-grid__col--sm-2 c-grid__col--flex-initial">
                            <label class="uk-form-label">
                                قیمت خرید (ریال):
                            </label>
                            <div class="field-wrapper">
                                <input type="text" class="uk-input js-variant-buy-price" name="" value="">
                            </div>
                        </div>
                        <div class="c-grid__col c-ui--mt-20 c-grid__col--sm-2 c-grid__col--flex-initial">
                            <label class="uk-form-label">قیمت فروش (ریال):
                                <span class="uk-form-label__required"></span>
                            </label>
                            <div class="field-wrapper">
                                <input type="text" data-editable="false"
                                       class="uk-input  js-gold-final-price dk-currency js-variant-price" value="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div id="measuringRequestModal" class="marketplace-redesign uk-modal" uk-modal="">
            <div class="uk-modal-dialog uk-modal-dialog--confirm uk-modal-body">
                <button class="uk-modal-close uk-modal-close--search uk-close uk-icon" type="button" uk-close="">
                    <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg" ratio="1">
                        <line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"></line>
                        <line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"></line>
                    </svg>
                </button>

                <div class="modal-product modal-product--confirm modal-product--small">
                    <p class="modal-message--center">
                        آیا درخواست اندازه‌گیری مجدد از این کالا را دارید؟
                    </p>
                </div>

                <div class="modal-footer modal-footer--center">
                    <div class="uk-flex">
                        <button
                            class="modal-footer__btn modal-footer__btn--confirm modal-footer__btn--wide js-accept"
                            type="button">
                            اندازه‌گیری مجدد
                        </button>
                        <button class="modal-footer__btn modal-footer__btn--wide uk-modal-close js-decline"
                                type="button">انصراف
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="newWarrantyRequestModal" class="marketplace-redesign uk-modal c-variant" uk-modal="">
            <div class="uk-modal-dialog uk-modal-dialog--confirm uk-modal-body c-content-modal"
                 id="newWarrantyRequestModalContent">
                <button class="uk-modal-close uk-modal-close--search uk-close uk-icon" type="button" uk-close="">
                    <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg" ratio="1">
                        <line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"></line>
                        <line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"></line>
                    </svg>
                </button>
                <form id="newWarrantyRequestForm" novalidate="novalidate">
                    <input type="hidden" name="warranty[product_id]" value="{{ $product->id }}">
                    <div class="c-content-modal__header">
                        <h3 class="c-content-modal__title"> درخواست ایجاد گارانتی جدید</h3>
                    </div>
                    <div class="c-content-modal__body">
                        <div class="c-content-modal__body-container">
                            <div class="c-content-modal__intro">
                                می‌توانید با تکمیل و ارسال فرم زیر، درخواست ایجاد گارانتی جدید برای محصول خود را ثبت
                                نمایید.
                            </div>
                            <div class="c-content-modal__notes">
                                <span class="c-content-modal__notes-title">توجه:</span>
                                <ul class="c-content-modal__notes-list">
                                    <li>عنوان گارانتی، مدت زمان، شماره تماس، آدرس مرکز خدمات پس از فروش و شرایط
                                        گارانتی کالا بایستی روی تصویر کارت گارانتی بارگذاری شده، وجود داشته باشد.
                                    </li>
                                    <li>گارانتی‌هایی با مدت زمان کمتر از شش ماه مورد تایید دیجی کالا نیستند.</li>
                                    <li>
                                        برای کالاهایی که گارانتی مورد تایید اتحادیه دارند، استفاده از گارانتی‌های
                                        متفرقه امکان‌پذیر نیست.
                                        <br>
                                        برای اطلاع از این کالاها می‌توانید لینک‌های زیر را مشاهده کنید:
                                    </li>
                                    <li class="c-content-modal__notes-item">
                                        <a target="_blank"
                                           href="http://www.hau.ir/%D8%AE%D8%AF%D9%85%D8%A7%D8%AA-%D9%BE%D8%B3-%D8%A7%D8%B2-%D9%81%D8%B1%D9%88%D8%B4/%D8%AE%D8%AF%D9%85%D8%A7%D8%AA-%D9%BE%D8%B3-%D8%A7%D8%B2-%D9%81%D8%B1%D9%88%D8%B4-%D8%A8%D8%B1%D9%86%D8%AF-%D8%AE%D8%A7%D8%B1%D8%AC%DB%8C">-
                                            اتحادیه صنف تهیه‌کنندگان و فروشندگان مصنوعات گاز سوز - نفت سوز - الکتریک
                                            (لوازم خانگی)</a>
                                    </li>
                                    <li class="c-content-modal__notes-item">
                                        <a target="_blank"
                                           href="https://www.itunion.ir/khadamat/moarefi-sherkat.html">- اتحادیه صنف
                                            فناوران رایانه تهران</a>
                                    </li>
                                    <li class="c-content-modal__notes-item">
                                        <a target="_blank"
                                           href="https://cppo.mimt.gov.ir/general_content/565799-%D9%84%DB%8C%D8%B3%D8%AA-%D8%B4%D8%B1%DA%A9%D8%AA%D9%87%D8%A7%DB%8C%DB%8C-%DA%A9%D9%87-%D8%AF%D8%B1-%D8%AD%D9%88%D8%B2%D9%87-IT-%D8%A7%D8%B2-%D8%B3%D8%A7%D8%B2%D9%85%D8%A7%D9%86-%D8%AD%D9%85%D8%A7%DB%8C%D8%AA-%D9%85%D8%B5%D8%B1%D9%81-%DA%A9%D9%86%D9%86%D8%AF%DA%AF%D8%A7%D9%86-%D8%AA%D9%88%D9%84%DB%8C%D8%AF%DA%A9%D9%86%D9%86%D8%AF%DA%AF%D8%A7%D9%86-%D8%AA%D8%A7%DB%8C%DB%8C%D8%AF%DB%8C%D9%87-%D8%B5%D8%AF%D9%88%D8%B1-%DA%A9%D8%A7%D8%B1%D8%AA-%D8%B6%D9%85%D8%A7%D9%86%D8%AA.html?t=%C3%99%E2%80%A6%C3%98%C2%AD%C3%98%C2%AA%C3%99%CB%86%C3%98%C2%A7%C3%9B%C5%92-%C3%98%C2%B9%C3%99%E2%80%A6%C3%99%CB%86%C3%99%E2%80%A6%C3%9B%C5%92">-
                                            سازمان حمایت مصرف‌کنندگان و تولیدکنندگان</a>
                                    </li>
                                </ul>
                            </div>
                            <div
                                class="c-variant-error c-variant-error__box c-variant-error__box--modal mt-20 mb-20 hidden"
                                id="ajaxWarrantyErrorsList">
                            </div>

                            <div class="c-grid__row c-grid__row--gap-lg mt-30">
                                <div
                                    class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--lg-6">
                                    <div class="c-grid__row c-grid__row--gap-lg">
                                        <div
                                            class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--row-attr">
                                            <label for="" class="uk-form-label">
                                                نام گارانتی:
                                                <span class="uk-form-label__required"></span>
                                            </label>
                                            <div class="field-wrapper">
                                                <input type="text" placeholder="نام گارانتی خود را وارد کنید …"
                                                       class="uk-input" name="warranty[warranty_title]">
                                            </div>
                                        </div>
                                        <div
                                            class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--row-attr">
                                            <label for="" class="uk-form-label">
                                                مدت زمان گارانتی (بر حسب ماه وارد کنید):
                                                <span class="uk-form-label__required"></span>
                                            </label>
                                            <div class="field-wrapper">
                                                <input name="warranty[warranty_period]" class="uk-input">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--lg-6">
                                    <label class="uk-form-label">
                                        تصویر برگ گارانتی (پشت و رو):
                                        <span class="uk-form-label__required"></span>
                                    </label>

                                    <div class="field-wrapper">
                                        <div class="c-content-modal__uploads-horizontal">
                                            <div
                                                class="c-content-modal__uploads-label c-content-modal__uploads-label--warranty empty">
                                                <label id="uploadWarrantyImageFront"
                                                       class="c-content-modal__uploads-preview">
                                        <span uk-form-custom="" class="uk-form-custom">
                                            <input id="newWarrantyFileFront" type="file" class="hidden">
                                        </span>
                                                    <img src="" id="warrantyImagePreviewFront"
                                                         class="c-content-modal__uploads-img" alt="">
                                                    <span class="c-content-upload__img-loader js-img-loader">
                                            <span class="progress__wrapper">
                                                <span class="progress"></span>
                                            </span>
                                        </span>
                                                </label>
                                                <div class="c-content-modal__errors-full"
                                                     id="newWarrantyImageFrontUploadErrors"></div>
                                                <input type="hidden" name="warranty[warranty_image_id_1]"
                                                       class="force-validation" id="warrantyImageTempIdFront">
                                            </div>

                                            <div
                                                class="c-content-modal__uploads-label c-content-modal__uploads-label--warranty empty">
                                                <label id="uploadWarrantyImageBack"
                                                       class="c-content-modal__uploads-preview">
                                        <span uk-form-custom="" class="uk-form-custom">
                                            <input id="newWarrantyFileBack" type="file" class="hidden">
                                        </span>
                                                    <img src="" id="warrantyImagePreviewBack"
                                                         class="c-content-modal__uploads-img" alt="">
                                                    <span class="c-content-upload__img-loader js-img-loader">
                                            <span class="progress__wrapper">
                                                <span class="progress"></span>
                                            </span>
                                        </span>
                                                </label>
                                                <div class="c-content-modal__errors-full"
                                                     id="newWarrantyImageBackUploadErrors"></div>
                                                <input type="hidden" name="warranty[warranty_image_id_2]"
                                                       class="force-validation" id="warrantyImageTempIdBack">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="c-grid__row c-grid__row--gap-lg">
                                <div class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial">
                                    <div class="field-wrapper">
                                        <label class="c-ui-checkbox">
                                            <input type="checkbox" class="c-ui-checkbox__origin"
                                                   name="warranty[has_insurance]" id="warrantyHasInsurance">
                                            <span class="c-ui-checkbox__check c-ui-checkbox__check--small"></span>
                                            <span class="c-ui-checkbox__label c-ui-checkbox__label--small">کالا دارای بیمه می‌باشد.</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div id="insuranceContainer" class="c-grid__row c-grid__row--gap-lg"
                                 style="display: none">
                                <div
                                    class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--lg-6">
                                    <div class="c-grid__row c-grid__row--gap-lg">
                                        <div
                                            class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--row-attr">
                                            <div class="uk-form-label">
                                                نام بیمه:
                                                <span class="uk-form-label__required"></span>
                                            </div>
                                            <div class="field-wrapper">
                                                <input type="text" class="uk-input disabled"
                                                       name="warranty[insurance_title]" id="insuranceTitle"
                                                       placeholder="نام بیمه خود را وارد کنید …" disabled="">
                                            </div>
                                        </div>
                                        <div
                                            class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--row-attr">
                                            <label class="uk-form-label">
                                                مدت زمان بیمه (بر حسب ماه وارد کنید):
                                                <span class="uk-form-label__required"></span>
                                            </label>
                                            <div class="field-wrapper">
                                                <input name="warranty[insurance_period]" id="insurancePeriod"
                                                       class="uk-input disabled " disabled="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--lg-6">
                                    <label class="uk-form-label">
                                        تصویر برگ بیمه (پشت و رو):
                                        <span class="uk-form-label__required"></span>
                                    </label>
                                    <div class="field-wrapper">
                                        <div class="c-content-modal__uploads-horizontal">
                                            <div
                                                class="c-content-modal__uploads-label c-content-modal__uploads-label--warranty empty">
                                                <label id="uploadInsuranceImageFront"
                                                       class="c-content-modal__uploads-preview">
                                        <span uk-form-custom="" class="uk-form-custom">
                                            <input id="newInsuranceImageFront" type="file" class="hidden">
                                        </span>
                                                    <img src="" id="insuranceImagePreviewFront"
                                                         class="c-content-modal__uploads-img" alt="">
                                                    <span class="c-content-upload__img-loader js-img-loader">
                                            <span class="progress__wrapper">
                                                <span class="progress"></span>
                                            </span>
                                        </span>
                                                </label>
                                                <div class="c-content-modal__errors-full"
                                                     id="newInsuranceImageFrontUploadErrors"></div>
                                                <input type="hidden" name="warranty[insurance_image_id_1]"
                                                       class="force-validation" id="insuranceImageTempIdFront"
                                                       disabled="">
                                            </div>
                                            <div
                                                class="c-content-modal__uploads-label c-content-modal__uploads-label--warranty empty">
                                                <label id="uploadInsuranceImageBack"
                                                       class="c-content-modal__uploads-preview">
                                        <span uk-form-custom="" class="uk-form-custom">
                                            <input id="newInsuranceImageBack" type="file" class="hidden">
                                        </span>
                                                    <img src="" id="insuranceImagePreviewBack"
                                                         class="c-content-modal__uploads-img" alt="">
                                                    <span class="c-content-upload__img-loader js-img-loader">
                                            <span class="progress__wrapper">
                                                <span class="progress"></span>
                                            </span>
                                        </span>
                                                </label>
                                                <div class="c-content-modal__errors-full"
                                                     id="newInsuranceImageBackUploadErrors"></div>
                                                <input type="hidden" name="warranty[insurance_image_id_2]"
                                                       class="force-validation" id="insuranceImageTempIdBack"
                                                       disabled="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-content-modal__footer">
                        <button
                            class="modal-footer__btn modal-footer__btn--confirm modal-footer__btn--wide js-accept"
                            type="button" id="saveWarrantyRequestButton">
                            ارسال درخواست
                        </button>
                        <button class="modal-footer__btn modal-footer__btn--wide uk-modal-close" type="button"
                                id="cancelWarrantyRequestButton">انصراف
                        </button>
                    </div>
                </form>
                <div class="c-content-loader">
                    <div class="c-content-loader__logo"></div>
                    <div class="c-content-loader__spinner"></div>
                </div>
            </div>
        </div>
        <div id="newSizeRequestModal" class="marketplace-redesign uk-modal c-variant" uk-modal="">
            <div class="uk-modal-dialog uk-modal-dialog--confirm uk-modal-body c-content-modal"
                 id="newSizeRequestModalContent">
                <button class="uk-modal-close uk-modal-close--search uk-close uk-icon" type="button" uk-close="">
                </button>
                <form id="newSizeRequestForm" novalidate="novalidate">
                    <input type="hidden" name="size[product_id]" value="{{ $product->id }}">
                    <div class="c-content-modal__header">
                        <h3 class="c-content-modal__title"> درخواست ایجاد سایز جدید</h3>
                    </div>
                    <div class="c-content-modal__body">
                        <div class="c-content-modal__body-container">
                            <div class="c-content-modal__intro">
                                می‌توانید با تکمیل و ارسال فرم زیر، درخواست ایجاد سایز جدید برای محصول خود را ثبت
                                نمایید.
                            </div>
                            <div
                                class="c-variant-error c-variant-error__box c-variant-error__box--modal mt-20 mb-20 hidden"
                                id="ajaxSizeErrorsList">
                            </div>
                            <div class="c-grid__row c-grid__row--gap-lg mt-30">
                                <div class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial">
                                    <label for="" class="uk-form-label">
                                        عنوان سایز:
                                        <span class="uk-form-label__required"></span>
                                    </label>
                                    <div class="field-wrapper">
                                        <input type="text" placeholder="عنوان سایز را وارد کنید …" class="uk-input"
                                               value="" name="size[title]">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-content-modal__footer">
                        <button class="modal-footer__btn modal-footer__btn--confirm modal-footer__btn--wide"
                                type="button" id="saveSizeRequestButton">
                            ارسال درخواست
                        </button>
                        <button class="modal-footer__btn modal-footer__btn--wide uk-modal-close" type="button"
                                id="cancelSizeRequestButton">انصراف
                        </button>
                    </div>
                </form>
                <div class="c-content-loader">
                    <div class="c-content-loader__logo"></div>
                    <div class="c-content-loader__spinner"></div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
@section('script')
<script>

        // تبدیل اعداد انگلیسی به فارسی
        function ConvertNumberToPersion() {
            persian = {0: '۰', 1: '۱', 2: '۲', 3: '۳', 4: '۴', 5: '۵', 6: '۶', 7: '۷', 8: '۸', 9: '۹'};

            function traverse(el) {
                if (el.nodeType == 3) {
                    var list = el.data.match(/[0-9]/g);
                    if (list != null && list.length != 0) {
                        for (var i = 0; i < list.length; i++)
                            el.data = el.data.replace(list[i], persian[list[i]]);
                    }
                }
                for (var i = 0; i < el.childNodes.length; i++) {
                    traverse(el.childNodes[i]);
                }
            }

            traverse(document.body);
        }

        // توکن csrf
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // پجینیشن
        $(document).on('click', '.c-ui-paginator__control a', function (e) {
            e.preventDefault();

            var page = $(this).attr('href').split('page=')[1];

            var pageType = $("input[name='page_type']").val();

            if (pageType == 'index') {
                var url = "{{route('staff.products.ajaxPagination')}}?page=" + page;
            } else if (pageType == 'only_special') {
                var url = "{{route('staff.products.filterByType')}}?page=" + page;
            } else if (pageType == 'productsearch') {
                var url = "{{route('staff.products.productSearch')}}?page=" + page;
            } else if (pageType == 'productCatSearch') {
                var url = "{{route('staff.products.productCatSearch')}}?page=" + page;
            }

            if (pageType == 'productCatSearch' || pageType == 'productsearch') {
                var searchValue = $("#searchKeyword").val();
                var data = {
                    page: page,
                    search_keyword: searchValue,
                }
            } else {
                var data = {
                    page: page,
                }
            }

            $.ajax({
                method: 'post',
                url: url,
                data: data,
                success: function (result) {
                    $(".js-table-container").html(result);
                    window.pagination_type = 'withoutFilter';
                }
            });
        });

        // نمایش محصول: ویژه و همه
        $(".search_type").on('change', function () {

            var searchType = $("input:checked[name='search_type']").val();

            $.ajax({
                type: 'post',
                url: '{{route('staff.products.filterByType')}}',
                data: {
                    search_type: searchType,
                },
                success: function (result) {
                    $(".js-table-container").replaceWith(result);
                }
            });
        });

        $(document).on('click', '.delete-btn', function () {
            $(this).closest('.c-ui-table__cell').find('.uk-modal-container').addClass('uk-open');
            $(this).closest('.c-ui-table__cell').find('.uk-modal-container').css('display', 'block');
            $('.c-header__nav').hide();

            $(document).on('click', '.yes', function () {

                $('.c-header__nav').show();


                var product_id = $(this).closest('.c-ui-table__cell').find('.delete-btn').val();

                $.ajax({
                    method: 'post',
                    url: "{{route('staff.products.moveToTrash')}}",
                    data: {
                        'id': product_id,
                    },
                    success: function (result) {
                        $('.js-table-container').replaceWith(result);
                    },
                });

            });

            $(document).on('click', '.uk-modal-close-default', function () {
                $('.c-header__nav').show();
            });

            $(document).on('click', '.no', function () {
                $('.c-header__nav').show();
            });


        });

        //دکمه سرچ
        $("#search-btn").on('click', function () {

            var searchValue = $("#searchKeyword").val();
            var searchGroup = $("#searchGroup").val();

            if (searchGroup == 'product_name') {
                var url = "{{route('staff.products.productSearch')}}";
            } else if (searchGroup == 'product_category') {
                var url = "{{route('staff.products.productCatSearch')}}";
            }

            $.ajax({
                type: 'post',
                url: url,
                data: {
                    'search_keyword': searchValue,
                    'searchGroup': searchGroup,
                },
                success: function (result) {
                    $(".js-table-container").replaceWith(result);
                    if ($(".search_type:checked").val()) {
                        $(this).removeAttr('checked');
                    }
                }
            });
        });

        // دکمه حذف سرچ
        $("#searchClear").on('click', function () {
            $.ajax({
                method: 'post',
                url: "{{route('staff.products.ajaxPagination')}}",
                success: function (result) {
                    $(".js-table-container").html(result);
                }
            });
        });

        // ایجکس سرچ
        $('#searchKeyword').on('keyup', function () {

            var searchValue = $(this).val();

            if (searchValue.length > 0) {
                $("#search-btn").removeAttr('disabled');
                $("#searchClear").removeAttr('disabled');

                $("#searchClear").on('click', function () {
                    $("#searchKeyword").val('');
                    $("#search-btn").attr('disabled', true);
                    $("#searchClear").attr('disabled', true);
                });

            }

            if (searchValue.length == 0) {
                $("#search-btn").attr('disabled', true);
                $("#searchClear").attr('disabled', true);

                $.ajax({
                    type: 'post',
                    url: '{{route('staff.products.ajaxPagination')}}',
                    success: function (result) {
                        $(".js-table-container").replaceWith(result);
                    }
                });
            }

        });

        // انتخاب تعداد نمایش: غیرفعال
        $("select[name='paginator-select-pages']").on('change', function () {
            //selectbox paginator val
            var selectedPaginator = $(this).val();

            $.ajax({
                type: 'post',
                url: "{{route('staff.products.ajaxPagination')}}",
                data: {
                    paginatorNum: selectedPaginator,
                },
                success: function (result) {
                    $("js-table-container").replaceWith(result);
                }
            });
        });


        $(document).on('change', 'input[name="status"]', function () {
            if ($(this).is(':checked')) {
                var status = 1;
            } else {
                var status = 0;
            }
            var data_product_id = $(this).attr('data-product-id');

            $.ajax({
                method: 'post',
                url: "{{ route('staff.products.statusProduct') }}",
                data: {
                    'status': status,
                    'product_id': data_product_id,
                },
            });

        });


    </script>
@endsection