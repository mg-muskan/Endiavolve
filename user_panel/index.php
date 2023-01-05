<!-- UserPanel Header page -->
<?php
include "include/userpanel-header.php";
?>
<!-- End UserPanel Header page -->


<section id="userPanel-signin">
   
    <div class="container user-panel-main-box">
        <div class="sign-panel-logoicon">
            <a href="../index.php">
                <img src="../img/logo/jibran.png" alt="" class="img-response" width="40px" height="40px">
                <h2>Endiavolve</h2>
            </a>
        

        </div>
        <div class="row">
            
            <div class="col-md-5 loginpanel-left-content">
                <div class="userpanel-content">
                    <h1>Welcome Back</h1>
                    <div class="loginpanel-ask">
                    <p>Don't have an account?</p>
                    </div>
                    
                    <div class="login-signup-left-btn">
                    <a href="panel_SignUp.php">
                        <i class="fa-solid fa-user-plus"></i>Singup
                    </a>
                    </div>
                    
            </div>

            </div>
            <div class="col-md-7 login-panel-box-content">
                <div class="loginpanel-heading">
                    <h1>User Login</h1>
                </div>
                <div class="loginpanel-content">
                    <form action="">
                        <div class="login-radio">
                            <div class="login-panel-radio-btn">
                                <input type="radio" class="login-radio-btn" id="left-side" name="login-radio-btn">
                                <label class="login-panel-radio-label" for="left-side">
                                    <img src="../img/Userpanel/userPanelLogin/1730590.png" class="img-responsive" width="100px" alt="">
                                    <h5>Professor</h5>
                                </label>
                            </div>

                            <div class="login-panel-radio-btn">
                                <input type="radio" class="login-radio-btn" id="right-side" name="login-radio-btn">
                                <label class="login-panel-radio-label" for="right-side">
                                    <img src="../img/Userpanel/userPanelLogin/1682610.png" class="img-responsive" width="100px" alt="">
                                    <h5>Student</h5>
                                </label>
                            </div>
                        </div>
                        <div class="inputpanel-text">
                            <i class="fa fa-user"></i>
                            <input type="text" class="login-panel-text-class" name="uname" placeholder="USERNAME">
                        </div>
                        <div class="inputpanel-text">
                            <i class="fa fa-lock"></i>
                            <input type="password" class="login-panel-text-class" name="pass" placeholder="PASSWORD">
                        </div>
                        <div class="loginpanel-other">
                        <div class="check-reminder">
                            <input type="checkbox" id="checkin">
                            <label for="checkin">
                                <span>Remember me</span>
                            </label>
                        </div>
                        <div class="login-forgate">
                            <a href="user-panel-forgoted-pass.php">Forgot password?</a>
                        </div>
                    </div>
                        <div class="inputpanel-submit">
                            <input type="submit" class="login-panel-sub" name="Usub" value="Login">
                        </div>
                    </form>
                    <div class="devider">
                        <span></span>
                    </div>
                    <div class="loginpanel-icon-box">
                        <a href="#" class="google">
                            <i class="fa-brands fa-square-google-plus">
                                <span class="signin-panel-auto-text">Google</span>
                            </i>
                        </a>
                        <a href="#" class="facebook">
                            <i class="fa-brands fa-square-facebook">
                                <span class="signin-panel-auto-text">Facebook</span>
                            </i>
                        </a>
                        <a href="#" class="linkedin">
                            <i class="fa-brands fa-linkedin">
                                <span class="signin-panel-auto-text">Linkedin</span>
                            </i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- UserPanel Footer page -->
<?php
include "include/userpanel_footer.php";
?>
<!-- End UserPanel Footer page -->