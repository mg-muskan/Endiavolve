<!DOCTYPE html>
<html lang="en">

<?php
include 'include/header.php';
?>


<body>
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <div class="career-back">
        <a href="career.php"><i class="fa-sharp fa-solid fa-circle-arrow-left fa-4x"></i></i></a>
    </div>

    <div class="professor-color-content">



        <section id="Professor-main-page">

            <div class="container">
                <div class="row">

                    <div class="col-md-6 professor-div-form">
                        <div class="professor-img-form">

                        </div>
                    </div>




                    <div class="col-md-5 p-2">

                        <div id="main-content">
                            <?php
                            @$pro_name = $_GET['id'];
                            echo '<h2><b>Apply as a ' . $pro_name . '</b></h2>';
                            ?>

                            <form class="post-form" action="professor-savedata.php" method="post">

                                <div class="form-group">
                                    <label>Full Name :</label>
                                    <input type="text" name="sname" placeholder="ENTER YOUR NAME HERE" />
                                </div>
                                <div class="form-group">
                                    <label>Mobile Number :</label>
                                    <input type="text" name="sname" placeholder="ENTER YOUR MOBILE NUMBER HERE" />
                                </div>
                                <div class="form-group">
                                    <label>Email :</label>
                                    <input type="text" name="sname" placeholder="ENTER YOUR EMAIL HERE" />
                                </div>
                                <div class="form-group">
                                    <label>Address :</label>
                                    <input type="text" name="saddress" placeholder="ENTER YOUR ADDRESS HERE" />
                                </div>

                                <div class="form-group">
                                    <label>DOMAIN NAME :</label>
                                    <select name="class">
                                        <option value="" selected disabled>Select Domain</option>
                                        <option value="1">BCA</option>
                                        <option value="2">BSC</option>
                                        <option value="3">B.TECH</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>SUB-BRANCH NAME :</label>
                                    <select name="class">
                                        <option value="" selected disabled>Select Sub-branch</option>
                                        <option value="1">BCA</option>
                                        <option value="2">BSC</option>
                                        <option value="3">B.TECH</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Subject you want to teach :</label>
                                    <select name="class">
                                        <option value="" selected disabled>Subject you want to teach </option>
                                        <option value="1">BCA</option>
                                        <option value="2">BSC</option>
                                        <option value="3">B.TECH</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Uplaod your CV</label>
                                    <input type="file" name="saddress" placeholder="ENTER YOUR ADDRESS HERE" />
                                </div>

                                <input class="submit" type="submit" value="Apply" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>











    </div>
    </section>
    </div>




    <?php

    include 'include/footer.php';
    ?>
