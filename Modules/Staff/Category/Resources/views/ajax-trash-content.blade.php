<div class="js-table-container" data-select2-id="17">
    <div style="margin-top: 20px; margin-bottom: 20px;"></div>
    <div class="c-grid__row">
        <div class="c-grid__col">
            <div class="c-card">
                <div class="c-card__wrapper">
                    <div class="c-card__header c-card__header--table">
                        <div class="c-grid__col c-grid__col--lg-4">
                            <a href="{{ route('staff.categories.index') }}" class="c-ui-btn js-view-all-orders">بازگشت به صفحه مدیریت دسته ها</a>
                        </div>

                        {{--                                        {{ $categories->links('staffcategory::layouts.pagination.pagination') }}--}}

                        <div class="c-ui-paginator js-paginator" data-select2-id="16">
                            <div class="c-ui-paginator__total" data-rows="۶">
                                تعداد نتایج: <span name="total" data-id="{{ $categories->total() }}">{{ persianNum($categories->total()) }} مورد</span>
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
                            <tr class="c-ui-table__row">
                                <th class="c-ui-table__header">
                                    <span class="table-header-searchable uk-text-nowrap "> ردیف </span>
                                </th>
{{--                                <th class="c-ui-table__header">--}}
{{--                                    <span class="table-header-searchable uk-text-nowrap">لوگو دسته</span>--}}
{{--                                </th>--}}
                                <th class="c-ui-table__header">
                                                    <span class="table-header-searchable
                                                    uk-text-nowrap table-header-searchable--desc">نام دسته (category)</span>
                                </th>
                                <th class="c-ui-table__header">
                                    <span class="table-header-searchable uk-text-nowrap">عملیات</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody id="tbody">

                            @foreach($categories as $key => $category)
                                <tr name="row" id="{{$category->id}}" class="c-ui-table__row c-ui-table__row--body c-join__table-row">
                                    <td class="c-ui-table__cell"  style="width: 10%;">
                                        <span class="c-wallet__body-card-row-item"> {{ persianNum($categories->firstItem() + $key) }} </span>
                                    </td>
{{--                                    <td class="c-ui-table__cell" style="width: 20%;">--}}
{{--                                        <img src="{{ asset($category->media->path . '/' . $category->media->name) }}" width="40" height="40">--}}
{{--                                    </td>--}}

                                    <td class="c-ui-table__cell c-ui-table__cell-desc c-ui--pt-15 c-ui--pb-15">
                                        <div class="uk-flex uk-flex-column">
                                            <a href="#" target="_blank">
                                                                <span class="c-wallet__body-card-row-item c-ui--fit c-ui--initial">
                                                                {{ $category->name }}
                                                                </span>
                                                <span class="c-wallet__body-card-row-item c-ui--fit c-ui--initial"></span>
                                            </a>
                                        </div>
                                    </td>



                                    <td class="c-ui-table__cell" style="width: 25%;">
                                        <div class="c-promo__actions">

                                            <button class="c-join__btn c-join__btn--icon-right c-join__btn--secondary-greenish restore-btn"
                                                    value="{{ $category->id }}">بازگردانی</button>

                                            <button class="c-join__btn c-join__btn--icon-right c-join__btn--icon-delete
                                                              c-join__btn--primary js-remove-plp js-remove-product-list delete-btn"
                                                    value="{{ $category->id }}">حذف کامل</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="c-card__footer" style="width: auto;">
                        <a href="{{ route('staff.categories.index') }}" class="c-ui-btn js-view-all-orders">بازگشت به صفحه مدیریت دسته ها</a>

                        {{ $categories->links('staffcategory::layouts.pagination.pagination') }}
                        <div class="c-ui-paginator js-paginator" data-select2-id="25">
                            <div class="c-ui-paginator__total" data-rows="۶">
                                تعداد نتایج: <span name="total" data-id="{{ $categories->total() }}">{{ persianNum($categories->total()) }} مورد</span>
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
