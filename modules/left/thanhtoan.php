<?php

	
	session_start();
	
		if(isset($_POST['dangnhap'])){
		$email=$_POST['email'];
		$matkhau=$_POST['matkhau'];
		$sql="select * from dangky where email='$email' and matkhau='$matkhau' limit 1";
		$query=mysqli_query($conn,$sql);
		$nums=mysqli_num_rows($query);
		if($nums>0){
			$_SESSION['dangnhap']=$email;
			header('location:index.php?xem=giohang');
			
			
			}else{
			echo '<script>alert("Email hoặc mật khẩu không đúng. Vui lòng nhập lại.")</script>';
			
			
				
		}
	}
	
	
?>
<div style="height:1300px" align="center">
<form action="" method="post" enctype="multipart/form-data" >
<table width="306" border="1" id="bangchinh">
  <tr>
    <td height="64" colspan="2"><div align="center" style="font-size:25px;"><strong>Đăng nhập thành viên</strong></div></td>
  </tr>
  <tr>
    <td width="103"><div align="center">Email:</div></td>
    <td width="187"><input type="text" name="email"  size="30	"></td>
  </tr>
  <tr>
    <td><div align="center">Mật khẩu:</div></td>
    <td><input type="password" name="matkhau" size="30"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="dangnhap" value="Đăngnhập">
    </div></td>
  </tr>
</table>
</form></div>
