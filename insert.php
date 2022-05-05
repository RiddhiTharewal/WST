<?php
    $conn = new mysqli("localhost","root","","practice");
    if(mysqli_connect_error()){
        echo "cannot connnect";
    }
    else{
        echo "connection_successful";
    }
    if(isset($_POST['submit'])){
    $category = $_POST['category'];
    $task = $_POST['task'];
    $priority = $_POST['priority'];
    $description = $_POST['description'];
    $complete = 0;

    $sql = "INSERT INTO `to_do` (category,task,priority,description,complete) VALUES ('$category', '$task', '$priority', '$description','$complete')";
    $r = mysqli_query($conn,$sql);
    if($r){
       echo " Successfully inserted"; 
       header('location:show.php');
    }
    else{
        echo "error Data Not inserted";
        header('location:index.html');
    }
    }
?>