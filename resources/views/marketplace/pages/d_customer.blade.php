@extends('marketplace.layouts.app')
@section('title')
<title>Dashboard Customer - Calista Indonesia.</title>
<meta name="keywords"
    content="Telkom Calibration, Lab Kalibrasi, Jasa Kalibrasi Indonesia, Lab kalibrasi di jakarat, Lab Kalibrasi di Indonesia, Jasa Kalibrasi, Lab kalibrasi, KAN ISO 17025" />
<meta name="description"
    content="Calista adalah inovasi Laboratory Management platform, terutama untuk Lab Kalibrasi dan Lab Uji. Calista menyediakan information media, operation tools, monev, data processing/analytics untuk peningkatan CX. Dalam perjalanannya, saat ini Calista dikembangkan menjadi sebuah MARKETPLACE layanan Kalibrasi & Pengujian, digitalisasi ISO/IEC 17025 yang belum ada di Indonesia sebelumnya." />
<meta name="author" content="Calista Indonesia" />
<link rel="shortcut icon" href="{{ url('assets/images/favicon.png') }}" type="image/f-icon" />
@endsection
@section('content')

<!-- SideBar start -->
<div class="user__dashboard">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="sideBar">
                    <!-- NavItem Start -->
                    <ul class="nav__item">
                        <!-- Navlist Start -->
                        <li class="nav__list active">
                            <a href="profile.html">
                                <div class="icon">
                                    <svg width="20" height="23" viewBox="0 0 20 23" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7 21.4V11.4H13V21.4M1 8.40002L10 1.40002L19 8.40002V19.4C19 19.9305 18.7893 20.4392 18.4142 20.8142C18.0391 21.1893 17.5304 21.4 17 21.4H3C2.46957 21.4 1.96086 21.1893 1.58579 20.8142C1.21071 20.4392 1 19.9305 1 19.4V8.40002Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <span class="link__name">Home</span>
                            </a>
                        </li>
                        <!-- Navlist Start -->
                        <li class="nav__list">
                            <a href="manage-account.html">
                                <div class="icon">
                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17 21.2V19.2C17 18.1391 16.5786 17.1217 15.8284 16.3716C15.0783 15.6214 14.0609 15.2 13 15.2H5C3.93913 15.2 2.92172 15.6214 2.17157 16.3716C1.42143 17.1217 1 18.1391 1 19.2V21.2M23 21.2V19.2C22.9993 18.3137 22.7044 17.4528 22.1614 16.7523C21.6184 16.0519 20.8581 15.5516 20 15.33M16 3.33001C16.8604 3.55031 17.623 4.05071 18.1676 4.75232C18.7122 5.45393 19.0078 6.31684 19.0078 7.20501C19.0078 8.09318 18.7122 8.95609 18.1676 9.6577C17.623 10.3593 16.8604 10.8597 16 11.08M13 7.20001C13 9.40915 11.2091 11.2 9 11.2C6.79086 11.2 5 9.40915 5 7.20001C5 4.99087 6.79086 3.20001 9 3.20001C11.2091 3.20001 13 4.99087 13 7.20001Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <span class="link__name">Manage Account</span>
                            </a>
                        </li>
                        <!-- Navlist Start -->
                        <li class="nav__list">
                            <a href="address.html">
                                <div class="icon">
                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.99999 19.6C11.044 19.6 12.052 19.432 12.9928 19.1248C12.5282 18.5207 12.1359 17.8642 11.824 17.1688C11.2288 18.01 10.5832 18.4 9.99999 18.4C9.21159 18.4 8.31159 17.692 7.57359 16.1104C7.2927 15.4953 7.06856 14.8559 6.90399 14.2H11.2048C11.2192 13.7896 11.2756 13.3876 11.3692 13H6.64719C6.48044 12.0088 6.39775 11.0052 6.39999 10C6.39999 8.94043 6.48759 7.93003 6.64719 7.00003H13.3528C13.4968 7.84483 13.5832 8.75563 13.5976 9.70963C13.96 9.46243 14.3548 9.25963 14.7808 9.10963C14.7498 8.40299 14.6789 7.69866 14.5684 7.00003H17.848C18.1 7.65883 18.2716 8.35723 18.3508 9.08323C18.7996 9.23563 19.216 9.44563 19.5952 9.70363C19.537 7.81844 18.9247 5.99217 17.8349 4.45283C16.745 2.91349 15.2259 1.72928 13.4671 1.04807C11.7083 0.366848 9.78786 0.218799 7.94546 0.622404C6.10306 1.02601 4.42037 1.96338 3.10747 3.3175C1.79457 4.67161 0.909635 6.38246 0.563149 8.23645C0.216664 10.0904 0.423981 12.0054 1.15922 13.7423C1.89445 15.4792 3.12503 16.961 4.69731 18.0028C6.26959 19.0445 8.1139 19.6001 9.99999 19.6ZM9.99999 1.60003C10.7884 1.60003 11.6884 2.30803 12.4264 3.88963C12.6868 4.44883 12.9136 5.09203 13.0972 5.80003H6.90279C7.08639 5.09203 7.31319 4.44883 7.57479 3.88963C8.31039 2.30803 9.21039 1.60003 9.99999 1.60003ZM6.48639 3.38203C6.13204 4.1582 5.85743 4.96836 5.66679 5.80003H2.72319C3.73628 4.04907 5.34546 2.72101 7.25679 2.05843C6.96759 2.45443 6.70959 2.90323 6.48639 3.38203ZM5.43039 7.00003C5.27509 7.99244 5.19805 8.99553 5.19999 10C5.19999 11.044 5.28039 12.0544 5.43159 13H2.15199C1.78602 12.0422 1.59893 11.0254 1.59999 10C1.59999 8.94403 1.79559 7.93123 2.15199 7.00003H5.43159H5.43039ZM5.66679 14.2C5.87799 15.0916 6.15519 15.9064 6.48639 16.618C6.70959 17.0968 6.96759 17.5456 7.25679 17.9416C5.34546 17.279 3.73628 15.951 2.72319 14.2H5.66799H5.66679ZM12.7432 2.05843C14.6546 2.72091 16.2638 4.049 17.2768 5.80003H14.332C14.1413 4.96836 13.8667 4.15821 13.5124 3.38203C13.2987 2.9171 13.0407 2.47385 12.742 2.05843H12.7432ZM20.8 14.4184C20.8 11.9788 19.042 10.0012 16.6012 10.0012C14.1616 10.0012 12.4 11.9788 12.4 14.4184C12.4 16.2472 13.5784 18.6544 16.3072 20.7016C16.4812 20.8336 16.7212 20.8336 16.8952 20.7016C19.6264 18.6544 20.8 16.2472 20.8 14.4184ZM18.4 14.2C18.4 14.6774 18.2104 15.1353 17.8728 15.4728C17.5352 15.8104 17.0774 16 16.6 16C16.1226 16 15.6648 15.8104 15.3272 15.4728C14.9896 15.1353 14.8 14.6774 14.8 14.2C14.8 13.7226 14.9896 13.2648 15.3272 12.9272C15.6648 12.5897 16.1226 12.4 16.6 12.4C17.0774 12.4 17.5352 12.5897 17.8728 12.9272C18.2104 13.2648 18.4 13.7226 18.4 14.2Z"
                                            fill="currentColor" />
                                    </svg>
                                </div>
                                <span class="link__name">Address</span>
                            </a>
                        </li>
                        <!-- Navlist Start -->
                        <li class="nav__list">
                            <a href="order-history.html">
                                <div class="icon">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.222 18.8847H2.15321C3.09184 17.6932 3.60026 16.2193 3.5958 14.7023V1.71539H16.0432V8.56391C16.0432 8.76143 16.2033 8.9216 16.4008 8.9216C16.5985 8.9216 16.7585 8.76143 16.7585 8.56391V1.35769C16.7587 1.26284 16.721 1.17182 16.6538 1.10475C16.5867 1.03769 16.4959 1 16.4008 1H3.23811C3.14326 1 3.05223 1.03769 2.98517 1.10475C2.9181 1.17182 2.88041 1.26284 2.88041 1.35769V14.7023C2.88489 16.3112 2.24552 17.8548 1.10486 18.9894C1.0025 19.0917 0.971843 19.2455 1.02726 19.3792C1.08267 19.5128 1.21313 19.6 1.3578 19.6H10.2217C10.4192 19.6 10.5794 19.4398 10.5794 19.2423C10.5794 19.0448 10.4192 18.8846 10.2217 18.8846L10.222 18.8847Z"
                                            fill="currentColor" stroke="currentColor" stroke-width="0.4" />
                                        <path
                                            d="M13.9224 5.50525H5.71667C5.51914 5.50525 5.35898 5.66541 5.35898 5.86294C5.35898 6.06047 5.51914 6.22064 5.71667 6.22064H13.9224C14.1199 6.22064 14.2801 6.06047 14.2801 5.86294C14.2801 5.66541 14.1199 5.50525 13.9224 5.50525Z"
                                            fill="currentColor" stroke="currentColor" stroke-width="0.4" />
                                        <path
                                            d="M14.2801 8.28677C14.2801 8.19192 14.2424 8.1009 14.1753 8.03383C14.1083 7.96676 14.0172 7.92908 13.9224 7.92908H5.71667C5.51914 7.92908 5.35898 8.08924 5.35898 8.28677C5.35898 8.4843 5.51914 8.64447 5.71667 8.64447H13.9224C14.0172 8.64447 14.1083 8.60678 14.1753 8.53971C14.2424 8.47264 14.2801 8.38162 14.2801 8.28677Z"
                                            fill="currentColor" stroke="currentColor" stroke-width="0.4" />
                                        <path
                                            d="M10.7138 10.71C10.7138 10.6151 10.6761 10.5241 10.609 10.457C10.5419 10.39 10.4509 10.3523 10.3561 10.3523H5.71707C5.51954 10.3523 5.35938 10.5125 5.35938 10.71C5.35938 10.9075 5.51954 11.0677 5.71707 11.0677H10.3561C10.4509 11.0677 10.5419 11.03 10.609 10.9629C10.6761 10.8959 10.7138 10.8048 10.7138 10.71Z"
                                            fill="currentColor" stroke="currentColor" stroke-width="0.4" />
                                        <path
                                            d="M5.71667 12.7762C5.51914 12.7762 5.35898 12.9364 5.35898 13.1339C5.35898 13.3315 5.51914 13.4916 5.71667 13.4916H8.63443C8.83196 13.4916 8.99213 13.3315 8.99213 13.1339C8.99213 12.9364 8.83196 12.7762 8.63443 12.7762H5.71667Z"
                                            fill="currentColor" stroke="currentColor" stroke-width="0.4" />
                                        <path
                                            d="M18.5156 11.7067C17.714 10.9036 16.6449 10.4238 15.512 10.3585C14.3792 10.2932 13.2621 10.647 12.3735 11.3525C11.4848 12.0582 10.887 13.0661 10.6939 14.1842L10.4096 13.9C10.2701 13.7604 10.0436 13.7604 9.90393 13.9C9.7642 14.0397 9.7642 14.2661 9.90393 14.4059L10.727 15.2289C10.867 15.3683 11.0933 15.3683 11.2333 15.2289L12.0567 14.4059H12.0565C12.1962 14.2661 12.1962 14.0397 12.0565 13.9C11.9169 13.7604 11.6905 13.7604 11.5508 13.9L11.4695 13.9813C11.7649 12.8646 12.5394 11.9359 13.585 11.445C14.6306 10.954 15.8399 10.9511 16.8878 11.4372C17.9358 11.9231 18.7147 12.8482 19.0153 13.9636C19.3158 15.0788 19.1072 16.27 18.4455 17.2168C17.7837 18.1636 16.7369 18.7688 15.5862 18.8697C14.4355 18.9708 13.299 18.5571 12.4825 17.7401C12.3428 17.6004 12.1164 17.6004 11.9768 17.7401C11.8371 17.8797 11.8371 18.1061 11.9768 18.2458C13.1451 19.413 14.8472 19.8684 16.4421 19.4407C18.0372 19.0131 19.283 17.7671 19.7107 16.1721C20.1383 14.577 19.6829 12.875 18.5158 11.7069L18.5156 11.7067Z"
                                            fill="currentColor" stroke="currentColor" stroke-width="0.4" />
                                        <path
                                            d="M15.2464 11.8794C15.1514 11.8792 15.0606 11.9169 14.9933 11.9841C14.9263 12.0512 14.8886 12.1421 14.8887 12.2371V14.9763C14.8892 15.0712 14.9269 15.1622 14.9938 15.2296L16.2901 16.5259C16.43 16.664 16.6552 16.6632 16.7943 16.5243C16.9334 16.3852 16.934 16.1601 16.7959 16.02L15.604 14.8282L15.6041 12.2371C15.6041 12.1421 15.5665 12.0512 15.4994 11.9842C15.4323 11.9169 15.3413 11.8792 15.2465 11.8794L15.2464 11.8794Z"
                                            fill="currentColor" stroke="currentColor" stroke-width="0.4" />
                                    </svg>
                                </div>
                                <span class="link__name">Orders history</span>
                            </a>
                        </li>
                        <!-- Navlist Start -->
                        <li class="nav__list">
                            <a href="return-order.html">
                                <div class="icon">
                                    <svg width="21" height="22" viewBox="0 0 21 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.67928 1.25312L2.90129 5.21961C2.83456 5.35393 2.84782 5.51434 2.93558 5.63609C3.02333 5.75785 3.17133 5.82091 3.32005 5.80003L7.6423 5.35506C7.79228 5.34575 7.92476 5.25404 7.98627 5.11705C8.04778 4.97991 8.02832 4.82006 7.93562 4.70183L5.39114 1.18046C5.30804 1.05546 5.16244 0.986752 5.01316 1.00213C4.8639 1.01737 4.73537 1.11401 4.67921 1.25326L4.67928 1.25312ZM5.38513 2.87125L6.33775 4.18801V4.18787C6.38459 4.24684 6.39489 4.32698 6.36427 4.39583C6.33366 4.46467 6.26735 4.51081 6.19215 4.51561L4.57402 4.68153V4.68139C4.50122 4.68872 4.43011 4.65599 4.38821 4.59603C4.34617 4.53606 4.33996 4.45805 4.37185 4.39216L5.03523 2.90962C5.06217 2.84148 5.12397 2.79336 5.19649 2.78377C5.26915 2.77418 5.34124 2.80451 5.38512 2.86306L5.38513 2.87125Z"
                                            fill="currentColor" stroke="currentColor" stroke-width="0.2" />
                                        <path
                                            d="M17.8057 4.42843C16.3396 2.96453 14.4499 1.99935 12.4046 1.67006C10.3591 1.34076 8.26183 1.66399 6.41042 2.59389L7.00102 3.40286V3.403C8.73101 2.56849 10.6854 2.31917 12.5693 2.69263C14.4534 3.06595 16.1651 4.04182 17.446 5.47289C18.7269 6.90407 19.508 8.71294 19.6711 10.6266C19.8342 12.5403 19.3706 14.4551 18.3504 16.0826C17.33 17.7099 15.8083 18.9613 14.0148 19.6481C12.221 20.3349 10.2527 20.42 8.40634 19.8904C6.56009 19.3607 4.93619 18.2453 3.77925 16.712C2.6225 15.1788 1.99549 13.3109 1.99296 11.3903V11.3074C1.99635 11.198 1.95515 11.0919 1.87896 11.0135C1.80264 10.9349 1.69795 10.8906 1.58847 10.8907H1.40449C1.18101 10.8907 1 11.0718 1 11.2952V11.3843C0.998732 13.3318 1.57522 15.2359 2.65663 16.8558C3.73793 18.4756 5.27548 19.7383 7.07459 20.4842C8.87371 21.23 10.8536 21.4253 12.7639 21.0453C14.6741 20.6655 16.4288 19.7276 17.8056 18.3501C19.028 17.1282 19.907 15.606 20.3543 13.9365C20.8019 12.2672 20.8019 10.5094 20.3543 8.83988C19.9069 7.17054 19.028 5.64838 17.8056 4.42625L17.8057 4.42843Z"
                                            fill="currentColor" stroke="currentColor" stroke-width="0.2" />
                                        <path
                                            d="M13.6069 8.81381C13.4059 8.81621 13.2335 8.67061 13.2024 8.47196C13.0931 7.79164 12.6652 7.20458 12.051 6.89223C11.4369 6.57987 10.7103 6.57987 10.0961 6.89223C9.482 7.2046 9.05407 7.79164 8.94474 8.47196C8.9137 8.67061 8.74129 8.81621 8.54025 8.81381H5.91082C5.79428 8.81283 5.68283 8.86235 5.60537 8.94954C5.52792 9.03673 5.4918 9.15313 5.50633 9.26882L6.23447 14.1737C6.30924 14.7593 6.59495 15.2975 7.03795 15.6876C7.48098 16.0779 8.0511 16.2932 8.64141 16.2933H13.4957C14.0861 16.2932 14.6561 16.0779 15.0991 15.6876C15.5423 15.2975 15.8279 14.7593 15.9026 14.1737L16.6308 9.26882C16.6454 9.15313 16.6093 9.03673 16.5317 8.94954C16.4543 8.86235 16.343 8.81283 16.2263 8.81381H13.6069ZM11.0787 7.63265V7.6325C11.3503 7.63293 11.6135 7.72619 11.8247 7.8969C12.0359 8.06776 12.1824 8.30561 12.2396 8.57101C12.2519 8.63125 12.2361 8.69375 12.1968 8.74101C12.1575 8.78828 12.0988 8.81495 12.0373 8.81381H10.1159C10.0544 8.81494 9.99568 8.78828 9.95646 8.74101C9.91709 8.69375 9.90129 8.63125 9.91356 8.57101C9.97056 8.3045 10.1174 8.06564 10.3295 7.89452C10.5417 7.72324 10.8061 7.63012 11.0787 7.63054L11.0787 7.63265ZM13.3643 15.3186L8.79315 15.3184C8.39925 15.3181 8.01914 15.1741 7.72388 14.9135C7.42858 14.6528 7.23852 14.2934 7.18929 13.9026L6.58247 10.0051C6.57485 9.94701 6.59277 9.8886 6.63157 9.84472C6.67037 9.80085 6.72624 9.77601 6.78465 9.77658H15.3605C15.4191 9.77601 15.475 9.80084 15.5137 9.84472C15.5525 9.8886 15.5705 9.94701 15.5628 10.0051L14.956 13.9026C14.9079 14.292 14.72 14.6508 14.4272 14.912C14.1343 15.1733 13.7567 15.3191 13.3641 15.3225L13.3643 15.3186Z"
                                            fill="currentColor" stroke="currentColor" stroke-width="0.2" />
                                        <path
                                            d="M10.9635 11.0951H11.1253C11.3488 11.0951 11.5298 11.3186 11.5298 11.4996V13.5605C11.5298 13.784 11.3486 13.965 11.1253 13.965H10.9635C10.74 13.965 10.559 13.7416 10.559 13.5605V11.4996C10.559 11.2761 10.7401 11.0951 10.9635 11.0951Z"
                                            fill="currentColor" stroke="currentColor" stroke-width="0.2" />
                                        <path
                                            d="M12.7412 11.0951H12.903C13.1265 11.0951 13.3075 11.3186 13.3075 11.4996V13.5605C13.3075 13.784 13.1263 13.965 12.903 13.965H12.7412C12.5177 13.965 12.3367 13.7416 12.3367 13.5605V11.4996C12.3367 11.2761 12.5179 11.0951 12.7412 11.0951Z"
                                            fill="currentColor" stroke="currentColor" stroke-width="0.2" />
                                        <path
                                            d="M9.18357 11.0951H9.3454C9.56888 11.0951 9.74988 11.3186 9.74988 11.4996V13.5605C9.74988 13.784 9.56873 13.965 9.3454 13.965H9.18357C8.96009 13.965 8.77908 13.7416 8.77908 13.5605V11.4996C8.77908 11.2761 8.96024 11.0951 9.18357 11.0951Z"
                                            fill="currentColor" stroke="currentColor" stroke-width="0.2" />
                                    </svg>
                                </div>
                                <span class="link__name">Return Order</span>
                            </a>
                        </li>
                        <!-- Navlist Start -->
                        <li class="nav__list">
                            <a href="cancel.html">
                                <div class="icon">
                                    <svg width="22" height="23" viewBox="0 0 22 23" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.9532 13.5104V6.48184C19.9529 6.28151 19.8941 6.08572 19.7843 5.91847C19.7827 5.91643 19.7813 5.91408 19.7797 5.9122V5.91204C19.6847 5.76815 19.5552 5.65042 19.4029 5.56954L10.9574 1.11886C10.6564 0.960381 10.2968 0.960381 9.99585 1.11886L1.55036 5.56954C1.38389 5.65685 1.24469 5.78821 1.14767 5.94919C1.05063 6.11002 0.999534 6.29452 1 6.48246V16.3826C0.999533 16.5706 1.05063 16.7551 1.14767 16.9159C1.2447 17.0769 1.38389 17.2082 1.55036 17.2956L9.99585 21.7462H9.9957C10.2967 21.9047 10.6563 21.9047 10.9572 21.7462L16.1615 19.0019C16.8884 19.5415 17.8033 19.7625 18.6964 19.6147C19.5894 19.4669 20.3843 18.9628 20.8986 18.2179C21.4129 17.473 21.6029 16.5511 21.4246 15.6636C21.2466 14.7761 20.7157 13.9989 19.9537 13.5103L19.9532 13.5104ZM19.944 14.1523L18.1487 15.9476L16.3531 14.1531C16.8574 13.7339 17.4927 13.5042 18.1485 13.5042C18.8044 13.5042 19.4396 13.7339 19.944 14.1531V14.1523ZM15.6189 4.17106L7.21956 8.4223C7.04917 8.50789 6.9059 8.63941 6.80603 8.80196C6.70618 8.96435 6.65367 9.15152 6.65414 9.34229V13.3138C6.65414 13.363 6.6242 13.4074 6.57858 13.4257C6.53281 13.4441 6.48061 13.4328 6.44659 13.3972L5.68664 12.6038H5.68648C5.53067 12.4424 5.30259 12.3725 5.08314 12.419L4.58747 12.5256V12.5255C4.55189 12.5333 4.51474 12.5244 4.48637 12.5015C4.458 12.4786 4.44154 12.4441 4.44154 12.4077V7.95586C4.44091 7.76556 4.54797 7.59141 4.71789 7.50582L13.5061 3.05754L15.6189 4.17106ZM10.2413 1.58513C10.3884 1.50738 10.5643 1.50738 10.7115 1.58513L12.9343 2.75653L4.48037 7.03586C4.38569 7.08429 4.29901 7.14699 4.2233 7.22176L1.83704 6.01381L10.2413 1.58513ZM10.213 21.2635L1.79523 16.828C1.62986 16.7412 1.52609 16.5697 1.52624 16.3828C1.52624 16.3828 1.53001 6.46101 1.53063 6.45018L3.95341 7.67631C3.92754 7.7677 3.91453 7.86222 3.91469 7.95721V12.4079C3.915 12.6034 4.00341 12.7882 4.15562 12.9109C4.30767 13.0335 4.50706 13.081 4.69816 13.0399L5.19395 12.9332H5.19379C5.23486 12.9247 5.27718 12.9379 5.30603 12.9683L6.06599 13.7617H6.06614C6.1859 13.8868 6.35096 13.9588 6.52417 13.9611C6.69754 13.9636 6.86448 13.8965 6.98786 13.7749C7.11122 13.6533 7.18067 13.4873 7.18067 13.3139V9.34289C7.18067 9.33223 7.18412 9.32235 7.1849 9.31185L10.0115 10.7422V10.7421C10.0761 10.7744 10.1436 10.7996 10.2134 10.8176L10.213 21.2635ZM10.2481 10.271L7.49054 8.87528L16.1901 4.47195L19.1158 6.01378L10.7045 10.2714C10.5609 10.3437 10.3916 10.3437 10.248 10.2714L10.2481 10.271ZM10.7397 21.2635V10.8175C10.8098 10.7995 10.8777 10.7741 10.9423 10.7418L19.4219 6.44967C19.4219 6.4608 19.4263 13.2322 19.4263 13.2322V13.2324C18.4744 12.8369 17.3932 12.9032 16.4969 13.412C15.6004 13.9209 14.9892 14.8151 14.8407 15.8353C14.6923 16.8553 15.0232 17.8867 15.7375 18.6299L10.7397 21.2635ZM15.9805 18.1149C15.5614 17.6105 15.3319 16.9753 15.3319 16.3195C15.3319 15.6636 15.5614 15.0285 15.9805 14.5242L17.776 16.3195L15.9805 18.1149ZM18.1484 19.1358C17.4924 19.1363 16.8571 18.9068 16.353 18.4872L18.1486 16.6924L19.944 18.4878C19.4399 18.9074 18.8046 19.1369 18.1486 19.1363L18.1484 19.1358ZM20.3163 18.1149L18.5207 16.32L20.3161 14.5247H20.3163C20.7354 15.0291 20.9649 15.6643 20.9649 16.3201C20.9649 16.976 20.7354 17.6111 20.3163 18.1154L20.3163 18.1149Z"
                                            fill="currentColor" stroke="currentColor" stroke-width="0.4" />
                                    </svg>
                                </div>
                                <span class="link__name">Cancellation</span>
                            </a>
                        </li>
                        <!-- Navlist Start -->
                        <li class="nav__list">
                            <a href="wishlist.html">
                                <div class="icon">
                                    <svg width="24" height="21" viewBox="0 0 24 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20.8401 2.80998C20.3294 2.29898 19.7229 1.89362 19.0555 1.61706C18.388 1.3405 17.6726 1.19815 16.9501 1.19815C16.2276 1.19815 15.5122 1.3405 14.8448 1.61706C14.1773 1.89362 13.5709 2.29898 13.0601 2.80998L12.0001 3.86998L10.9401 2.80998C9.90843 1.77828 8.50915 1.19869 7.05012 1.19869C5.59109 1.19869 4.19181 1.77828 3.16012 2.80998C2.12843 3.84167 1.54883 5.24094 1.54883 6.69998C1.54883 8.15901 2.12843 9.55828 3.16012 10.59L4.22012 11.65L12.0001 19.43L19.7801 11.65L20.8401 10.59C21.3511 10.0792 21.7565 9.47279 22.033 8.80533C22.3096 8.13787 22.4519 7.42246 22.4519 6.69998C22.4519 5.97749 22.3096 5.26208 22.033 4.59462C21.7565 3.92716 21.3511 3.32073 20.8401 2.80998V2.80998Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <span class="link__name">Wishlist</span>
                            </a>
                        </li>
                        <!-- Navlist End -->
                    </ul>
                    <ul class="nav__item">
                        <!-- Navlist Start -->
                        <li class="nav__list">
                            <a href="#">
                                <div class="icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 20V10M12 20V4M6 20V14" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <span class="link__name">Support</span>
                            </a>
                        </li>
                        <li>
                            <div class="tracking__message">
                                <div class="order__percent">
                                    <div class="radial__progress--pie" role="progressbar" data-goal="80">
                                        <div class="radial__progress--pie__content">
                                            <h5 class="radial__progress--pie__number"><span class="sr-only">80%</span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="title">Order Ready To Deliver</h4>
                                <p class="content">Your order will be delivered 07/05/2022. Order compailation
                                    progress is 80%. Need more?</p>
                                <div class="btn__group justify-content-start">
                                    <a href="#" class="solid-btn">Dismiss</a>
                                    <a href="#" class="solid-btn tracking-btn">Order Tracking</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="main__wrapper">
                    <!-- Profile Card -->
                    <div class="profile__card">
                        <div class="profile__card__content">
                            <h2 class="title">Welcome back <span class="text-primary">{{ Auth::user()->name }}</span>
                            </h2>
                            <p class="desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Netus pulvinar adipi cing
                                id dolor venenatis. Turpis ultricies consectetur ultrices maecenas consec tetur codo
                                sit consec
                                vehicula consectetur.
                            </p>
                        </div>
                        <div class="profile__card__avater">
                            <img src="assets/images/avatar/profile.png" alt="Avatar" />
                        </div>
                    </div>
                    <!-- Profile Card -->
                    <!-- Profile TrackOrder -->
                    <div class="profile__trackOrder">
                        <div class="confirm__details__item confirm__details__item--v2">
                            <div class="s-header__flex">
                                <div class="step-header">
                                    <h3 class="step-title">Track Your Orders</h3>
                                </div>
                                <a href="#" class="edit__btn">Track</a>
                            </div>
                            <p class="para">Lorem ipsum dolor sit amet, conc tetur adipis dolor.</p>
                            <ul class="information">
                                <li>
                                    <div class="icon"><img src="assets/images/location.png" alt="location" /></div>
                                    Manhattan - India
                                </li>
                            </ul>
                            <div class="line__chart">
                                <img src="assets/images/line-chart.png" alt="line-chart" />
                            </div>
                        </div>
                        <div class="confirm__details__item confirm__details__item--v2">
                            <div class="s-header__flex">
                                <div class="step-header">
                                    <h3 class="step-title">Personal Details</h3>
                                </div>
                                <a href="#" class="edit__btn">edit</a>
                            </div>
                            <ul class="information">
                                <li>
                                    <div class="icon"><img src="assets/images/mail.png" alt="mail" /></div>
                                    sample@gmail.com
                                </li>
                                <li>
                                    <div class="icon"><img src="assets/images/phone.png" alt="phone" /></div>
                                    +8801598765432
                                </li>
                                <li>
                                    <div class="icon"><img src="assets/images/location.png" alt="location" /></div>
                                    Sector- 10, Uttara, Dhaka, Bangladfesh
                                </li>
                            </ul>
                        </div>
                        <div class="confirm__details__item confirm__details__item--v2">
                            <div class="s-header__flex">
                                <div class="step-header">
                                    <h3 class="step-title">Shipping Details</h3>
                                </div>
                                <a href="#" class="edit__btn">edit</a>
                            </div>
                            <ul class="information">
                                <li>
                                    <div class="icon"><img src="assets/images/card.png" alt="card" /></div>
                                    FedEx - $19.00
                                </li>
                                <li>
                                    <div class="icon"><img src="assets/images/location.png" alt="location" /></div>
                                    Kuril - NSU Rd, Dhaka 1229 Pragati Ave, Dhaka, Bangladesh
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Profile Table Start -->
                    <div class="cart__form">
                        <table>
                            <thead>
                                <tr>
                                    <th class="cart-pd__thumb">Product</th>
                                    <th class="cart-pd__qty">Quantity</th>
                                    <th class="cart-pd__price">Price</th>
                                    <th class="cart-pd__status">Status</th>
                                    <th class="cart-pd__date text-start">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="cart-pd__thumb">
                                        <div class="product-card--inline">
                                            <a href="product-single.html" class="product__image">
                                                <img src="assets/images/cart/cart-01.png" alt="product" />
                                            </a>
                                            <div class="product__content">
                                                <h5 class="product__title">
                                                    <a href="#">Italian Chicken Meatballs</a>
                                                </h5>
                                                <ul class="product__info">
                                                    <li class="info-item">Color: <span>Red</span></li>
                                                    <li class="info-item">Size: <span>M</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart-pd__qty" data-title="Quantity">2</td>
                                    <td class="cart-pd__Price" data-title="Price">$12.22</td>
                                    <td class="cart-pd__status" data-title="Status">
                                        <div class="status">Processing</div>
                                    </td>
                                    <td class="cart-pd__date text-start" data-title="Date">
                                        Order on <br />
                                        25 April 2022
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart-pd__thumb">
                                        <div class="product-card--inline">
                                            <a href="product-single.html" class="product__image">
                                                <img src="assets/images/cart/cart-05.png" alt="product" />
                                            </a>
                                            <div class="product__content">
                                                <h5 class="product__title">
                                                    <a href="#">Strawberry Fresh Ice-Cream</a>
                                                </h5>
                                                <ul class="product__info">
                                                    <li class="info-item">Flavor: <span>Berry</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart-pd__qty" data-title="Quantity">2</td>
                                    <td class="cart-pd__Price" data-title="Price">$12.22</td>
                                    <td class="cart-pd__status" data-title="Status">
                                        <div class="status">Processing</div>
                                    </td>
                                    <td class="cart-pd__date text-start" data-title="Date">
                                        Order on <br />
                                        25 April 2022
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart-pd__thumb">
                                        <div class="product-card--inline">
                                            <a href="product-single.html" class="product__image">
                                                <img src="assets/images/cart/cart-03.png" alt="product" />
                                            </a>
                                            <div class="product__content">
                                                <h5 class="product__title">
                                                    <a href="#">All Natural Blueberries </a>
                                                </h5>
                                                <ul class="product__info">
                                                    <li class="info-item">Weight: <span>5kg</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart-pd__qty" data-title="Quantity">2</td>
                                    <td class="cart-pd__Price" data-title="Price">$12.22</td>
                                    <td class="cart-pd__status" data-title="Status">
                                        <div class="status">To Ship</div>
                                    </td>
                                    <td class="cart-pd__date text-start" data-title="Date">
                                        Order on <br />
                                        25 April 2022
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Profile Card End -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SideBar end -->
@endsection