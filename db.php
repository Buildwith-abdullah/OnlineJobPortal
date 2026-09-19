<?php

$host = "sql12.freesqldatabase.com";
$username = "sql12837375";
$password = "kIiegACFih";
$database = "sql12837375";


$conn = mysqli_connect(
    $host,
    $username,
    $password,
    $database
);


if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}

?>
