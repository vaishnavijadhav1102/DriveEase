<?php  
session_start();
include "db_connection.php";

if (isset($_POST['suname']) && isset($_POST['spassword1']) && isset($_POST['spassword2'])){

    $suname = $_POST['suname'];
    $spass = $_POST['spassword1'];
    $spass1 = $_POST['spassword2'];

    if(empty($suname)){
        header("Location: signup.php?error=User Name is required");
        exit();
    }
    else if(is_numeric($suname)){
        header("Location: signup.php?error=User Name cannot be numeric");
        exit();
    }
    else if(empty($spass) || empty($spass1)){
        header("Location: signup.php?error=Password is required");
        exit();
    }
    else if(($spass1) != ($spass)){
        header("Location: signup.php?error=Passwords do not match");
        exit();
    }
    else if(!empty($suname) && !empty($spass) && !is_numeric($suname)){

        $sql1 = "INSERT INTO USERS(user_name,password) VALUES ('$suname','$spass')";
        mysqli_query($con, $sql1);
        header("Location: login.php?");
        exit();
    }
    else{
        header("Location: login.php?error=Please enter some valid information.");
        exit();
    }
}
?>