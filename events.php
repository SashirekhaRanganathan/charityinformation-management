
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"href="style.css">
    <style>
        .event-container {
    margin-top: 80px;
}

.event {
    margin: 20px;
    padding: 20px;
    border: 2px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
}

.event p {
    margin: 0;
    padding: 5px 0;
}

.event h3 {
    margin-top: 0;
}

    </style>
</head>
<body>
<header>
        <h2 style="padding-top: 20px;" class="charity">UnityCares <img src="photo/charityLogo.jpg" width="40px"height="30px"></h2>
       
        <nav class="navigation">
            <a href="index.html">Home |</a>
            <a href="events.php">Events |</a>
            <a href="aboutus.html">About |</a>
            <a href="image.html">Gallery |</a>
            <a href="contact.html">Contact |</a>
            <button class="btnLogin-popup"><a href="register.php">Register</a></button>
            <button class="btnLogin-popup"><a href="login.html">Admin</a></button>
        </nav>
    </header>
    <div  style="margin-top:100px" >
    <center><h2>UPCOMING EVENTS</h2></center>
    <?php
// Include your database configuration file
include("config.php");

// Fetch data from the "events" table
$sql = "SELECT * FROM events";
//$result = $conn->query($sql);
$result = mysqli_query($mysqli, $sql);


// Check if there are any rows returned
if ($result->num_rows > 0){
    // Output data of each row
   
    while($row = $result->fetch_assoc()) {
        // Display the event details
  
        echo "<div class='event'>
                    <p>Event Name: "     . $row["eventstitle"]. "</p>
                    <p>Event Date: "     . $row["dateandtime"]. "</p>
                    <p>Event Location: " . $row["venue"]. "</p>
                  </div>";
    }
   
} else {
    echo "0 results";
}

?></div>
</body>
</html>
