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
    <link rel="stylesheet" href="css/style.css">
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
                <h4><a href="New_Portal_Login.php">Login</a></h4>
            </nav>
        </div>
        <div class="header">
            <a href=""><img src="img/logom.png"></a>
            <a href="">
                <h1>DJPRSHS</h1>
            </a>
            <h2>Dr. Jose P. Rizal Senior High School</h2>

            <nav>
                <a href="#about">About Us</a>
                <a href="admission.php">Admission</a>
                <a href="courses.php">Courses</a>
                <a href="services.php">Services</a>
            </nav>
        </div>

        <div class="front">
            <img src="img/logo.jpg">
        </div>

        <div class="callout">
            <div class="admission">
                <h1>Admission Procedures</h1>
                <p>Check the requirements and <br> procedures for admission</p>
                <a href="">Apply Now</a>
            </div>
            <div class="academic">
                <h1>Academic and TVL Strands</h1>
                <p>Study and Improve your Skills. Check out <br> available Academic and TVL Strands on us.</p>
                <a href="">Learn More</a>
            </div>
        </div>

        <div class="info" id="about">
            <h1>HUSAY RIZALIANO: A RESPONSE TO RIZAL’S CALL FOR EXCELLENCE.</h1>
            <p>Dr. Jose P. Rizal Senior High School with School ID 342300 is located at Brgy. Sto. Cristo, DBB1, City of
                Dasmariñas, Cavite is one of the <br>
                three (3) Stand-alone Senior High Schools in the City Schools Division of Dasmariñas operating since
                School Year 2017-2018. <br>
                <br>
                It was established by virtue of Resolution No. 102-S-2016 by the City Council on June 6, 2016. <br>
                It started its operation in June 5, 2017 with two tracks offered namely: Academic and TVL. Under the
                Academic track, GAS and ABM. Under TVL track, CSS, CBF and EIM. <br>
                It has a four – storey twelve (12) classrooms building, some of the classrooms are <br>
                utilized as CBF laboratory, EIM laboratory, Computer laboratory, Science laboratory and Faculty room.
            </p> <br>
        </div>
        <div class="numbers">
            <img src="img/book.png" class="book">
            <img src="img/people (1).png" class="people">
            <img src="img/people (2).png" class="staff">
            <p class="num1">9</p>
            <p class="num2">990</p>
            <p class="num3">30</p>
            <p class="text1">Academic Programs</p>
            <p class="text2">Enrolled Students</p>
            <p class="text3">Faculty and Staff</p>
        </div>
        <div class="vision">
            <h1>VISION</h1>
            <p>Dr. Jose P. Rizal Senior High School as a public educational
                institution envisioned its graduates to be responsible, industrious,
                zealous, active, loving, innovative, altruistic and nationalistic 21st
                century individuals whose skills, competencies and values are
                aligned to the vision, mission and core values of the Department
                of Education for the purpose of attaining educational objectives
                in the local and global community setting.</p>
        </div>
        <div class="mission">
            <h1>MISSION</h1>
            <p>Dr. Jose P. Rizal Senior High School is committed to inculcate theoretical and practical knowledge with
                holistic
                academic and technical skills among its students while instilling love of God and country. <br><br>

                Specifically, it commits itself to: <br><br>
                •1. Mold students on the skills, competencies and values related to their field of specialization;<br>
                •2. Deliver quality, accessible, inclusive and relevant education by constantly updating its curricular
                <br>
                offerings responsive to the demands of the industry and the community;<br>
                •3. Nurture competent, dedicated and passionate faculty members who will fully deliver the expected <br>
                quality teaching and learning activities which is student centered; <br>
                •4. Empower non – teaching personnel to provide quality and efficient services; <br>
                •5. Provide technologically - equipped educational facilities aligned to the standards of the industry
                <br>
                and the Department of Education; and, <br>
                •6. Produce competitive graduates who possess skills, competencies and values that are responsive to
                <br>
                the needs of the industry and the community both in the local and global community setting.
            </p>
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