<header class="nav-bg-w main-header navfix fixed-top menu-white">
    <div class="container-fluid m-pad">
        <div class="menu-header">
            <div class="dsk-logo">
                <a class="nav-brand" href="./">
                    <img src="landingpage/images/white-logo.png" alt="Logo" class="mega-white-logo" />
                    <img src="landingpage/images/logo.png" alt="Logo" class="mega-darks-logo" />
                </a>
            </div>
            <div class="custom-nav" role="navigation">
                <ul class="nav-list">
                    <li>
                        <a href="/" class="menu-links">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('marketplace') }}" class="menu-links">Marketplace</a>
                    </li>
                    <li>
                        <a href="/#about-us" class="menu-links">About Us</a>
                    </li>
                    <li>
                        <a href="/#our-service" class="menu-links">Our Service</a>
                    </li>
                    <li>
                        <a href="/#why-us" class="menu-links">Why Us</a>
                    </li>
                    <li>
                        <a href="/#blog" class="menu-links">Article</a>
                    </li>
                </ul>
                <!-- mobile + desktop - sidebar menu- dark mode witch and button -->
                <ul class="nav-list right-end-btn">
                    <li class="hidemobile">
                        <a href="tel:08111417025" class="btn-round- btn-br bg-btn2"><i
                                class="fas fa-shopping-cart"></i></a>
                    </li>
                    <li class="hidemobile">
                        <a href="#" class="btn-br bg-btn3 btshad-b2 lnk">Tracking Order<span class="circle"></span></a>
                    </li>
                    <li class="hidedesktop">
                        <a data-bs-toggle="offcanvas" href="#offcanvasExample" class="btn-round- btn-br bg-btn2"><i
                                class="fas fa-phone-alt"></i></a>
                    </li>
                    <li class="navm- hidedesktop">
                        <a class="toggle" href="#"><span></span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!--Mobile Menu-->
        <nav id="main-nav">
            <ul class="first-nav">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Marketplace</a>
                </li>
                <li>
                    <a href="#">About Us</a>
                </li>
                <li>
                    <a href="#">Our Service</a>
                </li>
            </ul>
            <ul class="bottom-nav">
                <li class="prb">
                    <a href="tel:+11111111111">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
                            <path
                                d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
								  c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
								  c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
								  C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z" />
                        </svg>
                    </a>
                </li>
                <li class="prb">
                    <a href="mailto:somewebmedia@gmail.com">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                            <path d="M0 0h24v24H0z" fill="none" />
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>