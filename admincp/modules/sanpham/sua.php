<?php
	$sql = "select * from sanpham where idsanpham = '$_GET[id]'";
	
	$sanpham = mysqli_query($conn, $sql);
	
	$dong = mysqli_fetch_array($sanpham);
?>

<?php
	include("modules/editor/editor1.php");
?>
<form action="modules/sanpham/xuly.php?id=<?php echo $dong["idsanpham"] ?>" method="post" enctype="multipart/form-data">
<div class="left">
<table width="550" border="0" id="bang">
  <tr>
    <td height="44" colspan="2"><div  align="center" ><p style="font-size:25px; font-style:inherit">CHỨC NĂNG SỬA SẢN PHẨM</div></td>
  </tr>
  <tr>
    <td height="37">Ảnh sản phẩm:</td>
    <td>
      <input type="file" name="anhsanpham" />
      <img src="../<?php echo $dong["anhsanpham"]?>" width="50"/>
      </td>
  </tr>
  <tr>
    <td width="108" height="38">Tên sản phẩm:</td>
    <td><input type="text" name="tensanpham" id="tensanpham" value="<?php echo $dong["tensanpham"]?>" size="50" /></td>
  </tr>
  <tr>
    <td height="37">Giá:</td>
    <td><input type="text" name="gia" size="20" value="<?php echo $dong["gia"]?>" /></td>
  </tr>
  <tr>
    <td height="37">Chi tiết:</td>
    <td>
    	<textarea cols="40" rows="10" name="chitiet">
        <?php echo $dong["chitiet"]?>
        </textarea>
    
    </td>
  </tr>
  <tr>
    <td height="37">Trạng thái</td>
    <td>
      <select name="trangthai">
        <?php if($dong["trangthai"] =="Hiển thị"){?>
        <option value="Hiển thị" selected="selected">Hiển thị</option>
        <option value="Không hiển thị">Không hiển thị</option>            
        <?php }else{?>
        <option value="Hiển thị">Hiển thị</option>
        <option value="Không hiển thị"  selected="selected">Không hiển thị</option>                 
        <?php } ?>
        </select>
      </td>
  </tr>
  <tr>
    <td height="37">Thứ tự</td>
    <td>
    
    	<input type="text" name="thutu" size="20" value="<?php echo $dong["thutu"]?>" />
        
    </td>
  </tr>
  <tr>
    <td height="38">&nbsp;</td>
    <td><div align="center">
      <input type="submit" name="sua" id="sua" value="  Cập nhật  ">
    </div></td>
    </tr>
</table>
</div>
</form>