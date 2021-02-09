@extends('layouts.staff.master')

@section('head')
    <script src="{{ asset('seller/js/create-category-validation.js') }}"></script>
    <script src="{{ asset('seller/js/tags3.js') }}"></script>
@endsection

@section('content')
    <main class="c-content-layout">
        <div class="uk-container uk-container-large">
            <div class="c-grid" data-select2-id="137">
                <div class="c-content-page c-content-page--plain c-grid__row">
                    <div class="c-grid__col">
                        <div class="c-content-page__header">
                            <span class="c-content-page__header-action">مدیریت نوع کالا</span>
                            <span
                                class="c-content-page__header-desc">از این صفحه می توانید نوع کالا را مدیریت، ویرایش و حذف کنید</span>
                        </div>
                    </div>
                </div>
                <div class="c-grid__row">
                    <div class="c-grid__col">
                        <div class="c-card" data-select2-id="136">
                            <form id="category_form">
                                <div class="c-grid__col">
                                    <div class="product-form">
                                        <div class="c-content-accordion js-accordion uk-accordion">
                                            <section class="c-content-accordion__row js-content-section uk-open"
                                                     id="stepCategoryAccordion">
                                                <h2 style="
                    font-size: 18px;
                    margin-right: 33px;
                    margin-top: -8px;
                    ">
                                                    <div style="
                      color: #606265;
                      ">مدیریت نوع کالا
                                                    </div>
                                                </h2>
                                                <div
                                                    style="width: 100%;margin: -7px 0px 20px 0px !important;padding: 0px !important;background: #e2dddd;height: 1px;">
                                                </div>
                                                <div
                                                    class="c-content-accordion__content c-content-accordion__content--small"
                                                    id="stepTitleContainer" aria-hidden="false"
                                                    style=" margin-right: -25px;">
                                                    <div class="c-card__body c-card__body--content category-box">
                                                        <label for="" class="search-form__action-label">جستجو در میان
                                                            دسته ها</label>
                                                        <div class="search-form__autocomplete-container">
                                                            <div class="search-form__autocomplete js-autosuggest-box">
                                                                <input name="search" id="searchKeyword"
                                                                       class="c-content-input__origin js-prevent-submit"
                                                                       type="text"
                                                                       placeholder="دسته مورد نظرتان را جستجو کنید">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="c-card__body  c-card__body--content category-box"
                                                         id="stepTitleContent" style="margin-top: -20px;">
                                                    </div>
                                                    <div class="c-card__body c-card__body--content category-box">
                                                        <!-- category a -->
                                                        <div id="categoriesContainer" class="c-content-categories">
                                                            <div class="c-content-categories__container"
                                                                 id="categoriesContainerContent">
                                                                <div
                                                                    class="c-content-categories__wrapper js-category-column cat-box"
                                                                    id="cat-box" data-id="0">
                                                                    <ul class="c-content-categories__list"
                                                                        style="list-style: none;">
                                                                        @foreach($categories->where('parent_id', 0) as $category)
                                                                            <li class="c-content-categories__item
                                          {{ $categories->where('parent_id', $category->id)->count() > 0 ? 'has-children' : '' }}">
                                                                                <label
                                                                                    class="c-content-categories__link js-category-link">
                                                                                    <input type="radio" name="category"
                                                                                           value="{{ $category->id }}"
                                                                                           class="js-category-data radio uk-hidden"
                                                                                           data-id="{{ $category->id }}"
                                                                                           data-theme=""
                                                                                           data-status="ziro_parent"
                                                                                           style="visibility: hidden;">
                                                                                    {{ $category->name }}
                                                                                </label>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="c-content-loader">
                                                                <div class="c-content-loader__logo"></div>
                                                                <div class="c-content-loader__spinner"></div>
                                                            </div>
                                                        </div>
                                                        <div id="breadcrumb" class="c-content-categories__summary">
                                                            <div class="c-content-categories__summary-breadcrumbs"
                                                                 id="bread-box">
                                                                <span class="">دسته انتخابی شما:</span>
                                                                <ul class="js-selected-category c-content-categories__selected-list"
                                                                    id="breadcrumbs">
                                                                    <!-- ajax -->
                                                                </ul>
                                                            </div>
                                                            <div
                                                                class="c-content-accordion__step-controls c-content-accordion__step-controls--category">
                                                                <a class="c-ui-btn c-ui-btn--next mr-a js-continue-btn disabled"
                                                                   id="categoryStepNext" disabled="true">
                                                                    انتخاب دسته
                                                                </a>
                                                                <button type="button"
                                                                        class="c-content-categories__search-reset reset-box"
                                                                        id="categoryReset">
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div id="error-cat" class="field-wrapper has-error"></div>
                                                    </div>
                                                    <div class="c-content-loader c-content-loader--fixed category-box">
                                                        <div class="c-content-loader__logo"></div>
                                                        <div class="c-content-loader__spinner"></div>
                                                    </div>


                                                    <div class="editable-section">
                                                        <div class="c-grid__col c-grid__col--gap-lg c-grid__col--row-attr c-grid__col--flex-initial c-grid__col--sm-6 edit-form-section">

                                                            <div class="field-wrapper">
                                                                <label for="type-field" class="uk-form-label" style="margin-right: 10px; margin-top: 30px;"> افزودن نوع</label>
                                                                <input type="text" class="c-content-input__origin js-attribute-old-value" id="type-field" name="type-field" style="width: 61%;margin-right: 10px;float: right;">

                                                                <a class="c-ui-btn c-ui-btn--next mr-a js-continue-btn create-field " style="margin-right: 10px;">ایجاد نوع</a>

                                                            </div>
                                                            <div>
                                                            </div>
                                                        </div>

                                                        <label class="uk-form-label edit-form-section" style="margin-right: 30px !important; margin-bottom: -20px; margin-top:40px;">لیست نوع:</label>
                                                        <div class="fields-box edit-form-section">
                                                            <!-- qppend -->
                                                        </div>

                                                        <div class="ajax-append"></div>
                                                        <div class="deleted-fields"></div>

                                                        <div uk-modal="esc-close: true; bg-close: true;" class="uk-modal-container uk-modal-container--message js-common-modal-notification uk-modal" style="display: none;">
                                                            <div class="uk-modal-dialog uk-modal-dialog--flex">
                                                                <button class="uk-modal-close-default uk-close uk-icon" type="button" uk-close=""></button>

                                                                <div class="uk-modal-body" data-gtm-vis-recent-on-screen-9662696_13="79003" data-gtm-vis-first-on-screen-9662696_13="79004"
                                                                     data-gtm-vis-total-visible-time-9662696_13="100" data-gtm-vis-has-fired-9662696_13="1">
                                                                    <div class="c-modal-notification">
                                                                        <div class="c-modal-notification__content c-modal-notification__content--limited">
                                                                            <h2 class="c-modal-notification__header">هشدار</h2>

                                                                            <p class="c-modal-notification__text">با حذف نوع مورد نظر ، این نوع از فیلتر محصولات دسته انتخابی به صورت کامل حذف شده و قابل بازیابی نمی باشد. آیا از حذف کامل آن اطمینان دارید؟</p>
                                                                            <div class="c-modal-notification__actions">
                                                                                <button class="c-modal-notification__btn no uk-modal-close">خیر</button>
                                                                                <button class="c-modal-notification__btn c-modal-notification__btn--secondary yes uk-modal-close">بله</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="edit-form-section c-card__footer c-card__footer--products">
                                            <div class="c-grid__row">
                                                <div class="c-grid__col c-grid__col--flex-initial">
                                                    <div class="uk-flex uk-flex-right" style="width: 97%;">
                                                        <a class="c-ui-btn c-ui-btn--next mr-a"
                                                                style="margin-right: 13px;" id="submit-form">ذخیره
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
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

