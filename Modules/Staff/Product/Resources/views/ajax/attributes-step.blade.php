{{--<div class="c-grid__row c-grid__row--gap-lg">--}}
{{--    <div class="c-grid__col c-grid__col--gap-attr c-grid__col--flex-initial">--}}
{{--        <h3 class="product-form__section-title product-form__section-title--dot">مشخصات فیزیکی کالا</h3>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="c-grid__row c-grid__row--gap-lg">--}}
{{--    <div class="c-grid__col c-grid__col--gap-attr c-grid__col--flex-initial c-grid__col--lg-6">--}}
{{--        <div class="c-grid__row c-grid__row--gap-lg c-grid__row--nowrap-sm">--}}
{{--            <div class="c-grid__col c-grid__col--gap-attr c-grid__col--flex-initial c-grid__col--lg-8">--}}
{{--                <label for="" class="uk-form-label">--}}
{{--                    ابعاد (میلی متر):--}}
{{--                    <span class="uk-form-label__required"></span>                        --}}
{{--                </label>--}}
{{--                <div class="c-grid__row c-grid__row--gap-small c-grid__row--nowrap-sm">--}}
{{--                    <div class=" c-grid__col c-grid__col--gap-small c-grid__col--flex-initial c-grid__col--xs-gap">--}}
{{--                        <div class="field-wrapper">--}}
{{--                            <label class="c-content-input">--}}
{{--                                <span class="c-content-input__text c-content-input__text--overlay">طول</span>--}}
{{--                                <input type="text" placeholder="" class="c-content-input__origin c-content-input__origin--overlay js-required-attribute-length" name="attributes[length]" value="">--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class=" c-grid__col c-grid__col--gap-small c-grid__col--flex-initial c-grid__col--xs-gap">--}}
{{--                        <div class="field-wrapper">--}}
{{--                            <label class="c-content-input">--}}
{{--                                <span class="c-content-input__text c-content-input__text--overlay">عرض</span>--}}
{{--                                <input type="text" placeholder="" class="c-content-input__origin c-content-input__origin--overlay js-required-attribute-width" name="attributes[width]" value="">--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class=" c-grid__col c-grid__col--gap-small c-grid__col--flex-initial c-grid__col--xs-gap">--}}
{{--                        <div class="field-wrapper">--}}
{{--                            <label class="c-content-input">--}}
{{--                                <span class="c-content-input__text c-content-input__text--overlay">ارتفاع</span>--}}
{{--                                <input type="text" placeholder="" class="c-content-input__origin c-content-input__origin--overlay js-required-attribute-height" name="attributes[height]" value="">--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="c-grid__col c-grid__col--gap-attr c-grid__col--flex-initial c-grid__col--lg-4 c-grid__col--xs-gap">--}}
{{--                <label for="" class="uk-form-label">--}}
{{--                    وزن (گرم):--}}
{{--                    <span class="uk-form-label__required"></span>                        --}}
{{--                </label>--}}
{{--                <div class="field-wrapper">--}}
{{--                    <label class="c-content-input">--}}
{{--                        <span class="c-content-input__text c-content-input__text--overlay">وزن</span>--}}
{{--                        <input type="text" placeholder="" name="attributes[weight]" class="c-content-input__origin c-content-input__origin--overlay js-required-attribute-weight" value="">--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}








@foreach($attr_groups as $atrr_group)
<div class="c-grid__row c-grid__row--gap-lg">
    <div class="c-grid__col c-grid__col--gap-lg c-grid__col--flex-initial">
        <h3 class="product-form__section-title product-form__section-title--dot">{{ $atrr_group->name }}</h3>
    </div>
</div>


<div class="c-grid__row c-grid__row--gap-lg c-grid__row--negative-gap-attr">

  @foreach($atrr_group->attributes->unique() as $attribute)

    @if($attribute->types == 3 )
    <div class="c-grid__col c-grid__col--gap-lg c-grid__col--row-attr c-grid__col--flex-initial c-grid__col--sm-6">
        <label class="uk-form-label uk-flex uk-flex-between">
            {{ $attribute->name }}

            @if($attribute->is_required)
                <span class="uk-form-label__required"></span>
            @endif

{{--            @if(...)--}}
{{--                <span class="uk-float-left uk-padding-medium-left">...</span>--}}
{{--            @endif--}}

        </label>

        <div class="field-wrapper ui-select ui-select__container">
            <select class="uk-input uk-input--select js-select-origin select2-hidden-accessible {{ ($attribute->is_required)? 'js-required-attribute' : '' }}" name="attributes[{{$attribute->id}}]" data-placeholder="انتخاب کنید" tabindex="-1" aria-hidden="true">
                <option>یکی از گزینه ها را انتخاب کنید</option>
              @foreach($attribute->values as $item)
                <option value="{{ $item->id }}"> {{ $item->value }} </option>
              @endforeach
            </select>
            <div class="js-select-options"></div>
        </div>
        <div>
        </div>
    </div>
    @endif


    @if($attribute->types == 4 )
    <div class="c-grid__col c-grid__col--gap-lg c-grid__col--row-attr c-grid__col--flex-initial c-grid__col--sm-12">
        <label class="uk-form-label uk-flex uk-flex-between">
            {{ $attribute->name }}

            @if($attribute->is_required)
                <span class="uk-form-label__required"></span>
            @endif

{{--            @if(...)--}}
{{--                <span class="uk-float-left uk-padding-medium-left">...</span>--}}
{{--            @endif--}}
        </label>
        <div class="field-wrapper ui-select ui-select__container ui-select__container--product">
            <select class="uk-input uk-input--select uk-input--checkboxlist js-select-origin js-in-product select2-hidden-accessible
              {{ ($attribute->is_required)? 'js-required-attribute' : '' }}" multiple="" name="attributes[{{$attribute->id}}]"
                    data-placeholder="انتخاب کنید" tabindex="-1" aria-hidden="true" aria-describedby="attributes[{{$attribute->id}}]-error" aria-invalid="false">
              @foreach($attribute->values as $item)
                <option value="{{ $item->id }}"> {{ $item->value }} </option>
              @endforeach
            </select>
            <span class="select-counter" style="display: none;">۰</span>
            <div class="js-select-options"></div>
            <div id="attributes[33887][]-error" class="error error-msg" style="display: none;"></div></div>
        <div>
        </div>
    </div>
    @endif


    @if($attribute->types == 1)
    <div class="c-grid__col c-grid__col--gap-lg c-grid__col--row-attr c-grid__col--flex-initial c-grid__col--sm-6">
        <label class="uk-form-label uk-flex uk-flex-between">
            {{ $attribute->name }}

            @if($attribute->is_required)
                <span class="uk-form-label__required"></span>
            @endif

{{--            @if(...)--}}
{{--            <span class="uk-float-left uk-padding-medium-left">...</span>--}}
{{--            @endif--}}

        </label>
        <div class="field-wrapper">
            <input type="text" class="c-content-input__origin js-attribute-old-value
               {{ ($attribute->is_required)? 'js-required-attribute' : '' }}" name="attributes[{{$attribute->id}}]" value="">
        </div>
        <div>
        </div>
    </div>
    @endif


    @if($attribute->types == 2)
    <div class="c-grid__col c-grid__col--gap-lg c-grid__col--row-attr c-grid__col--flex-initial c-grid__col--sm-12">
        <label class="uk-form-label uk-flex uk-flex-between">
            {{ $attribute->name }}

            @if($attribute->is_required)
                <span class="uk-form-label__required"></span>
            @endif

{{--            @if(...)--}}
{{--                <span class="uk-float-left uk-padding-medium-left">...</span>--}}
{{--            @endif--}}
        </label>
        <div class="field-wrapper">
            <textarea class="uk-textarea uk-textarea--attr {{ ($attribute->is_required)? 'js-required-attribute' : '' }}" name="attributes[{{$attribute->id}}]"></textarea>
        </div>
        <div>
        </div>
    </div>
    @endif

  @endforeach

</div>
@endforeach

<div class="c-content-accordion__step-controls c-content-accordion__step-controls--spacer">
    <button class="c-ui-btn c-ui-btn--next mr-a goToTitleStep" value="sss" id="attributesStepNext">
        ادامه دادن
    </button>
</div>
