/**
 * Add CSRF Token to Ajax Request
 */
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});


/**
 * Ajax save data when click on modal submit button.
 */
$("#modal-save").on('click', function (){

  var unit_title = $("input[name='unit_title']").val();
  var unit_type = $("select[name='unit_type']").val();

  if (unit_type == 2)
  {
    /** Create array from multi unit name input. */
    var unit_names = $("input[name='unit_name']").map(function() {
      return this.value;
    }).get();
  }
  else
  {
    var unit_names = '';
  }

  $.ajax({
    method: 'post',
    url: 'units/store',
    data: {
      title: unit_title,
      unit_type: unit_type,
      names: unit_names,
    },
    success: function (data) {
      $("#modal-create").hide();
      $('.c-header__nav').css('position', 'sticky');
      $("#tbody").replaceWith(data);
      $("#tbody").replaceWith(data);

      $('.modal-row').each(function (){
        $(this).remove();
      });

      $(".add-field-lable").hide();
      $("input[name='unit_title']").val('');
      // $("select[name='unit_type']").val();

    },
  });

});






