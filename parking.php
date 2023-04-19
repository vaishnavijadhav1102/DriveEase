<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Service</title>
    <?php require('inc/links.php');?>
    <link rel="stylesheet" href="css/commoncss.css">
    <style>
        .container {
            position: relative;
            display: flex;
            justify-content: center;
            left: 15%;
            }
    </style>
</head>
<body>
    
    <?php require("inc/header_main.php");?>
    <div class="my-5 px-4 mb-4">
        <h2 class="fw-bold h-font text-center">Book Your Parking!</h2>
        <div class="h-line bg-dark"></div>
    </div>
    <div class="container justify-content: center">
        <div class="center">
            <div class="row">
                <!-- <div class="col-lg-4 col-md-12 mb-lg-0 mb-4 px-auto py-5" style = "position:relative; left:-30px; top: -47px;">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded shadow">
                        <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">Filters</h4>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="navbarNav">
                            <div class="border bg-light p-3 rounder mb-3">
                                <h5  class = "mb-3" style="font-size: 18px;">Check Availability</h5>
                                
                                <form>
                                    <div class="col-lg-12" >
                                        <label for="inp_date">Add a Date</label>
                                        <input type="date" class="form-control shadow-none" id="inp_date">
                                    </div>
                                    
                                    <div class="col-lg-12 mt-3">
                                        <label for="inp_intime">In-Time</label>
                                        <input type="time" class="form-control shadow-none" id="inp_intime" placeholder="00:00" >
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <label for="inp_outtime">Out-Time</label>
                                        <input type="time" class="form-control shadow-none" id="inp_outtime" placeholder="00:00">
                                    </div>
                                    <div>
                                        <h5  class = "col-lg-12 mb-3 mt-3" style="font-size: 18px;">Vehicle Type</h5>
                                        <select class="form-select shadow-none" style="font-size: small;">
                                            <option selected>Vehicle Type</option>
                                            <option value="1">Bike</option>
                                            <option value="2">Car</option>
                                            <option value="3">Heavy Vehicle</option>
                                        </select>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary mt-3 text-light">Set</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                    </nav> 
                </div>-->
                
                <div class="col-lg-8 col-md-12 px-4 py-0 bg-light rounded shadow">
                    <h4 class="mt-3">Fill Out Your Car Details</h4>
                    <form class="row g-4 " action="insert.php" method="POST">
                        <div class="alert alert-warning" role="alert">
                            There might be an additional fee added if Out-Time is exceeded!
                        </div>
                        <div class="col-md-6 mt-2">
                            <label for="fname" class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="fname">
                        </div>
                        <div class="col-md-6 mt-2">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="number" class="form-control" name="phone">
                        </div>
                        <div class="col-6">
                            <label for="inp_email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="inp_email" placeholder="abc@abc.com">
                        </div>
                        <div class="col-6">
                            <label for="idnum" class="form-label">Government-Issued ID Number</label>
                            <input type="number" class="form-control" name="idnum" placeholder="12345XXXX">
                        </div>
                        
                        <div class="col-md-12">
                            <label for="inp_location" class="form-label">Location</label>
                            <select name="inp_location" class="form-select">
                            <option selected>Bennett University</option>
                            <option>Raja Dhaba</option>
                            <option>Honda Chowk</option>
                            <option>Sector 18</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="reason" class="form-label">Reason of visit</label>
                            <select name="reason" class="form-select">
                            <option selected>Choose...</option>
                            <option>Entertainment</option>
                            <option>Work</option>
                            <option>Family</option>
                            </select>
                        </div>
                        
                        <div class="col-12 mt-2">
                            <label for="pay_meth" class="form-label">Payment Method</label>
                            <select name="pay_meth" class="form-select">
                            <option selected>Choose...</option>
                            <option>Pay On-Site</option>
                            <option>Cards</option>
                            <option>Netbanking</option>
                            <option>UPI</option>
                            </select>
                        </div>
                        
                        
                        <div class="col-12 mt-2 py-4">
                            
                            <button type="submit" class="btn btn-primary" name="submit">Book Parking</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

    <?php require("inc/footer.php")?>


</body>
</html>