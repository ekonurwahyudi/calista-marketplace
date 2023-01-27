<!-- Forget Modal Start -->
<div class="modal fade popup__modal" id="forget" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="popup__form">
                    <div class="popup__logo">
                        <a href="/marketplace"><img src="{{ url('assets/images/logo/logo-white.png') }}"
                                alt="logo" /></a>
                    </div>
                    <div class="popup__bg">
                        <img src="{{ url('assets/images/popup/p-bg-02.jpg') }}" alt="popup-bg" />
                    </div>
                    <form action="#" class="form__wrapper">
                        <div class="popup__title">
                            <h2>Forgot password</h2>
                            <p>No worries, We’ll send you reset your passward.</p>
                        </div>
                        <div class="form-group">
                            <label for="email3">Email</label>
                            <input type="email" name="email" id="email3" class="form-control" required
                                data-error="Please enter email" placeholder="Enter your email" />
                        </div>
                        <div class="submit__btn">
                            <button type="submit" class="btn btn-primary mt-0 w-100">Reset Passward</button>
                        </div>
                        <div class="account__desc">
                            <div class="account__meta">
                                Remember password? Back to
                                <a href="#" data-bs-target="#login" data-bs-toggle="modal"
                                    data-bs-dismiss="modal">login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Forget Modal End -->