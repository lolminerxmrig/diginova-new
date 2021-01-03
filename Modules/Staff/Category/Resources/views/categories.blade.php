@extends('layouts.staff.master')

@section('content')
<main class="c-content-layout">
      <div class="uk-container uk-container-large">
        <div class="c-grid" data-select2-id="137">
          <div class="c-content-page c-content-page--plain c-grid__row">
            <div class="c-grid__col">
              <div class="c-content-page__header">
                <span class="c-content-page__header-action">ایجاد دسته بندی</span>
                <span class="c-content-page__header-desc">برای محصولات فروشگاه دسته و زیر دسته ایجاد کنید</span>
              </div>
            </div>
          </div>
          <div class="c-grid__row">
            <div class="c-grid__col">
              <div class="c-card" data-select2-id="136">
                <div class="c-grid__row">
                  <div class="c-grid__col">

                    <form action="{{ route('staff.categoryCreate') }}" method="post" id="category_form" style="width:100%">
                      @csrf
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
                                ">ایجاد دسته بندی
                              </div>
                            </h2>


                            <div
                              style="width: 100%;margin: -7px 0px 50px 0px !important;padding: 0px !important;background: #e2dddd;height: 1px;"></div>
                            <div
                              class="c-content-accordion__content c-content-accordion__content--small"
                              id="stepTitleContainer" aria-hidden="false" style="
                              margin-right: -25px;
                              ">

                                <div class="c-grid__row c-grid__row--gap-lg js-auto-title-message" style="width: 100%;margin-right: -2px;margin-bottom: 30px; display: none;">
                                    <div class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--sm-12">
                                        <div class="c-content-product__auto-title-msg">خطا. لطفا همه فیلد ها را کامل کنید</div>
                                    </div>
                                </div>

                              <div
                                class="c-grid__row c-grid__row--gap-lg c-grid__row--negative-gap-attr"
                                style="
                                margin: 0 0 0 0;
                                width: 100%;
                                ">
                                <div class="c-grid__col c-grid__col--gap-lg c-grid__col--row-attr c-grid__col--flex-initial
                                  c-grid__col--sm-6">
                                  <label class="uk-form-label uk-flex uk-flex-between">نام
                                  دسته </label>
                                  <div class="field-wrapper">
                                    <input type="text"
                                      class="c-content-input__origin js-attribute-old-value"
                                      name="name">
                                  </div>
                                  <div>
                                  </div>
                                </div>
                                <div class="c-grid__col c-grid__col--gap-lg c-grid__col--row-attr c-grid__col--flex-initial
                                  c-grid__col--sm-6">
                                  <label class="uk-form-label uk-flex uk-flex-between">نام انگلیسی</label>
                                  <div class="field-wrapper
                                    ">
                                    <input type="text"
                                      class="c-content-input__origin js-attribute-old-value"
                                      name="en_name">
                                  </div>
                                  <div>
                                  </div>
                                </div>
                              </div>

                              <div
                                class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial c-grid__col--sm-4 c-grid__col--xs-gap"
                                style="margin-top: 15px;margin-bottom: 15px;">
                                <div
                                  class="field-wrapper field-wrapper--justify field-wrapper--background"
                                  style="
                                  width: 201px;
                                  ">
                                  <label
                                    class="c-ui-checkbox c-ui-checkbox--small c-ui-checkbox--auto"
                                    id="productIsFakeLabel">
                                    <input type="checkbox" class="c-ui-checkbox__origin"
                                      name="is_main" id="is_main" value="1"
                                      onchange="valueChanged()">
                                    <span class="c-ui-checkbox__check"></span>
                                    <span class="c-ui-checkbox__label">دسته اصلی</span>
                                    <div class="c-wiki c-wiki__holder">
                                      <span class="c-wiki-sign js-tooltip"
                                        data-tooltip="اگر دسته ای که قصد ایجاد آن را دارید زیر مجموعه دسته دیگری نیست و خود جزو دسته اصلی می باشد این گزینه را انتخاب کنید."></span>
                                    </div>
                                  </label>
                                </div>
                              </div>



                            <div class="c-card__body c-card__body--content">
                                <label for="" class="search-form__action-label">نامک</label>
                                <div class="c-ui-tag__textarea c-ui-tag__textarea--inline js-textarea-tags" style="color: #606265;width: 49.5%;margin-bottom: 20px; padding-right:0px; border: none;">
                                    <input name="slug" type="text" class="c-content-input__origin js-prevent-submit url-inputs" dir="ltr" aria-invalid="false">
                                    <input type="button" id="button-urls" style="width: auto;" class="c-ui-tag__submit js-tag-submit-btn button-urls" value="-{{ config('app.url') }}/search/category" disabled>
                                </div>
                            </div>


                              <div class="c-card__body c-card__body--content category-box">
                                <label for="" class="search-form__action-label">جستجو در میان دسته ها</label>
                                <div class="search-form__autocomplete-container">
                                  <div class="search-form__autocomplete js-autosuggest-box">
                                    <input name="search" id="searchKeyword" class="c-content-input__origin js-prevent-submit"
                                      type="text" placeholder="دسته مورد نظرتان را جستجو کنید">
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
                                    <div class="c-content-categories__wrapper js-category-column cat-box">
                                      <ul class="c-content-categories__list">
                                        @foreach($categories->where('parent_id', 0) as $category)
                                        <li class="c-content-categories__item
                                          {{ $categories->where('parent_id', $category->id)->count() > 0 ? 'has-children' : '' }}">
                                          <label
                                            class="c-content-categories__link js-category-link">
                                          <input type="radio" name="category"
                                            value="{{ $category->id }}"
                                            class="uk-hidden js-category-data radio"
                                            data-id="{{ $category->id }}"
                                            data-theme="">
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
                                <div class="c-content-categories__summary">
                                  <div class="c-content-categories__summary-breadcrumbs">
                                    <span class="">دسته انتخابی شما:</span>
                                    <ul class="js-selected-category c-content-categories__selected-list" id="breadcrumbs">
                                      <!-- ajax -->
                                    </ul>
                                  </div>

                                  <div class="c-content-accordion__step-controls c-content-accordion__step-controls--category">
                                    {{-- <button
                                      class="c-ui-btn c-ui-btn--next mr-a js-continue-btn"
                                      id="categoryStepNext">
                                    انتخاب گروه کالا
                                    </button> --}}
                                    <button type="button" class="c-content-categories__search-reset reset-box" id="categoryReset">
                                    </button>
                                  </div>

                                </div>
                              </div>
                              <div class="c-content-loader c-content-loader--fixed category-box">
                                <div class="c-content-loader__logo"></div>
                                <div class="c-content-loader__spinner"></div>
                              </div>
                            </div>
                          </section>

                          <section id="stepImagesAccordion">
                            <div
                            class="c-content-accordion__content c-content-accordion__content--last"
                            id="stepImagesContainer" aria-hidden="false" style="
                            margin-right: -25px; display: block !important;
                            ">
                            <div class="c-card__body c-card__body--content marketplace-redesign"
                                id="stepImagesContent">
                                <div id="imagesSelfServiceContainer"
                                class="c-grid__row c-grid__row--gap-lg">
                                <div class="c-grid__col">
                                    <fieldset class="c-content-upload">
                                    <legend class="c-content-upload__title">برای دسته
                                        تصویر انتخاب کنید
                                    </legend>
                                    <div>
                                        <label class="c-content-upload__trigger"
                                        id="uploadGalleryContainer">
                                        <div uk-form-custom=""
                                            class="uk-form-custom">
                                            <input name="image" type="file" id="uploadImage" onchange="document.getElementById('preview_uploading').src = window.URL.createObjectURL(this.files[0])" class="hidden">
                                        </div>
                                        <span class="c-content-upload__ui-btn">بارگذاری تصویر</span>
                                        <ul class="c-content-upload__list c-content-upload__list--tooltips">
                                            <li class="c-content-upload__list-item c-content-upload__list-item--tooltips">
                                            تصویر شما باید مربعی باشد یا ابعاد
                                            یک در یک داشته باشد
                                            </li>
                                            <li class="c-content-upload__list-item c-content-upload__list-item--tooltips">
                                            فرمت تصاویر بایستی JPG باشد
                                            </li>
                                        </ul>
                                        </label>
                                        <div id="imagesLoadingSection"
                                        class="c-content-upload__uploads loading js-uploading-section hidden">
                                        <h3 class="product-form__section-title product-form__section-title--gap">
                                            تصاویر درحال بارگذاری
                                        </h3>
                                        <ul id="imagesUploadList"
                                            class="c-content-upload__gallery-list"></ul>
                                        </div>
                                        <div
                                        class="c-content-upload__error-container hidden"
                                        id="ajaxErrorImages">
                                        <div class="c-content-upload__error">
                                            <div class="hidden"
                                            id="imageErrorsContainer"></div>
                                            <div
                                            class="hidden c-content-upload__error-msg"
                                            id="mainImageErrorContainer">
                                            می‌توانید با استفاده از
                                            کلید<i></i> تصویر مورد نظرتان را به
                                            عنوان تصویر اصلی کالا انتخاب کنید.
                                            </div>
                                        </div>
                                        </div>




                                        <div id="imagesSection" class="c-content-upload__uploads js-uploaded-section" style="display: none;">
                                            <h3 class="product-form__section-title product-form__section-title--gap">
                                            تصویر در حال بارگذاری
                                            </h3>

                                            <ul id="imagesContainer" class="c-content-upload__gallery-list js-uploaded-list js-sortable-list uk-sortable">
                                            <li class="c-content-upload__gallery-row js-uploads-row  li-error" id="1dsWB">
                                                <div class="c-content-upload__img-container">
                                                <img src="" alt="" id="preview_uploading" class="c-content-upload__img js-upload-thumb uploadImage" />

                                                <div class="c-content-upload__img-loader">
                                                    <div class="progress__wrapper">
                                                    <span class="progress"></span>
                                                    </div>
                                                </div>
                                                <div class="c-content-upload__img-error"></div>
                                                </div>
                                                <div class="c-content-upload__mid-container">
                                                <div class="c-content-upload__mid-container c-content-upload__mid-container--top">
                                                    <div class="c-content-upload__desc">
                                                    <div class="c-content-upload__desc--top">
                                                        <div class="right">
                                                        <div class="c-content-upload__name js-upload-name"></div>
                                                        <div class="c-content-upload__size js-upload-size"></div>
                                                        </div>
                                                        <div class="c-content-upload__select"></div>
                                                    </div>
                                                    </div>
                                                    <ul class="c-content-upload__list c-content-upload__list--errors js-upload-error-list">
                                                        <li class="error-image"></li>
                                                    </ul>
                                                </div>
                                                </div>
                                                    <div class="c-content-upload__controls">
                                                        <button type="button" class="c-content-upload__btn c-content-upload__btn--remove js-remove-upload"></button>
                                                    </div>
                                                </div>

                                            </li>
                                            </ul>
                                        </div>




                                    </div>
                                    </fieldset>
                                </div>
                                </div>
                                <span></span>
                            </div>
                            </div>
                            <ul id="uploadingTemplate" class="hidden">
                            <li class="c-content-upload__gallery-row js-uploads-row">
                                <input type="hidden" class="js-image-id-input">
                                <div class="c-content-upload__img-container">
                                <img src="" alt=""
                                    class="c-content-upload__img js-upload-thumb">
                                <div class="c-content-upload__img-loader">
                                    <div class="progress__wrapper">
                                    <span class="progress"></span>
                                    </div>
                                </div>
                                <div class="c-content-upload__img-error"></div>
                                </div>
                                <div class="c-content-upload__mid-container">
                                <div
                                    class="c-content-upload__mid-container c-content-upload__mid-container--top">
                                    <div class="c-content-upload__desc">
                                    <div class="c-content-upload__desc--top">
                                        <div class="right">
                                        <div
                                            class="c-content-upload__name js-upload-name"></div>
                                        <div
                                            class="c-content-upload__size js-upload-size"></div>
                                        </div>
                                        <div class="c-content-upload__select">
                                        </div>
                                    </div>
                                    </div>
                                    <ul class="c-content-upload__list c-content-upload__list--errors js-upload-error-list"></ul>
                                </div>
                                </div>
                            </li>
                            </ul>
                          </section>
                        </div>

                        <div class="c-card__footer c-card__footer--products">
                          <div class="c-grid__row">
                            <div class="c-grid__col c-grid__col--flex-initial">
                              <div class="c-content-error c-content-error--list hidden"
                                id="saveAjaxErrors">
                              </div>
                              <div class="uk-flex uk-flex-left">
                                <a class="c-ui-btn c-ui-btn--next mr-a" id="submit-form">افزودن دسته</a>
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