$(".edit-form-section").hide();

// اضافه کردن توکن به درخواست های ایجکس
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// ایجکس فرم اصلی
$('#submit-form').on('click', function (e) {
    // e.preventDefault();


    var category_id = $("input[type='radio']:checked").val();

    var type_fields = [];
    type_fields.length = 0;
    $("input[name='type_field']").each(function(i, element) {
        var id = $(element).attr('value'); // Set a data-id attribute on each li
        var i = i;
        type_fields[i] = id;
    });

    var database_data = [];
    database_data.length = 0;
    $("input[name='database_data']").each(function(i, element) {
        var id = $(element).val();
        var i = $(element).data('id');
        database_data[i] = id;
    });






    // if (name && slug && en_name) {
    $.ajax({
        method: "post",
        url: '{{route('staff.types.store')}}',
        data: {
            type_fields: type_fields,
            database_data: database_data,
            category: category_id,
        },
        success: function () {
            $.toast({
                heading: 'موفق!',
                text: "نوع کالا با موفقیت ذخیره شد",
                bgColor: '#3DC3A1',
                textColor: '#fff',
            });

            $(".edit-form-section").hide();


            $('#category_form').trigger("reset");

            $(".type-field-box").each(function () {
                $(this).remove();
            });

            $.ajax({
                type: 'post',
                url: '{{route('staff.types.mainCatLoader')}}',
                success: function (response) {
                    $('.c-content-categories__wrapper').replaceWith(response);

                    // $('#categoriesContainer').replaceWith(response);
                }
            });

            $(".category-box").show();
        },
    });
    // }
});

