 <?php
 session_start();
 if(!(isset($_SESSION['id'])!= ''))
 {
    header ("Location: login.php");
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
                        <h1 class="text-white c-font-weight-700">Book Testdrive</h1>
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
                            <li class="breadcrumb-item active">Book Testdrive</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb -->


        <section class="pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-7">
                    </br></br>
                        <h3>Enter your details</h3>
                        
                    </div>
                </div>
                <form method="POST" action="booktest.php" id="form1">
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <div class="card c-brd-light condition">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <label class="c-dark">Enter Name</label>
                                            <div class="form-group position-relative">
                                                <input type="text" name="price_expectation" class="form-control rounded">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <label class="c-dark"> Enter email</label>
                                            <div class="form-group position-relative">
                                                <input type="text" name="price_expectation" class="form-control rounded">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <label class="c-dark">Enter Phone Number</label>
                                            <div class="form-group position-relative">
                                                <input type="text" name="price_expectation" class="form-control rounded">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <label class="c-dark">Model interested in?</label>
                                            <div class="form-group">
                                                <select name="model" class="form-control rounded" required>
                                                    <option value="">--- Select an Model ---</option>
                                                    <option value="Ford Mustang">Mustang </option>
                                                    <option value="Volvo XC90 Inscription">Volvo XC90 Inscription</option>
                                                    <option value="BMW X6 M">BMW X6 M</option>
                                                    <option value="Aston Martin DB5">Aston Martin DB5</option>
                                                    <option value="Chevrolet Camaro">Chevrolet Camaro</option>
                                                    <option value="Honda City i VTEC SV">Honda City i VTEC SV</option>
                                                    <option value="Volkswagen Jetta">Volkswagen Jetta</option>
                                                    <option value="Tata Aria Pure 4x2">Tata Aria Pure 4x2</option>.
                                                    <option value="Skoda Octavia Ambition 1.4 TSI MT">Skoda Octavia Ambition 1.4 TSI MT</option>
                                                    <option value="Audi A4 35 TDI Premium">Audi A4 35 TDI Premium</option>
                                                    <option value="Renault Fluence E4 D">Renault Fluence E4 D</option>
                                                    <option value="Nissan Micra AT">Nissan Micra AT</option>
                                                    <option value="Mahindra Scorpio S10 AT 2WD">Mahindra Scorpio S10 AT 2WD</option>
                                                    <option value="Toyota Etios G">Toyota Etios G</option>
                                                    <option value="Maruti Swift ZXI">Maruti Swift ZXI</option>
                                                    <option value="Hyundai I20">Hyundai I20</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <label class="c-dark">Select your nearest dealer</label>
                                            <div class="form-group position-relative">
                                                
                                                
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-4"></div>
                                        <div class="col-12 col-sm-4 col-lg-2 ml-auto mt-3 mt-sm-0">
                                            <button type="submit" class="btn btn-primary btn-md btn-block text-uppercase">Submit</button> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

</div>
</section>

<script>
var x = document.getElementById("demo");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.watchPosition(showPosition);
    }
    else{
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
function showPosition(position) {
    x.innerHTML="Latitude: " + position.coords.latitude +
    "<br>Longitude: " + position.coords.longitude;
}
</script>
 <!-- Footer Bottom -->
 <?php require "footer.php"; ?>
 <!-- End Footer Bottom -->

</body>
</html>