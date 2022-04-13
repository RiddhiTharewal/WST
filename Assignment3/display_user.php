<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="users.css">
  <title>Display Users</title>
</head>
<body>
<div class="topnav">
  <h1>Students
  <a href="user.php">Apply</a>
  <a href="display_user.php">Gallery</a></h1>
</div>

</body>
</html>


<?php
require("Connection.php");
session_start();
$sql = "SELECT * FROM `Users`";
$result = mysqli_query($conn, $sql);
if($result){
    while($row = mysqli_fetch_assoc($result)){
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $user_name = $row['user_name'];
        $email_id = $row['email_id'];
        $state = $row['state'];
        $country = $row['country'];
        echo '<div class="card" style="width: 20rem;">
        <div class="card-body">
          <span class="card-title">'.$first_name.' '.$last_name.'</span><br>
          <span class="card-subtitle">'.$user_name.'</span><br><br>
          <span class="card-text">Email: '.$email_id.'</span><br>
          <span class="card-text">'.$state.', '.$country.'</span>
        </div>
      </div>';
    }
        }

?>


