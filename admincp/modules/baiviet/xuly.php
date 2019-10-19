<?php
	include("../config.php");
	$tenbaiviet = $_POST["tenbaiviet"];
	$tomtat = $_POST["tomtat"];
	$noidung = $_POST["noidung"];
	$thutu = $_POST["thutu"];
	$loaitin = $_POST["loaitin"];
	$trangthai = $_POST["trangthai"];
	
	if(isset($_POST["them"])){
		//Thực hiện thêm dữ liệu vào bài viết
		$tenanh = $_FILES["anhminhhoa"]["name"];//Lấy tên của ảnh được chọn
		if($tenanh!=""){
			$time = date("Ymdhis");
			$tenanh = $time . $tenanh;
			$dich = "../../../uploads/" . $tenanh;//Định nghĩa đường dẫn tới thư mục chứa ảnh
			
			copy($_FILES["anhminhhoa"]["tmp_name"],$dich);
			$dich = substr($dich,9);
		}
			$sql = "insert into baiviet(tenbaiviet, anhminhhoa, tomtat, noidung, idloaitin, thutu, trangthai) values('$tenbaiviet','$dich','$tomtat','$noidung','$loaitin','$thutu','$trangthai')";
			mysqli_query($conn,$sql);
			header("location: ../../index.php?quanly=baiviet&ac=them");		
		
	}else if(isset($_POST["sua"])){
		//Thực hiện sửa dữ liệu bài viết được chọn
		$tenanh = $_FILES["anhminhhoa"]["name"];//Lấy tên của ảnh được chọn
		if($tenanh!=""){
			$time = date("Ymdhis");
			$tenanh = $time . $tenanh;
			$dich = "../../../uploads/" . $tenanh;//Định nghĩa đường dẫn tới thư mục chứa ảnh
			
			copy($_FILES["anhminhhoa"]["tmp_name"],$dich);
			$dich = substr($dich,9);
			
			$sql = "select anhminhhoa from baiviet where idbaiviet = '$_GET[id]'";
			$baiviet = mysqli_query($conn,$sql);
			$dong = mysqli_fetch_array($baiviet);
			//Xoa một tệp tin sử dụng lệnh php
		//	echo $dong["anhminhhoa"];
			if($dong["anhminhhoa"]!=""){
				unlink("../../../".$dong["anhminhhoa"]);
			}		
				
			$sql = "UPDATE baiviet SET tenbaiviet='$tenbaiviet',anhminhhoa='$dich',tomtat='$tomtat',noidung='$noidung',trangthai='$trangthai',idloaitin='$loaitin',thutu='$thutu' WHERE idbaiviet = '$_GET[id]'";
		//	echo $sql;
			
		}else{
			$sql = "UPDATE baiviet SET tenbaiviet='$tenbaiviet',tomtat='$tomtat',noidung='$noidung',trangthai='$trangthai',idloaitin='$loaitin',thutu='$thutu' WHERE idbaiviet = '$_GET[id]'";			
		}
		mysqli_query($conn,$sql);
		header("location: ../../index.php?quanly=baiviet&ac=sua&id=".$_GET['id']);
		
	}else{
		//Thực hiện xóa
			$sql = "select anhminhhoa from baiviet where idbaiviet = '$_GET[id]'";
			$baiviet = mysqli_query($conn,$sql);
			$dong = mysqli_fetch_array($conn, $baiviet);
			//Xoa một tệp tin sử dụng lệnh php
		//	echo $dong["anhminhhoa"];
			if($dong["anhminhhoa"]!=""){
				unlink("../../../".$dong["anhminhhoa"]);
			}			
		$sql = "DELETE FROM baiviet where idbaiviet='$_GET[id]'";

		mysqli_query($conn,$sql);
		header("location: ../../index.php?quanly=baiviet&ac=them");
	}
	
?>