<?php
include_once "conn.php";
$box = $_GET["send"];
$res=mysql_query("SELECT * FROM `needhelp` WHERE `id` = ".$box." ");
$miss=mysql_fetch_assoc($res);
session_start();
$_SESSION["miss"]=$miss;
echo json_encode($_SESSION["miss"]);
