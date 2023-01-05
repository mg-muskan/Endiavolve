<?php 
ob_start();
include "feedback/feedback-header.php"; ?>







<div class="container  update-area">
    <div class="row">
        <h2>Delete Records</h2>
        <div class="col-md-2"></div>
        <div class="col-md-6">
            <?php

                if(isset($_POST['deletebtn'])){
                        include "config.php";
                        $feed_id = $_POST['did'];
                        $qry = "DELETE FROM feedbackendiavolve WHERE fid = {$feed_id}";
                        $result = mysqli_query($conn,$qry) or die("query unsuccessfull!");
                        header("Location: http://localhost/p/EVSample/dashboard/feedback-form.php");
                        ob_end_flush();
                        mysqli_close($conn);

                 }

                ?>
            <form class="input-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="input-group mb-3">
                    <span class="input-group-text">Enter ID : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <input type="number" class="form-control" name="did" placeholder="Please Enter ID">
                    <input type="submit" class="btn btn btn-medium btn-black" name="deletebtn" value="Delete">

                </div>
            </form>
        </div>
    </div>

    <?php

include "feedback/feedback-footer.php";

?>