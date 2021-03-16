@extends('layouts.staff.master')
@section('head')
<script src="{{ asset('staff/js/js/master-ratingAction.js') }}"></script>
{{--<script src="{{ asset('staff/js/js/tagify.js') }}"></script>--}}
{{--<link href="{{ asset('staff/css/style.bundle.rtl.css') }}">--}}




{{--<script src="{{ asset('seller/js/jQuery.tagify.min.js') }}"></script>--}}
{{--<script src="{{ asset('seller/js/tagify.min.js') }}"></script>--}}
{{--<script src="https://unpkg.com/@yaireo/dragsort"></script>--}}


<script src="https://preview.keenthemes.com/metronic/theme/html/demo7/dist/assets/plugins/global/plugins.bundle.js?v=7.2.3"></script>
<script src="https://preview.keenthemes.com/metronic/theme/html/demo7/dist/assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.2.3"></script>
<script src="https://preview.keenthemes.com/metronic/theme/html/demo7/dist/assets/js/scripts.bundle.js?v=7.2.3"></script>
<script src="https://preview.keenthemes.com/metronic/theme/html/demo7/dist/assets/js/pages/crud/forms/widgets/tagify.js?v=7.2.3"></script>
<link rel="stylesheet" href="https://preview.keenthemes.com/metronic/theme/html/demo7/dist/assets/css/style.bundle.rtl.css?v=7.2.3">
<link rel="stylesheet" href="https://preview.keenthemes.com/metronic/theme/html/demo7/dist/assets/plugins/custom/prismjs/prismjs.bundle.rtl.css?v=7.2.3">
<link rel="stylesheet" href="https://preview.keenthemes.com/metronic/theme/html/demo7/dist/assets/plugins/global/plugins.bundle.rtl.css?v=7.2.3">


