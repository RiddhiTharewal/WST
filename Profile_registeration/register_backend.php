<?php

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

// //take userinput from form
// if($_FILES["profile"]["error"]>0)
// {
//     echo "FILE ERROR";
//     die();
// }
// $target_file = $_FILES["profile"]["name"];

$name = strval($_POST["name"]);
$Username = strval($_POST["username"]);
$Email = strval($_POST["email"]);
$Contact = strval($_POST["mobile"]);
$City = strval($_POST["city"]);
$State = strval($_POST["state"]);
$Country = strval($_POST["country"]);
$Education = strval($_POST["education"]);
$Skills = strval($_POST["skills"]);
$Interests = strval($_POST["interests"]);
$Password = strval($_POST["password"]);
$Profile = "unavailable";
$Rating = 0;


//check if email already exists
function check($conn, $Email, $Username) {
    
    $exists_query = "SELECT email FROM PROFILE where email = '$Email'";
    $exists_query_result = $conn->query($exists_query);
    if($exists_query_result->num_rows != 0) {
        echo"Email: {$Email} already in use";
        return 0;
    }

    //check if username already exists
    $exists_query = "SELECT username FROM PROFILE where username = '$Username'";
    $exists_query_result = $conn->query($exists_query);
    if($exists_query_result->num_rows != 0) {
        echo"Username: {$Username} is already taken, try again";
        return 0;
    }

    return 1;
}

if(check($conn, $Email, $Username) == 0) {
    exit;
}

//query to insert in database
// $query = "INSERT INTO PROFILE VALUES ('$name', '$Username','$Email', '$Contact', '$City', '$State', '$Country', '$Education,' '$Skills', '$Interests', '$Password', '$Profile')";
$query = "INSERT INTO PROFILE VALUES ('$name', '$Username','$Email', $Contact, '$City', '$State', '$Country', '$Education', '$Skills', '$Interests',  '$Password', $Rating)";
if( $conn->query($query) == FALSE) {
    echo "Record insert failure";
}
$conn->close();

echo '<br><br> Registration Succesful, Click here to Login! <br><br>';
echo "<a href='index.html'>
        <button style='padding-left: 5px; background-color: blue color: white;'>
            Login
        </button>";
?>