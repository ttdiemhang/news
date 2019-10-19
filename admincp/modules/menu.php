<?php
	if(isset($_GET['ac'])&&$_GET['ac']=='dangxuat'){
		unset($_SESSION['dangnhap']);
		header('location:login.php');
	}
?>
<div id="menu">
	<a href="index.php?quanly=loaitin&ac=them">
	<div id="boxchucnang">
    	<img style="width:40px" height="40px" src="img/ql1.png" >
        <p> Quản lý loại tin</p>
    </div>
    </a>
    <a href="index.php?quanly=baiviet&ac=them">
    <div id="boxchucnang">
    	<img style="width:40px" height="40px" src="img/ql2.png" >
        <p> Quản lý bài viết</p>
    </div>	
    </a>
    <a href="index.php?quanly=sanpham&ac=them">
    <div id="boxchucnang">
    	<img style="width:40px" height="40px" src="img/ql3.png" >
        <p> Quản lý quảng cáo</p>
    </div>	
    </a>
    <a href="index.php?quanly=doimatkhau">
    <div id="boxchucnang">
    	<img style="width:60px" height="50px" src="img/matkhau.png" >
        <p> Đổi mật khẩu</p>
    </div>
    </a>
    
    <a href="index.php?ac=dangxuat">
    <div id="boxchucnang">
    	<img style="width:40px" height="40px" src="img/ql6.jpg" >
        <p> Đăng xuất</p>
    </div>
    </a>	

</div>