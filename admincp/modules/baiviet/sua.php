<?php
	$sql = "select * from baiviet where idbaiviet = '$_GET[id]'";
	
	$baiviet = mysqli_query($conn, $sql);
	
	$dong = mysqli_fetch_array($baiviet);
?>

<?php
	include("modules/editor/editor1.php");
?>
<form action="modules/baiviet/xuly.php?id=<?php echo $dong["idbaiviet"] ?>" method="post" enctype="multipart/form-data">
<div class="left">
<table width="571" border="0" id="bang">
  <tr>
    <td height="44" colspan="2"><div  align="center" ><p style="font-size:25px; font-style:inherit">CHỨC NĂNG SỬA BÀI VIẾT</div></td>
  </tr>
  <tr>
    <td width="108" height="38">Tên bài viết:</td>
    <td><input type="text" name="tenbaiviet" id="tenbaiviet" value="<?php echo $dong["tenbaiviet"]?>" size="50"></td>
  </tr>
  <tr>
    <td height="37">Ảnh minh họa:</td>
    <td>
    	<input type="file" name="anhminhhoa" />
        <img src="../<?php echo $dong["anhminhhoa"]?>" width="50"/>
    </td>
  </tr>
  <tr>
    <td height="37">Tóm tắt:</td>
    <td>
    	<textarea cols="40" rows="10" name="tomtat">
        	<?php echo $dong["tomtat"]?>
        </textarea>
    </td>
  </tr>
  <tr>
    <td height="37">Nội dung:</td>
    <td>
    	<textarea cols="40" rows="10" name="noidung">
        <?php echo $dong["noidung"]?>
        </textarea>
    
    </td>
  </tr>
  <tr>
    <td height="37">Loại tin:</td>
    <td>
    <?php
		$sql = "select * from loaitin";
		$loaitin = mysqli_query($conn, $sql);
	?>
    	<select name="loaitin">
        <?php
			while($dong_loaitin = mysqli_fetch_array($loaitin)){
				
			if($dong_loaitin["idloaitin"] == $dong["idloaitin"]	){
		?>
        		<option value="<? echo $dong_loaitin["idloaitin"]?>" selected="selected"><?php echo $dong_loaitin["tenloaitin"]?></option>
            <?php
			}else{ ?>
            	<option value="<?php echo $dong_loaitin["idloaitin"]?>" ><?php echo $dong_loaitin["tenloaitin"]?></option>
            <?php
			}
			}
			?>
        </select>
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