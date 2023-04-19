<?php
    session_start();
    include "db_connection.php";
    
    if(isset($_POST['submit'])){

        if(!empty($_POST['flocation']) && !empty($_POST['freason']) && !empty($_POST['fpayment']) && !empty($_POST['fdate']) && !empty($_POST['fintime']) && !empty($_POST['fouttime'])){
            $name = $_SESSION['user_name'];
            $loc = $_POST['flocation'];
            $reason = $_POST['freason'];
            $paymeth = $_POST['fpayment'];
            $vehn =  $_POST['fvehinum'];
            $date = $_POST['fdate'];
            $intime = $_POST['fintime'];
            $outtime = $_POST['fouttime'];

            $firsttime = strtotime($intime);
            $endtime = strtotime($outtime);
            $curdate = date("Y-m-d");

            if($curdate>$date){
                header("Location: selectparking.php?error=enter a valid date");
            }
            if($firsttime>=$endtime){
                header("Location: selectparking.php?error=out-time has to be after in-time");
            }
            $time = $endtime- $firsttime;
            $hours = floor($time / 3600);
            $minutes = floor(($time % 3600) / 60);
            if($minutes!=0){
                $hours = $hours+1;
            }
            $q1 = "SELECT * FROM locations WHERE location = '$loc' ";
            $ans = mysqli_query($con,$q1);
            
            $ans1 = mysqli_fetch_assoc($ans);
            if(!$ans1){
                echo "ERROR SORRY";
            }
            $tot = number_format($ans1['fee']);
            $total = $tot * $hours;

            $a = "Pay On-Site";
            if($paymeth == $a){
                $st = "confirmed";
            }
            else{
                $st = "pending";
            }
            $query = "
	            INSERT INTO orders 
	            (user_name, vehicle_num, location, reason, payment_type,date, in_time, out_time, total,status) 
	            VALUES ('$name', '$vehn','$loc','$reason','$paymeth','$date','$intime','$outtime', '$total','$st')
	            ";

            $run = mysqli_query($con,$query) or die(mysqli_error($con));

            if($run){
                echo"
                    <div class ='order-message-container'>
                        <div class ='message-container'>
                            <h3> Thankyou for booking with us! </h3>
                                <div class ='order-detail'>
                                    <span class='total'> total:  Rs".$total."/- </span>
                                </div>                          
                                <div class ='customer-detail'>
                                    <p> Email : <span>".$name."</span> </p>
                                    <p> Location : <span>".$loc."</span> </p>
                                    <p> Vehicle number : <span>".$vehn."</span> </p>
                                    <p> Reason : <span>".$reason."</span> </p>
                                    <p> in-time : <span>".$intime."</span> <span></span> out-time : <span>".$intime."</span></p>
                                    <p> Payment method : <span>".$paymeth."</span> </p>
                                </div> 
                            <a href='home.php' class='btn'> Go to home page </a>
                            <a href='myorder.php' class='btn'> Go to my orders </a>
                        </div>
                    </div>
                
                    ";
            }
            else{
                header("Location: selectparking.php?error=Form not submited");
                exit();
            }
        }
        else{
            header("Location: selectparking.php?error=all fields required");
            exit();
        }
    }
    if(isset($_POST['submit1'])){
        if(!empty($_POST['sdate']) && !empty($_POST['sintime']) && !empty($_POST['souttime']) && !empty($_POST['sloc'])){
            $date1 = $_POST['sdate'];
            $intime1 = $_POST['sintime'];
            $outtime1 = $_POST['souttime'];
            $locat = $_POST['sloc'];

            $query1 = "
            SELECT FEE_HOUR , EXTRA_CHARGES, SLOTS FROM PARKINGSPACES 
            WHERE LOCATION = '$locat'
            ";

            $run1 = mysqli_query($con,$query1) or die(mysqli_error($con));

            if($run1){
                $result = mysqli_fetch_assoc($row1);
                echo "
                    please write something to show no of avavilable spaces
                ";
            }
            else{
                header("Location: selectparking.php?error=location not available");
                exit();
            }
        }
        else{
            header("Location: selectparking.php?error=all fields required");
            exit();
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Service</title>
    <?php require('links.php');?>
    <link rel="stylesheet" href="commoncss.css">
    <link rel="stylesheet" href="selectparking.css">
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
    
    <?php require("header.php");?>
    
    
    <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 px-4 py-0 bg-light rounded shadow">
                    <h4 class="mt-3">Fill Out Your Car Details</h4>
                    <form class="row g-4 " action="" method="post">
                        <?php if(isset($_GET['error'])) { ?>
                            <p class="error"> <?php echo $_GET['error']; ?></p>
                        <?php } ?>
                        <div class="alert alert-warning" role="alert">
                            There might be an additional fee added if Out-Time is exceeded!
                        </div>

                        <div class="col-md-6 mt-2" >
                                <label for="fdate">Add a Date</label>
                                <input type="date" class="form-control shadow-none" name="fdate">
                        </div>
                        <div class="col-md-6 mt-2" >
                                <label for="fvehinum">Enter Vehicle Number</label>
                                <input type="text" class="form-control" name="fvehinum">
                        </div>
                        <div class="col-md-6 mt-2">
                            <label for="fintime">In-Time</label>
                            <input type="time" class="form-control shadow-none" name="fintime" placeholder="00:00" >
                        </div>
                        <div class="col-md-6 mt-2">
                            <label for="fouttime">Out-Time</label>
                            <input type="time" class="form-control shadow-none"  name="fouttime" placeholder="00:00">
                        </div>
                        <div class="col-md-6 mt-2">
                            <label for="flocation" class="form-label">Location</label>
                            <select name="flocation" class="form-select">
                            <option selected>Choose...</option>
                            <option>Bennett University</option>
                            <option>Raja Dhaba</option>
                            <option>Honda Chowk</option>
                            <option>Sector 18</option>
                            </select>
                        </div>

                        
                        <div class="col-md-6 mt-2">
                            <label for="freason" class="form-label">Reason of visit</label>
                            <select name="freason" class="form-select">
                            <option selected>Choose...</option>
                            <option>Entertainment</option>
                            <option>Work</option>
                            <option>Family</option>
                            </select>
                        </div>

                        

                        <div class="col-12 mt-2">
                            <label for="fpayment" class="form-label">Payment Method</label>
                            <select name="fpayment" class="form-select">
                            <option selected>Choose...</option>
                            <option>Pay On-Site</option>
                            
                            <option>Netbanking</option>
                            <option>UPI</option>
                            </select>
                        </div>
                        
                        
                        <div class="col-12 mt-2 py-4">
                            
                            <button type="submit" class="btn btn-primary" name="submit">Book </button>
                        </div>
                    </form>
                </div>
            </div>
        
    </div>
    

    <?php require("footer.php")?>


</body>
</html>