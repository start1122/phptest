<?php


//pathinfo():文件路径相关信息

$filename="./start1.txt";
$pathinfo=pathinfo($filename);
print_r($pathinfo);

/*
Array
( 
[dirname] => . 
[basename] => test1.txt 
[extension] => txt 
[filename] => test1 
)
*/

echo '文件扩展名', pathinfo($filename,PATHINFO_EXTENSION),'<br>';
echo '<hr/>';

$filename=__FILE__;
//echo $filename;

echo pathinfo($filename,PATHINFO_DIRNAME),'<br/>';
echo pathinfo($filename,PATHINFO_BASENAME),'<br/>';
echo pathinfo($filename,PATHINFO_EXTENSION),'<br/>';
echo pathinfo($filename,PATHINFO_FILENAME),'<br/>'; 
//basename(): 返回路径中的文件名部分

echo basename($filename),'<br/>';
echo basename($filename,'.php'),'<br/>';