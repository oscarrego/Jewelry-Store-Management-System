<?php

include 'config.php';
$admin = new Admin();


session_destroy();
unset($_SESSION['user_id']);

echo "<script>window.location.href='index.php';</script>";
