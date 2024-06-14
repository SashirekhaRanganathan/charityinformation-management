<?php
include("config.php");

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email']; 
    $phoneno = $_POST['phoneno'];
    $fundraisingtype = $_POST['fundraisingtype'];
    $issuedate = $_POST['issuedate'];
    $purpose = $_POST['purpose'];

    
    $result=mysqli_query($mysqli,"insert into `fundraising` value('','$name','$email','$phoneno','$fundraisingtype','$issuedate','$purpose','')");
    
    if($result)
    {
        echo "Data inserted succesfully";

    }
    else{
        echo "error".mysqli_error($mysqli);
        echo "Something went wromg";
    }
}

?>