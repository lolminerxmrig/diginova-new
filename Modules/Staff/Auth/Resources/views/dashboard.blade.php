@extends('layouts.staff.master')
@section('head')
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
    var module_marketplace_new_invoice_design = 1;
    var module_marketplace_warehouse_postal_code = 1;
    var module_marketplace_show_warehouse_address_map = 1;
    var module_marketplace_reporting_and_insights_top_deactivated = 1;
    var module_marketplace_village_seller_badge = 1;
    var module_marketplace_add_work_day = 1;
    var module_marketplace_add_more_filter_on_ship_by_seller_order_page = 1;
    var module_ds_return_order = 1;
    var module_breaking_payment = 1;
    var module_orders_full_log = 1;
    var module_available_ts_for_non_plus_users = 1;
    var module_marketplace_promotion_new_features = 1;
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
    var module_main_category_dynamic_carousels = 1;
    var module_plus_partnership_filimo = 1;
    var module_plus_partnership = 1;
    var module_dk_end_of_referral_time = 1;
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
    var module_dk_birthday_referral = 1;
    var module_profile_return_invoice_list = 1;
    var module_dk_company_national_number_equal_economic = 1;
    var module_video_bulk = 1;
    var module_dpo_update_price = 1;
    var module_fulfillment_dpo_rts_validation = 1;
    var module_seller_first_party_updater = 1;
    var module_admin_panel_payment_limitation = 1;
    var module_new_customer_floating_box = 1;
    var module_check_having_wallet_before_set_wallet_prefer = 1;
    var module_lead_time_postpone = 1;
    var module_plus_free_shipment_expansion = 1;
    var module_dynamic_shipping_cost_phase_2 = 1;
    var module_new_desktop_time_table = 1;
    var module_pdp_plp_special_amazing = 1;
    var module_fresh_instant_plus_cash_back = 1;
    var module_similar_brand = 1;
    var module_plp_mobile_fidibo_banner = 1;
    var module_custom_payment_plus = 1;
    var module_asserting_pricing_rules_in_po = 1;
    var module_search_product_suggestions = 1;
    var module_year_end_99 = 1;
    var module_ds_new_footer = 1;
    var module_chatbot = 1;
    var module_ds_refund_modals = 1;
    var module_ds_seo_home_page = 1;
    var module_leadtime_postpone_improvement = 1;
    var module_dk_my_landing_carousel = 1;
    var module_ds_new_home_desktop = 1;
    var module_payment_voucher_gift_separation = 1;
    var module_cpc_pdp_placements = 1;
    var module_fulfilemnt_po_international = 1;
    var module_dk_search_boxes = 1;
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
    var module_banner_data_layer_ds = 1;
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
{{--                      <div class="c-rating-chart__stars-container c-rating-chart__stars-container--rating-stars">--}}
{{--                        <div class="c-rating-chart__stars-summary">۰</div>--}}

{{--                        <div class="c-rating-chart__stars-row">--}}
{{--                          <div class="c-rating-chart__star">--}}
{{--                          </div>--}}
{{--                          <div class="c-rating-chart__star">--}}
{{--                          </div>--}}
{{--                          <div class="c-rating-chart__star">--}}
{{--                          </div>--}}
{{--                          <div class="c-rating-chart__star">--}}
{{--                          </div>--}}
{{--                          <div class="c-rating-chart__star">--}}
{{--                          </div>--}}
{{--                        </div>--}}

{{--                      </div>--}}
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
                    <div class="c-interactive-status__title">روش های پرداخت</div>
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
                    <h2 class="c-card__title c-card__title--dark">تنوع های فعال در پروموشن‌ها
                      <span class="c-card__title-side c-card__title-side--arrow">۰
                        </span>
                    </h2>
                  </div>
                </a>

{{--                <div class="c-rating-chart__description-tooltip uk-dropdown uk-dropdown-bottom-left" uk-dropdown="boundary: .js-dropdown-desc; pos: bottom-left" style="left: 439px; top: 335px;">--}}
{{--                  <a href="/promotion-management/products/?search%5Bstatus%5D=approved&amp;search%5Bpromotion_status%5D=active" class="c-rating-chart__details-bar">--}}
{{--                    <div class="c-rating-chart__description c-rating-chart__description--bar c-rating-chart__description--sub">پروموشن‌ها:</div>--}}
{{--                    <div class="c-rating-chart__details-value c-rating-chart__details-value--sub">--}}
{{--                      ۰--}}
{{--                    </div>--}}
{{--                  </a>--}}
{{--                  <a href="/periodic-prices/active/?search%5Bstatus%5D=approved" class="c-rating-chart__details-bar">--}}
{{--                    <div class="c-rating-chart__description c-rating-chart__description--bar c-rating-chart__description--sub">تخفیف‌های زمان‌ دار:</div>--}}
{{--                    <div class="c-rating-chart__details-value c-rating-chart__details-value--sub">--}}
{{--                      ۰--}}
{{--                    </div>--}}
{{--                  </a>--}}
{{--                </div>--}}

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

