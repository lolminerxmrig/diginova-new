<div class="ajax-append">
@foreach($category->types as $type)
<div class="c-grid__row c-grid__row--gap-lg c-grid__row--negative-gap-attr type-field-box appended-box">
    <div class="c-grid__col c-grid__col--gap-lg c-grid__col--row-attr c-grid__col--flex-initial c-grid__col--sm-6">
        <div class="field-wrapper">
            <input type="text" data-old="" data-id="{{ $type->id }}" value="{{ $type->name }}" class="c-content-input__origin c-ui-input--deactive js-suggested-title-fa
          js-edit-mode-suggested-title-fa type_field database_data" name="database_data" disabled>

            <a class="c-ui-btn c-ui-btn--outline-blue edit-field-btn">ویرایش نوع</a>
            <a type="button" class="c-content-categories__search-reset remove-field-btn"
               style="min-height: 39px !important;height: 39px;">
            </a>
        </div>
    </div>
</div>
@endforeach
</div>
