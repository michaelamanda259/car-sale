<?php
session_start();
 // Include config file

require_once "config.php";
// Check if the user is already logged in, if yes then redirect him to welcome page
/*if(isset($_SESSION["username"]) && $_SESSION["id"] === true){
    header("location: index.php");
    exit;
}*/
 
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["email"]))){
        $username_err = "Please enter email.";
    } else{
        $username = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
     $u=$_POST["email"];
     $id="";
     $sql="select user_email,user_password from user where user_email='$u' ";
     $result=mysqli_query($conn,$sql);
     
          if(is_array($row=mysqli_fetch_row($result)))
          {
                           // session_start();
                            // $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            //echo "successsss....";
                            header("location: index.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TAGCODE');</script>
    <!-- End Google Tag Manager -->
    <title>Signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

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
    <body> 
        <!-- Header-->
                 <?php require "header.php"; ?>
        <!--End Header-->

        <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TAGCODE"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- Login 1 start -->
<div class="login-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="login-inner-form">
                    <div class="details">
                        <h3>Sign into your account</h3>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="form-group" <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>>
                                <input type="email" name="email" class="input-text" placeholder="Email Address"value="<?php echo $username; ?>">
                            
                            </div>
                            <div class="form-group" <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>>
                                <input type="password" name="password" class="input-text" placeholder="Password">
                            
                            </div>
                            <div class="checkbox clearfix">
                               
                                <a href="forgot.php">Forgot Password</a>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary btn-block btn-md text-uppercase font-weight-bold">Login</button>
                            </div>
                        </form>
                        
                    </div>
                    <div class="footer">
                        <span>Don't have an account? <a href="signup.php">Register here</a></span>
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