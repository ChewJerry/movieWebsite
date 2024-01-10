<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
       <meta charset="UTF-8">
        <title>Contact Us</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        
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
                            <a class="nav-link active" href="ContactUs.php">Contact Us</a>
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
        <h1 style="padding-left: 600px;">Contacts</h1>
        <div class="card-container" style="display: flex; justify-content: center;">
            <div class="text-center" style="margin-left: 4.5px;">
                <i class="fa fa-5x fa-mobile box-circle-solid mt-3 mb-3" aria-hidden="true"></i> 
                <br>
                +65 8123 4567
            </div>
            <div class="text-center"  style="margin-left: 30px;">
                <i class="fa fa-5x fa-envelope box-circle-solid mt-3 mb-3" aria-hidden="true"></i> 
                <br>
                mymovie@email.com
            </div>
            <div class="text-center"  style="margin-left: 25px;">
                <i class="fa fa-5x fa-map-marker box-circle-solid mt-3 mb-3" aria-hidden="true"></i> 
                <br>
                123 Movie Street<br>
                Cityville, State<br>
                Country
            </div>
            
            



        </div>
    </body>
</html>
