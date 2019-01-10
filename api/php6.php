<?php
include_once "conn.php";
session_start();

$res=mysql_query("select * from needhelp where zid!=".$_SESSION["id"]."");
while ($miss=mysql_fetch_assoc($res)){
    $arr[]=$miss;
}
echo json_encode($arr);

