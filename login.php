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
session_start();
if(isset($_POST["login"])){

    $l_email=$_POST["lemail"];
    $l_pass=$_POST["lpass"];

    $connection=mysqli_connect("localhost","root","","signup");
    $quer="SELECT * FROM signup_det WHERE email= '{$l_email}' AND password='{$l_pass}'";
    $run=mysqli_query($connection,$quer);
    $rows=mysqli_fetch_assoc($run);
    if(mysqli_num_rows($run) > 0){
        if($rows['id'] == 1 ){
            $_SESSION['id'] = $_SESSION['id'];
            $_SESSION['email'] = $_SESSION['email'];
            $_SESSION['password'] = $_SESSION['password'];
            header("location: user/kaiadmin-lite-1.2.0/index.html");
            
        }elseif($rows['id'] == 2){
            $_SESSION['id'] = $_SESSION['id'];
            $_SESSION['email'] = $_SESSION['email'];
            $_SESSION['password'] = $_SESSION['password'];
            header("location: index.php");
        }
        else{
            echo "invalid email or password";

        }
    }

}
?>
<body>
<div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-lg-6">
   <form action="" method="post">
      <label for="lemail" class="form-label">Email:</label> <br>
      <input type="email" class="form-control" name="lemail"> <br>

      <label for="lpass" class="form-label">Password:</label> <br>
      <input type="Password" class="form-control" name="lpass"> <br>
     
      <input type="submit" class="btn btn-primary" value="log in" name="login">

   </form>

                
   </div>           
   </div>           
  </div>           
</body>
</html>