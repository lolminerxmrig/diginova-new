<nav class="js-breadcrumb ">
  <ul vocab="https://schema.org/" typeof="BreadcrumbList" class="c-breadcrumb">
    <li property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" href="https://www.digikala.com"><span property="name">فروشگاه اینترنتی دیجی‌کالا</span></a>
      <meta property="position" content="1">
    </li>
    <li><span property="name">کالای دیجیتال</span></li>
  </ul>
</nav>
<div class="c-listing js-listing">
  <div class="c-listing__counter">{{ persianNum($products->total()) }} کالا</div>
  <div class="c-listing__header">
    <ul class="c-listing__sort js-sort-options" data-label="مرتب‌سازی بر اساس :">
      <li class="">
        <a href="javascript:" data-sort="newest" class="is-active">جدیدترین</a>
      </li>
      <li class="">
        <a href="javascript:" data-sort="best_selling">پرفروش‌ترین‌</a>
      </li>
      <li class="">
        <a href="javascript:" data-sort="popular">محبوب‌ترین</a>
      </li>
      <li class="">
        <a href="javascript:" data-sort="cheapest">ارزان‌ترین</a>
      </li>
      <li class="">
        <a href="javascript:" data-sort="most_expensive">گران‌ترین</a>
      </li>
    </ul>
  </div>
  <ul class="c-listing__items js-plp-products-list">

    @foreach($products as $product)
      <li>
        <div class="c-product-box c-promotion-box js-product-box has-more is-plp">
          <div class="c-product-box__add-to-wish-list js-ab-add-to-wish-list u-hidden"></div>
          <a class="c-product-box__img c-promotion-box__image js-url js-product-item js-product-url"
             target="_blank" href="{{ route('front.productPage', $product->product_code) }}">
            @if (isset($product->variants) && has_promotion(variant_defualt($product)))
              <div style="" class="c-promotion__badge c-promotion__badge--special-sale ">
                فروش ویژه
              </div>
            @endif
            <div class="c-promotion__main-img-badges-container"></div>
            @if (!is_null(g_product_image_main_src($product)))
              <img src="{{ g_product_image_main_src($product) }}?x-oss-process=image/resize,m_lfit,h_600,w_600/quality,q_90" alt="{{ $product->title_fa }}">
            @else
              <img src="" alt="{{ $product->title_fa }}">
            @endif
          </a>
          <div class="c-product-box__content">
            <div class="c-product-box__content--row">
              <div class="c-product-box__title">
                <a class="js-product-url" href="{{ route('front.productPage', $product->product_code) }}" target="_blank">{{ $product->title_fa }}</a>
              </div>
              <div class="c-product-box__title-en"></div>
              @if (getProductVariantType($product) == 'color')
                <?php
                $main_mariants = [];
                foreach ($product->variants as $variant) {
                  $main_mariants[] = $variant->variant->value;
                }
                $main_mariants = array_unique($main_mariants);
                $count = 0;
                ?>
                <ul class="c-product-box__variants" data-title="رنگ ها:" data-more="{{ count($main_mariants) > 3 ? '+' : '' }}">
                  @foreach($main_mariants as $variantColor)
                    <li class="js-variant">
                      <span class="c-variant c-variant--color" style="background-color: {{ $variantColor }};border: 1px solid rgb(233, 233, 233);"></span>
                    </li>
                    <?php
                    $count++;
                    if ($count >= 3) break;
                    ?>
                  @endforeach
                </ul>
              @endif
            </div>
            <div class="c-product-box__rate-status" style="visibility: hidden">
              <div class="c-product-box__engagement-rating">
                ۳.۴
                <span class="c-product-box__engagement-rating-num">
                                  (۱۴۵)
                                </span>
              </div>
            </div>

            @if (isset($product->variants) && $product->variants()->where('stock_count', '>', 0)->count())
              <div class="c-product-box__row c-product-box__row--price">
                <div class="c-price">
                  <div class="c-price__value c-price__value--plp ">
                    @if (isset($product->variants) && has_promotion(variant_defualt($product)))
                      <del>{{ persianNum(number_format(toman(variant_defualt($product)->sale_price))) }}</del>
                      <div class="c-price__discount-oval">
                        <span>٪{{ persianNum(variantPromotionDefault(variant_defualt($product))->percent) }}</span>
                      </div>
                    @endif
                    <div class="c-price__value-wrapper">
                      {{ persianNum(number_format(toman(product_price($product)))) }}
                      <span class="c-price__currency">تومان</span>
                    </div>
                  </div>
                </div>
              </div>
            @else
              <div class="c-product-box__row c-product-box__row--price">
                <div class="c-price">
                  <div class="c-price__value c-price__value--plp "></div>
                </div>
                <div class="c-promotion-box__cover c-promotion-box__cover--out-of-stock">
                  <div class="c-promotion-box__cover-text js-product-status">ناموجود</div>
                </div>
              </div>
            @endif




            <div class="c-product-box__tags ">
              <div class="c-product-box__tags-container"></div>
              <ul class="c-product__seller-details c-product__seller-details--item">
                <li class="c-product__main-seller js-seller-text">
                  آرسیسل
                </li>
                <li class="c-product__main-guarantee">
                  گارانتی اصالت و سلامت فیزیکی کالا
                </li>
              </ul>
            </div>
          </div>
        </div>
      </li>
    @endforeach


  </ul>

  <div class="c-pager">
    <ul class="c-pager__items">


      <li class="js-pagination-item ">
        <a class="c-pager__item is-active" href="javascript:" data-page="1">۱</a>
      </li>
      <li class="js-pagination-item ">
        <a class="c-pager__item" href="http://diginova.test/ajax/search/category-mobile-phone?page=2" data-page="2">۲</a>
      </li>
      <li class="js-pagination-item ">
        <a class="c-pager__item" href="http://diginova.test/ajax/search/category-mobile-phone?page=3" data-page="3">۳</a>
      </li>

      <li class="js-pagination-item ">
        <a class="c-pager__next" href="http://diginova.test/search/category-mobile-phone?page=3" data-page="3"></a>
      </li>

    </ul>


  </div>
</div>
