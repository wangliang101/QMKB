<?php
error_reporting(0);
    include_once "conn.php";
    if(isset($_GET["id"])){
	 	 $id=$_GET["id"];
		$res=mysql_query("DELETE FROM `need help` WHERE `need help`.`id` =".$id."");
		if($res>0){
		 $arr["jg"]=1;
		}
		echo json_encode($arr);
}
?>