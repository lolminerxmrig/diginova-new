// good
$(document).on('change', "select", function () {
  var selected = $(this).val();

  if (selected == 2) {
    $(".select-change").show();
  }
  else {
    $(".select-change").hide();
  }

});



// good
$(document).on('click', '.c-mega-campaigns__btns-green-plus', function () {
  $("#modal-create").addClass('uk-open');
  $("#modal-create").css('display', 'block');
  $('.c-header__nav').css('position', 'relative');
});

// good
$(document).on('click', '.uk-close', function () {
  $('.c-header__nav').css('position', 'sticky');
});

// good
$(document).on('click', '.create-field', function () {


  var field_val = $("#input-field").val();

  var field = '<tr name="row" id="item-x" class="c-ui-table__row c-ui-table__row--body modal-row" style=""><td>' +
    '<div class="c-content-upload__drag-handler c-content-upload__drag-handler--outer ui-sortable-handle" style="margin-right: 0px;margin-left: 6px;"> ' +
    '<span class="c-content-upload__drag-handler c-content-upload__drag-handler--up js-sort-up ui-sortable-handle" style=""></span>' +
    '<span class="c-content-upload__drag-handler c-content-upload__drag-handler--bg ui-sortable-handle" style="padding-top: 2px;padding-bottom: 2px;"></span>' +
    '<span class="c-content-upload__drag-handler c-content-upload__drag-handler--down js-sort-down ui-sortable-handle"></span></div></td>' +
    '<td><input type="text" name="unit_name" value="' + field_val + '" class="c-content-input__origin c-ui-input--deactive unit_name" disabled></td>' +
    '<td class="change-jquery" style="max-width: 38%; width: 38%; margin: auto;"> <a class="c-ui-btn c-ui-btn--outline-blue edit-field-btn">ویرایش</a></td></td>' +
    '<td><a type="button" class="c-content-categories__search-reset remove-mfield-btn" style="min-height: 32px !important;height: 32px;width: 32px;margin: auto;margin-right: 2px;"></a></td></tr>';

  if (field_val.length > 1) {
    $(".add-field-lable").css('display', 'block');
    $("#modal_tbody").append(field);
    $("#input-field").val('');
  }

});

// good
$(document).on('click', '.edit-field-btn', function () {

  var input_val = $(this).closest(".modal-row").find("input").val();
  $(this).closest(".modal-row").find("input").attr('data-old', input_val);
  $(this).closest(".modal-row").find("input").removeAttr('disabled');
  $(this).closest(".modal-row").find("input").removeClass('c-ui-input--deactive');

  var chenge_btn = '<td class="change-jquery" style="max-width: 38%; width: 38%;">' +
    '<a class="c-ui-btn c-ui-btn--outline-blue confirm-btn ok-btn" style="width: 46% !important;">تایید </a>' +
    '<a class="c-ui-btn c-ui-btn--outline-blue cancell-btn black-btn" style="width: 45% !important;">لغو</a></td>';

  $(this).closest(".modal-row").find(".change-jquery").replaceWith(chenge_btn);

});

// good
$(document).on('click', '.cancell-btn', function () {

  $(this).closest(".modal-row").find('input').attr('disabled', true);
  $(this).closest(".modal-row").find('input').addClass('c-ui-input--deactive');

  var confirm_btn_val = $(this).closest(".modal-row").find('input').attr('data-old');
  $(this).closest(".modal-row").find('input').val(confirm_btn_val);

  var chenge_btn = '<td class="change-jquery" style="max-width: 38%; width: 38%; margin: auto;"> <a class="c-ui-btn c-ui-btn--outline-blue edit-field-btn">ویرایش</a></td>';

  $(this).closest(".modal-row").find(".change-jquery").replaceWith(chenge_btn);
  $(this).remove();

});

// good
$(document).on('click', '.confirm-btn', function () {

  $(this).closest(".modal-row").find('input').attr('disabled', true);
  $(this).closest(".modal-row").find('input').addClass('c-ui-input--deactive');

  var chenge_btn = '<td class="change-jquery" style="max-width: 38%; width: 38%; margin: auto;">' +
    '<a class="c-ui-btn c-ui-btn--outline-blue edit-field-btn">ویرایش</a></td>';

  $(this).closest(".modal-row").find(".change-jquery").replaceWith(chenge_btn);

});

// good
$(document).on('click', '.remove-mfield-btn', function () {
  $(this).closest(".modal-row").find('input').val('deleted');
  $(this).closest(".modal-row").hide();
});

// good
$("#modal_tbody").sortable({
  handle: '.c-content-upload__drag-handler',
});


$(document).on('click', '.close-modal', function (){
  $("#modal-edit").remove();
});
