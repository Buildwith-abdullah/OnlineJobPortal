<?php

session_start();

include "db.php";


if(isset($_POST['login'])){


$email = $_POST['email'];

$password = $_POST['password'];



$sql = "SELECT * FROM users WHERE email='$email'";


$result = mysqli_query($conn,$sql);



if(mysqli_num_rows($result) > 0){


$user = mysqli_fetch_assoc($result);



if(password_verify($password,$user['password'])){


$_SESSION['user_id'] = $user['id'];

$_SESSION['name'] = $user['name'];

$_SESSION['role'] = $user['role'];



if($user['role']=="Job Seeker"){

header("Location: dashboard.php");

}

elseif($user['role']=="Employer"){

header("Location: employer_dashboard.php");

}

else{

header("Location: admin.php");

}


}

else{

echo "Wrong Password";

}


}

else{

echo "User not found";

}


}


?>



<!DOCTYPE html>

<html>

<head>

<title>Login - Online Job Portal</title>

</head>


<body>


<h1>User Login</h1>


<form method="POST">


Email:

<input type="email" name="email">

<br><br>


Password:

<input type="password" name="password">


<br><br>


<button name="login">

Login

</button>


</form>


</body>

</html>
