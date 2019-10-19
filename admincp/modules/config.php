<?php
	$tenmaychu='localhost';
	$taikhoan='root';
	$matkhau='';
	$csdl='websitetintuc';
	$conn = mysqli_connect($tenmaychu,$taikhoan,$matkhau,$csdl);
	
/*	$conn =new mysqli($tenmaychu,$taikhoan,$matkhau,$csdl);
*/	
	mysqli_query($conn, $csdl);
	

?>