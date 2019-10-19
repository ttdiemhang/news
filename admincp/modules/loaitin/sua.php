<?php
	$sql="select *from loaitin where idloaitin='$_GET[id]'";
	$loaitin =mysqli_query($conn, $sql);
	$dong= mysqli_fetch_array($loaitin);
?>
<form action="modules/loaitin/xuly.php?id<?php echo $dong['idloaitin']?>" method="post">
<div class="left">
<table width="383" border="0">
  <tr>
    <td height="58" colspan="2"><div align="center" style="font-size:25px">CHỨC NĂNG SỬA LOẠI TIN</div></td>
  </tr>
  <tr>
    <td width="94" height="51" style="font-family:'Times New Roman', Times, serif; font-size:17px"><p>Tên loại tin:</p></td>
    <td><input type="text" name="tenloaitin" id="tenloaitin" value="<?php echo $dong['tenloaitin']?>"></td>
  </tr>
  <tr>
    <td height="44"style="font-family:'Times New Roman', Times, serif; font-size:17px"><p>Thứ tự:</p></td>
    <td><input type="text" name="thutu" id="thutu" value="<?php echo $dong['thutu']?>"></td>
  </tr>
  <tr>
    <td height="42"style="font-family:'Times New Roman', Times, serif; font-size:17px">Trạng thái</td>
    <td><select name="trạng thái" id="trạng thái">
    <?php 
	if($dong['trangthai']=="Hiển thị"){
	
	?>
      <option value="Hiển thị" selected="selected">Hiển thị</option>
      <option value="Không hiển thị">Không hiển thị</option>
     <?php
		}else{
	?>
       <option value="Hiển thị" >Hiển thị</option>
      <option value="Không hiển thị" selected="selected">Không hiển thị</option>
    <?php
		}
	?>
    </select></td>
  </tr>
  <tr>
    <td height="55">&nbsp;</td>
    <td><div align="center">
      <input type="submit" name="sua" id="sua" value="  Cập nhật   ">
    </div></td>
    </tr>
</table>
</div>
</form>