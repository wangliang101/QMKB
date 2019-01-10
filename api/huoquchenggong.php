<?php
error_reporting(0);
    include_once "conn.php";
	 session_start();
	 //开启存储系统
if(isset($_SESSION["arr"])){
	 	 $arr=$_SESSION["arr"];
		echo json_encode($arr);
}
?>