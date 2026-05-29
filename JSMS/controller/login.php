<?php
include '../config.php';
$admin = new Admin;

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $stmt = $admin->ret("SELECT * FROM user where user_email='$email' and user_password='$password'");
    $num = $stmt->rowCount();
    if ($num > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['user_id'] = $row['user_id'];
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

    

    $stmt = $admin->ret("SELECT * FROM `user` where user_email='$email'");
    $num = $stmt->rowCount();
    if ($num > 0) {

        echo "<script> alert('email already exist!!'); window.location='../register.php';</script>";
    } else {
        $stmt = $admin->cud("INSERT INTO `user`(`user_name`, `user_phone`, `user_email`, `user_password`,`user_add`) VALUES ('$name','$phone','$email','$password','$address')", "register");

        echo "<script> alert('register successfull!!'); window.location='../login.php';</script>";
    }
}
