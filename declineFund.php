<?php
include("config.php");

// Check if 'updateid' is set in the URL
if(isset($_GET['updateid'])) {
    $id = $_GET['updateid'];
    $status = 'Declined';
    declineFund($id, $status);
}

function declineFund($id, $status){
    global $mysqli; // Access global variable $mysqli
    
    $sql = "UPDATE `fundraising` SET status='$status' WHERE id=$id";

    $result = mysqli_query($mysqli, $sql);

    if($result) {
        header('location:fundraisingViewsAdmin.php');
    } else {
        echo "Error: " . mysqli_error($mysqli); // Output MySQL error message
    }
}
?>
