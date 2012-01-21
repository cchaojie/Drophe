<?php
$ak='firstuser';
$sk='a3L04oxgjKkNo0';
$time=time();
$file="a.txt";
$sign=md5('DELETE'.'-'.$file.'-'.$time.'-'.$sk);

echo file_get_contents('http://possibility.sinaapp.com/file/del?type=public&ak='.$ak.'&o='.$file.'&t='.$time.'&sign='.$sign);
?>