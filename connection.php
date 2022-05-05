<?php
$conn = new mysqli("localhost","root","","practice");
if(mysqli_connect_error()){
    echo "cannot connnect";
}
else{
    echo "connection_successful";
}
?>
while($row = mysqli_fetch_assoc($result)){?>
                    <div class="frame_body">
                        <h6>Category : <?php echo $row['category']?></h6>
                        <h6>Task : <?php echo $row['task']?></h6>
                        <h6>Priority : <?php echo $row['priority']?></h6>
                        <h6>Description : <?php echo $row['description']?></h6>
                    </div>
                <?php}