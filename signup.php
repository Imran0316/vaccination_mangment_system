<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<?php 
if(isset($_POST["signup"])){
    $uname=$_POST["name"];
    $uemail=$_POST["email"];
    $upassword=$_POST["password"];

    $connection=mysqli_connect("localhost","root","","signup");
    $query="INSERT INTO `signup_det`(`name`, `email`, `password`) VALUES ('$uname','$uemail','$upassword')";

    $run=mysqli_query($connection,$query);
    if($run){
        header("location: login.php");
    }else{
        echo "try again";
    }
}
?>
<body>
    <div class="container ">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-lg-6">
                <form action="" method="post">
                    <label for="name" class="form-label">Name:</label> <br>
                    <input type="text" class="form-control" name="name"> <br>

                    <label for="email" class="form-label">Email:</label> <br>
                    <input type="email" class="form-control"  name="email"> <br>

                    <label for="password" class="form-label">Password:</label> <br>
                    <input type="password" class="form-control"  name="password"> <br>

                    <input type="submit" class="btn btn-primary" value="sign up" name="signup">
                </form>
            </div>
        </div>
    </div>
</body>
</html>