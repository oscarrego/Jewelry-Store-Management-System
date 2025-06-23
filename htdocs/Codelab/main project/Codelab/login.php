<?php
include '../config.php';
$admin = new Admin;

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $stmt = $admin->ret("SELECT * FROM customer where c_email='$email' and c_password='$password'");
    $num = $stmt->rowCount();
    if ($num > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['c_id'] = $row['c_id'];
        echo "<script> alert('login successfull'); window.location='../index.php';</script>";
    }

    echo "<script> alert('invalid email or password'); window.location='../login.php';</script>";
}

if (isset($_POST['register'])) {

    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $stmt = $admin->ret("SELECT * FROM `customer` where c_email='$email'");
    $num = $stmt->rowCount();
    if ($num > 0) {

        echo "<script> alert('email already exist!!'); window.location='../register.php';</script>";
    } else {
        $stmt = $admin->cud("INSERT INTO `customer`(`c_name`, `c_phone`, `c_address`, `c_email`, `c_password`) VALUES ('$name','$phone','$address','$email','$password')", "register");

        echo "<script> alert('register successfull!!'); window.location='../login.php';</script>";
    }
}
