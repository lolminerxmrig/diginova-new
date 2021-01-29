

// تابع تبدیل بایت
function formatBytes(bytes, decimals = 0) {
    if (bytes === 0) return '0 Bytes';
    const k = 1024;
    const dm = decimals < 0 ? 0 : decimals;
    const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
    const i = Math.floor(Math.log(bytes) / Math.log(k));
    return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
}

// نمایش حجم نام عکس در فرانت
$(document).on("change", "#uploadImage", function() {
    $('.js-upload-size').text(formatBytes(this.files[0].size));
    var filename = $("#uploadImage").val().split('\\').pop();
    $('.js-upload-name').text(filename);
});

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

// تغییر پدینگ فیلد نامک
$(function() {
    var buttonWidth = $('#button-urls').width() + 20;
    $(".url-inputs").css({
        'padding-left': buttonWidth
    });

});

// پنهان کردن دسته بندی وقتی روی چک باکس کلیک شد
function valueChanged() {
    if ($("input[type=checkbox]").attr('data-status') == 1) {
        $(".category-box").hide();
        $("#stepTitleContainer").css('margin-bottom', '-60px');
    } else {
        $(".category-box").show();
    }
}
