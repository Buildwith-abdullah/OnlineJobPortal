<?php

session_start();


if(!isset($_SESSION['user_id'])){

header("Location: login.php");

exit();

}


?>


<!DOCTYPE html>

<html>

<head>

<title>Job Seeker Dashboard</title>

<style>

body{

font-family: Arial;
background:#f2f2f2;
text-align:center;

}


.box{

background:white;
width:500px;
margin:100px auto;
padding:30px;
border-radius:10px;

}


a{

display:block;
margin:15px;
padding:10px;
background:#007bff;
color:white;
text-decoration:none;
border-radius:5px;

}


</style>

</head>


<body>


<div class="box">


<h1>

Welcome <?php echo $_SESSION['name']; ?>

</h1>


<h3>

Job Seeker Dashboard

</h3>


<a href="jobs.php">

Search Jobs

</a>


<a href="applications.php">

My Applications

</a>


<a href="logout.php">

Logout

</a>


</div>


</body>

</html>
