
<?php
include_once "conn.php";
$name=$_POST["uname"];
$phone=$_POST["uphone"];
$xuan=$_POST["xuanze"];
$miaoshu=$_POST["miaoshu"];
$price=$_POST["price"];

    session_start();
    $box=mysql_query("INSERT INTO `needhelp` (`id`, `name`, `phone`, `content`, `type`, `money`, `zid`) VALUES (NULL, '".$name."', '".$phone."', '".$miaoshu."', '".$xuan."', '".$price."', '".$_SESSION['id']."')");
    if($box>0){
        header("location:../index1.html");
        echo $box;
    }
else{
    echo -1;
    header("location:../index1.html");
}

