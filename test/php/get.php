<?php
$ak='firstuser';
$sk='a3L04oxgjKkNo0';
$time=time();
$file="a.txt";
$url=file_get_contents('http://possibility.sinaapp.com/url/get?ak='.$ak.'&o='.$file.'&t='.$time.'&type=public');
header("location:".$url);
?>