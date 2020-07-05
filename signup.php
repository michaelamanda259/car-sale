<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" >


    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/css/skins/default.css">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Car Spot</title>  
        
        <!-- Favicon -->
        
        <!--Plugin CSS-->
        <link href="dist\css\plugins.min.css" rel="stylesheet">

        <!--main Css-->
        <link href="dist\css\main.min.css" rel="stylesheet">
    </head>
    <?php
include 'config.php';
 if(isset($_POST["submit"]))
 {
    $name = $_POST['user_nm'];
    $area = $_POST['user_address'];
    $mob_no = $_POST['user_mobno'];
    $email = $_POST['user_email'];
    $pass = $_POST['user_password'];
         
    $sql="insert into user
    (user_nm,user_address,user_mobno,user_email,user_password) 
         values ('$name','$area','$mob_no',
         '$email','$pass')";
     if ($conn->query($sql)  === TRUE) {
        echo '<script>alert("Registered successfully..")</script>';  

        header('location:login.php');
  } else {
      echo '<script>alert("ERROR")' . $sql .  $conn->error;
        //echo "Error: " . $sql2 . "<br>" . $conn->error;
  }
 }

?>
    <body> 
        <!-- Header-->
         <?php require "header.php"; ?>
         <!--end header-->
        <div class="page_loader"></div>

<!-- Login 1 start -->
<div class="login-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="login-inner-form">
                    <div class="details">
                        <h3>Create an account</h3>
                        <form action="signup.php" method="POST">
                            <div class="form-group">
                                <input type="text" name="user_nm" class="input-text" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <input type="text" name="user_address" class="input-text" placeholder="City">
                            </div>
                            <div class="form-group">
                                <input type="text" name="user_mobno" class="input-text" placeholder=" Phone Number">
                            </div>
                            <div class="form-group">
                                <input type="email" name="user_email" class="input-text" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" name="user_password" class="input-text" placeholder="Password">
                            </div>
                            
                            <div class="form-group mb-0">
                                <button type="submit" id="submit" value="submit" name="submit" class="btn btn-primary btn-block btn-md text-uppercase font-weight-bold">Register</button>
                            </div>
                        </form>
                        
                    </div>
                    <div class="footer">
                        <span>Already a member? <a href="login.php">Login here</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Footer-->
        <?php require "footer.php"; ?>
        <!-- End Footer-->
</body>
</html>
<!-- Login 1 end -->
       