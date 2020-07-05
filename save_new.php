<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car_sale";
$new="new";
$verified="yes";
$file = addslashes(file_get_contents($_FILES["vehicle_img_dir"]["tmp_name"]));

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['brand']))
{
    $sql = "INSERT INTO vehicle 
    (vehicle_comp,vehicle_model,vehicle_fueltype,vehicle_price,vehicle_type,verified,vehicle_img_dir)
    VALUES ('".$_POST['brand']."',
    '".$_POST['model']."',
    '".$_POST['fuel']."',
    '".$_POST['price']."',
    '$new','$verified',
    '$file')";

//$image=$_POST['image'];
  //  $file = addslashes(file_get_contents($_FILES['$image']["tmp_name"]));  
    //$sql2 = "INSERT INTO seller(posted_img) VALUES ('$file')";  
      
   if ($conn->query($sql)  === TRUE) {
        echo '<script>alert("Added new car successfully..")</script>';  

        header('location: admin.php');
  } else {
      echo '<script>alert("ERROR")' . $sql .  $conn->error;
        //echo "Error: " . $sql2 . "<br>" . $conn->error;
  }
}

?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Car Spot</title>  
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="favicon.ico">

        <!--Plugin CSS-->
        <link href="dist\css\plugins.min.css" rel="stylesheet">

        <!--main Css-->
        <link href="dist\css\main.min.css" rel="stylesheet">  
  
    </head>
    <body> 
        <!-- Header-->
        <?php 
        require "header.php";
        ?>
        <!-- End Header-->
        
        <!-- Page Inner-->
        <section>
            <div class="background-image-maker gradient gradient-lr"></div>
            <div class="holder-image">
                <img src="dist\images\bg2.jpg" alt="" class="img-fluid d-none">
            </div>
            <div class="black-overlay overlay-full"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 justify-content-center text-center">
                        <h1 class="text-white c-font-weight-700">ADDED</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Page Inner-->
        
        <!-- Breadcrumb -->
        <section class="py-0 h-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10 col-sm-5 col-lg-3 text-center">
                        <ol class="breadcrumb justify-content-center mb-0 c-bg-primary text-white py-3 position-relative">
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb -->
        
       
        
       <br>
       <br>
        <!-- End Post Ad -->
        
        <!-- Footer Bottom -->
        <?php
        require "footer.php";
        ?>
        <!-- End Footer Bottom -->
        
        <!-- Top To Bottom-->
        <div class="scrollup">
            <img src="dist\images\up-arrow.svg" class="img-fluid">
        </div>
        <!-- End Top To Bottom-->
        
        
        <!-- jQuery -->
        <script src="dist\js\plugins.min.js"></script>
        <script src="dist\js\common.js"></script>
    </body>
    
</html>