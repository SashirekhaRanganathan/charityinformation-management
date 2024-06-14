<?php
include("config.php");
if(isset($_GET['deleteid'])){
    $eventsid=$_GET['deleteid'];

    $sql="delete from `events` where eventsid=$eventsid";
    $result=mysqli_query($mysqli,$sql);
    if($result)
    {
      //  echo "Deleted successfully";
      header('location:eventsViewsAdmin.php');
    }
    else{
       echo "something wrong!";
    }
}
?>
