<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

    <meta charset="utf-8" />
    <title>
        @yield('title')
    </title>
    <meta
        name="Calista adalah inovasi Laboratory Management platform, terutama untuk Lab Kalibrasi dan Lab Uji. Calista menyediakan information media, operation tools, monev, data processing/analytics untuk peningkatan CX. Dalam perjalanannya, saat ini Calista dikembangkan menjadi sebuah MARKETPLACE layanan Kalibrasi & Pengujian, digitalisasi ISO/IEC 17025 yang belum ada di Indonesia sebelumnya."
        content="Telkom Calibration, Lab Kalibrasi, Jasa Kalibrasi Indonesia, Lab kalibrasi di jakarat, Lab Kalibrasi di Indonesia, Jasa Kalibrasi, Lab kalibrasi, KAN ISO 17025" />
    <meta name="keywords"
        content="Telkom Calibration, Lab Kalibrasi, Jasa Kalibrasi Indonesia, Lab kalibrasi di jakarat, Lab Kalibrasi di Indonesia, Jasa Kalibrasi, Lab kalibrasi, KAN ISO 17025" />
    <meta name="author" content="Calista Indonesia" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="theme-color" content="#2e2a8f" />

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
    <!--Breadcrumb Area-->
    @include('marketplace.components.breadscrumb')
    <!--end Breadcrumb Area-->
    <!--shop products-->
    @yield('content')
    <!--Start Footer-->
    @include('marketplace.components.footer')
    <!--End Footer-->
    <!-- js placed at the end of the document so the pages load faster -->
    @stack('prepend-script')
    @include('marketplace.components.script')
    @stack('addon-script')
</body>

</html>