@extends('marketplace.layouts.app')
@section('title')
@endsection

@section('content')
<!-- Header End -->
<!-- Banner Slider v2 End-->
<section class="banner__slider__section__v2 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="swiper main__mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-12">
                                    <div class="swiper-slide">
                                        <div class="single__slide__wrapper"
                                            style="background-image: url('assets/images/banner/banner-main-01.png')">
                                            <div class="hero__wrapper text-left">
                                                <h5 class="hero__subtitle">Limited offer 25% off</h5>
                                                <h1 class="hero__title">
                                                    Infiniium Real-Time <br> Oscilloscopes
                                                </h1>
                                                <p class="hero__content">Save 25% at Calibration Telkom</p>
                                                <div class="hero__btn">
                                                    <a href="product.html" class="btn btn-primary">Calibration
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-12">
                                    <div class="swiper-slide">
                                        <div class="single__slide__wrapper"
                                            style="background-image: url('assets/images/banner/banner-main-02.png')">
                                            <div class="hero__wrapper text-left">
                                                <h5 class="hero__subtitle">About Calista</h5>
                                                <h3 class="hero__title">
                                                    No. 1 Marketplace in <br> Indonesia.
                                                </h3>
                                                <h5 class="hero__content">For Calibration & Testing</h5>
                                                <div class="hero__btn">
                                                    <a href="/" class="btn btn-primary">Explore More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner__navigation">
                        <div class="swiper-button-next">
                            <svg width="35" height="16" viewBox="0 0 35 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 8L34 8" stroke="#D0D5DD" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M27 1L34 8L27 15" stroke="#D0D5DD" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="swiper-button-prev">
                            <svg width="23" height="16" viewBox="0 0 23 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 8H1" stroke="#D0D5DD" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M8 15L1 8L8 1" stroke="#D0D5DD" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="hero__banner__ads">
                    <div class="banner__ads__wrapper banner__ads__wrapper__v2">
                        <div class="banner__ads__single__item">
                            <span class="banner__ads__subtitle">Weekend Discount 20%</span>
                            <h5 class="banner__ads__title">
                                InfiniiVision Real<br />
                                Oscilloscopes
                            </h5>
                            <div class="shop__btn">
                                <a href="product.html" class="btn btn-primary">Calibration Now</a>
                            </div>
                        </div>
                        <div class="banner__ads__image">
                            <img src="assets/images/bannera/01.png" alt="banner-ads-image" />
                        </div>
                    </div>
                    <div class="banner__ads__wrapper banner__ads__wrapper__v2">
                        <div class="banner__ads__single__item">
                            <span class="banner__ads__subtitle">Sale 25% Off</span>
                            <h5 class="banner__ads__title">
                                Infiniium Real <br />
                                Oscilloscopes
                            </h5>
                            <div class="shop__btn">
                                <a href="product.html" class="btn btn-primary btn-green">Calibration now</a>
                            </div>
                        </div>
                        <div class="banner__ads__image">
                            <img src="assets/images/bannera/02.png" alt="banner-ads-image" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Slider v2 End-->

<!-- Feature Section Start -->
<section class="feature__section">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="feature__single__item" data-bg="#ECFDF3">
                    <div class="feature__image">
                        <img src="assets/images/feature/feature-01.png" alt="feature-image" />
                    </div>
                    <div class="feature__content">
                        <h4 class="feature__title">Mega Discounts</h4>
                        <p>When sign up</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="feature__single__item" data-bg="#FFFAEB">
                    <div class="feature__image">
                        <img src="assets/images/feature/feature-02.png" alt="feature-image" />
                    </div>
                    <div class="feature__content">
                        <h4 class="feature__title">Free Delivery</h4>
                        <p>24/7 amazing services</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="feature__single__item" data-bg="#F9F5FF">
                    <div class="feature__image">
                        <img src="assets/images/feature/feature-03.png" alt="feature-image" />
                    </div>
                    <div class="feature__content">
                        <h4 class="feature__title">Secured Payment</h4>
                        <p>We accept all credit cards</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="feature__single__item" data-bg="#FEF3F2">
                    <div class="feature__image">
                        <img src="assets/images/feature/feature-04.png" alt="feature-image" />
                    </div>
                    <div class="feature__content">
                        <h4 class="feature__title">Easy Returns</h4>
                        <p>30-days free return policy</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feature Section End -->

