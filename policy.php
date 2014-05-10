<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
<title>政策法规</title>
</head>

<body>
<?php
	include ("mysql_connect.php");			
	$id_policy = array("0","1","2","3");
	$title_policy = array("","","","");
	$mainbody_policy = array("","","","");
	
	$i = 0;
	$res = mysql_query("SELECT * FROM policy order by id desc limit 4");
	while($r = mysql_fetch_array($res))
	{
		$id_policy[$i] = $r['id'];
		$title_policy[$i] = $r['title'];
		$mainbody_policy[$i] = $r['mainbody'];
		$i++;
	}
?>
<div data-role="page" data-add-back-btn="true" data-back-btn-text="返回">
  <div data-role="header" data-position="fixed">
    <h1>计算机学院党支部</h1>
  </div>

  <div data-role="content">
      <center><h2>政策法规</h2></center>
        <ul data-role="listview" data-inset="true">
          <li>
            <a href="<?php echo 'explorerpolicy.php?'.'id='.$id_policy[0];?>">
            <h2><?php echo $title_policy[0]; ?></h2>
            </a>
          </li>
          <li>
            <a href="<?php echo 'explorerpolicy.php?'.'id='.$id_policy[1];?>">
            <h2><?php echo $title_policy[1]; ?></h2>
            </a>
          </li>
          <li>
            <a href="<?php echo 'explorerpolicy.php?'.'id='.$id_policy[2];?>">
            <h2><?php echo $title_policy[2]; ?></h2>
            </a>
          </li>
          <li>
            <a href="<?php echo 'explorerpolicy.php?'.'id='.$id_policy[3];?>">
            <h2><?php echo $title_policy[3]; ?></h2>
            </a>
          </li>
        </ul>
  </div>

  <?php
  	include ("footer.php");
  ?>
</div> 




</body>
</html>

