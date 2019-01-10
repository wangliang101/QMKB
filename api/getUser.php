<?php 
	include_once "conn.php";

	session_start();
	 $id=$_SESSION["id"];
	 $res=mysql_query("SELECT * FROM `user` WHERE `id` = ".$id."");
	 $row=mysql_fetch_assoc($res);
     $arr["xuehao"]=$row["number"];
     $arr["phone"]=$row["uphone"];
     $arr["name"]=$row["name"];
     $arr["pic"]=$row["pic"];
    echo json_encode($arr);
	 
 ?>