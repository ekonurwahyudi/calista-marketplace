<!-- Header Start  -->
<header class="header header-sticky">
    <div class="container">
        <!-- Header Top Start -->
        <div class="header__top">
            <div class="header__left">
                <!-- Header Toggle Start -->
                <div class="header__toggle d-lg-none">
                    <button class="toggler__btn">
                        <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M0 12H18V10H0V12ZM0 7H18V5H0V7ZM0 0V2H18V0H0Z" fill="#667085" />
                        </svg>
                    </button>
                </div>
                <!-- Header Toggle End -->
                <div class="header__logo">
                    <a href="/marketplace"><img src="{{ url('assets/images/logo/logo.png') }}" alt="logo" /> </a>
                </div>
                <div class="search__form__wrapper">
                    <form action="search.html" method="post" class="search__form">
                        <div class="select__style">
                            <select name="filter" class="category-select">
                                <option value="1">Product</option>
                                <option value="2">Laboratorium</option>
                            </select>
                        </div>
                        <input type="search" class="form-control" name="search"
                            placeholder="What are you looking for..." />
                        <button type="submit">
                            <img src="{{ url('assets/images/search.png') }}" alt="search" />
                        </button>
                    </form>
                </div>
            </div>
            <div class="header__meta">
                <div class="language__select custom__dropdown">
                    <div class="selected">
                        <div class="selected_item">
                            <img src="{{ url('assets/images/flag/flag-id.png') }}" alt="flag" />
                            <span>Indonesia - ID</span>
                        </div>
                    </div>
                    <ul class="list">
                        <li>
                            <img src="{{ url('assets/images/flag/flag-id.png') }}" alt="flag" />
                            Indonesia - ID
                        </li>
                        <li>
                            <img src="{{ url('assets/images/flag/flag-en.png') }}" alt="flag" />
                            English - EN
                        </li>
                    </ul>
                </div>
                <ul class="meta__item">
                    <li>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#login">
                            <i class="fa-solid fa-user-plus"></i>
                            <span>Sign in</span>
                        </a>
                    </li>
                </ul>
                <div class="miniCart">
                    <div class="header__cart">
                        <a href="#" class="cart__btn">
                            <div class="cart__btn-img">
                                <img src="{{ url('assets/images/cart-icon.png') }}" alt="cart-icon" />
                                <span class="value">10</span>
                            </div>
                            <span class="title">cart</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Header Top End -->
        </div>
        <!-- Search Form -->
        <form action="search.html" method="post" class="search__form full__width d-lg-none d-flex">
            <input type="search" class="form-control" name="search" placeholder="What are you looking for..." />
            <button type="submit">
                <img src="{{ url('assets/images/search.png') }}" alt="search" />
            </button>
        </form>
        <!-- Search Form -->
    </div>
    <nav class="nav d-none d-lg-flex">
        <div class="container">
            <!-- Header Wrap Start  -->
            <div class="header__wrapper">
                <div class="header__menu">
                    <ul class="main__menu">
                        <li class="active"><a href="{{ route('marketplace') }}">Home</a></li>
                        <li><a href="#">All Produk</a></li>
                        <li><a href="#">Ruang Lingkup</a></li>
                        <li><a href="#">Sewa Alat Ukur</a></li>
                        <li><a href="#">Laboratorium</a></li>
                        <li class="has__dropdown">
                            <a href="#">Layanan</a>
                            <!-- Dropdown -->
                            <ul class="sub__menu">
                                <li><a href="#">Jasa Kalibrasi</a></li>
                                <li><a href="#">Jasa Uji</a></li>
                                <li><a href="#">Pelatihan</a></li>
                            </ul>
                            <!-- Dropdown -->
                        </li>
                        <li><a href="/">Tetang Kami</a></li>
                    </ul>
                </div>
                <div class="header__meta">
                    <ul class="meta__item">
                        <li><a href="#"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3"
                                        d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                        fill="currentColor" />
                                    <path
                                        d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                        fill="currentColor" />
                                </svg>
                                </span>
                                <!--end::Svg Icon-->Tracking Order
                            </a></li>
                    </ul>
                </div>
            </div>
            <!-- Header Wrap End  -->
        </div>
    </nav>
</header>