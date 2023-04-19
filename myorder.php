<?php

session_start();
include "db_connection.php";

?>

    <div class="py-3 bg-primary">
        <div class="container">
            <h6 class="text-white">
                <a href="index.php" class="text-white">
                    Home /
                </a>
                <a href = "myorder.php" class = "text-white">
                    My Orders
                </a>
            </h6>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="">
                <div class= "row">
                    <div classs="col-md-12">
                        <table class = "table">
                            <thread>
                                <tr>
                                    <th> Order ID </th>
                                    <th> Date </th>
                                    <th> Price </th>
                                    <th> Payment Mode </th>
                                    <th> Status </th>

                                </tr>
                            </thread>
                            <tbody>
                                <?php
                                    $user = $_SESSION['user_name'];
                                    $q = "SELECT * FROM ORDERS WHERE user_name = '$user'";
                                    $run = mysqli_query($con,$q);
                                    if(mysqli_num_rows($run)>0) {
                                        foreach($run as $item ){
                                            ?>
                                                <tr>
                                                    <td> <?= $item['order_id']; ?> </td>
                                                    <td> <?= $item['date']; ?> </td>
                                                    <td> <?= $item['total']; ?> </td>
                                                    <td> <?= $item['payment_type']; ?> </td>
                                                    <td> <?= $item['status']; ?> </td>
                                                    <td>
                                                        <a href = "#" class="btn">View Deails</a>
                                                    </td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                    else{
                                        ?>
                                            <tr>
                                                <td colspan="5"> No Orders yet </td>
                                            </tr>
                                        <?php
                                    }
                                ?>
                            </tbody>
                    </div>
                </div>
            </div>
        </div>
    </div>



