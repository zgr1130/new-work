<?php
include_once ("mysql.php");
$sql="select * from user";
$result=mysqli_query($res,$sql);
$data=mysqli_fetch_all($result);
echo json_encode($data);
