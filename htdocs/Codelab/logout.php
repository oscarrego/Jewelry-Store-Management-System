<?php

include '../config.php';
$admin = new Admin();


session_destroy();
unset($_SESSION['a_id']);

echo "<script>window.location.href='../admin/login.php';</script>";
