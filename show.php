<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Display to do</title>
</head>
<body>
    <div class="container">
    <a href = "index.html">Add list</a>
    <a href = "show.php">Display list</a>
    <br><br>
    <?php
                $conn = mysqli_connect("localhost","root","","practice");
                if(mysqli_connect_error()){
                    echo "cannot connnect";
                }
                
                $sql = "SELECT * FROM `to_do` ORDER BY `priority`";
                $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($result)){
                    $catg = $row['category'];
                    $desp = $row['description'];
                    $task = $row['task'];
                    $priority = $row['priority'];
                    $complete = $row['complete'];
                    if($complete == 1){
                        echo '<div><del>
                        <div>Category: '.$catg.'</div><br>
                        <div>Description: '.$desp.'</div><br>
                        <div>Task: '.$task.'</div><br>
                        <div>Priority: '.$priority.'</div><br></div></del>
                        <div><form method="POST"><button name="complete">Complete</button></form></div><br><br>';
                    }
                    else if($complete == 0){
                    echo '<div><div>Category: '.$catg.'</div><br>
                    <div>Description: '.$desp.'</div><br>
                    <div>Task: '.$task.'</div><br>
                    <div>Priority: '.$priority.'</div><br>
                    <div><form method="POST"><button name="complete">Complete</button></form></div></div><br><br>';
                    };
                }
                
                                
                if(isset($_POST['complete'])){
                    // $sql = "SELECT * FROM to_do"
                    if($complete == 0){
                        $sql = "UPDATE `to_do` SET `complete`='1' WHERE `category`='$catg'";
                    $result = mysqli_query($conn,$sql);
                    if($result){
                        header("location: show.php");
                    }
                    }
                    else if($complete == 1){
                    $sql = "UPDATE `to_do` SET `complete`='0' WHERE `category`='$catg'";
                    $result = mysqli_query($conn,$sql);
                    if($result){
                        header("location: show.php");
                    }
                }
                }
                ?>
    </div>
    
</body>

</html>