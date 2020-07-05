<!-- Header-->
<section class="py-0">
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
                                 <li class="list-inline-item"><i class="fa fa-user pr-1"></i>
                                       <?php 
                                    // Check if the user is logged in, if not then redirect him to login page
                                    
                                    if(isset($_SESSION["id"]))
                                    {
                                        echo'<a href="logout.php"> Logout </a>';
                                    }
                                    else{
                                       
                                            echo '<a href="login.php"> Login </a> Or
                                        <a href="signup.php"> Register </a></li>';
                                        }
                                        ?>
                                    
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
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>

                        <li class="nav-item"><a class="nav-link" href="car-compare.php">Compare</a></li>

                        <li class="nav-item"><a class="nav-link" href="carlistold.php">UsedCAr</a></li>

                        <li class="nav-item"><a class="nav-link" href="carlistnew.php">NewCar</a></li>

                                        </ul>
                      <form class="form-inline my-2 my-lg-0">
                            <a href="sell-car.php" class="btn btn-primary my-2 my-sm-0 btn-sm">Sell Car</a>
                            
                      </form>
                    </div>
                </nav>
            </div>
        </header>
        </section>


        <!-- End Header-->