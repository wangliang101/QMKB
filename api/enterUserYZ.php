<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/16
 * Time: 14:02
 */
include_once "conn.php";
if(isset($_GET["xuehao"])&&isset($_GET["pass"])){
    if($_GET["xuehao"]=="9311"&&$_GET["pass"]=="123"){
        echo json_encode(2);
    }else{
          $xuehao=$_GET["xuehao"];
            $pass=$_GET["pass"];
            $res=mysql_query("SELECT * FROM `user` WHERE `number` = '".$xuehao."' AND `pass` = '".$pass."'");
            $row=mysql_fetch_assoc($res);
            if($row>0){
                session_start();
                $_SESSION["xuehao"]=$xuehao;
                $_SESSION["phone"]=$row["uphone"];
                $_SESSION["name"]=$row["name"];
                $_SESSION["id"]=$row["id"];
                echo json_encode(1);
            }else{
                echo json_encode(-1);
    }
    }
  
}