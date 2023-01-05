<?php

include "dashboard-blog-home.php"

?>

<div class="container tabel-section">
  <div class="row">
    <h2 class="add-blog-head">ALL Records</h2>
    <div class="col-md-offset-3 col-md-6">

      <form class="row g-3" action="add-blog-savedata.php" method="POST" enctype="multipart/form-data">
        <div class="col-md-12">
          <div class="input-group">
            <span class="input-group-text"><b>Title : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></span>
            <input type="text" name="fname" class="form-control">

          </div>
        </div>



        <div class="col-md-12">
          <div class="form-floating">
            <textarea id="editor" class="form-control" rows="5" name="fdesc" placeholder="Leave a comment here" style="height: 100px"></textarea>
            <!-- <label>Description : </label> -->
          </div>
        </div>

        <div class="col-md-12">
          <div>
            <input name="fimg" type="file" class="costomFile">
          </div>
        </div>

        <div class="col-md-6 btn-form">
          <input type="submit" class="btn btn-general btn-black" name="" value="submit">
        </div>
      </form>

    </div>
  </div>
</div>


<?php

include "feedback/feedback-footer.php";

?>