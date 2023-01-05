<?php

include "config.php";

session_start();

if (!isset($_SESSION["emailt"])) {
    header("Location: {$hostname}/dashboard/");
}

?>

<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
    <!-- Requird meta Tags -->
    <meta charset="utf-8">
    <meta name="description" content="Bulding modern responsive website with html5, css3, jQuery & bootstrap framwork">
    <meta name="keywords" content="HTML5, CSS3, jQuery, Bootstrap, Web Design, Web Development, Responsive website,Modern website">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <title>ENDIAVOLVE</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../img/headlogo.jpg" />
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animated/animated.css" type="text/css">
    <!-- magnific-popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup/magnific-popup.css" type="text/css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper bundle/swiper-bundle.min.css">
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashstyle.css" rel="stylesheet">
</head>

