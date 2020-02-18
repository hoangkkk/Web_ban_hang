<?php session_start();ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thế Giới Công Nghệ</title>
<style>
#khung{ width:1020px; margin:auto;}
#top{width:100%; background-color: #E2E2E2; min-height:100px;}
#menu{width:100%; background-color:; min-height:25px;}
#laptop{width:100%; background-color:;}
#middle{width:100%; background-color:;}
#maytinhbang{width:100%; background-color:;}
#bottom{width:100%; background-color: #C0F; min-height:100px; clear:both;}
.menu{ float:left; text-align:center;}
a:link{
	text-decoration: none;
	font-weight:bold;
	color: #000;
}
a:hover{ color:#F00;}
.sanpham{width:240px; float:left; text-align:center; border:#000 1px solid; min-height:290px; margin:3px;}
#maytinhbang{clear:both;}
.tieude{
	font-size: 24px;
	font-weight: bold;
}
.listpage{clear:both; float:right;}
#sanphamtim{ width:100%;}
#tieude{ width:100%; height:50; background-color:#EBEBEB;}
</style>
</head>

<body>
<div id="khung">
<div id="top">
<p><font color="#FF0000" size="+6">Thế Giới Công Nghệ</font></p>
  <p align="right"><?php if(isset($_SESSION['idUser'])) {echo $_SESSION['hoten'].'<br/>'; echo "<a href='process.php?thoat=1'>Đăng xuất</a>"; }else{?><a href="index.php?id=1">Đăng nhập</a> <a href="index.php?id=2">Đăng kí</a></p><?php }?>
</div>
<div><?php include("menu.php");?></div>

</div>
<div id="middle">
	<?php
	if(isset($_GET['id'])){
		switch($_GET['id']){
			case 1: include("dangnhap.php"); break;
			case 2: include("dangki.php"); break;
			case 3: include("laptop.php"); break;
			case 4: include("tablet.php"); break;
			case 5: include("sanpham_tim.php"); break;
			}
		}
	else include("middle.php");?>
</div>
<div id="bottom">Hoàng Mậu Sơn</div>
</div>
</body>
</html>