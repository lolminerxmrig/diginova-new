@extends('layouts.customer.master')
@section('o-page__content')
  <section class="o-page__content">
    <div class="c-profile-list">
      <div class="o-box__tabs">
        <div class="o-box__tab js-ui-tab-pill is-active" data-tab-pill-id="favorites" data-current-page="1">
          کالاهای موردعلاقه
        </div>
        <div class="o-box__tab js-ui-tab-pill " data-tab-pill-id="observed" data-current-page="1">
          اطلاع‌رسانی‌ها
        </div>
      </div>
      <div class="c-profile-list__content js-ui-tab-content " data-tab-content-id="favorites">
        <div class="c-profile-list__container">
          <div class="c-profile-list__item-cart js-favorite-container">
            <div class="c-profile-list__item-card-thumb"><a href="https://www.digikala.com/product/dkp-769647/"
                                                            target="_blank"><img
                  src="https://dkstatics-public.digikala.com/digikala-products/3490996.jpg?x-oss-process=image/resize,m_fill,h_150,w_150/quality,q_60"
                  alt="هندزفری سلبریت مدل D1"></a></div>
            <div class="c-profile-list__item-card-content">
              <div class="c-profile-list__item-card-title"><a href="https://www.digikala.com/product/dkp-769647/"
                                                              target="_blank">
                  هندزفری سلبریت مدل D1
                </a>
                <div class="c-ui-more">
                  <div class="o-btn o-btn--icon-gray-md o-btn--l-more js-ui-see-more"></div>
                  <div class="c-ui-more__options js-ui-more-options">
                    <div class="c-ui-more__option c-ui-more__option--red js-remove-favorite-btn"
                         data-product-id="769647">حذف کالا
                    </div>
                  </div>
                </div>
              </div>
              <div class="c-profile-list__item-cart-price">
                <div class="c-new-price">
                  <div class="c-new-price__old-value">
                    <del>۵۱,۰۰۰</del>
                    <span class="c-new-price__discount">۱۲٪</span></div>
                  <div class="c-new-price__value">
                    ۴۴,۸۰۰
                    <span class="c-new-price__currency">تومان</span></div>
                </div>
              </div>
              <a href="https://www.digikala.com/product/dkp-769647/" target="_blank"
                 class="c-profile-list__item-cart-link">مشاهده محصول</a></div>
          </div>
          <div class="c-profile-list__item-cart js-favorite-container">
            <div class="c-profile-list__item-card-thumb"><a href="https://www.digikala.com/product/dkp-1492772/"
                                                            target="_blank"><img
                  src="https://dkstatics-public-2.digikala.com/digikala-products/110490415.jpg?x-oss-process=image/resize,m_fill,h_150,w_150/quality,q_60"
                  alt="هندزفری بلوتوث مدل SP01"></a></div>
            <div class="c-profile-list__item-card-content">
              <div class="c-profile-list__item-card-title"><a href="https://www.digikala.com/product/dkp-1492772/"
                                                              target="_blank">
                  هندزفری بلوتوث مدل SP01
                </a>
                <div class="c-ui-more">
                  <div class="o-btn o-btn--icon-gray-md o-btn--l-more js-ui-see-more"></div>
                  <div class="c-ui-more__options js-ui-more-options">
                    <div class="c-ui-more__option c-ui-more__option--red js-remove-favorite-btn"
                         data-product-id="1492772">حذف کالا
                    </div>
                  </div>
                </div>
              </div>
              <div class="c-profile-list__item-cart-price">
                <div class="c-new-price">
                  <div class="c-new-price__old-value"></div>
                  <div class="c-new-price__value">
                    ۳۶,۷۰۰
                    <span class="c-new-price__currency">تومان</span></div>
                </div>
              </div>
              <a href="https://www.digikala.com/product/dkp-1492772/" target="_blank"
                 class="c-profile-list__item-cart-link">مشاهده محصول</a></div>
          </div>
          <div class="c-profile-list__item-cart js-favorite-container">
            <div class="c-profile-list__item-card-thumb"><a href="https://www.digikala.com/product/dkp-310914/"
                                                            target="_blank"><img
                  src="https://dkstatics-public.digikala.com/digikala-products/3092427.jpg?x-oss-process=image/resize,m_fill,h_150,w_150/quality,q_60"
                  alt="هندزفری مدل EO-IG955"></a></div>
            <div class="c-profile-list__item-card-content">
              <div class="c-profile-list__item-card-title"><a href="https://www.digikala.com/product/dkp-310914/"
                                                              target="_blank">
                  هندزفری مدل EO-IG955
                </a>
                <div class="c-ui-more">
                  <div class="o-btn o-btn--icon-gray-md o-btn--l-more js-ui-see-more"></div>
                  <div class="c-ui-more__options js-ui-more-options">
                    <div class="c-ui-more__option c-ui-more__option--red js-remove-favorite-btn"
                         data-product-id="310914">حذف کالا
                    </div>
                  </div>
                </div>
              </div>
              <div class="c-profile-list__item-cart-price">
                <div class="c-new-price">
                  <div class="c-new-price__out-of-stock">
                    ناموجود
                  </div>
                </div>
              </div>
              <a href="https://www.digikala.com/product/dkp-310914/" target="_blank"
                 class="c-profile-list__item-cart-link">مشاهده محصول</a></div>
          </div>
        </div>
        <div class="c-pager"></div>
      </div>
      <div class="c-profile-list__content js-ui-tab-content u-hidden" data-tab-content-id="observed">
        <div class="c-profile-list__container">
          <div class="c-profile-list__item-cart js-notifier-container">
            <div class="c-profile-list__item-card-thumb"><a
                href="/product/dkp-1065482/%DA%A9%D9%81%D8%B4-%D9%86%D9%88%D8%B2%D8%A7%D8%AF%DB%8C-%DA%A9%D8%A7%D8%B1%D8%A7%D9%85%D9%84-%D9%85%D8%AF%D9%84-67793"
                target="_blank"><img
                  src="https://dkstatics-public.digikala.com/digikala-products/5039995.jpg?x-oss-process=image/resize,m_fill,h_150,w_150/quality,q_60"
                  alt="کفش نوزادی کارامل مدل 67793"></a></div>
            <div class="c-profile-list__item-card-content">
              <div class="c-profile-list__item-card-title"><a
                  href="/product/dkp-1065482/%DA%A9%D9%81%D8%B4-%D9%86%D9%88%D8%B2%D8%A7%D8%AF%DB%8C-%DA%A9%D8%A7%D8%B1%D8%A7%D9%85%D9%84-%D9%85%D8%AF%D9%84-67793"
                  target="_blank">
                  کفش نوزادی کارامل مدل 67793
                </a>
                <div class="c-ui-more">
                  <div class="o-btn o-btn--icon-gray-lg o-btn--l-more js-ui-see-more"></div>
                  <div class="c-ui-more__options js-ui-more-options">
                    <div class="c-ui-more__option js-remove-observation-btn" data-observed-product-id="32710014"
                         data-token="">
                      حذف اطلاع رسانی
                    </div>
                  </div>
                </div>
              </div>
              <div class="c-profile-list__item-notification-type">
                موجود شدن
              </div>
            </div>
          </div>
        </div>
        <div class="c-pager"></div>
      </div>
    </div>
  </section>
@endsection


@section('page-content')
@endsection

@section('script')
@endsection
