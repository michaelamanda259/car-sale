<html>
<body>
       <form action="save_new.php" method="POST"  enctype="multipart/form-data">
        <section class="pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-7">
                        <br/><br/><h3>Add New Car</h3>
                        <p></p>
                    </div>
                </div>
                <div class="row">

                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <label class="c-dark">Company</label>
                                            <div class="form-group">
                                                <select name="brand" class="form-control rounded" required>
                                                    <option value="">--- Select an Brand ---</option>
                                                    <option value="Ford">Ford </option>
                                                    <option value="Volvo">Volvo</option>
                                                    <option value="BMW">BMW</option>
                                                    <option value="Aston">Aston</option>
                                                    <option value="Chevrolet">Chevrolet</option>
                                                    <option value="Honda">Honda City i VTEC SV</option>
                                                    <option value="Volkswagen">Volkswagen</option>
                                                    <option value="Tata">Tata</option>.
                                                    <option value="Skoda">Skoda</option>
                                                    <option value="Audi">Audi</option>
                                                    <option value="Ranault">Ranault</option>
                                                    <option value="Nissan">Nissan</option>
                                                    <option value="Mahindra">Mahindra</option>
                                                    <option value="Toyota">Toyota</option>
                                                    <option value="Maruti">Maruti</option>
                                                    <option value="Hyundai">Hyundai</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <label class="c-dark">Model</label>
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
                                            <label class="c-dark">Fuel Type</label>
                                            <div class="form-group">
                                                <select name="fuel" class="form-control rounded" required>
                                                    <option value="">--- Select an type ---</option>
                                                    <option value="petrol">Petrol</option>
                                                    <option value="Diesel">Diesel</option>
                                                    <option value="CNG">CNG</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <label class="c-dark">Price</label>
                                            <div class="form-group">
                                                
                                                <input type="text" name="price" class="form-control rounded">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <label class="c-dark">Car Image</label>
                                            <div class="form-group">
                                                <input type="file" id="image" name="vehicle_img_dir"class="form-control rounded"/></div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            
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
                </div>
            </div>
        </section></form>
        <!-- End Ad --></body></html>