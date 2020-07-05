<?php
global $vehiclem1;

include('config.php');
if(isset($_POST['submit']))
{
    $car1=$_POST['one'];
    $car2=$_POST['two'];

    $sql1="SELECT * from vehicle where vehicle_model=:car1";
    $sql2="SELECT * from vehicle where vehicle_model=:car2";


    
    $res1 = $conn->query($sql1);
   // $res1=mysql_query($sql1);
    $res2=mysql_query($sql2);
    while($row1 = $res1->fetch_assoc())
    {
        
        $GLOBALS['vehiclem1'] = $row1['vehicle_model'];
        $vehiclep1 = $row1['vehicle_price'];
        $vehiclef1 = $row1['vehicle_fueltype'];
        $vehiclec1 = $row1['vehicle_comp'];
    
    }
    while ($row2=mysql_fetch_array($res2)) 
    {
        $vehiclem2 = $row2['vehicle_model'];
        $vehiclep2 = $row2['vehicle_price'];
        $vehiclef2 = $row2['vehicle_fueltype'];
        $vehiclec2 = $row2['vehicle_comp'];
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
         
         <?php include('header.php'); ?>

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
                        <h1 class="text-white c-font-weight-700">Car Compare</h1>
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
                            <li class="breadcrumb-item active">Car Compare</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb -->

        <!-- Car Compare -->
        <section>
            <div class="container">
                
                <div class="row mb-4">
                    <div class="col-12 col-xl-3 mb-5 mb-xl-0">
                        <div class="card c-brd-light">
                            <div class="card-body c-bg-light text-center">
                                <h6>Add Car to Compare</h6>
                                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                                    <div class="form-group">
                                         <select class="form-control bg-white rounded" name="one">
                                            <option>--- Select Model ---</option>
                                            <option value="Hyundai I20">Hyundai Accent</option>
                                            <option value="Ford Mustang">Mustang </option>
                                            <option value="Volvo XC90 Inscription">Volvo XC90 Inscription</option>
                                            
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control bg-white rounded" name="two">
                                            <option>--- Select Model ---</option>
                                            <option value="Hyundai I20">Hyundai Accent</option>
                                            <option value="Ford Mustang">Mustang </option>
                                            <option value="Volvo XC90 Inscription">Volvo XC90 Inscription</option>
                                            
                                        </select>
                                    </div>
                                   
                                    <input type="submit" value="Add Cars" class="btn btn-primary btn-lg btn-block" name="submit">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-9">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                                <div class="card c-brd-light">
                                    <div class="close text-right pr-1 pt-1">
                                    </div>
                                    <div class="card-body text-center  pt-0">
                               <img src="dist\images\img1.jpg" alt="" class="img-fluid rounded-top">
                                        <a href="#" class="c-dark c-montserrat">Volvo XC90 Inscription</a>
                                     </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                                <div class="card c-brd-light">
                                    <div class="close text-right pr-1 pt-1">
                                    </div>
                                    <div class="card-body text-center  pt-0">
                                     <img src="dist\images\img1.jpg" alt="" class="img-fluid rounded-top">
                                        <a href="#" class="c-dark c-montserrat">Volvo XC90 Inscription</a>
                                        
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="card c-brd-light car-listing border-top-0">
                            <div class="table-responsive">
                               
                                <table class="table table-striped mb-0 ">
                                    <thead class="list-header c-dark">
                                        <tr>
                                            <th scope="col"><i class="fa fa-bars pr-1"></i> Overview</th>
                                            <th scope="col">Volvo XC90 Inscription</th>
                                            <th scope="col">Volvo XC90 Inscription</th>
                                        </tr>
                                    </thead>
                                    <tbody id="demo" class="collapse show widget-content">
                                        <tr>
                                            <td>Vehicle Company</td>
                                            <td>Volvo</td>
                                            <td>Volvo</td>
                                        </tr>
                                        <tr>
                                            <td>Veicle Fuel Type</td>
                                            <td>Petrol</td>
                                            <td>CNGl</td>
                                        </tr>
                                        <tr>
                                            <td>Price</td>
                                            <td>15500</td>
                                            <td>10200</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Car Compare -->

       
       

        <!-- Top To Bottom-->
        <div class="scrollup">
            <img src="dist\images\up-arrow.svg" class="img-fluid">
        </div>
        <!-- End Top To Bottom-->
         
         <?php include('footer.php') ?>
     
 
        <!-- jQuery -->
        <script src="dist\js\plugins.min.js"></script>
        <script src="dist\js\common.js"></script>
    </body>
</html>