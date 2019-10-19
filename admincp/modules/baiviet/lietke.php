<?php
	$sql = "select idbaiviet, tenbaiviet, anhminhhoa, tenloaitin, baiviet.trangthai, baiviet.thutu from baiviet, loaitin where baiviet.idloaitin = loaitin.idloaitin order by idbaiviet desc";
	
	$baiviet = mysqli_query($conn, $sql);
?>
<div class="right" style="float:left">
<table width="570" border="1" style="font-family:'Times New Roman', Times, serif; font-size:14px" id="customers">
  <tr>
    <td width="35" height="42"><div align="center"><strong>STT</strong></div></td>
    <td width="102"><strong>Tên bài viết</strong></td>
    <td width="97"><strong>Ảnh minh họa</strong></td>
    <td width="79"><strong>Loại tin</strong></td>
    <td width="86"><strong>Trạng thái</strong></td>
    <td width="47"><strong>Thứ tự</strong></td>
    <td colspan="2"><strong>Quản lý</strong></td>
  </tr>
  
 <?php
 	$i = 1;
 	while($dong = mysqli_fetch_array($baiviet)){
 	
 ?> 


 <tr>
    <td height="28"><div align="center"><?php  echo $i?></div></td>
    <td><?php  echo $dong["tenbaiviet"]?></td>
    <td><img src="../<?php  echo $dong["anhminhhoa"]?>" width="60" /></td>
    <td><?php  echo $dong["tenloaitin"]?></td>
    <td><?php  echo $dong["trangthai"]?></td>
    <td><?php  echo $dong["thutu"]?></td>
    <td width="37">
    	<a href="index.php?quanly=baiviet&ac=sua&id=<?php  echo $dong["idbaiviet"]?>">
    		<img src="img/sua.jpg" width="30px" height="30px"/>
        </a>
        
    </td>
    <td width="35">
    	<a href="modules/baiviet/xuly.php?xoa=baiviet&id=<?php  echo $dong["idbaiviet"]?>">
    		<img src="img/xoa.jpg" width="30px" height="30px"/>
        </a>
    </td>
  </tr>
<?php 	
	
	
	$i++;
	}
?>  
</table>
</div>