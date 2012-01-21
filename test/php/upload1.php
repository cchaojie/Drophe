<?php
$ak='firstuser';
$sk='a3L04oxgjKkNo0';
$time=time();
$file="a.txt";
$sign=md5($file.'-'.$time.'-'.$sk);
//echo $sign;
$url=file_get_contents('http://possibility.sinaapp.com/url/put?ak='.$ak.'&o='.$file.'&t='.$time.'&type=private&sign='.$sign);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>
<body>
<div>
  <a href="http://www.drophe.com" target="_blank">官方网站</a>
</div>
  
  <hr/><br/><br/>
<form id="form1" action="<?=$url?>" method='POST' enctype='multipart/form-data'>
<div>
	<input type="file" name="userfile" />
	<input type="submit" />
</div>
</form>
</body>
</html>