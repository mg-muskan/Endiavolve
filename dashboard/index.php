<?php

include "config.php";

session_start();

if (isset($_SESSION["emailt"])) {
    header("Location: {$hostname}/dashboard/dash.php");
}

?>




<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <title>DASHBOARD</title>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap 5 CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashstyle.css" rel="stylesheet">
</head>
<body id="login-body">

    <div id="login">
        <h1 class="text-center">ENDIAVOVE DASHBOARD!</h1>
        <!--==========================================================
                              LOG IN FORM START
        ===========================================================-->
        <form class="needs-validation" action="<?php $_SERVER['PHP_SELF'];  ?>" method="POST">

            <div class="form-group was-validated">
                <label class="form-label" for="email">Email address :</label>
                <input class="form-control" name="emailt" type="text" placeholder="EMAIL ADDRESS" id="email" required>
                <div class="invalid-feedback">
                    Please enter your email address
                </div>
            </div>

            <div class="form-group was-validated">
                <label class="form-label" for="email">Password :</label>
                <input class="form-control" name="password" type="password" placeholder="PASSWORD" id="pass" required>
                <div class="invalid-feedback">
                    Please enter your Password
                </div>
            </div>

            <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" id="chech">
                <label class="form-check-label" for="check">Remember me</label>
            </div>

            <input class="btn dash-button w-100" type="submit" name="login" value="SignIn!">
        </form>
        <!--==========================================================
                             LOG IN FORM END
        ===========================================================-->

        <!-- php codes -->

        <?php

        if (isset($_POST['login'])) {
            include "config.php";
            $email = mysqli_real_escape_string($conn, $_POST['emailt']);
            $password = md5($_POST['password']);

            $sql = "SELECT user_id, username FROM user WHERE username ='{$email}' AND password = '{$password}'";
 
            $result = mysqli_query($conn, $sql) or die("query Failed.");

            if(mysqli_num_rows($result)>0){

                while($row = mysqli_fetch_assoc($result)){
                    session_start();
                     $_SESSION["emailt"] = $row['username'];
                     $_SESSION["user_id"] = $row['user_id'];

                    header("Location: http://localhost/p/EVSample/dashboard/dash.php");

                }

            }else{
                echo '<div class="alert alert-danger">Username and password are not matched.</div>';
            }
        }

        ?>

    </div>



</body>

</html>