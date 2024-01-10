<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
// php file that contains the common database connection code
include "dbFunctions.php";

$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$dob = $_POST['dob'];
$email = $_POST['email'];
      


$queryCheck = "SELECT * FROM users WHERE username='$username'";
$resultCheck = mysqli_query($link, $queryCheck);

if (mysqli_num_rows($resultCheck) > 0){
    $message = "Username already exists. Pick another one.";
    $message .= "<br/><a href='register.php'>Try again</a>";
    
}
else {
    $query = "INSERT INTO users
          (username,password,name,dob,email) 
          VALUES 
          ('$username',SHA1('$password'),'$name','$dob','$email')";

    $status = mysqli_query($link, $query);

    if ($status) {
        $message = "<p> <h5 class=\"heading-registersuccess\">Congratulations " . $name . "!" . " " . "Your account has been successfully registered. You can now <a href='login.php'>log in</a> and start using our services.</h5>
                </p>";

    } else {
        $message = "account creation failed";
    }
}







mysqli_close($link);

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
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
            .heading-registersuccess{
                margin-left: 155px;
                margin-top: 20px;
                 
            }
            
        </style>
    </head>
    <body>
        <?php
        $name=$_POST['username'];
        
        
        
        ?>
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
        echo $message;
        ?>
    </body>
</html>
