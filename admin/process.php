<?php 	include("../connect.php"); ?>
<?php 

	if(isset($_POST['them_CL'])){
		$sl="insert into chungloaisanpham values(Null, '{$_POST['tenCL']}')";
		if(mysqli_query($link,$sl)){
		header("location:index.php?id=cl");
	}
	else echo $sl;
	}
?>
<?php
	if(isset($_POST['capnhat_CL'])){
		$sl="update chungloaisanpham set idCL={$_POST['idCL']}, TenCL='{$_POST['tenCL']}' where idCL={$_POST['idCL']}";
	if(mysqli_query($link,$sl))
		header("location:index.php?id=cl");
	else echo $sl;
	}
?>
<?php
 if(isset($_GET['xoa'])){
	 $sl="Delete from chungloaisanpham where idCL=".$_GET['xoa'];
	 if(mysqli_query($link,$sl))
		header("location:index.php?id=cl");
	else echo $sl;
	 }
?>
<?php if(isset($_POST["Them_lsp"])){
		$sl="insert into loaisp values(Null, '{$_POST['TenLoai']}', {$_POST['Anhien']}, {$_POST['idCL']})";
		if(mysqli_query($link,$sl)){
		header("location:index.php?id=lsp&&chungloaisp={$_POST['idCL']}");
	}
	else echo $sl;
	}
?>
<?php
	if(isset($_POST['Sua_lsp'])){
		$sl="update loaisp set idLoai={$_POST['idLoai']}, tenloai='{$_POST['TenLoai']}', AnHien={$_POST['Anhien']}, idCL={$_POST['idCL']} where idLoai={$_POST['idLoai']}";
	if(mysqli_query($link,$sl))
		header("location:index.php?id=lsp&&chungloaisp={$_POST['idCL']}");
	else echo $sl;
	}
?>
<?php
 if(isset($_GET['Xoa'])){
	 $sl="Delete from loaisp where idLoai=".$_GET['Xoa'];
	 if(mysqli_query($link,$sl))
		header("location:index.php?id=lsp&&chungloaisp={$_GET['idCL']}");
	else echo $sl;
	 }
?>
<?php if(isset($_POST["Them_user"])){
		$ngay=date("Y-m-d",time());
		$sl="insert into user values(Null, '{$_POST['HoTen']}', '{$_POST['users']}', '{$_POST['email']}', '{$_POST['pass']}', '{$ngay}', {$_POST['gioitinh']})";
		if(mysqli_query($link,$sl)){
		header("location:index.php?id=user");
	}
	else echo $sl;
	}
?>
<?php if(isset($_POST["Sua_user"])){
		$ngay=date("Y-m-d",time());
		$sl="update user set idUser={$_POST['idUser']}, Hoten='{$_POST['HoTen']}', username='{$_POST['users']}', email='{$_POST['email']}', ngayDK='{$ngay}', Gioitinh={$_POST['gioitinh']} where idUser={$_POST['idUser']}";

	
		if(mysqli_query($link,$sl)){
		header("location:index.php?id=user");
	}
	else echo $sl;
	}
?>
<?php
 if(isset($_GET['xoaU'])){
	 $sl="Delete from user where idUser=".$_GET['xoaU'];
	 if(mysqli_query($link,$sl))
		header("location:index.php?id=user");
	else echo $sl;
	 }
?>


<?php if(isset($_POST["Them_sp"])){
		$sl="insert into sanpham values({$_POST['loaisp']}, Null, {$_POST['gia']}, '{$_POST['MoTa']}', '{$_POST['tensp']}', '{$_POST['Ghichu']}', {$_POST['AnHien']}, '{$_POST['hinh']}')";
		if(mysqli_query($link,$sl)){
		header("location:index.php?id=sp");
	}
	else echo $sl;
	}
?>
<?php if(isset($_POST["Sua_sp"])){
		$sl="update sanpham set idLoai={$_POST['loaisp']}, idSP={$_POST['idSP']}, gia={$_POST['gia']}, MoTa='{$_POST['MoTa']}', Tensp='{$_POST['tensp']}', ghichu='{$_POST['Ghichu']}', Anhien={$_POST['AnHien']}, hinh='{$_POST['hinh']}' where idSP={$_POST['idSP']}";

	
		if(mysqli_query($link,$sl)){
		header("location:index.php?id=sp&lsp={$_POST['loaisp']}");
	}
	else echo $sl;
	}
?>
<?php
 if(isset($_GET['xoaS'])){
	 $sl="Delete from sanpham where idSP=".$_GET['xoaS'];
	 if(mysqli_query($link,$sl))
		header("location:index.php?id=sp");
	else echo $sl;
	 }
?>
<?php 

	if(isset($_POST['them_KH'])){
		$sl="insert into khachhang values(Null, '{$_POST['TenKH']}', '{$_POST['diachi']}', {$_POST['sdt']}) ";
		if(mysqli_query($link,$sl)){
		header("location:index.php?id=khachhang");
	}
	else echo $sl;
	}
?>
<?php
	if(isset($_POST['Sua_KH'])){
		$sl="update khachhang set MaKH={$_POST['MaKH']}, TenKH='{$_POST['TenKH']}', Diachi='{$_POST['diachi']}', sdt={$_POST['sdt']} where MaKH={$_POST['MaKH']}";
	if(mysqli_query($link,$sl))
		header("location:index.php?id=khachhang");
	else echo $sl;
	}
?>
<?php
 if(isset($_GET['xoaK'])){
	 $sl="Delete from khachhang where MaKH=".$_GET['xoaK'];
	 if(mysqli_query($link,$sl))
		header("location:index.php?id=khachhang");
	else echo $sl;
	 }
?>
<?php
 if(isset($_GET['xoahd'])){
	 $sl="Delete from hoadon where maHD=".$_GET['xoahd'];
	 if(mysqli_query($link,$sl))
		header("location:index.php?id=giohang");
	else echo $sl;
	 }
?>
<?php
 if(isset($_GET['xoact'])){
	 $sl="Delete from chitiethoadon where maHD=".$_GET['xoact'];
	 if(mysqli_query($link,$sl))
		header("location:index.php?id=giohang");
	else echo $sl;
	 }
?>






















