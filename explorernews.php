<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
<title>党建要闻</title>
</head>

<body>
<?php
	include ("mysql_connect.php");			
	$result = mysql_query("SELECT * FROM news");

	$_title = "";
	$_mainbody = "";
	while($row = mysql_fetch_array($result))
	{
		if ($_GET['id']==$row['id'])
		{
			$_title = $row['title'];
			$_mainbody = $row['mainbody'];
		}
	}
?>
<div data-role="page" data-add-back-btn="true" data-back-btn-text="返回">
  <div data-role="header" data-position="fixed">
    <h1>计算机学院党支部</h1>
  </div>

  <div data-role="content">
  <?php
  		echo "<font size='+1'>标题：</font></h1>";
  		echo "<font size='+1'>".$_title."</font>";
		echo '<hr>';
		echo "<br />";
		echo $_mainbody;
		echo "<br />";
  ?>
  </div>

  <?php
  	include ("footer.php");
  ?>
</div> 




</body>
</html>

