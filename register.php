<?php
session_start();

// Include database connection
include("config.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $emailid = $_POST['email'];
    $number = $_POST['phoneno'];
    $password = $_POST['password'];

    // Check if username and email are unique
    $query = "SELECT * FROM `registration` WHERE name = '$name' OR email = '$emailid'";
    $result = mysqli_query($mysqli, $query);

    if (mysqli_num_rows($result) > 0) {
        // Username or email already exists
        $error = "Username or email already exists. Please choose a different one.";
    } else {
        // Insert user data into database
      
        $insert_result=mysqli_query($mysqli,"insert into registration value('','$name','$emailid','$number','$password')");

        if ($insert_result) {
            // Registration successful, redirect to login page
            header("Location: login.php");
            exit();
        } else {
            // Registration failed
            $error = "Registration failed. Please try again.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
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
    <div  style="margin-top: 100px;" class="wrapper">
    <h2>Registration</h2>
      <form action="" method="post">
        <div>

            <input type="text" id="username" placeholder="Username" name="name" required>
        </div>
        <div>
           
            <input type="email" id="email" placeholder="Email-id" name="email" required>
        </div>
        <div>
            
            <input type="number" id="phoneno" placeholder="Phone Number" name="phoneno" required>
        </div>
        <div>
            
            <input type="password" id="password" placeholder="Password" name="password" required>
        </div>
        <div>
            
            <input type="password" id="password" placeholder="Re-type Password" name="password1" required>
        </div>
        <h5>Already have an Account?<a href="login.php">login</a></h5>
        <div>
            <button type="submit" class="button-login">Register</button>
        </div>
        
        <?php if (isset($error)) { ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php } ?>
    </form>
        </div>
</body>
</html>
