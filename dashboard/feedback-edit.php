<?php

include "feedback/feedback-header.php";

?>

<div class="container  update-area">
    <div class="row">
    <h2>Update Records</h2>

    <?php

        include "config.php";
       $feed_id = $_GET['id'];
        $qry = "SELECT * FROM feedbackendiavolve WHERE fid = {$feed_id}";
        $result = mysqli_query($conn,$qry) or die("query unsuccesfull");
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){

    ?>
        <form class="row g-3" action="feeddata_updatedata.php" method="POST">
            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text">Full Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <input type="hidden" name="fid" value = "<?php echo $row['fid'] ?>" class="form-control">
                    <input type="text" name="fname" value = "<?php echo $row['ffullName'] ?>" class="form-control">

                </div>
            </div>

            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text">&nbsp;&nbsp;Course : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <input type="text" name="fcourse" value = "<?php echo $row['fcourse'] ?>" class="form-control">
                </div>
            </div>

            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text">Year/Semester : </span>
                    <input type="text" name="fyear" value = "<?php echo $row['fyearSem'] ?>" class="form-control">

                </div>
            </div>

            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text">Mobile Number : </span>
                    <input type="number" name="fmobinum" value = "<?php echo $row['fmobileNum'] ?>" class="form-control">
                </div>
            </div>

            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text">&nbsp;&nbsp;&nbsp;Email : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <input type="email" name="fmail" value = "<?php echo $row['femail'] ?>" class="form-control">

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-floating">
                    <textarea class="form-control" rows="1" name="fmess" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"> <?php echo $row['fcomment'] ?></textarea>
                    <label for="floatingTextarea2">Messege : </label>
                </div>
            </div>
            <div class="col-md-6 btn-form">
            <input type="submit" class="btn btn-general btn-black" name="" value="submit">
            </div>
        </form>
        <?php } } ?>
    </div>
</div>

<?php

include "feedback/feedback-footer.php";

?>