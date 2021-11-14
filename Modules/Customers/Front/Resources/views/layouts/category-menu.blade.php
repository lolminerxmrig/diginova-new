@if($counter)
  <div class=" show-more  ">
    <ul class="c-catalog__list--depth ">
      <li class="c-catalog__cat-item ">
          <div>
            <?php  $counter = $counter-1;  ?>
            @if(isset($fullCategoryList[$j]))
                <span class="c-catalog__cat-item {{ ($counter !== 1)? 'c-catalog__cat-item--arrow-down' : '' }}">
                <a class="c-catalog__link {{ ($counter == 1)? 'is-active' : '' }}"
                 href="/search/category-mobile/">
                    {{ $fullCategoryList[$j] }}
                </a>
                @if($counter == 1 && count($other_categories))
                    @foreach ($other_categories as $item)
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                        <a class="c-catalog__link" href="/search/category-mobile/">{{ $item->name }}</a>
                    @endforeach
                @endif
                </span>
            @endif
            <?php $j = $j+1;  ?>
            @include('front::layouts.category-menu', ['fullCategoryList' => $fullCategoryList, 'counter' => $counter, 'j' => $j])
        </div>
      </li>
    </ul>
  </div>
@endif
