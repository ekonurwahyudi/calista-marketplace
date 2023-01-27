@extends('dashboardLab.layout.app')
@section('title')
Daftar Produk
@endsection

@section('content')
<!--begin::Content-->
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--begin::Products-->
        <div class="card card-flush">
            <!--begin::Card header-->
            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                <!--begin::Card title-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-gray-800">Daftar Products</span>
                    <span class="text-gray-400 mt-1 fw-semibold fs-6">Berikut adalah daftar product</span>
                </h3>
                <!--end::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                    <div class="d-flex align-items-center fw-bold">
                        <!--begin::Label-->
                        <div class="text-gray-400 fs-7 me-2">Category</div>
                        <!--end::Label-->
                        <!--begin::Select-->
                        <select
                            class="form-select form-select-transparent text-graY-800 fs-base lh-1 fw-bold py-0 ps-3 w-auto select2-hidden-accessible"
                            data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px"
                            data-placeholder="Category" data-kt-ecommerce-product-filter="category">
                            <option value="all">Show All</option>
                            <option value="published">Kelistrikan</option>
                            <option value="scheduled">Time & Frequency</option>
                            <option value="inactive">Fiber Optic</option>
                        </select>
                        <!--end::Select-->
                    </div>
                    <div class="d-flex align-items-center fw-bold">
                        <!--begin::Label-->
                        <div class="text-gray-400 fs-7 me-2">Status</div>
                        <!--end::Label-->
                        <!--begin::Select-->
                        <select
                            class="form-select form-select-transparent text-graY-800 fs-base lh-1 fw-bold py-0 ps-3 w-auto select2-hidden-accessible"
                            data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px"
                            data-placeholder="Status" data-kt-ecommerce-product-filter="status">
                            <option value="all">Show All</option>
                            <option value="published">Published</option>
                            <option value="scheduled">Scheduled</option>
                            <option value="inactive">Inactive</option>
                        </select>
                        <!--end::Select-->
                    </div>

                    <div class="position-relative my-1">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-2 position-absolute top-50 translate-middle-y ms-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                    transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                                <path
                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <input type="text" data-kt-ecommerce-product-filter="search"
                            class="form-control w-150px fs-7 ps-12" placeholder="Search">
                    </div>
                    <a href="{{ route('add-product') }}" class="btn btn-sm fw-bold btn-danger">
                        <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2022-11-24-050857/core/html/src/media/icons/duotune/general/gen035.svg-->
                        <span class="svg-icon svg-icon-muted svg-icon-2"><svg width="24" height="24" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                    transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->Add Product
                    </a>
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                    <!--begin::Table head-->
                    <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                            <th class="w-10px pe-2">
                                No.
                            </th>
                            <th class="min-w-100px">Product</th>
                            <th class="min-w-80px">Description</th>
                            <th class="min-w-100px">Tarif</th>
                            <th class="min-w-100px">Category</th>
                            <th class="min-w-100px">Status</th>
                            <th class="min-w-100px">Actions</th>

                        </tr>
                        <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="fw-semibold text-gray-600">
                        <!--begin::Table row-->
                        @foreach ($product as $i=> $product )

                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <span class="fw-bold">{{ ++$i }}</span>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Category=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin::Thumbnail-->
                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                        class="symbol symbol-50px">
                                        <span class="symbol-label"
                                            style="background-image:url('{{ url('storage/product/'.'fotocover_'.$product->name_product.'.png')}}');"></span>
                                    </a>
                                    <!--end::Thumbnail-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                            class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                            data-kt-ecommerce-product-filter="product_name">{{ $product->name_product
                                            }}</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--begin::Rating-->
                            <td class="post-desc featured-desc">
                                <p>{{Str::limit(Strip_tags($product->des_product),80)}}</p>
                            </td>
                            <!--end::Rating-->
                            <!--end::Category=-->
                            <!--begin::SKU=-->
                            <td class="pe-0" data-order="rating-3">
                                <span class="fw-bold">
                                    @if($product->price_min != NULL)
                                    Rp. {{ number_format($product->price_min) }} - {{
                                    number_format($product->price_max) }}
                                    @else()
                                    Rp. {{ number_format($product->price_before) }}

                                    @endif

                            </td>
                            <!--end::SKU=-->
                            <!--begin::Qty=-->
                            <td class="pe-0" data-order="rating-3">
                                <span class="badge badge-light-warning">{{ $product->category_id
                                    }}</span>
                            </td>
                            <!--end::Qty=-->
                            <!--begin::Price=-->
                            <!--end::Price=-->

                            <!--begin::Status=-->
                            <td class="pe-0" data-order="published">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">{{ $product->status_product
                                    }}</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Action=-->
                            <td class="">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                            class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="/dashboards/delete/{{ $product->id}}" class="menu-link px-3">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        @endforeach
                        <!--end::Table row-->
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Products-->
    </div>
    <!--end::Content container-->
</div>
<!--end::Content-->
@endsection

@push('addon-script')
<script src="assets/js/custom/apps/ecommerce/catalog/products.js"></script>
@endpush