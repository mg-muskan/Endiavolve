<?php

include "feedback/feedback-header.php";

?>

<div class="container  update-area">
    <div class="row">
    <h2>Add Feedback</h2>
        <form class="row g-3" action="savedata.php" method="POST">
            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text">Full Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <input type="text" name="fname" class="form-control">

                </div>
            </div>

            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text">&nbsp;&nbsp;Course : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <input type="text" name="fcourse" class="form-control">
                </div>
            </div>

            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text">Year/Semester : </span>
                    <input type="text" name="fyear" class="form-control">

                </div>
            </div>

            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text">Mobile Number : </span>
                    <input type="number" name="fmobinum" class="form-control">
                </div>
            </div>

            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text">&nbsp;&nbsp;&nbsp;Email : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <input type="email" name="fmail" class="form-control">

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-floating">
                    <textarea class="form-control" rows="1" name="fmess" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Messege : </label>
                </div>
            </div>
            <div class="col-md-6 btn-form">
            <input type="submit" class="btn btn-general btn-black" name="" value="submit">
            </div>
        </form>
    </div>
</div>


<?php

include "feedback/feedback-footer.php";


?>

