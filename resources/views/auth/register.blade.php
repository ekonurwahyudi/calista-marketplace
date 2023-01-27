@extends('auth.layouts.app')
@section('title')
Halaman Register
@endsection

@section('content')
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <!--begin::Page bg image-->
    <style>
        body {
            background-image: url('dashboards/assets/media/auth/bg4.jpg');
            background-attachment: fixed;
        }

        [data-theme="dark"] body {
            background-image: url('dashboards/media/auth/bg4-dark.jpg');
        }
    </style>
    <!--end::Page bg image-->
    <!--begin::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-column-fluid flex-lg-row">
        <!--begin::Aside-->
        <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
            <!--begin::Aside-->
            <div class="d-flex flex-center flex-lg-start flex-column ">
                <h1 class="text-white " style="font-size: 35px">Welcome Back to <br>Our Marketplace</h1>
                <span class="fs-6 text-white mt-2 mb-15">We are provide you with trustworthy and best quality<br>
                    calibration & testing services with enabling <br>the digital management for our clients since
                    2021 <br>by providing outstanding solutions.</span>

                <!--end::Title-->
                <!--begin::Users group-->
                <div class="symbol-group symbol-hover flex-nowrap">
                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                        <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                    </div>
                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                        <img alt="Pic" src="dashboards/assets/media/avatars/300-11.jpg" />
                    </div>
                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                    </div>
                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                        <img alt="Pic" src="dashboards/assets/media/avatars/300-2.jpg" />
                    </div>
                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                        <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                    </div>
                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                        <img alt="Pic" src="dashboards/assets/media/avatars/300-12.jpg" />
                    </div>
                    <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_view_users">
                        <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+2K</span>
                    </a>
                </div>
                <span class="fs-6 text-white mt-3">More than 2k people joined us, it's your
                    turn</span>
                <!--end::Users group-->
                <!--end::Title-->
            </div>
            <!--begin::Aside-->
        </div>
        <!--begin::Aside-->
        <!--begin::Body-->
        <div class="d-flex flex-center w-lg-50 p-10">
            <!--begin::Card-->
            <div class="card rounded-3 w-md-500px">
                <!--begin::Card body-->
                <div class="card-body p-10 p-lg-20">
                    <!--begin::Form-->
                    <form method="POST" action="{{ route('register') }}" class="form w-100" novalidate="novalidate"
                        id="kt_sign_in_form">
                        @csrf
                        <!--begin::Heading-->
                        <div class="text-center mb-15 ">
                            <!--begin::Title-->
                            <h1 class="text-dark fw-bolder mb-3">Create New Account</h1>
                            <!--end::Title-->
                            <!--begin::Subtitle-->
                            <div class="text-gray-500 fw-semibold fs-6">Use your email continue with Nioboard (it's
                                free)!</div>
                            <!--end::Subtitle=-->
                        </div>
                        <!--begin::Heading-->
                        <!--begin::Input group=-->
                        <div class="fv-row mb-8">
                            <!--begin::Perusahaan-->
                            <input placeholder="Nama Perusahaan" autocomplete="on" class="form-control bg-transparent"
                                id="perusahaan" type="text" name="perusahaan" :value="old('perusahaan')" required
                                autofocus />
                            <x-input-error :messages="$errors->get('perusahaan')" class="mt-2" />
                            <!--end::Perusahaan-->
                        </div>
                        <div class="fv-row mb-8">
                            <!--begin::Name-->
                            <input placeholder="Full Name" autocomplete="on" class="form-control bg-transparent"
                                id="name" type="text" name="name" :value="old('name')" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            <!--end::Name-->
                        </div>
                        <div class="fv-row mb-8">
                            <!--begin::HP-->
                            <input placeholder="Number Phone" autocomplete="on" class="form-control bg-transparent"
                                id="hp" type="text" name="hp" :value="old('hp')" required autofocus />
                            <x-input-error :messages="$errors->get('hp')" class="mt-2" />
                            <!--end::HP-->
                        </div>
                        <div class="fv-row mb-8">
                            <!--begin::Alamat-->
                            <input placeholder="Alamat" autocomplete="on" class="form-control bg-transparent"
                                id="alamat" type="text" name="alamat" :value="old('alamat')" required autofocus />
                            <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
                            <!--end::Alamat-->
                        </div>
                        <div class="fv-row mb-8">
                            <!--begin::Email-->
                            <input placeholder="Email" autocomplete="on" class="form-control bg-transparent" id="email"
                                type="email" name="email" :value="old('email')" required />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            <!--end::Email-->
                        </div>
                        <!--end::Input group=-->
                        <div class="fv-row mb-8" data-kt-password-meter="true">
                            <!--begin::Password-->
                            <div class="mb-1">
                                <div class="position-relative mb-3">
                                    <input id="password" class="form-control bg-transparent" type="password"
                                        placeholder="Password" name="password" required autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    <span
                                        class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                        data-kt-password-meter-control="visibility">
                                        <i class="bi bi-eye-slash fs-2"></i>
                                        <i class="bi bi-eye fs-2 d-none"></i>
                                    </span>
                                </div>
                                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                </div>
                            </div>
                            <div class="text-muted">Use 8 or more characters with a mix of letters, numbers & symbols.
                            </div>
                            <!--end::Password-->
                        </div>
                        <div class="fv-row mb-8">
                            <!--begin::Repeat Password-->
                            <input placeholder="Repeat Password" id="password_confirmation" name="password_confirmation"
                                type="password" required class="form-control bg-transparent" />
                            <!--end::Repeat Password-->
                        </div>
                        <!--end::Input group=-->
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-5 mt-8">
                            <div class="form-check form-check-sm"><input name="remember" class="form-check-input"
                                    type="checkbox" value="" id="remember_me"><label class="form-check-label"
                                    for="rememberMe"> <span
                                        class="form-check-label fw-semibold text-gray-700 fs-base ms-1">I agree to
                                        <a href="#" class="ms-1 link-primary">privacy policy & terms</a></span> </label>
                            </div>
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Submit button-->
                        <div class="d-grid mb-10">
                            <button type="submit" class="btn btn-primary">
                                <!--begin::Indicator label-->
                                <span class="indicator-label">{{ __('Log in') }}</span>
                                <!--end::Indicator label-->
                                <!--begin::Indicator progress-->
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                <!--end::Indicator progress-->
                            </button>
                        </div>
                        <!--end::Submit button-->

                        <!--begin::Separator-->
                        <div class="separator separator-content my-14">
                            <span class="w-125px text-gray-500 fw-semibold fs-7">OR</span>
                        </div>
                        <!--end::Separator-->

                        <!--begin::Login options-->
                        <div class="row g-3 mb-9">
                            <!--begin::Col-->
                            <div class="col-md-6">
                                <!--begin::Google link=-->
                                <a href="#"
                                    class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                    <img alt="Logo" src="dashboards/assets/media/svg/brand-logos/google-icon.svg"
                                        class="h-15px me-3" />Sign in
                                    with Google</a>
                                <!--end::Google link=-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6">
                                <!--begin::Google link=-->
                                <a href="#"
                                    class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                    <img alt="Logo" src="dashboards/assets/media/svg/brand-logos/apple-black.svg"
                                        class="theme-light-show h-15px me-3" />
                                    <img alt="Logo" src="dashboards/assets/media/svg/brand-logos/apple-black-dark.svg"
                                        class="theme-dark-show h-15px me-3" />Sign in with Apple</a>
                                <!--end::Google link=-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Login options-->

                        <!--begin::Sign up-->
                        <div class="text-gray-500 text-center fw-semibold fs-6">Already have an Account?
                            <a href="/login" class="link-primary">Sign in</a>
                        </div>
                        <!--end::Sign up-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Authentication - Sign-in-->
</div>
@endsection