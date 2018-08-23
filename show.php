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
		<table border="1" width="700">
			<tr>
				<th>留言标题</th>
				<th>留言者</th>
				<th>留言内容</th>
				<th>添加时间</th>
				<th>操作</th>
			</tr>
			<?php
			//获取信息并展示
			//1.获取留言信息
			$file = file_get_contents('./liuyan.db');
			//2.拆分file信息
			$file=rtrim($file,"@");
			$list=explode("@@@",$file);
			//var_dump($list);
			//遍历每条留言信息
			foreach($list as $value=>$v){
				//var_dump($vulue);
				$ly=explode("##",$v);
				echo "<tr>";
				echo "<td>{$ly[0]}</td>";
				echo "<td>{$ly[1]}</td>";
				echo "<td>{$ly[2]}</td>";
				echo "<td>".date("Y-m-d H:i",$ly[3])."</td>";
				//echo "<td><a href="">删除</a></td>";
				echo "<td><a href='delete.php?id={$value}'>删除</a>";
				echo"</tr>";
				
			}
			

			?>
			}
		</table>
	</center>
	

</body>
</html>