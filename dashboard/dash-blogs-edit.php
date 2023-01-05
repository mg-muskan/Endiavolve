<?php

include "dashboard-blog-home.php"

?>


<div class="container  update-area">
    <div class="row">
        <h2>Update Records</h2>
        <div class="col-md-offset-3 col-md-6">


            <?php

            //     include "config.php";
            //    $feed_id = $_GET['id'];
            //     $qry = "SELECT * FROM feedbackendiavolve WHERE fid = {$feed_id}";
            //     $result = mysqli_query($conn,$qry) or die("query unsuccesfull");
            //     if(mysqli_num_rows($result)>0){
            //         while($row = mysqli_fetch_assoc($result)){

            ?>
            <form class="row g-3" action="savedata.php" method="POST">
                <div class="col-md-12">
                    <div class="input-group">
                        <span class="input-group-text"><b>Title : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></span>
                        <input type="text" name="fname" class="form-control">

                    </div>
                </div>



                <div class="col-md-12">
                    <div class="form-floating">
                        <textarea id="editor" class="form-control" rows="5" name="fmess" placeholder="Leave a comment here" style="height: 100px"></textarea>
                        <!-- <label>Description : </label> -->
                    </div>
                </div>

                <div class="col-md-12">
                    <div>
                        <input type="file" class="costomFile">
                    </div>
                </div>

                <div class="col-md-8 mainblog-page-img">
                    <img src="img/dash_blog/aspnet.webp" class="img-fluid" alt="Responsive image">
                </div>

                <div class="col-md-6">
                    <input type="submit" class="btn btn-general btn-black" name="" value="update">
                </div>


            </form>

            <?php //} } 
            ?>
        </div>
    </div>
</div>




<?php

include "feedback/feedback-footer.php";

?>