<?php
session_start();
include"verifycode_lib.php";
if ($_GET['w'] != '' && $_GET['h'] != '' && $_GET['b'] != '' && $_GET['n'])
{
	$width = $_GET['w'];
	$height = $_GET['h'];
	$bool = $_GET['b'];
	$num = $_GET['n'];
}
else
{
	$width = 80;
	$height = 30;
	$bool = false;
	$num = 4;
}
$code = new verificationCode($width, $height, $num, $bool);
$code->showImage("./verifycode.ttf"); //应用字体
// $code->showImage();//
$_SESSION["code"] = $code->getCheckCode(); //将验证码保存到服务器中（每个网址具有唯一性）
