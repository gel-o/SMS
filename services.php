<?php
session_start();
include_once("connections/connection.php");
$con = connection();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylenav.css">
    <title>Dr. Jose P. Rizal Senior High School</title>
</head>

<body>
    <div class="container">
        <div class="topbar">
            <nav>
                <ul>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">News and Updates</a></li>

                </ul>
                <h4><a href="Portal_Login.php">Login</a></h4>
            </nav>
        </div>
        <div class="header">
            <a href="index.php"><img src="img/logom.png"></a>
            <a href="index.php">
                <h1>DJPRSHS</h1>
            </a>
            <h2>Dr. Jose P. Rizal Senior High School</h2>

            <nav>
                <a href="index.php #about">About Us</a>
                <a href="admission.php">Admission</a>
                <a href="courses.php">Courses</a>
                <a href="services.php">Services</a>
            </nav>
        </div>

        <div class="admission">
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>Services</li>
            </ul>
            <h4>Services</h4>
        </div>
        <div class="footer">
            <img src="img/gov.png" class="gov">
            <img src="img/download.jfif" class="divi">
            <img src="img/download (1).jfif" class="dasma">
            <img src="img/DepEd-Website-header-110px_1.png" class="deped">
            <div class="government">
                <h4>Government Links</h4> <br>
                <a href="https://www.gov.ph/" target="_blank">Government PH</a> <br>
                <a href="https://depeddasma.edu.ph/" target="_blank">City Schools of Dasmarinas</a> <br>
                <a href="https://www.facebook.com/DepEdTayoDasmarinasCity/ " target="_blank">Dasmarinas PH</a> <br>
                <a href="https://www.deped.gov.ph/" target="_blank">DepEd PH</a>
            </div>
            <div class="contacts">
                <h4>Contact Information</h4><br>
                <p>
                    Brgy. Sto. Cristo, Dasmarinas City, Cavite <br>
                    djprshs.342300@gmail.com <br>
                    (046) 404 6201 <br>
                    DepEd Tayo Dr. Jose P. RIzal Senior High School
                    </p>
            </div>
        </div>

    </div>
</body>

</html>