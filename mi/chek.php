<?php
session_start();
//生成画布
$img=imagecreatetruecolor(100,30);
//设置画布的填充颜色
$bg_color=imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255));
//填充颜色
imagefill($img,0,0,$bg_color);
$text="qwertyuiopasdfghjklzxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM1234567890";
$con="";
for ($i=0;$i<4;$i++){
    $fontsize=10;
    $font_color=imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255));
    // mt_rand(); 随机 整数
    //substr 截取字符串
    $str=substr($text,mt_rand(0,strlen($text)-1),1);
    $con.=$str;
    $x=($i*100/4)+mt_rand(5,10);
    $y=mt_rand(5,10);
    imagestring($img,$fontsize,$x,$y,$str,$font_color);
}
$_SESSION['con']=$con;
for($i=1;$i<200;$i++){
    $tc_color=imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255));
    imagesetpixel($img,rand(0,100),rand(0,30),$tc_color);
}
for ($i=0;$i<4;$i++){
    $xd_color=imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255));
    imageline($img,rand(0,99),rand(0,30),rand(0,99),rand(0,30),$xd_color);
}
header('Content-type:image/png');
imagepng($img);
imagedestroy($img);