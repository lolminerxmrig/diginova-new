@extends('layouts.staff.master')
@section('head')
  <script src="{{ asset('seller/js/create-category-validation.js') }}"></script>
  <link rel="stylesheet" href="https://unpkg.com/@yaireo/dragsort/dist/dragsort.css" media="print"
        onload="this.media='all'">

  <link rel="stylesheet" href="{{ asset('seller/css/tagify.css') }}" id="tagify">
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>

  <script src="{{ asset('seller/js/jQuery.tagify.min.js') }}"></script>
  <script src="https://unpkg.com/@yaireo/dragsort"></script>
  <script src="{{ asset('seller/js/tableView.js') }}" id="tableview"></script>
  <script src="{{ asset('seller/js/intro.min.js') }}" id="intro"></script>

  <style>
    .c-ui-select--small + .select2-container .select2-selection--multiple, .c-ui-select--small + .select2-container .select2-selection--single {
      border-color: #bbbaba !important;
    }

    .select2-search {
      display: none;
    }

    /*.select2-selection__arrow {*/
    /*    display: block !important;*/
    /*}*/

    .select2-search--dropdown {
      display: none;
    }


    /*.select2-selection--single {*/
    /*    background-color: #fff;*/
    /*    border: 1px solid #bbbaba;*/
    /*    border-radius: 4px;*/
    /*}*/

  </style>

