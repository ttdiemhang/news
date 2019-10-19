<link rel="stylesheet" type="text/css" href="css/bang.css"/>
<style>
body{
	background-image:url(../img/nen.jpg);}</style>
<?php
	include('modules/config.php');
	session_start();
	
		if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="select * from admin where username='$username' and password='$password' limit 1";
		$query=mysqli_query($conn,$sql);
		$nums=mysqli_num_rows($query);
		if($nums>0){
			$_SESSION['dangnhap']=$username;
			header('location:index.php');
		}else{
			echo '<script>alert("Tài khoản hoặc mật khẩu không đúng. Vui lòng nhập lại.")</script>';
		}
	}
	
?>

<form action="" method="post">
<center><table width="300" border="1" style="border:none; margin:100px" id="bang" >
  <tr>
    <td height="47" colspan="2"><div align="center"  style="font-size:25px"><strong>Đăng nhập</strong></div></td>
  </tr>
  <tr>
    <td width="84" height="28"><div align="center" style="font-size:17px">Tài khoản:</div></td>
    <td width="198"><input type="text" name="username" size="20"></td>
  </tr>
  <tr>
    <td><div align="center" style="font-size:17px">Mật khẩu</div></td>
    <td><input type="password" name="password" size="20"></td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="center" >
        <input type="submit" name="login" id="button" value="Đăng nhập">
      </div>
  </td>
  </tr>
</table></center></form>
