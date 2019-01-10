<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/15
 * Time: 19:58
 */
include_once "conn.php";
if(isset($_POST["name"])&&isset($_POST["number"])&&isset($_POST["pass"])&&isset($_POST["xi"])&&isset($_POST["phone"])){
    $name=$_POST["name"];
    $number=$_POST["number"];
    $pass=$_POST["pass"];
    $xi=$_POST["xi"];
    $phone=$_POST["phone"];
    if($_FILES["img"]["tmp_name"]!=""){
        $arr=explode(".", $_FILES['img']['name']);
        $hz=$arr[count($arr)-1];
        $picname=date("Y").date("m").date("d").date("H").date("s").rand(1, 99999).".".$hz;
        $dizhi=$_SERVER["DOCUMENT_ROOT"]."/xiangmu1/Idphoto/".$picname;
        if(is_uploaded_file($_FILES["img"]["tmp_name"])){
            move_uploaded_file($_FILES['img']['tmp_name'], $dizhi);
        }
        //echo $phone;
        $res=mysql_query("INSERT INTO `user` (`id`, `name`, `pass`, `pic`, `uphone`, `number`,`class`) VALUES (NULL, '".$name."', '".$pass."', '".$picname."', '".$phone."', '".$number."','".$xi."');");
        if($res>0){
            header("location: ../index5.html");
        }
    }
}
