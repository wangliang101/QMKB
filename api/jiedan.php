<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/17
 * Time: 17:08
 */
include_once "conn.php";
session_start();
//$fid=$_GET["fid"];
// var_dump($_SESSION["miss"]);
//$miss=$_SESSION["miss"];
// var_dump($_SESSION);
// echo $_SESSION["id"];
$zid=$_SESSION['id'];
//echo $zid;
$res=mysql_query("select * from user where id=".$zid."");
$row=mysql_fetch_assoc($res);
//var_dump($row);
$jname=$row["name"];
$jphone=$row["uphone"];
//var_dump($row);
$miss=$_SESSION["miss"];
//var_dump($miss);
$res1=mysql_query("INSERT INTO `jiehelp` (`id`, `jname`, `fname`, `jphone`, `fphone`, `content`, `type`, `money`, `jid`, `fid`) VALUES (NULL, '".$jname."', '".$miss["name"]."', '".$jphone."', '".$miss["phone"]."', '".$miss['content']."', '".$miss["type"]."', '".$miss["money"]."', '".$zid."', '".$miss["zid"]."')");
$rewtwo=mysql_query("DELETE FROM `needhelp` WHERE `id` = ".$miss['id'].";");
// $res=mysql_query("INSERT INTO `jiedan` (`id`, `did`, `name`, `phone`, `miaoshu`, `juti`, `chouji`, `pic`, `fmid`, `mid`, `jname`, `jphone`) VALUES (NULL, '".$miss['id']."', '".$miss['name']."', '".$miss['phone']."', '".$miss['miaoshu']."', '".$miss['juti']."', '".$miss['chouji']."', '".$miss['pic']."', '".$miss['mid']."', '".$_SESSION['id']."', '".$_SESSION['name']."', '".$_SESSION['phone']."')");
// $restwo=mysql_query("DELETE FROM `help` WHERE `help`.`id` = ".$miss['id'].";");
if($res1>0&&$rewtwo){
    echo json_encode(1);
}else{
    echo json_encode(-1);
}