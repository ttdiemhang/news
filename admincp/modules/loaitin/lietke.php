<?php
	
$sql='select * from loaitin order by thutu desc';
$loaitin =mysqli_query($conn, $sql);
?>
<div class="right">
<table width="435" border="1" style="font-family:'Times New Roman', Times, serif; font-size:14px" id="customers">
  <tr>
    <td width="60" height="52"><div align="center"><strong>STT</strong></div></td>
    <td width="98"><div align="left"><strong>Tên loại tin</strong></div></td>
    <td width="103"><div align="left"><strong>Trạng thái</strong></div></td>
    <td width="72"><div align="center"><strong>Thứ tự</strong></div></td>
    <td colspan="2"><div align="left"><strong>Quản lý</strong></div></td>
  </tr>
  <?php $i=1; 
  while($dong = mysqli_fetch_array	($loaitin)){
  ?>
  <tr>
    <td height="31"><div align="center"><?php echo $i ?>
    </div></td>
    <td><div align="left"><?php echo $dong['tenloaitin'] ?></div></td>
    <td><div align="left"><?php echo $dong['trangthai']?></div></td>
    <td><div align="center"><?php echo $dong['thutu']?></div>
    </td>
    <td width="32"><div align="center"><a href="index.php?quanly=loaitin&ac=sua&id=<?php echo $dong['idloaitin']?>"><img src="img/sua.jpg" width="30px" height="30px"/></a>
    </div></td>
    <td width="30"><div align="center"><a href="modules/loaitin/xuly.php?xoa=loaitin&id=<?php echo $dong['idloaitin']?>"><img src="img/xoa.jpg" width="30px" height="30px"/></a> </div></td>
  </tr>
  <?php
 	$i++;
  }
  ?>
</table>
</div>