// تغییر پدینگ فیلد نامک
$(function() {
  var buttonWidth = $('#button-urls').width() + 20;
  $(".url-inputs").css({
      'padding-left': buttonWidth
  });
});

// پنهان کردن دسته بندی وقتی روی چک باکس کلیک شد
function valueChanged() {
  if ($("#is_main").is(":checked")) {
    $(".category-box").hide();
    $("#stepTitleContainer").css('margin-bottom', '-60px');
  } else {
    $(".category-box").show();
  }
}

// تغییر آدرس دسته بندی در راهنمای فیلد نامک
$(document).on('click', "#is_main", function(e) {
  if ($("#is_main").is(":checked")) {
    $(".button-urls").val('/{{ config('app.url') }}' + '/main');
  } else {
    $(".button-urls").val('-{{ config('app.url') }}' + '/search/category');
  }
  var buttonWidth = $('#button-urls').width() + 20;
  $(".url-inputs").css({
    'padding-left': buttonWidth
  });
});

// اضافه کردن توکن به درخواست های ایجکس
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});


// تابع تبدیل بایت
function formatBytes(bytes, decimals = 0) {
    if (bytes === 0) return '0 Bytes';
    const k = 1024;
    const dm = decimals < 0 ? 0 : decimals;
    const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
    const i = Math.floor(Math.log(bytes) / Math.log(k));
    return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
}


