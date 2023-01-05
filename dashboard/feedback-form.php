<?php

include "feedback/feedback-header.php";

?>


<div class="container tabel-section">
    <div class="row">
        <div class="col-md-12">
            <h2>ALL Records</h2>
            <?php
                    include "../dashboard/config.php";
                    $sql = "SELECT * FROM feedbackendiavolve";
                    $result = mysqli_query($conn,$sql) or die ("qrery unsuccessful");
                    if(mysqli_num_rows($result)>0){


              ?>
            <table class="main-table">
                <thead class="table-head text-center">
                    <th>Id</th>
                    <th>Full Name</th>
                    <th>Course</th>
                    <th>Year/Semester</th>
                    <th>Moible Number</th>
                    <th>Email</th>
                    <th>Comment</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    <?php
                          while($row = mysqli_fetch_assoc($result)){
                      ?>
                    <tr>
                        <td><?php echo $row['fid']  ?></td>
                        <td><?php echo $row['ffullName']  ?></td>
                        <td><?php echo $row['fcourse']  ?></td>
                        <td><?php echo $row['fyearSem']  ?></td>
                        <td><?php echo $row['fmobileNum']  ?></td>
                        <td><?php echo $row['femail']  ?></td>
                        <td><?php echo $row['fcomment']  ?></td>
                        <td>
                            <a class="form-edit" href="feedback-edit.php?id=<?php echo $row['fid'] ?>"><i
                                    class="fa fa-edit" aria-hidden="true"></i></a>

                        </td>
                        <td>
                            <a class="form-delete" href="feedback-delete-inline.php?id=<?php echo $row['fid'] ?>"><i
                                    class="fa fa-trash-o" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    <?php
                    }
                  ?>
                </tbody>
            </table>

            <?php
                }
              ?>
        </div>
    </div>
</div>




<?php

  include "feedback/feedback-footer.php";

?>