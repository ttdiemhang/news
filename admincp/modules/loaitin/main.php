<?php
	$ac=$_GET['ac'];
	
	if($ac =='them'){
		include('modules/loaitin/them.php');
	}else{
		include('modules/loaitin/sua.php');
	}
	include('modules/loaitin/lietke.php');
?>