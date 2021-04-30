<div class="c-comments__container">
  @if ($product->ratings()->exists())
    <div class="c-comments__side-bar">
      <div class="c-comments__side-rating-container">
        <div class="c-comments__side-rating">
          <div class="c-comments__side-rating-main">{{ persianNum(round($product->ratings()->avg('score'), 1)) }}</div>
          <div class="c-comments__side-rating-desc">از ۵</div>
        </div>
        <div class="c-comments__side-rating-bottom">
          <div class="c-stars">
            <span class="c-stars__item"></span>
            <span class="c-stars__item"></span>
            <span class="c-stars__item"></span>
            <span class="c-stars__item"></span>
            <span class="c-stars__item"></span>
            <div class="c-stars__selected" style="width: {{ $product->ratings()->avg('score')*20 }}%">
              <span class="c-stars__item"></span>
              <span class="c-stars__item"></span>
              <span class="c-stars__item"></span>
              <span class="c-stars__item"></span>
              <span class="c-stars__item"></span>
            </div>
          </div>

          <div class="c-comments__side-rating-all">
            <?php
            $rating_sample = $product->ratings()->first();
            ?>
            از مجموع {{ persianNum($product->ratings()->where('rating_id', $rating_sample->id)->count()) }} امتیاز
          </div>

        </div>
      </div>

      <ul class="c-content-expert__rating">
        @foreach ($product->categories()->first()->ratings as $item)
          <li>
            <div class="c-content-expert__rating-title">{{ $item->name }}</div>
            <div class="c-content-expert__rating-value">
              <div class="c-rating c-rating--general js-rating">
                <div class="c-rating__rate js-rating-value" data-rate-value="{{ ($product->ratings()->where('rating_id', $item->id)->avg('score'))*20 }}%" style="width: 82%;"></div>
              </div>
              <span class="c-rating__overall-word">
              {{ persianNum(round($product->ratings()->where('rating_id', $item->id)->avg('score'), 1))  }}
            </span>
            </div>
          </li>
        @endforeach
      </ul>
      <div class="c-comments__add-comment-desc">دیدگاه خود را درباره این کالا بیان کنید</div>
      <a href="{{ route('front.createComment', [$product->product_code]) }}" data-product-id="{{ $product->product_code }}" class="o-btn o-btn--outlined-red-md o-btn--full-width js-add-new-comment">افزودن دیدگاه</a>
    </div>
  @endif
  <div class="c-comments__content-section">

    <div class="c-sort-row">
      <i class="c-icon-font c-icon-font--large  js-icon-font"
         data-icon="Icon-Action-Sort"
         data-icon-active="Icon-Action-Sort"
         data-icon-deactive=""></i>

      <span class="c-sort-row__text">مرتب‌سازی دیدگاه‌ها بر اساس:</span>
      <ul class="c-sort-row__items js-filter-items">
        <li class="c-sort-row__item">
          <a href="#" class="c-sort-row__label "
             data-sort-mode="newest_comment">
            جدیدترین دیدگاه‌ها
          </a>
        </li>
        <li class="c-sort-row__item">
          <a href="#" class="c-sort-row__label "
             data-sort-mode="most_liked">
            مفیدترین دیدگاه‌ها
          </a>
        </li>
        <li class="c-sort-row__item">
          <a href="#" class="c-sort-row__label "
             data-sort-mode="buyers">
            دیدگاه خریداران
          </a>
        </li>
      </ul>
    </div>

    <div id="product-comment-list">

      <div class="c-comments__list">
        @foreach($comments as $comment)

          <?php
            $advantages = json_decode($comment->advantages, true);
            $disadvantages = json_decode($comment->disadvantages, true);
          ?>

          <div class="c-comments__item c-comments__item--pdp">
          <div class="c-comments__row">
            <span class="c-comments__title">{{ $comment->title }}</span>
          </div>
          <div class="c-comments__row">
            <span class="c-comments__detail span-time" data-value="{{ $comment->published_at }}"></span>
            <span class="c-comments__detail">
              {{ ($comment->is_anonymous == 1)? 'کاربر ' . $fa_store_name : ((!is_null($comment->customer->first_name))? $comment->customer->first_name . ' ' . $comment->customer->last_name : 'کاربر ' . $fa_store_name) }}
            </span>

            <div class="c-comments__buyer-badge">خریدار</div>

          </div>

          @if((!is_null($comment->recommend_status)) || ($comment->recommend_status !== " "))
            <div class="c-comments__separator c-comments__separator--half"></div>
            <div class="c-comments__row">
              @if ($comment->recommend_status == 'recommended')
                <div class="c-comments__status c-comments__status--positive">خرید این محصول را توصیه می‌کنم</div>
              @elseif($comment->recommend_status == 'not_recommended')
                <div class="c-comments__status c-comments__status--negative">خرید این محصول را توصیه نمی‌کنم</div>
              @elseif($comment->recommend_status == 'not_idea')
                <div class="c-comments__status c-comments__status--not-sure">در مورد خرید این محصول مطمئن نیستم</div>
              @endif
            </div>
          @endif

          <div class="c-comments__row c-comments__row--grow c-comments__row--comment">
            <div class="c-comments__content">{{ $comment->text }}</div>
            @if((!is_null($advantages) && count($advantages)) || (!is_null($advantages) && count($advantages)))
              <div class="c-comments__separator c-comments__separator--half"></div>
              <div class="c-comments__modal-evaluation">
                @foreach($advantages as $advantage)
                  <div class="c-comments__modal-evaluation-item c-comments__modal-evaluation-item--positive">
                    {{ $advantage['value'] }}
                  </div>
                @endforeach

                @foreach($disadvantages as $disadvantage)
                  <div class="c-comments__modal-evaluation-item c-comments__modal-evaluation-item--negative">
{{--                    {{ $disadvantage['value'] }}--}}
                  </div>
                @endforeach
              </div>
            @endif
          </div>

          <div class="c-comments__separator c-comments__separator--half"></div>

          <div class="c-comments__row">
            <div class="c-comments__color">
              <span class="c-comments__color-circle" style="background-color: #212121"></span>
              مشکی
            </div>
            <a class="c-comments__seller">{{ $fa_store_name }}</a>
          </div>


          <div class="c-comments__row">
            <div class="c-comments__helpful">
              <div class="c-comments__helpful-question">آیا این دیدگاه برایتان مفید بود؟</div>
              <div class="c-comments__helpful-items js-comment-like-container is-modal">
                <div class="c-comments__helpful-yes  js-comment-like" data-comment="19789923">۰</div>
                <div class="c-comments__helpful-no  js-comment-dislike" data-comment="19789923"></div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      <div class="c-pager" id="comment-pagination">
        {{ $comments->links('front::ajax.product.layouts.commentPagination') }}
      </div>

    </div>
  </div>
</div>

<script src="{{ asset('staff/js/jalali-moment.browser.js') }}"></script>

<script>
  function persianNum() {
    String.prototype.toPersianDigits = function () {
      var id = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
      return this.replace(/[0-9]/g, function (w) {
        return id[+w]
      });
    }
  }

  function convertDate() {
    $(".span-time").each(function (){
      var output="";
      var input = $(this).data('value');
      var m = moment(input);
      if(m.isValid()){
        m.locale('fa');
        output = m.format("YYYY/M/D");
      }
      $(this).text(output.toPersianDigits());
    });
  }
  persianNum();
  convertDate();
</script>
