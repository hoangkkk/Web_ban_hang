<?php session_start(); ob_start();
include("connect.php");?>
<?php 
//xử lý đăng nhập
if(isset($_POST["dangnhap"])){
	$sl="select* from user where username='{$_POST['username']}' and Password='{$_POST['pass']}'";
	$kq=mysqli_query($link,$sl);
	if(mysqli_num_rows($kq)>0)
	{
		$d=mysqli_fetch_array($kq);
		//Tao session luu tru:
		$_SESSION['hoten']=$d['Hoten'];
		$_SESSION['idUser']=$d['idUser'];
		header("location:index.php");
	}
	else header("location:dangnhap.php");
}
?>
<?php 
//Xu ly thoat:
if(isset($_GET['thoat']))
{
	unset($_SESSION['hoten']);
	unset($_SESSION['idUser']);
	
	header("location:dangnhap.php");
}
?>
<?php
if(isset($_POST["dangki"])&&$_POST["users"]&&$_POST["name"]){
	$ngay=date("Y-m-d",time());
	$sl="insert into user values(Null, '{$_POST['name']}', '{$_POST['users']}', '{$_POST['email']}', '{$_POST['pass']}', '$ngay', {$_POST['radio']})";
	if(mysqli_query($link,$sl)){
		//Tao session luu tru:
		header("location:dangnhap.php");
	}
	else echo $sl;
	}
	else header("location:index.php?id=2");
	?>
	
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    