<?php
require_once 'config.php';
session_start();

$sql = "SELECT * FROM vehicle where vehicle_type='new'";
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
                        <h1 class="text-white c-font-weight-700">Single Cars Listing</h1>
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

        <!-- List Details -->
        <section>
            <div class="container">
                <div class="row">
                <?php
                    while($row = $result->fetch_assoc()) {
                   echo '
                   <div class="col-12 col-lg-8 mb-4 mb-lg-0">
                        <div class="car-listing">
                            <div>
                                <ul >
                                    <li class="position-relative" data-thumb="dist/images/img1.jpg">
                                         
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['vehicle_img_dir'] ).'" height="1000" width="1000" class="img-thumnail" />  
                               </td>  
                          </tr> </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                   <div class="col-12 col-lg-4">
                        <div class="card c-brd-light mb-4">
                            <div class="card-body">
                                <h4>'.$row['vehicle_model'].'</h4>
                                <ul class="list-unstyled c-line-height-2_5 mb-0">
                                    
                                    <li><small class="c-light">Price</small> <h4 class="d-inline-block c-primary mb-1">
                                    '.$row['vehicle_price'].'</h4></li>
                                    
                                </ul>
                            </div>
                            <table class="table mb-0 c-line-height-1_5 c-brd-light">
                                <tbody>
                                    <tr>
                                        <td class="c-dark c-font-weight-600 b-r"><i class="flaticon-calendar pr-1">
                                        </i> Model:</td>
                                        <td>'.$row['vehicle_model'].'</td>
                                    </tr>
                                    <tr>
                                        <td class="c-dark c-font-weight-600 b-r"><i class="flaticon-fuel pr-1"></i> Fuel:</td>
                                        <td>'.$row['vehicle_fueltype'].'</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="card c-brd-light mb-4">
                            <input type="submit" name="BookTestDrive" value="BookTestDrive" class="btn btn-primary btn-lg text-uppercase">



                            </div>
                        </div>'; 
                        if(isset($_POST['BookTestDrive']))
{
        echo '<script>alert("Call : 9000000000 To book your test drive")</script>';  
}
                        }                   
?>
</div>
</div>
</section>
        <!-- End List Details -->

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