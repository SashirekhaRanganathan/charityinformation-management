<?php
include("config.php");

// Check if 'updateid' is set in the URL
if(isset($_GET['updateid'])) {
    $id = $_GET['updateid'];

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $emailid = $_POST['email']; 
        $phoneno = $_POST['phoneno'];
        $password = $_POST['password'];
      
        $sql = "UPDATE `registration` SET name='$name', email='$emailid', phoneno='$phoneno', password='$password' WHERE id=$id";

        $result = mysqli_query($mysqli, $sql);

        if($result) {
            header('location:userViewsAdmin.php');
        } 
        else {
          echo "Error: " . mysqli_error($mysqli); // Output MySQL error message
        }

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
    <form method="post" action="">
        <h4>UPDATE </h4><br>
        <input type="text" placeholder="Username" name="name">
        <input type="email" placeholder="Email-id" name="email">
        <input type="number" placeholder="Phone Number" name="phoneno">
        <input type="password" placeholder="Password" name="password">
        <!--<input type="password" placeholder="Re-enter Password" name="confirm_password">-->
        <input type="submit" name="submit" value="UPDATE" class="button-booking">
    </form>
</div>
</body>
</html>


