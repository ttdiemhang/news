<?php
	if(isset($_POST['dangky'])){
		$tenkhachhang=$_POST['tenkhachhang'];
		$matkhau=$_POST['matkhau'];
		$email=$_POST['email'];
		$diachi=$_POST['diachi'];
		$dienthoai=$_POST['dienthoai'];
		
		
		$sql_dangky="insert into dangky (tenkhachhang,matkhau,email,diachi,dienthoai) value('$tenkhachhang','$matkhau','$email','$diachi','$dienthoai')";
		$run_query=mysqli_query($conn,$sql_dangky);
		if($run_query){
			header('location:index.php?xem=thongbao');

		}else{
			header('location:index.php?xem=dangky');
					}
	}
?>
<div style="height:1300px" align="center" >
<form action="index.php?xem=dangky" method="post" enctype="multipart/form-data">
<table width="353" border="1" id="bangchinh">
  <tr>
    <td height="58" colspan="2"><div align="center" style="font-size:25px"><strong>Đăng ký thành viên</strong></div></td>
  </tr>
  <tr>
    <td width="123"><div align="center">Tên khách hàng:</div></td>
    <td width="214"><input type="text" name="tenkhachhang" size="30"></td>
  </tr>
  <tr>
    <td><div align="center">Mật khẩu:</div></td>
    <td><input type="password" name="matkhau" size="30"></td>
  </tr>
  <tr>
    <td><div align="center">Email:</div></td>
    <td><input type="text" name="email" size="30"></td>
  </tr>
  <tr>
    <td><div align="center">Địa chỉ:</div></td>
    <td><input type="text" name="diachi" size="30"></td>
  </tr>
  <tr>
    <td><div align="center">Điện thoại:</div></td>
    <td><input type="text" name="dienthoai" size="30"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="dangky" value="Đăng ký">
    </div></td>
  </tr>
</table>
</form>
</div>
