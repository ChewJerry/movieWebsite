<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "c203_moviereviewdb";

session_start();
if (isset($_SESSION['user_id'])) {
    $loggedInUserId = $_SESSION['user_id'];
}

$link = mysqli_connect($host, $username, $password, $db);
$movieId = $_GET['id'];



$querySelect2 = "SELECT * FROM reviews WHERE movieId=$movieId"; // select reviews of particular movieId 

$resultSelect2 = (mysqli_query($link, $querySelect2));




// Initialize an array to store all reviews
$reviewsArray = array();

if (mysqli_num_rows($resultSelect2) > 0) {
    // Loop through the result set and fetch all reviews
    while ($row2 = mysqli_fetch_array($resultSelect2)) {
        // Fetch the review data from the current row
        $review = $row2['review'];
        $rating = $row2['rating'];
        $datePosted = $row2['datePosted'];
        $userId = $row2['userId'];
        $reviewId = $row2['reviewId'];

        // Store the review data in the $reviewsArray
        $reviewsArray[] = array(
            'review' => $review,
            'rating' => $rating,
            'datePosted' => $datePosted,
            'userId' => $userId,
            'reviewId' => $reviewId
        );
    }
}




mysqli_close($link);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Reviews</title>
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
        <a href="addReview.php?id=<?php echo $movieId; ?>" style="margin-left: 650px;">Add new review</a>

        <?php if (!empty($review)) {  // if movieId has a review i.e. movieId exist in reviews table ?>
            <div class="center-table">
                <table border="3" style="margin-top: 30px;">
                    <tr>
                        <th>Review</th>
                        <th style="padding-left: 10px;">Rating</th>
                        <th style="padding-left: 30px">Date Posted</th>
                        <th style="padding-left: 30px">User</th>
                        <th style="padding-left: 50px">Edit</th>
                        <th style="padding-left: 25px">Delete</th>

                    </tr>


                    <?php foreach ($reviewsArray as $reviewData) { ?>
                        <tr>
                            <td style="padding-right: 40px;"><?php echo $reviewData['review']; ?></td>
                            <td style="padding-left: 30px;"><?php echo $reviewData['rating']; ?></td>
                            <td style="padding-left: 40px;"><?php echo $reviewData['datePosted']; ?></td>
                            <td style="padding-left: 32px;"><?php echo $reviewData['userId']; ?></td>
                            <?php if (isset($loggedInUserId) && $loggedInUserId == $reviewData['userId']) { ?>
                                <!-- Display Edit Button only if the logged-in user owns this review -->
                                <td style="padding-left: 50px;"><a href="edit.php?id=<?php echo $reviewData['reviewId']; ?>">Edit</a></td>
                                <td style="padding-left: 25px;"><a href="delete.php?id=<?php echo $reviewData['reviewId']; ?>">Delete</a></td>
                            <?php } else { ?>
                                <!-- Display empty cells if the user doesn't own the review -->
                                <td></td>
                                <td></td>
                            <?php } ?>
                        </tr>
                    <?php } ?>

                    <!--FILL IN BLANK B -->
                    <!-- Display the data -->

                    <!-- END BLANK B -->
                    <?php
                } else {
                    ?>
                    <tr>
                        <td colspan="3">
                            <p>No reviews available for this movie.</p>
                        </td>
                    </tr>
                <?php } ?>



            </table>

    </body>
</html>
