@if ($paginator->hasPages())
<ul class="c-pager__items">
  @if ($paginator->onFirstPage())
    <li class="js-pagination-item ">
      <a class="c-pager__prev" href="/ajax/product/comments/list/3461617/?mode=newest_comment"></a>
    </li>
  @endif

  @foreach ($elements as $element)
    @if (is_array($element))
      @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
          <li class="js-pagination-item ">
            <a class="c-pager__item is-active" href="javascript:" data-page="{{ $page }}">{{ persianNum($page) }}</a>
          </li>
        @else
          <li class="js-pagination-item ">
            <a class="c-pager__item" href="{{ $url }}" data-page="{{ $page }}">{{ persianNum($page) }}</a>
          </li>
        @endif
      @endforeach
    @endif
  @endforeach

  @if ($paginator->hasMorePages())
    <li class="js-pagination-item ">
      <a class="c-pager__next" href="/ajax/product/comments/list/3461617/?mode=newest_comment&amp;page=87" data-page="87"></a>
    </li>
{{--  @else--}}
  @endif


</ul>
@endif

