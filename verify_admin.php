<?php
//globals $conn;
require_once 'config.php';
session_start();

$sql = "SELECT * FROM vehicle where vehicle_type='used' and verified='no'";
$result = $conn->query($sql);
//$conn->close();


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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <body>
  	<section class="py-0">
         <!-- Header-->
        <?php require "header.php"; ?>

        <!-- End Header-->
        </section>
<section class="pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-7"><br><br>
                        <h3> Ads to be verified</h3>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <div class="card c-brd-light condition">
                                <form  class="form-inline my-2 my-lg-0" method="POST">
                                    <div class="card-body">
                                    <div class="row">
                                    	<?php
                                        while($row = $result->fetch_assoc()) {
	                                      echo '            
            <div class="col-12 col-sm-6 col-lg-4">
		    <div class="card text-center">
			<div class="card-header">
			<p class="card-text"></p>
			<ul class="list-unstyled">
            <li>ID : '.$row['vehicle_idno'].'</li>
			<li>Make Year : '.$row['vehicle_makeyear'].'</li>
            <li>Brand : '.$row['vehicle_comp'].'</li>
            <li>Make model : '.$row['vehicle_model'].'</li>
			<li>Fuel : '.$row['vehicle_fueltype'].'</li>
            <li>Expectation : '.$row['vehicle_price'].'</li>
            <li>Kilometer driven : '.$row['vehicle_kilometer_driven'].'</li>
            <li>Owner : '.$row['vehicle_owner'].'</li><br>
            
            <input type="hidden" name="save" value="'.$row['vehicle_idno'].'" >
            
            <button type="submit" name="del" value="del" formaction="deletever.php">Delete
            <button type="submit" name="sav" value="sav" formaction="savever.php">Save

            </ul>
            </div>
            </div>
            </div>
            ';
        }
            ?>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        </body>
</html>