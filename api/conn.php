<?php
error_reporting(0);//禁止警告(非致命错误)提示
// mysql_connect("localhost","root","");//连接数据库
// //设置中文编码
// mysql_query("set character set 'utf8'");
// mysql_query("set names 'utf8'");
// //选择数据库
// mysql_select_db("base");
	/*替换为你自己的数据库名*/
$dbname = 'xbzlXwqKTpmcmIekkDAY';
/*填入数据库连接信息*/
$host = 'sqld.duapp.com';
$port = 4050;
$user = '576cbc54172f4d29b88c48b85d9b2098';//用户AK
$pwd = '11fc4e9f5c2146b1a267fcd35a500d4e';//用户SK
 /*以上信息都可以在数据库详情页查找到*/

/*接着调用mysql_connect()连接服务器*/
/*为了避免因MySQL数据库连接失败而导致程序异常中断，此处通过在mysql_connect()函数前添加@，来抑制错误信息，确保程序继续运行*/
/*有关mysql_connect()函数的详细介绍，可参看http://php.net/manual/zh/function.mysql-connect.php*/
$link = @mysql_connect("{$host}:{$port}",$user,$pwd,true);
if(!$link) {
    die("Connect Server Failed: " . mysql_error());
}
/*连接成功后立即调用mysql_select_db()选中需要连接的数据库*/
if(!mysql_select_db($dbname,$link)) {
    die("Select Database Failed: " . mysql_error($link));
}

/*至此连接已完全建立，就可对当前数据库进行相应的操作了*/



 ?>