@endsection
@section('content')
  <main class="c-main">
    <div class="uk-container uk-container-large">

      <div class="c-grid " data-select2-id="23">
        <div class="c-content-page c-content-page--plain c-grid__row">
          <div class="c-grid__col">
            <div class="c-content-page__header">
              <span class="c-content-page__header-action">مدیریت واحد های ویژگی</span>
              <span class="c-content-page__header-desc">برای ایجاد و مدیریت واحد های قابل انتخاب در بخش افزودن ویژگی می توانید از این بخش استفاده کنید</span>
            </div>
          </div>
        </div>

        <div class="c-grid__row c-product-list--align-header"></div>

        <div class="js-table-container" data-select2-id="37">

          {{--                                        <div class="c-product-list__alert c-ui--mt-25 c-ui--mb-25">--}}
          {{--                                            <p style="line-height: 27px;">توجه: لطفا برای ایجاد یکپارچگی و ورود صحیح--}}
          {{--                                                اصلاعات ابتدا تمامی گروه ها و زیر گروه های مدنظرتان را ایجاد کرده سپس بران آنها ویژگی ایجاد کنید. <br>--}}
          {{--                                                توجه: در صورتی که نوع نمایش را عبارت بلند یا کوتاه انتخاب کردید، فیلد مقادیر ورودی را وارد نکنید.--}}
          {{--                                                <br>--}}
          {{--                                            </p>--}}
          {{--                                        </div>--}}

          {{--                    <div class="c-content-modal__notes" style="--}}
          {{--	line-height: 24px;--}}
          {{--">--}}
          {{--						<span class="c-content-modal__notes-title" style="--}}
          {{--">توجه:</span>--}}
          {{--                        <ul class="c-content-modal__notes-list" style="--}}
          {{--	margin-top: 8px;--}}
          {{--">--}}
          {{--                            <li>لطفا برای ایجاد یکپارچگی و ورود صحیح--}}
          {{--                                اصلاعات ابتدا تمامی گروه ها و زیر گروه های مدنظرتان را ایجاد کرده سپس بران آنها ویژگی ایجاد کنید. <li>در صورتی که نوع نمایش را عبارت بلند یا کوتاه انتخاب کردید، فیلد مقادیر ورودی را وارد نکنید.</li></li>--}}
          {{--                        </ul>--}}
          {{--                    </div>--}}


          <div class="c-grid__row">
            <div class="c-grid__col">
              <div class="c-card">
                <div class="c-card__wrapper">
                  <div class="c-card__header c-card__header--table"><a target="_blank">
                      <div class="c-mega-campaigns__btns-green-plus uk-margin-remove">ایجاد واحد
                        جدید
                      </div>
                    </a>
                    <div class="c-ui-paginator js-paginator" data-select2-id="36">

                    </div>
                  </div>
                  <div class="c-card__body c-ui-table__wrapper">
                    <table class="c-ui-table  js-search-table js-table-fixed-header c-join__table">
                      <thead>

                      <tr class="c-ui-table__row">

                        <th class="c-ui-table__header">
                          <span class="table-header-searchable uk-text-nowrap "></span>
                        </th>
                        <th class="c-ui-table__header" style="width: 25%;">
                          <span class="table-header-searchable">عنوان واحد</span>
                        </th>
                        <th class="c-ui-table__header" style="width: 20%;">
                          <span class="table-header-searchable uk-text-nowrap">تعداد فیلد ورودی</span>
                        </th>
                        <th class="c-ui-table__header" style="width: 25%;">
                          <span class="table-header-searchable uk-text-nowrap">فیلد ها</span>
                        </th>
                        <th class="c-ui-table__header" style="width: 20%;">
                          <span class="table-header-searchable uk-text-nowrap ">حذف</span>
                        </th>

                      </tr>

                      </thead>

                      <tbody id="tbody" class="ui-sortable">
                      @foreach($units->unique('name') as $unit)
                        <tr name="row new-row" id="item-{{$unit->id}}" class="c-ui-table__row c-ui-table__row--body c-join__table-row row">

                          <td class="c-ui-table__cell" style="padding-right: 0px; padding-left: 23px;">
                            <div class="c-content-upload__drag-handler c-content-upload__drag-handler--outer">
                              <span class="c-content-upload__drag-handler c-content-upload__drag-handler--up js-sort-up"></span>
                              <span class="c-content-upload__drag-handler c-content-upload__drag-handler--bg"></span>
                              <span class="c-content-upload__drag-handler c-content-upload__drag-handler--down js-sort-down"></span>
                            </div>
                          </td>

                          <td class="c-ui-table__cell unit_name" style="min-width: 90px">
                            {{ $unit->name }}
                          </td>

                          <td class="c-ui-table__cell c-ui-table__cell-desc c-ui--pt-15 c-ui--pb-15 td-select unit_type" style="text-align: center !important;padding: 25px;">
                            {{ ($unit->type == 1)? 'تک فیلد' : 'چند فیلد' }}
                          </td>

                          <td class="c-ui-table__cell manage-fields fiels-list">
                            @foreach($units->where('name', $unit->name) as $u)
                              {{ $u->value }} &nbsp; &nbsp;
                            @endforeach
                          </td>

{{--                          <td class="c-ui-table__cell main-remove-btn">--}}
{{--                            <a type="button" class="c-content-categories__search-reset remove-row-btn" data-name="{{ $unit->name }}" style="min-height: 34px !important;height: 34px;width: 34px;margin: auto;"> </a>--}}
{{--                          </td>--}}

                          <td class="c-ui-table__cell">
                            <div class="c-promo__actions">
                              <button class="c-join__btn c-join__btn--icon-right c-join__btn--icon-edit
                                    c-join__btn--secondary-greenish edit-btn" data-name="{{ $unit->name }}">ویرایش</button>
                              <button class="c-join__btn c-join__btn--icon-right c-join__btn--icon-delete
                                    c-join__btn--primary js-remove-plp js-remove-product-list remove-row-btn" data-name="{{ $unit->name }}">حذف
                              </button>
                            </div>
                          </td>


                        </tr>
                      @endforeach
                      </tbody>

                    </table>
                  </div>

                  <div class="c-card__footer" style="width: auto;">
                    <a>
                      <div class="c-mega-campaigns__btns-green-plus uk-margin-remove">ایجاد واحد
                        جدید
                      </div>
                    </a>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="c-grid__row" style="padding-top: 20px;">
          <div class="c-grid__col">
            <div class="c-card">
              <div class="edit-form-section c-card__footer c-card__footer--products">
                <div
                  class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--lg-6 c-grid__col--xs-gap"
                  style="
                                width: 40%; float: left; display: contents;">
                  <a class="c-ui-btn c-ui-btn--next mr-a" style="margin-left: 68px;max-width: 100px;" id="submit-form">ذخیره
                  </a>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>

    </div>


    </div>
    <div id="pageLoader" class="c-content-loader c-content-loader--fixed">
      <div class="c-content-loader__logo"></div>
      <div class="c-content-loader__spinner"></div>
    </div>
    </div>
  </main>




  <div uk-modal="esc-close: true; bg-close: true;"
       class="uk-modal-container uk-modal-container--message js-common-modal-notification uk-modal"
       style="display: none;">
    <div class="uk-modal-dialog uk-modal-dialog--flex">
      <button class="uk-modal-close-default uk-close uk-icon" type="button" uk-close=""></button>

      <div class="uk-modal-body">
        <div class="c-modal-notification">
          <div class="c-modal-notification__content c-modal-notification__content--limited">
            <h2 class="c-modal-notification__header">هشدار</h2>

            <p class="c-modal-notification__text">با حذف واحد مورد نظر ، این واحد به صورت کامل حذف شده و قابل بازیابی
              نمی باشد. آیا از حذف کامل آن اطمینان دارید؟</p>
            <div class="c-modal-notification__actions">
              <button class="c-modal-notification__btn no uk-modal-close">خیر</button>
              <button
                class="c-modal-notification__btn c-modal-notification__btn--secondary yes uk-modal-close">
                بله
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@include('staffunit::layouts.modal')

@endsection
@section('script')
<script src="{{ asset('staff/js/units.js') }}"></script>
<script src="{{ asset('staff/js/ajax/units.js') }}"></script>


<script>

  $(document).on('click', '.create-fields', function () {

    var field_vals = $("#input-fields").val();

    var fields = '<tr name="row" id="item-x" class="c-ui-table__row c-ui-table__row--body modal-row-edit" data-id="new" style=""><td>' +
      '<div class="c-content-upload__drag-handler c-content-upload__drag-handler--outer ui-sortable-handle" style="margin-right: 0px;margin-left: 6px;"> ' +
      '<span class="c-content-upload__drag-handler c-content-upload__drag-handler--up js-sort-up ui-sortable-handle" style=""></span>' +
      '<span class="c-content-upload__drag-handler c-content-upload__drag-handler--bg ui-sortable-handle" style="padding-top: 2px;padding-bottom: 2px;"></span>' +
      '<span class="c-content-upload__drag-handler c-content-upload__drag-handler--down js-sort-down ui-sortable-handle"></span></div></td>' +
      '<td><input type="text" name="unit_val" value="' + field_vals + '" class="c-content-input__origin c-ui-input--deactive unit_name" disabled></td>' +
      '<td class="change-jquery" style="max-width: 38%; width: 38%; margin: auto;"> <a class="c-ui-btn c-ui-btn--outline-blue edit-field-btn">ویرایش</a></td></td>' +
      '<td><a type="button" class="c-content-categories__search-reset remove-mfield-btn" style="min-height: 32px !important;height: 32px;width: 32px;margin: auto;margin-right: 2px;"></a></td></tr>';

    if (field_vals.length > 1) {
      $(".add-field-lable").css('display', 'block');
      $("#edit-modal_tbody").append(fields);
      $("#input-fields").val('');
    }

  });

  $(document).on('click', '.remove-row-btn', function () {
    $(".uk-modal-container").addClass('uk-open');
    $(".uk-modal-container").css('display', 'block');
    $('.c-header__nav').hide();
    $(this).closest("tr").addClass('hide-tr');
    $(this).addClass('del-selected');

    $(document).on('click', '.yes', function () {

      $.ajax({
        url: 'units/delete',
        method: 'post',
        data: {
          unit_name: $(".del-selected").attr('data-name'),
        },
        success: function (){
          $(".remove-row-btn").closest(".hide-tr").remove();
        },
      });


      $('.c-header__nav').show();
    });

    $(document).on('click', '.no', function () {
      $('.c-header__nav').show();
      $(".remove-row-btn").closest(".hide-tr").removeClass('hide-tr');
      $(".del-selected").removeClass('del-selected');

    });

    $(document).on('click', '.uk-close', function () {
      $('.c-header__nav').show();
      $(".remove-row-btn").closest(".hide-tr").removeClass('hide-tr');
      $(".del-selected").removeClass('del-selected');
    });

  });

  $('#tbody').sortable({
      handle: '.c-content-upload__drag-handler',
      update: function (event, ui) {
        var data = $("#tbody").sortable('serialize');
        $.ajax({
          data: data,
          type: 'post',
          url: '{{route('staff.units.indexChangePosition')}}'
        });
      }
    });

  $(document).on('click', '.edit-btn', function () {
    $.ajax({
      method: 'post',
      url: 'units/edit',
      data: {
        name: $(this).attr('data-name'),
      },
      success: function (data){
        $("body").append(data);

          function reloadScript(id) {
            var $el = $('#' + id);
            $('#' + id).replaceWith('<script id="' + id + '" src="' + $el.prop('src') + '"><\/script>');
          }

          $('.select2').each(function () {
            $(this).remove();
          });


          reloadScript('tableview');

        $("#modal-edit").addClass('uk-open');
        $("#modal-edit").css('display', 'block');
        $('.c-header__nav').css('position', 'relative');
      },
    });
  });


</script>


</script>
@endsection
