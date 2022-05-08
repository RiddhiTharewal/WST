<?php
    $conn = new mysqli("localhost","root","root","practice");
    if(mysqli_connect_error()){
        echo "Connection error";
    }
    $bookname = $_POST['booktitle'];
    $year = $_POST['year'];
    $read = 0;
    $category = $_POST['category'];
    $sql = "INSERT INTO `wst` (booktitle,years,category,unread) VALUES ('$bookname','$year','$category','$read')";
    $r = mysqli_query($conn,$sql);
    if($r){
        echo "Successfully Inserted";
        header('location:index.php');
    }
    else{
    
        echo "Not Inserted";
        header('location:index.php');
        
    }
?>