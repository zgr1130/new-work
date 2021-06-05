<?php
include_once('conn.php');
$row = mysqli_query($res,'delete from xuesheng where id = '.$_GET['id']);
if($row){
	echo '<h1>OK</h1>';
	echo '<a href="index.php">返回列表</a>';
}
else{
	echo 'ERROR';
}