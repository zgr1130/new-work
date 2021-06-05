<?php
// const i="hello world";
// echo i;
// $result =define("name","zhangsan");
// echo name;
// $k=5;
// echo ++$k;
// $i=4;
// $j=5;
// var_dump($i>0 xor $j>0);
// for($i=1;$i<=10;$i++){
// 	echo $i;
// 	echo "<br>";
// }
// while($k++<10){
//     echo "第一层循环开始"."<br>";
//     while(true){
//     echo "第二层循环开始"."<br>";
//     continue 2;
//     echo "第二层循环结束"."<br>";
// }
// echo "第一层循环结束"."<br>";
// }
// goto b;
// a:
// echo "hello";
// return;
// b:
// echo "world";
// goto a;

$filename="aa.txt";
$res=fopen($filename,"r") or die("无法打开，请查看权限");
//     JS数据类型:6种 字符串 数字 布尔 未定义 对象 空
    //php数据类型