
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
        <a href="display.php">Display Books</a>
        <a href="delete.php">Delete Books</a>
        <a href="show.php">Display Book</a>
        <br><br>
        <h3>Update Books</h3>
        <br><br>

        <form class="myForm" method="POST" >
            <h3>Booktitle</h3>
            <input type="text" name = "booktitle" placeholder="Enter Booktitle"required><br><br>
            <h3>Year</h3>
            <input type="text" name = "year" placeholder="Enter year of publication" required><br><br>
            <h3>Category</h3>
            <input type="text" name = "category" placeholder="Enter the category"required>
            <br>
            <button value = "submit" class= "submit2" name="submit2">SUBMIT</button>
        </form>
        <?php
    if(isset($_POST['submit2'])){
        $conn = mysqli_connect("localhost","root","root","practice");
        if(mysqli_connect_error()){
            echo "Connection error";
        }

        $bookname = $_POST['booktitle'];
        $year = $_POST['year'];
        $read = 0;
        $category = $_POST['category'];
        $sql = "UPDATE `wst` SET `booktitle`='$bookname',`years`='$year',`category`='$category',`unread`='$read' WHERE category='$category'";
        $r = mysqli_query($conn,$sql);

        if($r){
            echo "Successfully Updated";
        }
        else{
            echo 'Not Updated';
        }
    }
?>
    </div>
</body>

</html>