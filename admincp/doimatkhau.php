
<?php
if(isset($_POST['doimatkhau'])){
	$taikhoan=$_POST['tentaikhoan'];
	$matkhaucu=$_POST['matkhaucu'];
	$matkhaumoi=$_POST['matkhaumoi'];
	
	$sql="select *from admin where username='taikhoan' and password='matkhaucu' limit 1";
	$query=mysqli_query($conn,$sql);
	$nums=mysqli_num_rows($query);
	if($nums>0){
		echo '<script>alert("Sai tài khoản hoặc mật khẩu. Vui lòng nhập lại!")</script>';
	}else{
		$sql_capnhat="update admin set password='$matkhaumoi'";
		$query=mysqli_query($conn,$sql_capnhat);
		echo '<script>alert("Bạn đã thay đổi mật khẩu admin thành công!")</script>';
	}
}


?>
<div align="center">
<form action="" method="post" >
<table width="329" border="1" id="bang">
  <tr>
    <td height="63" colspan="2"><div align="center" style="font-size:25px">Trang đổi mật khẩu admin</div></td>
  </tr>
  <tr>
    <td width="109"> <div align="center">Tên  tài khoản:</div></td>
    <td width="204" ><input type="text" name="tentaikhoan" /></td>
  </tr>
  <tr>
    <td><div align="center">Mật khẩu cũ:</div></td>
    <td><input type="password" name="matkhaucu"/></td>
  </tr>
  <tr>
    <td><div align="center">Mật khẩu mới:</div></td>
    <td><input type="password" name="matkhaumoi"/></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="doimatkhau" value="Đổi mật khẩu" />
    </div></td>
  </tr>
</table>
</form>
</div>
