<div id="content" >

	<?php 
	if(isset($_GET['quanly'])){
			$tam=$_GET['quanly'];
		}else{
			$tam=''; }
	if($tam=='loaitin'){
		include('modules/loaitin/main.php');
		}if($tam=='baiviet'){
			include('modules/baiviet/main.php');
		}if($tam=='sanpham'){
			include('modules/sanpham/main.php');
		}if($tam=='dangky'){
			include('modules/taikhoan/dangky.php');
		}if($tam=='thongbao'){
			include('modules/taikhoan/thongbao.php');
		}if($tam=='doimatkhau'){
			include('doimatkhau.php');
		}
	?>
</div>





