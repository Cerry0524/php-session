<?php
session_start();

$acc='admin';
$pw='1234';

// echo ($_post['acc'=$acc] && $_post['pw'=$pw] )?"登入成功":"帳號或密碼錯誤";
if($_post['acc']==$acc && $_post['pw']==$pw ){
    echo "登入成功";
    $_SESSION['login']=$acc;

    if(isset($_SESSION['error'])){
        unset($_SESSION['error']);
    }
}else{
    echo "帳號或密碼錯誤";
    $_SESSION['error']="帳號或密碼錯誤";
    if(isset($_SESSION['error'])){
        unset($_SESSION['error']);
    }
}

header("location:login.php");
?>