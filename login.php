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
        <h1 class="login-title">Sign in</h1>
        <form method="post">
            <h5 class="input-lable">Email or mobile phone number</h5>
            <input type="text" name="email">
            <h5 class="input-lable">Password</h5>
            <input type="password" name="password">
            <button type="submit" name="login">Continue</button>
        </form>
        <p class="login-condition">By continuing, you agree to Amazon's <span>Conditions of Use</span> and <span>Privacy Notice.</span></p>
        <p class="login-help">&#9656<span>Need help</span></p>
        <hr>
        <h4>Buying for work?</h4>
        <p class="login-business"><span>Shop on Amazon Business</span></p>
    </div>
    <div class="login-section-text">
        <hr><p>New to Amazon?</p><hr>
    </div>
    <a href="./signup.php"><button class="login-signup-btn">Create your Amazon account</button></a>
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

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "devesh_new";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $connection->query($query);

    if ($result->num_rows > 0) {
        header("Location: index.php");
        exit();
    } else {

        echo '<br><span style="color: red;">Invalid email or password</span>';
    }
}
?>
