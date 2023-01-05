<?php

    include "config.php";

    if(isset($_FILES['fimg'])){
        $errors = array();

        $file_name = rand(1000,10000).$_FILES['fimg']['name'];
        $file_size = $_FILES['fimg']['size'];
        $file_tmp = $_FILES['fimg']['tmp_name'];
        $file_type = $_FILES['fimg']['type'];
        // $file_ext = strtolower(end(explode('.',$file_name)));
        $extensions = array("jpeg","jpg","png");

        if(in_array($file_ext,$extensions) === false){
            $errors[] = "This extension file not allowed, Please choose a JPG or PNG file.";
        }

        if($file_size > 2097152){
            $errors[] = "File size must be 2mb or lower.";
        }

        if(empty($errors)== true){
            move_uploaded_file($file_tmp, "img/dash_blog/".$file_name);
        }else{
            print_r($errors);
            die();
        }

    }
    session_start();
    $btitle = mysqli_escape_string($conn, $_POST['fname']);
    $bdesc = mysqli_escape_string($conn, $_POST['fdesc']);
    $bdate = date("d M, Y");
    $bauthor = $_SESSION['user_id'];


$sql = "INSERT INTO endia_blog(btitle, bcontent, bdate, badmin, bphotos) VALUES ('{$btitle}','{$bdesc}','{$bdate}',{$bauthor},'{$file_name}')";

    if(mysqli_query($conn, $sql)){
        header("location: http://localhost/p/EVSample/dashboard/dashboard-blog.php");
    }else{
        echo "<div class='alert alert-danger'>Query Failed.</div>";
    }


?>