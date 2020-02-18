<?php		include("../connect.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trang Quản Trị</title>
<style>
#container{width:1020px; margin:auto;}
#top{width:100%; height:100px; border:#333 solid 1px; background-color:#F3F;}
#menu{width:200px; float:left; font-weight:bold; border:#333 solid 1px;}
#right{width:815px; float:right; border:#333 solid 1px; text-align:center; margin:auto;}
#footer{width:100%; height:100px; clear:both; border:#333 solid 1px; font-weight:bold; color:#909; background-color:#FFC; font-size:18px; margin-top:10px;}
.trangtri{ color: #000; font-weight:bold;}
a{
	text-decoration: none;
	font-size: 18px;
}
</style>
</head>

<body>
<div id="container">
<div id="top"><h1><i><span class="trangtri">Trang Quản trị website bán Laptop</span></i></h1></div>
<div>
<div id="menu">
  <p align="center"><a href="index.php">Trang Chủ</a></p>
  <p align="center"><a href="index.php?id=cl">Chủng loại sản phẩm</a></p>
  <p align="center"><a href="index.php?id=lsp">Loại Sản Phẩm</a></p>
  <p align="center"><a href="index.php?id=khachhang">Khách Hàng</a></p>
  <p align="center"><a href="index.php?id=giohang">Đơn Hàng</a></p>
  <p align="center"><a href="index.php?id=sp">Sản Phẩm</a></p>
  <p align="center"><a href="index.php?id=user">User</a></p>
</div>
<div id="right">
<?php if(isset($_GET["id"])){
		switch($_GET["id"]){
			case 'cl': include("chungloaisp.php"); break;
			case 'lsp': include("loaisp.php"); break;
			case 'sp': include("sanpham.php"); break;
			case 'user': include("user.php"); break;
			case 'them_CL': include("them_CL.php"); break;
			case 'Sua_CL': include("Sua_CL.php"); break;
			case 'Them_lsp': include("Them_lsp.php"); break;
			case 'Sua_lsp': include("Sua_lsp.php"); break;
			case 'them_user': include("Them_user.php"); break;
			case 'Sua_user': include("Sua_user.php"); break;
			case 'Them_sp': include("Them_sp.php"); break;
			case 'Sua_sp': include("Sua_sp.php"); break;
			case 'giohang': include("giohang.php"); break;
			case 'khachhang': include("khachhang.php"); break;
			case 'Them_KH': include("ThemKH.php"); break;
			case 'Sua_KH': include("Sua_KH.php"); break;
			}
	} else include("admin.php");?>
</div>
</div>
<div id="footer">
Địa chỉ: 123 Tô ký,Phường Tân Chánh Hiệp, quận 12, Thành Phố Hồ Chí Minh.<br />
Số điện thoại; 0974-000-111<br />
Email: Lienhe@gmail.com <br />
Chịu trách nhiệm quản lý nội dung: nhóm pro.
</div>
</div>
</body>
</html>







