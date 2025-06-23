<?php
include '../../config.php';
$admin=new Admin();



// if(isset($_POST['submit'])){



    $category=$_POST['category'];
        $stmt=$admin->cud("INSERT INTO `category_table`( `category_name`, `category_date`) VALUES ('$category',now())","inserted");
    // $stmt=$admin->cud("INSERT INTO `category_table`( `category_name`, `category_date`) VALUES ('$category',now())","inserted");
// }

?>