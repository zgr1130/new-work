<?php
session_start();
include_once ("mysqli.php");
$name=$_POST['user'];
$pass=$_POST['pass'];
$yzm=$_POST['yzm'];
if(mysqli_num_rows(mysqli_query($res,"select zhanghao,password from user WHERE zhanghao='$name' AND password='$pass'"))>0){
    if(strtolower($yzm)==strtolower($_SESSION['con'])){
        echo "<script>alert('登录成功')</script>";
        echo "<script language='JavaScript' type='text/javascript'>";
        echo "window.location.href='mi.html'";
        echo "</script>";
    }else{
        echo "<script>alert('验证码错误')</script>";
        echo "<script>history.go(-1)</script>";
    }

//    header("Location:mi.html");
}elseif (mysqli_num_rows(mysqli_query($res,"select zhanghao from user WHERE zhanghao='$name'"))==0){
    echo "<a href='注册.html'>账号不存在，点击注册</a>";
}elseif (mysqli_num_rows(mysqli_query($res,"select zhanghao from user WHERE zhanghao='$name'"))>0){
    echo "<a href='forget.html'>忘记密码，点击修改</a>";
}
else{
    echo "<script>alert('登录失败,请重新登录');history.go(-1);</script>";
}
//var_dump($data);
//查询数据库
mysqli_close($res);