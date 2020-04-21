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

//1）定义文件上载表单；
//2）封装文件上传函数；
//3）在upload.php中可以直接用 $_FILES 、$_POST 、$_GET 等函数获取表单内容。$_FILES最长用。

// 0(UPLOAD_ERR_OK)：表示没有错误发生，上传成功。
// 1：表示 上传的文件超过了 php.ini 中 upload_max_filesize 的最大值。
// 2：表示上传的文件超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值。
// 3：表示文件部分被上传。
// 4：都表示没有文件被上传。5：表示上传文件大小为0。
// $zip=new ZipArchive();
// $zipName,...$files
// ZipArchive::extractTo：对压缩包进行解压。