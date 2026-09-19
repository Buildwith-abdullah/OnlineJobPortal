<?php

include "db.php";


$id = $_GET['id'];

$status = $_GET['status'];



$sql = "

UPDATE applications

SET status='$status'

WHERE id='$id'

";



if(mysqli_query($conn,$sql)){


echo "Application Updated";


}

else{


echo mysqli_error($conn);


}


?>
