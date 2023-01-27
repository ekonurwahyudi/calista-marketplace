<!-- Login Modal Start -->
<div class="modal fade popup__modal" id="login" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="popup__form">
                    <div class="popup__logo">
                    </div>
                    <div class="popup__bg">
                        <img src="{{ url('assets/images/popup/p-bg-02.jpg') }}" alt="popup-bg" />
                    </div>
                    <form action="#" class="form__wrapper">
                        <div class="popup__title">
                            <h2>Login</h2>
                        </div>
                        <div class="login__access">
                            <a href="#" class="btn btn-outline"><img src="{{ url('assets/images/google.png') }}"
                                    alt="google" />Sign
                                up with Google</a>
                            <a href="#" class="btn btn-outline"><img src="{{ url('assets/images/facebook.png') }}"
                                    alt="facebook" />Sign up with Facebook</a>
                        </div>
                        <div class="devider text-center">- OR -</div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required
                                data-error="Please enter email" placeholder="Enter your email" />
                        </div>
                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" name="password" id="pass" class="form-control" required
                                data-error="Please enter password" placeholder="Password" />
                        </div>
                        <div class="submit__btn">
                            <button type="submit" class="btn btn-primary mt-0 w-100">Login</button>
                        </div>
                        <div class="account__desc">
                            <div class="account__meta">
                                Don’t have an account?
                                <a href="#" data-bs-target="#signup" data-bs-toggle="modal" data-bs-dismiss="modal">Sign
                                    up</a>
                            </div>
                            <a href="#" data-bs-target="#forget" data-bs-toggle="modal" data-bs-dismiss="modal">Forgot
                                Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Modal End -->