<?php
//$server="127.0.0.1";
//$username="root";
//$password="";
//
//$conn =new mysqli($server,$username,$password);
//if($conn->connect_errno){
//    die("连接失败：".$conn->connect_error);
//}
//echo "连接成功";
$server="127.0.0.1";
$db_name="student";
$user="root";
$pass="";
$res=mysqli_connect($server,$user,$pass,$db_name);
mysqli_set_charset($res,"utf-8");
if(!$res){
    echo mysqli_error("连接失败");
}