{{--                      <div class="c-rating-chart__description-tooltip uk-dropdown" uk-dropdown="boundary: .js-dropdown-desc; pos: bottom-center">--}}
{{--                        <a href="/productconfig/editinformation/?search%5Bactive%5D=1" class="c-rating-chart__details-bar"></a>--}}
{{--                        <a href="/productconfig/editinformation/?search%5Bout_of_stock%5D=0&amp;search%5Bactive%5D=1" class="c-rating-chart__details-bar">--}}
{{--                          <div class="c-rating-chart__description c-rating-chart__description--bar c-rating-chart__description--sub">با موجودی:</div>--}}
{{--                          <div class="c-rating-chart__details-value c-rating-chart__details-value--sub">--}}
{{--                            ۰--}}
{{--                          </div>--}}
{{--                        </a>--}}
{{--                        <a href="/productconfig/editinformation/?search%5Bout_of_stock%5D=1&amp;search%5Bactive%5D=1" class="c-rating-chart__details-bar">--}}
{{--                          <div class="c-rating-chart__description c-rating-chart__description--bar c-rating-chart__description--sub">بدون موجودی:</div>--}}
{{--                          <div class="c-rating-chart__details-value c-rating-chart__details-value--sub">--}}
{{--                            ۱--}}
{{--                          </div>--}}
{{--                        </a>--}}
{{--                      </div>--}}

                    </div>

                    <div class="c-rating-chart c-rating-chart--condensed">
                      <a class="c-rating-chart__details-bar">
                        <div class="c-rating-chart__description c-rating-chart__description--bar c-card__stat-description uk-inline">
                          محصولات پیش نویس
                          <div class="c-rating-chart__description"></div>
                        </div>
                        <div class="c-rating-chart__details-value c-rating-chart__details-value--large">
                          {{ persianNum($products->where('status', 0)->count()) }}
                        </div>
                      </a>

{{--                      <div class="c-rating-chart__description-tooltip uk-dropdown" uk-dropdown="boundary: .js-dropdown-desc; pos: bottom-center">--}}
{{--                        <a href="/productconfig/editinformation/?search%5Bactive%5D=2" class="c-rating-chart__details-bar">--}}
{{--                        </a><a href="/productconfig/editinformation/?search%5Bout_of_stock%5D=0&amp;search%5Bactive%5D=2" class="c-rating-chart__details-bar">--}}
{{--                          <div class="c-rating-chart__description c-rating-chart__description--bar c-rating-chart__description--sub">با موجودی:</div>--}}
{{--                          <div class="c-rating-chart__details-value c-rating-chart__details-value--sub">--}}
{{--                            ۱۸--}}
{{--                          </div>--}}
{{--                        </a>--}}
{{--                        <a href="/productconfig/editinformation/?search%5Bout_of_stock%5D=1&amp;search%5Bactive%5D=2" class="c-rating-chart__details-bar">--}}
{{--                          <div class="c-rating-chart__description c-rating-chart__description--bar c-rating-chart__description--sub">بدون موجودی:</div>--}}
{{--                          <div class="c-rating-chart__details-value c-rating-chart__details-value--sub">--}}
{{--                            ۴--}}
{{--                          </div>--}}
{{--                        </a>--}}
{{--                      </div>--}}

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

{{--                      <div class="c-rating-chart__description-tooltip uk-dropdown" uk-dropdown="boundary: .js-dropdown-desc; pos: bottom-center">--}}
{{--                        <a href="/inventory/?search%5Bhas_selling_stock%5D=2&amp;search%5Bproduct_variant_is_active%5D=1" class="c-rating-chart__details-bar">--}}
{{--                        </a><a href="#" class="c-rating-chart__details-bar c-rating-chart__details-bar--wrap">--}}
{{--                          <div class="c-rating-chart__description c-rating-chart__description--bar c-rating-chart__description--sub c-card__stat-description">مبلغ فروش از دست رفته <span>در ۳۰ روز گذشته</span></div>--}}
{{--                          <div class="c-rating-chart__details-value c-rating-chart__details-value--sub">--}}
{{--                            <span dir="ltr" data-debug="۰">۰</span>--}}
{{--                            ریال--}}
{{--                          </div>--}}
{{--                        </a>--}}
{{--                      </div>--}}

