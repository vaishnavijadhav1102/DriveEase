<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drive Ease</title>
    <link rel="stylesheet" href="commoncss.css">
    <?php require('links.php');?>
    

</head>
<body>
    <?php require("header.php");?>
    <!-- swiper -->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swipper-c">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="public1/carousel/p1.jpg" class = "w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="public1/carousel/p2.jpg" class = "w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="public1/carousel/p3.jpg" class = "w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="public1/carousel/p5.jpg" class = "w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="public1/carousel/p6.jpg" class = "w-100 d-block"/>
                </div>
                
            </div>
            
        </div>
    </div>
    </div>
    <!-- check availability -->
    <div class="container availability-form">
        <div class="row" style="text-align: center;">
            <div class="col-lg-8 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Parking Availability</h5>
                <form>
                    <div class="row align-items-end" style="position: relative;left:15%;">
                        
                        <div class="col-lg-4" style="left:20px;position:relative alg">
                            <!-- <label class="form-label" >Enter Your Location</label> -->
                            <select class="form-select shadow-none">
                                <option selected>Enter Your Location</option>
                                <option value="1">Bennett University</option>
                                <option value="2">Sector 18, Noida</option>
                                <option value="3">Advant Business Park,Noida</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                        <a target="_blank" class="btn btn-outline-dark text-dark shadow-none me-lg-3 me-4 custom-bg" href="selectparking.php">Book your slot</a>
                        </div>
                    </div>
                </form>
                <br>
            </div>
            
        </div>
    </div>
    <br>
    <br>

    <!-- about us col -->
    <div class="container mt-6 align-items-center">
        <div class="row align-items-center">
            <div class="col-lg-12 shadow p-4 rounded">
                <h2 class="text-center text-white fw-bold py-3" style="text-decoration: underline;">Welcome To DriveEase!</h2>
                <div class="row align-items-center mb-4">
                    <div class="swiper swipper-about">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide ">
                                <span class = "w-100 d-block rounded text-center text-sty"><br><h3 class="text-center *">About Us</h3> <br>Welcome to DriveEase, your one-stop-shop for all your parking, gas, and car maintenance needs.<br>
                                 At DriveEase, we are committed to providing hassle-free, reliable services that prioritize safety and convenience.<br> At DriveEase,
                                 we offer a range of services that cater to the needs of all vehicle owners.  <br>
                                 Whether you're looking to book a parking spot, refuel your car, or get a tune-up, <br>
                                 we've got you covered.<br><br> </span>
                            </div>
                            <div class="swiper-slide">
                                
                                <span class = "w-100 d-block rounded text-center text-sty"><br><h3 class="text-center *">Our Mission</h3><br> is to simplify the lives of our customers by providing easy-to-use,<br>
                                 secure, and affordable parking and gas services. <br>
                                  We believe that our customers' time is precious, and that's why we strive to <br>
                                   make their experience with us as seamless and stress-free as possible <br><br><br> </span>
                            </div>
                            <div class="swiper-slide">
                                <span class = "w-100 d-block rounded text-center text-sty"> <br><h3 class="text-center *">Note</h3>Safety is our top priority, and we take it seriously. <br>
                                 We have implemented strict safety measures across all our services to <br>
                                  ensure that our customers and their vehicles are safe at all times. <br>
                                   We also believe in being environmentally responsible, <br>
                                    and we do our part to reduce our carbon footprint through <br>
                                     eco-friendly practices. <br><br> </span>
                            </div>
                            <div class="swiper-slide">
                                <span class = "w-100 d-block rounded text-center text-sty"><br><h3 class="text-center *">Thank You!</h3><br> Thank you for choosing EasyPark for your parking, gas, and car maintenance needs.<br><br><br><br><br> </span>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="row align-items-center">
                    <h2 class="text-center text-dark mt-5 fw-bold text-sty" style="text-decoration: underline;">Our Team</h2>
                    <div class="col-lg-3 mx-auto mt-4">
                        <div class="card" style="width: 18rem;">
                            <img src="public1/about/aboutus_vaishi.png">
                            <div class="card-body">
                                <h5 class="card-title">Vaishnavi Jadhav</h5>
                                <p class="card-text">HI! I am the developer</p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mx-auto mt-4">
                        <div class="card" style="width: 18rem;">
                            <img src="public1/about/aboutus_mahak.png">
                            <div class="card-body">
                                <h5 class="card-title">Mahak Chamria</h5>
                                <p class="card-text">HI! I am the developer</p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->
    <!-- service -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold">Our Facilities</h2>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-2">
                <img src="public1/facilities/parking.gif" width="200px" height="200px">
            </div>
            <div class="col-lg-2">
                <img src="public1/facilities/car-service.gif" width="200px" height="200px">
            </div>
            <div class="col-lg-2">
                <img src="public1/facilities/eco-fuel.gif" width="200px" height="200px">
            </div>
            <div class="col-lg-2">
                <img src="public1/facilities/map.gif" width="200px" height="200px">
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php require("footer.php");?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".swipper-c", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".swipper-about", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
    });
    </script>
</body>
</html>