<?php

$host = "sql13.infinityfree.com";

$username = "if0_42956961";

$password = "93CzyGQZ2L3J";

$database = "if0_42956961_job_portal";


$conn = mysqli_connect(
    $host,
    $username,
    $password,
    $database
);


if (!$conn) {

    die("Database connection failed: " . mysqli_connect_error());

}

?>
