<?php
include_once("connections/connection.php");
$con = connection();
session_start();

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($email) && !empty($password)){
        $sql = "SELECT email,password FROM users WHERE email='$email' AND password='$password'";
        //$sql = "SELECT email,password FROM login WHERE email LIKE '$email%' AND password='$password'";
        $result = mysqli_query($con,$sql);

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);

            if($row['email'] == "admin" && $row['password'] === $password){
                $_SESSION['firstName'] = $firstName;
                header("location: Student_Dash.php");
                exit();

            }
            if($row['email'] == "registrar" && $row['password'] === $password){
                // header("location: supervisorDash.php");
                // exit();
                echo "registrar";
            
            }
            if($row['email'] == "teacher" && $row['password'] === $password){
                // header("location: supervisorDash.php");
                // exit();
                echo "<h1>TEACHER</h1>";
            
            }
            if($row['email'] === $email && $row['password'] === $password){
                $_SESSION['email'] = $row['email'];
                $_SESSION['firstName'] = $row['firstName'];
                $_SESSION['lastName'] = $row['lastName'];
                $_SESSION['id'] = $row['id'];

                header("location: Student_Dash.php");
                exit();   
            }
            else {
            //   header("location: login.php?error=Incorrect Email or Password");
            //   exit();
            echo "mali";
            } 
        }
        else {
        //   header("location: login.php?error=Incorrect Email or Password");
        //   exit();
        echo "Mali nga";
        }
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
                    <form action="" method="POST">
                        <div class="form-group">
                            <i class="fa-solid fa-arrow-right-to-bracket"
                                style="top: -65px; position: relative; font-size: 25px; left: 5px;"></i>
                            <div class="login-text">Log In</div>
                            <div class="line"></div>
                            <label for="email" style="top: -30px; position: relative;">Student Number</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter email"
                                style="top: -30px; position: relative;" title="Please enter a valid email" required>
                        </div>
                        <div class="form-group">
                            <label for="password" style="top: -30px; position: relative;">Password</label>
                            <input type="password" class="form-control" id="password" name="email" placeholder="Enter password"
                                style="top: -31px; position: relative;">
                            <small><a href="#" id="forgotPasswordLink" data-toggle="modal"
                                    data-target="#forgotPasswordModal" style="top: -30px; position: relative;">Forgot
                                    password?</a></small>
                        </div>
                        <button type="submit" class="btn btn-primary"
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
                    <div class="news" style="top: -22%;">
                        <div class="news-item">
                            <h5>Important Announcement</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="news-item">
                            <h5>3rd Quarterly Exam Schedule</h5>
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
                        <label for="studentNumberRecovery">Student Number</label>
                        <input type="text" class="form-control" id="studentNumberRecovery"
                            placeholder="Enter your student number">
                        <div id="studentNumberWarning" style="color: red; display: none;">Enter a valid student number!
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
        style="position: absolute; top: 20px; left: 20px; width: 65px; height: auto; z-index: 2;">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!--FORGOT PASSWORD VALIDATION SCRIPT-->
    <script>
        function resetPassword() {
            const studentNumber = document.getElementById('studentNumberRecovery').value;
            const newPassword = document.getElementById('newPassword').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const studentNumberWarning = document.getElementById('studentNumberWarning');
            const passwordMismatchWarning = document.getElementById('passwordMismatchWarning');
            const passwordValidationWarning = document.getElementById('passwordValidationWarning');

            // Reset all previous warnings
            studentNumberWarning.style.display = 'none';
            passwordValidationWarning.style.display = 'none';
            passwordMismatchWarning.style.display = 'none';

            const isValidStudentNumber = /^\d{9}$/.test(studentNumber);
            const isValidPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*-_?]).{8,}$/.test(newPassword);

            if (!isValidStudentNumber || !isValidPassword || newPassword !== confirmPassword) {
                if (!isValidStudentNumber) {
                    studentNumberWarning.style.display = 'block';
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

</body>

</html>