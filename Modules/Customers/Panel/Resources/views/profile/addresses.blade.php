@extends('layouts.customer.master')
@section('o-page__content')
<section class="o-page__content">
    <div class="o-box" id="address-section">
      <div class="o-box__header"><span class="o-box__title">نشانی‌ها</span></div>
      <div class="c-profile-address__item js-user-address-container"
           data-address="{&quot;id&quot;:16308144,&quot;full_name&quot;:&quot;مهدی جلالی&quot;,&quot;mobile_phone&quot;:&quot;09389701200&quot;,&quot;phone_code&quot;:&quot;021&quot;,&quot;post_code&quot;:&quot;5866599865&quot;,&quot;phone&quot;:&quot;65435471&quot;,&quot;address&quot;:&quot;خیابان اصلی کوچه شهید بیات پلاک ۲۲&quot;,&quot;description&quot;:null,&quot;active&quot;:true,&quot;default&quot;:true,&quot;city_id&quot;:1725,&quot;city_name&quot;:&quot;صفادشت&quot;,&quot;state_id&quot;:9,&quot;state_name&quot;:&quot;تهران&quot;,&quot;district_id&quot;:null,&quot;district_name&quot;:null,&quot;building_no&quot;:null,&quot;unit&quot;:null,&quot;full_address&quot;:&quot;تهران، صفادشت، خیابان اصلی کوچه شهید بیات پلاک ۲۲&quot;,&quot;map_lon&quot;:&quot;50.84199&quot;,&quot;map_lat&quot;:&quot;35.69248&quot;,&quot;map_lon_mobile&quot;:&quot;50.84199&quot;,&quot;map_lat_mobile&quot;:&quot;35.69248&quot;,&quot;map_lon_web&quot;:&quot;0.00000&quot;,&quot;map_lat_web&quot;:&quot;0.00000&quot;,&quot;fmcg_support&quot;:true,&quot;is_shared_address&quot;:false,&quot;shared_address_id&quot;:null}">
        <div class="c-profile-address__item-top">
          <div class="c-profile-address__item-title">خیابان اصلی کوچه شهید بیات پلاک ۲۲</div>
          <div class="c-ui-more">
            <div class="o-btn o-btn--icon-gray-md o-btn--l-more js-ui-see-more"></div>
            <div class="c-ui-more__options js-ui-more-options">
              <div class="c-ui-more__option c-ui-more__option--red js-remove-address-btn" data-id="16308144"
                   data-token="">حذف
              </div>
            </div>
          </div>
        </div>
        <div class="c-profile-address__content">
          <ul class="c-profile-address__info">
            <li>
              <div class="c-profile-address__info-item location">تهران، صفادشت</div>
            </li>
            <li>
              <div class="c-profile-address__info-item postal-code">۵۸۶۶۵۹۹۸۶۵</div>
            </li>
            <li>
              <div class="c-profile-address__info-item phone">۰۹۳۸۹۷۰۱۲۰۰</div>
            </li>
            <li>
              <div class="c-profile-address__info-item name">مهدی جلالی</div>
            </li>
            <li class="location-link">
              <div class="o-link o-link--has-arrow o-link--sm js-edit-address-btn">ویرایش نشانی</div>
            </li>
          </ul>
        </div>
      </div>
      <div class="c-profile-address__add js-add-address-btn">
        اضافه کردن نشانی جدید
      </div>
    </div>
  </section>
@endsection


@section('page-content')
@endsection

@section('script')
@endsection
