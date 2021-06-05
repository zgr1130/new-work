<?php
$server="127.0.0.1";
$db_name="student";
$user="root";
$pass="";
$res=mysqli_connect($server,$user,$pass,$db_name);
mysqli_set_charset($res,"utf-8");
if(!$res){
    echo mysqli_error("连接失败");
}
