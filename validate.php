<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
<title>Validate</title>
</head>

<body>
<?php
		
    include 'mysql_connect.php';	
	$result = mysql_query("SELECT * FROM userinfo");

 	$login_flag = false;
	$user_name = "";

	while($row = mysql_fetch_array($result))
  	{
		if ($row['username'] == $_POST["username"]  &&   $row['password'] == $_POST["password"])
		{
			$user_name = $row['username'];
			$login_flag = true;
		}
  	}
	
	if ($login_flag==true)
	{
		$url = "setMisCookie.php"."?username=".$user_name;
		echo "<script language='javascript' type='text/javascript'>";
		echo "window.location.href='$url'";
		echo "</script>";
	}
	else
	{
		echo "<script language='javascript' type='text/javascript'>";
		echo "alert('用户名或密码错误，请重新登录');";
		echo "window.location.href='login.php'";
		echo "</script>";
	}

	mysql_close($con);
?>
</body>
</html>