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
    var module_plus_subscription_nps = 1;
    var module_nps_post = 1;
    var module_ds_seller_satisfaction_graph_desktop = 1;
    var module_voucher_revamp = 1;
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
    var module_video_bulk = 1;
    var module_dpo_update_price = 1;
    var module_fulfillment_dpo_rts_validation = 1;
    var module_seller_first_party_updater = 1;
    var module_admin_panel_payment_limitation = 1;
    var module_new_customer_floating_box = 1;
    var module_lead_time_postpone = 1;
    var module_dynamic_shipping_cost_phase_2 = 1;
    var module_new_desktop_time_table = 1;
    var module_fresh_instant_plus_cash_back = 1;
    var module_similar_brand = 1;
    var module_plp_mobile_fidibo_banner = 1;
    var module_custom_payment_plus = 1;
    var module_asserting_pricing_rules_in_po = 1;
    var module_year_end_99 = 1;
    var module_ds_new_footer = 1;
    var module_chatbot = 1;
    var module_ds_refund_modals = 1;
    var module_ds_seo_home_page = 1;
    var module_leadtime_postpone_improvement = 1;
    var module_dk_my_landing_carousel = 1;
    var module_ds_new_home_desktop = 1;
    var module_payment_voucher_gift_separation = 1;
    var module_is_free_shipment_view = 1;
    var module_fulfilemnt_po_international = 1;
    var module_related_recommendation_carousel_ds = 1;
    var module_dc_polygon_new = 1;
    var module_ab_new_buy_again = 1;
    var module_fiscal_invoice = 1;
    var module_supplier_duplicate_sheba = 1;
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
  var dashboard_sold_history_dates = 0;
  var dashboard_sold_history_prices = 0;
  var dashboard_sold_history_quantities = 0;
  var dashboard_variant_active_with_inventory = 0;
  var dashboard_variant_active_without_inventory = 0;
  var dashboard_variant_all = 0;
  var dashboard_variant_active_false = 0;
  var dashboardRate = 70;
  var existNewElectronicContract = false;
  var contractDaysLeft = 7;
  var isContractRejected = false;
  var hasAccessToContract = true;
  var cities = {"2":[{"label":"\u0622\u0628\u0634 \u0627\u062d\u0645\u062f","state":2,"id":1432},{"label":"\u0622\u0686\u0627\u0686\u06cc","state":2,"id":1419},{"label":"\u0622\u0630\u0631\u0634\u0647\u0631","state":2,"id":1372},{"label":"\u0622\u0642\u06a9\u0646\u062f","state":2,"id":1421},{"label":"\u0627\u0628\u0631\u063a\u0627\u0646","state":2,"id":4216},{"label":"\u0627\u062a\u0634 \u0628\u06cc\u06af","state":2,"id":4253},{"label":"\u0627\u0686\u0627\u0686\u06cc","state":2,"id":4167},{"label":"\u0627\u0630\u063a\u0627\u0646 (\u0627\u0632\u063a\u0627\u0646 )","state":2,"id":4204},{"label":"\u0627\u0631\u0628\u0637","state":2,"id":4174},{"label":"\u0627\u0631\u062f\u0647\u0627","state":2,"id":4219},{"label":"\u0627\u0631\u0633\u06af\u0646\u0627\u06cc \u0633\u0641\u0644\u06cc","state":2,"id":4256},{"label":"\u0627\u0631\u0645\u0648\u062f\u0627\u0642","state":2,"id":4172},{"label":"\u0627\u0631\u0648\u0642","state":2,"id":4247},{"label":"\u0627\u0633\u0628\u0641\u0631\u0648\u0634\u0627\u0646","state":2,"id":4215},{"label":"\u0627\u0633\u06a9\u0644\u0648 (\u0627\u0633\u06af\u0644\u0648)","state":2,"id":4209},{"label":"\u0627\u0633\u06a9\u0648","state":2,"id":1377},{"label":"\u0627\u063a \u0632\u06cc\u0627\u0631\u062a","state":2,"id":4261},{"label":"\u0627\u063a\u0686\u0647 \u0631\u06cc\u0634","state":2,"id":4163},{"label":"\u0627\u063a\u0645\u06cc\u0648\u0646","state":2,"id":4218},{"label":"\u0627\u0641\u06cc\u0644","state":2,"id":4203},{"label":"\u0627\u0642 \u0628\u0631\u0627\u0632","state":2,"id":4206},{"label":"\u0627\u0642 \u0645\u0646\u0627\u0631","state":2,"id":4248},{"label":"\u0627\u0644\u0627\u0646\u0642","state":2,"id":4223},{"label":"\u0627\u0644\u0642\u0648","state":2,"id":4240},{"label":"\u0627\u0645\u0646\u062f","state":2,"id":4189},{"label":"\u0627\u0648\u0634\u0646\u062f\u0644","state":2,"id":4250},{"label":"\u0627\u0647\u0631","state":2,"id":1379},{"label":"\u0627\u06cc\u0644\u062e\u0686\u06cc","state":2,"id":1376},{"label":"\u0628\u0627\u0633\u0645\u0646\u062c","state":2,"id":1385},{"label":"\u0628\u0627\u06cc\u0642\u0648\u062a","state":2,"id":4246},{"label":"\u0628\u062e\u0634\u0627\u06cc\u0634","state":2,"id":1424},{"label":"\u0628\u0633\u062a\u0627\u0646 \u0622\u0628\u0627\u062f","state":2,"id":1382},{"label":"\u0628\u0646\u0627\u0628","state":2,"id":1383},{"label":"\u0628\u0646\u0627\u0628 \u062c\u062f\u06cc\u062f","state":2,"id":4195},{"label":"\u0628\u0646\u0627\u0628 \u0645\u0631\u0646\u062f","state":2,"id":1410},{"label":"\u0628\u06cc\u0644\u0648\u0631\u062f\u06cc","state":2,"id":4192},{"label":"\u067e\u0648\u0631\u0633\u062e\u0644\u0648","state":2,"id":4169},{"label":"\u062a\u0628\u0631\u06cc\u0632","state":2,"id":1386},{"label":"\u062a\u0631\u06a9","state":2,"id":1422},{"label":"\u062a\u0631\u06a9\u0645\u0627\u0646\u0686\u0627\u06cc","state":2,"id":1418},{"label":"\u062a\u0633\u0648\u062c","state":2,"id":1397},{"label":"\u062a\u06cc\u06a9\u0645\u0647 \u062f\u0627\u0634","state":2,"id":1381},{"label":"\u062a\u06cc\u0644","state":2,"id":4213},{"label":"\u062a\u06cc\u0645\u0648\u0631\u0644\u0648","state":2,"id":1373},{"label":"\u062c\u0644\u0641\u0627","state":2,"id":1389},{"label":"\u062c\u0648\u0627\u0646 \u0642\u0644\u0639\u0647","state":2,"id":1406},{"label":"\u0686\u0648\u0644 \u0642\u0634\u0644\u0627\u0642\u06cc","state":2,"id":4201},{"label":"\u062e\u0627\u062a\u0648\u0646 \u0627\u0628\u0627\u062f-\u0622\u0630\u0631\u0628\u0627\u06cc\u062c\u0627\u0646 \u0634\u0631\u0642\u06cc","state":2,"id":4164},{"label":"\u062e\u0627\u0631\u0648\u0627\u0646\u0627","state":2,"id":1430},{"label":"\u062e\u0627\u0635 \u0627\u0628\u0627\u062f (\u062e\u0627\u0635\u0628\u0627\u0646 )","state":2,"id":4177},{"label":"\u062e\u0627\u0645\u0646\u0647","state":2,"id":1399},{"label":"\u062e\u0627\u0646\u0647 \u0628\u0631\u0642 \u0642\u062f\u06cc\u0645 (\u0634\u0648\u0631\u062e\u0627\u0646\u0647 \u0628","state":2,"id":4244},{"label":"\u062e\u0627\u0646\u06cc\u0627\u0646","state":2,"id":4236},{"label":"\u062e\u062f\u0627\u062c\u0648","state":2,"id":1408},{"label":"\u062e\u0631\u0627\u062c\u0648","state":2,"id":4185},{"label":"\u062e\u0633\u0631\u0648 \u0634\u0647\u0631","state":2,"id":4175},{"label":"\u062e\u0633\u0631\u0648\u0634\u0627\u0647","state":2,"id":1384},{"label":"\u062e\u0636\u0631\u0644\u0648","state":2,"id":4233},{"label":"\u062e\u0644\u062c\u0627\u0646","state":2,"id":4180},{"label":"\u062e\u0645\u0627\u0631\u0644\u0648","state":2,"id":1392},{"label":"\u062e\u0648\u0627\u062c\u0647","state":2,"id":1423},{"label":"\u062e\u0648\u0634\u0647 \u0645\u0647\u0631 (\u062e\u0648\u0627\u062c\u0647 \u0627\u0645\u06cc\u0631)","state":2,"id":4242},{"label":"\u062f\u0627\u0631\u0627\u0646-\u0622\u0630\u0631\u0628\u0627\u06cc\u062c\u0627\u0646 \u0634\u0631\u0642\u06cc","state":2,"id":4199},{"label":"\u062f\u0627\u0634 \u0627\u062a\u0627\u0646","state":2,"id":4228},{"label":"\u062f\u0627\u0634 \u0628\u0644\u0627\u063a \u0628\u0627\u0632\u0627\u0631","state":2,"id":4229},{"label":"\u062f\u0627\u0646\u0627\u0644\u0648","state":2,"id":4237},{"label":"\u062f\u0648\u0632\u062f\u0648\u0632\u0627\u0646","state":2,"id":1394},{"label":"\u062f\u0648\u0644\u062a \u0627\u0628\u0627\u062f-\u0622\u0630\u0631\u0628\u0627\u06cc\u062c\u0627\u0646 \u0634\u0631\u0642\u06cc","state":2,"id":4196},{"label":"\u0630\u0627\u06a9\u0631\u06a9\u0646\u062f\u06cc","state":2,"id":4259},{"label":"\u0630\u0648\u0627\u0644\u0628\u06cc\u0646","state":2,"id":4252},{"label":"\u0631\u0627\u0632\u0644\u06cc\u0642","state":2,"id":4217},{"label":"\u0631\u062d\u0645\u0627\u0646\u0644\u0648","state":2,"id":4238},{"label":"\u0631\u0648\u0634\u062a \u0628\u0632\u0631\u06af","state":2,"id":4241},{"label":"\u0632\u0627\u0648\u0634\u062a","state":2,"id":4239},{"label":"\u0632\u0631\u0646\u0642","state":2,"id":1425},{"label":"\u0632\u0646\u0648\u0632","state":2,"id":1411},{"label":"\u0632\u0648\u0627\u0631\u0642","state":2,"id":4243},{"label":"\u0633\u0631\u0627\u0628","state":2,"id":1393},{"label":"\u0633\u0631\u0627\u06cc (\u0633\u0631\u0627\u06cc \u062f\u0647 )","state":2,"id":4178},{"label":"\u0633\u0631\u062f\u0631\u0648\u062f","state":2,"id":1387},{"label":"\u0633\u0631\u0646\u062f","state":2,"id":4191},{"label":"\u0633\u0639\u06cc\u062f\u0627\u0628\u0627\u062f-\u0622\u0630\u0631\u0628\u0627\u06cc\u062c\u0627\u0646 \u0634\u0631\u0642\u06cc","state":2,"id":4222},{"label":"\u0633\u0644\u0637\u0627\u0646 \u0627\u0628\u0627\u062f (\u0633 \u0627\u0646\u0645\u06a9\u0632\u0627\u0631","state":2,"id":4257},{"label":"\u0633\u0644\u0648\u06a9","state":2,"id":4254},{"label":"\u0633\u06cc\u0633","state":2,"id":1400},{"label":"\u0633\u06cc\u0647 \u0631\u0648\u062f","state":2,"id":1388},{"label":"\u0633\u06cc\u0647 \u06a9\u0644\u0627\u0646","state":2,"id":4205},{"label":"\u0634\u0627\u062f\u0628\u0627\u062f\u0645\u0634\u0627\u06cc\u062e (\u067e\u06cc\u0646\u0647 \u0634\u0644\u0648\u0627","state":2,"id":4182},{"label":"\u0634\u0628\u0633\u062a\u0631","state":2,"id":1401},{"label":"\u0634\u062c\u0627\u0639","state":2,"id":4198},{"label":"\u0634\u0631\u0628\u06cc\u0627\u0646","state":2,"id":1395},{"label":"\u0634\u0631\u0641\u062e\u0627\u0646\u0647","state":2,"id":1402},{"label":"\u0634\u0646\u062f \u0622\u0628\u0627\u062f","state":2,"id":1403},{"label":"\u0634\u0647\u0631 \u062c\u062f\u06cc\u062f \u0633\u0647\u0646\u062f","state":2,"id":1378},{"label":"\u0634\u0647\u0631\u06a9 \u0635\u0646\u0639\u062a\u06cc \u06a9\u0627\u063a\u0630\u06a9\u0646\u0627\u0646","state":2,"id":4211},{"label":"\u0634\u06cc\u062e\u062f\u0631\u0627\u0628\u0627\u062f","state":2,"id":4165},{"label":"\u0634\u06cc\u0631\u0627\u0632-\u0622\u0630\u0631\u0628\u0627\u06cc\u062c\u0627\u0646 \u0634\u0631\u0642\u06cc","state":2,"id":4232},{"label":"\u0634\u06cc\u0631\u0627\u0645\u06cc\u0646","state":2,"id":4187},{"label":"\u0635\u0648\u0641\u06cc\u0627\u0646","state":2,"id":1398},{"label":"\u0635\u0648\u0645\u0639\u0647","state":2,"id":4230},{"label":"\u0637\u0648\u0631\u0627\u063a\u0627\u06cc (\u0637\u0648\u0631\u0627\u063a\u0627\u06cc\u06cc )","state":2,"id":4249},{"label":"\u0639\u0627\u0634\u0642\u0644\u0648","state":2,"id":4208},{"label":"\u0639\u062c\u0628 \u0634\u06cc\u0631","state":2,"id":1407},{"label":"\u0639\u0644\u0648\u06cc\u0627\u0646","state":2,"id":4231},{"label":"\u0639\u0644\u06cc \u0627\u0628\u0627\u062f\u0639\u0644\u06cc\u0627","state":2,"id":4251},{"label":"\u0642\u062f\u0645\u06af\u0627\u0647 (\u0628\u0627\u062f\u0627\u0645 \u06cc\u0627\u0631)","state":2,"id":4186},{"label":"\u0642\u0631\u0647 \u0622\u063a\u0627\u062c","state":2,"id":1391},{"label":"\u0642\u0631\u0647 \u0628\u0627\u0628\u0627","state":2,"id":4221},{"label":"\u0642\u0631\u0647 \u0628\u0644\u0627\u063a-\u0622\u0630\u0631\u0628\u0627\u06cc\u062c\u0627\u0646 \u0634\u0631\u0642\u06cc","state":2,"id":4166},{"label":"\u0642\u0631\u0647 \u0686\u0627\u06cc \u062d\u0627\u062c \u0639\u0644\u06cc","state":2,"id":4220},{"label":"\u0642\u0631\u0647 \u0686\u0645\u0646","state":2,"id":4225},{"label":"\u0642\u0644\u0639\u0647 \u062d\u0633\u06cc\u0646 \u0627\u0628\u0627\u062f","state":2,"id":4258},{"label":"\u0642\u0648\u0686 \u0627\u062d\u0645\u062f","state":2,"id":4260},{"label":"\u0642\u0648\u06cc\u0648\u062c\u0627\u0642","state":2,"id":4171},{"label":"\u06a9\u062c\u0648\u0627\u0631","state":2,"id":4179},{"label":"\u06a9\u0631\u062f\u06a9\u0646\u062f\u06cc","state":2,"id":4224},{"label":"\u06a9\u0634\u06a9\u0633\u0631\u0627\u06cc","state":2,"id":1413},{"label":"\u06a9\u0644\u0648\u0627\u0646\u0642","state":2,"id":1427},{"label":"\u06a9\u0644\u06cc\u0628\u0631","state":2,"id":1433},{"label":"\u06a9\u0646\u062f\u0631\u0648\u062f","state":2,"id":4183},{"label":"\u06a9\u0646\u062f\u0648\u0627\u0646","state":2,"id":4212},{"label":"\u06a9\u0646\u06af\u0627\u0648\u0631-\u0622\u0630\u0631\u0628\u0627\u06cc\u062c\u0627\u0646 \u0634\u0631\u0642\u06cc","state":2,"id":4170},{"label":"\u06a9\u0648\u0632\u0647 \u06a9\u0646\u0627\u0646","state":2,"id":1405},{"label":"\u06a9\u0647\u0646\u0645\u0648","state":2,"id":4173},{"label":"\u06af\u0644 \u062a\u067e\u0647-\u0622\u0630\u0631\u0628\u0627\u06cc\u062c\u0627\u0646 \u0634\u0631\u0642\u06cc","state":2,"id":4227},{"label":"\u06af\u0644\u06cc\u0646 \u0642\u06cc\u0647","state":2,"id":4193},{"label":"\u06af\u0648\u06af\u0627\u0646","state":2,"id":1374},{"label":"\u06af\u0648\u0646\u062f\u0648\u063a\u062f\u06cc","state":2,"id":4168},{"label":"\u0644\u0627\u0631\u06cc\u062c\u0627\u0646","state":2,"id":4214},{"label":"\u0644\u0627\u0647\u06cc\u062c\u0627\u0646-\u0622\u0630\u0631\u0628\u0627\u06cc\u062c\u0627\u0646 \u0634\u0631\u0642\u06cc","state":2,"id":4176},{"label":"\u0644\u06a9\u0644\u0631","state":2,"id":4245},{"label":"\u0644\u06cc\u0644\u0627\u0646","state":2,"id":1415},{"label":"\u0645\u0627\u06cc\u0627\u0646 \u0633\u0641\u0644\u06cc","state":2,"id":4184},{"label":"\u0645\u0628\u0627\u0631\u06a9 \u0634\u0647\u0631","state":2,"id":1416},{"label":"\u0645\u0631\u0627\u063a\u0647","state":2,"id":1409},{"label":"\u0645\u0631\u0646\u062f","state":2,"id":1412},{"label":"\u0645\u0644\u06a9\u0627\u0646","state":2,"id":1417},{"label":"\u0645\u0645\u0642\u0627\u0646","state":2,"id":1375},{"label":"\u0645\u0648\u0644\u0627\u0646","state":2,"id":4207},{"label":"\u0645\u0647\u0631\u0628\u0627\u0646","state":2,"id":1396},{"label":"\u0645\u0647\u0645\u0627\u0646\u062f\u0627\u0631","state":2,"id":4235},{"label":"\u0645\u06cc\u0627\u0646\u0647","state":2,"id":1420},{"label":"\u0645\u06cc\u0646\u0642","state":2,"id":4190},{"label":"\u0646\u0635\u06cc\u0631\u0627\u0628\u0627\u062f\u0633\u0641\u0644\u06cc","state":2,"id":4255},{"label":"\u0646\u0638\u0631\u06a9\u0647\u0631\u06cc\u0632\u06cc","state":2,"id":1429},{"label":"\u0646\u0648\u062c\u0647 \u0645\u0647\u0631","state":2,"id":4200},{"label":"\u0648\u0627\u06cc\u0642\u0627\u0646","state":2,"id":1404},{"label":"\u0648\u0631\u062c\u0648\u06cc","state":2,"id":4226},{"label":"\u0648\u0631\u0632\u0642\u0627\u0646","state":2,"id":1431},{"label":"\u0648\u0631\u06af\u0647\u0627\u0646","state":2,"id":4202},{"label":"\u0647\u0627\u062f\u06cc\u0634\u0647\u0631","state":2,"id":1390},{"label":"\u0647\u0631\u0632\u0646\u062f\u062c\u062f\u06cc\u062f (\u0686\u0627\u06cc \u0647\u0631\u0632\u0646\u062f)","state":2,"id":4194},{"label":"\u0647\u0631\u06cc\u0633","state":2,"id":1426},{"label":"\u0647\u0634\u062a\u0631\u0648\u062f","state":2,"id":1428},{"label":"\u0647\u0641\u062a \u0686\u0634\u0645\u0647-\u0622\u0630\u0631\u0628\u0627\u06cc\u062c\u0627\u0646 \u0634\u0631\u0642\u06cc","state":2,"id":4188},{"label":"\u0647\u0648\u0631\u0627\u0646\u062f","state":2,"id":1380},{"label":"\u06cc\u0627\u0645\u0686\u06cc","state":2,"id":1414},{"label":"\u06cc\u06a9\u0627\u0646 \u06a9\u0647\u0631\u06cc\u0632","state":2,"id":4197},{"label":"\u06cc\u0646\u06af\u062c\u0647","state":2,"id":4234},{"label":"\u06cc\u0646\u06af\u06cc \u0627\u0633\u067e\u0631\u0627\u0646 (\u0633\u0641\u06cc\u062f\u0627\u0646 \u062c\u062f","state":2,"id":4181},{"label":"\u06cc\u0648\u0632\u0628\u0646\u062f","state":2,"id":4210}],"3":[{"label":"\u0622\u0648\u0627\u062c\u06cc\u0642","state":3,"id":1448},{"label":"\u0627\u0628\u06af\u0631\u0645-\u0622\u0630\u0631\u0628\u0627\u06cc\u062c\u0627\u0646 \u063a\u0631\u0628\u06cc","state":3,"id":4321},{"label":"\u0627\u062d\u0645\u062f\u0627\u0628\u0627\u062f\u0633\u0641\u0644\u06cc","state":3,"id":4363},{"label":"\u0627\u062d\u0645\u062f\u063a\u0631\u06cc\u0628","state":3,"id":4297},{"label":"\u0627\u062e\u062a\u062a\u0631","state":3,"id":4341},{"label":"\u0627\u0631\u0648\u0645\u06cc\u0647","state":3,"id":1437},{"label":"\u0627\u0633\u062a\u0631\u0627\u0646","state":3,"id":4305},{"label":"\u0627\u0633\u0644\u0627\u0645 \u0627\u0628\u0627\u062f-\u0622\u0630\u0631\u0628\u0627\u06cc\u062c\u0627\u0646 \u063a\u0631\u0628\u06cc","state":3,"id":4345},{"label":"\u0627\u0634\u0646\u0648\u06cc\u0647","state":3,"id":1439},{"label":"\u0627\u063a \u0628\u0631\u0632\u0647","state":3,"id":4326},{"label":"\u0627\u0642\u0627\u0628\u06cc\u06af","state":3,"id":4362},{"label":"\u0627\u0642\u0628\u0627\u0644","state":3,"id":4348},{"label":"\u0627\u06af\u0631\u06cc\u0642\u0627\u0634","state":3,"id":4337},{"label":"\u0627\u0644\u06cc \u0686\u06cc\u0646","state":3,"id":4357},{"label":"\u0627\u0645\u0627\u0645 \u06a9\u0646\u062f\u06cc","state":3,"id":4276},{"label":"\u0627\u0648\u0632\u0648\u0646 \u062f\u0631\u0647 \u0639\u0644\u06cc\u0627","state":3,"id":4338},{"label":"\u0627\u0648\u063a\u0648\u0644 \u0628\u06cc\u06af","state":3,"id":4360},{"label":"\u0627\u06cc\u0628\u0644\u0648","state":3,"id":4265},{"label":"\u0627\u06cc\u0648\u0627\u0648\u063a\u0644\u06cc","state":3,"id":1451},{"label":"\u0628\u0627\u0631\u0627\u0646\u062f\u0648\u0632","state":3,"id":4262},{"label":"\u0628\u0627\u0631\u0648\u0642","state":3,"id":1471},{"label":"\u0628\u0627\u0632\u0631\u06af\u0627\u0646","state":3,"id":1467},{"label":"\u0628\u0627\u063a\u0686\u0647","state":3,"id":4333},{"label":"\u0628\u062f\u0644\u0627\u0646","state":3,"id":4303},{"label":"\u0628\u0633\u0637\u0627\u0645-\u0622\u0630\u0631\u0628\u0627\u06cc\u062c\u0627\u0646 \u063a\u0631\u0628\u06cc","state":3,"id":4310},{"label":"\u0628\u06af\u062a\u0627\u0634","state":3,"id":4351},{"label":"\u0628\u0644\u0633\u0648\u0631\u0633\u0641\u0644\u06cc","state":3,"id":4304},{"label":"\u0628\u0648\u06a9\u0627\u0646","state":3,"id":1442},{"label":"\u0628\u0647\u0644\u0647","state":3,"id":4275},{"label":"\u0628\u06cc\u06a9\u0648\u0633","state":3,"id":4293},{"label":"\u0628\u06cc\u06af\u0645 \u0642\u0644\u0639\u0647","state":3,"id":4283},{"label":"\u0628\u06cc\u0644\u0647 \u0648\u0627\u0631","state":3,"id":4299},{"label":"\u0628\u06cc\u0648\u0631\u0627\u0646 \u0633\u0641\u0644\u06cc","state":3,"id":4346},{"label":"\u067e\u0633\u0648\u0647","state":3,"id":4295},{"label":"\u067e\u0644\u062f\u0634\u062a","state":3,"id":1444},{"label":"\u067e\u06cc\u0631\u0627\u0646\u0634\u0647\u0631","state":3,"id":1446},{"label":"\u062a\u0627\u0632\u0647 \u0634\u0647\u0631","state":3,"id":1460},{"label":"\u062a\u06a9 \u0627\u063a\u0627\u062c","state":3,"id":4353},{"label":"\u062a\u06a9\u0627\u0628","state":3,"id":1447},{"label":"\u062a\u0645\u0631","state":3,"id":4320},{"label":"\u062a\u0648\u06cc\u06cc","state":3,"id":4272},{"label":"\u062c\u0644\u062f\u06cc\u0627\u0646","state":3,"id":4365},{"label":"\u062c\u0648\u0627\u0646\u0645\u0631\u062f","state":3,"id":4340},{"label":"\u0686\u0648\u0631\u0633","state":3,"id":4308},{"label":"\u0686\u0647\u0627\u0631 \u0628\u0631\u062c","state":3,"id":1472},{"label":"\u0686\u0647\u0631\u06cc\u0642 \u0639\u0644\u06cc\u0627","state":3,"id":4323},{"label":"\u0686\u06cc\u0627\u0646\u0647","state":3,"id":4292},{"label":"\u062d\u0627\u062c\u06cc \u062d\u0633\u0646","state":3,"id":4329},{"label":"\u062d\u0627\u062c\u06cc \u06a9\u0646\u062f","state":3,"id":4332},{"label":"\u062d\u0633\u0646 \u06a9\u0646\u062f\u06cc","state":3,"id":4317},{"label":"\u062d\u0633\u0646\u0644\u0648","state":3,"id":4280},{"label":"\u062d\u0645\u0632\u0647 \u0642\u0627\u0633\u0645","state":3,"id":4359},{"label":"\u062d\u06cc\u062f\u0631\u0628\u0627\u063a\u06cc","state":3,"id":4358},{"label":"\u062e\u0627\u062a\u0648\u0646 \u0628\u0627\u063a","state":3,"id":4328},{"label":"\u062e\u0644\u06cc\u0641\u0627\u0646","state":3,"id":1469},{"label":"\u062e\u0648\u0631\u062e\u0648\u0631\u0647-\u0622\u0630\u0631\u0628\u0627\u06cc\u062c\u0627\u0646 \u063a\u0631\u0628\u06cc","state":3,"id":4334},{"label":"\u062e\u0648\u06cc","state":3,"id":1454},{"label":"\u062f\u0627\u0631\u0627\u0628-\u0622\u0630\u0631\u0628\u0627\u06cc\u062c\u0627\u0646 \u063a\u0631\u0628\u06cc","state":3,"id":4324},{"label":"\u062f\u0633\u062a\u062c\u0631\u062f-\u0622\u0630\u0631\u0628\u0627\u06cc\u062c\u0627\u0646 \u063a\u0631\u0628\u06cc","state":3,"id":4266},{"label":"\u062f\u0644\u0632\u06cc","state":3,"id":4325},{"label":"\u062f\u0648\u0631\u0628\u0627\u0634","state":3,"id":4361},{"label":"\u062f\u0647 \u0634\u0645\u0633 \u0628\u0632\u0631\u06af","state":3,"id":4286},{"label":"\u062f\u06cc\u0632\u062c \u062f\u0648\u0644","state":3,"id":4263},{"label":"\u062f\u06cc\u0632\u062c \u062f\u06cc\u0632","state":3,"id":1455},{"label":"\u062f\u06cc\u0632\u062c-\u0622\u0630\u0631\u0628\u0627\u06cc\u062c\u0627\u0646 \u063a\u0631\u0628\u06cc","state":3,"id":4270},{"label":"\u0631\u0627\u0698\u0627\u0646","state":3,"id":4268},{"label":"\u0631\u0627\u0647\u062f\u0627\u0646\u0647","state":3,"id":4284},{"label":"\u0631\u0628\u0637","state":3,"id":1457},{"label":"\u0631\u062d\u06cc\u0645 \u062e\u0627\u0646","state":3,"id":4342},{"label":"\u0631\u06cc\u062d\u0627\u0646\u0644\u0648\u06cc \u0639\u0644\u06cc\u0627","state":3,"id":4312},{"label":"\u0631\u06cc\u06af \u0627\u0628\u0627\u062f","state":3,"id":4296},{"label":"\u0632\u0627\u0648\u06cc\u0647 \u0633\u0641\u0644\u06cc","state":3,"id":4313},{"label":"\u0632\u0631\u0622\u0628\u0627\u062f","state":3,"id":1452},{"label":"\u0632\u0645\u0632\u06cc\u0631\u0627\u0646","state":3,"id":4347},{"label":"\u0632\u06cc\u0648\u0647","state":3,"id":4271},{"label":"\u0633\u0631\u062f\u0634\u062a","state":3,"id":1458},{"label":"\u0633\u0631\u0646\u0642","state":3,"id":4322},{"label":"\u0633\u0631\u0648","state":3,"id":1436},{"label":"\u0633\u0644\u0645\u0627\u0633","state":3,"id":1461},{"label":"\u0633\u0646\u062c\u06cc","state":3,"id":4327},{"label":"\u0633\u0648\u06af\u0644\u06cc \u062a\u067e\u0647","state":3,"id":4330},{"label":"\u0633\u06cc\u0627\u0642\u0648\u0644 \u0639\u0644\u06cc\u0627","state":3,"id":4336},{"label":"\u0633\u06cc\u0627\u0648\u0627\u0646","state":3,"id":4289},{"label":"\u0633\u06cc\u0644\u0648\u0627\u0646\u0647","state":3,"id":1435},{"label":"\u0633\u06cc\u0644\u0648\u0647","state":3,"id":4364},{"label":"\u0633\u06cc\u0645\u06cc\u0646\u0647","state":3,"id":1441},{"label":"\u0633\u06cc\u0647 \u0628\u0627\u0632","state":3,"id":4298},{"label":"\u0633\u06cc\u0647 \u0686\u0634\u0645\u0647","state":3,"id":1449},{"label":"\u0634\u0627\u0647\u0648\u0627\u0646\u0647","state":3,"id":4285},{"label":"\u0634\u0627\u0647\u06cc\u0646 \u062f\u0698","state":3,"id":1462},{"label":"\u0634\u0644\u0645\u0627\u0634","state":3,"id":4344},{"label":"\u0634\u0648\u0637","state":3,"id":1466},{"label":"\u0634\u06cc\u062e \u0627\u062d\u0645\u062f","state":3,"id":4282},{"label":"\u0634\u06cc\u0631\u06cc\u0646 \u0628\u0644\u0627\u063a","state":3,"id":4306},{"label":"\u0634\u06cc\u0646 \u0627\u0628\u0627\u062f","state":3,"id":4291},{"label":"\u0637\u0644\u0627\u062a\u067e\u0647","state":3,"id":4267},{"label":"\u0641\u06cc\u0631\u0648\u0631\u0642","state":3,"id":1456},{"label":"\u0642\u0631\u0646\u0642\u0648","state":3,"id":4316},{"label":"\u0642\u0631\u0647 \u0628\u0627\u063a","state":3,"id":4274},{"label":"\u0642\u0631\u0647 \u062a\u067e\u0647","state":3,"id":4311},{"label":"\u0642\u0631\u0647 \u0636\u06cc\u0627\u0621 \u0627\u0644\u062f\u06cc\u0646","state":3,"id":1450},{"label":"\u0642\u0631\u0647 \u0642\u0634\u0644\u0627\u0642","state":3,"id":4319},{"label":"\u0642\u0637\u0648\u0631","state":3,"id":1453},{"label":"\u0642\u0645 \u0642\u0634\u0644\u0627\u0642","state":3,"id":4314},{"label":"\u0642\u0648\u0631\u0648\u0642","state":3,"id":4301},{"label":"\u0642\u0648\u0631\u0648\u0644 \u0639\u0644\u06cc\u0627","state":3,"id":4309},{"label":"\u0642\u0648\u0632\u0644\u0648\u06cc \u0627\u0641\u0634\u0627\u0631","state":3,"id":4356},{"label":"\u0642\u0648\u0634\u0686\u06cc","state":3,"id":1434},{"label":"\u06a9\u0627\u0646\u0633\u067e\u06cc","state":3,"id":4278},{"label":"\u06a9\u0627\u0648\u0644\u0627\u0646 \u0639\u0644\u06cc\u0627","state":3,"id":4335},{"label":"\u06a9\u0634\u0627\u0648\u0631\u0632","state":3,"id":1464},{"label":"\u06a9\u0644\u0647 \u06a9\u06cc\u0646","state":3,"id":4290},{"label":"\u06a9\u0647\u0631\u06cc\u0632\u0639\u062c\u0645","state":3,"id":4281},{"label":"\u06af\u0631\u062f\u06a9\u0634\u0627\u0646\u0647","state":3,"id":1445},{"label":"\u06af\u0644 \u062a\u067e\u0647 \u0642\u0648\u0631\u0645\u06cc\u0634","state":3,"id":4343},{"label":"\u06af\u0644\u0627\u0632","state":3,"id":4287},{"label":"\u06af\u0644\u06cc\u062c\u0647","state":3,"id":4331},{"label":"\u06af\u0648\u06af \u062a\u067e\u0647 \u062e\u0627\u0644\u0635\u0647","state":3,"id":4352},{"label":"\u06af\u0648\u06af \u062a\u067e\u0647-\u0622\u0630\u0631\u0628\u0627\u06cc\u062c\u0627\u0646 \u063a\u0631\u0628\u06cc","state":3,"id":4366},{"label":"\u0644\u0644\u06a9\u0644\u0648","state":3,"id":4350},{"label":"\u0644\u0648\u0644\u06a9\u0627\u0646","state":3,"id":4288},{"label":"\u0645\u0627\u06a9\u0648","state":3,"id":1468},{"label":"\u0645\u062d\u0645\u062f \u06cc\u0627\u0631","state":3,"id":1474},{"label":"\u0645\u062d\u0645\u0648\u062f \u0622\u0628\u0627\u062f","state":3,"id":1463},{"label":"\u0645\u0631\u0627\u06a9\u0627\u0646","state":3,"id":4307},{"label":"\u0645\u0631\u06af\u0646\u0644\u0631","state":3,"id":1465},{"label":"\u0645\u0644\u0627\u0634\u0647\u0627\u0628 \u0627\u0644\u062f\u06cc\u0646","state":3,"id":4349},{"label":"\u0645\u0645\u06a9\u0627\u0646","state":3,"id":4279},{"label":"\u0645\u0648\u0627\u0646\u0627","state":3,"id":4273},{"label":"\u0645\u0647\u0627\u0628\u0627\u062f","state":3,"id":1470},{"label":"\u0645\u06cc\u0627\u0646\u062f\u0648\u0622\u0628","state":3,"id":1473},{"label":"\u0645\u06cc\u0627\u0648\u0642","state":3,"id":4264},{"label":"\u0645\u06cc\u0631\u0622\u0628\u0627\u062f","state":3,"id":1459},{"label":"\u0646\u0627\u0632\u06a9 \u0639\u0644\u06cc\u0627","state":3,"id":1443},{"label":"\u0646\u0627\u0632\u0644\u0648","state":3,"id":4277},{"label":"\u0646\u0627\u0644\u0648\u0633","state":3,"id":1440},{"label":"\u0646\u0642\u062f\u0647","state":3,"id":1475},{"label":"\u0646\u0648\u0634\u06cc\u0646","state":3,"id":1438},{"label":"\u0648\u0631\u062f\u0627\u0646","state":3,"id":4318},{"label":"\u0648\u0644\u062f\u06cc\u0627\u0646","state":3,"id":4300},{"label":"\u0647\u0627\u0686\u0627\u0633\u0648","state":3,"id":4354},{"label":"\u0647\u0627\u0634\u0645 \u0627\u0628\u0627\u062f","state":3,"id":4269},{"label":"\u0647\u0646\u062f\u0648\u0627\u0646","state":3,"id":4302},{"label":"\u0647\u0646\u06af \u0627\u0628\u0627\u062f","state":3,"id":4294},{"label":"\u0647\u0648\u0644\u0627\u0633\u0648","state":3,"id":4355},{"label":"\u06cc\u06a9\u0634\u0648\u0647","state":3,"id":4339},{"label":"\u06cc\u0648\u0644\u0627\u06af\u0644\u062f\u06cc","state":3,"id":4315}],"4":[{"label":"\u0622\u0628\u06cc \u0628\u06cc\u06af\u0644\u0648","state":4,"id":1498},{"label":"\u0627\u0631\u0627\u0644\u0644\u0648\u06cc \u0628\u0632\u0631\u06af","state":4,"id":4375},{"label":"\u0627\u0631\u062f\u0628\u06cc\u0644","state":4,"id":1476},{"label":"\u0627\u0631\u062f\u06cc\u0645\u0648\u0633\u06cc","state":4,"id":4370},{"label":"\u0627\u0633\u0644\u0627\u0645 \u0622\u0628\u0627\u062f","state":4,"id":1480},{"label":"\u0627\u0633\u0644\u0627\u0645 \u0627\u0628\u0627\u062f-\u0627\u0631\u062f\u0628\u06cc\u0644","state":4,"id":4371},{"label":"\u0627\u0635\u0644\u0627\u0646\u062f\u0648\u0632","state":4,"id":1481},{"label":"\u0627\u0642 \u0642\u0628\u0627\u0642 \u0639\u0644\u06cc\u0627","state":4,"id":4397},{"label":"\u0627\u0646\u062c\u06cc\u0631\u0644\u0648","state":4,"id":4386},{"label":"\u0627\u0646\u06cc \u0639\u0644\u06cc\u0627","state":4,"id":4379},{"label":"\u0628\u0631\u0627\u0646 \u0639\u0644\u06cc\u0627","state":4,"id":4399},{"label":"\u0628\u0631\u0646\u062f\u0642","state":4,"id":4394},{"label":"\u0628\u0642\u0631\u0627\u0628\u0627\u062f","state":4,"id":4373},{"label":"\u0628\u0648\u062f\u0627\u0644\u0627\u0644\u0648","state":4,"id":4374},{"label":"\u0628\u06cc\u0644\u0647 \u0633\u0648\u0627\u0631","state":4,"id":1479},{"label":"\u067e\u0627\u0631\u0633 \u0622\u0628\u0627\u062f","state":4,"id":1483},{"label":"\u067e\u0631\u06cc\u062e\u0627\u0646","state":4,"id":4382},{"label":"\u062a\u0627\u0632\u0647 \u06a9\u0646\u062f","state":4,"id":1482},{"label":"\u062a\u0627\u0632\u0647 \u06a9\u0646\u062f \u0627\u0646\u06af\u0648\u062a","state":4,"id":1488},{"label":"\u062a\u0627\u0632\u0647 \u06a9\u0646\u062f\u062c\u062f\u06cc\u062f","state":4,"id":4395},{"label":"\u062b\u0645\u0631\u06cc\u0646","state":4,"id":4369},{"label":"\u062c\u0639\u0641\u0631 \u0622\u0628\u0627\u062f","state":4,"id":1478},{"label":"\u062d\u0645\u0632\u0647 \u062e\u0627\u0646\u0644\u0648","state":4,"id":4377},{"label":"\u062e\u0644\u062e\u0627\u0644","state":4,"id":1486},{"label":"\u062e\u0644\u0641\u0644\u0648","state":4,"id":4393},{"label":"\u062e\u0648\u0631\u062e\u0648\u0631\u0633\u0641\u0644\u06cc","state":4,"id":4388},{"label":"\u062f\u06cc\u0632\u062c-\u0627\u0631\u062f\u0628\u06cc\u0644","state":4,"id":4376},{"label":"\u0631\u0636\u06cc","state":4,"id":1490},{"label":"\u0632\u0647\u0631\u0627","state":4,"id":4378},{"label":"\u0633\u0631\u0639\u06cc\u0646","state":4,"id":1487},{"label":"\u0634\u0648\u0631\u06af\u0644","state":4,"id":4389},{"label":"\u0634\u0647\u0631\u06a9 \u063a\u0641\u0627\u0631\u06cc","state":4,"id":4398},{"label":"\u0639\u0646\u0628\u0631\u0627\u0646","state":4,"id":1496},{"label":"\u0641\u062e\u0631\u0622\u0628\u0627\u062f","state":4,"id":1494},{"label":"\u0641\u06cc\u0631\u0648\u0632\u0627\u0628\u0627\u062f","state":4,"id":4392},{"label":"\u0642\u0627\u0633\u0645 \u06a9\u0646\u062f\u06cc","state":4,"id":4380},{"label":"\u0642\u0631\u0647 \u0627\u063a\u0627\u062c \u067e\u0627\u06cc\u06cc\u0646","state":4,"id":4381},{"label":"\u0642\u0634\u0644\u0627\u0642 \u0627\u063a\u062f\u0627\u0634 \u06a9\u0644\u0627\u0645","state":4,"id":4387},{"label":"\u0642\u0635\u0627\u0628\u0647","state":4,"id":1491},{"label":"\u0642\u0648\u0634\u0647 \u0633\u0641\u0644\u06cc","state":4,"id":4383},{"label":"\u06a9\u0644\u0648\u0631","state":4,"id":1485},{"label":"\u06a9\u0648\u0631\u0627\u0626\u06cc\u0645","state":4,"id":1500},{"label":"\u06af\u0631\u062f\u0647","state":4,"id":4368},{"label":"\u06af\u0631\u0645\u06cc","state":4,"id":1489},{"label":"\u06af\u0646\u062c\u0648\u0628\u0647","state":4,"id":4384},{"label":"\u06af\u0648\u0634\u0644\u0648","state":4,"id":4396},{"label":"\u06af\u0648\u06af \u062a\u067e\u0647-\u0627\u0631\u062f\u0628\u06cc\u0644","state":4,"id":4385},{"label":"\u06af\u06cc\u0648\u06cc","state":4,"id":1501},{"label":"\u0644\u0627\u0647\u0631\u0648\u062f","state":4,"id":1495},{"label":"\u0644\u0646\u0628\u0631","state":4,"id":4391},{"label":"\u0645\u0631\u0627\u062f\u0644\u0648","state":4,"id":1492},{"label":"\u0645\u0634\u06af\u06cc\u0646 \u0634\u0647\u0631","state":4,"id":1493},{"label":"\u0645\u0647\u0645\u0627\u0646\u062f\u0648\u0633\u062a \u0639\u0644\u06cc\u0627","state":4,"id":4372},{"label":"\u0646\u0638\u0631\u0639\u0644\u06cc \u0628\u0644\u0627\u063a\u06cc","state":4,"id":4390},{"label":"\u0646\u0645\u06cc\u0646","state":4,"id":1497},{"label":"\u0646\u0646\u0647 \u06a9\u0631\u0627\u0646","state":4,"id":4367},{"label":"\u0646\u06cc\u0631","state":4,"id":1499},{"label":"\u0647\u0634\u062a\u062c\u06cc\u0646","state":4,"id":1484},{"label":"\u0647\u06cc\u0631","state":4,"id":1477}],"5":[{"label":"\u0622\u0631\u0627\u0646 \u0648 \u0628\u06cc\u062f\u06af\u0644","state":5,"id":1502},{"label":"\u0627\u0628 \u0634\u06cc\u0631\u06cc\u0646","state":5,"id":3183},{"label":"\u0627\u0628\u0631\u06cc\u0634\u0645","state":5,"id":1566},{"label":"\u0627\u0628\u0648\u0632\u06cc\u062f \u0622\u0628\u0627\u062f","state":5,"id":1505},{"label":"\u0627\u0628\u06cc\u0627\u0646\u0647","state":5,"id":3193},{"label":"\u0627\u0630\u0627\u0646","state":5,"id":3191},{"label":"\u0627\u0631\u062f\u0633\u062a\u0627\u0646","state":5,"id":1507},{"label":"\u0627\u0631\u06cc\u0633\u0645\u0627\u0646","state":5,"id":3192},{"label":"\u0627\u0698\u06cc\u0647","state":5,"id":1514},{"label":"\u0627\u0633\u062d\u0642 \u0627\u0628\u0627\u062f-\u0627\u0635\u0641\u0647\u0627\u0646","state":5,"id":3189},{"label":"\u0627\u0633\u0641\u0631\u062c\u0627\u0646","state":5,"id":4403},{"label":"\u0627\u0633\u06a9\u0646\u062f\u0631\u06cc","state":5,"id":4472},{"label":"\u0627\u0633\u0644\u0627\u0645 \u0627\u0628\u0627\u062f\u0645\u0648\u06af\u0648\u06cc\u06cc","state":5,"id":4478},{"label":"\u0627\u0634\u06a9\u0633\u062a\u0627\u0646","state":5,"id":4430},{"label":"\u0627\u0634\u0646","state":5,"id":4461},{"label":"\u0627\u0634\u06cc\u0627\u0646","state":5,"id":4454},{"label":"\u0627\u0635\u063a\u0631\u0622\u0628\u0627\u062f","state":5,"id":1537},{"label":"\u0627\u0635\u0641\u0647\u0627\u0646","state":5,"id":1516},{"label":"\u0627\u063a\u062f\u0627\u0634","state":5,"id":4498},{"label":"\u0627\u0641\u0648\u0633","state":5,"id":1530},{"label":"\u0627\u0645\u06cc\u0646 \u0627\u0628\u0627\u062f","state":5,"id":4489},{"label":"\u0627\u0646\u0627\u0631\u06a9","state":5,"id":1588},{"label":"\u0627\u0648\u0631\u06af\u0627\u0646-\u0627\u0635\u0641\u0647\u0627\u0646","state":5,"id":4475},{"label":"\u0627\u0648\u0631\u0647","state":5,"id":3194},{"label":"\u0627\u06cc\u0645\u0627\u0646\u0634\u0647\u0631","state":5,"id":1567},{"label":"\u0628\u0627\u062f\u0631\u0648\u062f","state":5,"id":1597},{"label":"\u0628\u0627\u063a \u0628\u0647\u0627\u062f\u0631\u0627\u0646","state":5,"id":1574},{"label":"\u0628\u0627\u063a \u0645\u0644\u06a9-\u0627\u0635\u0641\u0647\u0627\u0646","state":5,"id":4448},{"label":"\u0628\u0627\u063a\u0634\u0627\u062f","state":5,"id":1576},{"label":"\u0628\u0627\u0641\u0631\u0627\u0646","state":5,"id":1589},{"label":"\u0628\u0631\u0632\u06a9","state":5,"id":1601},{"label":"\u0628\u0631\u0641 \u0627\u0646\u0628\u0627\u0631","state":5,"id":1561},{"label":"\u0628\u0644\u0627\u0646","state":5,"id":4420},{"label":"\u0628\u0644\u0637\u0627\u0642","state":5,"id":4467},{"label":"\u0628\u0648\u0626\u06cc\u0646 \u0645\u06cc\u0627\u0646\u062f\u0634\u062a","state":5,"id":1531},{"label":"\u0628\u0648\u0626\u06cc\u0646 \u0648 \u0645\u06cc\u0627\u0646\u062f\u0634\u062a","state":5,"id":4465},{"label":"\u0628\u0647\u0627\u0631\u0627\u0646 \u0634\u0647\u0631","state":5,"id":1563},{"label":"\u0628\u0647\u0627\u0631\u0633\u062a\u0627\u0646","state":5,"id":1517},{"label":"\u0628\u06cc\u0627\u0636\u0647","state":5,"id":4418},{"label":"\u067e\u0627\u062f\u06af\u0627\u0646 \u0627\u0645\u0648\u0632\u0634\u06cc \u0627\u0645\u0627\u0645 \u0635","state":5,"id":4409},{"label":"\u067e\u0627\u0644\u0627\u06cc\u0634\u06af\u0627\u0647 \u0627\u0635\u0641\u0647\u0627\u0646","state":5,"id":4410},{"label":"\u067e\u0631\u0632\u0627\u0646","state":5,"id":4483},{"label":"\u067e\u0644\u06cc \u0627\u06a9\u0631\u06cc\u0644","state":5,"id":4450},{"label":"\u067e\u0648\u062f\u0647","state":5,"id":4481},{"label":"\u067e\u06cc\u0631 \u0628\u06a9\u0631\u0627\u0646","state":5,"id":1564},{"label":"\u062a\u0627\u0633\u06cc\u0633\u0627\u062a \u0633\u062f\u0646\u06a9\u0648\u0627\u0628\u0627\u062f","state":5,"id":4455},{"label":"\u062a\u0644\u06a9 \u0627\u0628\u0627\u062f","state":5,"id":4439},{"label":"\u062a\u0648\u062f\u0634\u06a9","state":5,"id":1520},{"label":"\u062a\u0648\u0631\u0632\u0646","state":5,"id":4437},{"label":"\u062a\u06cc\u062f\u062c\u0627\u0646","state":5,"id":3208},{"label":"\u062a\u06cc\u0631\u0627\u0646","state":5,"id":1532},{"label":"\u062a\u06cc\u0631\u0627\u0646\u0686\u06cc","state":5,"id":4433},{"label":"\u062a\u06cc\u06a9\u0646","state":5,"id":3203},{"label":"\u062c\u0646\u062f\u0642","state":5,"id":1542},{"label":"\u062c\u0648\u062c\u06cc\u0644","state":5,"id":4445},{"label":"\u062c\u0648\u0632\u062f\u0627\u0646","state":5,"id":1591},{"label":"\u062c\u0648\u0634\u0642\u0627\u0646 \u0627\u0633\u062a\u0631\u06a9","state":5,"id":4405},{"label":"\u062c\u0648\u0634\u0642\u0627\u0646 \u0642\u0627\u0644\u06cc","state":5,"id":1602},{"label":"\u062c\u0648\u0634\u0642\u0627\u0646 \u0648 \u06a9\u0627\u0645\u0648","state":5,"id":3188},{"label":"\u0686\u0627\u062f\u06af\u0627\u0646","state":5,"id":1535},{"label":"\u0686\u0627\u0647 \u063a\u0644\u0627\u0645\u0631\u0636\u0627\u0631\u062d\u06cc\u0645\u06cc","state":5,"id":4474},{"label":"\u0686\u0631\u0645\u0647\u06cc\u0646","state":5,"id":1575},{"label":"\u0686\u0634\u0645\u0647 \u0631\u062d\u0645\u0627\u0646","state":5,"id":4499},{"label":"\u0686\u0645 \u0646\u0648\u0631","state":5,"id":4452},{"label":"\u0686\u0645\u06af\u0631\u062f\u0627\u0646","state":5,"id":1577},{"label":"\u0686\u0648\u067e\u0627\u0646\u0627\u0646","state":5,"id":4419},{"label":"\u0686\u0647\u0627\u0631\u0631\u0627\u0647","state":5,"id":4496},{"label":"\u062d\u0627\u062c\u06cc \u0627\u0628\u0627\u062f","state":5,"id":4459},{"label":"\u062d\u0628\u06cc\u0628 \u0622\u0628\u0627\u062f","state":5,"id":1523},{"label":"\u062d\u0633\u0646 \u0622\u0628\u0627\u062f","state":5,"id":1513},{"label":"\u062d\u0633\u0646 \u0627\u0628\u0627\u062f-\u0627\u0635\u0641\u0647\u0627\u0646","state":5,"id":4421},{"label":"\u062d\u0633\u06cc\u0646 \u0627\u0628\u0627\u062f-\u0627\u0635\u0641\u0647\u0627\u0646","state":5,"id":4463},{"label":"\u062d\u0646\u0627","state":5,"id":1548},{"label":"\u062e\u0627\u0644\u062f \u0622\u0628\u0627\u062f","state":5,"id":1598},{"label":"\u062e\u0633\u0631\u0648\u0627\u0628\u0627\u062f-\u0627\u0635\u0641\u0647\u0627\u0646","state":5,"id":4414},{"label":"\u062e\u0634\u06a9\u0631\u0648\u062f-\u0627\u0635\u0641\u0647\u0627\u0646","state":5,"id":3209},{"label":"\u062e\u0645 \u067e\u06cc\u0686","state":5,"id":3206},{"label":"\u062e\u0645\u06cc\u0646\u06cc \u0634\u0647\u0631","state":5,"id":1538},{"label":"\u062e\u0648\u0627\u0646\u0633\u0627\u0631","state":5,"id":1541},{"label":"\u062e\u0648\u0627\u0646\u0633\u0627\u0631\u06a9","state":5,"id":4441},{"label":"\u062e\u0648\u0631","state":5,"id":1543},{"label":"\u062e\u0648\u0631\u0627\u0633\u06af\u0627\u0646","state":5,"id":4406},{"label":"\u062e\u0648\u0631\u0632\u0648\u0642","state":5,"id":1526},{"label":"\u062e\u0648\u0646\u062f\u0627\u0628","state":5,"id":4462},{"label":"\u062e\u06cc\u0631\u0627\u0628\u0627\u062f-\u0627\u0635\u0641\u0647\u0627\u0646","state":5,"id":4460},{"label":"\u062f\u0627\u0631\u0627\u0646","state":5,"id":1559},{"label":"\u062f\u0627\u0645\u0646\u0647","state":5,"id":1560},{"label":"\u062f\u0631\u0686\u0647 \u067e\u06cc\u0627\u0632","state":5,"id":1539},{"label":"\u062f\u0631\u0642\u0647","state":5,"id":4435},{"label":"\u062f\u0633\u062a\u062c\u0627","state":5,"id":4408},{"label":"\u062f\u0633\u062a\u06af\u0631\u062f","state":5,"id":1527},{"label":"\u062f\u0648\u0644\u062a \u0622\u0628\u0627\u062f","state":5,"id":1528},{"label":"\u062f\u0647 \u0632\u06cc\u0631\u0647","state":5,"id":3181},{"label":"\u062f\u0647 \u0646\u0633\u0627 \u0633\u0641\u0644\u06cc","state":5,"id":4497},{"label":"\u062f\u0647\u0627\u0642\u0627\u0646","state":5,"id":1545},{"label":"\u062f\u0647\u0633\u0631\u062e","state":5,"id":4449},{"label":"\u062f\u0647\u0642","state":5,"id":1595},{"label":"\u062f\u06cc\u0632\u06cc\u0686\u0647","state":5,"id":1584},{"label":"\u0631\u0628\u0627\u0637\u0627\u0642\u0627\u06a9\u0645\u0627\u0644","state":5,"id":4413},{"label":"\u0631\u062d\u0642","state":5,"id":3182},{"label":"\u0631\u062d\u0645\u062a \u0627\u0628\u0627\u062f","state":5,"id":3205},{"label":"\u0631\u0632\u0648\u0647","state":5,"id":1536},{"label":"\u0631\u0636\u0648\u0627\u0646\u0634\u0647\u0631","state":5,"id":1533},{"label":"\u0632\u0627\u0632\u0631\u0627\u0646","state":5,"id":1565},{"label":"\u0632\u0627\u06cc\u0646\u062f\u0647 \u0631\u0648\u062f","state":5,"id":1578},{"label":"\u0632\u0631\u0646\u062c\u0627\u0646","state":5,"id":3201},{"label":"\u0632\u0631\u0646\u0647-\u0627\u0635\u0641\u0647\u0627\u0646","state":5,"id":4466},{"label":"\u0632\u0631\u06cc\u0646 \u0634\u0647\u0631","state":5,"id":1579},{"label":"\u0632\u0648\u0627\u0631\u0647","state":5,"id":1506},{"label":"\u0632\u06cc\u0627\u0631","state":5,"id":1518},{"label":"\u0632\u06cc\u0628\u0627\u0634\u0647\u0631","state":5,"id":1583},{"label":"\u0633\u0627\u0632\u0645\u0627\u0646 \u0639\u0645\u0631\u0627\u0646 \u0632\u0627\u06cc\u0646\u062f\u0647 \u0631\u0648\u062f","state":5,"id":4470},{"label":"\u0633\u067e\u0627\u0647\u0627\u0646 \u0634\u0647\u0631","state":5,"id":4623},{"label":"\u0633\u062f\u0647 \u0644\u0646\u062c\u0627\u0646","state":5,"id":1580},{"label":"\u0633\u0639\u0627\u062f\u062a \u0627\u0628\u0627\u062f","state":5,"id":3178},{"label":"\u0633\u0639\u06cc\u062f\u0627\u0628\u0627\u062f-\u0627\u0635\u0641\u0647\u0627\u0646","state":5,"id":3196},{"label":"\u0633\u0641\u06cc\u062f \u0634\u0647\u0631","state":5,"id":1503},{"label":"\u0633\u06af\u0632\u06cc","state":5,"id":1521},{"label":"\u0633\u0645\u06cc\u0631\u0645","state":5,"id":1549},{"label":"\u0633\u0646 \u0633\u0646","state":5,"id":3180},{"label":"\u0633\u0646\u06af \u0633\u0641\u06cc\u062f","state":5,"id":3204},{"label":"\u0633\u0648\u0644\u0627\u0631","state":5,"id":4491},{"label":"\u0633\u0647\u0631\u0648\u0641\u06cc\u0631\u0648\u0632\u0627\u0646","state":5,"id":4443},{"label":"\u0633\u06cc\u0646","state":5,"id":1529},{"label":"\u0634\u0627\u067e\u0648\u0631\u0622\u0628\u0627\u062f","state":5,"id":1524},{"label":"\u0634\u0627\u0647\u06cc\u0646 \u0634\u0647\u0631","state":5,"id":1551},{"label":"\u0634\u0631\u0648\u062f\u0627\u0646","state":5,"id":4444},{"label":"\u0634\u0647\u0631 \u0627\u0628\u0631\u06cc\u0634\u0645","state":5,"id":4622},{"label":"\u0634\u0647\u0631\u0627\u0628-\u0627\u0635\u0641\u0647\u0627\u0646","state":5,"id":4436},{"label":"\u0634\u0647\u0631\u0636\u0627","state":5,"id":1557},{"label":"\u0634\u0647\u0631\u06a9 \u0635\u0646\u0627\u06cc\u0639 \u0634\u06cc\u0645\u06cc\u0627\u06cc\u06cc \u0631","state":5,"id":4485},{"label":"\u0637\u0627\u0644\u062e\u0648\u0646\u0686\u0647","state":5,"id":1585},{"label":"\u0637\u0631\u0642 \u0631\u0648\u062f","state":5,"id":1599},{"label":"\u0638\u0641\u0631\u0642\u0646\u062f","state":5,"id":4423},{"label":"\u0639\u0632\u06cc\u0632\u0627\u0628\u0627\u062f-\u0627\u0635\u0641\u0647\u0627\u0646","state":5,"id":4457},{"label":"\u0639\u0633\u06af\u0631\u0627\u0646","state":5,"id":1534},{"label":"\u0639\u0644\u0648\u06cc\u062c\u0647","state":5,"id":4402},{"label":"\u0639\u0644\u0648\u06cc\u0686\u0647","state":5,"id":1596},{"label":"\u063a\u0631\u063a\u0646","state":5,"id":4464},{"label":"\u0641\u062a\u062d \u0627\u0628\u0627\u062f-\u0627\u0635\u0641\u0647\u0627\u0646","state":5,"id":3179},{"label":"\u0641\u0631\u062e\u06cc","state":5,"id":1544},{"label":"\u0641\u0631\u06cc\u062f\u0648\u0646\u0634\u0647\u0631","state":5,"id":1562},{"label":"\u0641\u0633\u062e\u0648\u062f","state":5,"id":4428},{"label":"\u0641\u0644\u0627\u0648\u0631\u062c\u0627\u0646","state":5,"id":1568},{"label":"\u0641\u0648\u062f\u0627\u0632","state":5,"id":4429},{"label":"\u0641\u0648\u0644\u0627\u062f\u0634\u0647\u0631","state":5,"id":1581},{"label":"\u0641\u0648\u0644\u0627\u062f\u0645\u0628\u0627\u0631\u06a9\u0647","state":5,"id":4451},{"label":"\u0642\u0631\u063a\u0646","state":5,"id":3198},{"label":"\u0642\u0631\u0647 \u0628\u0644\u0637\u0627\u0642","state":5,"id":4469},{"label":"\u0642\u0635\u0631\u0686\u0645","state":5,"id":4488},{"label":"\u0642\u0644\u0639\u0647 \u0627\u0645\u06cc\u0631\u06cc\u0647","state":5,"id":4434},{"label":"\u0642\u0644\u0639\u0647 \u0633\u0631\u062e","state":5,"id":4477},{"label":"\u0642\u0645\u0634\u0644\u0648","state":5,"id":4480},{"label":"\u0642\u0645\u0635\u0631","state":5,"id":1603},{"label":"\u0642\u0647\u062c\u0627\u0648\u0631\u0633\u062a\u0627\u0646","state":5,"id":1519},{"label":"\u0642\u0647\u062f\u0631\u06cc\u062c\u0627\u0646","state":5,"id":1569},{"label":"\u0642\u0647\u0631\u0648\u062f","state":5,"id":3187},{"label":"\u06a9\u0627\u0634\u0627\u0646","state":5,"id":1606},{"label":"\u06a9\u0627\u063a\u0630\u06cc","state":5,"id":3186},{"label":"\u06a9\u0627\u0645\u0648 \u0648 \u0686\u0648\u06af\u0627\u0646","state":5,"id":1604},{"label":"\u06a9\u062c\u0627\u0646","state":5,"id":4431},{"label":"\u06a9\u0686\u0648\u0645\u062b\u0642\u0627\u0644","state":5,"id":4422},{"label":"\u06a9\u0686\u0648\u06cc\u06cc\u0647","state":5,"id":4453},{"label":"\u06a9\u0631\u0686","state":5,"id":4468},{"label":"\u06a9\u0631\u0686\u06af\u0627\u0646","state":5,"id":4447},{"label":"\u06a9\u0631\u0633\u06af\u0627\u0646","state":5,"id":4442},{"label":"\u06a9\u0631\u06a9\u0648\u0646\u062f","state":5,"id":1587},{"label":"\u06a9\u0631\u06cc\u0645 \u0627\u0628\u0627\u062f-\u0627\u0635\u0641\u0647\u0627\u0646","state":5,"id":4438},{"label":"\u06a9\u0644\u0648\u0686\u0627\u0646","state":5,"id":3200},{"label":"\u06a9\u0644\u0647\u0631\u0648\u062f","state":5,"id":4411},{"label":"\u06a9\u0644\u06cc\u0634\u0627\u062f \u0648 \u0633\u0648\u062f\u0631\u062c\u0627\u0646","state":5,"id":1570},{"label":"\u06a9\u0645\u0634\u062c\u0647","state":5,"id":1525},{"label":"\u06a9\u0645\u0634\u0686\u0647","state":5,"id":4415},{"label":"\u06a9\u0645\u0647","state":5,"id":1547},{"label":"\u06a9\u0648\u0686\u0631\u06cc","state":5,"id":3199},{"label":"\u06a9\u0648\u0634\u06a9","state":5,"id":1540},{"label":"\u06a9\u0648\u0647\u067e\u0627\u06cc\u0647","state":5,"id":1522},{"label":"\u06a9\u0647\u0631\u0648\u06cc\u0647","state":5,"id":4487},{"label":"\u06a9\u0647\u0631\u06cc\u0632\u0633\u0646\u06af","state":5,"id":1594},{"label":"\u06a9\u0647\u0646\u06af\u0627\u0646","state":5,"id":4494},{"label":"\u06af\u0631\u06af\u0627\u0628","state":5,"id":1552},{"label":"\u06af\u0631\u0645\u0648\u06a9","state":5,"id":4492},{"label":"\u06af\u0632 \u0628\u0631\u062e\u0648\u0627\u0631","state":5,"id":1553},{"label":"\u06af\u0644\u067e\u0627\u06cc\u06af\u0627\u0646","state":5,"id":1571},{"label":"\u06af\u0644\u062f\u0634\u062a","state":5,"id":1592},{"label":"\u06af\u0644\u0634\u0646","state":5,"id":1546},{"label":"\u06af\u0644\u0634\u0647\u0631","state":5,"id":1572},{"label":"\u06af\u0648\u0631\u062a","state":5,"id":4407},{"label":"\u06af\u0648\u06af\u062f","state":5,"id":1573},{"label":"\u0644\u0627\u06cc \u0628\u06cc\u062f","state":5,"id":1554},{"label":"\u0645\u0628\u0627\u0631\u06a9\u0647","state":5,"id":1586},{"label":"\u0645\u062d\u0645\u062f \u0622\u0628\u0627\u062f","state":5,"id":1510},{"label":"\u0645\u0631\u063a","state":5,"id":3197},{"label":"\u0645\u0632\u0631\u0639\u0647 \u0635\u062f\u0631","state":5,"id":3185},{"label":"\u0645\u0632\u06cc\u06a9","state":5,"id":4416},{"label":"\u0645\u0634\u06a9\u0627\u062a","state":5,"id":1605},{"label":"\u0645\u0634\u0647\u062f\u06a9\u0627\u0648\u0647","state":5,"id":4471},{"label":"\u0645\u0635\u06cc\u0631","state":5,"id":4479},{"label":"\u0645\u0642\u0635\u0648\u062f\u0628\u06cc\u06a9","state":5,"id":4490},{"label":"\u0645\u0644\u0627\u0632\u062c\u0627\u0646","state":5,"id":3195},{"label":"\u0645\u0646\u0637\u0642\u0647 \u0635\u0646\u0639\u062a\u06cc \u0645\u062d\u0645\u0648\u062f\u0627\u0628\u0627\u062f","state":5,"id":4400},{"label":"\u0645\u0646\u0638\u0631\u06cc\u0647","state":5,"id":1558},{"label":"\u0645\u0646\u0648\u0686\u0647\u0631\u0627\u0628\u0627\u062f","state":5,"id":4484},{"label":"\u0645\u0648\u062a\u0647","state":5,"id":4412},{"label":"\u0645\u0648\u0631\u0686\u0647 \u062e\u0648\u0631\u062a","state":5,"id":4401},{"label":"\u0645\u0648\u0631\u06a9","state":5,"id":4495},{"label":"\u0645\u0648\u063a\u0627\u0631","state":5,"id":4440},{"label":"\u0645\u0647\u0627\u0628\u0627\u062f","state":5,"id":1508},{"label":"\u0645\u0647\u0631\u0627\u0628\u0627\u062f","state":5,"id":3207},{"label":"\u0645\u0647\u0631\u062c\u0627\u0646","state":5,"id":4417},{"label":"\u0645\u0647\u0631\u06af\u0631\u062f","state":5,"id":4404},{"label":"\u0645\u0647\u06cc\u0627\u0631","state":5,"id":4482},{"label":"\u0645\u06cc\u0631\u0627\u0628\u0627\u062f-\u0627\u0635\u0641\u0647\u0627\u0646","state":5,"id":4458},{"label":"\u0645\u06cc\u0645\u0647","state":5,"id":1555},{"label":"\u0646\u0627\u0626\u06cc\u0646","state":5,"id":1590},{"label":"\u0646\u062c\u0641 \u0622\u0628\u0627\u062f","state":5,"id":1593},{"label":"\u0646\u0634\u0644\u062c","state":5,"id":3184},{"label":"\u0646\u0635\u0631\u0622\u0628\u0627\u062f","state":5,"id":1511},{"label":"\u0646\u0637\u0646\u0632","state":5,"id":1600},{"label":"\u0646\u0648\u0634 \u0622\u0628\u0627\u062f","state":5,"id":1504},{"label":"\u0646\u0648\u06af\u0648\u0631\u0627\u0646","state":5,"id":4446},{"label":"\u0646\u0647\u0631\u062e\u0644\u062c","state":5,"id":4473},{"label":"\u0646\u0647\u0636\u062a \u0627\u0628\u0627\u062f","state":5,"id":4476},{"label":"\u0646\u0647\u0648\u062c","state":5,"id":4424},{"label":"\u0646\u06cc\u0627\u0633\u0631","state":5,"id":1607},{"label":"\u0646\u06cc\u0633\u062a\u0627\u0646\u06a9","state":5,"id":4432},{"label":"\u0646\u06cc\u0633\u06cc\u0627\u0646","state":5,"id":4425},{"label":"\u0646\u06cc\u06a9 \u0622\u0628\u0627\u062f","state":5,"id":1512},{"label":"\u0648\u0627\u062f\u0642\u0627\u0646","state":5,"id":3190},{"label":"\u0648\u0627\u0646\u0634\u0627\u0646","state":5,"id":3202},{"label":"\u0648\u0631\u067e\u0634\u062a","state":5,"id":4456},{"label":"\u0648\u0631\u0632\u0646\u0647","state":5,"id":1509},{"label":"\u0648\u0631\u0642","state":5,"id":4500},{"label":"\u0648\u0631\u0646\u0627\u0645\u062e\u0648\u0627\u0633\u062a","state":5,"id":1582},{"label":"\u0648\u0632\u0648\u0627\u0646","state":5,"id":1556},{"label":"\u0648\u0645\u06a9\u0627\u0646","state":5,"id":4426},{"label":"\u0648\u0646\u06a9","state":5,"id":1550},{"label":"\u0648\u06cc\u0633\u062a","state":5,"id":3210},{"label":"\u0647\u0631\u0646\u062f","state":5,"id":1515},{"label":"\u0647\u0633\u062a","state":5,"id":4493},{"label":"\u0647\u0645\u0633\u0627\u0631","state":5,"id":4427},{"label":"\u0647\u0645\u06af\u06cc\u0646","state":5,"id":4486}],"6":[{"label":"\u0622\u0633\u0627\u0631\u0627","state":6,"id":1618},{"label":"\u0627\u062f\u0631\u0627\u0646","state":6,"id":3211},{"label":"\u0627\u0634\u062a\u0647\u0627\u0631\u062f","state":6,"id":1608},{"label":"\u062a\u0646\u06a9\u0645\u0627\u0646","state":6,"id":1616},{"label":"\u0686\u0647\u0627\u0631\u0628\u0627\u063a","state":6,"id":1610},{"label":"\u0633\u0648\u0644\u0642\u0627\u0646","state":6,"id":4608},{"label":"\u0634\u0647\u0631 \u062c\u062f\u06cc\u062f \u0647\u0634\u062a\u06af\u0631\u062f","state":6,"id":1611},{"label":"\u0637\u0627\u0644\u0642\u0627\u0646","state":6,"id":1614},{"label":"\u0641\u0631\u062f\u06cc\u0633","state":6,"id":1615},{"label":"\u0642\u0632\u0644 \u062d\u0635\u0627\u0631","state":6,"id":4614},{"label":"\u06a9\u0631\u062c","state":6,"id":1623},{"label":"\u06a9\u0645\u0627\u0644 \u0634\u0647\u0631","state":6,"id":1624},{"label":"\u06a9\u0648\u0647\u0633\u0627\u0631","state":6,"id":1609},{"label":"\u06a9\u06cc\u0627\u0646\u0645\u0647\u0631","state":6,"id":4610},{"label":"\u06af\u0631\u0645\u062f\u0631\u0647","state":6,"id":1619},{"label":"\u06af\u0644\u0633\u0627\u0631","state":6,"id":1612},{"label":"\u0645\u0627\u0631\u0644\u06cc\u06a9","state":6,"id":4611},{"label":"\u0645\u0627\u0647\u062f\u0634\u062a","state":6,"id":1620},{"label":"\u0645\u062d\u0645\u062f \u0634\u0647\u0631","state":6,"id":1621},{"label":"\u0645\u0634\u06a9\u06cc\u0646 \u062f\u0634\u062a","state":6,"id":1622},{"label":"\u0646\u0638\u0631 \u0622\u0628\u0627\u062f","state":6,"id":1617},{"label":"\u0647\u0634\u062a\u06af\u0631\u062f","state":6,"id":1613}],"7":[{"label":"\u0622\u0628\u062f\u0627\u0646\u0627\u0646","state":7,"id":1626},{"label":"\u0622\u0633\u0645\u0627\u0646 \u0622\u0628\u0627\u062f","state":7,"id":1635},{"label":"\u0627\u0628 \u0627\u0646\u0627\u0631","state":7,"id":3231},{"label":"\u0627\u0631\u06a9\u0648\u0627\u0632","state":7,"id":1647},{"label":"\u0627\u0631\u0645\u0648","state":7,"id":3225},{"label":"\u0627\u06cc\u0644\u0627\u0645","state":7,"id":1629},{"label":"\u0627\u06cc\u0648\u0627\u0646","state":7,"id":1631},{"label":"\u0628\u0627\u0646\u0648\u06cc\u0632\u0647","state":7,"id":3216},{"label":"\u0628\u062f\u0631\u0647","state":7,"id":1632},{"label":"\u0628\u0644\u0627\u0648\u0647","state":7,"id":1633},{"label":"\u0628\u0644\u0627\u0648\u0647 \u062a\u0631\u0647 \u0633\u0641\u0644\u06cc","state":7,"id":3221},{"label":"\u0628\u06cc\u0634\u0647 \u062f\u0631\u0627\u0632","state":7,"id":3214},{"label":"\u067e\u0627\u0631\u06cc\u0627\u0628","state":7,"id":3238},{"label":"\u067e\u0647\u0644\u0647","state":7,"id":1640},{"label":"\u062a\u0648\u062d\u06cc\u062f","state":7,"id":1637},{"label":"\u0686\u0634\u0645\u0647 \u0634\u06cc\u0631\u06cc\u0646","state":7,"id":3226},{"label":"\u0686\u0634\u0645\u0647 \u06a9\u0628\u0648\u062f","state":7,"id":3215},{"label":"\u0686\u0645 \u0647\u0646\u062f\u06cc","state":7,"id":3232},{"label":"\u0686\u0645\u0646 \u0633\u06cc\u062f\u0645\u062d\u0645\u062f","state":7,"id":3217},{"label":"\u0686\u0646\u0627\u0631\u0628\u0627\u0634\u06cc","state":7,"id":3213},{"label":"\u0686\u0648\u0627\u0631","state":7,"id":1628},{"label":"\u062f\u0631\u0647 \u0634\u0647\u0631","state":7,"id":1639},{"label":"\u062f\u0634\u062a \u0639\u0628\u0627\u0633","state":7,"id":3235},{"label":"\u062f\u0644\u06af\u0634\u0627","state":7,"id":1645},{"label":"\u062f\u0648\u0644 \u06a9\u0628\u0648\u062f\u062e\u0648\u0634\u0627\u062f\u0648\u0644","state":7,"id":3237},{"label":"\u062f\u0647\u0644\u0631\u0627\u0646","state":7,"id":1642},{"label":"\u0632\u0631\u0646\u0647","state":7,"id":1630},{"label":"\u0698\u06cc\u0648\u0631","state":7,"id":3229},{"label":"\u0633\u0631\u0622\u0628\u0644\u0647","state":7,"id":3212},{"label":"\u0633\u0631\u0627\u0628 \u0628\u0627\u063a","state":7,"id":1625},{"label":"\u0633\u0631\u0627\u0628 \u06a9\u0627\u0631\u0632\u0627\u0646","state":7,"id":3222},{"label":"\u0633\u0631\u0627\u0628\u0644\u0647","state":7,"id":1636},{"label":"\u0633\u06cc\u0627\u0647 \u06af\u0644","state":7,"id":3230},{"label":"\u0634\u0628\u0627\u0628","state":7,"id":1634},{"label":"\u0634\u0648\u0631\u0627\u0628\u0647 \u0645\u0644\u06a9","state":7,"id":3219},{"label":"\u0634\u0647\u0631\u06a9 \u0627\u0633\u0644\u0627\u0645\u06cc\u0647","state":7,"id":3236},{"label":"\u0634\u0647\u0631\u06a9 \u0633\u0631\u062a\u0646\u06af","state":7,"id":3223},{"label":"\u0634\u0647\u0631\u06a9 \u0648\u0644\u06cc\u0639\u0635\u0631","state":7,"id":3227},{"label":"\u0635\u0627\u0644\u062d \u0622\u0628\u0627\u062f","state":7,"id":1648},{"label":"\u0639\u0644\u06cc \u0627\u0628\u0627\u062f-\u0627\u06cc\u0644\u0627\u0645","state":7,"id":3224},{"label":"\u0639\u06cc\u0646 \u062e\u0648\u0634","state":7,"id":3234},{"label":"\u06a9\u0644\u0627\u0646","state":7,"id":3220},{"label":"\u06af\u0646\u062f\u0627\u0628","state":7,"id":3228},{"label":"\u06af\u0648\u0644\u0627\u0628","state":7,"id":3233},{"label":"\u0644\u0648\u0645\u0627\u0631","state":7,"id":1644},{"label":"\u0645\u0627\u0698\u06cc\u0646","state":7,"id":1638},{"label":"\u0645\u0648\u0631\u0645\u0648\u0631\u06cc","state":7,"id":1627},{"label":"\u0645\u0648\u0633\u06cc\u0627\u0646","state":7,"id":1643},{"label":"\u0645\u0647\u0631","state":7,"id":1646},{"label":"\u0645\u0647\u0631\u0627\u0646","state":7,"id":1649},{"label":"\u0645\u06cc\u0645\u0647","state":7,"id":1641},{"label":"\u0647\u0641\u062a \u0686\u0634\u0645\u0647-\u0627\u06cc\u0644\u0627\u0645","state":7,"id":3218}],"8":[{"label":"\u0622\u0628\u0627\u062f","state":8,"id":1654},{"label":"\u0622\u0628\u067e\u062e\u0634","state":8,"id":1659},{"label":"\u0622\u0628\u062f\u0627\u0646","state":8,"id":1673},{"label":"\u0627\u0628\u0627\u062f","state":8,"id":3242},{"label":"\u0627\u0628\u06af\u0631\u0645\u06a9","state":8,"id":3243},{"label":"\u0627\u0645\u0627\u0645 \u062d\u0633\u0646","state":8,"id":1677},{"label":"\u0627\u0646\u0627\u0631\u0633\u062a\u0627\u0646","state":8,"id":1656},{"label":"\u0627\u0647\u0631\u0645","state":8,"id":1655},{"label":"\u0628\u0627\u062f\u0648\u0644\u0647","state":8,"id":1670},{"label":"\u0628\u0631\u0627\u0632\u062c\u0627\u0646","state":8,"id":1666},{"label":"\u0628\u0631\u062f\u062e\u0648\u0646","state":8,"id":1672},{"label":"\u0628\u0631\u062f\u0633\u062a\u0627\u0646","state":8,"id":1674},{"label":"\u0628\u0646\u062f\u0631 \u062f\u06cc\u0631","state":8,"id":1675},{"label":"\u0628\u0646\u062f\u0631 \u062f\u06cc\u0644\u0645","state":8,"id":1678},{"label":"\u0628\u0646\u062f\u0631 \u0631\u06cc\u06af","state":8,"id":1681},{"label":"\u0628\u0646\u062f\u0631 \u06a9\u0646\u06af\u0627\u0646","state":8,"id":1683},{"label":"\u0628\u0646\u062f\u0631 \u06af\u0646\u0627\u0648\u0647","state":8,"id":1682},{"label":"\u0628\u0646\u06a9","state":8,"id":1684},{"label":"\u0628\u0646\u0647 \u06af\u0632","state":8,"id":3241},{"label":"\u0628\u0648\u0634\u06a9\u0627\u0646","state":8,"id":1661},{"label":"\u0628\u0648\u0634\u0647\u0631","state":8,"id":1651},{"label":"\u062a\u0646\u06af \u0627\u0631\u0645","state":8,"id":1660},{"label":"\u062c\u0645","state":8,"id":1658},{"label":"\u0686\u063a\u0627\u062f\u06a9","state":8,"id":1652},{"label":"\u0686\u0647\u0627\u0631\u0631\u0648\u0633\u062a\u0627\u06cc\u06cc","state":8,"id":3239},{"label":"\u062e\u0627\u0631\u06a9","state":8,"id":1650},{"label":"\u062e\u0648\u0631\u0645\u0648\u062c","state":8,"id":1669},{"label":"\u062f\u0627\u0644\u06a9\u06cc","state":8,"id":1667},{"label":"\u062f\u0644\u0648\u0627\u0631","state":8,"id":1653},{"label":"\u062f\u0648\u0631\u0627\u0647\u06a9","state":8,"id":1676},{"label":"\u0631\u06cc\u0632","state":8,"id":1657},{"label":"\u0633\u0639\u062f \u0622\u0628\u0627\u062f","state":8,"id":1663},{"label":"\u0633\u06cc\u0631\u0627\u0641","state":8,"id":1685},{"label":"\u0634\u0628\u0627\u0646\u06a9\u0627\u0631\u0647","state":8,"id":1665},{"label":"\u0634\u0646\u0628\u0647","state":8,"id":1668},{"label":"\u0634\u0648\u0644","state":8,"id":3240},{"label":"\u0639\u0627\u0644\u06cc\u0634\u0647\u0631","state":8,"id":4511},{"label":"\u0639\u0633\u0644\u0648\u06cc\u0647","state":8,"id":1679},{"label":"\u06a9\u0627\u06a9\u06cc","state":8,"id":1671},{"label":"\u06a9\u0644\u0645\u0647","state":8,"id":1662},{"label":"\u0646\u062e\u0644 \u062a\u0642\u06cc","state":8,"id":1680},{"label":"\u0648\u062d\u062f\u062a\u06cc\u0647","state":8,"id":1664}],"9":[{"label":"\u0622\u0628\u0639\u0644\u06cc","state":9,"id":1699},{"label":"\u0627\u0628\u0628\u0627\u0631\u06cc\u06a9","state":9,"id":3249},{"label":"\u0627\u0628\u0631\u0627\u0647\u06cc\u0645 \u0627\u0628\u0627\u062f","state":9,"id":3268},{"label":"\u0627\u062d\u0645\u062f\u0622\u0628\u0627\u062f\u062c\u0627\u0646\u0633\u067e\u0627\u0631","state":9,"id":3293},{"label":"\u0627\u062d\u0645\u062f\u0627\u0628\u0627\u062f\u0645\u0633\u062a\u0648\u0641\u06cc","state":9,"id":3298},{"label":"\u0627\u0631\u062c\u0645\u0646\u062f","state":9,"id":1721},{"label":"\u0627\u0633\u0644\u0627\u0645 \u0627\u0628\u0627\u062f","state":9,"id":3278},{"label":"\u0627\u0633\u0644\u0627\u0645\u0634\u0647\u0631","state":9,"id":1687},{"label":"\u0627\u0633\u0645\u0627\u0639\u06cc\u0644 \u0622\u0628\u0627\u062f","state":9,"id":3294},{"label":"\u0627\u0645\u06cc\u0631\u06cc\u0647","state":9,"id":3311},{"label":"\u0627\u0646\u062f\u06cc\u0634\u0647","state":9,"id":1714},{"label":"\u0627\u06cc\u062c\u062f\u0627\u0646","state":9,"id":3248},{"label":"\u0628\u0627\u063a\u062e\u0648\u0627\u0635","state":9,"id":3247},{"label":"\u0628\u0627\u063a\u0633\u062a\u0627\u0646","state":9,"id":1715},{"label":"\u0628\u0627\u0642\u0631\u0634\u0647\u0631","state":9,"id":1708},{"label":"\u0628\u0648\u0645\u0647\u0646","state":9,"id":1696},{"label":"\u067e\u0627\u0631\u0686\u06cc\u0646","state":9,"id":3256},{"label":"\u067e\u0627\u06a9\u062f\u0634\u062a","state":9,"id":1693},{"label":"\u067e\u0631\u062f\u06cc\u0633","state":9,"id":1697},{"label":"\u067e\u0631\u0646\u062f","state":9,"id":3287},{"label":"\u067e\u06cc\u0634\u0648\u0627","state":9,"id":1695},{"label":"\u062a\u0647\u0631\u0627\u0646","state":9,"id":1698},{"label":"\u062c\u0627\u0628\u0627\u0646","state":9,"id":3303},{"label":"\u062c\u0627\u062c\u0631\u0648\u062f(\u062e\u0633\u0631\u0648\u0622\u0628\u0627\u062f)","state":9,"id":3260},{"label":"\u062c\u0639\u0641\u0631\u0627\u0628\u0627\u062f\u0628\u0627\u0642\u0631\u0627\u0641","state":9,"id":3262},{"label":"\u062c\u0644\u06cc\u0644 \u0627\u0628\u0627\u062f","state":9,"id":3251},{"label":"\u062c\u0648\u0627\u062f \u0622\u0628\u0627\u062f","state":9,"id":1727},{"label":"\u0686\u0631\u0645\u0634\u0647\u0631","state":9,"id":3269},{"label":"\u0686\u0647\u0627\u0631\u062f\u0627\u0646\u06af\u0647","state":9,"id":1686},{"label":"\u062d\u0633\u0646 \u0622\u0628\u0627\u062f","state":9,"id":1706},{"label":"\u062d\u0633\u0646 \u0622\u0628\u0627\u062f \u0641\u0634\u0627\u0641\u0648\u06cc\u0647","state":9,"id":4613},{"label":"\u062d\u0635\u0627\u0631\u0627\u0645\u06cc\u0631","state":9,"id":3257},{"label":"\u062d\u0635\u0627\u0631\u0628\u0646","state":9,"id":3310},{"label":"\u062d\u0635\u0627\u0631\u06a9 \u0628\u0627\u0644\u0627","state":9,"id":3291},{"label":"\u062d\u0635\u0627\u0631\u06a9 \u067e\u0627\u06cc\u06cc\u0646","state":9,"id":3290},{"label":"\u062e\u0627\u062a\u0648\u0646 \u0627\u0628\u0627\u062f","state":9,"id":3258},{"label":"\u062e\u0627\u0648\u0631\u0634\u0647\u0631","state":9,"id":3277},{"label":"\u062e\u0627\u0648\u0647","state":9,"id":3250},{"label":"\u062e\u0644\u0627\u0632\u06cc\u0631","state":9,"id":3282},{"label":"\u062f\u0627\u0648\u062f\u0627\u0628\u0627\u062f","state":9,"id":3255},{"label":"\u062f\u0631\u062f\u0647","state":9,"id":3309},{"label":"\u062f\u0645\u0627\u0648\u0646\u062f","state":9,"id":1702},{"label":"\u062f\u0647\u0645\u0627\u0633\u06cc\u0646","state":9,"id":3246},{"label":"\u0631\u0628\u0627\u0637 \u06a9\u0631\u06cc\u0645","state":9,"id":1704},{"label":"\u0631\u0648\u062f\u0647\u0646","state":9,"id":1700},{"label":"\u0633\u0628\u0632\u062f\u0634\u062a","state":9,"id":3292},{"label":"\u0633\u0631\u0628\u0646\u062f\u0627\u0646","state":9,"id":3304},{"label":"\u0633\u0639\u06cc\u062f\u0622\u0628\u0627\u062f","state":9,"id":3295},{"label":"\u0633\u0644\u0637\u0627\u0646 \u0627\u0628\u0627\u062f","state":9,"id":3289},{"label":"\u0633\u0647 \u0631\u0627\u0647 \u0633\u0646\u06af\u06cc","state":9,"id":4621},{"label":"\u0634\u0627\u0637\u0631\u0647","state":9,"id":3302},{"label":"\u0634\u0627\u0647\u062f\u0634\u0647\u0631","state":9,"id":1716},{"label":"\u0634\u0631\u06cc\u0641 \u0622\u0628\u0627\u062f","state":9,"id":1692},{"label":"\u0634\u0645\u0633 \u0627\u0628\u0627\u062f","state":9,"id":3267},{"label":"\u0634\u0645\u0634\u06a9","state":9,"id":1710},{"label":"\u0634\u0647\u0631 \u062c\u062f\u06cc\u062f \u067e\u0631\u0646\u062f","state":9,"id":1705},{"label":"\u0634\u0647\u0631 \u0635\u0646\u0639\u062a\u06cc \u067e\u0631\u0646\u062f","state":9,"id":3288},{"label":"\u0634\u0647\u0631 \u0642\u062f\u0633","state":9,"id":4620},{"label":"\u0634\u0647\u0631\u0635\u0646\u0639\u062a\u06cc \u062e\u0631\u0645\u062f\u0634\u062a","state":9,"id":3261},{"label":"\u0634\u0647\u0631\u06a9 \u0635\u0646\u0639\u062a\u06cc \u0686\u0647\u0627\u0631\u062f\u0627\u0646\u06af\u0647","state":9,"id":4618},{"label":"\u0634\u0647\u0631\u06a9 \u0635\u0646\u0639\u062a\u06cc \u062e\u0627\u0648\u0631\u0627\u0646","state":9,"id":4609},{"label":"\u0634\u0647\u0631\u06a9 \u0635\u0646\u0639\u062a\u06cc \u06af\u0644\u06af\u0648\u0646","state":9,"id":4619},{"label":"\u0634\u0647\u0631\u06a9 \u0635\u0646\u0639\u062a\u06cc \u0646\u0635\u06cc\u0631\u0634\u0647\u0631","state":9,"id":3283},{"label":"\u0634\u0647\u0631\u06a9 \u0639\u0628\u0627\u0633 \u0622\u0628\u0627\u062f","state":9,"id":3254},{"label":"\u0634\u0647\u0631\u06a9 \u0642\u0644\u0639\u0647 \u0645\u06cc\u0631","state":9,"id":3284},{"label":"\u0634\u0647\u0631\u06cc\u0627\u0631","state":9,"id":1717},{"label":"\u0635\u0627\u0644\u062d \u0622\u0628\u0627\u062f","state":9,"id":3301},{"label":"\u0635\u0627\u0644\u062d\u06cc\u0647","state":9,"id":1689},{"label":"\u0635\u0628\u0627 \u0634\u0647\u0631","state":9,"id":1718},{"label":"\u0635\u0641\u0627\u062f\u0634\u062a","state":9,"id":1725},{"label":"\u0637\u0648\u0631\u0642\u0648\u0632\u0627\u0628\u0627\u062f","state":9,"id":3264},{"label":"\u0639\u0628\u0627\u0633 \u0622\u0628\u0627\u062f \u0639\u0644\u0627\u0642\u0628\u0646\u062f","state":9,"id":4615},{"label":"\u0639\u0633\u06af\u0631\u0627\u0628\u0627\u062f\u0639\u0628\u0627\u0633\u06cc","state":9,"id":3245},{"label":"\u0641\u0631\u062f\u0648\u0633\u06cc\u0647","state":9,"id":1719},{"label":"\u0641\u0631\u0648\u062f\u06af\u0627\u0647 \u0627\u0645\u0627\u0645 \u062e\u0645\u06cc\u0646\u06cc","state":9,"id":3271},{"label":"\u0641\u0631\u0648\u0646 \u0622\u0628\u0627\u062f","state":9,"id":1694},{"label":"\u0641\u0631\u0648\u0646 \u0627\u0628\u0627\u062f","state":9,"id":3276},{"label":"\u0641\u0634\u0645","state":9,"id":1711},{"label":"\u0641\u06cc\u0631\u0648\u0632\u0628\u0647\u0631\u0627\u0645","state":9,"id":3299},{"label":"\u0641\u06cc\u0631\u0648\u0632\u06a9\u0648\u0647","state":9,"id":1722},{"label":"\u0642\u0627\u0633\u0645 \u0627\u0628\u0627\u062f\u0634\u0648\u0631\u0627\u0628\u0627\u062f","state":9,"id":3265},{"label":"\u0642\u062f\u0633","state":9,"id":1723},{"label":"\u0642\u0631\u0686\u06a9","state":9,"id":1724},{"label":"\u0642\u0644\u0639\u0647 \u062e\u0648\u0627\u062c\u0647","state":9,"id":3253},{"label":"\u0642\u0644\u0639\u0647 \u0633\u06cc\u0646","state":9,"id":3244},{"label":"\u0642\u0644\u0639\u0647 \u0645\u062d\u0645\u062f\u0639\u0644\u06cc \u062e\u0627\u0646","state":9,"id":3270},{"label":"\u0642\u0644\u0639\u0647 \u0646\u0648\u062e\u0627\u0644\u0635\u0647","state":9,"id":3273},{"label":"\u0642\u0645\u0635\u0631","state":9,"id":3266},{"label":"\u0642\u0648,\u0686 \u062d\u0635\u0627\u0631","state":9,"id":3281},{"label":"\u0642\u06cc\u0627\u0645 \u062f\u0634\u062a","state":9,"id":4616},{"label":"\u0642\u06cc\u0627\u0645\u062f\u0634\u062a","state":9,"id":3280},{"label":"\u06a9\u0631\u06cc\u0645 \u0627\u0628\u0627\u062f","state":9,"id":3252},{"label":"\u06a9\u0644\u0645\u0647","state":9,"id":3286},{"label":"\u06a9\u0647\u0631\u06cc\u0632\u06a9","state":9,"id":1709},{"label":"\u06a9\u06cc\u0644\u0627\u0646","state":9,"id":1703},{"label":"\u06af\u0631\u062f\u0646\u0647 \u062a\u0646\u0628\u0627\u06a9\u0648\u06cc\u06cc","state":9,"id":4612},{"label":"\u06af\u0631\u0645\u062f\u0631\u0647","state":9,"id":3259},{"label":"\u06af\u0644 \u062a\u067e\u0647 \u06a9\u0628\u06cc\u0631","state":9,"id":3274},{"label":"\u06af\u0644\u062f\u0633\u062a\u0647","state":9,"id":3300},{"label":"\u06af\u0644\u0633\u062a\u0627\u0646","state":9,"id":1690},{"label":"\u0644\u067e\u0647 \u0632\u0646\u06af","state":9,"id":3279},{"label":"\u0644\u0645 \u0627\u0628\u0627\u062f","state":9,"id":3297},{"label":"\u0644\u0648\u0627\u0633\u0627\u0646 \u0628\u0632\u0631\u06af","state":9,"id":3296},{"label":"\u0644\u0648\u0627\u0633\u0627\u0646 \u06a9\u0648\u0686\u06a9","state":9,"id":1713},{"label":"\u0645\u062d\u0645\u0648\u062f\u0627\u0628\u0627\u062f\u067e\u06cc\u0631\u0632\u0627\u062f\u0647","state":9,"id":3275},{"label":"\u0645\u0631\u0627","state":9,"id":3307},{"label":"\u0645\u0631\u0642\u062f\u0627\u0645\u0627\u0645 \u0631\u0647","state":9,"id":3263},{"label":"\u0645\u0634\u0627","state":9,"id":3306},{"label":"\u0645\u0644\u0627\u0631\u062f","state":9,"id":1726},{"label":"\u0645\u0647\u0631\u0622\u0628\u0627\u062f","state":9,"id":3305},{"label":"\u0646\u0633\u06cc\u0645 \u0634\u0647\u0631","state":9,"id":1688},{"label":"\u0646\u0635\u06cc\u0631\u0622\u0628\u0627\u062f","state":9,"id":3285},{"label":"\u0646\u0635\u06cc\u0631\u0634\u0647\u0631","state":9,"id":1691},{"label":"\u0648\u062d\u06cc\u062f\u06cc\u0647","state":9,"id":1720},{"label":"\u0648\u0631\u0627\u0645\u06cc\u0646","state":9,"id":1728},{"label":"\u0648\u0647\u0646 \u0627\u0628\u0627\u062f","state":9,"id":3272},{"label":"\u0647\u0631\u0627\u0646\u062f\u0647","state":9,"id":3308}],"10":[{"label":"\u0622\u0644\u0648\u0646\u06cc","state":10,"id":1757},{"label":"\u0627\u0631\u062f\u0644","state":10,"id":1729},{"label":"\u0627\u0645\u0627\u0645 \u0642\u06cc\u0633","state":10,"id":3316},{"label":"\u0627\u0648\u0631\u06af\u0627\u0646-\u0686\u0647\u0627\u0631\u0645\u062d\u0627\u0644 \u0648 \u0628\u062e\u062a\u06cc\u0627\u0631\u06cc","state":10,"id":3315},{"label":"\u0628\u0627\u0628\u0627\u062d\u06cc\u062f\u0631","state":10,"id":1752},{"label":"\u0628\u0627\u0632\u0641\u062a","state":10,"id":1762},{"label":"\u0628\u0631\u0648\u062c\u0646","state":10,"id":1735},{"label":"\u0628\u0644\u062f\u0627\u062c\u06cc","state":10,"id":1733},{"label":"\u0628\u0646","state":10,"id":1739},{"label":"\u067e\u0631\u062f\u0646\u062c\u0627\u0646","state":10,"id":1753},{"label":"\u062c\u0648\u0646\u0642\u0627\u0646","state":10,"id":1754},{"label":"\u0686\u0644\u06af\u0631\u062f","state":10,"id":1764},{"label":"\u0686\u0644\u06cc\u0686\u0647","state":10,"id":1751},{"label":"\u0686\u0645\u0646 \u0628\u06cc\u062f","state":10,"id":3319},{"label":"\u0686\u0648\u0644\u0647 \u062f\u0627\u0646","state":10,"id":3318},{"label":"\u062e\u0631\u0627\u062c\u06cc","state":10,"id":3312},{"label":"\u062f\u0632\u06a9","state":10,"id":3321},{"label":"\u062f\u0633\u062a\u0646\u0627\u0621","state":10,"id":1765},{"label":"\u062f\u0634\u062a\u06a9","state":10,"id":1730},{"label":"\u0633\u0627\u0645\u0627\u0646","state":10,"id":1741},{"label":"\u0633\u0631\u062e\u0648\u0646","state":10,"id":1732},{"label":"\u0633\u0631\u062f\u0634\u062a \u0644\u0631\u062f\u06af\u0627\u0646","state":10,"id":1758},{"label":"\u0633\u0631\u062f\u0634\u062a-\u0686\u0647\u0627\u0631\u0645\u062d\u0627\u0644 \u0648 \u0628\u062e\u062a\u06cc\u0627\u0631\u06cc","state":10,"id":3320},{"label":"\u0633\u0641\u06cc\u062f \u062f\u0634\u062a","state":10,"id":1736},{"label":"\u0633\u0648\u062f\u062c\u0627\u0646","state":10,"id":1742},{"label":"\u0633\u0648\u0631\u0634\u062c\u0627\u0646","state":10,"id":1743},{"label":"\u0634\u0644\u0645\u0632\u0627\u0631","state":10,"id":1766},{"label":"\u0634\u0647\u0631\u06a9\u0631\u062f","state":10,"id":1745},{"label":"\u0634\u0647\u0631\u06cc\u0627\u0631\u06cc","state":10,"id":3314},{"label":"\u0635\u0645\u0635\u0627\u0645\u06cc","state":10,"id":1763},{"label":"\u0637\u0627\u0642\u0627\u0646\u06a9","state":10,"id":1746},{"label":"\u0641\u0627\u0631\u0633\u0627\u0646","state":10,"id":1755},{"label":"\u0641\u0631\u0627\u062f\u0646\u0628\u0647","state":10,"id":1737},{"label":"\u0641\u0631\u062e \u0634\u0647\u0631","state":10,"id":1747},{"label":"\u06a9\u0627\u062c","state":10,"id":1731},{"label":"\u06a9\u06cc\u0627\u0646","state":10,"id":1750},{"label":"\u06af\u0644 \u0633\u0641\u06cc\u062f","state":10,"id":3317},{"label":"\u06af\u0646\u062f\u0645\u0627\u0646","state":10,"id":1734},{"label":"\u06af\u0648\u062c\u0627\u0646","state":10,"id":1756},{"label":"\u06af\u0647\u0631\u0648","state":10,"id":1767},{"label":"\u0644\u0631\u062f\u06af\u0627\u0646","state":10,"id":1760},{"label":"\u0645\u0627\u0644 \u062e\u0644\u06cc\u0641\u0647","state":10,"id":1759},{"label":"\u0645\u0631\u063a\u0645\u0644\u06a9","state":10,"id":3313},{"label":"\u0645\u0646\u062c","state":10,"id":1761},{"label":"\u0646\u0627\u063a\u0627\u0646","state":10,"id":1768},{"label":"\u0646\u0627\u0641\u0686","state":10,"id":1748},{"label":"\u0646\u0642\u0646\u0647","state":10,"id":1738},{"label":"\u0648\u0631\u062f\u0646\u062c\u0627\u0646","state":10,"id":1740},{"label":"\u0647\u0627\u0631\u0648\u0646\u06cc","state":10,"id":1744},{"label":"\u0647\u0641\u0634\u062c\u0627\u0646","state":10,"id":1749}],"11":[{"label":"\u0622\u0631\u06cc\u0646 \u0634\u0647\u0631","state":11,"id":1790},{"label":"\u0622\u06cc\u0633\u06a9","state":11,"id":1780},{"label":"\u0627\u0631\u0633\u06a9","state":11,"id":1769},{"label":"\u0627\u0633\u062f\u06cc\u0647","state":11,"id":1777},{"label":"\u0627\u0633\u0641\u062f\u0646","state":11,"id":1791},{"label":"\u0627\u0633\u0644\u0627\u0645\u06cc\u0647","state":11,"id":1788},{"label":"\u0628\u0634\u0631\u0648\u06cc\u0647","state":11,"id":1770},{"label":"\u0628\u06cc\u0631\u062c\u0646\u062f","state":11,"id":1771},{"label":"\u0628\u06cc\u0647\u0648\u062f","state":11,"id":3323},{"label":"\u062d\u0627\u062c\u06cc \u0622\u0628\u0627\u062f","state":11,"id":1779},{"label":"\u062e\u0636\u0631\u06cc \u062f\u0634\u062a \u0628\u06cc\u0627\u0636","state":11,"id":1793},{"label":"\u062e\u0648\u0633\u0641","state":11,"id":1772},{"label":"\u062f\u06cc\u0647\u0648\u06a9","state":11,"id":1786},{"label":"\u0632\u0647\u0627\u0646","state":11,"id":1778},{"label":"\u0633\u0631\u0627\u06cc\u0627\u0646","state":11,"id":1781},{"label":"\u0633\u0631\u0628\u06cc\u0634\u0647","state":11,"id":1783},{"label":"\u0633\u0647 \u0642\u0644\u0639\u0647","state":11,"id":1782},{"label":"\u0634\u0648\u0633\u0641","state":11,"id":1795},{"label":"\u0637\u0628\u0633","state":11,"id":1787},{"label":"\u0637\u0628\u0633 \u0645\u0633\u06cc\u0646\u0627","state":11,"id":1775},{"label":"\u0639\u0634\u0642 \u0622\u0628\u0627\u062f","state":11,"id":1785},{"label":"\u0641\u0631\u062f\u0648\u0633","state":11,"id":1789},{"label":"\u0642\u0627\u0626\u0646","state":11,"id":1792},{"label":"\u0642\u0627\u06cc\u0646","state":11,"id":3322},{"label":"\u0642\u0647\u0633\u062a\u0627\u0646","state":11,"id":1774},{"label":"\u06af\u0632\u0648","state":11,"id":3324},{"label":"\u06af\u0632\u06cc\u06a9","state":11,"id":1776},{"label":"\u0645\u062d\u0645\u062f\u0634\u0647\u0631","state":11,"id":1773},{"label":"\u0645\u0648\u062f","state":11,"id":1784},{"label":"\u0646\u0647\u0628\u0646\u062f\u0627\u0646","state":11,"id":1796},{"label":"\u0646\u06cc\u0645\u0628\u0644\u0648\u06a9","state":11,"id":1794}],"12":[{"label":"\u0627\u0628\u062f\u0627\u0644 \u0627\u0628\u0627\u062f","state":12,"id":3345},{"label":"\u0627\u062d\u0645\u062f\u0622\u0628\u0627\u062f \u0635\u0648\u0644\u062a","state":12,"id":1808},{"label":"\u0627\u0631\u062f\u0627\u06a9","state":12,"id":3391},{"label":"\u0627\u0632\u0627\u062f\u0648\u0627\u0631","state":12,"id":3364},{"label":"\u0627\u0632\u0627\u062f\u0647","state":12,"id":3353},{"label":"\u0627\u0633\u062d\u0642 \u0627\u0628\u0627\u062f-\u062e\u0631\u0627\u0633\u0627\u0646 \u0631\u0636\u0648\u06cc","state":12,"id":3381},{"label":"\u0627\u0633\u062f\u0627\u0628\u0627\u062f-\u062e\u0631\u0627\u0633\u0627\u0646 \u0631\u0636\u0648\u06cc","state":12,"id":3339},{"label":"\u0627\u0645\u0627\u0645\u0642\u0644\u06cc","state":12,"id":3427},{"label":"\u0627\u0646\u0627\u0628\u062f","state":12,"id":1800},{"label":"\u0627\u0646\u062f\u0627\u062f\u0647","state":12,"id":3366},{"label":"\u0627\u0648\u0646\u062f\u0631","state":12,"id":3408},{"label":"\u0628\u0627\u062c\u06af\u06cc\u0631\u0627\u0646","state":12,"id":1848},{"label":"\u0628\u0627\u062e\u0631\u0632","state":12,"id":1797},{"label":"\u0628\u0627\u0631","state":12,"id":1862},{"label":"\u0628\u0627\u0633\u0641\u0631","state":12,"id":3335},{"label":"\u0628\u0627\u06cc\u06a9","state":12,"id":1813},{"label":"\u0628\u062c\u0633\u062a\u0627\u0646","state":12,"id":1798},{"label":"\u0628\u0631\u062f\u0633\u06a9\u0646","state":12,"id":1802},{"label":"\u0628\u0631\u0632\u0646\u0648\u0646","state":12,"id":3377},{"label":"\u0628\u0631\u063a\u0645\u062f","state":12,"id":3368},{"label":"\u0628\u0632\u0646\u06af\u0627\u0646","state":12,"id":3401},{"label":"\u0628\u0642\u0645\u062c","state":12,"id":3392},{"label":"\u0628\u0644\u0627\u0634\u06cc \u0627\u0628\u0627\u062f","state":12,"id":3369},{"label":"\u0628\u0646\u062f\u0642\u0631\u0627","state":12,"id":3411},{"label":"\u0628\u0646\u06cc \u062a\u0627\u06a9","state":12,"id":3352},{"label":"\u0628\u06cc\u062f\u062e\u062a","state":12,"id":1850},{"label":"\u067e\u0633 \u06a9\u0645\u0631","state":12,"id":3400},{"label":"\u062a\u0627\u06cc\u0628\u0627\u062f","state":12,"id":1805},{"label":"\u062a\u0631\u0628\u062a \u062c\u0627\u0645","state":12,"id":1811},{"label":"\u062a\u0631\u0628\u062a \u062d\u06cc\u062f\u0631\u06cc\u0647","state":12,"id":1815},{"label":"\u062a\u0642\u06cc \u0627\u0628\u0627\u062f-\u062e\u0631\u0627\u0633\u0627\u0646 \u0631\u0636\u0648\u06cc","state":12,"id":3397},{"label":"\u062a\u0646\u062f\u06a9","state":12,"id":3373},{"label":"\u062c\u0632\u06cc\u0646","state":12,"id":3419},{"label":"\u062c\u063a\u062a\u0627\u06cc","state":12,"id":1817},{"label":"\u062c\u0646\u062a \u0627\u0628\u0627\u062f-\u062e\u0631\u0627\u0633\u0627\u0646 \u0631\u0636\u0648\u06cc","state":12,"id":3350},{"label":"\u062c\u0646\u06af\u0644","state":12,"id":1834},{"label":"\u062c\u0648\u0632\u0627\u0646-\u062e\u0631\u0627\u0633\u0627\u0646 \u0631\u0636\u0648\u06cc","state":12,"id":3426},{"label":"\u0686\u0627\u067e\u0634\u0644\u0648","state":12,"id":1830},{"label":"\u0686\u0627\u0647\u06a9","state":12,"id":3394},{"label":"\u0686\u062e\u0645\u0627\u0642","state":12,"id":3332},{"label":"\u0686\u0634\u0645\u0647 \u06af\u0644","state":12,"id":3344},{"label":"\u0686\u06a9\u0646\u0647","state":12,"id":1861},{"label":"\u0686\u0645\u0646 \u0627\u0628\u0627\u062f","state":12,"id":3342},{"label":"\u0686\u0646\u0627\u0631\u0627\u0646","state":12,"id":1820},{"label":"\u062d\u0633\u0646 \u0627\u0628\u0627\u062f-\u062e\u0631\u0627\u0633\u0627\u0646 \u0631\u0636\u0648\u06cc","state":12,"id":3343},{"label":"\u062d\u0633\u0646 \u0627\u0628\u0627\u062f\u0644\u0627\u06cc\u06cc\u0646 \u0646\u0648","state":12,"id":3325},{"label":"\u062d\u06a9\u0645 \u0627\u0628\u0627\u062f","state":12,"id":3367},{"label":"\u062e\u0631\u0648","state":12,"id":1858},{"label":"\u062e\u0644\u06cc\u0644 \u0622\u0628\u0627\u062f","state":12,"id":1822},{"label":"\u062e\u0648\u0627\u0641","state":12,"id":1826},{"label":"\u062e\u0648\u062c\u0627\u0646","state":12,"id":3382},{"label":"\u062f\u0627\u0648\u0631\u0632\u0646","state":12,"id":1829},{"label":"\u062f\u0631\u0632\u0627\u0628","state":12,"id":3347},{"label":"\u062f\u0631\u06af\u0632","state":12,"id":1832},{"label":"\u062f\u0631\u0648\u062f","state":12,"id":1859},{"label":"\u062f\u0631\u0648\u0646\u0647","state":12,"id":3416},{"label":"\u062f\u0633\u062a\u0648\u0631\u0627\u0646","state":12,"id":3363},{"label":"\u062f\u0648\u063a\u0627\u06cc\u06cc","state":12,"id":3425},{"label":"\u062f\u0648\u0642\u0627\u0631\u0648\u0646","state":12,"id":3354},{"label":"\u062f\u0648\u0644\u062a \u0622\u0628\u0627\u062f","state":12,"id":1836},{"label":"\u062f\u0647\u0646\u0648-\u062e\u0631\u0627\u0633\u0627\u0646 \u0631\u0636\u0648\u06cc","state":12,"id":3409},{"label":"\u062f\u06cc\u0632\u0627\u062f\u06cc\u0632","state":12,"id":3423},{"label":"\u0631\u0627\u062f\u06a9\u0627\u0646","state":12,"id":3387},{"label":"\u0631\u0627\u0647 \u0686\u0645\u0646","state":12,"id":3365},{"label":"\u0631\u0628\u0627\u0637 \u0633\u0646\u06af","state":12,"id":1814},{"label":"\u0631\u0628\u0627\u0637\u062c\u0632","state":12,"id":3371},{"label":"\u0631\u0628\u0627\u0637\u0633\u0631\u067e\u0648\u0634\u06cc","state":12,"id":3359},{"label":"\u0631\u0634\u062a\u062e\u0648\u0627\u0631","state":12,"id":1835},{"label":"\u0631\u0636\u0648\u06cc\u0647","state":12,"id":1854},{"label":"\u0631\u06a9\u0646 \u0627\u0628\u0627\u062f","state":12,"id":3415},{"label":"\u0631\u0648\u062f\u0627\u0628","state":12,"id":1837},{"label":"\u0631\u0648\u062f\u062e\u0627\u0646\u0647","state":12,"id":3338},{"label":"\u0631\u0648\u06cc\u06cc\u0646\u06cc","state":12,"id":3407},{"label":"\u0631\u06cc\u0648\u0634","state":12,"id":1866},{"label":"\u0632\u0631\u063a\u0631\u06cc","state":12,"id":3334},{"label":"\u0632\u0631\u06a9\u06a9","state":12,"id":3406},{"label":"\u0632\u06cc\u0628\u062f","state":12,"id":3418},{"label":"\u0633\u0628\u0632\u0648\u0627\u0631","state":12,"id":1839},{"label":"\u0633\u0631\u062e\u0633","state":12,"id":1841},{"label":"\u0633\u0641\u06cc\u062f \u0633\u0646\u06af","state":12,"id":1842},{"label":"\u0633\u0644\u0627\u0645\u06cc","state":12,"id":1824},{"label":"\u0633\u0644\u0637\u0627\u0646 \u0622\u0628\u0627\u062f","state":12,"id":1828},{"label":"\u0633\u0644\u0648\u06af\u0631\u062f","state":12,"id":3390},{"label":"\u0633\u0646\u06af \u0628\u0633\u062a","state":12,"id":3405},{"label":"\u0633\u0646\u06af\u0627\u0646","state":12,"id":1825},{"label":"\u0633\u06cc\u062f\u0627\u0628\u0627\u062f-\u062e\u0631\u0627\u0633\u0627\u0646 \u0631\u0636\u0648\u06cc","state":12,"id":3388},{"label":"\u0633\u06cc\u0648\u06a9\u06cc","state":12,"id":3329},{"label":"\u0634\u0627\u062f\u0645\u0647\u0631","state":12,"id":1856},{"label":"\u0634\u0627\u0645\u06a9\u0627\u0646","state":12,"id":3372},{"label":"\u0634\u0627\u0646\u062f\u06cc\u0632","state":12,"id":1803},{"label":"\u0634\u0634\u062a\u0645\u062f","state":12,"id":1838},{"label":"\u0634\u0641\u06cc\u0639","state":12,"id":3424},{"label":"\u0634\u0641\u06cc\u0639 \u0627\u0628\u0627\u062f","state":12,"id":3414},{"label":"\u0634\u0648\u0631\u0627\u0628","state":12,"id":3374},{"label":"\u0634\u0647\u0631 \u0632\u0648","state":12,"id":1867},{"label":"\u0634\u0647\u0631\u0622\u0628\u0627\u062f","state":12,"id":1801},{"label":"\u0634\u0647\u0631\u06a9 \u0632\u06cc\u0646\u062f\u0627\u0646\u0644\u0648","state":12,"id":3327},{"label":"\u0634\u0647\u0631\u06a9\u0647\u0646\u0647","state":12,"id":3420},{"label":"\u0634\u06cc\u0631\u062a\u067e\u0647","state":12,"id":3399},{"label":"\u0635\u0627\u0644\u062d \u0622\u0628\u0627\u062f","state":12,"id":1810},{"label":"\u0637\u0631\u0642\u0628\u0647","state":12,"id":1804},{"label":"\u0637\u0648\u0633 \u0633\u0641\u0644\u06cc","state":12,"id":3384},{"label":"\u0639\u0628\u062f\u0644 \u0627\u0628\u0627\u062f","state":12,"id":3331},{"label":"\u0639\u0634\u0642 \u0622\u0628\u0627\u062f","state":12,"id":1864},{"label":"\u0641\u062f\u0627\u0641\u0646","state":12,"id":3410},{"label":"\u0641\u062f\u06cc\u0634\u0647","state":12,"id":3378},{"label":"\u0641\u0631\u062e\u06a9","state":12,"id":3380},{"label":"\u0641\u0631\u0647\u0627\u062f \u06af\u0631\u062f","state":12,"id":1844},{"label":"\u0641\u0631\u06cc\u0645\u0627\u0646","state":12,"id":1845},{"label":"\u0641\u06cc\u0631\u0648\u0632\u0647","state":12,"id":1847},{"label":"\u0641\u06cc\u0636 \u0622\u0628\u0627\u062f","state":12,"id":1857},{"label":"\u0642\u0627\u0633\u0645 \u0622\u0628\u0627\u062f","state":12,"id":1823},{"label":"\u0642\u062f\u0645\u06af\u0627\u0647","state":12,"id":1860},{"label":"\u0642\u0631\u0642\u06cc \u0633\u0641\u0644\u06cc (\u0634\u0647\u06cc\u062f\u06a9\u0627\u0648\u0647 )","state":12,"id":3385},{"label":"\u0642\u0631\u06cc\u0647 \u0634\u0631\u0641","state":12,"id":3421},{"label":"\u0642\u0644\u0639\u0647 \u0627\u0642\u0627\u062d\u0633\u0646","state":12,"id":3333},{"label":"\u0642\u0644\u0639\u0647 \u0646\u0648-\u062e\u0631\u0627\u0633\u0627\u0646 \u0631\u0636\u0648\u06cc","state":12,"id":3356},{"label":"\u0642\u0644\u0646\u062f\u0631 \u0622\u0628\u0627\u062f","state":12,"id":1843},{"label":"\u0642\u0648\u0686\u0627\u0646","state":12,"id":1849},{"label":"\u06a9\u0627\u062e\u06a9","state":12,"id":1852},{"label":"\u06a9\u0627\u0631\u06cc\u0632","state":12,"id":1806},{"label":"\u06a9\u0627\u0631\u06cc\u0632\u0646\u0648","state":12,"id":3346},{"label":"\u06a9\u0627\u0633\u0641","state":12,"id":3412},{"label":"\u06a9\u0627\u0634\u0645\u0631","state":12,"id":1865},{"label":"\u06a9\u0627\u0645\u0647 \u0633\u0641\u0644\u06cc","state":12,"id":3337},{"label":"\u06a9\u0628\u0648\u062f\u0627\u0646","state":12,"id":3413},{"label":"\u06a9\u067e\u06a9\u0627\u0646","state":12,"id":3326},{"label":"\u06a9\u062a\u0647 \u0634\u0645\u0634\u06cc\u0631\u0633\u0641\u0644\u06cc","state":12,"id":3404},{"label":"\u06a9\u0686\u0648\u0644\u06cc","state":12,"id":3398},{"label":"\u06a9\u062f\u06a9\u0646","state":12,"id":1816},{"label":"\u06a9\u0631\u0627\u062a","state":12,"id":3355},{"label":"\u06a9\u0644\u0627\u062a","state":12,"id":1868},{"label":"\u06a9\u0646\u062f\u0631","state":12,"id":1821},{"label":"\u06a9\u0646\u062f\u06a9 \u0644\u06cc","state":12,"id":3403},{"label":"\u06a9\u0646\u0647 \u0628\u06cc\u0633\u062a","state":12,"id":3386},{"label":"\u06a9\u0648\u0631\u062f\u0647","state":12,"id":3383},{"label":"\u06a9\u0648\u0647 \u0633\u0641\u06cc\u062f","state":12,"id":3357},{"label":"\u06af\u0644\u0628\u0648\u06cc \u067e\u0627\u06cc\u06cc\u0646","state":12,"id":3375},{"label":"\u06af\u0644\u0628\u0647\u0627\u0631","state":12,"id":3389},{"label":"\u06af\u0644\u0645\u06a9\u0627\u0646","state":12,"id":1819},{"label":"\u06af\u0646\u0627\u0628\u0627\u062f","state":12,"id":1851},{"label":"\u06af\u0646\u0628\u062f\u0644\u06cc","state":12,"id":3402},{"label":"\u06af\u0648\u0634","state":12,"id":3395},{"label":"\u06af\u06cc\u0633\u0648\u0631\u0628\u0627\u0644\u0627","state":12,"id":3417},{"label":"\u0644\u0637\u0641 \u0622\u0628\u0627\u062f","state":12,"id":1831},{"label":"\u0645\u0628\u0627\u0631\u06a9\u0647-\u062e\u0631\u0627\u0633\u0627\u0646 \u0631\u0636\u0648\u06cc","state":12,"id":3376},{"label":"\u0645\u062d\u0645\u062f\u062a\u0642\u06cc","state":12,"id":3328},{"label":"\u0645\u062d\u0645\u0648\u062f\u0627\u0628\u0627\u062f-\u062e\u0631\u0627\u0633\u0627\u0646 \u0631\u0636\u0648\u06cc","state":12,"id":3348},{"label":"\u0645\u0632\u062f\u0622\u0648\u0646\u062f","state":12,"id":1840},{"label":"\u0645\u0632\u06cc\u0646\u0627\u0646","state":12,"id":3362},{"label":"\u0645\u0698\u0646 \u0627\u0628\u0627\u062f","state":12,"id":3341},{"label":"\u0645\u0634\u06a9\u0627\u0646-\u062e\u0631\u0627\u0633\u0627\u0646 \u0631\u0636\u0648\u06cc","state":12,"id":3360},{"label":"\u0645\u0634\u0647\u062f","state":12,"id":1855},{"label":"\u0645\u0634\u0647\u062f\u0631\u06cc\u0632\u0647","state":12,"id":1807},{"label":"\u0645\u0644\u06a9 \u0622\u0628\u0627\u062f","state":12,"id":1853},{"label":"\u0645\u0648\u0633\u06cc \u0627\u0628\u0627\u062f-\u062e\u0631\u0627\u0633\u0627\u0646 \u0631\u0636\u0648\u06cc","state":12,"id":3351},{"label":"\u0645\u0647\u0631-\u062e\u0631\u0627\u0633\u0627\u0646 \u0631\u0636\u0648\u06cc","state":12,"id":3358},{"label":"\u0645\u0647\u0646\u0647","state":12,"id":3330},{"label":"\u0645\u06cc\u0627\u0645\u06cc-\u062e\u0631\u0627\u0633\u0627\u0646 \u0631\u0636\u0648\u06cc","state":12,"id":3393},{"label":"\u0645\u06cc\u0631\u0627\u0628\u0627\u062f-\u062e\u0631\u0627\u0633\u0627\u0646 \u0631\u0636\u0648\u06cc","state":12,"id":3379},{"label":"\u0646\u0627\u0645\u0646","state":12,"id":3361},{"label":"\u0646\u0631\u06cc\u0645\u0627\u0646\u06cc \u0633\u0641\u0644\u06cc","state":12,"id":3396},{"label":"\u0646\u0634\u062a\u06cc\u0641\u0627\u0646","state":12,"id":1827},{"label":"\u0646\u0635\u0631","state":12,"id":3340},{"label":"\u0646\u0635\u0631\u0622\u0628\u0627\u062f","state":12,"id":1812},{"label":"\u0646\u0642\u0627\u0628","state":12,"id":1818},{"label":"\u0646\u0648\u062e\u0646\u062f\u0627\u0646","state":12,"id":1833},{"label":"\u0646\u0648\u062f\u0647 \u0627\u0646\u0642\u0644\u0627\u0628","state":12,"id":3370},{"label":"\u0646\u06cc\u0634\u0627\u0628\u0648\u0631","state":12,"id":1863},{"label":"\u0646\u06cc\u0644 \u0634\u0647\u0631","state":12,"id":1809},{"label":"\u0647\u0645\u062a \u0622\u0628\u0627\u062f","state":12,"id":1846},{"label":"\u06cc\u0627\u0642\u0648\u062a\u06cc\u0646 \u062c\u062f\u06cc\u062f","state":12,"id":3349},{"label":"\u06cc\u062f\u06a9","state":12,"id":3422},{"label":"\u06cc\u06a9 \u0644\u0646\u06af\u06cc \u0639\u0644\u06cc\u0627","state":12,"id":3336},{"label":"\u06cc\u0648\u0646\u0633\u06cc","state":12,"id":1799}],"13":[{"label":"\u0622\u0634\u062e\u0627\u0646\u0647","state":13,"id":1890},{"label":"\u0622\u0648\u0627","state":13,"id":1887},{"label":"\u0627\u0633\u0641\u0631\u0627\u06cc\u0646","state":13,"id":1870},{"label":"\u0627\u06cc\u0648\u0631","state":13,"id":1884},{"label":"\u0628\u062c\u0646\u0648\u0631\u062f","state":13,"id":1872},{"label":"\u067e\u06cc\u0634 \u0642\u0644\u0639\u0647","state":13,"id":1889},{"label":"\u062a\u06cc\u062a\u06a9\u0627\u0646\u0644\u0648","state":13,"id":1882},{"label":"\u062c\u0627\u062c\u0631\u0645","state":13,"id":1876},{"label":"\u0686\u0646\u0627\u0631\u0627\u0646 \u0634\u0647\u0631","state":13,"id":1873},{"label":"\u062d\u0635\u0627\u0631\u06af\u0631\u0645\u062e\u0627\u0646","state":13,"id":1871},{"label":"\u062e\u0631\u0642","state":13,"id":3428},{"label":"\u062f\u0631\u0642","state":13,"id":1885},{"label":"\u062f\u0648\u06cc\u0646","state":13,"id":3429},{"label":"\u0631\u0627\u0632","state":13,"id":1877},{"label":"\u0631\u0628\u0627\u0637-\u062e\u0631\u0627\u0633\u0627\u0646 \u0634\u0645\u0627\u0644\u06cc","state":13,"id":3430},{"label":"\u0631\u0632\u0642 \u0627\u0628\u0627\u062f","state":13,"id":3431},{"label":"\u0632\u06cc\u0627\u0631\u062a","state":13,"id":1880},{"label":"\u0633\u0646\u062e\u0648\u0627\u0633\u062a","state":13,"id":1874},{"label":"\u0634\u0648\u0642\u0627\u0646","state":13,"id":1875},{"label":"\u0634\u06cc\u0631\u0648\u0627\u0646","state":13,"id":1881},{"label":"\u0635\u0641\u06cc \u0622\u0628\u0627\u062f","state":13,"id":1869},{"label":"\u0641\u0627\u0631\u0648\u062c","state":13,"id":1883},{"label":"\u0642\u0627\u0636\u06cc","state":13,"id":1888},{"label":"\u0642\u0648\u0634\u062e\u0627\u0646\u0647","state":13,"id":1879},{"label":"\u06af\u0631\u0645\u0647","state":13,"id":1886},{"label":"\u0644\u0648\u062c\u0644\u06cc","state":13,"id":1878}],"14":[{"label":"\u0622\u0628\u0627\u062f\u0627\u0646","state":14,"id":1892},{"label":"\u0622\u0628\u0698\u062f\u0627\u0646","state":14,"id":1902},{"label":"\u0622\u0632\u0627\u062f\u06cc","state":14,"id":1899},{"label":"\u0622\u063a\u0627\u062c\u0627\u0631\u06cc","state":14,"id":1894},{"label":"\u0627\u0628\u0648\u062d\u0645\u06cc\u0638\u0647","state":14,"id":1936},{"label":"\u0627\u0631\u0648\u0646\u062f \u06a9\u0646\u0627\u0631","state":14,"id":1891},{"label":"\u0627\u0633\u06cc\u0627\u0628","state":14,"id":3443},{"label":"\u0627\u0644\u0648\u0627\u0646","state":14,"id":1945},{"label":"\u0627\u0644\u0647\u0627\u0626\u06cc","state":14,"id":3432},{"label":"\u0627\u0644\u0647\u0627\u06cc\u06cc","state":14,"id":1904},{"label":"\u0627\u0645 \u0627\u0644\u0637\u0645\u06cc\u0631 (\u0633\u06cc\u062f\u06cc\u0648\u0633\u0641 )","state":14,"id":3438},{"label":"\u0627\u0645\u0627\u0645","state":14,"id":3463},{"label":"\u0627\u0645\u06cc\u062f\u06cc\u0647","state":14,"id":1896},{"label":"\u0627\u0646\u062f\u06cc\u0645\u0634\u06a9","state":14,"id":1900},{"label":"\u0627\u0647\u0648\u0627\u0632","state":14,"id":1905},{"label":"\u0627\u06cc\u0630\u0647","state":14,"id":1907},{"label":"\u0628\u0627\u063a \u0645\u0644\u06a9","state":14,"id":1909},{"label":"\u0628\u0631\u0648\u0627\u06cc\u0647 \u06cc\u0648\u0633\u0641","state":14,"id":3457},{"label":"\u0628\u0633\u062a\u0627\u0646","state":14,"id":1935},{"label":"\u0628\u0646\u062f\u0631 \u0627\u0645\u0627\u0645 \u062e\u0645\u06cc\u0646\u06cc","state":14,"id":1915},{"label":"\u0628\u0646\u062f\u0631 \u0645\u0627\u0647\u0634\u0647\u0631","state":14,"id":1916},{"label":"\u0628\u0648\u0632\u06cc \u0633\u06cc\u0641","state":14,"id":3455},{"label":"\u0628\u0647\u0628\u0647\u0627\u0646","state":14,"id":1920},{"label":"\u0628\u06cc\u062f\u0631\u0648\u0628\u0647","state":14,"id":1897},{"label":"\u067e\u0634\u062a \u067e\u06cc\u0627\u0646","state":14,"id":3452},{"label":"\u062a\u0631\u06a9\u0627\u0644\u06a9\u06cc","state":14,"id":1954},{"label":"\u062a\u0634\u0627\u0646","state":14,"id":1918},{"label":"\u062a\u0644\u0647 \u0632\u0646\u06af \u067e\u0627\u06cc\u06cc\u0646","state":14,"id":3472},{"label":"\u062a\u0646\u06af \u06cc\u06a9","state":14,"id":3434},{"label":"\u062c\u0627\u06cc\u0632\u0627\u0646","state":14,"id":1895},{"label":"\u062c\u0646\u062a \u0645\u06a9\u0627\u0646","state":14,"id":1956},{"label":"\u0686\u063a\u0627\u0645\u06cc\u0634","state":14,"id":1926},{"label":"\u0686\u0644\u0648\u0646","state":14,"id":3464},{"label":"\u0686\u0645 \u06a9\u0644\u06af\u0647","state":14,"id":3442},{"label":"\u0686\u0645 \u06af\u0644\u06a9","state":14,"id":1901},{"label":"\u0686\u0645\u0631\u0627\u0646","state":14,"id":1917},{"label":"\u0686\u0646\u0627\u0631\u0633\u062a\u0627\u0646","state":14,"id":3451},{"label":"\u0686\u0648\u0626\u0628\u062f\u0647","state":14,"id":1893},{"label":"\u062d\u0631","state":14,"id":1948},{"label":"\u062d\u0633\u06cc\u0646\u06cc\u0647","state":14,"id":1898},{"label":"\u062d\u0641\u0627\u0631\u06cc \u0634\u0631\u0642\u06cc","state":14,"id":3456},{"label":"\u062d\u0645\u0632\u0647","state":14,"id":1927},{"label":"\u062d\u0645\u06cc\u062f\u06cc\u0647","state":14,"id":1922},{"label":"\u062e\u0631\u0645\u0634\u0647\u0631","state":14,"id":1923},{"label":"\u062e\u0633\u0631\u062c\u06cc \u0631\u0627\u0636\u06cc \u062d\u0645\u062f","state":14,"id":3466},{"label":"\u062e\u0646\u0627\u0641\u0631\u0647","state":14,"id":1942},{"label":"\u062e\u0648\u0627\u062c\u0648\u06cc","state":14,"id":3470},{"label":"\u062f\u0627\u0631\u062e\u0648\u06cc\u0646","state":14,"id":1943},{"label":"\u062f\u0631\u0648\u06cc\u0634\u06cc","state":14,"id":3454},{"label":"\u062f\u0631\u0647 \u0628\u0648\u0631\u06cc","state":14,"id":3474},{"label":"\u062f\u0631\u0647 \u062a\u0648\u0646\u0645 \u0646\u0645\u06cc","state":14,"id":3450},{"label":"\u062f\u0632\u0641\u0648\u0644","state":14,"id":1929},{"label":"\u062f\u0647\u062f\u0632","state":14,"id":1906},{"label":"\u0631\u0627\u0645\u0634\u06cc\u0631","state":14,"id":1939},{"label":"\u0631\u0627\u0645\u0647\u0631\u0645\u0632","state":14,"id":1941},{"label":"\u0631\u0641\u06cc\u0639","state":14,"id":1966},{"label":"\u0631\u0648\u062f\u0632\u0631\u062f","state":14,"id":3448},{"label":"\u0631\u0648\u0633\u062a\u0627\u06cc \u0639\u0646\u0628\u0631","state":14,"id":3473},{"label":"\u0632\u0647\u0631\u0647","state":14,"id":1963},{"label":"\u0633\u0627\u0644\u0646\u062f","state":14,"id":1928},{"label":"\u0633\u0631\u062f\u0627\u0631\u0627\u0646","state":14,"id":1951},{"label":"\u0633\u0631\u062f\u0634\u062a","state":14,"id":1919},{"label":"\u0633\u0645\u0627\u0644\u0647","state":14,"id":1955},{"label":"\u0633\u0648\u0633\u0646\u06af\u0631\u062f","state":14,"id":1937},{"label":"\u0633\u06cc\u0627\u0647 \u0645\u0646\u0635\u0648\u0631","state":14,"id":1930},{"label":"\u0633\u06cc\u062f\u0639\u0628\u0627\u0633","state":14,"id":3459},{"label":"\u0634\u0627\u062f\u06af\u0627\u0646","state":14,"id":1944},{"label":"\u0634\u0627\u0648\u0648\u0631","state":14,"id":1946},{"label":"\u0634\u0627\u0647 \u063a\u0627\u0644\u0628 \u062f\u0647 \u0627\u0628\u0631\u0627\u0647\u06cc\u0645","state":14,"id":3445},{"label":"\u0634\u0631\u0627\u0641\u062a","state":14,"id":1952},{"label":"\u0634\u0645\u0633 \u0622\u0628\u0627\u062f","state":14,"id":1931},{"label":"\u0634\u0648\u0634","state":14,"id":1949},{"label":"\u0634\u0648\u0634\u062a\u0631","state":14,"id":1953},{"label":"\u0634\u0647\u0631 \u0627\u0645\u0627\u0645","state":14,"id":1932},{"label":"\u0634\u0647\u0631\u06a9 \u0627\u0646\u0635\u0627\u0631","state":14,"id":3469},{"label":"\u0634\u0647\u0631\u06a9 \u0628\u0647\u0631\u0627\u0645","state":14,"id":3468},{"label":"\u0634\u0647\u0631\u06a9 \u0646\u0648\u0631\u0645\u062d\u0645\u062f\u06cc","state":14,"id":3460},{"label":"\u0634\u06cc\u0628\u0627\u0646","state":14,"id":1912},{"label":"\u0635\u0627\u0644\u062d \u0634\u0647\u0631","state":14,"id":1957},{"label":"\u0635\u0641\u06cc \u0622\u0628\u0627\u062f","state":14,"id":1933},{"label":"\u0635\u06cc\u062f\u0648\u0646","state":14,"id":1908},{"label":"\u0639\u0628\u0648\u062f\u06cc","state":14,"id":3453},{"label":"\u0639\u0631\u0628 \u062d\u0633\u0646","state":14,"id":3462},{"label":"\u0639\u0644\u0645\u0647 \u062a\u06cc\u0645\u0648\u0631\u0627\u0628\u0648\u0630\u0631\u063a\u0641\u0627\u0631\u06cc","state":14,"id":3467},{"label":"\u0639\u06cc\u0646 \u062f\u0648","state":14,"id":3437},{"label":"\u063a\u06cc\u0632\u0627\u0646\u06cc\u0647 \u0628\u0632\u0631\u06af","state":14,"id":3441},{"label":"\u0641\u062a\u062d \u0627\u0644\u0645\u0628\u06cc\u0646","state":14,"id":1947},{"label":"\u0641\u06cc\u0627\u0636\u06cc","state":14,"id":3433},{"label":"\u0642\u0644\u0639\u0647 \u062a\u0644","state":14,"id":1910},{"label":"\u0642\u0644\u0639\u0647 \u0686\u0646\u0639\u0627\u0646","state":14,"id":3439},{"label":"\u0642\u0644\u0639\u0647 \u062e\u0648\u0627\u062c\u0647","state":14,"id":1903},{"label":"\u06a9\u0631\u062f\u0633\u062a\u0627\u0646 \u0628\u0632\u0631\u06af","state":14,"id":3446},{"label":"\u06a9\u0631\u06cc\u062a \u0628\u0631\u0648\u0645\u06cc","state":14,"id":3440},{"label":"\u06a9\u0644\u06af\u0647 \u062f\u0631\u0647 \u062f\u0648","state":14,"id":3471},{"label":"\u06a9\u0648\u062a \u0633\u06cc\u062f\u0646\u0639\u06cc\u0645","state":14,"id":1938},{"label":"\u06a9\u0648\u062a \u0639\u0628\u062f\u0627\u0644\u0644\u0647","state":14,"id":1967},{"label":"\u06a9\u0648\u0634\u06a9\u06a9-\u062e\u0648\u0632\u0633\u062a\u0627\u0646","state":14,"id":3475},{"label":"\u06af\u0627\u0648\u0645\u06cc\u0634 \u0627\u0628\u0627\u062f","state":14,"id":3461},{"label":"\u06af\u062a\u0648\u0646\u062f","state":14,"id":1958},{"label":"\u06af\u0631\u0648\u0647 \u067e\u062f\u0627\u0641\u0646\u062f\u0647\u0648\u0627\u06cc\u06cc \u0628\u0647\u0628\u0647\u0627","state":14,"id":3444},{"label":"\u06af\u0644\u06af\u06cc\u0631","state":14,"id":1960},{"label":"\u06af\u0648\u0631\u06cc\u0647","state":14,"id":1950},{"label":"\u0644\u0627\u0644\u06cc","state":14,"id":1959},{"label":"\u0645\u0632\u0631\u0639\u0647 \u06cc\u06a9","state":14,"id":3465},{"label":"\u0645\u0633\u062c\u062f \u0633\u0644\u06cc\u0645\u0627\u0646","state":14,"id":1961},{"label":"\u0645\u0634\u0631\u0627\u06af\u0647","state":14,"id":1940},{"label":"\u0645\u0642\u0627\u0648\u0645\u062a","state":14,"id":1924},{"label":"\u0645\u0644\u0627\u062b\u0627\u0646\u06cc","state":14,"id":1913},{"label":"\u0645\u0646\u0635\u0648\u0631\u06cc\u0647","state":14,"id":1921},{"label":"\u0645\u06cc\u0627\u0646\u0631\u0648\u062f","state":14,"id":1934},{"label":"\u0645\u06cc\u0627\u0646\u06a9\u0648\u0647","state":14,"id":3447},{"label":"\u0645\u06cc\u062f\u0627\u0648\u062f","state":14,"id":1911},{"label":"\u0645\u06cc\u0646\u0648\u0634\u0647\u0631","state":14,"id":1925},{"label":"\u0646\u0641\u062a \u0633\u0641\u06cc\u062f","state":14,"id":3449},{"label":"\u0646\u0647\u0631\u0627\u0628\u0637\u0631","state":14,"id":3436},{"label":"\u0646\u0647\u0631\u0633\u0644\u06cc\u0645","state":14,"id":3435},{"label":"\u0648\u06cc\u0633","state":14,"id":1914},{"label":"\u0647\u0641\u062a\u06af\u0644","state":14,"id":1962},{"label":"\u0647\u0646\u062f\u06cc\u062c\u0627\u0646","state":14,"id":1964},{"label":"\u0647\u0648\u06cc\u0632\u0647","state":14,"id":1965},{"label":"\u06cc\u0632\u062f\u0646\u0648","state":14,"id":3458}],"15":[{"label":"\u0622\u0628 \u0628\u0631","state":15,"id":1986},{"label":"\u0627\u0628\u0647\u0631","state":15,"id":1968},{"label":"\u0627\u0631\u0645\u062e\u0627\u0646\u062e\u0627\u0646\u0647","state":15,"id":1982},{"label":"\u0627\u0631\u0645\u063a\u0627\u0646\u062e\u0627\u0646\u0647","state":15,"id":3480},{"label":"\u0627\u0698\u062f\u0647\u0627\u062a\u0648","state":15,"id":3478},{"label":"\u0627\u0633\u0641\u062c\u06cc\u0646","state":15,"id":3479},{"label":"\u0627\u0642\u0628\u0644\u0627\u063a \u0633\u0641\u0644\u06cc","state":15,"id":3492},{"label":"\u0627\u0646\u062f\u0627\u0628\u0627\u062f\u0639\u0644\u06cc\u0627","state":15,"id":3483},{"label":"\u0628\u0627\u0634 \u0642\u0634\u0644\u0627\u0642","state":15,"id":3494},{"label":"\u0628\u0648\u063a\u062f\u0627\u06a9\u0646\u062f\u06cc","state":15,"id":3477},{"label":"\u067e\u0631\u06cc","state":15,"id":3482},{"label":"\u0686\u0648\u0631\u0632\u0642","state":15,"id":1985},{"label":"\u062d\u0644\u0628","state":15,"id":1971},{"label":"\u062e\u0631\u0645\u062f\u0631\u0647","state":15,"id":1980},{"label":"\u062f\u0631\u0627\u0645","state":15,"id":3499},{"label":"\u062f\u0631\u0633\u062c\u06cc\u0646","state":15,"id":3489},{"label":"\u062f\u0633\u062a\u062c\u0631\u062f\u0647","state":15,"id":3497},{"label":"\u062f\u0646\u062f\u06cc","state":15,"id":1987},{"label":"\u062f\u0648\u0644\u062a \u0627\u0628\u0627\u062f-\u0632\u0646\u062c\u0627\u0646","state":15,"id":3490},{"label":"\u0632\u0631\u06cc\u0646 \u0622\u0628\u0627\u062f","state":15,"id":1972},{"label":"\u0632\u0631\u06cc\u0646 \u0631\u0648\u062f","state":15,"id":1974},{"label":"\u0632\u0646\u062c\u0627\u0646","state":15,"id":1983},{"label":"\u0633\u062c\u0627\u0633","state":15,"id":1975},{"label":"\u0633\u0639\u06cc\u062f\u0627\u0628\u0627\u062f-\u0632\u0646\u062c\u0627\u0646","state":15,"id":3498},{"label":"\u0633\u0644\u0637\u0627\u0646\u06cc\u0647","state":15,"id":1984},{"label":"\u0633\u0646\u0628\u0644 \u0627\u0628\u0627\u062f","state":15,"id":3488},{"label":"\u0633\u0648\u0646\u062a\u0648","state":15,"id":3485},{"label":"\u0633\u0647\u0631\u0648\u0631\u062f","state":15,"id":1976},{"label":"\u0635\u0627\u0626\u06cc\u0646 \u0642\u0644\u0639\u0647","state":15,"id":1969},{"label":"\u0642\u0628\u0644\u0647 \u0628\u0644\u0627\u063a\u06cc","state":15,"id":3481},{"label":"\u0642\u0631\u0647 \u06af\u0644","state":15,"id":3484},{"label":"\u0642\u0644\u062a\u0648\u0642","state":15,"id":3486},{"label":"\u0642\u06cc\u062f\u0627\u0631","state":15,"id":1977},{"label":"\u06a9\u0631\u0633\u0641","state":15,"id":1979},{"label":"\u06a9\u0647\u0644\u0627","state":15,"id":3495},{"label":"\u06a9\u06cc\u0646\u0647 \u0648\u0631\u0633","state":15,"id":3491},{"label":"\u06af\u0631\u0645\u0627\u0628","state":15,"id":1973},{"label":"\u06af\u0648\u0632\u0644\u062f\u0631\u0647","state":15,"id":3487},{"label":"\u06af\u06cc\u0644\u0648\u0627\u0646","state":15,"id":3496},{"label":"\u0645\u0627\u0647 \u0646\u0634\u0627\u0646","state":15,"id":1988},{"label":"\u0645\u062d\u0645\u0648\u062f\u0627\u0628\u0627\u062f-\u0632\u0646\u062c\u0627\u0646","state":15,"id":3493},{"label":"\u0646\u0648\u0631\u0628\u0647\u0627\u0631","state":15,"id":1978},{"label":"\u0646\u06cc\u06a9 \u067e\u06cc","state":15,"id":1981},{"label":"\u0647\u0645\u0627\u06cc\u0648\u0646","state":15,"id":3476},{"label":"\u0647\u06cc\u062f\u062c","state":15,"id":1970}],"16":[{"label":"\u0622\u0631\u0627\u062f\u0627\u0646","state":16,"id":1989},{"label":"\u0627\u0628\u062e\u0648\u0631\u06cc","state":16,"id":3501},{"label":"\u0627\u0628\u0631\u0627\u0647\u06cc\u0645 \u0627\u0628\u0627\u062f-\u0633\u0645\u0646\u0627\u0646","state":16,"id":3532},{"label":"\u0627\u0628\u0631\u0633\u06cc\u062c","state":16,"id":3538},{"label":"\u0627\u0628\u06af\u0631\u0645-\u0633\u0645\u0646\u0627\u0646","state":16,"id":3517},{"label":"\u0627\u062d\u0645\u062f\u0627\u0628\u0627\u062f","state":16,"id":3552},{"label":"\u0627\u0633\u062a\u0627\u0646\u0647","state":16,"id":3564},{"label":"\u0627\u0633\u062f\u0627\u0628\u0627\u062f-\u0633\u0645\u0646\u0627\u0646","state":16,"id":3509},{"label":"\u0627\u0641\u062a\u0631","state":16,"id":3518},{"label":"\u0627\u0645\u06cc\u0631\u06cc\u0647","state":16,"id":1991},{"label":"\u0627\u0647\u0648\u0627\u0646","state":16,"id":3504},{"label":"\u0627\u06cc\u0633\u062a\u06af\u0627\u0647 \u0645\u06cc\u0627\u0646 \u062f\u0631\u0647","state":16,"id":3503},{"label":"\u0627\u06cc\u0648\u0627\u0646\u06a9\u06cc","state":16,"id":2003},{"label":"\u0628\u062f\u0634\u062a","state":16,"id":3545},{"label":"\u0628\u0631\u0645","state":16,"id":3556},{"label":"\u0628\u0633\u0637\u0627\u0645","state":16,"id":1997},{"label":"\u0628\u06a9\u0631\u0627\u0646","state":16,"id":3533},{"label":"\u0628\u0646 \u06a9\u0648\u0647","state":16,"id":3526},{"label":"\u0628\u06cc\u0627\u0628\u0627\u0646\u06a9","state":16,"id":3513},{"label":"\u0628\u06cc\u0627\u0631\u062c\u0645\u0646\u062f","state":16,"id":2000},{"label":"\u062c\u0627\u0645","state":16,"id":3505},{"label":"\u062c\u0632\u0646","state":16,"id":3555},{"label":"\u062c\u0648\u062f\u0627\u0646\u0647","state":16,"id":3531},{"label":"\u0686\u0627\u0634\u0645","state":16,"id":3522},{"label":"\u0686\u0647\u0644\u062f\u062e\u062a\u0631\u067e\u0627\u062f\u06af\u0627\u0646","state":16,"id":3541},{"label":"\u062d\u0633\u06cc\u0646 \u0627\u0628\u0627\u062f\u06a9\u0648\u0631\u0648\u0633","state":16,"id":3527},{"label":"\u062e\u06cc\u0631\u0627\u0628\u0627\u062f-\u0633\u0645\u0646\u0627\u0646","state":16,"id":3502},{"label":"\u062f\u0627\u0645\u063a\u0627\u0646","state":16,"id":1992},{"label":"\u062f\u0627\u0648\u0631\u0627\u0628\u0627\u062f","state":16,"id":3525},{"label":"\u062f\u0631\u0628\u0646\u062f","state":16,"id":3515},{"label":"\u062f\u0631\u062c\u0632\u06cc\u0646","state":16,"id":2006},{"label":"\u062f\u0631\u0648\u0627\u0631","state":16,"id":3563},{"label":"\u062f\u0633\u062a\u062c\u0631\u062f-\u0633\u0645\u0646\u0627\u0646","state":16,"id":3550},{"label":"\u062f\u0648\u0632\u0647\u06cc\u0631","state":16,"id":3506},{"label":"\u062f\u0647 \u0635\u0648\u0641\u06cc\u0627\u0646","state":16,"id":3520},{"label":"\u062f\u0647\u0645\u0644\u0627","state":16,"id":3543},{"label":"\u062f\u06cc\u0628\u0627\u062c","state":16,"id":1993},{"label":"\u0631\u0648\u062f\u06cc\u0627\u0646","state":16,"id":2001},{"label":"\u0631\u0648\u06cc\u0627\u0646-\u0633\u0645\u0646\u0627\u0646","state":16,"id":3544},{"label":"\u0632\u0645\u0627\u0646 \u0627\u0628\u0627\u062f","state":16,"id":3553},{"label":"\u0633\u0631\u062e\u0647","state":16,"id":1995},{"label":"\u0633\u0637\u0648\u0647","state":16,"id":3546},{"label":"\u0633\u0644\u0645\u0631\u0648\u062f","state":16,"id":3554},{"label":"\u0633\u0645\u0646\u0627\u0646","state":16,"id":1996},{"label":"\u0633\u0648\u062f\u0627\u063a\u0644\u0627\u0646","state":16,"id":3536},{"label":"\u0633\u06cc\u062f\u0627\u0628\u0627\u062f-\u0633\u0645\u0646\u0627\u0646","state":16,"id":3511},{"label":"\u0634\u0627\u0647\u0631\u0648\u062f","state":16,"id":2002},{"label":"\u0634\u0647\u0645\u06cc\u0631\u0632\u0627\u062f","state":16,"id":2005},{"label":"\u0637\u0631\u0632\u0647","state":16,"id":3565},{"label":"\u0637\u0631\u0648\u062f","state":16,"id":3547},{"label":"\u0639\u0628\u062f\u0627\u0644\u0644\u0647 \u0627\u0628\u0627\u062f\u067e\u0627\u06cc\u06cc\u0646","state":16,"id":3512},{"label":"\u0639\u0644\u0627","state":16,"id":3500},{"label":"\u0639\u0644\u06cc\u0627\u0646","state":16,"id":3560},{"label":"\u0639\u0645\u0631\u0648\u0627\u0646","state":16,"id":3561},{"label":"\u0641\u0631\u0627\u062a","state":16,"id":3559},{"label":"\u0641\u0631\u0648\u0645\u062f","state":16,"id":3537},{"label":"\u0641\u0648\u0644\u0627\u062f\u0645\u062d\u0644\u0647","state":16,"id":3519},{"label":"\u0642\u062f\u0631\u062a \u0627\u0628\u0627\u062f","state":16,"id":3568},{"label":"\u0642\u0644\u0639\u0647 \u0646\u0648\u062e\u0631\u0642\u0627\u0646","state":16,"id":3540},{"label":"\u0642\u0648\u0634\u0647","state":16,"id":3562},{"label":"\u06a9\u0631\u062f\u0627\u0628\u0627\u062f","state":16,"id":3534},{"label":"\u06a9\u0631\u062f\u0648\u0627\u0646","state":16,"id":3523},{"label":"\u06a9\u0631\u06a9","state":16,"id":3528},{"label":"\u06a9\u0644\u0627\u062a\u0647","state":16,"id":1994},{"label":"\u06a9\u0644\u0627\u062a\u0647 \u062e\u06cc\u062c","state":16,"id":1999},{"label":"\u06a9\u0644\u0627\u062a\u0647 \u0645\u0644\u0627","state":16,"id":3567},{"label":"\u06a9\u0647\u0646 \u0622\u0628\u0627\u062f","state":16,"id":1990},{"label":"\u06af\u0631\u0645\u0633\u0627\u0631","state":16,"id":2004},{"label":"\u06af\u0644 \u0631\u0648\u062f\u0628\u0627\u0631","state":16,"id":3516},{"label":"\u06af\u0644\u0633\u062a\u0627\u0646\u06a9","state":16,"id":3529},{"label":"\u06af\u06cc\u0648\u0631","state":16,"id":3549},{"label":"\u0644\u0627\u0633\u062c\u0631\u062f","state":16,"id":3510},{"label":"\u0644\u062c\u0631\u0627\u0646","state":16,"id":3530},{"label":"\u0645\u062c\u0646","state":16,"id":1998},{"label":"\u0645\u062d\u0645\u062f\u0627\u0628\u0627\u062f","state":16,"id":3557},{"label":"\u0645\u0633\u06cc\u062d \u0627\u0628\u0627\u062f","state":16,"id":3551},{"label":"\u0645\u0639\u062f\u0646 \u0646\u0645\u06a9","state":16,"id":3507},{"label":"\u0645\u0639\u0635\u0648\u0645 \u0627\u0628\u0627\u062f","state":16,"id":3558},{"label":"\u0645\u063a\u0627\u0646","state":16,"id":3548},{"label":"\u0645\u0646\u062f\u0648\u0644\u06a9","state":16,"id":3524},{"label":"\u0645\u0648\u0645\u0646 \u0627\u0628\u0627\u062f-\u0633\u0645\u0646\u0627\u0646","state":16,"id":3514},{"label":"\u0645\u0647\u062f\u06cc \u0634\u0647\u0631","state":16,"id":2007},{"label":"\u0645\u0647\u0645\u0627\u0646\u062f\u0648\u0633\u062a","state":16,"id":3566},{"label":"\u0645\u06cc\u0627\u0645\u06cc","state":16,"id":2008},{"label":"\u0645\u06cc\u063a\u0627\u0646","state":16,"id":3539},{"label":"\u0646\u0631\u062f\u06cc\u0646","state":16,"id":3535},{"label":"\u0646\u0638\u0627\u0645\u06cc","state":16,"id":3508},{"label":"\u0646\u06af\u0627\u0631\u0645\u0646","state":16,"id":3542},{"label":"\u0647\u06cc\u06a9\u0648","state":16,"id":3521}],"17":[{"label":"\u0627\u062f\u06cc\u0645\u06cc","state":17,"id":2037},{"label":"\u0627\u0633\u067e\u06a9\u0647","state":17,"id":2039},{"label":"\u0627\u0633\u0641\u0646\u062f\u06a9","state":17,"id":3613},{"label":"\u0627\u0633\u0645\u0627\u0639\u06cc\u0644 \u06a9\u0644\u06af","state":17,"id":3605},{"label":"\u0627\u0641\u0636\u0644 \u0627\u0628\u0627\u062f","state":17,"id":3603},{"label":"\u0627\u0646\u062f\u0647 \u0642\u062f\u06cc\u0645","state":17,"id":3573},{"label":"\u0627\u06cc\u0631\u0627\u0641\u0634\u0627\u0646","state":17,"id":3607},{"label":"\u0627\u06cc\u0631\u0627\u0646\u0634\u0647\u0631","state":17,"id":2012},{"label":"\u0628\u0627\u0644\u0627\u0642\u0644\u0639\u0647","state":17,"id":3594},{"label":"\u0628\u0627\u0647\u0648\u06a9\u0644\u0627\u062a","state":17,"id":3619},{"label":"\u0628\u0631\u062c\u0645\u06cc\u0631\u06af\u0644","state":17,"id":3579},{"label":"\u0628\u0632\u0645\u0627\u0646","state":17,"id":2009},{"label":"\u0628\u0645\u067e\u0648\u0631","state":17,"id":2010},{"label":"\u0628\u0646\u062a","state":17,"id":2038},{"label":"\u0628\u0646\u062c\u0627\u0631","state":17,"id":2018},{"label":"\u0628\u06cc\u062a \u0627\u0628\u0627\u062f","state":17,"id":3597},{"label":"\u067e\u0627\u0631\u0648\u062f","state":17,"id":3606},{"label":"\u067e\u0633\u0627\u0628\u0646\u062f\u0631","state":17,"id":3620},{"label":"\u067e\u0633\u06a9\u0648\u0647","state":17,"id":3615},{"label":"\u067e\u0644\u0627\u0646","state":17,"id":3618},{"label":"\u067e\u06cc\u067e","state":17,"id":3609},{"label":"\u067e\u06cc\u0631\u0633\u0647\u0631\u0627\u0628","state":17,"id":3621},{"label":"\u067e\u06cc\u0634\u06cc\u0646","state":17,"id":2028},{"label":"\u062a\u062e\u062a \u0639\u062f\u0627\u0644\u062a","state":17,"id":3578},{"label":"\u062a\u0644\u0646\u06af","state":17,"id":3617},{"label":"\u062a\u06cc\u0645\u0648\u0631\u0627\u0628\u0627\u062f","state":17,"id":3581},{"label":"\u062c\u0627\u0644\u0642","state":17,"id":2024},{"label":"\u062c\u0632\u06cc\u0646\u06a9","state":17,"id":3585},{"label":"\u062c\u0647\u0627\u0646 \u0627\u0628\u0627\u062f\u0639\u0644\u06cc\u0627","state":17,"id":3580},{"label":"\u0686\u0627\u0628\u0647\u0627\u0631","state":17,"id":3570},{"label":"\u0686\u0627\u0646\u0641","state":17,"id":3604},{"label":"\u0686\u0627\u0647 \u0628\u0647\u0627\u0631","state":17,"id":2014},{"label":"\u0686\u0627\u0647\u0627\u0646","state":17,"id":3628},{"label":"\u062d\u0631\u0645\u06a9","state":17,"id":3571},{"label":"\u062e\u0627\u0634","state":17,"id":2015},{"label":"\u062e\u0645\u06a9","state":17,"id":3577},{"label":"\u062e\u0648\u0627\u062c\u0647 \u0627\u062d\u0645\u062f","state":17,"id":3569},{"label":"\u062f\u0633\u062a\u06af\u0631\u062f-\u0633\u06cc\u0633\u062a\u0627\u0646 \u0648 \u0628\u0644\u0648\u0686\u0633\u062a\u0627\u0646","state":17,"id":3626},{"label":"\u062f\u0648\u0633\u062a \u0645\u062d\u0645\u062f","state":17,"id":2043},{"label":"\u062f\u0648\u0644\u062a \u0627\u0628\u0627\u062f-\u0633\u06cc\u0633\u062a\u0627\u0646 \u0648 \u0628\u0644\u0648\u0686\u0633\u062a\u0627\u0646","state":17,"id":3582},{"label":"\u062f\u0647 \u067e\u0627\u0628\u06cc\u062f","state":17,"id":3599},{"label":"\u0631\u0627\u0633\u06a9","state":17,"id":2030},{"label":"\u0632\u0627\u0628\u0644","state":17,"id":2019},{"label":"\u0632\u0627\u0647\u062f\u0627\u0646","state":17,"id":2020},{"label":"\u0632\u0631\u0622\u0628\u0627\u062f","state":17,"id":2044},{"label":"\u0632\u0631\u0627\u0628\u0627\u062f","state":17,"id":3623},{"label":"\u0632\u0647\u06a9","state":17,"id":2022},{"label":"\u0632\u06cc\u0631\u06a9\u062f\u0627\u0646","state":17,"id":3596},{"label":"\u0698\u0627\u0644\u0647 \u0627\u06cc","state":17,"id":3588},{"label":"\u0633\u0627\u0631\u0628\u0648\u06a9","state":17,"id":3632},{"label":"\u0633\u0631\u0627\u0648\u0627\u0646","state":17,"id":2025},{"label":"\u0633\u0631\u0628\u0627\u0632","state":17,"id":2029},{"label":"\u0633\u0631\u062f\u0627\u0628","state":17,"id":3608},{"label":"\u0633\u0631\u062f\u06a9","state":17,"id":3612},{"label":"\u0633\u06a9\u0648\u0647\u0647","state":17,"id":3584},{"label":"\u0633\u0646\u06af\u0627\u0646-\u0633\u06cc\u0633\u062a\u0627\u0646 \u0648 \u0628\u0644\u0648\u0686\u0633\u062a\u0627\u0646","state":17,"id":3602},{"label":"\u0633\u0648\u0631\u0627\u0646","state":17,"id":2031},{"label":"\u0633\u06cc\u0627\u062f\u06a9","state":17,"id":3576},{"label":"\u0633\u06cc\u0631\u06a9\u0627\u0646","state":17,"id":2023},{"label":"\u0634\u06af\u06cc\u0645 \u0628\u0627\u0644\u0627","state":17,"id":3630},{"label":"\u0634\u0647\u062f\u0627\u062f\u06a9\u0647\u06cc\u0631","state":17,"id":3622},{"label":"\u0634\u0647\u0631\u06a9 \u0645\u062d\u0645\u062f\u0634\u0627\u0647 \u06a9\u0631\u0645","state":17,"id":3587},{"label":"\u0637\u06cc\u0633","state":17,"id":3616},{"label":"\u0639\u0644\u06cc \u0627\u06a9\u0628\u0631","state":17,"id":2041},{"label":"\u0641\u0646\u0648\u062c","state":17,"id":2033},{"label":"\u0642\u0635\u0631 \u0642\u0646\u062f","state":17,"id":2034},{"label":"\u0642\u0644\u0639\u0647 \u0646\u0648-\u0633\u06cc\u0633\u062a\u0627\u0646 \u0648 \u0628\u0644\u0648\u0686\u0633\u062a\u0627\u0646","state":17,"id":3586},{"label":"\u06a9\u0627\u0631\u0648\u0627\u0646\u062f\u0631","state":17,"id":3592},{"label":"\u06a9\u062a\u06cc\u062c","state":17,"id":3625},{"label":"\u06a9\u0631\u0628\u0627\u0633\u06a9","state":17,"id":3589},{"label":"\u06a9\u0634\u06cc\u06a9","state":17,"id":3631},{"label":"\u06a9\u0646\u0627\u0631\u06a9","state":17,"id":2045},{"label":"\u06a9\u0648\u0634\u06a9\u0648\u06a9","state":17,"id":3611},{"label":"\u06a9\u0648\u0634\u0647","state":17,"id":3601},{"label":"\u06a9\u0648\u0647\u06a9","state":17,"id":3614},{"label":"\u06af\u0634\u062a","state":17,"id":2026},{"label":"\u06af\u0644\u0645\u0648\u0631\u062a\u06cc","state":17,"id":2017},{"label":"\u06af\u0644\u0648\u06af\u0627\u0647-\u0633\u06cc\u0633\u062a\u0627\u0646 \u0648 \u0628\u0644\u0648\u0686\u0633\u062a\u0627\u0646","state":17,"id":3572},{"label":"\u06af\u0645\u0646","state":17,"id":3595},{"label":"\u06af\u0648\u0647\u0631\u06a9\u0648\u0647","state":17,"id":3598},{"label":"\u0644\u0627\u062f\u06cc\u0632\u0639\u0644\u06cc\u0627","state":17,"id":3574},{"label":"\u0644\u0648\u062a\u06a9","state":17,"id":3583},{"label":"\u0645\u062d\u0645\u062f \u0622\u0628\u0627\u062f","state":17,"id":2042},{"label":"\u0645\u062d\u0645\u062f\u0627\u0646","state":17,"id":2011},{"label":"\u0645\u062d\u0645\u062f\u06cc","state":17,"id":2027},{"label":"\u0645\u062d\u0646\u062a","state":17,"id":3627},{"label":"\u0645\u0633\u06a9\u0648\u062a\u0627\u0646","state":17,"id":3624},{"label":"\u0645\u0647\u0631\u0633\u062a\u0627\u0646","state":17,"id":2035},{"label":"\u0645\u06cc\u0631\u062c\u0627\u0648\u0647","state":17,"id":2036},{"label":"\u0646\u0627\u0632\u06cc\u0644","state":17,"id":3600},{"label":"\u0646\u0627\u0635\u0631\u0627\u0628\u0627\u062f-\u0633\u06cc\u0633\u062a\u0627\u0646 \u0648 \u0628\u0644\u0648\u0686\u0633\u062a\u0627\u0646","state":17,"id":3593},{"label":"\u0646\u0635\u0631\u062a \u0622\u0628\u0627\u062f","state":17,"id":2021},{"label":"\u0646\u06af\u0648\u0631","state":17,"id":2013},{"label":"\u0646\u0648\u0631\u0627\u0628\u0627\u062f","state":17,"id":3591},{"label":"\u0646\u0648\u06a9 \u0622\u0628\u0627\u062f","state":17,"id":2016},{"label":"\u0646\u0648\u06a9 \u0627\u0628\u0627\u062f","state":17,"id":3590},{"label":"\u0646\u06cc\u06a9 \u0634\u0647\u0631","state":17,"id":2040},{"label":"\u0647\u0648\u062f\u06cc\u0627\u0646","state":17,"id":3610},{"label":"\u0647\u06cc\u0686\u0627\u0646","state":17,"id":3629},{"label":"\u0647\u06cc\u062f\u0648\u0686","state":17,"id":2032},{"label":"\u0647\u06cc\u0631\u0645\u0646\u062f","state":17,"id":3575}],"18":[{"label":"\u0622\u0628\u0627\u062f\u0647","state":18,"id":2046},{"label":"\u0622\u0628\u0627\u062f\u0647 \u0637\u0634\u06a9","state":18,"id":2137},{"label":"\u0627\u0631\u062f\u06a9\u0627\u0646","state":18,"id":2085},{"label":"\u0627\u0631\u0633\u0646\u062c\u0627\u0646","state":18,"id":2051},{"label":"\u0627\u0633\u067e\u0627\u0633","state":18,"id":3670},{"label":"\u0627\u0633\u062a\u0647\u0628\u0627\u0646","state":18,"id":2053},{"label":"\u0627\u0633\u06cc\u0631","state":18,"id":2132},{"label":"\u0627\u0634\u06a9\u0646\u0627\u0646","state":18,"id":2120},{"label":"\u0627\u0641\u0632\u0631","state":18,"id":2106},{"label":"\u0627\u0642\u0644\u06cc\u062f","state":18,"id":2058},{"label":"\u0627\u06a9\u0628\u0631\u0627\u0628\u0627\u062f","state":18,"id":3641},{"label":"\u0627\u0645\u0627\u0645 \u0634\u0647\u0631","state":18,"id":2107},{"label":"\u0627\u0645\u0627\u0645\u0632\u0627\u062f\u0647 \u0627\u0633\u0645\u0627\u0639\u06cc\u0644","state":18,"id":3669},{"label":"\u0627\u0646\u0627\u0631\u0633\u062a\u0627\u0646-\u0641\u0627\u0631\u0633","state":18,"id":3653},{"label":"\u0627\u0648\u0632","state":18,"id":2112},{"label":"\u0627\u0647\u0644","state":18,"id":2121},{"label":"\u0627\u0647\u0646\u06af\u0631\u06cc","state":18,"id":3657},{"label":"\u0627\u06cc\u062c","state":18,"id":2054},{"label":"\u0627\u06cc\u0632\u062f \u062e\u0648\u0627\u0633\u062a","state":18,"id":2047},{"label":"\u0628\u0627\u0628 \u0627\u0646\u0627\u0631","state":18,"id":2065},{"label":"\u0628\u0627\u0628\u0627\u0645\u0646\u06cc\u0631","state":18,"id":2129},{"label":"\u0628\u0627\u0644\u0627\u062f\u0647","state":18,"id":2141},{"label":"\u0628\u0627\u0646\u0634","state":18,"id":3665},{"label":"\u0628\u0627\u06cc\u06af\u0627\u0646","state":18,"id":3685},{"label":"\u0628\u0646\u0627\u0631\u0648\u06cc\u0647","state":18,"id":2113},{"label":"\u0628\u0646\u062f\u0627\u0645\u06cc\u0631","state":18,"id":3633},{"label":"\u0628\u0646\u062f\u0628\u0633\u062a","state":18,"id":3672},{"label":"\u0628\u0646\u0648\u0627\u0646","state":18,"id":3675},{"label":"\u0628\u0648\u0627\u0646\u0627\u062a","state":18,"id":2061},{"label":"\u0628\u0647 \u062c\u0627\u0646","state":18,"id":3680},{"label":"\u0628\u0647\u0631\u063a\u0627\u0646","state":18,"id":3661},{"label":"\u0628\u0647\u0645\u0646","state":18,"id":2048},{"label":"\u0628\u06cc\u0631\u0645","state":18,"id":2114},{"label":"\u0628\u06cc\u0636\u0627","state":18,"id":2084},{"label":"\u067e\u0627\u0633\u06af\u0627\u0647 \u0686\u0646\u0627\u0631\u0631\u0627\u0647\u062f\u0627\u0631","state":18,"id":3646},{"label":"\u067e\u0631\u06cc\u0646","state":18,"id":3658},{"label":"\u062a\u0641\u06cc\u0647\u0627\u0646","state":18,"id":3639},{"label":"\u062c\u0631\u0647","state":18,"id":3655},{"label":"\u062c\u0646\u062a \u0634\u0647\u0631","state":18,"id":2077},{"label":"\u062c\u0648\u06a9\u0627\u0646","state":18,"id":3686},{"label":"\u062c\u0648\u06cc\u0645","state":18,"id":2115},{"label":"\u062c\u0647\u0631\u0645","state":18,"id":2068},{"label":"\u0686\u0645\u0646 \u0645\u0631\u0648\u0627\u0631\u06cc\u062f","state":18,"id":3690},{"label":"\u062d\u0627\u062c\u06cc \u0622\u0628\u0627\u062f","state":18,"id":2082},{"label":"\u062d\u0633\u0627\u0645\u06cc","state":18,"id":2059},{"label":"\u062d\u0633\u0646 \u0622\u0628\u0627\u062f","state":18,"id":2055},{"label":"\u062d\u0633\u06cc\u0646 \u0627\u0628\u0627\u062f\u0631\u0633\u062a\u0645","state":18,"id":3659},{"label":"\u062d\u06a9\u06cc\u0645 \u0628\u0627\u0634\u06cc \u0646\u0635\u0641 \u0645\u06cc\u0627\u0646 (\u0628\u0627\u0644\u0627)","state":18,"id":3652},{"label":"\u062e\u0627\u0646\u0647 \u0632\u0646\u06cc\u0627\u0646","state":18,"id":2089},{"label":"\u062e\u0627\u0646\u06cc\u0645\u0646","state":18,"id":2128},{"label":"\u062e\u0627\u0648\u0631\u0627\u0646","state":18,"id":2066},{"label":"\u062e\u0631\u0627\u0645\u0647","state":18,"id":2070},{"label":"\u062e\u0634\u062a","state":18,"id":2143},{"label":"\u062e\u0646\u062c","state":18,"id":2074},{"label":"\u062e\u0646\u062c\u0634\u062a","state":18,"id":3668},{"label":"\u062e\u0648\u0631","state":18,"id":2117},{"label":"\u062e\u0648\u0632\u06cc","state":18,"id":2135},{"label":"\u062e\u0648\u0645\u0647 \u0632\u0627\u0631","state":18,"id":2130},{"label":"\u062e\u06cc\u0631\u0627\u0628\u0627\u062f\u062a\u0648\u0644\u0644\u06cc","state":18,"id":3634},{"label":"\u062f\u0627\u0631\u0627\u0628","state":18,"id":2078},{"label":"\u062f\u0627\u0631\u06cc\u0627\u0646","state":18,"id":2092},{"label":"\u062f\u0628\u06cc\u0631\u0627\u0646","state":18,"id":2083},{"label":"\u062f\u0631\u0628 \u0642\u0644\u0639\u0647","state":18,"id":3676},{"label":"\u062f\u0698\u06a9\u0631\u062f","state":18,"id":2056},{"label":"\u062f\u0646\u06cc\u0627\u0646","state":18,"id":3677},{"label":"\u062f\u0648\u0628\u0631\u062c\u06cc","state":18,"id":2075},{"label":"\u062f\u0648\u0632\u0647","state":18,"id":2067},{"label":"\u062f\u0647\u0631\u0645","state":18,"id":2095},{"label":"\u062f\u0647\u0641\u06cc\u0634","state":18,"id":3645},{"label":"\u0631\u0627\u0634\u06a9 \u0639\u0644\u06cc\u0627","state":18,"id":3663},{"label":"\u0631\u0627\u0645\u062c\u0631\u062f","state":18,"id":2124},{"label":"\u0631\u0633\u062a\u0627\u0642","state":18,"id":3689},{"label":"\u0631\u0648\u0646\u06cc\u0632","state":18,"id":2052},{"label":"\u0632\u0627\u0647\u062f \u0634\u0647\u0631","state":18,"id":2100},{"label":"\u0632\u0631\u0642\u0627\u0646","state":18,"id":2090},{"label":"\u0633\u062f\u0647","state":18,"id":2057},{"label":"\u0633\u0631\u0648\u0633\u062a\u0627\u0646","state":18,"id":2087},{"label":"\u0633\u0631\u0648\u0648","state":18,"id":3678},{"label":"\u0633\u0639\u0627\u062f\u062a \u0634\u0647\u0631","state":18,"id":2064},{"label":"\u0633\u0644\u0637\u0627\u0646 \u0622\u0628\u0627\u062f-\u0641\u0627\u0631\u0633","state":18,"id":3638},{"label":"\u0633\u0644\u0637\u0627\u0646 \u0634\u0647\u0631","state":18,"id":2071},{"label":"\u0633\u0648\u0631\u0645\u0642","state":18,"id":2049},{"label":"\u0633\u06cc\u062f\u0627\u0646","state":18,"id":2125},{"label":"\u0634\u0634\u062f\u0647","state":18,"id":2098},{"label":"\u0634\u0648\u0631\u06cc\u062c\u0647","state":18,"id":3636},{"label":"\u0634\u0647\u0631 \u067e\u06cc\u0631","state":18,"id":2081},{"label":"\u0634\u0647\u0631 \u062c\u062f\u06cc\u062f \u0635\u062f\u0631\u0627","state":18,"id":2093},{"label":"\u0634\u0647\u0631\u0645\u06cc\u0627\u0646","state":18,"id":3671},{"label":"\u0634\u06cc\u0631\u0627\u0632","state":18,"id":2094},{"label":"\u0635\u062d\u0631\u0627\u0631\u0648\u062f","state":18,"id":3684},{"label":"\u0635\u063a\u0627\u062f","state":18,"id":2050},{"label":"\u0635\u0641\u0627 \u0634\u0647\u0631","state":18,"id":2072},{"label":"\u0637\u0633\u0648\u062c","state":18,"id":3640},{"label":"\u0639\u0644\u0627\u0645\u0631\u0648\u062f\u0634\u062a","state":18,"id":2122},{"label":"\u0639\u0645\u0627\u062f \u062f\u0647","state":18,"id":2116},{"label":"\u0641\u062a\u062d \u0627\u0628\u0627\u062f-\u0641\u0627\u0631\u0633","state":18,"id":3644},{"label":"\u0641\u062f\u0627\u0645\u06cc","state":18,"id":2076},{"label":"\u0641\u0631\u0627\u0634\u0628\u0646\u062f","state":18,"id":2096},{"label":"\u0641\u0633\u0627","state":18,"id":2102},{"label":"\u0641\u06cc\u0631\u0648\u0632\u0622\u0628\u0627\u062f","state":18,"id":2104},{"label":"\u0641\u06cc\u0634\u0648\u0631","state":18,"id":3673},{"label":"\u0642\u0627\u0626\u0645\u06cc\u0647","state":18,"id":2142},{"label":"\u0642\u0627\u062f\u0631\u0622\u0628\u0627\u062f","state":18,"id":2073},{"label":"\u0642\u0627\u0633\u0645 \u0627\u0628\u0627\u062f\u0633\u0641\u0644\u06cc","state":18,"id":3682},{"label":"\u0642\u0631\u0647 \u0628\u0644\u0627\u063a","state":18,"id":2099},{"label":"\u0642\u0637\u0627\u0631\u0628\u0646\u0647","state":18,"id":3692},{"label":"\u0642\u0637\u0628 \u0622\u0628\u0627\u062f","state":18,"id":2069},{"label":"\u0642\u0637\u0631\u0648\u06cc\u0647","state":18,"id":2139},{"label":"\u0642\u06cc\u0631","state":18,"id":2108},{"label":"\u06a9\u0627\u0631\u0632\u06cc\u0646","state":18,"id":2110},{"label":"\u06a9\u0627\u0632\u0631\u0648\u0646","state":18,"id":2144},{"label":"\u06a9\u0627\u0645\u0641\u06cc\u0631\u0648\u0632","state":18,"id":2127},{"label":"\u06a9\u0631\u0647 \u0627\u06cc","state":18,"id":2060},{"label":"\u06a9\u0644\u0627\u062a\u0648\u0646","state":18,"id":3648},{"label":"\u06a9\u0644\u0627\u0646\u06cc","state":18,"id":3649},{"label":"\u06a9\u0645 \u062c\u0627\u0646","state":18,"id":3635},{"label":"\u06a9\u0645\u0627\u0631\u062c \u0645\u0631\u06a9\u0632\u06cc","state":18,"id":3650},{"label":"\u06a9\u0645\u0647\u0631","state":18,"id":3662},{"label":"\u06a9\u0646\u0627\u0631 \u062a\u062e\u062a\u0647","state":18,"id":2145},{"label":"\u06a9\u0648\u0627\u0631","state":18,"id":2147},{"label":"\u06a9\u0648\u067e\u0646","state":18,"id":2079},{"label":"\u06a9\u0648\u0634\u06a9 \u0628\u06cc\u062f\u06a9","state":18,"id":3643},{"label":"\u06a9\u0648\u0634\u06a9 \u0642\u0627\u0636\u06cc","state":18,"id":3681},{"label":"\u06a9\u0648\u0634\u06a9-\u0641\u0627\u0631\u0633","state":18,"id":3666},{"label":"\u06a9\u0648\u0634\u06a9\u06a9-\u0641\u0627\u0631\u0633","state":18,"id":3667},{"label":"\u06a9\u0648\u0647\u0646\u062c\u0627\u0646","state":18,"id":2088},{"label":"\u06a9\u0647\u0646\u0647","state":18,"id":3674},{"label":"\u06af\u0631\u0627\u0634","state":18,"id":2111},{"label":"\u06af\u0644\u0647 \u062f\u0627\u0631","state":18,"id":2133},{"label":"\u06af\u0648\u06cc\u0645","state":18,"id":3656},{"label":"\u0644\u0627\u0631","state":18,"id":2118},{"label":"\u0644\u0627\u0645\u0631\u062f","state":18,"id":2123},{"label":"\u0644\u0627\u06cc \u062d\u0646\u0627","state":18,"id":3691},{"label":"\u0644\u067e\u0648\u0626\u06cc","state":18,"id":2091},{"label":"\u0644\u0637\u06cc\u0641\u06cc","state":18,"id":2119},{"label":"\u0645\u0627\u062f\u0631\u0633\u0644\u06cc\u0645\u0627\u0646","state":18,"id":2063},{"label":"\u0645\u0627\u062f\u0648\u0627\u0646-\u0641\u0627\u0631\u0633","state":18,"id":3687},{"label":"\u0645\u0627\u0646\u06cc\u0627\u0646","state":18,"id":3679},{"label":"\u0645\u0627\u0647 \u0633\u0627\u0644\u0627\u0631\u06cc","state":18,"id":3688},{"label":"\u0645\u0628\u0627\u0631\u06a9 \u0622\u0628\u0627\u062f","state":18,"id":2109},{"label":"\u0645\u0631\u0648\u062f\u0634\u062a","state":18,"id":2126},{"label":"\u0645\u0632\u0627\u06cc\u062c\u0627\u0646","state":18,"id":2062},{"label":"\u0645\u0634\u06a9\u0627\u0646","state":18,"id":2138},{"label":"\u0645\u0635\u06cc\u0631\u06cc","state":18,"id":2080},{"label":"\u0645\u0638\u0641\u0631\u06cc","state":18,"id":3642},{"label":"\u0645\u0648\u0631\u062f\u0631\u0627\u0632","state":18,"id":3647},{"label":"\u0645\u0647\u0627\u0631\u0644\u0648","state":18,"id":3637},{"label":"\u0645\u0647\u0628\u0648\u062f\u06cc \u0639\u0644\u06cc\u0627","state":18,"id":3651},{"label":"\u0645\u0647\u0631","state":18,"id":2134},{"label":"\u0645\u0647\u0631\u0646\u062c\u0627\u0646","state":18,"id":3654},{"label":"\u0645\u06cc\u0627\u0646\u062f\u0647-\u0641\u0627\u0631\u0633","state":18,"id":3683},{"label":"\u0645\u06cc\u0627\u0646\u0634\u0647\u0631","state":18,"id":2101},{"label":"\u0645\u06cc\u0634\u0627\u0646 \u0633\u0641\u0644\u06cc","state":18,"id":3660},{"label":"\u0645\u06cc\u0645\u0646\u062f","state":18,"id":2105},{"label":"\u0646\u0648\u0628\u0646\u062f\u06af\u0627\u0646","state":18,"id":2103},{"label":"\u0646\u0648\u062c\u06cc\u0646","state":18,"id":2097},{"label":"\u0646\u0648\u062f\u0627\u0646","state":18,"id":2146},{"label":"\u0646\u0648\u0631\u0622\u0628\u0627\u062f","state":18,"id":2131},{"label":"\u0646\u06cc \u0631\u06cc\u0632","state":18,"id":2140},{"label":"\u0648\u0631\u0627\u0648\u06cc","state":18,"id":2136},{"label":"\u0647\u0631\u0627\u06cc\u062c\u0627\u0646","state":18,"id":3664},{"label":"\u0647\u0631\u06af\u0627\u0646","state":18,"id":3693},{"label":"\u0647\u0645\u0627\u0634\u0647\u0631","state":18,"id":2086}],"19":[{"label":"\u0622\u0628\u06af\u0631\u0645","state":19,"id":2150},{"label":"\u0622\u0628\u06cc\u06a9","state":19,"id":2149},{"label":"\u0622\u0648\u062c","state":19,"id":2151},{"label":"\u0627\u0631\u062f\u0627\u0642","state":19,"id":2156},{"label":"\u0627\u0633\u062a\u0628\u0644\u062e","state":19,"id":3708},{"label":"\u0627\u0633\u0641\u0631\u0648\u0631\u06cc\u0646","state":19,"id":2161},{"label":"\u0627\u0642\u0627\u0628\u0627\u0628\u0627","state":19,"id":3714},{"label":"\u0627\u0642\u0628\u0627\u0644\u06cc\u0647","state":19,"id":2169},{"label":"\u0627\u0644\u0648\u0644\u06a9","state":19,"id":3695},{"label":"\u0627\u0644\u0648\u0646\u062f","state":19,"id":2155},{"label":"\u0628\u0648\u0626\u06cc\u0646 \u0632\u0647\u0631\u0627","state":19,"id":2159},{"label":"\u0628\u06cc\u062f\u0633\u062a\u0627\u0646","state":19,"id":2152},{"label":"\u062a\u0627\u06a9\u0633\u062a\u0627\u0646","state":19,"id":2164},{"label":"\u062d\u0633\u06cc\u0646 \u0627\u0628\u0627\u062f-\u0642\u0632\u0648\u06cc\u0646","state":19,"id":3715},{"label":"\u062d\u0635\u0627\u0631\u0648\u0644\u06cc\u0639\u0635\u0631","state":19,"id":3710},{"label":"\u062e\u0627\u06a9\u0639\u0644\u06cc","state":19,"id":2148},{"label":"\u062e\u0631\u0645 \u0627\u0628\u0627\u062f","state":19,"id":3706},{"label":"\u062e\u0631\u0645\u062f\u0634\u062a","state":19,"id":2162},{"label":"\u062f\u0627\u0646\u0633\u0641\u0647\u0627\u0646","state":19,"id":2157},{"label":"\u0631\u0627\u0632\u0645\u06cc\u0627\u0646","state":19,"id":2167},{"label":"\u0631\u062d\u06cc\u0645 \u0627\u0628\u0627\u062f","state":19,"id":3716},{"label":"\u0631\u0634\u062a\u0642\u0648\u0646","state":19,"id":3702},{"label":"\u0632\u0648\u0627\u0631\u06a9","state":19,"id":3699},{"label":"\u0633\u06af\u0632 \u0622\u0628\u0627\u062f","state":19,"id":2160},{"label":"\u0633\u06cc\u0627\u0647\u067e\u0648\u0634","state":19,"id":3712},{"label":"\u0633\u06cc\u0631\u062f\u0627\u0646","state":19,"id":2168},{"label":"\u0634\u0627\u0644","state":19,"id":2158},{"label":"\u0634\u0631\u06cc\u0641\u06cc\u0647","state":19,"id":2153},{"label":"\u0634\u0647\u0631\u06a9 \u0635\u0646\u0639\u062a\u06cc \u0644\u06cc\u0627 (\u0642\u062f\u06cc\u0645 )","state":19,"id":3704},{"label":"\u0635\u0645\u063a \u0627\u0628\u0627\u062f","state":19,"id":3700},{"label":"\u0636\u06cc\u0627\u0621 \u0622\u0628\u0627\u062f","state":19,"id":2163},{"label":"\u0639\u0635\u0645\u062a \u0627\u0628\u0627\u062f","state":19,"id":3705},{"label":"\u0641\u0644\u0627\u0631","state":19,"id":3697},{"label":"\u0642\u0632\u0648\u06cc\u0646","state":19,"id":2170},{"label":"\u0642\u0634\u0644\u0627\u0642","state":19,"id":3703},{"label":"\u06a9\u0627\u06a9\u0648\u0647\u0633\u062a\u0627\u0646","state":19,"id":3696},{"label":"\u06a9\u0644\u0646\u062c\u06cc\u0646","state":19,"id":3707},{"label":"\u06a9\u0648\u0647\u06cc\u0646","state":19,"id":2172},{"label":"\u0645\u0627\u0647\u06cc\u0646","state":19,"id":3711},{"label":"\u0645\u062d\u0645\u062f\u06cc\u0647","state":19,"id":2154},{"label":"\u0645\u062d\u0645\u0648\u062f \u0622\u0628\u0627\u062f \u0646\u0645\u0648\u0646\u0647","state":19,"id":2171},{"label":"\u0645\u0639\u0644\u0645 \u06a9\u0644\u0627\u06cc\u0647","state":19,"id":2166},{"label":"\u0645\u0647\u0631\u06af\u0627\u0646","state":19,"id":3717},{"label":"\u0645\u06cc\u0646\u0648\u062f\u0634\u062a","state":19,"id":3698},{"label":"\u0646\u0627\u0635\u0631\u0627\u0628\u0627\u062f-\u0642\u0632\u0648\u06cc\u0646","state":19,"id":3701},{"label":"\u0646\u0631\u062c\u0647","state":19,"id":2165},{"label":"\u0646\u0635\u0631\u062a \u0622\u0628\u0627\u062f-\u0642\u0632\u0648\u06cc\u0646","state":19,"id":3694},{"label":"\u0646\u06cc\u0627\u0631\u062c","state":19,"id":3709},{"label":"\u0646\u06cc\u0627\u0631\u06a9","state":19,"id":3713},{"label":"\u0646\u06cc\u06a9\u0648\u06cc\u0647","state":19,"id":3719},{"label":"\u06cc\u062d\u06cc\u06cc \u0627\u0628\u0627\u062f-\u0642\u0632\u0648\u06cc\u0646","state":19,"id":3718}],"20":[{"label":"\u0627\u0645\u06cc\u0631\u0627\u0628\u0627\u062f\u06af\u0646\u062c\u06cc","state":20,"id":3720},{"label":"\u062c\u0639\u0641\u0631\u06cc\u0647","state":20,"id":2173},{"label":"\u062c\u0646\u062f\u0627\u0628","state":20,"id":3724},{"label":"\u062f\u0633\u062a\u062c\u0631\u062f","state":20,"id":2174},{"label":"\u0633\u0644\u0641\u0686\u06af\u0627\u0646","state":20,"id":2175},{"label":"\u0642\u0627\u0647\u0627\u0646","state":20,"id":3723},{"label":"\u0642\u0644\u0639\u0647 \u0686\u0645","state":20,"id":3722},{"label":"\u0642\u0645","state":20,"id":2176},{"label":"\u0642\u0645\u0631\u0648\u062f","state":20,"id":3721},{"label":"\u0642\u0646\u0648\u0627\u062a","state":20,"id":2177},{"label":"\u06a9\u0647\u06a9","state":20,"id":2178}],"21":[{"label":"\u0622\u0631\u0645\u0631\u062f\u0647","state":21,"id":2179},{"label":"\u0627\u0642 \u0628\u0644\u0627\u063a \u0637\u063a\u0627\u0645\u06cc\u0646","state":21,"id":4047},{"label":"\u0627\u0648\u0631\u0627\u0645\u0627\u0646 \u062a\u062e\u062a","state":21,"id":2192},{"label":"\u0628\u0627\u0628\u0627\u0631\u0634\u0627\u0646\u06cc","state":21,"id":2183},{"label":"\u0628\u0627\u0646\u0647","state":21,"id":2180},{"label":"\u0628\u0631\u062f\u0647 \u0631\u0634\u0647","state":21,"id":2202},{"label":"\u0628\u0644\u0628\u0627\u0646 \u0622\u0628\u0627\u062f","state":21,"id":2188},{"label":"\u0628\u0648\u0627\u0644\u062d\u0633\u0646","state":21,"id":4062},{"label":"\u0628\u0648\u0626\u06cc\u0646 \u0633\u0641\u0644\u06cc","state":21,"id":2182},{"label":"\u0628\u06cc\u062c\u0627\u0631","state":21,"id":2185},{"label":"\u0628\u06cc\u0633\u0627\u0631\u0627\u0646","state":21,"id":4054},{"label":"\u067e\u06cc\u0631\u062a\u0627\u062c","state":21,"id":2184},{"label":"\u067e\u06cc\u0631\u062e\u0636\u0631\u0627\u0646","state":21,"id":4053},{"label":"\u062a\u0648\u067e \u0622\u063a\u0627\u062c","state":21,"id":2186},{"label":"\u062a\u0648\u067e \u0627\u063a\u0627\u062c","state":21,"id":4046},{"label":"\u062a\u06cc\u0644\u06a9\u0648","state":21,"id":4057},{"label":"\u062c\u0639\u0641\u0631\u0627\u0628\u0627\u062f-\u06a9\u0631\u062f\u0633\u062a\u0627\u0646","state":21,"id":4049},{"label":"\u0686\u0646\u0627\u0631\u0647","state":21,"id":2203},{"label":"\u062e\u0627\u0645\u0633\u0627\u0646","state":21,"id":4039},{"label":"\u062e\u0631\u06a9\u0647","state":21,"id":4045},{"label":"\u062e\u0633\u0631\u0648\u0627\u0628\u0627\u062f-\u06a9\u0631\u062f\u0633\u062a\u0627\u0646","state":21,"id":4048},{"label":"\u062e\u0648\u0631\u062e\u0648\u0631\u0647-\u06a9\u0631\u062f\u0633\u062a\u0627\u0646","state":21,"id":4058},{"label":"\u062f\u0632\u062c","state":21,"id":2198},{"label":"\u062f\u0644\u0628\u0631\u0627\u0646","state":21,"id":2200},{"label":"\u062f\u0647\u06af\u0644\u0627\u0646","state":21,"id":2189},{"label":"\u062f\u06cc\u0648\u0627\u0646\u062f\u0631\u0647","state":21,"id":2190},{"label":"\u0632\u0631\u06cc\u0646\u0647","state":21,"id":2191},{"label":"\u0633\u0631\u0627","state":21,"id":4055},{"label":"\u0633\u0631\u0648 \u0622\u0628\u0627\u062f","state":21,"id":2193},{"label":"\u0633\u0631\u06cc\u0634 \u0622\u0628\u0627\u062f","state":21,"id":2199},{"label":"\u0633\u0642\u0632","state":21,"id":2195},{"label":"\u0633\u0646\u0646\u062f\u062c","state":21,"id":2196},{"label":"\u0634\u0627\u0647\u06cc\u0646\u06cc","state":21,"id":4034},{"label":"\u0634\u0631\u06cc\u0641 \u0627\u0628\u0627\u062f","state":21,"id":4040},{"label":"\u0634\u0648\u06cc","state":21,"id":4064},{"label":"\u0634\u0648\u06cc\u0634\u0647","state":21,"id":2197},{"label":"\u0634\u06cc\u0631\u0648\u0627\u0646\u0647","state":21,"id":4038},{"label":"\u0635\u0627\u062d\u0628","state":21,"id":2194},{"label":"\u0637\u0627\u06cc","state":21,"id":4035},{"label":"\u0642\u0631\u0648\u0647","state":21,"id":2201},{"label":"\u0642\u0648\u0631\u06cc\u0686\u0627\u06cc","state":21,"id":4051},{"label":"\u06a9\u0627\u0645\u06cc\u0627\u0631\u0627\u0646","state":21,"id":2206},{"label":"\u06a9\u0627\u0646\u06cc \u062f\u06cc\u0646\u0627\u0631","state":21,"id":2205},{"label":"\u06a9\u0627\u0646\u06cc \u0633\u0648\u0631","state":21,"id":2181},{"label":"\u06a9\u0627\u0646\u06cc \u06af\u0646\u062c\u06cc","state":21,"id":4050},{"label":"\u06a9\u0633\u0646\u0632\u0627\u0646","state":21,"id":4059},{"label":"\u06a9\u0648\u062e\u0627\u0646","state":21,"id":4063},{"label":"\u06a9\u0648\u0644\u0647","state":21,"id":4041},{"label":"\u06af\u0627\u0632\u0631\u062e\u0627\u0646\u06cc","state":21,"id":4036},{"label":"\u06af\u0627\u0648\u0634\u0644\u0647","state":21,"id":4044},{"label":"\u06af\u0644 \u062a\u067e\u0647-\u06a9\u0631\u062f\u0633\u062a\u0627\u0646","state":21,"id":4056},{"label":"\u06af\u0648\u0631\u0628\u0627\u0628\u0627\u0639\u0644\u06cc","state":21,"id":4043},{"label":"\u0645\u0631\u06cc\u0648\u0627\u0646","state":21,"id":2204},{"label":"\u0645\u0648\u0686\u0634","state":21,"id":2207},{"label":"\u0645\u06cc\u0631\u062f\u0647","state":21,"id":4060},{"label":"\u0646\u0634\u0648\u0631\u0633\u0641\u0644\u06cc","state":21,"id":4037},{"label":"\u0646\u0646\u0648\u0631","state":21,"id":4061},{"label":"\u0646\u06cc","state":21,"id":4052},{"label":"\u0647\u0632\u0627\u0631\u06a9\u0627\u0646\u06cc\u0627\u0646","state":21,"id":4042},{"label":"\u06cc\u0627\u0633\u0648\u06a9\u0646\u062f","state":21,"id":2187}],"22":[{"label":"\u0627\u0628\u0627\u0631\u0642","state":22,"id":4073},{"label":"\u0627\u062e\u062a\u06cc\u0627\u0631 \u0622\u0628\u0627\u062f","state":22,"id":2272},{"label":"\u0627\u0631\u0632\u0648\u0626\u06cc\u0647","state":22,"id":2208},{"label":"\u0627\u0645\u06cc\u0631\u0627\u0628\u0627\u062f","state":22,"id":4101},{"label":"\u0627\u0645\u06cc\u0646 \u0634\u0647\u0631","state":22,"id":2209},{"label":"\u0627\u0646\u0627\u0631","state":22,"id":2210},{"label":"\u0627\u0646\u062f\u0648\u0647\u062c\u0631\u062f","state":22,"id":2266},{"label":"\u0628\u0627\u063a\u06cc\u0646","state":22,"id":2273},{"label":"\u0628\u0627\u0641\u062a","state":22,"id":2211},{"label":"\u0628\u0631\u062c \u0645\u0639\u0627\u0632","state":22,"id":4071},{"label":"\u0628\u0631\u062f\u0633\u06cc\u0631","state":22,"id":2214},{"label":"\u0628\u0631\u0648\u0627\u062a","state":22,"id":2218},{"label":"\u0628\u0632\u0646\u062c\u0627\u0646","state":22,"id":2212},{"label":"\u0628\u0644\u0648\u0631\u062f","state":22,"id":2241},{"label":"\u0628\u0644\u0648\u06a9","state":22,"id":2220},{"label":"\u0628\u0645","state":22,"id":2219},{"label":"\u0628\u0647\u0631\u0645\u0627\u0646","state":22,"id":2231},{"label":"\u067e\u0627\u0631\u06cc\u0632","state":22,"id":2242},{"label":"\u067e\u062a\u06a9\u0627\u0646","state":22,"id":4102},{"label":"\u062a\u0647\u0631\u0648\u062f","state":22,"id":4076},{"label":"\u062c\u0628\u0627\u0644\u0628\u0627\u0631\u0632","state":22,"id":2221},{"label":"\u062c\u0631\u062c\u0627\u0641\u06a9","state":22,"id":4089},{"label":"\u062c\u0648\u0627\u062f\u06cc\u0647 \u0627\u0644\u0647\u06cc\u0647 \u0646\u0648\u0642","state":22,"id":4083},{"label":"\u062c\u0648\u067e\u0627\u0631","state":22,"id":2269},{"label":"\u062c\u0648\u0631","state":22,"id":4092},{"label":"\u062c\u0648\u0632\u0645","state":22,"id":2248},{"label":"\u062c\u0648\u0634\u0627\u0646","state":22,"id":4067},{"label":"\u062c\u06cc\u0631\u0641\u062a","state":22,"id":2223},{"label":"\u0686\u062a\u0631\u0648\u062f","state":22,"id":2263},{"label":"\u0686\u0646\u0627\u0631\u0628\u0631\u06cc\u0646","state":22,"id":4099},{"label":"\u062d\u062a\u06a9\u0646","state":22,"id":4088},{"label":"\u062d\u0631\u062c\u0646\u062f","state":22,"id":4094},{"label":"\u062d\u0633\u06cc\u0646 \u0627\u0628\u0627\u062f\u062c\u062f\u06cc\u062f","state":22,"id":4105},{"label":"\u062e\u0627\u062a\u0648\u0646 \u0622\u0628\u0627\u062f","state":22,"id":2250},{"label":"\u062e\u0627\u0646\u0648\u06a9","state":22,"id":2237},{"label":"\u062e\u0627\u0646\u0647 \u062e\u0627\u062a\u0648\u0646","state":22,"id":4072},{"label":"\u062e\u0628\u0631","state":22,"id":4085},{"label":"\u062e\u0646\u0627\u0645\u0627\u0646","state":22,"id":4079},{"label":"\u062e\u0648\u0627\u062c\u0648\u0634\u0647\u0631","state":22,"id":2244},{"label":"\u062e\u0648\u0631\u0633\u0646\u062f","state":22,"id":2251},{"label":"\u062e\u06cc\u0631\u0627\u0628\u0627\u062f-\u06a9\u0631\u0645\u0627\u0646","state":22,"id":4107},{"label":"\u062f\u0627\u0648\u0631\u0627\u0646","state":22,"id":4078},{"label":"\u062f\u0631\u0628 \u0628\u0647\u0634\u062a","state":22,"id":2222},{"label":"\u062f\u0631\u06cc\u062c\u0627\u0646","state":22,"id":4070},{"label":"\u062f\u0634\u062a \u062e\u0627\u06a9","state":22,"id":4087},{"label":"\u062f\u0634\u062a\u06a9\u0627\u0631","state":22,"id":2215},{"label":"\u062f\u0648\u0633\u0627\u0631\u06cc","state":22,"id":2254},{"label":"\u062f\u0647 \u0628\u0627\u0644\u0627","state":22,"id":4066},{"label":"\u062f\u0647\u062c","state":22,"id":2249},{"label":"\u0631\u0627\u0628\u0631","state":22,"id":2224},{"label":"\u0631\u0627\u0648\u0631","state":22,"id":2226},{"label":"\u0631\u0627\u06cc\u0646","state":22,"id":2265},{"label":"\u0631\u0636\u06cc \u0627\u0628\u0627\u062f\u0628\u0627\u0644\u0627","state":22,"id":4103},{"label":"\u0631\u0641\u0633\u0646\u062c\u0627\u0646","state":22,"id":2229},{"label":"\u0631\u0648\u062f\u0628\u0627\u0631","state":22,"id":2234},{"label":"\u0631\u06cc\u062d\u0627\u0646","state":22,"id":2238},{"label":"\u0632\u0631\u0646\u062f","state":22,"id":2239},{"label":"\u0632\u0646\u06af\u06cc \u0622\u0628\u0627\u062f","state":22,"id":2274},{"label":"\u0632\u0647\u06a9\u0644\u0648\u062a","state":22,"id":2233},{"label":"\u0632\u06cc\u062f \u0622\u0628\u0627\u062f","state":22,"id":2245},{"label":"\u0633\u0631\u0686\u0634\u0645\u0647","state":22,"id":4065},{"label":"\u0633\u0631\u062e \u0642\u0644\u0639\u0647","state":22,"id":4106},{"label":"\u0633\u06cc\u0631\u062c\u0627\u0646","state":22,"id":2246},{"label":"\u0633\u06cc\u0631\u06cc\u0632","state":22,"id":4091},{"label":"\u0634\u0639\u0628\u062c\u0631\u0647","state":22,"id":4090},{"label":"\u0634\u0647\u062f\u0627\u062f","state":22,"id":2267},{"label":"\u0634\u0647\u0631 \u0628\u0627\u0628\u06a9","state":22,"id":2252},{"label":"\u0635\u0641\u0627\u0626\u06cc\u0647","state":22,"id":2228},{"label":"\u0639\u0645\u0627\u062f\u0627\u0628\u0627\u062f","state":22,"id":4096},{"label":"\u0639\u0646\u0628\u0631 \u0622\u0628\u0627\u062f","state":22,"id":2255},{"label":"\u0641\u0627\u0631\u06cc\u0627\u0628","state":22,"id":2256},{"label":"\u0641\u0647\u0631\u062c","state":22,"id":2257},{"label":"\u0641\u06cc\u0636 \u0627\u0628\u0627\u062f","state":22,"id":4069},{"label":"\u0642\u0644\u0639\u0647 \u0639\u0633\u06a9\u0631","state":22,"id":4097},{"label":"\u0642\u0644\u0639\u0647 \u06af\u0646\u062c","state":22,"id":2258},{"label":"\u06a9\u0627\u0638\u0645 \u0622\u0628\u0627\u062f","state":22,"id":2264},{"label":"\u06a9\u0628\u0648\u062a\u0631\u062e\u0627\u0646","state":22,"id":4080},{"label":"\u06a9\u0631\u0645\u0627\u0646","state":22,"id":2275},{"label":"\u06a9\u0634\u06a9\u0648\u0626\u06cc\u0647","state":22,"id":2232},{"label":"\u06a9\u0634\u06cc\u062a","state":22,"id":4068},{"label":"\u06a9\u0645\u0627\u0644 \u0627\u0628\u0627\u062f","state":22,"id":4100},{"label":"\u06a9\u0645\u0633\u0631\u062e","state":22,"id":4086},{"label":"\u06a9\u0648\u0647\u0628\u0646\u0627\u0646","state":22,"id":2278},{"label":"\u06a9\u0647\u0646\u0648\u062c","state":22,"id":2276},{"label":"\u06a9\u06cc\u0627\u0646\u0634\u0647\u0631","state":22,"id":2277},{"label":"\u06af\u0631\u0648\u0647","state":22,"id":4074},{"label":"\u06af\u0632\u06a9","state":22,"id":4075},{"label":"\u06af\u0644\u0628\u0627\u0641","state":22,"id":2268},{"label":"\u06af\u0644\u0632\u0627\u0631","state":22,"id":2216},{"label":"\u06af\u0644\u0634\u0646-\u06a9\u0631\u0645\u0627\u0646","state":22,"id":4082},{"label":"\u06af\u0646\u0628\u06a9\u06cc","state":22,"id":2235},{"label":"\u0644\u0627\u0644\u0647 \u0632\u0627\u0631","state":22,"id":2213},{"label":"\u0645\u0627\u0647\u0627\u0646","state":22,"id":2270},{"label":"\u0645\u062d\u0645\u062f \u0622\u0628\u0627\u062f","state":22,"id":2236},{"label":"\u0645\u062d\u0645\u062f\u0627\u0628\u0627\u062f\u0628\u0631\u0641\u0647","state":22,"id":4084},{"label":"\u0645\u062d\u06cc \u0622\u0628\u0627\u062f","state":22,"id":2271},{"label":"\u0645\u0631\u062f\u0647\u06a9","state":22,"id":2253},{"label":"\u0645\u0633 \u0633\u0631\u0686\u0634\u0645\u0647","state":22,"id":2230},{"label":"\u0645\u0644\u06a9 \u0627\u0628\u0627\u062f","state":22,"id":4095},{"label":"\u0645\u0646\u0648\u062c\u0627\u0646","state":22,"id":2260},{"label":"\u0645\u0648\u0645\u0646 \u0627\u0628\u0627\u062f-\u06a9\u0631\u0645\u0627\u0646","state":22,"id":4098},{"label":"\u0645\u06cc\u062c\u0627\u0646 \u0639\u0644\u06cc\u0627","state":22,"id":4104},{"label":"\u0645\u06cc\u0631\u0627\u0628\u0627\u062f\u0627\u0631\u062c\u0645\u0646\u062f","state":22,"id":4077},{"label":"\u0646\u062c\u0641 \u0634\u0647\u0631","state":22,"id":2247},{"label":"\u0646\u0631\u0645\u0627\u0634\u06cc\u0631","state":22,"id":2262},{"label":"\u0646\u0638\u0627\u0645 \u0634\u0647\u0631","state":22,"id":2261},{"label":"\u0646\u06af\u0627\u0631","state":22,"id":2217},{"label":"\u0646\u0648\u062f\u0698","state":22,"id":2259},{"label":"\u0647\u062c\u062f\u06a9","state":22,"id":2227},{"label":"\u0647\u0631\u0645\u0632\u0627\u0628\u0627\u062f","state":22,"id":4081},{"label":"\u0647\u0645\u0627\u0634\u0647\u0631","state":22,"id":2243},{"label":"\u0647\u0646\u0632\u0627","state":22,"id":2225},{"label":"\u0647\u0648\u062a\u06a9","state":22,"id":4093},{"label":"\u06cc\u0632\u062f\u0627\u0646 \u0634\u0647\u0631","state":22,"id":2240}],"23":[{"label":"\u0627\u0632\u06af\u0644\u0647","state":23,"id":2286},{"label":"\u0627\u0633\u0644\u0627\u0645 \u0622\u0628\u0627\u062f \u063a\u0631\u0628","state":23,"id":2280},{"label":"\u0627\u06af\u0627\u0647 \u0639\u0644\u06cc\u0627","state":23,"id":4121},{"label":"\u0628\u0627\u0646\u0648\u0631\u0647","state":23,"id":2281},{"label":"\u0628\u0627\u0648\u0644\u0647","state":23,"id":4119},{"label":"\u0628\u0627\u06cc\u0646\u06af\u0627\u0646","state":23,"id":2282},{"label":"\u0628\u06cc\u0633\u062a\u0648\u0646","state":23,"id":2303},{"label":"\u067e\u0627\u0648\u0647","state":23,"id":2283},{"label":"\u062a\u0627\u0632\u0647 \u0622\u0628\u0627\u062f","state":23,"id":2287},{"label":"\u062a\u067e\u0647 \u0631\u0634","state":23,"id":4131},{"label":"\u062a\u0631\u06a9 \u0648\u06cc\u0633","state":23,"id":4129},{"label":"\u062c\u0639\u0641\u0631\u0627\u0628\u0627\u062f-\u06a9\u0631\u0645\u0627\u0646\u0634\u0627\u0647","state":23,"id":4111},{"label":"\u062c\u0648\u0627\u0646\u0631\u0648\u062f","state":23,"id":2288},{"label":"\u062d\u0633\u0646 \u0627\u0628\u0627\u062f-\u06a9\u0631\u0645\u0627\u0646\u0634\u0627\u0647","state":23,"id":4127},{"label":"\u062d\u0645\u06cc\u0644","state":23,"id":2279},{"label":"\u062e\u0633\u0631\u0648\u06cc","state":23,"id":4132},{"label":"\u062f\u0631\u06a9\u0647","state":23,"id":4118},{"label":"\u062f\u0648\u0631\u062f\u0634\u062a","state":23,"id":4109},{"label":"\u062f\u0648\u0644\u062a \u0627\u0628\u0627\u062f-\u06a9\u0631\u0645\u0627\u0646\u0634\u0627\u0647","state":23,"id":4134},{"label":"\u062f\u0647\u0644\u0642\u06cc\u0646","state":23,"id":4117},{"label":"\u0631\u0628\u0627\u0637","state":23,"id":2306},{"label":"\u0631\u0648\u0627\u0646\u0633\u0631","state":23,"id":2293},{"label":"\u0631\u06cc\u062c\u0627\u0628","state":23,"id":2290},{"label":"\u0632\u0627\u0648\u0644\u0647 \u0639\u0644\u06cc\u0627","state":23,"id":4125},{"label":"\u0633\u0631 \u067e\u0644 \u0630\u0647\u0627\u0628","state":23,"id":2294},{"label":"\u0633\u0631\u0627\u0628 \u0630\u0647\u0627\u0628","state":23,"id":4128},{"label":"\u0633\u0631\u0645\u0633\u062a","state":23,"id":2301},{"label":"\u0633\u0637\u0631","state":23,"id":2296},{"label":"\u0633\u0644\u0637\u0627\u0646 \u0627\u0628\u0627\u062f-\u06a9\u0631\u0645\u0627\u0646\u0634\u0627\u0647","state":23,"id":4115},{"label":"\u0633\u0646\u0642\u0631","state":23,"id":2295},{"label":"\u0633\u0646\u0642\u0631\u0627\u0628\u0627\u062f","state":23,"id":4110},{"label":"\u0633\u0648\u0645\u0627\u0631","state":23,"id":2299},{"label":"\u0634\u0627\u0647\u0648","state":23,"id":2292},{"label":"\u0635\u062d\u0646\u0647","state":23,"id":2298},{"label":"\u0641\u0631\u0627\u0645\u0627\u0646","state":23,"id":4114},{"label":"\u0641\u0634","state":23,"id":4113},{"label":"\u0642\u0632\u0648\u06cc\u0646\u0647","state":23,"id":4116},{"label":"\u0642\u0635\u0631 \u0634\u06cc\u0631\u06cc\u0646","state":23,"id":2300},{"label":"\u0642\u0644\u0639\u0647 \u0634\u06cc\u0627\u0646","state":23,"id":4126},{"label":"\u0642\u06cc\u0644\u0627\u0646","state":23,"id":4133},{"label":"\u06a9\u0631\u06a9\u0633\u0627\u0631","state":23,"id":4123},{"label":"\u06a9\u0631\u0645\u0627\u0646\u0634\u0627\u0647","state":23,"id":2307},{"label":"\u06a9\u0631\u0646\u062f \u063a\u0631\u0628","state":23,"id":2291},{"label":"\u06a9\u0646\u062f\u0648\u0644\u0647","state":23,"id":4124},{"label":"\u06a9\u0646\u06af\u0627\u0648\u0631","state":23,"id":2310},{"label":"\u06a9\u0648\u0632\u0631\u0627\u0646","state":23,"id":2308},{"label":"\u06a9\u06cc\u0648\u0647 \u0646\u0627\u0646","state":23,"id":4122},{"label":"\u06af\u0631\u062f\u06a9\u0627\u0646\u0647 \u0639\u0644\u06cc\u0627","state":23,"id":4120},{"label":"\u06af\u0648\u062f\u06cc\u0646","state":23,"id":2309},{"label":"\u06af\u0647\u0648\u0627\u0631\u0647","state":23,"id":2289},{"label":"\u06af\u06cc\u0644\u0627\u0646\u063a\u0631\u0628","state":23,"id":2302},{"label":"\u0645\u0631\u0632\u0628\u0627\u0646\u06cc","state":23,"id":4112},{"label":"\u0645\u06cc\u0627\u0646 \u0631\u0627\u0647\u0627\u0646","state":23,"id":2297},{"label":"\u0645\u06cc\u0631\u0627\u0628\u0627\u062f-\u06a9\u0631\u0645\u0627\u0646\u0634\u0627\u0647","state":23,"id":4135},{"label":"\u0646\u0633\u0627\u0631\u062f\u06cc\u0631\u0647","state":23,"id":4130},{"label":"\u0646\u0648\u062f\u0634\u0647","state":23,"id":2284},{"label":"\u0646\u0648\u0633\u0648\u062f","state":23,"id":2285},{"label":"\u0647\u0631\u0633\u06cc\u0646","state":23,"id":2304},{"label":"\u0647\u0641\u062a \u0627\u0634\u06cc\u0627\u0646","state":23,"id":4108},{"label":"\u0647\u0644\u0634\u06cc","state":23,"id":2305}],"24":[{"label":"\u0628\u0627\u0628\u0627\u06a9\u0644\u0627\u0646","state":24,"id":4138},{"label":"\u0628\u0627\u0634\u062a","state":24,"id":2311},{"label":"\u067e\u0627\u062a\u0627\u0648\u0647","state":24,"id":2320},{"label":"\u0686\u0627\u0647 \u062a\u0644\u062e\u0627\u0628 \u0639\u0644\u06cc\u0627","state":24,"id":4142},{"label":"\u0686\u0631\u0627\u0645","state":24,"id":2319},{"label":"\u0686\u06cc\u062a\u0627\u0628","state":24,"id":2317},{"label":"\u062f\u0648\u06af\u0646\u0628\u062f\u0627\u0646","state":24,"id":2322},{"label":"\u062f\u0647\u062f\u0634\u062a","state":24,"id":2326},{"label":"\u062f\u06cc\u0634\u0645\u0648\u06a9","state":24,"id":2325},{"label":"\u062f\u06cc\u0644","state":24,"id":4140},{"label":"\u0633\u0631\u0628\u06cc\u0634\u0647-\u06a9\u0647\u06af\u06cc\u0644\u0648\u06cc\u0647 \u0648 \u0628\u0648\u06cc\u0631\u0627\u062d\u0645\u062f","state":24,"id":4143},{"label":"\u0633\u0631\u0641\u0627\u0631\u06cc\u0627\u0628","state":24,"id":2318},{"label":"\u0633\u0648\u0642","state":24,"id":2327},{"label":"\u0633\u06cc \u0633\u062e\u062a","state":24,"id":2321},{"label":"\u0634\u0627\u0647 \u0628\u0647\u0631\u0627\u0645","state":24,"id":4141},{"label":"\u0642\u0644\u0639\u0647 \u062f\u062e\u062a\u0631","state":24,"id":4137},{"label":"\u0642\u0644\u0639\u0647 \u0631\u0626\u06cc\u0633\u06cc","state":24,"id":2324},{"label":"\u0642\u0644\u0639\u0647 \u0631\u06cc\u06cc\u0633\u06cc","state":24,"id":4136},{"label":"\u06af\u0631\u0627\u0628 \u0633\u0641\u0644\u06cc","state":24,"id":2313},{"label":"\u0644\u0646\u062f\u0647","state":24,"id":2323},{"label":"\u0644\u06cc\u06a9\u06a9","state":24,"id":2312},{"label":"\u0645\u0627\u062f\u0648\u0627\u0646","state":24,"id":2315},{"label":"\u0645\u0627\u0631\u06af\u0648\u0646","state":24,"id":2314},{"label":"\u0645\u0638\u0641\u0631\u0627\u0628\u0627\u062f","state":24,"id":4139},{"label":"\u0645\u06cc\u0645\u0646\u062f-\u06a9\u0647\u06af\u06cc\u0644\u0648\u06cc\u0647 \u0648 \u0628\u0648\u06cc\u0631\u0627\u062d\u0645\u062f","state":24,"id":4144},{"label":"\u06cc\u0627\u0633\u0648\u062c","state":24,"id":2316}],"25":[{"label":"\u0622\u0632\u0627\u062f \u0634\u0647\u0631","state":25,"id":2329},{"label":"\u0622\u0642 \u0642\u0644\u0627","state":25,"id":2331},{"label":"\u0627\u0646\u0628\u0627\u0631 \u0622\u0644\u0648\u0645","state":25,"id":2332},{"label":"\u0627\u06cc\u0646\u0686\u0647 \u0628\u0631\u0648\u0646","state":25,"id":2350},{"label":"\u0628\u0646\u062f\u0631 \u062a\u0631\u06a9\u0645\u0646","state":25,"id":2335},{"label":"\u0628\u0646\u062f\u0631 \u06af\u0632","state":25,"id":2333},{"label":"\u062a\u0627\u062a\u0627\u0631 \u0639\u0644\u06cc\u0627","state":25,"id":2337},{"label":"\u062a\u0642\u06cc \u0627\u0628\u0627\u062f-\u06af\u0644\u0633\u062a\u0627\u0646","state":25,"id":3725},{"label":"\u062c\u0644\u06cc\u0646","state":25,"id":2346},{"label":"\u062d\u0627\u062c\u06cc\u06a9\u0644\u0627\u062a\u0647","state":25,"id":3726},{"label":"\u062e\u0627\u0646 \u0628\u0628\u06cc\u0646","state":25,"id":2336},{"label":"\u062f\u0644\u0646\u062f","state":25,"id":2338},{"label":"\u0631\u0627\u0645\u06cc\u0627\u0646","state":25,"id":2339},{"label":"\u0633\u0631\u062e\u0646\u06a9\u0644\u0627\u062a\u0647","state":25,"id":2345},{"label":"\u0633\u0646\u06af\u062f\u0648\u06cc\u0646","state":25,"id":2340},{"label":"\u0633\u06cc\u0645\u06cc\u0646 \u0634\u0647\u0631","state":25,"id":2348},{"label":"\u0639\u0632\u06cc\u0632\u0627\u0628\u0627\u062f-\u06af\u0644\u0633\u062a\u0627\u0646","state":25,"id":3728},{"label":"\u0639\u0644\u06cc \u0622\u0628\u0627\u062f","state":25,"id":2341},{"label":"\u0641\u0627\u0636\u0644 \u0622\u0628\u0627\u062f","state":25,"id":2343},{"label":"\u0641\u0631\u0627\u063a\u06cc","state":25,"id":2355},{"label":"\u0642\u0631\u0642","state":25,"id":4501},{"label":"\u06a9\u0631\u062f \u06a9\u0648\u06cc","state":25,"id":2354},{"label":"\u06a9\u0631\u0646\u062f","state":25,"id":3727},{"label":"\u06a9\u0644\u0627\u0644\u0647","state":25,"id":2356},{"label":"\u06af\u0627\u0644\u06cc\u06a9\u0634","state":25,"id":2344},{"label":"\u06af\u0631\u06af\u0627\u0646","state":25,"id":2347},{"label":"\u06af\u0645\u06cc\u0634 \u062a\u067e\u0647","state":25,"id":2349},{"label":"\u06af\u0646\u0628\u062f\u06a9\u0627\u0648\u0648\u0633","state":25,"id":2351},{"label":"\u0645\u0631\u0627\u0648\u0647 \u062a\u067e\u0647","state":25,"id":2352},{"label":"\u0645\u0632\u0631\u0639\u0647","state":25,"id":2342},{"label":"\u0645\u06cc\u0646\u0648\u062f\u0634\u062a","state":25,"id":2353},{"label":"\u0646\u06af\u06cc\u0646 \u0634\u0647\u0631","state":25,"id":2330},{"label":"\u0646\u0648\u062f\u0647 \u062e\u0627\u0646\u062f\u0648\u0632","state":25,"id":2328},{"label":"\u0646\u0648\u06a9\u0646\u062f\u0647","state":25,"id":2334}],"26":[{"label":"\u0622\u0633\u062a\u0627\u0631\u0627","state":26,"id":2358},{"label":"\u0622\u0633\u062a\u0627\u0646\u0647 \u0627\u0634\u0631\u0641\u06cc\u0647","state":26,"id":2359},{"label":"\u0622\u0633\u062a\u0627\u0646\u0647 \u067e\u06cc\u0646\u0686\u0627\u0647","state":26,"id":3740},{"label":"\u0622\u0633\u062a\u0627\u0646\u0647 \u062a\u062c\u0646 \u06af\u0648\u06a9\u0647","state":26,"id":3739},{"label":"\u0622\u0633\u062a\u0627\u0646\u0647 \u062a\u0645\u0686\u0627\u0644","state":26,"id":4595},{"label":"\u0622\u0633\u062a\u0627\u0646\u0647 \u0686\u0648\u0631\u06a9\u0648\u0686\u0627\u0646","state":26,"id":4596},{"label":"\u0622\u0633\u062a\u0627\u0646\u0647 \u0686\u0647\u0627\u0631\u062f\u0647","state":26,"id":2366},{"label":"\u0622\u0633\u062a\u0627\u0646\u0647 \u062f\u0647\u0633\u0631","state":26,"id":4597},{"label":"\u0622\u0633\u062a\u0627\u0646\u0647 \u0633\u0627\u0644\u06a9 \u062f\u0647","state":26,"id":4598},{"label":"\u0622\u0633\u062a\u0627\u0646\u0647 \u0633\u0648\u062e\u062a\u0647 \u06a9\u0648\u0647","state":26,"id":4599},{"label":"\u0622\u0633\u062a\u0627\u0646\u0647 \u0635\u0641\u0631\u0627 \u0628\u0633\u062a\u0647","state":26,"id":4600},{"label":"\u0622\u0633\u062a\u0627\u0646\u0647 \u06a9\u0634\u0644","state":26,"id":4601},{"label":"\u0622\u0633\u062a\u0627\u0646\u0647 \u06a9\u06cc\u0633\u0645","state":26,"id":4602},{"label":"\u0627\u0628\u06a9\u0646\u0627\u0631","state":26,"id":3785},{"label":"\u0627\u062d\u0645\u062f \u0633\u0631\u06af\u0648\u0631\u0627\u0628","state":26,"id":2387},{"label":"\u0627\u0633\u0627\u0644\u0645","state":26,"id":2392},{"label":"\u0627\u0633\u06a9\u0648\u0644\u06a9","state":26,"id":3772},{"label":"\u0627\u0645\u0644\u0634","state":26,"id":2362},{"label":"\u0627\u0646\u0632\u0644\u06cc \u0632\u06cc\u0628\u0627\u06a9\u0646\u0627\u0631","state":26,"id":4509},{"label":"\u0627\u0646\u0632\u0644\u06cc \u0637\u0627\u0644\u0628 \u0622\u0628\u0627\u062f","state":26,"id":4607},{"label":"\u0628\u0627\u0631\u06a9\u0648\u0633\u0631\u0627","state":26,"id":3758},{"label":"\u0628\u0627\u0632\u0627\u0631 \u062c\u0645\u0639\u0647","state":26,"id":2407},{"label":"\u0628\u0627\u0632\u0627\u0631\u062e\u0637\u0628\u0647 \u0633\u0631\u0627","state":26,"id":3746},{"label":"\u0628\u0631\u0647 \u0633\u0631","state":26,"id":2373},{"label":"\u0628\u0644\u062a\u0631\u06a9","state":26,"id":3780},{"label":"\u0628\u0644\u0633\u0628\u0646\u0647","state":26,"id":3734},{"label":"\u0628\u0646\u062f\u0631 \u0627\u0646\u0632\u0644\u06cc","state":26,"id":2363},{"label":"\u0628\u0646\u062f\u0631 \u0627\u0646\u0632\u0644\u06cc _ \u0645\u0646\u0637\u0642\u0647 \u0622\u0632\u0627\u062f","state":26,"id":4521},{"label":"\u0628\u0646\u062f\u0631 \u0627\u0646\u0632\u0644\u06cc_\u0622\u0628\u06a9\u0646\u0627\u0631","state":26,"id":4513},{"label":"\u0628\u0646\u062f\u0631 \u0627\u0646\u0632\u0644\u06cc_\u062a\u0631\u0628\u0647 \u06af\u0648\u062f\u0647","state":26,"id":4514},{"label":"\u0628\u0646\u062f\u0631 \u0627\u0646\u0632\u0644\u06cc_\u062c\u0641\u0631\u0648\u062f","state":26,"id":4515},{"label":"\u0628\u0646\u062f\u0631 \u0627\u0646\u0632\u0644\u06cc_\u062d\u0633\u0646 \u0631\u0648\u062f","state":26,"id":4516},{"label":"\u0628\u0646\u062f\u0631 \u0627\u0646\u0632\u0644\u06cc_\u0633\u0646\u06af\u0627\u0686\u06cc\u0646","state":26,"id":4518},{"label":"\u0628\u0646\u062f\u0631 \u0627\u0646\u0632\u0644\u06cc_\u0634\u0647\u0631 \u0635\u0646\u0639\u062a\u06cc","state":26,"id":4522},{"label":"\u0628\u0646\u062f\u0631 \u0627\u0646\u0632\u0644\u06cc_\u0639\u0644\u06cc \u0622\u0628\u0627\u062f","state":26,"id":4517},{"label":"\u0628\u0646\u062f\u0631 \u0627\u0646\u0632\u0644\u06cc_\u06a9\u067e\u0648\u0631\u0686\u0627\u0644","state":26,"id":4520},{"label":"\u0628\u0646\u062f\u0631\u0627\u0646\u0632\u0644\u06cc_\u0634\u0627\u0646\u06af\u0647\u0627\u06cc \u067e\u0631\u062f\u0647","state":26,"id":4519},{"label":"\u0628\u06cc\u0648\u0631\u0632\u06cc\u0646","state":26,"id":3767},{"label":"\u067e\u0627\u06cc\u06cc\u0646 \u0645\u062d\u0644\u0647 \u067e\u0627\u0634\u0627\u06a9\u06cc","state":26,"id":3755},{"label":"\u067e\u0631\u06af\u0627\u067e\u0634\u062a \u0645\u0647\u062f\u06cc \u062e\u0627\u0646\u06cc","state":26,"id":3766},{"label":"\u067e\u0631\u0648\u0634 \u067e\u0627\u06cc\u06cc\u0646","state":26,"id":3776},{"label":"\u067e\u0631\u0647 \u0633\u0631","state":26,"id":2371},{"label":"\u067e\u0644\u0627\u0633\u06cc","state":26,"id":3747},{"label":"\u067e\u0644\u0646\u06af \u067e\u0627\u0631\u0647","state":26,"id":3748},{"label":"\u067e\u0648\u0646\u0644","state":26,"id":3784},{"label":"\u062a\u0648\u062a\u06a9\u0627\u0628\u0646","state":26,"id":2374},{"label":"\u062c\u0646\u06af \u0633\u0631\u0627","state":26,"id":3779},{"label":"\u062c\u0648\u06a9\u0646\u062f\u0627\u0646 \u0628\u0632\u0631\u06af","state":26,"id":3745},{"label":"\u062c\u06cc\u0631\u06a9\u0648\u06cc\u0647","state":26,"id":3736},{"label":"\u062c\u06cc\u0631\u0646\u062f\u0647","state":26,"id":2375},{"label":"\u062c\u06cc\u0631\u0647\u0646\u062f\u0647","state":26,"id":3730},{"label":"\u0686\u0627\u0628\u06a9\u0633\u0631","state":26,"id":2380},{"label":"\u0686\u0627\u067e\u0627\u0631\u062e\u0627\u0646\u0647","state":26,"id":3735},{"label":"\u0686\u0648\u0628\u0631","state":26,"id":2393},{"label":"\u062d\u0633\u0646 \u0633\u0631\u0627","state":26,"id":3777},{"label":"\u062d\u0648\u06cc\u0642","state":26,"id":2394},{"label":"\u062d\u06cc\u0631\u0627\u0646","state":26,"id":3754},{"label":"\u062e\u0631\u0627\u0631\u0648\u062f","state":26,"id":3760},{"label":"\u062e\u0634\u06a9\u0628\u06cc\u062c\u0627\u0631","state":26,"id":2364},{"label":"\u062e\u0645\u0627\u0645","state":26,"id":2365},{"label":"\u062e\u0645\u0627\u0645 \u0686\u0648\u06a9\u0627\u0645","state":26,"id":4507},{"label":"\u062e\u0645\u0627\u0645 \u062e\u0634\u06a9\u0628\u06cc\u062c\u0627\u0631","state":26,"id":4528},{"label":"\u062e\u0645\u0627\u0645 \u062e\u0648\u0627\u0686\u06a9\u06cc\u0646","state":26,"id":4523},{"label":"\u062e\u0645\u0627\u0645 \u062f\u0627\u0641\u0686\u0627\u0647","state":26,"id":4524},{"label":"\u062e\u0645\u0627\u0645 \u0634\u06cc\u062c\u0627\u0646","state":26,"id":4525},{"label":"\u062e\u0645\u0627\u0645 \u0641\u0634\u062a\u06a9\u0647","state":26,"id":4526},{"label":"\u062e\u0645\u0627\u0645 \u0644\u0644\u0647 \u06a9\u0627\u0647","state":26,"id":4527},{"label":"\u062e\u0645\u0627\u0645 \u0645\u0631\u0632\u062f\u0634\u062a","state":26,"id":4508},{"label":"\u062f\u0633\u062a\u06a9","state":26,"id":3765},{"label":"\u062f\u0647\u0634\u0627\u0644","state":26,"id":3764},{"label":"\u062f\u06cc\u0644\u0645\u0627\u0646","state":26,"id":2385},{"label":"\u062f\u06cc\u0648\u0634\u0644","state":26,"id":3775},{"label":"\u0631\u0627\u0646\u06a9\u0648\u0647","state":26,"id":2361},{"label":"\u0631\u062d\u06cc\u0645 \u0622\u0628\u0627\u062f","state":26,"id":2381},{"label":"\u0631\u0633\u062a\u0645 \u0622\u0628\u0627\u062f","state":26,"id":2376},{"label":"\u0631\u0634\u062a","state":26,"id":2368},{"label":"\u0631\u0634\u062a \u0627\u0645\u0627\u0645 \u0632\u0627\u062f\u0647 \u0647\u0627\u0634\u0645","state":26,"id":4504},{"label":"\u0631\u0634\u062a \u067e\u06cc\u0631 \u0628\u0627\u0632\u0627\u0631","state":26,"id":4503},{"label":"\u0631\u0634\u062a \u067e\u06cc\u0631\u062f\u0647","state":26,"id":4533},{"label":"\u0631\u0634\u062a \u067e\u06cc\u0644\u0647 \u0645\u0644\u0627","state":26,"id":4530},{"label":"\u0631\u0634\u062a \u062a\u062e\u062a\u0647 \u067e\u0644","state":26,"id":4531},{"label":"\u0631\u0634\u062a \u062c\u06cc\u0631\u062f\u0647","state":26,"id":4532},{"label":"\u0631\u0634\u062a \u0631\u062c\u0628 \u0622\u0628\u0627\u062f","state":26,"id":4529},{"label":"\u0631\u0634\u062a \u0633\u0631\u0627\u0648\u0627\u0646","state":26,"id":3732},{"label":"\u0631\u0634\u062a \u0633\u0646\u06af\u0631","state":26,"id":4534},{"label":"\u0631\u0634\u062a \u0634\u0647\u0631 \u0635\u0646\u0639\u062a\u06cc \u0644\u0627\u06a9\u0627\u0646","state":26,"id":4535},{"label":"\u0631\u0634\u062a \u0641\u062e\u0628","state":26,"id":4502},{"label":"\u0631\u0634\u062a \u0641\u0644\u06a9\u062f\u0647","state":26,"id":4536},{"label":"\u0631\u0634\u062a \u06a9\u0641\u062a\u0631\u0648\u062f","state":26,"id":4537},{"label":"\u0631\u0634\u062a \u06a9\u0645\u0627\u06a9\u0644","state":26,"id":4538},{"label":"\u0631\u0634\u062a \u0644\u0627\u06a9\u0627\u0646","state":26,"id":4539},{"label":"\u0631\u0634\u062a \u0645\u0628\u0627\u0631\u06a9 \u0622\u0628\u0627\u062f","state":26,"id":4540},{"label":"\u0631\u0636\u0648\u0627\u0646\u0634\u0647\u0631","state":26,"id":2372},{"label":"\u0631\u0648\u062f\u0628\u0627\u0631","state":26,"id":2377},{"label":"\u0631\u0648\u062f\u0633\u0631","state":26,"id":2382},{"label":"\u0633\u0644\u0648\u0634","state":26,"id":3774},{"label":"\u0633\u06cc\u0627\u0647\u06a9\u0644","state":26,"id":2386},{"label":"\u0633\u06cc\u0628\u0644\u06cc","state":26,"id":3751},{"label":"\u0634\u0641\u062a","state":26,"id":2388},{"label":"\u0634\u0644\u0645\u0627\u0646","state":26,"id":2405},{"label":"\u0634\u0648\u06cc\u06cc\u0644","state":26,"id":3783},{"label":"\u0634\u0647\u0631 \u0635\u0646\u0639\u062a\u06cc","state":26,"id":4505},{"label":"\u0634\u06cc\u0631\u06a9\u0648\u0647 \u0686\u0647\u0627\u0631\u062f\u0647","state":26,"id":3763},{"label":"\u0634\u06cc\u0631\u06cc\u0646 \u0646\u0633\u0627","state":26,"id":3759},{"label":"\u0634\u06cc\u0644\u0647 \u0648\u0634\u062a","state":26,"id":3744},{"label":"\u0635\u0648\u0645\u0639\u0647 \u0633\u0631\u0627","state":26,"id":2390},{"label":"\u0635\u0648\u0645\u0639\u0647 \u0633\u0631\u0627  \u0637\u0627\u0647\u0631 \u06af\u0648\u0631\u0627\u0628","state":26,"id":4555},{"label":"\u0635\u0648\u0645\u0639\u0647 \u0633\u0631\u0627  \u0641\u0634\u062e\u0627\u0645","state":26,"id":4556},{"label":"\u0635\u0648\u0645\u0639\u0647 \u0633\u0631\u0627 \u0686\u0648\u0628\u0647","state":26,"id":4547},{"label":"\u0635\u0648\u0645\u0639\u0647 \u0633\u0631\u0627 \u062e\u0631\u0627\u0637 \u0645\u062d\u0644\u0647","state":26,"id":4548},{"label":"\u0635\u0648\u0645\u0639\u0647 \u0633\u0631\u0627 \u062f\u0648\u06af\u0648\u0631","state":26,"id":4546},{"label":"\u0635\u0648\u0645\u0639\u0647 \u0633\u0631\u0627 \u0634\u06cc\u062e \u0645\u062d\u0644\u0647","state":26,"id":4552},{"label":"\u0635\u0648\u0645\u0639\u0647 \u0633\u0631\u0627 \u0635\u0648\u0641\u06cc\u0627\u0646\u062f\u0647","state":26,"id":4550},{"label":"\u0635\u0648\u0645\u0639\u0647 \u0633\u0631\u0627 \u0636\u06cc\u0627\u0628\u0631","state":26,"id":4554},{"label":"\u0635\u0648\u0645\u0639\u0647 \u0633\u0631\u0627 \u0642\u0635\u0627\u0628 \u0633\u0631\u0627","state":26,"id":4557},{"label":"\u0635\u0648\u0645\u0639\u0647 \u0633\u0631\u0627 \u06af\u0648\u0631\u0627\u0628 \u0632\u0631\u0645\u06cc\u062e","state":26,"id":4558},{"label":"\u0635\u0648\u0645\u0639\u0647 \u0633\u0631\u0627 \u0644\u06cc\u0641\u0634\u0627\u06af\u0631\u062f","state":26,"id":4559},{"label":"\u0635\u0648\u0645\u0639\u0647 \u0633\u0631\u0627 \u0644\u06cc\u0645\u0648\u062f\u0647","state":26,"id":4560},{"label":"\u0635\u0648\u0645\u0639\u0647 \u0633\u0631\u0627 \u0646\u0641\u0648\u062a","state":26,"id":4561},{"label":"\u0635\u0648\u0645\u0639\u0647 \u0633\u0631\u0627 \u0648\u0627\u0642\u0639 \u062f\u0634\u062a","state":26,"id":4562},{"label":"\u0635\u0648\u0645\u0639\u0647 \u0633\u0631\u0627 \u0647\u0646\u062f \u062e\u0627\u0644\u0647","state":26,"id":4549},{"label":"\u0637\u0648\u0644 \u0644\u0627\u062a","state":26,"id":3778},{"label":"\u0639\u0644\u06cc \u0627\u0628\u0627\u062f-\u06af\u06cc\u0644\u0627\u0646","state":26,"id":3770},{"label":"\u0641\u0648\u0645\u0646","state":26,"id":2398},{"label":"\u0641\u0648\u0645\u0646 \u0627\u0644\u06cc\u0627\u0646","state":26,"id":4543},{"label":"\u0641\u0648\u0645\u0646 \u062e\u0634\u06a9\u0646\u0648\u062f\u0647\u06cc\u0627\u0646","state":26,"id":4544},{"label":"\u0641\u0648\u0645\u0646 \u062f\u0647\u0633\u062a\u0627\u0646 \u06af\u0634\u062a","state":26,"id":4542},{"label":"\u0641\u0648\u0645\u0646 \u0632\u06cc\u062f\u0647","state":26,"id":4545},{"label":"\u0641\u0648\u0645\u0646 \u0633\u06cc\u0627\u0647 \u067e\u06cc\u0631\u0627\u0646","state":26,"id":4551},{"label":"\u0641\u0648\u0645\u0646 \u0634\u0627\u0644\u062a\u0648\u06a9","state":26,"id":3749},{"label":"\u0641\u0648\u0645\u0646 \u0634\u0627\u0644\u06a9\u0648\u0647","state":26,"id":4553},{"label":"\u0641\u0648\u0645\u0646 \u0641\u0648\u0634\u0647","state":26,"id":4593},{"label":"\u0641\u0648\u0645\u0646 \u0642\u0644\u0639\u0647 \u0631\u0648\u062f\u062e\u0627\u0646","state":26,"id":4541},{"label":"\u0641\u0648\u0645\u0646 \u06a9\u0645\u0627\u062f\u0648\u0644","state":26,"id":3742},{"label":"\u0641\u0648\u0645\u0646 \u06af\u0648\u0631\u0627\u0628 \u067e\u0633","state":26,"id":2391},{"label":"\u0641\u0648\u0645\u0646 \u0644\u0648\u0644\u0645\u0627\u0646","state":26,"id":4510},{"label":"\u0641\u0648\u0645\u0646 \u0645\u0627\u06a9\u0644\u0648\u0627\u0646","state":26,"id":2397},{"label":"\u0641\u0648\u0645\u0646 \u0646\u0648\u06af\u0648\u0631\u0627\u0628","state":26,"id":4594},{"label":"\u06a9\u062c\u06cc\u062f","state":26,"id":3781},{"label":"\u06a9\u0644\u0627\u0686\u0627\u06cc","state":26,"id":2384},{"label":"\u06a9\u0644\u0634\u062a\u0631","state":26,"id":3771},{"label":"\u06a9\u0644\u06cc\u0634\u0645","state":26,"id":3769},{"label":"\u06a9\u0648\u062a\u0647 \u06a9\u0648\u0645\u0647","state":26,"id":3753},{"label":"\u06a9\u0648\u0686\u0635\u0641\u0647\u0627\u0646","state":26,"id":2370},{"label":"\u06a9\u0648\u0686\u0635\u0641\u0647\u0627\u0646 \u062c\u0648\u0631\u0628\u06cc\u062c\u0627\u0631\u06a9\u0644","state":26,"id":4606},{"label":"\u06a9\u0648\u0686\u0635\u0641\u0647\u0627\u0646 \u062d\u0633\u0646 \u0622\u0628\u0627\u062f","state":26,"id":4563},{"label":"\u06a9\u0648\u0686\u0635\u0641\u0647\u0627\u0646 \u0633\u062f\u0647","state":26,"id":4564},{"label":"\u06a9\u0648\u0686\u0635\u0641\u0647\u0627\u0646 \u0633\u0646\u06af\u0631","state":26,"id":4565},{"label":"\u06a9\u0648\u0686\u0635\u0641\u0647\u0627\u0646 \u0644\u0627\u0644\u0647 \u062f\u0634\u062a","state":26,"id":4566},{"label":"\u06a9\u0648\u06a9\u0646\u0647","state":26,"id":3773},{"label":"\u06a9\u06cc\u0627\u0634\u0647\u0631","state":26,"id":2360},{"label":"\u06af\u0631\u0645\u0627\u0628\u062f\u0634\u062a","state":26,"id":3782},{"label":"\u06af\u0631\u0645\u0627\u0648\u0631","state":26,"id":3756},{"label":"\u06af\u0634\u062a-\u06af\u06cc\u0644\u0627\u0646","state":26,"id":3738},{"label":"\u0644\u0627\u0647\u06cc\u062c\u0627\u0646","state":26,"id":2401},{"label":"\u0644\u0627\u0647\u06cc\u062c\u0627\u0646 \u0622\u0647\u0646\u062f\u0627\u0646","state":26,"id":4580},{"label":"\u0644\u0627\u0647\u06cc\u062c\u0627\u0646 \u0628\u0627\u0632\u06a9\u06cc\u0627 \u06af\u0648\u0631\u0627\u0628","state":26,"id":4581},{"label":"\u0644\u0627\u0647\u06cc\u062c\u0627\u0646 \u0628\u06cc\u062c\u0627\u0631 \u0628\u0646\u0647","state":26,"id":4582},{"label":"\u0644\u0627\u0647\u06cc\u062c\u0627\u0646 \u067e\u0627\u0634\u0627\u06a9\u06cc","state":26,"id":4605},{"label":"\u0644\u0627\u0647\u06cc\u062c\u0627\u0646 \u062c\u0648\u0627\u0647\u0631 \u067e\u0634\u062a\u0647","state":26,"id":4583},{"label":"\u0644\u0627\u0647\u06cc\u062c\u0627\u0646 \u0686\u0641\u0644","state":26,"id":4584},{"label":"\u0644\u0627\u0647\u06cc\u062c\u0627\u0646 \u0631\u0648\u062f\u0628\u0646\u0647","state":26,"id":4585},{"label":"\u0644\u0627\u0647\u06cc\u062c\u0627\u0646 \u0633\u06cc\u0627\u0647\u06af\u0648\u0631\u0627\u0628","state":26,"id":4586},{"label":"\u0644\u0627\u0647\u06cc\u062c\u0627\u0646 \u0634\u0647\u0631 \u0635\u0646\u0639\u062a\u06cc","state":26,"id":4592},{"label":"\u0644\u0627\u0647\u06cc\u062c\u0627\u0646 \u06a9\u0648\u0686\u06a9\u062f\u0647","state":26,"id":4587},{"label":"\u0644\u0627\u0647\u06cc\u062c\u0627\u0646 \u06a9\u0648\u0634\u0627\u0644","state":26,"id":4588},{"label":"\u0644\u0627\u0647\u06cc\u062c\u0627\u0646 \u0644\u0641\u0645\u062c\u0627\u0646","state":26,"id":4589},{"label":"\u0644\u0627\u0647\u06cc\u062c\u0627\u0646 \u0644\u06cc\u0627\u0644\u0633\u062a\u0627\u0646","state":26,"id":4604},{"label":"\u0644\u0627\u0647\u06cc\u062c\u0627\u0646 \u0646\u062e\u062c\u06cc\u0631 \u06a9\u0644\u0627\u06cc\u0647","state":26,"id":4590},{"label":"\u0644\u0627\u0647\u06cc\u062c\u0627\u0646 \u0646\u0648\u0628\u06cc\u062c\u0627\u0631","state":26,"id":4591},{"label":"\u0644\u0633\u06a9\u0648\u06a9\u0644\u0627\u06cc\u0647","state":26,"id":3761},{"label":"\u0644\u0634\u062a \u0646\u0634\u0627\u0621","state":26,"id":2367},{"label":"\u0644\u0646\u06af\u0631\u0648\u062f","state":26,"id":2404},{"label":"\u0644\u0646\u06af\u0631\u0648\u062f \u0627\u0637\u0627\u0642\u0648\u0631","state":26,"id":4567},{"label":"\u0644\u0646\u06af\u0631\u0648\u062f \u067e\u0631\u0634\u06a9\u0648\u0647","state":26,"id":4568},{"label":"\u0644\u0646\u06af\u0631\u0648\u062f \u067e\u06cc\u0631 \u067e\u0634\u062a\u0647","state":26,"id":4569},{"label":"\u0644\u0646\u06af\u0631\u0648\u062f \u0686\u0627\u0641 \u0648 \u0686\u0645\u062e\u0627\u0644\u0647","state":26,"id":4570},{"label":"\u0644\u0646\u06af\u0631\u0648\u062f \u062e\u0631\u0627\u0637 \u0645\u062d\u0644\u0647","state":26,"id":4571},{"label":"\u0644\u0646\u06af\u0631\u0648\u062f \u062f\u0631\u06cc\u0627\u0633\u0631","state":26,"id":4572},{"label":"\u0644\u0646\u06af\u0631\u0648\u062f \u062f\u0647\u0633\u062a\u0627\u0646 \u06af\u0644 \u0633\u0641\u06cc\u062f","state":26,"id":4577},{"label":"\u0644\u0646\u06af\u0631\u0648\u062f \u0633\u0627\u0644\u06a9\u0648\u06cc\u0647","state":26,"id":4573},{"label":"\u0644\u0646\u06af\u0631\u0648\u062f \u0634\u0644\u0645\u0627\u0646","state":26,"id":4578},{"label":"\u0644\u0646\u06af\u0631\u0648\u062f \u0641\u062a\u06cc\u062f\u0647","state":26,"id":4576},{"label":"\u0644\u0646\u06af\u0631\u0648\u062f \u06a9\u0648\u0645\u0644\u0647","state":26,"id":4574},{"label":"\u0644\u0646\u06af\u0631\u0648\u062f \u0644\u0648\u06a9\u0644\u0627\u06cc\u0647","state":26,"id":4575},{"label":"\u0644\u0646\u06af\u0631\u0648\u062f \u06cc\u0639\u0642\u0648\u0628\u06cc\u0647","state":26,"id":4579},{"label":"\u0644\u0648\u0634\u0627\u0646","state":26,"id":2378},{"label":"\u0644\u0648\u0644\u0645\u0627\u0646","state":26,"id":2369},{"label":"\u0644\u0648\u0646\u062f\u0648\u06cc\u0644","state":26,"id":2357},{"label":"\u0644\u06cc\u0686\u0627\u0631\u06a9\u06cc \u062d\u0633\u0646 \u0631\u0648\u062f","state":26,"id":3731},{"label":"\u0644\u06cc\u0633\u0627\u0631","state":26,"id":2396},{"label":"\u0644\u06cc\u0634","state":26,"id":3757},{"label":"\u0645\u0627\u0633\u0627\u0644","state":26,"id":2408},{"label":"\u0645\u0627\u0633\u0648\u0644\u0647","state":26,"id":2399},{"label":"\u0645\u0631\u062c\u0642\u0644","state":26,"id":2389},{"label":"\u0645\u0631\u06a9\u06cc\u0647","state":26,"id":3741},{"label":"\u0645\u0634\u0646\u062f","state":26,"id":3752},{"label":"\u0645\u0644\u0627\u0633\u0631\u0627","state":26,"id":3737},{"label":"\u0645\u0646\u062c\u06cc\u0644","state":26,"id":2379},{"label":"\u0646\u0648\u062e\u0627\u0644\u0647 \u0627\u06a9\u0628\u0631\u06cc","state":26,"id":3743},{"label":"\u0648\u0627\u062c\u0627\u0631\u06af\u0627\u0647","state":26,"id":2383},{"label":"\u0648\u06cc\u0631\u0645\u0648\u0646\u06cc","state":26,"id":3750},{"label":"\u0648\u06cc\u0634\u0627\u0646","state":26,"id":3768},{"label":"\u0647\u0634\u062a\u067e\u0631","state":26,"id":2395}],"27":[{"label":"\u0627\u0632\u0646\u0627","state":27,"id":2410},{"label":"\u0627\u0634\u062a\u0631\u0647 \u06af\u0644 \u06af\u0644","state":27,"id":3795},{"label":"\u0627\u0634\u062a\u0631\u06cc\u0646\u0627\u0646","state":27,"id":2413},{"label":"\u0627\u0641\u0631\u06cc\u0646\u0647","state":27,"id":3801},{"label":"\u0627\u0644\u0634\u062a\u0631","state":27,"id":2429},{"label":"\u0627\u0644\u06cc\u06af\u0648\u062f\u0631\u0632","state":27,"id":2412},{"label":"\u0627\u06cc\u0633\u062a\u06af\u0627\u0647 \u062a\u0646\u06af \u0647\u0641\u062a","state":27,"id":3817},{"label":"\u0628\u0631\u062e\u0648\u0631\u062f\u0627\u0631","state":27,"id":3788},{"label":"\u0628\u0631\u0648\u062c\u0631\u062f","state":27,"id":2414},{"label":"\u0628\u0646\u062f\u06cc\u0632\u0647","state":27,"id":3821},{"label":"\u0628\u06cc\u0631\u0627\u0646\u0634\u0647\u0631","state":27,"id":2417},{"label":"\u0628\u06cc\u0631\u0627\u0646\u0648\u0646\u062f","state":27,"id":3787},{"label":"\u067e\u0627\u0639\u0644\u0645 (\u067e\u0644 \u062a\u0646\u06af )","state":27,"id":3798},{"label":"\u067e\u0644 \u0634\u0648\u0631\u0627\u0628 \u067e\u0627\u06cc\u06cc\u0646","state":27,"id":3803},{"label":"\u067e\u0644\u062f\u062e\u062a\u0631","state":27,"id":2415},{"label":"\u062a\u0642\u06cc \u0627\u0628\u0627\u062f-\u0644\u0631\u0633\u062a\u0627\u0646","state":27,"id":3793},{"label":"\u0686\u0627\u0644\u0627\u0646\u0686\u0648\u0644\u0627\u0646","state":27,"id":2425},{"label":"\u0686\u0627\u0647 \u0630\u0648\u0627\u0644\u0641\u0642\u0627\u0631","state":27,"id":3812},{"label":"\u0686\u0634\u0645\u0647 \u06a9\u06cc\u0632\u0627\u0628 \u0639\u0644\u06cc\u0627","state":27,"id":3792},{"label":"\u0686\u0642\u0627\u0628\u0644","state":27,"id":2427},{"label":"\u0686\u0645 \u067e\u0644\u06a9","state":27,"id":3813},{"label":"\u0686\u0645 \u0633\u0646\u06af\u0631","state":27,"id":3816},{"label":"\u0686\u0645\u0634\u06a9 \u0632\u06cc\u0631\u062a\u0646\u06af","state":27,"id":3800},{"label":"\u0686\u0645\u0646 \u0633\u0644\u0637\u0627\u0646","state":27,"id":3805},{"label":"\u062d\u06cc\u0647","state":27,"id":3808},{"label":"\u062e\u0631\u0645 \u0622\u0628\u0627\u062f","state":27,"id":2420},{"label":"\u062e\u0648\u0634\u0646\u0627\u0645\u0648\u0646\u062f","state":27,"id":3794},{"label":"\u062f\u0631\u0628 \u06af\u0646\u0628\u062f","state":27,"id":2430},{"label":"\u062f\u0631\u0647 \u06af\u0631\u06af","state":27,"id":3822},{"label":"\u062f\u0645 \u0628\u0627\u063a","state":27,"id":3790},{"label":"\u062f\u0648\u0631\u0648\u062f","state":27,"id":2426},{"label":"\u062f\u0647 \u0631\u062d\u0645","state":27,"id":3820},{"label":"\u0631\u0627\u0632\u0627\u0646","state":27,"id":3810},{"label":"\u0632\u0627\u063a\u0647","state":27,"id":2419},{"label":"\u0698\u0627\u0646","state":27,"id":3814},{"label":"\u0633\u067e\u06cc\u062f \u062f\u0634\u062a","state":27,"id":2418},{"label":"\u0633\u0631\u0627\u0628 \u062f\u0648\u0631\u0647","state":27,"id":2423},{"label":"\u0633\u0631\u0627\u0628 \u0633\u06cc\u0627\u0647\u067e\u0648\u0634","state":27,"id":3819},{"label":"\u0633\u0648\u0631\u06cc","state":27,"id":3796},{"label":"\u0633\u06cc\u0627\u0647 \u06af\u0648\u0634\u06cc (\u067e\u0644 \u0647\u0631\u0648)","state":27,"id":3811},{"label":"\u0634\u0627\u0647\u067e\u0648\u0631\u0627\u0628\u0627\u062f","state":27,"id":3804},{"label":"\u0634\u0648\u0644 \u0622\u0628\u0627\u062f","state":27,"id":2411},{"label":"\u0641\u0631\u0647\u0627\u062f\u0627\u0628\u0627\u062f","state":27,"id":3789},{"label":"\u0641\u06cc\u0631\u0648\u0632\u0622\u0628\u0627\u062f","state":27,"id":2428},{"label":"\u0642\u0644\u0639\u0647 \u0628\u0632\u0646\u0648\u06cc\u062f","state":27,"id":3807},{"label":"\u06a9\u0627\u063a\u0647","state":27,"id":3815},{"label":"\u06a9\u0648\u0646\u0627\u0646\u06cc","state":27,"id":3797},{"label":"\u06a9\u0648\u0647\u062f\u0634\u062a","state":27,"id":2432},{"label":"\u06a9\u0648\u0647\u0646\u0627\u0646\u06cc","state":27,"id":2433},{"label":"\u06a9\u0647\u0631\u06cc\u0632\u0648\u0631\u0648\u0634\u062a","state":27,"id":3791},{"label":"\u06a9\u06cc\u0632\u0627\u0646\u062f\u0631\u0647","state":27,"id":3806},{"label":"\u06af\u0631\u0627\u0628","state":27,"id":2431},{"label":"\u0645\u0627\u0633\u0648\u0631","state":27,"id":3786},{"label":"\u0645\u0631\u06af \u0633\u0631","state":27,"id":3809},{"label":"\u0645\u0639\u0645\u0648\u0644\u0627\u0646","state":27,"id":2416},{"label":"\u0645\u06a9\u06cc\u0646\u0647 \u062d\u06a9\u0648\u0645\u062a\u06cc","state":27,"id":3818},{"label":"\u0645\u0648\u0645\u0646 \u0622\u0628\u0627\u062f","state":27,"id":2409},{"label":"\u0645\u06cc\u0627\u0646 \u062a\u0627\u06af\u0627\u0646","state":27,"id":3802},{"label":"\u0646\u0648\u0631\u0622\u0628\u0627\u062f","state":27,"id":2421},{"label":"\u0648\u0627\u0634\u06cc\u0627\u0646 \u0646\u0635\u06cc\u0631\u062a\u067e\u0647","state":27,"id":3799},{"label":"\u0648\u06cc\u0633\u06cc\u0627\u0646","state":27,"id":2424},{"label":"\u0647\u0641\u062a \u0686\u0634\u0645\u0647","state":27,"id":2422}],"28":[{"label":"\u0622\u0644\u0627\u0634\u062a","state":28,"id":2466},{"label":"\u0622\u0645\u0644","state":28,"id":2438},{"label":"\u0627\u062a\u0648","state":28,"id":3879},{"label":"\u0627\u0631\u0637\u0647","state":28,"id":2475},{"label":"\u0627\u0631\u0648\u0633\u062a","state":28,"id":3888},{"label":"\u0627\u0633\u0628\u0648\u06a9\u0644\u0627","state":28,"id":3893},{"label":"\u0627\u0633\u0644\u0627\u0645 \u0627\u0628\u0627\u062f-\u0645\u0627\u0632\u0646\u062f\u0631\u0627\u0646","state":28,"id":3894},{"label":"\u0627\u063a\u0648\u0632\u06a9\u062a\u06cc","state":28,"id":3853},{"label":"\u0627\u0645\u0627\u0641\u062a","state":28,"id":3884},{"label":"\u0627\u0645\u0627\u0645\u0632\u0627\u062f\u0647 \u0639\u0628\u062f\u0627\u0644\u0644\u0647","state":28,"id":2434},{"label":"\u0627\u0645\u06cc\u0631\u06a9\u0644\u0627","state":28,"id":2444},{"label":"\u0627\u0648\u0632-\u0645\u0627\u0632\u0646\u062f\u0631\u0627\u0646","state":28,"id":3831},{"label":"\u0627\u0647\u0646\u06af\u0631\u06a9\u0644\u0627","state":28,"id":3857},{"label":"\u0627\u06cc\u0632\u062f \u0634\u0647\u0631","state":28,"id":2483},{"label":"\u0627\u06cc\u0646\u062c \u062f\u0627\u0646","state":28,"id":3860},{"label":"\u0628\u0627\u0628\u0644","state":28,"id":2445},{"label":"\u0628\u0627\u0628\u0644\u0633\u0631","state":28,"id":2448},{"label":"\u0628\u0627\u062f\u0627\u0628\u0633\u0631","state":28,"id":3903},{"label":"\u0628\u0627\u0644\u0627\u062c\u0646\u06cc\u062f\u0644\u0627\u06a9 \u067e\u0644","state":28,"id":3868},{"label":"\u0628\u0627\u0644\u0627\u062f\u0633\u062a\u0647 \u0631\u06a9\u0646 \u06a9\u0646\u0627\u0631","state":28,"id":3873},{"label":"\u0628\u0627\u0644\u0627\u062f\u0648\u0627\u0628","state":28,"id":3885},{"label":"\u0628\u0627\u0644\u0627\u0647\u0648\u0644\u0627\u0631","state":28,"id":3892},{"label":"\u0628\u0627\u06cc\u06cc\u062c\u0627\u0646","state":28,"id":3828},{"label":"\u0628\u0644\u062f\u0647","state":28,"id":2481},{"label":"\u0628\u0646\u062f\u067e\u06cc","state":28,"id":3824},{"label":"\u0628\u0646\u0641\u0634\u0647 \u062f\u0647","state":28,"id":3829},{"label":"\u0628\u0647\u0634\u0647\u0631","state":28,"id":2449},{"label":"\u0628\u0647\u0646\u0645\u06cc\u0631","state":28,"id":2446},{"label":"\u0628\u06cc\u0632\u06a9\u06cc","state":28,"id":3874},{"label":"\u0628\u06cc\u0634\u0647 \u0628\u0646\u0647","state":28,"id":3906},{"label":"\u0628\u06cc\u0634\u0647 \u0633\u0631","state":28,"id":3864},{"label":"\u067e\u0627\u0644\u0646\u062f","state":28,"id":3880},{"label":"\u067e\u0627\u06cc\u06cc\u0646 \u0632\u0631\u0646\u062f\u06cc\u0646","state":28,"id":3902},{"label":"\u067e\u0627\u06cc\u06cc\u0646 \u0647\u0648\u0644\u0627\u0631","state":28,"id":2465},{"label":"\u067e\u0644 \u0633\u0641\u06cc\u062f","state":28,"id":2467},{"label":"\u067e\u0648\u0644","state":28,"id":2487},{"label":"\u062a\u0627\u06a9\u0627\u0645","state":28,"id":3891},{"label":"\u062a\u0627\u06a9\u0631","state":28,"id":3832},{"label":"\u062a\u0645\u0644","state":28,"id":3856},{"label":"\u062a\u0646\u06a9\u0627\u0628\u0646","state":28,"id":2453},{"label":"\u062a\u06cc\u0631\u062a\u0627\u0634","state":28,"id":3904},{"label":"\u062c\u0646\u062a \u0631\u0648\u062f\u0628\u0627\u0631","state":28,"id":3855},{"label":"\u062c\u0648\u0627\u0647\u0631\u062f\u0647","state":28,"id":3854},{"label":"\u062c\u0648\u06cc\u0628\u0627\u0631","state":28,"id":2457},{"label":"\u0686\u0627\u0644\u0648\u0633","state":28,"id":2458},{"label":"\u0686\u0631\u0627\u062a","state":28,"id":3881},{"label":"\u0686\u0644\u0645\u0631\u062f\u06cc","state":28,"id":3901},{"label":"\u0686\u0644\u0646\u062f\u0631","state":28,"id":3834},{"label":"\u0686\u0645\u0633\u062a\u0627\u0646","state":28,"id":2482},{"label":"\u062d\u0627\u062c\u06cc \u06a9\u0644\u0627\u0635\u0646\u0645","state":28,"id":3870},{"label":"\u062e\u0631\u0645 \u0622\u0628\u0627\u062f","state":28,"id":2452},{"label":"\u062e\u0634\u06a9 \u062f\u0631\u0647","state":28,"id":3883},{"label":"\u062e\u0637\u06cc\u0631\u06a9\u0644\u0627","state":28,"id":3869},{"label":"\u062e\u0644\u06cc\u0644 \u0634\u0647\u0631","state":28,"id":2450},{"label":"\u062e\u0648\u0631\u0634\u06cc\u062f (\u0627\u0645\u0627\u0645\u06cc\u0647 )","state":28,"id":3899},{"label":"\u062e\u0648\u0634 \u0631\u0648\u062f\u067e\u06cc","state":28,"id":2441},{"label":"\u062f\u0627\u0628\u0648\u062f\u0634\u062a","state":28,"id":2435},{"label":"\u062f\u0627\u0631\u0627\u0628\u06a9\u0644\u0627","state":28,"id":3897},{"label":"\u062f\u0627\u0645\u062f\u0627\u0631\u06cc \u062d\u0627\u062c \u0639\u0632\u06cc\u0632\u0645\u062c\u0631\u06cc\u0627\u0646","state":28,"id":3908},{"label":"\u062f\u0627\u0645\u062f\u0627\u0631\u06cc \u062d\u0633\u0646 \u0627\u0628\u0648\u0637\u0627\u0644\u0628\u06cc","state":28,"id":3905},{"label":"\u062f\u0631\u0627\u0632\u06a9\u0634","state":28,"id":3865},{"label":"\u062f\u0644\u06cc\u0631","state":28,"id":3841},{"label":"\u062f\u0647 \u0645\u06cc\u0627\u0646","state":28,"id":3882},{"label":"\u0631\u0627\u0645\u0633\u0631","state":28,"id":2460},{"label":"\u0631\u0633\u062a\u0645\u06a9\u0644\u0627","state":28,"id":2451},{"label":"\u0631\u06a9\u0627\u0628\u062f\u0627\u0631\u06a9\u0644\u0627","state":28,"id":3876},{"label":"\u0631\u0648\u06cc\u0627\u0646","state":28,"id":2484},{"label":"\u0631\u06cc\u06a9\u0646\u062f\u0647","state":28,"id":3872},{"label":"\u0631\u06cc\u0646\u0647","state":28,"id":2436},{"label":"\u0631\u06cc\u06cc\u0633 \u06a9\u0644\u0627","state":28,"id":3830},{"label":"\u0632\u0627\u063a\u0645\u0631\u0632","state":28,"id":3900},{"label":"\u0632\u0631\u06af\u0631 \u0645\u062d\u0644\u0647","state":28,"id":2443},{"label":"\u0632\u06cc\u0631\u0622\u0628","state":28,"id":2468},{"label":"\u0633\u0627\u062f\u0627\u062a \u0645\u062d\u0644\u0647","state":28,"id":3852},{"label":"\u0633\u0627\u0631\u06cc","state":28,"id":2464},{"label":"\u0633\u0631\u062e\u0631\u0648\u062f","state":28,"id":2478},{"label":"\u0633\u0631\u0644\u0646\u06af\u0627","state":28,"id":3843},{"label":"\u0633\u0641\u06cc\u062f\u0686\u0627\u0647","state":28,"id":3907},{"label":"\u0633\u0644\u0645\u0627\u0646 \u0634\u0647\u0631","state":28,"id":2471},{"label":"\u0633\u0644\u06cc\u0645\u0627\u0646 \u0627\u0628\u0627\u062f","state":28,"id":3849},{"label":"\u0633\u0646\u06af\u062a\u0627\u0628","state":28,"id":3875},{"label":"\u0633\u0646\u06af\u062f\u0647","state":28,"id":3889},{"label":"\u0633\u0648\u0627","state":28,"id":3827},{"label":"\u0633\u0648\u0631\u06a9","state":28,"id":2480},{"label":"\u0633\u06cc\u0627\u0647 \u0628\u06cc\u0634\u0647","state":28,"id":3842},{"label":"\u0634\u0648\u0631\u06a9\u0634","state":28,"id":3859},{"label":"\u0634\u0647\u0631\u06a9 \u0635\u0646\u0639\u062a\u06cc \u06af\u0647\u0631\u0628\u0627\u0631\u0627\u0646","state":28,"id":3895},{"label":"\u0634\u0647\u06cc\u062f\u0627\u0628\u0627\u062f","state":28,"id":3867},{"label":"\u0634\u06cc\u0631\u06a9\u0644\u0627","state":28,"id":3877},{"label":"\u0634\u06cc\u0631\u06af\u0627\u0647","state":28,"id":2469},{"label":"\u0634\u06cc\u0631\u0648\u062f","state":28,"id":2454},{"label":"\u0635\u0644\u0627\u062d \u0627\u0644\u062f\u06cc\u0646 \u06a9\u0644\u0627","state":28,"id":3835},{"label":"\u0639\u0628\u0627\u0633 \u0622\u0628\u0627\u062f","state":28,"id":2473},{"label":"\u0639\u0631\u0628 \u062e\u06cc\u0644","state":28,"id":3861},{"label":"\u0641\u0631\u062d \u0627\u0628\u0627\u062f (\u062e\u0632\u0631\u0627\u0628\u0627\u062f)","state":28,"id":3896},{"label":"\u0641\u0631\u06cc\u062f\u0648\u0646\u06a9\u0646\u0627\u0631","state":28,"id":2474},{"label":"\u0641\u0631\u06cc\u0645","state":28,"id":2463},{"label":"\u0642\u0627\u0626\u0645 \u0634\u0647\u0631","state":28,"id":2476},{"label":"\u0642\u0627\u062f\u06cc\u06a9\u0644\u0627","state":28,"id":3890},{"label":"\u0642\u0644\u0639\u0647 \u06af\u0631\u062f\u0646","state":28,"id":3848},{"label":"\u06a9\u0627\u0633\u06af\u0631\u0645\u062d\u0644\u0647","state":28,"id":3862},{"label":"\u06a9\u062a\u0627\u0644\u0645 \u0648 \u0633\u0627\u062f\u0627\u062a \u0634\u0647\u0631","state":28,"id":2461},{"label":"\u06a9\u062a\u0631\u0627","state":28,"id":3844},{"label":"\u06a9\u062a\u06cc \u0644\u062a\u0647","state":28,"id":3887},{"label":"\u06a9\u062c\u0648\u0631","state":28,"id":2488},{"label":"\u06a9\u0631\u062f\u06cc\u0686\u0627\u0644","state":28,"id":3839},{"label":"\u06a9\u0634\u06a9\u0648","state":28,"id":3850},{"label":"\u06a9\u0644\u0627\u0631\u0622\u0628\u0627\u062f","state":28,"id":2472},{"label":"\u06a9\u0644\u0627\u0631\u062f\u0634\u062a","state":28,"id":2491},{"label":"\u06a9\u0644\u0646\u0648","state":28,"id":3840},{"label":"\u06a9\u0644\u0647 \u0628\u0633\u062a","state":28,"id":3863},{"label":"\u06a9\u0648\u0647\u06cc \u062e\u06cc\u0644","state":28,"id":2456},{"label":"\u06a9\u06cc\u0627\u0633\u0631","state":28,"id":2462},{"label":"\u06a9\u06cc\u0627\u06a9\u0644\u0627","state":28,"id":2470},{"label":"\u06af\u0627\u0648\u0627\u0646\u06a9\u0644\u0627","state":28,"id":3858},{"label":"\u06af\u062a\u0627\u0628","state":28,"id":2442},{"label":"\u06af\u0631\u062f\u0631\u0648\u062f\u0628\u0627\u0631","state":28,"id":3866},{"label":"\u06af\u0632\u0646\u06a9","state":28,"id":2437},{"label":"\u06af\u0644\u0639\u0644\u06cc \u0627\u0628\u0627\u062f","state":28,"id":3845},{"label":"\u06af\u0644\u0646\u062f\u0631\u0648\u062f","state":28,"id":3833},{"label":"\u06af\u0644\u0648\u06af\u0627\u0647","state":28,"id":2440},{"label":"\u06af\u0644\u0648\u06af\u0627\u0647","state":28,"id":2477},{"label":"\u0644\u0627\u06a9 \u062a\u0631\u0627\u0634\u0627\u0646","state":28,"id":3851},{"label":"\u0644\u0634\u06a9\u0646\u0627\u0631","state":28,"id":3837},{"label":"\u0644\u0641\u0648\u0631 (\u0644\u0641\u0648\u0631\u06a9 )","state":28,"id":3878},{"label":"\u0645\u0627\u0686\u06a9 \u067e\u0634\u062a","state":28,"id":3898},{"label":"\u0645\u062d\u0645\u0648\u062f\u0622\u0628\u0627\u062f","state":28,"id":2479},{"label":"\u0645\u0631\u0627\u0646 \u0633\u0647 \u0647\u0632\u0627\u0631","state":28,"id":3847},{"label":"\u0645\u0631\u0632\u0646 \u0622\u0628\u0627\u062f","state":28,"id":2490},{"label":"\u0645\u0631\u0632\u06cc\u06a9\u0644\u0627","state":28,"id":2439},{"label":"\u0645\u0639\u0644\u0645 \u06a9\u0644\u0627","state":28,"id":3825},{"label":"\u0645\u06cc\u0627\u0646 \u062f\u0631\u0647","state":28,"id":3823},{"label":"\u0645\u06cc\u0627\u0646 \u06a9\u0648\u0647 \u0633\u0627\u062f\u0627\u062a","state":28,"id":3846},{"label":"\u0646\u0627\u0631\u0646\u062c \u0628\u0646","state":28,"id":3836},{"label":"\u0646\u0634\u062a\u0627\u0631\u0648\u062f","state":28,"id":2455},{"label":"\u0646\u06a9\u0627","state":28,"id":2489},{"label":"\u0646\u0648\u0631","state":28,"id":2485},{"label":"\u0646\u0648\u0634\u0647\u0631","state":28,"id":2486},{"label":"\u0648\u0627\u0633\u06a9\u0633","state":28,"id":3871},{"label":"\u0648\u0631\u0633\u06a9","state":28,"id":3886},{"label":"\u0648\u0633\u0637\u06cc \u06a9\u0644\u0627","state":28,"id":3826},{"label":"\u0647\u0627\u062f\u06cc \u0634\u0647\u0631","state":28,"id":2447},{"label":"\u0647\u0686\u06cc\u0631\u0648\u062f","state":28,"id":2459},{"label":"\u0647\u06cc\u0686\u0631\u0648\u062f","state":28,"id":3838}],"29":[{"label":"\u0622\u0633\u062a\u0627\u0646\u0647","state":29,"id":2517},{"label":"\u0622\u0634\u062a\u06cc\u0627\u0646","state":29,"id":2492},{"label":"\u0622\u0648\u0647","state":29,"id":2509},{"label":"\u0627\u062f\u0634\u062a\u0647","state":29,"id":3922},{"label":"\u0627\u0631\u0627\u06a9","state":29,"id":2494},{"label":"\u0627\u0633\u062a\u0648\u0647","state":29,"id":3923},{"label":"\u0627\u0635\u0641\u0647\u0627\u0646\u06a9","state":29,"id":3912},{"label":"\u0627\u0644\u0648\u06cc\u0631","state":29,"id":3954},{"label":"\u0627\u0645\u0627\u0645\u0632\u0627\u062f\u0647 \u0648\u0631\u0686\u0647","state":29,"id":3945},{"label":"\u0627\u0646\u0627\u062c","state":29,"id":3925},{"label":"\u0627\u0647\u0646\u06af\u0631\u0627\u0646","state":29,"id":3967},{"label":"\u0627\u0647\u0648","state":29,"id":3971},{"label":"\u0628\u0627\u0642\u0631\u0627\u0628\u0627\u062f","state":29,"id":3918},{"label":"\u0628\u0627\u0644\u0642\u0644\u0648","state":29,"id":3957},{"label":"\u0628\u0632\u06cc\u062c\u0627\u0646","state":29,"id":3919},{"label":"\u067e\u0631\u0646\u062f\u06a9","state":29,"id":2505},{"label":"\u062a\u0641\u0631\u0634","state":29,"id":2497},{"label":"\u062a\u0648\u0627\u0646\u062f\u0634\u062a \u0639\u0644\u06cc\u0627","state":29,"id":3938},{"label":"\u062a\u0648\u0631\u0647","state":29,"id":2513},{"label":"\u062c\u0627\u0648\u0631\u0633\u06cc\u0627\u0646","state":29,"id":2500},{"label":"\u062c\u0632\u0646\u0642","state":29,"id":3948},{"label":"\u0686\u0645\u0631\u0627\u0646-\u0645\u0631\u06a9\u0632\u06cc","state":29,"id":3958},{"label":"\u0686\u0647\u0627\u0631\u0686\u0631\u06cc\u06a9","state":29,"id":3940},{"label":"\u0686\u0647\u0627\u0631\u0686\u0634\u0645\u0647","state":29,"id":3941},{"label":"\u062d\u0633\u06cc\u0646 \u0627\u0628\u0627\u062f-\u0645\u0631\u06a9\u0632\u06cc","state":29,"id":3913},{"label":"\u062d\u06a9\u06cc\u0645 \u0627\u0628\u0627\u062f","state":29,"id":3914},{"label":"\u062e\u0633\u0631\u0648\u0628\u06cc\u06af","state":29,"id":3927},{"label":"\u062e\u0634\u06a9\u0631\u0648\u062f","state":29,"id":2506},{"label":"\u062e\u0645\u06cc\u0646","state":29,"id":2498},{"label":"\u062e\u0646\u062c\u06cc\u0646","state":29,"id":2519},{"label":"\u062e\u0646\u062f\u0627\u0628","state":29,"id":2501},{"label":"\u062e\u0648\u0631\u0627\u0648\u0646\u062f","state":29,"id":3949},{"label":"\u062e\u0648\u0631\u0647\u0647","state":29,"id":3921},{"label":"\u062f\u0627\u0648\u062f \u0622\u0628\u0627\u062f","state":29,"id":2495},{"label":"\u062f\u062e\u0627\u0646","state":29,"id":3961},{"label":"\u062f\u0644\u06cc\u062c\u0627\u0646","state":29,"id":2502},{"label":"\u062f\u0648\u0632\u062c","state":29,"id":3955},{"label":"\u062f\u0647\u0646\u0648-\u0645\u0631\u06a9\u0632\u06cc","state":29,"id":3952},{"label":"\u0631\u0627\u0632\u0642\u0627\u0646","state":29,"id":2504},{"label":"\u0631\u0628\u0627\u0637\u06a9\u0641\u0633\u0627\u0646","state":29,"id":3946},{"label":"\u0631\u0628\u0627\u0637\u0645\u0631\u0627\u062f","state":29,"id":3910},{"label":"\u0631\u06cc\u062d\u0627\u0646 \u0639\u0644\u06cc\u0627","state":29,"id":3947},{"label":"\u0632\u0627\u063a\u0631","state":29,"id":3964},{"label":"\u0632\u0627\u0648\u06cc\u0647","state":29,"id":2507},{"label":"\u0633\u0627\u0631\u0648\u0642","state":29,"id":2493},{"label":"\u0633\u0627\u0645\u0627\u0646-\u0645\u0631\u06a9\u0632\u06cc","state":29,"id":3960},{"label":"\u0633\u0627\u0648\u0647","state":29,"id":2510},{"label":"\u0633\u0631\u0633\u062e\u062a\u06cc \u0628\u0627\u0644\u0627","state":29,"id":3936},{"label":"\u0633\u0644\u0637\u0627\u0646 \u0627\u0628\u0627\u062f-\u0645\u0631\u06a9\u0632\u06cc","state":29,"id":3911},{"label":"\u0633\u0645\u0642\u0627\u0648\u0631","state":29,"id":3928},{"label":"\u0633\u0646\u062c\u0627\u0646","state":29,"id":3924},{"label":"\u0633\u06cc\u0627\u0648\u0634\u0627\u0646","state":29,"id":3970},{"label":"\u0634\u0627\u0632\u0646\u062f","state":29,"id":2518},{"label":"\u0634\u0647\u0628\u0627\u0632","state":29,"id":2516},{"label":"\u0634\u0647\u0631\u0627\u0628-\u0645\u0631\u06a9\u0632\u06cc","state":29,"id":3963},{"label":"\u0635\u0627\u0644\u062d \u0627\u0628\u0627\u062f","state":29,"id":3969},{"label":"\u0635\u062f\u0631\u0627\u0628\u0627\u062f","state":29,"id":3916},{"label":"\u0639\u0644\u06cc\u0634\u0627\u0631","state":29,"id":3956},{"label":"\u0639\u06cc\u0633\u06cc \u0627\u0628\u0627\u062f","state":29,"id":3920},{"label":"\u063a\u0631\u0642 \u0622\u0628\u0627\u062f","state":29,"id":2511},{"label":"\u0641\u0631\u0641\u0647\u0627\u0646","state":29,"id":3944},{"label":"\u0641\u0631\u0645\u0647\u06cc\u0646","state":29,"id":2520},{"label":"\u0641\u0634\u06a9","state":29,"id":3966},{"label":"\u0642\u0627\u0642\u0627\u0646","state":29,"id":3959},{"label":"\u0642\u062f\u0645\u06af\u0627\u0647-\u0645\u0631\u06a9\u0632\u06cc","state":29,"id":3930},{"label":"\u0642\u0648\u0631\u0686\u06cc \u0628\u0627\u0634\u06cc","state":29,"id":2499},{"label":"\u06a9\u0627\u0631\u0686\u0627\u0646","state":29,"id":2496},{"label":"\u06a9\u062a\u06cc\u0631\u0627\u0646 \u0628\u0627\u0644\u0627","state":29,"id":3934},{"label":"\u06a9\u0631\u0647\u0631\u0648\u062f","state":29,"id":3909},{"label":"\u06a9\u0632\u0627\u0632","state":29,"id":3933},{"label":"\u06a9\u0645\u06cc\u062c\u0627\u0646","state":29,"id":2523},{"label":"\u06a9\u0647\u06a9-\u0645\u0631\u06a9\u0632\u06cc","state":29,"id":3965},{"label":"\u06af\u0644\u062f\u0634\u062a-\u0645\u0631\u06a9\u0632\u06cc","state":29,"id":3951},{"label":"\u0644\u06a9\u0627\u0646","state":29,"id":3942},{"label":"\u0644\u0646\u062c\u0631\u0648\u062f","state":29,"id":3932},{"label":"\u0644\u0648\u0632\u062f\u0631\u0639\u0644\u06cc\u0627","state":29,"id":3937},{"label":"\u0645\u0627\u0644\u0645\u06cc\u0631","state":29,"id":3939},{"label":"\u0645\u0627\u0645\u0648\u0646\u06cc\u0647","state":29,"id":2508},{"label":"\u0645\u062d\u0644\u0627\u062a","state":29,"id":2521},{"label":"\u0645\u0631\u0627\u063a\u0647-\u0645\u0631\u06a9\u0632\u06cc","state":29,"id":3962},{"label":"\u0645\u0632\u0631\u0639\u0647 \u0646\u0648","state":29,"id":3968},{"label":"\u0645\u0647\u0627\u062c\u0631\u0627\u0646","state":29,"id":2514},{"label":"\u0645\u06cc\u0634\u06cc\u062c\u0627\u0646 \u0639\u0644\u06cc\u0627","state":29,"id":3950},{"label":"\u0645\u06cc\u0644\u0627\u062c\u0631\u062f","state":29,"id":2524},{"label":"\u0646\u062e\u062c\u06cc\u0631\u0648\u0627\u0646","state":29,"id":3917},{"label":"\u0646\u0631\u0627\u0642","state":29,"id":2503},{"label":"\u0646\u0648\u0628\u0631\u0627\u0646","state":29,"id":2512},{"label":"\u0646\u0647\u0631\u0645\u06cc\u0627\u0646","state":29,"id":3935},{"label":"\u0646\u06cc\u0645\u0648\u0631","state":29,"id":2522},{"label":"\u0648\u0631\u0686\u0647","state":29,"id":3943},{"label":"\u0648\u0641\u0633","state":29,"id":3926},{"label":"\u0647\u0632\u0627\u0648\u0647","state":29,"id":3929},{"label":"\u0647\u0641\u062a\u0647","state":29,"id":3931},{"label":"\u0647\u0646\u062f\u0648\u062f\u0631","state":29,"id":2515},{"label":"\u06cc\u062d\u06cc\u06cc \u0627\u0628\u0627\u062f-\u0645\u0631\u06a9\u0632\u06cc","state":29,"id":3915},{"label":"\u06cc\u0644 \u0627\u0628\u0627\u062f","state":29,"id":3953}],"30":[{"label":"\u0627\u0628\u06af\u0631\u0645 \u062e\u0648\u0631\u06af\u0648","state":30,"id":3976},{"label":"\u0627\u0628\u0648\u0645\u0648\u0633\u06cc","state":30,"id":2525},{"label":"\u0628\u0627\u063a\u0627\u062a","state":30,"id":3975},{"label":"\u0628\u0633\u062a\u06a9","state":30,"id":2527},{"label":"\u0628\u0646\u062f\u0631","state":30,"id":3990},{"label":"\u0628\u0646\u062f\u0631 \u062c\u0627\u0633\u06a9","state":30,"id":2544},{"label":"\u0628\u0646\u062f\u0631 \u0644\u0646\u06af\u0647","state":30,"id":2537},{"label":"\u0628\u0646\u062f\u0631\u0639\u0628\u0627\u0633","state":30,"id":2534},{"label":"\u0628\u0646\u062f\u0631\u0645\u063a\u0648\u06cc\u0647","state":30,"id":3988},{"label":"\u0628\u0646\u062f\u0632\u0631\u06a9","state":30,"id":3997},{"label":"\u0628\u06cc\u06a9\u0627\u0647","state":30,"id":2550},{"label":"\u067e\u0627\u0631\u0633\u06cc\u0627\u0646","state":30,"id":2541},{"label":"\u067e\u062f\u0644","state":30,"id":3983},{"label":"\u067e\u0634\u062a\u0647 \u0627\u06cc\u0633\u06cc\u0646","state":30,"id":3972},{"label":"\u067e\u0644 \u0634\u0631\u0642\u06cc","state":30,"id":3973},{"label":"\u062a\u0627\u0632\u06cc\u0627\u0646 \u067e\u0627\u0626\u06cc\u0646","state":30,"id":2535},{"label":"\u062a\u062e\u062a","state":30,"id":2531},{"label":"\u062a\u06cc\u0627\u0628","state":30,"id":3996},{"label":"\u062a\u06cc\u0631\u0648\u0631","state":30,"id":2562},{"label":"\u062c\u0632\u06cc\u0631\u0647 \u0633\u06cc\u0631\u06cc","state":30,"id":3982},{"label":"\u062c\u0632\u06cc\u0631\u0647 \u0644\u0627\u0631\u06a9 \u0634\u0647\u0631\u06cc","state":30,"id":3980},{"label":"\u062c\u0632\u06cc\u0631\u0647 \u0644\u0627\u0648\u0627\u0646","state":30,"id":3989},{"label":"\u062c\u063a\u06cc\u0646","state":30,"id":3993},{"label":"\u062c\u0646\u0627\u062d","state":30,"id":2526},{"label":"\u0686\u0627\u0631\u06a9","state":30,"id":2536},{"label":"\u062d\u0627\u062c\u06cc \u0622\u0628\u0627\u062f","state":30,"id":2547},{"label":"\u062d\u0633\u0646 \u0644\u0646\u06af\u06cc \u067e\u0627\u06cc\u06cc\u0646","state":30,"id":3977},{"label":"\u062e\u0645\u06cc\u0631","state":30,"id":2549},{"label":"\u062f\u0631\u067e\u0647\u0646","state":30,"id":3991},{"label":"\u062f\u0631\u06af\u0647\u0627\u0646","state":30,"id":2557},{"label":"\u062f\u0698\u06af\u0627\u0646","state":30,"id":3984},{"label":"\u062f\u0634\u062a\u06cc","state":30,"id":2542},{"label":"\u062f\u0647\u0628\u0627\u0631\u0632","state":30,"id":2552},{"label":"\u062f\u0647\u0646\u06af","state":30,"id":3985},{"label":"\u0631\u0648\u06cc\u062f\u0631","state":30,"id":2548},{"label":"\u0632\u06cc\u0627\u0631\u062a\u0639\u0644\u06cc","state":30,"id":2551},{"label":"\u0633\u0631\u062f\u0634\u062a","state":30,"id":2530},{"label":"\u0633\u0631\u06af\u0632","state":30,"id":2545},{"label":"\u0633\u0646\u062f\u0631\u06a9","state":30,"id":2561},{"label":"\u0633\u0648\u0632\u0627","state":30,"id":2556},{"label":"\u0633\u06cc\u0627\u0647\u0648","state":30,"id":3974},{"label":"\u0633\u06cc\u0631\u06cc\u06a9","state":30,"id":2554},{"label":"\u0641\u0627\u0631\u063a\u0627\u0646","state":30,"id":2546},{"label":"\u0641\u06cc\u0646","state":30,"id":2532},{"label":"\u0642\u0634\u0645","state":30,"id":2558},{"label":"\u0642\u0644\u0639\u0647 \u0642\u0627\u0636\u06cc","state":30,"id":2533},{"label":"\u06a9\u0644\u0648\u0631\u062c\u06a9\u062f\u0627\u0646","state":30,"id":3992},{"label":"\u06a9\u0645\u0634\u06a9","state":30,"id":3986},{"label":"\u06a9\u0646\u06af","state":30,"id":2538},{"label":"\u06a9\u0648\u062e\u0631\u062f\u0647\u0631\u0646\u06af","state":30,"id":2528},{"label":"\u06a9\u0648\u0634\u06a9\u0646\u0627\u0631","state":30,"id":2543},{"label":"\u06a9\u0648\u0647\u0633\u062a\u06a9","state":30,"id":2553},{"label":"\u06a9\u06cc\u0634","state":30,"id":2540},{"label":"\u06af\u0631\u0648\u06a9","state":30,"id":2555},{"label":"\u06af\u0632\u06cc\u0631","state":30,"id":3987},{"label":"\u06af\u0648\u0631\u0628\u0646\u062f","state":30,"id":3995},{"label":"\u06af\u0648\u0646\u0645\u0631\u062f\u06cc","state":30,"id":3978},{"label":"\u06af\u0648\u0647\u0631\u0627\u0646","state":30,"id":2529},{"label":"\u06af\u0648\u0647\u0631\u062a","state":30,"id":3979},{"label":"\u0644\u0645\u0632\u0627\u0646","state":30,"id":2539},{"label":"\u0645\u0627\u0634\u0646\u06af\u06cc","state":30,"id":3994},{"label":"\u0645\u06cc\u0646\u0627\u0628","state":30,"id":2563},{"label":"\u0647\u0631\u0645\u0632","state":30,"id":2559},
      {"label":"\u0627\u0634\u062a\u0631\u0627\u0646","state":31,"id":4023},{"label":"\u0627\u06a9\u0646\u0644\u0648","state":31,"id":4011},{"label":"\u0627\u0648\u0631\u0632\u0645\u0627\u0646","state":31,"id":4018},{"label":"\u0628\u0627\u0628\u0627\u067e\u06cc\u0631","state":31,"id":4024},{"label":"\u0628\u0627\u0628\u0627\u0631\u0633\u062a\u0645","state":31,"id":4027},{"label":"\u0628\u0627\u0628\u0627\u0642\u0627\u0633\u0645","state":31,"id":4026},{"label":"\u0628\u0631\u0632\u0648\u0644","state":31,"id":2583},{"label":"\u0628\u0647\u0627\u0631","state":31,"id":2569},{"label":"\u067e\u0627\u062f\u06af\u0627\u0646 \u0642\u0647\u0631\u0645\u0627\u0646","state":31,"id":4033},{"label":"\u067e\u0627\u06cc\u06af\u0627\u0647 \u0646\u0648\u0698\u0647","state":31,"id":4030},{"label":"\u067e\u0631\u0644\u0648\u06a9","state":31,"id":4000},{"label":"\u062a\u062c\u0631\u06a9","state":31,"id":4013},{"label":"\u062a\u0648\u06cc\u0633\u0631\u06a9\u0627\u0646","state":31,"id":2571},{"label":"\u062c\u0639\u0641\u0631\u06cc\u0647 (\u0642\u0644\u0639\u0647 \u062c\u0639\u0641\u0631\u0628\u06cc\u06a9 )","state":31,"id":4020},{"label":"\u062c\u0646\u062a \u0627\u0628\u0627\u062f-\u0647\u0645\u062f\u0627\u0646","state":31,"id":4003},{"label":"\u062c\u0648\u0631\u0642\u0627\u0646","state":31,"id":2587},{"label":"\u062c\u0648\u0632\u0627\u0646-\u0647\u0645\u062f\u0627\u0646","state":31,"id":4017},{"label":"\u062c\u0648\u06a9\u0627\u0631","state":31,"id":2578},{"label":"\u062c\u0647\u0627\u0646 \u0627\u0628\u0627\u062f","state":31,"id":4025},{"label":"\u0686\u0627\u0646\u06af\u0631\u06cc\u0646","state":31,"id":4015},{"label":"\u0686\u0646\u0627\u0631\u0633\u0641\u0644\u06cc","state":31,"id":4005},{"label":"\u0686\u0646\u0627\u0631\u0639\u0644\u06cc\u0627","state":31,"id":4006},{"label":"\u062d\u0633\u06cc\u0646 \u0627\u0628\u0627\u062f\u0628\u0647\u0627\u0631\u0639\u0627\u0634\u0648\u0631\u06cc","state":31,"id":4001},{"label":"\u062f\u0627\u0642 \u062f\u0627\u0642 \u0627\u0628\u0627\u062f","state":31,"id":4012},{"label":"\u062f\u0645\u0642","state":31,"id":2573},{"label":"\u062f\u0647\u0641\u0648\u0644","state":31,"id":4028},{"label":"\u062f\u06cc\u0646\u0627\u0631\u0627\u0628\u0627\u062f","state":31,"id":3998},{"label":"\u0631\u0632\u0646","state":31,"id":2575},{"label":"\u0632\u0646\u06af\u0646\u0647","state":31,"id":2579},{"label":"\u0633\u0627\u0645\u0646","state":31,"id":2580},{"label":"\u0633\u0631\u06a9\u0627\u0646","state":31,"id":2572},{"label":"\u0634\u0647\u0631\u06a9 \u0635\u0646\u0639\u062a\u06cc \u0628\u0648\u0639\u0644\u06cc","state":31,"id":4029},{"label":"\u0634\u06cc\u0631\u06cc\u0646 \u0633\u0648","state":31,"id":2590},{"label":"\u0635\u0627\u0644\u062d \u0622\u0628\u0627\u062f","state":31,"id":2566},{"label":"\u0637\u0648\u06cc\u0644\u0627\u0646 \u0633\u0641\u0644\u06cc","state":31,"id":4007},{"label":"\u0639\u0644\u06cc\u0635\u062f\u0631","state":31,"id":4031},{"label":"\u0641\u0627\u0645\u0646\u06cc\u0646","state":31,"id":2576},{"label":"\u0641\u0631\u0633\u0641\u062c","state":31,"id":2570},{"label":"\u0641\u06cc\u0631\u0648\u0632\u0627\u0646","state":31,"id":2582},{"label":"\u0642\u0631\u0648\u0647 \u062f\u0631 \u062c\u0632\u06cc\u0646","state":31,"id":2574},{"label":"\u0642\u0647\u0627\u0648\u0646\u062f","state":31,"id":2586},{"label":"\u0642\u0647\u0648\u0631\u062f\u0633\u0641\u0644\u06cc","state":31,"id":4010},{"label":"\u06a9\u0628\u0648\u062f\u0631 \u0622\u0647\u0646\u06af","state":31,"id":2592},{"label":"\u06a9\u0648\u0631\u06cc\u062c\u0627\u0646","state":31,"id":4008},{"label":"\u06a9\u0648\u0632\u0631\u0647","state":31,"id":4014},{"label":"\u06a9\u0648\u0647\u06cc\u0646-\u0647\u0645\u062f\u0627\u0646","state":31,"id":4009},{"label":"\u06af\u0644 \u062a\u067e\u0647","state":31,"id":2591},{"label":"\u06af\u0646\u0628\u062f","state":31,"id":4032},{"label":"\u06af\u06cc\u0627\u0646","state":31,"id":2584},{"label":"\u0644\u0627\u0644\u062c\u06cc\u0646","state":31,"id":2567},{"label":"\u0645\u0631\u06cc\u0627\u0646\u062c","state":31,"id":2588},{"label":"\u0645\u0644\u0627\u06cc\u0631","state":31,"id":2581},{"label":"\u0645\u0648\u0633\u06cc \u0627\u0628\u0627\u062f-\u0647\u0645\u062f\u0627\u0646","state":31,"id":4004},{"label":"\u0645\u0647\u0627\u062c\u0631\u0627\u0646","state":31,"id":2568},{"label":"\u0645\u06cc\u0627\u0646\u062f\u0647-\u0647\u0645\u062f\u0627\u0646","state":31,"id":4021},{"label":"\u0646\u0647\u0627\u0648\u0646\u062f","state":31,"id":2585},{"label":"\u0648\u0644\u0627\u0634\u062c\u0631\u062f","state":31,"id":4022},{"label":"\u0648\u06cc\u0631\u0627\u06cc\u06cc","state":31,"id":4002},{"label":"\u0647\u0645\u062f\u0627\u0646","state":31,"id":2589},{"label":"\u0647\u0645\u0647 \u06a9\u0633\u06cc","state":31,"id":3999}],"32":[{"label":"\u0627\u0628\u0631\u06a9\u0648\u0647","state":32,"id":2594},{"label":"\u0627\u062d\u0645\u062f \u0622\u0628\u0627\u062f","state":32,"id":2596},{"label":"\u0627\u0631\u062f\u06a9\u0627\u0646","state":32,"id":2597},{"label":"\u0627\u0631\u0646\u0627\u0646","state":32,"id":4155},{"label":"\u0627\u0633\u0641\u0646\u062f\u0627\u0628\u0627\u062f","state":32,"id":4146},{"label":"\u0627\u0633\u0641\u06cc\u062c","state":32,"id":4150},{"label":"\u0627\u0634\u06a9\u0630\u0631","state":32,"id":2605},{"label":"\u0627\u0646\u0627\u0631\u0633\u062a\u0627\u0646-\u06cc\u0632\u062f","state":32,"id":4148},{"label":"\u0628\u0627\u0641\u0642","state":32,"id":2598},{"label":"\u0628\u0641\u0631\u0648\u0626\u06cc\u0647","state":32,"id":2607},{"label":"\u0628\u0646\u0633\u062a\u0627\u0646","state":32,"id":4153},{"label":"\u0628\u0647\u0627\u0628\u0627\u062f","state":32,"id":2599},{"label":"\u0628\u0647\u0627\u062f\u0631\u0627\u0646","state":32,"id":4156},{"label":"\u062a\u0641\u062a","state":32,"id":2600},{"label":"\u062a\u0646\u06af \u0686\u0646\u0627\u0631 (\u0686\u0646\u0627\u0631)","state":32,"id":4154},{"label":"\u062d\u0645\u06cc\u062f\u06cc\u0627","state":32,"id":2611},{"label":"\u062e\u0636\u0631 \u0622\u0628\u0627\u062f","state":32,"id":2604},{"label":"\u062f\u0647\u0634\u06cc\u0631","state":32,"id":4162},{"label":"\u0632\u0627\u0631\u0686","state":32,"id":2610},{"label":"\u0632\u0631\u06cc\u0646","state":32,"id":4149},{"label":"\u0634\u0627\u0647\u062f\u06cc\u0647","state":32,"id":2612},{"label":"\u0639\u0642\u062f\u0627","state":32,"id":2595},{"label":"\u0639\u0644\u06cc \u0627\u0628\u0627\u062f-\u06cc\u0632\u062f","state":32,"id":4160},{"label":"\u0641\u062a\u062d \u0627\u0628\u0627\u062f-\u06cc\u0632\u062f","state":32,"id":4157},{"label":"\u0641\u0631\u0627\u063a\u0647","state":32,"id":4145},{"label":"\u0641\u0647\u0631\u062c-\u06cc\u0632\u062f","state":32,"id":4147},{"label":"\u06a9\u0648\u0634\u06a9-\u06cc\u0632\u062f","state":32,"id":4152},{"label":"\u0645\u0628\u0627\u0631\u06a9\u0647-\u06cc\u0632\u062f","state":32,"id":4151},{"label":"\u0645\u0631\u0648\u0633\u062a","state":32,"id":2602},{"label":"\u0645\u0647\u0631\u062f\u0634\u062a","state":32,"id":2593},{"label":"\u0645\u0647\u0631\u06cc\u0632","state":32,"id":2606},{"label":"\u0645\u06cc\u0628\u062f","state":32,"id":2608},{"label":"\u0646\u0627\u062d\u06cc\u0647 \u0635\u0646\u0639\u062a\u06cc \u067e\u06cc\u0634\u06a9\u0648\u0647","state":32,"id":4158},{"label":"\u0646\u0627\u062d\u06cc\u0647 \u0635\u0646\u0639\u062a\u06cc \u06af\u0627\u0631\u06cc\u0632\u0627\u062a","state":32,"id":4161},{"label":"\u0646\u062f\u0648\u0634\u0646","state":32,"id":2609},{"label":"\u0646\u0635\u0631\u0627\u0628\u0627\u062f","state":32,"id":4159},{"label":"\u0646\u06cc\u0631","state":32,"id":2601},{"label":"\u0647\u0631\u0627\u062a","state":32,"id":2603},{"label":"\u06cc\u0632\u062f","state":32,"id":2613}]};
  var showRejectedMessage = 0;
  var rejectedMessage = "";
  var isLoggedSeller = 1;
  var walkthroughSteps = [];
  var showPriceModal = 0;
  var newSeller = 1;
  var is_yalda = 0;
</script>
<script src="{{ asset('seller/js/inputmask.js') }}"></script>

<link rel="stylesheet" href="{{ asset('seller/css/tagify.css') }}">
<script src="{{ asset('seller/js/jQuery.tagify.min.js') }}"></script>
<script src="{{ asset('seller/js/tagify.min.js') }}"></script>
<style>
  tags {
    background: white;
    border-color: #e6e9ed!important;
  }
  .tagify .tagify__tag {
    background-color: #ebedf3;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 0 .5rem !!important;
    border-radius: .42rem !important;
  }

  .tagify__input {
    color: #606265;
  }

  .c-ui-input__RD-field {
    font-size: 0.97rem !important;
  }

  .c-ui-input__field--textarea {
    font-size: 0.97rem !important;
    font-weight: unset !important;
  }

  .c-content-modal__uploads-label.empty .c-content-modal__uploads-preview:before {
    content: unset !important;
  }

</style>
@endsection
@section('content')
<main class="c-main">
    <div class="uk-container uk-container-large">
      <div class="c-grid">
        <div class="c-grid__row c-grid__row--lg-top">

          <form method="POST" id="profile-form" data-name="profile" class="c-grid__col c-grid__col--lg-9 c-grid__col--xs-gap c-grid__col--sm-gap js-profile-page" novalidate="novalidate">
            <div class="c-grid__row">
              <div class="c-grid__col">
                <div class="c-card c-RD-profile__bdrs-bottom-0">
                  <div class="c-card__body c-card__body--pd-0">
                    <div class="">
                      <nav class="uk-navbar-container uk-navbar-transparent c-RD-profile--h-70 c-profile-responsive-navbar uk-navbar" uk-navbar="" style="border-bottom: 1px solid #e6e9ed;margin-bottom: 15px; height: 57px">
                        <div class="uk-navbar-left">
                          <ul class="uk-navbar-nav">
                            <li class="c-profile-nav--menu-links js-profile-navbar uk-flex uk-flex-column" data-content="general" style="padding-top: 5px; padding-bottom: 5px; pointer-events: all;">
                              <a class="c-RD-profile__menu-text" href="#general" style="color: rgb(98, 102, 109) !important;">عمومی</a>
                              <div class="c-RD-profile__selected-nav" style="display: block;">&nbsp;</div>
                            </li>
                            <li class="c-profile-nav--menu-links js-profile-navbar uk-flex uk-flex-column" data-content="store" style="padding-top: 5px; padding-bottom: 5px; pointer-events: all;">
                              <a class="c-RD-profile__menu-text" href="#store" style=" color: rgb(161, 163, 168) !important;">فروشگاه</a>
                              <div class="c-RD-profile__selected-nav" style="display: none;">&nbsp;</div>
                            </li>
                            <li class="c-profile-nav--menu-links js-profile-navbar uk-flex uk-flex-column" data-content="footer" style="padding-top: 5px; padding-bottom: 5px; pointer-events: all;">
                              <a class="c-RD-profile__menu-text" href="#footer" style="color: rgb(161, 163, 168) !important;">پابرگ</a>
                              <div class="c-RD-profile__selected-nav" style="display: none;">&nbsp;</div>
                            </li>
                            <li class="c-profile-nav--menu-links js-profile-navbar uk-flex uk-flex-column" data-content="advanced" style="padding-top: 5px; padding-bottom: 5px; pointer-events: all;">
                              <a class="c-RD-profile__menu-text" href="#advanced" style="color: rgb(161, 163, 168) !important;">پیشرفته</a>
                              <div class="c-RD-profile__selected-nav" style="display: none;">&nbsp;</div>
                            </li>
                            <li class="c-profile-nav--menu-links js-profile-navbar uk-flex uk-flex-column" data-content="sms" style="padding-top: 5px; padding-bottom: 5px; pointer-events: all;">
                              <a class="c-RD-profile__menu-text" href="#sms" style="color: rgb(161, 163, 168) !important;">سامانه پیامکی</a>
                              <div class="c-RD-profile__selected-nav" style="display: none;">&nbsp;</div>
                            </li>
                            <li class="c-profile-nav--menu-links js-profile-navbar uk-flex uk-flex-column" data-content="email" style="padding-top: 5px; padding-bottom: 5px; pointer-events: all;">
                              <a class="c-RD-profile__menu-text" href="#email" style="color: rgb(161, 163, 168) !important;">ایمیل</a>
                              <div class="c-RD-profile__selected-nav" style="display: none;">&nbsp;</div>
                            </li>
                            <li class="c-profile-nav--menu-links js-profile-navbar uk-flex uk-flex-column" data-content="license" style="padding-top: 5px; padding-bottom: 5px; pointer-events: all;">
                              <a class="c-RD-profile__menu-text" href="#license" style="color: rgb(161, 163, 168) !important;">لایسنس</a>
                              <div class="c-RD-profile__selected-nav" style="display: none;">&nbsp;</div>
                            </li>
                          </ul>
                        </div>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-RD-profile--w-100p js-profile-content">

              <div class="c-RD-profile__dis-none " data-name="general" style="display: block;">
                <div class="c-grid__row c-RD-profile__mt-0" id="general">
                  <div class="c-grid__col">
                    <div class="c-card c-RD-profile__bdrs-top-0 js-profile-content-spinner" style="box-shadow: 0 10px 12px 0 rgba(0, 0, 0, 0.05);">
                      <div class="c-card__header c-card__header--with-controls  uk-hidden"></div>
                      <div class="c-card__body c-card__body--form">
                        <div class="c-grid__row">

                          <div class="c-grid__row">
                            <div class="c-grid__col c-grid__col--sm-6 c-grid__col--lg-10 c-RD-profile__section-title">
                              <span class="c-RD-profile__title">اطلاعات سایت</span>
                            </div>
                          </div>

                          <div class="c-grid__row">
                            <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                              <div class="c-form">
                                <label class="c-RD-profile__input-name" for="fa_store_name">نام فارسی فروشگاه:</label>
                                <div class="c-ui-input ">
                                  <input type="text" name="fa_store_name" class="c-ui-input__field c-ui-input__RD-field" value="{{ $settings->where('name', 'fa_store_name')->first()->value }}">
                                </div>
                              </div>
                            </div>
                            <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                          </div>

                          <div class="c-grid__row">
                            <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                              <div class="c-form">
                                  <label class="c-RD-profile__input-name" for="en_store_name">نام انگلیسی فروشگاه:</label>
                                  <div class="c-ui-input ">
                                    <input type="text" name="en_store_name" value="{{ $settings->where('name', 'en_store_name')->first()->value }}" class="c-ui-input__field c-ui-input__RD-field">
                                  </div>
                              </div>
                            </div>
                            <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                          </div>

                          <div class="c-grid__row">
                            <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                              <div class="c-form">
                                  <label class="c-RD-profile__input-name" for="site_url">آدرس سایت:</label>
                                  <div class="c-ui-input ">
                                    <input type="text" name="site_url" value="{{ $settings->where('name', 'site_url')->first()->value }}" class="c-ui-input__field c-ui-input__RD-field">
                                  </div>
                              </div>
                            </div>
                            <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                          </div>

                          <div class="c-grid__row">
                            <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                              <div class="c-form">
                                  <label class="c-RD-profile__input-name" for="admin_email">ایمیل مدیریت:</label>
                                  <div class="c-ui-input ">
                                    <input type="text" name="admin_email" value="{{ $settings->where('name', 'admin_email')->first()->value }}" class="c-ui-input__field c-ui-input__RD-field">
                                  </div>
                              </div>
                              <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                            </div>
                            <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                          </div>

                          <div class="c-grid__row">
                            <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                              <div class="c-form">
                                  <label class="c-RD-profile__input-name" for="management_subdomain">زیر دامنه مدیریت:</label>
                                  <div class="c-ui-input ">
                                    <input type="text" name="management_subdomain" class="c-ui-input__field c-ui-input__RD-field" value="{{ $settings->where('name', 'management_subdomain')->first()->value }}" disabled>
                                  </div>
                              </div>
                            </div>
                            <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                          </div>

                          <div class="c-grid__row">
                            <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                              <div class="c-form">
                                <label class="c-RD-profile__input-name" for="site_index_status">نمایش سایت در موتورهای جستجو:</label>
                                <div class="field-wrapper field-wrapper--justify field-wrapper--background" style="border-radius: 8px;background-color: #f5f7fa;padding-left: 15px;padding-right: 15px;min-height: 40px;">
                                  <label class="c-ui-checkbox c-ui-checkbox--small c-ui-checkbox--auto">
                                    <input type="checkbox" class="c-ui-checkbox__origin" name="site_index_status" {{ ($settings->where('name', 'site_index_status')->first()->value == 'true')? 'checked' : '' }}>
                                    <span class="c-ui-checkbox__check"></span>
                                    <span class="c-ui-checkbox__label">از موتوهای جستجو درخواست کن تا محتوای سایت را بررسی نکنند</span>
                                  </label>
                                </div>
                              </div>
                            </div>
                            <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                          </div>

                          <div class="c-grid__row">
                            <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                              <div class="c-form">
                                  <label class="c-RD-profile__input-name" for="site_title">عنوان سایت:</label>
                                  <div class="c-ui-input ">
                                    <input type="text" name="site_title" value="{{ $settings->where('name', 'site_title')->first()->value }}" class="c-ui-input__field c-ui-input__RD-field">
                                  </div>
                              </div>
                            </div>
                            <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                          </div>

                          <div class="c-grid__row">
                            <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                              <div class="c-form">
                                  <label class="c-RD-profile__input-name" for="index_meta_description">متاتگ توضیحات: (meta description)</label>
                                  <div class="c-ui-input">
                                    <textarea name="index_meta_description" class="c-ui-input__field c-ui-input__field--order c-ui-input__field--textarea" rows="4" style="border-color: #dddddd; font-weight: bold;">{{ $settings->where('name', 'index_meta_description')->first()->value }}</textarea>
                                  </div>
                              </div>
                            </div>
                            <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                          </div>

                          <div class="c-grid__row">
                            <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                              <div class="c-form">
                                  <label class="c-RD-profile__input-name" for="index_meta_keywords">کلمات کلیدی: (meta keywords)</label>
                                  <div class="c-ui-input">
                                    <input class="form-control tagify" name="index_meta_keywords" value="{{ $settings->where('name', 'index_meta_keywords')->first()->value }}" autofocus="" style="background: white !important; border-color:#e6e9ed!important; width: 100% !important;">
                                  </div>
                              </div>
                            </div>
                            <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                          </div>

                          {{--                            <label class="c-grid__row c-grid__col--sm-7" style="height: 20px;direction: ltr;width: 62% !important;">--}}
                          {{--                              <div class="c-RD-profile__approve-btn" style="margin-top: 20px;">آپلود تصویر</div>--}}
                          {{--                              <input id="brandLogoFile" id="iconUpload" type="file" class=" hidden">--}}
                          {{--                            </label>--}}

                          <div class="c-grid__row uk-margin-medium-top" style="background-color: #f5f7fa; padding: 20px; border-radius: 8px; margin-top: 20px !important;">
                            <div class="o-spacing-m-r-3" style="padding-right: 10px;">
                              <div class="field-wrapper">
                                <div id="logoUpload" class="c-content-modal__uploads-label {{ is_null($header_logo)? 'empty' : '' }}">
                                <span uk-form-custom="" class="uk-form-custom">
                                    <input id="brandLogoFile" name="upload_logo" type="file" class="hidden">
                                </span>
                                  <label for="brandLogoFile" class="c-content-modal__uploads-preview" style="border: 1px solid #e0e0e2; background-color: white;">
                                    <img src="{{ (!is_null($header_logo)? $site_url . '/' .  $header_logo->path . '/' . $header_logo->name : '') }}" id="logoUploadPreview" class="c-content-modal__uploads-img" alt="" style="width: 100% !important; height: 100%;">
                                    <span class="c-content-upload__img-loader js-img-loader">
                                    <span class="progress__wrapper">
                                        <span class="progress"></span>
                                    </span>
                                  </span>
                                    @if(!$settings->where('name', 'header_logo')->first()->media()->exists())
                                      <label class="c-RD-profile__upload-btn" id="logoUploadLable">
                                        <input id="brandLogoFile" type="file" class="hidden">
                                      </label>
                                    @endif
                                  </label>
                                </div>
                                <input type="hidden" name="logoImageTempId" id="logoImageTempId">
                                <div class="c-content-modal__errors-full" id="logoUploadErrors"></div>
                              </div>
                            </div>
                            <div class="o-spacing-m-r-3" style="padding-right: 20px;padding-top: 15px;">
                              <span style="display: block;">لوگو هدر سایت</span>
                              <span style="display: inline-block;font-size: 12px;margin-top: 7px;">اندازه استاندارد: 110x30px</span>
                              <span style="display: inline-block;font-size: 12px;margin-top: 7px;margin-right: 20px;">اندازه استاندارد: png, svg</span>
                            </div>
                          </div>

                          <div class="c-grid__row uk-margin-medium-top" style="background-color: #f5f7fa; padding: 20px; border-radius: 8px; margin-top: 20px !important;">
                            <div class="o-spacing-m-r-3" style="padding-right: 10px;">
                              <div class="field-wrapper">
                                <div id="faviconUpload" class="c-content-modal__uploads-label {{ is_null($favicon_image)? 'empty' : '' }}">
                                  <span uk-form-custom="" class="uk-form-custom">
                                      <input id="brandfaviconFile" name="upload_favicon" type="file" class="hidden">
                                  </span>

                                  <label for="brandfaviconFile" class="c-content-modal__uploads-preview" style="border: 1px solid #e0e0e2; background-color: white;">
                                    <img src="{{ (!is_null($favicon_image)? $site_url . '/' .  $favicon_image->path . '/' . $favicon_image->name : '') }}" id="faviconUploadPreview" class="c-content-modal__uploads-img" alt="" style="width: 100% !important; height: 100%;">

                                    <span class="c-content-upload__img-loader js-img-loader">
                                        <span class="progress__wrapper">
                                          <span class="progress"></span>
                                        </span>
                                    </span>
                                    @if(!$settings->where('name', 'header_logo')->first()->media()->exists())
                                      <label class="c-RD-profile__upload-btn" id="faviconUploadLable">
                                        <input id="brandfaviconFile" type="file" class="hidden">
                                      </label>
                                    @endif
                                  </label>
                                </div>
                                <input type="hidden" name="faviconImageTempId" id="faviconImageTempId">
                                <div class="c-content-modal__errors-full" id="faviconUploadErrors"></div>
                              </div>
                            </div>
                            <div class="o-spacing-m-r-3" style="padding-right: 20px;padding-top: 15px;">
                              <span style="display: block;">فاوآیکون</span>
                              <span style="display: inline-block;font-size: 12px;margin-top: 7px;">اندازه استاندارد: 96x96px</span>
                              <span style="display: inline-block;font-size: 12px;margin-top: 7px;margin-right: 20px;">اندازه استاندارد: png, svg</span>
                            </div>
                          </div>

                          <div class="c-grid__row uk-margin-medium-top" style="background-color: #f5f7fa; padding: 20px; border-radius: 8px; margin-top: 20px !important;">
                            <div class="o-spacing-m-r-3" style="padding-right: 10px;">
                              <div class="field-wrapper">
                                <div id="symbolUpload" class="c-content-modal__uploads-label {{ is_null($symbol_image)? 'empty' : '' }}">
                                  <span uk-form-custom="" class="uk-form-custom">
                                      <input id="brandsymbolFile" name="upload_symbol" type="file" class="hidden">
                                  </span>

                                  <label for="brandsymbolFile" class="c-content-modal__uploads-preview" style="border: 1px solid #e0e0e2; background-color: white;">
                                    <img src="{{ $site_url . '/' . (!is_null($symbol_image)? $symbol_image->path . '/' . $symbol_image->name : '') }}" id="symbolUploadPreview" class="c-content-modal__uploads-img" alt="" style="width: 100% !important; height: 100%;">
                                    <span class="c-content-upload__img-loader js-img-loader">
                                      <span class="progress__wrapper">
                                          <span class="progress"></span>
                                      </span>
                                    </span>
                                    @if(!$settings->where('name', 'symbol_image')->first()->media()->exists())
                                      <label class="c-RD-profile__upload-btn" id="symbolUploadLable">
                                        <input id="brandsymbolFile" type="file" class="hidden">
                                      </label>
                                    @endif
                                  </label>
                                </div>
                                <input type="hidden" name="symbolImageTempId" id="symbolImageTempId">
                                <div class="c-content-modal__errors-full" id="symbolUploadErrors"></div>
                              </div>
                            </div>
                            <div class="o-spacing-m-r-3" style="padding-right: 20px;padding-top: 15px;">
                              <span style="display: block;">نماد فروشگاه در صفحه محصول</span>
                              <span style="display: inline-block;font-size: 12px;margin-top: 7px;">اندازه استاندارد: 24x24px</span><span style="display: inline-block;font-size: 12px;margin-top: 7px;margin-right: 20px;">اندازه استاندارد: png, svg</span>
                            </div>
                          </div>


                          <div class="uk-flex uk-flex-column uk-width-1-1">
                            <div class="c-profile-business-info-logo-error o-spacing-m-t-6 o-spacing-m-b-2 uk-margin-remove-right" style="display: none;"></div>
                            <div class="c-profile-business-info-logo-error  uk-margin-remove-right o-spacing-m-b-2" style="display: none;"></div>
                          </div>

                          <div class="c-ui-form__row c-RD-profile__form-action js-profile-form-action" style="margin-right: auto">
                            <div class="c-RD-profile__cancel-btn uk-flex uk-flex-center uk-flex-middle js-profile-cancel-edit-form">بازگشت</div>
                            <div class="c-RD-profile__approve-btn uk-flex uk-flex-center uk-flex-middle uk-margin-small-right save_tab_form" data-value="general">ذخیره تغییرات</div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="c-RD-profile__dis-none " data-name="store" style="display: none;">
                <div class="c-grid__row c-RD-profile__mt-0" id="store">
                  <div class="c-grid__col">
                    <div class="c-card c-RD-profile__bdrs-top-0 js-profile-content-spinner" style="box-shadow: 0 10px 12px 0 rgba(0, 0, 0, 0.05);">
                      <div class="c-card__header c-card__header--with-controls business_info  uk-hidden"></div>
                      <div class="c-card__body c-card__body--form">

                        <div class="c-grid__row">
                          <div class="c-grid__row">
                            <div class="c-grid__col c-grid__col--sm-6 c-grid__col--lg-10 c-RD-profile__section-title">
                              <span class="c-RD-profile__title">اطلاعات فروشگاه</span>
                            </div>
                            <div class="c-RD-profile__action-btn c-RD-profile__action-btn--cancel js-profile-cancel-edit-form uk-hidden"></div>
                          </div>
                        </div>


                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="development_mode">حالت توسعه:</label>
                              <div class="field-wrapper field-wrapper--justify field-wrapper--background" style="border-radius: 8px;background-color: #f5f7fa;padding-left: 15px;padding-right: 15px;min-height: 40px;">
                                <label class="c-ui-checkbox c-ui-checkbox--small c-ui-checkbox--auto">
                                  <input type="checkbox" class="c-ui-checkbox__origin" name="development_mode" value="1"
                                    {{ ($settings->where('name', 'development_mode')->first()->value == 'true')? 'checked' : '' }}>
                                  <span class="c-ui-checkbox__check"></span>
                                  <span class="c-ui-checkbox__label">
                                    در صورت انتخاب امکان فروش در سایت غیرفعال خواهد شد و تنها امکان بازدید وجود خواهد داشت
                                  </span>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                            <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                              <div class="c-form">
                                <label class="c-RD-profile__input-name" for="auto_navigateـtoـcart">هدایت به سبد خرید بعد از افزودن کالا:</label>
                                <div class="c-ui-input ">
                                  <select class="c-ui-select c-ui-select--common c-ui-select--small c-RD-profile select2-hidden-accessible"
                                          name="auto_navigateـtoـcart" data-active="false" aria-hidden="true">
                                    <option value="true" {{ ($settings->where('name', 'auto_navigateـtoـcart')->first()->value == 'true')? 'selected' : '' }}>فعال</option>
                                    <option value="false" {{ ($settings->where('name', 'auto_navigateـtoـcart')->first()->value == 'false')? 'selected' : '' }}>غیرفعال</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                          </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="product_code_prefix">
                                پیشوند کد محصول:
                              </label>
                              <div class="c-ui-input ">
                                <input type="text" value="{{ $settings->where('name', 'product_code_prefix')->first()->value }}" name="product_code_prefix" class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="product_title_prefix">
                                پیشوند عنوان محصول:
                              </label>
                              <div class="c-ui-input ">
                                <input type="text" value="{{ $settings->where('name', 'product_title_prefix')->first()->value }}" name="product_title_prefix" class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="max_add_to_cart_num">
                                حداکثر تعداد قابل افزودن به سبد خرید: (برای نامحدود شدن فیلد را خالی رها کنید)
                              </label>
                              <div class="c-ui-input ">
                                <input type="number" value="{{ $settings->where('name', 'max_add_to_cart_num')->first()->value }}" name="max_add_to_cart_num" class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="max_shipping_day_count">حداکثر زمان ارسال کالا:</label>
                              <div class="c-ui-input ">
                                <label class="c-content-input">
                                  <input type="number" name="max_shipping_day_count" value="{{ $settings->where('name', 'max_shipping_day_count')->first()->value }}" class="c-ui-input__field c-ui-input__RD-field">
                                  <span class="c-content-input__text c-content-input__text--overlay" style="left: 0 !important;right: unset !important;">روز</span>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="products_per_page_count">تعداد محصولات در هر صفحه:</label>
                              <div class="c-ui-input ">
                                <input type="number" name="products_per_page_count" value="{{ $settings->where('name', 'products_per_page_count')->first()->value }}" class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                                <label class="c-RD-profile__input-name" for="store_city">
                                  محل فروشگاه: (برای محاسبه هزینه ارسال کالا)
                                </label>
                                <div class="c-ui-input ">
                                  <select name="store_city" class="c-ui-select c-ui-select--common c-ui-select--small c-RD-profile js-profile-contact-city-select select2-hidden-accessible" aria-hidden="true">
                                    <option value=""> انتخاب کنید </option>
                                    @foreach($states as $state)
                                      <option value="{{ $state->id }}" {{ ($settings->where('name', 'store_city')->first()->states()->first()->id == $state->id)? 'selected' : '' }}> {{ $state->name }} </option>
                                    @endforeach
                                  </select>
                                </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>


                        <div class="c-grid__row" style="margin-top: 75px !important;">
                        <div class="c-grid__col c-grid__col--sm-6 c-grid__col--lg-10 c-RD-profile__section-title">
                          <span class="c-RD-profile__title">تحویل حضوری فروشگاه</span>
                        </div>
                        <div class="c-RD-profile__action-btn c-RD-profile__action-btn--cancel uk-hidden"></div>
                      </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-12">
                            <label class="c-RD-profile__input-name" for="inـpersonـdelivery" style="width: 100%">فعال/غیر فعال کردن تحویل حضوری کالا:</label>
                            <div class="field-wrapper field-wrapper--justify field-wrapper--background"
                                 style="border-radius: 8px;background-color: #f5f7fa;padding-left: 15px;padding-right: 15px;min-height: 40px;width: 46%;">
                              <label class="c-ui-checkbox c-ui-checkbox--small c-ui-checkbox--auto">
                                <input type="checkbox" class="c-ui-checkbox__origin" name="inـpersonـdelivery" value="1"
                                  {{ ($settings->where('name', 'inـpersonـdelivery')->first()->value == 'true')? 'checked' : '' }}>
                                <span class="c-ui-checkbox__check"></span>
                                <span class="c-ui-checkbox__label">
                                  در صورت انتخاب امکان تحویل حضوری کالا در آدرس های تعیین شده  وجود خواهد داشت
                                </span>
                              </label>
                            </div>
                            <a class="c-RD-profile__action-btn c-RD-profile__action-btn--outline c-RD-profile__action-btn--add c-RD-profile__asfe new-address-btn" style="margin-right: 28px; {{ ($settings->where('name', 'inـpersonـdelivery')->first()->value !== 'true')? 'display:none;' : '' }}">آدرس جدید</a>
                          </div>
                        </div>

                        <div class="c-grid__row shop_address" style="{{ ($settings->where('name', 'inـpersonـdelivery')->first()->value !== 'true')? 'display:none;' : '' }}">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-9">
                            <div class="c-form address-section" >
                              <label class="c-RD-profile__input-name" for="shop_address" style="display: block;margin-top: 30px !important; font-weight: bold; font-size: 13px !important; ">آدرس فروشگاه:</label>


                              @if(count($store_addresses))
                                @foreach($store_addresses as $store_address)
                                  <div class="address-row" style="margin-top: 20px">
                                    <div style="float: right;width: 94.2%;">
                                      <input type="text" name="shop_address" value="{{ $store_address->address }}" data-id="{{ $store_address->id }}" class="c-ui-input__field c-ui-input__RD-field">
                                    </div>
                                    <div class="c-ui-form__col c-ui-form__col--wrap-xs c-ui-form__col--pull-left uk-margin-remove-right" style="display: inline-block;margin-left: 0px !important;padding-left: 0px !important;">
                                      <div class="c-RD-profile__delete-warehouse c-RD-profile__delete-warehouse--danger delete-addreess" data-id="{{ $store_address->id }}" style="padding: 9px;"></div>
                                    </div>
                                  </div>
                                @endforeach
                              @endif

                            </div>
                          </div>



                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">

                          </div>
                        </div>

                        <div class="c-ui-form__row c-RD-profile__form-action" style="margin-right: auto">
                          <div class="c-RD-profile__cancel-btn uk-flex uk-flex-center uk-flex-middle js-profile-cancel-edit-form">بازگشت</div>
                          <div class="c-RD-profile__approve-btn uk-flex uk-flex-center uk-flex-middle uk-margin-small-right save_tab_form" data-value="store">ذخیره تغییرات</div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="c-RD-profile__dis-none " data-name="email" style="display: none;">
                <div class="c-grid__row c-RD-profile__mt-0" id="email">
                  <div class="c-grid__col">
                    <div class="c-card c-RD-profile__bdrs-top-0 js-profile-content-spinner" style="box-shadow: 0 10px 12px 0 rgba(0, 0, 0, 0.05);">
                      <div class="c-card__header c-card__header--with-controls business_info  uk-hidden"></div>
                      <div class="c-card__body c-card__body--form">

                        <div class="c-grid__row">
                          <div class="c-grid__row">
                            <div class="c-grid__col c-grid__col--sm-6 c-grid__col--lg-10 c-RD-profile__section-title">
                              <span class="c-RD-profile__title">تنظیمات ایمیل</span>
                            </div>
                            <div class="c-RD-profile__action-btn c-RD-profile__action-btn--cancel js-profile-cancel-edit-form uk-hidden"></div>
                          </div>
                        </div>


                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="site_email_status">فعال/غیر فعال کردن ایمیل فروشگاه:</label>
                              <div class="field-wrapper field-wrapper--justify field-wrapper--background"
                                   style="border-radius: 8px;background-color: #f5f7fa;padding-left: 15px;padding-right: 15px;min-height: 40px;">
                                <label class="c-ui-checkbox c-ui-checkbox--small c-ui-checkbox--auto">
                                  <input type="checkbox" class="c-ui-checkbox__origin" name="site_email_status" value="1"
                                    {{ ($settings->where('name', 'site_email_status')->first()->value == 'active')? 'checked' : '' }}>
                                  <span class="c-ui-checkbox__check"></span>
                                  <span class="c-ui-checkbox__label">
                                    فعالسازی ایمیل فروشگاه
                                  </span>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="mail_server">
                                سرویس دهنده ایمیل:
                              </label>
                              <div class="c-ui-input ">
                                <input type="text" name="mail_server" value="{{ $settings->where('name', 'mail_server')->first()->value }}"
                                       class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="mail_port">درگاه:</label>
                              <div class="c-ui-input ">
                                <label class="c-content-input">
                                  <input type="number" name="mail_port" value="{{ $settings->where('name', 'mail_port')->first()->value }}"
                                         class="c-ui-input__field c-ui-input__RD-field">
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="mail_username">نام کاربری:</label>
                              <div class="c-ui-input ">
                                <input type="text" name="mail_username" value="{{ $settings->where('name', 'mail_username')->first()->value }}"
                                       class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                                <label class="c-RD-profile__input-name" for="mail_password">
                                  کلمه عبور:
                                </label>
                                <div class="c-ui-input ">
                                  <input type="text" name="mail_password" value="{{ $settings->where('name', 'mail_password')->first()->value }}"
                                         class="c-ui-input__field c-ui-input__RD-field">
                                </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="mail_password">
                                آدرس ایمیل:
                              </label>
                              <div class="c-ui-input ">
                                <input type="text" name="mail_address"  value="{{ $settings->where('name', 'mail_address')->first()->value }}"
                                       class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="order_email_status">
                                ارسال ایمیل ثبت موفق سفارش به مشتری:
                              </label>
                              <div class="c-ui-input ">
                                <select class="c-ui-select c-ui-select--common c-ui-select--small c-RD-profile select2-hidden-accessible"
                                        name="order_email_status" data-active="false" aria-hidden="true">
                                  <option value="active" {{ ($settings->where('name', 'order_email_status')->first()->value == 'active')? 'selected' : '' }}>فعال</option>
                                  <option value="inactive" {{ ($settings->where('name', 'order_email_status')->first()->value == 'inactive')? 'selected' : '' }}>غیرفعال</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">

                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="order_email_text">متن ایمیل ثبت موفق سفارش:

                              </label>
                              <div class="c-ui-input">
                                <textarea name="order_email_text" class="c-ui-input__field c-ui-input__field--order c-ui-input__field--textarea"
                                          rows="5" style="border-color: #dddddd; font-weight: bold;">{{ $settings->where('name', 'order_email_text')->first()->value }}</textarea>
                              </div>
                              <div class="c-profile-business-info-logo-hint" style="margin-right: 0px !important; margin-top: 10px !important;">
                                <span>نام مشتری:  <strong>[customer]</strong></span>&nbsp;&nbsp;
                                <span>شماره سفارش: <strong>[order_code]</strong></span>&nbsp;&nbsp;
                                <span>لینک پیگیری: <strong>[tracking_url]</strong></span>&nbsp;&nbsp;
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="delivery_email_status">
                                ارسال ایمیل وضعیت تحویل کالا به مشتری:
                              </label>
                              <div class="c-ui-input ">
                                <select class="c-ui-select c-ui-select--common c-ui-select--small c-RD-profile select2-hidden-accessible"
                                        name="delivery_email_status" data-active="false" aria-hidden="true">
                                  <option value="active" {{ ($settings->where('name', 'delivery_email_status')->first()->value == 'active')? 'selected' : '' }}>فعال</option>
                                  <option value="inactive" {{ ($settings->where('name', 'delivery_email_status')->first()->value == 'inactive')? 'selected' : '' }}>غیرفعال</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="delivery_email_text">متن ایمیل وضعیت تحویل کالا:</label>
                              <div class="c-ui-input">
                                <textarea name="delivery_email_text" class="c-ui-input__field c-ui-input__field--order c-ui-input__field--textarea"
                                          rows="5" style="border-color: #dddddd; font-weight: bold;">{{ $settings->where('name', 'delivery_email_text')->first()->value }}</textarea>
                              </div>
                              <div class="c-profile-business-info-logo-hint" style="margin-right: 0px !important; margin-top: 10px !important;">
                                <span>نام مشتری:  <strong>[customer]</strong></span>&nbsp;&nbsp;
                                <span>شماره سفارش: <strong>[order_code]</strong></span>&nbsp;&nbsp;
                                <span>لینک پیگیری: <strong>[tracking_url]</strong></span>&nbsp;&nbsp;
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="email_forgot_code_status">
                                بازیابی رمز عبور از طریق ایمیل:
                              </label>
                              <div class="c-ui-input ">
                                <select class="c-ui-select c-ui-select--common c-ui-select--small c-RD-profile select2-hidden-accessible"
                                        name="email_forgot_code_status" data-active="false" aria-hidden="true">
                                  <option value="active"  {{ ($settings->where('name', 'email_forgot_code_status')->first()->value == 'active')? 'selected' : '' }}>فعال</option>
                                  <option value="inactive"  {{ ($settings->where('name', 'email_forgot_code_status')->first()->value == 'inactive')? 'selected' : '' }}>غیرفعال</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="send_registration_code_to_email">
                                الزامی بودن تایید ایمیل هنگام ثبت نام:
                              </label>
                              <div class="c-ui-input ">
                                <select class="c-ui-select c-ui-select--common c-ui-select--small c-RD-profile select2-hidden-accessible"
                                        name="email_reg_code_status" data-active="false" aria-hidden="true">
                                  <option value="active" {{ ($settings->where('name', 'email_reg_code_status')->first()->value == 'active')? 'selected' : '' }}>فعال</option>
                                  <option value="inactive" {{ ($settings->where('name', 'email_reg_code_status')->first()->value == 'inactive')? 'selected' : '' }}>غیرفعال</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-ui-form__row c-RD-profile__form-action" style="margin-right: auto">
                          <div class="c-RD-profile__cancel-btn uk-flex uk-flex-center uk-flex-middle js-profile-cancel-edit-form">بازگشت</div>
                          <div class="c-RD-profile__approve-btn uk-flex uk-flex-center uk-flex-middle uk-margin-small-right js-profile-submit-changes save_tab_form" data-value="email">ذخیره تغییرات</div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="c-RD-profile__dis-none " data-name="footer" style="display: none;">
                <div class="c-grid__row c-RD-profile__mt-0" id="footer">
                  <div class="c-grid__col">
                    <div class="c-card c-RD-profile__bdrs-top-0 js-profile-content-spinner" style="box-shadow: 0 10px 12px 0 rgba(0, 0, 0, 0.05);">
                      <div class="c-card__header c-card__header--with-controls business_info  uk-hidden"></div>
                      <div class="c-card__body c-card__body--form">

                        <div class="c-grid__row">
                          <div class="c-grid__row">
                            <div class="c-grid__col c-grid__col--sm-6 c-grid__col--lg-10 c-RD-profile__section-title">
                              <span class="c-RD-profile__title">اطلاعات فوتر</span>
                            </div>
                            <div class="c-RD-profile__action-btn c-RD-profile__action-btn--cancel js-profile-cancel-edit-form uk-hidden"></div>
                          </div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="footer_slogan">شعار تبلیغاتی یا آدرس:</label>
                              <div class="c-ui-input ">
                                <input type="text" value="{{ $settings->where('name', 'footer_slogan')->first()->value }}" name="footer_slogan" class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="copyright_text">متن کپی رایت:</label>
                              <div class="c-ui-input">
                                <textarea name="copyright_text" class="c-ui-input__field c-ui-input__field--order c-ui-input__field--textarea" maxlength="1500" rows="5" style="border-color: #dddddd; font-weight: bold;">{{ $settings->where('name', 'copyright_text')->first()->value }}</textarea>
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="store_phone">شماره تماس:</label>
                              <div class="c-ui-input ">
                                <input type="text" name="store_phone" value="{{ $settings->where('name', 'store_phone')->first()->value }}" class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="store_email">آدرس ایمیل:</label>
                              <div class="c-ui-input ">
                                <input type="text" name="store_email" value="{{ $settings->where('name', 'store_email')->first()->value }}" class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="footer_desc_title">
                                عنوان بخش توضیحات فروشگاه: (H1)
                              </label>
                              <div class="c-ui-input ">
                                <input type="text" name="footer_desc_title" value="{{ $settings->where('name', 'footer_desc_title')->first()->value }}" class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-12 c-grid__col--lg-12">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="footer_description">توضیحات فروشگاه:</label>
                              <div class="c-ui-input">
                                <textarea name="footer_description" class="c-ui-input__field c-ui-input__field--order c-ui-input__field--textarea" rows="5" style="border-color: #dddddd; font-weight: bold;"
                                >{{ $settings->where('name', 'footer_description')->first()->value }}</textarea>
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>



                        <div class="c-grid__row" style="margin-top: 75px !important;">
                          <div class="c-grid__col c-grid__col--sm-6 c-grid__col--lg-10 c-RD-profile__section-title">
                            <span class="c-RD-profile__title" style="width: auto;">نماد های الکترونیک &nbsp;</span>
                            <span style="font-size: 11px;"> (در صورتی که قصد نمایش نماد را ندارید فیلد را خالی رها کنید)</span>
                          </div>
                          <div class="c-RD-profile__action-btn c-RD-profile__action-btn--cancel uk-hidden"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="ecunion_link">لینک مجوز اتحادیه کسب و کارهای مجازی:</label>
                              <div class="c-ui-input ">
                                <input type="text" name="ecunion_link" value="{{ $settings->where('name', 'ecunion_link')->first()->value }}" class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="enamad_link">لینک نماد اعتماد الکترونیکی:</label>
                              <div class="c-ui-input ">
                                <input type="text" name="enamad_link" value="{{ $settings->where('name', 'enamad_link')->first()->value }}" class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="samandehi_link">لینک نشان ملی ثبت ساماندهی:</label>
                              <div class="c-ui-input ">
                                <input type="text" name="samandehi_link" value="{{ $settings->where('name', 'samandehi_link')->first()->value }}" class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>



                        <div class="c-grid__row" style="margin-top: 75px !important;">
                          <div class="c-grid__col c-grid__col--sm-6 c-grid__col--lg-10 c-RD-profile__section-title">
                            <span class="c-RD-profile__title" style="width: auto;">شبکه‌های اجتماعی &nbsp;</span>
                            <span style="font-size: 11px;"> (در صورتی که قصد نمایش ندارید فیلد را خالی رها کنید)</span>
                          </div>
                          <div class="c-RD-profile__action-btn c-RD-profile__action-btn--cancel uk-hidden"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="instagram_link">لینک اینستاگرام:</label>
                              <div class="c-ui-input ">
                                <input type="text" name="instagram_link" value="{{ $settings->where('name', 'instagram_link')->first()->value }}" class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="twitter_link">لینک توییتر:</label>
                              <div class="c-ui-input ">
                                <input type="text" name="twitter_link" value="{{ $settings->where('name', 'twitter_link')->first()->value }}" class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="aparat_link">لینک آپارات:</label>
                              <div class="c-ui-input ">
                                <input type="text" name="aparat_link" value="{{ $settings->where('name', 'aparat_link')->first()->value }}" class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="linkedin_link">لینک لینکدین:</label>
                              <div class="c-ui-input ">
                                <input type="text" name="linkedin_link" value="{{ $settings->where('name', 'linkedin_link')->first()->value }}" class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="whatsapp_link">لینک واتساپ:</label>
                              <div class="c-ui-input ">
                                <input type="text" name="whatsapp_link" value="{{ $settings->where('name', 'whatsapp_link')->first()->value }}" class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="telegram_link">لینک تلگرام:</label>
                              <div class="c-ui-input ">
                                <input type="text" name="telegram_link" value="{{ $settings->where('name', 'telegram_link')->first()->value }}" class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>



                        <div class="c-grid__row" style="margin-top: 75px !important;">
                          <div class="c-grid__col c-grid__col--sm-6 c-grid__col--lg-10 c-RD-profile__section-title">
                            <span class="c-RD-profile__title" style="width: auto;">معرفی اپلیکیشن &nbsp;</span>
                            <span style="font-size: 11px;"> (در صورتی که قصد نمایش ندارید فیلد را خالی رها کنید)</span>
                          </div>
                          <div class="c-RD-profile__action-btn c-RD-profile__action-btn--cancel uk-hidden"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="googleplay_link">لینک گوگل پلی:</label>
                              <div class="c-ui-input ">
                                <input type="text" name="googleplay_link" value="{{ $settings->where('name', 'googleplay_link')->first()->value }}" class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="cafebazaar_link">لینک کافه بازار:</label>
                              <div class="c-ui-input ">
                                <input type="text" name="cafebazaar_link" value="{{ $settings->where('name', 'cafebazaar_link')->first()->value }}" class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="myket_link">لینک مایکت:</label>
                              <div class="c-ui-input ">
                                <input type="text" name="myket_link" value="{{ $settings->where('name', 'myket_link')->first()->value }}" class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="sibapp_link">لینک سیب اپ:</label>
                              <div class="c-ui-input ">
                                <input type="text" name="sibapp_link" value="{{ $settings->where('name', 'sibapp_link')->first()->value }}" class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-ui-form__row c-RD-profile__form-action" style="margin-right: auto">
                          <div class="c-RD-profile__cancel-btn uk-flex uk-flex-center uk-flex-middle js-profile-cancel-edit-form">بازگشت</div>
                          <div class="c-RD-profile__approve-btn uk-flex uk-flex-center uk-flex-middle uk-margin-small-right js-profile-submit-changes save_tab_form" data-value="footer">ذخیره تغییرات</div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="c-RD-profile__dis-none " data-name="advanced" style="display: none;">
                <div class="c-grid__row c-RD-profile__mt-0" id="advanced">
                  <div class="c-grid__col">
                    <div class="c-card c-RD-profile__bdrs-top-0 js-profile-content-spinner" style="box-shadow: 0 10px 12px 0 rgba(0, 0, 0, 0.05);">
                      <div class="c-card__header c-card__header--with-controls business_info  uk-hidden"></div>
                      <div class="c-card__body c-card__body--form">

                        <div class="c-grid__row">
                          <div class="c-grid__row">
                            <div class="c-grid__col c-grid__col--sm-6 c-grid__col--lg-10 c-RD-profile__section-title">
                              <span class="c-RD-profile__title">تنظیمات پیشرفته</span>
                            </div>
                            <div class="c-RD-profile__action-btn c-RD-profile__action-btn--cancel js-profile-cancel-edit-form uk-hidden"></div>
                          </div>
                        </div>


                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-12 c-grid__col--lg-12">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="custom_header_code">اضافه کردن شماره سفارشی در تگ HEAD:</label>
                              <div class="c-ui-input">
                                <textarea name="custom_header_code" class="c-ui-input__field c-ui-input__field--order c-ui-input__field--textarea"
                                          rows="5" style="border-color: #dddddd; font-weight: bold;"
                                >{{ $settings->where('name', 'custom_header_code')->first()->value }}</textarea>
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-12 c-grid__col--lg-12">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="custom_footer_code">اضافه کردن شماره سفارشی در Footer:</label>
                              <div class="c-ui-input">
                                <textarea name="custom_footer_code" class="c-ui-input__field c-ui-input__field--order c-ui-input__field--textarea"
                                          rows="5" style="border-color: #dddddd; font-weight: bold;"
                                >{{ $settings->where('name', 'custom_footer_code')->first()->value }}</textarea>
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-12 c-grid__col--lg-12">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="custom_css_code">کد CSS سفارشی:</label>
                              <div class="c-ui-input">
                                <textarea name="custom_css_code" class="c-ui-input__field c-ui-input__field--order c-ui-input__field--textarea"
                                          rows="5" style="border-color: #dddddd; font-weight: bold;"
                                >{{ $settings->where('name', 'custom_css_code')->first()->value }}</textarea>
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>


                        <div class="c-ui-form__row c-RD-profile__form-action" style="margin-right: auto">
                          <div class="c-RD-profile__cancel-btn uk-flex uk-flex-center uk-flex-middle js-profile-cancel-edit-form">بازگشت</div>
                          <div class="c-RD-profile__approve-btn uk-flex uk-flex-center uk-flex-middle uk-margin-small-right js-profile-submit-changes save_tab_form" data-value="advanced">ذخیره تغییرات</div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="c-RD-profile__dis-none " data-name="license" style="display: none;">
                <div class="c-grid__row c-RD-profile__mt-0" id="license">
                  <div class="c-grid__col">
                    <div class="c-card c-RD-profile__bdrs-top-0 js-profile-content-spinner" style="box-shadow: 0 10px 12px 0 rgba(0, 0, 0, 0.05);">
                      <div class="c-card__header c-card__header--with-controls business_info  uk-hidden"></div>
                      <div class="c-card__body c-card__body--form">

                        <div class="c-grid__row">
                          <div class="c-grid__row">
                            <div class="c-grid__col c-grid__col--sm-6 c-grid__col--lg-10 c-RD-profile__section-title">
                              <span class="c-RD-profile__title">فعالسازی محصول</span>
                            </div>
                            <div class="c-RD-profile__action-btn c-RD-profile__action-btn--cancel js-profile-cancel-edit-form uk-hidden"></div>
                          </div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="license_username">نام کاربری:</label>
                              <div class="c-ui-input ">
                                <input type="text" name="license_username" class="c-ui-input__field c-ui-input__RD-field" value="">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="license_order_code">شماره سفارش:</label>
                              <div class="c-ui-input ">
                                <input type="number" name="license_order_code" class="c-ui-input__field c-ui-input__RD-field" value="">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>










                        <div class="c-ui-form__row c-RD-profile__form-action" style="margin-right: auto">
                          <div class="c-RD-profile__cancel-btn uk-flex uk-flex-center uk-flex-middle js-profile-cancel-edit-form">بازگشت</div>
                          <div class="c-RD-profile__approve-btn uk-flex uk-flex-center uk-flex-middle uk-margin-small-right js-profile-submit-changes save_tab_form" data-value="license">ذخیره تغییرات</div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="c-RD-profile__dis-none " data-name="sms" style="display: none;">
                <div class="c-grid__row c-RD-profile__mt-0" id="sms">
                  <div class="c-grid__col">
                    <div class="c-card c-RD-profile__bdrs-top-0 js-profile-content-spinner" style="box-shadow: 0 10px 12px 0 rgba(0, 0, 0, 0.05);">
                      <div class="c-card__header c-card__header--with-controls business_info  uk-hidden"></div>
                      <div class="c-card__body c-card__body--form">

                        <div class="c-grid__row">
                          <div class="c-grid__row">
                            <div class="c-grid__col c-grid__col--sm-6 c-grid__col--lg-10 c-RD-profile__section-title">
                              <span class="c-RD-profile__title">تنظیمات سامانه پیامکی</span>
                            </div>
                            <div class="c-RD-profile__action-btn c-RD-profile__action-btn--cancel js-profile-cancel-edit-form uk-hidden"></div>
                          </div>
                        </div>


                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="site_sms_status">فعال/غیرفعالسازی:</label>
                              <div class="field-wrapper field-wrapper--justify field-wrapper--background" style="border-radius: 8px;background-color: #f5f7fa;padding-left: 15px;padding-right: 15px;min-height: 40px;">
                                <label class="c-ui-checkbox c-ui-checkbox--small c-ui-checkbox--auto">
                                  <input type="checkbox" class="c-ui-checkbox__origin" name="site_sms_status" value="1"
                                    {{ ($settings->where('name', 'site_sms_status')->first()->value == 'active')? 'checked' : '' }} >
                                  <span class="c-ui-checkbox__check"></span>
                                  <span class="c-ui-checkbox__label">
                                    در صورت انتخاب سامانه پیامکی فعال می شود
                                  </span>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="sms_provider">سرویس دهنده پیامک:</label>
                              <div class="c-ui-input ">
                                <select class="c-ui-select c-ui-select--common c-ui-select--small c-RD-profile select2-hidden-accessible"
                                        name="sms_provider" data-active="false" aria-hidden="true">
                                  <option value="kavenegar" {{ ($settings->where('name', 'sms_provider')->first()->value == 'kavenegar')? 'selected' : '' }}>کاوه نگار</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="api_key">
                                کلید ای پی آی (API Key):
                              </label>
                              <div class="c-ui-input ">
                                <input type="text" name="api_key" value="{{ $settings->where('name', 'api_key')->first()->value }}" class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="order_sms_text">متن پیام ثبت موفق سفارش:</label>
                              <div class="c-ui-input">
                                  <textarea name="order_sms_text" class="c-ui-input__field c-ui-input__field--order c-ui-input__field--textarea"  rows="5" style="border-color: #dddddd; font-weight: bold;">{{ $settings->where('name', 'order_sms_text')->first()->value }}</textarea>
                              </div>
                              <div class="c-profile-business-info-logo-hint" style="margin-right: 0px !important; margin-top: 10px !important;">
                                <span>نام مشتری:  <strong>[customer]</strong></span>&nbsp;&nbsp;
                                <span>شماره سفارش: <strong>[order_code]</strong></span>&nbsp;&nbsp;
                                <span>لینک پیگیری: <strong>[tracking_url]</strong></span>&nbsp;&nbsp;
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="sms_sender_number">شماره خط ارسالی:</label>
                              <div class="c-ui-input ">
                                <input type="number" name="sms_sender_number" value="{{ $settings->where('name', 'sms_sender_number')->first()->value }}" class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="delivery_sms_status">
                                ارسال پیامک وضعیت تحویل کالا به مشتری:
                              </label>
                              <div class="c-ui-input ">
                                <select class="c-ui-select c-ui-select--common c-ui-select--small c-RD-profile select2-hidden-accessible"
                                        name="delivery_sms_status" data-active="false" aria-hidden="true">
                                  <option value="active" {{ ($settings->where('name', 'delivery_sms_status')->first()->value == 'active')? 'selected' : '' }}>فعال</option>
                                  <option value="inactive" {{ ($settings->where('name', 'delivery_sms_status')->first()->value == 'inactive')? 'selected' : '' }}>غیرفعال</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>


                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="delivery_sms_text">متن ایمیل وضعیت تحویل کالا:</label>
                              <div class="c-ui-input">
                                <textarea name="delivery_sms_text" class="c-ui-input__field c-ui-input__field--order c-ui-input__field--textarea"
                                          maxlength="1500" rows="5" style="border-color: #dddddd; font-weight: bold;"
                                          >{{ $settings->where('name', 'delivery_sms_text')->first()->value }}</textarea>
                              </div>
                              <div class="c-profile-business-info-logo-hint" style="margin-right: 0px !important; margin-top: 10px !important;">
                                <span>نام مشتری:  <strong>[customer]</strong></span>&nbsp;&nbsp;
                                <span>شماره سفارش: <strong>[order_code]</strong></span>&nbsp;&nbsp;
                                <span>لینک پیگیری: <strong>[tracking_url]</strong></span>&nbsp;&nbsp;
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>


                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="sms_forgot_code_status">
                                بازیابی رمز عبور از طریق پیامک:
                              </label>
                              <div class="c-ui-input ">
                                <select class="c-ui-select c-ui-select--common c-ui-select--small c-RD-profile select2-hidden-accessible"
                                        name="sms_forgot_code_status" data-active="false" aria-hidden="true">
                                  <option value="active" {{ ($settings->where('name', 'sms_forgot_code_status')->first()->value == 'active')? 'selected' : '' }}>فعال</option>
                                  <option value="inactive" {{ ($settings->where('name', 'sms_forgot_code_status')->first()->value == 'inactive')? 'selected' : '' }}>غیرفعال</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="sms_reg_code_status">
                                الزامی بودن تایید شماره موبایل هنگام ثبت نام:
                              </label>
                              <div class="c-ui-input ">
                                <select class="c-ui-select c-ui-select--common c-ui-select--small c-RD-profile select2-hidden-accessible"
                                        name="sms_reg_code_status" data-active="false" aria-hidden="true">
                                  <option value="active" {{ ($settings->where('name', 'sms_reg_code_status')->first()->value == 'active')? 'selected' : '' }}>فعال</option>
                                  <option value="inactive" {{ ($settings->where('name', 'sms_reg_code_status')->first()->value == 'inactive')? 'selected' : '' }}>غیرفعال</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-ui-form__row c-RD-profile__form-action" style="margin-right: auto">
                          <div class="c-RD-profile__cancel-btn uk-flex uk-flex-center uk-flex-middle js-profile-cancel-edit-form">بازگشت</div>
                          <div class="c-RD-profile__approve-btn uk-flex uk-flex-center uk-flex-middle uk-margin-small-right js-profile-submit-changes save_tab_form" data-value="sms">ذخیره تغییرات</div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
        </div>
      </div>
      </form>
        </div>
      </div>
    </div>
  </main>
@endsection
@section('script')
<script>

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function initLogoUpload() {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  let $logoUpload = $('#logoUpload');
  let $previewImg = $('#logoUploadPreview');
  let $errorsSection = $('#logoUploadErrors');
  window.UIkit.upload($logoUpload, {
    url: "{{ route('staff.settings.UploadImage') }}",
    beforeSend: function () {
      $errorsSection.html('');
    },
    beforeSend: e => e.headers = { 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') },
    beforeAll: function () {
      $logoUpload.addClass('loading');
      $errorsSection.html('');
    },
    load: function () {
    },
    error: function () {
    },
    complete: function () {
      let result = JSON.parse(arguments[0].response);
      if (typeof result.status === 'undefined') {
        return;
      }
      $errorsSection.html('');
      $errorsSection.addClass('hidden');
      /**
       * @param result
       * @param result.data.errors errors related to image validation
       * @param result.data.error_server error related to cloud upload
       */
      if (typeof result.data.errors !== 'undefined') {
        $.each(result.data.errors, function (messageKey, messageText) {
          let $div = $('<div/>');
          $div.html(messageText);
          $errorsSection.append($div);
        });
        $errorsSection.removeClass('hidden');
        $logoUpload.removeClass('loading');
        return;
      }

      if (typeof result.data.error_server !== 'undefined') {
        let $div = $('<div/>');
        $div.html(result.data.error_server);
        $errorsSection.append($div);
        $errorsSection.removeClass('hidden');
        $logoUpload.removeClass('loading');
        return;
      }

      $logoUpload.removeClass('empty loading');
      $previewImg.attr('src', result.data.url);
      $("#logoUploadLable").remove();
      $('#logoImageTempId').val(result.data.id);
    },
    loadStart: function () {
    },
    progress: function () {
    },
    loadEnd: function () {
    },
    completeAll: function () {
    }
  });

}
function initfaviconUpload() {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  let $faviconUpload = $('#faviconUpload');
  let $previewImg = $('#faviconUploadPreview');
  let $errorsSection = $('#faviconUploadErrors');
  window.UIkit.upload($faviconUpload, {
    url: "{{ route('staff.settings.UploadImage') }}",
    beforeSend: function () {
      $errorsSection.html('');
    },
    beforeSend: e => e.headers = { 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') },
    beforeAll: function () {
      $faviconUpload.addClass('loading');
      $errorsSection.html('');
    },
    load: function () {
    },
    error: function () {
    },
    complete: function () {
      let result = JSON.parse(arguments[0].response);
      if (typeof result.status === 'undefined') {
        return;
      }
      $errorsSection.html('');
      $errorsSection.addClass('hidden');
      /**
       * @param result
       * @param result.data.errors errors related to image validation
       * @param result.data.error_server error related to cloud upload
       */
      if (typeof result.data.errors !== 'undefined') {
        $.each(result.data.errors, function (messageKey, messageText) {
          let $div = $('<div/>');
          $div.html(messageText);
          $errorsSection.append($div);
        });
        $errorsSection.removeClass('hidden');
        $faviconUpload.removeClass('loading');
        return;
      }

      if (typeof result.data.error_server !== 'undefined') {
        let $div = $('<div/>');
        $div.html(result.data.error_server);
        $errorsSection.append($div);
        $errorsSection.removeClass('hidden');
        $faviconUpload.removeClass('loading');
        return;
      }

      $faviconUpload.removeClass('empty loading');
      $previewImg.attr('src', result.data.url);
      $("#faviconUploadLable").remove();
      $('#faviconImageTempId').val(result.data.id);
    },
    loadStart: function () {
    },
    progress: function () {
    },
    loadEnd: function () {
    },
    completeAll: function () {
    }
  });

}
function initsymbolUpload() {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  let $symbolUpload = $('#symbolUpload');
  let $previewImg = $('#symbolUploadPreview');
  let $errorsSection = $('#symbolUploadErrors');
  window.UIkit.upload($symbolUpload, {
    url: "{{ route('staff.settings.UploadImage') }}",
    beforeSend: function () {
      $errorsSection.html('');
    },
    beforeSend: e => e.headers = { 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') },
    beforeAll: function () {
      $symbolUpload.addClass('loading');
      $errorsSection.html('');
    },
    load: function () {
    },
    error: function () {
    },
    complete: function () {
      let result = JSON.parse(arguments[0].response);
      if (typeof result.status === 'undefined') {
        return;
      }
      $errorsSection.html('');
      $errorsSection.addClass('hidden');
      /**
       * @param result
       * @param result.data.errors errors related to image validation
       * @param result.data.error_server error related to cloud upload
       */
      if (typeof result.data.errors !== 'undefined') {
        $.each(result.data.errors, function (messageKey, messageText) {
          let $div = $('<div/>');
          $div.html(messageText);
          $errorsSection.append($div);
        });
        $errorsSection.removeClass('hidden');
        $symbolUpload.removeClass('loading');
        return;
      }

      if (typeof result.data.error_server !== 'undefined') {
        let $div = $('<div/>');
        $div.html(result.data.error_server);
        $errorsSection.append($div);
        $errorsSection.removeClass('hidden');
        $symbolUpload.removeClass('loading');
        return;
      }

      $symbolUpload.removeClass('empty loading');
      $previewImg.attr('src', result.data.url);
      $("#symbolUploadLable").remove();
      $('#symbolImageTempId').val(result.data.id);
    },
    loadStart: function () {
    },
    progress: function () {
    },
    loadEnd: function () {
    },
    completeAll: function () {
    }
  });

}

initLogoUpload();
initfaviconUpload();
initsymbolUpload();

$(document).on('click', '.save_tab_form', function (){

  if ($('input[name=site_index_status]').is(":checked")) {
    var site_index_status = 'true';
  } else {
    var site_index_status = 'false';
  }

  if ($('input[name=development_mode]').is(":checked")) {
    var development_mode = 'true';
  } else {
    var development_mode = 'false';
  }

  if ($('input[name=inـpersonـdelivery]').is(":checked")) {
    var inـpersonـdelivery = 'true';
  } else {
    var inـpersonـdelivery = 'false';
  }

  if ($('input[name=site_sms_status]').is(":checked")) {
    var site_sms_status = 'active';
  } else {
    var site_sms_status = 'inactive';
  }

  if ($('input[name=site_email_status]').is(":checked")) {
    var is_avtive_email = 'active';
  } else {
    var is_avtive_email = 'inactive';
  }


  var formData = {
      // general tab
      active_tab : $(this).data('value'),
      fa_store_name : $('input[name=fa_store_name]').val(),
      en_store_name : $('input[name=en_store_name]').val(),
      site_url : $('input[name=site_url]').val(),
      admin_email : $('input[name=admin_email]').val(),
      management_subdomain : $('input[name=management_subdomain]').val(),
      site_index_status : site_index_status,
      site_title : $('input[name=site_title]').val(),
      index_meta_description : $('textarea[name=index_meta_description]').val(),
      index_meta_keywords : $('input[name=index_meta_keywords]').val(),
      logoImageId : $('input[name=logoImageTempId]').val(),
      faviconImageId : $('input[name=faviconImageTempId]').val(),
      symbolImageId : $('input[name=symbolImageTempId]').val(),

      // store tab
      development_mode : development_mode,
      auto_navigateـtoـcart : $('select[name=auto_navigateـtoـcart]').val(),
      max_add_to_cart_num : $('input[name=max_add_to_cart_num]').val(),
      max_shipping_day_count : $('input[name=max_shipping_day_count]').val(),
      products_per_page_count : $('input[name=products_per_page_count]').val(),
      product_code_prefix : $('input[name=product_code_prefix]').val(),
      product_title_prefix : $('input[name=product_title_prefix]').val(),
      store_city : $('select[name=store_city]').val(),
      inـpersonـdelivery : inـpersonـdelivery,
      shop_addresses : $("input[name='shop_address']").map(function(){return $(this).val();}).get(),
      shop_addresses_id : $("input[name='shop_address']").map(function(){return $(this).data('id');}).get(),
      deleted_addresses : $("input[name='deleted_address']").map(function(){return $(this).val();}).get(),


      // footer tab
      // footer tab
      footer_slogan : $('input[name=footer_slogan]').val(),
      copyright_text : $('textarea[name=copyright_text]').val(),
      store_phone : $('input[name=store_phone]').val(),
      store_email : $('input[name=store_email]').val(),
      footer_desc_title : $('input[name=footer_desc_title]').val(),
      footer_description : $('textarea[name=footer_description]').val(),
      ecunion_link : $('input[name=ecunion_link]').val(),
      enamad_link : $('input[name=enamad_link]').val(),
      samandehi_link : $('input[name=samandehi_link]').val(),
      instagram_link : $('input[name=instagram_link]').val(),
      twitter_link : $('input[name=twitter_link]').val(),
      aparat_link : $('input[name=aparat_link]').val(),
      linkedin_link : $('input[name=linkedin_link]').val(),
      whatsapp_link : $('input[name=whatsapp_link]').val(),
      telegram_link : $('input[name=telegram_link]').val(),
      googleplay_link : $('input[name=googleplay_link]').val(),
      cafebazaar_link : $('input[name=cafebazaar_link]').val(),
      myket_link : $('input[name=myket_link]').val(),
      sibapp_link : $('input[name=sibapp_link]').val(),

      // advanced tab
      custom_header_code : $('textarea[name=custom_header_code]').val(),
      custom_footer_code : $('textarea[name=custom_footer_code]').val(),
      custom_css_code : $('textarea[name=custom_css_code]').val(),

      // sms tab
      site_sms_status: site_sms_status,
      sms_provider: $('select[name=sms_provider]').val(),
      api_key: $('input[name=api_key]').val(),
      order_sms_text: $('textarea[name=order_sms_text]').val(),
      sms_sender_number: $('input[name=sms_sender_number]').val(),
      delivery_sms_status: $('select[name=delivery_sms_status]').val(),
      delivery_sms_text: $('textarea[name=delivery_sms_text]').val(),
      sms_forgot_code_status: $('select[name=sms_forgot_code_status]').val(),
      sms_reg_code_status: $('select[name=sms_reg_code_status]').val(),

      // email tab: good
      site_email_status: is_avtive_email,
      mail_server: $('input[name=mail_server]').val(),
      mail_port: $('input[name=mail_port]').val(),
      mail_username: $('input[name=mail_username]').val(),
      mail_password: $('input[name=mail_password]').val(),
      mail_address: $('input[name=mail_address]').val(),
      order_email_status: $('select[name=order_email_status]').val(),
      order_email_text: $('textarea[name=order_email_text]').val(),
      delivery_email_status: $('select[name=delivery_email_status]').val(),
      delivery_email_text: $('textarea[name=delivery_email_text]').val(),
      email_forgot_code_status: $('select[name=email_forgot_code_status]').val(),
      email_reg_code_status: $('select[name=email_reg_code_status]').val(),

  }

  $.ajax({
    method:'post',
    url: '{{ route('staff.settings.update') }}',
    data: formData,
    success: function () {
      $(window).scrollTop(0);

      UIkit.notification({
        message: 'تغییرات شما ثبت گردید',
        status: 'success',
        pos: 'top-left',
        timeout: 3000
      }).delay(5);
    },
    error: function (errors) {
      contactDetailsAction.displayError(errors.responseJSON.data.errors);
    },
  });

});

var input = document.querySelector('input[name=index_meta_keywords]');
var tagify = new Tagify(input, {
  originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(',')
});

$(document).on('click',".new-address-btn", function (){
  var address_row = '<div class="address-row" style="margin-top: 20px"><div style="float: right;width: 94.2%;"><input type="text" name="shop_address" class="c-ui-input__field c-ui-input__RD-field"></div><div class="c-ui-form__col c-ui-form__col--wrap-xs c-ui-form__col--pull-left uk-margin-remove-right" style="display: inline-block;margin-left: 0px !important;padding-left: 0px !important;"><div class="c-RD-profile__delete-warehouse c-RD-profile__delete-warehouse--danger delete-addreess" data-id="new" style="padding: 9px;"></div></div></div>';
  $(".address-section").append(address_row);
});

$(document).on('click', '.delete-addreess', function (){
  if ($(this).closest('.address-row').data('id') !== 'new')
  {
    var deleted_id = $(this).attr('data-id');
    var deleted_row = '<input name="deleted_address" value="' + deleted_id + '" hidden>';
    $('.c-main').append(deleted_row);
  }
  $(this).closest('.address-row').remove();
});

$(document).on('click', '.c-profile-nav--menu-links', function (){
    var selected_menu = $(this).data('content');

    var active_tab = $(".c-RD-profile__selected-nav").closest('li').data('content');
    $(".c-RD-profile__selected-nav").closest('li').find('.c-RD-profile__menu-text').first().attr('style', 'color: rgb(161, 163, 168) !important;');
    $(".c-RD-profile__selected-nav").remove();

    var change_nav_lable = '<div class="c-RD-profile__selected-nav" style="display: block;">&nbsp;</div>';
    $(this).append(change_nav_lable);
    $(this).find('.c-RD-profile__menu-text').attr('style', 'color: rgb(98, 102, 109) !important;');

    $(".c-RD-profile__dis-none[data-name='" + active_tab + "']").css('display', 'none');
    $(".c-RD-profile__dis-none[data-name='" + selected_menu + "']").css('display', 'block');

    $("body").scrollTop(0);

    initSelect();

});

$(document).on('change', 'input[name=inـpersonـdelivery]', function (){
  if($(this).is(':checked')) {
    $('.new-address-btn').show();
    $('.shop_address').show();
  } else {
    $('.new-address-btn').hide();
    $('.shop_address').hide();
  }
});

function initSelect() {
  /** @var cities */
  const citiesArray = window.cities;
  const $inputs = $('.c-ui-select');

  $inputs.each(function () {
    const $input = $(this);
    const inputPlaceholder = $input.attr('placeholder');
    const hasSearch = $input.hasClass('c-ui-select--search');

    $input
      .select2({
        placeholder: inputPlaceholder,
        minimumResultsForSearch: hasSearch ? 0 : Infinity,
        language: Services.selectSearchLanguage,
      })
      .data('select2')
      .$dropdown.addClass('c-ui-select__dropdown');

    $input.on('change', function () {
      $(this).valid();
    });
  });

  const $citySelect = $('#city-id');
  const $stateSelect = $('#state-id');
  const $cityCode = $('input[name="register[city_code]"]');

  if (!isModuleActive('marketplace_seller_registration_address')) {
    checkTehranForWarehouse($citySelect);

    $citySelect.on('change', function () {
      checkTehranForWarehouse($citySelect);
    });
  }

  if ($stateSelect.val() !== '') {
    const selectedValue = $stateSelect.val();
    const citySelected = $citySelect.val();

    if (citiesArray[selectedValue]) {
      $citySelect
        .html('')
        .select2({
          placeholder: $stateSelect.attr('placeholder'),
        })
        .data('select2')
        .$dropdown.addClass('c-ui-select__dropdown');
      $.each(citiesArray[selectedValue], function (index, city) {
        if (parseInt(citySelected) === parseInt(city.id)) {
          $citySelect.append('<option value="' + city.id + '" selected>' + city.label + '</option>');
        } else {
          $citySelect.append('<option value="' + city.id + '">' + city.label + '</option>');
        }
      });
      $citySelect.trigger('change');
      $cityCode.val(Services.convertToFaDigit($stateSelect.find(':selected').data('code')));
    }
  }

  $stateSelect.on('change', function () {
    const $select = $(this);
    const $value = $select.val();
    const placeholder = $stateSelect.attr('placeholder');

    if ($value === '') {
      $citySelect
        .select2({
          placeholder: placeholder,
        })
        .data('select2')
        .$dropdown.addClass('c-ui-select__dropdown');
      $citySelect.prop('disabled', true);
    } else if (citiesArray[$value]) {
      $citySelect
        .html('')
        .select2({
          placeholder: placeholder,
        })
        .data('select2')
        .$dropdown.addClass('c-ui-select__dropdown');

      $citySelect.append('<option></option>');
      $.each(citiesArray[$value], function fillOptions(index, city)
      {
        $citySelect.append('<option value="' + city.id + '">' + city.label + '</option>');
      });
      $cityCode.val(Services.convertToFaDigit($select.find(':selected').data('code')));
    }

    if (!isModuleActive('marketplace_seller_registration_address')) {
      checkTehranForWarehouse($citySelect);
    }
  });

  function checkTehranForWarehouse($select)
  {
    if ($select.val() !== '1698') {
      makeWarehouseDetailsVisible();
    }

    function makeWarehouseDetailsVisible()
    {
      const $warehouseDetailsControl = $('[name="register[has_warehouse_address]"][value="1"]');

      $warehouseDetailsControl.prop('checked', true);
      $warehouseDetailsControl.trigger('change');
    }
  }
}

initSelect();

</script>
@endsection
