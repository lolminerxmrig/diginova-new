<div id="imagesSection" class="c-content-upload__uploads loading js-uploading-section">
    <h3 class="product-form__section-title product-form__section-title--gap">
        تصاویر درحال بارگذاری
    </h3>
    <ul id="imagesUploadList" class="c-content-upload__gallery-list">
        <li class="c-content-upload__gallery-row js-uploads-row has-error" id="uploadedFileId_1">
            <input type="hidden" class="js-image-id-input">
            <div class="c-content-upload__img-container">
                <img src="{{ $request->file('image')->getClientOriginalName() }}" alt="" id="preview_uploading" class="c-content-upload__img js-upload-thumb uploadImage" />
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
                                <div class="c-content-upload__name js-upload-name">download.png</div>
                                <div class="c-content-upload__size js-upload-size">2 KB</div>
                            </div>
                            <div class="c-content-upload__select">
                            </div>
                        </div>
                    </div>
                    <ul class="error-image c-content-upload__list c-content-upload__list--errors js-upload-error-list"><li>فرمت تصویر غیر مجاز است</li></ul>
                </div>
            </div>
            <div class="c-content-upload__controls">

                <button type="button" class="c-content-upload__btn c-content-upload__btn--flag js-flag-primary js-tooltip" data-tooltip="از این پرچم برای انتخاب تصویر اصلی استفاده کنید"></button>
                <button type="button" class="c-content-upload__btn c-content-upload__btn--cancel js-cancel-upload"></button>
                <button type="button" class="c-content-upload__btn c-content-upload__btn--remove js-remove-upload"></button>
                <button type="button" class="c-content-upload__btn c-content-upload__btn--undo js-undo-remove"></button>
                <div class="c-content-upload__drag-handler c-content-upload__drag-handler--outer">
                    <span class="c-content-upload__drag-handler c-content-upload__drag-handler--up js-sort-up"></span>
                    <span class="c-content-upload__drag-handler c-content-upload__drag-handler--bg"></span>
                    <span class="c-content-upload__drag-handler c-content-upload__drag-handler--down js-sort-down"></span>
                </div>
            </div>
        </li></ul>
</div>