{{--                      <span class="c-rating-chart__description--sub">دارای فروش در ۳۰ روز گذشته</span>--}}

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
{{--                          در ۳۰ روز گذشته--}}
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
                    <h2 class="c-card__title">مدیریت تنوع و قیمت گذاری</h2>
                  </div>
                  <div class="c-card__body">
                    <a class="c-rating-chart c-rating-chart--condensed">
                      <div class="c-rating-chart__details-bar">
                        <div class="c-rating-chart__description c-rating-chart__description--bar c-card__stat-description uk-inline">
                          کل تنوع های فعال
                        </div>
                        <div class="c-rating-chart__details-value c-rating-chart__details-value--large">
                          {{ persianNum(\Modules\Staff\Product\Models\ProductHasVariant::where('status', 1)->count()) }}
                        </div>
                      </div>
                    </a>

                    <a class="c-rating-chart c-rating-chart--condensed">
                      <div class="c-rating-chart__details-bar">
                        <div class="c-rating-chart__description c-rating-chart__description--bar c-card__stat-description uk-inline">
                         کل تنوع های غیرفعال
                        </div>
                        <div class="c-rating-chart__details-value c-rating-chart__details-value--large">
                          {{ persianNum(\Modules\Staff\Product\Models\ProductHasVariant::where('status', 0)->count()) }}
                        </div>
                      </div>
                    </a>

                    <a class="c-rating-chart c-rating-chart--condensed">
                      <div class="c-rating-chart__details-bar">
                        <div class="c-rating-chart__description c-rating-chart__description--bar c-card__stat-description uk-inline">
                          تنوع هایی که فروش نداشتند
                        </div>
                        <div class="c-rating-chart__details-value c-rating-chart__details-value--large">
                          {{ persianNum($consignments->count() - count(\Modules\Staff\Product\Models\ProductVariantable::where('variantable_type', 'ConsignmentHasProductVariants')->select('variantable_id')->distinct()->get())) }}
                        </div>
                      </div>
                    </a>
                    <div class="c-rating-chart c-rating-chart--condensed">
                      <a class="c-rating-chart__details-bar">
                        <div class="c-rating-chart__description c-rating-chart__description--bar c-card__stat-description uk-inline">
                           تنوع های در حال اتمام موجودی (کمتر از سه عدد)
{{--                          <div class="c-rating-chart__description">۳ عدد و کمتر</div>--}}
                        </div>

                        <div class="c-rating-chart__details-value c-rating-chart__details-value--large">
                          {{ persianNum(\Modules\Staff\Product\Models\ProductHasVariant::where('stock_count', '<', 3)->where('stock_count', '>', 0)->count()) }}
                        </div>
                      </a>

{{--                      <div class="c-rating-chart__description-tooltip uk-dropdown" uk-dropdown="boundary: .js-dropdown-desc; pos: bottom-center">--}}
{{--                        <a href="/orders/" class="c-rating-chart__details-bar">--}}
{{--                        </a><a href="/orders/?search%5Bhas_warehouse_stock%5D=1" class="c-rating-chart__details-bar">--}}
{{--                          <div class="c-rating-chart__description c-rating-chart__description--bar c-rating-chart__description--sub">موجود در دیجیکالا:</div>--}}
{{--                          <div class="c-rating-chart__details-value c-rating-chart__details-value--sub">--}}
{{--                            ۰--}}
{{--                          </div>--}}
{{--                        </a>--}}
{{--                        <a href="/orders/?search%5Bhas_warehouse_stock%5D=0" class="c-rating-chart__details-bar">--}}
{{--                          <div class="c-rating-chart__description c-rating-chart__description--bar c-rating-chart__description--sub">ناموجود در دیجیکالا:</div>--}}
{{--                          <div class="c-rating-chart__details-value c-rating-chart__details-value--sub">--}}
{{--                            ۰--}}
{{--                          </div>--}}
{{--                        </a>--}}
{{--                      </div>--}}

                    </div>
                    <a class="c-rating-chart c-rating-chart--condensed">
                      <div class="c-rating-chart__details-bar">
                        <div class="c-rating-chart__description c-rating-chart__description--bar c-card__stat-description uk-inline">
                          تنوع های بدون موجودی
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
                          <div class="c-rating-chart__description c-rating-chart__description--bar c-rating-chart__description--sub c-card__stat-description">حداقل یک فروشنده روی کالای مشابه قیمت گذاری کرده است</div>
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
                        {{--                        <div class="c-rating-chart__description-tooltip uk-dropdown" uk-dropdown="boundary: .js-dropdown-desc; pos: bottom-center;delay: 0">--}}
                        {{--                          <div class="c-rating-chart__description c-rating-chart__description--bar c-rating-chart__description--sub c-card__stat-description"> تنوع هایی کا کاهش هوشمند قیمت برای آنها فعال است تا همیشه برنده بای یاکس بمانند.</div>--}}
                        {{--                        </div>--}}
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
                          <div class="c-rating-chart__description c-rating-chart__description--bar c-rating-chart__description--sub c-card__stat-description">تنوع های که در حال حاضرشما تنها فروشنده آن هستید</div>
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

{{--            <div class="c-grid__row">--}}
{{--              <div class="c-grid__col">--}}
{{--                <div class="c-card" id="dashboard-step-13">--}}
{{--                  <div class="c-card__header">--}}
{{--                    <h2 class="c-card__title">آمار بازدید</h2>--}}
{{--                  </div>--}}
{{--                  <div class="c-card__body uk-flex uk-height-1-1 uk-flex-middle">--}}
{{--                    <div class="c-grid__row">--}}
{{--                      <div class="c-grid__col c-grid__col--sm-2 c-grid__col--xs-6">--}}
{{--                        <a class="c-card__stat">--}}
{{--                          <div class="c-card__stat-value">۰</div>--}}
{{--                          <p class="c-card__stat-description">افراد آنلاین</p>--}}
{{--                        </a>--}}
{{--                      </div>--}}

{{--                      <div class="c-grid__col c-grid__col--sm-2 c-grid__col--xs-6">--}}
{{--                        <a class="c-card__stat">--}}
{{--                          <div class="c-card__stat-value">۰</div>--}}
{{--                          <div class="c-card__stat-description">--}}
{{--                            بازدید امروز--}}
{{--                          </div>--}}
{{--                        </a>--}}
{{--                      </div>--}}

