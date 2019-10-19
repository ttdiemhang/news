<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/css.css"/>
<link rel="stylesheet" type="text/css" href="css/bang1.css"/>
<title>Tin Tức</title>
</head>

<body>

<div id="tangchu" style="float:left;overflow: hidden;
  position: fixed;
  top: 0;
  width: 10%; padding-top:250px;">
  <a href="index.php">
<img src="img/home3.jpg" width="100" height="100">	
</a>
    
  </div>
<div id="wapper">


   <?php 
   include("admincp/modules/config.php");
   	
   include("modules/header.php");
   include("modules/menu.php");
	include("modules/content.php");
	include("modules/footer.php");
	?>
	

</div>
</body>
</html>