@endsection
@section('content')
    <main class="c-main">
        <div class="uk-container uk-container-large">
            <div class="c-grid">
                <div class="c-grid__row">
                    <div class="c-grid__col">
                        <div class="c-card c-card--transparent c-ui--my-5">
                            <h1 class="c-card__title c-card__title--dark c-card__title--desc">
                                جزییات امتیاز محصول <span>در این بخش می توانید جزییات امتیاز و نظرات مربوط به کالای خود را ببینید.</span>
                            </h1>
                        </div>
                    </div>
                </div>



                <div class="c-grid__row">
                    <div class="c-grid__col">
                        <div class="c-card">
                            <div class="c-card__header">
                                <div class="c-card__title">نظرات کاربران</div>
                            </div>

                            <div class="c-card__wrapper">
                                <div class="c-card__header uk-flex uk-flex-bottom">
                                    <form method="GET" id="searchForm">
                                        <div class="uk-flex uk-flex-between">
                                            <div class="uk-width-1-3 c-ui-form__col c-ui-form__col--group-item c-ui-form__col--xs-12 c-ui-form__col--wrap-xs">
                                                <label class="c-ui-form__label uk-text-right">مرتب سازی بر اساس:</label>
                                                <div class="uk-flex">
                                                    <div class="c-profile-rating__details-filter uk-text-nowrap js-user-comment" data-sort="buyers">
                                                        نظرات خریداران
                                                    </div>
                                                    <div class="c-profile-rating__details-filter uk-text-nowrap js-user-comment" data-sort="">
                                                        نظرات کاربران
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="search[mode]" class="js-filter-comment">
                                            <input type="hidden" name="search[variantId]" value="14845985">
                                            <div class="uk-width-1-4 c-ui-form__col c-ui-form__col--group-item c-ui-form__col--xs-12 c-ui-form__col--wrap-xs c-ui-form__col--xs-full c-mega-campaigns-join-list__container-filters-select">
                                                <label class="c-ui-form__label uk-text-right">مرتب سازی بر اساس:</label>
                                                <select class="js-select2 c-ui-select--with-svg-icon c-ui-select c-ui-select--common c-ui-select--small js-sortig-filter select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                    <option value="oldest_comment" data-select2-id="4">همه نظرات</option>
                                                    <option value="newest_comment" selected="" data-select2-id="3">جدیدترین نظرات</option>
                                                    <option value="most_liked" data-select2-id="5">مفیدترین نظرات</option>
                                                    <option value="recommended" data-select2-id="6">توصیه شده برای خرید</option>
                                                    <option value="not_recommended" data-select2-id="7">توصیه نشده برای خرید</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button id="submitButton" class="uk-icon-button uk-icon-button--search uk-invisible" uk-tooltip="title: جستجو; pos: top-center" type="submit" title="" aria-expanded="false"></button>
                                    </form>
                                </div>
                                <div class="c-ui--px-5">

                                    <div class="c-grid__row js-table-container">
                                        <div class="c-grid__col">
                                            <div class="c-card">
                                                <div class="c-card__wrapper">
                                                    <div class="c-card__header c-card__header--table">


                                                        <div class="c-card__paginator">
                                                            <div class="c-ui-paginator js-paginator">
                                                                <div class="c-ui-paginator__total" data-rows="۲">
                                                                    تعداد نتایج: <span>۲ مورد</span>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="c-card__body c-ui-table__wrapper">
                                                        <table class="c-ui-table   js-search-table " data-sort-column="" data-sort-order="" data-search-url="/ajax/product-comment/search/" data-auto-reload-seconds="0" data-new-ui="1" data-is-header-floating="1" data-has-checkboxes="">
                                                            <thead>
                                                            <tr class="c-ui-table__row">
                                                                <th class="c-ui-table__header c-ui-table__header--nowrap " style="transform: translate3d(0px, 30px, 0px);">
                                                                    <span class="js-search-table-column">ردیف</span>
                                                                </th>
                                                                <th class="c-ui-table__header c-ui-table__header--nowrap " colspan="3" style="transform: translate3d(0px, 30px, 0px);">
                                                                    <span class="js-search-table-column">عنوان نظر</span>
                                                                </th>




                                                                <th class="c-ui-table__header c-ui-table__header--nowrap " colspan="2" style="transform: translate3d(0px, 30px, 0px);">
                                                                    <span class="js-search-table-column">عنوان محصول</span>
                                                                </th>

                                                                <th class="c-ui-table__header c-ui-table__header--nowrap " colspan="1" style="transform: translate3d(0px, 30px, 0px);">
                                                                    <span class="js-search-table-column">تاریخ ثبت نظر</span>
                                                                </th>
                                                                <th class="c-ui-table__header c-ui-table__header--nowrap " style="transform: translate3d(0px, 30px, 0px);">
                                                                    <span class="js-search-table-column"></span>
                                                                </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td class="c-ui-table__cell-gap"></td>
                                                            </tr>
                                                            <tr class="c-ui-table__row c-ui-table__row--collapsable c-ui-table__row--body c-profile-rating__expanded-product-row">
                                                                <td class="c-ui-table__cell">
                                                                    ۱
                                                                </td>
                                                                <td class="c-ui-table__cell c-ui-table__cell--item-title uk-width-1-3" colspan="3">
                                                                    بد نیست
                                                                </td>
                                                                <td class="c-ui-table__cell c-ui-table__cell--item-title uk-width-1-3" colspan="2">
                                                                    بد نیست
                                                                </td>

                                                                <td class="c-ui-table__cell">
                                                                    ۱۳۹۹/۰۹/۲۰
                                                                </td>



                                                                <td class="c-ui-table__cell c-ui-table__expander" data-expand="1">
                                                                    <span class="c-ui-table__expander-control js-expand-comment c-ui-table__expander-control--expanded"></span>
                                                                </td>
                                                            </tr>
                                                            <tr class="c-ui-table__expand-row c-ui-table__expand-row--first c-ui-table__expand-row--last js-expanded-row" data-expand-target="1" style="color: #81858b !important;">
                                                                <td class="c-profile-rating__details-more" colspan="12">
                                                                    <table class="c-ui-table js-table-expandable js-search-table js-table-fixed-header">
                                                                        <tbody>
                                                                        <tr class="c-ui-table__row">

                                                                            <td class="uk-flex uk-flex-middle" style="
    width: 26%;
    float: right;
">مهدی جلالی (خریدار)</td>



                                                                            <td class="uk-flex uk-flex-middle" style="width: 15%;float: right;">
                                                                                <div class="c-profile-rating__vote c-profile-rating__vote--thumbs-up">۱</div>
                                                                            </td>

                                                                            <td class="uk-flex uk-flex-middle" style="width: 15%;float: right;">
                                                                                <div class="c-profile-rating__vote c-profile-rating__vote--thumbs-down" style="margin-top: 0px;">۰</div>
                                                                            </td>

                                                                            <td class="uk-flex uk-flex-middle" style="width: 20%;float: right;">
                                                                                <div class="c-profile-rating__vote c-profile-rating__vote--doubt c-profile-rating__vote--small uk-text-nowrap" style="
    margin-top: 0px;
