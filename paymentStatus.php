<?php
include("config.php");

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email']; 
    $amount = $_POST['amount'];
    $card_number = $_POST['card_number'];
    $expiry_date = $_POST['expiry_date'];
    $cvv = $_POST['cvv'];
    $message="Thank you We recieved your Amount";

    
    $result=mysqli_query($mysqli,"insert into `paymentdonor` value('','$name','$email','$amount','$card_number','$expiry_date','$cvv')");
    
    if($result)
    {
        echo "<script>alert('$message');window.location.href='index.html';</script>";
      
    }
    else{
        echo "error".mysqli_error($mysqli);
        echo "Something went wromg";
    }
}

?>