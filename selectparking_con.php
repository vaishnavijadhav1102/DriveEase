<?php
    session_start();
    include "db_connection.php";
    
    if(isset($_POST['submit'])){

        if(!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['govt']) && !empty($_POST['location']) && !empty($_POST['reason']) && !empty($_POST['payment'])){
            $name = $_POST['fname'];
            $loc = $_POST['flocation'];
            $reason = $_POST['freason'];
            $paymeth = $_POST['fpayment'];
            $vehn =  $_POST['fvehinum'];
            $date = $_POST['fdate'];
            $intime = $_POST['fintime'];
            $outtime = $_POST['fouttime'];

            if($outime <= $intime){
                header("selectparking.php: login.php?error=Out-time has to be greater then in-time");
                exit();
            }

            $query = "
	            INSERT INTO orders 
	            (user_name, vehicle_num, location, reason, payment_type, date, in_time, out_time, total) 
	            VALUES ('$name','$vehn','$loc','$reason','$paymeth','$date','$intime','$outtime')
	            ";

            $run = mysqli_query($con,$query) or die(mysqli_error($con));

            if($run){
                echo"
                    <div class ='order-message-container'>
                        <div class ='message-container'>
                            <h3> Thankyou for booking with us! </h3>
                                <div class ='order-detail'>
                                    <span></span>
                                    <span class='total'> total:   </span>
                                </div>                          
                                <div class ='customer-detail'>
                                    <p> your name : <span>".$name."</span> </p>
                                    <p> your number : <span>".$number."</span> </p>
                                    <p> your email : <span>".$email."</span> </p>
                                    <p> your govt-id : <span>".$idnum."</span> </p>
                                    <p> your location : <span>".$loc."</span> </p>
                                    <p> your vehicle number : <span>".$vehn."</span> </p>
                                    <p> your reason : <span>".$reason."</span> </p>
                                    <p> your payment method : <span>".$paymeth."</span> </p>
                                </div> 
                            <a href='home.php' class='btn'> Go to home page </a>
                        </div>
                    </div>

                ";
            }
            else{
                header("selectparking.php: login.php?error=Form not submited");
                exit();
            }
        }
        else{
            header("selectparking.php: login.php?error=all fields required");
            exit();
        }
    }
?>
