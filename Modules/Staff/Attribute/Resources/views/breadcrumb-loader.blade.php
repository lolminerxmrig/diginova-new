<?php $cat = $category; ?>
<div id="breadcrumb" class="c-content-categories__summary">
    <div class="c-content-categories__summary-breadcrumbs" id="bread-box">
        <span class="">دسته انتخابی شما:</span>
        <ul class="js-selected-category c-content-categories__selected-list"
            id="breadcrumbs">
            <ul class="js-selected-category c-content-categories__selected-list" id="breadcrumbs">
                @if ($category->parent_id == 0)
                    <li class="c-content-categories__selected-category  appended-box">
                        {{ $category->name }}
                    </li>
                @else
                    <?
                    unset($main_cat);
                    unset($lists);
                    unset($lists);
                    do {
                        $main_cat=$category->parent;
                        $lists[] = $category;
                        $category = $category->parent;
                    } while (isset($category->parent));
                    $lists = array_reverse($lists,true);
                    ?>
                    <li class="c-content-categories__selected-category appended-box">
                        <?php  $main_cat = Modules\Staff\Category\Models\Category::find($main_cat->id) ?>
                        {{ $main_cat->name }}
                    </li>
                    @foreach ($lists as $cate)
                        <li class="c-content-categories__selected-category appended-box">
                            {{ $cate->name }}
                        </li>
                    @endforeach
                @endif
            </ul>
        </ul>
    </div>
    <div class="c-content-accordion__step-controls c-content-accordion__step-controls--category">

        <a class="c-ui-btn c-ui-btn--next mr-a js-continue-btn {{ ($cat->children->isEmpty())? '' : 'disabled' }}"
           {{ ($cat->children->isEmpty())? '' : 'disabled="true"' }} id="categoryStepNext">
            انتخاب دسته
        </a>
        <a type="button"
                class="c-content-categories__search-reset reset-box"
                id="categoryReset">
        </a>
    </div>
</div>
