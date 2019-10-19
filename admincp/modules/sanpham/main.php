<?php
	$ac=$_GET['ac'];
	
	if($ac =='them'){
		include('modules/sanpham/them.php');
	}else{
		include('modules/sanpham/sua.php');
	}
	include('modules/sanpham/lietke.php');
?>


