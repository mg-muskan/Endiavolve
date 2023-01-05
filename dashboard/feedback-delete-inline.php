<?php

    $feed_id = $_GET['id'];
    include "config.php";
    $sql = "DELETE FROM feedbackendiavolve WHERE fid = {$feed_id}";
    $result = mysqli_query($conn,$sql) or die("query unsuccessfull!");
    header("Location: http://localhost/p/EVSample/dashboard/feedback-form.php");
    mysqli_close($conn);

?>