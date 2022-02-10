<?php
if(isset($_POST['sub-btn'])){
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$university = $_POST['university'];
$departement = $_POST['departement'];
include("conn.php");
$query = "INSERT INTO johntable(name,email,password,university,departement)values('$name','$email','$password','$university','$departement')";
$process = mysqli_query($conn,$query);
if($process){
    echo "data inserted succesfully";
}
else {
    echo "something went wrong";
}

}


?>