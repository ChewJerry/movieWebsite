<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
            .heading-register{
                margin-left: 500px;
                margin-top: 20px;
                 
            }
            
        </style>
    </head>
    <body>
        <?php
        // put your code here
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
        <h2 class="heading-register">Login to your account</h2><br/>
        <form name="frmRegister" method="post" action="doLogin.php" class="form-enclosure">
            Username: <input name="username" type="text" size="20" maxlength="100" required/><br/><br/>
            Password: <input name="password" type="password" size="20" maxlength="100" required/><br/><br/>
            
            
            <input type="submit" value="Login"/>
            <input type="reset" value="Cancel"/>
            
            
            
        </form><BR/><BR/>
        
        
    </body>
</html>
