<!-- UserPanel Header page -->
<?php
include "include/userpanel-header.php";
?>
<!-- End UserPanel Header page -->

<section id="forgot-panel-mail-box">
    
    <div class="container forgot-panel-box-placed">
        
        <div class="row forgot-pass-box wow animate__animated animate__bounceIn">
        <div class="sign-panel-logoicon">
            <a href="../index.php">
                <img src="../img/logo/jibran.png" alt="" class="img-responsive" width="40px" height="40px">
                <!-- <h2>Endiavolve</h2> -->
            </a>
        </div>  
            <div class="forgot-pass-content-box">
                <div class="forgot-pass-content-heading">
                    <h4 class="wow animate__animated animate__zoomIn">Forgot your password</h4>
                </div>
                <div class="forgot-pass-text-box">
                    <p>Enter the email of your account to reset password.</p>
                    <p>Then you will receive a link to email to reset the password.If</p>
                    <p>you have any issue about reset password
                        <span>
                        <a style="color:#3742fa;" id="find-contact" href="#">contact us</a>
                        </span>
                    </p>
                </div>
                <div class="forgot-pass-form-box">
                    <div class="forgot-pass-input-box wow animate__animated animate__flipInX">
                        <input type="text" placeholder="Email" pattern="[^ @]*@[^ @]*" class="form-control" id="" >
                    </div>
                    <div class="forgot-pass-submit-box wow animate__animated animate__flipInX">
                        <input type="submit" class="btn-royal" value="Reset password">
                    </div>
                </div>
                <div class="forgot-pass-anchor-text">
                    <div class="forgot-pass-signin-text wow animate__animated animate__slideInLeft">
                        <a href="index.php"><label>Log in</label></a>
                    </div>
                    <div class="forgot-pass-signup-text wow animate__animated animate__slideInRight">
                        <label>Not a member?</label>
                        <a href="panel_SignUp.php"><label>sign Up</label></a>
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