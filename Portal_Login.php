<?php
session_start();
include_once("connections/connection.php");
$con = connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_type'] = $row['user_type'];

        switch ($row['user_type']) {
            case 'admin':
                header("Location: Admin_Dash.html");
                break;
            case 'registrar':
                header("Location: Registrar_Dash.html");
                break;
            case 'teacher':
                header("Location: Teacher_Dash.php");
                break;
            case 'student':
                header("Location: Student_Dash.php");
                break;
        }
    } else {
        $error = "<p style='color: red;'>Invalid username or password</p>";
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
    <link rel="stylesheet" href="css/New_Portal_Login.css">
    <title>djprshs</title>
    <style>
        .container {
            position: absolute;
            top: 50%;
            left: 70%;
            transform: translate(-50%, -50%);
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            padding: 20px;
            width: 30%;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .forgot-password {
            text-align: right;
            font-size: 14px;
        }

        /* Style for the hr tag */
        .form-group hr {
            margin-top: 6%;
            background-color: #0A4D98;
            height: 3px;
            border-radius: 20px;

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

    <!--SCHOOL LOGO-->
    <a href="index.php">
        <img src="img/school_logo.png" alt="Logo"
            style="position: absolute; top: 20%; left: 22%; width: 350px; height: auto; z-index: 2;">
    </a>

    <h3
        style="font-weight: bold; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: white; position: absolute; left: 18%; top: 67%;">
        Dr. Jose P. Rizal Senior Highschool</h3>

    <!-- Login Form Container -->
    <div class="container">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div>
                <i class="fa-solid fa-arrow-right-to-bracket"
                    style="position: absolute; font-size: 145%; left: 5%; top: 5%;"></i>
                <h4 style="font-size: 135%; position: absolute; left: 13%; top: 4%; font-weight: bold;">Log In</h4>
            </div>
            <!-- Horizontal Line -->
            <div class="form-group">
                <hr>
            </div>

            <div class="form-group">
            <?php if (isset($error)) echo "<p>$error</p>"; ?>
                <label for="username">Email:</label>
                <input type="email" class="form-control" id="username" name="username" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                <div class="forgot-password">
                    <a href="#" data-toggle="modal" data-target="#forgotPasswordModal">Forgot Password?</a>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary" style="background-color: #0A4D98; padding: 5px 60px;" onmouseover="this.style.backgroundColor='#355E3B'" onmouseout="this.style.backgroundColor='#0A4D98'">Login</button>
        </form>
    </div>

    <!-- Forgot Password Modal -->
    <div class="modal fade" id="forgotPasswordModal" tabindex="-1" role="dialog"
        aria-labelledby="forgotPasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="forgotPasswordModalLabel">Forgot Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Add your forgot password content here -->
                    <!-- Example: <p>Forgot password content goes here</p> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>

</html>