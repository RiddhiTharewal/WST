<?php

$db = new mysqli('localhost', 'root', '', 'student');
$sql = "select count(*) from qbank;";
 $result = mysqli_query($db,$sql);
 $qno = mysqli_fetch_array($result);
$qno = $qno[0];

$sql = "select * from qbank;";
 $result = mysqli_query($db,$sql);
 $row = mysqli_fetch_array($result);

$index = 1;
$count = $_POST["num1"];
if($count <= 0){
	echo "";
}

if($count > $row[0]){
	echo "";
}

while($index <= $count){
	$row = mysqli_fetch_array($result);
	$index = $index + 1;
}


 

echo $row[0]."@".$row[1]."@".$row[2]."@".$row[3]."@".$row[4]."@".$qno;
?>