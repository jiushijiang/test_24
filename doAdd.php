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
			<h3>执行添加留言</h3>
		</div>
		<?php
		//执行文件添加操作
		//1.获取留言信息
			$title=$_POST["title"];
			$author=$_POST["author"];
			$content=$_POST["content"];
			$time=time();//获取时间戳
		
		//2.拼装留言信息
		if($title != null){
		$sql="{$title}##{$author}##{$content}##{$time}";
		//echo $sql;
		file_put_contents("./liuyan.db",$sql."@@@",FILE_APPEND);
		}
		else{
			echo "头标题不允许为空，<a href='index.html'>返回主页</a>";
		}
		//3.将留言信息写入到liuyan.db中
		//4.提示留言成功
		?>
		
			
	
	</center>
	

</body>
</html>