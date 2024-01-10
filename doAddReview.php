<?php
session_start();
$usernameUser = $_SESSION['username'];
$host = "localhost";
$username = "root";
$password = "";
$db = "c203_moviereviewdb";
$link = mysqli_connect($host, $username, $password, $db);

$movieId = $_POST['movieId'];
$review = $_POST['review'];
$rating = $_POST['rating'];
$datePosted = date('Y-m-d', strtotime($_POST['dpd']));
$email = $_POST['email'];

// Query to retrieve the 'userId' from the 'users' table based on the session's username
$queryID = "SELECT u.userId
            FROM users u
            WHERE u.username = '$usernameUser'";

// Execute the query
$resultID = mysqli_query($link, $queryID);

// Check if the query was successful
if (!$resultID) {
    // Query execution failed
    die("Error: " . mysqli_error($link));
}

// Check if a row was found
if (mysqli_num_rows($resultID) > 0) {
    // Fetch the 'userId' from the result
    $row = mysqli_fetch_assoc($resultID);
    $userId = $row['userId'];
} else {
    // No matching row found, handle the case where the user is not found in the 'reviews' table
    // You might want to handle this case, e.g., redirect the user or show an error message.
}

$successMsg = "";
$query = "INSERT INTO reviews (movieId, userId, review, rating, datePosted) VALUES ($movieId, $userId, '$review',$rating,'$datePosted')";
$status = mysqli_query($link, $query);
if ($status) {
    $successMsg = "Successfully submitted review";
} else {
    $successMsg = "Error. Please try again";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add review</title>
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
<?php
echo $successMsg;
?>
</body>
</html>
