<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/15
 * Time: 23:01
 */
session_start();
$name=$_SESSION["name"];
echo json_encode($name);