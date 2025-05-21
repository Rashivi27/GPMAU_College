
<?php
include("connection.php");
error_reporting(0);
 
$name=$_GET['na'];
$query = "DELETE FROM ques WHERE Name = '$name'";

$data=Mysqli_query($conn,$query);

if($data)
{
    echo "record deleted";
}
else{
    echo "not deletd";
}
?>