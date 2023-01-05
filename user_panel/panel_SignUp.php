<!-- UserPanel Header page -->
<?php
include "include/userpanel-header.php";
?>
<!-- End UserPanel Header page -->

<!-- start signup form here -->
<section id="user-signup-form-sec">
    <div class="container">
        <div class="sign-panel-logoicon">
            <a href="../index.php">
                <img src="../img/logo/jibran.png" alt="" class="img-responsive" width="40px" height="40px">
                <h2>Endiavolve</h2>
            </a>   
        </div>
        <div class="row user-signup-panel">
            <div class="col-md-4 signup-panel-left-box">
                <label>Already signed up ?</label>
                <p>All users on Endiavolve will know that there are millions of people out there. Every day besides so many people joining this community.</p>
                <div class="login-signup-left-btn">
                    <a href="index.php">
                        <i class="fa-solid fa-sign-in"></i>Singin
                    </a>
                </div>
            </div>
            <div class="col-md-8 signup-panel-user-box">
                <div class="signup-panel-heading">
                    <h1 class="user-sign">SignUp</h1>
                </div>
                <form action="#">
                    <div class="signup-penel-content-info form-group">

                        <div class="signup-panel-input-form-box">
                            <label for="fname">First Name :</label>
                            <input type="text" class="fname form-control" name="fname" id="fname" placeholder="First Name">
                        </div>

                        <div class="signup-panel-input-form-box">
                            <label for="lname">Last Name :</label>
                            <input type="text" class="lname form-control" name="lname" id="lname" placeholder="Last Name">
                        </div>

                        <div class="signup-panel-input-form-box">
                            <label for="email">E-mail :</label>
                            <input type="Email" class="email form-control" name="email" id="email" placeholder="E-mail">
                        </div>

                        <div class="signup-panel-input-form-box">
                            <label for="mobi">Mobile Number :</label>
                            <input type="number" class="mobi form-control" name="mobi" id="mobi" placeholder="Mobile Number">
                        </div>

                        <div class="signup-panel-input-form-box">
                            <label for="branch">Branch :</label>
                            <select name="" class="form-control" id="branch">
                                <option value="">Select Branch</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                            </select>
                        </div>

                        <div class="signup-panel-input-form-box form-group">
                            <label for="course">Course :</label>
                            <select class="form-control" id="course">
                                <option value="">Select course</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                            </select>
                        </div>

                        <div class="signup-panel-input-form-box form-group">
                            <label for="semester">Semester :</label>
                            <select class="form-control" id="semester">
                                <option value="" selected>Select Semester</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                            </select>
                        </div>

                        <div class="signup-panel-input-form-box">
                            <label for="dob">Date of Birth :</label>
                            <input type="date" class="dob form-control" name="dob" id="dob" placeholder="DOB">
                        </div>

                        <div class="signup-panel-input-form-box">
                            <label for="pass">Password :</label>
                            <input type="password" class="pass form-control" name="pass" id="pass" placeholder="Password">
                        </div>

                        <div class="signup-panel-input-form-box">
                            <label for="cpass">Confirm Password :</label>
                            <input type="password" class="cpass form-control" name="cpass" id="cpass" placeholder="Confirm Password">
                        </div>

                        <div class="signup-panel-input-form-box">
                            <span class="gender-title">Gender :</span>
                            <div class="gender-category">
                                <br><input type="radio" name="gender" id="male">
                                <label for="male">Male</label>
                                <input type="radio" name="gender" id="female">
                                <label for="female">Female</label>
                                <input type="radio" name="gender" id="other">
                                <label for="other">Other</label>
                            </div>
                        </div>

                        <div class="signup-panel-input-form-box">
                            <label for="ufile">Upload File :</label>
                            <input type="file" class="ufile form-control" name="ufile" id="ufile" placeholder="Upload file">
                        </div>

                        <div class="signup-panel-form-submit-btn">
                            <input type="submit" value="submit" class="btn-royal" name="subbtn">
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- END signup form here -->


<!-- UserPanel Footer page -->
<?php
include "include/userpanel_footer.php";
?>
<!-- End UserPanel Footer page -->