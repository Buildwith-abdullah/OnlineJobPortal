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

<title>Employer Dashboard</title>

<style>

body{
font-family:Arial;
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
background:#28a745;
color:white;
text-decoration:none;
border-radius:5px;

}

</style>

</head>


<body>


<div class="box">

<h1>
Welcome Employer
</h1>


<h3>
Employer Dashboard
</h3>


<a href="post_job.php">
Post New Job
</a>


<a href="logout.php">
Logout
</a>


</div>


</body>

</html>
