<?php
include("connection.php");

?>
<?php
if($_POST['send'])
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
  $message = $_POST['message'];

  $query = "INSERT INTO ques values(' $name','$email','$subject','$message')";
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
    <title>cCONTACT US</title>
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
    


    <!--Contact Us starts-->
    <main class="mt-5">
        <div class="container">
            <!--Section Head Start-->
            <h2 class="h2-responsive fw-bold text-center my-2" style="color:var(--bs-orange)">
                Contact Us
            </h2>
            <p class="text-center w-responsive mx-auto mb-1">Government Polytechnic, Mau is commited to provide
                quality education to the students enabling them to excel in the field of engineering to cater to the
                changing &
                challenging needs .</p><br>
                <P>To contact or reach us you can use the following address:- <br>
                <em><b>Government Polytchnic Mau ,near KV , Kandheri Mau <br>
                Contact no. :- + 91  9415955611, 
                + 91 9450436679<br>
                Email Us :- gpmaunew@gmail.com</b></em></P>
            <!--Section Head End-->
            <!--Section: Contact v.2-->
            <section class="mb-4">



                <div class="row mt-5">

                    <!--Grid column-->
                    <div class="col-md-6 mb-md-0 mb-5">
                        <form id="contact-form" name="contact-form" action="#" method="POST">

                            <h3>ANY QUERY</h3>

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="name" name="name" class="form-control">
                                        <label for="name" class="">Your name</label>
                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="email" name="email" class="form-control">
                                        <label for="email" class="">Your email</label>
                                    </div>
                                </div>
                                <!--Grid column-->

                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <input type="text" id="subject" name="subject" class="form-control">
                                        <label for="subject" class="">Subject</label>
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-12">

                                    <div class="md-form">
                                        <textarea type="text" id="message" name="message" rows="2"
                                            class="form-control md-textarea"></textarea>
                                        <label for="message">Your message</label>
                                    </div>

                                </div>
                            </div>
                            <!--Grid row-->
                            <div class="text-center">
              <input type="submit" class="btn btn-primary btn-block mb-4" value="Send" name="send"/>

              </div>
                        </form>

                       
                        <div class="status"></div>
                    </div>
                    <!--Grid column-->
                    <div class="col-md-6 ">
                        <h3>REACH US</h3>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14344.839566935856!2d83.3254949!3d25.99394095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1671798077289!5m2!1sen!2sin"
                            width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>



                </div>

            </section>
            <!--Section: Contact v.2-->
            <!--Section: Contect v.2-->

        </div>
    </main>
    <!--contact us ends-->
    <br><br><br>
   
</body>
</html>

<?php 
include("footer.php");
?>