@extends('layouts.staff.master')
@section('head')
    <script src="{{ asset('staff/js/js/indexAction.js') }}"></script>
@endsection
@section('content')

    @php
        $site_url = $settings->where('name', 'site_url')->first()->value;
        $product_code_prefix = $settings->where('name', 'product_code_prefix')->first()->value;
        $product_title_prefix = $settings->where('name', 'product_title_prefix')->first()->value;
    @endphp

    <main class="c-content-layout">
        <div class="uk-container uk-container-large">
            <div class="c-grid">
                <div class="c-content-page c-content-page--plain c-grid__row">
                    <div class="c-grid__col">
                        <div class="c-content-page__header">
                            <span class="c-content-page__header-action">جستجو یا درج محصول</span>
                            <span class="c-content-page__header-desc">محصولی که قصد فروش آن را دارید جستجو کنید تا بدون نیاز به پروسه ی درج و تایید کالا، هرچه سریعتر شما هم بفروشید.</span>
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
                                            <input type="hidden" name="product_variants[product_id]" value="1072654">
                                            <input type="hidden" name="product_variants[variation_theme]" value="sized">
                                            <div class="c-content-modal__notes">
                                                <span class="c-content-modal__notes-title">توجه:</span>
                                                <ul class="c-content-modal__notes-list">
                                                    <li>لطفاً قبل از درج تنوع، مشخصات فنی کالا (مانند: رنگ، ابعاد، اقلام
                                                        همراه کالا، جنس کالا، تصویر بسته‌بندی و ...) را در سایت چک کرده
                                                        و اطمینان حاصل کنید که تنوع شما با مشخصات فنی کالا در سایت
                                                        مطابقت داشته باشد. عدم تطابق مشخصات فنی کالا با تنوع شما، علاوه
                                                        بر ایجاد نارضایتی مشتریان و تاثیر در امتیاز عملکرد شما، موجب
                                                        مرجوع شدن سفارشات به علت مغایرت شده و همچنین موجب غیر‌فعال شدن
                                                        کالا/گروه کالایی خواهد شد.
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="c-variant-error c-variant-error__box mt-20 mb-20 hidden">

                                            </div>
                                            <div class="c-variant__header">
                                                <div class="c-variant__img-container">
                                                    <img
                                                        src="https://dkstatics-public.digikala.com/digikala-products/5076202.jpg?x-oss-process=image/resize,m_fill,h_120,w_120"
                                                        alt="" class="c-variant__img">
                                                </div>
                                                <div class="c-variant__descr">
                                                    <h2 class="c-variant__title">پاپوش نوزادی طرح عروسکی کد 104</h2>
                                                    <div class="c-variant__sub-title"></div>
                                                    <div
                                                        class="c-variant__secondary-info c-variant__secondary-info--top">
                                                        <ul class="c-variant__secondary-info--table">
                                                            <li class="c-variant__secondary-info--table-row">
                                                                <div class="c-variant__secondary-info--table-cell">
                                                                    <span class="c-variant__info">دسته بندی:</span>
                                                                    <span
                                                                        class="c-variant__info--main">جوراب نوزاد</span>
                                                                </div>

                                                                <div class="c-variant__secondary-info--table-cell">
                                                                    <span
                                                                        class="c-variant__info">تنوع مجاز این کالا:</span>
                                                                    <span class="c-variant__info--main">سایز</span>
                                                                </div>
                                                                <div class="c-variant__secondary-info--table-cell">
                                                                    <span
                                                                        class="c-variant__info">کمیسیون فروش این کالا:</span>
                                                                    <span class="c-variant__info--main">۱٪</span>
                                                                </div>
                                                            </li>
                                                            <li class="c-variant__secondary-info--table-row">
                                                                <div class="c-variant__secondary-info--table-cell">
                                                                    <span class="c-variant__info">ابعاد بسته‌بندی محصول (ارتفاع×عرض×طول):</span>
                                                                    <span
                                                                        class="c-variant__info--main">۲۰x۱۸x۹ سانتیمتر</span>
                                                                </div>
                                                                <div class="c-variant__secondary-info--table-cell">
                                                                    <span
                                                                        class="c-variant__info">وزن بسته‌بندی محصول:</span>
                                                                    <span class="c-variant__info--main">۸۸ گرم</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="c-variant__body">
                                                <div class="c-grid__row c-grid__row--gap-lg">
                                                    <div
                                                        class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial">
                                                        <label for="" class="uk-form-label uk-flex uk-flex-between">
                                                            انتخاب سایز کالا:
                                                            <span class="uk-form-label__required"></span>
                                                            <a class="search-link" id="newSizeRequestModalBtn">درخواست
                                                                سایز جدید</a>
                                                        </label>
                                                        <div class="field-wrapper" id="attributesContainer">
                                                            <div class="c-variant__attributes-container">
                                                                <button type="button"
                                                                        class="c-variant-btn js-add-variant"
                                                                        id="attribute_13076"
                                                                        data-attribute-value="0 ماه"
                                                                        data-attribute-id="13076" data-title="0 ماه">
                                                                    <span class="c-variant-btn__label">
                                                                    <span class="c-variant-btn__text">0 ماه</span>
                                                                        <span class="c-variant-btn__counter hidden">
                                                                            (<span class="js-variant-count"></span>)
                                                                        </span>
                                                                    </span>
                                                                </button>
                                                                <button type="button"
                                                                        class="c-variant-btn js-add-variant"
                                                                        id="attribute_35308"
                                                                        data-attribute-value="0-10 ماه"
                                                                        data-attribute-id="35308" data-title="0-10 ماه">
                                                                    <span class="c-variant-btn__label">
                                                                                                                                                <span
                                                                                                                                                    class="c-variant-btn__text">0-10 ماه</span>
                                                                        <span class="c-variant-btn__counter hidden">
                                                                            (<span class="js-variant-count"></span>)
                                                                        </span>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="c-variant-error c-variant-error__box mt-20 mb-20 hidden"
                                                     id="ajaxErrorsList">
                                                </div>
                                                <div class="c-variant-success c-variant-success__box mt-20 mb-20 hidden"
                                                     id="ajaxSuccessList">
                                                    <div>تنوع‌های شما با موفقیت ذخیره شدند</div>
                                                </div>
                                                <div class="c-grid__row c-grid__row--gap-lg mt-30">
                                                    <div id="variantsContainer"
                                                         class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial relative">

                                                        <div class="c-content-loader">
                                                            <div class="c-content-loader__logo"></div>
                                                            <div class="c-content-loader__spinner"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="c-grid__row c-grid__row--gap-lg">
                                                    <div class="c-grid__col c-grid__col--gap-lg">
                                                        <button type="button" class="c-ui-btn c-ui-btn--dkpc hidden"
                                                                id="saveNewVariantsButton">
                                                            افزودن به لیست تنوع
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="c-variant__form " id="productVariantsContainer">
                                            <input type="hidden" class="js-static-form-data" name="search[product_id]"
                                                   value="1072654">

                                            <div class="c-grid__row js-table-container">
                                                <div class="c-grid__col">
                                                    <div class="c-variation-diversity">
                                                        <div class="c-variation-diversity__header">
                                                            <div class="c-variation-diversity__title">لیست تنوع ها</div>

                                                            <div class="c-card__paginator">
                                                                <div class="c-ui-paginator js-paginator">
                                                                    <div class="c-ui-paginator__total" data-rows="۲">
                                                                        تعداد نتایج: <span>۲ مورد</span>
                                                                    </div>

