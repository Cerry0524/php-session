<?php
include_once('comm.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
    <style>
        form{
            display: flex;
            flex-wrap: wrap;
            width: 320px;
            height: 500px;
            border-radius: 10 50;
            background:linear-gradient(45deg,lightpink 30%,lightcyan 70%) ;
            box-shadow: 2px 2px 2px #ccc;
            align-items: center;
            text-align: center;
            border-radius: 20px ;
            border: 5px double #CCC;
        }
        img{
            width: 300px;
            height: 300px;
        }
        form>div{
            flex-basis: 100%;
        }
        form>input{
            height: 35px;
        }
        input{
            width: 200px;
            height: 30px;
            border-radius: 10px ;
            box-shadow: 2px 2px 6px lightsalmon inset;
            text-align: center;
            font-size: 20px;
        }
        input[type="submit"]{
            background-color: lightgoldenrodyellow;
            text-shadow: 2px 2px 2px gray;
            width: 208px;
            height: 36px;
        }
    </style>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['login'])){
    echo "登入成功!<br>";
    echo "歡迎";
    echo $_SESSION['login'];
    echo "<a href='logout.php'>登出</a>";

}else{

?>
    <!-- 以下是製作登入介面時，先開始的第一步 -->
    <form action="check.php" method="post">
        <div>
            <img src="./logo.png" alt="logo">
        </div>
        <div>
            <label for=""></label>
            <input type="text" name="acc" id="acc" placeholder="使用者帳號">
        </div>
        <div>
            <label for=""></label>
            <input type="text" name="pw" id="pw" placeholder="使用者密碼">
        </div>
        <div>
            <input type="submit" value="登    入">
        </div>
        <div style="color:red">
            <!--下面內容是製作出check.php才回頭製作的  -->
            <?php
            if(isset($_SESSION['error'])){
                echo $_SESSION['error'];
            }
            ?>
        </div>
    </form>
<?php   
}
 ?>
</body>
</html>