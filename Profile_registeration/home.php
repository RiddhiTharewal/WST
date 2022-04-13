<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        .logout{
            padding:4px;
            background-color:grey;
            color:black;
            width:fit-content;
            float:right;
            font-size:20px;
        }
        .logout:hover{
            cursor:pointer;
            background-color:black;
            color:white;
        }
    </style>
    <title>Profile</title>
</head>
<body>
    
    <?php
        $Username = strval($_POST["username"]);

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "social_media";

        //create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        //check connection
        if($conn->connect_error) {
            die("Connection failed: ".$conn->connect_error);
        }

        //authenticate
        $exists_query = "SELECT username, pword FROM PROFILE where username = '$Username'";
        $exists_query_result = $conn->query($exists_query);
        if($exists_query_result->num_rows == 0) {
            echo 'No such user exists';
            exit;
        }
        else if ($_POST['password'] != $exists_query_result->fetch_assoc()['pword']) {
            echo 'Incorrect password entered';
            exit;
        }
        else {

            ?><h2><b>'Welcome ,<?php echo $Username?> View Profile and Rate if you like!!'</b></h2><?php
            echo '<br><br>';
        }
        ?>
        <form method="get" action="index.html">
            <button class="logout">Logout</button>
        </form>
        <?php
        session_start();
        $_SESSION["username"] = strval($_POST["username"]);

        //print user data
        $sqlquery = "SELECT * FROM profile where username = '$Username';";
        $data = $conn->query($sqlquery);
        if($data->num_rows > 0) {
            echo "<div class='gallery'>";
            while($row = $data->fetch_assoc()) {
                echo "<div class='card'>
                        <div class='box'>
                            <br>
                            <h2>Your Profile</h2>
                            <h4>Name: {$row['pname']}</h4>
                            <h4>Email: {$row['email']}</h4>
                            <h4>Skills: {$row['skills']}</h4>
                            <h4>Interests: {$row['interests']}</h4>
                            <h4>Education: {$row['education']}</h4>
                            <h4>Contact: {$row['contact']}</h4>
                            <h4>Address: {$row['city']}, {$row['statename']}  {$row['country']}</h4>
                            <h4>Rating: {$row['rating']} </h4>
                            <br><br>
                           
                        </div>
                    </div>";
            }
            echo "</div> <br><br>";
        }   

        //print other users data
        $sqlquery = "SELECT * FROM profile where username != '$Username' ORDER BY rating DESC;";
        $data = $conn->query($sqlquery);
        ?>
        <h2>Others Profile Gallery</h2>
        <br><br><br>
        <?php
        if($data->num_rows > 0) {
            echo "<div class='gallery'>";
           
            while($row = $data->fetch_assoc()) {
                echo "<div class='card'>
                        <div class='box'>
                            <br>
                            <h2>Name: {$row['pname']}</h2>
                            <h4>Email: {$row['email']}</h4>
                            <h4>Address: {$row['city']}, {$row['statename']}  {$row['country']}</h4>
                            <h4>Skills: {$row['skills']}</h4>
                            <h4>Interests: {$row['interests']}</h4>
                            <h4>Education: {$row['education']}</h4>
                            <h4>Contact: {$row['contact']}</h4>
                            <h4 id='rating-{$row['username']}'>Rating: {$row['rating']} </h4>
                            <button style='padding-left: 5px; background-color: green;' onclick='upvote(`{$row['username']}`, `$Username`)' id='upvote-{$row['username']}'>
                                Rating
                            </button>
                            
                            <br><br>
                        </div>
                    </div>";
            }
            echo "</div>";
        }   
        else {
            echo "No Other Users";
        }
        $conn->close();

    session_destroy();
    ?>

    <script>
        function upvote(username_1, username_2) {
            $.ajax({
                url: 'upvote.php',
                type: 'get',
                dataType: 'json',
                data: { "username_1": String(username_1),
                        "username_2": String(username_2)
                        },
                success: function(response) { 
                    id = 'rating-' + String(username_1);
                    console.log(id);
                    console.log(response.String);
                    document.getElementById(id).innerHTML = "<h4 id='rating-$username_1'>Rating: " + response + "</h4>";
                }
            });
        }
        </script>
        
      
</body>
</html>