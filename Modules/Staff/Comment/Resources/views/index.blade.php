@extends('layouts.staff.master')
@section('head')
<script src="{{ asset('staff/js/js/bundle.min.js') }}"></script>
<script src="{{ asset('staff/js/js/master-indexAction.js') }}"></script>
@endsection
@section('content')
<main class="c-main">
        <div class="uk-container uk-container-large">

            <div class="c-grid ">
                <div class="c-grid__row c-product-list--align-header">
                    <div class="c-grid__col">
                        <div class="c-card c-card--transparent">
                            <h1 class="c-card__title c-card__title--dark c-card__title--desc">مدیریت محصولات
                                <span>
                                برای ویرایش و مدیریت مشخصات ، گروه ، تصویر محصولات و درج تنوع (گارانتی ، به همراه رنگ یا سایز) از این قسمت استفاده نمایید
                            </span>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="c-grid__row"><div class="c-grid__col"><div class="c-card"><div class="c-card__header"><div class="c-card__title">جستجو و فیلتر</div></div><div class="c-card__body"><form class="js-search-product-form" id="searchForm"><div class="c-ui-form__row c-ui-form__row--nowrap c-ui-form__row--wrap-xs"><div class="c-ui-form__col c-ui-form__col--12 c-ui-form__col--xs-12 c-ui-form__col--shrink c-product-text-search-container"><label class="c-ui-form__label">جستجو در</label><div class="c-ui-form__row c-ui-form__row--group"><div class="c-ui-form__col uk-width-1-5 uk-padding-remove"><select class="js-form-clearable c-ui-select--with-svg-icon c-ui-select c-ui-select--common c-ui-select--small c-ui-select--search select2-hidden-accessible" name="search[type]" data-select2-id="1" tabindex="-1" aria-hidden="true"><option value="all" data-select2-id="3">همه موارد</option><option value="title">عنوان</option><option value="product_id">کد محصول</option></select><span class="select2 select2-container select2-container--default" dir="rtl" data-select2-id="2" style="width: 248.188px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-searchtype-ha-container"><span class="select2-selection__rendered" id="select2-searchtype-ha-container" role="textbox" aria-readonly="true" title="همه موارد">همه موارد</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div><div class="c-ui-form__col c-ui-form__col--shrink c-ui-form__col--9 c-ui-form__col--xs-12 c-ui-form__col--group-item c-ui-form__col--wrap-xs c-ui-form__col--xs-full uk-padding-remove-right c-ui--mr-10"><label><div class="c-ui-input"><input type="text" name="search[value]" class="c-ui-input__field c-ui-input__field--order js-form-clearable" id="variants-search" value="" placeholder="عبارت مورد نظرتان را وارد کنید..."></div></label></div><div class="c-ui-form__col c-ui-form__col--xs-6 c-ui-form__col--group-item c-ui-form__col--wrap-xs"><button class="c-ui-btn c-ui-btn--xs-block c-ui-btn--active c-ui-btn--search-form" id="submitButton" disabled=""><span>جستجو</span></button></div></div></div></div><div class="c-mega-campaigns--p-20 uk-flex uk-padding-remove-left uk-padding-remove-right  uk-flex-bottom uk-flex-left c-ui--pb-10"><div class="c-ui-form__col uk-width-1-5 c-ui-form__col--wrap-xs c-ui-form__col--xs-full uk-padding-remove-left uk-padding-remove-right"><label class="c-ui-form__label">گروه کالایی:</label><select class="c-ui-select c-ui-select--common c-ui-select--small c-ui-select--search c-ui-select--with-svg-icon select2-hidden-accessible" name="search[category_id]" data-select2-id="4" tabindex="-1" aria-hidden="true"><option value="" selected="" data-select2-id="6">انتخاب کنید</option><option value="9588">جوراب نوزاد</option><option value="48">دوربین عکاسی</option><option value="77">کیف و کاور گوشی</option><option value="80">کابل و مبدل</option><option value="156">ساعت های تزئینی</option><option value="6501">پارچه قلمکار</option><option value="6810">استیکر و تابلو کودک و نوزاد</option><option value="8157">خاک و کود</option><option value="8432">تابلو شاسی</option><option value="9371">کفش پاشنه دار زنانه</option><option value="9403">گل سینه زنانه</option><option value="9880">کوسن کودک</option></select><span class="select2 select2-container select2-container--default" dir="rtl" data-select2-id="5" style="width: 246.188px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-searchcategory_id-ss-container"><span class="select2-selection__rendered" id="select2-searchcategory_id-ss-container" role="textbox" aria-readonly="true" title="انتخاب کنید">انتخاب کنید</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div><div class="c-ui-form__col uk-width-1-5 c-ui-form__col--wrap-xs c-ui-form__col--xs-full uk-padding-remove-left uk-padding-remove-right c-ui--mr-30"><label class="c-ui-form__label">برند کالا:</label><select class="c-ui-select c-ui-select--common c-ui-select--small c-ui-select--search c-ui-select--with-svg-icon select2-hidden-accessible" name="search[brand_id]" data-select2-id="7" tabindex="-1" aria-hidden="true"><option value="" selected="" data-select2-id="9">انتخاب کنید</option><option value="719">متفرقه</option><option value="1">سونی</option><option value="12">کانن</option><option value="242">هوکو</option><option value="2445">عطریان</option><option value="4463">کارامل</option><option value="4989">کی اچ</option><option value="7749">تتاکو</option><option value="10196">روشن</option></select><span class="select2 select2-container select2-container--default" dir="rtl" data-select2-id="8" style="width: 246.188px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-searchbrand_id-2u-container"><span class="select2-selection__rendered" id="select2-searchbrand_id-2u-container" role="textbox" aria-readonly="true" title="انتخاب کنید">انتخاب کنید</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div><div class="c-ui-form__col uk-width-1-5 c-ui-form__col--wrap-xs c-ui-form__col--xs-full uk-padding-remove-left uk-padding-remove-right c-ui--mr-30"><label class="c-ui-form__label">وضعیت تأیید کالا:</label><select class="c-ui-select c-ui-select--common c-ui-select--small c-ui-select--search c-ui-select--with-svg-icon select2-hidden-accessible" name="search[moderation_status]" data-select2-id="10" tabindex="-1" aria-hidden="true"><option value="" selected="" data-select2-id="12">انتخاب کنید</option><option value="draft">پیش نویس</option><option value="in_review">بررسی مجدد</option><option value="waiting_for_confirm">در انتظار تایید</option><option value="edit_after_approved">ویرایش پس از تایید</option><option value="approved">تایید شده</option><option value="in_review_after_approved">بررسی مجدد بعد از تایید</option><option value="duplicate">تکراری</option><option value="removed">حذف شده</option></select><span class="select2 select2-container select2-container--default" dir="rtl" data-select2-id="11" style="width: 246.188px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-searchmoderation_status-7q-container"><span class="select2-selection__rendered" id="select2-searchmoderation_status-7q-container" role="textbox" aria-readonly="true" title="انتخاب کنید">انتخاب کنید</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div><div class="c-ui-form__col c-ui--mr-30 uk-padding-remove c-product-radio-group-container"><div class="c-join__filter"><p class="c-ui-form__label">اصالت کالا:</p><div class="c-join__filter-container"><label class="c-join__radio-label"><input class="c-join__radio js-auto-submit" type="radio" name="search[fake_status]" checked="checked" value=""><span class="c-join__radio-option">همه کالاها</span></label><label class="c-join__radio-label"><input class="c-join__radio js-auto-submit" type="radio" name="search[fake_status]" value="0"><span class="c-join__radio-option">اصل</span></label><label class="c-join__radio-label"><input class="c-join__radio js-auto-submit" type="radio" name="search[fake_status]" value="1"><span class="c-join__radio-option">غیراصل</span></label></div></div></div></div></form></div><div class="c-product-list__search-items-container uk-hidden" id="searchFilterBar"><div class="uk-flex uk-flex-middle">
                                    فیلترهای اعمال شده:

                                    <div class="c-product-list__search-item c-ui--mr-20 uk-hidden uk-text-nowrap js-filter-bar-item" name="search[category_id]"><span class="js-filter-title">گروه کالایی: </span><span class="js-selected-filter"></span><span class="c-product-list__search-item-colse js-remove-filter"></span></div><div class="c-product-list__search-item c-ui--mr-20 uk-hidden uk-text-nowrap js-filter-bar-item" name="search[brand_id]"><span class="js-filter-title">برند کالا: </span><span class="js-selected-filter"></span><span class="c-product-list__search-item-colse js-remove-filter"></span></div><div class="c-product-list__search-item c-ui--mr-20 uk-hidden uk-text-nowrap js-filter-bar-item" name="search[moderation_status]"><span class="js-filter-title">وضعیت تأیید کالا: </span><span class="js-selected-filter"></span><span class="c-product-list__search-item-colse js-remove-filter"></span></div><div class="c-product-list__search-item c-ui--mr-20 uk-hidden uk-text-nowrap js-filter-bar-item" name="search[fake_status]"><span class="js-filter-title">اصالت کالا: </span><span class="js-selected-filter"></span><span class="c-product-list__search-item-colse js-remove-filter"></span></div><div class="c-product-list__search-item c-ui--mr-20 uk-hidden uk-text-nowrap js-filter-bar-item" name="search[type]"><span class="js-filter-title"></span><span class="js-selected-filter"></span><span class="c-product-list__search-item-colse js-remove-filter"></span></div></div><div class="c-ui--mr-20"><div class="c-product-list__search-item js-remove-all-filters">
                                        حذف همه فیلترها
                                        <span class="c-product-list__search-item-colse"></span></div></div></div></div></div></div><div class="js-table-container"><div class="c-product-list__alert c-ui--mt-25 c-ui--mb-25">
                        محصول با وضعیت پیش نویس فقط برای شما قابل نمایش است و توسط مرکز فروشندگان قابل رویت نیست. محصول پیش نویس
                        خود را انتشار داده و منتظر تأیید آن باشید.
                    </div><div class="c-grid__row"><div class="c-grid__col"><div class="c-card"><div class="c-card__wrapper"><div class="c-card__header c-card__header--table"><a href="/content/create/product/" target="_blank"><div class="c-mega-campaigns__btns-green-plus uk-margin-remove">
                                                ایجاد کالای جدید
                                            </div></a><div class="c-ui-paginator js-paginator"><div class="c-ui-paginator__total" data-rows="۲۰">
                                                تعداد نتایج: <span>۲۰ مورد</span></div><div class="c-ui-paginator__select"><div class="c-ui-paginator__select-label">تعداد نمایش</div><div class="c-ui-paginator__select-pages"><div class="field-wrapper ui-select ui-select__container"><select class="c-ui-select c-ui-select--common c-ui-select--small js-search-items-per-page select2-hidden-accessible" name="paginator-select-pages" data-select2-id="13" tabindex="-1" aria-hidden="true"><option value="10" selected="" data-select2-id="15">۱۰</option><option value="20">۲۰</option><option value="50">۵۰</option><option value="100">۱۰۰</option></select><span class="select2 select2-container select2-container--default" dir="rtl" data-select2-id="14" style="width: 60px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-paginator-select-pages-se-container"><span class="select2-selection__rendered" id="select2-paginator-select-pages-se-container" role="textbox" aria-readonly="true" title="۱۰">۱۰</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span><div class="js-select-options c-ui-paginator__dropdown-container"></div></div></div></div><ul class="c-ui-paginator__control js-search-pager"><li class="c-ui-paginator__control-item"><a class="c-ui-paginator__control-prev c-ui-paginator__control-prev--disabled" data-page=""></a></li><li class="c-ui-paginator__control-item uk-active"><a data-page="1" class="c-ui-paginator__control-digit c-ui-paginator__control-digit--current">۱</a></li><li class="c-ui-paginator__control-item"><a data-page="2" class="c-ui-paginator__control-digit">۲</a></li><li class="c-ui-paginator__control-item"><a class="c-ui-paginator__control-next" data-page="2"></a></li></ul></div></div><div class="c-card__body c-ui-table__wrapper"><table class="c-ui-table  js-search-table js-table-fixed-header c-join__table" data-search-url="/ajax/product/search/"><thead><tr class="c-ui-table__row"><th class="c-ui-table__header"><span class="table-header-searchable uk-text-nowrap ">
                    ردیف
                </span></th><th class="c-ui-table__header"><span class="table-header-searchable uk-text-nowrap "></span></th><th class="c-ui-table__header"><span class="table-header-searchable uk-text-nowrap table-header-searchable--desc">
                    عنوان و کد کالا (DKP)
                </span></th><th class="c-ui-table__header"><span class="table-header-searchable uk-text-nowrap ">
                    گروه کالایی
                </span></th><th class="c-ui-table__header"><span class="table-header-searchable uk-text-nowrap ">
                    برند کالا
                </span></th><th class="c-ui-table__header"><span class="table-header-searchable uk-text-nowrap ">
                    کانال فروش
                </span></th><th class="c-ui-table__header"><span class="table-header-searchable uk-text-nowrap ">
                    وضعيت
                </span></th><th class="c-ui-table__header"><span class="table-header-searchable uk-text-nowrap ">
                    تعداد تنوع
                </span></th><th class="c-ui-table__header"><span class="table-header-searchable uk-text-nowrap table-header-searchable--desc"></span></th></tr></thead><tbody><tr class="c-ui-table__row c-ui-table__row--body c-join__table-row"><td class="c-ui-table__cell"><span class="c-wallet__body-card-row-item">
                    ۱
                </span></td><td class="c-ui-table__cell" style="min-width: 90px"><img src="https://dkstatics-public.digikala.com/digikala-products/37385809fbbb25d97d0a737bf2b55d2990581a63_1614319229.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60" alt=""></td><td class="c-ui-table__cell c-ui-table__cell-desc c-ui--pt-15 c-ui--pb-15"><div class="uk-flex uk-flex-column"><a href="https://www.digikala.com/product/dkp-4557867/" target="_blank"><span class="c-wallet__body-card-row-item c-ui--fit c-ui--initial">
                            دوربین دیجیتال سونی مدل ننینین ینینیسس
                        </span><span class="c-wallet__body-card-row-item c-ui--fit c-ui--initial"></span></a><div class="uk-flex"><span class="c-mega-campaigns-join-list__container-table-dkpc c-ui--fit c-ui--nowrap">
                            DKP-4557867
                        </span></div></div></td><td class="c-ui-table__cell"><a href="/product/?search%5Bcategory_id%5D=5966"><span class="c-wallet__body-card-row-item c-ui--initial">
                            دوربین عکاسی
                        </span></a></td><td class="c-ui-table__cell"><a href="/product/?search%5Bbrand_id%5D=1"><div class="uk-flex uk-flex-column"><span class="c- -card-row-item">
                                سونی
                            </span><span class="c-wallet__body-card-row-item">
                                Sony
                            </span></div></a></td><td class="c-ui-table__cell"><div class="uk-flex uk-flex-column"><div class="c-product-list__platform c-product-list__platform-dk c-product-list__platform--active"></div><div class="c-product-list__platform c-product-list__platform-ds"></div></div></td><td class="c-ui-table__cell"><div class=""><div class="c-wallet__body-card-status-no-circle c-wallet__body-card-status-no-circle--deactive uk-text-nowrap">
                                                            پیش نویس
                                                        </div></div></td><td class="c-ui-table__cell"><span class="c-wallet__body-card-row-item">
                     ۰
                 </span></td><td class="c-ui-table__cell"><div class="uk-flex uk-flex-right uk-flex-middle"><a class="uk-padding-remove" href="/product/edit/4557867/"><div class="c-mega-campaigns-join-list__container-table-btn c-mega-campaigns-join-list__container-table-btn--small-edit c-ui--mr-10 js-tool-tip-desc"></div><div class="c-rating-chart__description-tooltip c-mega-campaigns-join-list__container-table-btn-tooltip uk-text-nowrap uk-dropdown" uk-dropdown="boundary: .js-tool-tip-desc; pos: bottom-center;delay-hide: 0;offset: 10;">
                                                                ویرایش محصول
                                                            </div></a><div class="c-mega-campaigns-join-list__container-table-btn c-mega-campaigns-join-list__container-table-btn--release c-mega-campaigns-join-list__container-table-btn--release-active c-ui--mr-10 js-tool-tip-desc js-publish" data-id="4557867"></div><div class="c-rating-chart__description-tooltip c-mega-campaigns-join-list__container-table-btn-tooltip uk-text-nowrap uk-dropdown" uk-dropdown="boundary: .js-tool-tip-desc; pos: bottom-center;delay-hide: 0;offset: 10;">
                                                            انتشار
                                                        </div></div></td></tr><tr class="c-ui-table__row c-ui-table__row--body c-join__table-row"><td class="c-ui-table__cell"><span class="c-wallet__body-card-row-item">
                    ۲
                </span></td><td class="c-ui-table__cell" style="min-width: 90px"><img src="https://dkstatics-public.digikala.com/digikala-products/de916cf728ac4d9a3562e0bb380dc2fa093cf872_1611775144.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60" alt=""></td><td class="c-ui-table__cell c-ui-table__cell-desc c-ui--pt-15 c-ui--pb-15"><div class="uk-flex uk-flex-column"><a href="https://www.digikala.com/product/dkp-4335203/" target="_blank"><span class="c-wallet__body-card-row-item c-ui--fit c-ui--initial">
                            دوربین دیجیتال سونی مدل ننینین ینینی
                        </span><span class="c-wallet__body-card-row-item c-ui--fit c-ui--initial"></span></a><div class="uk-flex"><span class="c-mega-campaigns-join-list__container-table-dkpc c-ui--fit c-ui--nowrap">
                            DKP-4335203
                        </span></div></div></td><td class="c-ui-table__cell"><a href="/product/?search%5Bcategory_id%5D=5966"><span class="c-wallet__body-card-row-item c-ui--initial">
                            دوربین عکاسی
                        </span></a></td><td class="c-ui-table__cell"><a href="/product/?search%5Bbrand_id%5D=1"><div class="uk-flex uk-flex-column"><span class="c- -card-row-item">
                                سونی
                            </span><span class="c-wallet__body-card-row-item">
                                Sony
                            </span></div></a></td><td class="c-ui-table__cell"><div class="uk-flex uk-flex-column"><div class="c-product-list__platform c-product-list__platform-dk c-product-list__platform--active"></div><div class="c-product-list__platform c-product-list__platform-ds"></div></div></td><td class="c-ui-table__cell"><div class=""><div class="c-wallet__body-card-status-no-circle c-wallet__body-card-status-no-circle--alert uk-text-nowrap">
                                                            بررسی مجدد
                                                        </div></div></td><td class="c-ui-table__cell"><span class="c-wallet__body-card-row-item">
                     ۰
                 </span></td><td class="c-ui-table__cell"><div class="uk-flex uk-flex-right uk-flex-middle"><a class="uk-padding-remove" href="/product/edit/4335203/"><div class="c-mega-campaigns-join-list__container-table-btn c-mega-campaigns-join-list__container-table-btn--small-edit c-ui--mr-10 js-tool-tip-desc"></div><div class="c-rating-chart__description-tooltip c-mega-campaigns-join-list__container-table-btn-tooltip uk-text-nowrap uk-dropdown" uk-dropdown="boundary: .js-tool-tip-desc; pos: bottom-center;delay-hide: 0;offset: 10;">
                                                                ویرایش محصول
                                                            </div></a></div></td></tr><tr class="c-ui-table__row c-ui-table__row--body c-join__table-row"><td class="c-ui-table__cell"><span class="c-wallet__body-card-row-item">
                    ۳
                </span></td><td class="c-ui-table__cell" style="min-width: 90px"><img src="https://dkstatics-public.digikala.com/digikala-products/19f469a5bc81f24ceeae28ce3422daa9b47fd28b_1603190298.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60" alt=""></td><td class="c-ui-table__cell c-ui-table__cell-desc c-ui--pt-15 c-ui--pb-15"><div class="uk-flex uk-flex-column"><a href="https://www.digikala.com/product/dkp-3585372/" target="_blank"><span class="c-wallet__body-card-row-item c-ui--fit c-ui--initial">
                            کفش زنانه روشن مدل پانیک کد 01
                        </span><span class="c-wallet__body-card-row-item c-ui--fit c-ui--initial"></span></a><div class="uk-flex"><span class="c-mega-campaigns-join-list__container-table-dkpc c-ui--fit c-ui--nowrap">
                            DKP-3585372
                        </span></div></div></td><td class="c-ui-table__cell"><a href="/product/?search%5Bcategory_id%5D=8749"><span class="c-wallet__body-card-row-item c-ui--initial">
                            کفش پاشنه دار زنانه
                        </span></a></td><td class="c-ui-table__cell"><a href="/product/?search%5Bbrand_id%5D=10196"><div class="uk-flex uk-flex-column"><span class="c- -card-row-item">
                                روشن
                            </span><span class="c-wallet__body-card-row-item">
                                Roshan
                            </span></div></a></td><td class="c-ui-table__cell"><div class="uk-flex uk-flex-column"><div class="c-product-list__platform c-product-list__platform-dk c-product-list__platform--active"></div><div class="c-product-list__platform c-product-list__platform-ds c-product-list__platform--active"></div></div></td><td class="c-ui-table__cell"><div class=""><div class="c-wallet__body-card-status-no-circle c-wallet__body-card-status-no-circle--active uk-text-nowrap">
                                                            تایید شده
                                                        </div></div></td><td class="c-ui-table__cell"><span class="c-wallet__body-card-row-item">
                     ۰
                 </span></td><td class="c-ui-table__cell"><div class="uk-flex uk-flex-right uk-flex-middle"><a class="uk-padding-remove" href="/content/create/product/variant/3585372/"><div class="c-mega-campaigns-join-list__container-table-btn c-mega-campaigns-join-list__container-table-btn--view c-ui--mr-10 js-tool-tip-desc"></div><div class="c-rating-chart__description-tooltip c-mega-campaigns-join-list__container-table-btn-tooltip uk-text-nowrap uk-dropdown" uk-dropdown="boundary: .js-tool-tip-desc; pos: bottom-center;delay-hide: 0;offset: 10;">
                                                                افزودن تنوع
                                                            </div></a></div></td></tr><tr class="c-ui-table__row c-ui-table__row--body c-join__table-row"><td class="c-ui-table__cell"><span class="c-wallet__body-card-row-item">
                    ۴
                </span></td><td class="c-ui-table__cell" style="min-width: 90px"><img src="https://dkstatics-public.digikala.com/digikala-products/120361841.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60" alt=""></td><td class="c-ui-table__cell c-ui-table__cell-desc c-ui--pt-15 c-ui--pb-15"><div class="uk-flex uk-flex-column"><a href="https://www.digikala.com/product/dkp-2661133/" target="_blank"><span class="c-wallet__body-card-row-item c-ui--fit c-ui--initial">
                            کاور کوسن طرح کیتی مدل co464
                        </span><span class="c-wallet__body-card-row-item c-ui--fit c-ui--initial"></span></a><div class="uk-flex"><span class="c-mega-campaigns-join-list__container-table-dkpc c-ui--fit c-ui--nowrap">
                            DKP-2661133
                        </span></div></div></td><td class="c-ui-table__cell"><a href="/product/?search%5Bcategory_id%5D=6741"><span class="c-wallet__body-card-row-item c-ui--initial">
                            کوسن کودک
                        </span></a></td><td class="c-ui-table__cell"><a href="/product/?search%5Bbrand_id%5D=719"><div class="uk-flex uk-flex-column"><span class="c- -card-row-item">
                                متفرقه
                            </span><span class="c-wallet__body-card-row-item">
                                Miscellaneous
                            </span></div></a></td><td class="c-ui-table__cell"><div class="uk-flex uk-flex-column"><div class="c-product-list__platform c-product-list__platform-dk c-product-list__platform--active"></div><div class="c-product-list__platform c-product-list__platform-ds"></div></div></td><td class="c-ui-table__cell"><div class=""><div class="c-wallet__body-card-status-no-circle c-wallet__body-card-status-no-circle--active uk-text-nowrap">
                                                            تایید شده
                                                        </div></div></td><td class="c-ui-table__cell"><span class="c-wallet__body-card-row-item">
                     ۱۱
                 </span></td><td class="c-ui-table__cell"><div class="uk-flex uk-flex-right uk-flex-middle"><a class="uk-padding-remove" href="/content/create/product/variant/2661133/"><div class="c-mega-campaigns-join-list__container-table-btn c-mega-campaigns-join-list__container-table-btn--view c-ui--mr-10 js-tool-tip-desc"></div><div class="c-rating-chart__description-tooltip c-mega-campaigns-join-list__container-table-btn-tooltip uk-text-nowrap uk-dropdown" uk-dropdown="boundary: .js-tool-tip-desc; pos: bottom-center;delay-hide: 0;offset: 10;">
                                                                افزودن تنوع
                                                            </div></a></div></td></tr><tr class="c-ui-table__row c-ui-table__row--body c-join__table-row"><td class="c-ui-table__cell"><span class="c-wallet__body-card-row-item">
                    ۵
                </span></td><td class="c-ui-table__cell" style="min-width: 90px"><img src="https://dkstatics-public.digikala.com/digikala-products/117958659.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60" alt=""></td><td class="c-ui-table__cell c-ui-table__cell-desc c-ui--pt-15 c-ui--pb-15"><div class="uk-flex uk-flex-column"><a href="https://www.digikala.com/product/dkp-2399707/" target="_blank"><span class="c-wallet__body-card-row-item c-ui--fit c-ui--initial">
                            کاور مدل Silc مناسب برای گوشی موبایل سامسونگ Galaxy A20/A30
                        </span><span class="c-wallet__body-card-row-item c-ui--fit c-ui--initial"></span></a><div class="uk-flex"><span class="c-mega-campaigns-join-list__container-table-dkpc c-ui--fit c-ui--nowrap">
                            DKP-2399707
                        </span><span class="c-mega-campaigns-join-list__container-table-fake c-ui--fit c-ui--mr-10 c-ui--nowrap uk-flex uk-flex-center">
                                غیر اصل
                            </span></div></div></td><td class="c-ui-table__cell"><a href="/product/?search%5Bcategory_id%5D=5966"><span class="c-wallet__body-card-row-item c-ui--initial">
                            کیف و کاور گوشی
                        </span></a></td><td class="c-ui-table__cell"><a href="/product/?search%5Bbrand_id%5D=719"><div class="uk-flex uk-flex-column"><span class="c- -card-row-item">
                                متفرقه
                            </span><span class="c-wallet__body-card-row-item">
                                Miscellaneous
                            </span></div></a></td><td class="c-ui-table__cell"><div class="uk-flex uk-flex-column"><div class="c-product-list__platform c-product-list__platform-dk c-product-list__platform--active"></div><div class="c-product-list__platform c-product-list__platform-ds"></div></div></td><td class="c-ui-table__cell"><div class=""><div class="c-wallet__body-card-status-no-circle c-wallet__body-card-status-no-circle--active uk-text-nowrap">
                                                            تایید شده
                                                        </div></div></td><td class="c-ui-table__cell"><span class="c-wallet__body-card-row-item">
                     ۰
                 </span></td><td class="c-ui-table__cell"><div class="uk-flex uk-flex-right uk-flex-middle"><a class="uk-padding-remove" href="/content/create/product/variant/2399707/"><div class="c-mega-campaigns-join-list__container-table-btn c-mega-campaigns-join-list__container-table-btn--view c-ui--mr-10 js-tool-tip-desc"></div><div class="c-rating-chart__description-tooltip c-mega-campaigns-join-list__container-table-btn-tooltip uk-text-nowrap uk-dropdown" uk-dropdown="boundary: .js-tool-tip-desc; pos: bottom-center;delay-hide: 0;offset: 10;">
                                                                افزودن تنوع
                                                            </div></a></div></td></tr><tr class="c-ui-table__row c-ui-table__row--body c-join__table-row"><td class="c-ui-table__cell"><span class="c-wallet__body-card-row-item">
                    ۶
                </span></td><td class="c-ui-table__cell" style="min-width: 90px"><img src="https://dkstatics-public.digikala.com/digikala-products/119909357.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60" alt=""></td><td class="c-ui-table__cell c-ui-table__cell-desc c-ui--pt-15 c-ui--pb-15"><div class="uk-flex uk-flex-column"><a href="https://www.digikala.com/product/dkp-1653330/" target="_blank"><span class="c-wallet__body-card-row-item c-ui--fit c-ui--initial">
                            کاور کد 02b مناسب برای گوشی موبایل هوآوی P8 Lite
                        </span><span class="c-wallet__body-card-row-item c-ui--fit c-ui--initial"></span></a><div class="uk-flex"><span class="c-mega-campaigns-join-list__container-table-dkpc c-ui--fit c-ui--nowrap">
                            DKP-1653330
                        </span></div></div></td><td class="c-ui-table__cell"><a href="/product/?search%5Bcategory_id%5D=5966"><span class="c-wallet__body-card-row-item c-ui--initial">
                            کیف و کاور گوشی
                        </span></a></td><td class="c-ui-table__cell"><a href="/product/?search%5Bbrand_id%5D=719"><div class="uk-flex uk-flex-column"><span class="c- -card-row-item">
                                متفرقه
                            </span><span class="c-wallet__body-card-row-item">
                                Miscellaneous
                            </span></div></a></td><td class="c-ui-table__cell"><div class="uk-flex uk-flex-column"><div class="c-product-list__platform c-product-list__platform-dk c-product-list__platform--active"></div><div class="c-product-list__platform c-product-list__platform-ds"></div></div></td><td class="c-ui-table__cell"><div class=""><div class="c-wallet__body-card-status-no-circle c-wallet__body-card-status-no-circle--active uk-text-nowrap">
                                                            تایید شده
                                                        </div></div></td><td class="c-ui-table__cell"><span class="c-wallet__body-card-row-item">
                     ۱
                 </span></td><td class="c-ui-table__cell"><div class="uk-flex uk-flex-right uk-flex-middle"><a class="uk-padding-remove" href="/content/create/product/variant/1653330/"><div class="c-mega-campaigns-join-list__container-table-btn c-mega-campaigns-join-list__container-table-btn--view c-ui--mr-10 js-tool-tip-desc"></div><div class="c-rating-chart__description-tooltip c-mega-campaigns-join-list__container-table-btn-tooltip uk-text-nowrap uk-dropdown" uk-dropdown="boundary: .js-tool-tip-desc; pos: bottom-center;delay-hide: 0;offset: 10;">
                                                                افزودن تنوع
                                                            </div></a></div></td></tr><tr class="c-ui-table__row c-ui-table__row--body c-join__table-row"><td class="c-ui-table__cell"><span class="c-wallet__body-card-row-item">
                    ۷
                </span></td><td class="c-ui-table__cell" style="min-width: 90px"><img src="https://dkstatics-public.digikala.com/digikala-products/110900334.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60" alt=""></td><td class="c-ui-table__cell c-ui-table__cell-desc c-ui--pt-15 c-ui--pb-15"><div class="uk-flex uk-flex-column"><a href="https://www.digikala.com/product/dkp-1570746/" target="_blank"><span class="c-wallet__body-card-row-item c-ui--fit c-ui--initial">
                            پیکسل ماسا دیزاین طرح سایکدلیک اسکلت کد AS397
                        </span><span class="c-wallet__body-card-row-item c-ui--fit c-ui--initial">
                             MASA DESIGN Pixel Psychedelic music Musical style
                        </span></a><div class="uk-flex"><span class="c-mega-campaigns-join-list__container-table-dkpc c-ui--fit c-ui--nowrap">
                            DKP-1570746
                        </span></div></div></td><td class="c-ui-table__cell"><a href="/product/?search%5Bcategory_id%5D=8749"><span class="c-wallet__body-card-row-item c-ui--initial">
                            گل سینه زنانه
                        </span></a></td><td class="c-ui-table__cell"><a href="/product/?search%5Bbrand_id%5D=719"><div class="uk-flex uk-flex-column"><span class="c- -card-row-item">
                                متفرقه
                            </span><span class="c-wallet__body-card-row-item">
                                Miscellaneous
                            </span></div></a></td><td class="c-ui-table__cell"><div class="uk-flex uk-flex-column"><div class="c-product-list__platform c-product-list__platform-dk c-product-list__platform--active"></div><div class="c-product-list__platform c-product-list__platform-ds"></div></div></td><td class="c-ui-table__cell"><div class=""><div class="c-wallet__body-card-status-no-circle c-wallet__body-card-status-no-circle--active uk-text-nowrap">
                                                            تایید شده
                                                        </div></div></td><td class="c-ui-table__cell"><span class="c-wallet__body-card-row-item">
                     ۰
                 </span></td><td class="c-ui-table__cell"><div class="uk-flex uk-flex-right uk-flex-middle"><a class="uk-padding-remove" href="/content/create/product/variant/1570746/"><div class="c-mega-campaigns-join-list__container-table-btn c-mega-campaigns-join-list__container-table-btn--view c-ui--mr-10 js-tool-tip-desc"></div><div class="c-rating-chart__description-tooltip c-mega-campaigns-join-list__container-table-btn-tooltip uk-text-nowrap uk-dropdown" uk-dropdown="boundary: .js-tool-tip-desc; pos: bottom-center;delay-hide: 0;offset: 10;">
                                                                افزودن تنوع
                                                            </div></a></div></td></tr><tr class="c-ui-table__row c-ui-table__row--body c-join__table-row"><td class="c-ui-table__cell"><span class="c-wallet__body-card-row-item">
                    ۸
                </span></td><td class="c-ui-table__cell" style="min-width: 90px"><img src="https://dkstatics-public.digikala.com/digikala-products/5076202.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60" alt=""></td><td class="c-ui-table__cell c-ui-table__cell-desc c-ui--pt-15 c-ui--pb-15"><div class="uk-flex uk-flex-column"><a href="https://www.digikala.com/product/dkp-1072654/" target="_blank"><span class="c-wallet__body-card-row-item c-ui--fit c-ui--initial">
                            پاپوش نوزادی طرح عروسکی کد 104
                        </span><span class="c-wallet__body-card-row-item c-ui--fit c-ui--initial"></span></a><div class="uk-flex"><span class="c-mega-campaigns-join-list__container-table-dkpc c-ui--fit c-ui--nowrap">
                            DKP-1072654
                        </span></div></div></td><td class="c-ui-table__cell"><a href="/product/?search%5Bcategory_id%5D=8749"><span class="c-wallet__body-card-row-item c-ui--initial">
                            جوراب نوزاد
                        </span></a></td><td class="c-ui-table__cell"><a href="/product/?search%5Bbrand_id%5D=719"><div class="uk-flex uk-flex-column"><span class="c- -card-row-item">
                                متفرقه
                            </span><span class="c-wallet__body-card-row-item">
                                Miscellaneous
                            </span></div></a></td><td class="c-ui-table__cell"><div class="uk-flex uk-flex-column"><div class="c-product-list__platform c-product-list__platform-dk c-product-list__platform--active"></div><div class="c-product-list__platform c-product-list__platform-ds"></div></div></td><td class="c-ui-table__cell"><div class=""><div class="c-wallet__body-card-status-no-circle c-wallet__body-card-status-no-circle--active uk-text-nowrap">
                                                            تایید شده
                                                        </div></div></td><td class="c-ui-table__cell"><span class="c-wallet__body-card-row-item">
                     ۲
                 </span></td><td class="c-ui-table__cell"><div class="uk-flex uk-flex-right uk-flex-middle"><a class="uk-padding-remove" href="/product/edit/1072654/"><div class="c-mega-campaigns-join-list__container-table-btn c-mega-campaigns-join-list__container-table-btn--small-edit c-ui--mr-10 js-tool-tip-desc"></div><div class="c-rating-chart__description-tooltip c-mega-campaigns-join-list__container-table-btn-tooltip uk-text-nowrap uk-dropdown" uk-dropdown="boundary: .js-tool-tip-desc; pos: bottom-center;delay-hide: 0;offset: 10;">
                                                                ویرایش محصول
                                                            </div></a><a class="uk-padding-remove" href="/content/create/product/variant/1072654/"><div class="c-mega-campaigns-join-list__container-table-btn c-mega-campaigns-join-list__container-table-btn--view c-ui--mr-10 js-tool-tip-desc"></div><div class="c-rating-chart__description-tooltip c-mega-campaigns-join-list__container-table-btn-tooltip uk-text-nowrap uk-dropdown" uk-dropdown="boundary: .js-tool-tip-desc; pos: bottom-center;delay-hide: 0;offset: 10;">
                                                                افزودن تنوع
                                                            </div></a></div></td></tr><tr class="c-ui-table__row c-ui-table__row--body c-join__table-row"><td class="c-ui-table__cell"><span class="c-wallet__body-card-row-item">
                    ۹
                </span></td><td class="c-ui-table__cell" style="min-width: 90px"><img src="https://dkstatics-public.digikala.com/digikala-products/5074673.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60" alt=""></td><td class="c-ui-table__cell c-ui-table__cell-desc c-ui--pt-15 c-ui--pb-15"><div class="uk-flex uk-flex-column"><a href="https://www.digikala.com/product/dkp-1072366/" target="_blank"><span class="c-wallet__body-card-row-item c-ui--fit c-ui--initial">
                            پاپوش نوزادی طرح عروسکی کد 103
                        </span><span class="c-wallet__body-card-row-item c-ui--fit c-ui--initial"></span></a><div class="uk-flex"><span class="c-mega-campaigns-join-list__container-table-dkpc c-ui--fit c-ui--nowrap">
                            DKP-1072366
                        </span></div></div></td><td class="c-ui-table__cell"><a href="/product/?search%5Bcategory_id%5D=8749"><span class="c-wallet__body-card-row-item c-ui--initial">
                            جوراب نوزاد
                        </span></a></td><td class="c-ui-table__cell"><a href="/product/?search%5Bbrand_id%5D=719"><div class="uk-flex uk-flex-column"><span class="c- -card-row-item">
                                متفرقه
                            </span><span class="c-wallet__body-card-row-item">
                                Miscellaneous
                            </span></div></a></td><td class="c-ui-table__cell"><div class="uk-flex uk-flex-column"><div class="c-product-list__platform c-product-list__platform-dk c-product-list__platform--active"></div><div class="c-product-list__platform c-product-list__platform-ds"></div></div></td><td class="c-ui-table__cell"><div class=""><div class="c-wallet__body-card-status-no-circle c-wallet__body-card-status-no-circle--active uk-text-nowrap">
                                                            تایید شده
                                                        </div></div></td><td class="c-ui-table__cell"><span class="c-wallet__body-card-row-item">
                     ۱
                 </span></td><td class="c-ui-table__cell"><div class="uk-flex uk-flex-right uk-flex-middle"><a class="uk-padding-remove" href="/product/edit/1072366/"><div class="c-mega-campaigns-join-list__container-table-btn c-mega-campaigns-join-list__container-table-btn--small-edit c-ui--mr-10 js-tool-tip-desc"></div><div class="c-rating-chart__description-tooltip c-mega-campaigns-join-list__container-table-btn-tooltip uk-text-nowrap uk-dropdown" uk-dropdown="boundary: .js-tool-tip-desc; pos: bottom-center;delay-hide: 0;offset: 10;">
                                                                ویرایش محصول
                                                            </div></a><a class="uk-padding-remove" href="/content/create/product/variant/1072366/"><div class="c-mega-campaigns-join-list__container-table-btn c-mega-campaigns-join-list__container-table-btn--view c-ui--mr-10 js-tool-tip-desc"></div><div class="c-rating-chart__description-tooltip c-mega-campaigns-join-list__container-table-btn-tooltip uk-text-nowrap uk-dropdown" uk-dropdown="boundary: .js-tool-tip-desc; pos: bottom-center;delay-hide: 0;offset: 10;">
                                                                افزودن تنوع
                                                            </div></a></div></td></tr><tr class="c-ui-table__row c-ui-table__row--body c-join__table-row"><td class="c-ui-table__cell"><span class="c-wallet__body-card-row-item">
                    ۱۰
                </span></td><td class="c-ui-table__cell" style="min-width: 90px"><img src="https://dkstatics-public.digikala.com/digikala-products/5073791.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60" alt=""></td><td class="c-ui-table__cell c-ui-table__cell-desc c-ui--pt-15 c-ui--pb-15"><div class="uk-flex uk-flex-column"><a href="https://www.digikala.com/product/dkp-1072236/" target="_blank"><span class="c-wallet__body-card-row-item c-ui--fit c-ui--initial">
                            پاپوش نوزادی طرح عروسکی کد 102
                        </span><span class="c-wallet__body-card-row-item c-ui--fit c-ui--initial"></span></a><div class="uk-flex"><span class="c-mega-campaigns-join-list__container-table-dkpc c-ui--fit c-ui--nowrap">
                            DKP-1072236
                        </span></div></div></td><td class="c-ui-table__cell"><a href="/product/?search%5Bcategory_id%5D=8749"><span class="c-wallet__body-card-row-item c-ui--initial">
                            جوراب نوزاد
                        </span></a></td><td class="c-ui-table__cell"><a href="/product/?search%5Bbrand_id%5D=719"><div class="uk-flex uk-flex-column"><span class="c- -card-row-item">
                                متفرقه
                            </span><span class="c-wallet__body-card-row-item">
                                Miscellaneous
                            </span></div></a></td><td class="c-ui-table__cell"><div class="uk-flex uk-flex-column"><div class="c-product-list__platform c-product-list__platform-dk c-product-list__platform--active"></div><div class="c-product-list__platform c-product-list__platform-ds"></div></div></td><td class="c-ui-table__cell"><div class=""><div class="c-wallet__body-card-status-no-circle c-wallet__body-card-status-no-circle--active uk-text-nowrap">
                                                            تایید شده
                                                        </div></div></td><td class="c-ui-table__cell"><span class="c-wallet__body-card-row-item">
                     ۱
                 </span></td><td class="c-ui-table__cell"><div class="uk-flex uk-flex-right uk-flex-middle"><a class="uk-padding-remove" href="/product/edit/1072236/"><div class="c-mega-campaigns-join-list__container-table-btn c-mega-campaigns-join-list__container-table-btn--small-edit c-ui--mr-10 js-tool-tip-desc"></div><div class="c-rating-chart__description-tooltip c-rating-chart__description-tooltip--top c-mega-campaigns-join-list__container-table-btn-tooltip uk-text-nowrap uk-dropdown" uk-dropdown="boundary: .js-tool-tip-desc; pos: top-center;delay-hide: 0;offset: 10;">
                                                                ویرایش محصول
                                                            </div></a><a class="uk-padding-remove" href="/content/create/product/variant/1072236/"><div class="c-mega-campaigns-join-list__container-table-btn c-mega-campaigns-join-list__container-table-btn--view c-ui--mr-10 js-tool-tip-desc"></div><div class="c-rating-chart__description-tooltip c-rating-chart__description-tooltip--top c-mega-campaigns-join-list__container-table-btn-tooltip uk-text-nowrap uk-dropdown" uk-dropdown="boundary: .js-tool-tip-desc; pos: top-center;delay-hide: 0;offset: 10;">
                                                                افزودن تنوع
                                                            </div></a></div></td></tr></tbody></table></div><div class="c-card__footer"><div class="c-mega-campaigns__btns-green-plus uk-margin-remove">
                                            ایجاد کالای جدید
                                        </div><div class="c-ui-paginator js-paginator"><div class="c-ui-paginator__total" data-rows="۲۰">
                                                تعداد نتایج: <span>۲۰ مورد</span></div><div class="c-ui-paginator__select"><div class="c-ui-paginator__select-label">تعداد نمایش</div><div class="c-ui-paginator__select-pages"><div class="field-wrapper ui-select ui-select__container"><select class="c-ui-select c-ui-select--common c-ui-select--small js-search-items-per-page select2-hidden-accessible" name="paginator-select-pages" data-select2-id="16" tabindex="-1" aria-hidden="true"><option value="10" selected="" data-select2-id="18">۱۰</option><option value="20">۲۰</option><option value="50">۵۰</option><option value="100">۱۰۰</option></select><span class="select2 select2-container select2-container--default" dir="rtl" data-select2-id="17" style="width: 60px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-paginator-select-pages-hx-container"><span class="select2-selection__rendered" id="select2-paginator-select-pages-hx-container" role="textbox" aria-readonly="true" title="۱۰">۱۰</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span><div class="js-select-options c-ui-paginator__dropdown-container"></div></div></div></div><ul class="c-ui-paginator__control js-search-pager"><li class="c-ui-paginator__control-item"><a class="c-ui-paginator__control-prev c-ui-paginator__control-prev--disabled" data-page=""></a></li><li class="c-ui-paginator__control-item uk-active"><a data-page="1" class="c-ui-paginator__control-digit c-ui-paginator__control-digit--current">۱</a></li><li class="c-ui-paginator__control-item"><a data-page="2" class="c-ui-paginator__control-digit">۲</a></li><li class="c-ui-paginator__control-item"><a class="c-ui-paginator__control-next" data-page="2"></a></li></ul></div></div></div></div></div></div></div>
            </div>
            <div id="pageLoader" class="c-content-loader c-content-loader--fixed">
                <div class="c-content-loader__logo"></div>
                <div class="c-content-loader__spinner"></div>
            </div>
        </div>
</main>
@endsection
@section('script')

@endsection
