<?php 
include("connection.php");
?>
<?php 
include("header.php");
?>

<?php
if($_POST['register'])
{
  $email = $_POST['email'];
  $password = $_POST['password'];
  $conpassword = $_POST['confirm_password'];

  $query = "INSERT INTO registration values(' $email','$password','$conpassword')";
  $data = mysqli_query($conn,$query);

  if($data)  {
    echo "REGISTRATION SUCCESSFUL";
  }
  else {
    echo "REGISTRATION FAILED";
  }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4"> </div>
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header text-center fw-bold">Register</h5>
                    <div class="card-body">
                        <form action="#" method="post" autocomplete="off">
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example1">Email address</label>
                                <input type="email" id="form2Example1" class="form-control" name="email"/>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example2">Password</label>
                                <input type="password" id="form2Example2" class="form-control" name="password"/>
                            </div>

                             <!-- Password input -->
                             <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example2">Confirm Password</label>
                                <input type="password" id="form2Example2" class="form-control" name="confirm_password"/>
                            </div>

                            <!-- 2 column grid layout for inline styling -->
                            <div class="row mb-4">
                                <div class="col d-flex justify-content-start">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="form2Example31"
                                            checked />
                                        <label class="form-check-label" for="form2Example31"> Remember me </label>
                                    </div>
                                </div>

                               
                            </div>

                            <!-- Submit button -->
                            <input type="submit" class="btn btn-primary btn-block mb-4" value="Sign up" name="register"/>

                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>Already a member <a href="login.php">Login</a></p>
                               
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
   </body>

</html>

<?php 
include("footer.php");
?>