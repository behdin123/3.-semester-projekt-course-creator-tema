<div class="login-div">
    <ngb-modal-backdrop class="fade modal-backdrop show" style="z-index: 1050;">
        <ngb-modal-window class="d-block fade modal show">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header mx-2">
                        <p>Log in to your VIKING Safety Academy Account!</p>
                        <div class="close-btn close login-icon-div"><img class="login-icon close-icon"
                                src=" <?php the_field("cross") ?>"></div>
                    </div>
                    <div class="modal-body mx-2">
                        <form>
                            <div class="form-label-group input-group-lg"><input id="username" class="form-control"
                                    type="text" placeholder="User (email)">
                            </div>
                            <div class="form-label-group input-group input-group-lg display-flex">
                                <div class="lock-icon-box">
                                    <div class="login-icon-div">
                                        <img class="login-icon" src=" <?php the_field("lock") ?>">
                                    </div>
                                </div>
                                <input type="password" id="password" class="form-control password-input" placeholder="Password"> 
                            </div>
                            <button type="submit" value="Login" class="btn btn-primary btn-block"> Log in </button>
                        </form>
                        <div class="forgot-password justify-content-center pt-4">
                            <p>
                                or <a class="btn-link text-decoration font-size-16"
                                    href="https://central.saatsea.com/password/initiateReset">Forgot password</a>
                            </p>
                        </div>
                    </div>
                    <div class="row-modal-footer justify-content-center">
                        <p> Don't have an account? <span class="btn-link font-size-16">Sign up</span></p>
                    </div>
                    <div class="modal-footer">
                        <div class="container-modal-footer">
                            <div class="row-modal-footer justify-content-center">
                                <small> By signing up, you agree to our <a class="btn-link" target="_blank"
                                        href="https://www.viking-safetyacademy.com/info/legal/terms">Terms of
                                        Use</a> and <a class="btn-link" target="_blank"
                                        href="https://www.viking-safetyacademy.com/info/legal/gdpr">Privacy Policy</a>.
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </ngb-modal-window>
    </ngb-modal-backdrop>
</div>