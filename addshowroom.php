<!-- Ad showroom -->
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
<body>
    <form action="save_showroom.php" method="POST">

        <section class="pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-7">
                        <br/><br/><h3>Add Showroom</h3>
                        <p></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="card c-brd-light condition">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label class="c-dark">Showroom Registration Number:</label>
                                        <div class="form-group">
                                            <input type="text" name="showroom_regno" class="form-control rounded"></input>
                                        </div>
                                    </div>  
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label class="c-dark">Showroom Name:</label>
                                        <div class="form-group">
                                            <input type="text" name="showroom_nm" class="form-control rounded"></input>
                                        </div>
                                    </div> 
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label class="c-dark">Showroom MobileNumber:</label>
                                        <div class="form-group">
                                            <input type="text" name="showroom_mobno" class="form-control rounded"></input>
                                        </div>
                                    </div> <div class="col-12 col-sm-6 col-lg-4">
                                        <label class="c-dark">Showroom email :</label>
                                        <div class="form-group">
                                            <input type="text" name="showroom_email" class="form-control rounded"></input>
                                        </div>
                                    </div> 
                                    <div class="col-12 col-lg-8"></div>
                                    <div class="col-12 col-lg-4"></div>
                                    <div class="col-12 col-sm-4 col-lg-2 ml-auto mt-3 mt-sm-0">
                                        <button type="submit" class="btn btn-primary btn-md btn-block text-uppercase" name="submit">Submit</button> 
                                         
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Ad -->
    </form>
    <?php include('footer.php')?>
</body>
</html>