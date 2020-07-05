<?php
require_once 'config.php';
session_start();

$sql = "SELECT * FROM vehicle where vehicle_type='new'";
$result = $conn->query($sql);

$sql1 = "SELECT * FROM vehicle where vehicle_type='used' and verified='yes'";
$result1 = $conn->query($sql1);
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
        <!-- Slider-->
        <section class="py-0">
            <div id="owl-demo">
                <div class="item">
                    <div class="background-image-maker gradient gradient-lr"></div>
                    <div class="holder-image">
                        <img src="slider1.jpg" alt="" class="img-fluid d-none">
                    </div>
                </div>
                
            </div>
           
        </section>
        <!-- End Slider-->
        
        <!-- Car Deals-->
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12">
                        <h3>Best NEW Car Deals For You</h3>
                        <ul class="nav nav-tabs border-0 py-3 flex-column flex-sm-row" id="myTab" role="tablist">
                            <li class="nav-item mr-sm-3 mb-3 mb-sm-0">
                                <a class="nav-link redial-light rounded active newslider" data-toggle="tab" href="#new" role="tab" aria-selected="true" aria-expanded="true">New</a>
                            </li></ul>
                    </div>
                </div>
                <div class="tab-content bg-white rounded-bottom rounded-right" id="myTabContent3">
                    <div class="tab-pane fade active show" id="new" role="tabpanel" aria-expanded="true">
                        <div class="slider multiple-items">
                              <?php
                    while($row = $result->fetch_assoc()) {
                   echo '<div>

                   <img src="dist\images\bg4.jpg" height="1000" width="1000" class="img-fluid rounded-top" />



                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="carlistnew.php">'.$row['vehicle_model'].' </a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0"> '.$row['vehicle_price'].' </h6> Price onwards</small>
                                    </div>
                                    
                            </div>
                        </div>';
                    }?>
                    </div>
                    </div>
                    
                </div>



                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12"><br><br><br>
                        <h3>Best OLD Car Deals For You</h3>
                        <ul class="nav nav-tabs border-0 py-3 flex-column flex-sm-row" id="myTab" role="tablist">
                            <li class="nav-item mr-sm-3 mb-3 mb-sm-0">
                                <a class="nav-link redial-light rounded active newslider" data-toggle="tab" href="#new" role="tab" aria-selected="true" aria-expanded="true">Old</a>
                            </li></ul>
                    </div>
                </div>
                <div class="tab-content bg-white rounded-bottom rounded-right" id="myTabContent3">
                    <div class="tab-pane fade active show" id="new" role="tabpanel" aria-expanded="true">
                        <div class="slider multiple-items">
                              <?php
                    while($row1 = $result1->fetch_assoc()) {
                   echo '<div>
<img src="data:image/jpeg;base64,'.base64_encode($row1['vehicle_img_dir'] ).'" height="1000" width="1000" class="img-fluid rounded-top" />

                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="carlistold.php">'.$row1['vehicle_model'].' </a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">'.$row1['vehicle_price'].' </h6> Price onwards</small>
                                    </div>
                                    
                            </div>
                        </div>';
                    }?>
                    </div>
                    </div>
                    
                </div>




            </div>
        </section>
        <!-- End Car Deals-->

       

        <!-- Footer-->
        <?php require "footer.php"; ?>
        <!-- End Footer-->
        
        
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