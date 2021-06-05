<style>
    input {
        margin-top: 10px;
    }
</style>
<h1 style="text-align: center">添加学生信息</h1>
<?php
include_once('conn.php');
$result = mysqli_query($res,'select * from banji');
?>
<div style="margin: 0 auto;width: 300px;height: 200px; background-color: #628fee;border-radius:10px ">
<form action="xuesheng_insert.php" method="post">
	<p>姓名：<input type="text" name="name"></p>
	<p>班级：<select name="banji">
			<?php
				while($row = mysqli_fetch_assoc($result)){
					echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
				}
			?>
			 </select>
	</p>
	<p>生日：<input type="text" name="birthday"></p>
	<p><input type="submit" value="确认" style="margin-left: 170px"></p>
</form>
</div>