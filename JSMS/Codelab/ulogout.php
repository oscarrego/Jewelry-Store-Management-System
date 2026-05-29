<?php

include '../config.php';
$admin = new Admin();


session_destroy();
unset($_SESSION['c_id']);

echo "<script>window.location.href='../login.php';</script>";
