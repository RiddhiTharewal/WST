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
        <a href="delete.php">Delete Books</a>
        <a href="show.php">Display Book</a>
        <br><br>
        <h3>Display Books list</h3>        <br><br>

        <?php
        $conn = mysqli_connect("localhost","root","root","practice");
        if(mysqli_connect_error()){
            echo "Connection error";
        }
        $sql = "SELECT * FROM `wst` ORDER BY `category`";
        $r = mysqli_query($conn,$sql);
        $i = 0;
        $j = 0;
        while($row = mysqli_fetch_assoc($r)){
            $i++;
            $catg = $row['category'];
            $read = $row['unread'];
            if($row['unread'] == 1){
                echo '<div class="frame">';
                echo '<h4>BookTitle : '. $row['booktitle']. '</h4>' ;
                echo '<h4>Year of Publication : '. $row['years']. '</h4>' ;
                echo '<h4>Category : '. $row['category']. '</h4>' ;
                echo '<form method="POST"><button name="readsubmit" class="unread">Unread</button></form>';                
                echo '</div>';
            }
            else if($row['unread']== 0){
                echo '<div class="frame">';
                echo '<h4>BookTitle : '. $row['booktitle']. '</h4>' ;
                echo '<h4>Year of Publication : '. $row['years']. '</h4>' ;
                echo '<h4>Category : '. $row['category']. '</h4>' ;
                echo '<form method="POST"><button name="readsubmit">Read</button></form>';                
                echo '</div>';
            };
            echo '<br><br>';
        }
        
                        
        if(isset($_POST['readsubmit'])){
            if($read == 0){
                $sql = "UPDATE `wst` SET `unread`='1' WHERE `category`='$catg'";
                $result = mysqli_query($conn,$sql);
                if($result){
                    header("location: display.php");
                }
            }
            else if($read == 1){
                $sql = "UPDATE `wst` SET `unread`='0' WHERE `category`='$catg'";
                $result = mysqli_query($conn,$sql);
                if($result){
                    header("location: display.php");
                }
            }
        }
        
        ?>
    </div>
</body>
<script>
    const xhr = XMLHttpRequest();
    xhr.onload() = function(){
        const response = XMLDocument.response();
        if(response.ok){
            document.innerHTML = response;
        }
    }
    xhr.open("GET",'new.txt',async=true);
    xhr.send('display.php','new.txt');
</script>
</html>