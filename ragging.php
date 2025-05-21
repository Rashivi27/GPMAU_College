<?php
include("connection.php");

?>
<?php
if($_POST['send'])
{
    $name = $_POST['name'];
    $enrollment = $_POST['enrollment'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $guardian = $_POST['guardian'];
    $g_number = $_POST['g_number'];
    $branch = $_POST['branch'];
    $year = $_POST['year'];
    $gender = $_POST['gender'];  
  $address = $_POST['address'];
  $message = $_POST['message'];

  $query = "INSERT INTO form values(' $name','$enrollment','$number','$email','$guardian','$g_number','$branch','$year','$gender','$address','$message')";
  $data = mysqli_query($conn,$query);

  if($data)  {
    echo "MESSAGE SUBMITTED";
  }
  else {
    echo "FAILED";
  }

}
?>

<?php 
include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notice</title>
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
    

<!-- ======= Contact Section ======= -->
<section class="contact mt-3" >
      <div class="container" style="background-color:#f3f3f3;">
        <h1 class="heading1 text-center mt-2" style="font-size:30px; color:#d9232d;">
        Anti-Ragging Form
      </h1>
        
        
        <div class="row">


          <div class="col-lg-12">
            <form action="#" method="post" role="form" class="php-email-form anti-rag-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="enrollment" class="form-control" id="enrollment" placeholder="Your Enrollment" required>
                </div>

                <div class="col-md-6 form-group mt-3">
                  <input type="phone" name="number" class="form-control" id="number" placeholder="Your Mobile Number" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-6 form-group mt-3 mt-md-3">
                  <input type="text" class="form-control" name="guardian" id="g_name" placeholder="Guardian's Name" required>
                </div>
                <div class="col-md-6 form-group mt-3">
                  <input type="phone" name="g_number" class="form-control" id="g_phone" placeholder="Guardian's Mobile Number" required>
                </div>

                
                <div class="col-md-4 form-group mt-3 mt-md-3">
                  <input type="text" class="form-control" name="branch" id="branch_name" placeholder="Branch Name" required>
                </div>

                
                <div class="col-md-4 form-group mt-3 mt-md-3">
                  <select class="form-control" name="year">
                    <option disabled selected value="not selected">Select Your Year</option>
                    <option value="1st year">1st Year</option>
                    <option value="2nd year">2nd Year</option>
                    <option value="3rd year">3rd Year</option>
                  </select>
                </div>

                
                <div class="col-md-4 ">

                  <table>
                  <tr>
                  <td>Gender : </td>
                  <td class="pt-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="male" required></td>
                  <td>Male</td>
                  <td class="pt-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="female" required></td>
                  <td>Female</td>
                  </tr>
                  </table>
                </div>

              </div>
              
              <div class="form-group mt-3">
                <textarea class="form-control" name="address" rows="5" placeholder="Address" required></textarea>
              </div>
              
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>

              
               <div class="col-12">
              
              
              
                        <div class="form-check"  >
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                           &nbsp;&nbsp; I Agree to all Terms and Conditions applied.
                          </label>
                        </div>
            </div>

              <div class="my-3">
                
              <div class="text-center">
              <input type="submit" class="btn btn-primary btn-block mb-4" value="Send" name="send"/>

              </div>
            </form>
          </div>

        </div>
</br></br>
      </div>
      
    </section><!-- End Contact Section -->
	<br><br>

  
</body>
</html>

<?php 
include("footer.php");
?>
