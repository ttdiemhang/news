<?php
	

$sql="select * from sanpham where idsanpham=$_GET[id] ";
	$sanpham=mysqli_query($conn,$sql);

?>

<table width="626" border="1" id="bangchinh" style="width:650px; height:auto; border-collapse:collapse;">
  <tr>
    <td height="59" colspan="2"><div style="font-size:25px" align="center"><strong>CHI TIẾT SẢN PHẨM</strong></div></td>
  </tr>
  <tr>
  <?php
				
			$dong= mysqli_fetch_array($sanpham)
	?>
    <td width="434" rowspan="3" style="padding-left:35px"><img src="<?php echo $dong['anhsanpham']?>"  width="400" height="400" /></td>
    
    <td width="200" height="197" style="padding-left:10px">Tên sản phẩm: <?php echo $dong['tensanpham']?></td>
  </tr>
  <tr>
    <td height="95" style="padding-left:10px">Giá sản phẩm:<?php echo $dong['gia']?>VND</td>
  </tr>
  <tr>
    <td height="160" style="padding-left:10px" id="buynow" >
    
    <a href="index.php?xem=giohang&add=<?php echo $dong['idsanpham']?>">
    
    <img src="img/buynow.jpg" width="180" height="180"/></a>
    </div>
    </td>
  </tr>
  <tr>
    <td height="70" colspan="2" style="font-size:25px" align="center"><strong>CHI TIẾT </strong>
    </td>
  </tr>
  <tr>
    <td height="357" colspan="2" style="width:500px; font-size:14px;"><?php echo $dong['chitiet']?></td>
  </tr>
</table>
