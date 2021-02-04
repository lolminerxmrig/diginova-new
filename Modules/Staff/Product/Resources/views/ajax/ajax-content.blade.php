<div class="js-table-container" data-select2-id="17">
    <input name="page_type" value="{{$pageType}}" hidden>
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
                                <th class="c-ui-table__header"><span
                                        class="table-header-searchable uk-text-nowrap "> ردیف </span>
                                </th>
                                <th class="c-ui-table__header">
                                    <span class="table-header-searchable uk-text-nowrap "></span>
                                </th>
                                <th class="c-ui-table__header"><span
                                        class="table-header-searchable uk-text-nowrap"> عنوان و کد کالا (DKP) </span>
                                </th>
                                <th class="c-ui-table__header"><span
                                        class="table-header-searchable uk-text-nowrap"> گروه کالایی </span>
                                </th>
                                <th class="c-ui-table__header"><span
                                        class="table-header-searchable uk-text-nowrap ">برند کالا</span>
                                </th>
                                <th class="c-ui-table__header"><span
                                        class="table-header-searchable uk-text-nowrap "> انتشار </span>
                                </th>
                                <th class="c-ui-table__header"><span
                                        class="table-header-searchable uk-text-nowrap "> تعداد تنوع </span>
                                </th>
                                <th class="c-ui-table__header"><span
                                        class="table-header-searchable uk-text-nowrap ">عملیات</span>
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
                                                {{--                                                                    <span class="c-mega-campaigns-join-list__container-table-dkpc c-ui--fit c-ui--nowrap" style="margin: auto;">DKP-4335203</span>                                                      </div>--}}
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