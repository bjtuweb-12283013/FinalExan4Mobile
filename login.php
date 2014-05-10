<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
<title>登录</title>
</head>

<body>

<div data-role="page" data-add-back-btn="true" data-back-btn-text="返回">
  <div data-role="header" data-position="fixed">
    <h1>计算机学院党支部</h1>
  </div>

  <div data-role="content">
            <center><h1>登录我的MIS系统</h1></center>
			<form method="post" action="validate.php" >
            	用户名
	    		<input type="text" id="username" name="username" placeholder="UserName" />
                密码
        		<input type="password" id="password" name="password" placeholder="Password" />
        		<input type="submit" value="登录" />
        	</form>
  </div>

  <?php
  	include ("footer.php");
  ?>
</div> 




</body>
</html>

