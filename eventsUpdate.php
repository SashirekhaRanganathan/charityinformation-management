<?php
include("config.php");

// Check if 'updateid' is set in the URL
if(isset($_GET['updateid'])) {
    $eventsid = $_GET['updateid'];

    if(isset($_POST['submit'])) {
       // $eventsid = $_POST['eventsid'];
        $title = $_POST['eventstitle']; 
        $dt = $_POST['dateandtime'];
        $venue = $_POST['venue'];
      
        $sql = "UPDATE `events` SET  eventstitle='$title', dateandtime='$dt', venue='$venue' WHERE eventsid=$eventsid";

        $result = mysqli_query($mysqli, $sql);

        if($result) {
            header('location:eventsViewsAdmin.php');
        } else {
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
    <style>
        .submit-button
        {
            font-size: 1rem;
    margin-top: 1.8rem;
    padding:10px 0;
    border-radius: 20px;
    outline: none;
    border: none;
    width: 90%;
    color:whitesmoke;
    border-color: black;
    cursor: pointer;
    background:rgba(14, 15, 15, 0.8);
        }
        .cancel-event{
            font-size: 1rem;
    margin-top: 1.0rem;
    padding:10px 0;
    border-radius: 20px;
    outline: none;
    border: none;
    width: 90%;
    color:whitesmoke;
    border-color: black;
    cursor: pointer;
    background-color:red;
    
        }
        .cancel-aevents{
            color:whitesmoke;
        }
        </style>
    
    </div>
</head>
<body>
    <!--<h1>events</h1>
    <div class="popup-overlay">
    <div class="popup-box">-->
        <div class="wrapper">
        <h2>Add Events</h2>
        <form method="post" action="" >
            <input type="text" placeholder="Event-Title" id="event-title-input" name="eventstitle"><br>
            <input type="date"  id="event-date-input" name="dateandtime"><br>
            <textarea type="text" placeholder="Event-Venue" id="event-venue-input" name="venue" rows ="5" cols="38"></textarea><br>
           <input type="submit" value="submit" name="submit" class="submit-button">
           <button class="cancel-event"><a href="eventsViewsAdmin.php" class="cancel-aevents">Cancel</a></button>
        </form>
    </div>
</div>  

</body>
</html>


