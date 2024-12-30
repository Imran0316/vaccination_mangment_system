<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
session_start();
if(isset($_POST["login"])){

    $l_email=$_POST["lemail"];
    $l_pass=$_POST["lpass"];

    $connection=mysqli_connect("localhost","root","","vac_signup");
    $quer="SELECT * FROM signup_det WHERE email = '{$l_email}' AND password='{$l_pass}'";
    $run=mysqli_query($connection,$quer);
    $rows=mysqli_fetch_assoc($run);
    if(mysqli_num_rows($run) > 0){
        if($rows['id'] == 1 ){
            $_SESSION['id'] = $_SESSION['id'];
            $_SESSION['email'] = $_SESSION['email'];
            $_SESSION['password'] = $_SESSION['password'];
            header("location: register.php");
        }else{
            echo "not running";
        }
    }

}
?>
<body>
<div class="container ">
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