<?php
session_start();

// Include database connection
include("config.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['name'];
    $password = $_POST['password'];

    // Check if username and password match
    $query = "SELECT * FROM `registration` WHERE name = '$username' AND password = '$password'";
    $result = mysqli_query($mysqli, $query);

    if (mysqli_num_rows($result) == 1) {
        // Username and password are correct, start session and redirect to user page
        $_SESSION['name'] = $username;
        header("Location: userPage.php");
        exit();
    } else {
        // Username or password is incorrect
        $error = "Invalid username or password. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    <h2>Login</h2>
    <form action="" method="post">
        <div >

            <input type="text" id="username" placeholder="Username" name="name" required>
        </div>
        <div>
            
            <input type="password" id="password" placeholder="Password" name="password" required>
        </div>
        <div>
            <button type="submit" class="button-login">Login</button>
        </div>
        <?php if (isset($error)) { ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php } ?>
    </form>
     </div>
</body>
</html>
