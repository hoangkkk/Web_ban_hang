<?php if(isset($_POST['find'])){?>
<div id="tablet">
<?php
	include("connect.php");
	$kt=$_POST["find"];
	$sl="select* from sanpham where Tensp like '%$kt%'";
	$kq=mysqli_query($link,$sl);
	while($d=mysqli_fetch_array($kq)){
?>
<div class="sanpham">
<div><img src="image/<?php echo $d['hinh'];?>" width="200" height="200"/></div>
<div><?php echo $d['Tensp'];?></div>
<div><?php echo $d['gia'];?></div>
<div><a href="#">Thêm giỏ hàng</a></div>
</div>
<?php }?>

</div>
<?php }?>