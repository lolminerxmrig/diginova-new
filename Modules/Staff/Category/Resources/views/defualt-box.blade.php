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
                                   class="uk-hidden js-category-data"
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
