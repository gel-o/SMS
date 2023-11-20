<?php
// database configuration
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "sms";

// create database connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// login form processing
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // query the database to check if the user exists
    $sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    // if user exists, create a session and redirect to dashboard
    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['email'] = $email;
        header("Location: Student_Dash.html");
    } else {
        echo "Invalid username or password";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form method="post" action="c">
    <label for="email">Username:</label>
    <input type="text" id="email" name="email" required><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>