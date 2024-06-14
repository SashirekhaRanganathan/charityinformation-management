<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Style for container */
.container-admin {
    margin-top: 20px;
}

/* Style for table */
.table {
    width: 100%;
    border-collapse: collapse;
}

/* Style for table header */
.table th {
    background-color: #4CAF50;
    color: white;
    font-weight: bold;
    padding: 8px;
    text-align: left;
}

/* Style for table cells */
.table td {
    padding: 8px;
    border-bottom: 1px solid #ddd;
}

/* Style for Update button */
.btn-update {
    background-color: #008CBA;
    border: none;
    color: white; /* Text color set to white */
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin-right: 5px;
    border-radius: 3px;
    cursor: pointer;
}

/* Hover effect for Update button */
.btn-update:hover {
    background-color: #005f6b;
}
.btn-update a {
    color: white;
    text-decoration: none; /* To remove the default underline */
}
    </style>
</head>
<body>
<div>
        <header>
            <h2 style="padding-top: 20px;" class="charity">UnityCares <img src="photo/charityLogo.jpg" width="40px"height="30px"></h2>

            <nav class="navigation">
                <a href="userViewsAdmin.php">User |</a>
                <a href="eventsViewsAdmin.php">Events |</a>
                <a href="fundraisingViewsAdmin.php">Fund Raising |</a>
                <a href="PaymentViewsAdmin.php">Payment List |</a>
               
                <button class="btnLogin-popup"><a href="logout.php">Logout</a></button>
               
            </nav>
        </header>
    </div>
    <div style="padding-top: 70px;"> 
<div class="container-admin">
        
        <table class="table">
            <h1>Payment Details</h1>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>AMOUNT</th>
                    <th>CARD_NUMBER</th>
                    <th>EXPIRY_NUMBER</th>
                    <th>CVV</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                include("config.php");
                $sql="select * from `paymentdonor`";
                $result=mysqli_query($mysqli,$sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $name=$row['name'];
                        $email=$row['email'];
                        $amount=$row['amount'];
                        $card_number=$row['card_number'];
                        $expiry_date=$row['expiry_date'];
                        $cvv=$row['cvv'];
                        echo ' <tr>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td>'.$amount.'</td>
                        <td>'.$card_number.'</td>
                        <td>'.$expiry_date.'</td>
                        <td>'.$cvv.'</td>
                        
                      </tr>';
                    }
                }

                ?>
               
            </tbody>
            
        </table>
    </div>
   
   
            </div>
</body>
</html>