<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$host="localhost";
$username="root";
$password="";
$db="c203_moviereviewdb";

$link=mysqli_connect($host, $username, $password, $db);


$querySelect="SELECT movies.movieTitle as 'Movie Title', picture AS 'Image', movieId AS 'movieId', movieGenre AS 'Genre' FROM movies";
$resultSelect=(mysqli_query($link, $querySelect));
while($row=mysqli_fetch_array($resultSelect)){
    $arrResult[]=$row; 
}




mysqli_close($link);
        
        
       
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Movies</title>
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
                            <a class="nav-link active" href="Movies.php">Movies</a>
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
        <h1 style="padding-left: 600px;">Movies</h1>
        <table border="3" style="margin-top: 30px; margin-left: 330px">
            <tr>
                <th>Movie Title</th>
                <th>Picture</th>
                <th>Genre</th>
                <th>Find out more</th>
            </tr>
            <?php  //go through the array
            for ($j = 0; $j < count($arrResult); $j++) {
                $Image=$arrResult[$j]['Image'];
                $id=$arrResult[$j]['movieId'];
                        
                ?>
            <tr> 
                <td style="padding-right: 40px;"> <?php echo $arrResult[$j]['Movie Title']; ?></td>
                <td style="padding-right: 40px;"> <?php if ($Image) :?> <?php $imageFolder='Images/'; $imagePath = $imageFolder . $Image;?> <img src="<?php echo $imagePath; ?>" alt="<?php echo $title; ?>" width="100" height="100">  <?php else : ?>Not Available<?php endif; ?></td>
                <td style="padding-right: 10px;"> <?php echo $arrResult[$j]['Genre']; ?></td>
                <td style="padding-right: 10px;"> <a href="findoutmore.php?id=<?php echo $id; ?>">Click here</a></td>
               
            </tr>    
                
                    <!--FILL IN BLANK B -->
                        <!-- Display the data -->

                   <!-- END BLANK B -->
                <?php
            }
            ?>
        </table>
    </body>
</html>
