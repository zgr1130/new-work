<?php
$filename=$_GET['filename'];// 获取文件参数
header("Content-Disposition:attachment;fliename=".$filename);//告诉浏览器一附件的形式处理
header('Content-length:'.filesize($filename));
readfile($filename);