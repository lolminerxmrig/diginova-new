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
                          <li class="c-profile-nav--menu-links js-profile-navbar uk-flex uk-flex-column" data-content="sms" style="padding-top: 5px; padding-bottom: 5px; pointer-events: all;">
                            <a class="c-RD-profile__menu-text" href="#sms" style="color: rgb(161, 163, 168) !important;">سامانه پیامکی</a>
                            <div class="c-RD-profile__selected-nav" style="display: none;">&nbsp;</div>
                          </li>
                          <li class="c-profile-nav--menu-links js-profile-navbar uk-flex uk-flex-column" data-content="email" style="padding-top: 5px; padding-bottom: 5px; pointer-events: all;">
                            <a class="c-RD-profile__menu-text" href="#email" style="color: rgb(161, 163, 168) !important;">ایمیل</a>
                            <div class="c-RD-profile__selected-nav" style="display: none;">&nbsp;</div>
                          </li>

                          <li class="c-profile-nav--menu-links js-profile-navbar uk-flex uk-flex-column" data-content="peyment" style="padding-top: 5px; padding-bottom: 5px; pointer-events: all;">
                            <a class="c-RD-profile__menu-text" href="#peyment" style="color: rgb(161, 163, 168) !important;">پرداخت</a>
                            <div class="c-RD-profile__selected-nav" style="display: none;">&nbsp;</div>
                          </li>

                          <li class="c-profile-nav--menu-links js-profile-navbar uk-flex uk-flex-column" data-content="invoice" style="padding-top: 5px; padding-bottom: 5px; pointer-events: all;">
                            <a class="c-RD-profile__menu-text" href="#invoice" style="color: rgb(161, 163, 168) !important;">فاکتور</a>
                            <div class="c-RD-profile__selected-nav" style="display: none;">&nbsp;</div>
                          </li>

                          <li class="c-profile-nav--menu-links js-profile-navbar uk-flex uk-flex-column" data-content="advanced" style="padding-top: 5px; padding-bottom: 5px; pointer-events: all;">
                            <a class="c-RD-profile__menu-text" href="#advanced" style="color: rgb(161, 163, 168) !important;">پیشرفته</a>
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
                                  <input class="form-control tagify" name="index_meta_keywords" value="{{ $settings->where('name', 'index_meta_keywords')->first()->value }}" style="background: white !important; border-color:#e6e9ed!important; width: 100% !important;">
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
                            <span style="display: inline-block;font-size: 12px;margin-top: 7px;margin-right: 20px;">فرمت استاندارد: png, svg</span>
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
                            <span style="display: inline-block;font-size: 12px;margin-top: 7px;margin-right: 20px;">فرمت استاندارد: png, svg</span>
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
                            <span style="display: inline-block;font-size: 12px;margin-top: 7px;">اندازه استاندارد: 24x24px</span><span style="display: inline-block;font-size: 12px;margin-top: 7px;margin-right: 20px;">فرمت استاندارد: png, svg</span>
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
                                  @foreach($states->where('type', 'state') as $state)
                                    <option value="" {{ ($settings->where('name', 'store_city')->first()->states()->first()->id == $state->id)? 'selected' : '' }}> {{ $state->name }} </option>
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

            <div class="c-RD-profile__dis-none " data-name="peyment" style="display: none;">
              <div class="c-grid__row c-RD-profile__mt-0" id="peyment">
                <div class="c-grid__col">
                  <div class="c-card c-RD-profile__bdrs-top-0 js-profile-content-spinner" style="box-shadow: 0 10px 12px 0 rgba(0, 0, 0, 0.05);">
                    <div class="c-card__header c-card__header--with-controls business_info  uk-hidden"></div>
                    <div class="c-card__body c-card__body--form">

                      <div class="c-grid__row">
                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-6 c-grid__col--lg-10 c-RD-profile__section-title">
                            <span class="c-RD-profile__title">تنظیمات درگاه پرداخت</span>
                          </div>
                          <div class="c-RD-profile__action-btn c-RD-profile__action-btn--cancel js-profile-cancel-edit-form uk-hidden"></div>
                        </div>
                      </div>

                      <div class="c-grid__row">
                        <div class="c-grid__col c-grid__col--sm-12 c-grid__col--lg-12">
                          <div class="c-form">
                            <label class="c-RD-profile__input-name" for="peyment_success_message">متن پیام پرداخت موفق:</label>
                            <div class="c-ui-input">
                              <textarea name="peyment_success_message" class="c-ui-input__field c-ui-input__field--order c-ui-input__field--textarea"
                                        rows="5" style="border-color: #dddddd; font-weight: bold;"
                              >{{ $settings->where('name', 'peyment_success_message')->first()->value }}</textarea>
                            </div>
                          </div>
                        </div>
                        <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                      </div>

                      <div class="c-ui-form__row c-RD-profile__form-action" style="margin-right: auto">
                        <div class="c-RD-profile__cancel-btn uk-flex uk-flex-center uk-flex-middle js-profile-cancel-edit-form">بازگشت</div>
                        <div class="c-RD-profile__approve-btn uk-flex uk-flex-center uk-flex-middle uk-margin-small-right js-profile-submit-changes save_tab_form" data-value="peyment">ذخیره تغییرات</div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="c-RD-profile__dis-none " data-name="invoice" style="display: none;">
              <div class="c-grid__row c-RD-profile__mt-0" id="invoice">
                <div class="c-grid__col">
                  <div class="c-card c-RD-profile__bdrs-top-0 js-profile-content-spinner" style="box-shadow: 0 10px 12px 0 rgba(0, 0, 0, 0.05);">
                    <div class="c-card__header c-card__header--with-controls  uk-hidden"></div>
                    <div class="c-card__body c-card__body--form">
                      <div class="c-grid__row">

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-6 c-grid__col--lg-10 c-RD-profile__section-title">
                            <span class="c-RD-profile__title">اطلاعات فاکتور</span>
                          </div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="invoice_title">عنوان فاکتور اصلی:</label>
                              <div class="c-ui-input ">
                                <input type="text" name="invoice_title" class="c-ui-input__field c-ui-input__RD-field" value="{{ $settings->where('name', 'invoice_title')->first()->value }}">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="invoice_seller">فروشنده:</label>
                              <div class="c-ui-input ">
                                <input type="text" name="invoice_seller" value="{{ $settings->where('name', 'invoice_seller')->first()->value }}" class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="invoice_national_id">شناسه ملی:</label>
                              <div class="c-ui-input ">
                                <input type="text" name="invoice_national_id" value="{{ $settings->where('name', 'invoice_national_id')->first()->value }}" class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="invoice_reg_number">شماره ثبت:</label>
                              <div class="c-ui-input ">
                                <input type="text" name="invoice_reg_number" value="{{ $settings->where('name', 'invoice_reg_number')->first()->value }}" class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                            <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="invoice_economic_number">شماره اقتصادی:</label>
                              <div class="c-ui-input ">
                                <input type="text" name="invoice_economic_number" class="c-ui-input__field c-ui-input__RD-field" value="{{ $settings->where('name', 'invoice_economic_number')->first()->value }}">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="invoice_company_address">نشانی شرکت:</label>
                              <div class="c-ui-input">
                                <textarea name="invoice_company_address" class="c-ui-input__field c-ui-input__field--order c-ui-input__field--textarea" rows="2" style="border-color: #dddddd; font-weight: bold;">{{ $settings->where('name', 'invoice_company_address')->first()->value }}</textarea>
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="invoice_company_postal_code">کد پستی:</label>
                              <div class="c-ui-input ">
                                <input type="text" name="invoice_company_postal_code" value="{{ $settings->where('name', 'invoice_company_postal_code')->first()->value }}" class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>

                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="invoice_company_fax_phone">تلفن:</label>
                              <div class="c-ui-input ">
                                <input type="text" name="invoice_company_fax_phone" value="{{ $settings->where('name', 'invoice_company_fax_phone')->first()->value }}" class="c-ui-input__field c-ui-input__RD-field">
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>



                        <div class="c-grid__row">
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4">
                            <div class="c-form">
                              <label class="c-RD-profile__input-name" for="invoice_description">توضیحات:</label>
                              <div class="c-ui-input">
                                <textarea name="invoice_description" class="c-ui-input__field c-ui-input__field--order c-ui-input__field--textarea" rows="4" style="border-color: #dddddd; font-weight: bold;">{{ $settings->where('name', 'invoice_description')->first()->value }}</textarea>
                              </div>
                            </div>
                          </div>
                          <div class="c-grid__col c-grid__col--sm-4 c-grid__col--lg-4"></div>
                        </div>



                        <div class="c-grid__row uk-margin-medium-top" style="background-color: #f5f7fa; padding: 20px; border-radius: 8px; margin-top: 40px !important;">
                          <div class="o-spacing-m-r-3" style="padding-right: 10px;">
                            <div class="field-wrapper">
                              <div id="stampUpload" class="c-content-modal__uploads-label {{ is_null($stamp_image)? 'empty' : '' }}">
                                <span uk-form-custom="" class="uk-form-custom">
                                    <input id="brandstampFile" name="upload_stamp" type="file" class="hidden">
                                </span>

                                <label for="brandstampFile" class="c-content-modal__uploads-preview" style="border: 1px solid #e0e0e2; background-color: white;">
                                  <img src="{{ (!is_null($stamp_image)? $site_url . '/' .  $stamp_image->path . '/' . $stamp_image->name : '') }}" id="stampUploadPreview" class="c-content-modal__uploads-img" alt="" style="width: 100% !important; height: 100%;">

                                  <span class="c-content-upload__img-loader js-img-loader">
                                      <span class="progress__wrapper">
                                        <span class="progress"></span>
                                      </span>
                                  </span>
                                  @if(!$settings->where('name', 'invoice_stamp')->first()->media()->exists())
                                    <label class="c-RD-profile__upload-btn" id="stampUploadLable">
                                      <input id="brandstampFile" type="file" class="hidden">
                                    </label>
                                  @endif
                                </label>
                              </div>
                              <input type="hidden" name="stampImageTempId" id="stampImageTempId">
                              <div class="c-content-modal__errors-full" id="stampUploadErrors"></div>
                            </div>
                          </div>

                          <div class="o-spacing-m-r-3" style="padding-right: 20px;padding-top: 15px;">
                            <span style="display: block;">
                              تصویر مهر شرکت
                              @if($settings->where('name', 'invoice_stamp')->first()->media()->exists())
                                <a class="c-ui-btn c-ui-btn--next mr-a delete-stamp-image"  style=" margin-left: 21px;width: 59px !important;height: 20px !important;min-width: 45px !important;border-radius: 5px;font-size: 10px;box-shadow: unset;font-weight: bold;" id="submit-form">حذف تصویر</a>
                              @endif
                              </span>

                            <span style="display: inline-block;font-size: 12px;margin-top: 7px;">اندازه استاندارد: 600x300px</span>
                            <span style="display: inline-block;font-size: 12px;margin-top: 7px;margin-right: 20px;">فرمت استاندارد: png, svg</span>

                          </div>
                        </div>



                        <div class="uk-flex uk-flex-column uk-width-1-1">
                          <div class="c-profile-business-info-logo-error o-spacing-m-t-6 o-spacing-m-b-2 uk-margin-remove-right" style="display: none;"></div>
                          <div class="c-profile-business-info-logo-error  uk-margin-remove-right o-spacing-m-b-2" style="display: none;"></div>
                        </div>

                        <div class="c-ui-form__row c-RD-profile__form-action js-profile-form-action" style="margin-right: auto">
                          <div class="c-RD-profile__cancel-btn uk-flex uk-flex-center uk-flex-middle js-profile-cancel-edit-form">بازگشت</div>
                          <div class="c-RD-profile__approve-btn uk-flex uk-flex-center uk-flex-middle uk-margin-small-right save_tab_form" data-value="invoice">ذخیره تغییرات</div>
                        </div>

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

