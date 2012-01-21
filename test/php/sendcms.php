<?php
$ak='firstuser';
$sk='a3L04oxgjKkNo0';
$time=time();
$msg=$_REQUEST["msg"];
$to=$_REQUEST["to"];
$sign=md5($time.'-'.$sk);

echo file_get_contents('http://possibility.sinaapp.com/sendcms?ak='.$ak.'&t='.$time.'&sign='.$sign.'&msg='.$msg.'&to='.$to);
?>