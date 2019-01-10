<?php 
	include_once 'api/conn.php';
	$id= $_GET["id"];
	$res=mysql_query("DELETE FROM `user` WHERE `user`.`id` = ".$id."");
	if($res){
		header("location:index1.php");
	}
 ?>