<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Form </title>
</head>
<body>
    <div class = "container">
        <a href="index.php">Add Books</a>
        <a href="update.php">Update Books</a>
        <a href="display.php">Display Books</a>
        <a href="show.php">Display Book</a>
        <br><br>
        <h3>Delete Books</h3>
        <br><br>

        <form class="myForm" method="POST" >
            <h3>Category</h3>
            <input type="text" name = "category"  placeholder="Enter the category to be Deleted" required><br>
            <button value = "submit" name= "submit1">SUBMIT</button>
        </form>
        <?php
       if(isset($_POST['submit1'])){
            $conn = mysqli_connect("localhost","root","root","practice");
            if(mysqli_connect_error()){
                echo "Connection error";
            }
            $catg = $_POST['category'];
            $sql = "DELETE FROM `wst` WHERE `category`='$catg'";
            $r = mysqli_query($conn,$sql);
            if($r){
                echo "Successfully Deleted";
            }
        }
?>
    </div>
</body>

</html>