<?php
	include('modules/editor/editor1.php');
?>
<form action="modules/baiviet/xuly.php" method="post" enctype="multipart/form-data">
<div class="left">
<table width="555" border="0" style="font-size:16px; font-family:'Times New Roman', Times, serif">
  <tr>
    <td colspan="2"><div align="center" style="font-size:25px">CHỨC NĂNG THÊM MỚI BÀI VIẾT</div></td>
  </tr>
  <tr>
    <td width="109" height="51">Tên bài viết:</td>
    <td><input type="text" name="tenbaiviet" id="tenbaiviet"></td>
  </tr>
  <tr>
    <td height="44"><p>Ảnh minh họa:</p></td>
    <td><input type="file" name="anhminhhoa"/></td>
  </tr>
  <tr>
    <td height="44">Tóm tắt:</td>
    <td>
    <textarea cols="40" rows="10" name="tomtat"></textarea>
    </td>
  </tr>
  <tr>
    <td height="44">Nội dung:</td>
    <td><textarea cols="40" rows="10" name="noidung"></textarea></td>
  </tr>
  <tr>
    <td height="44">Loại tin:</td>
    <td>
    <?php
		$sql='select * from loaitin';
		$loaitin=mysqli_query($conn,$sql);
	?>
    	<select name="loaitin">
        <?php
		while($dong_loaitin= mysqli_fetch_array	($loaitin)){
		?>
        <option value="<?php echo $dong_loaitin['idloaitin']?>"><?php echo $dong_loaitin['tenloaitin']?></option>
        <?php
        }
        ?>
        </select>
    </td>
  </tr>
  <tr>
    <td height="42">Trạng thái</td>
    <td><select name="trangthai" id="trangthai">
      <option value="Hiển thị" selected="selected">Hiển thị</option>
      <option value="Không hiển thị">Không hiển thị</option>
      </select></td>
  </tr>
  <tr>
    <td height="42">Thứ tự:</td>
    <td>
    	<input type="text" name="thutu" size="20"/>
    </td>
  </tr>
  <tr>
    <td height="55">&nbsp;</td>
    <td><div align="center">
      <input type="submit" name="them" id="them" value="  Thêm   ">
    </div></td>
    </tr>
</table>
</div>
</form>