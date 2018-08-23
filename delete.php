<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>留言板</title>
</head>
<body>
	<center>
		<h1 id="title">我的留言板</h1>
		<a href="index.html">添加留言</a>|
		<a href="show.php">查看留言</a>
		<hr width="90%"/>
		<div>
			<h3>执行留言信息删除</h3>
		</div>
		<?php
		//先读出来，再把数据给抠出来，再返回去
		//1.获取要删除的留言id号
		$id=$_GET["id"];
		//2.读取文件数据
		$file=file_get_contents("./liuyan.db");
		//去掉拼接符
		$file=rtrim($file,"@");
		$list=explode("@@@",$file);
		unset($list[$id]);
		file_put_contents("./liuyan.db",implode("@@@",$list)."@@@");
		echo "删除成功！";
		?>
		
	</center>
	

</body>
</html>