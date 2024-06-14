<?php
include("config.php");

if(isset($_POST['submit'])) {
    
    $title = $_POST['eventstitle']; 
    $dt = $_POST['dateandtime'];
    $venue = $_POST['venue'];
    

    
    $result=mysqli_query($mysqli,"insert into `events` value('','$title','$dt','$venue')");
    
    if($result)
    {
        header("Location: eventsViewsAdmin.php");

    }
    else{
        echo "error".mysqli_error($mysqli);
        echo "Something went wromg";
    }
}

?>