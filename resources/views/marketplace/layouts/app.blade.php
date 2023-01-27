<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Calista - No. 1 Marketplace for Calibration & Testing &amp; in Indonesia.</title>
    <meta
        name="Calista adalah inovasi Laboratory Management platform, terutama untuk Lab Kalibrasi dan Lab Uji. Calista menyediakan information media, operation tools, monev, data processing/analytics untuk peningkatan CX. Dalam perjalanannya, saat ini Calista dikembangkan menjadi sebuah MARKETPLACE layanan Kalibrasi & Pengujian, digitalisasi ISO/IEC 17025 yang belum ada di Indonesia sebelumnya."
        content="Telkom Calibration, Lab Kalibrasi, Jasa Kalibrasi Indonesia, Lab kalibrasi di jakarat, Lab Kalibrasi di Indonesia, Jasa Kalibrasi, Lab kalibrasi, KAN ISO 17025" />
    <link rel="shortcut icon" href="{{ url('assets/images/favicon.png') }}" type="image/f-icon" />

    <!--website-favicon-->
    {{-- Style --}}
    @stack('prepend-style')
    @include('marketplace.components.style')
    @stack('addon-style')
</head>

<body>
    <!--Start Header -->
    @include('marketplace.components.navbar')
    <!--End Header -->
    <!--shop products-->
    @yield('content')
    <!--Start Footer-->
    @include('marketplace.components.footer')
    <!--End Footer-->
    @include('marketplace.components.menumobile')
    @include('marketplace.components.cart')
    @include('marketplace.components.modallogin')
    @include('marketplace.components.modalsignup')
    @include('marketplace.components.modalforget')
    <!-- js placed at the end of the document so the pages load faster -->
    @stack('prepend-script')
    @include('marketplace.components.script')
    @stack('addon-script')
</body>

</html>