// نمایش حجم عکس در فرانت
// نمایش نام فایل
$(document).on("change", "#uploadImage", function() {
    $('.js-upload-size').text(formatBytes(this.files[0].size));
    var filename = $("#uploadImage").val().split('\\').pop();
    $('.js-upload-name').text(filename);
});


// ایجکس آپلود عکس
$(document).on("change", "#uploadImage", function() {
    $("#imagesSection").show();

    var form_data = new FormData();
    var input_image = $("#uploadImage").prop("files")[0];

    form_data.append("image", input_image);

    $.ajax({
        url: "ajaxupload",
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function(data) {
            $("#imagesSection").replaceWith(data);
        },
        error: function(data) {
            $(".li-error").addClass('has-error');
            $(".error-image").html(data.responseJSON.error);
        }
    });

});

// ایجکس حذف عکس
$(document).on("click", ".js-remove-upload", function() {
    $.ajax({
        url: "ajaxdelete",
        type: 'post',
        data: {
            id: $('.uploadImage').attr('data-id'),
        },
        success: function(data) {
            $("#imagesSection").hide();
        },
        error: function()
        {
            $("#imagesSection").hide();
        }
    });
});

// ایجکس دسته ها
$(document).on('click', "input[name='category']", function(e) {

  $(this).closest("div").nextAll().remove();
  $("li").removeClass('is-active');
  $(this).closest("li").addClass("is-active");

  var categorySelected = $("input[name='category']:checked").val();
  $.ajax({
    method: "POST",
    url: 'ajax',
    data: {
      id: categorySelected,
    },
    success: function(response) {
      $('#categoriesContainerContent').append(response);
      console.log(response);
    },
  });

});


