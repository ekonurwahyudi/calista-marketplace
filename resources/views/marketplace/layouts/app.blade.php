<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    @yield('title')

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
    @include('marketplace.components.addcart')
    @include('marketplace.components.modalsignup')
    @include('marketplace.components.modalforget')
    <!-- js placed at the end of the document so the pages load faster -->
    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">scroll</button>
    <!-- Scroll-top-end-->
    @stack('prepend-script')
    @include('marketplace.components.script')
    @stack('addon-script')
</body>

</html>