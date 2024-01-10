<?php
session_start();

// php file that contains the common database connection code
include "dbFunctions.php";

if (isset($_SESSION['username'])) {
    session_destroy();
    
        
    $message = "<p>You have logged out.<br /><br/>
        <a href='login.php'>Go back to login page</a></p>";
} else {
    $message = "<h4>You are not logged in yet. Please <a href='login.php'>Log in</a>.</h4>";
}





?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Logout</title>
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
                        <a class="nav-link active" href="logout.php">Log Out</a>
                    </li>
                     <li class="nav-item" >
                        <a class="nav-link" href="deleteAcc.php">Delete Account</a>
                    </li>  
                </ul>

            </div>
        </nav>
        <?php
        echo $message;
        ?>
    </body>
</html>