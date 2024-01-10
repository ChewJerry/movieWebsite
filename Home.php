<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
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
                        <a class="nav-link active" href="Home.php">Home</a>
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
        <h1 style="margin-left:500px; padding-top:20px;">Welcome to Movies!</h1>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel"  style="max-width: 900px; margin: 0 auto; padding-left: 10px; padding-top: 30px; padding-bottom: 20px;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Images/JohnWick.png" alt="John Wick" style="width: 800px; height: 600px; margin-left: 50px;">
                </div>
                <div class="carousel-item">
                    <img src="Images/avatar.png" alt="Avatar" style="width: 800px; height: 600px; margin-left: 50px;">
                </div>
                <div class="carousel-item">
                    <img src="Images/mummies.png" alt="Mummies" style="width: 800px; height: 600px; margin-left: 50px;">
                </div>
                <div class="carousel-item">
                    <img src="Images/mypuppy.png" alt="My Puppy" style="width: 800px; height: 600px; margin-left: 50px;">
                </div>
                <div class="carousel-item">
                    <img src="Images/suzume.png" alt="Suzume" style="width: 800px; height: 600px; margin-left: 50px;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </body>
</html>
