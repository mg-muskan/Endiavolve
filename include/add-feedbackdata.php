<?php

$feed_name = $_POST['fname'];
$feed_course = $_POST['fcourse'];
$feed_year = $_POST['fyear'];
$feed_mobile = $_POST['fmobinum'];
$feed_email = $_POST['mail'];
$feed_mess = $_POST['mess'];

        include "../dashboard/config.php";
        $qry = "INSERT INTO feedbackendiavolve(ffullName, fcourse, fyearSem, fmobileNum, femail, fcomment) VALUES ('{$feed_name}','{$feed_course}','{$feed_year}','{$feed_mobile}','{$feed_email}','{$feed_mess}')";
        $result = mysqli_query($conn, $qry) or die("Query unsuccessful!");
        header("location: http://localhost/p/EVSample/");




?>