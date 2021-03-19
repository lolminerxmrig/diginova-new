@extends('layouts.customer.master')
@section('o-page__content')
  <section class="o-page__content">
    <div class="o-box c-profile-comments">
      <div class="o-box__header"><span class="o-box__title">نظرات</span></div>
      <div class="o-box__tabs">
        <div class="o-box__tab js-ui-tab-pill is-active" data-tab-pill-id="products" data-current-page="1">
          در انتظار ثبت نظر
        </div>
        <div class="o-box__tab js-ui-tab-pill " data-tab-pill-id="comments" data-current-page="1">
          نظرات من
        </div>
      </div>
      <div class="c-profile-comments__wait-for-comment js-ui-tab-content " data-tab-content-id="products"><p
          class="c-profile-comments__wait-for-comment-title">
          نظرتان درباره کالاهایی که خریده‌اید چیست؟
        </p>
        <p class="c-profile-comments__wait-for-comment-dsc">
          با ثبت نظر در مورد کالاهای خریداری شده خود، ۵ امتیاز دیجی‌کلاب دریافت می‌کنید.
        </p>
        <div class="c-profile-comments__product-container">
          <div class="c-profile-comments__product-thumb"><img
              src="https://dkstatics-public.digikala.com/digikala-products/772786.jpg?x-oss-process=image/resize,m_lfit,h_150,w_150/quality,q_80"
              alt="test"></div>
          <div class="c-profile-comments__product-content">
            <div class="c-profile-comments__product-row">
              <div class="c-profile-comments__product-title">
                کابل برق سه پین آداپتور لپ تاپ 1.5 متری
              </div>
            </div>
            <div class="c-profile-comments__product-row c-profile-comments__product-row--reverse"><a
                href="/product/comment/dkp-415999" class="c-profile-comments__to-comment-link">
                ثبت دیدگاه
              </a></div>
          </div>
        </div>
        <div class="c-profile-comments__product-container">
          <div class="c-profile-comments__product-thumb"><img
              src="https://dkstatics-public.digikala.com/digikala-products/697655.jpg?x-oss-process=image/resize,m_lfit,h_150,w_150/quality,q_80"
              alt="test"></div>
          <div class="c-profile-comments__product-content">
            <div class="c-profile-comments__product-row">
              <div class="c-profile-comments__product-title">
                شارژر لپ تاپ 20 ولت 3.25 آمپر مدل ADLX65NLC2A
              </div>
            </div>
            <div class="c-profile-comments__product-row c-profile-comments__product-row--reverse"><a
                href="/product/comment/dkp-118046" class="c-profile-comments__to-comment-link">
                ثبت دیدگاه
              </a></div>
          </div>
        </div>
        <section class="c-pager"></section>
      </div>
      <div class="c-profile-comments__comment-history js-ui-tab-content  u-hidden" data-tab-content-id="comments">
        <div class="c-profile-comments__product-container">
          <div class="c-profile-comments__product-thumb"><a
              href="/product/dkp-3784517/%D9%84%D9%BE-%D8%AA%D8%A7%D9%BE-13-%D8%A7%DB%8C%D9%86%DA%86%DB%8C-%D8%A7%D9%BE%D9%84-%D9%85%D8%AF%D9%84-macbook-pro-myd82-2020-%D9%87%D9%85%D8%B1%D8%A7%D9%87-%D8%A8%D8%A7-%D8%AA%D8%A7%DA%86-%D8%A8%D8%A7%D8%B1"><img
                src="https://dkstatics-public.digikala.com/digikala-products/fb5ac01262f2b1988fa8eeb29f966e81583b3969_1605620114.jpg?x-oss-process=image/resize,m_fill,h_150,w_150/quality,q_60"
                alt=" لپ تاپ 13 اینچی اپل مدل MacBook Pro MYD82 2020 همراه با تاچ بار "></a></div>
          <div class="c-profile-comments__product-content">
            <div class="c-profile-comments__product-row">
              <div class="c-profile-comments__product-title">
                تست
              </div>
              <div class="c-profile-comments__actions">
                <div class="c-profile-comments__status c-profile-comments__status--rejected">
                  تایید نشده
                </div>
                <div class="c-ui-more">
                  <div class="o-btn o-btn--icon-gray-md o-btn--l-more js-ui-see-more"></div>
                  <div class="c-ui-more__options js-ui-more-options" style="display: none;">
                    <div class="c-ui-more__option c-ui-more__option--red js-remove-comment-btn"
                         data-edit-url="/product/comment/dkp-3784517" data-id="18500536" data-token="">حذف نظر
                    </div>
                    <a class="c-ui-more__option c-ui-more__option js-ga-edit-comment-btn"
                       href="/product/comment/dkp-3784517" data-edit-url="/product/comment/dkp-3784517">ویرایش نظر</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-profile-comments__product-row c-profile-comments__product-row--align-start">
              <div class="c-rate-box c-rate-box--normal">
                ۲.۴
              </div>
              <span class="c-profile-comments__spacer-dot"></span></div>
            <div class="c-profile-comments__product-row c-profile-comments__product-row--align-start"><p
                class="c-profile-comments__text">
                تست.......
              </p></div>
            <div
              class="c-profile-comments__product-row c-profile-comments__product-row--align-start c-profile-comments__product-row--no-margin"></div>
          </div>
        </div>
        <div class="c-profile-comments__product-container">
          <div class="c-profile-comments__product-thumb"><a
              href="/product/dkp-222934/%D8%AF%D9%88%D8%B1%D8%A8%DB%8C%D9%86-%D8%AF%DB%8C%D8%AC%DB%8C%D8%AA%D8%A7%D9%84-%DA%A9%D8%A7%D9%86%D9%86-%D9%85%D8%AF%D9%84-eos-5d-mark-iv-%D8%A8%D9%87-%D9%87%D9%85%D8%B1%D8%A7%D9%87-%D9%84%D9%86%D8%B2-24-105-%D9%85%DB%8C%D9%84%DB%8C-%D9%85%D8%AA%D8%B1-f4-l-is-ii"><img
                src="https://dkstatics-public.digikala.com/digikala-products/638044.jpg?x-oss-process=image/resize,m_fill,h_150,w_150/quality,q_60"
                alt="دوربین دیجیتال کانن مدل EOS 5D Mark IV به همراه لنز 24-105 میلی متر F4 L IS II"></a></div>
          <div class="c-profile-comments__product-content">
            <div class="c-profile-comments__product-row">
              <div class="c-profile-comments__product-title">
                عالیع
              </div>
              <div class="c-profile-comments__actions">
                <div class="c-profile-comments__status c-profile-comments__status--rejected">
                  تایید نشده
                </div>
                <div class="c-ui-more">
                  <div class="o-btn o-btn--icon-gray-md o-btn--l-more js-ui-see-more"></div>
                  <div class="c-ui-more__options js-ui-more-options" style="display: none;">
                    <div class="c-ui-more__option c-ui-more__option--red js-remove-comment-btn"
                         data-edit-url="/product/comment/dkp-222934" data-id="18008589" data-token="">حذف نظر
                    </div>
                    <a class="c-ui-more__option c-ui-more__option js-ga-edit-comment-btn"
                       href="/product/comment/dkp-222934" data-edit-url="/product/comment/dkp-222934">ویرایش نظر</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-profile-comments__product-row c-profile-comments__product-row--align-start">
              <div class="c-rate-box c-rate-box--ok">
                ۴
              </div>
              <span class="c-profile-comments__spacer-dot"></span></div>
            <div class="c-profile-comments__product-row c-profile-comments__product-row--align-start"><p
                class="c-profile-comments__text">
                عالیه
              </p></div>
            <div
              class="c-profile-comments__product-row c-profile-comments__product-row--align-start c-profile-comments__product-row--no-margin"></div>
          </div>
        </div>
        <section class="c-pager"></section>
      </div>
    </div>
  </section>
@endsection


@section('page-content')
@endsection

@section('script')
@endsection
