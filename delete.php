<?php
include("config.php");
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `registration` where id=$id";
    $result=mysqli_query($mysqli,$sql);
    if($result)
    {
      //  echo "Deleted successfully";
      header('location:userViewsAdmin.php');
    }
    else{
       echo "something wrong!";
    }
}
?>