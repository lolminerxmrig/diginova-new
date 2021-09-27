@if($counter)
  <div class=" show-more  ">
    <ul class="c-catalog__list--depth ">
      <li class="c-catalog__cat-item ">
          <?php  $counter = $counter-1;  ?>
          @if(isset($fullCategoryList[$j]))
            <span class="c-catalog__cat-item {{ ($counter !== 1)? 'c-catalog__cat-item--arrow-down' : '' }}">
              <a class="c-catalog__link {{ ($counter == 1)? 'is-active' : '' }}" href="/search/category-mobile/">{{ $fullCategoryList[$j] }}</a>
              @if($counter == 1)
                <a class="c-catalog__link" href="/search/category-mobile/">تست</a>
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


<div class=" show-more  ">
  <ul class="c-catalog__list--depth ">
      <li class="c-catalog__cat-item ">
          <span
              class="c-catalog__cat-item c-catalog__cat-item--arrow-down">
              <a class="c-catalog__link "
                  href="/search/category-car-accessory-parts/">لوازم جانبی
                  خودرو</a>
          </span>
          <div class=" show-more  ">
              <ul class="c-catalog__list--depth ">
                  <li class="c-catalog__cat-item ">
                      <span
                          class="c-catalog__cat-item c-catalog__cat-item--arrow-down">
                          <a class="c-catalog__link  is-active"
                              href="/search/category-car-stereo/">سیستم
                              صوتی و تصویری خودرو</a>
                      </span>
                      <ul class="c-catalog__list--depth">
                          <li class="c-catalog__cat-item"><a
                                  class="c-catalog__link  "
                                  href="/search/category-fm-player/">اف ام
                                  پلیر</a>
                          </li>
                          {{--  بقیه لینک داداشاش  --}}
                      </ul>
                  </li>
              </ul>
          </div>
      </li>
  </ul>
</div>