function initstampUpload() {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  let $stampUpload = $('#stampUpload');
  let $previewImg = $('#stampUploadPreview');
  let $errorsSection = $('#stampUploadErrors');
  window.UIkit.upload($stampUpload, {
    url: "{{ route('staff.settings.UploadImage') }}",
    beforeSend: function () {
      $errorsSection.html('');
    },
    beforeSend: e => e.headers = { 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') },
    beforeAll: function () {
      $stampUpload.addClass('loading');
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
        $stampUpload.removeClass('loading');
        return;
      }

      if (typeof result.data.error_server !== 'undefined') {
        let $div = $('<div/>');
        $div.html(result.data.error_server);
        $errorsSection.append($div);
        $errorsSection.removeClass('hidden');
        $stampUpload.removeClass('loading');
        return;
      }

      $stampUpload.removeClass('empty loading');
      $previewImg.attr('src', result.data.url);
      $("#stampUploadLable").remove();
      $('#stampImageTempId').val(result.data.id);
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
initstampUpload();

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

      // email tab
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

      // peyment tab
      peyment_success_message: $('textarea[name=peyment_success_message]').val(),


      // invoice tab
      invoice_title : $('input[name=invoice_title]').val(),
      invoice_seller : $('input[name=invoice_seller]').val(),
      invoice_national_id : $('input[name=invoice_national_id]').val(),
      invoice_reg_number : $('input[name=invoice_reg_number]').val(),
      invoice_economic_number : $('input[name=invoice_economic_number]').val(),
      invoice_company_address : $('textarea[name=invoice_company_address]').val(),
      invoice_description : $('textarea[name=invoice_description]').val(),
      invoice_company_postal_code : $('input[name=invoice_company_postal_code]').val(),
      invoice_company_fax_phone : $('input[name=invoice_company_fax_phone]').val(),
      stampImageId : $('input[name=stampImageTempId]').val(),
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


$('.delete-stamp-image').on('click', function (e) {
  // e.preventDefault();

  $.ajax({
    method: "post",
    url: '{{route('staff.settings.deleteStampImage')}}',
    success: function () {
      $('#stampImageTempId').val('');

      UIkit.notification({
        message: 'تصویر حذف شد.',
        status: 'success',
        pos: 'top-left',
        timeout: 3000
      });

      window.location.href = "{{ route('staff.settings.index') }}";

    },

    error: function (errors) {
      Promotion.displayError(errors.responseJSON.data.errors);
    }
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
