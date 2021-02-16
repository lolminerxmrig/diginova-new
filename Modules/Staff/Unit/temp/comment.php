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
                    <table class="c-ui-table  js-search-table js-table-fixed-header c-join__table"
                           data-search-url="/ajax/product/search/">
                      <thead>

                      <tr class="c-ui-table__row">

                        <th class="c-ui-table__header">
                          <span class="table-header-searchable uk-text-nowrap "></span>
                        </th>
                        <th class="c-ui-table__header" style="width: 46%;">
                          <span class="table-header-searchable">عنوان واحد</span>
                        </th>
                        <th class="c-ui-table__header" style="width: 20%;">
                          <span class="table-header-searchable uk-text-nowrap">تعداد فیلد ورودی</span>
                        </th>
                        <th class="c-ui-table__header" style="width: 18%;">
                          <span class="table-header-searchable uk-text-nowrap">فیلد ها</span>
                        </th>
                        <th class="c-ui-table__header" style="width: 10%;">
                          <span class="table-header-searchable uk-text-nowrap ">حذف</span>
                        </th>

                      </tr>

                      </thead>

                      <tbody id="tbody" class="ui-sortable">
                        @if($units)
                          @foreach($units as $unit)
                            <tr name="row new-row" class="c-ui-table__row c-ui-table__row--body c-join__table-row row">

                              <td class="c-ui-table__cell" style="padding-right: 0px; padding-left: 23px;">
                                <div class="c-content-upload__drag-handler c-content-upload__drag-handler--outer">
                                  <span class="c-content-upload__drag-handler c-content-upload__drag-handler--up js-sort-up"></span>
                                  <span class="c-content-upload__drag-handler c-content-upload__drag-handler--bg"></span>
                                  <span class="c-content-upload__drag-handler c-content-upload__drag-handler--down js-sort-down"></span>
                                </div>
                              </td>

                              <td class="c-ui-table__cell unit_name" style="min-width: 90px">
                                {{--                                <input type="text" name="unit_name" value="" class="c-content-input__origin js-attribute-old-value attr_name">--}}
                              </td>

                              <td class="c-ui-table__cell c-ui-table__cell-desc c-ui--pt-15 c-ui--pb-15 td-select unit_type" style="text-align: center !important;padding: 25px;">
                                {{--                                <select class="c-ui-select c-ui-select--common c-ui-select--small select2-hidden-accessible" name="unit_type" tabindex="-1" aria-hidden="true">--}}
                                {{--                                    <option value="1">تک فیلد</option>--}}
                                {{--                                    <option value="2">چند فیلد</option>--}}
                                {{--                                </select>--}}
                              </td>
                              <td class="c-ui-table__cell manage-fields fiels-list">
                                {{--                                <a class="c-ui-btn c-ui-btn--next mr-a manage-btn" style="width: 189px !important; min-width: 120px !important;">مدیریت فیلد ها</a>--}}
                              </td>
                              <td class="c-ui-table__cell main-remove-btn">
                                <a type="button" class="c-content-categories__search-reset remove-row-btn" style="min-height: 34px !important;height: 34px;width: 34px;margin: auto;"> </a>
                              </td>
                            </tr>
                          @endforeach
                        @endif
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

      <div class="uk-modal-body" data-gtm-vis-recent-on-screen-9662696_13="79003"
           data-gtm-vis-first-on-screen-9662696_13="79004"
           data-gtm-vis-total-visible-time-9662696_13="100" data-gtm-vis-has-fired-9662696_13="1">
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



  // ایجکس فرم اصلی
  {{--$('#submit-form').on('click', function (e) {--}}
  {{--  // e.preventDefault();--}}


  {{--  var category_id = $("input[name='group_id']").val();--}}
  {{--  var group_name = $("input[name='attr_group_name']").val();--}}
  {{--  var group_desc = $("textarea[name='attr_group_desc']").val();--}}

  {{--  var attr_name = $("input[name='attr_name']").map(function () {--}}
  {{--    return $(this).val();--}}
  {{--  }).get();--}}
  {{--  var attr_type = $("select[name='attr_type']").map(function () {--}}
  {{--    return $(this).val();--}}
  {{--  }).get();--}}

  {{--  var attr_required = $("input[name='attr_required']").map(function () {--}}
  {{--    if ($(this).is(':checked')) {--}}
  {{--      return 1;--}}
  {{--    } else {--}}
  {{--      return 0;--}}
  {{--    }--}}
  {{--  }).get();--}}

  {{--  var attr_filterable = $("input[name='attr_filterable']").map(function () {--}}
  {{--    if ($(this).is(':checked')) {--}}
  {{--      return 1;--}}
  {{--    } else {--}}
  {{--      return 0;--}}
  {{--    }--}}
  {{--  }).get();--}}

  {{--  var attr_input_tag = $("input[name='drag-sort']").map(function () {--}}
  {{--    return $(this).val();--}}
  {{--  }).get();--}}

  {{--  // if (name && slug && en_name) {--}}
  {{--  $.ajax({--}}
  {{--    method: "post",--}}
  {{--    url: '{{route('staff.attributes.store')}}',--}}
  {{--    data: {--}}
  {{--      category_id: category_id,--}}
  {{--      group_name: group_name,--}}
  {{--      group_desc: group_desc,--}}
  {{--      attr_names: attr_name,--}}
  {{--      attr_types: attr_type,--}}
  {{--      attr_requireds: attr_required,--}}
  {{--      attr_filterables: attr_filterable,--}}
  {{--      attr_values: attr_input_tag,--}}
  {{--    },--}}

  {{--    success: function () {--}}
  {{--      $.toast({--}}
  {{--        heading: 'موفق!',--}}
  {{--        text: "نوع کالا با موفقیت ذخیره شد",--}}
  {{--        bgColor: '#3DC3A1',--}}
  {{--        textColor: '#fff',--}}
  {{--      });--}}


        {{--var data = $("tbody").sortable('serialize');--}}
        {{--$.ajax({--}}
        {{--    data: data,--}}
        {{--    type: 'post',--}}
        {{--    url: '{{route('staff.attributes.indexChangePosition')}}'--}}
        {{--});--}}

  {{--      // $('#category_form').trigger("reset");--}}

  {{--    },--}}
  {{--  });--}}
  {{--  // }--}}

  {{--});--}}


  // $(document).on('click', '.remove-row-btn', function () {
  //   $(".uk-modal-container").addClass('uk-open');
  //   $(".uk-modal-container").css('display', 'block');
  //   $('.c-header__nav').hide();
  //   $(this).closest("tr").addClass('hide-tr');
  //
  //   $(document).on('click', '.yes', function () {
  //     $(".remove-row-btn").closest(".hide-tr").remove();
  //
  //     $('.c-header__nav').show();
  //   });
  //
  //   $(document).on('click', '.no', function () {
  //     $('.c-header__nav').show();
  //     $(".remove-row-btn").closest(".hide-tr").removeClass('hide-tr');
  //
  //   });
  //
  //   $(document).on('click', '.uk-close', function () {
  //     $('.c-header__nav').show();
  //     $(".remove-row-btn").closest(".hide-tr").removeClass('hide-tr');
  //
  //   });
  //
  // });


  // $("tbody").sortable({
  //   // group: 'no-drop',
  //   // handle: '.c-content-upload__drag-handler',
  //   // connectWith: 'tbody',
  //   // scroll: false,
  //   // containment: 'tbody',
  // });


  // $(document).on('click', '.manage-btn', function () {
  //   var tr = '<tr name="row new-row" class="c-ui-table__row c-ui-table__row--body c-join__table-row row"><td class="c-ui-table__cell" style="padding-right: 0px; padding-left: 23px;"><div class="c-content-upload__drag-handler c-content-upload__drag-handler--outer"> <span class="c-content-upload__drag-handler c-content-upload__drag-handler--up js-sort-up"></span> <span class="c-content-upload__drag-handler c-content-upload__drag-handler--bg"></span> <span class="c-content-upload__drag-handler c-content-upload__drag-handler--down js-sort-down"></span></div></td><td class="c-ui-table__cell" style="min-width: 90px"> <input type="text" name="name" value="" class="c-content-input__origin js-attribute-old-value name"></td><td class="c-ui-table__cell c-ui-table__cell-desc c-ui--pt-15 c-ui--pb-15 td-select" style="text-align: center !important;padding: 25px;"> <select class="c-ui-select c-ui-select--common c-ui-select--small select2-hidden-accessible" name="unit_type" tabindex="-1" aria-hidden="true"><option value="1">تک فیلد</option><option value="2">چند فیلد</option> </select></td><td class="c-ui-table__cell manage-fields"> <div class="row-btn c-ui-btns" style="width: 189px !important; min-width: 120px !important; color: #aba9a9;">مدیریت فیلد ها</div> </td><td class="c-ui-table__cell"> <a type="button" class="c-content-categories__search-reset remove-row-btn" style="min-height: 34px !important;height: 34px;width: 34px;margin: auto;"> </a></td></tr>';
  //
  //   $("#tbody").append(tr);
  //
  //   function reloadScript(id) {
  //
  //     var $el = $('#' + id);
  //
  //     $('#' + id).replaceWith('<script id="' + id + '" src="' + $el.prop('src') + '"><\/script>');
  //   }
  //
  //   $('.select2').each(function () {
  //     $(this).remove();
  //   });
  //
  //
  //   reloadScript('tableview');
  //
  //   reloadScript('tagify');
  //
  //
  //   var input = document.querySelector('.new-tag-input');
  //   tagify = new Tagify(input);
  //
  //   var dragsort = new DragSort(tagify.DOM.scope, {
  //     selector: '.' + tagify.settings.classNames.tag,
  //     callbacks: {
  //       dragEnd: onDragEnd
  //     }
  //   });
  //
  //   function onDragEnd(elm) {
  //     tagify.updateValueByDOMTags()
  //   }
  //
  //   $(".drag-sort").removeClass("new-tag-input");
  //
  // });




  // $('.save-btn').on('click', function (e) {
  //   var name = $(".active-row").closest('.row').find('.name').val();
  //
  // });


  // $("input[name=drag-sort]").each(function () {
  //   var input = document.querySelector('input[name=drag-sort]'),
  //     tagify = new Tagify(this);
  //
  //   var dragsort = new DragSort(tagify.DOM.scope, {
  //     selector: '.' + tagify.settings.classNames.tag,
  //     callbacks: {
  //       dragEnd: onDragEnd
  //     }
  //   })
  //
  //   function onDragEnd(elm) {
  //     tagify.updateValueByDOMTags()
  //   }
  // });


  {{--$('tbody').sortable({--}}
  {{--  group: 'no-drop',--}}
  {{--  handle: '.c-content-upload__drag-handler',--}}
  {{--  connectWith: 'tbody',--}}
  {{--  scroll: false,--}}
  {{--  containment: 'tbody',--}}
  {{--  axis: 'y',--}}
  {{--  update: function (event, ui) {--}}
  {{--    var data = $("tbody").sortable('serialize');--}}
  {{--    $.ajax({--}}
  {{--        data: data,--}}
  {{--        type: 'post',--}}
  {{--        url: '{{route('staff.attributes.indexChangePosition')}}'--}}
  {{--    });--}}
  {{--  }--}}
  {{--});--}}
</script>
@endsection
