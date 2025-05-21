<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <!--Fontaswone-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--custom css-->
    <link rel="stylesheet" href="style.css">

    <style>
table, th, td {
  border: 4px solid;
}
table {
  width: 100%;
}
</style>
</head>
<body>
    <table style=' border=2'>
                    <tr>
                        <th> Name </th>  
                        <th>  Enrollment</th>
                        <th> Number </th>
                        <th> Email </th>
                        <th>  Guardian Name</th>
                        <th> GuardianNumber </th>
                        <th> Branch </th>
                        <th> Year </th>
                        <th> Gender </th>
                        <th> Address </th>
                        <th> Message </th>   
                     </tr>


<?php
error_reporting(0);
include("connection.php");
$query = "SELECT * FROM form";
$data = Mysqli_query($conn,$query);
$total = Mysqli_num_rows($data);
//echo $total;
//$result = mysqli_fetch_assoc($data);


//echo $result['name']. " ".$result['enrollment']. " ".$result['number']. " ".$result['email']. " ".$result['guardian']. " ".$result['g_number']. " ".$result['branch']. " ".$result['year']. " ".$result['gender']. " ".$result['message'];

if($total !=0)
{   
    
    while($result=mysqli_fetch_assoc($data))
    {
        echo "
        <tr>
        <td>".$result['name']."</td>
        <td>".$result['enrollment']."</td>
        <td>".$result['number']."</td>
        <td>".$result['email']."</td>
        <td>".$result['guardian']."</td>
        <td>".$result['g_number']."</td>
        <td>".$result['branch']."</td>
        <td>".$result['year']."</td>
        <td>".$result['gender']."</td>
        <td>".$result['address']."</td>
        <td>".$result['message']."</td>
        </tr>";
    }
    echo "table has record";
}
else{
    echo "no recored";
}
?>
</table>
</body>
</html>