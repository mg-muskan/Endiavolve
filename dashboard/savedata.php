<?php

        $stu_name = $_POST['fname'];
        $stu_course = $_POST['fcourse'];
        $stu_year = $_POST['fyear'];
        $stu_mobi = $_POST['fmobinum'];
        $stu_mail = $_POST['fmail'];
        $stu_mess = $_POST['fmess'];

        include "config.php";
        $qry = "INSERT INTO feedbackendiavolve(ffullName, fcourse, fyearSem, fmobileNum, femail, fcomment) VALUES ('{$stu_name}','{$stu_course}','{$stu_year}','{$stu_mobi}','{$stu_mail}','{$stu_mess}')";
        $result = mysqli_query($conn,$qry) or die("Query Unsuccesfull!");
        header("location: http://localhost/p/EVSample/dashboard/feedback-form.php");

?>