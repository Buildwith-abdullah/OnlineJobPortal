<?php

$host = "sql13.infinityfree.com";

$username = "if0_42956961";

$password = "YOUR_INFINITYFREE_PASSWORD";

$database = "YOUR_FULL_DATABASE_NAME";


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
