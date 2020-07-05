<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car_sale";
$conn = new mysqli($servername, $username, $password, $dbname);

//include('config.php');
if(isset($_SESSION['id']))
{
$userid=$_SESSION['id']; 
$sql = "SELECT * FROM user where user_id='$userid'";

$result =$conn->query($sql);
}
?>
  <!DOCTYPE HTML>
<html lang="en">
<head><meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Car Spot</title>  
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="favicon.ico">

        <!--Plugin CSS-->
        <link href="dist\css\plugins.min.css" rel="stylesheet">

        <!--main Css-->
        <link href="dist\css\main.min.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">

<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">


</head>
<body>
<!-- Header-->
<?php require "header.php"; ?>
<!-- End Header-->

<!--Page Header-->
<section class="page-header profile_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Your Profile</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Profile</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 



<section class="user_profile inner_pages">
  
    <div class="row">
      <div class="col-md-3 col-sm-3">
        <?php include('sidebar.php');?>
      <div class="col-md-6 col-sm-8">
        <div class="profile_wrap">
          <h5 class="uppercase underline">Your Profile</h5>
         
           
            <?php
            while($row = $result->fetch_assoc()){
              echo '
            <div class="form-group">
              <label class="control-label">Full Name</label>
              <input class="form-control white_bg" name="fullname" value="'.$row['user_nm'].'" id="fullname" readonly>
            </div>
            <div class="form-group">
              <label class="control-label">Address</label>
              <input class="form-control white_bg" name="fullname" value="'.$row['user_address'].'" id="address" readonly>
            </div>
            <div class="form-group">
              <label class="control-label">Email Address</label>
              <input class="form-control white_bg" value="'.$row['user_email'].'" name="emailid" id="email"  required readonly>
            </div>
            <div class="form-group">
              <label class="control-label">Phone Number</label>
              <input class="form-control white_bg" name="mobilenumber" value="'.$row['user_mobno'].'" id="phone-number" readonly>
            </div>
            
             ';
                    }?>
           
            
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

 

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>
</html>