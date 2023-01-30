@if (Route::has('login'))
@auth
<!-- Login Modal Start -->
<div class="modal fade popup__modal" id="addcart" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" style="width: 900px;">
        <div class=" modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="popup__form">
                    <form method="POST" action="{{ route('login') }}" class="row form__wrapper"
                        style="padding-left: 40px; padding-right: 40px;">
                        {{ csrf_field() }}
                        <div class="popup__title">
                            <h3 style="font-size: 25px"><b>Input Alat Ukur</b></h3>
                            <p>Silahkan input alat ukur yang akan dikalibrasi.</p>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="nama_alat">Nama Alat Ukur</label>
                            <input type="text" name="nama_alat" id="nama_alat" class="form-control" required
                                data-error="Please enter alat ukur" placeholder="" />
                        </div>
                        <div class="form-group col-md-2">
                            <label for="qty">Qty</label>
                            <div class="quantity quantity--outline">
                                <button type="button" class="decressQnt">
                                    <span class="bar"></span>
                                </button>
                                <input class="qnttinput" name="qty" type="number" disabled value="1" min="01"
                                    max="100" />
                                <button type="button" class="incressQnt">
                                    <span class="bar"></span>
                                </button>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="model">Model / Part Number</label>
                            <input type="text" name="model" id="model" class="form-control" required
                                data-error="Please enter model / part number" />
                        </div>
                        <div class="form-group col-md-4">
                            <label for="merk">Merk</label>
                            <input type="text" name="merk" id="merk" class="form-control" required />
                        </div>
                        <div class=" form-group col-md-4">
                            <label for="layanan">Layanan Kalibrasi</label>
                            <select name="layanan" id="layanan" class="brand-select" required>
                                <option value="inhouse" selected>Inhouse</option>
                                <option value="onsite">Onsite</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nama_sertifikat">Nama Pemilik Pada Sertifikat</label>
                            <input type="text" name="nama_sertifikat" id="nama_sertifikat" class="form-control"
                                data-error="Please enter nama sertifikat" placeholder="{{ Auth::user()->name }}" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="alamat_sertifikat">Alamat Pemilik Pada Sertifikat</label>
                            <input type="text" name="alamat_sertifikat" id="alamat_sertifikat" class="form-control"
                                placeholder="-" data-error="Please enter alamat sertifikat" />
                        </div>
                        <div class="form-group col-md-12">
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control" name="keterangan" id="keterangan" cols="30"
                                rows="4">-</textarea>
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-primary mt-0 w-100">Tambah ke Keranjang</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@else
@endauth
@endif
<!-- Login Modal End -->