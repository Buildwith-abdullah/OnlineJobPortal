<?php

session_start();

include "db.php";


if(!isset($_SESSION['user_id'])){

header("Location: login.php");

exit();

}


$job_id = $_GET['id'];

$user_id = $_SESSION['user_id'];



$sql = "INSERT INTO applications(user_id,job_id)

VALUES('$user_id','$job_id')";


if(mysqli_query($conn,$sql)){

echo "Application Submitted Successfully";

}

else{

echo "Error: ".mysqli_error($conn);

}


?>
