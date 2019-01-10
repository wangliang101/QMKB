<?php
error_reporting(0);
    include_once "conn.php";
if(isset($_GET["id"])){
	$id=$_GET["id"];
	$res=mysql_query("SELECT * FROM `need help` WHERE `id` = '".$id."' ORDER BY `need help`.`id` ASC");
	$row=mysql_num_rows($res)
	if($row>0){
		$res1=mysql_fetch_assoc($res);
		$arr[]=$res1;
		session_start();
		$_SESSION["arr"]=$arr;
		echo json_encode($arr);
	}
}
?>