<?php
include_once("connections/connection.php");
$con = connection();
session_start();

// login form processing
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // query the database to check if the user exists
    $sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";
    $result = $con->query($sql);

    // if user exists, create a session and redirect to dashboard
    if ($row['email'] === $email && $row['password'] === $password) {
        $_SESSION['email'] = $email;
        header("Location: Student_Dash.html");
    } else {
        echo "Invalid username or password";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-... (the integrity hash)" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/Portal_Login.css">
    <title>djprshs</title>
    <style>
        .login-text {
            position: absolute;
            top: -65px;
            /* Adjust the top position of the login text */
            left: 35px;
            /* Adjust the left position of the login text */
            padding: 0 5px;
            /* Add some padding */
            font-size: larger;
            font-weight: bolder;
        }
    </style>
</head>

<body>

    <!-- bg -->
    <div class='box'>
        <div class='wave -one'></div>
        <div class='wave -two'></div>
        <div class='wave -three'></div>
    </div>

    <!--STUDENT PORTAL TEXT-->
    <div class="stu_portal">
        <i class="fa-solid fa-school"
            style="font-size: 25px; position: relative; top: -1em; right: 5em; color: white;"></i>
        <h2
            style="font-weight: bold; position: absolute; right: -2em; top: -1em; font-size: 140%; color: white; text-wrap: nowrap;">
            Student
            Portal</h2>
        <div class="linerist2"></div>
    </div>

    <!--LOG IN CONTAINER-->
    <div class="container-form">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <!-- Form -->
                    <form method="post">
                        <div class="form-group">
                            <i class="fa-solid fa-arrow-right-to-bracket"
                                style="top: -65px; position: relative; font-size: 25px; left: 5px;"></i>
                            <div class="login-text">Log In</div>
                            <div class="line"></div>
                            <label for="email" style="top: -30px; position: relative;">Email</label>
                            <input type="text" class="form-control" id="email"
                                placeholder="Enter student number" style="top: -30px; position: relative;"
                                title="Please enter numbers only" required>
                        </div>
                        <div class="form-group">
                            <label for="password" style="top: -30px; position: relative;">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter password"
                                style="top: -31px; position: relative;">
                            <small><a href="#" id="forgotPasswordLink" data-toggle="modal"
                                    data-target="#forgotPasswordModal" style="top: -30px; position: relative;">Forgot
                                    password?</a></small>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary"
                            style="top: -35px; position: relative;">Login</button>
                    </form>
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
                    <div class="linerist1"></div>
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

    <!--FORGOT PASSWORD MODAL-->
    <div class="modal fade" id="forgotPasswordModal" tabindex="-1" role="dialog"
        aria-labelledby="forgotPasswordModalLabel" aria-hidden="true" onload="showPasswordRequirements()">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="forgotPasswordModalLabel">Forgot Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Add your form or content for password recovery here -->
                    <div class="form-group">
                        <label for="emailRecovery">Student Number</label>
                        <input type="text" class="form-control" id="emailRecovery"
                            placeholder="Enter your student number">
                        <div id="emailWarning" style="color: red; display: none;">Enter a valid student number!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="newPassword">New Password</label>
                        <input type="password" class="form-control" id="newPassword" placeholder="Enter new password">
                        <small id="passwordRequirements" style="color: #6c757d;">Password should be 8 or above
                            characters, contain at least one uppercase letter, one lowercase letter, one number, and
                            special characters (!@#$%^&*-_?)</small>
                        <div id="passwordValidationWarning" style="color: red; display: none;">Enter a valid password!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword"
                            placeholder="Confirm new password">
                        <div id="passwordMismatchWarning" style="color: red; display: none;">The passwords do not match!
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="resetPassword()"
                        style="position: relative; top: -12px;">Reset Password</button>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!--FORGOT PASSWORD VALIDATION SCRIPT-->
    <script>
        function resetPassword() {
            const email = document.getElementById('emailRecovery').value;
            const newPassword = document.getElementById('newPassword').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const emailWarning = document.getElementById('emailWarning');
            const passwordMismatchWarning = document.getElementById('passwordMismatchWarning');
            const passwordValidationWarning = document.getElementById('passwordValidationWarning');

            // Reset all previous warnings
            emailWarning.style.display = 'none';
            passwordValidationWarning.style.display = 'none';
            passwordMismatchWarning.style.display = 'none';

            const isValidemail = /^\d{9}$/.test(email);
            const isValidPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*-_?]).{8,}$/.test(newPassword);

            if (!isValidemail || !isValidPassword || newPassword !== confirmPassword) {
                if (!isValidemail) {
                    emailWarning.style.display = 'block';
                }
                if (!isValidPassword) {
                    passwordValidationWarning.style.display = 'block';
                }
                if (newPassword !== confirmPassword) {
                    passwordMismatchWarning.style.display = 'block';
                }
                return; // Stop the function if any field doesn't meet the requirements
            }

            // Perform password reset logic here

            // Close the modal if validations pass
            $('#forgotPasswordModal').modal('hide');
        }

        function showPasswordRequirements() {
            const passwordRequirements = document.getElementById('passwordRequirements');
            passwordRequirements.style.display = 'block';
        }
    </script>

    <!--LINE SA ILALIM NG STUDENT PORTAL-->
    <style>
        body::before {
            content: "";
            display: block;
            position: absolute;
            top: 160px;
            left: 18%;
            right: 18%;
            height: 5px;
            background-color: #0A4D98;
            /* Adjust the color as needed */
            z-index: 3;
            /* Ensure it's above other elements */
            border-radius: 5px;
        }
    </style>

</body>

</html>