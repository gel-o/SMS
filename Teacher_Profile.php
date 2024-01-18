<?php
session_start();
// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: Portal_Login.php"); // Redirect to the login page if not logged in
    exit();
}
// Database connection
include_once("connections/connection.php");
$con = connection();

// Retrieve user information
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id = '$user_id'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    // Handle the case where the user is not found
    echo "User not found.";
    exit();
}

$con->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-... (the integrity hash)" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Teacher_Profile.css">
    <title>djprshs</title>
</head>





<body>

    <!-- bg -->
    <div class='box'>
        <div class='wave -one'></div>
        <div class='wave -two'></div>
        <div class='wave -three'></div>
    </div>


    <!-- PERSONAL DETAILS -->
    <div class="personaldet">
        <h3>Personal Details</h3>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <h4>Full Name</h4>
                <div class="fullname-cont">
                    <div class="container mt-5"></div>
                    <p>
                        <?php echo $user['firstName']." ".$user['middleInitial']." ".$user['lastName'];?>
                    </p>
                </div>
                <h4 style="top: 35%;">Birth Date</h4>
                <div class="bday-cont">
                    <div class="container mt-5"></div>
                    <p>
                        <?php echo $user['birth_date']?>
                    </p>
                </div>
                <h4 style="top: 51%; left: 7%;">Sex</h4>
                <div class="seggs-cont">
                    <div class="container mt-5"></div>
                    <p>Male</p>
                </div>
                <h4 style="top: 65%; left: 6%;">Religion</h4>
                <div class="rel-cont">
                    <div class="container mt-5"></div>
                    <p>
                        <?php echo $user['Religion']?>
                    </p>
                </div>
                <h4 style="top: 78%; left: 5em;">Civil Status</h4>
                <div class="civ-cont">
                    <div class="container mt-5"></div>
                    <p>
                        <?php echo $user['Civil Status']?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- CONTACT DETAILS -->
    <div class="contactdet">
        <h3>Contact Details</h3>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <h4 style="left: 7%;">Address</h4>
                <div class="add-cont">
                    <div class="container mt-5"></div>
                    <p>
                        <?php echo $user['Address']?>
                    </p>
                </div>
                <h4 style="top: 43%;">Guardian</h4>
                <div class="guard-cont">
                    <div class="container mt-5"></div>
                    <p>
                        <?php echo $user['Guardian']?>
                    </p>
                </div>
                <h4 style="top: 60%; left: 7%;">Contact Number</h4>
                <div class="num-cont">
                    <div class="container mt-5"></div>
                    <p>
                        <?php echo $user['Contact Number']?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--SCHOOL LOGO-->
    <a href="Teacher_Dash.php">
        <img src="img/school_logo.png" alt="Logo"
            style="position: absolute; top: 20px; left: 20px; width: 65px; height: auto; z-index: 2;">
    </a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            let isDarkModeToggled = false;
            let storedDarkMode = localStorage.getItem('darkMode');

            // Function to save dark mode state to localStorage
            function saveDarkModeState(isDarkModeOn) {
                localStorage.setItem('darkMode', isDarkModeOn);
            }

            // Event listener for the dark mode toggle
            $('#darkModeToggle').change(function () {
                isDarkModeToggled = true;
                saveDarkModeState($('#darkModeToggle').is(':checked')); // Save state to localStorage
            });

            if (storedDarkMode === null || storedDarkMode === undefined) {
                storedDarkMode = 'false'; // Set a default value if storedDarkMode is null or undefined
            }

            // Dark mode toggle functionality
            $('#darkModeToggle').change(function () {
                isDarkModeToggled = true; // Update the flag when dark mode is toggled
            });

            if (storedDarkMode === 'true') {
                // Apply your dark mode changes similar to the ones within your toggle function
                // For example:
                $('body').addClass('dark-mode');
                $('body').fadeTo(function () {
                    $(this).css('background-color', '#3e3636').fadeIn();
                });
                $('.personaldet, .contactdet').fadeTo(function () {
                    $(this).css('background-color', '#5d5555').fadeIn(); // Fade in container background color change
                });
                $('.personaldet h3, .personaldet h4, .contactdet h3, .contactdet h4').fadeTo(function () {
                    $(this).css('color', 'white').fadeIn(); // Fade in text color change
                });
                $('.fullname-cont, .bday-cont, .seggs-cont, .rel-cont, .civ-cont, .add-cont, .guard-cont, .num-cont').fadeTo(function () {
                    $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in text color change
                });
                $('.fullname-cont p, .bday-cont p, .seggs-cont p, .rel-cont p, .civ-cont p, .add-cont p, .guard-cont p, .num-cont p').fadeTo(function () {
                    $(this).css('color', 'white').fadeIn(); // Fade in text color change
                });
            } else {
                $('body').removeClass('dark-mode');
                $('body').fadeTo(function () {
                    $(this).css('background-color', '#0e6cc4').fadeIn();
                });
                $('.personaldet, .contactdet').fadeTo(function () {
                    $(this).css('background-color', 'white').fadeIn(); // Fade in container background color change
                });
                $('.personaldet h3, .personaldet h4, .contactdet h3, .contactdet h4').fadeTo(function () {
                    $(this).css('color', 'black').fadeIn(); // Fade in text color change
                });

                // Save the dark mode state even if it's turned off
                if (isDarkModeToggled) {
                    saveDarkModeState(false); // Save the state as 'false'
                    isDarkModeToggled = false; // Reset the toggle flag
                }

            }
        });
    </script>

</body>


</html>