<!--Modal: Login / Register Form-->
<div class="modal fade" id="loginRegisterModal" tabindex="-1" role="dialog" aria-labelledby="loginRegisterModal" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-2 light-blue darken-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#loginPanel" role="tab"><i class="fa fa-user mr-1"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#registerPanel" role="tab"><i class="fa fa-user-plus mr-1"></i> Register</a>
                    </li>
                    <li style="display: none">
                        <a id="fp-tab-link" data-toggle="tab" href="#forgotPasswordPanel" role="tab"></a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                    <!-- Login panel -->
                    <div class="tab-pane fade in show active" id="loginPanel" role="tabpanel">
                        <form id="loginForm">
                            <!--Body-->
                            <div class="modal-body mb-1">
                                <div class="md-form form-sm">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="text" id="loginEmail" class="form-control">
                                    <label for="loginEmail">Your email</label>
                                </div>

                                <div class="md-form form-sm">
                                    <i class="fa fa-lock prefix"></i>
                                    <input type="password" id="loginPassword" class="form-control">
                                    <label for="loginPassword">Your password</label>
                                </div>
                                <div class="text-center mt-2">
                                    <button type="submit" class="btn btn-info loader">Log in <i class="fa fa-sign-in ml-1"></i></button>
                                </div>
                            </div>
                            <!--Footer-->
                            <div class="modal-footer display-footer">
                                <div class="options text-center text-md-right mt-1">
                                    <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                                    <p>Forgot <a class="blue-text" id="forgot-password-link">Password?</a></p>
                                </div>
                                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                            </div>

                        </form>
                    </div>
                    <!-- Login panel -->

                    <!-- Register panel -->
                    <div class="tab-pane fade" id="registerPanel" role="tabpanel">

                        <!--Body-->
                        <div class="modal-body">
                            <div class="md-form form-sm">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="text" id="form24" class="form-control">
                                <label for="form24">Your email</label>
                            </div>

                            <div class="md-form form-sm">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="form25" class="form-control">
                                <label for="form25">Your password</label>
                            </div>

                            <div class="md-form form-sm">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="form26" class="form-control">
                                <label for="form26">Repeat password</label>
                            </div>

                            <div class="text-center form-sm mt-2">
                                <button class="btn btn-info">Sign up <i class="fa fa-sign-in ml-1"></i></button>
                            </div>

                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-right">
                                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- Register panel -->

                    <!-- Forgot password panel -->
                    <div class="tab-pane fade" id="forgotPasswordPanel" role="tabpanel">
                        <form id="forgotPasswordForm">
                            <!--Body-->
                            <div class="modal-body mb-1">
                                <div class="md-form form-sm">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="text" id="forgotPasswordEmail" class="form-control">
                                    <label for="forgotPasswordEmail">Your email</label>
                                </div>
                                <div class="text-center mt-2">
                                    <button type="submit" class="btn btn-info">Send Request <i class="fa fa-sign-in ml-1"></i></button>
                                    <p>Please enter your email to send request for resetting password.</p>
                                </div>
                            </div>
                            <!--Footer-->
                            <div class="modal-footer display-footer">
                                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                    <!-- Forgot password panel -->

                </div>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Login / Register Form-->