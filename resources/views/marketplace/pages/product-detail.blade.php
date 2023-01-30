@extends('marketplace.layouts.app')
@section('title')
<title>{{ $details->name_product }} - Calista Indonesia.</title>
<meta name="keywords"
    content="Telkom Calibration, Lab Kalibrasi, Jasa Kalibrasi Indonesia, Lab kalibrasi di jakarat, Lab Kalibrasi di Indonesia, Jasa Kalibrasi, Lab kalibrasi, KAN ISO 17025" />
<meta name="description" content="{{Strip_tags($details->des_product)}}" />
<meta name="author" content="Calista Indonesia" />
<link rel="shortcut icon" href="{{ url('assets/images/favicon.png') }}" type="image/f-icon" />
@endsection

@section('content')
<!-- product detail section start  -->
<section class="product-main" style="padding-top: 50px;">
    <div class="container">
        <div class="row product-detail">
            <div class="col-md-6">
                <div class="product-gallery">
                    <div class="product-gallery__thumb swiper productGallerySwiperThumb">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="gallery-item">
                                    <img src="{{ url('storage/product/'.'fotocover_'.$details->name_product.'.png')}}"
                                        alt="product iamge" />
                                </div>
                            </div>
                            @if ($details->foto_1 != NULL)
                            <div class="swiper-slide">
                                <div class="gallery-item">
                                    <img src="{{ url('storage/product/'.'foto1_'.$details->name_product.'.png')}}"
                                        alt="product iamge" />
                                </div>
                            </div>
                            @else
                            @endif
                            @if ($details->foto_2 != NULL)
                            <div class="swiper-slide">
                                <div class="gallery-item">
                                    <img src="{{ url('storage/product/'.'foto2_'.$details->name_product.'.png')}}"
                                        alt="product iamge" />
                                </div>
                            </div>
                            @else
                            @endif
                            @if ($details->foto_3 != NULL)
                            <div class="swiper-slide">
                                <div class="gallery-item">
                                    <img src="{{ url('storage/product/'.'foto3_'.$details->name_product.'.png')}}"
                                        alt="product iamge" />
                                </div>
                            </div>
                            @else
                            @endif
                            @if ($details->foto_4 != NULL)
                            <div class="swiper-slide">
                                <div class="gallery-item">
                                    <img src="{{ url('storage/product/'.'foto4_'.$details->name_product.'.png')}}"
                                        alt="product iamge" />
                                </div>
                            </div>
                            @else
                            @endif
                            @if ($details->foto_5 != NULL)
                            <div class="swiper-slide">
                                <div class="gallery-item">
                                    <img src="{{ url('storage/product/'.'foto5_'.$details->name_product.'.png')}}"
                                        alt="product iamge" />
                                </div>
                            </div>
                            @else
                            @endif
                        </div>
                    </div>
                    <div class="product-gallery__main swiper productGallerySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="gallery-item">
                                    <img src="{{ url('storage/product/'.'fotocover_'.$details->name_product.'.png')}}"
                                        alt="product iamge" />
                                </div>
                            </div>
                            @if ($details->foto_1 != NULL)
                            <div class="swiper-slide">
                                <div class="gallery-item">
                                    <img src="{{ url('storage/product/'.'foto1_'.$details->name_product.'.png')}}"
                                        alt="product iamge" />
                                </div>
                            </div>
                            @else
                            @endif
                            @if ($details->foto_2 != NULL)
                            <div class="swiper-slide">
                                <div class="gallery-item">
                                    <img src="{{ url('storage/product/'.'foto2_'.$details->name_product.'.png')}}"
                                        alt="product iamge" />
                                </div>
                            </div>
                            @else
                            @endif
                            @if ($details->foto_3 != NULL)
                            <div class="swiper-slide">
                                <div class="gallery-item">
                                    <img src="{{ url('storage/product/'.'foto3_'.$details->name_product.'.png')}}"
                                        alt="product iamge" />
                                </div>
                            </div>
                            @else
                            @endif
                            @if ($details->foto_4 != NULL)
                            <div class="swiper-slide">
                                <div class="gallery-item">
                                    <img src="{{ url('storage/product/'.'foto4_'.$details->name_product.'.png')}}"
                                        alt="product iamge" />
                                </div>
                            </div>
                            @else
                            @endif
                            @if ($details->foto_5 != NULL)
                            <div class="swiper-slide">
                                <div class="gallery-item">
                                    <img src="{{ url('storage/product/'.'foto5_'.$details->name_product.'.png')}}"
                                        alt="product iamge" />
                                </div>
                            </div>
                            @else
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="product-detail__wrapper">
                    <h2 class="product-detail__title">{{ $details->name_product }}</h2>
                    <div class="product-detail__meta">
                        <div class="rating">
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-regular fa-star"></i></li>
                                <li><i class="fa-regular fa-star"></i></li>
                            </ul>
                            <div class="total__rating">
                                <a href="#">(3,822 ratings)</a>
                            </div>
                        </div>
                        <ul class="right-meta">
                            <li>
                                <a href="#" class="share__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.6665 8V13.3333C2.6665 13.687 2.80698 14.0261 3.05703 14.2761C3.30708 14.5262 3.64622 14.6667 3.99984 14.6667H11.9998C12.3535 14.6667 12.6926 14.5262 12.9426 14.2761C13.1927 14.0261 13.3332 13.687 13.3332 13.3333V8"
                                            stroke="#002642" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M10.6668 3.99998L8.00016 1.33331L5.3335 3.99998" stroke="#002642"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M8 1.33331V9.99998" stroke="#002642" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    Share
                                </a>
                            </li>
                            <li>
                                <a href="#" class="wishlist__btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.8936 3.07333C13.5531 2.73267 13.1488 2.46243 12.7038 2.27805C12.2588 2.09368 11.7819 1.99878 11.3002 1.99878C10.8186 1.99878 10.3416 2.09368 9.89667 2.27805C9.4517 2.46243 9.04741 2.73267 8.70691 3.07333L8.00024 3.78L7.29357 3.07333C6.60578 2.38553 5.67293 1.99914 4.70024 1.99914C3.72755 1.99914 2.7947 2.38553 2.10691 3.07333C1.41911 3.76112 1.03271 4.69397 1.03271 5.66666C1.03271 6.63935 1.41911 7.5722 2.10691 8.26L2.81358 8.96666L8.00024 14.1533L13.1869 8.96666L13.8936 8.26C14.2342 7.91949 14.5045 7.51521 14.6889 7.07023C14.8732 6.62526 14.9681 6.14832 14.9681 5.66666C14.9681 5.185 14.8732 4.70807 14.6889 4.26309C14.5045 3.81812 14.2342 3.41383 13.8936 3.07333V3.07333Z"
                                            stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Add to Wishlist
                                </a>
                            </li>
                            <li>
                                <div class="stock__item">In-stock</div>
                            </li>
                        </ul>
                    </div>
                    <del>@if ($details->price_before !=
                        NULL)
                        Rp. {{ number_format($details->price_before) }}
                        @endif</del>
                    @if($details->price_min != NULL)
                    <div class="badge rounded-pill bg-warning" style="margin-left: 10px;">͏͏{{
                        number_format(($details->price_before-$details->price_min)/($details->price_before)*100)
                        }} %
                    </div>
                    @else
                    @endif
                    <h3 class=" product-detail__price mt-0">@if($details->price_min != NULL)
                        Rp. {{ number_format($details->price_min) }}
                        @if($details->price_max != NULL)
                        - {{
                        number_format($details->price_max) }}
                        @else()

                        @endif
                        @else()
                        Rp. {{ number_format($details->price_before) }}
                        @endif</h3>
                    <p class="product-detail__short_desc">
                        {{Str::limit(Strip_tags($details->des_product),150)}}
                    </p>
                    <div class="product-detail__attr">
                        <div class="product__attr">
                            <span class="product-detail--stroke">Vendor:</span>
                            <ul class="">
                                <li>
                                    <div class="row">
                                        <div class="col-1" style="padding-left: 5px;">
                                            <div class="profile__card__avater" style="width: 35px;">
                                                <img src="https://www.telkom.co.id/data/image_upload/page/1594112895830_compress_PNG%20Icon%20Telkom.png"
                                                    alt="feature-image"> {{ $details->laboratorium->nama_lab }}
                                            </div>
                                        </div>
                                        <div class="col-10 mt-2.5"
                                            style="font-size: 15px;margin-top: 8px;padding-left: 20px;">
                                            {{ $details->laboratorium->nama_lab }}
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-detail__qty" style="margin-top: 5px;">
                        <span class=" product-detail--stroke">quantity</span>
                        <div class="quantity quantity--outline">
                            <button type="button" class="decressQnt">
                                <span class="bar"></span>
                            </button>
                            <input class="qnttinput" name="qty" type="number" disabled value="1" min="01" max="100" />
                            <button type="button" class="incressQnt">
                                <span class="bar"></span>
                            </button>
                        </div>
                    </div>

                    <div class="product-detail__action">
                        <div class="item">
                            @if (Route::has('login'))
                            @auth
                            <a href="#" class="btn btn-primary btn-filled" data-bs-toggle="modal"
                                data-bs-target="#addcart">
                                @else
                                <a href="#" class="btn btn-primary btn-filled" data-bs-toggle="modal"
                                    data-bs-target="#login">
                                    @endauth
                                    @endif

                                    <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-26-051612/core/html/src/media/icons/duotune/ecommerce/ecm002.svg-->
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                                            fill="currentColor" />
                                        <path opacity="0.3"
                                            d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                                            fill="currentColor" />
                                        <path opacity="0.3"
                                            d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                                            fill="currentColor" />
                                    </svg>
                                    <!--end::Svg Icon-->Tambah Ke Keranjang
                                </a>
                        </div>
                        <div class="item">
                            <a href="https://api.whatsapp.com/send?phone=+628116417025&text=Selamat%20Pagi%20Bapak%2FIbu%2C%20Saya%20ingin%20berkonsultasi%20terkait%20alat%20ukur%20%2A{{ $details->name_product }}%2A%0A%0A*Link :* {{ $currentURL = url()->current(); }}"
                                class="btn btn-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                                </svg>Chat Konsultasi GRATIS!!!</a>
                        </div>
                    </div>
                    <div class="product-detail__accordion accordion" id="productDetailAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="accordionOne">
                                <button class="accordion-button product-detail--stroke collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#accordion_one"
                                    aria-controls="accordion_one">
                                    Shipping & Returns
                                </button>
                            </h2>
                            <div id="accordion_one" class="accordion-collapse collapse" aria-labelledby="accordionOne"
                                data-bs-parent="#productDetailAccordion">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, porro.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="accordionTwo">
                                <button class="accordion-button product-detail--stroke collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#accordion_two"
                                    aria-controls="accordion_two">
                                    Care instructions
                                </button>
                            </h2>
                            <div id="accordion_two" class="accordion-collapse collapse" aria-labelledby="accordionTwo"
                                data-bs-parent="#productDetailAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui cum
                                        beataesimilique, quae vel inventore veniam ducimus cupiditate dolorem
                                        consequatur explicabo magnam expedita
                                        accusamus nihil quas dolorum! Accusamus, omnis aliquid?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="accordionThree">
                                <button class="accordion-button product-detail--stroke collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#accordion_three"
                                    aria-controls="accordion_three">
                                    Specifications
                                </button>
                            </h2>
                            <div id="accordion_three" class="accordion-collapse collapse"
                                aria-labelledby="accordionThree" data-bs-parent="#productDetailAccordion">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel nobis, ab odio
                                        ipsa suscipit maxime assumenda laboriosam. Nemo, soluta ratione?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row product-info">
            <div class="col-12">
                <div class="tabs__wrapper tabs__wrapper--v3">
                    <div class="tabs__filter">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home-tab-pane" type="button" role="tab"
                                    aria-controls="home-tab-pane" aria-selected="true">
                                    Product Details
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="groceries-tab" data-bs-toggle="tab"
                                    data-bs-target="#groceries-tab-pane" type="button" role="tab"
                                    aria-controls="groceries-tab-pane" aria-selected="false">
                                    Additional Information
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="women-tab" data-bs-toggle="tab"
                                    data-bs-target="#women-tab-pane" type="button" role="tab"
                                    aria-controls="women-tab-pane" aria-selected="false">
                                    Reviews
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="electronics-tab" data-bs-toggle="tab"
                                    data-bs-target="#electronics-tab-pane" type="button" role="tab"
                                    aria-controls="electronics-tab-pane" aria-selected="false">
                                    Questions
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                        tabindex="0">
                        <div class="content__body">
                            {{Strip_tags($details->des_product)}}
                        </div>
                    </div>
                    <div class="tab-pane fade" id="groceries-tab-pane" role="tabpanel" aria-labelledby="groceries-tab"
                        tabindex="0">
                        <div class="content__body">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi aliquam quod
                                sapiente maxime necessitatibus natus incidunt voluptate, ut illo asperiores.
                                Provident error sit fuga
                                amet magnam sed reiciendis minus odio.
                            </p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="women-tab-pane" role="tabpanel" aria-labelledby="women-tab"
                        tabindex="0">
                        <div class="content__body">
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, non! Non quisquam
                                repellat ullam eos, error voluptates eligendi tenetur veritatis, eius cumque dolor,
                                vero
                                excepturi. Repellendus, blanditiis. Incidunt mollitia ex ipsum minus quia nesciunt
                                repudiandae obcaecati tempore laudantium vitae, velit, dolore molestiae soluta
                                voluptate.
                                Doloremque nemo culpa voluptas sit magni.
                            </p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="electronics-tab-pane" role="tabpanel"
                        aria-labelledby="electronics-tab" tabindex="0">
                        <div class="content__body">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, placeat quibusdam.
                                Reiciendis veritatis facere, perspiciatis unde nostrum hic deleniti, optio quibusdam
                                quae
                                repellendus laboriosam aut perferendis quis dolore, deserunt illo animi quod tempora
                                adipisci consequatur enim! Aspernatur corporis provident, iusto laborum vero libero
                                similique
                                debitis inventore repellat doloribus. Neque, ipsam!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product detail section end -->

