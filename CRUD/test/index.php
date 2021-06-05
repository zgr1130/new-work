<?php
session_start();
if(isset($_SESSION['username'])){
    print_r($_SESSION['username']."用户");
    echo "<a href='logout.php'>注销</a>";
}else{
    echo "<script>alert('请先登录');location.href='denglu.html';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>新闻后台管理系统</title>
</head>

<style type="text/css">
.wrapper {width: 1000px;margin: 20px auto;}
h2 {text-align: center;}
.add {margin-bottom: 20px;}
.add a {text-decoration: none;color: #fff;background-color: green;padding: 6px;border-radius: 5px;}
td {text-align: center;}
</style>
<body>
	<div class="wrapper">
		<h2>新闻后台管理系统</h2>
		<div class="add">
			<a href="addnews.html">增加新闻</a>
		</div>
		<table width="960" border="1">
			<tr>
				<th>ID</th>
				<th>标题</th>
				<th>关键字</th>
				<th>作者</th>
				<th>发布时间</th>
				<th>内容</th>
				<th>操作</th>
			</tr>

			<?php
				// 1.导入配置文件
				require "dbconfig.php";

				// 2. 连接mysql
				$link = @mysqli_connect(HOST,USER,PASS) or die("提示：数据库连接失败！");
				// 选择数据库
				mysqli_select_db($link,DBNAME);
				// 编码设置
				mysqli_query($link,"set names utf8");

				// 3. 从DBNAME中查询到news数据库，返回数据库结果集,并按照addtime降序排列  
				$sql = 'select * from news order by id asc';
				// 结果集
				$result = mysqli_query($link,$sql);
				// var_dump($result);die;

				// 解析结果集,$row为新闻所有数据，$newsNum为新闻数目
				while($record=mysqli_fetch_array($result)){  
					$records[]=$record;
}
				foreach($records as $row) :
					echo "<tr>";
					echo "<td>{$row['id']}</td>";
					echo "<td>{$row['title']}</td>";
					echo "<td>{$row['keywords']}</td>";
					echo "<td>{$row['autor']}</td>";
					echo "<td>{$row['addtime']}</td>";
					echo "<td>{$row['content']}</td>";
					echo "<td>
							<a href='javascript:del({$row['id']})'>删除</a>
							<a href='editnews.php?id={$row['id']}'>修改</a>
						  </td>";
					echo "</tr>";
					endForeach;

			?>

		</table>
	</div>

	<script type="text/javascript">
		function del (id) {
			if (confirm("确定删除这条新闻吗？")){
				window.location = "action-del.php?id="+id;
			}
		}
	</script>
</body>
</html>
