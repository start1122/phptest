<?php
header("Content-Type: text/html;charset=utf-8");

date_default_timezone_set('PRC');
/*
 *文件相关信息API
 */ 
$filename="./start1.txt";

// $filename="test";
// filetype($filename):获取文件的类型，返回的是文件的类型

echo '文件类型',filetype($filename),'<br/>';
//filesize($filename):获得文件的大小，返回字节
echo '文件大小',filesize($filename),'<br/>';
//获取文件的创建时间 filectime
echo '文件创建时间戳',filectime($filename),'<br/>';
echo '文件创建时间为',date('Y年m月d日 H:i:s',filectime($filename)),'<br/>';
//filemtime($filename):文件的修改时间
echo '文件的修改时间为:',date("Y/m/d H:i:s",filemtime($filename)),'<br/>';
//fileatime($filename):文件的最后访问时间
echo '文件的最后访问时间为:',date("Y/m/d H:i:s",fileatime($filename)),'<br/>';
//检测文件是否可读可写可执行  is_readable()、is_writeable()、is_executable();

var_dump(
	is_readable($filename),
	is_writable($filename),
	is_writeable($filename),
	is_executable($filename),
	
	);
	
	//检测是否为文件,并且文件存在
$filename='./start1.txt';
var_dump(is_file($filename));