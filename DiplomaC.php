<?php
include 'include/header.php';
include 'include/header.php';
?>


<!-- CARRICULAM -->
<div id="carriculam-header">
<div class="container">
    <div class="row">
        
        <div class="carriculam-title">
            <h1 class="c-title">Our Diploma Branches</h1>
        </div>


        <?php

include "dashboard/config.php";
$sql = "SELECT * FROM diplomacourse";
$result = mysqli_query($conn,$sql) or die("query unsuccesfully");
if(mysqli_num_rows($result)>0){


    while($row = mysqli_fetch_assoc($result)){
    ?>


    <!-- Line number One -->

        <div class="col-md-6">
            <div class="carriculam">
                <button type="button" class="carriculam__button"><b><?php echo $row['diplomaCourseName'];  ?></b></button>
                <div class="carriculam__content">
                    <p><?php echo $row['indexing'];  ?></p>
                </div>
            </div>
        </div>

        <?php
    
}
}

?>




      <!-- Courses end -->
      <!-- Clossing my courses -->

</div>
    </div>

</div>

<!-- My courses End -->


    <?php
include 'include/footer-page.php';
include 'include/footer.php';
?>
