<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>
<body>
<div>
  <a href="http://www.drophe.com" target="_blank">官方网站</a>
</div>
<?php
$ak='firstuser';
$sk='a3L04oxgjKkNo0';
$time=time();
$file="a.txt";
$sign=md5($file.'-'.$time.'-'.$sk);
echo file_get_contents('http://possibility.sinaapp.com/file/info?type=private&ak='.$ak.'&o='.$file.'&t='.$time.'&sign='.$sign);
?>
</body>
</html>