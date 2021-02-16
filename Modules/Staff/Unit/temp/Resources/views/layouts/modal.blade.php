<div id="modal-create" class="marketplace-redesign uk-modal c-variant" uk-modal="" style="display: none;">
  <div class="uk-modal-dialog uk-modal-dialog--confirm uk-modal-body c-content-modal">
    <button class="uk-modal-close uk-modal-close--search uk-close uk-icon" type="button" uk-close=""></button>
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
                  <input type="text" class="c-content-input__origin"  name="unit_title" style="float: right;">
                </div>

                <div class="field-wrapper " style="margin-bottom: 36px;">
                  <label for="unit_type" class="uk-form-label">تعداد فیلد</label>
                  <select class="c-ui-select c-ui-select--common c-ui-select--small select2-hidden-accessible" name="unit_type" tabindex="-1" aria-hidden="true">
                    <option value="1">تک فیلد</option>
                    <option value="2">چند فیلد</option>
                  </select>
                </div>

                <div class="select-change" style="display: none;">
                  <div class="field-wrapper">
                    <label for="" class="uk-form-label">نام واحد</label>
                    <input type="text" class="c-content-input__origin" id="input-field" name="input-field" style="float: right;width: 60%;">
                    <a class="c-ui-btn c-ui-btn--next mr-a create-field" style="width: auto;margin-right: 7px;max-width: 30%;">ایجاد فیلد</a>
                  </div>
                    <label for="" class="uk-form-label add-field-lable" style="padding-top: 39px; display: none">فیلد های ایجاد شده</label>
                    <table class="c-ui-table js-search-table js-table-fixed-header c-join__table">
                      <tbody id="modal_tbody" class="ui-sortable" style="">
                      </tbody>
                    </table>
                    <div class="fields-box edit-form-section" style=""></div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <div class="c-content-modal__footer c-content-modal__footer--overflow">
      <button class="modal-footer__btn modal-footer__btn--confirm modal-footer__btn--wide js-modal-uploads-confirm js-accept save-btn" type="button" id="modal-save">
        <span id="brandRequestBtnLabel">ذخیره</span>
      </button>
      <button class="modal-footer__btn modal-footer__btn--wide uk-close uk-modal-close js-decline" type="button" id="cancelBrandRequestButton">انصراف</button>
    </div>
    <div class="c-content-loader">
      <div class="c-content-loader__logo"></div>
      <div class="c-content-loader__spinner"></div>
    </div>
  </div>
</div>
