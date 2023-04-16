<?php  
session_start();
include "db_connection.php";

if (isset($_POST['suname']) && isset($_POST['sphone']) && isset($_POST['spassword1']) && isset($_POST['spassword2'])){

    $suname = $_POST['suname'];
    $sphon = $_POST['sphone'];
    $spass = $_POST['spassword1'];
    $spass1 = $_POST['spassword2'];

    if(empty($suname)){
        header("Location: login_signup.php?error=User Name is required");
        exit();
    }
    else if(is_numeric($suname)){
        header("Location: login_signup.php?error=User Name cannot be numeric");
        exit();
    }
    else if(empty($spass) || empty($spass1)){
        header("Location: login_signup.php?error=Password is required");
        exit();
    }
    else if(($spass1) != ($spass)){
        header("Location: login_signup.php?error=Passwords do not match");
        exit();
    }
    else if(!preg_match("/^[0-9]{10}$/",$sphon)){
        header("Location: login_signup.php?error=Enter a valid phone number");
        exit();
    }
    else if (!filter_var($suname, FILTER_VALIDATE_EMAIL)) {
        header("Location: login_signup.php?error=Enter a valid email ID");
        exit();
    }
    else if(!empty($suname) && !empty($spass) && !is_numeric($suname)){

        $sql1 = "INSERT INTO USERS(user_name,phone,password) VALUES ('$suname','$sphon','$spass')";
        $run = mysqli_query($con, $sql1);
        if($run){
            header("Location: login_signup.php?");
            exit();
        }
        else{
            header("Location: login_signup.php?error=Username and Phone Number already exists");
            exit();
        }
        
    }
    else{
        header("Location: login_signup.php?error=Please enter some valid information.");
        exit();
    }
}
?>