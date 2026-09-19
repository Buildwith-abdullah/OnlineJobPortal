<?php

include "db.php";


$sql = "

SELECT 
users.name,
users.email,
jobs.title,
applications.id,
applications.status

FROM applications

JOIN users

ON applications.user_id = users.id


JOIN jobs

ON applications.job_id = jobs.id

";


$result = mysqli_query($conn,$sql);


?>


<!DOCTYPE html>

<html>

<head>

<title>Applicants</title>

</head>


<body>


<h1>

Job Applicants

</h1>


<?php


while($row=mysqli_fetch_assoc($result)){


?>


<div>


<h2>
<?php echo $row['name']; ?>
</h2>


<p>
Email:
<?php echo $row['email']; ?>
</p>


<p>
Job:
<?php echo $row['title']; ?>
</p>


<p>
Status:
<?php echo $row['status']; ?>
</p>


<a href="update_status.php?id=<?php echo $row['id']; ?>&status=Approved">

Approve

</a>


<br><br>


<a href="update_status.php?id=<?php echo $row['id']; ?>&status=Rejected">

Reject

</a>


<hr>


</div>


<?php

}

?>


</body>

</html>
