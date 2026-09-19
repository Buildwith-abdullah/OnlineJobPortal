<?php

session_start();

include "db.php";


if(!isset($_SESSION['user_id'])){

header("Location: login.php");

exit();

}


$user_id = $_SESSION['user_id'];


$sql = "

SELECT jobs.title,
jobs.company,
applications.status

FROM applications

JOIN jobs

ON applications.job_id = jobs.id

WHERE applications.user_id='$user_id'

";


$result = mysqli_query($conn,$sql);


?>


<!DOCTYPE html>

<html>

<head>

<title>My Applications</title>

</head>


<body>


<h1>

My Applications

</h1>



<?php


while($row=mysqli_fetch_assoc($result)){


?>


<div>


<h2>

<?php echo $row['title']; ?>

</h2>


<p>

Company:

<?php echo $row['company']; ?>

</p>


<p>

Status:

<?php echo $row['status']; ?>

</p>


<hr>


</div>


<?php


}


?>


</body>

</html>