<!-- Arrival Section Start -->
<section class="arrival__section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>New Arrivals</h2>
                    <div class="tabs__wrapper">
                        <div class="tabs__filter text-center">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home-tab-pane" type="button" role="tab"
                                        aria-controls="home-tab-pane" aria-selected="true">
                                        ALL
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="groceries-tab" data-bs-toggle="tab" data-bs-target="#"
                                        type="button" role="tab" aria-controls="groceries-tab-pane"
                                        aria-selected="false">
                                        Fiber Optic
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="women-tab" data-bs-toggle="tab" data-bs-target="#"
                                        type="button" role="tab" aria-controls="women-tab-pane" aria-selected="false">
                                        Time & Frequency
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="electronics-tab" data-bs-toggle="tab"
                                        data-bs-target="#" type="button" role="tab" aria-controls="electronics-tab-pane"
                                        aria-selected="false">
                                        Electricity
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                        tabindex="0">
                        <div class="content__body">
                            <div class="product__wrapper swiper__pagination">
                                <div class="swiper arrival__Swiper">
                                    <div class="swiper-wrapper">
                                        @foreach ( $arrival as $i=> $arrival )
                                        <div class="swiper-slide">
                                            <div class="product-card">
                                                <div class="product__image__wrapper">
                                                    <a href="/product/{{ $arrival->slug_product }}"
                                                        class="product__image">
                                                        <img src="{{ url('storage/product/'.'fotocover_'.$arrival->name_product.'.png')}}"
                                                            alt="icon" />
                                                    </a>
                                                    @if($arrival->price_min != NULL)
                                                    <div class="badge">{{
                                                        number_format(($arrival->price_before-$arrival->price_min)/($arrival->price_before)*100)
                                                        }} %
                                                    </div>
                                                    @else
                                                    @endif
                                                </div>
                                                <div class="product__content">
                                                    <div class="row">
                                                        <div class="col-1" style="padding-left: 5px;">
                                                            <div class="profile__card__avater" style="width: 30px;">
                                                                <img src="https://www.telkom.co.id/data/image_upload/page/1594112895830_compress_PNG%20Icon%20Telkom.png"
                                                                    alt="feature-image">
                                                            </div>
                                                        </div>
                                                        <div class="col-10"
                                                            style="padding-left: 16px; font-size:small;">
                                                            {{ $arrival->laboratorium->nama_lab }}
                                                        </div>
                                                    </div>
                                                    <div class="product__rating">
                                                        <ul>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-regular fa-star"></i></li>
                                                        </ul>
                                                        <div class="total__rating">(321)</div>
                                                    </div>
                                                    <div class="product__title">
                                                        <h5><a href="/product/{{ $arrival->slug_product }}">{{
                                                                $arrival->name_product}}</a></h5>
                                                    </div>
                                                    <del style="font-size: small">@if ($arrival->price_before !=
                                                        NULL)
                                                        Rp. {{ number_format($arrival->price_before) }}
                                                        @endif</del>
                                                    <br />
                                                    <div class="product__bottom">
                                                        <div class="product__price">

                                                            @if($arrival->price_min != NULL)
                                                            Rp. {{ number_format($arrival->price_min) }}
                                                            @if($arrival->price_max != NULL)
                                                            - {{
                                                            number_format($arrival->price_max) }}
                                                            @else()

                                                            @endif
                                                            @else()
                                                            Rp. {{ number_format($arrival->price_before) }}
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="mt-10">
                                                            <a href="/product/{{ $arrival->slug_product }}"
                                                                class="btn btn-primary">
                                                                Product Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="swiper-button-next">
                                            <svg width="35" height="16" viewBox="0 0 35 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 8L34 8" stroke="#D0D5DD" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M27 1L34 8L27 15" stroke="#D0D5DD" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="swiper-button-prev">
                                        <svg width="23" height="16" viewBox="0 0 23 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22 8H1" stroke="#D0D5DD" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M8 15L1 8L8 1" stroke="#D0D5DD" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Ini Tab produk Arrival --}}
                    {{-- <div class="tab-pane fade" id="groceries-tab-pane" role="tabpanel"
                        aria-labelledby="groceries-tab" tabindex="0">
                        <div class="content__body">
                            <div class="product__wrapper swiper__pagination">
                                <div class="swiper arrival__Swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="product-card">
                                                <div class="product__image__wrapper">
                                                    <a href="/product/{{ $arrival->slug_product }}"
                                                        class="product__image">
                                                        <img src="assets/images/arrival/arrival-01.png" alt="icon" />
                                                    </a>
                                                    <div class="badge">10%</div>
                                                    <div class="product__actions">
                                                        <a href="#" class="action__btn">
                                                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M13.8931 2.07333C13.5526 1.73267 13.1483 1.46243 12.7033 1.27805C12.2584 1.09368 11.7814 0.998779 11.2998 0.998779C10.8181 0.998779 10.3412 1.09368 9.89618 1.27805C9.45121 1.46243 9.04692 1.73267 8.70642 2.07333L7.99975 2.78L7.29309 2.07333C6.60529 1.38553 5.67244 0.999136 4.69975 0.999136C3.72706 0.999136 2.79422 1.38553 2.10642 2.07333C1.41863 2.76112 1.03223 3.69397 1.03223 4.66666C1.03223 5.63935 1.41863 6.5722 2.10642 7.26L2.81309 7.96666L7.99975 13.1533L13.1864 7.96666L13.8931 7.26C14.2337 6.91949 14.504 6.51521 14.6884 6.07023C14.8727 5.62526 14.9676 5.14832 14.9676 4.66666C14.9676 4.185 14.8727 3.70807 14.6884 3.26309C14.504 2.81812 14.2337 2.41383 13.8931 2.07333V2.07333Z"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </a>
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#prod__preview" class="action__btn">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.666992 7.99996C0.666992 7.99996 3.33366 2.66663 8.00033 2.66663C12.667 2.66663 15.3337 7.99996 15.3337 7.99996C15.3337 7.99996 12.667 13.3333 8.00033 13.3333C3.33366 13.3333 0.666992 7.99996 0.666992 7.99996Z"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path
                                                                    d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </a>
                                                        <a href="#" class="action__btn">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10 9.33329L13.3333 5.99996L10 2.66663"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path
                                                                    d="M2.66699 13.3333V8.66667C2.66699 7.95942 2.94794 7.28115 3.44804 6.78105C3.94814 6.28095 4.62641 6 5.33366 6H13.3337"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product__content">
                                                    <div class="product__rating">
                                                        <ul>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-regular fa-star"></i></li>
                                                        </ul>
                                                        <div class="total__rating">(321)</div>
                                                    </div>
                                                    <div class="product__title">
                                                        <h5><a href="/product/{{ $arrival->slug_product }}">Tootsie
                                                                Frooties- Taffy
                                                                Candy - Bulk Fruit Chews - Fruity Roll Fruity
                                                                Roll</a></h5>
                                                    </div>
                                                    <div class="product__bottom">
                                                        <div class="product__price">
                                                            $22.00
                                                            <del>$22.00</del>
                                                        </div>
                                                        <div class="cart__action__btn">
                                                            <div class="cart__btn">
                                                                <a href="#" class="btn btn-outline">Add to cart</a>
                                                            </div>
                                                            <div class="quantity cart__quantity">
                                                                <button type="button" class="decressQnt">
                                                                    <span class="bar"></span>
                                                                </button>
                                                                <input class="qnttinput" type="number" disabled
                                                                    value="0" min="01" max="100" />
                                                                <button type="button" class="incressQnt">
                                                                    <span class="bar"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-card">
                                                <div class="product__image__wrapper">
                                                    <a href="/product/{{ $arrival->slug_product }}"
                                                        class="product__image">
                                                        <img src="assets/images/arrival/arrival-02.png" alt="icon" />
                                                    </a>
                                                    <div class="badge">30%</div>
                                                    <div class="product__actions">
                                                        <a href="#" class="action__btn">
                                                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M13.8931 2.07333C13.5526 1.73267 13.1483 1.46243 12.7033 1.27805C12.2584 1.09368 11.7814 0.998779 11.2998 0.998779C10.8181 0.998779 10.3412 1.09368 9.89618 1.27805C9.45121 1.46243 9.04692 1.73267 8.70642 2.07333L7.99975 2.78L7.29309 2.07333C6.60529 1.38553 5.67244 0.999136 4.69975 0.999136C3.72706 0.999136 2.79422 1.38553 2.10642 2.07333C1.41863 2.76112 1.03223 3.69397 1.03223 4.66666C1.03223 5.63935 1.41863 6.5722 2.10642 7.26L2.81309 7.96666L7.99975 13.1533L13.1864 7.96666L13.8931 7.26C14.2337 6.91949 14.504 6.51521 14.6884 6.07023C14.8727 5.62526 14.9676 5.14832 14.9676 4.66666C14.9676 4.185 14.8727 3.70807 14.6884 3.26309C14.504 2.81812 14.2337 2.41383 13.8931 2.07333V2.07333Z"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </a>
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#prod__preview" class="action__btn">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.666992 7.99996C0.666992 7.99996 3.33366 2.66663 8.00033 2.66663C12.667 2.66663 15.3337 7.99996 15.3337 7.99996C15.3337 7.99996 12.667 13.3333 8.00033 13.3333C3.33366 13.3333 0.666992 7.99996 0.666992 7.99996Z"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path
                                                                    d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </a>
                                                        <a href="#" class="action__btn">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10 9.33329L13.3333 5.99996L10 2.66663"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path
                                                                    d="M2.66699 13.3333V8.66667C2.66699 7.95942 2.94794 7.28115 3.44804 6.78105C3.94814 6.28095 4.62641 6 5.33366 6H13.3337"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product__content">
                                                    <div class="product__rating">
                                                        <ul>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-regular fa-star"></i></li>
                                                        </ul>
                                                        <div class="total__rating">(321)</div>
                                                    </div>
                                                    <div class="product__title">
                                                        <h5><a href="/product/{{ $arrival->slug_product }}">Tootsie
                                                                Frooties- Taffy
                                                                Candy - Bulk Fruit Chews - Fruity Roll Fruity
                                                                Roll</a></h5>
                                                    </div>
                                                    <div class="product__bottom">
                                                        <div class="product__price">
                                                            $22.00
                                                            <del>$22.00</del>
                                                        </div>
                                                        <div class="cart__action__btn">
                                                            <div class="cart__btn">
                                                                <a href="#" class="btn btn-outline">Add to cart</a>
                                                            </div>
                                                            <div class="quantity cart__quantity">
                                                                <button type="button" class="decressQnt">
                                                                    <span class="bar"></span>
                                                                </button>
                                                                <input class="qnttinput" type="number" disabled
                                                                    value="0" min="01" max="100" />
                                                                <button type="button" class="incressQnt">
                                                                    <span class="bar"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-card">
                                                <div class="product__image__wrapper">
                                                    <a href="/product/{{ $arrival->slug_product }}"
                                                        class="product__image">
                                                        <img src="assets/images/arrival/arrival-03.png" alt="icon" />
                                                    </a>
                                                    <div class="badge">10%</div>
                                                    <div class="product__actions">
                                                        <a href="#" class="action__btn">
                                                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M13.8931 2.07333C13.5526 1.73267 13.1483 1.46243 12.7033 1.27805C12.2584 1.09368 11.7814 0.998779 11.2998 0.998779C10.8181 0.998779 10.3412 1.09368 9.89618 1.27805C9.45121 1.46243 9.04692 1.73267 8.70642 2.07333L7.99975 2.78L7.29309 2.07333C6.60529 1.38553 5.67244 0.999136 4.69975 0.999136C3.72706 0.999136 2.79422 1.38553 2.10642 2.07333C1.41863 2.76112 1.03223 3.69397 1.03223 4.66666C1.03223 5.63935 1.41863 6.5722 2.10642 7.26L2.81309 7.96666L7.99975 13.1533L13.1864 7.96666L13.8931 7.26C14.2337 6.91949 14.504 6.51521 14.6884 6.07023C14.8727 5.62526 14.9676 5.14832 14.9676 4.66666C14.9676 4.185 14.8727 3.70807 14.6884 3.26309C14.504 2.81812 14.2337 2.41383 13.8931 2.07333V2.07333Z"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </a>
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#prod__preview" class="action__btn">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.666992 7.99996C0.666992 7.99996 3.33366 2.66663 8.00033 2.66663C12.667 2.66663 15.3337 7.99996 15.3337 7.99996C15.3337 7.99996 12.667 13.3333 8.00033 13.3333C3.33366 13.3333 0.666992 7.99996 0.666992 7.99996Z"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path
                                                                    d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </a>
                                                        <a href="#" class="action__btn">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10 9.33329L13.3333 5.99996L10 2.66663"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path
                                                                    d="M2.66699 13.3333V8.66667C2.66699 7.95942 2.94794 7.28115 3.44804 6.78105C3.94814 6.28095 4.62641 6 5.33366 6H13.3337"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product__content">
                                                    <div class="product__rating">
                                                        <ul>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-regular fa-star"></i></li>
                                                        </ul>
                                                        <div class="total__rating">(321)</div>
                                                    </div>
                                                    <div class="product__title">
                                                        <h5><a href="/product/{{ $arrival->slug_product }}">Tootsie
                                                                Frooties- Taffy
                                                                Candy - Bulk Fruit Chews - Fruity Roll Fruity
                                                                Roll</a></h5>
                                                    </div>
                                                    <div class="product__bottom">
                                                        <div class="product__price">
                                                            $22.00
                                                            <del>$22.00</del>
                                                        </div>
                                                        <div class="cart__action__btn">
                                                            <div class="cart__btn">
                                                                <a href="#" class="btn btn-outline">Add to cart</a>
                                                            </div>
                                                            <div class="quantity cart__quantity">
                                                                <button type="button" class="decressQnt">
                                                                    <span class="bar"></span>
                                                                </button>
                                                                <input class="qnttinput" type="number" disabled
                                                                    value="0" min="01" max="100" />
                                                                <button type="button" class="incressQnt">
                                                                    <span class="bar"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-card">
                                                <div class="product__image__wrapper">
                                                    <a href="/product/{{ $arrival->slug_product }}"
                                                        class="product__image">
                                                        <img src="assets/images/arrival/arrival-04.png" alt="icon" />
                                                    </a>
                                                    <div class="badge">10%</div>
                                                    <div class="product__actions">
                                                        <a href="#" class="action__btn">
                                                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M13.8931 2.07333C13.5526 1.73267 13.1483 1.46243 12.7033 1.27805C12.2584 1.09368 11.7814 0.998779 11.2998 0.998779C10.8181 0.998779 10.3412 1.09368 9.89618 1.27805C9.45121 1.46243 9.04692 1.73267 8.70642 2.07333L7.99975 2.78L7.29309 2.07333C6.60529 1.38553 5.67244 0.999136 4.69975 0.999136C3.72706 0.999136 2.79422 1.38553 2.10642 2.07333C1.41863 2.76112 1.03223 3.69397 1.03223 4.66666C1.03223 5.63935 1.41863 6.5722 2.10642 7.26L2.81309 7.96666L7.99975 13.1533L13.1864 7.96666L13.8931 7.26C14.2337 6.91949 14.504 6.51521 14.6884 6.07023C14.8727 5.62526 14.9676 5.14832 14.9676 4.66666C14.9676 4.185 14.8727 3.70807 14.6884 3.26309C14.504 2.81812 14.2337 2.41383 13.8931 2.07333V2.07333Z"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </a>
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#prod__preview" class="action__btn">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.666992 7.99996C0.666992 7.99996 3.33366 2.66663 8.00033 2.66663C12.667 2.66663 15.3337 7.99996 15.3337 7.99996C15.3337 7.99996 12.667 13.3333 8.00033 13.3333C3.33366 13.3333 0.666992 7.99996 0.666992 7.99996Z"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path
                                                                    d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </a>
                                                        <a href="#" class="action__btn">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10 9.33329L13.3333 5.99996L10 2.66663"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path
                                                                    d="M2.66699 13.3333V8.66667C2.66699 7.95942 2.94794 7.28115 3.44804 6.78105C3.94814 6.28095 4.62641 6 5.33366 6H13.3337"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product__content">
                                                    <div class="product__rating">
                                                        <ul>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-regular fa-star"></i></li>
                                                        </ul>
                                                        <div class="total__rating">(321)</div>
                                                    </div>
                                                    <div class="product__title">
                                                        <h5><a href="/product/{{ $arrival->slug_product }}">Tootsie
                                                                Frooties- Taffy
                                                                Candy - Bulk Fruit Chews - Fruity Roll Fruity
                                                                Roll</a></h5>
                                                    </div>
                                                    <div class="product__bottom">
                                                        <div class="product__price">
                                                            $22.00
                                                            <del>$22.00</del>
                                                        </div>
                                                        <div class="cart__action__btn">
                                                            <div class="cart__btn">
                                                                <a href="#" class="btn btn-outline">Add to cart</a>
                                                            </div>
                                                            <div class="quantity cart__quantity">
                                                                <button type="button" class="decressQnt">
                                                                    <span class="bar"></span>
                                                                </button>
                                                                <input class="qnttinput" type="number" disabled
                                                                    value="0" min="01" max="100" />
                                                                <button type="button" class="incressQnt">
                                                                    <span class="bar"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-card">
                                                <div class="product__image__wrapper">
                                                    <a href="/product/{{ $arrival->slug_product }}"
                                                        class="product__image">
                                                        <img src="assets/images/arrival/arrival-05.png" alt="icon" />
                                                    </a>
                                                    <div class="badge">10%</div>
                                                    <div class="product__actions">
                                                        <a href="#" class="action__btn">
                                                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M13.8931 2.07333C13.5526 1.73267 13.1483 1.46243 12.7033 1.27805C12.2584 1.09368 11.7814 0.998779 11.2998 0.998779C10.8181 0.998779 10.3412 1.09368 9.89618 1.27805C9.45121 1.46243 9.04692 1.73267 8.70642 2.07333L7.99975 2.78L7.29309 2.07333C6.60529 1.38553 5.67244 0.999136 4.69975 0.999136C3.72706 0.999136 2.79422 1.38553 2.10642 2.07333C1.41863 2.76112 1.03223 3.69397 1.03223 4.66666C1.03223 5.63935 1.41863 6.5722 2.10642 7.26L2.81309 7.96666L7.99975 13.1533L13.1864 7.96666L13.8931 7.26C14.2337 6.91949 14.504 6.51521 14.6884 6.07023C14.8727 5.62526 14.9676 5.14832 14.9676 4.66666C14.9676 4.185 14.8727 3.70807 14.6884 3.26309C14.504 2.81812 14.2337 2.41383 13.8931 2.07333V2.07333Z"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </a>
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#prod__preview" class="action__btn">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.666992 7.99996C0.666992 7.99996 3.33366 2.66663 8.00033 2.66663C12.667 2.66663 15.3337 7.99996 15.3337 7.99996C15.3337 7.99996 12.667 13.3333 8.00033 13.3333C3.33366 13.3333 0.666992 7.99996 0.666992 7.99996Z"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path
                                                                    d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </a>
                                                        <a href="#" class="action__btn">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10 9.33329L13.3333 5.99996L10 2.66663"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path
                                                                    d="M2.66699 13.3333V8.66667C2.66699 7.95942 2.94794 7.28115 3.44804 6.78105C3.94814 6.28095 4.62641 6 5.33366 6H13.3337"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product__content">
                                                    <div class="product__rating">
                                                        <ul>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-regular fa-star"></i></li>
                                                        </ul>
                                                        <div class="total__rating">(321)</div>
                                                    </div>
                                                    <div class="product__title">
                                                        <h5><a href="/product/{{ $arrival->slug_product }}">Tootsie
                                                                Frooties- Taffy
                                                                Candy - Bulk Fruit Chews - Fruity Roll Fruity
                                                                Roll</a></h5>
                                                    </div>
                                                    <div class="product__bottom">
                                                        <div class="product__price">
                                                            $22.00
                                                            <del>$22.00</del>
                                                        </div>
                                                        <div class="cart__action__btn">
                                                            <div class="cart__btn">
                                                                <a href="#" class="btn btn-outline">Add to cart</a>
                                                            </div>
                                                            <div class="quantity cart__quantity">
                                                                <button type="button" class="decressQnt">
                                                                    <span class="bar"></span>
                                                                </button>
                                                                <input class="qnttinput" type="number" disabled
                                                                    value="0" min="01" max="100" />
                                                                <button type="button" class="incressQnt">
                                                                    <span class="bar"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-card">
                                                <div class="product__image__wrapper">
                                                    <a href="/product/{{ $arrival->slug_product }}"
                                                        class="product__image">
                                                        <img src="assets/images/arrival/arrival-03.png" alt="icon" />
                                                    </a>
                                                    <div class="badge">10%</div>
                                                    <div class="product__actions">
                                                        <a href="#" class="action__btn">
                                                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M13.8931 2.07333C13.5526 1.73267 13.1483 1.46243 12.7033 1.27805C12.2584 1.09368 11.7814 0.998779 11.2998 0.998779C10.8181 0.998779 10.3412 1.09368 9.89618 1.27805C9.45121 1.46243 9.04692 1.73267 8.70642 2.07333L7.99975 2.78L7.29309 2.07333C6.60529 1.38553 5.67244 0.999136 4.69975 0.999136C3.72706 0.999136 2.79422 1.38553 2.10642 2.07333C1.41863 2.76112 1.03223 3.69397 1.03223 4.66666C1.03223 5.63935 1.41863 6.5722 2.10642 7.26L2.81309 7.96666L7.99975 13.1533L13.1864 7.96666L13.8931 7.26C14.2337 6.91949 14.504 6.51521 14.6884 6.07023C14.8727 5.62526 14.9676 5.14832 14.9676 4.66666C14.9676 4.185 14.8727 3.70807 14.6884 3.26309C14.504 2.81812 14.2337 2.41383 13.8931 2.07333V2.07333Z"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </a>
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#prod__preview" class="action__btn">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.666992 7.99996C0.666992 7.99996 3.33366 2.66663 8.00033 2.66663C12.667 2.66663 15.3337 7.99996 15.3337 7.99996C15.3337 7.99996 12.667 13.3333 8.00033 13.3333C3.33366 13.3333 0.666992 7.99996 0.666992 7.99996Z"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path
                                                                    d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </a>
                                                        <a href="#" class="action__btn">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10 9.33329L13.3333 5.99996L10 2.66663"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path
                                                                    d="M2.66699 13.3333V8.66667C2.66699 7.95942 2.94794 7.28115 3.44804 6.78105C3.94814 6.28095 4.62641 6 5.33366 6H13.3337"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product__content">
                                                    <div class="product__rating">
                                                        <ul>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-regular fa-star"></i></li>
                                                        </ul>
                                                        <div class="total__rating">(321)</div>
                                                    </div>
                                                    <div class="product__title">
                                                        <h5><a href="/product/{{ $arrival->slug_product }}">Tootsie
                                                                Frooties- Taffy
                                                                Candy - Bulk Fruit Chews - Fruity Roll Fruity
                                                                Roll</a></h5>
                                                    </div>
                                                    <div class="product__bottom">
                                                        <div class="product__price">
                                                            $22.00
                                                            <del>$22.00</del>
                                                        </div>
                                                        <div class="cart__action__btn">
                                                            <div class="cart__btn">
                                                                <a href="#" class="btn btn-outline">Add to cart</a>
                                                            </div>
                                                            <div class="quantity cart__quantity">
                                                                <button type="button" class="decressQnt">
                                                                    <span class="bar"></span>
                                                                </button>
                                                                <input class="qnttinput" type="number" disabled
                                                                    value="0" min="01" max="100" />
                                                                <button type="button" class="incressQnt">
                                                                    <span class="bar"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-card">
                                                <div class="product__image__wrapper">
                                                    <a href="/product/{{ $arrival->slug_product }}"
                                                        class="product__image">
                                                        <img src="assets/images/arrival/arrival-04.png" alt="icon" />
                                                    </a>
                                                    <div class="badge">10%</div>
                                                    <div class="product__actions">
                                                        <a href="#" class="action__btn">
                                                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M13.8931 2.07333C13.5526 1.73267 13.1483 1.46243 12.7033 1.27805C12.2584 1.09368 11.7814 0.998779 11.2998 0.998779C10.8181 0.998779 10.3412 1.09368 9.89618 1.27805C9.45121 1.46243 9.04692 1.73267 8.70642 2.07333L7.99975 2.78L7.29309 2.07333C6.60529 1.38553 5.67244 0.999136 4.69975 0.999136C3.72706 0.999136 2.79422 1.38553 2.10642 2.07333C1.41863 2.76112 1.03223 3.69397 1.03223 4.66666C1.03223 5.63935 1.41863 6.5722 2.10642 7.26L2.81309 7.96666L7.99975 13.1533L13.1864 7.96666L13.8931 7.26C14.2337 6.91949 14.504 6.51521 14.6884 6.07023C14.8727 5.62526 14.9676 5.14832 14.9676 4.66666C14.9676 4.185 14.8727 3.70807 14.6884 3.26309C14.504 2.81812 14.2337 2.41383 13.8931 2.07333V2.07333Z"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </a>
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#prod__preview" class="action__btn">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.666992 7.99996C0.666992 7.99996 3.33366 2.66663 8.00033 2.66663C12.667 2.66663 15.3337 7.99996 15.3337 7.99996C15.3337 7.99996 12.667 13.3333 8.00033 13.3333C3.33366 13.3333 0.666992 7.99996 0.666992 7.99996Z"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path
                                                                    d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </a>
                                                        <a href="#" class="action__btn">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10 9.33329L13.3333 5.99996L10 2.66663"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path
                                                                    d="M2.66699 13.3333V8.66667C2.66699 7.95942 2.94794 7.28115 3.44804 6.78105C3.94814 6.28095 4.62641 6 5.33366 6H13.3337"
                                                                    stroke="#252522" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product__content">
                                                    <div class="product__rating">
                                                        <ul>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-regular fa-star"></i></li>
                                                        </ul>
                                                        <div class="total__rating">(321)</div>
                                                    </div>
                                                    <div class="product__title">
                                                        <h5><a href="/product/{{ $arrival->slug_product }}">Tootsie
                                                                Frooties- Taffy
                                                                Candy - Bulk Fruit Chews - Fruity Roll Fruity
                                                                Roll</a></h5>
                                                    </div>
                                                    <div class="product__bottom">
                                                        <div class="product__price">
                                                            $22.00
                                                            <del>$22.00</del>
                                                        </div>
                                                        <div class="cart__action__btn">
                                                            <div class="cart__btn">
                                                                <a href="#" class="btn btn-outline">Add to cart</a>
                                                            </div>
                                                            <div class="quantity cart__quantity">
                                                                <button type="button" class="decressQnt">
                                                                    <span class="bar"></span>
                                                                </button>
                                                                <input class="qnttinput" type="number" disabled
                                                                    value="0" min="01" max="100" />
                                                                <button type="button" class="incressQnt">
                                                                    <span class="bar"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-button-next">
                                            <svg width="35" height="16" viewBox="0 0 35 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 8L34 8" stroke="#D0D5DD" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M27 1L34 8L27 15" stroke="#D0D5DD" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="swiper-button-prev">
                                        <svg width="23" height="16" viewBox="0 0 23 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22 8H1" stroke="#D0D5DD" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M8 15L1 8L8 1" stroke="#D0D5DD" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- End --}}

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Sale Section End -->

<!-- Category Section Start -->
<section class="category__section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Scope</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="category__wrapper swiper__pagination">
                    <div class="swiper categorySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="all-categories.html" class="category-card">
                                    <div class="category-card__image">
                                        <img src="assets/images/category/icon-01.png" alt="icon" />
                                    </div>
                                    <div class="category-card__title">
                                        <h5>All</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="all-categories.html" class="category-card">
                                    <div class="category-card__image">
                                        <img src="assets/images/category/fiberoptic.png" alt="icon" />
                                    </div>
                                    <div class="category-card__title">
                                        <h5>Fiber Optic</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="all-categories.html" class="category-card">
                                    <div class="category-card__image">
                                        <img src="assets/images/category/electricity.png" alt="icon" />
                                    </div>
                                    <div class="category-card__title">
                                        <h5>Electricity</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="all-categories.html" class="category-card">
                                    <div class="category-card__image">
                                        <img src="assets/images/category/frequency.png" alt="icon" />
                                    </div>
                                    <div class="category-card__title">
                                        <h5>Frequency</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="all-categories.html" class="category-card">
                                    <div class="category-card__image">
                                        <img src="assets/images/category/time.png" alt="icon" />
                                    </div>
                                    <div class="category-card__title">
                                        <h5>Time</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="all-categories.html" class="category-card">
                                    <div class="category-card__image">
                                        <img src="assets/images/category/temperature.png" alt="icon" />
                                    </div>
                                    <div class="category-card__title">
                                        <h5>Temperature</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="swiper-button-next">
                            <svg width="35" height="16" viewBox="0 0 35 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 8L34 8" stroke="#D0D5DD" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M27 1L34 8L27 15" stroke="#D0D5DD" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="swiper-button-prev">
                        <svg width="23" height="16" viewBox="0 0 23 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 8H1" stroke="#D0D5DD" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M8 15L1 8L8 1" stroke="#D0D5DD" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Category Section End -->
<!-- Product Feature Section Start -->
<section class="product__feature__section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <div class="tabs__wrapper tabs__wrapper__v2">
                        <div class="tabs__filter text-center">
                            <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="best-tab" data-bs-toggle="tab"
                                        data-bs-target="#best-tab-pane" type="button" role="tab"
                                        aria-controls="best-tab-pane" aria-selected="true">
                                        Best Calibration
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="swiper-slide">
                    <div class="single__slide__wrapper"
                        style="background-image: url('assets/images/banner/banner-main-01.png')">
                        <div class="hero__wrapper text-left">
                            <h5 class="hero__subtitle">Limited offer 25% off</h5>
                            <h1 class="hero__title">
                                Infiniium Real-Time <br> Oscilloscopes
                            </h1>
                            <p class="hero__content">Save 25% at Calibration Telkom</p>
                            <div class="hero__btn">
                                <a href="product.html" class="btn btn-primary">Calibration
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content" id="myTab2Content">
                    <div class="tab-pane fade show active" id="best-tab-pane" role="tabpanel" aria-labelledby="best-tab"
                        tabindex="0">
                        <div class="content__body">
                            <div class="product__wrapper swiper__pagination">
                                <div class="swiper feature__prod__Swiper">
                                    <div class="swiper-wrapper">
                                        @foreach ( $product as $i=> $product )
                                        <div class="swiper-slide">
                                            <div class="product-card">
                                                <div class="product__image__wrapper">
                                                    <a href="/product/{{ $arrival->slug_product }}"
                                                        class="product__image">
                                                        <img src="{{ url('storage/product/'.'fotocover_'.$product->name_product.'.png')}}"
                                                            alt="icon" />
                                                    </a>
                                                    @if($product->price_min != NULL)
                                                    <div class="badge">{{
                                                        number_format(($product->price_before-$product->price_min)/($product->price_before)*100)
                                                        }} %
                                                    </div>
                                                    @else
                                                    @endif
                                                </div>
                                                <div class="product__content">
                                                    <div class="row">
                                                        <div class="col-1" style="padding-left: 5px;">
                                                            <div class="profile__card__avater" style="width: 30px;">
                                                                <img src="https://www.telkom.co.id/data/image_upload/page/1594112895830_compress_PNG%20Icon%20Telkom.png"
                                                                    alt="feature-image">
                                                            </div>
                                                        </div>
                                                        <div class="col-10"
                                                            style="padding-left: 16px; font-size:small;">
                                                            {{ $product->laboratorium->nama_lab }}
                                                        </div>

                                                    </div>
                                                    <div class="product__rating">
                                                        <ul>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-regular fa-star"></i></li>
                                                        </ul>
                                                        <div class="total__rating">(321)</div>
                                                    </div>
                                                    <div class="product__title">
                                                        <h5><a href="/product/{{ $arrival->slug_product }}">{{
                                                                $product->name_product}}</a></h5>
                                                    </div>
                                                    <del style="font-size: small">@if ($arrival->price_before !=
                                                        NULL)
                                                        Rp. {{ number_format($arrival->price_before) }}
                                                        @endif</del>
                                                    <br />
                                                    <div class="product__bottom">
                                                        <div class="product__price">
                                                            @if($product->price_min != NULL)
                                                            Rp. {{ number_format($product->price_min) }}
                                                            @if($product->price_max != NULL)
                                                            - {{
                                                            number_format($product->price_max) }}
                                                            @else()

                                                            @endif
                                                            @else()
                                                            Rp. {{ number_format($product->price_before) }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="mt-10">
                                                            <a href="/product/{{ $arrival->slug_product }}"
                                                                class="btn btn-primary">Product Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="swiper-button-next">
                                            <svg width="35" height="16" viewBox="0 0 35 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 8L34 8" stroke="#D0D5DD" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M27 1L34 8L27 15" stroke="#D0D5DD" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="swiper-button-prev">
                                        <svg width="23" height="16" viewBox="0 0 23 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22 8H1" stroke="#D0D5DD" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M8 15L1 8L8 1" stroke="#D0D5DD" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Feature Section End -->

<!-- Trending Section Start -->
<section class="trending__section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Laboratory </h2>
                    <a href="product.html" class="solid-btn">all <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="category__wrapper swiper__pagination">
                    <div class="swiper feature__prod__Swiper">
                        <div class="row">
                            <div class="col-3">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide mr-15">

                                        <div class="feature__single__item" data-bg="#ECFDF3"
                                            style="background-color: rgb(236, 253, 243);">
                                            <div class="profile__card__avater mr-10" style="width: 80px;">
                                                <img src="https://www.telkom.co.id/data/image_upload/page/1594112895830_compress_PNG%20Icon%20Telkom.png"
                                                    alt="feature-image">
                                            </div>
                                            <div class="feature__content">
                                                <span><b>Calibration Telkom</b></span>
                                                <p style="font-size: smaller;"><b>Product:</b> 20 Products</p>
                                                <a href="#changePass" class="btn btn-success mt-3"
                                                    style="height: 20px; font-size: small;">Visit Lab<i
                                                        class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide mr-15">
                                        <div class="feature__single__item" data-bg="#ECFDF3"
                                            style="background-color: rgb(236, 253, 243);">
                                            <div class="profile__card__avater mr-10" style="width: 80px;">
                                                <img src="https://laboratory.sucofindo.co.id/assets/img-sci/SCI_ID.png"
                                                    alt="feature-image">
                                            </div>
                                            <div class="feature__content">
                                                <span><b>Lab Sucifindo</b></span>
                                                <p style="font-size: smaller;"><b>Product:</b> 0 Products</p>
                                                <a href="#changePass" class="btn btn-warning mt-3"
                                                    style="height: 20px; font-size: small;">Daftarkan Lab<i
                                                        class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide mr-15">
                                        <div class="feature__single__item" data-bg="#ECFDF3"
                                            style="background-color: rgb(236, 253, 243);">
                                            <div class="profile__card__avater mr-10" style="width: 80px;">
                                                <img src="assets/images/bsn.jpg" alt="feature-image">
                                            </div>
                                            <div class="feature__content">
                                                <span><b>LAB BSN SNSU</b></span>
                                                <p style="font-size: smaller;"><b>Product:</b> 0 Products</p>
                                                <a href="#changePass" class="btn btn-warning mt-3"
                                                    style="height: 20px; font-size: small;">Daftarkan Lab<i
                                                        class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide mr-15">
                                        <div class="feature__single__item" data-bg="#ECFDF3"
                                            style="background-color: rgb(236, 253, 243);">
                                            <div class="profile__card__avater mr-10" style="width: 80px;">
                                                <img src="https://scontent-sin6-3.xx.fbcdn.net/v/t39.30808-6/306051157_515119323952839_4856194847569927018_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=yPfWWVX5NcoAX8vgcyD&_nc_ht=scontent-sin6-3.xx&oh=00_AfCIfflz4SDjrxjGP2-N4iBeubj_rB2NoMQNIqNB0f57dg&oe=63D82CB8"
                                                    alt="feature-image">
                                            </div>
                                            <div class="feature__content">
                                                <span><b>Laboratorium SPIN</b></span>
                                                <p style="font-size: smaller;"><b>Product:</b> 0 Products</p>
                                                <a href="#changePass" class="btn btn-warning mt-3"
                                                    style="height: 20px; font-size: small;">Daftarkan Lab<i
                                                        class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide mr-15">
                                        <div class="feature__single__item" data-bg="#ECFDF3"
                                            style="background-color: rgb(236, 253, 243);">
                                            <div class="profile__card__avater mr-10" style="width: 80px;">
                                                <img src="https://www.telkom.co.id/data/image_upload/page/1594112895830_compress_PNG%20Icon%20Telkom.png"
                                                    alt="feature-image">
                                            </div>
                                            <div class="feature__content">
                                                <span><b>Calibration Telkom</b></span>
                                                <p style="font-size: smaller;"><b>Product:</b> 20 Products</p>
                                                <a href="#changePass" class="btn btn-primary mt-3"
                                                    style="height: 20px; font-size: small;">Visit Lab<i
                                                        class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Trending Section End -->
<!-- Scroll-top -->
<button class="scroll-top scroll-to-target" data-target="html">scroll</button>
<!-- Scroll-top-end-->
@endsection