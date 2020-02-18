
<div id="tablet">
<?php
	include("connect.php");
	$sltb="select * from sanpham where AnHien=1 and idLoai in (select idLoai from loaisp where idCL={$_GET['idCL']})";
	$kqtb=mysqli_query($link,$sltb);
	$tsp=mysqli_num_rows($kqtb);
	$sd=5;
	$tst=ceil($tsp/$sd);
	if(isset($_GET['page'])) $page=$_GET['page'];
	else $page=1;
	$vt=($page-1)*$sd;
	$kqtb=mysqli_query($link,$sltb."limit $vt,$sd");
	while($dtb=mysqli_fetch_array($kqtb)){
?>
<div class="sanpham">
<div><img src="image/<?php echo $dtb['hinh'];?>" width="200" height="200"/></div>
<div><?php echo $dtb['Tensp'];?></div>
<div><?php echo $dtb ['gia'];?></div>
<div><a href="#">Thêm giỏ hàng</a></div>
</div>
<?php }?>

<div class="listpage">Trang:<?php for($i=1;$i<=$tst;$i++){?><a href="index.php?id=4&idCL=2&page=<?php echo $i;?>"><?php echo $i;?>&nbsp;</a><?php }?></div>


</div>