">
                                                                                    مطمئن نیستم
                                                                                </div>
                                                                            </td><td class="uk-flex uk-flex-middle" style="width: 7%;">
                                                                                <div class="c-profile-rating__details-user uk-text-nowrap c-profile-rating__details-user--normal">
                                                                                    کاربر عادی
                                                                                </div>
                                                                            </td>




                                                                            <td class="uk-flex uk-flex-middle c-profile-rating__details-more-title" style="width: 100%;"></td></tr>











                                                                        </tbody>
                                                                    </table>


                                                                    <div class="c-grid__col c-grid__col--gap-lg c-grid__col--row-attr c-grid__col--flex-initial
                                    c-grid__col--sm-6" style="padding-right: 0px;float: right;">
                                                                        <label class="uk-form-label uk-flex uk-flex-between">
                                                                            حداکثر رزولوشن عکس
                                                                            <span class="uk-float-left uk-padding-medium-left"></span>
                                                                        </label>
                                                                        <div class="field-wrapper">
                                                                            <select class="js-select2 c-ui-select--with-svg-icon c-ui-select c-ui-select--common c-ui-select--small js-sortig-filter select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                                                <option value="oldest_comment" data-select2-id="4">همه نظرات</option>
                                                                                <option value="newest_comment" selected="" data-select2-id="3">جدیدترین نظرات</option>
                                                                                <option value="most_liked" data-select2-id="5">مفیدترین نظرات</option>
                                                                                <option value="recommended" data-select2-id="6">توصیه شده برای خرید</option>
                                                                                <option value="not_recommended" data-select2-id="7">توصیه نشده برای خرید</option>
                                                                            </select>
                                                                        </div>
                                                                        <div>
                                                                        </div>
                                                                    </div><div class="c-grid__col c-grid__col--gap-lg c-grid__col--row-attr c-grid__col--flex-initial
                                    c-grid__col--sm-6" style="padding-right: 0px;float: right;">
                                                                        <label class="uk-form-label uk-flex uk-flex-between">
                                                                            حداکثر رزولوشن عکس
                                                                            <span class="uk-float-left uk-padding-medium-left"></span>
                                                                        </label>
                                                                        <div class="field-wrapper



                            ">
                                                                            <input type="text" class="c-content-input__origin js-attribute-old-value" name="attributes[11]" value="" style="
    background: white;
">
                                                                        </div>
                                                                        <div>
                                                                        </div>
                                                                    </div><div class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--sm-12 c-grid__col--xs-gap" style="padding-right: 0px;margin-top: 20px;">
                                                                        <label for="" class="uk-form-label" style="
    color: #505050;
">شرح کالا:</label>
                                                                        <div class="field-wrapper field-wrapper--textarea enabled">
                        <textarea name="product[description]" placeholder="برای معرفی بهتر کالا به مشتریان، پیشنهاد می‌‌شود 150 کلمه درباره‌ کالای خود بنویسید." class="c-content-input__origin c-content-input__origin--textarea js-textarea-words" rows="5" maxlength="2000" style="
    background: white;
"></textarea>
                                                                            <span class="textarea__wordcount">
                            <span class="js-wordcount-target">0</span>/2000
                        </span>
                                                                        </div>
                                                                    </div><div class="c-profile-rating__details-user-vote js-product-score-board" style="
    height: auto;
    min-height: 100px;
">

                                                                        <input id="advantages" class="form-control tagify" name="advantages" placeholder="type..." value="css, html, javascript" autofocus="" data-blacklist=".NET,PHP">

                                                                        <div class="c-rating-chart__details-bar c-rating-chart__details-bar--profile js-product-score-item" style="
    width: 45% !important;
    float: right;
    padding-top: 0px !important;
    margin-left: 5%;
">
                                                                            <div class="c-profile-rating__details-user-vote-item c-profile-rating__details-user-vote-item--title js-product-score-item-label">الیاف</div>
                                                                            <div class="c-rating-chart__details-progress c-profile-rating__details-user-vote-score">
                                                                                <div class="c-profile-rating__details-user-vote-score--fill js-product-score-item-progress" style="width: 80%;"></div>
                                                                            </div>
                                                                            <div class="c-rating-chart__details-value c-profile-rating__details-user-vote-item js-product-score-item-value uk-flex-right">خوب</div>
                                                                        </div>

                                                                        <div class="c-rating-chart__details-bar c-rating-chart__details-bar--profile js-product-score-item" style="
    width: 45% !important;
    float: right;
    padding-top: 0px !important;
