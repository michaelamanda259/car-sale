<?php
 session_start();
 if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true){
                header ("Location: adminlogin.php");
            }

  ?>
<html>
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
    <body><section class="py-0">
        <header id="header-fix" class="main-header">
            <div class="top-bar py-lg-0 py-2">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 text-center text-md-left align-self-center">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="mailto:helpteam@example.com"><i class="fa fa-envelope pr-1"></i> helpteam@example.com </a></li>
                                <li class="list-inline-item"><a href="tel:+1 800 589 6587"><i class="fa fa-phone pr-1"></i> +1 800 589 6587</a></li>
                            </ul> 
                        </div> 
                        <div class="col-12 col-md-6 text-center text-md-right">
                            <div class="top-right">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><i><a href="logout.php">Logout</a></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light py-lg-0 py-3 px-0">
                    <a class="navbar-brand" href="index.php"><img src="logo-v1.png" alt="" class="img-fluid"></a>
                    <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto mr-lg-4 mt-4 mt-lg-0">
                        <li class="nav-item"></li>


                       
                        <li class="nav-item"></li>
                        
                      </ul>
                      <form class="form-inline my-2 my-lg-0">
                            <a href="verify_admin.php" class="btn btn-primary my-2 my-sm-0 btn-sm">Verify Ads</a> 
                            
                            
                      </form>
                    </div>
                </nav>
            </div>
        </header>
        </section>
        <!-- Ad new car -->
       <?php require "addnewcar.php"; ?>
        <!-- End Ad -->

        <!-- Ad new car -->
       <?php require "addshowroom.php"; ?>
        <!-- End Ad -->
    </body>
</html>