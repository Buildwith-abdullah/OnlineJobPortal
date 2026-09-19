<?php

include "db.php";


if(isset($_POST['register'])){


$name = $_POST['name'];

$email = $_POST['email'];

$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$role = $_POST['role'];



$sql = "INSERT INTO users(name,email,password,role)

VALUES('$name','$email','$password','$role')";


if(mysqli_query($conn,$sql)){

echo "Registration Successful!";

}

else{

echo "Error: " . mysqli_error($conn);

}


}

?>


<!DOCTYPE html>

<html>

<head>

<title>Register - Online Job Portal</title>

</head>


<body>


<h1>Create Account</h1>


<form method="POST">


Name:

<input type="text" name="name">
<br><br>


Email:

<input type="email" name="email">
<br><br>


Password:

<input type="password" name="password">
<br><br>


Select Role:

<select name="role">

<option value="Job Seeker">
Job Seeker
</option>


<option value="Employer">
Employer
</option>


</select>


<br><br>


<button name="register">

Register

</button>


</form>


</body>

</html>
