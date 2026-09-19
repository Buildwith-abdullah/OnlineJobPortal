<?php

include "db.php";


$result = mysqli_query($conn,"SELECT * FROM jobs");


?>


<!DOCTYPE html>

<html>

<head>

<title>Available Jobs</title>


<style>

body{

font-family:Arial;
background:#f2f2f2;

}


.job{

background:white;
width:600px;
margin:20px auto;
padding:20px;
border-radius:10px;

}


button{

background:#007bff;
color:white;
padding:10px;
border:none;

}

</style>


</head>


<body>


<h1 style="text-align:center;">
Available Jobs
</h1>



<?php


while($row=mysqli_fetch_assoc($result)){


?>


<div class="job">


<h2>

<?php echo $row['title']; ?>

</h2>


<p>

<b>Company:</b>

<?php echo $row['company']; ?>

</p>



<p>

<b>Description:</b>

<?php echo $row['description']; ?>

</p>



<p>

<b>Location:</b>

<?php echo $row['location']; ?>

</p>



<p>

<b>Salary:</b>

<?php echo $row['salary']; ?>

</p>



<a href="apply.php?id=<?php echo $row['id']; ?>">

<button>
Apply Now
</button>

</a>



</div>


<?php


}


?>


</body>

</html>
