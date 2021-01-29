@extends('layouts.staff.master')
@section('head')
    <script src="{{ asset('seller/js/tags4.js') }}"></script>
    <script src="{{ asset('seller/js/create-category-validation.js') }}"></script>
    <link rel="stylesheet" href="https://unpkg.com/@yaireo/dragsort/dist/dragsort.css" media="print" onload="this.media='all'">

    <link rel="stylesheet" href="{{ asset('seller/css/tagify.css') }}">
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>

    <script src="{{ asset('seller/js/jQuery.tagify.min.js') }}"></script>
    <script src="https://unpkg.com/@yaireo/dragsort"></script>

    <style>
        .select2-search {
            display: none;
        }

        .select2-selection__arrow {
            display: block !important;
        }

        .select2-search--dropdown {
            display: none;
        }


        .select2-selection--single {
            background-color: #fff;
            border: 1px solid #bbbaba;
            border-radius: 4px;
        }

    </style>

@endsection
@section('content')
    <main class="c-main">
        <div class="uk-container uk-container-large">

            <div class="c-grid " data-select2-id="23">
                <div class="c-grid__row c-product-list--align-header">
                    <div class="c-grid__col">
                        <div class="c-card c-card--transparent">
                            <h1 class="c-card__title c-card__title--dark c-card__title--desc">ویرایش گروه ویژگی
                                <span>
								برای ویرایش  گروه ویژگی و ایجاد ویژگی برای آن از این قسمت استفاده نمایید
							</span>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="c-grid__row">
                    <div class="c-grid__col">
                        <div class="c-card">
                            <h2 style="
							  font-size: 18px;
							  margin-right: 33px;
							  margin-top: 28px;
							  margin-bottom: -30px;
							  ">
                                <div style="
color: #606265;">اطلاعات گروه ویژگی
                                </div>
                            </h2>
                            <div
                                style="width: 100%;margin: -7px 0px 50px 0px !important;padding: 0px !important;background: #e2dddd;height: 1px;display: none;"></div>
                            <div class="c-card__header">

                            </div>
                            <div class="c-card__body">
                                <div class="c-grid__row c-grid__row--gap-lg">
                                    <div
                                        class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--lg-8 ">
                                        <div class="c-grid__row c-grid__row--gap-lg c-grid__row--nowrap-sm">

                                            <div
                                                class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--lg-6 c-grid__col--xs-gap">

                                                <label for="" class="uk-form-label" style="
	color: #606265;
	margin-bottom: 7px;
">نام گروه ویژگی<span class="uk-form-label__required"></span>
                                                </label>
                                                <div class="field-wrapper">
                                                    <label class="c-content-input">
                                                        <input name="group_id" class="group_id" value="{{ $attributeGroup->id }}" hidden>
                                                        <input type="text" class="c-content-input__origin c-content-input__origin attr_group_name"
                                                               name="attr_group_name" value="{{ $attributeGroup->name }}" dir="rtl" style="text-align: right;">

                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="c-grid__row c-grid__row--gap-lg">
                                    <div class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial">
                                        <label for="" class="uk-form-label" style="
	color: #606265;
	margin-bottom: 8px;
">توضیحات (اختیاری)
                                        </label>
                                        <div class="field-wrapper field-wrapper--textarea">

											<textarea name="attr_group_desc"
                                                      class="c-content-input__origin c-content-input__origin--textarea js-textarea-words attr_group_desc"
                                                      rows="2" maxlength="1000"
                                                      @if(!$attributeGroup->description)
                                                      placeholder="در صورت تمایل اطلاعات گروه ویژگی را وارد کنید ..."
													  @endif
											>{{ ($attributeGroup->description)? $attributeGroup->description : '' }}</textarea>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="js-table-container" data-select2-id="37">

                    {{--                    <div class="c-product-list__alert c-ui--mt-25 c-ui--mb-25">--}}
                    {{--                        <p style="line-height: 27px;">توجه: لطفا برای ایجاد یکپارچگی و ورود صحیح--}}
                    {{--                            اصلاعات ابتدا تمامی گروه ها و زیر گروه های مدنظرتان را ایجاد کرده سپس بران آنها ویژگی ایجاد کنید. <br>--}}
                    {{--                            توجه: در صورتی که نوع نمایش را عبارت بلند یا کوتاه انتخاب کردید، فیلد مقادیر ورودی را وارد نکنید.--}}
                    {{--                            <br>--}}
                    {{--                        </p>--}}
                    {{--                    </div>--}}

                    <div class="c-content-modal__notes" style="
	line-height: 24px;
