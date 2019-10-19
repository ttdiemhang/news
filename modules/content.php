 <div id="content">
 	<div id="left">
    	<?php 
		
		if(isset($_GET['xem'])){
				$tam=$_GET['xem'];
		}else{
				$tam='';
		}if($tam=='baiviet'){
			include('modules/left/chitiettin.php');
		}elseif($tam=='loaitin'){
		include('modules/left/chitietloaitin.php')
;
		}elseif($tam=='quangcao'){
			include('modules/left/chitietqc.php');
		}elseif($tam=='themquangcao'){
		include('modules/left/themquangcao.php');
		}elseif($tam=='trang'){
		include('modules/left/themquangcao.php')
;
		}elseif(isset($_POST['search'])){
			include('modules/left/timkiem.php');
		}elseif($tam=='giohang'){
		include('modules/left/cart.php')
;
		}elseif($tam=='dangky'){
			include('modules/left/dangky.php');
			}elseif($tam=='thanhtoan'){
		include('modules/left/thanhtoan.php')
;
		
		}elseif($tam=='thongbao'){
			include('modules/left/thongbao.php');
		
		}elseif($tam=='chitiettin'){
			include('modules/left/chitiettin.php');
		}else{
			include("modules/left/tinmoi.php");
		 	include("modules/left/boxtin.php");
			include("modules/left/video.php");
			
				}
		?>
       </div>
       <div id="right">
        <?php include("modules/right/tincapnhat.php");
		
		?>
         </div>
        <div id="rightbt">
       	 <?php include("modules/right/quangcao.php");
		
			?>

        
       </div>
       <div class="xoa"></div>
      
    </div>
    