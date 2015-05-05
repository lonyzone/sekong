<?php
define('EmpireCMSAdmin','1');
require("../class/connect.php");
require("../class/db_sql.php");
require("../class/functions.php");
require LoadLang("pub/fun.php");
require("../data/dbcache/class.php");
$link=db_connect();
$empire=new mysqlquery();
$enews=$_POST['enews'];
if(empty($enews))
{
	$enews=$_GET['enews'];
}
//验证用户
$lur=is_login();
$logininid=$lur['userid'];
$loginin=$lur['username'];
$loginrnd=$lur['rnd'];
$loginlevel=$lur['groupid'];
$loginadminstyleid=$lur['adminstyleid'];
$incftp=0;
if($public_r['phpmode'])
{
	include("../class/ftp.php");
	$incftp=1;
}
require("../class/filefun.php");
if($enews=="DelFile")//删除文件
{
	$fileid=$_GET['fileid'];
	DelFile($fileid,$logininid,$loginin);
}
elseif($enews=="DelFile_all"||$enews=="TDelFile_all")//批量删除文件
{	
	$fileid=$_POST['fileid'];
	DelFile_all($fileid,$logininid,$loginin);
}
elseif($enews=="DelFreeFile")//清理失效附件
{
	DelFreeFile($logininid,$loginin);
}
elseif($enews=="DelPathFile")//删除目录文件
{
	$filename=$_POST['filename'];
	DelPathFile($filename,$logininid,$loginin);
}
elseif($enews=="DoMarkSmallPic")//批量操作图片
{
	DoMarkSmallPic($_POST,$logininid,$loginin);
}
elseif($enews=="TranMoreFile")//批量上传附件
{
	$file=$_FILES['file']['tmp_name'];
    $file_name=$_FILES['file']['name'];
    $file_type=$_FILES['file']['type'];
    $file_size=$_FILES['file']['size'];
	$no=$_POST['no'];
	$type=$_POST['type'];
	TranMoreFile($file,$file_name,$file_type,$file_size,$no,$type,$logininid,$loginin);
}
elseif($enews=='AddFileDataTable')//增加附件分表
{
	AddFileDataTable($_POST,$logininid,$loginin);
}
elseif($enews=='DefFileDataTable')//默认附件分表
{
	DefFileDataTable($_GET,$logininid,$loginin);
}
elseif($enews=='DelFileDataTable')//删除附件分表
{
	DelFileDataTable($_GET,$logininid,$loginin);
}
else
{
	printerror("ErrorUrl","history.go(-1)");
}
db_close();
$empire=null;
?>