<div class="js-table-container" data-select2-id="17">
  <input name="page_type" value="{{$pageType}}" hidden>
  <div style="margin-top: 20px; margin-bottom: 20px;"></div>
  <div class="c-grid__row">
    <div class="c-grid__col">
      <div class="c-card">
        <div class="c-card__wrapper">
          <div class="c-card__header c-card__header--table">
            <a href="{{ route('staff.brands.create') }}" target="_blank">
              <div class="c-mega-campaigns__btns-green-plus uk-margin-remove"> ایجاد برند جدید </div>
            </a>
            @if($trashed_brands->count())
              <div class="c-grid__col c-grid__col--lg-4">
                <a href="{{ route('staff.brands.trash') }}" class="c-ui-btn js-view-all-orders">مدیریت برند های حذف شده</a>
              </div>
            @endif
            <div class="c-ui-paginator js-paginator">
              <div class="c-ui-paginator__total">
                تعداد نتایج: <span name="total" data-id="{{ $brands->total() }}">{{ persianNum($brands->total()) }} مورد</span>
              </div>
            </div>
          </div>
          <div class="c-card__body c-ui-table__wrapper">
            <table class="c-ui-table js-search-table js-table-fixed-header c-join__table" data-search-url="/ajax/product/search/">
                <thead>
                  <tr class="c-ui-table__row">
                  <th class="c-ui-table__header">
                    <span class="table-header-searchable uk-text-nowrap "> ردیف </span>
                  </th>
                  <th class="c-ui-table__header">
                    <span class="table-header-searchable uk-text-nowrap ">لوگو برند</span>
                  </th>
                  <th class="c-ui-table__header">
                    <span class="table-header-searchable uk-text-nowrap table-header-searchable--desc">نام برند (Brand)</span>
                  </th>
                  <th class="c-ui-table__header">
                    <span class="table-header-searchable uk-text-nowrap "> گروه کالایی </span>
                  </th>
                  <th class="c-ui-table__header">
                    <span class="table-header-searchable uk-text-nowrap ">تعداد کالا</span>
                  </th>
{{--                  <th class="c-ui-table__header">--}}
{{--                    <span class="table-header-searchable uk-text-nowrap ">کالاهای فعال</span>--}}
{{--                  </th>--}}
                  <th class="c-ui-table__header">
                    <span class="table-header-searchable uk-text-nowrap ">عملیات</span>
                  </th>
                </tr>
                </thead>
                <tbody id="tbody">
                  @foreach($brands as $key => $brand)
                    <tr name="row" id="{{$brand->id}}" class="c-ui-table__row c-ui-table__row--body c-join__table-row">
                      <td class="c-ui-table__cell">
                        <span class="c-wallet__body-card-row-item"> {{ persianNum($brands->firstItem() + $key) }} </span>
                      </td>
                      <td class="c-ui-table__cell" style="min-width: 90px">
                        @if(count($brand->media))
                          <img src="{{ $site_url . '/' . $brand->media()->first()->path . '/'.$brand->media()->first()->name }}" width="60" height="60">
                        @else
                          <img src="{{ asset('staff/images/default_picture.jpg') }}" width="65" height="65">
                        @endif
                      </td>
                      <td class="c-ui-table__cell c-ui-table__cell-desc c-ui--pt-15 c-ui--pb-15">
                        <div class="uk-flex uk-flex-column">
                          <a href="#" target="_blank">
                            <span class="c-wallet__body-card-row-item c-ui--fit c-ui--initial">
                            {{ $brand->name }}
                            @if($brand->type == 1)
                              <span style="color: red; font-size: 11px;"> (ویژه) </span>
                            @endif
                            </span>
                            <span class="c-wallet__body-card-row-item c-ui--fit c-ui--initial"></span>
                          </a>
                        </div>
                      </td>
                      <td class="c-ui-table__cell">
                        <a href="#">
                          <div class="uk-flex uk-flex-column">
                            <span class="c- -card-row-item" style="line-height: 23px;">
                              @foreach($brand->categories as $category)
                                {{ $category->name }}&nbsp;<br>
                              @endforeach
                            </span>
                          </div>
                        </a>
                      </td>
                      <td class="c-ui-table__cell">
                        <span class="c-wallet__body-card-row-item"> {{ persianNum($brand->products()->count()) }} </span>
                      </td>
{{--                      <td class="c-ui-table__cell">--}}
{{--                        <span class="c-wallet__body-card-row-item"> ۱ </span>--}}
{{--                      </td>--}}
                      <td class="c-ui-table__cell">
                        <div class="c-promo__actions">
                          <a class="c-join__btn c-join__btn--icon-right c-join__btn--icon-edit c-join__btn--secondary-greenish" href="{{ route('staff.brands.edit', $brand->en_name) }}">ویرایش</a>
                          <button class="c-join__btn c-join__btn--icon-right c-join__btn--icon-delete c-join__btn--primary js-remove-plp js-remove-product-list delete-btn" value="{{ $brand->id }}">حذف</button>
                        </div>
                      </td>
                    </tr>
                @endforeach
                </tbody>
              </table>
          </div>
          <div class="c-card__footer" style="width: auto;">

              <a href="{{ route('staff.brands.create') }}" target="_blank">
                <div class="c-mega-campaigns__btns-green-plus uk-margin-remove"> ایجاد برند جدید</div>
              </a>

              @if($trashed_brands->count())
                <div class="c-grid__col c-grid__col--lg-4">
                  <a href="{{ route('staff.brands.trash') }}" class="c-ui-btn js-view-all-orders">مدیریت برند های حذف شده</a>
                </div>
              @endif

              {{ $brands->links('staffbrand::layouts.pagination.pagination') }}

              <div class="c-ui-paginator js-paginator" data-select2-id="25">
                <div class="c-ui-paginator__total" data-rows="۶">
                  تعداد نتایج: <span name="total" data-id="{{ $brands->total() }}">{{ persianNum($brands->total()) }} مورد</span>
                </div>
              </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
