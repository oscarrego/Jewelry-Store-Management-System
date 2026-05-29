<?php
include '../../config.php';
$admin = new Admin();

if (isset($_POST['add'])) {
    $cname = $_POST['cname'];
    $stmt = $admin->cud("INSERT INTO `category_table`(`cname`,`date`) VALUES ('$cname',now())", "inserted");
    echo "<script>window.location='../Add_Category.php';</script>";
}
if (isset($_POST['update'])) {
    echo $id = $_POST['id'];
    echo $cname = $_POST['cname'];
    $stmt = $admin->cud("UPDATE `category_table` SET `cname`='$cname' WHERE `cid`='$id'", "inserted");
    echo "<script>window.location='../Add_Category.php';</script>";
}

if (isset($_GET['c_id'])) {
    $id = $_GET['c_id'];
    $stmt = $admin->cud("DELETE FROM  `category_table` where  `cid`='$id'", "inserted");
    echo "<script>window.location='../Add_Category.php';</script>";
}
?>
