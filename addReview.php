<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$movieId = $_GET['id']; // Get the movieId from the URL parameter

$host = "localhost";
$username = "root";
$password = "";
$db = "c203_moviereviewdb";
$link = mysqli_connect($host, $username, $password, $db);
$querySelect = "SELECT * FROM movies";
$resultSelect = mysqli_query($link, $querySelect);

// Check if the query was successful and fetch the movie details
if ($resultSelect) {
    while ($row = mysqli_fetch_assoc($resultSelect)) {
        if ($row['movieId'] == $movieId) {
            // Found the correct movie based on the movieId in the URL
            $movieTitle = $row['movieTitle'];
            $Image = $row['picture'];
            $Genre = $row['movieGenre'];
            break;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add a Review</title>
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

        .heading-review {
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
            <li class="nav-item">
                <a class="nav-link" href="Movies.php">Movies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="Reviews.php">Reviews</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Register.php">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ContactUs.php">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Log Out</a>
            </li>
             <li class="nav-item" >
                        <a class="nav-link" href="deleteAcc.php">Delete Account</a>
                    </li>  
        </ul>
    </div>
</nav>
<form name="frmAddReview" method="post" action="doAddReview.php" class="form-enclosure">
    <input type="hidden" name="movieId" value="<?php echo $movieId; ?>">
    Review: <textarea name="review" id="review" rows="4" cols="50"></textarea><br><br>
    Rating: <input name="rating" type="number" /><br/><br/>
    Name: <input name="name" type="text" size="20" maxlength="100" required/><br/><br/>
    Date Posted: <input name="dpd" type="date"><br/><br/>
    Email Address: <input name="email" type="email" size="20" maxlength="100" required/><br/><br/>

    <input type="submit" value="Submit"/>
    <input type="reset" value="Reset"/>
</form>
</body>
</html>
