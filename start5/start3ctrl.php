<?php
/*
	文件相关操作
	文件创建、删除、剪切、重命名、拷贝
*/

//touch($filename):创建文件
$filename='test15.txt';
//var_dump(touch($filename));

//var_dump(unlink($filename));

// if(file_exists($filename))

// {
// 	if(unlink($filename)){
// 		echo '文件删除成功';
// 	}
// 	else
// 	{
// 		echo '文件删除失败';
// 	}
// }	

// 	else
// 	{
// 		echo '要删除的文件不存在';
// 	}
//touch($filename);
// $newname='test001.txt';
// if(rename($filename,$newname))
// {
// 	echo'重命名成功';
// }else{
// 	echo '重命名失败';
// }
// $filename='test123.txt';
// $path='./test/test001.txt';
// if(file_exists($filename))
// {
// 	if(rename($filename,$path))
// 	{
// 		echo '剪切成功';
// 	}
// 	else
// 	{
// 		echo '剪切失败';
// 	}
// }else{
// 	echo'要剪切的文件不存在啊不存在，不存在啊不存在~hello world hello hello';
// }


copy($source,$dest);
	$source='start1.php';
	$dest='test/start1.php';
	
	if(copy($source,$dest)){
		echo'文件拷贝成功';
	}else{
		echo'文件拷贝失败';
	}