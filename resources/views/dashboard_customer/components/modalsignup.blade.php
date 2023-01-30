<!-- SingUp Modal Start -->
<div class="modal fade popup__modal" id="signup" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="popup__form">
                    <div class="popup__logo">

                    </div>
                    <div class="popup__bg" style="height: 700px;">
                        <img src="{{ url('assets/images/popup/p-bg-01.jpg') }}" alt="popup-bg" />
                    </div>
                    <form action="#" class="form__wrapper">
                        <div class="popup__title ">
                            <h2>Create Account</h2>
                        </div>
                        <div class="form-group">
                            <div class="account__desc justify-content-around">
                                <div class="account__meta">
                                    Perusahan belum terdaftar?
                                    <a href="#" data-bs-target="#login" data-bs-toggle="modal"
                                        data-bs-dismiss="modal">Daftakan!</a>
                                </div>
                            </div>
                            <select name="cars" id="cars" class="form-control" required>
                                <option value="volvo">PT. Yamaha Music</option>
                                <option value="saab">PT. GMF</option>
                                <option value="opel">PT. Maspion</option>
                                <option value="audi">PT. Telkom Akses</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" id="name2" class="form-control" required
                                data-error="Please enter name" placeholder="Nama Lengkap" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" id="name2" class="form-control" required
                                data-error="Please enter name" placeholder="Nomor Handphone" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" id="name2" class="form-control" required
                                data-error="Please enter name" placeholder="Alamat" />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email2" class="form-control" required
                                data-error="Please enter email" placeholder="Email" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="pass2" class="form-control" required
                                data-error="Please enter password" placeholder="Password" />
                        </div>
                        <div class="submit__btn">
                            <button type="submit" class="btn btn-primary mt-0 w-100">Create Account</button>
                        </div>
                        <div class="account__desc justify-content-center">
                            <div class="account__meta">
                                Already have an account?
                                <a href="#" data-bs-target="#login" data-bs-toggle="modal"
                                    data-bs-dismiss="modal">Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SingUp Modal End -->