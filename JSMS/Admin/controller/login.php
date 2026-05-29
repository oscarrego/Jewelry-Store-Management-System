<?php
include '../../config.php';
$admin = new Admin;

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $stmt = $admin->ret("SELECT * FROM admin where admin_email='$email' and admin_password='$password'");
    $num = $stmt->rowCount();
    if ($num > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['admin_id'] = $row['admin_id'];
        echo "<script> alert('login successfull'); window.location='../index.php';</script>";
    }

    echo "<script> alert('invalid email or password'); window.location='../login.php';</script>";
}
