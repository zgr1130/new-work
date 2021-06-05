<?php
include_once ("mysqli.php");
//header("Content-type:text/html;charset='utf-8");
$name=$_POST['user'];
$pass=$_POST['pass'];

if (mysqli_num_rows(mysqli_query($res,"select zhanghao from user WHERE zhanghao='$name'"))>0) {
    if(mysqli_num_rows(mysqli_query($res,"select password from user WHERE password='$pass'"))>0){
        echo "<script>alert('不能与近期密码相同');</script>";
    }else{
    $sql = "update user set password='$pass' where zhanghao='$name'";
    $result = mysqli_query($res, $sql);
    echo "修改成功，请<a href='login.html'>登录</a>";
    }
}else{
    echo "账号不存在，请<a href='注册.html'>注册</a>";
}