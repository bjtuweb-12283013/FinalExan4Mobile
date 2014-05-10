<?php 
if (isset($_COOKIE["cit_username"]))
{
	//setcookie("cit_username", $_GET["username"], time()+3600);
}
else
{
	$url = "login.php";
	echo "<script language='javascript' type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
<title>我</title>
</head>

<body>
<div data-role="page" data-add-back-btn="true" data-back-btn-text="返回">
  <div data-role="header" data-position="fixed">
    <h1>计算机学院党支部</h1>
    <a href="login.php" data-role="button" class="ui-btn-right" data-icon="info">登录</a>
  </div>

  <div data-role="content">
  	<?php
		include 'mysql_connect.php';		
		$_username = $_COOKIE["cit_username"];						
		$result = mysql_query("SELECT * FROM userinfo WHERE username='$_username'");
		$row = mysql_fetch_array($result);
	?>
 
 	    <div class="panel panel-primary">
  			<div class="panel-heading">
    			<h3 class="panel-title"><span class="glyphicon glyphicon-info-sign"></span> 基本信息</h3>
  			</div>
  			<div class="panel-body">
    			姓名 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['name'];?><br/>
				班级 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['class'];?><br/>
                政治面貌 &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['political_status'];?><br/>
                入党日期 &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['pre_conversion_date'];?><br/>
                转正日期 &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['conversion_date'];?><br/>
  			</div>
		</div>
        
        <div class="panel panel-success">
  			<div class="panel-heading">
    			<h3 class="panel-title"><span class="glyphicon glyphicon-tasks"></span> 递交材料</h3>
  			</div>
  			<div class="panel-body">
    			<p class="text-info">入党申请书 <?php if($row['pre_conversion_application']=='yes') echo "已交"; else echo "未交" ?></p>
				<p class="text-danger">第一季度思想汇报 <?php if($row['first_report']=='yes') echo "已交"; else echo "未交" ?></p>
                <p class="text-primary">第二季度思想汇报 <?php if($row['second_report']=='yes') echo "已交"; else echo "未交" ?></p>
                <p class="text-success">第三季度思想汇报 <?php if($row['third_report']=='yes') echo "已交"; else echo "未交" ?></p>
                <p class="text-warning">第四季度思想汇报 <?php if($row['fourth_report']=='yes') echo "已交"; else echo "未交" ?></p>
                <p class="text-muted">转正申请书 <?php if($row['conversion_application']=='yes') echo "已交"; else echo "未交" ?></p>
  			</div>
		</div>
        
        <div class="panel panel-primary">
  			<div class="panel-heading">
    			<h3 class="panel-title"><span class="glyphicon glyphicon-info-sign"></span> 在线考试记录</h3>
  			</div>
  			<div class="panel-body">
    			<p class="text-primary">4月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($row['apr_score']==0) echo "未做"; else echo $row['apr_score']."/30";?></p>
				<p class="text-primary">5月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($row['may_score']==0) echo "未做"; else echo $row['may_score']."/30";?></p>
                <p class="text-primary">6月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($row['jun_score']==0) echo "未做"; else echo $row['jun_score']."/30";?></p>
                <p class="text-primary">7月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($row['jul_score']==0) echo "未做"; else echo $row['jul_score']."/30";?></p>
                <p class="text-primary">8月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($row['aug_score']==0) echo "未做"; else echo $row['aug_score']."/30";?></p>
                <p class="text-primary">9月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($row['sep_score']==0) echo "未做"; else echo $row['sep_score']."/30";?></p>
                <p class="text-primary">10月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($row['oct_score']==0) echo "未做"; else echo $row['oct_score']."/30";?></p>
                <p class="text-primary">11月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($row['nov_score']==0) echo "未做"; else echo $row['nov_score']."/30";?></p>
                <p class="text-primary">12月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($row['dec_score']==0) echo "未做"; else echo $row['dec_score']."/30";?></p>
  			</div>
		</div>
 

  </div>

  <?php
  	include ("footer.php");
  ?>
</div> 




</body>
</html>

