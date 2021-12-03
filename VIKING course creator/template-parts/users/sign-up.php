<div class="login-div">
    <ngb-modal-backdrop class="fade modal-backdrop-sigUp show" style="z-index: 1050;">
        <ngb-modal-window class="d-block fade modal show">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0 mx-2 mt-2">
                        <p>Create an account</p>
                        <div class="close-btn close login-icon-div"><img class="login-icon close-icon-SignUp"
                                src=" <?php the_field("cross") ?>"></div>
                    </div>
                    <div class="modal-header border-bottom-0 mx-2 mt-2">
                        <p>You'll need an account to buy the course creator softwear</p>
                    </div>
                    <div class="modal-body mx-2">
                        <form>
                            <div class="form-label-group input-group input-group-lg">
                                <input  id="yourName" VALUE="" class="form-control" type="text" required="required"><label for="yourName">First name</label>
                            </div>
                            <div class="form-label-group input-group input-group-lg">
                                <input id="lastName" type="text" class="form-control" required="required"><label for="lastName">Last name</label>
                            </div>
                            <div class="form-label-group input-group input-group-lg">
                                <input id="Email" type="email" class="form-control" required="required"><label for="Email">Email</label>
                            </div>
                            <div class="form-label-group input-group input-group-lg">
                                <input id="Pas" type="password" class="form-control" required="required"><label for="Pas">Password</label>
                            </div>
                            <div class="form-label-group input-group input-group-lg">
                                <input id="RetypePas" type="password" class="form-control" required="required"><label for="RetypePas">Retype password</label>
                            </div>
                            
                        </form>
                    </div>
                    <div class="custom-control custom-checkbox mb-4 ">
                        <input type="checkbox" id="newsletter" formcontrolname="newsletter"
                            class="custom-control-input ng-valid ng-dirty ng-touched"><label for="newsletter"
                            class="custom-control-label"> Yes! I wish to receive information on upcoming deals, updates and
                            personal deals! </label>
                    </div>
                    <button type="submit" value="Login" class="btn btn-primary btn-block signUp-btn-margin-width"> Sign up </button>
                    <div class="modal-footer">
                        <div class="container-modal-footer">
                            <div class="row-modal-footer justify-content-center">
                                <small> By signing up, you agree to our <a class="btn-link" target="_blank"
                                        href="https://www.viking-safetyacademy.com/info/legal/terms">Terms of
                                        Use</a> and <a class="btn-link" target="_blank"
                                        href="https://www.viking-safetyacademy.com/info/legal/gdpr">Privacy Policy</a>.
                                </small>
                                <p>
                                    Already have an account? <span class="btn-link cursor-pointer">Log in</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </ngb-modal-window>
    </ngb-modal-backdrop>
</div>