{{--                      <div class="c-grid__col c-grid__col--sm-2 c-grid__col--xs-6 c-grid__col--xs-gap ">--}}
{{--                        <a class="c-card__stat">--}}
{{--                          <div class="c-card__stat-value">۰</div>--}}
{{--                          <p class="c-card__stat-description">بازدید صفحات امروز</p>--}}
{{--                        </a>--}}
{{--                      </div>--}}

{{--                      <div class="c-grid__col c-grid__col--sm-2 c-grid__col--xs-6 c-grid__col--xs-gap">--}}
{{--                        <a class="c-card__stat">--}}
{{--                          <div class="c-card__stat-value">۰</div>--}}
{{--                          <p class="c-card__stat-description">بازدید دیروز</p>--}}
{{--                        </a>--}}
{{--                      </div>--}}

{{--                      <div class="c-grid__col c-grid__col--sm-2 c-grid__col--xs-6 c-grid__col--xs-gap">--}}
{{--                        <a class="c-card__stat">--}}
{{--                          <div class="c-card__stat-value">۰</div>--}}
{{--                          <p class="c-card__stat-description">بازدید ماهانه</p>--}}
{{--                        </a>--}}
{{--                      </div>--}}

{{--                      <div class="c-grid__col c-grid__col--sm-2 c-grid__col--xs-6 c-grid__col--xs-gap">--}}
{{--                        <a class="c-card__stat">--}}
{{--                          <div class="c-card__stat-value">۰</div>--}}
{{--                          <p class="c-card__stat-description">بازدید کل</p>--}}
{{--                        </a>--}}
{{--                      </div>--}}

{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}

