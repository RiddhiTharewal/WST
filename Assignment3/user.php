<?php
    require("Connection.php");
    session_start();
    if(isset($_POST['submit'])){
      $first = $_POST['first_name'];
      $last = $_POST['last_name'];
      $user = $_POST['user_name'];
      $sql = "SELECT * FROM `Users` WHERE `user_name` = '$_POST[user_name]'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);
      $row_cnt = mysqli_num_rows($result);
      if($row_cnt>= 1)
      {
        echo"<script> window.alert('Username already in use');</script>";
        exit();
      }
      $sql = "SELECT * FROM `Users` WHERE `email_id` = '$_POST[email_id]'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);
      $row_cnt = mysqli_num_rows($result);
      if($row_cnt>= 1)
      {
        echo"<script> window.alert('Email id already in use');</script>";
        exit();
      }
      $email = $_POST['email_id'];
      $state = $_POST['state'];
      $country = $_POST['country'];
      $sql = "INSERT INTO `Users` (first_name, last_name, user_name, email_id, state, country) VALUES ('$first', '$last','$user','$email', '$state', '$country')";
      $result = mysqli_query($conn, $sql);
      if($result){
        header("location: user.php");
      }
      else{
        die(mysqli_error($conn));
      }

    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="users.css">
    <script type="text/javascript" src="validation.js"></script>
    <title>User Form</title>
  </head>
  <body>
  <div class="topnav">
  <h1>Students
  <a href="user.php">Apply</a>
  <a href="display_user.php">Gallery</a></h1>
</div>

    <div>
    <form name="myForm" action="user.php" onsubmit="return validateForm()" method="post">
  <div>
    <label>First Name</label>
    <br>
    <input type="text" name="first_name" placeholder="First Name" id="first">
  </div>
 
  <div>
    <label>Last Name</label>
    <br>
    <input type="text" name="last_name" placeholder="Last Name" id="last">
  </div>
  <div>
    <label>User Name</label>
    <br>
    <input type="text" name="user_name" placeholder="User Name" id="user">
  </div>
  <div>
    <label>Email ID</label>
    <br>
    <input type="text" name="email_id" placeholder="Email ID" id="email">
  </div>
  <div>
    <label>State</label>
    <br>
    <input type="text" name="state" placeholder="State" id="state">
  </div>
  
  <div>
    <label>Country</label>
    <br>
    <input type="text" name="country" placeholder="Country" id="country">
  </div>
  <div>
    <button class="btn" type="submit" name="submit" return validateForm()>Submit</button>
 
  <button class="btn" type="submit" onclick="document.getElementById('first').value = '' 
                   document.getElementById('last').value = ''
                   document.getElementById('user').value = ''
                   document.getElementById('email').value = ''
                   document.getElementById('state').value = ''
                   document.getElementById('country').value = ''">Clear</button>
    </div>
  </form>
  </div>
<script>

  </script>

   
  </body>
</html>
