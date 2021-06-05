<?php
date_default_timezone_set("Asia/shanghai");

$tmp_name=count($_FILES['myifile']['tmp_name']);

for ($i=0;$i<$tmp_name;$i++){
    move_uploaded_file($_FILES['myfile']['tmp_name'][$i],"wj/".date('ymdhis').rand(0,999).'.jpg');
}