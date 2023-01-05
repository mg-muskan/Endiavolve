<?php

  include "dashboard-blog-home.php"

?>




<div class="container tabel-section">
    <div class="row">
        <div class="col-md-12">
            <h2>ALL Records</h2>
            <?php
                    // include "../dashboard/config.php";
                    // $sql = "SELECT * FROM feedbackendiavolve";
                    // $result = mysqli_query($conn,$sql) or die ("qrery unsuccessful");
                    // if(mysqli_num_rows($result)>0){


              ?>
            <table class="main-table">
                <thead class="table-head text-center">
                    <th>Id</th>
                    <th>Author Name</th>
                    <th>Title</th>
                    <th>User</th>
                    <th>Date</th>
                    <th>Content</th>
                    <th>Photo</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    <?php
                          // while($row = mysqli_fetch_assoc($result)){
                      ?>
                    <tr>
                        <td>1<?php //echo $row['fid']  ?></td>
                        <td>Shivam Anand<?php // echo $row['ffullName']  ?></td>
                        <td>this is title<?php //echo $row['fcourse']  ?></td>
                        <td>User<?php //echo $row['fyearSem']  ?></td>
                        <td>date<?php // echo $row['fmobileNum']  ?></td>
                        <td>Content<?php //echo $row['femail']  ?></td>
                        <td>photo<?php //echo $row['fcomment']  ?></td>
                        <td>
                            <a class="form-edit" href="dash-blogs-edit.php?id=<?php // echo $row['fid'] ?>"><i
                                    class="fa fa-edit" aria-hidden="true"></i></a>

                        </td>
                        <td>
                            <a class="form-delete" href="dash-blogs-delete-inline.php?id=<?php //echo $row['fid'] ?>"><i
                                    class="fa fa-trash-o" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    <?php
                   // }
                  ?>
                </tbody>
            </table>

            <?php
                // }
              ?>
        </div>
    </div>
</div>












  <?php

  include "feedback/feedback-footer.php";

?>

  
  