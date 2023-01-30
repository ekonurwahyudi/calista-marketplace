<!-- Header Flyout Menu Start -->
<div class="flyoutMenu">
    <div class="flyout__flip">
        <div class="flyout__inner">
            <div class="menu__header-top">
                <div class="brand__logo">
                    <a href="/marketplace"><img src="{{ url('assets/images/logo/logo.png') }}" alt="logo" /></a>
                </div>
                <!-- Close -->
                <div class="closest__btn action__btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18" stroke="#344054" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M6 6L18 18" stroke="#344054" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <!-- Close -->
                </div>
            </div>
            <!-- Search Form -->
            <form action="search.html" method="post" class="search__form full__width">
                <input type="search" class="form-control" name="search" placeholder="What are you looking for..." />
                <button type="submit">
                    <img src="{{ url('assets/images/search.png') }}" alt="search" />
                </button>
            </form>
            <!-- Search Form -->
            <div class="flyout__menu">
                <ul class="flyout-main__menu">
                    <li class="active"><a href="/">Home</a></li>
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
                    <li><a href="#">Tetang Kami</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Header Flyout Menu End -->