<?php
include_once ("mysql.php");

$name=$_POST['user'];
$pass=$_POST['pass'];
if (mysqli_num_rows(mysqli_query($res,"select zhanghao from user WHERE zhanghao='$name'"))>0) {
    if(mysqli_num_rows(mysqli_query($res,"select password from user WHERE password='$pass'"))>0){
        echo "<script>alert('不能与近期密码相同');</script>";
    }else{
        $sql = "update user set password='$pass' where zhanghao='$name'";
        $result = mysqli_query($res, $sql);
        echo "修改成功，请<a href='index.html'>登录</a>";
    }
}else{
    echo "账号不存在，请<a href='zhuce.html'>注册</a>";
}