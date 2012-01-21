<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
  <script>
  function SubmitForm(event){
    if(document.getElementById("to").value==""){
    	alert("手机号为空");
        event.returnValue=false;
        event.cancelBubble=true;
        return false;
    }
    return true;
  }
  </script>
</head>
<body>
<div>
  <a href="http://www.drophe.com" target="_blank">官方网站</a>
</div>
  
  <hr/><br/><br/>
<a href="upload.php" target="_blank">上传public文件</a><br/>
<a href="get.php" target="_blank">下载public文件</a><br/>
<a href="getinfo.php" target="_blank">获取public文件信息</a><br/>
<a href="delete.php" target="_blank">删除public文件</a><br/>
<a href="upload1.php" target="_blank">上传private文件</a><br/>
<a href="acl.php" target="_blank">设置private文件权限</a><br/>
<a href="get1.php" target="_blank">下载private文件</a><br/>
<a href="getinfo1.php" target="_blank">获取private文件信息</a><br/>
<a href="delete1.php" target="_blank">删除private文件</a><br/>
<div>
-------------------------------------------------------------
</div>
<form action="sendcms.php" method="GET">
手机号<input name="to" id="to" /><br/>
信息内容<textarea name="msg"></textarea><br/>
  <input type="submit" value="发送" onclick="return SubmitForm(event);"/>
  <hr/>
  <div>为了更多人能使用测试账号的资源，请发邮件至drophe.com@gmail.com申请属于你自己的资源，不要在此发送超过两条短信。详情参考www.drophe.com</div>
  <div>下载了C#或PHP测试程序的，请修改其中的ak,sk，不要使用其中带有的测试账号</div>
  <div>使用中遇到问题请反馈至http://www.v2ex.com/t/25331，需要定制什么功能也可以反馈至http://www.v2ex.com/t/25331</div>
</form>
</body>
</html>