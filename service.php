<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
    <?php require("links.php");?>
    <link rel="stylesheet" href="commoncss.css">
</head>
<body>
    <?php require("header.php");?>
    <div class="container">

        <div class="container mt-5">
        <u><h3 class=" mx-3 mb-3 fw-bold text-center">Services</h3></u>
            <div class="row justify-content-between">
                <div class="col-lg-3 mx-auto mt-4">
                    <div class="card" style="width: 15rem; height: 30rem;">
                        <img src="public1/facilities/parking.gif">
                        <div class="card-body">
                            <h5 class="card-title">Park Your Car</h5>
                            <p class="card-text">
                                Easier and hassle-free way to park your vehicle <br>
                                at the nearest location you want to visit.</p>
                            <a href="parking.php" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mx-auto mt-4">
                    <div class="card" style="width: 15rem; height: 30rem;">
                        <img src="public1/facilities/car-service.gif">
                        <div class="card-body">
                            <h5 class="card-title">Car In Need?</h5>
                            <p class="card-text">
                                Get car services nearest to your location. 
                                <br>
                                <br>
                                <br>
                            </p>
                            <a href="#" class="btn btn-primary">Search</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mx-auto mt-4">
                    <div class="card" style="width: 15rem; height: 30rem;">
                        <img src="public1/facilities/eco-fuel.gif">
                        <div class="card-body">
                            <h5 class="card-title">Fuel Search</h5>
                            <p class="card-text">
                                Get a search result for gas stations <br>
                                neasrest to your location.
                                <br>
                                <br>
                            </p>
                            <a href="#" class="btn btn-primary">Search</a>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row justify-content-between mt-4">
                <div class="col-lg-3 mx-auto mt-4">
                    <div class="card" style="width: 15rem; height: 30rem;">
                        <img src="public1/facilities/map.gif">
                        <div class="card-body">
                            <h5 class="card-title">Find My Car</h5>
                            <p class="card-text">
                                Gone somewhere too long? Dont remember<br>
                                where last you parked? Find it out.
                            </p>
                            <a href="#" class="btn btn-primary">Find</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mx-auto mt-4">
                    <div class="card" style="width: 15rem; height: 30rem;">
                        <img src="public1/facilities/speech-bubble.gif">
                        <div class="card-body">
                            <h5 class="card-title">Forums</h5>
                            <p class="card-text">
                                Discuss traffic and other<br>
                                details with our other users.
                                <br>
                                <br>
                            </p>
                            <a href="#" class="btn btn-primary">Chat</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php require("footer.php")?>
</body>
</html>