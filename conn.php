<?php
$conn = mysqli_connect("localhost","root","","john");
if($conn){
    echo "database connected succesfully";
}
else {
    echo "database not connected successfully";
}



?>