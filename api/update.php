<?php 
	// echo 1;
	include_once "conn.php";
	session_start();
	$id=$_SESSION["id"];
	$name=$_GET["name"];
	$number=$_GET["number"];
	$phone=$_GET["phone"];
	$res=mysql_query("UPDATE `user` SET `name` = '".$name."', `uphone` = '".$phone."', `number` = '".$number."' WHERE `user`.`id` = ".$id."

");
	if($res){
		echo 1;
	}else{
		echo 2;
	}
	//echo json_encode($id);
 ?>