{{--                                                                    <div class="c-ui-paginator__select">--}}
{{--                                                                        <div class="c-ui-paginator__select-label">تعداد--}}
{{--                                                                            نمایش--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="c-ui-paginator__select-pages">--}}
{{--                                                                            <div--}}
{{--                                                                                class="field-wrapper ui-select ui-select__container">--}}
{{--                                                                                <select--}}
{{--                                                                                    class="c-ui-select c-ui-select--common c-ui-select--small js-search-items-per-page select2-hidden-accessible"--}}
{{--                                                                                    name="paginator-select-pages"--}}
{{--                                                                                    data-select2-id="7" tabindex="-1"--}}
{{--                                                                                    aria-hidden="true">--}}
{{--                                                                                    <option value="10" selected=""--}}
{{--                                                                                            data-select2-id="9">۱۰--}}
{{--                                                                                    </option>--}}
{{--                                                                                    <option value="20">۲۰</option>--}}
{{--                                                                                    <option value="50">۵۰</option>--}}
{{--                                                                                    <option value="100">۱۰۰</option>--}}
{{--                                                                                </select>--}}
{{--                                                                                <div--}}
{{--                                                                                    class="js-select-options c-ui-paginator__dropdown-container"></div>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}

                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="c-variation-diversity__list">
                                                            <table class="c-ui-table   js-search-table "
                                                                   data-sort-column="product_variant_id"
                                                                   data-sort-order="desc"
                                                                   data-search-url="/content/create/product/variant/search/"
                                                                   data-auto-reload-seconds="0" data-new-ui="1"
                                                                   data-is-header-floating="1" data-has-checkboxes="">
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
                                                                        <span class="js-search-table-column">کد تنوع (DKPC)</span>
                                                                    </th>
                                                                    <th class="c-ui-table__header c-ui-table__header--nowrap ">
                                                                        <span
                                                                            class="js-search-table-column">کد فروشنده</span>
                                                                    </th>
                                                                    <th class="c-ui-table__header c-ui-table__header--nowrap ">
                                                                        <span
                                                                            class="js-search-table-column">ارسال توسط</span>
                                                                    </th>
                                                                    {{--                                                                    <th class="c-ui-table__header c-ui-table__header--nowrap ">--}}
                                                                    {{--                                                                        <span--}}
                                                                    {{--                                                                            class="js-search-table-column">کانال فروش</span>--}}
                                                                    {{--                                                                    </th>--}}
                                                                    <th class="c-ui-table__header c-ui-table__header--nowrap ">
                                                                        <span class="js-search-table-column">فعال / غیرفعال</span>
                                                                    </th>
                                                                    <th class="c-ui-table__header c-ui-table__header--nowrap ">
                                                                        <span class="js-search-table-column"></span>
                                                                    </th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr class="c-variation-diversity__item c-variation-diversity__item--top js-variant-row"
                                                                    id="productVariantViewRow_2276294" style="text-align: center;">
                                                                    <td class="c-variation-diversity__count">۱</td>
                                                                    <td class="c-variation-diversity__title">
                                                                        8 تا 12 ماه
                                                                    </td>

                                                                    <td class="c-variation-diversity__warranty"> گارانتی
                                                                        اصالت و سلامت فیزیکی کالا
                                                                    </td>
                                                                    <td class="c-variation-diversity__code">2276294</td>
                                                                    <td class="c-variation-diversity__code js-view-supplier-code"></td>
                                                                    <td>
                                                                        <div class="uk-flex">
{{--                                                                            <span class="c-variation-diversity__channel dk js-view-shipping-type-digikala active"></span>--}}
{{--                                                                            <span class="c-variation-diversity__channel seller js-view-shipping-type-seller"></span>--}}
                                                                        </div>
                                                                    </td>

                                                                    <td class="c-variation-diversity__status js-view-active">
                                                                        <center style="width: 79%;margin: auto;">
                                                                            <span class="c-variation-diversity__status-ui js-td-active inactive" style="float: right;margin-left: 7px;height: 35px;width: 35px;"></span>
                                                                            <button type="button" class="c-ui-btn c-ui-btn--edit js-variant-edit-btn" data-id="2276294" style="
">
                                                                                <span class="c-variant__tooltip c-variant__tooltip--btn" style="margin-left: -9px;">ویرایش تنوع</span>
                                                                            </button>
                                                                        </center>
                                                                    </td>
                                                                </tr>
                                                                <tr class="c-variation-diversity__item c-variation-diversity__item--bottom js-variant-row"
                                                                    id="productVariantEditRow_2276294"
                                                                    data-size="8 تا 12 ماه">
                                                                    <td colspan="9">
                                                                        <form id="editVariant_2276294">
                                                                            <input type="hidden"
                                                                                   name="product_variant[product_id]"
                                                                                   value="1072654">
                                                                            <input type="hidden"
                                                                                   name="product_variant[product_variant_id]"
                                                                                   value="2276294">
                                                                            <div
                                                                                class="c-variation-diversity__separator">
                                                                                <div class="c-variant__secondary-info">

                                                                                    <div
                                                                                        class="c-variant__secondary-item">
                                                                                        <span class="c-variant__info">قیمت مرجع (ریال):</span>
                                                                                        <span type="text"
                                                                                              class="c-variant__info--main"><span
                                                                                                dir="ltr"
                                                                                                data-debug="۱۹۰۰۰۰۰">۱,۹۰۰,۰۰۰</span></span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="c-variant__secondary-item">
                                                                                        <span class="c-variant__info">قیمت فروش (ریال):</span>
                                                                                        <span
                                                                                            class="c-variant__info--main js-view-price"><span
                                                                                                dir="ltr"
                                                                                                data-debug="۱۹۰۰۰۰۰">۱,۹۰۰,۰۰۰</span></span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="c-variant__secondary-item">
                                                                                        <span class="c-variant__info">بازه زمانی ارسال (روز):</span>
                                                                                        <span
                                                                                            class="c-variant__info--main js-view-lead-time">۱</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="c-variant__secondary-item">
                                                                                        <span class="c-variant__info">حداکثر سفارش در سبد (عدد):</span>
                                                                                        <span
                                                                                            class="c-variant__info--main js-view-order-limit">۱</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="c-variant__secondary-item">
                                                                                        <span class="c-variant__info">موجودی نزد شما (عدد):</span>
                                                                                        <span
                                                                                            class="c-variant__info--main js-view-marketplace-seller-stock">۱</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="c-variation-diversity__warning js-save-warning"></div>
                                                                                <div
                                                                                    class="c-variant__secondary-info c-variant__secondary-info--edit"
                                                                                    id="metaEditFormVariant_2276294">
                                                                                    <div
                                                                                        class="c-grid__row c-grid__row--gap-lg">
                                                                                        {{--                                                                                        <div--}}
                                                                                        {{--                                                                                            class="c-grid__col c-grid__col--sm-4 c-grid__col--flex-initial">--}}
                                                                                        {{--                                                                                            <label--}}
                                                                                        {{--                                                                                                class="uk-form-label">کانال--}}
                                                                                        {{--                                                                                                فروش:--}}
                                                                                        {{--                                                                                                <span--}}
                                                                                        {{--                                                                                                    class="uk-form-label__required"></span>--}}
                                                                                        {{--                                                                                            </label>--}}
                                                                                        {{--                                                                                            <div--}}
                                                                                        {{--                                                                                                class="field-wrapper field-wrapper--background uk-flex uk-flex-middle js-radio-group disabled">--}}
                                                                                        {{--                                                                                                <label--}}
                                                                                        {{--                                                                                                    class="c-ui-radio c-ui-radio--gap-sm disabled">--}}
                                                                                        {{--                                                                                                    <input type="radio"--}}
                                                                                        {{--                                                                                                           class="c-ui-radio__origin js-site-digikala"--}}
                                                                                        {{--                                                                                                           name="product_variant[site]"--}}
                                                                                        {{--                                                                                                           value="digikala"--}}
                                                                                        {{--                                                                                                           data-default-value="1"--}}
                                                                                        {{--                                                                                                           checked=""--}}
                                                                                        {{--                                                                                                           disabled="">--}}
                                                                                        {{--                                                                                                    <span--}}
                                                                                        {{--                                                                                                        class="c-ui-radio__check c-ui-radio__check--small"></span>--}}
                                                                                        {{--                                                                                                    <span--}}
                                                                                        {{--                                                                                                        class="c-ui-radio__label">دیجی‌کالا</span>--}}
                                                                                        {{--                                                                                                </label>--}}
                                                                                        {{--                                                                                                <label--}}
                                                                                        {{--                                                                                                    class="c-ui-radio c-ui-radio--gap-sm disabled">--}}
                                                                                        {{--                                                                                                    <input type="radio"--}}
                                                                                        {{--                                                                                                           class="c-ui-radio__origin js-site-digistyle"--}}
                                                                                        {{--                                                                                                           name="product_variant[site]"--}}
                                                                                        {{--                                                                                                           value="seller"--}}
                                                                                        {{--                                                                                                           data-default-value="0"--}}
                                                                                        {{--                                                                                                           disabled="">--}}
                                                                                        {{--                                                                                                    <span--}}
                                                                                        {{--                                                                                                        class="c-ui-radio__check c-ui-radio__check--small"></span>--}}
                                                                                        {{--                                                                                                    <span--}}
                                                                                        {{--                                                                                                        class="c-ui-radio__label">دیجی‌استایل</span>--}}
                                                                                        {{--                                                                                                </label>--}}
                                                                                        {{--                                                                                                <label--}}
                                                                                        {{--                                                                                                    class="c-ui-radio c-ui-radio--gap-sm disabled">--}}
                                                                                        {{--                                                                                                    <input type="radio"--}}
                                                                                        {{--                                                                                                           class="c-ui-radio__origin js-site-both"--}}
                                                                                        {{--                                                                                                           name="product_variant[site]"--}}
                                                                                        {{--                                                                                                           value="both"--}}
                                                                                        {{--                                                                                                           data-default-value="0"--}}
                                                                                        {{--                                                                                                           disabled="">--}}
                                                                                        {{--                                                                                                    <span--}}
                                                                                        {{--                                                                                                        class="c-ui-radio__check c-ui-radio__check--small"></span>--}}
                                                                                        {{--                                                                                                    <span--}}
                                                                                        {{--                                                                                                        class="c-ui-radio__label">دیجی‌کالا و دیجی‌استایل</span>--}}
                                                                                        {{--                                                                                                </label>--}}
                                                                                        {{--                                                                                            </div>--}}
                                                                                        {{--                                                                                        </div>--}}
                                                                                        <div
                                                                                            class="c-grid__col c-grid__col--sm-4 c-grid__col--flex-initial">
                                                                                            <label
                                                                                                class="uk-form-label">ارسال
                                                                                                توسط:
                                                                                                <span
                                                                                                    class="uk-form-label__required"></span>
                                                                                            </label>
                                                                                            <div
                                                                                                class="field-wrapper field-wrapper--background uk-flex uk-flex-middle js-checkbox-group-container">
                                                                                                <label
                                                                                                    class="c-ui-checkbox c-ui-checkbox--gap-sm disabled">
                                                                                                    <input
                                                                                                        type="checkbox"
                                                                                                        class="c-ui-checkbox__origin js-checkbox-group js-shipping-type-digikala"
                                                                                                        name="product_variant[shipping_type_digikala]"
                                                                                                        data-default-value="1"
                                                                                                        value="1"
                                                                                                        checked="">
                                                                                                    <span
                                                                                                        class="c-ui-checkbox__check c-ui-checkbox__check--small"></span>
                                                                                                    <span
                                                                                                        class="c-ui-checkbox__label">دیجی‌کالا</span>
                                                                                                </label>
                                                                                                <label
                                                                                                    class="c-ui-checkbox c-ui-checkbox--gap-sm disabled">
                                                                                                    <input
                                                                                                        type="checkbox"
                                                                                                        class="c-ui-checkbox__origin js-checkbox-group js-shipping-type-seller"
                                                                                                        name="product_variant[shipping_type_seller]"
                                                                                                        data-default-value="0"
                                                                                                        value="1"
                                                                                                        disabled="">
                                                                                                    <span
                                                                                                        class="c-ui-checkbox__check c-ui-checkbox__check--small"></span>
                                                                                                    <span
                                                                                                        class="c-ui-checkbox__label">فروشنده</span>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="c-grid__col c-grid__col--sm-4 c-grid__col--flex-initial">
                                                                                            <label
                                                                                                class="uk-form-label">فعال
                                                                                                / غیرفعال:
                                                                                                <span
                                                                                                    class="uk-form-label__required"></span>
                                                                                            </label>
                                                                                            <div
                                                                                                class="field-wrapper field-wrapper--background uk-flex uk-flex-middle">
                                                                                                <label
                                                                                                    class="c-ui-checkbox">
                                                                                                    <input
                                                                                                        type="checkbox"
                                                                                                        class="c-ui-checkbox__origin js-edit-active"
                                                                                                        name="product_variant[active]"
                                                                                                        data-default-value="0"
                                                                                                        data-id="2276294">
                                                                                                    <span
                                                                                                        class="c-ui-checkbox__check c-ui-checkbox__check--small"></span>
                                                                                                    <span
                                                                                                        class="c-ui-checkbox__label">فعال / غیرفعال</span>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="uk-flex uk-flex-wrap mt-30 w-100">
                                                                                        <div
                                                                                            class="c-grid__col c-ui--mt-20 c-grid__col--sm-2 c-grid__col--flex-initial">
                                <span class="uk-form-label"> بازه زمانی ارسال (روز):
                                    <span class="uk-form-label__required"></span>
                                </span>
                                                                                            <div
                                                                                                class="field-wrapper ui-select ui-select__container ">
                                                                                                <select
                                                                                                    name="product_variant[lead_time]"
                                                                                                    class="uk-input uk-input--select js-select-origin js-edit-lead-time disabled select2-hidden-accessible"
                                                                                                    data-default-value="1"
                                                                                                    data-id="2276294"
                                                                                                    data-select2-id="1"
                                                                                                    tabindex="-1"
                                                                                                    aria-hidden="true">
                                                                                                    <option></option>
                                                                                                    <option value="1"
                                                                                                            selected="selected"
                                                                                                            data-select2-id="3">
                                                                                                        1
                                                                                                    </option>
                                                                                                    <option value="2">
                                                                                                        2
                                                                                                    </option>
                                                                                                    <option value="3">
                                                                                                        3
                                                                                                    </option>

                                                                                                </select>
                                                                                                <div
                                                                                                    class="js-select-options"></div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div
                                                                                            class="c-grid__col c-ui--mt-20 c-grid__col--sm-2 c-grid__col--flex-initial">
                                <span class="uk-form-label"> حداکثر سفارش در سبد (عدد):
                                    <span class="uk-form-label__required"></span>
                                </span>
                                                                                            <div class="field-wrapper">
                                                                                                <input type="text"
                                                                                                       name="product_variant[order_limit]"
                                                                                                       class="uk-input js-edit-order-limit disabled"
                                                                                                       data-default-value="1"
                                                                                                       value="1">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="c-grid__col c-ui--mt-20 c-grid__col--sm-2 c-grid__col--flex-initial">
                                <span class="uk-form-label"> موجودی نزد شما (عدد):
                                    <span class="uk-form-label__required"></span>
                                </span>
                                                                                            <div class="field-wrapper">
                                                                                                <input type="text"
                                                                                                       name="product_variant[marketplace_seller_stock]"
                                                                                                       class="uk-input js-edit-marketplace-seller-stock disabled"
                                                                                                       value="1"
                                                                                                       data-default-value="1">
                                                                                                <input type="hidden"
                                                                                                       name="product_variant[marketplace_seller_old_stock]"
                                                                                                       class="uk-input js-edit-marketplace-seller-old-stock"
                                                                                                       value="1">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="c-grid__col c-ui--mt-20 c-grid__col--sm-2 c-grid__col--flex-initial">
                                <span class="uk-form-label">کد محصول فروشنده:
                                </span>
                                                                                            <div class="field-wrapper">
                                                                                                <input type="text"
                                                                                                       name="product_variant[supplier_code]"
                                                                                                       class="uk-input js-edit-seller-code disabled"
                                                                                                       data-default-value=""
                                                                                                       value="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="c-grid__col c-ui--mt-20 c-grid__col--sm-2 c-grid__col--flex-initial">
                                                                                            <span class="uk-form-label">قیمت مرجع (ریال):</span>
                                                                                            <div class="field-wrapper">
                                                                                                <div
                                                                                                    class="uk-input uk-flex uk-flex-middle">
                                                                                                    <span dir="ltr"
                                                                                                          data-debug="1900000">۱,۹۰۰,۰۰۰</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div
                                                                                            class="c-grid__col c-ui--mt-20 c-grid__col--sm-2 c-grid__col--flex-initial">
                                <span class="uk-form-label"> قیمت فروش (ریال):
                                    <span class="uk-form-label__required"></span>
                                </span>
                                                                                            <div class="field-wrapper">
                                                                                                <input type="text"
                                                                                                       name="product_variant[price]"
                                                                                                       data-editable="true"
                                                                                                       class="uk-input dk-currency js-edit-price js-gold-final-price   disabled"
                                                                                                       data-default-value="1900000"
                                                                                                       value="1900000">
                                                                                            </div>
                                                                                        </div>


                                                                                        <div
                                                                                            class="c-variant__btn-controls">
                                                                                            <div
                                                                                                class="has-error has-error--footer js-edit-error hidden"></div>
                                                                                            <button
                                                                                                class="c-ui-btn c-ui-btn--next mr-a js-variant-save-edit disabled"
                                                                                                data-id="2276294"
                                                                                                disabled="">
                                                                                                ذخیره سازی
                                                                                            </button>
                                                                                            <button type="button"
                                                                                                    class="c-content-categories__search-reset js-variant-cancel-edit"
                                                                                                    data-id="2276294"></button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="c-content-loader">
                                                                                        <div
                                                                                            class="c-content-loader__logo"></div>
                                                                                        <div
                                                                                            class="c-content-loader__spinner"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </td>
                                                                </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="c-variation-diversity__footer">

                                                            <div class="c-card__paginator">
                                                                <div class="c-ui-paginator js-paginator">
                                                                    <div class="c-ui-paginator__total" data-rows="۲">
                                                                        تعداد نتایج: <span>۲ مورد</span>
                                                                    </div>

{{--                                                                    <div class="c-ui-paginator__select">--}}
{{--                                                                        <div class="c-ui-paginator__select-label">تعداد--}}
{{--                                                                            نمایش--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="c-ui-paginator__select-pages">--}}
{{--                                                                            <div--}}
{{--                                                                                class="field-wrapper ui-select ui-select__container">--}}
{{--                                                                                <select--}}
{{--                                                                                    class="c-ui-select c-ui-select--common c-ui-select--small js-search-items-per-page select2-hidden-accessible"--}}
{{--                                                                                    name="paginator-select-pages"--}}
{{--                                                                                    data-select2-id="10" tabindex="-1"--}}
{{--                                                                                    aria-hidden="true">--}}
{{--                                                                                    <option value="10" selected=""--}}
{{--                                                                                            data-select2-id="12">۱۰--}}
{{--                                                                                    </option>--}}
{{--                                                                                    <option value="20">۲۰</option>--}}
{{--                                                                                    <option value="50">۵۰</option>--}}
{{--                                                                                    <option value="100">۱۰۰</option>--}}
{{--                                                                                </select>--}}
{{--                                                                                <div--}}
{{--                                                                                    class="js-select-options c-ui-paginator__dropdown-container"></div>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}

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
                            <div class="c-grid__col c-grid__col--sm-2 c-grid__col--flex-initial">
                                <label class="uk-form-label">
                                    اندازه کالا:
                                </label>
                                <div class="field-wrapper">
                                    <div class="uk-input uk-flex uk-flex-middle readonly">
                                        <span class="js-variant-attribute-title"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="c-grid__col c-grid__col--flex-initial c-grid__col--sm-10">
                                <label class="uk-form-label uk-flex uk-flex-between">
                                    گارانتی کالا:
                                    <span class="uk-form-label__required"></span>
                                    <a href="#" class="search-link js-request-new-warranty">درخواست گارانتی جدید</a>
                                </label>
                                <div class="field-wrapper ui-select ui-select__container">
                                    <select name="" class="uk-input uk-input--select js-variant-warranty"
                                            data-placeholder="لطفا گارانتی را انتخاب کنید">
                                        <option></option>
                                        <option value="5060">گارانتی 7 ماهه نیکلاس</option>
                                        <option value="272">گارانتی اصالت و سلامت فیزیکی کالا</option>

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
                                        <span class="c-ui-checkbox__label">دیجی‌کالا</span>
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
                                <div class="field-wrapper ui-select ui-select__container">
                                    <select name="" class="uk-input uk-input--select js-variant-lead-time">
                                        <option></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>

                                    </select>
                                    <div class="js-select-options"></div>
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
                                    کد محصول فروشنده:
                                </label>
                                <div class="field-wrapper">
                                    <input type="text" class="uk-input js-variant-supplier-code" name="" value="">
                                </div>
                            </div>
                            <div class="c-grid__col c-ui--mt-20 c-grid__col--sm-2 c-grid__col--flex-initial">
                                <label class="uk-form-label">قیمت مرجع (ریال):</label>
                                <div class="field-wrapper">
                                    <input type="text" class="uk-input disabled" value="1900000" disabled="">
                                </div>
                            </div>
                            <div class="c-grid__col c-ui--mt-20 c-grid__col--sm-2 c-grid__col--flex-initial">
                                <label class="uk-form-label">قیمت فروش (ریال):
                                    <span class="uk-form-label__required"></span>
                                </label>
                                <div class="field-wrapper">
                                    <input type="text" data-editable="false"
                                           class="uk-input  js-gold-final-price dk-currency js-variant-price" value="0">
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
                        <input type="hidden" name="warranty[product_id]" value="1072654">
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
                        <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg" ratio="1">
                            <line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"></line>
                            <line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"></line>
                        </svg>
                    </button>
                    <form id="newSizeRequestForm" novalidate="novalidate">
                        <input type="hidden" name="size[product_id]" value="1072654">
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
