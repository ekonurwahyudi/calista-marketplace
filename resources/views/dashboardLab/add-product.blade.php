@extends('dashboardLab.layout.app')
@section('title')
Add Product
@endsection
@push('addon-script')
<link rel="stylesheet" href="https://telkomcalibration.com/halamanadmin/css/dropify.min.css">
@endpush
@section('content')
<!--end::Toolbar-->
<!--begin::Content-->
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--begin::Form-->
        <form method="POST" id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row"
            action="{{ route('store-product') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <!--begin::Main column-->
            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                <div class="tab-content">
                    <!--begin::Tab pane-->
                    <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                        <div class="d-flex flex-column gap-7 gap-lg-10">
                            <!--begin::General options-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-800">Produk Detail</span>
                                        <span class="text-gray-400 mt-1 fw-semibold fs-6">Silahkan menambahkan produk
                                            detail kamu dibawah ini.</span>
                                    </h3>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">Product Name</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
                                        <input type="text" name="lab_id" value="{{ Auth::user()->laboratorium->id }}"
                                            hidden>
                                        <input type="text" name="name_product" class="form-control mb-2"
                                            placeholder="Product name" value="" required />
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">A product name is required
                                            and recommended to be unique.</div>

                                        @if($errors->has('name_product'))
                                        <div class="text-danger">
                                            {{ $errors->first('name_product')}}
                                        </div>
                                        @endif
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">Categories</label>
                                        <!--end::Label-->
                                        <select class="form-select mb-2" data-control="select2" name="category_id"
                                            data-placeholder="Select an option" data-allow-clear="true">
                                            <option></option>
                                            <option value="Time & Frequency">Time & Frequency</option>
                                            <option value="Electrical">Electrical</option>
                                            <option value="Fiber Optic">Fiber Optic</option>
                                        </select>
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Add product to a category.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div>
                                        <!--begin::Label-->
                                        <label class="required form-label">Description</label>
                                        <!--end::Label-->
                                        <!--begin::Editor-->
                                        <textarea name="des_product" id="kt_summernote_1"
                                            class="summernote form-control" class="min-h-200px mb-2"
                                            required></textarea>
                                        <!--end::Editor-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Set a description to the
                                            product for better visibility.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::General options-->
                            <!--begin::Media-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Photo Product</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Input group-->
                                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                                        <!--begin::Dropzone-->
                                        <div class="col">
                                            <input type="file" name="foto_1" class="form-control  dropify" />
                                        </div>
                                        <div class="col">
                                            <input type="file" name="foto_2" class="form-control  dropify" />
                                        </div>
                                        <div class="col">
                                            <input type="file" name="foto_3" class="form-control  dropify" />
                                        </div>
                                        <div class="col">
                                            <input type="file" name="foto_4" class="form-control  dropify" />
                                        </div>
                                        <div class="col">
                                            <input type="file" name="foto_5" class="form-control  dropify" />
                                        </div>
                                        <!--end::Dropzone-->
                                        <p style="color:red;">Max Foto Product 5</p>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set the product media gallery.
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::Media-->
                            <!--begin::Pricing-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Tarif Kalibrasi</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">Tarif Sebelum Diskon</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="number" name="price_before" class="form-control mb-2"
                                            placeholder="Masukkan Tarif Kalibrasi" value="" required />
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Set the product price.
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--begin::Tax-->
                                    <div class="d-flex flex-wrap gap-5">
                                        <!--begin::Input group-->
                                        <div class="fv-row w-100 flex-md-root">
                                            <!--begin::Label-->
                                            <label class="form-label">Tarif Min.</label>
                                            <!--end::Label-->
                                            <!--begin::Select2-->
                                            <input type="number" class="form-control mb-2" name="price_min" value=""
                                                placeholder="Tarif Kalibrasi minimal" />
                                            <!--end::Select2-->
                                            <!--begin::Description-->
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <Span class="mt-12"> - </Span>
                                        <!--begin::Input group-->
                                        <div class="fv-row w-100 flex-md-root">
                                            <!--begin::Label-->
                                            <label class="form-label">Tarif Max.</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="number" class="form-control mb-2" name="price_max" value=""
                                                placeholder="Tarif Kalibrasi maximal" />
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Masukkan Tarif Max.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->

                                    </div>
                                    <p style="color:red;">Masukkan harga Min dan Max jika kalibrasi memiliki
                                        range tarif.</p>
                                    <!--end:Tax-->

                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::Pricing-->
                        </div>
                    </div>
                    <!--end::Tab pane-->
                </div>
                <!--end::Tab content-->
                <div class="d-flex justify-content-end">
                    <!--begin::Button-->
                    <a onclick="history.back()" id="kt_ecommerce_add_product_cancel"
                        class="btn btn-light me-5">Cancel</a>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                        <span class="indicator-label">Save Changes</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--end::Button-->
                </div>
            </div>
            <!--end::Main column-->
            <!--begin::Aside column-->
            <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10"
                style="margin-left: 20‒; margin-left: 20px;">
                <!--begin::Thumbnail settings-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h3 class="required">Foto Cover Product</h3>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body text-center pt-0">
                        <!--begin::Image input-->
                        <!--begin::Image input placeholder-->
                        <style>
                            .image-input-placeholder {
                                background-image: url('assets/media/svg/files/blank-image.svg');
                            }

                            [data-theme="dark"] .image-input-placeholder {
                                background-image: url('assets/media/svg/files/blank-image-dark.svg');
                            }
                        </style>
                        <!--end::Image input placeholder-->
                        <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                            data-kt-image-input="true">
                            <!--begin::Preview existing avatar-->
                            <div class="image-input-wrapper w-150px h-150px"></div>
                            <!--end::Preview existing avatar-->
                            <!--begin::Label-->
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                <i class="bi bi-pencil-fill fs-7"></i>
                                <!--begin::Inputs-->
                                <input type="file" name="foto_cover" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="foto_cover" required />
                                <!--end::Inputs-->
                            </label>
                            <!--end::Label-->
                            <!--begin::Cancel-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            <!--end::Cancel-->
                            <!--begin::Remove-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            <!--end::Remove-->
                        </div>
                        <!--end::Image input-->
                        <!--begin::Description-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Thumbnail settings-->
                <!--begin::Status-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h3 class="required">Status</h3>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Select2-->
                        <select class="form-select mb-2" name="status_product" data-control="select2"
                            data-hide-search="true" data-placeholder="Select an option"
                            id="kt_ecommerce_add_product_status_select" required>
                            <option></option>
                            <option value="published" selected="selected">Published</option>
                            <option value="draft">Draft</option>
                            <option value="inactive">Inactive</option>
                        </select>
                        <!--end::Select2-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7">Set the product status.</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Status-->
            </div>
            <!--end::Aside column-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Content container-->
</div>
<!--end::Content-->
@endsection

@push('addon-script')
<script>
    // Class definition

            var KTSummernoteDemo = function () {
            // Private functions
            var demos = function () {
            $('.summernote').summernote({
            height: 350
            });
            }

            return {
            // public functions
            init: function() {
            demos();
            }
            };
            }();

            // Initialization
            jQuery(document).ready(function() {
            KTSummernoteDemo.init();
            });
</script>
<script src="https://telkomcalibration.com/halamanadmin/js/dropify.min.js"></script>
<script src="https://telkomcalibration.com/halamanadmin/js/dropify.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="assets/plugins/custom/formrepeater/formrepeater.bundle.js"></script>
<script src="assets/js/custom/apps/ecommerce/catalog/save-product.js"></script>
@endpush