// ایجکس دسته ها
$(document).on('change', "input[name='category']", function (e) {

    $(this).closest("div").nextAll().remove();
    $("li").removeClass('is-active');
    $(this).closest("li").addClass("is-active");

    var categorySelected = $("input[name='category']:checked").val();

    $.ajax({
        method: "POST",
        url: '{{route('staff.types.childCatsLoader')}}',
        data: {
            id: categorySelected,
        },
        success: function (response) {
            $('#categoriesContainerContent').append(response);
        },
    });


});

// ایجکس breadcrumb
$(document).on('change', "input[type='radio']", function (e) {

    var bread_id = $("input[type='radio']:checked").val();

    $.ajax({
        method: "POST",
        url: '{{route('staff.types.breadcrumbLoader')}}',
        data: {
            id: bread_id,
        },
        success: function (response) {
            $('#breadcrumbs').replaceWith(response);
        },
    });

    if ($("input[type='radio']:checked").closest('li').hasClass('has-children')){
        $(".js-continue-btn").attr("disabled", true);
        $(".js-continue-btn").addClass('disabled');
    } else {
        $(".js-continue-btn").attr("disabled", false);
        $(".js-continue-btn").removeClass('disabled');
    }

});

// ایجکس سرچ
$('#searchKeyword').on('keyup', function () {

    var searchValue = $(this).val();

    if (searchValue.length > 2) {
        $.ajax({
            type: 'post',
            url: '{{route('staff.types.ajaxsearch')}}',
            data: {
                'search': searchValue
            },
            success: function (response) {
                $(".c-content-categories__wrapper").each(function () {
                    $(this).remove();
                });
                $('.c-content-categories__container').append(response);
            }
        });
    }

    if (searchValue.length == 0) {
        $.ajax({
            type: 'post',
            url: '{{route('staff.types.mainCatLoader')}}',
            success: function (response) {
                $('.c-content-categories__wrapper').replaceWith(response);
            }
        });
    }
});

// ریست کامل لیست دسته بندی ها
$(document).on('click', ".reset-box", function (e) {
    $.ajax({
        type: 'post',
        url: '{{route('staff.types.mainCatLoader')}}',
        success: function (response) {
            $('.c-content-categories__wrapper').replaceWith(response);
            // $('#categoriesContainer').replaceWith(response);
        }
    });

//    $("input[type='radio']").removeAttr('checked');
   $("#categoryStepNext").addClass('disabled');
   $(".edit-form-section").hide();
//
//
//    $(".category-box").show();
   $(".appended-box").each(function () {
       $(this).remove();
   });

});


$(document).on('click', "#categoryStepNext", function (e) {
    if (!$(".js-continue-btn").hasClass('disabled'))
    {
        $(".type-field-box").each(function () {
            $(this).remove();
        });

        var category_id = $("input[type='radio']:checked").val();
        $.ajax({
            method: "post",
            url: '{{route('staff.types.getData')}}',
            data: {
                category_id: category_id,
            },
            success: function (result) {
                $(".ajax-append").replaceWith(result);
            },
        });
        $(".edit-form-section").show(100);
    }



    // $(".edit-form-section").show(100);


    // var disable_status = $(".js-continue-btn").attr("disabled");
    // if(typeof disable_status == 'undefined')
    // {
    //
    //     $(".type-field-box").each(function () {
    //         $(this).remove();
    //     });
    //
    //     $(".edit-form-section").show(100);
    //
    //
    //     var selectedCat = $("input:checked[type='radio']").val();
    //
    // }
    //
    // else {
    //     $(".edit-form-section").hide(100);
    // }


});

{{--$(document).on('click', '#delete-btn', function () {--}}
{{--    var brand_id = $(this).val();--}}
{{--    var cat_id = $("input:checked[type='radio']").val();--}}


    {{--$.ajax({--}}
    {{--    method: 'post',--}}
    {{--    url: "{{route('staff.types.moveToTrash')}}",--}}
    {{--    data: {--}}
    {{--        'id': cat_id,--}}
    {{--    },--}}
    {{--    success: function () {--}}
    {{--        $(".edit-form-section").hide();--}}

{{--            $.toast({--}}
{{--                heading: 'موفق!',--}}
{{--                text: "دسته با موفقیت حذف شد",--}}
{{--                bgColor: '#3DC3A1',--}}
{{--                textColor: '#fff',--}}
{{--            });--}}

{{--            $('#category_form').trigger("reset");--}}

{{--            $(".appended-box").each(function () {--}}
{{--                $(this).remove();--}}
{{--            });--}}

{{--            $.ajax({--}}
{{--                type: 'post',--}}
{{--                url: '{{route('staff.types.mainCatLoader')}}',--}}
{{--                success: function (response) {--}}
{{--                    $('#categoriesContainer').replaceWith(response);--}}
{{--                }--}}
{{--            });--}}
{{--            $(".category-box").show();--}}
{{--        },--}}
{{--    });--}}
{{--});--}}


