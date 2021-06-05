<?php
$i=fopen("12.txt","r");
echo fread($i,filesize("12.txt"));
fclose($i);