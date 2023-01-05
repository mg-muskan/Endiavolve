<?php
include 'include/header.php';
include 'include/mheader.php';
?>


<!-- CARRICULAM -->
<div id="carriculam-header">
<div class="container">
    <div class="row">
        
        <div class="carriculam-title">
            <h1 class="c-title">B.E. Branches</h1>
        </div>


        <?php

include "dashboard/config.php";
$sql = "SELECT * FROM becourse";
$result = mysqli_query($conn,$sql) or die("query unsuccesfully");
if(mysqli_num_rows($result)>0){


    while($row = mysqli_fetch_assoc($result)){
?>





        <div class="col-md-6">
            <div class="carriculam">
                <button type="button" class="carriculam__button"><b><?php echo $row['BECourseName'];  ?></b></button>
                <div class="carriculam__content">
                    <p>
                    <?php echo $row['indexing'];  ?>
                    </p>
                </div>
            </div>
        </div>

 



        <?php
    
}
}

?>


  


        </div>
    </div>

</div>




        <?php
include 'include/footer-page.php';
include 'include/footer.php';
?>