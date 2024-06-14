<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Style for Add User button */
.btn-adduser {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 10px 0;
    cursor: pointer;
    border-radius: 5px;
}

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

/* Style for Update and Delete buttons */
.btn-update,
.btn-delete {
    background-color: #008CBA;
    border: none;
    color: white;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin-right: 5px;
    border-radius: 3px;
    cursor: pointer;
}

/* Hover effect for Update and Delete buttons */
.btn-update:hover,
.btn-delete:hover {
    background-color: #005f6b;
}
.btn-update a,.btn-delete a {
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
    <button class="btn-adduser"><a href="adduser.php">Add User</a></button>
    <div class="container-admin">
        
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PHONE NO</th>
                    <th>PASSWORD</th>
                    <th>OPERATIONS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("config.php");
                $sql="select * from `registration`";
                $result=mysqli_query($mysqli,$sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $name=$row['name'];
                        $email=$row['email'];
                        $mobile=$row['phoneno'];
                        $password=$row['password'];
                        echo ' <tr>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td>'.$mobile.'</td>
                        <td>'.$password.'</td>
                        <td>
                        <button class="btn-update"><a href="update.php?updateid='.$id.'">Update</a></button>
                        <button class="btn-delete"><a href="delete.php?deleteid='.$id.'">Delete</a></button>
                        </td>
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