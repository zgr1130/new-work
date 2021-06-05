<?php
include_once ("mysql.php");
$name=$_POST['user'];
$pass=$_POST['pass'];

if (mysqli_num_rows(mysqli_query($res,"select zhanghao from user WHERE zhanghao='$name'"))>0){
    echo "给账号已存在，请<a href='index.html'>登录</a>";
}else{
    $sql="insert into user(zhanghao,password) values ('$name','$pass')";
    $result=mysqli_query($res,$sql);
    if($result){
        echo "注册成功，请<a href='index.html'>登录</a>";
    }
}
mysqli_close($res);
