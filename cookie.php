<h1>cookie</h1>
<?php
// date_default_timezone_get("Asia/Taipei");
setcookie('name','Cerry',strtotime("2023-05-03 10:25:00"));

echo $_COOKIE['name'];