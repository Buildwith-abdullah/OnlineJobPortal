<?php

include "db.php";


if(isset($_POST['post'])){


$title = $_POST['title'];

$description = $_POST['description'];

$company = $_POST['company'];

$location = $_POST['location'];

$salary = $_POST['salary'];



$sql = "INSERT INTO jobs
(title,description,company,location,salary)

VALUES

('$title','$description','$company','$location','$salary')";



if(mysqli_query($conn,$sql)){

echo "Job Posted Successfully";

}

else{

echo "Error: " . mysqli_error($conn);

}


}


?>


<!DOCTYPE html>

<html>

<head>

<title>Post Job</title>

</head>


<body>


<h1>
Post New Job
</h1>


<form method="POST">


Job Title:

<br>

<input type="text" name="title">

<br><br>



Description:

<br>

<textarea name="description"></textarea>

<br><br>



Company Name:

<br>

<input type="text" name="company">

<br><br>



Location:

<br>

<input type="text" name="location">

<br><br>



Salary:

<br>

<input type="text" name="salary">

<br><br>



<button name="post">

Post Job

</button>


</form>


</body>

</html>
