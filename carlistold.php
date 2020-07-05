<?php
require_once 'config.php';
session_start();

$sql = "SELECT * FROM vehicle where vehicle_type='used' and verified='yes'";
$result = $conn->query($sql);

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
        <?php require "header.php"; ?>
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
                        <h1 class="text-white c-font-weight-700">Old Cars Listing</h1>
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
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Car Listing</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb -->
        
        <!-- List Left Sidebar -->
        <section>
            <div class="container">
                <div class="row">
                    <div>
                         <?php
                    while($row = $result->fetch_assoc()) {
                   echo '
                        <div class="card car-listing mb-4">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                 <img src="data:image/jpeg;base64,'.base64_encode($row['vehicle_img_dir'] ).'" height="1000" width="1000" class="img-fluid rounded-left" />  
                                </div>
                                <div class="col-12 col-xl-6 align-self-center">
                                    <div class="p-4 p-xl-0">
                                        <h6 class="mb-2"> '.$row['vehicle_model'].'</h6>
                                        <ul class="list-unstyled mb-2 c-line-height-2_5">
                                            <li><h6 class="c-primary mb-0"><small class="c-light">Price</small>  '.$row['vehicle_price'].'</h6></li>
                                        </ul>
                                        <ul class="list-inline">
                                            <li class="list-inline-item mr-3"><i class="flaticon-calendar pr-1"></i>  '.$row['vehicle_makeyear'].'</li>
                                            <li class="list-inline-item mr-3"><i class="flaticon-clock pr-1"></i>  '.$row['vehicle_kilometer_driven'].'</li>
                                            <li class="list-inline-item mr-3"><i class="flaticon-fuel pr-1"></i>   '.$row['vehicle_fueltype'].' </li>
                                            <li class="list-inline-item mr-3"><i class="fa fa-user"></i>  '.$row['vehicle_owner'].'</li>
                                        </ul>
                                        <button onclick="myFunction()"
                                         class="btn btn-outline-primary text-uppercase btn-lg c-font-weight-700" tabindex="-1">Contact Seller
                                     </button>
                                     <p id="demo"></p>
                                     <script>
                                        function myFunction() {
                                            document.getElementById("demo").innerHTML = "'.$row['vehicle_owner'].'";
                                        }
                                    </script>
                                </div>
                                </div>
                            </div> 
                        </div>';}?>
                    </div>
                </div>
            </div>
        </section>
        <!-- End List Left Sidebar -->
        
        <!-- Footer Bottom -->
        <?php require "footer.php"; ?>

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