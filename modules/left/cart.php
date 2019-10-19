<div class="giohang">

<?php session_start();?>
<h1 style="color:#009"> Giỏ hàng </h1><h3 style="float:right"> 
<?php
if(isset($_SESSION['dangnhap'])){
	echo 'Xin chào: '.$_SESSION['dangnhap'];
}
?>
</h3>

<?php
	
	/*session_destroy();*/

if(isset($_GET['add'])&& !empty($_GET['add'])){
		$id=$_GET['add'];
	 @$_SESSION['hang_'.$id]+=1;
	 header('location:index.php?xem=giohang');
		 
	}
	//cộng sp
	if(isset($_GET['them'])){
		$_SESSION['hang_'.$_GET['them']]+=1;
		header('location:index.php?xem=giohang');		
	}
	//trừ sp
	if(isset($_GET['tru'])){
		$_SESSION['hang_'.$_GET['tru']]--;
		header('location:index.php?xem=giohang');		
	}
	//xóa sp
	if(isset($_GET['xoa'])){
		$_SESSION['hang_'.$_GET['xoa']]=0;
		header('location:index.php?xem=giohang');		
	}
		$thanhtien=0;
		$tongtien=0;
		foreach($_SESSION as $name => $value){
		if($value>0){
			if(substr($name,0,5)=='hang_'){
				$id=substr($name,5,strlen($name-5));
				$sql="select * from sanpham where idsanpham='".$id."'";
				$query=mysqli_query($conn,$sql);
				while($dong=mysqli_fetch_array($query)){
					$tongtien=$dong['gia']*$value;
					?>
                    
<table width="698" height="114" border="1" id="bangchinh">
  <tr>
    <td width="157"><img src="<?php echo $dong['anhsanpham']?>"  width="130" height="120" style="padding-left:15px"/></td>
    <td width="525" style="padding:10px;"> 
	<?php echo $dong['tensanpham'].' X '.$value .'('.$dong['gia'].')'.'='.$tongtien.'VND'.'</br></br>
	<a href="index.php?xem=giohang&them='.$id.'"><img src="img/cong.png" width="50" height="50"></a>
	<a href="index.php?xem=giohang&tru='.$id.'"><img src="img/tru.jpg" width="50" height="50"></a>
	<a href="index.php?xem=giohang&xoa='.$id.'"><img src="img/xoa.png" width="50" height="50"></a></br></br></br>';
	?>
    </td>
  </tr>
</table>
<p>
  <?php
				}
			}
			$thanhtien+=$tongtien;
		}
		
	}
	if($thanhtien==0){
		echo 'Giỏ hàng trống';
	}else{
		echo 'Tổng tiền ='.$thanhtien.'VND';
	}
	
	?>
</p>
<div class="thanhtoan">
<p style="float:right"><a href="index.php?xem=thanhtoan">Thanh toán</p>
</div>

</div>