<?php
include '../config.php';
$admin = new Admin;

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $stmt = $admin->ret("SELECT * FROM admin where a_email='$email' and a_password='$password'");
    $num = $stmt->rowCount();
    if ($num > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['a_id'] = $row['a_id'];
        echo "<script> alert('login successfull'); window.location='../admin/index.php';</script>";
    }

    echo "<script> alert('invalid email or password'); window.location='../admin/login.php';</script>";
}
