<?php
	include("../config.php");
	$tensanpham = $_POST["tensanpham"];
	$gia = $_POST["gia"];
	$chitiet = $_POST["chitiet"];
	$thutu = $_POST["thutu"];
	$trangthai = $_POST["trangthai"];
	
	if(isset($_POST["them"])){
		//Thực hiện thêm dữ liệu vào bài viết
		$tenanh = $_FILES["anhsanpham"]["name"];//Lấy tên của ảnh được chọn
		if($tenanh!=""){
			$time = date("Ymdhis");
			$tenanh = $time . $tenanh;
			$dich = "../../../uploads/" . $tenanh;//Định nghĩa đường dẫn tới thư mục chứa ảnh
			
			copy($_FILES["anhsanpham"]["tmp_name"],$dich);
			$dich = substr($dich,9);
		}
			$sql = "insert into sanpham(tensanpham, anhsanpham, gia, chitiet, thutu, trangthai) values('$tensanpham','$dich','$gia','$chitiet','$thutu','$trangthai')";
			mysqli_query($conn,$sql);
			header("location: ../../index.php?quanly=sanpham&ac=them");		
		
	}else if(isset($_POST["sua"])){
		//Thực hiện sửa dữ liệu bài viết được chọn
		$tenanh = $_FILES["anhsanpham"]["name"];//Lấy tên của ảnh được chọn
		if($tenanh!=""){
			$time = date("Ymdhis");
			$tenanh = $time . $tenanh;
			$dich = "../../../uploads/" . $tenanh;//Định nghĩa đường dẫn tới thư mục chứa ảnh
			
			copy($_FILES["anhsanpham"]["tmp_name"],$dich);
			$dich = substr($dich,9);
			
			$sql = "select anhsanpham from sanpham where idsanpham = '$_GET[id]'";
			$sanpham = mysqli_query($conn,$sql);
			$dong = mysqli_fetch_array($sanpham);
			//Xoa một tệp tin sử dụng lệnh php
		//	echo $dong["anhsanpham"];
			if($dong["anhsanpham"]!=""){
				unlink("../../../".$dong["anhsanpham"]);
			}		
				
			$sql = "UPDATE sanpham SET tensanpham='$tensanpham',anhsanpham='$dich',gia='$gia',chitiet='$chitiet',trangthai='$trangthai',thutu='$thutu' WHERE idsanpham = '$_GET[id]'";
		//	echo $sql;
			
		}else{
			$sql = "UPDATE sanpham SET tensanpham='$tensanpham',gia='$gia',chitiet='$chitiet',trangthai='$trangthai',thutu='$thutu' WHERE idsanpham = '$_GET[id]'";			
		}
		mysqli_query($conn,$sql);
		header("location: ../../index.php?quanly=sanpham&ac=them");
		
	}else{
		//Thực hiện xóa
			$sql = "select anhsanpham from sanpham where idsanpham = '$_GET[id]'";
			$sanpham = mysqli_query($conn,$sql);
			$dong = mysqli_fetch_array($conn, $sanpham);
			//Xoa một tệp tin sử dụng lệnh php
		//	echo $dong["anhsanpham"];
			if($dong["anhsanpham"]!=""){
				unlink("../../../".$dong["anhsanpham"]);
			}			
		$sql = "DELETE FROM sanpham where idsanpham='$_GET[id]'";

		mysqli_query($conn,$sql);
		header("location: ../../index.php?quanly=sanpham&ac=them");
	}
	
?>