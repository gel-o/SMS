<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-... (the integrity hash)" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Student_Dash.css">
    <title>djprshs</title>
</head>

<body>

    <!--WELCOME (STUDENT NAME) TEXT-->
    <div class="stu_portal">
        <i class="fa-solid fa-school" style="font-size: 40px; position: relative; top: 33px; right: 150px;"></i>
        <h2 style="font-weight: bold; position: relative; right: 20px;">Welcome, </h2>
        <div class="linerist6"></div>
        <h4 style="font-size: small; position: relative; right: 60px; top: 3px;">Last Login: November 22, 2023 10:35:20
            am</h4>

    </div>

    <!--LOG IN CONTAINER-->
    <div class="container-form">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <i class="fa-regular fa-calendar-days"
                        style="position: relative; font-size: 25px; top: -43px; right: -5px;"></i>
                    <h3 style="font-size: larger; position: relative; left: 38px; top: -67px; font-weight: bold;">
                        Academic Year 2023-2024</h3>
                    <div class="linerist2"></div>
                    <h4 style="font-size: small;">Current Academic Year</h4>

                    <i class="fa-solid fa-list"
                        style="position: relative; font-size: 25px; top: 33px; right: -5px;"></i>
                    <h3 style="font-size: larger; position: relative; left: 38px; top: 8px; font-weight: bold;">3rd
                        Quarter</h3>
                    <div class="linerist3"></div>
                    <h4 style="font-size: small;">Current Quarter</h4>

                    <i class="fa-regular fa-circle-check"
                        style="position: relative; font-size: 25px; top: 33px; right: -5px;"></i>
                    <h3 style="font-size: larger; position: relative; left: 38px; top: 8px; font-weight: bold;">Enrolled
                    </h3>
                    <div class="linerist4"></div>
                    <h4 style="font-size: small;">Status</h4>

                    <i class="fa-solid fa-graduation-cap"
                        style="position: relative; font-size: 25px; top: 33px; right: -5px;"></i>
                    <h3 style="font-size: larger; position: relative; left: 38px; top: 8px; font-weight: bold;">Gr. 12 -
                        ICT/CSS</h3>
                    <div class="linerist5"></div>
                    <h4 style="font-size: small;">Strand and Year Level</h4>
                </div>
            </div>
        </div>
    </div>

    <!--NEWS AND UPDATES CONTAINER-->
    <div class="container-form-right" style="right: 18%;">
        <!-- Second container on the right side -->
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <i class="fa-regular fa-newspaper"
                        style="position: relative; top: -42px; font-size: 25px; left: 3px;"></i>
                    <h3 style="font-size: larger; position: relative; left: 38px; top: -67px;">News and Updates</h3>
                    <div class="linerist"></div>
                    <!-- Placeholder News -->
                    <div class="news">
                        <div class="news-item">
                            <h5>Important Announcement</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="news-item">
                            <h5>New Feature Update</h5>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="news-item">
                            <h5>3rd Quarterly Exam Schedule</h5>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="news-item">
                            <h5>No classes</h5>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <!-- Add more news items as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--MENU CONTAINER-->
    <div class="menu-container" style="position: relative;">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <!-- PROFILE CONTAINER -->
                    <div class="profile-container">
                        <i class="fa-solid fa-user"></i>
                        <h4>Profile</h4>
                    </div>
                    <!--CLASS ANNOUNCEMENTS-->
                    <div class="announcements-container">
                        <i class="fa-solid fa-bell"></i>
                        <h4>Class Announcements</h4>
                    </div>
                    <!-- ENROLLED SUBJECTS -->
                    <div class="enrolledsub-container">
                        <i class="fa-solid fa-book"></i>
                        <h4>Enrolled Subjects</h4>
                    </div>
                    <!-- GRADES-->
                    <div class="grades-container">
                        <i class="fa-solid fa-chart-column"></i>
                        <h4>Grades</h4>
                    </div>
                    <!-- CURRICULUM-->
                    <div class="checklist-container">
                        <i class="fa-solid fa-list-check"></i>
                        <h4>Curriculum Checklist</h4>
                    </div>
                    <!-- PREFERENCES -->
                    <div class="pref-container" id="prefContainer">
                        <i class="fa-solid fa-user-gear"></i>
                        <h4>Preferences</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PREFERENCES MODAL -->
    <div class="modal" id="darkModeModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Dark Mode Settings</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <p>Choose your preferred mode:</p>
                    <label for="darkModeToggle">Dark Mode:</label>
                    <input type="checkbox" id="darkModeToggle">
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="saveChangesBtn" data-dismiss="modal"
                        style="position: relative; top: -12px;">Save Changes</button>
                </div>

            </div>
        </div>
    </div>

    <!--SCHOOL LOGO-->
    <img src="img/school_logo.png" alt="Logo"
        style="position: absolute; top: 20px; left: 20px; width: 100px; height: auto; z-index: 2;">

    <!--ANIMATED SVG BACKGROUND-->
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="100%" height="100%" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMax slice">
        <defs>
            <linearGradient id="bg">
                <stop offset="0%" style="stop-color:rgba(130, 158, 249, 0.06)"></stop>
                <stop offset="50%" style="stop-color:rgba(76, 190, 255, 0.6)"></stop>
                <stop offset="100%" style="stop-color:rgba(115, 209, 72, 0.2)"></stop>
            </linearGradient>
            <path id="wave" fill="url(#bg)" d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
      s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z" />
        </defs>
        <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
        <g>
            <use xlink:href='#wave' opacity=".3">
                <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="10s"
                    calcMode="spline" values="270 230; -334 180; 270 230" keyTimes="0; .5; 1"
                    keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
            </use>
            <use xlink:href='#wave' opacity=".6">
                <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="8s"
                    calcMode="spline" values="-270 230;243 220;-270 230" keyTimes="0; .6; 1"
                    keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
            </use>
            <use xlink:href='#wave' opacity=".9">
                <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="6s"
                    calcMode="spline" values="0 230;-140 200;0 230" keyTimes="0; .4; 1"
                    keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
            </use>
        </g>
    </svg>

    <!-- DARK MODE JS -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            let isDarkModeToggled = false;

            // Event listener for the Preferences button
            $('#prefContainer').click(function () {
                $('#darkModeModal').modal('show'); // Show the modal on button click
            });

            // Dark mode toggle functionality
            $('#darkModeToggle').change(function () {
                isDarkModeToggled = true; // Update the flag when dark mode is toggled
            });

            // Save Changes button click
            $('#saveChangesBtn').click(function () {
                if (isDarkModeToggled) {
                    // Apply changes only if dark mode is toggled
                    if ($('#darkModeToggle').is(':checked')) {
                        $('body').addClass('dark-mode');
                        $('rect').fadeOut(function () {
                            $(this).css('fill', '#1d1717').fadeIn(); // Fade in the color change
                        });
                        $('.container-form, .container-form-right, .menu-container').fadeOut(function () {
                            $(this).css('background-color', '#5d5555').fadeIn(); // Fade in container background color change
                        });
                        $('.stu_portal h2, .stu_portal h4').fadeOut(function () {
                            $(this).css('color', 'white').fadeIn(); // Fade in text color change
                        });
                        $('.fa-solid.fa-school').fadeOut(function () {
                            $(this).css('color', 'white').fadeIn(); // Fade in icon color change
                        });
                        $('#darkModeModal .modal-content').fadeOut(function () {
                            $(this).css('background-color', '#5d5555').fadeIn(); // Fade in modal background color change
                        });
                        $('.profile-container').fadeOut(function () {
                            $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in profile container color change
                        });
                        $('.announcements-container').fadeOut(function () {
                            $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in announcements container color change
                        });
                        $('.enrolledsub-container').fadeOut(function () {
                            $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in enrolledsubs container color change
                        });
                        $('.grades-container').fadeOut(function () {
                            $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in grades container color change
                        });
                        $('.checklist-container').fadeOut(function () {
                            $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in grades container color change
                        });
                        $('.pref-container').fadeOut(function () {
                            $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in grades container color change
                        });
                        $('.linerist').fadeOut(function () {
                            $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in grades container color change
                        });
                        $('.linerist2').fadeOut(function () {
                            $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in grades container color change
                        });
                        $('.linerist3').fadeOut(function () {
                            $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in grades container color change
                        });
                        $('.linerist4').fadeOut(function () {
                            $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in grades container color change
                        });
                        $('.linerist5').fadeOut(function () {
                            $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in grades container color change
                        });
                        $('.linerist6').fadeOut(function () {
                            $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in grades container color change
                        });
                    } else {
                        $('body').removeClass('dark-mode');
                        $('rect').fadeOut(function () {
                            $(this).css('fill', 'white').fadeIn(); // Fade in the color change
                        });
                        $('.container-form, .container-form-right, .menu-container').fadeOut(function () {
                            $(this).css('background-color', 'white').fadeIn(); // Fade in container background color change
                        });
                        $('.stu_portal h2, .stu_portal h4').fadeOut(function () {
                            $(this).css('color', 'black').fadeIn(); // Fade in text color change
                        });
                        $('.fa-solid.fa-school').fadeOut(function () {
                            $(this).css('color', 'black').fadeIn(); // Fade in icon color change
                        });
                        $('#darkModeModal .modal-content').fadeOut(function () {
                            $(this).css('background-color', 'white').fadeIn(); // Fade in modal background color change
                        });
                        $('.profile-container').fadeOut(function () {
                            $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in profile container color change
                        });
                        $('.announcements-container').fadeOut(function () {
                            $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in announcements container color change
                        });
                        $('.enrolledsub-container').fadeOut(function () {
                            $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in enrolledsubs container color change
                        });
                        $('.grades-container').fadeOut(function () {
                            $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in grades container color change
                        });
                        $('.checklist-container').fadeOut(function () {
                            $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in checklist container color change
                        });
                        $('.pref-container').fadeOut(function () {
                            $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in pref container color change
                        });
                        $('.linerist').fadeOut(function () {
                            $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in grades container color change
                        });
                        $('.linerist2').fadeOut(function () {
                            $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in grades container color change
                        });
                        $('.linerist3').fadeOut(function () {
                            $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in grades container color change
                        });
                        $('.linerist4').fadeOut(function () {
                            $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in grades container color change
                        });
                        $('.linerist5').fadeOut(function () {
                            $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in grades container color change
                        });
                        $('.linerist6').fadeOut(function () {
                            $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in grades container color change
                        });
                    }
                    // Reset the flag after changes are applied
                    isDarkModeToggled = false;
                }
            });
        });

    </script>

</body>

</html>