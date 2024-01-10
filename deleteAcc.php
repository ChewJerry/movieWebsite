<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
if (!isset($_SESSION['username'])){
    header("Location: login.php");
    exit;
}
$host = "localhost";
$username = "root";
$password = "";
$db = "c203_moviereviewdb";
$link = mysqli_connect($host, $username, $password, $db);
$usernameUser=$_SESSION['username'];

$msg="";
$queryDelete = "DELETE FROM users WHERE username = '$usernameUser'";

//execute the query
$resultDelete = mysqli_query($link, $queryDelete)
        or die(mysqli_error($link));

//if statement to check whether the update is successful
//store the success or error message into variable $msg
if ($resultDelete) {
    $msg = $usernameUser." successfully deleted";
} else {
    $msg = "Account not deleted";
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Account Deleted</title>
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
            .heading-logout{
                margin-left: 500px;
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
                        <a class="nav-link active" href="deleteAcc.php">Delete Account</a>
                    </li>  
                </ul>

            </div>
        </nav>
        <?php
        echo $msg;
        ?>
    </body>
</html>
<?php
// Clear the session
session_unset();
session_destroy();
?>