">
						<span class="c-content-modal__notes-title" style="
">توجه:</span>
                        <ul class="c-content-modal__notes-list" style="
	margin-top: 8px;
">
                            <li>لطفا برای ایجاد یکپارچگی و ورود صحیح
                                اصلاعات ابتدا تمامی گروه ها و زیر گروه های مدنظرتان را ایجاد کرده سپس بران آنها ویژگی ایجاد کنید. <li>در صورتی که نوع نمایش را عبارت بلند یا کوتاه انتخاب کردید، فیلد مقادیر ورودی را وارد نکنید.</li></li>
                        </ul>
                    </div>


                    <div class="c-grid__row">
                        <div class="c-grid__col">
                            <div class="c-card">
                                <div class="c-card__wrapper">
                                    <div class="c-card__header c-card__header--table"><a target="_blank">
                                            <div class="c-mega-campaigns__btns-green-plus uk-margin-remove">ایجاد ویژگی
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
                                                <th class="c-ui-table__header"><span
                                                        class="table-header-searchable uk-text-nowrap "></span></th>
                                                <th class="c-ui-table__header"><span
                                                        class="table-header-searchable uk-text-nowrap table-header-searchable--desc">عنوان ویژگی</span>
                                                </th>
                                                <th class="c-ui-table__header"><span
                                                        class="table-header-searchable uk-text-nowrap ">نوع نمایش</span>
                                                </th>
                                                <th class="c-ui-table__header"><span
                                                        class="table-header-searchable uk-text-nowrap ">ضروری</span>
                                                </th>
                                                <th class="c-ui-table__header"><span
                                                        class="table-header-searchable uk-text-nowrap ">قابل فیلتر</span>
                                                </th>
                                                <th class="c-ui-table__header"><span
                                                        class="table-header-searchable uk-text-nowrap ">مقادیر ورودی</span>
                                                </th>
                                                <th class="c-ui-table__header"><span
                                                        class="table-header-searchable uk-text-nowrap ">حذف</span></th>

                                            </tr>
                                            </thead>

                                            <tbody id="tbody">


                                              @if(isset($attributes) && !is_null($attributes))
                                                @foreach($attributes->unique() as $attribute)
                                                  <tr name="row db-row"
                                                    class="c-ui-table__row c-ui-table__row--body c-join__table-row row">
                                                    <td class="c-ui-table__cell" style="padding-right: 0px; padding-left: 23px;">
                                                        <div class="c-content-upload__drag-handler c-content-upload__drag-handler--outer">
                                                            <span class="c-content-upload__drag-handler c-content-upload__drag-handler--up js-sort-up"></span>
                                                            <span class="c-content-upload__drag-handler c-content-upload__drag-handler--bg"></span>
                                                            <span class="c-content-upload__drag-handler c-content-upload__drag-handler--down js-sort-down"></span>
                                                        </div>
                                                    </td>
                                                    <td class="c-ui-table__cell" style="min-width: 90px">
                                                        <input type="text" name="db_attr_name" value="{{ ($attribute->name)? $attribute->name : '' }}" class="c-content-input__origin js-attribute-old-value attr_name">
                                                    </td>
                                                    <td class="c-ui-table__cell c-ui-table__cell-desc c-ui--pt-15 c-ui--pb-15 td-select"
                                                        style="text-align: right;">

                                                        <select name="db_attr_type"
                                                                class="uk-input uk-input--select js-select-origin select2-hidden-accessible attr_type"
                                                                tabindex="-1" aria-hidden="true"
                                                                aria-invalid="false">
                                                            <option value="1" {{ ($attribute->types == 1)? 'selected' : '' }}>متن کوتاه (text)</option>
                                                            <option value="2" {{ ($attribute->types == 2)? 'selected' : '' }}>متن بلند (textarea)</option>
                                                            <option value="3" {{ ($attribute->types == 3)? 'selected' : '' }}>تک انتخابی (select box)</option>
                                                            <option value="4" {{ ($attribute->types == 4)? 'selected' : '' }}>چند انتخابی (select box)</option>
                                                            <option value="5" {{ ($attribute->types == 5)? 'selected' : '' }}>متن کوتاه با واحد</option>
                                                        </select>

                                                    </td>
                                                    <td class="c-ui-table__cell c-ui-table__cell--small-text">
                                                        <div class="c-ui-tooltip__anchor">
                                                            <div class="c-ui-toggle__group">
                                                                <label class="c-ui-toggle">
                                                                    <input class="c-ui-toggle__origin js-toggle-active-product attr_required"
                                                                        type="checkbox" name="db_attr_required" {{ ($attribute->is_required)? 'checked' : '' }}>
                                                                    <span class="c-ui-toggle__check"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>


                                                    <td class="c-ui-table__cell c-ui-table__cell--small-text">
                                                        <div class="c-ui-tooltip__anchor">
                                                            <div class="c-ui-toggle__group">
                                                                <label class="c-ui-toggle">
                                                                    <input class="c-ui-toggle__origin js-toggle-active-product attr_filterable"
                                                                        type="checkbox" name="db_attr_filterable"  {{ ($attribute->is_filterable)? 'checked' : '' }}>
                                                                    <span class="c-ui-toggle__check"></span>
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </td>


                                                    <td class="c-ui-table__cell c-ui-table__cell-desc c-ui--pt-15 c-ui--pb-15">
                                                        <div class="uk-flex uk-flex-column">
                                                            <input name='drag-sort' value='{{ $attribute->values }}' class="drag-sort db_attr_input_tag">
                                                        </div>

                                                    </td>


                                                    <td class="c-ui-table__cell">
                                                        <div class="c-promo__actions" style="width: 50%; margin: auto;">
                                                            <button type="button" class="c-content-upload__btn c-content-upload__btn--remove remove-btn"></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                              @endif


                                            </tbody>

                                        </table>
                                    </div>

                                    <div class="c-card__footer" style="width: auto;">
                                        <a>
                                            <div class="c-mega-campaigns__btns-green-plus uk-margin-remove">ایجاد ویژگی
                                                جدید
                                            </div>
                                        </a>


                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="c-grid__row">
                <div class="c-grid__col">
                    <div class="c-card">
                        <div class="edit-form-section c-card__footer c-card__footer--products">
                            <div class"class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--lg-6 c-grid__col--xs-gap" style="
                            width: 40%;
                            float: left;
                            display: contents;
                            ">
                            {{--                            <p style="--}}
                            {{--    float: right;--}}
                            {{--    width: 40%;--}}
                            {{--    color: #565454;--}}
                            {{--">برای ذخیره اطلاعات حتما فیلد نام گروه ویژگی را وارد کنید.</p>--}}
                            <a class="c-ui-btn c-ui-btn--next mr-a" style="margin-left: 68px;max-width: 100px;" id="submit-form">ذخیره
                            </a>
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

                        <p class="c-modal-notification__text">با حذف ویژگی مورد نظر ، این ویژگی از فیلتر محصولات دسته
                            انتخابی به صورت کامل حذف شده و قابل بازیابی نمی باشد. آیا از حذف کامل آن اطمینان دارید؟</p>
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
@endsection
@section('script')

<script>

    // اضافه کردن توکن به درخواست های ایجکس
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // ایجکس فرم اصلی
    $('#submit-form').on('click', function (e) {
        // e.preventDefault();


        var category_id = $("input[name='group_id']").val();
        var group_name = $("input[name='attr_group_name']").val();
        var group_desc = $("textarea[name='attr_group_desc']").val();

        var attr_name = $("input[name='attr_name']").map(function(){return $(this).val();}).get();
        var attr_type = $("select[name='attr_type']").map(function(){return $(this).val();}).get();

        var attr_required = $("input[name='attr_required']").map(function(){
            if($(this).is(':checked')){return 1;}else{return 0;}
        }).get();

        var attr_filterable = $("input[name='attr_filterable']").map(function(){
            if($(this).is(':checked')){return 1;}else{return 0;}
        }).get();

        var attr_input_tag = $("input[name='drag-sort']").map(function(){return $(this).val();}).get();

        // if (name && slug && en_name) {
        $.ajax({
            method: "post",
            url: '{{route('staff.attributes.store')}}',
            data: {
                category_id: category_id,
                group_name: group_name,
                group_desc: group_desc,
                attr_names: attr_name,
                attr_types: attr_type,
                attr_requireds: attr_required,
                attr_filterables: attr_filterable,
                attr_values: attr_input_tag,
            },

            success: function () {
                $.toast({
                    heading: 'موفق!',
                    text: "نوع کالا با موفقیت ذخیره شد",
                    bgColor: '#3DC3A1',
                    textColor: '#fff',
                });


                {{--var data = $("tbody").sortable('serialize');--}}
                {{--$.ajax({--}}
                {{--    data: data,--}}
                {{--    type: 'post',--}}
                {{--    url: '{{route('staff.attributes.indexChangePosition')}}'--}}
                {{--});--}}

                // $('#category_form').trigger("reset");

            },
        });
        // }

    });

    $(document).on('click', '.remove-btn', function () {
        $(".uk-modal-container").addClass('uk-open');
        $(".uk-modal-container").css('display', 'block');
        $('.c-header__nav').hide();
        $(this).closest("tr").addClass('hide-tr');

        $(document).on('click', '.yes', function (){
            $(".remove-btn").closest(".hide-tr").remove();

            $('.c-header__nav').show();
        });

        $(document).on('click', '.no', function () {
            $('.c-header__nav').show();
            $(".remove-btn").closest(".hide-tr").removeClass('hide-tr');

        });

        $(document).on('click', '.uk-close', function () {
            $('.c-header__nav').show();
            $(".remove-btn").closest(".hide-tr").removeClass('hide-tr');

        });

    });

    $("tbody").sortable({
        group: 'no-drop',
        handle: '.c-content-upload__drag-handler',
        connectWith: 'tbody',
        scroll: false,
        containment: 'tbody',
    });

    $(document).on('click', '.c-mega-campaigns__btns-green-plus', function () {
        var tr = '<tr name="row" class="c-ui-table__row c-ui-table__row--body c-join__table-row row"><td class="c-ui-table__cell" style="padding-right:0;padding-left:23px">' +
            '<div class="c-content-upload__drag-handler c-content-upload__drag-handler--outer"><span class="c-content-upload__drag-handler c-content-upload__drag-handler--up js-sort-up"></span> ' +
            '<span class="c-content-upload__drag-handler c-content-upload__drag-handler--bg"></span> <span class="c-content-upload__drag-handler c-content-upload__drag-handler--down js-sort-down">' +
            '</span></div></td><td class="c-ui-table__cell" style="min-width:90px"><input class="c-content-input__origin js-attribute-old-value attr_name" name="attr_name"></td>' +
            '<td class="c-ui-table__cell c-ui-table__cell-desc c-ui--pt-15 c-ui--pb-15 td-select" style="text-align:right"><select name="attr_type" class="uk-input uk-input--select js-select-origin select2-hidden-accessible attr_type" ' +
            'tabindex="-1" aria-hidden="true" aria-invalid="false"><option value="1" selected>عبارت کوتاه (text)</option><option value="2">عبارت بلند (textarea)</option>' +
            '<option value="3">تک انتخابی (select box)</option><option value="4">چند انتخابی (select box)</option></select></td><td class="c-ui-table__cell c-ui-table__cell--small-text"><div class="c-ui-tooltip__anchor"><div class="c-ui-toggle__group"><label class="c-ui-toggle">' +
            '<input class="c-ui-toggle__origin js-toggle-active-product attr_required" type="checkbox" name="attr_required" value="1"> <span class="c-ui-toggle__check"></span></label></div></div>' +
            '</td><td class="c-ui-table__cell c-ui-table__cell--small-text"><div class="c-ui-tooltip__anchor"><div class="c-ui-toggle__group"><label class="c-ui-toggle"><input class="c-ui-toggle__origin js-toggle-active-product attr_filterable" type="checkbox" name="attr_filterable" value="1"> ' +
            '<span class="c-ui-toggle__check"></span></label></div></div></td><td class="c-ui-table__cell c-ui-table__cell-desc c-ui--pt-15 c-ui--pb-15">' +
            '<div class="uk-flex uk-flex-column"><input name="drag-sort" class="drag-sort new-tag-input attr_input_tag"></div></td><td class="c-ui-table__cell"><div class="c-promo__actions" style="width:50%;margin:auto">' +
            '<button type="button" class="c-content-upload__btn c-content-upload__btn--remove remove-btn"></button></div></td></tr>';


        $("#tbody").append(tr);
        generateSelectUi();

        var input = document.querySelector('.new-tag-input');
        tagify = new Tagify(input);

        var dragsort = new DragSort(tagify.DOM.scope, {
            selector: '.' + tagify.settings.classNames.tag,
            callbacks: {
                dragEnd: onDragEnd
            }
        });

        function onDragEnd(elm) {
            tagify.updateValueByDOMTags()
        }

        $(".drag-sort").removeClass("new-tag-input");

    });

    function generateSelectUi() {
        $('.js-select-origin').each(function () {
            const $this = $(this);
            const isMultiSelect = $this.attr('multiple');
            const $placeholder = $this.attr('data-placeholder') || '';
            const inProductStep = $this.hasClass('js-in-product');

            $this.select2({
                placeholder: $placeholder,
                closeOnSelect: !isMultiSelect,
                allowClear: (isMultiSelect && inProductStep),
                sorter: function (data) {
                    return data.sort(function (a, b) {
                        a = $(a).prop('selected');
                        b = $(b).prop('selected');
                        return b - a;
                    });
                }
            }).on('select2:opening', function () {
                $('body').addClass('ui-select');
            }).on('select2:select', function () {
                let $sortedOptions = $('li.select2-results__option').sort(function (a, b) {
                    return ($(b).attr('aria-selected') === 'true') - ($(a).attr('aria-selected') === 'true');
                });
                $('.select2-results__options').prepend($sortedOptions);
            }).on('select2:unselect', function () {
                let $sortedOptions = $('li.select2-results__option').sort(function (a, b) {
                    return ($(b).attr('aria-selected') === 'true') - ($(a).attr('aria-selected') === 'true');
                });
                $('.select2-results__options').prepend($sortedOptions);
            }).on('change', function () {
                if (isMultiSelect && inProductStep) {
                    let $selectionsContainerWidth = $this.siblings('.select2-container').find('ul.select2-selection__rendered').width() - 77;
                    const $selections = $this.siblings('.select2-container').find('li.select2-selection__choice');

                    $selections.removeClass('hidden');
                    $selections.each(function () {
                        $selectionsContainerWidth -= $(this).outerWidth(true);
                        if ($selectionsContainerWidth < 0) {
                            $(this).addClass('hidden');
                        }
                    });

                    let $selectionsCount = $this.siblings('.select2-container').find('li.select2-selection__choice.hidden').length;
                    let $counter = $this.siblings('.select-counter');

                    if ($selectionsCount > 0) {
                        $counter.css('display', 'flex');
                    } else {
                        $counter.css('display', 'none');
                    }
                    $counter.text($selectionsCount.toLocaleString('fa-IR'));
                }
                $(this).trigger('blur');
            }).on('select2:close', function () {
                $(this).valid();
                $('body').removeClass('ui-select');
            });

            if (isMultiSelect && inProductStep) {
                let $selectionsContainerWidth = $this.siblings('.select2-container').find('ul.select2-selection__rendered').width() - 77;
                const $selections = $this.siblings('.select2-container').find('li.select2-selection__choice');

                $selections.removeClass('hidden');
                $selections.each(function () {
                    $selectionsContainerWidth -= $(this).outerWidth(true);
                    if ($selectionsContainerWidth < 0) {
                        $(this).addClass('hidden');
                    }
                });

                let $counter = $this.siblings('.select-counter');
                let $selectionsCount = $this.siblings('.select2-container').find('li.select2-selection__choice.hidden').length;

                if ($selectionsCount > 0) {
                    $counter.text($selectionsCount.toLocaleString('fa-IR'));
                    $counter.css('display', 'flex');
                }
            }

        });
    }

    $('.js-select-origin').each(function () {
        const $this = $(this);
        const isMultiSelect = $this.attr('multiple');
        const $placeholder = $this.attr('data-placeholder') || '';
        const inProductStep = $this.hasClass('js-in-product');

        $this.select2({
            placeholder: $placeholder,
            closeOnSelect: !isMultiSelect,
            allowClear: (isMultiSelect && inProductStep),
            sorter: function (data) {
                return data.sort(function (a, b) {
                    a = $(a).prop('selected');
                    b = $(b).prop('selected');
                    return b - a;
                });
            }
        }).on('select2:opening', function () {
            $('body').addClass('ui-select');
        }).on('select2:select', function () {
            let $sortedOptions = $('li.select2-results__option').sort(function (a, b) {
                return ($(b).attr('aria-selected') === 'true') - ($(a).attr('aria-selected') === 'true');
            });
            $('.select2-results__options').prepend($sortedOptions);
        }).on('select2:unselect', function () {
            let $sortedOptions = $('li.select2-results__option').sort(function (a, b) {
                return ($(b).attr('aria-selected') === 'true') - ($(a).attr('aria-selected') === 'true');
            });
            $('.select2-results__options').prepend($sortedOptions);
        }).on('change', function () {
            if (isMultiSelect && inProductStep) {
                let $selectionsContainerWidth = $this.siblings('.select2-container').find('ul.select2-selection__rendered').width() - 77;
                const $selections = $this.siblings('.select2-container').find('li.select2-selection__choice');

                $selections.removeClass('hidden');
                $selections.each(function () {
                    $selectionsContainerWidth -= $(this).outerWidth(true);
                    if ($selectionsContainerWidth < 0) {
                        $(this).addClass('hidden');
                    }
                });

                let $selectionsCount = $this.siblings('.select2-container').find('li.select2-selection__choice.hidden').length;
                let $counter = $this.siblings('.select-counter');

                if ($selectionsCount > 0) {
                    $counter.css('display', 'flex');
                } else {
                    $counter.css('display', 'none');
                }
                $counter.text($selectionsCount.toLocaleString('fa-IR'));
            }
            $(this).trigger('blur');
        }).on('select2:close', function () {
            $(this).valid();
            $('body').removeClass('ui-select');
        });

        if (isMultiSelect && inProductStep) {
            let $selectionsContainerWidth = $this.siblings('.select2-container').find('ul.select2-selection__rendered').width() - 77;
            const $selections = $this.siblings('.select2-container').find('li.select2-selection__choice');

            $selections.removeClass('hidden');
            $selections.each(function () {
                $selectionsContainerWidth -= $(this).outerWidth(true);
                if ($selectionsContainerWidth < 0) {
                    $(this).addClass('hidden');
                }
            });

            let $counter = $this.siblings('.select-counter');
            let $selectionsCount = $this.siblings('.select2-container').find('li.select2-selection__choice.hidden').length;

            if ($selectionsCount > 0) {
                $counter.text($selectionsCount.toLocaleString('fa-IR'));
                $counter.css('display', 'flex');
            }
        }

    });

</script>

<script>
    $("input[name=drag-sort]").each(function () {
        var input = document.querySelector('input[name=drag-sort]'),
            tagify = new Tagify(this);

        var dragsort = new DragSort(tagify.DOM.scope, {
            selector: '.' + tagify.settings.classNames.tag,
            callbacks: {
                dragEnd: onDragEnd
            }
        })

        function onDragEnd(elm) {
            tagify.updateValueByDOMTags()
        }
    });
</script>


<script>
    $('tbody').sortable({
        group: 'no-drop',
        handle: '.c-content-upload__drag-handler',
        connectWith: 'tbody',
        scroll: false,
        containment: 'tbody',
        axis: 'y',
        {{--update: function (event, ui) {--}}
        {{--    var data = $("tbody").sortable('serialize');--}}
        {{--    $.ajax({--}}
        {{--        data: data,--}}
        {{--        type: 'post',--}}
        {{--        url: '{{route('staff.attributes.indexChangePosition')}}'--}}
        {{--    });--}}
        {{--}--}}
    });
</script>
@endsection