<!-- Arrival Section Start -->
<section class="arrival__section mt-40">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>New Arrivals</h2>
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

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Sale Section End -->
@endsection

@if (Route::has('login'))
@auth
<!-- Login Modal Start -->
<div class="modal fade popup__modal" id="addcart" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" style="width: 900px;">
        <div class=" modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="popup__form">
                    <form method="POST" action="{{ route('login') }}" class="row form__wrapper"
                        style="padding-left: 40px; padding-right: 40px;">
                        {{ csrf_field() }}
                        <div class="popup__title">
                            <h3 style="font-size: 25px"><b>Input Alat Ukur</b></h3>
                            <p>Silahkan input alat ukur yang akan dikalibrasi.</p>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="nama_alat">Nama Alat Ukur</label>
                            <input type="text" name="nama_alat" id="nama_alat" class="form-control" required
                                data-error="Please enter alat ukur" value="{{ $details->name_product }}" />
                        </div>
                        <div class="form-group col-md-2">
                            <label for="qty">Qty</label>
                            <div class="quantity quantity--outline">
                                <button type="button" class="decressQnt">
                                    <span class="bar"></span>
                                </button>
                                <input class="qnttinput" name="qty" type="number" disabled value="1" min="01"
                                    max="100" />
                                <button type="button" class="incressQnt">
                                    <span class="bar"></span>
                                </button>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="model">Model / Part Number</label>
                            <input type="text" name="model" id="model" class="form-control" required
                                data-error="Please enter model / part number" />
                        </div>
                        <div class="form-group col-md-4">
                            <label for="merk">Merk</label>
                            <input type="text" name="merk" id="merk" class="form-control" required />
                        </div>
                        <div class=" form-group col-md-4">
                            <label for="layanan">Layanan Kalibrasi</label>
                            <select name="layanan" id="layanan" class="brand-select" required>
                                <option value="inhouse" selected>Inhouse</option>
                                <option value="onsite">Onsite</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nama_sertifikat">Nama Pemilik Pada Sertifikat</label>
                            <input type="text" name="nama_sertifikat" id="nama_sertifikat" class="form-control"
                                data-error="Please enter nama sertifikat" value="{{ Auth::user()->name }}" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="alamat_sertifikat">Alamat Pemilik Pada Sertifikat</label>
                            <input type="text" name="alamat_sertifikat" id="alamat_sertifikat" class="form-control"
                                placeholder="-" data-error="Please enter alamat sertifikat" />
                        </div>
                        <div class="form-group col-md-12">
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control" name="keterangan" id="keterangan" cols="30"
                                rows="4">-</textarea>
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-primary mt-0 w-100">Tambah ke Keranjang</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@else
@endauth
@endif