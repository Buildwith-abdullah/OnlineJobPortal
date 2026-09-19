<?php

session_start();

include "db.php";


if(!isset($_SESSION['user_id'])){

header("Location: login.php");

exit();

}


$users = mysqli_query($conn,"SELECT * FROM users");

$jobs = mysqli_query($conn,"SELECT * FROM jobs");

$applications = mysqli_query($conn,"SELECT * FROM applications");


?>


<!DOCTYPE html>

<html>

<head>

<title>Admin Panel</title>

</head>


<body>


<h1>
Admin Dashboard
</h1>


<h2>
Users
</h2>


<?php

while($row=mysqli_fetch_assoc($users)){

echo $row['name']." - ".$row['role']."<br>";

}

?>


<h2>
Jobs
</h2>


<?php

while($row=mysqli_fetch_assoc($jobs)){

echo $row['title']."<br>";

}

?>


<h2>
Applications
</h2>


<?php

while($row=mysqli_fetch_assoc($applications)){

echo "Application ID: ".$row['id']." - ".$row['status']."<br>";

}

?>


</body>

</html>
