<?php
    include_once "conn.php";
    session_start();
    $res=mysql_query("SELECT * FROM `needhelp` WHERE `zid` = ".$_SESSION['id']."");

    while ($row=mysql_fetch_assoc($res)){
        $arr[]=$row;
    }

    echo json_encode($arr);
