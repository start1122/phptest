<?php
ob_clean();
header('content-type:image/jpeg');
//readfile('shouchika.jpeg'); 
$filename='start1.txt';
$filename='diannei.jpg';
$handle=fopen($filename,'rb+');
//var_dump($handle);
$res=fread($handle,filesize($filename));
//fclose($handle);
echo $res;