<?php

session_start();

// echo "已經登出使用者".$_SESSION['name'];

// unset($_SESSION['name']);

unset($_SESSION['login']);
unset($_SESSION['error']);

header("location:login.php");

?>