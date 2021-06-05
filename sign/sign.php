<?php
include ("mysql.php");

$name=$_POST["user"];
$pass=$_POST["pass"];

if(mysqli_num_rows(mysqli_query($res,"select zhanghao,password from user WHERE zhanghao='$name' AND password='$pass'"))>0){
        echo "<script>alert('登录成功')</script>";

}elseif (mysqli_num_rows(mysqli_query($res,"select zhanghao from user WHERE zhanghao='$name'"))==0){
    echo "<a href='zhuce.html'>账号不存在，点击注册</a>";
}elseif (mysqli_num_rows(mysqli_query($res,"select zhanghao from user WHERE zhanghao='$name'"))>0){
    echo "<a href='forget.html'>忘记密码，点击修改</a>";
}
else{
    echo "<script>alert('登录失败,请重新登录');history.go(-1);</script>";
}