{{--            <div class="c-grid__row">--}}
{{--              <div class="c-grid__col" id="dashboard-step-15">--}}
{{--                <div class="c-card">--}}
{{--                  <div class="row c-grid__row uk-height-1-1 c-calendar-filters__height-controller">--}}
{{--                    <div class="col-12 col-sm-4 c-grid__col c-grid__col--calendar-filter">--}}
{{--                      <div id="calendarFilters" class="c-calendar-filters js-calendar-filters">--}}
{{--                        <h2 class="c-calendar-filters__title">پروموشن های پیش رو</h2>--}}
{{--                        <div class="c-calendar-filters__list-wrapper c-calendar-filters__list-wrapper--restricted-height ">--}}
{{--                          <ul class="c-calendar-filters__list js-promotions-list">--}}
{{--                            <li class="c-calendar-filters__item"><div class="c-calendar-filters__wrapper">--}}
{{--                                <span class="c-calendar-filters__filter-color" style="background-color: #999ebf"></span>--}}
{{--                                <a href="/promotion/4386848/join/" class="c-calendar-filters__link" target="_blank" data-filter-promo-name="4386848">--}}
{{--                                  <span class="c-calendar-filters__category">شگفت ۲۶ فروردین ۱۴۰۰</span>--}}
{{--                                  <span class="c-calendar-filters__date">۲۵ فروردین تا ۲۷ فروردین</span>--}}
{{--                                </a>--}}
{{--                              </div>--}}
{{--                            </li>--}}
{{--                            <li class="c-calendar-filters__item"><div class="c-calendar-filters__wrapper">--}}
{{--                                <span class="c-calendar-filters__filter-color" style="background-color: #e94edb"></span>--}}
{{--                                <a class="c-calendar-filters__link" target="_blank" data-filter-promo-name="4571880">--}}
{{--                                  <span class="c-calendar-filters__category">هر چیزی زیر ۲۰۰ هزار تومن!</span>--}}
{{--                                  <span class="c-calendar-filters__date">۲۸ فروردین تا ۴ اردیبهشت</span>--}}
{{--                                </a>--}}
{{--                              </div>--}}
{{--                              <div class="c-rating-chart__description-tooltip c-mega-campaigns-join-list__container-table-btn-tooltip uk-dropdown uk-dropdown-stack uk-dropdown-bottom-center" uk-dropdown="boundary: .js-dropdown-desc; pos: bottom-center" style="left: 48px; top: 116px;">  امکان افزودن کالا به این کمپین وجود ندارد.</div>--}}
{{--                            </li>--}}
{{--                            <li class="c-calendar-filters__item">--}}
{{--                              <div class="c-calendar-filters__wrapper">--}}
{{--                                <span class="c-calendar-filters__filter-color" style="background-color: #228418"></span>--}}
{{--                                <a href="/promotion/4584792/join/" class="c-calendar-filters__link" target="_blank" data-filter-promo-name="4584792">--}}
{{--                                  <span class="c-calendar-filters__category">شگفت ۱ اردیبهشت ۱۴۰۰</span>--}}
{{--                                  <span class="c-calendar-filters__date">۳۱ فروردین تا ۲ اردیبهشت</span>--}}
{{--                                </a>--}}
{{--                              </div>--}}
{{--                            </li>--}}
{{--                          </ul>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-12 col-sm-8 c-grid__col c-grid__col--calendar">--}}
{{--                      <div id="calendar" class="c-calendar">--}}
{{--                        <div class="c-calendar__top">--}}
{{--                          <div class="c-calendar__controls">--}}
{{--                            <a href="#" class="c-calendar__month c-calendar__month--previous  js-calendar-prev">قبل</a>--}}
{{--                            <span class="c-calendar__month c-calendar__month--current js-calendar-month js-calendar-current">فروردین ۱۴۰۰</span>--}}
{{--                            <a href="#" class="c-calendar__month c-calendar__month--next js-calendar-next">بعد</a>--}}
{{--                          </div>--}}
{{--                          <span class="c-calendar__year js-calendar-year c-calendar__year--align-cr">چهار‌شنبه ۲۵ فروردین ۱۴۰۰</span>--}}
{{--                        </div>--}}
{{--                        <ul class="c-calendar__box js-calendar">--}}
{{--                          <li class="c-calendar__week">--}}
{{--                            <div class="c-calendar__day js-calendar-day"></div>--}}
{{--                            <div class="c-calendar__day js-calendar-day">--}}
{{--                              <div class="c-calendar__day-wrapper" data-day-index="1">۱</div>--}}
{{--                            </div>--}}
{{--                            <div class="c-calendar__day js-calendar-day">--}}
{{--                              <div class="c-calendar__day-wrapper" data-day-index="2">۲</div>--}}
{{--                            </div><div class="c-calendar__day js-calendar-day">--}}
{{--                              <div class="c-calendar__day-wrapper" data-day-index="3">۳</div>--}}
{{--                            </div>--}}
{{--                            <div class="c-calendar__day js-calendar-day">--}}
{{--                              <div class="c-calendar__day-wrapper" data-day-index="4">۴</div>--}}
{{--                            </div>--}}
{{--                            <div class="c-calendar__day js-calendar-day">--}}
{{--                              <div class="c-calendar__day-wrapper" data-day-index="5">۵</div>--}}
{{--                            </div>--}}
{{--                            <div class="c-calendar__day js-calendar-day">--}}
{{--                              <div class="c-calendar__day-wrapper" data-day-index="6">۶</div>--}}
{{--                            </div>--}}
{{--                          </li>--}}
{{--                          <li class="c-calendar__week">--}}
{{--                            <div class="c-calendar__day js-calendar-day">--}}
{{--                              <div class="c-calendar__day-wrapper" data-day-index="7">۷</div>--}}
{{--                            </div>--}}
{{--                            <div class="c-calendar__day js-calendar-day">--}}
{{--                              <div class="c-calendar__day-wrapper" data-day-index="8">۸</div>--}}
{{--                            </div>--}}
{{--                            <div class="c-calendar__day js-calendar-day">--}}
{{--                              <div class="c-calendar__day-wrapper" data-day-index="9">۹</div>--}}
{{--                            </div>--}}
{{--                            <div class="c-calendar__day js-calendar-day">--}}
{{--                              <div class="c-calendar__day-wrapper" data-day-index="10">۱۰</div>--}}
{{--                            </div>--}}
{{--                            <div class="c-calendar__day js-calendar-day">--}}
{{--                              <div class="c-calendar__day-wrapper" data-day-index="11">۱۱</div>--}}
{{--                            </div>--}}
{{--                            <div class="c-calendar__day js-calendar-day">--}}
{{--                              <div class="c-calendar__day-wrapper" data-day-index="12">۱۲</div>--}}
{{--                            </div>--}}
{{--                            <div class="c-calendar__day js-calendar-day">--}}
{{--                              <div class="c-calendar__day-wrapper" data-day-index="13">۱۳</div>--}}
{{--                            </div>--}}
{{--                          </li>--}}
{{--                          <li class="c-calendar__week">--}}
{{--                            <div class="c-calendar__day js-calendar-day">--}}
{{--                              <div class="c-calendar__day-wrapper" data-day-index="14">۱۴</div>--}}
{{--                            </div>--}}
{{--                            <div class="c-calendar__day js-calendar-day">--}}
{{--                              <div class="c-calendar__day-wrapper" data-day-index="15">۱۵</div>--}}
{{--                            </div>--}}
{{--                            <div class="c-calendar__day js-calendar-day">--}}
{{--                              <div class="c-calendar__day-wrapper" data-day-index="16">۱۶</div>--}}
{{--                            </div>--}}
{{--                            <div class="c-calendar__day js-calendar-day">--}}
{{--                              <div class="c-calendar__day-wrapper" data-day-index="17">۱۷</div>--}}
{{--                            </div>--}}
{{--                            <div class="c-calendar__day js-calendar-day">--}}
{{--                              <div class="c-calendar__day-wrapper" data-day-index="18">۱۸</div>--}}
{{--                            </div>--}}
{{--                            <div class="c-calendar__day js-calendar-day">--}}
{{--                              <div class="c-calendar__day-wrapper" data-day-index="19">۱۹</div>--}}
{{--                            </div>--}}
{{--                            <div class="c-calendar__day js-calendar-day">--}}
{{--                              <div class="c-calendar__day-wrapper" data-day-index="20">۲۰</div>--}}
{{--                            </div>--}}
{{--                          </li>--}}
{{--                          <li class="c-calendar__week">--}}
{{--                            <div class="c-calendar__day js-calendar-day">--}}
{{--                              <div class="c-calendar__day-wrapper" data-day-index="21">۲۱</div>--}}
{{--                            </div>--}}
{{--                            <div class="c-calendar__day js-calendar-day">--}}
{{--                              <div class="c-calendar__day-wrapper" data-day-index="22">۲۲</div>--}}
{{--                            </div>--}}
{{--                            <div class="c-calendar__day js-calendar-day">--}}
{{--                              <div class="c-calendar__day-wrapper" data-day-index="23">۲۳</div>--}}
{{--                            </div>--}}
{{--                            <div class="c-calendar__day js-calendar-day">--}}
{{--                              <div class="c-calendar__day-wrapper" data-day-index="24">۲۴</div>--}}
{{--                            </div>--}}
{{--                            <div class="c-calendar__day js-calendar-day">--}}
{{--                              <div class="c-calendar__day-wrapper" data-day-index="25">۲۵--}}
{{--                                <div class="c-calendar__promo-cluster">--}}
{{--                                  <span class="c-calendar__promo-point js-calendar-promo" style="background-color: #999ebf" data-promo-name="4386848" data-promo-direction="start"></span>--}}
{{--                                </div>--}}
{{--                              </div>--}}
{{--                            </div>--}}
{{--                            <div class="c-calendar__day js-calendar-day">--}}
{{--                              <div class="c-calendar__day-wrapper" data-day-index="26">۲۶</div>--}}
{{--                            </div>--}}
{{--                            <div class="c-calendar__day js-calendar-day">--}}
{{--                              <div class="c-calendar__day-wrapper" data-day-index="27">۲۷--}}
{{--                                <div class="c-calendar__promo-cluster">--}}
{{--                                  <span class="c-calendar__promo-point js-calendar-promo" style="background-color: #999ebf" data-promo-name="4386848" data-promo-direction="end"></span></div></div></div></li><li class="c-calendar__week"><div class="c-calendar__day js-calendar-day"><div class="c-calendar__day-wrapper" data-day-index="28">۲۸<div class="c-calendar__promo-cluster"><span class="c-calendar__promo-point js-calendar-promo" style="background-color: #e94edb" data-promo-name="4571880" data-promo-direction="start"></span></div></div></div><div class="c-calendar__day js-calendar-day"><div class="c-calendar__day-wrapper" data-day-index="29">۲۹</div></div><div class="c-calendar__day js-calendar-day"><div class="c-calendar__day-wrapper" data-day-index="30">۳۰</div></div><div class="c-calendar__day js-calendar-day"><div class="c-calendar__day-wrapper" data-day-index="31">۳۱<div class="c-calendar__promo-cluster"><span class="c-calendar__promo-point js-calendar-promo" style="background-color: #228418" data-promo-name="4584792" data-promo-direction="start">--}}
{{--                                  </span>--}}
{{--                                </div>--}}
{{--                              </div>--}}
{{--                            </div>--}}
{{--                            <div class="c-calendar__day js-calendar-day"></div>--}}
{{--                            <div class="c-calendar__day js-calendar-day"></div>--}}
{{--                            <div class="c-calendar__day js-calendar-day"></div>--}}
{{--                          </li>--}}
{{--                        </ul>--}}
{{--                      </div>--}}
{{--                    </div>--}}

{{--                  </div>--}}
{{--                </div>--}}

{{--              </div>--}}
{{--            </div>--}}

{{--            <div class="c-grid__row">--}}
{{--              <div class="c-grid__col">--}}
{{--                <div class="c-card">--}}
{{--                  <div class="c-card__header">--}}
{{--                    <h2 class="c-card__title">وضعیت تبلیغات</h2>--}}
{{--                  </div>--}}
{{--                  <div class="c-card__body uk-flex uk-height-1-1 uk-flex-middle">--}}
{{--                    <div class="c-grid__row">--}}
{{--                      <div class="c-grid__col c-grid__col--sm-1 c-grid__col--xs-6">--}}
{{--                        <a href="#" class="c-card__stat">--}}
{{--                          <div class="c-card__stat-value">۱۱۰۷</div>--}}
{{--                          <p class="c-card__stat-description">محصولات فعال--}}
{{--                            <br>--}}
{{--                            در تبلیغات--}}
{{--                          </p>--}}
{{--                        </a>--}}
{{--                      </div>--}}

{{--                      <div class="c-grid__col c-grid__col--sm-1 c-grid__col--xs-6">--}}
{{--                        <a href="#" class="c-card__stat">--}}
{{--                          <div class="c-card__stat-value">٪۶</div>--}}
{{--                          <p class="c-card__stat-description">افزایش کل فروش--}}
{{--                            <br>--}}
{{--                            از تبلیغات محصولات--}}
{{--                          </p>--}}
{{--                        </a>--}}
{{--                      </div>--}}

{{--                      <div class="c-grid__col c-grid__col--sm-1 c-grid__col--xs-6">--}}
{{--                        <a href="#" class="c-card__stat">--}}
{{--                          <div class="c-card__stat-value">٪۲۷</div>--}}
{{--                          <p class="c-card__stat-description">افزایش کل بازدید--}}
{{--                            <br>--}}
{{--                            از بازاریابی محصولات</p>--}}
{{--                        </a>--}}
{{--                      </div>--}}

{{--                      <div class="c-grid__col c-grid__col--sm-3 c-grid__col--xs-6 uk-flex uk-flex-bottom uk-flex-right">--}}
{{--                        <a href="#" class="c-card__stat-btn">--}}
{{--                          فعالسازی تبلیغات برای محصولات خود--}}
{{--                        </a>--}}
{{--                      </div>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}

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
                <h2 class="c-card__title">وضعیت سفارش ها در ماه گذشته</h2>
              </div>
              <div class="c-card__body">
                <a class="c-card__stat">
                  <div class="c-rating-chart__details-value c-rating-chart__details-value--full c-card__stat-value c-rating-chart__details-value--info">
                    {{ persianNum($sum_order_count_filter5) }}
                  </div>
                  <p class="c-card__stat-description">سفارش های پرداخت موفق</p>
                </a>

                <a class="c-card__stat">
                  <div class="c-rating-chart__details-value c-rating-chart__details-value--full c-card__stat-value c-rating-chart__details-value--3">
                    {{ persianNum($sum_order_count_filter4) }}
                  </div>
                  <p class="c-card__stat-description ">سفارش های لغو شده/بایگانی شده</p>
                </a>

                <a class="c-card__stat">
                  <div class="c-rating-chart__details-value c-rating-chart__details-value--full c-card__stat-value c-rating-chart__details-value--1">
                    ۰
                  </div>
                  <p class="c-card__stat-description">سفارش های مرجوع شده</p>
                </a>

              </div>
            </div>
          </div>

        </div>

{{--        <div class="c-grid__row">--}}
{{--          <div class="c-grid__col" id="dashboard-step-19">--}}
{{--            <div class="c-card">--}}
{{--              <div class="c-card__header c-card__header--with-controls">--}}
{{--                <h2 class="c-card__title">--}}
{{--                  سوابق فروش--}}
{{--                </h2>--}}
{{--                <div class="c-card__controls c-card__controls--dashboard-select">--}}
{{--                  <select class="dropdown-control c-ui-select c-ui-select--common c-ui-select--small js-duration-sold-items select2-hidden-accessible" data-type="soldItems" tabindex="-1" aria-hidden="true">--}}
{{--                    <option class="option-control" value="last_7_days">روزانه</option>--}}
{{--                    <option class="option-control" value="last_60_days">هفتگی</option>--}}
{{--                    <option class="option-control" value="last_year">ماهانه</option>--}}
{{--                  </select>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="c-card__body">--}}
{{--                <div class="c-card__loading" id="sales-history-loading"></div>--}}
{{--                <div class="c-dashboard-sales-history">--}}
{{--                  <div class="chart">--}}
{{--                    <div class="orders" id="js-sales-chart-container" data-highcharts-chart="0"><div id="highcharts-dwcvuts-0" dir="ltr" class="highcharts-container " style="position: relative; overflow: hidden; width: 1231px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg version="1.1" class="highcharts-root" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="1231" height="400" viewBox="0 0 1231 400"><desc>Created with Highcharts 6.1.0</desc><defs><clipPath id="highcharts-dwcvuts-1"><rect x="0" y="0" width="1023" height="266" fill="none"></rect></clipPath></defs><rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1231" height="400" rx="0" ry="0"></rect><rect fill="none" class="highcharts-plot-background" x="105" y="119" width="1023" height="266"></rect><g class="highcharts-pane-group"></g><g class="highcharts-grid highcharts-xaxis-grid "></g><g class="highcharts-grid highcharts-yaxis-grid "><path fill="none" class="highcharts-grid-line"></path></g><g class="highcharts-grid highcharts-yaxis-grid "><path fill="none" class="highcharts-grid-line"></path></g><rect fill="none" class="highcharts-plot-border" x="105" y="119" width="1023" height="266"></rect><g class="highcharts-axis highcharts-xaxis "><path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1" d="M 105 385.5 L 1128 385.5"></path></g><g class="highcharts-axis highcharts-yaxis "><path fill="none" class="highcharts-axis-line" d="M 105 119 L 105 385"></path></g><g class="highcharts-axis highcharts-yaxis "><path fill="none" class="highcharts-axis-line" d="M 1128 119 L 1128 385"></path></g><g class="highcharts-series-group"><g class="highcharts-series highcharts-series-0 highcharts-spline-series highcharts-color-0 " transform="translate(105,119) scale(1 1)" clip-path="url(#highcharts-dwcvuts-1)"></g><g class="highcharts-markers highcharts-series-0 highcharts-spline-series highcharts-color-0 " transform="translate(105,119) scale(1 1)"></g><g class="highcharts-series highcharts-series-1 highcharts-spline-series highcharts-color-1 " transform="translate(105,119) scale(1 1)" clip-path="url(#highcharts-dwcvuts-1)"></g><g class="highcharts-markers highcharts-series-1 highcharts-spline-series highcharts-color-1 " transform="translate(105,119) scale(1 1)"></g></g><text x="616" text-anchor="middle" class="highcharts-title" style="color:#333333;font-size:18px;font-family:IRANSans,sans-serif;fill:#333333;" y="24"></text><text x="616" text-anchor="middle" class="highcharts-subtitle" style="color:#666666;fill:#666666;" y="24"></text><g class="highcharts-legend" transform="translate(632,80)"><rect fill="#f5f7fa" class="highcharts-legend-box" rx="0" ry="0" x="0" y="0" width="127" height="27" visibility="visible"></rect><g><g><g class="highcharts-legend-item highcharts-spline-series highcharts-color-0 highcharts-series-0" transform="translate(8,3)"><path fill="none" d="M 0 11 L 16 11" class="highcharts-graph" stroke="#7cb5ec" stroke-width="2"></path><path fill="#7cb5ec" d="M 12 11 A 4 4 0 1 1 11.999998000000167 10.996000000666664 Z" class="highcharts-point" stroke="#ffffff" stroke-width="1"></path></g><g class="highcharts-legend-item highcharts-spline-series highcharts-color-1 highcharts-series-1" transform="translate(76,3)"><path fill="none" d="M 0 11 L 16 11" class="highcharts-graph" stroke="#434348" stroke-width="2"></path><path fill="#434348" d="M 8 7 L 12 11 8 15 4 11 Z" class="highcharts-point" stroke="#ffffff" stroke-width="2"></path></g></g></g></g><g class="highcharts-axis-labels highcharts-xaxis-labels "></g><g class="highcharts-axis-labels highcharts-yaxis-labels "><text x="0" style="color:#777777;cursor:default;font-size:11px;fill:#777777;" text-anchor="end" transform="translate(0,0)" y="-9999"><tspan>NaN ریال</tspan></text></g><g class="highcharts-axis-labels highcharts-yaxis-labels "><text x="0" style="color:#777777;cursor:default;font-size:11px;font-family:IRANSans,sans-serif;fill:#777777;" text-anchor="start" transform="translate(0,0)" y="-9999">NaN</text></g></svg><div class="highcharts-legend" style="position: absolute; left: 632px; top: 80px; opacity: 1;"><div style="position: absolute; left: 0px; top: 0px; opacity: 1;"><div style="position: absolute; left: 0px; top: 0px; opacity: 1;"><div class="highcharts-legend-item highcharts-spline-series highcharts-color-0 highcharts-series-0" style="position: absolute; left: 8px; top: 3px; opacity: 1;"><span style="font-family: IRANSans, sans-serif; font-size: 12px; position: absolute; white-space: nowrap; color: rgb(51, 51, 51); font-weight: bold; text-overflow: ellipsis; cursor: pointer; overflow: hidden; margin-left: 0px; margin-top: 0px; left: 21px; top: 3px; fill: rgb(51, 51, 51);">تعداد</span></div><div class="highcharts-legend-item highcharts-spline-series highcharts-color-1 highcharts-series-1" style="position: absolute; left: 76px; top: 3px; opacity: 1;"><span style="font-family: IRANSans, sans-serif; font-size: 12px; position: absolute; white-space: nowrap; color: rgb(51, 51, 51); font-weight: bold; text-overflow: ellipsis; cursor: pointer; overflow: hidden; margin-left: 0px; margin-top: 0px; left: 21px; top: 3px; fill: rgb(51, 51, 51);">مبلغ</span></div></div></div></div><div class="highcharts-axis highcharts-yaxis " style="position: absolute; left: 0px; top: 0px; opacity: 1;"><span class="highcharts-axis-title" style="font-family: IRANSans, sans-serif; font-size: 15px; position: absolute; white-space: nowrap; color: rgb(119, 119, 119); margin-left: 0px; margin-top: 0px; transform: rotate(270deg); transform-origin: 50% 14px; left: 15.25px; top: 238px; visibility: inherit;">مبلغ</span></div><div class="highcharts-axis highcharts-yaxis " style="position: absolute; left: 0px; top: 0px; opacity: 1;"><span class="highcharts-axis-title" style="font-family: IRANSans, sans-serif; font-size: 15px; position: absolute; white-space: nowrap; color: rgb(119, 119, 119); margin-left: 0px; margin-top: 0px; transform: rotate(90deg); transform-origin: 50% 14px; left: 1185.06px; top: 238px; visibility: inherit;">تعداد</span></div></div></div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}

{{--        <div class="c-grid__row">--}}
{{--          <div class="c-grid__col" id="dashboard-step-20">--}}
{{--            <div class="c-card">--}}
{{--              <div class="c-card__header c-card__header--with-controls">--}}
{{--                <h2 class="c-card__title">پرفروش‌ترین کالاها </h2>--}}
{{--                <div class="c-card__controls c-card__controls--dashboard-select">--}}
{{--                  <div class="c-card__controls-select">--}}
{{--                    <select class="c-ui-select c-ui-select--common c-ui-select--small js-duration-most-selling-variants select2-hidden-accessible" data-select2-id="4" tabindex="-1" aria-hidden="true">--}}
{{--                      <option class="option-control" value="last_7_days" data-select2-id="6">روزانه</option>--}}
{{--                      <option class="option-control" value="last_60_days">هفتگی</option>--}}
{{--                      <option class="option-control" value="last_year">ماهانه</option>--}}
{{--                    </select>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="c-card__body c-ui-table__wrapper">--}}
{{--                <div class="c-card__loading" id="best-sales-loading"></div>--}}

{{--                <div class="c-ui-table__expand-wrapper js-expandable js-most-selling-products">--}}


{{--                </div>--}}

{{--                <div class="c-ui-table__expand uk-hidden">--}}
{{--                  <button class="c-ui-table__expand-btn js-expand-control uk-hidden">مشاهده تمام لیست</button>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}

      </div>

    </div>
  </main>
@endsection
@section('script')

@endsection
