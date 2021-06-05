<?php
include_once('conn.php');
$rows = mysqli_query($res,'insert into xuesheng(name,classid,birthday) value("'.$_POST['name'].'", '.$_POST['banji'].', "'.$_POST['birthday'].'")');
if($rows){
	echo '<h1>OK</h1>';
	echo '<a href="index.php">返回列表</a>';
}
else{
	echo 'ERROR';
}