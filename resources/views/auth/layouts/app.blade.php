<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../" />
    <title>
        @yield('title')
    </title>

    @stack('prepend-style')
    @include('auth.components.style')
    @stack('addon-style')
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::Root-->
    @yield('content')
    <!--end::Root-->
    <!--begin::Javascript-->
    @stack('prepend-script')
    @include('auth.components.script')
    @stack('addon-script')
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>