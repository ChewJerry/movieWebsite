<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
$loginMsg = "";
if (isset($_SESSION['username'])) {
    $loginMsg = "You are already logged in.";
} else {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $db = "c203_moviereviewdb";

    $link = mysqli_connect($host, $dbUsername, $dbPassword, $db);


    $querySelect = "SELECT * FROM users WHERE username='$username' and password=SHA1('$password')";

    $resultCheck = mysqli_query($link, $querySelect) OR die(mysqli_error($link));

    if (mysqli_num_rows($resultCheck) > 0) {
        $row = mysqli_fetch_array($resultCheck);
        $_SESSION['username'] = $row['username'];
        $_SESSION['user_id'] = $row['userId'];
        $loginMsg = "<p><i>Welcome, " . $_SESSION['username'] . "</p>";
        $loginMsg .= "<p><a href='Home.php'>Home</a></p>";
    } else {
        $loginMsg = "<div class='heading-login'><h3>Login Failed</h3></div>";
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            .form-enclosure {
                border: 1px solid #ccc;
                padding: 20px;
                border_radius: 4px;
                margin-top: 20px;
                margin-left: 20px;
                margin-right: 20px

            }
            .heading-login{
                margin-left: 630px;
                margin-top: 20px;

            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="Images/movielogo.png" alt="Logo" width="35px" height="35px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="Home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="AboutUs.php">About Us</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="Movies.php">Movies</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="Reviews.php">Reviews</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="Register.php">Register</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="ContactUs.php">Contact Us</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="logout.php">Log Out</a>
                    </li>
                     <li class="nav-item" >
                        <a class="nav-link" href="deleteAcc.php">Delete Account</a>
                    </li>  
                </ul>

            </div>
        </nav>
<?php
echo $loginMsg;
?>
    </body>
</html>
