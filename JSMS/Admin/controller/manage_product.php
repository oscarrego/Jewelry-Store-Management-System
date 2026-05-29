<?php
include '../../config.php';
$admin = new Admin();

if (isset($_POST['add'])) {
    $cat_id = $_POST['cat_id'];
    $pname = $_POST['pname'];

    $price = $_POST['price'];
    $descp = $_POST['descp'];

$target='upload/';
$image=$target.basename($_FILES['img']['name']);
move_uploaded_file($_FILES['img']['tmp_name'],$image);

    $stmt = $admin->cud("INSERT INTO `product_table`(`cat_id`,`pname`,`img`,`price`,`descp`) VALUES ('$cat_id','$pname','$image','$price','$descp')","inserted");
    echo "<script>window.location='../add_product.php';</script>";
}

if (isset($_GET['p_id'])) {
    $id = $_GET['p_id'];
    $stmt = $admin->cud("DELETE FROM  `product_table` where  `p_id`='$id'", "inserted");
    echo "<script>window.location='../view_category.php';</script>";
}
?>