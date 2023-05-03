<h1>sesssion</h1>

<?php
session_start();

$_SESSION['name']='Cerry';

echo $_SESSION['name'];

?>

<a href="logout.php">登出</a>