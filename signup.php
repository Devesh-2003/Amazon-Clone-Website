<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "devesh_new";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email= $_POST['email'];
    $password = $_POST['password'];


    $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    if ($connection->query($query) === TRUE) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . $connection->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./login.css">
</head>
<body>
    <a href="index.php"><img class="logo" src="./assets/amazon_logo_dark.png" width="100px" alt=""></a>
    <div class="login-container">
        <h1 class="login-title">Sign up</h1>
        <form method="post">
            <h5 class="input-lable">Your name</h5>
            <input type="text" name="name" placeholder="First and last name">
            <h5 class="input-lable">Mobile number or email</h5>
            <input type="text" name="email">
            <h5 class="input-lable">Password</h5>
            <input type="password" name="password" placeholder="At least 6 characters">
            <button type="submit" name="submit">Continue</button>
        </form>
        <p class="login-condition">By continuing, you agree to Amazon's <span>Conditions of Use</span> and <span>Privacy Notice.</span></p>
        <p class="login-help">&#9656<span>Need help</span></p>
        <hr>
        <h4>Buying for work?</h4>
        <p class="login-business"><span>Shop on Amazon Business</span></p>
    </div>
    <div class="login-section-text">
        <hr><p>Have an account?</p><hr>
    </div>
    <a href="login.php"><button class="login-signup-btn">Login with Amazon account</button></a>
    <footer>
        <div class="footer-links">
            <a href="#"> Conditions of Use </a>
            <a href="#"> Privacy Notice </a>
            <a href="#"> Help </a>
        </div>
        <p class="footer-copyright">
            © 1996-2024, Amazon.com, Inc. or its affiliates
        </p>
    </footer>
</body>
</html>
