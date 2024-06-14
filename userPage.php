<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .container1 {
    max-width: 600px;
    position: absolute;
    top: 50%;
    left: 50%;
   
    transform: translate(-50%, -50%);
    padding: 50px;
    background-color: rgba(128, 128, 128, 0.7); /* Adjust transparency here */
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
    z-index: 1; /* Ensure the container is above the image */
}

/* Adjustments for mobile responsiveness */
@media (max-width: 768px) {
    .container1 {
        width: 80%;
        padding: 30px;
    }
}

        hr {
            margin: 20px 0;
            border: none;
            border-top: 1px solid #ccc;
        }
        p{
            padding-top:20px;
            padding-left:10px;
        }
    </style>
</head>
<body>
    <div>
<header>
        <h2 class="charity">UnityCares</h2>
        <nav class="navigation">
            <a href="index.html">Home |</a>
            <a href="events.php">Events |</a>
            <a href="aboutus.html">About |</a>
            <a href="image.html">Gallery |</a>
            <a href="contact.html">Contact |</a>
            <button class="btnLogin-popup"><a href="logout.php">Logout</a></button>
         
        </nav>
    </header>
    </div><center>
        <img src="photo/userBackgroundPic.jpg" width="1400"height="700">
    <div class="container1">
        
        <?php
        session_start();
        include("config.php");

        // Check if user is logged in
        if (!isset($_SESSION['name'])) {
            // Redirect to login page if user is not logged in
            header("Location: login.php");
            exit();
        }

        // Get username from session
        $username = $_SESSION['name'];

        echo "<h2>Welcome, $username</h2>";

        $sql = "SELECT * FROM `registration` WHERE name = '$username'";
        $result = mysqli_query($mysqli, $sql);

        // Check if there are any rows returned
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                // Display the user details
                echo "<p><strong>Name:</strong> " . $row["name"]. "</p>";
                echo "<p><strong>Email Id:</strong> " . $row["email"]. "</p>";
                echo "<p><strong>Phone no:</strong> " . $row["phoneno"]. "</p>";
                echo "<p><strong>Password:</strong> " . $row["password"]. "</p>";
                // Add more fields as needed
                echo "<hr>"; // Add a horizontal line between details
            }
        } else {
            echo "<p>No results found.</p>";
        }
        ?>
   
    </div></center>
</body>
</html>