">
                                                                            <div class="c-profile-rating__details-user-vote-item c-profile-rating__details-user-vote-item--title js-product-score-item-label">الیاف</div>
                                                                            <div class="c-rating-chart__details-progress c-profile-rating__details-user-vote-score">
                                                                                <div class="c-profile-rating__details-user-vote-score--fill js-product-score-item-progress" style="width: 80%;"></div>
                                                                            </div>
                                                                            <div class="c-rating-chart__details-value c-profile-rating__details-user-vote-item js-product-score-item-value uk-flex-right">خوب</div>
                                                                        </div><div class="c-rating-chart__details-bar c-rating-chart__details-bar--profile js-product-score-item" style="
    width: 45% !important;
    float: right;
    padding-top: 0px !important;
">
                                                                            <div class="c-profile-rating__details-user-vote-item c-profile-rating__details-user-vote-item--title js-product-score-item-label">الیاف</div>
                                                                            <div class="c-rating-chart__details-progress c-profile-rating__details-user-vote-score">
                                                                                <div class="c-profile-rating__details-user-vote-score--fill js-product-score-item-progress" style="width: 80%;"></div>
                                                                            </div>
                                                                            <div class="c-rating-chart__details-value c-profile-rating__details-user-vote-item js-product-score-item-value uk-flex-right">خوب</div>
                                                                        </div></div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="c-ui-table__cell-gap"></td>
                                                            </tr>
                                                            <tr class="c-ui-table__row c-ui-table__row--collapsable c-ui-table__row--body">
                                                                <td class="c-ui-table__cell">
                                                                    ۲
                                                                </td>
                                                                <td class="c-ui-table__cell c-ui-table__cell--item-title uk-width-1-3">
                                                                    عالی بود نسبت به قیمتش کیفیت هم عالی بود
                                                                </td>
                                                                <td class="c-ui-table__cell">
                                                                    <div class="c-profile-rating__details-user uk-text-nowrap c-profile-rating__details-user--normal">
                                                                        کاربر عادی
                                                                    </div>
                                                                </td>
                                                                <td class="c-ui-table__cell">
                                                                    ۱۳۹۹/۰۴/۰۹
                                                                </td>
                                                                <td class="c-ui-table__cell">
                                                                    <div class="c-profile-rating__vote c-profile-rating__vote--thumbs-up c-profile-rating__vote--small uk-text-nowrap">
                                                                        توصیه می‌کنم
                                                                    </div>
                                                                </td>
                                                                <td class="c-ui-table__cell">
                                                                    ۰
                                                                </td>
                                                                <td class="c-ui-table__cell">
                                                                    ۰
                                                                </td>
                                                                <td class="c-ui-table__cell c-ui-table__expander" data-expand="2">
                                                                    <span class="c-ui-table__expander-control js-expand-comment"></span>
                                                                </td>
                                                            </tr>

                                                            <tr class="c-ui-table__expand-row c-ui-table__expand-row--first c-ui-table__expand-row--last js-expanded-row c-ui-table__expand-row--hidden" data-expand-target="2">
                                                                <td class="c-profile-rating__details-more" colspan="12">
                                                                    <table class="c-ui-table js-table-expandable js-search-table js-table-fixed-header">
                                                                        <tbody>
                                                                        <tr class="c-ui-table__row">
                                                                            <td class="uk-flex uk-flex-middle c-profile-rating__details-more-title">
                                                                                مریم  طاهری
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="c-ui-table__row">
                                                                            <td class="uk-flex uk-flex-middle c-profile-rating__details-more-comment">
                                                                                مورد پسند دختر عزیزم بود ممنون از لطف شما
                                                                            </td>
                                                                        </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>


                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="c-card__footer">

                                                        <div class="c-card__paginator">
                                                            <div class="c-ui-paginator js-paginator">
                                                                <div class="c-ui-paginator__total" data-rows="۲">
                                                                    تعداد نتایج: <span>۲ مورد</span>
                                                                </div>



                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="c-card__loading"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="c-card__loading"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection
@section('script')
<script>
$(document).ready(function (){
    var input = document.querySelector('input[name=advantages]');
    new Tagify(input);
});


{{--<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>--}}
{{--<script>var HOST_URL = "/metronic/theme/html/tools/preview";</script>--}}

</script>
@endsection