// ایجکس breadcrumb
$(document).on('click', "input[type='radio']", function(e) {

  var bread_id = $("input[type='radio']:checked").val();

  $.ajax({
    method: "POST",
    url: 'ajaxbreadcrumb',
    data: {
      id: bread_id,
    },
    success: function(response) {
      $('#breadcrumbs').replaceWith(response);
    },
  });

});


// ایجکس سرچ
$('#searchKeyword').on('keyup', function() {

  var searchValue = $(this).val();

  if (searchValue.length > 2) {
    $.ajax({
      type: 'post',
      url: 'ajaxsearch',
      data: {
        'search': searchValue
      },
      success: function(response) {
        $('#categoriesContainer').replaceWith(response);
      }
    });
  }

  if (searchValue.length == 0) {
    $.ajax({
      type: 'post',
      url: 'reload',
      success: function(response) {
        $('#categoriesContainer').replaceWith(response);
      }
    });
  }
});


// ایجکس فرم اصلی
$(document).on('click', "#submit-form", function(e) {

    if ($("#is_main").val()) {
        var selectedCategory = $("#is_main").val();
    } else {
        var selectedCategory = $("input[name='category']").val();
    }

    var name = $("input[name='name']").val();
    var slug = $("input[name='slug']").val();
    var en_name = $("input[name='en_name']").val();
    var image = $("input[name='image']").attr('data-id');

    if(name && slug && en_name && selectedCategory) {
        $.ajax({
            method: "POST",
            url: 'create',
            data: {
            name: name,
            slug: slug,
            en_name: en_name,
            image: image,
            parent_id: selectedCategory,
        },
        success: function(response) {
            $.toast({
                heading: 'موفق!',
                text: "دسته با موفقیت ایجاد شد",
                bgColor: '#3DC3A1',
                textColor: '#fff',
            });

            $.ajax({
                type: 'post',
                url: 'reload',
                data: data,
                success: function(response) {
                $('#categoriesContainer').replaceWith(response);
                },
                error: function () {
                $('#categoriesContainer').hide();
                }
            });
        },
        });
    }
    else
    {
        $(".js-auto-title-message").show();
        $(window).scrollTop(0);

        $.toast({
                heading: 'خطا!',
                text: "لطفا همه فیلد ها را پر کنید",
                bgColor: '#EF5661',
                textColor: '#fff',
            });

    }

});



$(document).on('click', ".reset-box", function(e) {
    $.ajax({
        type: 'post',
        url: 'reload',
        success: function(response) {
            $('#categoriesContainer').replaceWith(response);
        }
    });

});

</script>
@endsection
