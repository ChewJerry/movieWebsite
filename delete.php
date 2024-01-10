<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$db = "c203_moviereviewdb";


$link = mysqli_connect($host, $username, $password, $db);

$theID = $_GET['id'];

$msg = "";

//build a query to update the table
//update the record with the details from the form
$queryDelete = "DELETE FROM reviews WHERE reviewId = $theID";

//execute the query
$resultDelete = mysqli_query($link, $queryDelete)
        or die(mysqli_error($link));

//if statement to check whether the update is successful
//store the success or error message into variable $msg
if ($resultDelete) {
    $msg = "record successfully deleted";
} else {
    $msg = "record not deleted";
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Deleted Successfully</title>
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
            .heading-register{
                margin-left: 500px;
                margin-top: 20px;

            }
            .center-table {
                display: flex;
                justify-content: center;
                margin-bottom: 20px;
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
        // put your code here
        echo $msg;
        ?>

    </body>
</html>
