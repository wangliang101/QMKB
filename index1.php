<?php 
	include_once 'api/conn.php';
	$res=mysql_query("select * from user");
	//$row=mysql_fetch_assoc($res);
	$str="";
	while($row=mysql_fetch_assoc($res)){
		// print_r($row["name"]);
		$str=$str."<tr><td>".$row["name"]."</td><td>".$row["number"]."</td><td><img src='Idphoto/".$row["pic"]."' width='200' height='200'></td><td><a href='delete.php?id=".$row["id"]."'>删除</a></td></tr>";
	}

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title></title>
	 <meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<style>
		tr{
			font-size: 0.2rem;
		}
		th,td{
			font-style: normal;
			text-align: center;
		}
		h1{
			text-align: center;
		}
	</style>
 </head>
 <body>
 		<h1>后台管理</h1>
 		<table border="1" cellspacing="0">
 			<tr>
 				<th>姓名</th>
 				<th>学号</th>
 				<th>图片</th>
 				<th>操作</th>
 			</tr>
 			<?php 
 				echo $str;
 			 ?>
 		</table>
 </body>
 </html>