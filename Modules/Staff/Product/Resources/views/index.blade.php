@extends('layouts.staff.master')
@section('head')
    <script src="{{ asset('seller/js/indexAction.js') }}"></script>
    <script src="{{ asset('seller/js/tableView.js') }}"></script>
@endsection
@section('content')
    <main class="c-main">
        <div class="uk-container uk-container-large">
            <div class="c-grid " data-select2-id="13">
                <div class="c-grid__row">
                    <div class="c-grid__col">
                        <input type="hidden" value="" name="has-warehouses">
                        <div class="c-card c-card--transparent">
                            <h1 class="c-card__title c-card__title--dark c-card__title--desc">مدیریت محصول ها<span>از این صفحه می توانید محصول ها را مدیریت کنید</span>
                            </h1>
                        </div>
                    </div>
                </div>
                @if ($products->count())
                    <div class="c-grid__row">
                        <div class="c-grid__col">
                            <div class="c-card" id="consignment-step-1">
                                <div class="c-card__header">
                                    <h2 class="c-card__title">جستجو و فیلتر</h2>
                                </div>
                                <div class="c-card__body">
                                    <div class="c-ui-form__row" data-select2-id="12">
                                        <div class="c-ui-form__col c-ui-form__col--8 c-ui-form__col--xs-12"
                                             data-select2-id="11">
                                            <label class="c-ui-form__label">جستجو بر اساس:</label>
                                            <div class="c-ui-form__row" data-select2-id="10">
                                                <div
                                                    class="c-ui-form__col c-ui-form__col--3 c-ui-form__col--xs-12 c-ui-form__col--small-gap c-ui-form__col--xs c-ui-form__col--wrap-xs"
                                                    style="min-width: 175px" >
                                                    <select
                                                        class="c-ui-select c-ui-select--common c-ui-select--small js-form-clearable select2-hidden-accessible"
                                                        name="searchGroup" data-select2-id="1" tabindex="-1"
                                                        aria-hidden="true" id="searchGroup">
                                                        <option value="product_name" selected>نام محصول</option>
                                                        <option value="product_category">گروه کالا</option>
                                                    </select>
                                                </div>
                                                <div
                                                    class="c-ui-form__col c-ui-form__col--6 c-ui-form__col--xs-12
                  c-ui-form__col--small-gap c-ui-form__col--wrap-xs c-ui-form__col--xs">
                                                    <label>
                                                        <div class="c-ui-input">
                                                            <input type="text" name="searchKeyword" class="c-ui-input__field c-ui-input__field--order js-form-clearable"
                                                                   id="searchKeyword" value="" placeholder="عنوان را بنویسید ...">
                                                        </div>
                                                    </label>
                                                </div>
                                                <div
                                                    class="c-ui-form__col c-ui-form__col--xs-12 c-ui-form__col--small-gap c-ui-form__col--wrap-xs c-ui-form__col--xs">
                                                    <button class="c-ui-btn c-ui-btn--xs-block c-ui-btn--active c-ui-btn--search-form"
                                                            id="search-btn" disabled>
                                                        <span>جستجو</span>
                                                    </button>
                                                </div>
                                                <div
                                                    class="c-ui-form__col c-ui-form__col--xs-12 c-ui-form__col--small-gap c-ui-form__col--wrap-xs c-ui-form__col--xs">
                                                    <button type="button"
                                                            class="c-ui-btn c-ui-btn--xs-block c-ui-btn--active c-ui-btn--clear-form"
                                                            id="searchClear" disabled=""></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="c-ui-form__col c-ui--mr-30 uk-padding-remove c-product-radio-group-container">
                                            {{--                                        <div class="c-join__filter">--}}
                                            {{--                                            <p class="c-ui-form__label">نمایش محصول:</p>--}}
                                            {{--                                            <div class="c-join__filter-container">--}}
                                            {{--                                                <label class="c-join__radio-label">--}}
                                            {{--                                                    <input class="c-join__radio search_type" type="radio"--}}
                                            {{--                                                           name="search_type" value="all" checked>--}}
                                            {{--                                                    <span class="c-join__radio-option">همه محصول ها</span>--}}
                                            {{--                                                </label>--}}
                                            {{--                                                <label class="c-join__radio-label">--}}
                                            {{--                                                    <input class="c-join__radio search_type" type="radio" name="search_type" value="only_special">--}}
                                            {{--                                                    <span class="c-join__radio-option">فقط ویژه ها</span>--}}
                                            {{--                                                </label>--}}
                                            {{--                                            </div>--}}
                                            {{--                                        </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-table-container" data-select2-id="17">
                        <input name="page_type" value="index" hidden>
                        <div style="margin-top: 20px; margin-bottom: 20px;"></div>
                        <div class="c-grid__row">
                            <div class="c-grid__col">
                                <div class="c-card">
                                    <div class="c-card__wrapper">
                                        <div class="c-card__header c-card__header--table">
                                            <a href="{{ route('staff.products.create') }}" target="_blank">
                                                <div class="c-mega-campaigns__btns-green-plus uk-margin-remove">
                                                    ایجاد محصول جدید
                                                </div>
                                            </a>
                                            @if($trashed_products->count())
                                                <div class="c-grid__col c-grid__col--lg-4">
                                                    <a href="{{ route('staff.products.trash') }}" class="c-ui-btn js-view-all-orders">مدیریت محصول های حذف شده</a>
                                                </div>
                                            @endif


{{--                                            {{ $products->links('staffproduct::layouts.pagination.pagination') }}--}}

                                            <div class="c-ui-paginator js-paginator" data-select2-id="16">
                                                <div class="c-ui-paginator__total" data-rows="۶">
                                                    تعداد نتایج: <span name="total" data-id="{{ $products->total() }}">{{ persianNum($products->total()) }} مورد</span>
                                                </div>
                                                {{--                                            <div class="c-ui-paginator__select" data-select2-id="15">--}}
                                                {{--                                                <div class="c-ui-paginator__select-label">تعداد نمایش</div>--}}
                                                {{--                                                <div class="c-ui-paginator__select-pages">--}}
                                                {{--                                                    <div class="field-wrapper ui-select ui-select__container">--}}

                                                {{--                                                        <select class="c-ui-select c-ui-select--common c-ui-select--small--}}
                                                {{--                                                        select2-hidden-accessible paginator-selected"--}}
                                                {{--                                                            name="paginator-select-pages" tabindex="-1" id="paginator-top" aria-hidden="true">--}}
                                                {{--                                                            <option value="10">۱۰</option>--}}
                                                {{--                                                            <option value="20">۲۰</option>--}}
                                                {{--                                                            <option value="50">۵۰</option>--}}
                                                {{--                                                            <option value="100">۱۰۰</option>--}}
                                                {{--                                                        </select>--}}

                                                {{--                                                        <div class="js-select-options c-ui-paginator__dropdown-container"></div>--}}
                                                {{--                                                    </div>--}}
                                                {{--                                                </div>--}}
                                                {{--                                            </div>--}}
                                            </div>
                                        </div>
                                        <div class="c-card__body c-ui-table__wrapper">
                                            <table class="c-ui-table js-search-table js-table-fixed-header c-join__table"
                                                   data-search-url="/ajax/product/search/">
                                                <thead>
                                                <tr class="c-ui-table__row" style="text-align: center;">
                                                    <th class="c-ui-table__header">
                                                        <span class="table-header-searchable uk-text-nowrap "> ردیف </span>
                                                    </th>
                                                    <th class="c-ui-table__header">
                                                        <span class="table-header-searchable uk-text-nowrap "></span>
                                                    </th>
                                                    <th class="c-ui-table__header">
                                                        <span class="table-header-searchable uk-text-nowrap"> عنوان و کد کالا (DNP) </span>
                                                    </th>
                                                    <th class="c-ui-table__header">
                                                        <span class="table-header-searchable uk-text-nowrap"> گروه کالایی </span>
                                                    </th>
                                                    <th class="c-ui-table__header">
                                                        <span class="table-header-searchable uk-text-nowrap ">برند کالا</span>
                                                    </th>
                                                    <th class="c-ui-table__header">
                                                        <span class="table-header-searchable uk-text-nowrap "> انتشار </span>
                                                    </th>
                                                    <th class="c-ui-table__header">
                                                        <span class="table-header-searchable uk-text-nowrap "> تعداد تنوع </span>
                                                    </th>
                                                    <th class="c-ui-table__header">
                                                        <span class="table-header-searchable uk-text-nowrap ">عملیات</span>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody id="tbody">
                                                @foreach($products as $key => $product)
                                                    <tr name="row" id="{{$product->id}}" class="c-ui-table__row c-ui-table__row--body c-join__table-row">
                                                        <td class="c-ui-table__cell">
                                                            <span class="c-wallet__body-card-row-item"> {{ persianNum($products->firstItem() + $key) }} </span>
                                                        </td>

                                                        <td class="c-ui-table__cell" style="min-width: 90px">
                                                            @foreach($product->media as $image)
                                                                @if($product->media && ($image->pivot->is_main == 1))
                                                                    <img src="{{ env('APP_URL') . '/' .$image->path . '/' . $image->name }}" width="75" height="75">
                                                                @endif
                                                            @endforeach
                                                        </td>

                                                        <td class="c-ui-table__cell c-ui-table__cell-desc c-ui--pt-15 c-ui--pb-15">
                                                            <div class="uk-flex uk-flex-column">
                                                                <a href="https://www.digikala.com/product/dkp-4335203/" target="_blank">
                                                          <span class="c-wallet__body-card-row-item c-ui--fit c-ui--initial" style="margin:auto;">
                                                               {{ $product->title_fa }}
                                                          </span>
                                                                    <span class="c-wallet__body-card-row-item c-ui--fit c-ui--initial"></span>
                                                                </a>
                                                                <div class="uk-flex">
                                                                    <span class="c-mega-campaigns-join-list__container-table-dkpc c-ui--fit c-ui--nowrap" style="margin: auto;">DNP-{{ $product->product_code }}</span>                                                      </div>
                                                            </div>
                                                        </td>


                                                        <td class="c-ui-table__cell">
                                                            <a href="#">
                                                        <span class="c-wallet__body-card-row-item c-ui--initial">
                                                           {{ ($product->category()->first())? $product->category()->first()->name : '' }}
                                                        </span>
                                                            </a>
                                                        </td>

                                                        <td class="c-ui-table__cell">
                                                            <a href="#">
                                                                <div class="uk-flex uk-flex-column">
                                                          <span class="c- -card-row-item" style="margin: auto;">
                                                              @if(!is_null($product->brand))
                                                                  {{ $product->brand->name }}
                                                              @else
                                                                  {{ 'متفرقه' }}
                                                              @endif
                                                          </span>
                                                                    <span class="c-wallet__body-card-row-item" style="margin: auto;">
                                                            @if(!is_null($product->brand))
                                                                            {{ $product->brand->en_name }}
                                                                        @else
                                                                            {{ 'Miscellaneous' }}
                                                                        @endif
                                                          </span>
                                                                </div>
                                                            </a>
                                                        </td>

                                                        {{--                                                    <td class="c-ui-table__cell c-ui-table__cell-desc c-ui--pt-15 c-ui--pb-15">--}}
                                                        {{--                                                        <div class="uk-flex uk-flex-column">--}}
                                                        {{--                                                            <a href="#" target="_blank">--}}
                                                        {{--                                                                <span class="c-wallet__body-card-row-item c-ui--fit c-ui--initial">--}}
                                                        {{--                                                                {{ $product->name }}--}}
                                                        {{--                                                                    @if($product->type == 1)--}}
                                                        {{--                                                                        <span style="color: red; font-size: 11px;"> (ویژه) </span>--}}
                                                        {{--                                                                    @endif--}}
                                                        {{--                                                                </span>--}}
                                                        {{--                                                                <span class="c-wallet__body-card-row-item c-ui--fit c-ui--initial"></span>--}}
                                                        {{--                                                            </a>--}}
                                                        {{--                                                        </div>--}}
                                                        {{--                                                    </td>--}}
                                                        {{--                                                    <td class="c-ui-table__cell">--}}
                                                        {{--                                                        <a href="#">--}}
                                                        {{--                                                            <div class="uk-flex uk-flex-column">--}}
                                                        {{--                                                                  <span class="c- -card-row-item" style="line-height: 23px;">--}}
                                                        {{--                                                                    @foreach($product->categories as $category)--}}
                                                        {{--                                                                          {{ $category->name }}&nbsp;<br>--}}
                                                        {{--                                                                      @endforeach--}}
                                                        {{--                                                                  </span>--}}
                                                        {{--                                                            </div>--}}
                                                        {{--                                                        </a>--}}
                                                        {{--                                                    </td>--}}
                                                        {{--                                                    <td class="c-ui-table__cell">--}}
                                                        {{--                                                        <div class="">--}}
                                                        {{--                                                            <div class="c-wallet__body-card-status-no-circle--}}
                                                        {{--                          c-wallet__body-card-status-no-circle--active uk-text-nowrap" style="margin: auto">--}}
                                                        {{--                                                                فعال--}}
                                                        {{--                                                            </div>--}}
                                                        {{--                                                        </div>--}}
                                                        {{--                                                    </td>--}}

                                                        <td class="c-ui-table__cell c-ui-table__cell--small-text">
                                                            <div class="c-ui-tooltip__anchor">
                                                                <div class="c-ui-toggle__group">
                                                                    <label class="c-ui-toggle">
                                                                        <input class="c-ui-toggle__origin js-toggle-active-product" type="checkbox"
                                                                               name="status" {{ ($product->status)? 'checked' : '' }} data-product-id="{{$product->id}}"
                                                                        >
                                                                        <span class="c-ui-toggle__check"></span>
                                                                    </label>
                                                                </div>

                                                                <input type="hidden" value="0" class="js-active-input">
                                                            </div>
                                                        </td>

                                                        <td class="c-ui-table__cell">
                                                            <span class="c-wallet__body-card-row-item"> ۱ </span>
                                                        </td>

                                                        <td class="c-ui-table__cell">
                                                            <div class="c-promo__actions">
                                                                <a class="c-join__btn c-join__btn--icon-right c-join__btn--icon-edit
{{--                          c-join__btn--secondary-greenish" href="">ویرایش</a>--}}
                                                                    c-join__btn--secondary-greenish" href="{{ route('staff.products.edit', $product->id) }}">ویرایش</a>
                                                                <button class="c-join__btn c-join__btn--icon-right c-join__btn--icon-delete
                                                              c-join__btn--primary js-remove-plp js-remove-product-list delete-btn"
                                                                        value="{{ $product->id }}">حذف</button>

                                                            </div>

                                                            <div uk-modal="esc-close: true; bg-close: true;" class="uk-modal-container uk-modal-container--message js-common-modal-notification" style="display: none;">
                                                                <div class="uk-modal-dialog uk-modal-dialog--flex">
                                                                    <button class="uk-modal-close-default uk-close uk-icon" type="button" uk-close=""></button>

                                                                    <div class="uk-modal-body" data-gtm-vis-recent-on-screen-9662696_13="79003" data-gtm-vis-first-on-screen-9662696_13="79004"
                                                                         data-gtm-vis-total-visible-time-9662696_13="100" data-gtm-vis-has-fired-9662696_13="1">
                                                                        <div class="c-modal-notification">
                                                                            <div class="c-modal-notification__content c-modal-notification__content--limited">
                                                                                <h2 class="c-modal-notification__header">هشدار</h2>

                                                                                <p class="c-modal-notification__text">با حذف محصول ، تمامی تنوع های آن نیز حذف خواهد شد. آیا از حذف آن اطمینان دارید؟</p>
                                                                                <div class="c-modal-notification__actions">
                                                                                    <button class="c-modal-notification__btn no uk-modal-close">خیر</button>
                                                                                    <button class="c-modal-notification__btn c-modal-notification__btn--secondary yes uk-modal-close">بله</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="c-card__footer" style="width: auto;">
                                            <a href="{{ route('staff.products.create') }}" target="_blank">
                                                <div class="c-mega-campaigns__btns-green-plus uk-margin-remove">
                                                    ایجاد محصول جدید
                                                </div>
                                            </a>

                                            @if($trashed_products->count())
                                                <div class="c-grid__col c-grid__col--lg-4">
                                                    <a href="{{ route('staff.products.trash') }}" class="c-ui-btn js-view-all-orders">مدیریت محصول های حذف شده</a>
                                                </div>
                                            @endif

                                            {{ $products->links('staffproduct::layouts.pagination.pagination') }}
                                            <div class="c-ui-paginator js-paginator" data-select2-id="25">
                                                <div class="c-ui-paginator__total" data-rows="۶">
                                                    تعداد نتایج: <span name="total" data-id="{{ $products->total() }}">{{ persianNum($products->total()) }} مورد</span>
                                                </div>
                                                {{--                                            <div class="c-ui-paginator__select" data-select2-id="24">--}}
                                                {{--                                                <div class="c-ui-paginator__select-label">تعداد نمایش</div>--}}
                                                {{--                                                <div class="c-ui-paginator__select-pages">--}}
                                                {{--                                                    <div class="field-wrapper ui-select ui-select__container">--}}

                                                {{--                                                        <select class="c-ui-select c-ui-select--common c-ui-select--small--}}
                                                {{--                                                         select2-hidden-accessible paginator-selected"--}}
                                                {{--                                                            name="paginator-select-pages" id="paginator-bottom"--}}
                                                {{--                                                            tabindex="-1" aria-hidden="true">--}}
                                                {{--                                                            <option value="10">۱۰</option>--}}
                                                {{--                                                            <option value="20">۲۰</option>--}}
                                                {{--                                                            <option value="50">۵۰</option>--}}
                                                {{--                                                            <option value="100">۱۰۰</option>--}}
                                                {{--                                                        </select>--}}


                                                {{--                                                        <div class="js-select-options c-ui-paginator__dropdown-container"></div>--}}
                                                {{--                                                    </div>--}}
                                                {{--                                                </div>--}}
                                                {{--                                            </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="c-grid c-join__grid">
                        <div class="c-grid__row">
                            <div class="c-grid__col">
                                <div class="c-card">
                                    {{--
                                    <div class="c-card__header">
                                      --}}
                                    {{--
                                    <div class="c-grid__col">
                                      --}}
                                    {{--
                                    <h2 class="c-card__title c-join__tab-card-title">مدیریت محصول ها</h2>
                                    --}}
                                    {{--
                                    <ul class="uk-tab c-promo__tabs">
                                      --}}
                                    {{--
                                    <li class="c-promo__tab-item c-promo__tab-item--promotions uk-active" data-tab="1">--}}
                                    {{--                                            <a href="/promotion-management/">همه محصول ها</a>--}}
                                    {{--
                                  </li>
                                  --}}
                                    {{--
                                    <li class="c-promo__tab-item c-promo__tab-item--products" data-tab="2">--}}
                                    {{--                                            <a href="/promotion-management/products/">محصول های حذف شده</a>--}}
                                    {{--
                                  </li>
                                  --}}
                                    {{--
                                  </ul>
                                  --}}
                                    {{--
                                  </div>
                                  --}}
                                    {{--
                                  </div>
                                  --}}
                                    <div class="c-card__body">
                                        <div class="c-grid__col">
                                            <div class="c-grid__col c-promo__tab-container c-promo__tab-container--is-visible" data-tab="1">
                                                <div class="c-join__promotion-info-box c-join__promotion-info-box--empty">
                                                    <img class="c-join__promotion-info-img" src="https://seller.digikala.com/static/files/ac21f0e6.svg" alt="Empty">
                                                    @if($trashed_products->count())
                                                        <p class="c-join__promotion-info-statement c-join__promotion-info-statement--bg">
                                                            نتیجه ای برای نمایش وجود ندارد!
                                                        </p>
                                                        <p class="c-join__promotion-info-statement">
                                                            شما تعداد {{ persianNum($trashed_products->count()) }} محصول حذف شده در Trash دارید برای مدیریت و بازگردانی آنها بر روی دکمه زیر کلیک کنید
                                                        </p>
                                                        <a class="c-join__btn c-join__btn--info-box c-join__btn--secondary-greenish"
                                                           href="{{ route('staff.products.trash') }}">ورود به صفحه Trash</a>
                                                    @else
                                                        <p class="c-join__promotion-info-statement c-join__promotion-info-statement--bg">شما تا به حال هیچ محصولی ایجاد نکرده‌اید</p>
                                                        <p class="c-join__promotion-info-statement">
                                                            برای ایجاد محصول جدید روی دکمه زیر کلیک کنید.
                                                        </p>
                                                        <a class="c-join__btn c-join__btn--info-box c-join__btn--secondary-greenish"
                                                           href="{{ route('staff.products.create') }}">ایجاد محصول جدید</a>
                                                    @endif
                                                </div>

                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </main>
@endsection
@section('script')
    <script>

        // تبدیل اعداد انگلیسی به فارسی
        function ConvertNumberToPersion() {
            persian = { 0: '۰', 1: '۱', 2: '۲', 3: '۳', 4: '۴', 5: '۵', 6: '۶', 7: '۷', 8: '۸', 9: '۹' };
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
        $(document).on('click', '.c-ui-paginator__control a', function(e){
            e.preventDefault();

            var page = $(this).attr('href').split('page=')[1];

            var pageType = $("input[name='page_type']").val();

            if (pageType == 'index'){
                var url = "{{route('staff.products.ajaxPagination')}}?page="+page;
            }
            else if (pageType == 'only_special') {
                var url = "{{route('staff.products.filterByType')}}?page="+page;
            }
            else if(pageType == 'productsearch') {
                var url = "{{route('staff.products.productSearch')}}?page="+page;
            }
            else if(pageType == 'productCatSearch') {
                var url = "{{route('staff.products.productCatSearch')}}?page="+page;
            }

            if(pageType == 'productCatSearch' || pageType == 'productsearch')
            {
                var searchValue = $("#searchKeyword").val();
                var data = {
                    page: page,
                    search_keyword: searchValue,
                }
            }
            else
            {
                var data = {
                    page: page,
                }
            }

            $.ajax({
                method: 'post',
                url: url,
                data: data,
                success:function(result)
                {
                    $(".js-table-container").html(result);
                    window.pagination_type = 'withoutFilter';
                }
            });
        });

        // نمایش محصول: ویژه و همه
        $(".search_type").on('change', function (){

            var searchType = $("input:checked[name='search_type']").val();

            $.ajax({
                type: 'post',
                url: '{{route('staff.products.filterByType')}}',
                data: {
                    search_type: searchType,
                },
                success:function (result) {
                    $(".js-table-container").replaceWith(result);
                }
            });
        });

        //حذف محصول
        {{--$(document).on('click','.delete-btn' , function (){--}}
        {{--    var product_id = $(this).val();--}}

        {{--    $.ajax({--}}
        {{--        method: 'post',--}}
        {{--        url: "{{route('staff.products.moveToTrash')}}",--}}
        {{--        data: {--}}
        {{--            'id': product_id,--}}
        {{--        },--}}
        {{--        success: function (result){--}}
        {{--            $('.js-table-container').replaceWith(result);--}}
        {{--            // $("tr[id="+ id +"]").remove();--}}
        {{--            //--}}
        {{--            // var total_count = $("span[name='total']").attr('data-id');--}}
        {{--            // var new_count = total_count-1;--}}
        {{--            //--}}
        {{--            // var total = '<span name="total" data-id=" + new_count + ">' + new_count + ' مورد</span>';--}}
        {{--            //--}}
        {{--            // $("span[name='total']").replaceWith(total);--}}
        {{--            //--}}
        {{--            // ConvertNumberToPersion();--}}

        {{--        },--}}
        {{--    });--}}
        {{--});--}}



        $(document).on('click', '.delete-btn', function () {
            $(this).closest('.c-ui-table__cell').find('.uk-modal-container').addClass('uk-open');
            $(this).closest('.c-ui-table__cell').find('.uk-modal-container').css('display', 'block');
            $('.c-header__nav').hide();

            $(document).on('click', '.yes', function (){

                $('.c-header__nav').show();


                var product_id = $(this).closest('.c-ui-table__cell').find('.delete-btn').val();

                $.ajax({
                    method: 'post',
                    url: "{{route('staff.products.moveToTrash')}}",
                    data: {
                        'id': product_id,
                    },
                    success: function (result){
                        $('.js-table-container').replaceWith(result);
                    },
                });

            });

            $(document).on('click', '.uk-modal-close-default', function (){
                $('.c-header__nav').show();
            });

            $(document).on('click', '.no', function (){
                $('.c-header__nav').show();
            });


        });






        //دکمه سرچ
        $("#search-btn").on('click', function (){

            var searchValue = $("#searchKeyword").val();
            var searchGroup = $("#searchGroup").val();

            if (searchGroup == 'product_name')
            {
                var url = "{{route('staff.products.productSearch')}}";
            }
            else if(searchGroup == 'product_category')
            {
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
                    if ($(".search_type:checked").val())
                    {
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
                success:function(result)
                {
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
        $("select[name='paginator-select-pages']").on('change', function (){
            //selectbox paginator val
            var selectedPaginator = $(this).val();

            $.ajax({
                type: 'post',
                url: "{{route('staff.products.ajaxPagination')}}",
                data: {
                    paginatorNum: selectedPaginator,
                },
                success: function (result){
                    $("js-table-container").replaceWith(result);
                }
            });
        });


        $(document).on('change', 'input[name="status"]', function () {
            if($(this).is(':checked'))
            {
                var status = 1;
            }
            else{
                var status = 0;
            }
            var data_product_id = $(this).attr('data-product-id');

            $.ajax({
                method: 'post',
                url: "{{ route('staff.products.statusProduct') }}",
                data: {
                    'status': status,
                    'product_id' : data_product_id,
                },
            });

        });


    </script>
@endsection
