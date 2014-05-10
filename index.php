<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
<title>Home</title>
</head>

<body>
<?php
	include ("mysql_connect.php");
?>
<div data-role="page" data-add-back-btn="true" data-back-btn-text="返回">
  <div data-role="header" data-position="fixed">
    <h1>计算机学院党支部</h1>
  </div>

  <div data-role="content">
    <p>这里是主页，放一些介绍性文字</p>
    <p>还没想好放些什么...</p>
  </div>

  <?php
  	include ("footer.php");
  ?>
</div> 


<!--
<div data-role="page" id="news">
  <div data-role="header" data-position="fixed">
    <h1>计算机学院党支部</h1>
  </div>

  <div data-role="content">
    news
  </div>

  <div data-role="footer" data-position="fixed">
      <div data-role="navbar">
          <ul>
            <li><a href="#news" data-icon="plus">党政要闻</a></li>
            <li><a href="#policy" data-icon="minus">政策法规</a></li>
            <li><a href="#" data-icon="delete">在线答题</a></li>
            <li><a href="#me" data-icon="check">我</a></li>
          </ul>
      </div>
  </div>
</div> 


<div data-role="page" id="me">
  <div data-role="header" data-position="fixed">
    <h1>计算机学院党支部</h1>
  </div>

  <div data-role="content">
    me
  </div>

  <div data-role="footer" data-position="fixed">
      <div data-role="navbar">
          <ul>
            <li><a href="#news" data-icon="plus">党政要闻</a></li>
            <li><a href="#policy" data-icon="minus">政策法规</a></li>
            <li><a href="#" data-icon="delete">在线答题</a></li>
            <li><a href="#me" data-icon="check">我</a></li>
          </ul>
      </div>
  </div>
</div> 
-->



</body>
</html>

