<?php

    $feed_id = $_POST['fid'];
    $feed_name = $_POST['fname'];
    $feed_course = $_POST['fcourse'];
    $feed_year = $_POST['fyear'];
    $feed_mobi = $_POST['fmobinum'];
    $feed_mail = $_POST['fmail'];
    $feed_msg = $_POST['fmess'];

    include "config.php";
    $qry = "UPDATE feedbackendiavolve SET ffullName='{$feed_name}',fcourse='{$feed_course}',fyearSem='{$feed_year}',fmobileNum='{$feed_mobi}',femail='{$feed_mail}',fcomment='{$feed_msg}' WHERE fid = {$feed_id}";
    $result = mysqli_query($conn, $qry) or die("Query Unsuccesfull!");

    header("location: http://localhost/p/EVSample/dashboard/feedback-form.php");
?>