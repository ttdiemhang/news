<?php
	include('modules/editor/editor1.php');
?>
<form action="modules/sanpham/xuly.php" method="post" enctype="multipart/form-data">
<div class="left">
<table width="555" border="0" style="font-size:16px; font-family:'Times New Roman', Times, serif">
  <tr>
    <td colspan="2"><div align="center" style="font-size:25px">CHỨC NĂNG THÊM MỚI SẢN PHẨM</div></td>
  </tr>
  <tr>
    <td height="44"><p>Ảnh sản phẩm:</p></td>
    <td><input type="file" name="anhsanpham"/></td>
  </tr>
  <tr>
    <td width="109" height="51">Tên sản phẩm:</td>
    <td><input type="text" name="tensanpham" id="tensanpham" /></td>
  </tr>
  <tr>
    <td height="44">Giá:</td>
    <td><input type="text" name="gia" id="gia" /></td>
    </tr>
  <tr>
    <td height="44">Chi tiết:</td>
    <td><textarea cols="40" rows="10" name="chitiet"></textarea></td>
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