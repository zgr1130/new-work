<style>
    h1{text-align: center}
table{border-collapse:collapse; width:100%;}
th,td{border:solid 1px #666; padding:10px;}
.center{text-align:center;}
.add {margin-bottom: 20px;}
.add a {text-decoration: none;color: #fff;background-color: green;padding: 6px;border-radius: 5px;}
    body{
        background-image:url("1.jpg");
    }
</style>
<body>
<?php
session_start();
if(isset($_SESSION['username'])){
print_r($_SESSION['username']."用户");
echo "<a href='logout.php'>注销</a>";
}else{
echo "<script>alert('请先登录');location.href='denglu.html';</script>";
}
?>
<h1>学生信息管理系统</h1>
<div class="add"><a href="xuesheng_add.php">添加学生</a></div>
<?php

include_once('conn.php');
$result = mysqli_query($res,"select xuesheng.*,banji.name banji from xuesheng,banji where xuesheng.classid = banji.id");
echo "<table>";
echo "<tr><th>序号</th><th>姓名</th><th>班级</th><th>生日</th><th>操作</th></tr>";
while($row = mysqli_fetch_assoc($result)){
	echo '<tr>';
	echo '<td class="center">'.$row['id'].'</td>';
	echo '<td class="center">'.$row['name'].'</td>';
	echo '<td class="center">'.$row['banji'].'</td>';
	echo '<td class="center">'.$row['birthday'].'</td>';
	echo '<td class="center">';
	echo '<a href="xuesheng_bianji.php?id='.$row['id'].'">修改</a> ';
	echo '<a href="xuesheng_del.php?id='.$row['id'].'" onclick="return confirm(\'确认删除id='.$row['id'].'的数据吗？\');">删除</a>';
	echo '</td>';
	echo '</tr>';
}
echo '</table>';
?>
</body>
