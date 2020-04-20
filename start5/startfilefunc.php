<?php

function create_file(string $filename){
//检测文件是否存在，不存在则创建
	
if(file_exists($filename))
	{
		return false;
	}

//检测目录是否存在，不存在则创建

if(!file_exists(dirname($filename)))

//创建目录，可以创建多级

	{
	mkdir(dirname($filename),0777,true);
	}


if(file_put_contents($filename,'')!==false)  //文件投放路径


	{
	return true;
	}
	return false;
	
}//function 闭环完成  一个func一个功能，  func后面属于功能的命名， 使用时调用该功能即可即可即可即可即可可可可可可

	
//var_dump(create_file('a/4.txt'));

function del_file(string $filename)
//检测删除的文件是否存在，并且是否有权限操作
{
	if(!file_exists($filename)||!is_writable($filename))//当 文件名释放时候  写入文件名
	{
		return false;
	}
	if(unlink($filename)){//当找不到文件名时候  返回真
		return true;
	}
	return false;//否则返回false
}

//var_dump(del_file('1.txt'));

function copy_file(string $filename,string $dest){//string 是用来定义$变量的 变量可自定义命名
	//检测$dest是否是个目录，并且这个目录存在，不存在则创建
	if(!is_dir($dest)){
		mkdir($dest,0777,true);
	}
	$destName=$dest.DIRECTORY_SEPARATOR.basename($filename);
	//检测目标路径下是否存在同名文件
	if(file_exists($destName)){
		return false;
	}
	//拷贝文件
	if(copy($filename,$destName)){
		return true;
	}
	return false;
}
var_dump(copy_file('2.txt','a'));

function rename_file(){}//重命名文件函数
function cut_file(){}//剪切文件函数