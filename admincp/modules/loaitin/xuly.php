<?php
	include('../config.php');
	$tenloaitin=$_POST['tenloaitin'];
	$thutu=$_POST['thutu'];
	$trangthai=$_POST['trangthai'];
	$id=$_GET["id"];
	
	if(isset($_POST['them'])){

$sql = "INSERT INTO loaitin (tenloaitin, thutu, trangthai)
VALUES ('$tenloaitin', '$thutu', '$trangthai')";

mysqli_query($conn, $sql);
header('location:../../index.php?quanly=loaitin&ac=them');
	}
	else if(isset($_POST['sua'])){
		$sql="update loaitin set tenloaitin='$tenloaitin',thutu='$thutu',trangthai='$trangthai' where idloaitin='$id'";

mysqli_query($conn, $sql);
header('location:../../index.php?quanly=loaitin&ac=sua&id='.$id);
	}else{
		$sql="delete from loaitin where idloaitin = '$id'";
		mysqli_query($conn, $sql);
	
header('location:../../index.php?quanly=loaitin&ac=them');

	}
?>