$(".create-field").on('click', function (){

    var type_field = $("#type-field").val();

    var field = '<div class="c-grid__row c-grid__row--gap-lg c-grid__row--negative-gap-attr type-field-box appended-box">';
    field += '<div class="c-grid__col c-grid__col--gap-lg c-grid__col--row-attr c-grid__col--flex-initial c-grid__col--sm-6">';
    field += '<div class="field-wrapper"><input type="text" data-old="" value="' + type_field + '" class="c-content-input__origin c-ui-input--deactive js-suggested-title-fa js-edit-mode-suggested-title-fa type_field" name="type_field" disabled>';
    field +='<a class="c-ui-btn c-ui-btn--outline-blue edit-field-btn">ویرایش نوع</a><a type="button" class="c-content-categories__search-reset remove-field-btn" style="min-height: 39px !important;height: 39px;"></a></div><div></div></div></div>';

    if(type_field.length > 1){
        $(".fields-box").prepend(field);
        $("#type-field").val('');
    }

});


$(document).on('click', '.remove-field-btn', function () {
    $(".uk-modal-container").addClass('uk-open');
    $(".uk-modal-container").css('display', 'block');
    $(this).closest('.c-grid__row').addClass('selected-group');
    $('.c-header__nav').hide();
    $(document).on('click', '.yes', function (){
        $(".remove-field-btn").closest('.selected-group').find('input').val('deleted');
        $(".remove-field-btn").closest('.selected-group').hide();
        // $(".remove-field-btn").closest('.selected-group').remove();

        $('.c-header__nav').show();
    });

    $(document).on('click', '.uk-modal-close-default', function (){
        $('.c-header__nav').show();
    });

});


$(document).on('click', '.uk-modal-close-default', function (){
    $(document).removeClass('selected-group');
    $(".c-grid__row").each(function () {
        $(this).removeClass('selected-group');
    });

});


$(document).on('click', '.no', function (){
    $('.c-header__nav').show();
    $(document).removeClass('selected-group');
    $(".c-grid__row").each(function () {
        $(this).removeClass('selected-group');
    });

});


$(document).on('click', '.edit-field-btn', function (){
    var input_val = $(this).closest('.field-wrapper').find('input').val();
    $(this).closest('.field-wrapper').find('input').attr('data-old', input_val);
    $(this).closest('.field-wrapper').find('input').removeAttr('disabled');
    $(this).closest('.field-wrapper').find('input').removeClass('c-ui-input--deactive');


    var chenge_btn = '<button class="c-ui-btn c-ui-btn--outline-blue confirm-btn ok-btn">تایید</button>' +
        '<button class="c-ui-btn c-ui-btn--outline-blue cancell-btn red-btn">لغو</button>';

    $(this).closest('.field-wrapper').find('.edit-field-btn').replaceWith(chenge_btn);

});


$(document).on('click', '.confirm-btn', function (){
    $(this).closest('.field-wrapper').find('input').attr('disabled', true);
    $(this).closest('.field-wrapper').find('input').addClass('c-ui-input--deactive');


    var chenge_btn = '<a class="c-ui-btn c-ui-btn--outline-blue edit-field-btn">ویرایش نوع</a>';
    $(this).closest('.field-wrapper').find(".cancell-btn").remove();
    $(this).closest('.field-wrapper').find(".confirm-btn").replaceWith(chenge_btn);
});


$(document).on('click', '.cancell-btn', function (){

    $(this).closest('.field-wrapper').find('input').attr('disabled', true);
    $(this).closest('.field-wrapper').find('input').addClass('c-ui-input--deactive');

    var confirm_btn_val = $(this).closest('.field-wrapper').find('input').attr('data-old');
    $(this).closest('.field-wrapper').find('input').val(confirm_btn_val);

    var chenge_btn = '<a class="c-ui-btn c-ui-btn--outline-blue edit-field-btn">ویرایش نوع</a>';
    $(this).closest('.field-wrapper').find(".confirm-btn").replaceWith(chenge_btn);
    $(this).remove();

});


</script>

@endsection
