<?php
/**
 * Created by PhpStorm.
 * User: schurmi
 * Date: 2017/7/16
 * Time: 21:16
 */
session_start();
$miss=$_SESSION["miss"];
echo json_encode($miss);