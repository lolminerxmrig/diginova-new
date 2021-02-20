<div id="modal-edit" class="marketplace-redesign uk-modal c-variant" uk-modal="">
  <div class="uk-modal-dialog uk-modal-dialog--confirm uk-modal-body c-content-modal">
    <button class="uk-modal-close uk-modal-close--search uk-close uk-icon close-modal" type="button" uk-close=""></button>
    <form id="newBrandRequestForm" novalidate="novalidate">
      <div class="c-content-modal__header c-content-modal__header--overflow">
        <h3 class="c-content-modal__title">مدیریت فیلد ها</h3>
      </div>
      <div class="c-content-modal__body c-content-modal__body--overflow">
        <div class="c-content-modal__body-container">
          <div class="c-content-modal__intro" style="display: none;">از این بخش می توانید گروه ویژگی ایجاد کنید. هدف از ایجاد گروه های ویژگی ارائه اطلاعات جزئی محصول به مشتریان است.</div>
          <div class="c-content-modal__notes" style=" display: none; "> <span class="c-content-modal__notes-title">توجه:</span>
            <ul class="c-content-modal__notes-list">
              <li>پس از ایجاد گروه ویژگی برای افزودن ویژگی به آن، از طریق همین صفحه بر روی دکمه ویرایش کلیک کنید.</li>
            </ul>
          </div>
          <div class="c-grid__row c-grid__row--gap-lg">
            <div class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial">
              <div class="grid-section" style="width: 42%;">

                <div class="field-wrapper" style="margin-bottom: 53px;">
                  <label for="" class="uk-form-label">عنوان واحد</label>
                  <input type="text" class="c-content-input__origin"  name="title" value="{{ $units->first()->name }}" style="float: right;">
                  <input name="u_name" id="u_name" value="{{ $units->first()->name }}">
                </div>

                <div class="field-wrapper " style="margin-bottom: 36px;">
                  <label for="type" class="uk-form-label">تعداد فیلد</label>
                  <select class="c-ui-select c-ui-select--common c-ui-select--small select2-hidden-accessible" name="type" tabindex="-1" aria-hidden="true">
                    <option value="1" {{ ($units->first()->type == 1)? 'selected' : '' }}>تک فیلد</option>
                    <option value="2" {{ ($units->first()->type == 2)? 'selected' : '' }}>چند فیلد</option>
                  </select>
                </div>

                @if($units->first()->type == 2)
                  <div class="select-change">
                    <div class="field-wrapper">
                      <label for="" class="uk-form-label">نام واحد</label>
                      <input type="text" class="c-content-input__origin" id="input-fields" name="input-fields" style="float: right;width: 60%;">
                      <a class="c-ui-btn c-ui-btn--next mr-a create-fields" style="width: auto;margin-right: 7px;max-width: 30%;">ایجاد فیلد</a>
                    </div>
                    <label for="" class="uk-form-label add-field-lable" style="padding-top: 39px;">فیلد های ایجاد شده</label>
                    <table class="c-ui-table js-search-table js-table-fixed-header c-join__table">
                      <tbody id="edit-modal_tbody" class="ui-sortable" style="">
                      @foreach($units as $unit)
                        <tr name="row" id="item-{{$unit->id}}" data-id="{{$unit->id}}" class="c-ui-table__row c-ui-table__row--body modal-row-edit" style="">
                          <td>
                            <div class="c-content-upload__drag-handler c-content-upload__drag-handler--outer ui-sortable-handle" style="margin-right: 0px;margin-left: 6px;">
                              <span class="c-content-upload__drag-handler c-content-upload__drag-handler--up js-sort-up ui-sortable-handle" style=""></span>
                              <span class="c-content-upload__drag-handler c-content-upload__drag-handler--bg ui-sortable-handle" style="padding-top: 2px;padding-bottom: 2px;"></span>
                              <span class="c-content-upload__drag-handler c-content-upload__drag-handler--down js-sort-down ui-sortable-handle"></span>
                            </div>
                          </td>
                          <td>
                            <input type="text" name="unit_values" data-id="{{ $unit->id }}" value="{{ $unit->value }}" class="c-content-input__origin c-ui-input--deactive unit_names" disabled="">
                          </td>
                          <td class="change-jquery" style="max-width: 38%; width: 38%; margin: auto;">
                            <a class="c-ui-btn c-ui-btn--outline-blue edit-field-btn">ویرایش</a>
                          </td>
                          <td>
                            <a type="button" class="c-content-categories__search-reset remove-mfield-btn" style="min-height: 32px !important;height: 32px;width: 32px;margin: auto;margin-right: 2px;"></a>
                          </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                    <div class="fields-box edit-form-section" style=""></div>
                  </div>
                @else
                  <div class="select-change" style="display: none;">
                    <div class="field-wrapper">
                      <label for="" class="uk-form-label">نام واحد</label>
                      <input type="text" class="c-content-input__origin" id="input-fields" name="input-fields" style="float: right;width: 60%;">
                      <a class="c-ui-btn c-ui-btn--next mr-a create-fields" style="width: auto;margin-right: 7px;max-width: 30%;">ایجاد فیلد</a>
                    </div>
                    <label for="" class="uk-form-label add-field-lable" style="padding-top: 39px; display: none">فیلد های ایجاد شده</label>
                    <table class="c-ui-table js-search-table js-table-fixed-header c-join__table">
                      <tbody id="modal_tbody" class="ui-sortable" style="">
                      </tbody>
                    </table>
                    <div class="fields-box edit-form-section" style=""></div>
                  </div>
                @endif

              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <div class="c-content-modal__footer c-content-modal__footer--overflow">
      <button class="modal-footer__btn modal-footer__btn--confirm modal-footer__btn--wide js-modal-uploads-confirm js-accept save-btn" type="button" id="edit-modal-save">
        <span id="brandRequestBtnLabel">ذخیره</span>
      </button>
      <button class="modal-footer__btn modal-footer__btn--wide uk-close uk-modal-close js-decline close-modal" type="button" id="cancelBrandRequestButton">انصراف</button>
    </div>
    <div class="c-content-loader">
      <div class="c-content-loader__logo"></div>
      <div class="c-content-loader__spinner"></div>
    </div>
  </div>
</div>

<script>






  $("#edit-modal_tbody").sortable({
    handle: '.c-content-upload__drag-handler',
  });



  /**
   * Ajax update and store data when click on modal submit button.
   */
  $("#edit-modal-save").on('click', function ()
  {

    var unit_title = $("input[name='title']").val();
    var unit_type = $("select[name='type']").val();

    if (unit_type == 2)
    {

      /** Create array from multi unit name input. */
      var unit_val = $("input[name='unit_val']").map(function() {
          return this.value;
      }).get();


      var unit_values = [];
      unit_values.length = 0;
      $("input[name='unit_values']").each(function(i, element) {
        var value = $(element).val();
        console.log(value);
        var i = $(element).data('id');
        unit_values[i] = value;
      });
      console.log(unit_values);


    }
    else
    {
      var unit_name = '';
    }

    var name = $("#u_name").val();

    $.ajax({
      method: 'post',
      url: 'units/update',
      data: {
        title: unit_title,
        type: unit_type,
        vals: unit_val,
        values: unit_values,
        name: name,
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






</script>
