<style>
    input {
        margin-top: 10px;
    }
</style>
<h1 style="text-align: center">修改学生信息</h1>
<?php
include_once('conn.php');
$result = mysqli_query($res,'select * from xuesheng where id = '.$_GET['id'].' limit 1');
$row = mysqli_fetch_assoc($result);
$banji = mysqli_query($res,'select * from banji');
?>
<div style="margin: 0 auto;width: 300px;height: 200px; background-color: #628fee;border-radius:10px ">
<form action="xuesheng_update.php" method="post">
	<input type="hidden" name="id" value="<?=$row['id'] ?>">
	<p>姓名：<input type="text" name="name" value="<?=$row['name'] ?>"></p>
	<p>班级：<select name="banji">
			<?php
				while($rows = mysqli_fetch_assoc($banji)){
					echo '<option value="'.$rows['id'].'" ';
					if($row['classid'] == $rows['id']){
						echo 'selected';
					}
					echo '>'.$rows['name'].'</option>';
				}
			?>
			 </select>
	</p>
	<p>生日：<input type="text" name="birthday" value="<?=$row['birthday'] ?>"></p>
	<p><input type="submit" value="确认" style="margin-left: 170px"></p>
</form>
</div>