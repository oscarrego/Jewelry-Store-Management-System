<?php
include '../config.php';
$admin=new Admin();

$uid=$_SESSION['user_id'];

if(isset($_GET['pid']))
{
$pid=$_GET['pid'];


 $stmt = $admin->ret("SELECT * FROM `cart_table` WHERE `p_id`='$pid' AND `u_id`='$uid'");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $num = $stmt->rowCount();
    if($num>0){
        $updatedcount = 0;
        $dbqty =$row['cart_qty'];
        $updatedcount = 1 + $dbqty;
        $stmt1 = $admin->cud("UPDATE `cart_table` SET  `cart_qty` = '$updatedcount' WHERE `p_id` = '$pid' AND `u_id` = '$uid'","updated");
        echo "<script>window.location='../cart.php';</script>";
     
    }else{
          
 $stmt2=$admin->cud("INSERT INTO `cart_table`(`p_id`,`u_id`,`cart_qty`,`cart_date`)VALUES('$pid','$uid','1',now())","saved");
 echo "<script>window.location='../cart.php';</script>";

    }
}

if(isset($_GET['crtid'])){


    $id = $_GET['crtid'];
    $stmt = $admin->cud("DELETE FROM  `cart_table` where  `cart_id`='$id'", "inserted");
    echo "<script>window.location='../cart.php';</script>";
}

?>